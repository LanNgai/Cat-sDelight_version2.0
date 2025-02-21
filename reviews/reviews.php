<?php
    $reviewData = file('reviewData.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    echo "<a href='../index.php'>Home</a><br>";
    echo "<a href='reviews.php''>Reviews</a><br>";
    echo "<a href='../login/login.php''>Login</a><br>";

    echo "<h1>Product Reviews</h1>";

    if (empty($reviewData)) {
        echo "There are no reviews yet.";
    } else {
        foreach ($reviewData as $index => $review) {
            list($category, $pname, $rating, $reviewText, $url) = explode('|', $review);
            echo "<div class='review'>";
            echo "<strong>Category:</strong> $category<br>";
            echo "<strong>Product Name:</strong> $pname<br>";
            echo "<strong>Rating:</strong> $rating/5<br>";
            echo "<a href='productReview.php?id=$index'>Read Full Review</a><br><br>";
            echo "</div>";
        }
    }