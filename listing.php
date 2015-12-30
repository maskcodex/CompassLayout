<!doctype html>
<html lang="en">
<?php echo "dasdasdsad" ?>
<head>
    <meta charset="utf-8">
    <title>Compass</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css?v=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
    <link rel="stylesheet" href="plugin/lightslider.css" />
    <link rel="Stylesheet" type="text/css" href="plugin/css/smoothDivScroll.css" />
    <style type="text/css">
    #makeMeScrollable {
        width: 100%;
        height: 100%;
        position: relative;
    }
    /* Replace the last selector for the type of element you have in
           your scroller. If you have div's use #makeMeScrollable div.scrollableArea div,
           if you have links use #makeMeScrollable div.scrollableArea a and so on. */
    
    #makeMeScrollable div.scrollableArea img {
        position: relative;
        float: left;
        margin: 0;
        padding: 0;
        /* If you don't want the images in the scroller to be selectable, try the following
               block of code. It's just a nice feature that prevent the images from
               accidentally becoming selected/inverted when the user interacts with the scroller. */
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -o-user-select: none;
        user-select: none;
    }
    </style>
    <script src="js/index.js"></script>
</head>

<body>
    <div id="wrap" class="listing-page">
        <header id="page-header" rol="header">
            <div id="page-logo-header">
                <p>Compass</p>
            </div>
            <div id="mobile-header-nav-icon">
                <img src="images/menu-icon-dark.png">
            </div>
            <nav id="page-header-nav">
                <ul>
                    <li>Our Agents</li>
                    <li>Buy</li>
                    <li>Sell</li>
                    <li>Rent</li>
                    <li>New Development</li>
                    <li>London</li>
                    <li>Login</li>
                </ul>
            </nav>
        </header>
        <nav id="mobile-header-nav">
            <div id="left-bg"></div>
            <ul>
                <li>Our Agents</li>
                <li>Buy</li>
                <li>Sell</li>
                <li>Rent</li>
                <li>New Development</li>
                <li>London
                    <ul class="sub-menu">
                        <li>London 1</li>
                        <li>London 1</li>
                        <li>London 1</li>
                    </ul>
                </li>
                <li>Login</li>
            </ul>
        </nav>
        <div class="listing-page-content">
            <div class="listing-silder">
                <div class="listing-silder-container" id="e1">
                    <div id="makeMeScrollable">
                        <img onclick="show_full()" src="images/2015/09/640x48022.jpg">
                        <img onclick="show_full()" src="images/2015/09/640x48022.jpg">
                        <img onclick="show_full()" src="images/2015/09/640x48022.jpg">
                        <img onclick="show_full()" src="images/2015/09/640x48022.jpg">
                        <img onclick="show_full()" src="images/2015/09/640x48022.jpg">
                        <img onclick="show_full()" src="images/2015/09/640x48022.jpg">
                        <img onclick="show_full()" src="images/2015/09/640x48022.jpg">
                        <img onclick="show_full()" src="images/2015/09/640x48022.jpg">
                    </div>
                </div>
            </div>
            <div class="listing-adress-block">
                <div class="adress-block">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="adress-info">
                                <h2>Single Family in Brooklyn Heights, Brooklyn, NY, 11201</h2>
                                <h1>100 Pierrepont Street</h1>
                                <div class="listing-block-featured">
                                    <div>5 BED</div>
                                    <div>6 BATH</div>
                                    <div>$11,250,000</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="adress-action">
                                <p>View Map</p>
                                <button>Contact Agent</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="listing-key-detail-block">
                <div class="listing-block">
                    <div class="row">
                        <div class="col-sm-4">
                            <p class="key-style">Key Details <span class="gray-style">(11)<span></p>
                        </div>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-6 key-text">Ownership: <span class="gray-style">Single Family<span></div>
                                <div class="col-sm-6 key-text">Square Feet: <span class="gray-style">6000 ft<span></div>
                                <div class="col-sm-6 key-text">Price per Square Foot: <span class="gray-style">$1,875<span></div>
                                <div class="col-sm-6 key-text">County: <span class="gray-style">Kings<span></div>
                                <div class="col-sm-6 key-text">Dog Policy: <span class="gray-style">Allowed<span></div>
                                <div class="col-sm-6 key-text">Cat Policy: <span class="gray-style">Allowed<span></div>
                                <div class="col-sm-6 key-text">Units in Building: <span class="gray-style">1</div>
                                <div class="col-sm-6 key-text">Building Floors: <span class="gray-style">5<span></div>
                                <div class="col-sm-6 key-text">Building Type: <span class="gray-style">Lowrise<span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="listing-block">
                    <div class="row">
                        <div class="col-sm-4">
                            <p  class="key-style">Amenities <span class="gray-style">(11)</span></p>
                        </div>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-6 gray-style">Penthouse</div>
                                <div class="col-sm-6 gray-style">Deck</div>
                                <div class="col-sm-6 gray-style">Common Roof Deck</div>
                                <div class="col-sm-6 gray-style">Casement Windows</div>
                                <div class="col-sm-6 gray-style">Elevator</div>
                                <div class="col-sm-6 gray-style">Laundry in Building</div>
                                <div class="col-sm-6 gray-style">Dishwasher</div>
                                <div class="col-sm-6 gray-style">Wine Cooler</div>
                                <div class="col-sm-6 gray-style">Formal Dining Room</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="listing-block">
                    <div class="row">
                        <div class="col-sm-4">
                            <p class="key-style">An Overview</p>
                        </div>
                        <div class="col-sm-8">
                            <div class="row overview">
                                No expense has been spared and no detail overlooked, in restoring an incomparable landmark residence for the discerning buyer seeking the finest finishes, craftsmanship and comfort in Brooklyn's most coveted location. Understated elegance and contemporary luxury define this meticulously-designed, completely renovated five-story 1857 townhouse with roof deck and full cellar, on prized and beautiful Pierrepont Street in the Brooklyn Heights Historic District. Beyond the dramatic entry foyer, unique to the area brownstones, a treasured mansion-style home awaits, brought to life by famed architect Jose Ramirez whose work also graces the Puck Building Penthouses. From the elevator that transports you from cellar to rooftop, to the upscale features, top-of-the-line systems and clean, classic lines throughout, revel in an ambiance of sophistication whether relaxing or entertaining. New custom millwork, wide-plank rift and quartered white oak wood flooring, custom solid core 1 3/4 recessed panel doors, recessed lighting, sleek spa-like baths, and only the best fixtures & appliances complement the authentic aura of living in a stately turn-of-the-century home. Greeting you on the garden level is an entry vestibule with coat closet and center stair hall, as well as den, powder room, walk-in pantry, and open kitchen with walnut cabinets, marble counters, wine cooler, Sub-Zero & Wolf appliances. French doors lead to the rear bluestone terrace and garden. The first floor, wonderful for entertaining, with soaring ceilings and open spaces, presents a living room with gas fireplace, formal dining room with tall casement windows, and convenient butler's pantry with sink, under-counter fridge, dishwasher and dumbwaiter from the garden level. The second-floor Master suite is a beautiful respite with a huge walk-in closet, separate study, and Waterworks Master bath finished in Silver Travertine with a large shower, freestanding tub and double vanity. Levels three and four offer two bedrooms, each with en-suite baths and two closets. The finished roof level is a serene outdoor oasis with Ipe decking, built-in cabinetry and Wolf BBQ. The large finished cellar with porcelain tile floors houses a den, laundry room with two sets of LG washer/dryers, cabinets, sink with counter, storage and mechanical rooms, a full bath and powder room. Enjoy a prime location at the end of tree-lined Monroe Place, in the heart of all the Heights has to offer. Convenient to parks, transportation and parking. Additional features of this building include: two temperature zones per floor, pre-wired for lighting control system throughout, pre-wired for power shades at all windows, recessed LED downlights, and wide-plank rift and quartered white oak wood flooring.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="listing-agent-block">
                <div class="listing-block">
                    <div class="listing-agent-title">
                        Agent representing this listing
                    </div>
                    <div class="listing-agent-text">Compass Agents partner with you throughout your home search, providing their expertise and deep knowledge of NYC's real estate market to help you find a home you love.</div>
                    <div class="row listing-agent-info">
                        <div class="col-sm-4 agent-image">
                            <img src="images/2015/06/225x2252.jpg">
                        </div>
                        <div class="col-sm-8">
                            <div class="listing-agent-detail">
                                <p class="listing-agent-name">Lindsay Barton Barrett</p>
                                <p class="listing-agent-email">indsay.barrett@compass.com</p>
                                <p class="listing-agent-mobile">646.663.1092</p>
                            </div>
                        </div>
                    </div>
                    <!--<div class="row">
                        <div class="col-sm-6 ">
                            <div class="listing-agent-info row">
                                <div class="col-sm-4 agent-image">
                                    <img src="images/2015/06/225x2252.jpg">
                                </div>
                                <div class="col-sm-8">
                                    <div class="listing-agent-detail">
                                        <p class="listing-agent-name">Lindsay Barton Barrett</p>
                                        <p class="listing-agent-email">indsay.barrett@compass.com</p>
                                        <p class="listing-agent-mobile">646.663.1092</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 ">
                            <div class="listing-agent-info row">
                                <div class="col-sm-4 agent-image">
                                    <img src="images/2015/06/225x2252.jpg">
                                </div>
                                <div class="col-sm-8">
                                    <div class="listing-agent-detail">
                                        <p class="listing-agent-name">Lindsay Barton Barrett</p>
                                        <p class="listing-agent-email">indsay.barrett@compass.com</p>
                                        <p class="listing-agent-mobile">646.663.1092</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
            <div class="listing-neighborhood-block">
                <div class="listing-block">
                    <div class="listing-agent-title">
                        The Neighborhood
                    </div>
                    <div class="row">
                        <div class="col-sm-6 neighborhood-img">
                            <img src="images/map.jpg"></div>
                        <div class="col-sm-6 neighborhood-img">
                            <img src="images/map.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer">
            <div id="wrap-footer">
                <div class="row">
                    <div class="footer-info row">
                        <div class="col-sm-6 footer-block1">
                            <p>About Us </p>
                            <ul>
                                <li>Team</li>
                                <li>Compass Quarterly</li>
                                <li>Neighborhood Guides</li>
                                <li>Market Research</li>
                                <li>Investors</li>
                                <li>Careers</li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                        <div class="col-sm-3 footer-block2">Global Headquarters
                            <br/>90 Fifth Avenue
                            <br/>New York NY 10011
                            <br/> 212.913.9058
                            <br/> 40°44'11" N 73°59'37" W</div>
                        <div class="col-sm-3 footer-block3">Lever House
                            <br/>390 Park Avenue, 14th Floor
                            <br/> New York NY 10022
                            <br/>646.461.6633
                            <br/> 40°45'35" N 73°58'23" W</div>
                    </div>
                </div>
                <div class="row">
                </div>
            </div>
        </div>
        <div class="contact-agent-mobile">
            Contact Agent
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
    <!-- jQuery UI (Custom Download containing only Widget and Effects Core)
         You can make your own at: http://jqueryui.com/download -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script src="plugin/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
    <!-- Latest version (3.1.4) of jQuery Mouse Wheel by Brandon Aaron
         You will find it here: https://github.com/brandonaaron/jquery-mousewheel -->
    <script src="plugin/jquery.mousewheel.min.js" type="text/javascript"></script>
    <!-- jQuery Kinectic (1.8.2) used for touch scrolling -->
    <!-- https://github.com/davetayls/jquery.kinetic/ -->
    <script src="plugin/jquery.kinetic.min.js" type="text/javascript"></script>
    <!-- Smooth Div Scroll 1.3 minified-->
    <script src="plugin/jquery.smoothdivscroll-1.3-min.js" type="text/javascript"></script>
    <!-- If you want to look at the uncompressed version you find it at
         js/jquery.smoothDivScroll-1.3.js -->
    <!-- Plugin initialization -->
    <script type="text/javascript">
    // Initialize the plugin with no custom options
    $(document).ready(function() {
        // None of the options are set
        $("div#makeMeScrollable").smoothDivScroll({
            autoScrollingMode: "onStart",
            hotSpotScrolling: true,
            touchScrolling: true,
            manualContinuousScrolling: false,
            mousewheelScrolling: false
        });
    });
    </script>
    <div class="slider-full">
        <div class="cancel-full-slider"><img src="images/cancel-icon.png"></div>
        <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
        <!-- use jssor.slider.debug.js instead for debug -->
        <script>
        jQuery(document).ready(function($) {

            var jssor_1_SlideshowTransitions = [{
                $Duration: 1200,
                $Zoom: 11,
                $Rotate: -1,
                $Easing: {
                    $Zoom: $Jease$.$InQuad,
                    $Opacity: $Jease$.$Linear,
                    $Rotate: $Jease$.$InQuad
                },
                $Opacity: 2,
                $Round: {
                    $Rotate: 0.5
                },
                $Brother: {
                    $Duration: 1200,
                    $Zoom: 1,
                    $Rotate: 1,
                    $Easing: $Jease$.$Swing,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.5
                    },
                    $Shift: 90
                }
            }, {
                $Duration: 1400,
                x: 0.25,
                $Zoom: 1.5,
                $Easing: {
                    $Left: $Jease$.$InWave,
                    $Zoom: $Jease$.$InSine
                },
                $Opacity: 2,
                $ZIndex: -10,
                $Brother: {
                    $Duration: 1400,
                    x: -0.25,
                    $Zoom: 1.5,
                    $Easing: {
                        $Left: $Jease$.$InWave,
                        $Zoom: $Jease$.$InSine
                    },
                    $Opacity: 2,
                    $ZIndex: -10
                }
            }, {
                $Duration: 1200,
                $Zoom: 11,
                $Rotate: 1,
                $Easing: {
                    $Opacity: $Jease$.$Linear,
                    $Rotate: $Jease$.$InQuad
                },
                $Opacity: 2,
                $Round: {
                    $Rotate: 1
                },
                $ZIndex: -10,
                $Brother: {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: -1,
                    $Easing: {
                        $Opacity: $Jease$.$Linear,
                        $Rotate: $Jease$.$InQuad
                    },
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 1
                    },
                    $ZIndex: -10,
                    $Shift: 600
                }
            }, {
                $Duration: 1500,
                x: 0.5,
                $Cols: 2,
                $ChessMode: {
                    $Column: 3
                },
                $Easing: {
                    $Left: $Jease$.$InOutCubic
                },
                $Opacity: 2,
                $Brother: {
                    $Duration: 1500,
                    $Opacity: 2
                }
            }, {
                $Duration: 1500,
                x: -0.3,
                y: 0.5,
                $Zoom: 1,
                $Rotate: 0.1,
                $During: {
                    $Left: [0.6, 0.4],
                    $Top: [0.6, 0.4],
                    $Rotate: [0.6, 0.4],
                    $Zoom: [0.6, 0.4]
                },
                $Easing: {
                    $Left: $Jease$.$InQuad,
                    $Top: $Jease$.$InQuad,
                    $Opacity: $Jease$.$Linear,
                    $Rotate: $Jease$.$InQuad
                },
                $Opacity: 2,
                $Brother: {
                    $Duration: 1000,
                    $Zoom: 11,
                    $Rotate: -0.5,
                    $Easing: {
                        $Opacity: $Jease$.$Linear,
                        $Rotate: $Jease$.$InQuad
                    },
                    $Opacity: 2,
                    $Shift: 200
                }
            }, {
                $Duration: 1500,
                $Zoom: 11,
                $Rotate: 0.5,
                $During: {
                    $Left: [0.4, 0.6],
                    $Top: [0.4, 0.6],
                    $Rotate: [0.4, 0.6],
                    $Zoom: [0.4, 0.6]
                },
                $Easing: {
                    $Opacity: $Jease$.$Linear,
                    $Rotate: $Jease$.$InQuad
                },
                $Opacity: 2,
                $Brother: {
                    $Duration: 1000,
                    $Zoom: 1,
                    $Rotate: -0.5,
                    $Easing: {
                        $Opacity: $Jease$.$Linear,
                        $Rotate: $Jease$.$InQuad
                    },
                    $Opacity: 2,
                    $Shift: 200
                }
            }, {
                $Duration: 1500,
                x: 0.3,
                $During: {
                    $Left: [0.6, 0.4]
                },
                $Easing: {
                    $Left: $Jease$.$InQuad,
                    $Opacity: $Jease$.$Linear
                },
                $Opacity: 2,
                $Outside: true,
                $Brother: {
                    $Duration: 1000,
                    x: -0.3,
                    $Easing: {
                        $Left: $Jease$.$InQuad,
                        $Opacity: $Jease$.$Linear
                    },
                    $Opacity: 2
                }
            }, {
                $Duration: 1200,
                x: 0.25,
                y: 0.5,
                $Rotate: -0.1,
                $Easing: {
                    $Left: $Jease$.$InQuad,
                    $Top: $Jease$.$InQuad,
                    $Opacity: $Jease$.$Linear,
                    $Rotate: $Jease$.$InQuad
                },
                $Opacity: 2,
                $Brother: {
                    $Duration: 1200,
                    x: -0.1,
                    y: -0.7,
                    $Rotate: 0.1,
                    $Easing: {
                        $Left: $Jease$.$InQuad,
                        $Top: $Jease$.$InQuad,
                        $Opacity: $Jease$.$Linear,
                        $Rotate: $Jease$.$InQuad
                    },
                    $Opacity: 2
                }
            }, {
                $Duration: 1600,
                x: 1,
                $Rows: 2,
                $ChessMode: {
                    $Row: 3
                },
                $Easing: {
                    $Left: $Jease$.$InOutQuart,
                    $Opacity: $Jease$.$Linear
                },
                $Opacity: 2,
                $Brother: {
                    $Duration: 1600,
                    x: -1,
                    $Rows: 2,
                    $ChessMode: {
                        $Row: 3
                    },
                    $Easing: {
                        $Left: $Jease$.$InOutQuart,
                        $Opacity: $Jease$.$Linear
                    },
                    $Opacity: 2
                }
            }, {
                $Duration: 1600,
                x: 1,
                $Rows: 2,
                $ChessMode: {
                    $Row: 3
                },
                $Easing: {
                    $Left: $Jease$.$InOutQuart,
                    $Opacity: $Jease$.$Linear
                },
                $Opacity: 2,
                $Brother: {
                    $Duration: 1600,
                    x: -1,
                    $Rows: 2,
                    $ChessMode: {
                        $Row: 3
                    },
                    $Easing: {
                        $Left: $Jease$.$InOutQuart,
                        $Opacity: $Jease$.$Linear
                    },
                    $Opacity: 2
                }
            }, {
                $Duration: 1600,
                y: -1,
                $Cols: 2,
                $ChessMode: {
                    $Column: 12
                },
                $Easing: {
                    $Top: $Jease$.$InOutQuart,
                    $Opacity: $Jease$.$Linear
                },
                $Opacity: 2,
                $Brother: {
                    $Duration: 1600,
                    y: 1,
                    $Cols: 2,
                    $ChessMode: {
                        $Column: 12
                    },
                    $Easing: {
                        $Top: $Jease$.$InOutQuart,
                        $Opacity: $Jease$.$Linear
                    },
                    $Opacity: 2
                }
            }, {
                $Duration: 1200,
                y: 1,
                $Easing: {
                    $Top: $Jease$.$InOutQuart,
                    $Opacity: $Jease$.$Linear
                },
                $Opacity: 2,
                $Brother: {
                    $Duration: 1200,
                    y: -1,
                    $Easing: {
                        $Top: $Jease$.$InOutQuart,
                        $Opacity: $Jease$.$Linear
                    },
                    $Opacity: 2
                }
            }, {
                $Duration: 1200,
                x: 1,
                $Easing: {
                    $Left: $Jease$.$InOutQuart,
                    $Opacity: $Jease$.$Linear
                },
                $Opacity: 2,
                $Brother: {
                    $Duration: 1200,
                    x: -1,
                    $Easing: {
                        $Left: $Jease$.$InOutQuart,
                        $Opacity: $Jease$.$Linear
                    },
                    $Opacity: 2
                }
            }, {
                $Duration: 1200,
                y: -1,
                $Easing: {
                    $Top: $Jease$.$InOutQuart,
                    $Opacity: $Jease$.$Linear
                },
                $Opacity: 2,
                $ZIndex: -10,
                $Brother: {
                    $Duration: 1200,
                    y: -1,
                    $Easing: {
                        $Top: $Jease$.$InOutQuart,
                        $Opacity: $Jease$.$Linear
                    },
                    $Opacity: 2,
                    $ZIndex: -10,
                    $Shift: -100
                }
            }, {
                $Duration: 1200,
                x: 1,
                $Delay: 40,
                $Cols: 6,
                $Formation: $JssorSlideshowFormations$.$FormationStraight,
                $Easing: {
                    $Left: $Jease$.$InOutQuart,
                    $Opacity: $Jease$.$Linear
                },
                $Opacity: 2,
                $ZIndex: -10,
                $Brother: {
                    $Duration: 1200,
                    x: 1,
                    $Delay: 40,
                    $Cols: 6,
                    $Formation: $JssorSlideshowFormations$.$FormationStraight,
                    $Easing: {
                        $Top: $Jease$.$InOutQuart,
                        $Opacity: $Jease$.$Linear
                    },
                    $Opacity: 2,
                    $ZIndex: -10,
                    $Shift: -100
                }
            }, {
                $Duration: 1500,
                x: -0.1,
                y: -0.7,
                $Rotate: 0.1,
                $During: {
                    $Left: [0.6, 0.4],
                    $Top: [0.6, 0.4],
                    $Rotate: [0.6, 0.4]
                },
                $Easing: {
                    $Left: $Jease$.$InQuad,
                    $Top: $Jease$.$InQuad,
                    $Opacity: $Jease$.$Linear,
                    $Rotate: $Jease$.$InQuad
                },
                $Opacity: 2,
                $Brother: {
                    $Duration: 1000,
                    x: 0.2,
                    y: 0.5,
                    $Rotate: -0.1,
                    $Easing: {
                        $Left: $Jease$.$InQuad,
                        $Top: $Jease$.$InQuad,
                        $Opacity: $Jease$.$Linear,
                        $Rotate: $Jease$.$InQuad
                    },
                    $Opacity: 2
                }
            }, {
                $Duration: 1600,
                x: -0.2,
                $Delay: 40,
                $Cols: 12,
                $During: {
                    $Left: [0.4, 0.6]
                },
                $SlideOut: true,
                $Formation: $JssorSlideshowFormations$.$FormationStraight,
                $Assembly: 260,
                $Easing: {
                    $Left: $Jease$.$InOutExpo,
                    $Opacity: $Jease$.$InOutQuad
                },
                $Opacity: 2,
                $Outside: true,
                $Round: {
                    $Top: 0.5
                },
                $Brother: {
                    $Duration: 1000,
                    x: 0.2,
                    $Delay: 40,
                    $Cols: 12,
                    $Formation: $JssorSlideshowFormations$.$FormationStraight,
                    $Assembly: 1028,
                    $Easing: {
                        $Left: $Jease$.$InOutExpo,
                        $Opacity: $Jease$.$InOutQuad
                    },
                    $Opacity: 2,
                    $Round: {
                        $Top: 0.5
                    }
                }
            }];

            var jssor_1_options = {
                $AutoPlay: false,
                $FillMode: 5,
                $SlideshowOptions: {
                    $Class: $JssorSlideshowRunner$,
                    $Transitions: jssor_1_SlideshowTransitions,
                    $TransitionsOrder: 1
                },
                $ThumbnailNavigatorOptions: { //[Optional] Options to specify and enable thumbnail navigator or not
                    $Class: $JssorThumbnailNavigator$, //[Required] Class to create thumbnail navigator instance
                    $ChanceToShow: 2, //[Required] 0 Never, 1 Mouse Over, 2 Always

                    $SpacingX: 8, //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                    $DisplayPieces: 10, //[Optional] Number of pieces to display, default value is 1
                    $ParkingPosition: 360 //[Optional] The offset position to park thumbnail
                },
                $ArrowNavigatorOptions: { //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$, //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2, //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 0, //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1 //[Optional] Steps to go for each navigation request, default value is 1
                }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1366);
                    jssor_1_slider.$ScaleWidth(refSize);
                } else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationcange", ScaleSlider);
            //responsive code end
        });
        </script>
        <style>
        .jssort07 {
            position: absolute;
            /* size of thumbnail navigator container */
            width: 100%;
            height: 150px;
        }
        
        .jssort07 .p {
            position: absolute;
            top: 0;
            left: 0;
            width: 72px;
            height: 72px;
        }
        
        .jssort07 .i {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 72px;
            height: 72px;
            filter: alpha(opacity=80);
            opacity: .8;
        }
        
        .jssort07 .p:hover .i,
        .jssort07 .pav .i {
            filter: alpha(opacity=100);
            opacity: 1;
        }
        
        .jssort07 .o {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 70px;
            height: 70px;
            border: 1px solid #000;
            box-sizing: content-box;
            transition: border-color .6s;
            -moz-transition: border-color .6s;
            -webkit-transition: border-color .6s;
            -o-transition: border-color .6s;
        }
        
        .jssort07 .pav .o {
            border-color: #0099ff;
        }
        
        .jssort07 .p:hover .o {
            border-color: #fff;
            transition: none;
            -moz-transition: none;
            -webkit-transition: none;
            -o-transition: none;
        }
        
        .jssort07 .p.pdn .o {
            border-color: #0099ff;
        }
        
        * html .jssort07 .o {
            /* ie quirks mode adjust */
            width/**/
            : 72px;
            height/**/
            : 72px;
        }
        
        .jssorb13 {
            position: absolute;
        }
        
        .jssorb13 div,
        .jssorb13 div:hover,
        .jssorb13 .av {
            position: absolute;
            /* size of bullet elment */
            width: 21px;
            height: 21px;
            background: url('img/b13.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        
        .jssorb13 div {
            background-position: -5px -5px;
        }
        
        .jssorb13 div:hover,
        .jssorb13 .av:hover {
            background-position: -35px -5px;
        }
        
        .jssorb13 .av {
            background-position: -65px -5px;
        }
        
        .jssorb13 .dn,
        .jssorb13 .dn:hover {
            background-position: -95px -5px;
        }
        
        .jssora03l {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 55px;
            height: 55px;
            cursor: pointer;
            background: url(images/arrow-left.png) no-repeat;
            overflow: hidden;
        }
        
        .jssora03r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 55px;
            height: 55px;
            cursor: pointer;
            background: url(images/arrow-right.png) no-repeat;
            overflow: hidden;
        }
        </style>
        <div style="margin-top: 30px;">
            <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 768px; height: ; overflow: hidden; visibility: hidden;">
                <!-- Loading Screen -->
                <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                    <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                    <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                </div>
                <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 768px; height: 800px; overflow: hidden;">
                    <div style="display: none;">
                        <img data-u="image" src="images/2015/09/640x48022.jpg" />
                        <img u="thumb" src="images/2015/09/640x48022.jpg" />
                    </div>
                    <div style="display: none;">
                        <img data-u="image" src="images/2015/09/640x48022.jpg" />
                    </div>
                    <div style="display: none;">
                        <img data-u="image" src="images/2015/09/640x48022.jpg" />
                    </div>
                    <div style="display: none;">
                        <img data-u="image" src="images/2015/09/640x48022.jpg" />
                    </div>
                    <div style="display: none;">
                        <img data-u="image" src="images/2015/09/640x48022.jpg" />
                    </div>
                    <div style="display: none;">
                        <img data-u="image" src="images/2015/09/640x48022.jpg" />
                    </div>
                    <div style="display: none;">
                        <img data-u="image" src="images/2015/09/640x48022.jpg" />
                    </div>
                    <div style="display: none;">
                        <img data-u="image" src="images/2015/09/640x48022.jpg" />
                    </div>
                    <div style="display: none;">
                        <img data-u="image" src="images/2015/09/640x48022.jpg" />
                    </div>
                    <div style="display: none;">
                        <img data-u="image" src="images/2015/09/640x48022.jpg" />
                    </div>
                    <div style="display: none;">
                        <img data-u="image" src="images/2015/09/640x48022.jpg" />
                    </div>
                </div>
                <span u="arrowleft" class="jssora03l" style="top: 123px; left: 8px;">
        </span>
                <!-- Arrow Right -->
                <span u="arrowright" class="jssora03r" style="top: 123px; right: 8px;">
        </span>
        <div u="thumbnavigator" class="jssort07" style="left: 0px; bottom: 0px;">
                    <!-- Thumbnail Item Skin Begin -->
                    <div u="slides" style="cursor: default;">
                        <div u="prototype" class="p">
                            <div u="thumbnailtemplate" class="i"></div>
                            <div class="o"></div>
                        </div>
                    </div>
                    <!-- Thumbnail Item Skin End -->
                </div>
                
            </div>
        </div>

        
    </div>
</body>

</html>
