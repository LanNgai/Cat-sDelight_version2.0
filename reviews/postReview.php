<?php
    $category = $_POST['category'];
    $pname = $_POST['pname'];
    $rating = $_POST['rating'];
    $reviewText = $_POST['review'];
    $url = $_POST['url'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $reviewData = "$category|$pname|$rating|$reviewText|$url\n";
        file_put_contents('reviewData.txt', $reviewData, FILE_APPEND);

        header("Location: reviews.php");
    }
    else{
        header('Location: writeReview.php');
        exit;
}

