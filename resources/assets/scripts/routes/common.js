export default {
  init() {

    (function () {
      var trial = document.createElement('script');
      trial.type = 'text/javascript';
      trial.async = true;
      trial.src = 'https://easy.myfonts.net/v2/js?sid=210860(font-family=Avenir+Next+Pro+Bold)&sid=217165(font-family=Avenir+Next+Pro+Regular)&sid=217166(font-family=Avenir+Next+Pro+Medium)&sid=255228(font-family=Avenir+Next+Pro+Light)&key=SyaTieN1di';
      var head = document.getElementsByTagName("head")[0];
      head.appendChild(trial);
    })();

    (function () {
      const mobileBtn = document.getElementById('mobileBtn');
      const hamburger = document.querySelector('.hamburger');
      const navigation = document.querySelector('.nav-primary');

      mobileBtn.onclick = function () {
        hamburger.classList.toggle('is-active');
        navigation.classList.toggle('nav-primary--active');
      }
    })();

    // Collapse menu when scroll

    function headerScroll() {
      var scrollTop = $(window).scrollTop();
      if (scrollTop >= 20) {
        $('.header-nav').addClass("header-nav--scrolled");
      } else {
        $('.header-nav').removeClass("header-nav--scrolled");
      }
    }
    $(document).scroll(function () {
      headerScroll();
    });
    $(document).resize(function () {
      headerScroll();
    });
    headerScroll();



    if ($(window).width() < 992) {
      $('.nav-primary li.menu-item-has-children > a').on('click', function(e){
        e.preventDefault();
        $('.sub-menu').toggleClass('sub-menu--active');
      });
    } else {
      // dropdown

      $(".nav-primary .menu-item-has-children").hover(function () {
        $('.nav-primary .menu-item-has-children ul').css('display', 'flex');
      }, function() {
        $('.nav-primary .menu-item-has-children ul').css('display', 'none');
      });

      $('.wcd-wrapper').mouseenter(function () {
        $('.wcd-after').addClass('wcd-after--active');
      });
      $('.wcd-wrapper').mouseleave(function () {
        $('.wcd-after').removeClass('wcd-after--active');
      });
    }


    //Timer to 12:00
    var date;
    var timerHours = document.getElementById('timerHours');
    var timerMinutes = document.getElementById('timerMinutes');
    var timerSeconds = document.getElementById('timerSeconds');
    setInterval(function () {
      date = new Date();
      var currenthours = date.getHours();
      var hours;
      var minutes;
      var secondes;
      if (currenthours != 12) {
        if (currenthours < 12)
          hours = 11 - currenthours;
        else hours = 12 + (24 - currenthours);
        minutes = 60 - date.getMinutes();
        secondes = 60 - date.getSeconds();
        timerHours.innerHTML = hours;
        timerMinutes.innerHTML = minutes;
        timerSeconds.innerHTML = secondes;
      } else {
         timerHours.innerHTML = '00';
         timerMinutes.innerHTML = '00';
         timerSeconds.innerHTML = '00';
      }
    }, 1000);

    // //parallax
    // if (document.getElementById('sceneFooter')) {
    //   var paralaxFooter = document.getElementById('sceneFooter');
    //   var paralaxFooterInstance = new Parallax(paralaxFooter, {
    //     relativeInput: true,
    //   });
    //   paralaxFooterInstance.friction(0.1, 0.1);
    // }

    // if (document.getElementById('treesBanner')) {
    //    var paralaxTreesBanner = document.getElementById('treesBanner');
    //    var paralaxTreesBannerInstance = new Parallax(paralaxTreesBanner, {
    //      relativeInput: true,
    //    });
    //    paralaxTreesBannerInstance.friction(0.1, 0.1);
    // }

    $(document).ready(function () {
      // back to top
      $('.back-to-top').on('click', function (e) {
        e.preventDefault();
        $("html, body").animate({
          scrollTop: 0,
        }, 1000);
      });
      // Load more Awards
      if (jQuery('.awards').length > 0) {
        var awards = jQuery('.award-logo');
        var restAwards = document.getElementById("restAwards");
        restAwards.innerHTML = '+' + (awards.length - 7).toString();
        if (jQuery(".award-logo:hidden").length != 0) {
          jQuery(".load-more-awards").show();
        }

        jQuery(".load-more-awards").on("click", function (e) {
          e.preventDefault();
          jQuery(".award-logo:hidden").slideDown();
          if (jQuery(".award-logo:hidden").length == 0) {
            jQuery(".load-more-awards").fadeOut("fast");
          }
        });
      }


      // Load more Writers
      if (jQuery('.writers').length > 0) {
        var writers = jQuery('.writer-logo');
        var restWriters = document.getElementById('restWriters');

        restWriters.innerHTML = "+" + (writers.length - 7).toString();

        if (jQuery(".writer-logo:hidden").length != 0) {
          jQuery(".load-more-awards").show();
        }

        jQuery(".load-more-writers").on("click", function (e) {
          e.preventDefault();
          jQuery(".writer-logo:hidden").slideDown();
          if (jQuery(".writer-logo:hidden").length == 0) {
            jQuery(".load-more-writers").fadeOut("fast");
          }
        });
      }

      // FAQ
      if (jQuery('.faq')) {
        (function () {
          const question = jQuery('.faq-wrapper-elem');
          question.on('click', function(){
            let el = jQuery(this);
            let answer = jQuery('.faq-wrapper-elem__answer');
            if (el.hasClass('faq-wrapper-elem--active')) {
              el.toggleClass('faq-wrapper-elem--active');
              el.find(answer).slideUp(200);
            } else {
              el.toggleClass('faq-wrapper-elem--active');
              el.find(answer).slideDown(200);
            }
          });
        })();
      }

      // Menu when scrolled
      // Collapse menu when scroll

      function headerScroll() {
        var scrollTop = jQuery(window).scrollTop();
        if (scrollTop >= 20) {
          jQuery('.page-header').addClass("scrolled");
        } else {
          jQuery('.page-header').removeClass("scrolled");
        }
        if (scrollTop >= 0 && $(window).width() > 575) {
          jQuery(".contact-widget").css('top', scrollTop + 300);
        } else {
          jQuery(".contact-widget").css('top', '300');
        }
      }
      jQuery(document).scroll(function () {
        headerScroll();
      });
      jQuery(document).resize(function () {
        headerScroll();
      });
      headerScroll();

      // INPUT NUMBER CUSTOM BUTTONS

      //   function inputNumber(el) {

      //     var min = el.attr('min') || false;
      //     var max = el.attr('max') || false;

      //     var els = {};

      //     els.dec = jQuery('.minus');
      //     els.inc = jQuery('.plus');

      //     el.each(function () {
      //       init($(this));
      //     });

      //     function init(el) {

      //       els.dec.on('click', decrement);
      //       els.inc.on('click', increment);
      //       function decrement() {
      //         var value = el[0].value;
      //         value--;
      //         if (!min || value >= min) {
      //           el[0].value = value;
      //         }
      //       }

      //       function increment() {
      //         var value = el[0].value;
      //         value++;
      //         if (!max || value <= max) {
      //           el[0].value = value++;
      //         }
      //       }
      //     }
      //   }
      // inputNumber(jQuery('.input-number'));
    });

    // Hiding mini-cart
    // if ($('body').hasClass('woocommerce-checkout') || $('body').hasClass('woocommerce-cart')) {
    //   $('.wcd-after').css('display', 'none');
    // }

    // SINGLE PRODUCT SLIDER

    $(window).load(function () {
      $('#product-carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 150,
        itemMargin: 0,
        asNavFor: '#product-slider',
        touch: true,
        prevText: "",
        nextText: "",
      });

      $('#product-slider').flexslider({
        animation: "slide",
        controlNav: true,
        animationLoop: false,
        slideshow: false,
        sync: "#product-carousel",
        manualControls: "flexslider-nav",
        prevText: "",
        nextText: "",
      });
    });

    // SINGLE PRODUCT TABS
    $('.single-product-content-nav__button').on('click', function() {
      $(this).addClass('single-product-content-nav__button--active');
      $(this).siblings().removeClass('single-product-content-nav__button--active');
      $('.single-product-content-section').removeClass('single-product-content-section--active');
      $(document).find('#singleProductContentSection_' + $(this).index()).addClass('single-product-content-section--active');
    });
  },

  finalize() {

  },
};
