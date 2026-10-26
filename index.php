
<?php
$pageTitle = "Groco | Fresh Groceries";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta
        name="description"
        content="Discover fresh groceries, fruits and vegetables at Groco."
    >

    <title><?php echo htmlspecialchars($pageTitle); ?></title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- Navigation -->
    <header class="site-header">
        <nav class="navbar container" aria-label="Main navigation">

            <a class="logo" href="index.php">
                Groco<span>.</span>
            </a>

            <ul class="nav-links">
                <li><a href="index.php" aria-current="page">Home</a></li>
                <li><a href="#categories">Categories</a></li>
                <li><a href="#products">Products</a></li>
                <li><a href="#about">About</a></li>
            </ul>

            <div class="nav-actions">
                <button
                    class="icon-button"
                    type="button"
                    aria-label="Search (coming soon)"
                    title="Search coming soon"
                >
                    &#128269;
                </button>

                <a
                    class="icon-button"
                    href="#products"
                    aria-label="View products"
                    title="View products"
                >
                    &#128722;
                </a>
            </div>

        </nav>
    </header>

    <main>

        <!-- Hero section -->
        <section class="hero">
            <div class="container hero-content">

                <div class="hero-text">
                    <p class="eyebrow">FRESH &amp; NATURAL</p>

                    <h1>
                        Fresh groceries,<br>
                        delivered with care.
                    </h1>

                    <p class="hero-description">
                        Discover fresh fruits, vegetables and everyday
                        essentials for your home.
                    </p>

                    <a class="btn" href="#products">
                        Explore Products
                    </a>
                </div>

                <div class="hero-image">
                    <!-- Add your grocery photo here later. -->
                    <div class="image-placeholder">
                        Your grocery image goes here
                    </div>
                </div>

            </div>
        </section>

        <!-- Placeholder sections for future features -->
        <section class="content-section container" id="categories">
            <h2>Shop by Category</h2>
            <p>Our grocery categories will appear here.</p>
        </section>

        <section class="content-section container" id="products">
            <h2>Featured Products</h2>
            <p>Our products will appear here.</p>
        </section>

        <section class="content-section container" id="about">
            <h2>About Groco</h2>
            <p>Your everyday grocery shopping destination.</p>
        </section>

    </main>

    <footer class="site-footer">
        <p>
            &copy; <?php echo date("Y"); ?> Groco.
            All rights reserved.
        </p>
    </footer>

</body>
</html>
