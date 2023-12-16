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
        <div class="max-w-[1540px] px-[1rem] m-auto flex flex-col justify-center bg-[#f5f5f5]">
            <ul class="flex gap-[5px] text-[12px] text-gray-300 leading-8 w-[100px] m-auto">
                <li class="text-black"><a href="./public/home.php">HOME</a></li>
                &#8226;
                <li class="text-black"><a href="./public/login.php">LOGIN</a></li>
            </ul>
        </div>
    </div>
    <div class="my_body">
        <div class="form_dang_nhap">
            <div class="form_dang_nhap_2">
                <form class="border text-[13px]" action="login.php" method="post">
                    <h2>Login</h2>
                    <div class="leading-6">
                        <p>If you don't have an account,</p><a href="register.php" class="dang_ki font-[550]">Register here</a>
                    </div>
                    <input type="email" id="email" name="email" value="<?php echo $arrUser['email']?>" placeholder="Email" required>
                    <input type="password" id="password" name="password" value="<?php echo $arrUser['password']?>" placeholder="Password" required>
                    <span class="absolute ml-[5px] text-[red] text-[10px] "><?php echo $arrUser['notificationPasswordEmail']?></span>
                    <input type="submit" value="Login" name="login">
                    <div class="quen_mat_khau"><a href="#">Forgot password</a></div>
                    <div class="or">Or log in with</div>
                    <div class="social-login">
                        <a href="https://m.facebook.com/login/?locale=vi_VN&refsrc=deprecated" class="facebook">Facebook</a>
                        <a href="https://accounts.google.com/InteractiveLogin/signinchooser?hl=vi&ifkv=Af_xneFlvO-Khlwmzix0y_WZYDCnbN7JQeJew3wxMMf6Y3YVcfnxQd6L03o9Kaa9ll-jMFdcjvPnmg&flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="google">Google</a>
                        <a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoidmkifQ%3D%3D%22%7D" class="twitter">Twitter</a>
                    </div>

                </form>

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