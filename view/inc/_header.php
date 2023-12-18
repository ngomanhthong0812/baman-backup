<form class="my_search" methor="get" action="search.php">
    <div class="close_search"><i class='bx bx-x'></i></div>
    <input type="text" id="name_search" name="name" placeholder="Search Product..." style="border:none">
    <button class="btn_search"></button>
</form>
<div class="menu_left menu_top">
    <div class="menu_left-navbar">
        <div class="energy">
            <div class="close_top" style="background-color: rgb(241, 241, 241);"><i class='bx bx-x'></i></div>
            <div class="shopping_top" style="margin-left: 17rem;"><i class='bx bx-shopping-bag'></i> <span>
                    <?php echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : '0' ?>
                </span></div>
            <div class="heart_top"><i class='bx bx-heart'></i><span>0</span></div>
            <div class="refresh_top"><i class='bx bx-refresh'></i><span>0</span></div>
        </div>
        <div class="menu_top-ship-free z-[10] bg-white px-[1.5rem] py-0">
            <div class="menu_top-ship-free--title">
                These product are limited, checkout within <span style="color: #9c9c9c;">00m : 00s</span>
            </div>
            <div class="menu_top-ship-free--content">
                <span>BUY $500.00 <span style="font-weight: 600;">MORE TO ENJOY FREE SHIPPING</span></span>
                <div class="icon">
                    <img src="./public/img/ship/7.png" alt="">
                    <div></div>
                </div>
            </div>
        </div>
        <div class="menu_top-heart my_heart add_1 z-[10] bg-white">
            <!-- <div class="card_heart">
                <img src="./public/img/product/2.webp" alt="">
                <div class="card_heart-name_product">
                    <span>Beaded double necklace</span>
                    <div class="price" style="color: #9c9c9c;">$240.00 / <span style="color: salmon;">In
                            stock</span></div>
                    <span>Add to cart</span>
                </div>
                <i class='bx bx-trash'></i>
            </div> -->
        </div>

        <div class="menu_top-cart add_1 my_shopping  px-[1.5rem] py-0 w-[100%] truncate">
            <div class="container_top-cart w-[100%]">
                <?php if (isset($_SESSION['cart'])) { ?>
                    <?php foreach ($_SESSION['cart'] as $orderItems) { ?>
                        <div class="my_cart flex justify-between py-[0.5rem] items-center">
                            <div class="flex gap-[10px]">
                                <img src="./public/img/product/<?php echo $orderItems["productId"] ?>.webp" alt="" class="w-[80px]">
                                <div class="card_heart-name_product flex flex-col justify-center">
                                    <span>
                                        <?php echo $orderItems['productName']; ?>
                                    </span>
                                    <div class="price" style="color: #9c9c9c;">
                                        $
                                        <?php echo $orderItems["productPrice"] ?>.00 /
                                        <span style="color: salmon;">Instock</span>
                                    </div>
                                    <span class="text-[12px] font-bold">X
                                        <?php echo $orderItems['quantity']; ?>
                                    </span>
                                </div>
                            </div>
                            <form action="cart.php" method="post">
                                <input type="hidden" name="_method" value="delete">
                                <input type="hidden" name="idRemove" value="<?php echo $orderItems["productId"] ?>">
                                <button><i class='remove_cart bx bx-trash cursor-pointer text-black' style="font-size: 15px;"></i></button>
                            </form>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>

            <div class="moreCart flex items-center justify-center text-[12px] font-black"></div>
            <div class="button mt-[5px]">
                <button><a href="cart.php">Open cart</a></button>
                <button><a href="category.php">Start Shopping</a></button>
            </div>
        </div>

    </div>

</div>


<div class="container_navbar">
    <div class="navbar">
        <div class="icon">
            <i class='bx bxl-facebook-circle' style='color:#ffffff'></i>
            <i class='bx bxl-twitter' style='color:#ffffff'></i>
            <i class='bx bxl-youtube' style='color:#ffffff'></i>
        </div>
        <div class="title">FREE SHIPPING ON ALL ORDER OVER $75</div>
        <div class="content">
            <a href="">CART</a>
            <a href="">SEARCH</a>
            <a href="">HELP</a>
        </div>
    </div>
</div>

<div class="reponsive_menu">
    <div class="oppenMenu"><i class='bx bx-menu' style="padding-left: 1rem;"></i></div>
    <div class="name_shop" style="position: absolute; left: 50%; transform: translateX(-50%);"><a href="index.php">BAMAN</a></div>
    <div class=""><i class='bx bx-shopping-bag'></i></div>
</div>
<div class="container_menu">
    <div class="menu" style="position: relative;">
        <div class="menu_1">
            <li><a href="index.php">HOME<i class='bx bx-chevron-down'></i></a>
                <ul style=" box-shadow: 0px 0px 1px rgb(221, 221, 221);">
                    <li><a href="#">Home Main</a></li>
                    <li><a href="#">Modern</a></li>
                    <li><a href="#">Home Centered</a></li>
                    <li><a href="#">Left Sidebar</a></li>
                    <li><a href="#">Full Screen Slider</a></li>
                    <li><a href="#">Slider + Grid Banner</a></li>
                    <li><a href="#">Mosaic Banner</a></li>
                    <li><a href="#">Parallax</a></li>
                    <li><a href="#">Product Landing</a></li>
                    <li><a href="#">Campaign</a></li>
                    <li><a href="#">Video</a></li>
                    <li><a href="#">Personal</a></li>
                    <li><a href="#">Split</a></li>
                </ul>
            </li>
            <li><a href="category.php">SHOP<i class='bx bx-chevron-down'></i></a>
                <ul style="width: 100%; display: flex; gap: 20px; padding: 1.5rem 5rem;">
                    <div style="width: 20%;">
                        <li style="font-size: 18px;">Catalog</li>
                        <li><a href="">Style 1</a></li>
                        <li><a href="">Style 2</a></li>
                        <li><a href="">Style 3</a></li>
                        <li><a href="">Load More</a></li>
                        <li><a href="">Infinite Scroll</a></li>
                        <li><a href="">Pagination</a></li>
                    </div>
                    <div style="width: 20%;">
                        <li style="font-size: 18px;">Shop Layouts</li>
                        <li><a href="">Default</a></li>
                        <li><a href="">Left Sidebar</a></li>
                        <li><a href="">Right Sidebar</a></li>
                        <li><a href="">Top Sidebar</a></li>
                        <li><a href="">Fixed Sidebar ( Left )</a></li>
                        <li><a href="">Full Width ( no-sidebar )</a></li>
                        <li><a href="">Masonry Grid</a></li>
                        <li><a href="">Shop Category Page</a></li>
                        <li><a href="">Shop Tag Page</a></li>
                        <li><a href="">Shop Brand Page</a></li>
                    </div>
                    <div style="width: 20%;">
                        <li style="font-size: 18px;">Shop Columns</li>
                        <li><a href="">List Type</a></li>
                        <li><a href="">Column Three</a></li>
                        <li><a href="">Column Four</a></li>
                        <li><a href="">Column Five</a></li>
                        <li><a href="">Column Six ( wide )</a></li>
                    </div>
                    <div style="width: 20%;">
                        <li style="font-size: 18px;">Hero Types</li>
                        <li><a href="">Category List</a></li>
                        <li><a href="">Category Slider</a></li>
                        <li><a href="">Hero Small</a></li>
                        <li><a href="">Hero Breadcrumbs</a></li>
                        <li><a href="">Shop No Title</a></li>
                    </div>
                    <div style="width: 20%;">
                        <li style="font-size: 18px;">Shop Pages</li>
                        <li><a href="">Catalog</a></li>
                        <li><a href="">Cart</a></li>
                        <li><a href="">Checkout</a></li>
                        <li><a href="">Checkout ( Multisteps )</a></li>
                        <li><a href="">My Account ( 2 Column )</a></li>
                        <li><a href="">My account ( Tabbed )</a></li>
                        <li><a href="">Order Tracking</a></li>
                    </div>
                </ul>
            </li>
            <li><a href="#">PRODUCT<i class='bx bx-chevron-down'></i></a>
                <ul style="width: 100%; display: flex; gap: 20px; padding: 1.5rem 5rem;">
                    <div style="width: 25%;">
                        <li style="font-size: 18px;">Product Types</li>
                        <li><a href="">Simple</a></li>
                        <li><a href="">Color Variable</a></li>
                        <li><a href="">Image Variable</a></li>
                        <li><a href="">Grouped</a></li>
                        <li><a href="">Extenal</a></li>
                        <li><a href="">Out Of Stock</a></li>
                        <li><a href="">Countdown</a></li>
                        <li><a href="">Popup Video</a></li>
                        <li><a href="">360deg Product</a></li>
                    </div>
                    <div style="width: 25%;">
                        <li style="font-size: 18px;">Showcase Style</li>
                        <li><a href="">Carousel</a></li>
                        <li><a href="">Carousel Big</a></li>
                        <li><a href="">Carousel Small</a></li>
                        <li><a href="">Carousel Mini</a></li>
                        <li><a href="">Carousel Coverflow</a></li>
                        <li><a href="">Video Slider</a></li>
                        <li><a href="">Stretch</a></li>
                    </div>
                    <div style="width: 25%;">
                        <li style="font-size: 18px;">Gallery Styles</li>
                        <li><a href="">Thumbs Left</a></li>
                        <li><a href="">Thumbs Right</a></li>
                        <li><a href="">Thumbs Bottom</a></li>
                        <li><a href="">Thumbs Top</a></li>
                        <li><a href="">Grid</a></li>
                        <li><a href="">Column 2</a></li>
                        <li><a href="">Column 3</a></li>
                        <li><a href="">Video Grid - Auto Start</a></li>
                        <li><a href="">Video Popup</a></li>
                    </div>
                    <div style="width: 25%;">
                        <li style="font-size: 18px;">Page Layout</li>
                        <li><a href="">Left Sidebar</a></li>
                        <li><a href="">Right Sidebar</a></li>
                        <li><a href="">Fullwidth</a></li>
                        <li><a href="">Tabs</a></li>
                        <li><a href="">Accordion</a></li>
                        <li><a href="">Accordion 2</a></li>
                        <li><a href="">Advenced Review & Q&A</a></li>
                    </div>
                </ul>
            </li>
            <li><a href="#">TEMPLATER<i class='bx bx-chevron-down'></i></a>
                <ul>
                    <li><a href="#">Header Slidebar</a></li>
                    <li><a href="#">Header Sidebar Right</a></li>
                    <li><a href="#">Header Sidebar Dark</a></li>
                    <li><a href="#">Light Styles</a></li>
                    <li><a href="#">Dark Styles</a></li>
                    <li><a href="#">Transparent Styles</a></li>
                    <li><a href="#">Topbars / Footers</a></li>
                </ul>
            </li>
            <li><a href="#">PAGES<i class='bx bx-chevron-down'></i></a>
                <ul>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">About Me</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Maintenance</a></li>
                    <li><a href="#">Coming Soon</a></li>
                    <li><a href="#">404</a></li>
                </ul>
            </li>
            <li><a href="#">MEGA<i class='bx bx-chevron-down'></i></a></li>
        </div>
        <div class="name_shop" style="position: absolute; left: 50%; transform: translateX(-50%);"><a href="index.php">BAMAN</a></div>
        <div class="energy">
            <div class="search"><i class='bx bx-search' style="padding-right: 1rem;"></i></div>
            <div class="shopping"><i class='bx bx-shopping-bag'></i>
                <span>
                    <?php echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : '0' ?>
                </span>
            </div>
            <div class="heart"><i class='bx bx-heart'></i><span>0</span></div>
            <div><i class='bx bx-refresh'></i><span>0</span></div>
            <?php if (isset($_SESSION['email']) && $_SESSION['email'] != "" && $_SESSION['role'] == 'user') { ?>
                <div class="user is_login relative">
                    <i class='bx bx-user'></i>
                    <div class="account_user hidden">
                        <ul class="absolute z-10 w-[200px] px-[0.8rem] py-[0.3rem] text-[13px] flex flex-col justify-center bg-white top-[7px] left-[-150px]">
                            <li class="p-0 mt-[5px] flex justify-center">
                                <?php echo $_SESSION['email'] ?>
                            </li>
                            <a href="#">
                                <li class="p-0 mt-[5px] flex items-center gap-[5px]"><i class='bx bx-user'></i>Account</li>
                            </a>
                            <a href="logout.php">
                                <li class="p-0 mt-[5px] flex items-center gap-[5px]"><i class='bx bx-log-out bx-rotate-180'></i>Log out</li>
                            </a>
                        </ul>
                    </div>
                </div>
            <?php } else { ?>
                <?php if (isset($_SESSION['email']) && $_SESSION['email'] != "" && $_SESSION['role'] == 'admin') { ?>
                    <div class="user is_login relative">
                        <i class='bx bx-user'></i>
                        <div class="account_user hidden">
                            <ul class="absolute z-10 w-[200px] px-[0.8rem] py-[0.3rem] text-[13px] flex flex-col justify-center bg-white top-[7px] left-[-150px]">
                                <li class="p-0 mt-[5px] flex justify-center">
                                    <?php echo $_SESSION['email'] ?>
                                </li>
                                <a href="#">
                                    <li class="p-0 mt-[5px] flex items-center gap-[5px]"><i class='bx bx-user'></i>Account</li>
                                </a>
                                <a href="admin/statistics/index.php">
                                    <li class="p-0 mt-[5px] flex items-center gap-[5px]"><i class='bx bx-lock-alt'></i>Admin
                                    </li>
                                </a>
                                <a href="logout.php">
                                    <li class="p-0 mt-[5px] flex items-center gap-[5px]"><i class='bx bx-log-out bx-rotate-180'></i>Log out</li>
                                </a>
                            </ul>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="user">
                        <a href="login.php"><i class='bx bx-user'></i></a>
                    </div>
                <?php } ?>
            <?php } ?>

            <div><i class='bx bx-menu' style="padding-left: 1rem;"></i></div>
        </div>
    </div>
</div>