<?php
include "./services/connection.php";
?>
<div class="request">
    <div class="title-table">
        Appointment Request
    </div>
    <div class="profile-table request-table">
        <?php
        if(isset($_SESSION['id']))
            $id = $_SESSION['id'];
        $sql = "call getWaitingAppointments($id)";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <div class="request-appointment">
                <div>
                    <img class="request-img" src="./assets/img/user/<?php echo $row['image_url'] ?>" alt="">
                </div>
                <div>
                    <div class="request-name"><?php echo $row['patient_name'] ?></div>
                    <div class="request-time"><?php echo $row['date_registered'] ?></div>
                </div>
                <div>
                    <button class="accept-button" onclick=""><a href=""><img class="accept-img" src="./assets/img/accept.png" alt=""></a></button>
                    <button class="decline-button" onclick=""><img class="decline-img" src="./assets/img/decline.png" alt=""></button>
                </div>
            </div>
        <?php } ?>
    </div>
</div>