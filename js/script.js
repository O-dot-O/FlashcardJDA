$(document).ready(function () {
  $(".dropdown-btn").click(function () {
    $(this).next().toggle();
    $(this).next().toggleClass("active");
  });
});