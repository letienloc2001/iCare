<?php
include "./services/connection.php";
$id = $_SESSION['id'];
?>
<div class="noti-appointment">
    <div class=" title-table">
        Today Appointment
    </div>
    <div class="profile-table today-table">
        <?php
        $cur_date = date("Y-m-d");
        $sql = "call getTodayAppointments($id, '$cur_date')";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) { ?>

            <div class="today-appointment">
                <div>
                    <img class="today-img" src="<?php echo $row['image_url'] ?>" alt="">
                </div>
                <div class="today-name"><?php echo $row['patient_name'] ?></div>
                <div class="today-time">Today</div>
            </div>
        <?php }
        ?>
    </div>

</div>