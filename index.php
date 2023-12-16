<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>My Online Store</title>
</head>
<body>
    <header>
        <h1>My Online Store</h1>
        <nav>
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <!-- Content will be dynamically loaded based on the selected page -->
        <?php
            $page = isset($_GET['page']) ? $_GET['page'] : 'home';
            include($page . '.html');
        ?>
    </main>

    <footer>
        <p>&copy; 2023 My Online Store</p>
    </footer>
</body>
</html>