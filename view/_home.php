<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/css/style.css">
    <title>Goldsmith &#8211; Modern WooCommerce Theme</title>
    <link rel="shortcut icon" href="./public/img/logo/123.png" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Jost' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./public/css/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php include './view/inc/_header.php' ?>
    <div class="my_body">
        <div class="my_banner">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner h-100">
                    <div class="carousel-item active" data-bs-interval="8000">
                        <img src="./public/img/banner/accesories-full-1.jpg" class="d-block w-100 h-100" alt="...">
                        <div class="slider_content">
                            <h1>Meet The Lines Of <br> The Millennium</h1>
                            <p>Fashion is to please your eye. Shapes and proportions are for your intellect. I have an
                                obsession with details and pattern.</p>
                            <button>Check Collection</button>
                            <button class="button-2" style="background-color: transparent; margin-left: 10px;">Shop
                                Now</button>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="./public/img/banner/accesories-full-2.jpg" class="d-block w-100 h-100" alt="...">
                        <div class="slider_content">
                            <h1>New Modern <br>Collection</h1>
                            <p>Elegance isn't solely defined by what you wear. It's how you carry yourself, how you
                                speak, what you read.</p>
                            <button>Shop Now</button>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="banner_2">
                <img src="./public/img/banner/3.png" alt="" class="h-100 w-100">
                <div class="content">
                    <b>GOLD PIERCING</b>
                    <p>FLASH SALE</p>
                    <p>15 NOV - 25 NOV</p>
                    <p>See More Products</p>
                </div>
            </div>
        </div>

        <div class="icon_prioritize">
            <div class="icon_prioritize_inner">
                <img src="./public/img/icon_prioritize/1.png" alt="">
                <h5>Amazing Value Every Day</h5>
                <span>Items prices that fit your budget</span>
            </div>
            <div class="icon_prioritize_inner">
                <img src="./public/img/icon_prioritize/2.png" alt="">
                <h5>Successful Customer Service</h5>
                <span>We work with a focus on 100% customer satisfaction.</span>
            </div>
            <div class="icon_prioritize_inner">
                <img src="./public/img/icon_prioritize/3.png" alt="">
                <h5>All Payment Methods</h5>
                <span>Don't bother with payment details.</span>
            </div>
            <div class="icon_prioritize_inner flex-col items-center">
                <img src="./public/img/icon_prioritize/4.png" alt="">
                <h5>Completely free shipping</h5>
                <span>We'll handle the shipping.</span>
            </div>
        </div>

        <div class="product">
            <div class="banner_2">
                <img src="./public/img/product/banner.png" alt="" class="w-100" style="height: 700px;">
                <div class="content">
                    <b>NOSE RINGS</b>
                    <p>NOSE EARRING</p>
                    <p>25 NOV - 29 NOV</p>
                    <p>See More Products</p>
                </div>
            </div>
            <div class="product_card">
                <!-- begin product -->
                <?php for ($i = 0; $i < 8; $i++) { ?>
                    <a href="detail.php?product_id=<?php echo $productList[$i]['id']; ?>" class="my_card">
                        <div class="image">
                            <img src="./public/img/product/<?php echo $productList[$i]['image']; ?>.webp" alt="">
                            <div class="icon"> <i class='bx bx-heart'></i><i class='bx bxs-right-arrow'></i></div>
                            <div class="icon"><i class='bx bx-refresh'></i><i class='bx bxs-right-arrow'></i></div>
                            <div class="icon" onclick="openZoomCard('<?php echo $productList[$i]['id']; ?>','<?php echo $productList[$i]['image']; ?>', '<?php echo $productList[$i]['name']; ?>', '<?php echo $productList[$i]['price']; ?>','<?php echo $productList[$i]['description']; ?>', event)">
                                <i class='bx bx-fullscreen'></i><i class='bx bxs-right-arrow'></i>
                            </div>
                            <button>Read more</button>
                        </div>
                        <p>
                            <?php echo $productList[$i]['name']; ?>
                        </p>
                        <div class="price">$
                            <?php echo $productList[$i]['price']; ?>.00
                        </div>
                    </a>
                <?php } ?>
                <!-- end product -->

            </div>
        </div>

        <div class="container_sale">
            <div class="sale">
                <div class="sale_1"><span>Super discount for your first purchase</span><span>FIRST250</span><span>Use
                        discount code in checkout page.</span></div>
                <div class="sale_2"><span>2nd shopping surprise campaign!</span><button>Check Products <i class='bx bx-skip-next'></i></button></div>
            </div>
        </div>

        <div class="product">
            <div class="banner_2">
                <img src="./public/img/product/banner_1.png" alt="" class="w-100" style="height: 700px;">
                <div class="content">
                    <b>NOSE RINGS</b>
                    <p>NECKLACES</p>
                    <p>25 NOV - 29 NOV</p>
                    <p>See More Products</p>
                </div>
            </div>
            <div class="product_card">
                <!-- begin product -->
                <?php for ($i = 0; $i < 8; $i++) { ?>
                    <a href="detail.php?product_id=<?php echo $productList[$i]['id']; ?>" class="my_card">
                        <div class="image">
                            <img src="./public/img/product/<?php echo $productList[$i]['image']; ?>.webp" alt="">
                            <div class="icon"> <i class='bx bx-heart'></i><i class='bx bxs-right-arrow'></i></div>
                            <div class="icon"><i class='bx bx-refresh'></i><i class='bx bxs-right-arrow'></i></div>
                            <div class="icon" onclick="openZoomCard('<?php echo $productList[$i]['id']; ?>','<?php echo $productList[$i]['image']; ?>', '<?php echo $productList[$i]['name']; ?>', '<?php echo $productList[$i]['price']; ?>','<?php echo $productList[$i]['description']; ?>', event)">
                                <i class='bx bx-fullscreen'></i><i class='bx bxs-right-arrow'></i>
                            </div>
                            <button>Read more</button>
                        </div>
                        <p>
                            <?php echo $productList[$i]['name']; ?>
                        </p>
                        <div class="price">$
                            <?php echo $productList[$i]['price']; ?>.00
                        </div>
                    </a>
                <?php } ?>
                <!-- end product -->

            </div>
        </div>

        <div class="container_sale">
            <div class="sale">
                <div class="sale_1"><span>Super discount for your first purchase</span><span>FIRST250</span><span>Use
                        discount code in checkout page.</span></div>
                <div class="sale_2"><span>2nd shopping surprise campaign!</span><button>Check Products <i class='bx bx-skip-next'></i></button></div>
            </div>
        </div>

        <div class="featured_Deals">
            <div class="featured_Deals-child--1">
                <div class="featured_Deals-child--2-title">
                    <div>
                        <h5>Deals of the Week</h5>
                    </div>
                    <div>View All</div>
                </div>
                <div class="my_card">
                    <div class="my_card_1">
                        <img src="./public/img/product/2-2.webp" alt="">
                        <div class="information">
                            <div class="name">360deg Product</div>
                            <div class="price">$144.00</div>
                            <div>Read more</div>
                        </div>
                    </div>
                    <div class="my_card_2">
                        <div>Expired</div>
                        <div>Remains until the end of the offer</div>
                    </div>
                </div>
                <div class="my_card">
                    <div class="my_card_1">
                        <img src="./public/img/product/1.webp" alt="">
                        <div class="information">
                            <div class="name">The Air Scoop-Neck Tee</div>
                            <div class="price">$195.00</div>
                            <div>Read more</div>
                        </div>
                    </div>
                    <div class="my_card_2">
                        <div>Expired</div>
                        <div>Remains until the end of the offer</div>
                    </div>
                </div>
                <div class="my_card">
                    <div class="my_card_1">
                        <img src="./public/img/product/2.webp" alt="">
                        <div class="information">
                            <div class="name">Beaded double necklace</div>
                            <div class="price">$140.00</div>
                            <div>Read more</div>
                        </div>
                    </div>
                    <div class="my_card_2">
                        <div>Expired</div>
                        <div>Remains until the end of the offer</div>
                    </div>
                </div>
                <div class="Testimonials">
                    <h4>Testimonials</h4>
                    <div class="banner_4-1">
                        <img src="./public/img/instagram/2.webp" alt="">
                        <div class="title">
                            <h6 class="name">Caleb Hoffman</h6>
                            <span class="job">Customer</span>
                        </div>
                        <div class="informations">
                            <p>This is due to their excellent <br> service, competitive pricing and <br> customer
                                support. It’s throughly <br> refresing to get such a personal <br> touch. Duis aute
                                lorem ipsum is <br> simply free text irure dolor in <br> reprehenderit in esse nulla
                                pariatur</p>
                        </div>
                    </div>

                </div>
                <div class="check_products">
                    <p>2nd shopping surprise <br> campaign!</p>

                    <button>Check Produtcs
                        <i class="fa-solid fa-caret-right"></i>
                    </button>
                </div>
                <div class="banner_linkx">
                    <img src="./public/img/product/banner_5.webp" alt="">
                    <div class="banner_ph">
                        <p>EARRINGS</p>
                        <h6>Create your combo now!</h6>
                    </div>
                </div>
                <div class="banner_linkx">
                    <img src="./public/img/product/banner_6.webp" alt="">
                    <div class="banner_ph">
                        <p>EARRINGS</p>
                        <h6>Create your combo now!</h6>
                    </div>
                </div>
                <div class="banner_linkx">
                    <img src="./public/img/product/banner_7.webp" alt="">
                    <div class="banner_ph">
                        <p>EARRINGS</p>
                        <h6>Create your combo now!</h6>
                    </div>
                </div>
                <div class="container_customer_service">
                    <div class="customer_service customer_service-1">
                        <img src="./public/img/product/icon_1.png" alt="">
                        <h6>24 hour fast customer service </h6>
                        <p>Get support without waiting, shop faster.</p>
                    </div>
                    <div class="customer_service customer_service-2">
                        <img src="./public/img/product/icon_2.png" alt="">
                        <h6>Best Market Price Guarantee</h6>
                        <p>We do not mislead the customer, transparent trade.</p>
                    </div>
                    <div class="customer_service customer_service-3">
                        <img src="./public/img/product/icon_3.png" alt="">
                        <h6>Try Price Change Alerts</h6>
                        <p>Meet maximum discounts.</p>
                    </div>
                </div>
            </div>
            <div class="featured_Deals-child--2">
                <div class="featured_Deals-child--2-1">
                    <div class="image banner_2">
                        <img src="./public/img/product/banner_2.png" alt="">
                        <div class="content">
                            <b>NOSE RINGS</b>
                            <p>LATEST BESTELLERS</p>
                            <br><br><br><br>
                            <p class="button">See More Products</p>
                        </div>
                    </div>
                    <div class="product_card">
                        <!-- begin product -->
                        <?php for ($i = 0; $i < 8; $i++) { ?>
                            <a href="detail.php?product_id=<?php echo $productList[$i]['id']; ?>" class="my_card">
                                <div class="image">
                                    <img src="./public/img/product/<?php echo $productList[$i]["image"]; ?>.webp" alt="">
                                    <div class="icon"> <i class='bx bx-heart'></i><i class='bx bxs-right-arrow'></i></div>
                                    <div class="icon"><i class='bx bx-refresh'></i><i class='bx bxs-right-arrow'></i></div>
                                    <div class="icon" onclick="openZoomCard('<?php echo $productList[$i]['id']; ?>','<?php echo $productList[$i]['image']; ?>', '<?php echo $productList[$i]['name']; ?>', '<?php echo $productList[$i]['price']; ?>','<?php echo $productList[$i]['description']; ?>', event)">
                                        <i class='bx bx-fullscreen'></i><i class='bx bxs-right-arrow'></i>
                                    </div>
                                    <button>Read more</button>
                                </div>
                                <p>
                                    <?php echo $productList[$i]["name"]; ?>
                                </p>
                                <div class="price">$
                                    <?php echo $productList[$i]["price"]; ?>.00
                                </div>
                            </a>
                        <?php } ?>
                        <!-- end product -->

                    </div>
                </div>

                <div class="featured_Deals-child--2-2">
                    <div class="featured_Deals-child--2-2-sale">
                        <div>SALE</div>
                        <div><b>Super discount for your first purchase</b>
                            <span>Use discount code in checkout page.</span>
                        </div>
                        <div>BUYNOW225</div>
                    </div>
                </div>
                <div class="featured_Deals-child--2-title">
                    <div>
                        <h5>Deals of the Week</h5><span>Dont miss out on this weeks deals</span>
                    </div>
                    <div>View All</div>
                </div>

                <div class="featured_Deals-child--2-card">
                    <i class='bx bx-chevron-left prev' onclick="prevEndow()"></i>
                    <i class='bx bx-chevron-right next' onclick="nextEndow()"></i>
                    <div class="product_card">
                        <!-- begin product -->
                        <?php for ($i = 8; $i < 13; $i++) { ?>
                            <a href="detail.php?product_id=<?php echo $productList[$i]['id']; ?>" class="my_card">
                                <div class="image">
                                    <img src="./public/img/product/<?php echo $productList[$i]['image']; ?>.webp" alt="">
                                    <div class="icon"> <i class='bx bx-heart'></i><i class='bx bxs-right-arrow'></i></div>
                                    <div class="icon"><i class='bx bx-refresh'></i><i class='bx bxs-right-arrow'></i></div>
                                    <div class="icon" onclick="openZoomCard('<?php echo $productList[$i]['id']; ?>','<?php echo $productList[$i]['image']; ?>', '<?php echo $productList[$i]['name']; ?>', '<?php echo $productList[$i]['price']; ?>','<?php echo $productList[$i]['description']; ?>', event)">
                                        <i class='bx bx-fullscreen'></i><i class='bx bxs-right-arrow'></i>
                                    </div>
                                    <div class="icon"><i class='bx bx-shopping-bag'></i><i class='bx bxs-right-arrow'></i>
                                    </div>
                                </div>
                                <p>
                                    <?php echo $productList[$i]['name']; ?>
                                </p>
                                <div class="price">
                                    <div class="star_icon">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <span>1 REVIEW</span>
                                    </div>$
                                    <?php echo $productList[$i]['price']; ?>
                                    .00
                                </div>
                                <div class="view">
                                    <div style="width:<?php echo $productList[$i]['quantity'] ?>%;"></div>
                                </div>
                                <div class="quantity">
                                    <div>Sold: <b><?php echo rand(1, 20) ?></b></div>
                                    <div>Available: <b><?php echo $productList[$i]['quantity'] ?></b></div>
                                </div>
                            </a>
                        <?php } ?>
                        <!-- end product -->


                    </div>
                </div>
                <div class="featured_Deals-child--2-banner_3">
                    <img src="./public/img/product/banner_3.png" alt="">

                    <div class="featured_Deals-child--2-banner_3-1">
                        <span class="status">DEALS OF THE WEEK</span>
                        <h5> Reflect the bonds of the past into your modern life.</h5>
                        <div class="content">Fashion is about dressing according to what's fashionable. Style is more
                            about being yourself. Design is a constant challenge to balance comfort with luxe...</div>
                        <div class="countdown" id="countdown">
                            <div class="countdown-item">
                                <span id="days">00</span>
                            </div>
                            <div class="countdown-item">
                                <span class="icon">-</span>
                            </div>
                            <div class="countdown-item">
                                <span id="hours">00</span>
                            </div>
                            <div class="countdown-item">
                                <span class="icon">-</span>
                            </div>
                            <div class="countdown-item">
                                <span id="minutes">00</span>
                            </div>
                            <div class="countdown-item">
                                <span class="icon">-</span>
                            </div>
                            <div class="countdown-item">
                                <span id="seconds">00</span>
                            </div>
                        </div>
                        <button>Buy products <i class='bx bxs-right-arrow'></i></button>

                    </div>

                </div>



            </div>
        </div>





















        <!-- zoom card -->
        <?php include './view/inc/_zoom-card.php' ?>
        <!-- zoom card -->

    </div>


    <div class="banner_4">
        <img src="./public/img/product/banner_4.webp" alt="">
        <div>
            <div class="featured_Deals-child--2-banner_3-1">
                <span class="status">NEW SEASON</span>
                <h5>Back to the past: <span>Bracelets</span></h5>
                <div class="content">You can hide so much behind theatrics, and I don't need to do that any more. My
                    relationships with producers or photographers - these are relationships that took years.</div>
                <button>View all leather products<i class='bx bxs-right-arrow'></i></button>

            </div>
        </div>
    </div>
    <div class="container_instagram">
        <div class="instagram">
            <div class="title">
                <div class="name_shop">#BaMan</div>
                <div>Tag <span>@bamanshop</span> in your Instagram posts for a chance to be featured here.</div>
                <div>Find more inspiration on our <span>Instagram account.</span></div>
            </div>
            <div>
                <div><img src="./public/img/instagram/1.webp" alt=""><img src="./public/img/product/icon.png" alt="">
                </div>
                <div><img src="./public/img/instagram/2.webp" alt=""><img src="./public/img/product/icon.png" alt="">
                </div>
                <div><img src="./public/img/instagram/3.webp" alt=""><img src="./public/img/product/icon.png" alt="">
                </div>
                <div><img src="./public/img/instagram/4.webp" alt=""><img src="./public/img/product/icon.png" alt="">
                </div>
                <div><img src="./public/img/instagram/5.webp" alt=""><img src="./public/img/product/icon.png" alt="">
                </div>
                <div><img src="./public/img/instagram/6.webp" alt=""><img src="./public/img/product/icon.png" alt="">
                </div>
                <div><img src="./public/img/instagram/7.webp" alt=""><img src="./public/img/product/icon.png" alt="">
                </div>
                <div><img src="./public/img/instagram/8.webp" alt=""><img src="./public/img/product/icon.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <?php include './view/inc/_footer.php' ?>
    <!-- footer -->

    <script src="./public/js/main.js"></script>
    <script src="./public/js/product_detail.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>