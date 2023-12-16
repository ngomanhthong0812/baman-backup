<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
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
        <div class="max-w-[1540px] m-auto text-[15px] pb-[5rem]">
            <div class="container_categories flex justify-between py-[2rem]">
                <h1 class="text-[26px] font-[510]">Your Shopping Bag</h1><a href="category.php"
                    class="bg-[#dadada] text-[15px] text-black font-[410] py-2 px-3">Continue Shopping</a>
            </div>
            <div class="flex border-[#c9c9c9] text-[#414141] border-b-[2px] py-[0.5rem]">
                <div class="w-[30%]">Item</div>
                <div class="w-[70%] flex">
                    <span class="w-[20%] flex justify-center">Shipped from</span>
                    <span class="w-[20%] flex justify-center">Attributes</span>
                    <span class="w-[20%] flex justify-center">Quantity</span>
                    <span class="w-[20%] flex justify-center">Price</span>
                    <span class="w-[20%] flex justify-center">Total</span>
                </div>
            </div>
            <?php $quantity = 0?>
            <div class="product_cart">
                <div class="notification w-[100%] flex items-center justify-center p-[0.5rem] font-black"></div>
                <?php if (isset($_SESSION['cart'])) { ?>
                    <?php foreach ($_SESSION['cart'] as $orderItems) { ?>
                        <div class="my_cart flex border-indigo-[#f5f5f5] text-[#929292] border-b-2 py-[1.5rem]">
                            <div class="w-[30%] flex gap-[8px]">
                                <img src="./public/img/product/<?php echo $orderItems["productImage"] ?>.webp" alt=""
                                    class="w-[110px]">
                                <span class="text-[15px] flex flex-col justify-center items-start">
                                    <div class="text-black text-[18px] font-[500]">
                                        <?php echo $orderItems['productName']; ?>
                                    </div>
                                    <div class="leading-[40px] text-[#000000] truncate overflow-hidden w-[250px]">
                                        <?php echo $orderItems['productDesciption']; ?>
                                    </div>
                                    <form action="cart.php" method="post">
                                        <input type="hidden" name="_method" value="delete">
                                        <input type="hidden" name="idRemove" value="<?php echo $orderItems["productId"] ?>">
                                        <button class="hover:text-black">Remove</button>
                                    </form>
                                </span>
                            </div>
                            <form action="cart.php" method="POST" class="w-[70%] flex items-center">
                                <span class="w-[20%] flex justify-center items-center">Vietnamese</span>
                                <span class="w-[20%] flex justify-center items-center">material:<div class="text-black">&nbsp
                                        ...</div></span>
                                <span class="gap-[5px] w-[20%] flex justify-center items-center">
                                    <input type="hidden" name="_method" value="update">
                                    <input type="hidden" name="idQuantityNumber" value="<?php echo $orderItems["productId"] ?>">
                                    <input type="number" name="quantityNumber" class="w-[35px] pl-[5px] border border-black rounded-[3px]" value="<?php echo $orderItems['quantity']?>"></input>
                                    <button class="bg-black text-[11px] p-[0.3rem] h-[100%] text-white px-[1rem] flex justify-center items-center hover:opacity-[0.8]">Update</button>
                                </span>
                                <span class="w-[20%] flex flex-col justify-center items-center">
                                    <div class="text-black">$
                                        <?php echo $orderItems['productPrice'] ?>.00
                                    </div>
                                </span>
                                <span class="w-[20%] flex justify-center items-center text-black ">$
                                    <span class="productTotal">
                                        <?php echo $orderItems['productPrice'] * $orderItems['quantity'] ?>
                                    </span>.00
                                </span>
                            </form>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>

            <div class="flex justify-between text-[#929292] items-center py-[1.5rem]">
                <div>
                    <div class="image-visa mt-[5px]">
                    </div>
                </div>
                <div class="w-[250px]">
                    <div class="w-[100%] flex justify-between">Subtotal: <span class="text-black font-[450]">$<span
                                class="subtotal">0</span>.00</span></div>
                    <div class="w-[100%] flex justify-between leading-[40px]">Est, shipping: <span
                            class="text-black font-[450]">$<span class="shippingTotal">0</span>.00</span></div>
                    <div class="w-[100%] flex justify-between ">Total: <span
                            class="text-[20px] font-[500] text-[#000000]">$<span class="total">0</span>.00</span></div>
                </div>
            </div>
            <div class="flex justify-between gap-[10px]">
                <a href="category.php" class="bg-[#dadada] text-[15px] text-black font-[410] py-2 px-3">Continue
                    Shopping</a>
                <form action="cart.php" method="post" class="w-[70%] flex justify-end">
                    <input type="hidden" name="_method" value="removeAll">
                    <button
                        class="bg-black text-[15px] w-[150px] h-[100%] text-white px-[1rem] flex justify-center items-center hover:opacity-[0.8]"><i class='bx bx-trash' ></i>&nbsp Remove All</button>
                </form>
                <a href="checkout.php"
                    class="bg-black text-[15px] text-white px-[2.5rem] flex justify-center items-center hover:opacity-[0.8]"><i
                        class='bx bx-lock-alt'></i>&nbsp &nbsp Secure Checkout</a>
            </div>


        </div>
    </div>


    <?php include './view/inc/_footer.php' ?>

    <script src="./public/js/product_detail.js"></script>
    <!-- Include jQuery before your other scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        var menu = document.querySelector(".container_menu");
        var myBody = document.querySelector(".container_categories");

        window.addEventListener("scroll", function () {
            // Kiểm tra vị trí cuộn
            var scrollPosition = window.scrollY || document.documentElement.scrollTop;

            // Thêm hoặc xoá class tùy thuộc vào vị trí cuộn
            if (scrollPosition > 0) {
                menu.style.transform = "translateY(-48px)";
                menu.style.position = "fixed";
                myBody.style.marginTop = "4.9rem";
            } else {
                menu.style.transform = "translateY(0px)";
            }
        });
    </script>
</body>

</html>