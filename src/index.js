import './stylesheets/main.scss';
import fontawesome from '@fortawesome/fontawesome'
import solid from '@fortawesome/fontawesome-free-solid'
import regular from '@fortawesome/fontawesome-free-regular'
import brands from '@fortawesome/fontawesome-free-brands'
import './images/fw_logo_001.png'
import './images/fw_logo_003.png'

fontawesome.library.add(solid)
fontawesome.library.add(regular)
fontawesome.library.add(brands)

import eyecatch from './images/eyecatch.jpg';

function main_text(height) {
  $('.main-catchcopy').css('padding-top', `${height}px`);
}

$( function() {
  const wsize = $(window).width();
  if (wsize >= 767) {
    const hsize = $(window).height();
    $('#main_visual').css({'height': `${hsize}px`});
    main_text(370);
  } else {
    $('#main_visual').css({'height': '300px'});
    main_text(130);
  }
})


// news 並び替え
$(document).on('change', '.js-category', () => {
  const $category = $('.js-category')
  location.href = "/news/category/news/" + $category.val();
})


// header 追尾
$(document).on('scroll', window, () => {
  const $header = $('.js-rootHeader')
  const heroBottom = 100
  const $headerImage = $('.js-headerImage')

  if($(window).scrollTop() > heroBottom){
      if (location.pathname == '/') $headerImage.html('<img src="/wp-content/themes/futurewoods/dist/fw_logo_001.png" alt="FUTUREWOODS" >')
      $header.addClass('l-rootHeader--active');   
  }
  else{
      if (location.pathname == '/')  $headerImage.html('<img src="/wp-content/themes/futurewoods/dist/fw_logo_003.png" alt="FUTUREWOODS" >')
      $header.removeClass('l-rootHeader--active');   
  }
})

