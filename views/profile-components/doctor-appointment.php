<?php
    if(isset($_SESSION['id']))
        $id = $_SESSION['id'];
?>
<table class="patient-app-table">
    <thead>
        <th>Doctor's Name</th>
        <th>Appointment Date</th>
        <th>Events</th>
    </thead>
    <tbody>
        <?php
        $sql = "call getApprovedAppointments_Patient($id)";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td>
                    <?php echo $row['doc_name'] ?>
                </td>
                <td><?php echo $row['meeting_date'] ?></td>
                <td>
                    <button class="cancel-button"><a class="cancel-link" href="./services/cancel-process.php?state=cancel&id=<?php echo $row['meeting_id'] ?>"><i class="fa fa-trash-o" style="font-size:20px"></i></a></button>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>