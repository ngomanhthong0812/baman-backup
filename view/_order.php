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
    <div class="w-[100%] my_login">
        <div class="px-[1rem] m-auto flex flex-col justify-center bg-[#f5f5f5]">
            <ul class="flex gap-[5px] text-[12px] text-gray-300 leading-8 w-[100px] m-auto">
                <li class="text-black"><a href="index.php">HOME</a></li>
                &#8226;
                <li class="text-black"><a href="#">CHECKOUT</a></li>
            </ul>
        </div>
    </div>
    <div class="my_body">
        <div class="max-w-[1540px] m-auto pt-[1rem] text-[15px] pb-[5rem]">
            <div class="w-[330px] border p-[0.5rem] flex items-center justify-center bg-[#f5f5f5] text-[14px]">Thank you. Your
                order has been recevied.</div>
            <div class="w-[800px] border-sloid border-2 py-2 px-1 flex items-center mt-[2rem]">
                <div class="flex items-center justify-center">
                    <span class="border-dashed border-r p-2">Order number: <p><?php echo $_SESSION['code'] ;?></p></span>
                    <span class="border-dashed border-r p-2">Date: <p class="flex-nowrap"><?php echo $_SESSION['date']?></p></span>
                    <span class="border-dashed border-r p-2">Total: <p>$<?php echo $_SESSION['total'] ;?>.00</p></span>
                    <span class="px-3 p-2">Payment method: <p class="flex-nowrap">Direct bank transfer</p></span>
                </div>
            </div>
            <div class="text-[20px] font-[500] mt-[1rem]">Our bank details</div>
            <span class="font-[500]">Nine</span>
            <div class="mt-[0.6rem]">
                <div class="flex text-[14px]">&#8226;&nbsp;Bank: <p>&nbsp;Mb Bank</p>
                </div>
                <div class="flex text-[14px]">&#8226;&nbsp;Account number: <p>&nbsp;DEMO0123456789</p>
                </div>
                <div class="flex text-[14px]">&#8226;&nbsp;Sort code: <p>&nbsp;67589</p>
                </div>
                <div class="flex text-[14px]">&#8226;&nbsp;IBANK: <p>&nbsp;DEMO0123456789</p>
                </div>
                <div class="flex text-[14px]">&#8226;&nbsp;BIC: <p>&nbsp;DD3435</p>
                </div>
            </div>
        </div>
    </div>


    <?php include './view/inc/_footer.php' ?>

    <script src="./public/js/product_detail.js"></script>
    <script>
        var menu = document.querySelector(".container_menu");
        var myBody = document.querySelector(".my_login");

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