$(function () {
    /* Inits */
    initLazy();
    initAccordion();
    initMenu();
    initScroll();
    initSliders();
    initTabs();

    function initSliders() {
        let $course_slider = $('#course-slider'),
            settingsCourse = {
                mobileFirst: true,
                slidesToShow: 1,
                responsive: [{
                    breakpoint: 767,
                    settings: "unslick"
                },
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 2
                    }
                }
                ]
            }
        $course_slider.slick(settingsCourse);

        let $main_slider = $('.main__list'),
            settingsMain = {
                mobileFirst: true,
                slidesToShow: 1,
                responsive: [{
                    breakpoint: 767,
                    settings: "unslick"
                },
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 2
                    }
                }
                ]
            }
        $main_slider.slick(settingsMain);
        $(window).on('resize', function () {
            if (!$main_slider.hasClass('slick-initialized')) {
                return $main_slider.slick(settingsMain);
            }
        });

        let $info_slider = $('.info__box'),
            settingsInfo = {
                mobileFirst: true,
                slidesToShow: 1,
                dots: true,
                responsive: [{
                    breakpoint: 767,
                    settings: "unslick"
                },
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 2
                    }
                }
                ]
            }
        $info_slider.slick(settingsInfo);
        $(window).on('resize', function () {
            if (!$info_slider.hasClass('slick-initialized')) {
                return $info_slider.slick(settingsInfo);
            }
        });

        let $advantages_slider = $('.advantages__box'),
            settingsAdvantages = {
                mobileFirst: true,
                slidesToShow: 1,
                dots: true,
                responsive: [{
                    breakpoint: 767,
                    settings: "unslick"
                },
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 2
                    }
                }
                ]
            }
        $advantages_slider.slick(settingsAdvantages);
        $(window).on('resize', function () {
            if (!$advantages_slider.hasClass('slick-initialized')) {
                return $advantages_slider.slick(settingsAdvantages);
            }
        });

        $(window).on('load', function () {
            let $expert_slider = $('.expert__slider'),
                settingsExpert = {
                    infinite: true,
                    appendArrows: $('.expert__arrows'),
                    responsive: [
                        {
                            breakpoint: 767,
                            settings: {
                                adaptiveHeight: true,
                            }
                        }
                    ]
                }
            $expert_slider.slick(settingsExpert);
            $(window).on('resize', function () {
                if (!$expert_slider.hasClass('slick-initialized')) {
                    return $expert_slider.slick(settingsExpert);
                }
            });
        });

    }
    function initTabs() {

        $('.all-tab__item').on('click', function (e) {
            e.preventDefault();
            let tabParent = $(this).closest('.all-tab')
            tabParent.find('.all-tab__item').removeClass('active')
            $(this).addClass('active');
            let tab_id = this.getAttribute('data-tab');
            $('.all-content__item').removeClass('active').filter(tab_id).addClass('active');
            $($course_slider).slick('setPosition');
        });

        $('.faq__tabs-item').on('click', function (e) {
            e.preventDefault();
            let tabParent = $(this).closest('.faq__tabs')
            tabParent.find('.faq__tabs-item').removeClass('active')
            $(this).addClass('active');
            let tab_id = this.getAttribute('data-tab');
            $('.faq__tabs-content').removeClass('active').filter(tab_id).addClass('active');
        });

    }

    function initScroll() {
        if (!$('.scroll').length) return;

        $(document).on('click scroll.init', '.scroll', function (event) {
            event.preventDefault();
            $.fancybox.close();

            var
                hrefId = $(this).attr('href') || $(this).data('href'),
                posTop = $(hrefId).offset().top - $('.header').height() + 0.5
                ;
            $('html, body').animate({ scrollTop: posTop }, 1000);
        });
    }

    function initMenu() {
        const body = document.querySelector('body');
        const hamburger = document.querySelector('#hamburger-menu');
        const closeMobileMenu = document.querySelector('#menu-modal__close');
        const mobileMenu = document.querySelector('#menu-modal');
        const mobileLink = document.querySelectorAll('.menu-modal__link')

        function blockedScroll() {
            if (body.classList.contains('blocked-scroll')) {
                body.classList.remove('blocked-scroll');
            } else {
                body.classList.add('blocked-scroll');
            }
        }

        for(i = 0; i < mobileLink.length; i++ ) {
            mobileLink[i].addEventListener('click', () => {
                mobileMenu.classList.remove('menu-modal_active');
            })
        }

        hamburger.addEventListener('click', () => {
            mobileMenu.classList.add('menu-modal_active');
            blockedScroll();

        });

        closeMobileMenu.addEventListener('click', () => {
            mobileMenu.classList.remove('menu-modal_active');
            blockedScroll();
        });
    }

    /* Lazy */

    function initLazy() {

        let
            lazyArr = [].slice.call(document.querySelectorAll('.lazy')),
            active = false,
            threshold = 200;

        const lazyLoad = function (e) {
            if (active === false) {
                active = true;

                setTimeout(function () {
                    lazyArr.forEach(function (lazyObj) {
                        if ((lazyObj.getBoundingClientRect().top <= window.innerHeight + threshold && lazyObj.getBoundingClientRect().bottom >= -threshold) && getComputedStyle(lazyObj).display !== 'none') {

                            if (lazyObj.dataset.src) {
                                let
                                    img = new Image(),
                                    src = lazyObj.dataset.src;
                                img.src = src;
                                img.onload = function () {
                                    if (!!lazyObj.parent) {
                                        lazyObj.parent.replaceChild(img, lazyObj);
                                    } else {
                                        lazyObj.src = src;
                                    }
                                }
                                lazyObj.removeAttribute('data-src');
                            }

                            if (lazyObj.dataset.srcset) {
                                lazyObj.srcset = lazyObj.dataset.srcset;
                                lazyObj.removeAttribute('data-srcset');
                            }

                            lazyObj.classList.remove('lazy');
                            lazyObj.classList.add('lazy-loaded');

                            lazyArr = lazyArr.filter(function (obj) {
                                return obj !== lazyObj;
                            });

                            if (lazyArr.length === 0) {
                                document.removeEventListener('scroll', lazyLoad);
                                window.removeEventListener('resize', lazyLoad);
                                window.removeEventListener('orientationchange', lazyLoad);
                            }
                        }
                    });

                    active = false;
                }, 200);
            }
        };

        lazyLoad();

        document.addEventListener('scroll', lazyLoad);
        window.addEventListener('resize', lazyLoad);
        window.addEventListener('orientationchange', lazyLoad);
    }





    function initAccordion() {
        $(".acco__item:first-child").addClass('open');
        let accordions = $('.acco__item')
        accordions.each(function (i, el) {
            let accordion = $(el)
            let accordionHeader = accordion.find('.acco__item-trigger')
            let accordionContent = accordion.find('.acco__content')
            accordionHeader.on('click', function () {
                if (accordion.hasClass('open')) {
                    // accordionContent.slideUp()
                    accordion.removeClass('open')
                } else {
                    // accordionContent.slideDown()
                    accordion.addClass('open')
                }
            })
        })

    }
});

