<?php
/* Template Name: Buro */
get_header(); 

?>

<main> 

<div class="flex flex-col">

<!-- 
   ------------------
      Seccion Hero
   ------------------

-->

<section id="hero" 
         class="relative w-full min-h-screen bg-cover bg-center bg-black text-white flex items-center justify-left" 
         style="background-image: url('<?php echo get_field('imagen_buro')?the_field('imagen_buro'):get_template_directory_uri().'/public/buro.webp' ?>')">
<div class="absolute inset-0 bg-black bg-opacity-70 flex items-center px-12 sm:pt-16 sm:pl-20 ">

<div class="flex flex-col gap-11 sm:gap-3 2xl:gap-5 sm:text-left sm:w-7/12 lg:w-6/12 break-words items-center sm:items-stretch pb-44 sm:pb-0">

<img src="<?php echo get_template_directory_uri(); ?>/public/logo.webp" 
     loading="lazy" 
     alt="Logo" 
     class="w-5/12 sm:hidden" />

<h1 class="text-4xl sm:text-2xl md:text-3xl lg:text-3xl xl:text-4xl 2xl:text-5xl min-[1920px]:text-6xl font-bold mb-4 tracking-wider text-center sm:text-left sm:w-11/12">

   <?php
    echo get_field("titular_buro")?the_field("titular_buro"):"BURÓ DE ENTIDADES FINANCIERAS";
   ?>
   
  </h1>
  
  <div class="hidden sm:block">
   <p class="text-xl sm:text-xs md:text-sm lg:text-base xl:text-lg 2xl:text-xl min-[1920px]:text-2xl font-light sm:w-8/12 lg:w-7/12 leading-6">

    <?php
    echo get_field("cuerpo_hero_buro")?the_field("cuerpo_hero_buro"):"Es una herramienta de consulta y difusión con la que podrás conocer los productos que ofrecen las entidades financieras, sus comisiones y tasas, y otra información que resulte relevante para informarte sobre su desempeño.";
    ?>

    </p>
  </div>
</div>

<img src="<?php echo get_template_directory_uri(); ?>/public/buro_informacion.jpg" 
     alt="Buro de entidades financieras" 
     loading="lazy" 
     class="hidden sm:block w-4/12 xl:max-2xl:w-3/12 2xl:w-3/12  rounded-2xl"/>

</div>

<!-- 
  ---------------
     Contenido
  ---------------
-->



</section>


<section class="relative w-full min-h-screen flex flex-col items-center justify-center text-black bg-[#E9E9E9] gap-2 sm:gap-1 px-12 lg:px-20 xl:px-28 py-9">
<h2 class="w-full text-left text-[#1D3750] text-2xl sm:text-xl lg:text-2xl xl:text-3xl 2xl:text-4xl min-[1920px]:text-5xl font-bold tracking-wider mb-5">
<?php   

echo get_field('titulo_buro')?the_field('titulo_buro'):"FUNCIÓN"

?>
</h2>
<p class="text-base sm:text-sm xl:text-lg 2xl:text-xl min-[1920px]:text-2xl">
<?php

echo get_field('parrafo_buro')?the_field('parrafo_buro'):
"Con el Buró de Entidades Financieras, se logrará saber quién es quién en bancos, seguros, sociedades financieras de objeto múltiple, cajas de ahorro, afores, entre otras entidades. Con ello, podrás comparar y evaluar a las entidades financieras, sus productos y servicios y tendrás mayores elementos para elegir lo que más te convenga.
<br/><br/>

Esta información te será útil para elegir un producto financiero y también para conocer y usar mejor los que ya tienes.
<br/><br/>

Es una herramienta que puede contribuir al crecimiento económico del país al promover la competencia entre las instituciones financieras, lo que impulsará la transparencia al revelar información a los usuarios sobre el desempeño de éstas y los productos que ofrecen y que va a facilitar un manejo responsable de los productos y servicios financieros al conocer a detalle sus características.
<br/><br/>

Lo anterior, podrá derivar en un mayor bienestar social, porque al conjuntar en un solo espacio tan diversa información del sistema financiero, el usuario tendrá más elementos para optimizar su presupuesto, para mejorar sus finanzas personales, para utilizar correctamente los créditos que fortalecerán su economía y obtener los seguros que la protejan, entre otros aspectos.
<br/><br/>

Para consultar esta información y la relativa al sector puede ingresar al siguiente sitio https://www.buro.gob.mx/
<br/><br/>

La información que corresponde a Soluciones Patrimoniales CUFRISA S.A. de C.V. SOFOM ENR:​
"
?>
</p>

<article class="flex flex-col sm:flex-row bg-[#DEDEDE] p-5 2xl:p-6 w-full items-center rounded gap-7 sm:gap-0 sm:justify-between sm:my-8">
<p class="text-center sm:text-left text-xl sm:text-sm md:text-lg lg:text-lg xl:text-xl 2xl:text-2xl min-[1920px]:text-3xl sm:w-7/12 lg:w-9/12">
  <?php
  echo get_field('semaforo')?the_field('semaforo'):"Semaforo (2024) PDF"
  ?>
 </p>
 <a href="<?php echo get_field('liga_semaforo')?the_field('liga_semaforo'):get_template_directory_uri().'/assets/pdf/Semaforo 2023.pdf' ?>"
    aria-label="Descargar el PDF de semaforo" 
    target="_blank" 
    class="flex sm:flex-row justify-center bg-[#263650] w-11/12 sm:w-4/12 xl:w-3/12 text-center text-white text-xl sm:text-sm md:text-lg lg:text-xl xl:text-xl 2xl:text-2xl min-[1920px]:text-3xl py-4 2xl:py-6 rounded hover:bg-blue-600 transition-colors duration-300">
  Descargar
  <img src="<?php echo get_template_directory_uri(); ?>/public/descargas.svg" 
       loading="lazy"
       alt="Icono descargar" 
       class="ml-2 sm:w-[17px] md:w-[20px] lg:w-[21px] xl:w-[24px] 2xl:w-[30px]"/>
 </a>
</article>

</section>


</div>

</main>


<?php
get_footer();
?>
