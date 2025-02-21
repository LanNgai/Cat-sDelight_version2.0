<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['username']);
    ?>
    <title>
        <?= "$name's Profile" ?>
    </title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="topnav">
    <a class="active" href="../index.php">Home</a>
    <a href="../reviews/reviews.php">Reviews</a>
    <a href="../products/products.php">Products</a>
</div>
    <?php

        $user = [
            'name' => htmlspecialchars($_POST['username']),
            'email' => htmlspecialchars($_POST['email']),
            'bio' => 'Hello! I am a cat owner, I hope to find the best products for my kitties!',
            'profile_picture' => 'https://via.placeholder.com/150' // Placeholder image
        ];
    }
    ?>
    <div class="overall-profile-container">
        <div class="profile-container">
            <img src="<?= $user['profile_picture']; ?>" alt="Profile Picture" class="profile-picture"/>
            <h2 class="profile-name">
                <?= $user['name']; ?>
            </h2>
            <h3 class="profile-email">
                <?= $user['email']; ?>
            </h3>
            <p class="profile-bio">
                <?= $user['bio']; ?>
            </p>
        </div>
        <div class="profile-comments-container">
            <?php if (!empty($comments)): ?>
                <?php foreach ($comments as $comment): ?>
                    <div class="comment">
                        <p><?php echo htmlspecialchars($comment['comment']); ?></p>
                        <p class="comment-date">
                            Posted on: <?php echo date("F j, Y, g:i a", strtotime($comment['created_at'])); ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p id="comment-error">No comments found.</p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>