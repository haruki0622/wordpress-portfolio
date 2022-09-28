"use strict";

$(function () {
  var height = $(".js-Header__inner").outerHeight();
  $("body").css("margin-top", height);
});

$(function () {
  $(".js-Header__hamBtn").on("click", function () {
    $(".js-Header__hamList").toggleClass("is-open");
    $(this).children().toggleClass("is-close");
  });
});
