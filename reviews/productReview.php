<?php
    if (!isset($_GET['id'])) {
        die("Invalid request. No review ID provided.");
    }

    $reviewId = $_GET['id'];
    //read file
    $reviewData = file('reviewData.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    if (!isset($reviewData[$reviewId])) {
        die("Invalid review ID.");
    }

    list($category, $pname, $qualityRating, $priceRating, $averageRating, $reviewText, $url) = explode('|', $reviewData[$reviewId]);

    echo "<div class='top-nav'>
                <a href='../index.php'>Home</a>
                <a href='reviews.php'>Reviews</a>
                <a href='../products/products.php'>Products</a>
                <a href='../login/login.php'>Login</a>
            </div>";

    echo "<div class='thumbnail'>
                    <img src='PlaceHolder.png' alt='Placeholder product image'>
                    </div>";

    echo "<h2>$pname</h2>";
    echo "<strong>Quality Rating:</strong> $qualityRating/5<br>";
    echo "<strong>Price Rating:</strong> $priceRating/5<br>";
    echo "<strong>Overall Rating:</strong> $averageRating/5<br>";
    echo "<strong>Review:</strong><br> $reviewText<br>";
    echo "<strong>Product Link:</strong><br> <a href='$url'>$url</a><br>";
    echo "<br><a href='reviews.php'>Back to All Reviews</a>";
?>
<html>
    <form method="post">
        <label for="comment">Write your comment here: </label>
        <br>
        <textarea id="comment" name="comment" rows="3" cols="50" required></textarea><br>
        <input type="submit" value="Submit Comment">
    </form>
</html>
<?php
    $commentsFile = 'comments.txt';
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $comment = $_POST['comment'];
        file_put_contents($commentsFile , "$reviewId|$comment\n", FILE_APPEND);
    }
    echo "<strong>Comments:</strong><br>";
    if (empty($commentsFile )){
        echo "There are no comments yet. Be the first to comment!";
    }
    else{
        $comments = file($commentsFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($comments as $commentLine){
            list($commentID, $comment) = explode('|', $commentLine);
            if ($commentID === $reviewId){
                echo "<p>$comment</p><br>";
            }
        }
    }
    ?>