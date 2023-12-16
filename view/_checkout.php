<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <title>Goldsmith &#8211; Modern WooCommerce Theme</title>
  <link rel="shortcut icon" href="./public/img/logo/123.png" type="image/x-icon">
  <link href='https://fonts.googleapis.com/css?family=Jost' rel='stylesheet'>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="./public/css/output.css">
  <link rel="stylesheet" href="./public/css/style.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <?php include './view/inc/_header.php' ?>

  <div class="max-w-[1540px] m-auto text-[15px] pb-[5rem]">
    <div class="my_body">
      <div class="navbar_pay">
        <div class="logo_bamanpay">
          <img src=".\public\img\logo\123.png" alt="">
          <h2>AMAN</h2>
        </div>
        <div class="pay">
          <h2>Checkout</h2>
        </div>
        <img src="./public/img/ship/7.png" alt="">
      </div>
      <div class="flex border-[#c9c9c9] text-[#414141] border-b-[2px] py-[0.5rem] pt-[3rem]">
        <div class="w-[30%]">Item</div>
        <div class="w-[70%] flex">
          <span class="w-[20%] flex justify-center">Shipped from</span>
          <span class="w-[20%] flex justify-center">Attributes</span>
          <span class="w-[20%] flex justify-center">Quantity</span>
          <span class="w-[20%] flex justify-center">Price</span>
          <span class="w-[20%] flex justify-center">Total</span>
        </div>
      </div>
      <div class="product_cart">
        <?php if (isset($_SESSION['cart'])) { ?>
          <?php foreach ($_SESSION['cart'] as $orderItems) { ?>
            <div class="my_cart flex border-indigo-[#f5f5f5] text-[#929292] border-b-2 py-[1.5rem]">
              <div class="w-[30%] flex gap-[8px]">
                <img src="./public/img/product/<?php echo $orderItems["productImage"] ?>.webp" alt="" class="w-[110px]">
                <span class="text-[15px] flex flex-col justify-center items-start">
                  <div class="text-black text-[18px] font-[500]">
                    <?php echo $orderItems['productName']; ?>
                  </div>
                  <div class="leading-[40px] text-[#000000] truncate overflow-hidden w-[250px]">
                    <?php echo $orderItems['productDesciption']; ?>
                  </div>
                </span>
              </div>
              <div class="w-[70%] flex items-center">
                <span class="w-[20%] flex justify-center items-center">Vietnamese</span>
                <span class="w-[20%] flex justify-center items-center">material:<div class="text-black">&nbsp
                    ...</div></span>
                <span class="gap-[10px] w-[20%] flex justify-center items-center"><span class="flex items-center justify-center">X
                    <?php echo $orderItems['quantity'] ?>
                  </span></span>
                <span class="w-[20%] flex flex-col justify-center items-center">
                  <div class="text-black">$
                    <?php echo $orderItems['productPrice'] ?>.00
                  </div>
                </span>
                <span class="w-[20%] flex justify-center items-center text-black">$
                  <span class="productTotal">
                    <?php echo $orderItems['productPrice'] * $orderItems['quantity'] ?>
                  </span>.00
                </span>
              </div>
            </div>
          <?php } ?>
        <?php } ?>
        <div class="container_sanPham flex items-center justify-center">
          <button class="addDeliveryInformation">Add delivery information</button>
        </div>
        <span class="absolute text-[red]"><?php echo $informationError['error']?></span>


        <div class="flex justify-end">
          <div class="w-[250px]">
            <div class="w-[100%] flex justify-between">Subtotal: <span class="text-black font-[450]">$<span class="subtotal">0</span>.00</span></div>
            <div class="w-[100%] flex justify-between leading-[40px]">Est, shipping: <span class="text-black font-[450]">$<span class="shippingTotal">0</span>.00</span></div>
            <div class="w-[100%] flex justify-between ">Total: <span class="text-[20px] font-[500] text-[#000000]">$<span class="total">0</span>.00</span></div>
          </div>
        </div>
        <form action="checkout.php" method="post" class="buy_now mt-[20px] p-0">
          <input type="submit" name="btnCheckout" value="Continue to checkout" class="btn bg-black hover:opacity-[0.8]">


          <!-- checkout -->
          <div class="container_row">
            <div class="row relative">
              <div class="absolute rounded-full flex items-center justify-end px-[3.5rem] top-6 text-[25px] cursor-pointer">
                <i class='bx bx-x close'></i>
              </div>
              <div class="col-75">
                <div class="container">
                  <form action="checkout.php" method="post">
                    <div class="row">
                      <div class="col-50">
                        <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                        <input type="text" id="fname" name="firstname" placeholder="John M. Doe" value="<?php echo $informationError['firstname'] ?>" />
                        <label for="email"><i class="fa fa-envelope"></i> Email</label>
                        <input type="text" id="email" name="email" placeholder="john@example.com"  value="<?php echo $informationError['email'] ?>"/>
                        <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                        <input type="text" id="adr" name="address" placeholder="542 W. 15th Street" value="<?php echo $informationError['address'] ?>" />
                        <label for="city"><i class="fa fa-institution"></i> Phone</label>
                        <input type="text" id="city" name="phone" placeholder="" value="<?php echo $informationError['phone'] ?>" />
                        <div class="row">
                          <div class="col-50">
                            <label for="state">State</label>
                            <input type="text" id="state" name="state" placeholder="NY" />
                          </div>
                          <div class="col-50">
                            <label for="zip">Zip</label>
                            <input type="text" id="zip" name="zip" placeholder="10001" />
                          </div>
                        </div>
                      </div>
                      <div class="col-50">
                        <label for="fname">Accepted Cards</label>
                        <div class="icon-container">
                          <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M470.1 231.3s7.6 37.2 9.3 45H446c3.3-8.9 16-43.5 16-43.5-.2.3 3.3-9.1 5.3-14.9l2.8 13.4zM576 80v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h480c26.5 0 48 21.5 48 48zM152.5 331.2L215.7 176h-42.5l-39.3 106-4.3-21.5-14-71.4c-2.3-9.9-9.4-12.7-18.2-13.1H32.7l-.7 3.1c15.8 4 29.9 9.8 42.2 17.1l35.8 135h42.5zm94.4.2L272.1 176h-40.2l-25.1 155.4h40.1zm139.9-50.8c.2-17.7-10.6-31.2-33.7-42.3-14.1-7.1-22.7-11.9-22.7-19.2.2-6.6 7.3-13.4 23.1-13.4 13.1-.3 22.7 2.8 29.9 5.9l3.6 1.7 5.5-33.6c-7.9-3.1-20.5-6.6-36-6.6-39.7 0-67.6 21.2-67.8 51.4-.3 22.3 20 34.7 35.2 42.2 15.5 7.6 20.8 12.6 20.8 19.3-.2 10.4-12.6 15.2-24.1 15.2-16 0-24.6-2.5-37.7-8.3l-5.3-2.5-5.6 34.9c9.4 4.3 26.8 8.1 44.8 8.3 42.2.1 69.7-20.8 70-53zM528 331.4L495.6 176h-31.1c-9.6 0-16.9 2.8-21 12.9l-59.7 142.5H426s6.9-19.2 8.4-23.3H486c1.2 5.5 4.8 23.3 4.8 23.3H528z" />
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M186.3 258.2c0 12.2-9.7 21.5-22 21.5-9.2 0-16-5.2-16-15 0-12.2 9.5-22 21.7-22 9.3 0 16.3 5.7 16.3 15.5zM80.5 209.7h-4.7c-1.5 0-3 1-3.2 2.7l-4.3 26.7 8.2-.3c11 0 19.5-1.5 21.5-14.2 2.3-13.4-6.2-14.9-17.5-14.9zm284 0H360c-1.8 0-3 1-3.2 2.7l-4.2 26.7 8-.3c13 0 22-3 22-18-.1-10.6-9.6-11.1-18.1-11.1zM576 80v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h480c26.5 0 48 21.5 48 48zM128.3 215.4c0-21-16.2-28-34.7-28h-40c-2.5 0-5 2-5.2 4.7L32 294.2c-.3 2 1.2 4 3.2 4h19c2.7 0 5.2-2.9 5.5-5.7l4.5-26.6c1-7.2 13.2-4.7 18-4.7 28.6 0 46.1-17 46.1-45.8zm84.2 8.8h-19c-3.8 0-4 5.5-4.2 8.2-5.8-8.5-14.2-10-23.7-10-24.5 0-43.2 21.5-43.2 45.2 0 19.5 12.2 32.2 31.7 32.2 9 0 20.2-4.9 26.5-11.9-.5 1.5-1 4.7-1 6.2 0 2.3 1 4 3.2 4H200c2.7 0 5-2.9 5.5-5.7l10.2-64.3c.3-1.9-1.2-3.9-3.2-3.9zm40.5 97.9l63.7-92.6c.5-.5.5-1 .5-1.7 0-1.7-1.5-3.5-3.2-3.5h-19.2c-1.7 0-3.5 1-4.5 2.5l-26.5 39-11-37.5c-.8-2.2-3-4-5.5-4h-18.7c-1.7 0-3.2 1.8-3.2 3.5 0 1.2 19.5 56.8 21.2 62.1-2.7 3.8-20.5 28.6-20.5 31.6 0 1.8 1.5 3.2 3.2 3.2h19.2c1.8-.1 3.5-1.1 4.5-2.6zm159.3-106.7c0-21-16.2-28-34.7-28h-39.7c-2.7 0-5.2 2-5.5 4.7l-16.2 102c-.2 2 1.3 4 3.2 4h20.5c2 0 3.5-1.5 4-3.2l4.5-29c1-7.2 13.2-4.7 18-4.7 28.4 0 45.9-17 45.9-45.8zm84.2 8.8h-19c-3.8 0-4 5.5-4.3 8.2-5.5-8.5-14-10-23.7-10-24.5 0-43.2 21.5-43.2 45.2 0 19.5 12.2 32.2 31.7 32.2 9.3 0 20.5-4.9 26.5-11.9-.3 1.5-1 4.7-1 6.2 0 2.3 1 4 3.2 4H484c2.7 0 5-2.9 5.5-5.7l10.2-64.3c.3-1.9-1.2-3.9-3.2-3.9zm47.5-33.3c0-2-1.5-3.5-3.2-3.5h-18.5c-1.5 0-3 1.2-3.2 2.7l-16.2 104-.3.5c0 1.8 1.5 3.5 3.5 3.5h16.5c2.5 0 5-2.9 5.2-5.7L544 191.2v-.3zm-90 51.8c-12.2 0-21.7 9.7-21.7 22 0 9.7 7 15 16.2 15 12 0 21.7-9.2 21.7-21.5.1-9.8-6.9-15.5-16.2-15.5z" />
                          </svg>
                        </div>
                        <label for="cname">Name on Card</label>
                        <input type="text" id="cname" name="cardname" placeholder="John More Doe" />
                        <label for="ccnum">Credit card number</label>
                        <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" />
                        <label for="expmonth">Exp Month</label>
                        <input type="text" id="expmonth" name="expmonth" placeholder="September" />
                        <div class="row">
                          <div class="col-50">
                            <label for="expyear">Exp Year</label>
                            <input type="text" id="expyear" name="expyear" placeholder="2018" />
                          </div>
                          <div class="col-50">
                            <label for="cvv">CVV</label>
                            <input type="text" id="cvv" name="cvv" placeholder="352" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <label class="flex justify-between">
                      <div> <input type="checkbox" checked="checked" name="sameadr" />
                        Shipping address same as billing</div>
                      <div class="add_now cursor-pointer bg-black hover:opacity-[0.8]">Add</div>
                    </label>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </form>
        <!-- checkout -->

      </div>

    </div>
  </div>


  <!-- footer -->
  <?php include './view/inc/_footer.php' ?>
  <!-- footer -->
  <script src="./public/js/product_detail.js"></script>
  <script>
    //hàm ẩn và hiện bảng thông tin nhận hàng
    function onOffInformation() {
      var button = document.querySelector(".addDeliveryInformation")
      var close = document.querySelector(".container_row .close")
      var add = document.querySelector(".container_row .add_now")

      button.addEventListener('click', function() {
        document.querySelector(".container_row").style.opacity = "1";
        document.querySelector(".container_row").style.pointerEvents = "auto";
      })
      close.addEventListener('click', function() {
        document.querySelector(".container_row").style.opacity = "0";
        document.querySelector(".container_row").style.pointerEvents = "none";
      })
      add.addEventListener('click', function() {
        document.querySelector(".container_row").style.opacity = "0";
        document.querySelector(".container_row").style.pointerEvents = "none";
      })
    }
    onOffInformation();

    var menu = document.querySelector(".container_menu");
    var myBody = document.querySelector(".my_body");

    window.addEventListener("scroll", function() {
      // Kiểm tra vị trí cuộn
      var scrollPosition = window.scrollY || document.documentElement.scrollTop;

      // Thêm hoặc xoá class tùy thuộc vào vị trí cuộn
      if (scrollPosition > 0) {
        menu.style.transform = "translateY(-48px)";
        menu.style.position = "fixed";
        myBody.style.paddingTop = "5rem";
      } else {
        menu.style.transform = "translateY(0px)";
      }
    });
  </script>
</body>

</html>