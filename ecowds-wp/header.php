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
        <div id="slides-main" class="slides" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/slide-4.jpg); background-repeat: no-repeat; background-size: cover; background-position: center;">
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
        </div>
        <div id="slides-aux" class="slides mask">
          <h2 class="slide-title slide" data-index="0"><a href="#">Vinyl windows</a></h2>
          <h2 class="slide-title slide" data-index="1"><a href="#">Aluminum windows</a></h2>
          <h2 class="slide-title slide" data-index="2"><a href="#">Wood windows</a></h2>
        </div>
        <nav id="slider-nav">
          <span class="current"></span>
        </nav>
      </div>     
    </div>

    <?php get_template_part( 'template-parts/header/nav-middle' ); ?>

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

	  <?php get_template_part( 'template-parts/header/nav-bottom' ); ?>

  </header>

  <main>

	  <?php get_template_part( 'template-parts/content/livechat' ); ?>

    <?php get_template_part( 'template-parts/content/our-products' ); ?>

    <?php get_template_part( 'template-parts/content/shop-content' ); ?>

    <?php get_template_part( 'template-parts/content/service-content' ); ?>
   
    <div class="map-content">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d82733.48834778159!2d-119.75494206009236!3d39.58814878530392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8099396d78597cd5%3A0x3a6af8fdddd64b7e!2s4960%20Vista%20Blvd%20%23100%2C%20Sparks%2C%20NV%2089436%2C%20Stany%20Zjednoczone!5e0!3m2!1spl!2spl!4v1681848625627!5m2!1spl!2spl" width="600" height="450" style="border:0; width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div> 
           
  </main>

  <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/main.js">

  <?php wp_body_open(); ?>

