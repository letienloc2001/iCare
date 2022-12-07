<?php
    include "../services/connection.php";
    $_SESSION['username'] = 'doc1@gmail.com';
?>
<?php
    $username = "";
    $id = 0;
    $doc_name = "";
    $image_url = "";
    $address = "";
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
    }
    $sql = "SELECT * FROM user WHERE email='$username'";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $id = (int)$row['doc_id'];
    }

    $sql1 = "CALL getDoctorDetails($id);";
    $record = mysqli_query($conn, $sql1);
    while ($user_info = mysqli_fetch_assoc($record)) {
        $address = $user_info['clinic_number'] . " street " . $user_info['street'] . ", " . $user_info['ward'] . ", " . $user_info['district'] . ", " . $user_info['city'];
        $doc_name = $user_info['doc_name'];
        $image_url = $user_info['image_url'];
    }
?>
<div class="user-card">
    <div class="user-image-card">
        <img class="user-image" src="<?php echo $image_url ?>" alt="">
    </div>
    <div>
        <div class="user-name"><?php echo $doc_name ?></div>
        <button class="edit-button"><a href="#" class="edit-profile">Edit Profile <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                </svg></a></button>
        <?php
            $sql2 = "CALL getSpecializations($id);";
            $result1 = mysqli_query($conn, $sql2);
            // if ($result1){
            //     echo "SUCCESS";
            // }
            // else
            //     echo "FAILED";
            while ($doc_spec = mysqli_fetch_assoc($result)) {
                $spec = $doc_spec['spec_name'];
        ?>
        <div class='user-info'>Major: <span class='info'><?php echo $spec ?></span></div>

        <?php } ?>
        <div class="user-info">Address: <span class="info"><?php echo $address ?></span></div>
        <div class="user-info">Contact: <span class="info"><?php echo $username ?></span></div>
    </div>
</div>