<?php
// index.php - Homepage for Cat Critique
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cat Critique - Home</title>
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
        .review-item {
            border-bottom: 1px solid #ddd;
            padding: 20px 0;
            display: flex;
        }
        .review-item img {
            width: 100px;
            height: 100px;
            background-color: #eee;
            margin-right: 20px;
        }
        .review-item h2 {
            margin-bottom: 10px;
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
            <!-- Placeholder: Cat Critique Logo -->
            <img src="products/logo.png" alt="Cat Critique Logo">
        </div>
        <div class="search">
            <form action="#" method="get">
                <input type="text" name="query" placeholder="Search Cat Reviews...">
                <button type="submit">Search</button>
            </form>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Reviews</a></li>
                <li><a href="products/products.php">Products</a></li>
            </ul>
        </nav>
    </header>
    
    <div class="container">
        <h1>Welcome to Cat Critique</h1>
        <p>Your go-to site for honest reviews of cat products.</p>
        
        <div class="review-item">
            <img src="products/Cat_Scratcher.jpg" alt="Cat Product Image">
            <div>
                <h2>Cat Scratcher Deluxe</h2>
                <p><!-- Placeholder: Brief review snippet for the cat product --></p>
            </div>
        </div>
        
        <div class="review-item">
            <img src="products/Cozy%20Cat%20Bed.jpg" alt="Cat Product Image">
            <div>
                <h2>Cozy Cat Bed</h2>
                <p><!-- Placeholder: Brief review snippet for the cat product --></p>
            </div>
        </div>
        
        <!-- Additional cat review items as needed -->
    </div>
    
    <footer>
        <p>© <?php echo date('Y'); ?> Cat Critique. All rights reserved.</p>
    </footer>
</body>
</html>
