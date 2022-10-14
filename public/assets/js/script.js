var swiper = new Swiper(".mainSwiper", {
   navigation: {
      nextEl: ".mainSwiper-button-next",
      prevEl: ".mainSwiper-button-prev",
   },
   pagination: {
      el: ".mainSwiper-pagination",
      clickable: true,
   },
   slidesPerView: 1,
   spaceBetween: 30,
   breakpoints: {
      767: {
         slidesPerView: 3,
         spaceBetween: 30,
      },
   }
});

$("#hrbp-text-1").hover(function () {
  $('#hrbp-block-image-1').toggleClass("hover");
});

$("#hrbp-text-2").hover(function () {
  $('#hrbp-block-image-2').toggleClass("hover");
});

$("#hrbp-text-3").hover(function () {
  $('#hrbp-block-image-3').toggleClass("hover");
});

$("#hrbp-text-4").hover(function () {
  $('#hrbp-block-image-4').toggleClass("hover");
});

$("#hrbp-text-5").hover(function () {
  $('#hrbp-block-image-5').toggleClass("hover");
});

$("#hrbp-text-6").hover(function () {
  $('#hrbp-block-image-6').toggleClass("hover");
});

$("header").on('show.bs.collapse', '#navbarSupportedContent', function(event) {
  $('header').addClass('dark-2-light');
});
$("header").on('hidden.bs.collapse', '#navbarSupportedContent', function(event) {
  $('header').removeClass('dark-2-light');
});

var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0');
var yyyy = today.getFullYear();

today = dd + '.' + mm + '.' + yyyy;

window.onload = function() {
   document.getElementById("showDate").innerHTML = today;
}

// form
$('body').on('submit', 'form[data-content="main-form"]', function(event) {
    event.preventDefault();
    $.ajax({
        type: 'POST',
        url: 'php/mailer1.php',
        data: $(this).serialize(),
    });
    $('#modalInner1').addClass('hide');
    $('#modalSuccess1').removeClass('hide');
    return false;
});

$('body').on('submit', 'form[data-content="main-form-2"]', function(event) {
    event.preventDefault();

    var formData = new FormData();

    formData.append('fileupload', $('#fileupload')[0].files[0])
    $.ajax({
        url: 'php/mailer2.php',
        type: 'POST',
        enctype: 'multipart/form-data',
        processData: false,
        contentType: false,
        data: formData,
    });
    $('#modalInner2').addClass('hide');
    $('#modalSuccess2').removeClass('hide');
    return false;
});