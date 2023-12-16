//đồng hồ đếm ngược
function updateCountdown() {
  const now = new Date();
  const targetTime = new Date();

  // Đặt thời gian đích là 5:00:00 sáng
  targetTime.setHours(2, 0, 0, 0);

  // Nếu hiện tại đã vượt qua thời gian đích, đặt thời gian đích cho ngày hôm sau
  if (now > targetTime) {
    targetTime.setDate(targetTime.getDate() + 1);
  }

  // Tính toán thời gian còn lại từ hiện tại đến thời gian đích
  let timeDiff = targetTime - now;

  // Tính toán số ngày, giờ, phút và giây từ thời gian còn lại
  const days = Math.floor(timeDiff / (1000 * 60 * 60 * 24));
  const hours = Math.floor(
    (timeDiff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
  );
  const minutes = Math.floor((timeDiff % (1000 * 60 * 60)) / (1000 * 60));
  const seconds = Math.floor((timeDiff % (1000 * 60)) / 1000);

  // Hiển thị đồng hồ đếm ngược
  document.getElementById("days").textContent = formatTime(days);
  document.getElementById("hours").textContent = formatTime(hours);
  document.getElementById("minutes").textContent = formatTime(minutes);
  document.getElementById("seconds").textContent = formatTime(seconds);
}

function formatTime(time) {
  return time < 10 ? `0${time}` : time;
}

setInterval(updateCountdown, 1000); // Cập nhật đồng hồ đếm ngược mỗi giây
updateCountdown(); // Khởi tạo đồng hồ đếm ngược

// style menu khi cuộn trang
var menu = document.querySelector(".container_menu");
var banner = document.querySelector(".my_banner");

window.addEventListener("scroll", function () {
  // Kiểm tra vị trí cuộn
  var scrollPosition = window.scrollY || document.documentElement.scrollTop;

  // Thêm hoặc xoá class tùy thuộc vào vị trí cuộn
  if (scrollPosition > 0) {
    menu.style.transform = "translateY(-48px)";
    menu.style.position = "fixed";
    banner.style.paddingTop = "5rem";
  } else {
    menu.style.transform = "translateY(0px)";
  }
});
//instagram
function instagram() {
  var index = 1;
  var slide = document.querySelector(".instagram > div:nth-child(2)");
  setInterval(function () {
    if (index % 2 == 0) {
      slide.style.transform = "translateX(-215px)";
    } else {
      slide.style.transform = "translateX(0px)";
    }
    index++;
  }, 5000);
}

instagram();

// slide phần Deals of the Week
var productCardEndow = document.querySelector(
  ".featured_Deals-child--2 .featured_Deals-child--2-card .product_card"
);
var indexEndow = 1;
function nextEndow() {
  productCardEndow.style.transform = "translateX(-287px)";
  indexEndow = 2;
}
function prevEndow() {
  indexEndow = 1;
  productCardEndow.style.transform = "translateX(0px)";
}
function autoSlideEndow() {
  setInterval(function () {
    if (indexEndow % 2 != 0) {
      productCardEndow.style.transform = "translateX(-287px)";
    } else {
      productCardEndow.style.transform = "translateX(0px)";
    }
    indexEndow++;
  }, 5000);
}
autoSlideEndow();


//chuyển đổi thông tin chi tiết sản phẩm
var productId = null;

function productDetails(number) {
  // Lấy thông tin từ file json
  fetch("../public/js/product_detail.json")
    .then((Response) => Response.json())
    .then((data) => {
      productId = data.find((product) => product.id === number);

      // Lưu thông tin sản phẩm vào localStorage
      localStorage.setItem("productId", JSON.stringify(productId));

      // Gọi hàm để cập nhật hình ảnh
      updateImages();
    })
    .catch((error) => console.error("Fetch error:", error));
}

function updateImages() {
  // Gán các đường dẫn ảnh từ productId vào các phần tử hình ảnh
  var imageDetail = document.querySelectorAll(
    ".product_details > div .image_child img"
  );

  if (productId) {
    imageDetail[0].src = productId.img;
    imageDetail[1].src = productId.img_1;
    imageDetail[2].src = productId.img_2;
    imageDetail[3].src = productId.img_3;
    imageDetail[4].src = productId.img_2;
  }
}


