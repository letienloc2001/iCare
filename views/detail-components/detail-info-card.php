<?php
include "./services/connection.php";
?>
<?php
    $username = "";
    if(isset($_SESSION['user_type']))
        $user_type = $_SESSION['user_type'];
    $name = "";
    $image_url = "";
    $address = "";
    if(isset($_GET['id']))
        $id = $_GET['id'];
    require_once("./controllers/profile.php");
    $profileController = new ProfileController();
    $pic = $profileController->getPictureOneUser($id);
    $sql1 = "CALL getDoctorDetails($id);";
    $record = mysqli_query($conn, $sql1);
    while ($user_info = mysqli_fetch_assoc($record)) {
        $address = $user_info['clinic_number'] . $user_info['street'] . ", " . $user_info['ward'] . ", " . $user_info['district'] . ", " . $user_info['city'];
        $name = $user_info['doc_name'];
        $image_url = $pic;
        $contact = $user_info['phone_number'];
        $maps_query= "http://maps.google.com/maps?q=" . $address . "&output=embed";
    }
    include "./services/connection.php";
    // set $speciality to list of speciality. Init to empty array
    $speciality = [];
    $sql2 = "call getSpecializations($id);";
    $record2 = mysqli_query($conn, $sql2);
    while ($doc_info = mysqli_fetch_assoc($record2)) {
        // add speciality to $speciality array
        $speciality[] = $doc_info['spec_name'];
    }
?>
<div class="user-card">
    <div class="user-image-card">
        <img class="user-image" src="<?php echo $image_url ?>" alt="">
    </div>
    <div>
        <div class="user-name"><?php echo $name ?></div>
        <?php if($user_type == 'p') { ?>
        <button class="edit-button"><a href="#" class="edit-profile"> Request <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                </svg></a></button>
        <?php } ?>
        <div class="user-info">Specializations: <span class="info"></span></div>
        <?php
        // display speciality as ul list, left aligned
        if (count($speciality) > 0) {
            echo "<ul class='speciality'>";
            foreach ($speciality as $spec) {
                echo "<li style='text-align: left; font-size: 1.5rem'>$spec</li>";
            }
            echo "</ul>";
        }
        ?>
        <div class="user-info">Address: <span class="info"><?php echo $address ?></span></div>
        <div class="user-info">Contact: <span class="info"><?php echo $contact ?></span></div>
        <div class="user-info">Maps:
            <?php
            // display maps iframe
            echo "<iframe src='$maps_query' width='100%' height='300' style='border:0;' allowfullscreen='' loading='lazy'></iframe>";
            ?>
        </div>
    </div>
</div>