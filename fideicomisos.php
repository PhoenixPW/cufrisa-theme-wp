<?php
/* Template Name: Fideicomisos */
get_header(); 

?>

<main>

<div class="flex flex-col">

<!--
 
 ----------------
   Seccion Hero
 ----------------


-->

<section id="hero" 
         class="relative w-full min-h-screen bg-cover bg-center bg-black text-white flex items-center justify-left" 
         style="background-image: url('<?php echo get_field('imagen_fideicomisos')?the_field('imagen_fideicomisos'):get_template_directory_uri().'/public/fideicomisos.png' ?>')">
<div class="absolute inset-0 bg-black bg-opacity-60 flex flex-col justify-center gap-8 sm:max-xl:gap-3 pb-32 sm:pb-0 items-center sm:items-stretch">

<img src="<?php echo get_template_directory_uri(); ?>/public/logo.webp" 
     loading="lazy" 
     alt="Logo" 
     class="w-5/12 sm:hidden" />

<h1 class="text-[2.6rem] sm:text-2xl lg:max-xl:text-3xl xl:text-4xl 2xl:text-5xl font-bold text-center sm:pt-4 lg:pt-8 xl:max-2xl:pt-9">
  <?php
  echo get_field('titular_fideicomisos')?the_field('titular_fideicomisos'):"Fideicomiso de Garantía para Desarrollos <br/> Inmobiliarios"
  ?>
</h1>
<div class="hidden sm:flex flex-col gap-4 sm:max-2xl:gap-0 text-left sm:w-10/12 md:w-8/12 lg:w-7/12 xl:w-6/12 2xl:w-7/12 break-words ml-16 sm:max-lg:ml-11">


<h2 class="text-2xl sm:text-base lg:max-xl:text-xl xl:text-2xl 2xl:text-3xl  font-bold mb-4 tracking-wider">
  <?php
   echo get_field('subtitulo_fideicomisos')?the_field('subtitulo_fideicomisos'):"Cuidamos tu inversión";
  ?>

  </h2>

  <div class="hidden sm:block">
  <p class="text-lg sm:text-sm lg:max-xl:text-base xl:text-lg 2xl:text-xl font-light leading-6">
  <?php


  echo get_field('cuerpo_hero_fideicomisos')?the_field('cuerpo_hero_fideicomisos'):"
  Cuando el aportante de la tierra y la empresa constructora son personas distintas, la finalidad de este contrato es verificar que se construya el desarrollo inmobiliario y se cubra a cada una de las partes su contraprestación tanto por el terreno como por las construcciones.
<br/>        <br/>        

Así el desarrollador no tiene que hacer una compra venta y el dueño de la tierra tiene asegurada su inversión.
<br/>    <br/>        

En caso de que alguna de las partes incumpla con sus obligaciones se podrá llevar a cabo la reversión de los bienes y o la venta de los mismos para cubrir las obligaciones garantizadas.
<br/>        <br/>        

Adicionalmente este instrumento sirve para garantizar créditos que se obtengan para la construcción.          
"
?>
    
  </p>

 </div>

</div>
</div>
</section>


<!--

 ---------------
    Contenido
 ---------------

-->


<section class="relative w-full min-h-screen flex flex-col items-center justify-center text-black bg-[#E9E9E9] px-8 sm:px-10 lg:px-14 xl:px-36 py-20 gap-6">
<h2 class="text-[#1D3750] text-3xl text-center sm:text-2xl lg:text-3xl xl:text-3xl 2xl:text-4xl min-[1920px]:text-5xl font-extrabold lg:font-bold tracking-wide sm:tracking-normal lg:tracking-wide 2xl:tracking-normal ">

<?php
 echo get_field('titulo_cuerpo_fideicomisos')?the_field('titulo_cuerpo_fideicomisos'):"UN CONTRATO PARA ASEGURAR TU INVERSION";
?>

</h2>

<p class="text-justify sm:text-left text-lg sm:text-sm xl:text-lg 2xl:text-xl min-[1920px]:text-2xl w-full">
<?php

  echo get_field('texto_cuerpo_fideicomisos')?the_field('texto_cuerpo_fideicomisos'):"En el se aportan bienes o derechos a CUFRISA, para su administración conforme a los fines del contrato, para garantizar seguridad jurídica a las partes."

?>

</p>

<section class="flex flex-col-reverse sm:flex-row gap-7 sm:max-lg:gap-5 items-center">
<img src="<?php echo get_field('diagrama_fideicomiso')?the_field('diagrama_fideicomiso'):get_template_directory_uri().'/public/diagrama.png' ?>" 
     alt="Roles" 
     loading="lazy" 
     class="sm:w-7/12"></img>
<div class="flex flex-col sm:w-5/12 gap-11 sm:max-lg:gap-5 lg:max-xl:gap-9 " >
 <p class="text-lg sm:text-sm xl:text-lg 2xl:text-xl min-[1920px]:text-2xl">
  <span class="font-bold tracking-wide">
    <?php
    echo get_field('actor_1')?the_field('actor_1'):"FIDEICOMISARIO:"
    ?> 
  </span>
  <?php
  echo get_field('descripcion_actor_1')?the_field('descripcion_actor_1'):"Recibe beneficios de acuerdo a pactado en el contrato."
  ?>


 </p>

 <p class="text-lg sm:text-sm xl:text-lg 2xl:text-xl min-[1920px]:text-2xl tracking-wide">
  <span class="font-bold">
  <?php
    echo get_field('actor_2')?the_field('actor_2'):"FIDEICOMITENTE:"
  ?>
  </span>

  <?php
  echo get_field('descripcion_actor_2')?the_field('descripcion_actor_2'):"Aporta los bienes que pueden ser: Efectivo y valores, acciones emitidas por sociedades, Inmuebles (casas, edificios,lotes, etc.) y Bienes susceptibles de transmisión."
  ?>

 </p>

 <p class="text-lg sm:text-sm xl:text-lg 2xl:text-xl min-[1920px]:text-2xl tracking-wide">
  <span class="font-bold">
    <?php
    echo get_field('actor_3')?the_field('actor_3'):"FIDUCIARIO (CUFRISA):";
    ?>
  </span>
<?php
  echo get_field('descripcion_actor_3')?the_field('descripcion_actor_3'):"Actúa conforme a los fines del contrato, siempre y cuando éstos sean determinados, lícitos y posibles.";
?>

 </p>

</div>
</section>

<br/>


<?php

echo get_field('video_fideicomisos')?the_field('video_fideicomisos'):
"

<iframe class='w-full sm:w-8/12 lg:w-8/12 xl:w-8/12 2xl:w-9/12 h-[190px] sm:h-[200px] md:h-[300px] lg:h-[350px] xl:h-[400px] 2xl:h-[550px]' src='https://www.youtube.com/embed/ClkK2OV0u_8?si=saLFYlMnXkPsxwnf' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' referrerpolicy='strict-origin-when-cross-origin' allowfullscreen></iframe>
"
?>


<br/>
<h3 class="text-[1.370rem] xl:text-xl 2xl:text-3xl min-[1920px]:text-4xl font-bold">

<?php
 echo get_field('fideicomiso_detalle')?the_field('fideicomiso_detalle'):"Fideicomiso de Garantía a Detalle";
?>
</h3>


<article class="flex flex-col sm:flex-row bg-[#DEDEDE] p-5 2xl:p-6 w-full items-center rounded gap-7 sm:gap-0 sm:justify-between">
<p class="text-center sm:text-left text-xl sm:text-sm md:text-lg lg:text-lg xl:text-xl 2xl:text-2xl min-[1920px]:text-3xl sm:w-7/12 lg:w-9/12">

<?php

 echo get_field('descripcion_fideicomiso')?the_field('descripcion_fideicomiso'):"Presentación Fideicomiso Cufrisa (pdf)";

?>

 </p>
 <a href="<?php echo get_field('liga_presentacion_fideicomiso')?the_field('liga_presentacion_fideicomiso'): get_template_directory_uri().'/assets/pdf/Presentacion Fideicomiso cufrisa.pdf' ?>" 
    target="_blank"
    aria-label="Enlace para ir al archivo de la presentacion de fideicomiso" 
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
