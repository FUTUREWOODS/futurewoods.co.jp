import './stylesheets/main.scss';
import eyecatch from './images/eyecatch.jpg';

function main_text(height) {
  $('.main-catchcopy').css('padding-top', `${height}px`);
}

$( function() {
  const wsize = $(window).width();
  if (wsize >= 767) {
    const hsize = $(window).height();
    $('#main_visual').css({'background-image':`url(${eyecatch})`, 'height': `${hsize - 92 }px`, 'background-size': 'cover'});
    main_text(370);
  } else {
    $('#main_visual').css({'background-image':`url(${eyecatch})`, 'height': '300px', 'background-size': 'cover'});
    main_text(130);
  }
})