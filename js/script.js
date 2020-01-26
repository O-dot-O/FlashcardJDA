$(document).ready(function () {
  $(".dropdown-btn").click(function () {
    $(this).next().toggle();
    $(this).next().toggleClass("active");
    $(this).children().toggleClass("fa-caret-down");
    $(this).children().toggleClass("fa-caret-up");

  });
});