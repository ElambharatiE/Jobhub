<div class="footer-container">
    <footer>

        <div class="row footer-row">
            <div class="container--wide footer-content">
                <div class="footer-column">
                    <span class="footer-title">Discover</span>
                    <div class="links">
                        <a class="box-no-padding" href="become-a-tasker.html">Become a Tasker</a>
                        <!--<a class="box-no-padding" href="#">Services By City</a>-->
                        <a class="box-no-padding" href="all-services.html">All Services</a>
                        <!--<a class="box-no-padding" href="#">Buy a Gift Card</a>
<a class="box-no-padding" href="#">Elite Taskers</a>-->
                        <a class="box-no-padding" href="contact.html">Help</a>
                    </div>
                </div>
                <div class="footer-column">
                    <span class="footer-title">Company</span>
                    <div class="links">
                        <a class="box-no-padding" href="about.html">About Us</a>
                        <!--<a class="box-no-padding" href="#">Careers</a>
<a class="box-no-padding" href="#">Press</a>
<a class="box-no-padding" href="#">Jobhub for Good</a>-->
                        <a class="box-no-padding" href="blog.html">Blog</a>
                        <a class="box-no-padding" href="terms-conditions.html">Terms and Conditions</a>
                        <a class="box-no-padding" href="privacy-policy.html">Privacy Policy</a>
                        <!--<a class="box-no-padding inline-links" href="#"> California Customer Notice </a>
<a class="box-no-padding inline-links" href="#"> Do Not Sell My Personal Information </a>-->
                    </div>
                </div>

            </div>
        </div>
    </footer>
</div>
</div>
</div>


<style type="text/css">
    footer .footerbar ul li a:hover {
        text-decoration: none;
        color: #fff !important;
    }
</style>

<!-- add javascripts -->

<script>
    $(document).ready(function() {
        $(window).scroll(function() {
            if ($(window).width() > 1200) {
                // check if scroll event happened
                if ($(document).scrollTop() >
                    50) { // check if user scrolled more than 50 from top of the browser window
                    $(".navbar-fixed-top").css("background-color", "#F4F4F4");

                    $(".navbar-fixed-top li a").css("color", "#000000");


                    $(".navbar-fixed-top li.dropdown .open a").css("color", "#000000");
                    // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
                } else {
                    $(".navbar-fixed-top").css("background-color", "transparent");

                    $(".navbar-fixed-top li a").css("color", "#000000");
                    $(".navbar-fixed-top li.dropdown .open a").css("color", "#000000");
                    // if not, change it back to transparent
                }

            }

        });
    });
</script>
<!-- Only used for Script Tutorial's Demo site. Please ignore and remove. -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#media').carousel({
            pause: true,
            interval: false,
        });
    });
</script>


<script type="text/javascript">
    function handleSelectChange(val) {


        if (val) { // require a URL
            window.location = val; // redirect
        }

    }
</script>





<script type="text/javascript">
    function openNav() {

        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>


<script type="text/javascript" src="js/jquery.cookie.min.js"></script><!-- language -->
<script type="text/javascript" defer="defer">
    //language
    $(document).ready(function() {
        $(".language_value").click(function() {
            $.cookie("language", $(this).attr("value"), {
                path: '/',
                expires: 365
            });
            console.log($.cookie("language"));
            location.reload();
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {

        var rtl_arabic = $.cookie('language');
        if (rtl_arabic == "ar") {

            $('head').append('<link rel="stylesheet" href="css/rtl.css" type="text/css" />');


        }
    });
</script>
<!--<script src="//code.tidio.co/wg9syoaz8eczbdqcy6wqleztfujkqttw.js" async></script>-->



</body>

</html>
<style>
    .showmore {

        font-weight: bold;
        font-size: 15px;
        cursor: pointer;

    }




    .client-photo {

        padding: 1em;

    }
</style>


<!--<script src="/js/jquery-validation.js" type="text/javascript"></script>
<script src="/js/jquery-validationcode.js" type="text/javascript"></script>
<script>
var jq = $.noConflict();
jq(document).ready(function(jq){
  jq("#formID").validate({
  rules: {
    search_text:"required",
}

});
 });
</script> -->
<style type="text/css">
    .error {

        color: red;

    }
</style>

<script type="text/javascript">
    $('ul.expandible').each(function() {
        var $ul = $(this),
            $lis = $ul.find('li:gt(3)'),
            isExpanded = $ul.hasClass('expanded');
        $lis[isExpanded ? 'show' : 'hide']();

        if ($lis.length > 0) {
            $ul
                .append($('<li id="expanedli" class="showmore expand dashboard__search_cta_wrapper">' + (
                        isExpanded ? '' :
                        'Show More') + '</li>')
                    .click(function(event) {
                        var isExpanded = $ul.hasClass('expanded');
                        event.preventDefault();
                        $(this).html(isExpanded ? 'Show More' : '');
                        $ul.toggleClass('expanded');
                        $lis.toggle();
                    }));
        }
    });

    $(document).ready(function() {


        src = "searchajax.php";
        $("#search_text").autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: src,
                    dataType: "json",
                    data: {
                        term: request.term
                    },
                    success: function(data) {
                        response(data);
                        document.querySelector("#movetogethelp").setAttribute("action",
                            `search/${data[0]['id']}/${data[0]['value'].toLowerCase().replace(" ", "-")}.html`
                        )
                    }

                });
                //$("#sv_autosearch").click();
            },
            minLength: 1,

        });



    });

    /* document.getElementById("search_text").onchange = function() {
        document.getElementById("formID").submit();
    }; */
</script>


<link href="css/carousel/owl.carousel.min.css" rel="stylesheet">
<!--<script src="/js/carousel/jquery.min.js"></script>-->
<script src="js/carousel/bootstrap.bundle.min.js"></script>
<script src="js/carousel/owl.carousel.min.js"></script>
<script src="js/carousel/carausol_slider.js"></script>
<script type="text/javascript">
    $(document).on('ready', function() {
        var rtl_arabic = $.cookie('language');
        if (rtl_arabic == "ar") {
            $(".regular").slick({
                rtl: true,
                dots: false,
                infinite: false,
                speed: 300,
                fade: false,
                cssEase: 'linear',
                slidesToShow: 3,
                slidesToScroll: 3,
                responsive: [

                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            infinite: true,
                            dots: false
                        }
                    },

                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            infinite: true,
                            dots: false
                        }
                    },

                    {
                        breakpoint: 800,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            dots: false
                        }
                    },

                    {
                        breakpoint: 900,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            dots: false
                        }
                    },


                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            dots: false
                        }
                    },

                    {
                        breakpoint: 677,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            dots: false
                        }
                    },

                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            dots: false
                        }
                    }
                ]
            });
        } else {
            $(".regular").slick({
                dots: false,
                infinite: false,
                speed: 300,
                fade: false,
                cssEase: 'linear',
                slidesToShow: 3,
                slidesToScroll: 3,
                responsive: [

                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            infinite: true,
                            dots: false
                        }
                    },

                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            infinite: true,
                            dots: false
                        }
                    },

                    {
                        breakpoint: 800,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            dots: false
                        }
                    },

                    {
                        breakpoint: 900,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            dots: false
                        }
                    },


                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            dots: false
                        }
                    },

                    {
                        breakpoint: 677,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            dots: false
                        }
                    },

                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            dots: false
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });

        }

    });
</script>