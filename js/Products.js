$(function () {
  $(window).on("load scroll", function () {
    //現時点のスクロールの高さ取得
    var scrollPosition = $(window).scrollTop();
    //ウィンドウの高さ取得
    var windowHeight = $(window).height();

    $(".feed-in-box").each(function () {
      //要素の位置（高さ）を取得
      var elemPosition = $(this).offset().top;
      //スクロールの高さが要素の位置を超えたら以下のスタイルを適用
      if (elemPosition < scrollPosition + windowHeight) {
        $(this).css({
          opacity: 1,
          transform: "translateY(0)",
        });
      }
    });
  });
});

$(function () {
  $(window).on("load scroll", function () {
    //現時点のスクロールの高さ取得
    var scrollPosition = $(window).scrollTop();
    //ウィンドウの高さ取得
    var windowHeight = $(window).height();

    $(".feed-in-box2").each(function () {
      //要素の位置（高さ）を取得
      var elemPosition = $(this).offset().top;
      //スクロールの高さが要素の位置を超えたら以下のスタイルを適用
      if (elemPosition < scrollPosition + windowHeight) {
        $(this).css({
          opacity: 1,
          transform: "translateY(0)",
        });
      }
    });
  });
});

$(function () {
  $(window).on("load scroll", function () {
    //現時点のスクロールの高さ取得
    var scrollPosition = $(window).scrollTop();
    //ウィンドウの高さ取得
    var windowHeight = $(window).height();

    $(".feed-in-box3").each(function () {
      //要素の位置（高さ）を取得
      var elemPosition = $(this).offset().top;
      //スクロールの高さが要素の位置を超えたら以下のスタイルを適用
      if (elemPosition < scrollPosition + windowHeight) {
        $(this).css({
          opacity: 1,
          transform: "translateY(-0)",
        });
      }
    });
  });
});

$(function () {
  $(window).on("load scroll", function () {
    //現時点のスクロールの高さ取得
    var scrollPosition = $(window).scrollTop();
    //ウィンドウの高さ取得
    var windowHeight = $(window).height();

    $(".feed-in-box4").each(function () {
      //要素の位置（高さ）を取得
      var elemPosition = $(this).offset().top;
      //スクロールの高さが要素の位置を超えたら以下のスタイルを適用
      if (elemPosition < scrollPosition + windowHeight) {
        $(this).css({
          opacity: 1,
          transform: "translateY(-0)",
        });
      }
    });
  });
});

$(function () {
  $(window).on("load scroll", function () {
    //現時点のスクロールの高さ取得
    var scrollPosition = $(window).scrollTop();
    //ウィンドウの高さ取得
    var windowHeight = $(window).height();

    $(".feed-in-box5").each(function () {
      //要素の位置（高さ）を取得
      var elemPosition = $(this).offset().top;
      //スクロールの高さが要素の位置を超えたら以下のスタイルを適用
      if (elemPosition < scrollPosition + windowHeight) {
        $(this).css({
          opacity: 1,
          transform: "translateY(-0)",
        });
      }
    });
  });
});

$(function () {
  $(window).on("load scroll", function () {
    //現時点のスクロールの高さ取得
    var scrollPosition = $(window).scrollTop();
    //ウィンドウの高さ取得
    var windowHeight = $(window).height();

    $(".feed-in-box6").each(function () {
      //要素の位置（高さ）を取得
      var elemPosition = $(this).offset().top;
      //スクロールの高さが要素の位置を超えたら以下のスタイルを適用
      if (elemPosition < scrollPosition + windowHeight) {
        $(this).css({
          opacity: 1,
          transform: "translateY(-0)",
        });
      }
    });
  });
});