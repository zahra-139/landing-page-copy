<?php

require_once "connection.php";

$result_config = mysqli_query($conn, "SELECT * FROM config");
$config = [];
while ($row = mysqli_fetch_assoc($result_config)) {
    $config[$row["data_key"]] = $row["value"];
}

$siteName = $config["siteName"] ?? "";
$heroTitle =  $config["heroTitle"] ?? "";
$heroDescription =  $config["heroDescription"] ?? "";

$shopTitle =  $config["shopTitle"] ?? "";
$shopDescription =  $config["shopDescription"] ?? "";

$areTitle =  $config["areTitle"] ?? "";

$whyTitle =  $config["whyTitle"] ?? "";
$whyDescription =  $config["whyDescription"] ?? "";

$testimonialTitle =  $config["testimonialTitle"] ?? "";
$testimonialDescription =  $config["testimonialDescription"] ?? "";

$testimoniDescription =  $config["testimoniDescription"] ?? "";
$testimoniName =  $config["testimoniName"] ?? "";
$testimoniLocation =  $config["testimoniLocation"] ?? "";

$subscribeTitle =  $config["subscribeTitle"] ?? "";
$subscribeDescription =  $config["subscribeDescription"] ?? "";

$descFooter = $config["descFooter"] ?? "";
$phone =  $config["phone"] ?? "";
$email =  $config["email"] ?? "";

$result_menus = mysqli_query($conn, "SELECT * FROM menus");
if (!$result_menus) {
    die(mysqli_error($conn));
}
$menus = mysqli_fetch_all($result_menus, MYSQLI_ASSOC);

$result_products = mysqli_query($conn, "SELECT * FROM products");
if (!$result_products) {
    die(mysqli_error($conn));
}
$products = mysqli_fetch_all($result_products, MYSQLI_ASSOC);

$result_are = mysqli_query($conn, "SELECT * FROM are");
if (!$result_are) {
    die(mysqli_error($conn));
}
$are = mysqli_fetch_all($result_are, MYSQLI_ASSOC);

$result_why = mysqli_query($conn, "SELECT * FROM why");
if (!$result_why) {
    die(mysqli_error($conn));
}
$why = mysqli_fetch_all($result_why, MYSQLI_ASSOC);

$result_informations = mysqli_query($conn, "SELECT * FROM informations");
if (!$result_informations) {
    die(mysqli_error($conn));
}
$informations = mysqli_fetch_all($result_informations, MYSQLI_ASSOC);

$result_helpcenter = mysqli_query($conn, "SELECT * FROM helpcenter");
if (!$result_helpcenter) {
    die(mysqli_error($conn));
}
$helpcenter = mysqli_fetch_all($result_helpcenter, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $siteName; ?></title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>


<body>
    <nav class="navbar">
        <div class="container">

            <!-- Logo -->
            <a href="#" class="logo">
                <img src="image/logo-02.png" alt="Logo">
            </a>

            <!-- Desktop Menu -->
            <div class="nav-link">
                <?php if (!empty($menus)): ?>
                    <?php foreach ($menus as $item): ?>
                        <a href="<?php echo $item["url"]; ?>">
                            <?php echo $item["label"]; ?>
                        </a>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>menu are not available.</p>
                <?php endif; ?>
            </div>

            <!-- Mobile Menu -->
            <div class="nav-mobile">
                <button class="hamburger" onclick="toggleMenu()" aria-label="Toggle menu">
                    ☰
                </button>

                <div class="nav-menu" id="nav-menu">
                    <?php if (!empty($menus)): ?>
                        <?php foreach ($menus as $item): ?>
                            <a href="<?php echo $item["url"]; ?>">
                                <?php echo $item["label"]; ?>
                            </a>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>menu are not available.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>

    <section>
        <div class="hero">
            <div class="container">
                <div class="hero-text">
                    <?php if (!empty($heroTitle)): ?>
                        <h1><?php echo $heroTitle; ?></h1>
                    <?php endif; ?>

                    <?php if (!empty($heroDescription)): ?>
                        <p><?php echo $heroDescription; ?></p>
                    <?php endif; ?>
                </div>
                <div class="hero-button">
                    <a href="#Shop" class="button-green button button-shop">Shop Now</a>
                    <a href="#View" class="button-transparent button button-view">View Product</a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="shop" id="PRODUCTS">
            <?php if (!empty($shopTitle)): ?>
                <h2><?php echo $shopTitle; ?></h2>
            <?php endif; ?>

            <?php if (!empty($shopDescription)): ?>
                <p><?php echo $shopDescription; ?></p>
            <?php endif; ?>

            <div class="product-container container">
                <?php if (!empty($products)): ?>
                    <?php foreach ($products as $item): ?>
                        <div class="card">
                            <img src="<?php echo $item["image"]; ?>" alt="<?php echo $item["name"]; ?>">
                            <h3><?php echo $item["name"]; ?></h3>
                            <p><?php echo $item["description"]; ?></p>

                            <?php if (!empty($item["price"])): ?>
                                <div class="price">
                                    <span><?php echo $item["price"]; ?></span>
                                </div>
                            <?php endif; ?>

                            <button class="button-green">Add To Cart</button>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>products are not available.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <div class="are">
        <?php if (!empty($areTitle)): ?>
            <h2><?php echo $areTitle; ?></h2>
        <?php endif; ?>

        <div class="are-container">
            <?php if (!empty($are)): ?>

                <?php foreach ($are as $category): ?>
                    <div class="<?php echo $category["class"]; ?>">

                        <?php if (!empty($category["title"])): ?>
                            <h3><?php echo $category["title"]; ?></h3>
                        <?php endif; ?>

                        <?php if (!empty($category["description"])): ?>
                            <p><?php echo $category["description"]; ?></p>
                        <?php endif; ?>

                        <button class="button-transparent">Shop Product</button>

                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>categories are not available.</p>
            <?php endif; ?>
        </div>
    </div>

    <section>
        <div class="why">
            <?php if (!empty($whyTitle)): ?>
                <h2><?php echo $whyTitle; ?></h2>
            <?php endif; ?>
            <?php if (!empty($whyDescription)): ?>
                <p><?php echo $whyDescription; ?></p>
            <?php endif; ?>

            <div class="why-container container">
                <?php if (!empty($why)): ?>
                    <?php foreach ($why as $item): ?>
                        <div class="why-card">
                            <div class="icon">
                                <img src="<?php echo $item["image"]; ?>" alt="icon">
                            </div>
                            <?php if (!empty($item["title"])): ?>
                                <h3><?php echo $item["title"]; ?></h3>
                            <?php endif; ?>
                            <?php if (!empty($item["description"])): ?>
                                <p><?php echo $item["description"]; ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>information are not available.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <div class="testimonial">

        <?php if (!empty($testimonialTitle)): ?>
            <h2><?php echo $testimonialTitle; ?></h2>
        <?php endif; ?>

        <?php if (!empty($testimonialDescription)): ?>
            <p><?php echo $testimonialDescription; ?></p>
        <?php endif; ?>

        <div class="desc-testi">

            <div class="stars">
                <img src="image/Group 1685.png" alt="stars">
            </div>


            <?php if (!empty($testimoniDescription)): ?>
                <p><?php echo $testimoniDescription; ?></p>
            <?php endif; ?>

            <div class="profile">
                <div class="profile-img"></div>

                <div class="profile-info">

                    <?php if (!empty($testimoniName)): ?>
                        <p class="name"><?php echo $testimoniName; ?></p>
                    <?php endif; ?>

                    <?php if (!empty($testimoniLocation)): ?>
                        <p class="location"><?php echo $testimoniLocation; ?></p>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>

    <div class="subscribe">

        <?php if (!empty($subscribeTitle)): ?>
            <h2><?php echo $subscribeTitle; ?></h2>
        <?php endif; ?>

        <?php if (!empty($subscribeDescription)): ?>
            <p><?php echo $subscribeDescription; ?></p>
        <?php endif; ?>

        <div class="send-subscribe">
            <input type="email" id="email" placeholder="Enter your email address" />
            <button type="submit" class="button submit-subscribe button-green">Send Now</button>
        </div>
    </div>


    <section>
        <footer id="CONTACT">
            <div class="footer-content container">
                <div class="footer-top">
                    <img src="image/logo-footer.png" alt="footer-logo">
                    <?php if (!empty($descFooter)): ?>
                        <p class="desc-footer"><?php echo $descFooter; ?></p>
                    <?php endif; ?>
                </div>

                <div class="information">
                    <h3>Information</h3>

                    <?php foreach ($informations as $item): ?>
                        <?php if ($item["category"] == "Information"): ?>
                            <p>
                                <a href="<?php echo $item["url"]; ?>">
                                    <?php echo $item["label"]; ?>
                                </a>
                            </p>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>

                <div class="help-center">
                    <h3>Help Center</h3>

                    <?php foreach ($helpcenter as $item): ?>
                        <?php if ($item["category"] == "Help Center"): ?>
                            <p>
                                <a href="<?php echo $item["url"]; ?>">
                                    <?php echo $item["label"]; ?>
                                </a>
                            </p>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>

                <div class="footer-box">
                    <div class="call-email">
                        <?php if (!empty($phone)): ?>
                            <div class="contact-item">
                                <img src="image/no-telp.png" alt="no-telp">
                                <p><?php echo $phone; ?></p>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($email)): ?>
                            <div class="contact-item">
                                <img src="image/email.png" alt="email">
                                <p><?php echo $email; ?></p>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="social-media">
                        <a><img src="image/ig.png" alt="ig"></a>
                        <a><img src="image/twiter.png" alt="twiter"></a>
                        <a><img src="image/fb.png" alt="fb"></a>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <hr>
                <p>Copyright Clarity 2021 All Right Reserved</p>
            </div>
        </footer>
    </section>
</body>

</html>