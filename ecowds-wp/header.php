<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">  
  <meta name="description" content="" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/reset.css">
  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">  
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header>
    <div id="hero-slider">
      <div id="logo" class="mask">
        <a href="http://ecowds.invert8.com">
          <img class="logo-text masked" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ecowindows-white-logo.png" width="200"/>
        </a>
      </div>
      <div id="slideshow">
        <div id="slides-main" class="slides">
          <div class="slide" data-index="0">
            <div class="abs-mask">
              <div class="slide-image" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/slide-1.jpg)"></div>
            </div>
          </div>
          <div class="slide" data-index="1">
            <div class="abs-mask">
              <div class="slide-image" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/slide-2.jpg)"></div>
            </div>
          </div>
          <div class="slide" data-index="2">
            <div class="abs-mask">
              <div class="slide-image" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/slide-3.jpg)"></div>
            </div>
          </div>
          <div class="slide" data-index="3">
            <div class="abs-mask">
              <div class="slide-image" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/slide-4.jpg)"></div>
            </div>
          </div>
        </div>
        <div id="slides-aux" class="slides mask">
          <h2 class="slide-title slide" data-index="0"><a href="#">Vinyl windows</a></h2>
          <h2 class="slide-title slide" data-index="1"><a href="#">Aluminum windows</a></h2>
          <h2 class="slide-title slide" data-index="2"><a href="#">Wood windows</a></h2>
          <h2 class="slide-title slide" data-index="3"><a href="#">Vinyl windows</a></h2>
        </div>
      <!-- <div id="info">
        <div class="slider-title-wrapper">
          <span class="line"></span>
          <h1 class="slider-title">
            <span>Projects</span>
          </h1>
        </div>
        <div class="about">
          <p>
            A pure CSS/JS slider layout<br/>
            Developed for Toptal engineering blog<br/>
            by <a href="http://stefan.lynxdev.io" target="_blank">Stefan V</a>,
            repo on <a href="https://github.com/vitass/pure-css-js-slider" target="_blank">Github</a>
          </p>
        </div>
      </div> -->
        <nav id="slider-nav">
          <!-- <span class="current">01</span> -->
          <span class="current"></span>
          <!-- <span class="sep"></span>
          <span class="total">04</span> -->
        </nav>
      </div>     
    </div>

    <div class="menu-cont-center">
      <div class="menu-parent">
        <nav class="main-menu">
          <ul>
            <li>
              <a href="http://ecowds.invert8.com/products/">
                <svg xmlns="http://www.w3.org/2000/svg" height="100" viewBox="0 96 960 960" width="100"><path d="M180 936q-24.75 0-42.375-17.625T120 876V276q0-24.75 17.625-42.375T180 216h600q24.75 0 42.375 17.625T840 276v600q0 24.75-17.625 42.375T780 936H180Zm330-330v270h270V606H510Zm0-60h270V276H510v270Zm-60 0V276H180v270h270Zm0 60H180v270h270V606Z"/></svg><br />
                products
              </a>  
            </li>
            <li>
              <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" height="100" viewBox="0 96 960 960" width="100"><path d="M100 856q-24.75 0-42.375-17.625T40 796V356q0-24.75 17.625-42.375T100 296h440q24.75 0 42.375 17.625T600 356v440q0 24.75-17.625 42.375T540 856H100Zm620-320q-17 0-28.5-11.5T680 496V336q0-17 11.5-28.5T720 296h160q17 0 28.5 11.5T920 336v160q0 17-11.5 28.5T880 536H720Zm20-60h120V356H740v120ZM100 796h440V356H100v440Zm60-100h320L375 556l-75 100-55-73-85 113Zm560 160q-17 0-28.5-11.5T680 816V656q0-17 11.5-28.5T720 616h160q17 0 28.5 11.5T920 656v160q0 17-11.5 28.5T880 856H720Zm20-60h120V676H740v120Zm-640 0V356v440Zm640-320V356v120Zm0 320V676v120Z"/></svg><br />            
                projects
              </a>  
            </li>     
            <li>
              <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" height="100" viewBox="0 96 960 960" width="100"><path d="M705 928 447 668q-23 8-46 13t-47 5q-97.083 0-165.042-67.667Q121 550.667 121 454q0-31 8.158-60.388Q137.316 364.223 152 338l145 145 92-86-149-149q25.915-15.158 54.957-23.579Q324 216 354 216q99.167 0 168.583 69.417Q592 354.833 592 454q0 24-5 47t-13 46l259 258q11 10.957 11 26.478Q844 847 833 858l-76 70q-10.696 11-25.848 11T705 928Zm28-57 40-40-273-273q16-21 24-49.5t8-54.5q0-75-55.5-127T350 274l101 103q9 9 9 22t-9 22L319 545q-9 9-22 9t-22-9l-97-96q3 77 54.668 127T354 626q25 0 53-8t49-24l277 277ZM476 572Z"/></svg><br />            
                service
              </a>
            </li>    
            <li>
              <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" height="100" viewBox="0 96 960 960" width="100"><path d="M286.788 975Q257 975 236 953.788q-21-21.213-21-51Q215 873 236.212 852q21.213-21 51-21Q317 831 338 852.212q21 21.213 21 51Q359 933 337.788 954q-21.213 21-51 21Zm400 0Q657 975 636 953.788q-21-21.213-21-51Q615 873 636.212 852q21.213-21 51-21Q717 831 738 852.212q21 21.213 21 51Q759 933 737.788 954q-21.213 21-51 21ZM235 315l110 228h288l125-228H235Zm-30-60h589.074q22.964 0 34.945 21Q841 297 829 318L694 561q-11 19-28.559 30.5Q647.881 603 627 603H324l-56 104h491v60H277q-42 0-60.5-28t.5-63l64-118-152-322H51v-60h117l37 79Zm140 288h288-288Z"/></svg><br />            
                shop
              </a>  
            </li> 
          </ul>
        </nav>
      </div>  
    </div>
    
    <!-- <div class="menu-cont-sidebar">
      <div class="menu-parent-sidebar">
        <nav class="main-menu-sidebar">
          <ul>
            <li>
              <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" height="60" viewBox="0 96 960 960" width="60"><path d="M120 816v-60h720v60H120Zm0-210v-60h720v60H120Zm0-210v-60h720v60H120Z"/></svg><br />
                menu
              </a>  
            </li>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" height="60" viewBox="0 96 960 960" width="60"><path d="M561 816 320 575l241-241 43 43-198 198 198 198-43 43Z"/></svg>
            </li> 
          </ul>
        </nav>
      </div>
    </div> -->

    <!-- <div class="sidebar">
      <button class="sidebar-toggle"><i class="fa fa-plus icon">toggle menu</i></button>
    </div>   -->

    <div class="menu-cont-sidebar">
      <div class="menu-parent-sidebar">
        <div class="sidebar">
          <div class="ecowds-sidebar-content">
            <button class="sidebar-toggle">
              <svg xmlns="http://www.w3.org/2000/svg" height="60" viewBox="0 96 960 960" width="60"><path d="M561 816 320 575l241-241 43 43-198 198 198 198-43 43Z"/></svg>                          
              <svg xmlns="http://www.w3.org/2000/svg" height="60" viewBox="0 96 960 960" width="60"><path d="M120 816v-60h720v60H120Zm0-210v-60h720v60H120Zm0-210v-60h720v60H120Z"/></svg>
            </button>

            <div class="ecowds-offers">
              <ul>
                <li>
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/vinyl-windows-thumb.png" width="100"/>
                  <h3>Vinyl Windows</h3>
                  <p>
                    Specializing in European style turn and tilt our vinyl windows are fully customizable. Glass packages are built custom to meet your project requirements.
                  </p>                  
                </li>
                <li>
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/wood-windows-thumb.png" width="100"/>          
                  <h3>Wood Windows</h3>
                  <p>
                    Specializing in European style turn and tilt our vinyl windows are fully customizable. Glass packages are built custom to meet your project requirements.
                  </p>
                </li>
                <li>
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/aluminium-windows-thumb.png" width="100"/>          
                  <h3>Aluminium Windows</h3>
                  <p>
                    Specializing in European style turn and tilt our vinyl windows are fully customizable. Glass packages are built custom to meet your project requirements.
                  </p>                  
                </li>
              </ul>
            </div>              
          </div>
          
        </div>    
      </div>
    </div>  

    <div class="menu-cont-bottom">
      <div class="menu-parent-bottom">
        <nav class="main-menu-bottom">
          <ul>
            <li>
              <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48"><path d="M680 726q-50 0-85-35t-35-85q0-50 35-85t85-35q50 0 85 35t35 85q0 50-35 85t-85 35Zm0-60q25.5 0 42.75-17.25T740 606q0-25.5-17.25-42.75T680 546q-25.5 0-42.75 17.25T620 606q0 25.5 17.25 42.75T680 666Zm-240 340V890q0-21 10-39.5t28-29.5q28-17 58-29.5t62-20.5l82 106 82-106q32 8 61.5 20.5T881 821q18 11 28.5 29.5T920 890v116H440Zm60-60h157l-82-106q-20 8-39 17.5T500 878v68Zm203 0h157v-68q-17-11-35.5-20.5T786 840l-83 106Zm-46 0Zm46 0Zm-523-10q-24.75 0-42.375-17.625T120 876V276q0-24.75 17.625-42.375T180 216h600q24.75 0 42.375 17.625T840 276v247q-11-20-26-37t-34-30V276H180v600h200v60H180Zm100-500h341q14-5 28.84-7.5Q664.681 426 680 426v-50H280v60Zm0 170h220q0-15 2.5-30.5T510 546H280v60Zm0 170h158q17-13 36-21.5t39-16.5v-22H280v60ZM180 876V276v180-30 450Zm500-270Z"/></svg><br />
                about us
              </a>
            </li>
            <li>
              <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48"><path d="M562 532h268V346H562v186Zm135-37-105-79v-40l104 79 104-79v40l-103 79ZM60 936q-24 0-42-18T0 876V276q0-24 18-42t42-18h840q24 0 42 18t18 42v600q0 24-18 42t-42 18H60Zm531-60h309V276H60v600h7q44-69 112.5-109T329 727q81 0 149.5 40T591 876ZM329 656q50 0 85-35t35-85q0-50-35-85t-85-35q-50 0-85 35t-35 85q0 50 35 85t85 35ZM143 876h372q-35.606-42.275-84.303-65.638Q382 787 329 787t-101.5 23.5Q179 834 143 876Zm186-280q-25.5 0-42.75-17.25T269 536q0-25.5 17.25-42.75T329 476q25.5 0 42.75 17.25T389 536q0 25.5-17.25 42.75T329 596Zm151-20Z"/></svg><br />            
                contact
              </a>  
            </li>     
            <li>
              <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48"><path d="M0 816v-53q0-38.567 41.5-62.784Q83 676 150.376 676q12.165 0 23.395.5Q185 677 196 678.652q-8 17.348-12 35.165T180 751v65H0Zm240 0v-65q0-32 17.5-58.5T307 646q32-20 76.5-30t96.5-10q53 0 97.5 10t76.5 30q32 20 49 46.5t17 58.5v65H240Zm540 0v-65q0-19.861-3.5-37.431Q773 696 765 678.727q11-1.727 22.171-2.227 11.172-.5 22.829-.5 67.5 0 108.75 23.768T960 763v53H780Zm-480-60h360v-6q0-37-50.5-60.5T480 666q-79 0-129.5 23.5T300 751v5ZM149.567 646Q121 646 100.5 625.438 80 604.875 80 576q0-29 20.562-49.5Q121.125 506 150 506q29 0 49.5 20.5t20.5 49.933Q220 605 199.5 625.5T149.567 646Zm660 0Q781 646 760.5 625.438 740 604.875 740 576q0-29 20.562-49.5Q781.125 506 810 506q29 0 49.5 20.5t20.5 49.933Q880 605 859.5 625.5T809.567 646ZM480 576q-50 0-85-35t-35-85q0-51 35-85.5t85-34.5q51 0 85.5 34.5T600 456q0 50-34.5 85T480 576Zm.351-60Q506 516 523 498.649t17-43Q540 430 522.851 413t-42.5-17Q455 396 437.5 413.149t-17.5 42.5Q420 481 437.351 498.5t43 17.5ZM480 756Zm0-300Z"/></svg><br />            
                our team
              </a>  
            </li>    
            <li>
              <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48"><path d="M120 936V378h247v-92l113-110 113 110v258h247v392H120Zm60-60h106V770H180v106Zm0-166h106V604H180v106Zm0-166h106V438H180v106Zm247 332h106V770H427v106Zm0-166h106V604H427v106Zm0-166h106V438H427v106Zm0-166h106V272H427v106Zm247 498h106V770H674v106Zm0-166h106V604H674v106Z"/></svg><br />            
                locations
              </a> 
            </li> 
            <li>
              <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48"><path d="M240 657h313v-60H240v60Zm0-130h480v-60H240v60Zm0-130h480v-60H240v60ZM80 976V236q0-23 18-41.5t42-18.5h680q23 0 41.5 18.5T880 236v520q0 23-18.5 41.5T820 816H240L80 976Zm60-145 75-75h605V236H140v595Zm0-595v595-595Z"/></svg><br />            
                live chat
              </a>
            </li>           
          </ul>
        </nav>
      </div>  
    </div>
  </header>

  <main>
    <div class="ecowds-live-chat fade-in">
      <div>
        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48"><path d="M240 657h313v-60H240v60Zm0-130h480v-60H240v60Zm0-130h480v-60H240v60ZM80 976V236q0-23 18-41.5t42-18.5h680q23 0 41.5 18.5T880 236v520q0 23-18.5 41.5T820 816H240L80 976Zm60-145 75-75h605V236H140v595Zm0-595v595-595Z"/></svg>
        <p>
          live chat
        </p>
      </div>
    </div>

    <div class="main-content">
      <div class="product-title">
        <span style="display: inline-block;">
          <svg xmlns="http://www.w3.org/2000/svg" height="60" viewBox="0 96 960 960" width="60"><path d="M180 936q-24.75 0-42.375-17.625T120 876V276q0-24.75 17.625-42.375T180 216h600q24.75 0 42.375 17.625T840 276v600q0 24.75-17.625 42.375T780 936H180Zm330-330v270h270V606H510Zm0-60h270V276H510v270Zm-60 0V276H180v270h270Zm0 60H180v270h270V606Z"/></svg><br />
        </span>
        <h2 style="display: inline-block;">Our Products</h2>
      </div>
      <div class="products-grid">
        <div class="products-columns-windows">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/vinyl-windows-thumb.png" width="400"/>
          <a href="http://ecowds.invert8.com/vinyl-windows/"><h3>Vinyl Windows</h3></a>
          <p>
            Specializing in European style turn and tilt our vinyl windows are fully customizable. Glass packages are built custom to meet your project requirements.
          </p>
        </div>
        <div class="products-columns-windows">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/wood-windows-thumb.png" width="400"/>          
          <h3>Wood Windows</h3>
          <p>
            Specializing in European style turn and tilt our vinyl windows are fully customizable. Glass packages are built custom to meet your project requirements.
          </p>
        </div>
        <div class="products-columns-windows">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/aluminium-windows-thumb.png" width="400"/>          
          <h3>Aluminium Windows</h3>
          <p>
            Specializing in European style turn and tilt our vinyl windows are fully customizable. Glass packages are built custom to meet your project requirements.
          </p>
        </div>                
        <div class="products-columns-doors">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sliders-swing-doors-thumb.png" width="400"/>          
          <h3>Sliders & Swing Doors</h3>
          <p>
            Specializing in European style turn and tilt our vinyl windows are fully customizable. Glass packages are built custom to meet your project requirements.
          </p>
        </div>
        <div class="products-columns-doors">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/interior-exterior-panel-doors-thumb.png" width="400"/>          
          <h3>Interior & Exterior Panel Doors</h3>
          <p>
            Specializing in European style turn and tilt our vinyl windows are fully customizable. Glass packages are built custom to meet your project requirements.
          </p>
        </div>                
        <div class="products-columns-doors">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/accordion-doors-thumb.png" width="400"/>          
          <h3>Accordion Doors (bi-fold)</h3>
          <p>
            Specializing in European style turn and tilt our vinyl windows are fully customizable. Glass packages are built custom to meet your project requirements.
          </p>
        </div>                                                        
        <div class="products-columns-doors">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/panoramic-doors-thumb.png" width="400"/>          
          <h3>Panoramic Doors</h3>
          <p>
            Specializing in European style turn and tilt our vinyl windows are fully customizable. Glass packages are built custom to meet your project requirements.
          </p>
        </div>                                                        
        <div class="products-columns-doors">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/lift-slide-thumb.png" width="400"/>          
          <h3>Lift & Slide</h3>
          <p>
            Specializing in European style turn and tilt our vinyl windows are fully customizable. Glass packages are built custom to meet your project requirements.
          </p>
        </div>                                                        
        <div class="products-columns-doors">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/tilt-slide-thumb.png" width="400"/>          
          <h3>Tilt & Slide</h3>
          <p>
            Specializing in European style turn and tilt our vinyl windows are fully customizable. Glass packages are built custom to meet your project requirements.
          </p>
        </div>                                                                
      </div>
    </div>
    <div class="shop-content">
      <div class="shop-content-container">
        <div class="shop-content-container-img">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shop-content.png" />          
        </div>
        <div class="shop-content-container-text">
          <span style="display: inline-block;">
            <svg xmlns="http://www.w3.org/2000/svg" height="60" viewBox="0 96 960 960" width="60"><path d="M286.788 975Q257 975 236 953.788q-21-21.213-21-51Q215 873 236.212 852q21.213-21 51-21Q317 831 338 852.212q21 21.213 21 51Q359 933 337.788 954q-21.213 21-51 21Zm400 0Q657 975 636 953.788q-21-21.213-21-51Q615 873 636.212 852q21.213-21 51-21Q717 831 738 852.212q21 21.213 21 51Q759 933 737.788 954q-21.213 21-51 21ZM235 315l110 228h288l125-228H235Zm-30-60h589.074q22.964 0 34.945 21Q841 297 829 318L694 561q-11 19-28.559 30.5Q647.881 603 627 603H324l-56 104h491v60H277q-42 0-60.5-28t.5-63l64-118-152-322H51v-60h117l37 79Zm140 288h288-288Z"/></svg>
          </span>
          <h2 style="display: inline-block;">
            Shop
          </h2>
          <p>
            Browse our offer and find the accessories and spare parts for our windows that interest you.
          </p>
          <div class="shop-content-container-button">
            <a class="my-button" href="#">shop now</a>
          </div>
        </div>
      </div>
    </div>
    <div class="service-content">
      <div class="service-content-container">
        <div class="shop-content-container-text">
          <h2>
            Service
          </h2>
          <span style="display: inline-block;">
            <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48"><path d="M480.089 566Q509 566 529.5 545.411q20.5-20.588 20.5-49.5Q550 467 529.411 446.5q-20.588-20.5-49.5-20.5Q451 426 430.5 446.589q-20.5 20.588-20.5 49.5Q410 525 430.589 545.5q20.588 20.5 49.5 20.5ZM480 897q133-121 196.5-219.5T740 504q0-117.79-75.292-192.895Q589.417 236 480 236t-184.708 75.105Q220 386.21 220 504q0 75 65 173.5T480 897Zm0 79Q319 839 239.5 721.5T160 504q0-150 96.5-239T480 176q127 0 223.5 89T800 504q0 100-79.5 217.5T480 976Zm0-472Z"/></svg>
          </span>
          <p style="display: inline-block;">
            Contact us using the form.
          </p>
          <p>
            We will answer your questions as soon as possible.
          </p>
          <div class="service-content-container-button">
            <a class="my-button" href="#">service</a>
          </div>
        </div>
      </div>
    </div>    
    <div class="map-content">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d82733.48834778159!2d-119.75494206009236!3d39.58814878530392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8099396d78597cd5%3A0x3a6af8fdddd64b7e!2s4960%20Vista%20Blvd%20%23100%2C%20Sparks%2C%20NV%2089436%2C%20Stany%20Zjednoczone!5e0!3m2!1spl!2spl!4v1681848625627!5m2!1spl!2spl" width="600" height="450" style="border:0; width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>        
  </main>

  <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/main.js">

  <?php wp_body_open(); ?>

