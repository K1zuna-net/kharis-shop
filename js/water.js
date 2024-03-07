$(document).ready(function () {
  $(".container").ripples({
    //波紋をつけたい要素の指定
    resolution: 1600, //波紋の広がりの速度（値が大きいほど遅くなる。）
    dropRadius: 8, //波紋の大きさ（値が大きいほど大きくなる。）
    perturbance: 0.01, //波紋による屈折量（値が大きいほどブレる。）
  });
});

$(document).ready(function () {
  $(".box3").ripples({
    //波紋をつけたい要素の指定
    resolution: 1600, //波紋の広がりの速度（値が大きいほど遅くなる。）
    dropRadius: 8, //波紋の大きさ（値が大きいほど大きくなる。）
    perturbance: 0.01, //波紋による屈折量（値が大きいほどブレる。）
  });
});
