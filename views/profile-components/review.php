<?php
include "./services/connection.php";
$_SESSION['doc_id'] = 1;
$id = $_SESSION['doc_id'];
?>
<div class="review">
    <h4>Review <span class="review-rating">(3/5)</span></h4>
    <div class="review-star">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
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