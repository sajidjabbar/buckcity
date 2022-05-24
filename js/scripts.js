// // Timer
// (function () {
//   const second = 1000,
//         minute = second * 60,
//         hour = minute * 60,
//         day = hour * 24;

//   //I'm adding this section so I don't have to keep updating this pen every year :-)
//   //remove this if you don't need it
//   let today = new Date(),
//       dd = String(today.getDate()).padStart(2, "0"),
//       mm = String(today.getMonth() + 1).padStart(1, "0"),
//       yyyy = today.getFullYear(),
//       nextYear = yyyy + 1,
//       dayMonth = "09/30/",
//       birthday = dayMonth + yyyy;

//   today = mm + "/" + dd + "/" + yyyy;
//   if (today > birthday) {
//     birthday = dayMonth + nextYear;
//   }
//   //end

//   const countDown = new Date(birthday).getTime(),
//       x = setInterval(function() {

//         const now = new Date().getTime(),
//               distance = countDown - now;

//         // document.getElementById("days").innerHTML = Math.floor(distance / (day)),
//           document.getElementById("hours").innerHTML = Math.floor((distance % (day)) / (hour)),
//           document.getElementById("minutes").innerHTML = Math.floor((distance % (hour)) / (minute)),
//           document.getElementById("seconds").innerHTML = Math.floor((distance % (minute)) / second);

//         //do something later when date is reached
//         if (distance < 0) {
//           document.getElementById("headline").innerHTML = "Expired";
//           document.getElementById("countdown").style.display = "none";
//           document.getElementById("content").style.display = "block";
//           clearInterval(x);
//         }
//         //seconds
//       }, 0)
//   }());

// Feature Slider
$(".videos").slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3,
  dots: false,
  responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
      },
    },
    {
      breakpoint: 575,
      settings: {
        slidesToShow: 1,
      },
    },
  ],
});
// Feature Slider

// Feature Slider
$(".abt-videos").slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3,
  dots: false,
  responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
      },
    },
    {
      breakpoint: 575,
      settings: {
        slidesToShow: 1,
      },
    },
  ],
});
// Feature Slider

// Products Slider
$(".products").slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3,
  dots: true,
  responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
      },
    },
  ],
});
// Products Slider

// City Hit Slider
$(".ctyHits").slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3,
  dots: true,
  responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
      },
    },
    {
      breakpoint: 575,
      settings: {
        slidesToShow: 1,
      },
    },
  ],
});
// City Hit Slider

// Single Product Slider
$(".single-pro-images").slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: false,
});
// Single Product Slider

// Mobile Nav
$("document").ready(function () {
  $("header .btn-group button.btn-icon.canvas").click(function () {
    $("header .mob-navbar").addClass("show");
  });

  $("header .mob-navbar .cancel").click(function () {
    $("header .mob-navbar").removeClass("show");
  });
});
// Mobile Nav

// Search Box
$("document").ready(function () {
  $("header .btn-group button.btn-icon.search-btn").click(function () {
    $(".Search").addClass("show");
  });

  $(".Search .searchBox form .form-group button.search-submit").click(
    function () {
      $(".Search").removeClass("show");
    }
  );
});
// Search Box

// Sign In Modal
$("document").ready(function () {
  $("header .btn-group button.signin-btn").click(function () {
    $(".signin-modal").addClass("show");
  });

  $(".signin-modal .signin-box .cancel").click(function () {
    $(".signin-modal").removeClass("show");
  });
});
// Sign In Modal

// Sign Up Modal
$("document").ready(function () {
  $("header .btn-group button.signup-btn").click(function () {
    $(".signup-modal").addClass("show");
  });

  $(".signup-modal .signup-box .cancel").click(function () {
    $(".signup-modal").removeClass("show");
  });
});
// Sign Up Modal

// Forgot Password Step1 Modal
$("document").ready(function () {
  $(".signin-modal .signin-box .optionDv .forgotDv a").click(function () {
    $(".ForgotpassStep1").addClass("show");
  });

  $(".ForgotpassStep1 .ForgotpassStep1-box .cancel").click(function () {
    $(".ForgotpassStep1").removeClass("show");
  });
});
// Forgot Password Step1 Modal

// Product Confirm Popup Js
$("document").ready(function () {
  $(".checkout .savePayment .totalPayDv .confirmBtn .btn").click(function () {
    $(".added-fixed-window").addClass("show");
  });

  // $('.added-succesfully .cancel').click(function() {
  //     $(".added-fixed-window").removeClass('show');
  // });
});
// Product Confirm Popup Js

// After Confirm Order Page Redirection Js
$(".checkout .savePayment .totalPayDv .confirmBtn .btn").click(function () {
  setTimeout(function () {
    window.location.href = "/buckcity/index.php";
  }, 2000);
});
// After Confirm Order Page Redirection Js

$("document").ready(function () {
  $(
    ".ForgotpassStep1 .ForgotpassStep1-box form .btn-group button.sendCode"
  ).click(function () {
    $(".forgotpassstep2").addClass("show");
  });

  $(
    ".ForgotpassStep1 .ForgotpassStep1-box form .btn-group button.sendCode"
  ).click(function () {
    $(".signin-modal").removeClass("show");
  });
  $(
    ".ForgotpassStep1 .ForgotpassStep1-box form .btn-group button.sendCode"
  ).click(function () {
    $(".ForgotpassStep1").removeClass("show");
  });
  $(".forgotpassstep2 .forgotpassstep2-box .cancel").click(function () {
    $(".forgotpassstep2").removeClass("show");
  });
});

$("document").ready(function () {
  $(
    ".forgotpassstep2 .forgotpassstep2-box form .btn-group button.sendCode"
  ).click(function () {
    $(".ForgotpassStep3").addClass("show");
  });

  $(
    ".forgotpassstep2 .forgotpassstep2-box form .btn-group button.sendCode"
  ).click(function () {
    $(".forgotpassstep2").removeClass("show");
  });
  $(
    ".ForgotpassStep3 .ForgotpassStep3-box form .btn-group button.sendCode"
  ).click(function () {
    $(".ForgotpassStep3").removeClass("show");
  });
  $(
    ".ForgotpassStep3 .ForgotpassStep3-box form .btn-group button.sendCode"
  ).click(function () {
    $(".signin-modal").addClass("show");
  });
});

// Make An Offer Modal
$("document").ready(function () {
  $(".placeOffer").click(function () {
    $(".makeOffer").addClass("show");
  });

  //   $('.makeOffer .makeOffer-box form .btn-group').click(function() {
  //   setTimeout(function() {
  //       window.location.href = '/buckcity/checkout.php';
  //   }, 1000);
  // });
  //   $('.makeOffer .makeOffer-box form .btn-group button').click(function() {
  //       $(".makeOffer").removeClass('show');
  //   });
});
// Make An Offer Modal Modal
// text Editor
ClassicEditor.create(document.querySelector("#editor")).catch((error) => {
  console.error(error);
});
// text Editor
// Seller Add Product Js First
updateList = function () {
  var input = document.getElementById("attachments");
  var output = document.getElementById("fileList");
  var children = "";
  for (var i = 0; i < input.files.length; ++i) {
    children +=
      "<li>" +
      input.files.item(i).name +
      '<span class="remove-list" onclick="return this.parentNode.remove()"><i class="fa fa-close"></i></span>' +
      "</li>";
  }
  output.innerHTML = children;
};
// Seller Add Product Js First

// Seller Add Product Js Second
updateListtwo = function () {
  var inputtwo = document.getElementById("attachments-two");
  var outputtwo = document.getElementById("fileList-two");
  var childrentwo = "";
  for (var i = 0; i < inputtwo.files.length; ++i) {
    childrentwo +=
      "<li>" +
      inputtwo.files.item(i).name +
      '<span class="remove-list" onclick="return this.parentNode.remove()"><i class="fa fa-close"></i></span>' +
      "</li>";
  }
  outputtwo.innerHTML = childrentwo;
};
// Seller Add Product Js Second
// profile pages js starts here
$(".edit-customer-wrapper").hide();
$(".customer-wrapper button.edit").click(function () {
  $(".edit-customer-wrapper").show();
  $(".customer-wrapper").hide();
});
$(".edit-customer-wrapper button.Save-Changes").click(function () {
  $(".edit-customer-wrapper").hide();
  $(".customer-wrapper").show();
});
$(".change-password-customer-wrapper").hide();
$(".customer-wrapper button.change-password").click(function () {
  $(".change-password-customer-wrapper").show();
  $(".customer-wrapper").hide();
});
$(".change-password-customer-wrapper button.Save-Changes").click(function () {
  $('.change-password-customer-wrapper').hide();
  $(".customer-wrapper").show();
});
// profile pages js ends here
