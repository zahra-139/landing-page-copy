<?php

$siteName = "Clarity";
$heroTitle = "Harvesting Goodness from Olive Oil";
$heroDescription = "Enjoy a healthy life by eating Clarity Supplement that make your life healthier for today and forever";
$menu = [
    [
        "label" => "ABOUT",
        "url" => "#"
    ],
    [
        "label" => "PRODUCTS",
        "url" => "#PRODUCTS"
    ],
    [
        "label" => "CONTACT",
        "url" => "#CONTACT"
    ]
];
$shop = [
    "title" => "Shop Clarity",
    "description" => "We offer supplement for you with very good quality for health"
];

$product = [
    [
        "name" => "Super Antioxidant",
        "description" => "60 capsules",
        "price" => "$16,00",
        "image" => "image/supplement.png"
    ],
    [
        "name" => "Super Antioxidant",
        "description" => "60 capsules",
        "price" => "$16,00",
        "image" => "image/supplement.png"
    ],
    [
        "name" => "Super Antioxidant",
        "description" => "60 capsules",
        "price" => "$16,00",
        "image" => "image/supplement.png"
    ]
];
$are = "Are You..";
$categories = [
    [
        "class" => "young",
        "title" => "Young Active People",
        "description" => "We offer supplement that can give you more energy boost"
    ],
    [
        "class" => "elderly",
        "title" => "Elderly",
        "description" => "We offer supplement to keep your body fit and healthy aging"
    ]
];
$why = [
    "title" => "Why Choose Our Product",
    "description" => "Clarity was created with the mission to improve your health and wellbeing with the purest olive products on earth."
];
$whyProducts = [
    [
        "image" => "image/37.png",
        "title" => "Perfect Quality",
        "description" => "We grow, farm, and bottle the finest olive products you can find."
    ],
    [
        "image" => "image/$.png",
        "title" => "Best Price Offers",
        "description" => "The price is very affordable among similar product."
    ],
    [
        "image" => "image/14.png",
        "title" => "100% Natural",
        "description" => "Harvested from the finest olive trees that deliver health benefits."
    ]
];
$testimonial = [
    "title" => "Testimonials",
    "description" => "Clarity was created with the mission to improve your health and wellbeing with the purest olive products on earth."
];
$testimoni = [
    "name" => "Richard Johnson",
    "location" => "Bandung, Indonesia",
    "description" => "I love Super Antioxidant for the polyphenols and antioxidants.
                It's hard to find a good and pure Olive Oil Supplement
                I'm on my second bottle now and I feel great!"
];
$subscribe = [
    "title" => "subscribe To Our Newsletter",
    "description" => "Sign up for our newsletter for information, offers and more."
];
$phone = "0361 123 4567";
$email = "info.clarity@gmail.com";

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
                <?php if (!empty($menu)): ?>
                    <?php foreach ($menu as $item): ?>
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
                    <?php if (!empty($menu)): ?>
                        <?php foreach ($menu as $item): ?>
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
            <?php if (!empty($shop["title"])): ?>
                <h2><?php echo $shop["title"]; ?></h2>
            <?php endif; ?>

            <?php if (!empty($shop["description"])): ?>
                <p><?php echo $shop["description"]; ?></p>
            <?php endif; ?>

            <div class="product-container container">
                <?php if (!empty($product)): ?>
                    <?php foreach ($product as $item): ?>
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
        <?php if (!empty($are)): ?>
            <h2><?php echo $are; ?></h2>
        <?php endif; ?>

        <div class="are-container">
            <?php if (!empty($categories)): ?>

                <?php foreach ($categories as $category): ?>
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
            <?php if (!empty($why["title"])): ?>
                <h2><?php echo $why["title"]; ?></h2>
            <?php endif; ?>

            <?php if (!empty($why["description"])): ?>
                <p><?php echo $why["description"]; ?></p>
            <?php endif; ?>

            <div class="why-container container">

                <?php if (!empty($whyProducts)): ?>

                    <?php foreach ($whyProducts as $item): ?>
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

        <?php if (!empty($testimonial["title"])): ?>
            <h2><?php echo $testimonial["title"]; ?></h2>
        <?php endif; ?>

        <?php if (!empty($testimonial["description"])): ?>
            <p><?php echo $testimonial["description"] ?></p>
        <?php endif; ?>

        <div class="desc-testi">

            <div class="stars">
                <img src="image/Group 1685.png" alt="stars">
            </div>

            <?php if (!empty($testimoni)): ?>

                <?php if (!empty($testimoni["description"])): ?>
                    <p><?php echo $testimoni["description"] ?></p>
                <?php endif; ?>

                <div class="profile">
                    <div class="profile-img"></div>

                    <div class="profile-info">

                        <?php if (!empty($testimoni["name"])): ?>
                            <p class="name"><?php echo $testimoni["name"]; ?></p>
                        <?php endif; ?>

                        <?php if (!empty($testimoni["location"])): ?>
                            <p class="location"><?php echo $testimoni["location"]; ?></p>
                        <?php endif; ?>

                    </div>
                </div>
            <?php else: ?>
                <p>testimoni are not available.</p>
            <?php endif; ?>
        </div>
    </div>

    <div class="subscribe">

        <?php if (!empty($subscribe["title"])): ?>
            <h2><?php echo $subscribe["title"] ?></h2>
        <?php endif; ?>

        <?php if (!empty($subscribe["description"])): ?>
            <p><?php echo $subscribe["description"] ?></p>
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
                    <p class="desc-footer">
                        Clarity is in the business of improving
                        your health and wellness. We grow, farm,
                        and bottle the finest olive products you
                        can find.
                    </p>
                </div>

                <div class="information">
                    <h3>Information</h3>
                    <p><a href="#about_us">about us</a></p>
                    <p><a href="#Our_Product">Our Product</a></p>
                    <p><a href="#Contact_Us">Contact Us</a></p>
                </div>

                <div class="help-center">
                    <h3>Help Center</h3>
                    <p>Privacy Policy</p>
                    <p>Terms & Conditions</p>
                    <p>Legal Support</p>
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