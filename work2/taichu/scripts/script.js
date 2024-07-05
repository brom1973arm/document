'use strict'


/*modal*/
  const modalBtns = document.querySelectorAll('[data-trigger="btn"]');
  const modalItems = document.querySelectorAll('[data-trigger="item"]');
  const modalCloseBtns = document.querySelectorAll('[data-modal="close"]');
  const regex = /[^0-9]/g;

/* modal close */
modalCloseBtns.forEach(modalCloseBtn => {
  modalCloseBtn.addEventListener('click', function(e) {
    e.currentTarget.closest('[data-modal="box"]').querySelector('[data-modal="bg"]').classList.remove('is-active');
    e.currentTarget.closest('[data-modal="box"]').querySelector('[data-modal="inner"]').classList.remove('is-active');
    const cardModals = e.currentTarget.closest('[data-modal="inner"]').querySelectorAll('[data-trigger="item"]');
    cardModals.forEach(cardModal => {
      cardModal.classList.remove('is-active');
    });
  });
});

/* modal open */
modalBtns.forEach(modalBtn => {
  modalBtn.addEventListener('click', function(e) {
    e.preventDefault();
    const modalBtnNum = e.currentTarget.dataset.modal;

    modalItems.forEach(modalItem => {
    const modalItemNum = modalItem.dataset.modal.replace(regex, "");
      if (modalItemNum == modalBtnNum) {
        document.querySelector('[data-modal="bg"]').classList.add('is-active');
        document.querySelector('[data-modal="inner"]').classList.add('is-active');
        modalItem.classList.add('is-active');
      }
    });
  });
});


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