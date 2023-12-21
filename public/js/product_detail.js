var index = 0;

function title() {
  var titleTop = document.querySelector(".navbar .title");
  var arrTitle = [
    "YOU CAN PAY WITH CRYPTOCURRENCIES!",
    "FREE SHIPPING ON ALL ORDERS OVER $75",
    "NEWS: DELIVERY TO THE DOOR IS ACTIVE!",
  ];

  titleTop.classList.add("title_top");

  setTimeout(function () {
    titleTop.innerHTML = arrTitle[index];
    index++;

    if (index >= arrTitle.length) {
      index = 0;
    }

    titleTop.classList.remove("title_top");
  }, 1000);
}

setInterval(title, 3000);

//menu ẩn top
var heartTop = document.querySelector(".heart_top");
var myHeart = document.querySelector(".my_heart");
var refreshTop = document.querySelector(".refresh_top");
var shoppingTop = document.querySelector(".shopping_top");
var myShopping = document.querySelector(".my_shopping");
heartTop.addEventListener("click", function () {
  myHeart.classList.remove("add_1");
  myShopping.classList.add("add_1");
});
refreshTop.addEventListener("click", function () {
  myHeart.classList.add("add_1");
  myShopping.classList.add("add_1");
});
shoppingTop.addEventListener("click", function () {
  myShopping.classList.remove("add_1");
  myHeart.classList.add("add_1");
});

//ẩn hiện menu ẩn
var user = document.querySelector(".user");
var closeTop = document.querySelector(".close_top");
var closeSearch = document.querySelector(".close_search");
var menuTop = document.querySelector(".menu_top");
var heart = document.querySelector(".heart");
var shopping = document.querySelector(".shopping");
var search = document.querySelector(".search");
var mySearch = document.querySelector(".my_search");
var menuReponsive = document.querySelector(".oppenMenu");

//menu reponsive
menuReponsive.addEventListener("click", function () {
  menuLeft.style.transform = "translateX(0)";
  menuLeft.style.opacity = "1";
});

// user.addEventListener("click", function () {
//   menuLeft.style.transform = "translateX(0)";
//   menuLeft.style.opacity = "1";
//   panelTopTitle.style.display = "flex";
//   accountAreaFormWrapper.style.display = "flex";
//   setTimeout(function () {
//     login.classList.remove("add");
//   }, 50);
// });
heart.addEventListener("click", function () {
  menuTop.style.transform = "translateX(0)";
  menuTop.style.opacity = "1";
  setTimeout(function () {
    myShopping.classList.add("add_1");
    myHeart.classList.remove("add_1");
  }, 50);
});
shopping.addEventListener("click", function () {
  menuTop.style.transform = "translateX(0)";
  menuTop.style.opacity = "1";
  setTimeout(function () {
    myShopping.classList.remove("add_1");
    myHeart.classList.add("add_1");
  }, 50);
});
search.addEventListener("click", function () {
  mySearch.style.transform = "translateX(0)";
  mySearch.style.opacity = "1";

  //chạy nút search khi enter
  handleEnter();
});
closeTop.addEventListener("click", function () {
  menuTop.style.transform = "translateX(550px)";
  menuTop.style.opacity = "0";
  myShopping.classList.add("add_1");
  myHeart.classList.add("add_1");
});
closeSearch.addEventListener("click", function () {
  mySearch.style.transform = "translateY(-300px)";
  mySearch.style.opacity = "0";
});

//hàm cuộn trang về đầu
var homeClick = document.querySelector(".my_home_click");
homeClick.addEventListener("click", function () {
  window.scrollTo({ top: 0, behavior: "smooth" });
});

//hàm zoom card

//chức năng chuyển ảnh khi click

//số thứ tự
var indexZoom = 0;
var image_zoom = document.querySelector(".show_product_card-1 .image");
function image_zoomCard(number) {
  var side = -450 * number + "px";
  indexZoom = number;
  image_zoom.style.transform = "translateX(" + side + ")";
}
//next,prev
function next_prev() {
  var next = document.querySelector(".show_product_card .my_next");
  var prev = document.querySelector(".show_product_card .my_prev");
  var image_zoom_1 = document.querySelectorAll(
    ".show_product_card-1 .image img"
  );
  try {
    next.addEventListener("click", function () {
      if (indexZoom < image_zoom_1.length - 1) {
        indexZoom++;
        image_zoom.style.transform =
          "translateX(" + -450 * indexZoom + "px" + ")";
      }
    });
  } catch (error) {
    //bỏ qua lỗi
  }
  try {
    prev.addEventListener("click", function () {
      if (indexZoom > 0) {
        indexZoom--;
        image_zoom.style.transform =
          "translateX(" + -450 * indexZoom + "px" + ")";
      }
    });
  } catch (error) {
    //bỏ qua lỗi
  }
  var closeZoom = document.querySelector(".close_zoom");
  try {
    closeZoom.addEventListener("click", function () {
      indexZoom = 0;
      image_zoomCard(indexZoom);
    });
  } catch (error) {
    //bỏ qua lỗi
  }
}

//thoát zoomCard
var containerZoomCard = document.querySelector(".container_show_product_card");
var containerZoomCard1 = document.querySelector(".show_product_card");
var closeZoom = document.querySelector(".close_zoom");
var loading = document.querySelector(".spinner");
try {
  closeZoom.addEventListener("click", function () {
    containerZoomCard.style.opacity = "0";
    containerZoomCard.style.pointerEvents = "none";
    containerZoomCard1.style.transform = "rotateY(89deg)";
    setTimeout(function () {
      loading.style.opacity = "1";
    }, 500);
    containerZoomCard1.style.opacity = "0";
  });
} catch (error) {
  //bỏ qua lỗi
}
function openZoom() {
  containerZoomCard.style.opacity = "1";
  containerZoomCard.style.pointerEvents = "initial";
  setTimeout(function () {
    loading.style.opacity = "0";
    containerZoomCard1.style.transform = "rotateX(0deg)";
    containerZoomCard1.style.opacity = "1";
  }, 2000);
}
//doi thong tin been trong card zoom
function openZoomCard(id, image, name, price, description, event) {
  // ngăn chặn click lang rộng ra kích hoạt thẻ a của tk cha k
  event.preventDefault();
  //ảnh cardZoom
  indexZoom = 0;
  var imageProduct = document.querySelectorAll(
    ".show_product_card-1 .image img"
  );
  var imageChild = document.querySelectorAll(
    ".show_product_card-1 .image_child img"
  );
  // thông tin
  var title = document.querySelector(".show_product_card-2 .title");
  var priceProduct = document.querySelector(".show_product_card-2 .price");
  var descriptionProduct = document.querySelector(
    ".show_product_card-2 .content"
  );
  var detailLink = document.querySelector(".linkZoomCard");

  detailLink.href = "detail.php?product_id=" + id + "";

  title.innerHTML = name;
  priceProduct.innerHTML = "$" + price + ".00";
  descriptionProduct.innerHTML = description;
  imageProduct[0].src = "./public/img/product/" + image + ".webp";
  imageProduct[1].src = "./public/img/product/" + image + "-1.webp";
  imageProduct[2].src = "./public/img/product/" + image + "-2.webp";
  imageProduct[3].src = "./public/img/product/" + image + "-3.webp";
  imageProduct[4].style.display = "block";
  imageProduct[4].src = "./public/img/product/" + image + "-4.webp";

  //đổi ảnh imageChild
  imageChild[0].src = "./public/img/product/" + image + ".webp";
  imageChild[1].src = "./public/img/product/" + image + "-1.webp";
  imageChild[2].src = "./public/img/product/" + image + "-2.webp";
  imageChild[3].src = "./public/img/product/" + image + "-3.webp";
  imageChild[4].style.display = "block";
  imageChild[4].src = "./public/img/product/" + image + "-4.webp";
  openZoom();
}
next_prev();

// hiệu ứng chuyển slide productDetail
try {
  var productDetailsImage = document.querySelector(
    ".product_details .image .image-1"
  );
  var productDetailsContainer = document.querySelector(
    ".product_details .image"
  );
  var productDetailsContainerAll = document.querySelectorAll(
    ".product_details .image .image-1 img"
  );
  var width = productDetailsContainer.offsetWidth;
  var productDetailsIndex = 0;
  function btnChild(number) {
    let index = width * number;
    productDetailsImage.style.transform = "translateX(" + -index + "px)";
    productDetailsIndex = number;
  }
  var productDetailsPrev = document.querySelector(
    ".product_details .image .my_prev"
  );
  var productDetailsNext = document.querySelector(
    ".product_details .image .my_next"
  );

  productDetailsPrev.addEventListener("click", function () {
    if (productDetailsIndex > 0) {
      productDetailsIndex--;
      let index = width * productDetailsIndex;
      productDetailsImage.style.transform = "translateX(" + -index + "px)";
    }
  });
  productDetailsNext.addEventListener("click", function () {
    if (productDetailsIndex < productDetailsContainerAll.length - 1) {
      productDetailsIndex++;
      let index = width * productDetailsIndex;
      productDetailsImage.style.transform = "translateX(" + -index + "px)";
    }
  });
} catch (error) {
  //bỏ qua lỗi
}

// filter
var productFilter1 = document.querySelectorAll(".filter-1 .my_card");
var productFilter2 = document.querySelectorAll(".filter-2 .my_card");
var spinnerContainer = document.querySelector(".container_filter-1");
var spinner = document.querySelector(".container_filter-1 .spinner_1");
let indexProductLength = productFilter1.length;

// Trang web đã tải hoàn toàn
window.addEventListener('load', function () {
  // Trang web đã tải hoàn toàn
  var val_1 = document.querySelector(".val-1 svg")
  val_1.style.color = "black"
  spinner.style.opacity = "0"
  for (var i = 8; i < productFilter1.length; i++) {
    productFilter1[i].style.display = "none"
    productFilter2[i].style.display = "none"
  }
});


function load_more() {
  setTimeout(function () {
    for (var i = 8; i < productFilter1.length; i++) {
      productFilter1[i].style.display = "flex";
      productFilter2[i].style.display = "block";
    }
  }, 1000);
}
function filter(number) {
  var filter_1 = document.querySelector(".filter-1");
  var filter_2 = document.querySelector(".filter-2");
  var val_1 = document.querySelector(".val-1 svg");
  var val_2 = document.querySelector(".val-2 svg");
  var val_3 = document.querySelector(".val-3 svg");
  var val_4 = document.querySelector(".val-4 svg");
  if (number == 1) {
    filter_1.style.display = "grid";
    filter_2.style.display = "none";
    val_1.style.color = "black";
    val_2.style.color = "#7d7d7d";
    val_3.style.color = "#7d7d7d";
    val_4.style.color = "#7d7d7d";
  }
  if (number == 2) {
    filter_2.style.display = "grid";

    filter_1.style.display = "none";
    filter_2.classList.add("grid-cols-2");
    filter_2.classList.remove("grid-cols-3");
    filter_2.classList.remove("grid-cols-4");
    val_1.style.color = "#7d7d7d";
    val_2.style.color = "black";
    val_3.style.color = "#7d7d7d";
    val_4.style.color = "#7d7d7d";
  }
  if (number == 3) {
    filter_2.style.display = "grid";
    filter_1.style.display = "none";
    filter_2.classList.add("grid-cols-3");
    filter_2.classList.remove("grid-cols-2");
    filter_2.classList.remove("grid-cols-4");
    val_1.style.color = "#7d7d7d";
    val_2.style.color = "#7d7d7d";
    val_3.style.color = "black";
    val_4.style.color = "#7d7d7d";
  }
  if (number == 4) {
    filter_2.style.display = "grid";
    filter_1.style.display = "none";
    filter_2.classList.add("grid-cols-4");
    filter_2.classList.remove("grid-cols-2");
    filter_2.classList.remove("grid-cols-3");
    val_1.style.color = "#7d7d7d";
    val_2.style.color = "#7d7d7d";
    val_3.style.color = "#7d7d7d";
    val_4.style.color = "black";
    containerLoadMore.style.display = "none";
  }
  for (var i = 8; i < productFilter1.length; i++) {
    productFilter1[i].style.display = "none";
    productFilter2[i].style.display = "none";
  }
}

// start hiệu ứng thêm sản phẩm vào giỏ hàng
var myCart = document.querySelectorAll(".container_top-cart");
var myCartMore = document.querySelector(".menu_top-cart .moreCart");
function isCart() {
  myCart.forEach((oppElement) => {
    // Lấy tất cả các phần tử con của phần tử "opp"
    const childElements = oppElement.children;
    if (childElements.length > 4) {
      childElements[childElements.length - 5].style.display = "none";
      myCartMore.innerHTML = "More...";
    } else {
      if (childElements.length == 0) {
        myCartMore.innerHTML = "There are no products in the shopping cart";
      } else {
        myCartMore.innerHTML = "";
      }
    }
  });
}
myCart.forEach((oppElement) => {
  // Lấy tất cả các phần tử con của phần tử "opp"
  const childElements = oppElement.children;
  if (childElements.length > 3) {
    for (let i = 0; i < childElements.length - 5; i++) {
      childElements[i].style.display = "none";
    }
  }
  isCart();
});
// end hiệu ứng thêm sản phẩm vào giỏ hàng

function rmvCart() {
  try {
    const containerParentCart_1 = document.querySelectorAll(".product_cart");
    const parentCart_1 = document.querySelector(".product_cart .notification");
    containerParentCart_1.forEach((oppElement) => {
      const childElements = oppElement.children;
      if (childElements.length == 1) {
        parentCart_1.innerHTML = "There are no products in the shopping cart";
        parentCart_1.style.padding = "0.5rem";
      } else {
        parentCart_1.innerHTML = "";
        parentCart_1.style.padding = "0";
      }
    });
  } catch (error) { }
}
rmvCart();

function searchList() {
  const filter_1 = document.querySelectorAll(".filter-1-1");
  const filter_2 = document.querySelectorAll(".filter-2-1");
  const parentCart_1 = document.querySelector(".filter-1-1 .is_search");
  const parentCart_2 = document.querySelector(".filter-2-1 .is_search");
  filter_1.forEach((oppElement) => {
    const childElements = oppElement.children;
    if (childElements.length == 1) {
      parentCart_1.style.display = "flex";
      parentCart_1.innerHTML = "Product not found.";
      parentCart_1.style.padding = "0.5rem";
    } else {
      parentCart_1.style.display = "none";
      parentCart_1.innerHTML = "";
      parentCart_1.style.padding = "0";
    }
  });
  filter_2.forEach((oppElement) => {
    const childElements = oppElement.children;
    if (childElements.length == 1) {
      parentCart_2.style.display = "flex";
      parentCart_2.innerHTML = "Product not found.";
      parentCart_2.style.padding = "0.5rem";
    } else {
      parentCart_2.style.display = "none";
      parentCart_2.innerHTML = "";
      parentCart_2.style.padding = "0";
    }
  });
}
searchList();

// Gán sk enter cho nút buttonSearch
function handleEnter() {
  var search = document.querySelector(".btn_search");
  document.addEventListener("keydown", function (event) {
    // Kiểm tra xem phím được nhấn có phải là Enter không (mã ASCII của phím Enter là 13)
    if (event.keyCode === 13) {
      // Khi nhấn Enter, thực hiện việc nhấn nút button
      search.click();
    }
  });
}
try {
  var isLogin = document.querySelector(".is_login");
  isLogin.addEventListener("click", function () {
    document.querySelector(".account_user").classList.toggle("hidden");
  });
} catch (error) { }
function customQuantity() {
  try {
    var quantity = document.getElementById("quantity");
    document
      .getElementById("addQuantity")
      .addEventListener("click", function () {
        quantity.value++;
      });
    document
      .getElementById("removeQuantity")
      .addEventListener("click", function () {
        if (quantity.value > 1) {
          quantity.value--;
        }
      });
  } catch (error) { }
}
customQuantity();

try {
  function productToltal() {
    var total = document.querySelectorAll(".productTotal");
    var txtSubtotal = document.querySelector(".subtotal");
    var txtShippingTotal = document.querySelector(".shippingTotal");
    var txtTotal = document.querySelector(".total");
    var productTotal = 0;
    for (i = 0; i < total.length; i++) {
      var number = parseInt(total[i].innerHTML);
      productTotal += number;
    }
    txtSubtotal.innerHTML = productTotal;
    var shipping = parseInt(productTotal * 0.1);
    txtShippingTotal.innerHTML = shipping;
    txtTotal.innerHTML = productTotal + shipping;
  }
  productToltal();
} catch (error) {

}

function isLoad() {
  if (indexProductLength < 8) {
    productFilter1 = indexProductLength;
    productFilter2 = indexProductLength;
  }
}

// lọc sản phẩm
function productType() {
  const typeButtons = document.querySelectorAll('.btnType');
  const productCard1 = document.querySelectorAll('.product_card1 .my_card');
  const productCard2 = document.querySelectorAll('.product_card2 .my_card');
  const title = document.querySelector(".container_title_category .title");
  var nameType = '';
  typeButtons.forEach((button) => {
    button.addEventListener("click", function () {
      var index = 0;
      const type = button.getAttribute("type");
      nameType = type;
      typeButtons.forEach((btn) => {
        if (btn !== button) {
          btn.innerHTML = `<div class="w-[11px] h-[11px] rounded-full bg-[` + btn.getAttribute("type") + `] border"></div></div>` + btn.getAttribute("type") + `` // Xoá innerHTML của button khác
        }
      });
      button.innerHTML = `<div class="flex items-center justify-center gap-[2px]"><i class='bx bxs-x-circle cursor-pointer hover:font-[600]' onclick="removeFilter()"></i><div class="w-[11px] h-[11px] rounded-full bg-[` + nameType + `] border"></div></div>` + nameType + ``
      productCard1.forEach((mycart) => {
        if (mycart.getAttribute('type') != type) {
          mycart.style.display = "none";
        } else {
          mycart.style.display = "flex";
          index++;
        }
      })
      productCard2.forEach((mycart) => {
        if (mycart.getAttribute('type') != type) {
          mycart.style.display = "none";
        } else {
          mycart.style.display = "block";
        }
      })
      indexProductLength = index;
      if (indexProductLength < 8) {
        document.querySelector(".page").classList.add('hidden');
      } else {
        document.querySelector(".page").classList.remove('hidden');
      }
      title.innerHTML = `<span class="title flex">Showing all ` + indexProductLength + ` results <span class="px-[1rem] flex items-center justify-center">Filter: &nbsp<i class='bx bxs-x-circle cursor-pointer hover:font-[600]' onclick="removeFilter()"></i>&nbsp<p class="text-black font-700">` + nameType + `</p></span>   </span>`
      isLoad()
    })
  })


}

function removeFilter() {
  location.reload();
}

productType();


var slider = document.getElementById('slider');
var minPriceInput = document.getElementById('minPrice');
var maxPriceInput = document.getElementById('maxPrice');
var minPriceDataInput = document.getElementById('minPriceData');
var maxPriceDataInput = document.getElementById('maxPriceData');

noUiSlider.create(slider, {
  start: [20, 300],
  connect: true,
  range: {
    'min': 10,
    'max': 400
  }
});

slider.noUiSlider.on('update', function (values, handle) {
  var min = values[0];
  var max = values[1];

  // Hiển thị giá trị min và max lấy từ thanh trượt
  minPriceInput.innerHTML = min;
  maxPriceInput.innerHTML = max;
  minPriceDataInput.value = min;
  maxPriceDataInput.value = max;
});
