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
	<script src="https://cdn.tailwindcss.com"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'cufrisa' ); ?></a>

	<header id="masthead" class="site-header">

	<header id="custom-header" class="fixed top-0 left-0 transition-all duration-300 w-full bg-[#1D3750] px-8 flex items-center z-30 bg-opacity-0 py-8">
    <!-- Navigation Menu -->
    <nav class="flex-grow flex justify-around space-x-0 items-center">
      <!-- Hamburger Icon -->
      <div class="flex justify-end w-full sm:w-0">
        <button id="menu-toggle" class="sm:hidden text-white focus:outline-none">
          <svg id="menu-icon" class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>

      <div id="menu-items" class="flex-grow sm:flex md:items-center sm:space-x-0 hidden sm:flex sm:bg-transparent sm:justify-around">
        <a href="#specific-section" class="hidden sm:block">
          <img src="<?php echo get_template_directory_uri(); ?>/public/logo.webp" alt="Logo" class="h-20 sm:h-7 lg:h-10 xl:h-12 cursor-pointer">
        </a>
        <hr>
        <a href="/" class="text-white hover:text-gray-300 font-normal sm:text-xs md:text-sm lg:text-base xl:text-xl transition-all duration-300">INICIO</a>
        <hr>
        <a href="/linea" class="text-white hover:text-gray-300 font-normal sm:text-xs md:text-sm lg:text-base xl:text-xl transition-all duration-300">LINEA III INFONAVIT</a>
        <hr>
        <a href="/fidelcomisos" class="text-white hover:text-gray-300 font-normal sm:text-xs md:text-sm lg:text-base xl:text-xl transition-all duration-300">FIDELCOMISOS DE GARANTIA</a>
        <hr>
        <a href="/credicufrisa" class="text-white hover:text-gray-300 font-normal sm:text-xs md:text-sm lg:text-base xl:text-xl transition-all duration-300">CREDICUFRISA</a>

        <hr>

        <!-- Dropdown Menu Mobile -->
        <div class="relative group sm:hidden flex flex-col gap-4">
          <a href="/comunicados" class="text-white hover:text-gray-300 font-normal text-xl transition-all duration-300">COMUNICADOS</a>
          <hr>
          <a href="/nosotros" class="text-white hover:text-gray-300 font-normal text-xl transition-all duration-300">NOSOTROS</a>
          <hr>
          <a href="/contacto" class="text-white hover:text-gray-300 font-normal text-xl transition-all duration-300">CONTACTO</a>
          <hr>
        </div>

        <!-- Dropdown Menu -->
        <div class="relative group hidden sm:block">
          <!-- Button to trigger the dropdown -->
          <span class="text-white hover:text-gray-300 cursor-pointer font-light sm:text-xs md:text-sm lg:text-base xl:text-xl transition-all duration-300">MAS</span>
          
          <!-- Dropdown Menu -->
          <div class="absolute right-0 mt-2 w-48 bg-gray-800 text-white rounded-lg shadow-lg opacity-0 group-hover:opacity-100 group-hover:block transition-opacity duration-200">
            <a href="/comunicados" class="block px-4 py-2 hover:bg-gray-700 text-lg">Comunicados</a>
            <a href="/nosotros" class="block px-4 py-2 hover:bg-gray-700 text-lg">Nosotros</a>
            <a href="/contacto" class="block px-4 py-2 hover:bg-gray-700 text-lg">Contacto</a>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const header = document.getElementById('custom-header');
      const menuToggle = document.getElementById('menu-toggle');
      const menuIcon = document.getElementById('menu-icon');
      const menuItems = document.getElementById('menu-items');

      // Check and apply scrolling state
      window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
          header.classList.add('bg-opacity-80', 'py-3');
          header.classList.remove('bg-opacity-0', 'py-8');
        } else {
          header.classList.add('bg-opacity-0', 'py-8');
          header.classList.remove('bg-opacity-80', 'py-3');
        }
      });

      // Handle menu toggle
      menuToggle.addEventListener('click', () => {
        if (menuItems.classList.contains('hidden')) {
          menuItems.classList.remove('hidden');
          menuItems.classList.add('fixed', 'inset-0', 'bg-[#1D3750]', 'flex', 'flex-col', 'items-start', 'justify-start', 'z-40', 'px-0', 'py-14', 'gap-4', 'text-justify');
          menuIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>';
        } else {
          menuItems.classList.add('hidden');
          menuItems.classList.remove('fixed', 'inset-0', 'bg-[#1D3750]', 'flex', 'flex-col', 'items-start', 'justify-start', 'z-40', 'px-0', 'py-14', 'gap-4', 'text-justify');
          menuIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>';
        }
      });
    });
  </script>



		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'cufrisa' ); ?></button>
			<?php
			?>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->
