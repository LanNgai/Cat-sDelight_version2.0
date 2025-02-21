<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <a href='../index.php'>Home</a><br>
        <a href='reviews.php''>Reviews</a><br>
        <a href='../login/login.php''>Login</a><br>

        <title>Write a Review</title>
    </head>
    <body>
        <h1>Write a review</h1>
        <form method="post" action="postReview.php">
            <label for="category"> Choose a category</label>
            <br>
            <select id="category" name="category" required>
                <option value="Toy">Toy</option>
                <option value="Food">Food</option>
                <option value="Litter">Litter</option>
                <option value="Misc">Miscellaneous</option>
            </select>

            <br><br>

            <label for="pname">Product name</label>
            <br>
            <input type="text" id="pname" name="pname" required>

            <br><br>

            <label for="rating">Rating (between 1 and 5):</label>
            <br>
            <input type="number" id="rating" name="rating" min="1" max="5" required>

            <br><br>

            <label>Write review of product</label>
            <br>
            <textarea id="review" name="review" rows="10" cols="50" required></textarea>

            <br><br>

            <label>Link to Product</label>
            <br>
            <input type="url" id="url" name="url" required>

            <br><br>

            <input type="submit" value="Submit">
        </form>
    </body>
</html>


