<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <title>Livetvweb | Login</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="../assets/img/logo-icon.png" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets1/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="assets1/vendor/hs-mega-menu/dist/hs-mega-menu.min.css">
    <link rel="stylesheet" href="assets1/vendor/dzsparallaxer/dzsparallaxer.css">
    <link rel="stylesheet" href="assets1/vendor/cubeportfolio/css/cubeportfolio.min.css">
    <link rel="stylesheet" href="assets1/vendor/aos/dist/aos.css">
    <link rel="stylesheet" href="assets1/vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="assets1/vendor/fancybox/dist/jquery.fancybox.css">

    <link rel="stylesheet" href="assets1/css/theme.css">
</head>

<body>
    <main id="content">
        <div>
            <div class="bg-img-hero position-fixed top-0 bottom-0 left-0 right-0" style="background-image: url('/assets/img/banner.png'); filter: blur(0px);
  -webkit-filter: blur(5px);opacity:5">
            </div>
            <div class="container position-relative px-md-5">
                <div class="space-2 space-md-3 space-xl-2">
                    <div class="space-xl-3">
                        <div class="row mx-md-n6">
                            <div class="col-lg-4 px-md-6"></div>
                            <div class="col-lg-4 px-md-6 d-flex flex-column justify-content-center">
                                <div class="card p-5">
                                    <div class="text-center mb-7">
                                        <img src="assets/img/logo-icon.png" width="40px" height="40px">
                                        <p>Welcome to LiveTV Web</p>
                                    </div>

                                    <form class="" method="post" action="{{route('log')}}">
                                        @csrf
                                        @if(session()->has('message'))
                                        <div class="alert alert-success">
                                            {{ session()->get('message') }}
                                        </div>
                                        @endif

                                        <div id="login">
                                            <div class="js-form-message mb-3">
                                                <label class="input-label">Name</label>
                                                <div class="input-group input-group-sm mb-2">
                                                    <input type="text" class="form-control" name="name" id="signinPassword">
                                                </div>
                                            </div>


                                            <div class="js-form-message mb-4">
                                                <label class="input-label">Email</label>
                                                <div class="input-group input-group-sm mb-2">
                                                    <input type="email" class="form-control" name="email" id="signinEmail" aria-label="Email" required data-msg="Please enter a valid email address.">
                                                </div>
                                            </div>


                                            <div class="js-form-message mb-3">
                                                <label class="input-label">Country</label>
                                                <div class="input-group input-group-sm mb-2">
                                                    <input type="text" class="form-control" name="country" id="signinPassword">
                                                </div>
                                            </div>

                                            <!-- <div class="d-flex justify-content-end mb-4">
                    <a class="js-animation-link small link-underline" href="javascript:;" data-hs-show-animation-options='{
                                        "targetSelector": "#forgotPassword",
                                        "groupName": "idForm"
                                    }'>Forgot Password?
                    </a>
                    </div> -->
                                            <div class="mb-3">
                                                <button type="submit" class="btn btn-sm btn-primary btn-block">Sign In</button>
                                            </div>
                                            <div class="text-center mb-3">
                                                <span class="divider divider-xs divider-text">OR</span>
                                            </div>
                                            <a class="btn btn-sm btn-ghost-secondary btn-block mb-2" href="contact.html#">
                                                <!-- <span class="d-flex justify-content-center align-items-center">
<i class="fab fa-google mr-2"></i>
Sign In with Google
</span> -->
                                            </a>
                                            <div class="text-center">
                                                <span class="small text-muted">Do not have an account?</span>
                                                <a class="js-animation-link small font-weight-bold" href="javascript:;" data-hs-show-animation-options='{
                      "targetSelector": "#signup",
                     "groupName": "idForm"
                    }'>Sign Up
                                                </a>
                                            </div>
                                        </div>

                                    </form>
                                    <!--------------------------------Register Form--------------------------------------------->
                                    <form class="js-validate" method="post" action="{{route('register')}}">
                                        <div id="signup" style="display: none; opacity: 0;">


                                            <div class="text-center mb-7">
                                                <h3 class="mb-0"></h3>
                                                <!-- <p>Fill out the form to get started.</p> -->
                                            </div>

                                            @if(session()->has('message'))
                                            <div class="alert alert-success">
                                                {{ session()->get('message') }}
                                            </div>
                                            @endif
                                            @csrf
                                            <div class="js-form-message mb-4">
                                                <label class="input-label">Name</label>
                                                <div class="input-group input-group-sm mb-2">
                                                    <input type="text" class="form-control" name="name" id="">
                                                </div>
                                            </div>



                                            <div class="js-form-message mb-4">
                                                <label class="input-label">Email</label>
                                                <div class="input-group input-group-sm mb-2">
                                                    <input type="email" class="form-control" name="email" id="" placeholder="Email" aria-label="Email" required data-msg="Please enter a valid email address.">
                                                </div>
                                            </div>




                                            <div class="js-form-message mb-4">
                                                <label class="input-label">Country</label>
                                                <div class="input-group input-group-sm mb-2">
                                                    <input type="text" class="form-control" name="country" id="" placeholder="Country">
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <button type="submit" class="btn btn-sm btn-primary btn-block">Sign Up</button>
                                            </div>
                                            <div class="text-center mb-3">
                                                <span class="divider divider-xs divider-text">OR</span>
                                            </div>
                                            <a class="btn btn-sm btn-ghost-secondary btn-block mb-2" href="#">
                                                <!-- <span class="d-flex justify-content-center align-items-center">
<i class="fab fa-google mr-2"></i>
Sign Up with Google
</span> -->
                                            </a>
                                            <div class="text-center">
                                                <span class="small text-muted">Already have an account?</span>
                                                <a class="js-animation-link small font-weight-bold" href="javascript:;" data-hs-show-animation-options='{
                     "targetSelector": "#login",
                        "groupName": "idForm"
                       }'>Sign In
                                                </a>
                                            </div>
                                        </div>
                                    </form>




                                    <!------------------------------------  --------------------------------------------->


                                    <div id="forgotPassword" style="display: none; opacity: 0;">

                                        <div class="text-center mb-7">
                                            <h3 class="mb-0">Recover password</h3>
                                            <p>Instructions will be sent to you.</p>
                                        </div>


                                        <div class="js-form-message">
                                            <label class="sr-only" for="recoverEmail">Your email</label>
                                            <div class="input-group input-group-sm mb-2">
                                                <input type="email" class="form-control" name="email" id="recoverEmail" placeholder="Your email" aria-label="Your email" required data-msg="Please enter a valid email address.">
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-sm btn-primary btn-block">Recover Password</button>
                                        </div>
                                        <div class="text-center mb-4">
                                            <span class="small text-muted">Remember your password?</span>
                                            <a class="js-animation-link small font-weight-bold" href="javascript:;" data-hs-show-animation-options='{
                       "targetSelector": "#login",
                       "groupName": "idForm"
                        }'>Login
                                            </a>
                                        </div>
                                    </div>

                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-4 px-md-6"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>






    <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;" data-hs-go-to-options='{
            "offsetTop": 700,
            "position": {
                "init": {
                    "right": 15
                },
                "show": {
                    "bottom": 15
                },
                "hide": {
                    "bottom": -15
                }
            }
        }'>
        <i class="fas fa-angle-up"></i>
    </a>


    <script src="assets1/vendor/jquery/dist/jquery.min.js"></script>
    <script src="assets1/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
    <script src="assets1/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <script src="assets1/vendor/hs-header/dist/hs-header.min.js"></script>
    <script src="assets1/vendor/hs-go-to/dist/hs-go-to.min.js"></script>
    <script src="assets1/vendor/hs-unfold/dist/hs-unfold.min.js"></script>
    <script src="assets1/vendor/hs-mega-menu/dist/hs-mega-menu.min.js"></script>
    <script src="assets1/vendor/hs-show-animation/dist/hs-show-animation.min.js"></script>
    <script src="assets1/vendor/hs-sticky-block/dist/hs-sticky-block.min.js"></script>
    <script src="assets1/vendor/hs-counter/dist/hs-counter.min.js"></script>
    <script src="assets1/vendor/appear.js"></script>
    <script src="assets1/vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
    <script src="assets1/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="assets1/vendor/dzsparallaxer/dzsparallaxer.js"></script>
    <script src="assets1/vendor/aos/dist/aos.js"></script>
    <script src="assets1/vendor/slick-carousel/slick/slick.js"></script>
    <script src="assets1/vendor/fancybox/dist/jquery.fancybox.min.js"></script>
    <script src="assets1/vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>

    <script src="assets1/js/hs.core.js"></script>
    <script src="assets1/js/hs.validation.js"></script>
    <script src="assets1/js/hs.cubeportfolio.js"></script>
    <script src="assets1/js/hs.slick-carousel.js"></script>
    <script src="assets1/js/hs.fancybox.js"></script>
    <script src="assets1/js/hs.countdown.js"></script>

    <script>
        $(document).on('ready', function() {
            // initialization of header
            var header = new HSHeader($('#header')).init();

            // initialization of mega menu
            var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
                desktop: {
                    position: 'left'
                }
            }).init();

            // initialization of fancybox
            $('.js-fancybox').each(function() {
                var fancybox = $.HSCore.components.HSFancyBox.init($(this));
            });

            // initialization of unfold
            var unfold = new HSUnfold('.js-hs-unfold-invoker').init();

            // initialization of slick carousel
            $('.js-slick-carousel').each(function() {
                var slickCarousel = $.HSCore.components.HSSlickCarousel.init($(this));
            });

            // initialization of form validation
            $('.js-validate').each(function() {

                var validation = $.HSCore.components.HSValidation.init($(this));

                $.HSCore.components.HSValidation.init($(this), {
                    rules: {
                        confirmPassword: {
                            equalTo: '#signupPassword'
                        }
                    }
                });
            });

            // initialization of show animations
            $('.js-animation-link').each(function() {
                var showAnimation = new HSShowAnimation($(this)).init();
            });

            // initialization of countdowns
            $('.js-countdown').each(function() {
                var countdown = $.HSCore.components.HSCountdown.init($(this));
            });

            // initialization of counter
            $('.js-counter').each(function() {
                var counter = new HSCounter($(this)).init();
            });

            // initialization of sticky block
            var cbpStickyFilter = new HSStickyBlock($('#cbpStickyFilter'));

            // initialization of cubeportfolio
            $('.cbp').each(function() {
                var cbp = $.HSCore.components.HSCubeportfolio.init($(this), {
                    layoutMode: 'grid',
                    filters: '#filterControls',
                    displayTypeSpeed: 0
                });
            });

            $('.cbp').on('initComplete.cbp', function() {
                // update sticky block
                cbpStickyFilter.update();

                // initialization of aos
                AOS.init({
                    duration: 650,
                    once: true
                });
            });

            $('.cbp').on('filterComplete.cbp', function() {
                // update sticky block
                cbpStickyFilter.update();

                // initialization of aos
                AOS.init({
                    duration: 650,
                    once: true
                });
            });

            $('.cbp').on('pluginResize.cbp', function() {
                // update sticky block
                cbpStickyFilter.update();
            });

            // animated scroll to cbp container
            $('#cbpStickyFilter').on('click', '.cbp-filter-item', function(e) {
                $('html, body').stop().animate({
                    scrollTop: $('#demoExamplesSection').offset().top
                }, 200);
            });

            // initialization of go to
            $('.js-go-to').each(function() {
                var goTo = new HSGoTo($(this)).init();
            });
        });
    </script>

    <script>
        if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="../../assets1/vendor/polifills.js"><\/script>');
    </script>
</body>

</html>