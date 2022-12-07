<?php
include "./services/connection.php";

$_SESSION['doc_id'] = 1;
$id = $_SESSION['doc_id'];
?>
<table class="patient-app-table">
    <thead>
        <th>Patient's Name</th>
        <th>Age</th>
        <th>Session Date & Time</th>
        <th>Appointment Date</th>
        <th>Events</th>
    </thead>
    <tbody>
        <?php
        $sql = "call getApprovedAppointments($id)";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td>
                    <?php echo $row['patient_name'] ?>
                </td>
                <td><?php echo $row['age'] ?></td>
                <td><?php echo $row['date_registered'] ?></td>
                <td><?php echo $row['meeting_date'] ?></td>
                <td>
                    <button class="cancel-button"><a class="cancel-link" href="#"><i class="fa fa-trash-o" style="font-size:20px"></i></a></button>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>