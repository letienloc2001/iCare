<table class="patient-app-table">
    <thead>
        <th>Doctor's Name</th>
        <th>Phone Number</th>
        <th>Address</th>
        <th>Events</th>
    </thead>
    <tbody>
        <?php
        $sql = "select * from doctor";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $address = $row['clinic_number'] . " street " . $row['street'] . ", " . $row['ward'] . ", " . $row['district'] . ", " . $row['city'];
        ?>
        <tr>
            <td>
                <?php echo $row['doc_name'] ?>
            </td>
            <td><?php echo $row['phone_number'] ?></td>
            <td><?php echo $address ?></td>
            <td>
                <button class="cancel-button"><a class="cancel-link" href="#"><i class="fa fa-trash-o" style="font-size:20px"></i></a></button>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>