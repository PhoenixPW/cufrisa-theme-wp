<?php
/* Template Name: Comunicados */
get_header(); 

?>

<main>

<div class="flex flex-col bg-black">


<section id="hero" 
         class="relative w-full sm:min-h-screen bg-cover bg-center bg-black text-white flex items-center justify-left" 
         style="background-image: url('<?php echo get_field('imagen_comunicados')?the_field('imagen_comunicados'):get_template_directory_uri().'/public/comunicados.webp' ?>')">
<div class="sm:absolute inset-0 bg-gradient-to-t sm:bg-gradient-to-r from-black/90 via-black/0 to-black/0 bg-black bg-opacity-40 flex items-center justify-center sm:justify-start sm:pb-0 [@media(max-height:840px)]:pt-36 pt-64 sm:pt-0">

<div class="flex flex-col lg:gap-4 xl:gap-8 text-center sm:text-left sm:w-10/12 md:w-8/12 xl:w-7/12 2xl:w-7/12 break-words sm:ml-8 lg:ml-10 xl:ml-16 items-center sm:items-stretch [@media(max-height:840px)]:pb-20 pb-24 sm:pb-0 gap-10">

<img src="<?php echo get_template_directory_uri(); ?>/public/logo.webp" 
     loading="lazy" 
     alt="Logo" 
     class="w-4/12 sm:hidden" />

<h1 class="text-4xl sm:text-2xl lg:text-3xl xl:text-4xl 2xl:text-5xl min-[1920px]:text-6xl font-bold mb-4 tracking-wider">
  <?php
   echo get_field("titular_comunicados")?the_field("titular_comunicados"):"COMUNICADOS INSTITUCIONALES";
  ?>
</h1>


  <p class="hidden sm:block text-xl sm:text-sm lg:text-lg xl:text-xl 2xl:text-2xl min-[1920px]:text-3xl font-light">
   <?php
    echo get_field("cuerpo_hero_comunicados")?the_field("cuerpo_hero_comunicados"):"Aquí encontrarás información relevante a nuestra comunidad o todos aquellos que deseen información relevante e importante sobre nuestra postura institucional sobre asuntos recientes que sean de nuestra competencia, que estén directamente relacionados a nosotros o a los sectores donde nos desenvolvemos.";
    ?>

  </p>

</div>
</div>
</section>

<!--
 
 -----------------
     Contenido
 -----------------


-->

<section class="relative w-full min-h-screen flex flex-col items-center justify-center text-black bg-[#E9E9E9] px-4 sm:px-6 lg:px-24 py-8 rounded-t-3xl sm:rounded-none">

<article class="flex flex-col sm:flex-row bg-[#DEDEDE] p-5 2xl:p-6 w-full items-center rounded gap-7 sm:gap-0 sm:justify-between">
<p class="text-center sm:text-left text-xl sm:text-sm md:text-base lg:text-xl xl:text-xl 2xl:text-2xl min-[1920px]:text-3xl sm:w-7/12">
<?php
 echo get_field('comunicado_1')?the_field('comunicado_1'):"Comunicado CUFRISA 9 de noviembre 2023. Pagina web que suplanta nuestro nombre. (pdf)"
?>
</p>
<a href="<?php echo get_field('liga_comunicado_1')?the_field('liga_comunicado_1'):get_template_directory_uri().'/assets/pdf/Comunicado CUFRISA 9 de noviembre 2023.pdf' ?>" 
   target="_blank" 
   class="flex sm:flex-row justify-center sm:items-center  bg-[#263650] w-11/12 sm:w-4/12 xl:w-3/12 text-center text-white text-xl sm:text-sm md:text-lg lg:text-xl xl:text-xl 2xl:text-2xl min-[1920px]:text-3xl py-4 2xl:py-6 rounded shadow-md hover:bg-blue-600 transition-colors duration-300">

 Descargar
 <img src="<?php echo get_template_directory_uri(); ?>/public/descargas.svg" 
      loading="lazy"
      alt="Icono descargar" 
      class="ml-2 sm:w-[17px] md:w-[20px] lg:w-[24px] xl:w-[30px] 2xl:w-[33px]"/>

</a>
</article>


<article class="flex flex-col sm:flex-row bg-white p-5 2xl:p-6 w-full items-center rounded gap-7 sm:gap-0 sm:justify-between">
<p class="text-center sm:text-left text-xl sm:text-sm md:text-base lg:text-xl xl:text-xl 2xl:text-2xl min-[1920px]:text-3xl sm:w-7/12">
<?php
 echo get_field('comunicado_2')?the_field('comunicado_2'):"Comunicado CONDUSEF 1 de Noviembre 2019 SUPLANTACIÓN DE NUESTRA IDENTIDAD (pdf)"
?>
</p>
<a href="<?php echo get_field('liga_comunicado_2')?the_field('liga_comunicado_2'):get_template_directory_uri().'/assets/pdf/Comunicado CONDUSEF 1 de Noviembre 2019.pdf' ?>" 
   target="_blank" 
   class="flex sm:flex-row justify-center sm:items-center  bg-[#263650] w-11/12 sm:w-4/12 xl:w-3/12 text-center text-white text-xl sm:text-sm md:text-lg lg:text-xl xl:text-xl 2xl:text-2xl min-[1920px]:text-3xl py-4 2xl:py-6 rounded shadow-md hover:bg-blue-600 transition-colors duration-300">


 Descargar
 <img src="<?php echo get_template_directory_uri(); ?>/public/descargas.svg" 
      loading="lazy" 
      alt="Icono descargar" 
      class="ml-2 sm:w-[17px] md:w-[20px] lg:w-[24px] xl:w-[30px] 2xl:w-[33px]"/>
</a>    
</article>


<article class="flex flex-col sm:flex-row bg-[#DEDEDE] p-5 2xl:p-6 w-full items-center rounded gap-7 sm:gap-0 sm:justify-between">
<p class="text-center sm:text-left text-xl sm:text-sm md:text-base lg:text-xl xl:text-xl 2xl:text-2xl min-[1920px]:text-3xl sm:w-7/12">

<?php
echo get_field('comunicado_3')?the_field('comunicado_3'):"Comunicado CUFRISA 17 de Septiembre 2019 USOS NO AUTORIZADOS DE NUESTROS DATOS (razón social y regis) (pdf)"
?>

</p>
<a href="<?php echo get_field('liga_comunicado_3')?the_field('liga_comunicado_3'):get_template_directory_uri().'/assets/pdf/Comunicado CUFRISA 17 de Septiembre 2019.pdf' ?>" 
   target="_blank" 
   class="flex sm:flex-row justify-center sm:items-center  bg-[#263650] w-11/12 sm:w-4/12 xl:w-3/12 text-center text-white text-xl sm:text-sm md:text-lg lg:text-xl xl:text-xl 2xl:text-2xl min-[1920px]:text-3xl py-4 2xl:py-6 rounded shadow-md hover:bg-blue-600 transition-colors duration-300">


 Descargar
 <img src="<?php echo get_template_directory_uri().'/public/descargas.svg'; ?>" 
      loading="lazy" 
      alt="Icono descargar" 
      class="ml-2 sm:w-[17px] md:w-[20px] lg:w-[24px] xl:w-[30px] 2xl:w-[33px]"/>
</a>    
</article>

<article class="flex flex-col sm:flex-row bg-white p-5 2xl:p-6 w-full items-center rounded gap-7 sm:gap-0 sm:justify-between">
<p class="text-center sm:text-left text-xl sm:text-sm md:text-base lg:text-xl xl:text-xl 2xl:text-2xl min-[1920px]:text-3xl sm:w-7/12">
<?php
 echo get_field('comunicado_4')?the_field('comunicado_4'):"Comunicado CUFRISA 27 de mayo 2019. USO DE IMAGEN COMERCIAL IGUAL O CONFUSAMENTE SIMILAR (pdf)"
?>

</p>
<a href="<?php echo get_field('liga_comunicado_4')?the_field('liga_comunicado_4'):get_template_directory_uri().'/assets/pdf/Comunicado CUFRISA 27 de mayo 2019.pdf' ?>" 
   target="_blank" 
   class="flex sm:flex-row justify-center sm:items-center  bg-[#263650] w-11/12 sm:w-4/12 xl:w-3/12 text-center text-white text-xl sm:text-sm md:text-lg lg:text-xl xl:text-xl 2xl:text-2xl min-[1920px]:text-3xl py-4 2xl:py-6 rounded shadow-md hover:bg-blue-600 transition-colors duration-300">

 Descargar
 <img src="<?php echo get_template_directory_uri(); ?>/public/descargas.svg" 
      loading="lazy" 
      alt="Icono descargar" 
      class="ml-2 sm:w-[17px] md:w-[20px] lg:w-[24px] xl:w-[30px] 2xl:w-[33px]"/>
</a>    
</article>


</section>


</div>


</main>

<?php
get_footer();
?>
