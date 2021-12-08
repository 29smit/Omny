<?php
 
 define('BASE_URL','http://localhost/omny/');
 ?>
<!DOCTYPE html>
<html>

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php echo $title; ?>|Ethio Omny Trading Plc</title>

    <meta name="keywords" content="OMNY Cell – Net Limited" />
    <meta name="description" content="OMNY Cell – Net Limited">
    <meta name="author" content="Siddhartha Mehta">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap"
        rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="vendor/animate/animate.compat.css">
    <link rel="stylesheet" href="css/app.css">

    <!-- Head Libs -->
    <script src="vendor/modernizr/modernizr.min.js" defer></script>
    <script src="https://kit.fontawesome.com/71f557782d.js" crossorigin="anonymous" defer></script>

    
    <!-- Vendor -->
    <script src="vendor/jquery/jquery.min.js" defer></script>
    <script src="vendor/jquery.appear/jquery.appear.min.js" defer></script>
    <script src="vendor/jquery.easing/jquery.easing.min.js" defer></script>
    <script src="vendor/jquery.cookie/jquery.cookie.min.js" defer></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js" defer></script>
    <script src="vendor/jquery.validation/jquery.validate.min.js" defer></script>
    <script src="vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js" defer></script>
    <script src="vendor/jquery.gmap/jquery.gmap.min.js" defer></script>
    <script src="vendor/lazysizes/lazysizes.min.js" defer></script>
    <script src="vendor/isotope/jquery.isotope.min.js" defer></script>
    <script src="vendor/owl.carousel/owl.carousel.min.js" defer></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js" defer></script>
    <script src="vendor/vide/jquery.vide.min.js" defer></script>
    <script src="vendor/vivus/vivus.min.js" defer></script>
    <!-- Theme Base, Components and Settings -->
    <script src="js/theme.js" defer></script>

    <!-- Current Page Vendor and Views -->
    <script src="js/views/view.contact.js" defer></script>

    <!-- Theme Custom -->
    <script src="js/custom.js" defer></script>

    <!-- Theme Initialization Files -->
    <script src="js/theme.init.js" defer></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRyF49Juugp1uiPmbXR03jiRGws5auXok" defer></script>
    <script defer>
        /*
                    Map Settings

                        Find the Latitude and Longitude of your address:
                            - https://www.latlong.net/
                            - http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

                    */

        function initializeGoogleMaps() {
            // Map Initial Location
            var initLatitude = 9.00635;
            var initLongitude = 38.80014;


            // Map Markers
            var mapMarkers = [{
                latitude: initLatitude,
                longitude: initLongitude,
                html: "<strong>Alfoz plaza Gerji Road</strong><br>Near imperial hotel<br>7 th floor No. 2<br>Addis Ababa, Ethiopia<br><br><a href='#' onclick='mapCenterAt({latitude:  9.00635, longitude: 38.80014, zoom: 16}, event)'>[+] zoom here</a>",
                icon: {
                    image: "img/demos/business-consulting-3/map-pin.png",
                    iconsize: [26, 27],
                    iconanchor: [12, 27]
                }
            }];

            // Map Extended Settings
            var mapSettings = {
                controls: {
                    draggable: (($.browser.mobile) ? false : true),
                    panControl: false,
                    zoomControl: false,
                    mapTypeControl: false,
                    scaleControl: false,
                    streetViewControl: false,
                    overviewMapControl: false
                },
                scrollwheel: false,
                markers: mapMarkers,
                latitude: initLatitude,
                longitude: initLongitude,
                zoom: 14
            };

            var map = $('#googlemaps').gMap(mapSettings),
                mapRef = $('#googlemaps').data('gMap.reference');

            // Styles from https://snazzymaps.com/
            var styles = [{
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#e9e9e9"
                }, {
                    "lightness": 17
                }]
            }, {
                "featureType": "landscape",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#f5f5f5"
                }, {
                    "lightness": 20
                }]
            }, {
                "featureType": "road.highway",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#ffffff"
                }, {
                    "lightness": 17
                }]
            }, {
                "featureType": "road.highway",
                "elementType": "geometry.stroke",
                "stylers": [{
                    "color": "#ffffff"
                }, {
                    "lightness": 29
                }, {
                    "weight": 0.2
                }]
            }, {
                "featureType": "road.arterial",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#ffffff"
                }, {
                    "lightness": 18
                }]
            }, {
                "featureType": "road.local",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#ffffff"
                }, {
                    "lightness": 16
                }]
            }, {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#f5f5f5"
                }, {
                    "lightness": 21
                }]
            }, {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#dedede"
                }, {
                    "lightness": 21
                }]
            }, {
                "elementType": "labels.text.stroke",
                "stylers": [{
                    "visibility": "on"
                }, {
                    "color": "#ffffff"
                }, {
                    "lightness": 16
                }]
            }, {
                "elementType": "labels.text.fill",
                "stylers": [{
                    "saturation": 36
                }, {
                    "color": "#333333"
                }, {
                    "lightness": 40
                }]
            }, {
                "elementType": "labels.icon",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "transit",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#f2f2f2"
                }, {
                    "lightness": 19
                }]
            }, {
                "featureType": "administrative",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#fefefe"
                }, {
                    "lightness": 20
                }]
            }, {
                "featureType": "administrative",
                "elementType": "geometry.stroke",
                "stylers": [{
                    "color": "#fefefe"
                }, {
                    "lightness": 17
                }, {
                    "weight": 1.2
                }]
            }];

            var styledMap = new google.maps.StyledMapType(styles, {
                name: 'Styled Map'
            });

            mapRef.mapTypes.set('map_style', styledMap);
            mapRef.setMapTypeId('map_style');
        }

        // Initialize Google Maps when element enter on browser view
        theme.fn.intObs('#googlemaps', 'initializeGoogleMaps()', {});

        // Map text-center At
        var mapCenterAt = function(options, e) {
            e.preventDefault();
            $('#googlemaps').gMap("centerAt", options);
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/turbolinks/5.2.0/turbolinks.js"
        integrity="sha512-G3jAqT2eM4MMkLMyQR5YBhvN5/Da3IG6kqgYqU9zlIH4+2a+GuMdLb5Kpxy6ItMdCfgaKlo2XFhI0dHtMJjoRw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        Turbolinks.start();
        document.addEventListener("turbolinks:load", function() {
            init();
            initializeGoogleMaps();
            // theme.fn.intObs( '#googlemaps2', 'initializeGoogleMaps()', {} );
        })
    </script>
</head>

<body data-plugin-cursor-effect>
    <div class="body">
        <header id="header" class="header-effect-shrink"
            data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 85}">
            <div class="header-body border-top-0">
                <div class="header-top header-top-default header-top-borders border-bottom-0 bg-color-light">
                    <div class="container">
                        <div class="header-row">
                            <div class="header-column justify-content-between">
                                <div class="header-row">
                                    <nav class="header-nav-top w-100 w-md-50pct w-xl-100pct">
                                        <ul class="nav nav-pills d-inline-flex custom-header-top-nav-background pe-5">
                                            <li class="nav-item py-2 d-inline-flex z-index-1">
                                                <span class="d-flex align-items-center p-0">
                                                    <span>
                                                        <img width="25"
                                                            src="img/demos/business-consulting-3/icons/phone.svg"
                                                            alt="Phone Icon" data-icon
                                                            data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                                                    </span>
                                                    <a class="text-color-light text-decoration-none font-weight-semibold text-3-5 ms-2"
                                                        href="tel:1234567890" data-cursor-effect-hover="plus"
                                                        data-cursor-effect-hover-color="light">+291 7 128 438</a>
                                                </span>
                                                <span
                                                    class="font-weight-normal align-items-center px-0 d-none d-xl-flex ms-3">
                                                    <span>
                                                        <img width="25"
                                                            src="img/demos/business-consulting-3/icons/email.svg"
                                                            alt="Email Icon" data-icon
                                                            data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                                                    </span>
                                                    <a class="text-color-light text-decoration-none font-weight-semibold text-3-5 ms-2"
                                                        href="mailto:business@portotheme.com"
                                                        data-cursor-effect-hover="plus"
                                                        data-cursor-effect-hover-color="light">info@ethioomny.com</a>
                                                </span>
                                            </li>
                                        </ul>
                                    </nav>
                                    <div class="d-flex align-items-center w-100">
                                        <ul class="ps-0 ms-auto mb-0">
                                            <li
                                                class="nav-item font-weight-semibold text-1 text-lg-2 text-color-dark d-none d-md-flex justify-content-end me-3">
                                            </li>
                                        </ul>
                                        <ul
                                            class="social-icons social-icons-clean social-icons-icon-dark social-icons-big m-0 ms-lg-2">
                                            <li class="social-icons-instagram">
                                                <a href="http://www.instagram.com/" target="_blank" class="text-4"
                                                    title="Instagram" data-cursor-effect-hover="fit"><i
                                                        class="fab fa-instagram"></i></a>
                                            </li>
                                            <li class="social-icons-twitter">
                                                <a href="http://www.twitter.com/" target="_blank" class="text-4"
                                                    title="Twitter" data-cursor-effect-hover="fit"><i
                                                        class="fab fa-twitter"></i></a>
                                            </li>
                                            <li class="social-icons-facebook">
                                                <a href="http://www.facebook.com/" target="_blank" class="text-4"
                                                    title="Facebook" data-cursor-effect-hover="fit"><i
                                                        class="fab fa-facebook-f"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-container container" style="height: 117px;">
                    <div class="header-row">
                        <div class="header-column">
                            <div class="header-row">
                                <div class="header-logo">
                                    <a href="<?php echo BASE_URL."index.php"; ?>">
                                        <img alt="Porto" width="47%" height="47%"
                                            src="img/logo.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="header-column justify-content-end w-100">
                            <div class="header-row">
                                <div class="header-nav header-nav-links order-2 order-lg-1">
                                    <div
                                        class="header-nav-main header-nav-main-square header-nav-main-text-capitalize header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                        <nav class="collapse">
                                            <ul class="nav nav-pills" id="mainNav">
                                                <li>
                                                    <a class="nav-link active" href="<?php echo BASE_URL."index.php"?>">
                                                        Home
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="<?php echo BASE_URL."about.php"?>">
                                                        About Us
                                                    </a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="nav-link dropdown-toggle" href="<?php echo BASE_URL."services.php"?>">
                                                        Services
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="<?php echo BASE_URL."telecom.php"?>"
                                                                class="dropdown-item">Telecommunications</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo BASE_URL."power.php"?>" class="dropdown-item">Power</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo BASE_URL."software.php"?>"
                                                                class="dropdown-item">Software</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="<?php echo BASE_URL."partners.php"?>">
                                                        Partners
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="<?php echo BASE_URL."team.php"?>">
                                                        Team
                                                    </a>
                                                </li>
                                                <li class="d-lg-none">
                                                    <a class="nav-link" href="<?php echo BASE_URL."brochure.pdf"?>" download>
                                                        Brochure
                                                    </a>
                                                </li>
                                                <li class="d-lg-none">
                                                    <a class="nav-link" href="<?php echo BASE_URL."contact.php"?>">
                                                        Contact Us
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="header-column header-column-search justify-content-end align-items-center d-flex w-auto flex-row">
                            <a href="<?php echo BASE_URL."brochure.pdf"?>"
                                class="btn btn-primary custom-btn-style-1 font-weight-semibold text-3-5 btn-px-3 py-2 ws-nowrap ms-4 d-none d-lg-block"
                                data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light"
                                download><span>Brochure</span></a>
                        </div>
                        <div
                            class="header-column header-column-search justify-content-end align-items-center d-flex w-auto flex-row">
                            <a href="<?php echo BASE_URL."contact.php"?>"
                                class="btn btn-dark custom-btn-style-1 font-weight-semibold text-3-5 btn-px-3 py-2 ws-nowrap ms-4 d-none d-lg-block"
                                data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light"><span>Contact
                                    Us</span></a>

                            <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse"
                                data-bs-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
