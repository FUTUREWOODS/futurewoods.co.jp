import './stylesheets/main.scss';
import fontawesome from '@fortawesome/fontawesome'
import solid from '@fortawesome/fontawesome-free-solid'
import regular from '@fortawesome/fontawesome-free-regular'
import brands from '@fortawesome/fontawesome-free-brands'

fontawesome.library.add(solid)
fontawesome.library.add(regular)
fontawesome.library.add(brands)

import eyecatch from './images/eyecatch.jpg';

fontawesome.library.add(faUser)

function main_text(height) {
  $('.main-catchcopy').css('padding-top', `${height}px`);
}

$( function() {
  const wsize = $(window).width();
  if (wsize >= 767) {
    const hsize = $(window).height();
    $('#main_visual').css({'height': `${hsize - 92 }px`});
    main_text(370);
  } else {
    $('#main_visual').css({'height': '300px'});
    main_text(130);
  }
})