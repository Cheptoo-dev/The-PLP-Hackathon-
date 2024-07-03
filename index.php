<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dish Flavoured</title>
    <link rel="stylesheet" href="plpstyle1.css">
    <style>
        /* Add some basic styles for the menu items and images */
        .menu-item {
            border: 1px solid #ddd;
            padding: 15px;
            margin: 15px;
            text-align: center;
        }
        .menu-item img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .menu-item h3 {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Dish Flavoured</h1>
        <nav>
            <ul>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="menu">
        <h2>Our Menu</h2>
        <div id="menu-items">
            <?php include 'menu.php'; ?>
        </div>
    </section>

    <section id="about">
        <h2>About Us</h2>
        <p>Dish Flavoured offers a variety of delicious fast food dishes made from fresh ingredients.</p>
    </section>

    <section id="contact">
        <h2>Contact Us</h2>
        <form action="submit_form.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            <button type="submit">Send</button>
        </form>
    </section>
</body>
</html>
