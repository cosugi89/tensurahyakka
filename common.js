$(document).ready(function(){
  // .openbtn をクリックするとクラスを追加/削除する
  $('.openbtn').click(function(){
    $(this).toggleClass('active');
    $('.header-site-menu-navi').toggleClass('open');
  });
});

