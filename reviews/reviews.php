<?php
    $reviewData = file('reviewData.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    echo "<h1>Product Reviews</h1>";

    if (empty($reviewData)) {
        echo "There are no reviews yet.";
    } else {
        foreach ($reviewData as $review ) {
            list($category, $pname, $rating, $reviewText, $url) = explode('|', $review);
            echo "<strong>Category:</strong> $category<br>";
            echo "<strong>Product Name:</strong> $pname<br>";
            echo "<strong>Rating:</strong> $rating/5<br><br>";
        }
    }