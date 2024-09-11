<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cufrisa
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
	<script async src="https://cdn.tailwindcss.com"></script>
  <!-- Swiper JS -->
  <script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

	<?php wp_head(); ?>

  <!-- Demo styles -->
  <style>
    html,
    body {
      position: relative;
      height: 100%;
    }

    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
    }

    .swiper {
      width: 100%;
      padding-top: 100px;
      padding-bottom: 100px;
    }

    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 40%;
      transition: transform 0.3s, opacity 0.3s;

    }

    .swiper-slide img {
      display: block;
      width: 100%;
    }

    .swiper-slide-next,
    .swiper-slide-prev {
      opacity: 0.5;
      transform: scale(0.8);
    }
    .swiper-slide-active {
      opacity: 1;
      transform: scale(1);
    }

    
    .swiper-pagination {
      display: flex;
      justify-content: center;
    }

    .swiper-pagination-bullet {
      width: 28px;
      height: 28px;
      background-color: #D9D9D9;
      border: 1px solid black;
      margin: 0 20px !important; /* Force margin between bullets */
      
      box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.25);
      opacity: 1;
      transition: background-color 0.3s ease;
    }

    .swiper-pagination-bullet-active {
      background-color: #1D3750; /* Orange color when active */
    }

    /* Responsive styles */
    @media (max-width: 768px) {
      .swiper-slide {
       width: 60%;
      }
    }

    @media (max-width: 550px) {
      .swiper-slide {
       width: 90%;
      }

      .swiper-pagination-bullet {
        width: 36px;
        height: 36px;
      }
    }

  </style>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
 $pod = pods("prueba_pods");
 $logo = $pod->field("logo_navegacion");
 $menu = $pod->field("menu_pods");
 $numero_elementos_menu = count($menu);

 $opciones_visibles;
 $opciones_restantes;
 $nombre_pagina_actual = strtoupper(get_the_title());
// echo empty($logo)?"Hello":"Karl";
// echo $logo;
 
 if($numero_elementos_menu>4)
 {
  $opciones_visibles = array_slice($menu,0,4);
  $opciones_restantes = array_slice($menu,4);
 }

?>

<div id="page" class="site">

	<header id="masthead" class="site-header p-0">

  <header id="header" class="fixed top-0 left-0 transition-all duration-300 w-full bg-[#1D3750] px-8 flex items-center z-30 py-8 bg-opacity-0">
        <!-- Navigation Menu -->
        <nav class="flex-grow flex justify-around space-x-0 items-center">
            <!-- Hamburger Icon -->
            <div id="hamburgerIcon" class="flex justify-end w-full sm:w-0">
                <button class="sm:hidden text-white focus:outline-none" id="menuToggle" aria-label="Boton para abrir el menu de navegacion en dispositivos moviles">
                    <svg id="menuIcon" class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <div id="menu" class="flex-grow sm:flex md:items-center sm:space-x-0 opacity-0 pointer-events-none sm:pointer-events-auto fixed sm:relative inset-0 bg-[#1D3750] flex flex-col justify-center sm:flex-row z-40 px-0 py-14 sm:py-0 gap-4 text-justify sm:opacity-100 transition-all duration-300 sm:bg-transparent sm:justify-around">
                <button class="sm:hidden absolute top-4 right-4 text-white" id="menuClose" aria-label="Boton para cerrar el menu de navegacion en dispositivos moviles">
                    <svg class="w-10 h-10 mt-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>

                <a href="<?php echo esc_url(home_url('/')); ?>"
                   aria-label="Enlace para ir a la pagina de inicio del cufrisa" 
                   class="flex justify-center mb-5 sm:mb-0 sm:block">
                    <img src="<?php echo !empty($logo)? $logo['guid'] : get_template_directory_uri().'/public/logo.webp'; ?>" alt="Logo" class="h-20 sm:h-7 lg:h-10 xl:h-12 cursor-pointer" />
                </a>
                <hr />

                <?php
                 if(empty($menu))
                 {
                ?>
                <a href="<?php echo esc_url(home_url('/')); ?>"
                   aria-label="Enlace para ir a la pagina de inicio del cufrisa"
                   class="text-white hover:text-gray-300 <?php echo in_array("INICIO",$nombre_pagina_actual)?'font-extrabold':'font-normal'?> sm:text-xs md:text-sm lg:text-base xl:text-xl transition-all duration-300 px-6 sm:px-0">INICIO</a>
                <hr />
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('linea-iii-infonavit'))); ?>" 
                   aria-label="Enlace para ir a la pagina de la linea 3"
                   class="text-white hover:text-gray-300 <?php echo in_array("LINEA",$nombre_pagina_actual)?'font-extrabold':'font-normal'?> sm:text-xs md:text-sm lg:text-base xl:text-xl transition-all duration-300 px-6 sm:px-0">LINEA III INFONAVIT</a>
                <hr />
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('fideicomisos-de-garantia'))); ?>" 
                   aria-label="Enlace para ir a la pagina de fideicomisos"
                   class="text-white hover:text-gray-300 <?php echo in_array("FIDEICOMISOS",$nombre_pagina_actual)?'font-extrabold':'font-normal'?> sm:text-xs md:text-sm lg:text-base xl:text-xl transition-all duration-300 px-6 sm:px-0">FIDELCOMISOS DE GARANTIA</a>
                <hr />
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('credicufrisa'))); ?>" 
                   aria-label="Enlace para ir a la pagina de credicufrisa"
                   class="text-white hover:text-gray-300 <?php echo in_array("CREDICUFRISA",$nombre_pagina_actual)?'font-extrabold':'font-normal'?> sm:text-xs md:text-sm lg:text-base xl:text-xl transition-all duration-300 px-6 sm:px-0">CREDICUFRISA</a>
                <hr />

                <!-- Dropdown Menu Mobile -->
                <div class="relative group sm:hidden flex flex-col gap-4">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('comunicados'))); ?>" 
                       aria-label="Enlace para ir a la pagina de comunicados en dispositivos moviles"
                       class="text-white hover:text-gray-300 <?php echo in_array("COMUNICADOS",$nombre_pagina_actual)?'font-extrabold':'font-normal'?> sm:text-xl transition-all duration-300 px-6 sm:px-0">COMUNICADOS</a>
                    <hr />
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('nosotros'))); ?>" 
                       aria-label="Enlace para ir a la pagina de nosotros en dispositivos moviles"
                       class="text-white hover:text-gray-300 <?php echo in_array("NOSOTROS",$nombre_pagina_actual)?'font-extrabold':'font-normal'?> sm:text-xl transition-all duration-300 px-6 sm:px-0">NOSOTROS</a>
                    <hr />
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('contacto'))); ?>" 
                       aria-label="Enlace para ir a la pagina de contacto en dispositivos moviles"
                       class="text-white hover:text-gray-300 <?php echo in_array("CONTACTO",$nombre_pagina_actual)?'font-extrabold':'font-normal'?> sm:text-xl transition-all duration-300 px-6 sm:px-0">CONTACTO</a>
                    <hr />
                </div>

                <!-- Dropdown Menu -->
                <div class="relative group hidden sm:block">
                    <!-- Button to trigger the dropdown -->
                    <span class="text-white hover:text-gray-300 cursor-pointer font-light sm:text-xs md:text-sm lg:text-base xl:text-xl transition-all duration-300">MAS</span>

                    <!-- Dropdown Menu -->
                    <div class="absolute right-0 mt-2 w-48 bg-gray-800 text-white rounded-lg shadow-lg opacity-0 group-hover:opacity-100 group-hover:block transition-opacity duration-200">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('comunicados'))); ?>" 
                        aria-label="Enlace para ir a la pagina de comunicados"
                            
                           class="block px-4 py-2 hover:bg-gray-700 text-lg <?php echo in_array("COMUNICADOS",$nombre_pagina_actual)?'font-extrabold':'font-normal'?>">Comunicados</a>
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('nosotros'))); ?>" 
                        aria-label="Enlace para ir a la pagina de nosotros"

                           class="block px-4 py-2 hover:bg-gray-700 text-lg" <?php echo in_array("NOSOTROS",$nombre_pagina_actual)?'font-extrabold':'font-normal'?>>Nosotros</a>
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('contacto'))); ?>" 
                        aria-label="Enlace para ir a la pagina de contacto"

                           class="block px-4 py-2 hover:bg-gray-700 text-lg" <?php echo in_array("CONTACTO",$nombre_pagina_actual)?'font-extrabold':'font-normal'?>>Contacto</a>
                    </div>
                </div>

                <?php
                 }
                 else
                 {
                  if($numero_elementos_menu>4)
                  {
                   foreach($opciones_visibles as $pagina)
                   {
                    
                    $id_pagina = $pagina['ID'];
                    
                ?>
                    <a href="<?php echo get_permalink($id_pagina)?>" 
                       aria-label=" <?php echo 'Enlace para ir a la pagina llamada'.get_the_title($id_pagina) ?> "
                       class="<?php echo $id_pagina==get_the_ID()?"font-extrabold":"font-normal"?>  text-white hover:text-gray-300 sm:text-xl transition-all duration-300 px-6 sm:px-0">

                     <?php echo strtoupper(get_the_title($id_pagina))?>

                    </a>
                    <hr />

                <?php
                   }
                ?>
                <!-- Dropdown Menu Mobile -->
                <div class="relative group sm:hidden flex flex-col gap-4">
                
                <?php
                   foreach($opciones_restantes as $pagina)
                   {
                    $id = $pagina['ID'];
                ?>
                    <a href="<?php echo get_permalink($id); ?>" 
                       aria-label=" <?php echo 'Enlace para ir a la pagina llamada'.get_the_title($id) ?> "

                       class="text-white hover:text-gray-300 <?php echo $id==get_the_ID()?'font-extrabold':'font-normal'?> sm:text-xl transition-all duration-300 px-6 sm:px-0">
                      <?php echo strtoupper(get_the_title($id));?>
                    </a>
                    <hr />

                
                <?php
                   }

                ?>
                </div>

                <!-- Dropdown Menu -->
                <div class="relative group hidden sm:block">
                    <!-- Button to trigger the dropdown -->
                    <span class="text-white hover:text-gray-300 cursor-pointer font-light sm:text-xs md:text-sm lg:text-base xl:text-xl transition-all duration-300">MAS</span>

                    <!-- Dropdown Menu -->
                    <div class="absolute right-0 mt-2 w-48 bg-gray-800 text-white rounded-lg shadow-lg opacity-0 group-hover:opacity-100 group-hover:block transition-opacity duration-200">

                <?php 
                  foreach($opciones_restantes as $pagina)
                  {
                   $id = $pagina['ID'];
                ?>
                  <a href="<?php echo get_permalink($id) ?>" 
                  aria-label=" <?php echo 'Enlace para ir a la pagina llamada'.get_the_title($id) ?> "
                  
                  class=" <?php echo $id==get_the_ID()?"font-bold":"font-light"?> block px-4 py-2 hover:bg-gray-700 text-lg">
                   <?php echo strtoupper(get_the_title($id))?>
                  </a>

                <?php 
                  }
                ?>
                  </div>
                  </div>
                <?php  
                  }
                  else
                  {
                ?>

                <?php
                  }
                 }
                ?>

            </div>
        </nav>
    </header>

  <script>
        document.addEventListener("DOMContentLoaded", function() {
            const header = document.getElementById("header");
            const menu = document.getElementById("menu");
            const menuToggle = document.getElementById("menuToggle");
            const menuClose = document.getElementById("menuClose");
            const menuIcon = document.getElementById("menuIcon");

            let scrolling = false;

            window.addEventListener("scroll", () => {
                scrolling = window.scrollY > 50;
                if (scrolling) {
                    header.classList.add("bg-opacity-80", "py-3");
                    header.classList.remove("bg-opacity-0", "py-8");
                } else {
                    header.classList.add("bg-opacity-0", "py-8");
                    header.classList.remove("bg-opacity-80", "py-3");
                }
            });

            menuToggle.addEventListener("click", () => {
                menu.classList.toggle("opacity-0");
                menu.classList.toggle("pointer-events-none");
                if (!menu.classList.contains("opacity-0")) {
                    menuIcon.setAttribute("d", "M6 18L18 6M6 6l12 12");
                } else {
                    menuIcon.setAttribute("d", "M4 6h16M4 12h16M4 18h16");
                }
            });

            menuClose.addEventListener("click", () => {
                menu.classList.add("opacity-0");
                menu.classList.add("pointer-events-none");
                menuIcon.setAttribute("d", "M4 6h16M4 12h16M4 18h16");
            });
        });
  </script>




	</header><!-- #masthead -->
