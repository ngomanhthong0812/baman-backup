<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/css/style.css">
    <?php foreach ($productList as $product) { ?>
        <?php if ($product['id'] == $_GET['product_id']) { ?>
            <title><?php echo $product['name'] ?> &#8211; Goldsmith &#8211; Modern WooCommerce Theme</title>
        <?php break;
        } ?>
    <?php } ?>
    <link rel="shortcut icon" href="./public/img/logo/123.png" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Jost' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./public/css/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php include './view/inc/_header.php' ?>

    <div class="my_body">
        <?php foreach ($productList as $product) { ?>
            <?php if ($product['id'] == $_GET["product_id"]) { ?>
                <div class="product_details max-w-[1540px] flex m-auto pt-[1rem] gap-[20px]">
                    <div class="w-[50%] flex gap-[10px] bg-white p-0">
                        <div class="image_child">
                            <img src="./public/img/product/<?php echo $product['image'] ?>.webp" alt="" class="w-[300px] cursor-pointer" onclick="btnChild(0)">
                            <img src="./public/img/product/<?php echo $product['image'] ?>-1.webp" alt="" class="w-[300px] cursor-pointer mt-[10px]" onclick="btnChild(1)">
                            <img src="./public/img/product/<?php echo $product['image'] ?>-2.webp" alt="" class="w-[300px] cursor-pointer mt-[10px]" onclick="btnChild(2)">
                            <img src="./public/img/product/<?php echo $product['image'] ?>-3.webp" alt="" class="w-[300px] cursor-pointer mt-[10px]" onclick="btnChild(3)">
                            <img src="./public/img/product/<?php echo $product['image'] ?>-4.webp" alt="" class="w-[300px] cursor-pointer mt-[10px]" onclick="btnChild(4)">
                        </div>
                        <div class="image truncate relative">
                            <div class="my_prev absolute left-[10px] top-[50%] text-[30px] cursor-pointer p-2 flex items-center justify-center rounded-full bg-white z-10">
                                <i class='bx bx-chevron-left'></i>
                            </div>
                            <div class="image-1 flex" style=" transition: transform 0.5s ease-in-out">
                                <img src="./public/img/product/<?php echo $product['image'] ?>.webp" alt="" class="w-[100%] h-[600px] cursor-grab" style="flex: 0 0 auto;">
                                <img src="./public/img/product/<?php echo $product['image'] ?>-1.webp" class="w-[100%] h-[600px] cursor-grab" style="flex: 0 0 auto;">
                                <img src="./public/img/product/<?php echo $product['image'] ?>-2.webp" alt="" class="w-[100%] h-[600px] cursor-grab" style="flex: 0 0 auto;">
                                <img src="./public/img/product/<?php echo $product['image'] ?>-3.webp" alt="" class="w-[100%] h-[600px] cursor-grab" style="flex: 0 0 auto;">
                                <img src="./public/img/product/<?php echo $product['image'] ?>-4.webp" alt="" class="w-[100%] h-[600px] cursor-grab" style="flex: 0 0 auto;">
                            </div>
                            <div class="my_next absolute right-[10px] top-[50%] text-[30px] cursor-pointer p-2 flex items-center justify-center rounded-full bg-white z-10">
                                <i class='bx bx-chevron-right'></i>
                            </div>
                        </div>
                    </div>
                    <div class="details w-[50%]">
                        <div class="menu flex gap-[5px] text-[12px] text-black">
                            <a href="#">HOME</a>
                            <li class="p-0 text-gray-300">/</li>
                            <a href="#">PRODUCT</a>
                            <li class="p-0 text-gray-300">/</li>
                            <li class="p-0 name_product_1">
                                <?php echo $product['name'] ?>
                            </li>
                        </div>
                        <div class="name_product text-[30px] font-[500]">
                            <?php echo $product['name'] ?>
                        </div>
                        <div class="content text-[13px] text-gray-500 font-[400] leading-6">
                            <?php echo $product['description'] ?>
                        </div>
                        <div class="flex items-center text-[15px] rounded-[5px] bg-[#f8f9fa] border px-[1rem] py-[0.5rem]">
                            <div class="w-[10%]"><i class='bx bxs-timer text-[50px] text-red-500'></i></div>
                            <div class="w-[80%] pr-[50px] text-gray-500 font-[400]">Time remaining until the end of the offer;
                                Hurry to take advantage of the offer</div>
                            <div class="w-[10%]">Expired</div>
                        </div>
                        <div class="price text-18px italic font-[500]">$
                            <?php echo $product['price'] ?>.00
                        </div>
                        <?php if ($product['quantity'] == 0) { ?>
                            <span class="status m-0 rounded-[10px] max-w-full inline-block">OUT OF STOCK</span>
                        <?php } else { ?>
                            <span class="status bg-[#f5f4ee] text-[black] m-0 rounded-[10px] max-w-full inline-block"><?php echo $product['quantity'] ?> IN STOCK (CAN BE BACKORDERED)</span>
                        <?php } ?>
                        <div>
                            <div class="flex cursor-pointer gap-[7px] text-[13px] font-[500] items-center mt-[13px]">
                                <div class="w-[30px] h-[30px] flex items-center justify-center rounded-full bg-[#7a808d]"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path d="M112 0C85.5 0 64 21.5 64 48V96H16c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 272c8.8 0 16 7.2 16 16s-7.2 16-16 16H64 48c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 240c8.8 0 16 7.2 16 16s-7.2 16-16 16H64 16c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 208c8.8 0 16 7.2 16 16s-7.2 16-16 16H64V416c0 53 43 96 96 96s96-43 96-96H384c0 53 43 96 96 96s96-43 96-96h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V288 256 237.3c0-17-6.7-33.3-18.7-45.3L512 114.7c-12-12-28.3-18.7-45.3-18.7H416V48c0-26.5-21.5-48-48-48H112zM544 237.3V256H416V160h50.7L544 237.3zM160 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96zm272 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0z" />
                                    </svg></div>
                                DELIVERY & RETURN
                            </div>
                            <div class="flex cursor-pointer gap-[7px] text-[13px] font-[500] items-center mt-[13px]">
                                <div class="w-[30px] h-[30px] flex items-center justify-center rounded-full bg-[#7a808d]"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path d="M177.9 494.1c-18.7 18.7-49.1 18.7-67.9 0L17.9 401.9c-18.7-18.7-18.7-49.1 0-67.9l50.7-50.7 48 48c6.2 6.2 16.4 6.2 22.6 0s6.2-16.4 0-22.6l-48-48 41.4-41.4 48 48c6.2 6.2 16.4 6.2 22.6 0s6.2-16.4 0-22.6l-48-48 41.4-41.4 48 48c6.2 6.2 16.4 6.2 22.6 0s6.2-16.4 0-22.6l-48-48 41.4-41.4 48 48c6.2 6.2 16.4 6.2 22.6 0s6.2-16.4 0-22.6l-48-48 50.7-50.7c18.7-18.7 49.1-18.7 67.9 0l92.1 92.1c18.7 18.7 18.7 49.1 0 67.9L177.9 494.1z" />
                                    </svg></div>
                                SIZE GUIDE
                            </div>
                            <div class="flex cursor-pointer gap-[7px] text-[13px] font-[500] items-center mt-[13px]">
                                <div class="w-[30px] h-[30px] flex items-center justify-center rounded-full bg-[#7a808d]"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192H400V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192z" />
                                    </svg></div>
                                ESTIMATED DELIVERY: OCT 10 OCT 14
                            </div>
                        </div>
                        <div class="bg-[#fffcf2] flex items-center p-[1rem] gap-[10px] rounded-[5px] border-t border-b border-l border-r border-[#fff5d2]">
                            <i class="bx bx-shopping-bag text-[20px] text-[#ffdb66]"></i><span class="text-[12px] font-[500] tracking-wide">31 people have this in their carts right now. It's
                                running out!</span>
                        </div>

                        <form action="cart.php" method="post" class="flex gap-[1rem] py-[0.7rem]">
                            <input type="hidden" name="_method" value="create">
                            <input type="hidden" name="productId" value="<?php echo $product['id'] ?>">
                            <input type="hidden" name="productName" value="<?php echo $product['name'] ?>">
                            <input type="hidden" name="productImage" value="<?php echo $product['image'] ?>">
                            <input type="hidden" name="productPrice" value="<?php echo $product['price'] ?>">
                            <input type="hidden" name="productDesciption" value="<?php echo $product['description'] ?>">
                            <span class="gap-[10px] w-[20%] flex justify-center items-center">
                                <div class="cursor-pointer w-[30px] h-[30px] font-[500] shadow-sm rounded-full text-black flex items-center justify-center" id="removeQuantity">-</div>
                                <input class="w-[20px] text-center flex items-center justify-center" name="quantity" value="1" id="quantity">
                                <div class="cursor-pointer w-[30px] h-[30px] font-[500] shadow-sm rounded-full text-black flex items-center justify-center" id="addQuantity">+</div>
                            </span>
                            <?php if ($product['quantity'] == 0) { ?>
                                <div class="bg-[red] text-[13px] text-white px-[3rem] py-[0.5rem] flex justify-center items-center hover:opacity-[0.8]">OUT OF STOCK</div>
                            <?php } else { ?>
                                <button class="bg-black text-[13px] text-white px-[3rem] py-[0.5rem] flex justify-center items-center hover:opacity-[0.8]">Add
                                    to cart</button>
                            <?php } ?>
                        </form>

                        <div class="flex gap-[5px] items-center">
                            <div class="title text-[13px] font-[500]">Share:</div>
                            <div class="w-[30px] h-[30px] flex items-center justify-center rounded-full bg-[#3b5998] cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <style>
                                        svg {
                                            fill: #ffffff
                                        }
                                    </style>
                                    <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" />
                                </svg>
                            </div>
                            <div class="w-[30px] h-[30px] flex items-center justify-center rounded-full bg-[#1da1f2] cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <style>
                                        svg {
                                            fill: #ffffff
                                        }
                                    </style>
                                    <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
                                </svg>
                            </div>
                            <div class="w-[30px] h-[30px] flex items-center justify-center rounded-full bg-[#e60023] cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 496 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M496 256c0 137-111 248-248 248-25.6 0-50.2-3.9-73.4-11.1 10.1-16.5 25.2-43.5 30.8-65 3-11.6 15.4-59 15.4-59 8.1 15.4 31.7 28.5 56.8 28.5 74.8 0 128.7-68.8 128.7-154.3 0-81.9-66.9-143.2-152.9-143.2-107 0-163.9 71.8-163.9 150.1 0 36.4 19.4 81.7 50.3 96.1 4.7 2.2 7.2 1.2 8.3-3.3.8-3.4 5-20.3 6.9-28.1.6-2.5.3-4.7-1.7-7.1-10.1-12.5-18.3-35.3-18.3-56.6 0-54.7 41.4-107.6 112-107.6 60.9 0 103.6 41.5 103.6 100.9 0 67.1-33.9 113.6-78 113.6-24.3 0-42.6-20.1-36.7-44.8 7-29.5 20.5-61.3 20.5-82.6 0-19-10.2-34.9-31.4-34.9-24.9 0-44.9 25.7-44.9 60.2 0 22 7.4 36.8 7.4 36.8s-24.5 103.8-29 123.2c-5 21.4-3 51.6-.9 71.2C65.4 450.9 0 361.1 0 256 0 119 111 8 248 8s248 111 248 248z" />
                                </svg>
                            </div>
                            <div class="w-[30px] h-[30px] flex items-center justify-center rounded-full bg-[#0077b5] cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <style>
                                        svg {
                                            fill: #ffffff
                                        }
                                    </style>
                                    <path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z" />
                                </svg>
                            </div>
                            <div class="w-[30px] h-[30px] flex items-center justify-center rounded-full bg-[#25d366] cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <style>
                                        svg {
                                            fill: #ffffff
                                        }
                                    </style>
                                    <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                                </svg>
                            </div>
                            <div class="w-[30px] h-[30px] flex items-center justify-center rounded-full bg-[#0088cc] cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 496 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M248,8C111.033,8,0,119.033,0,256S111.033,504,248,504,496,392.967,496,256,384.967,8,248,8ZM362.952,176.66c-3.732,39.215-19.881,134.378-28.1,178.3-3.476,18.584-10.322,24.816-16.948,25.425-14.4,1.326-25.338-9.517-39.287-18.661-21.827-14.308-34.158-23.215-55.346-37.177-24.485-16.135-8.612-25,5.342-39.5,3.652-3.793,67.107-61.51,68.335-66.746.153-.655.3-3.1-1.154-4.384s-3.59-.849-5.135-.5q-3.283.746-104.608,69.142-14.845,10.194-26.894,9.934c-8.855-.191-25.888-5.006-38.551-9.123-15.531-5.048-27.875-7.717-26.8-16.291q.84-6.7,18.45-13.7,108.446-47.248,144.628-62.3c68.872-28.647,83.183-33.623,92.511-33.789,2.052-.034,6.639.474,9.61,2.885a10.452,10.452,0,0,1,3.53,6.716A43.765,43.765,0,0,1,362.952,176.66Z" />
                                </svg>
                            </div>
                            <div class="w-[30px] h-[30px] flex items-center justify-center rounded-full bg-[#7360f2] cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M444 49.9C431.3 38.2 379.9.9 265.3.4c0 0-135.1-8.1-200.9 52.3C27.8 89.3 14.9 143 13.5 209.5c-1.4 66.5-3.1 191.1 117 224.9h.1l-.1 51.6s-.8 20.9 13 25.1c16.6 5.2 26.4-10.7 42.3-27.8 8.7-9.4 20.7-23.2 29.8-33.7 82.2 6.9 145.3-8.9 152.5-11.2 16.6-5.4 110.5-17.4 125.7-142 15.8-128.6-7.6-209.8-49.8-246.5zM457.9 287c-12.9 104-89 110.6-103 115.1-6 1.9-61.5 15.7-131.2 11.2 0 0-52 62.7-68.2 79-5.3 5.3-11.1 4.8-11-5.7 0-6.9.4-85.7.4-85.7-.1 0-.1 0 0 0-101.8-28.2-95.8-134.3-94.7-189.8 1.1-55.5 11.6-101 42.6-131.6 55.7-50.5 170.4-43 170.4-43 96.9.4 143.3 29.6 154.1 39.4 35.7 30.6 53.9 103.8 40.6 211.1zm-139-80.8c.4 8.6-12.5 9.2-12.9.6-1.1-22-11.4-32.7-32.6-33.9-8.6-.5-7.8-13.4.7-12.9 27.9 1.5 43.4 17.5 44.8 46.2zm20.3 11.3c1-42.4-25.5-75.6-75.8-79.3-8.5-.6-7.6-13.5.9-12.9 58 4.2 88.9 44.1 87.8 92.5-.1 8.6-13.1 8.2-12.9-.3zm47 13.4c.1 8.6-12.9 8.7-12.9.1-.6-81.5-54.9-125.9-120.8-126.4-8.5-.1-8.5-12.9 0-12.9 73.7.5 133 51.4 133.7 139.2zM374.9 329v.2c-10.8 19-31 40-51.8 33.3l-.2-.3c-21.1-5.9-70.8-31.5-102.2-56.5-16.2-12.8-31-27.9-42.4-42.4-10.3-12.9-20.7-28.2-30.8-46.6-21.3-38.5-26-55.7-26-55.7-6.7-20.8 14.2-41 33.3-51.8h.2c9.2-4.8 18-3.2 23.9 3.9 0 0 12.4 14.8 17.7 22.1 5 6.8 11.7 17.7 15.2 23.8 6.1 10.9 2.3 22-3.7 26.6l-12 9.6c-6.1 4.9-5.3 14-5.3 14s17.8 67.3 84.3 84.3c0 0 9.1.8 14-5.3l9.6-12c4.6-6 15.7-9.8 26.6-3.7 14.7 8.3 33.4 21.2 45.8 32.9 7 5.7 8.6 14.4 3.8 23.6z" />
                                </svg>
                            </div>
                            <div class="w-[30px] h-[30px] flex items-center justify-center rounded-full bg-[#4c75a3] cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M31.4907 63.4907C0 94.9813 0 145.671 0 247.04V264.96C0 366.329 0 417.019 31.4907 448.509C62.9813 480 113.671 480 215.04 480H232.96C334.329 480 385.019 480 416.509 448.509C448 417.019 448 366.329 448 264.96V247.04C448 145.671 448 94.9813 416.509 63.4907C385.019 32 334.329 32 232.96 32H215.04C113.671 32 62.9813 32 31.4907 63.4907ZM75.6 168.267H126.747C128.427 253.76 166.133 289.973 196 297.44V168.267H244.16V242C273.653 238.827 304.64 205.227 315.093 168.267H363.253C359.313 187.435 351.46 205.583 340.186 221.579C328.913 237.574 314.461 251.071 297.733 261.227C316.41 270.499 332.907 283.63 346.132 299.751C359.357 315.873 369.01 334.618 374.453 354.747H321.44C316.555 337.262 306.614 321.61 292.865 309.754C279.117 297.899 262.173 290.368 244.16 288.107V354.747H238.373C136.267 354.747 78.0267 284.747 75.6 168.267Z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
        <div class="product_content py-[5rem] max-w-[1540px] m-auto">
            <div class="flex gap-[20px] font-[600] text-[14.3px] border-b py-[0.6rem] relative">
                <div class="text-gray-500 cursor-pointer">DESCRIPTION</div>
                <span class="w-[93px] h-[1px] bg-black absolute bottom-[-1px]"></span>
                <div class="cursor-pointer">ADDITIONAL INFORMATION</div>
                <div class="cursor-pointer"> REVIEWS (0)</div>
                <div class="cursor-pointer"> Q & A</div>
            </div>
            <div class="text-[14px] text-gray-500 font-[400] leading-6 mt-[15px]">Our favorite jean meets our favorite
                decade. Made from premium non-stretch Japanese denim for a vintage-inspired look, the ’90s Cheeky Jean
                has an easy straight leg, an extra-high rise, and a butt-boosting rear fit. Pellentesque habitant morbi
                tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae,
                ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi
                vitae est. Mauris placerat eleifend leo.</div>
            <div class="mt-[10px] text-[20px] font-[600]">Features</div>
            <div class="mt-[10px]">
                <div class="flex items-center text-[14px] text-gray-500 font-[400] gap-[5px]"><span class="text-[23px]">&#8226;</span>Lexie is 5’8”, size 0, wearing a 23 Ankle</div>
                <div class="flex items-center text-[14px] text-gray-500 font-[400] gap-[5px]"><span class="text-[23px]">&#8226;</span>Straight fit. Cropped at the ankle. Sits at high waist. Rise:
                    11”. Inseam: 26.5”. Leg opening: 14” (size 28).</div>
                <div class="flex items-center text-[14px] text-gray-500 font-[400] gap-[5px]"><span class="text-[23px]">&#8226;</span>Rigid: 100% cottonMachine wash cold. Tumble dry low.</div>
                <div class="flex items-center text-[14px] text-gray-500 font-[400] gap-[5px]"><span class="text-[23px]">&#8226;</span>Button fly</div>
                <div class="flex items-center text-[14px] text-gray-500 font-[400] gap-[5px]"><span class="text-[23px]">&#8226;</span>Made in NineTheme</div>
                <div class="flex items-center text-[14px] text-gray-500 font-[400] gap-[5px]"><span class="text-[23px]">&#8226;</span>Safer For The Environment: Our denim factory partner recycles
                    98% of their water using reverse osmosis filtration and keeps byproducts out of the environment by
                    mixing them with concrete to create building materials.</div>
                <div class="flex items-center text-[14px] text-gray-500 font-[400] gap-[5px]"><span class="text-[23px]">&#8226;</span>Questions about fit?</div>
            </div>
        </div>
        <div class="max-w-[1540px] m-auto truncate">
            <div class="title text-[20px] font-[600] flex justify-between">You May Also Like <div class="text-[30px] text-gray-400"><i class='bx bx-chevron-left cursor-pointer'></i><i class='bx bx-chevron-right cursor-pointer'></i></div>
            </div>
            <div class="product_card flex py-[1.5rem]" style="grid-gap: 20px;">
                <?php for ($i = 7; $i < 13; $i++) { ?>
                    <?php if ($i + 1 != $_GET["product_id"]) { ?>
                        <a href="detail.php?product_id=<?php echo $productList[$i]['id']; ?>" class="my_card w-[30%]" style="flex: 0 0 auto;">
                            <div class="image">
                                <img src="./public/img/product/<?php echo $productList[$i]['id']; ?>.webp" alt="">
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
                <?php } ?>
            </div>
        </div>
        <div class="max-w-[1540px] m-auto truncate py-[1rem]">
            <div class="title text-[20px] font-[600] flex justify-between">Viewers Also Liked<div class="text-[30px] text-gray-400"><i class='bx bx-chevron-left cursor-pointer'></i><i class='bx bx-chevron-right cursor-pointer'></i></div>
            </div>
            <div class="product_card flex py-[1.5rem]" style="grid-gap: 20px;">
                <?php for ($i = 0; $i < 7; $i++) { ?>
                    <?php if ($i + 1 != $_GET["product_id"]) { ?>
                        <a href="detail.php?product_id=<?php echo $productList[$i]['id']; ?>" class="my_card w-[30%]" style="flex: 0 0 auto;">
                            <div class="image">
                                <img src="./public/img/product/<?php echo $productList[$i]['id']; ?>.webp" alt="">
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
                <?php } ?>

            </div>
        </div>



        <!-- zoom card -->
        <?php include './view/inc/_zoom-card.php' ?>
        <!-- zoom card -->

    </div>
    <!-- footer -->
    <?php include './view/inc/_footer.php' ?>
    <!-- footer -->
    <script src="./public/js/product_detail.js"></script>
    <script>
        var menu = document.querySelector(".container_menu");
        var product_detail = document.querySelector(".product_details");

        window.addEventListener("scroll", function() {
            // Kiểm tra vị trí cuộn
            var scrollPosition = window.scrollY || document.documentElement.scrollTop;

            // Thêm hoặc xoá class tùy thuộc vào vị trí cuộn
            if (scrollPosition > 0) {
                menu.style.transform = "translateY(-48px)";
                menu.style.position = "fixed";
                product_detail.style.paddingTop = "6rem";
            } else {
                menu.style.transform = "translateY(0px)";
            }
        });
    </script>

</body>

</html>