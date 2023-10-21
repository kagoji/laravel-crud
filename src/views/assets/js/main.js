!function (e) {
    "use strict";

    $(document).ready(function () {


        function testimonialSlider() {
            $('.testimonialSlider').slick({
                infinite: true,
                dots: false,
                arrows: false,
                slidesToShow: 2,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 1
                        }
                    },
                ]
            });
        }

        testimonialSlider();



        // headerFixed
        function headerFixed() {
            var $scTop = $(window).scrollTop();
            if ($scTop > 0) {
                $(".header").addClass("fixdHeader");
            } else {
                $(".header").removeClass("fixdHeader");
            }
        }

        headerFixed();


        var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
            var currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
                document.getElementById("navbar").classList.remove('hideMenu');
            } else {
                document.getElementById("navbar").classList.add('hideMenu');
            }
            prevScrollpos = currentScrollPos;
        }



        $(window).on('scroll', function () {
            var $scTop = $(window).scrollTop();
            if ($scTop < 120) {
                $('.gotop').hide(120);
            } else {
                $('.gotop').show(120);
            }

            headerFixed();
        });








    });

}(jQuery);