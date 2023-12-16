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
    <div class="relative w-[100%] h-[128px] bg-[#f5f5f5] container_categories">
        <img src="./public/img/banner/1920-1.png" alt="" class="h-[100%] w-[100%] object-cover">
        <div class="w-[100%] h-[100%] max-w-[1540px] px-[1rem] flex flex-col justify-center absolute top-0 left-[50%] translate-x-[-50%]">
            <ul class="flex gap-[5px] text-[12px] text-gray-300 leading-8">
                <li class="text-black">HOME</li>
                &#8226;
                <li class="text-black">SHOP</li>
            </ul>
            <ul class="text-[26px] font-[510]">
                <li>Shop</li>
            </ul>
        </div>
    </div>

    <div class="my_body py-[3rem]">
        <div class="max-w-[1540px] m-auto flex">
            <div class="w-[25%] pr-[2.3rem]">
                <div>
                    <span class="flex justify-between items-center text-[15px] font-[500]">
                        <p>Filter By</p><button class="w-[20px] h-[20px] rounded-full bg-[#f5f5f5] text-[16px] flex items-center justify-center font-bold">-</button>
                    </span>
                    <span class="flex justify-between items-center text-[12px] font-[400] mt-[1rem]">
                        <p class="text-[#7d7d7d] cursor-pointer">Pattern #1</p><button class="w-[20px] h-[20px] rounded-full text-[11px] flex items-center justify-center">2</button>
                    </span>
                    <span class="flex justify-between items-center text-[12px] font-[400]">
                        <p class="text-[#7d7d7d] cursor-pointer">Pattern #2</p><button class="w-[20px] h-[20px] rounded-full text-[11px] flex items-center justify-center">2</button>
                    </span>
                </div>
                <div class="mt-[2rem]">
                    <span class="flex justify-between items-center text-[15px] font-[500]">
                        <p>Filter By Price</p><button class="w-[20px] h-[20px] rounded-full bg-[#f5f5f5] text-[16px] flex items-center justify-center font-bold">-</button>
                    </span>
                    <input type="range" class="w-[100%] mt-[1rem]">
                    <span class="flex justify-between items-center text-[12px] mt-[1rem] text-[#7d7d7d] font-[420]"><button class="bg-black text-white py-[0.4rem] px-3">FILTER</button><span>PRICE: $10 -
                            $240</span></span>
                </div>
                <div class="mt-[2rem]">
                    <span class="flex justify-between items-center text-[15px] font-[500]">
                        <p>Filter By</p><button class="w-[20px] h-[20px] rounded-full bg-[#f5f5f5] text-[16px] flex items-center justify-center font-bold">-</button>
                    </span>
                    <span class="flex justify-between items-center text-[12px] font-[400] mt-[1rem]">
                        <button type="black" class="btnType text-[#7d7d7d] flex items-center gap-[10px] cursor-pointer">
                        <div class="w-[11px] h-[11px] rounded-full bg-black border"></div>Black
                        </button>
                        <div class="w-[20px] h-[20px] rounded-full text-[11px] flex items-center justify-center">3</div>
                    </span>
                    <span class="flex justify-between items-center text-[12px] font-[400] mt-[0.5rem]">
                        <button type="blue" class="btnType text-[#7d7d7d] flex items-center gap-[10px] cursor-pointer">
                            <div class="w-[11px] h-[11px] rounded-full bg-[blue] border"></div>Blue
                        </button>
                        <div class="w-[20px] h-[20px] rounded-full text-[11px] flex items-center justify-center">5</div>
                    </span>
                    <span class="flex justify-between items-center text-[12px] font-[400] mt-[0.5rem]">
                        <button type="brown" class="btnType text-[#7d7d7d] flex items-center gap-[10px] cursor-pointer">
                            <div class="w-[11px] h-[11px] rounded-full bg-[brown] border"></div>Brown
                        </button>
                        <div class="w-[20px] h-[20px] rounded-full text-[11px] flex items-center justify-center">3</div>
                    </span>
                    <span class="flex justify-between items-center text-[12px] font-[400] mt-[0.5rem]">
                        <button type="green" class="btnType text-[#7d7d7d] flex items-center gap-[10px] cursor-pointer">
                            <div class="w-[11px] h-[11px] rounded-full bg-[green] border"></div>Green
                        </button>
                        <div class="w-[20px] h-[20px] rounded-full text-[11px] flex items-center justify-center">4</div>
                    </span>
                    <span class="flex justify-between items-center text-[12px] font-[400] mt-[0.5rem]">
                        <button type="white" class="btnType text-[#7d7d7d] flex items-center gap-[10px] cursor-pointer">
                            <div class="w-[11px] h-[11px] rounded-full bg-[#ffffff] border"></div>White
                        </button>
                        <div class="w-[20px] h-[20px] rounded-full text-[11px] flex items-center justify-center">0</div>
                    </span>
                    <span class="flex justify-between items-center text-[12px] font-[400] mt-[0.5rem]">
                        <button type="yellow" class="btnType text-[#7d7d7d] flex items-center gap-[10px] cursor-pointer">
                            <div class="w-[11px] h-[11px] rounded-full bg-[yellow] border"></div>Yellow
                        </button>
                        <div class="w-[20px] h-[20px] rounded-full text-[11px] flex items-center justify-center">4</div>
                    </span>
                </div>
                <div class="mt-[2rem]">
                    <span class="flex justify-between items-center text-[15px] font-[500]">
                        <p>Filter By Sizes</p>
                        <div class="w-[20px] h-[20px] rounded-full bg-[#f5f5f5] text-[16px] flex items-center justify-center font-bold">-</div>
                    </span>
                    <span class="flex justify-between items-center text-[12px] font-[400] mt-[1rem]">
                        <button class="text-[#7d7d7d] flex items-center gap-[10px] cursor-pointer">10K</button>
                        <div class="w-[20px] h-[20px] rounded-full text-[11px] flex items-center justify-center">4</div>
                    </span>
                    <span class="flex justify-between items-center text-[12px] font-[400] mt-[0.5rem]">
                        <button class="text-[#7d7d7d] flex items-center gap-[10px] cursor-pointer">14K</button>
                        <div class="w-[20px] h-[20px] rounded-full text-[11px] flex items-center justify-center">7</div>
                    </span>
                    <span class="flex justify-between items-center text-[12px] font-[400] mt-[0.5rem]">
                        <button class="text-[#7d7d7d] flex items-center gap-[10px] cursor-pointer">18K</button>
                        <div class="w-[20px] h-[20px] rounded-full text-[11px] flex items-center justify-center">5</div>
                    </span>
                    <span class="flex justify-between items-center text-[12px] font-[400] mt-[0.5rem]">
                        <button class="text-[#7d7d7d] flex items-center gap-[10px] cursor-pointer">22K</button>
                        <div class="w-[20px] h-[20px] rounded-full text-[11px] flex items-center justify-center">7</div>
                    </span>
                    <span class="flex justify-between items-center text-[12px] font-[400] mt-[0.5rem]">
                        <button class="text-[#7d7d7d] flex items-center gap-[10px] cursor-pointer">24K</button>
                        <div class="w-[20px] h-[20px] rounded-full text-[11px] flex items-center justify-center">8</div>
                    </span>
                    <span class="flex justify-between items-center text-[12px] font-[400] mt-[0.5rem]">
                        <button class="text-[#7d7d7d] flex items-center gap-[10px] cursor-pointer">8k</button>
                        <div class="w-[20px] h-[20px] rounded-full text-[11px] flex items-center justify-center">3</div>
                    </span>
                </div>
            </div>
            <div class="w-[75%] pl-[1rem]">
                <div class="w-[100%] h-[300px] relative bg-[#f5f5f5] cursor-pointer group truncate border rounded-[7px]">
                    <img src="./public/img/banner/1920-3.png" alt="" class="h-[100%] w-[100%] object-cover object-top rounded-[7px] group-hover:scale-[120%] duration-200 ease-in-out">
                    <div class="absolute w-[100%] h-[100%] top-0 text-[13px] font-[550] flex flex-col justify-center px-[1.5rem]">
                        <div class="bg-[#dddddd] w-[120px] text-[11px] p-[0.3rem] flex justify-center leading-4 tracking-[2px]">
                            NOSE RINGS</div>
                        <p class="leading-10">Free Shipping On Over $50</p>
                        <p class="font-[400] text-[#7d7d7d]">For the terms of the campain, see the description page</p>
                        <button class="bg-black w-[180px] text-white p-3 font-[450] leading-3 mt-[80px]">See More
                            Products</button>
                    </div>
                </div>
                <nav class="py-[2.5rem]">
                    <ul class="flex text-[12px] font-[500] gap-[15px]">
                        <li class="flex items-center text-[14px] text-[#7d7d7d]">Fast Filters:</li>
                        <li class="flex items-center gap-[7px] border px-[1.2rem] rounded-[20px] py-[0.3rem] hover:bg-black hover:text-white duration-200 ease-in-out cursor-pointer">
                            <img src="./public/img/icon_categories/dollar.png" alt="" class="w-[15px]">FEATURED
                        </li>
                        <li class="flex items-center gap-[7px] border px-[1.2rem] rounded-[20px] py-[0.3rem] hover:bg-black hover:text-white duration-200 ease-in-out cursor-pointer">
                            <img src="./public/img/icon_categories/promotional.png" alt="" class="w-[15px]">BEST
                            SELLERS
                        </li>
                        <li class="flex items-center gap-[7px] border px-[1.2rem] rounded-[20px] py-[0.3rem] hover:bg-black hover:text-white duration-200 ease-in-out cursor-pointer">
                            <img src="./public/img/icon_categories/rating.png" alt="" class="w-[15px]">TOP RATED
                        </li>
                        <li class="flex items-center gap-[7px] border px-[1.2rem] rounded-[20px] py-[0.3rem] hover:bg-black hover:text-white duration-200 ease-in-out cursor-pointer">
                            <img src="./public/img/icon_categories/discount.png" alt="" class="w-[15px]">ON SALE
                        </li>
                        <li class="flex items-center gap-[7px] border px-[1.2rem] rounded-[20px] py-[0.3rem] hover:bg-black hover:text-white duration-200 ease-in-out cursor-pointer">
                            <img src="./public/img/icon_categories/box.png" alt="" class="w-[15px]">IN STOCK
                        </li>
                        <li class="flex items-center gap-[7px] border px-[1.2rem] rounded-[20px] py-[0.3rem] hover:bg-black hover:text-white duration-200 ease-in-out cursor-pointer">
                            SELECT COLOR</li>
                        <li class="flex items-center gap-[7px] border px-[1.2rem] rounded-[20px] py-[0.3rem] hover:bg-black hover:text-white duration-200 ease-in-out cursor-pointer">
                            SELECT PATTERN</li>
                    </ul>
                </nav>
                <div class="container_title_category text-[15px] flex items-center justify-between text-[#7d7d7d]">
                    <span class="title flex">Showing all 13 results</span>
                    <div class="flex gap-[20px]">
                        <span class="flex gap-[8px]">
                            <span>Filter</span>
                            <svg class="svgFilter goldsmith-svg-icon w-[22px] h-[22px] mr-[15px] cursor-pointer" height="512" viewBox="0 0 32 32" width="512" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1">
                                <g fill="rgb(0,0,0)">
                                    <path d="m1.917 24.75h17.333v2h-17.333z"></path>
                                    <path d="m23.5 22.5h-2v6.5h2v-2.25h6.583v-2h-6.583z"></path>
                                    <path d="m12.75 15h17.333v2h-17.333z"></path>
                                    <path d="m8.5 19.25h2v-6.5h-2v2.25h-6.583v2h6.583z"></path>
                                    <path d="m1.917 5.25h17.333v2h-17.333z"></path>
                                    <path d="m23.5 5.25v-2.25h-2v6.5h2v-2.25h6.583v-2z"></path>
                                </g>
                            </svg>
                            <span>Show</span>
                            <button>9</button>
                            <button>12</button>
                            <button>18</button>
                            <button>24</button>
                        </span>

                        <div class="flex gap-[10px]">
                            <li class="val-1 active list-none cursor-pointer" onclick="filter(1)">
                                <svg class="svgList goldsmith-svg-icon" width="22px" height="22px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" fill="currentColor">
                                    <path d="M25,35.83H0V64.17H25Zm0,35.84H0V100H25ZM25,0H0V28.33H25Zm5,71.67V100h70V71.67ZM30,0V28.33h70V0Zm0,35.83V64.17h70V35.83Z">
                                    </path>
                                </svg>
                            </li>
                            <li class="val-2 list-none cursor-pointer" onclick="filter(2)">
                                <svg class="svgTwoColumn goldsmith-svg-icon" width="22px" height="22px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" fill="currentColor">
                                    <path d="M100,100H54V0h46ZM46,0H0V100H46Z" transform="translate(0.5 0.65)"></path>
                                </svg>
                            </li>
                            <li class="val-3 d-none d-sm-flex list-none cursor-pointer" onclick="filter(3)">
                                <svg class="svgThreeColumn goldsmith-svg-icon" width="22px" height="22px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 101 101.15" fill="currentColor">
                                    <path d="M100,100H70V0h30ZM30,0H0V100H30ZM65-.15H35v100H65Z" transform="translate(0.5 0.65)"></path>
                                </svg>
                            </li>
                            <li class="val-4 d-none d-lg-flex cursor-pointer" onclick="filter(4)">
                                <svg class="svgFourColumn goldsmith-svg-icon" width="22px" height="22px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" fill="currentColor">
                                    <path d="M21.5,0H0V100H21.5ZM100,0H78.5V100H100ZM48,0H26.5V100H48ZM74,0H52.5V100H74Z">
                                    </path>
                                </svg>
                            </li>
                            <li class="list-none gap-[5px] flex text-[13px] items-center ml-[10px]">
                                Sort by latest
                                <i class='bx bx-chevron-down'></i>
                            </li>
                        </div>

                    </div>
                </div>
                <!-- start lọc 1 -->
                <div class="relative container_filter-1">
                    <div class="spinner_1 top-[-1rem]">
                        <div class="rect1"></div>
                        <div class="rect2"></div>
                        <div class="rect3"></div>
                        <div class="rect4"></div>
                        <div class="rect5"></div>
                    </div>
                    <div class="product_card product_card1 grid-cols-2 w-[100%] filter-1 px-0 py-[2rem]">
                        <?php foreach ($productList as $product) { ?>
                            <a href="detail.php?product_id=<?php echo $product['id']; ?>" type="<?php echo $product['category_name'] ?>" class="my_card w-[100%] flex gap-[20px] border p-[1.2rem] rounded-[10px] shadow-sm">
                                <div class="image w-[300px] h-[180px] border rounded-[5px]">
                                    <img src="./public/img/product/<?php echo $product['image']; ?>.webp" alt="" class="w-[100px]">
                                    <div class="icon"> <i class='bx bx-heart'></i><i class='bx bxs-right-arrow'></i></div>
                                    <div class="icon"><i class='bx bx-refresh'></i><i class='bx bxs-right-arrow'></i></div>
                                    <div class="icon" onclick="openZoomCard('<?php echo $product['id']; ?>','<?php echo $product['image']; ?>', '<?php echo $product['name']; ?>', '<?php echo $product['price']; ?>','<?php echo $product['description']; ?>', event)">
                                        <i class='bx bx-fullscreen'></i><i class='bx bxs-right-arrow'></i>
                                    </div>
                                </div>
                                <div class="w-[300px]">
                                    <p>
                                        <?php echo $product['name']; ?>
                                    </p>
                                    <div class="price">
                                        $
                                        <?php echo $product['price']; ?>.00
                                    </div>
                                    <div class="content text-[12px] mt-[10px] truncate overflow-hidden ">
                                        <?php echo $product['description']; ?>
                                    </div>
                                    <div class="view w-[100%] h-[8px] relative bg-[#e6e6e6] rounded-[5px] mt-[10px]">
                                        <div class="w-[<?php echo $product['quantity']; ?>%] h-[100%] bg-[red] rounded-l-[5px] absolute top-0 left-0">
                                        </div>
                                    </div>
                                    <div class="quantity">
                                        <div class="text-[13px] text-[#7d7d7d] mt-[10px]">Available: <b class="text-black">
                                                <?php echo $product['quantity']; ?>
                                            </b>
                                        </div>
                                    </div>
                                    <button class="bg-black text-white text-[13px] px-[2.5rem] py-[0.4rem] mt-[10px]">Read more</button>
                                </div>
                            </a>
                        <?php } ?>
                    </div>
                    <!-- end lọc 1 -->

                    <!-- start lọc 2,3,4 -->
                    <div class="product_card product_card2 grid-cols-2 w-[100%] filter-2 hidden px-0 py-[2rem]">
                        <?php foreach ($productList as $product) { ?>
                            <a href="detail.php?product_id=<?php echo $product['id']; ?>" type="<?php echo $product['category_name'] ?>" class="my_card">
                                <div class="image">
                                    <img src="./public/img/product/<?php echo $product['image']; ?>.webp" alt="">
                                    <div class="icon"> <i class='bx bx-heart'></i><i class='bx bxs-right-arrow'></i></div>
                                    <div class="icon"><i class='bx bx-refresh'></i><i class='bx bxs-right-arrow'></i></div>
                                    <div class="icon" onclick="openZoomCard('<?php echo $product['id']; ?>','<?php echo $product['image']; ?>', '<?php echo $product['name']; ?>', '<?php echo $product['price']; ?>','<?php echo $product['description']; ?>', event)">
                                        <i class='bx bx-fullscreen'></i><i class='bx bxs-right-arrow'></i>
                                    </div>
                                    <button>Read more</button>
                                </div>
                                <p>
                                    <?php echo $product['name']; ?>
                                </p>
                                <div class="price">$
                                    <?php echo $product['price']; ?>.00
                                </div>
                            </a>
                        <?php } ?>
                    </div>
                </div>
                <!-- end lọc 2,3,4 -->


                <div class="w-[100%] flex justify-center p-[2rem] container_load_more"><button class="load_more bg-black text-white px-[2.5rem] py-[0.5rem] text-[13px] hover:opacity-[0.7] duration-200 ease-in-out" onclick="load_more()">Load More</button></div>


            </div>
        </div>
        <?php include './view/inc/_zoom-card.php' ?>
    </div>


    <?php include './view/inc/_footer.php' ?>

    <script src="./public/js/product_detail.js"></script>
    <script>
        
        var menu = document.querySelector(".container_menu");
        var myBody = document.querySelector(".container_categories");

        window.addEventListener("scroll", function() {
            // Kiểm tra vị trí cuộn
            var scrollPosition = window.scrollY || document.documentElement.scrollTop;

            // Thêm hoặc xoá class tùy thuộc vào vị trí cuộn
            if (scrollPosition > 0) {
                menu.style.transform = "translateY(-48px)";
                menu.style.position = "fixed";
                myBody.style.marginTop = "4.8rem";
            } else {
                menu.style.transform = "translateY(0px)";
            }
        });
    </script>
</body>

</html>