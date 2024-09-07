<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cufrisa
 */

?>

<footer class="flex flex-col bg-[#1D3750] px-10 xl:px-24 py-9 gap-8 sm:gap-5 md:gap-2 pb-6 sm:pb-2">
        <div class="flex flex-col sm:flex-row justify-between items-center gap-8 sm:gap-0">
         <div class="flex flex-col sm:flex-row gap-10 items-center">
          <img src="<?php echo get_template_directory_uri(); ?>/public/logo.webp" alt="Logo" class="h-20 sm:h-14 smd:h-[4.5rem] lg:h-[4.5rem] xl:h-20 2xl:h-24 cursor-pointer" />
        
          <ul class="flex flex-col text-center sm:text-left text-white sm:max-md:text-sm xl:text-lg 2xl:text-2xl font-light gap-3">
           <li>
             <a href="<?php echo esc_url(get_permalink(get_page_by_path('linea-iii-infonavit'))); ?>">LINEA III INFONAVIT</a>
           </li>
   
           <li>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('comunicados'))); ?>">COMUNICADOS</a>
           </li>
   
           <li>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('buro-entidades-financieras'))); ?>">BURÓ ENTIDADES FINANCIERAS</a>
           </li>
          </ul>
         </div>
   
        <div class="flex flex-col gap-5 justify-center items-center">
         <p class="text-[#E9E9E9] xl:text-xl 2xl:text-2xl">CONTACTO</p>
   
         <ul class="flex gap-10 text-[#E9E9E9]">
   
          <a href="https://www.facebook.com/cufrisa/"> 
           <img src="<?php echo get_template_directory_uri(); ?>/public/facebook-svgrepo-com 1.svg" class="h-8 sm:max-md:h-6 xl:h-9 2xl:h-11"/>
          </a>
   
          <a href="https://www.youtube.com/channel/UC2sDwBu_Q6NzxRKqgnOtBUg/featured"> 
           <img src="<?php echo get_template_directory_uri(); ?>/public/youtube-svgrepo-com 1.svg" class="h-8 sm:max-md:h-6 xl:h-9 2xl:h-11"/>
          </a>
   
          <a href="https://www.linkedin.com/company/cufrisa"> 
           <img src="<?php echo get_template_directory_uri(); ?>/public/linkedin-svgrepo-com 1.svg" class="h-8 sm:max-md:h-6 xl:h-9 2xl:h-11"/>
          </a>
   
         </ul>
   
        </div>
   
        </div>
   
        <div class="flex flex-col items-center justify-center text-[#E9E9E9] gap-2 sm:gap-0">
         <a href="<?php echo esc_url(get_permalink(get_page_by_path('aviso-de-privacidad'))); ?>" class="sm:max-md:text-sm xl:text-lg 2xl:text-2xl">AVISO DE PRIVACIDAD</a>
         <p class="text-[#C5BEBE] text-[0.60rem] xl:text-sm 2xl:text-lg">Copyright © 2024 CUFRISA - Todos los derechos reservados.</p>
        </div>
   
       </footer>

       
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
