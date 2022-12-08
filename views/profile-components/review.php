<?php
include "./services/connection.php";
if(isset($_SESSION['id']))
    $id = $_SESSION['id'];
?>
<div class="review">
    <?php
        $sql = "SELECT star_reviews FROM doctor WHERE doc_id = $id";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)){
            $stars = round($row['star_reviews']);
        }
    ?>
    <h4>Review <span class="review-rating"><?php echo $stars ?></span></h4>
    <div class="review-star">
        <?php for ($x = 0; $x < 5; $x++) { 
            if($stars > 0){
        ?>
                <span class="fa fa-star checked"></span>
            <?php } else { ?>
                <span class="fa fa-star"></span>
        <?php } $stars = $stars - 1; } ?>
    </div>
    <div class="review-part">
        <?php
        $sql = "call getRecentReviews($id)";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <div class="reviewer">
                <img class="reviewer-img" src="./assets/img/user/<?php echo $row['image_url'] ?>" alt="">
                <div>
                    <div class="reviewer-name"><?php echo $row['patient_name'] ?></div>
                    <div class="reviewer-comment"><?php echo $row['patient_review'] ?></div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>