const header = document.querySelector('.header');
var scroll = 0;

const functionImg = document.querySelector('.function-img__box img');
const bannerImg = document.querySelector('.banner-layer img');

const headerBurger = document.querySelector('.header-burger');
const headerNav = document.querySelector('.header-mobile__nav');
const headerBack = document.querySelector('.header-back');
const body = document.querySelector('body');

const funcSwip = new Swiper('.function-swiper', {
    slidesPerView: 4,
    spaceBetween: 30,
    navigation: {
        nextEl: '.function-next',
        prevEl: '.function-prev'
    },
    breakpoints: {
      1000: {
        slidesPerView: 4
      },
      800: {
        slidesPerView: 3
      },
      580: {
        slidesPerView: 2
      },
      0: {
        slidesPerView: 1
      }
    }
})

const bannerSwip = new Swiper('.banner-swiper', {
  slidesPerView: 1,
  spaceBetween: 20,
  fadeEffect: { crossFade: true },
  virtualTranslate: true,
  effect: 'fade',
  autoplay: {
    delay: 10000,
    disableOnInteraction: true,
  },
  pagination: {
    el: '.banner-pagination',
    clickable: true,
    renderBullet: function(index, className) {
      
      let names = [];

      document.querySelectorAll('.banner-slide').forEach(i => {
        names.push(i.getAttribute('data-slide-name'))
      })

      return "<span class="+className+"><p>" + names[index] + "</p></span>";
    }
  }
})



window.addEventListener('resize', () => {
  img(functionImg, './img/function/Group 229.png', './img/function/mobile.png')
  img(bannerImg, './img/banner/Group.png', './img/banner/mobile-banner.png')
  swipe()
})

window.addEventListener('DOMContentLoaded', () => {
  img(functionImg, './img/function/Group 229.png', './img/function/mobile.png')
  img(bannerImg, './img/banner/Group.png', './img/banner/mobile-banner.png')
  swipe()
})

window.addEventListener('click', (e) => {
  if(e.target.closest('.header-burger')) {
    headerNav.classList.toggle('active');
    headerBurger.classList.toggle('active');
    headerBack.classList.toggle('active');
    body.classList.toggle('stuck');
  }
})

window.onscroll = onScroll;



function img(i, pk, mobile)  {
  if(i) {
    if(screen.width > 900) {
      i.setAttribute('src', pk)
    } else if(screen.width < 800) {
      i.setAttribute('src', mobile)
    }
  }
}

function onScroll() {
  var top = window.pageYOffset;
  if (scroll > top) {
    header.classList.add('stuck')
  } else if (scroll < top) {
    header.classList.remove('stuck')
  }
  scroll = top;
}

function swipe() {
  const opport = document.querySelector('.opport-swiper');
  const opportWrapper = document.querySelector('.opport-wrapper');
  const arrOpportSlide = document.querySelectorAll('.opport-item');

  const opportSwipe =  document.querySelector('.opport-swiper.swiper')

  console.log(opportSwipe)

  if(opport) {
    if(!opportSwipe) {
      if(screen.width < 700) {
        opport.classList.add('swiper');
        opportWrapper.classList.add('swiper-wrapper');
        arrOpportSlide.forEach(i => {
          i.classList.add('swiper-slide');
        })

        const pag = document.createElement('div');
        pag.classList.add('swiper-pagination', 'opport-pagination')
  
        opport.appendChild(pag);
  
        const opportSlide = new Swiper(opport, {
          breakpoints: {
            600: {
              slidesPerView: 2,
              spaceBetween: 20
            },
            0: {
              slidesPerView: 1.4,
              spaceBetween: 20
            }
          },
          pagination: {
            el: '.opport-pagination',
            clickable: true
          }
        })
  
      } else if(screen.width > 700) {
        opport.classList.remove('swiper');
        opportWrapper.classList.remove('swiper-wrapper');
        arrOpportSlide.forEach(i => {
          i.classList.remove('swiper-slide');
        })
      }
    }
  }
}