<?php
// products.php - Detailed Cat Product Reviews for Cat Critique
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cat Critique - Cat Products</title>
    <style>
        /* Reset & Base */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; background-color: #fff; color: #333; }
        a { text-decoration: none; }
        
        /* Header */
        header {
            background-color: #007BFF;
            padding: 20px;
            color: #fff;
            overflow: auto;
        }
        header .logo {
            float: left;
        }
        header .logo img {
            height: 50px;
        }
        header .search {
            float: left;
            margin-left: 50px;
            padding-top: 10px;
        }
        header .search input[type="text"] {
            padding: 5px;
            width: 200px;
        }
        header .search button {
            padding: 5px 10px;
        }
        header nav {
            float: right;
        }
        header nav ul {
            list-style: none;
        }
        header nav li {
            display: inline;
            margin-left: 20px;
        }
        header nav li a {
            color: #fff;
        }
        
        /* Main Content */
        .container {
            width: 90%;
            margin: 20px auto;
        }
        .product-item {
            border: 1px solid #ddd;
            padding: 20px;
            margin-bottom: 20px;
            display: flex;
        }
        .product-item img {
            width: 150px;
            height: 150px;
            background-color: #eee;
            margin-right: 20px;
        }
        .product-item h2 {
            margin-bottom: 10px;
        }
        .product-item p {
            margin-bottom: 10px;
        }
        .product-item a {
            color: #007BFF;
        }
        
        /* Footer */
        footer {
            background-color: #f8f8f8;
            padding: 20px;
            text-align: center;
            color: #777;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="Cat Critique Logo">
        </div>
        <div class="search">
            <form action="#" method="get">
                <input type="text" name="query" placeholder="Search Cat Products...">
                <button type="submit">Search</button>
            </form>
        </div>
        <nav>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../reviews/reviews.php">Reviews</a></li>
                <li><a href="products.php">Products</a></li>
            </ul>
        </nav>
    </header>
    
    <div class="container">
        <h1>Cat Product Reviews</h1>
        <p>Explore our detailed reviews on the best products for your feline friend.</p>
        
        <div class="product-item">
            <img src="Cat_Scratcher.jpg" alt="Cat Product Image">
            <div>
                <h2>Interactive Laser Toy</h2>
                <p><!-- Placeholder: Detailed review snippet for the cat product --></p>
                <a href="#">Read More</a>
            </div>
        </div>
        
        <div class="product-item">
            <img src="Organic%20Cat%20Food.jpg" alt="Cat Product Image">
            <div>
                <h2>Organic Cat Food</h2>
                <p><!-- Placeholder: Detailed review snippet for the cat product --></p>
                <a href="#">Read More</a>
            </div>
        </div>
        
        <!-- Additional cat product items as needed -->
    </div>
    
    <footer>
        <p>© <?php echo date('Y'); ?> Cat Critique. All rights reserved.</p>
    </footer>
</body>
</html>
