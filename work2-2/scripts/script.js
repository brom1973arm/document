'use strict';

/*topへ戻る*/ 
// スクロール用 
$(function(){
    var topBtn=$('#pageTop');
    topBtn.hide();
   
    //ボタンの表示設定
    $(window).scroll(function(){
      if($(this).scrollTop()>800){
        //---- 画面を800pxスクロールしたら、ボタンを表示する
        topBtn.fadeIn();
      }else{
        //---- 画面が800pxより上なら、ボタンを表示しない
        topBtn.fadeOut();
      } 
    });
   
    //ボタンをクリックしたら、スクロールして上に戻る
    topBtn.click(function(){
      $('body,html').animate({
      scrollTop: 0},500);
      return false;
    });
  });


  /*drawer*/
 (function($) {
  const $nav   = $('#navArea');
  const $btn   = $('.toggleBtn');
  const $mask  = $('#mask');
  const $close_btn   = $('.drawercloseBtn');
  const open   = 'open'; // class
  // menu open close
  $btn.on( 'click', function() {
    $nav.addClass( open );
  });
  $close_btn.on( 'click' , function() {
    $nav.removeClass( open );
  });
  // mask close
  $mask.on('click', function() {
    $nav.removeClass( open );
  });
} )(jQuery);



/*ローディング画面*/ 
$(function() {
	setTimeout(function(){
		$('.loading img').fadeIn(8000);
	},500);
	setTimeout(function(){
		$('.loading img').fadeOut(2000);
	},2500);
  setTimeout(function(){
		$('.loading').fadeOut(2000);
	},10000);
});

/*カルーセル*/
let currentIndex = 0;


function updateSlider() {
  const slides = document.querySelectorAll(".slide");
  const sliderWidth = slides[0].offsetWidth;
  const newPosition = -currentIndex * sliderWidth + "px";
  document.querySelector(".carousel").style.transform =
    "translateX(" + newPosition + ")";


  // Update indicator
  const indicators = document.querySelectorAll(".dot");
  indicators.forEach((indicator, index) => {
    if (index === currentIndex) {
      indicator.classList.add("active");
    } else {
      indicator.classList.remove("active");
    }
  });
}


function nextSlide() {
  const slides = document.querySelectorAll(".slide");
  currentIndex = (currentIndex + 1) % slides.length;
  updateSlider();
}


function prevSlide() {
  const slides = document.querySelectorAll(".slide");
  currentIndex = (currentIndex - 1 + slides.length) % slides.length;
  updateSlider();
}


function goToSlide(index) {
  currentIndex = index;
  updateSlider();
}