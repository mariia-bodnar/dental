$(document).ready(function () {
  $(document).on('click', function (event) {
    if (!$(event.target).closest('.menu >*li').length) {
      if ($('.menu >*li').hasClass('active'))
        $('.menu >*li').removeClass('active')
    }
  })
  $('.menu >*li').on('click', function () {
    if ($('.menu >*li').hasClass('active')) {
      $(this).siblings().removeClass('active')
      $(this).addClass('active')
    } else {
      $(this).toggleClass('active')
    }
  })
  $('.catalog >*li').on('click', function () {
    $('.catalog >*li').removeClass('active-s')
    $(this).addClass('active-s')
  })
  // burger menu
  $('.burger').on('click', function () {
    $('.slide-menu').addClass('active-burg')
  })
  $('.close_icon').on('click', function () {
    $('.slide-menu').removeClass('active-burg')
  })
  $(document).on('click', function (event) {
    if (!$(event.target).closest('.slide-menu').length) {
      if (!$(event.target).closest('.burger').length) {
        if ($('.slide-menu').hasClass('active-burg'))
          $('.slide-menu').removeClass('active-burg')
      }
    }
  })
  $('.for_open_detal').on('click', function () {
    var list_open = $(this).parent('li')
    $(list_open).siblings().removeClass('active')
    $(list_open).toggleClass('active')
  })
})
$(document).ready(function () {
  var swiper = new Swiper('.mySwiper', {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  })
  var swiper = new Swiper('.mySwiper_2', {
    slidesPerView: 4,
    spaceBetween: 20,
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  })
  var swiper = new Swiper('.mySwiper_3', {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: false,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  })
  //  if($( window ).width('>1200px')){

  // };
  var swiper = new Swiper('.Partners ', {
    slidesPerView: 4,
    spaceBetween: 5,
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  })

  $('input').on('click', function () {
    is_checked = $(this).is(':checked')
    if (is_checked) {
      $('input').on('change', function () {
        $(this).attr('checked', 'checked')
      })
    } else {
      $('input').on('change', function () {
        $(this).removeAttr('checked', 'checked')
      })
    }
  })
  $('#firstWord').html(function () {
    var text = $(this).text().trim().split(' ')
    var first = text.shift()
    return (
      (text.length > 0
        ? "<span class='color_green'>" + first + '</span> '
        : first) + text.join(' ')
    )
  })

  $('#firstWordinRed').html(function () {
    var text = $(this).text().trim().split(' ')
    var first = text.shift()
    return (
      (text.length > 0
        ? "<span class='color_red'>" + first + '</span> '
        : first) + text.join(' ')
    )
  })
})
