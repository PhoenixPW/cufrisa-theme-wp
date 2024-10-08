<?php
/* Template Name: Linea III */
get_header(); 

$pod_proyectos = pods("editar_proyectos_cufrisa");
$proyectos = $pod_proyectos->field("proyectos_realizados");

?>

<main>

<div class="flex flex-col bg-black">


<!--

 ------------------
    Seccion Hero
 ------------------

-->

<section id="hero" 
         class="relative w-full sm:min-h-screen bg-cover bg-center bg-black text-white flex items-center justify-left" 
         style="background-image: url('<?php echo get_field('imagen_linea')?the_field('imagen_linea'):get_template_directory_uri().'/public/linea.webp' ?>')">
<div class="sm:absolute inset-0  bg-gradient-to-t from-black/60 via-black/0 to-black/0 bg-black bg-opacity-60 flex flex-col justify-center gap-8">
<div class="flex flex-col items-center sm:items-start gap-10 sm:gap-4 text-center sm:text-left px-7 sm:px-0 sm:w-9/12 md:w-9/12 xl:9/10 break-words sm:ml-16 [@media(max-height:850px)]:pb-6 pb-12 sm:pb-0 [@media(max-height:850px)]:pt-20 pt-28 sm:pt-0 2xl:pt-16">

  <img src="<?php echo get_template_directory_uri().'/public/logo.webp' ?>" 
       loading="lazy" 
       alt="Logo" 
       class="w-5/12 sm:hidden" />

  <h1 class="text-4xl sm:text-xl lg:text-2xl xl:text-4xl 2xl:text-5xl font-bold mb-4 sm:max-lg:mb-1 tracking-wider">
  <?php
   echo get_field('titular_linea')?the_field('titular_linea'):"Línea 3 infonavit Crédito Inmobiliario sin intereses"
  ?>        
  </h1>

  <div class="hidden sm:flex sm:flex-col sm:gap-4">
   <p class="sm:text-xs lg:text-sm xl:text-lg 2xl:text-2xl font-light md:w-8/12 xl:w-8/12">
   <?php 

   echo get_field('cuerpo_hero_linea')?the_field('cuerpo_hero_linea'):"La línea 3 de Infonavit es un programa para empresas desarrolladoras de vivienda. Construye desarrollos inmobiliarios: Financiamiento hasta el 100% de la construcción. 0% de intereses con el 100% del recurso desde el inicio. Sin riesgo comercial. El mejor financiamiento para proyecto de vivienda con línea 3 de infonavit."
   ?>
   </p>

   <h2 class="sm:text-xs lg:text-sm xl:text-xl 2xl:text-2xl font-semibold">
   <?php
    echo get_field('subtitulo_linea')?the_field('subtitulo_linea'):"Dirigido a...";
   ?>

   </h2>
   <p class="sm:text-xs lg:text-sm xl:text-lg 2xl:text-2xl font-light md:w-8/12 xl:w-6/12">
   <?php
   echo get_field('subcuerpo_linea')?the_field('subcuerpo_linea'):"Desarrolladoras de proyectos inmobiliarios por INFONAVIT. A través de este crédito, pueden promover a trabajadores la compra de viviendas en preventa.";
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


<section class="relative w-full min-h-screen flex flex-col items-center justify-center text-black bg-[#E9E9E9] px-7 sm:px-10 xl:px-32 [@media(max-height:850px)]:py-10 py-16 sm:py-20 gap-5 rounded-t-3xl sm:rounded-none">

<h3 class="text-3xl sm:text-2xl xl:text-2xl 2xl:text-3xl font-bold tracking-wide">

<?php
echo get_field('subtitulo_cuerpo_linea')?the_field('subtitulo_cuerpo_linea'):"PROCESO"
?>

</h3>

<p class="text-lg sm:text-sm md:text-base xl:text-lg 2xl:text-xl min-[1920px]:text-2xl">
<?php

echo get_field('parrafo_cuerpo_linea')?the_field('parrafo_cuerpo_linea'):"El financiamiento a través de la Línea 3, se lleva a cabo por medio de la evaluación y monitoreo de una entidad administradora, en este caso CUFRISA, la cual se encarga de evaluar la viabilidad técnica y financiera de los proyectos y, de ser factibles, la administración los recursos para paquetes de viviendas."

?>

</p>

<h4 class="text-lg  xl:text-lg 2xl:text-xl min-[1920px]:text-2xl font-bold ">
<?php
echo get_field('segundo_subtitulo_linea')?the_field('segundo_subtitulo_linea'):"PASOS PARA INICIAR TU PROYECTO"
?>
</h4>

<p class="text-lg sm:text-sm md:text-base xl:text-lg 2xl:text-xl min-[1920px]:text-2xl">
<?php     
 echo get_field('continuacion_cuerpo_linea')?the_field('continuacion_cuerpo_linea'):
 "El Consejo de Administración del INFONAVIT, autoriza el paquete de Línea 3 dede las viviendas a desarrollar y autoriza de manera preliminar a la empresa constructora.
 <br/>
 <br/>
 La empresa Constructora entrega a CUFRISA la información Técnica, Jurídica y Financiera para asegurar que el proyecto sea viable y cumpla con todos los requisitos que marca Infonavit para una Línea 3 y las autoridades de donde se lleve a cabo las viviendas.

 <br/>
 <br/>

 La empresa Constructora entrega a CUFRISA la información Técnica, Jurídica y Financiera para asegurar que el proyecto sea viable y cumpla con todos los requisitos que marca Infonavit para una Línea 3 y las autoridades de donde se lleve a cabo las viviendas.

 <br/>"
 
?>

</p>

<br/>




<?php


echo get_field('video_linea3')?the_field('video_linea3'):
"
<iframe class='w-full sm:w-8/12 lg:w-8/12 xl:w-8/12 2xl:w-9/12 h-[195px] sm:h-[200px] md:h-[300px] lg:h-[350px] xl:h-[400px] 2xl:h-[550px]' 
        loading='lazy'
        src='https://www.youtube.com/embed/of_v2gLg8Lg?si=faYNTek5vfgTHlQd'
        title='YouTube video player' 
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen>
</iframe>
"
?>

<br/>


<h3 class="text-xl sm:max-md:text-lg xl:text-xl 2xl:text-2xl min-[1920px]:text-3xl text-center font-bold tracking-wide">

<?php
echo get_field('presentacion_credito')?the_field('presentacion_credito'):"PRESENTACIÓN A DETALLE DE CRÉDITO INTEGRAL"
?>
</h3>

<article class="flex flex-col sm:flex-row bg-[#DEDEDE] p-5 2xl:p-6 w-full items-center mb-6 rounded gap-7 sm:gap-0 sm:justify-between">
<p class="text-center sm:text-left text-xl sm:text-sm md:text-lg lg:text-lg xl:text-xl 2xl:text-2xl min-[1920px]:text-3xl sm:w-7/12 lg:w-9/12">

<?php
echo get_field('descripcion_credito_integral')?the_field('descripcion_credito_integral'):"Crédito Integral CUFRISA (pdf)"
?>

 </p>
 <a href="<?php echo get_field('liga_credito_integral')?the_field('liga_credito_integral'):get_template_directory_uri().'/assets/pdf/Promocion Credito Integral CUFRISA 4.pdf' ?>" 
    target="_blank" 
    aria-label="Enlace para ir al archivo de credito integral"  
    class="flex sm:flex-row justify-center bg-[#263650] w-11/12 sm:w-4/12 xl:w-3/12 text-center text-white text-xl sm:text-sm md:text-lg lg:text-xl xl:text-xl 2xl:text-2xl min-[1920px]:text-3xl py-4 2xl:py-6 rounded hover:bg-blue-600 transition-colors duration-300">
  Descargar
  <img src="<?php echo get_template_directory_uri(); ?>/public/descargas.svg" 
       loading="lazy" 
       alt="Icono descargar" 
       class="ml-2 sm:w-[17px] md:w-[20px] lg:w-[21px] xl:w-[24px] 2xl:w-[30px]"/>
  </a>
</article>


<h3 class="text-center text-2xl sm:max-md:text-lg xl:text-xl 2xl:text-2xl min-[1920px]:text-3xl font-bold tracking-wide mb-4 sm:mb-0 ">
<?php
echo get_field('reglas_checklist_desarrolladores')?the_field('reglas_checklist_desarrolladores'):"Reglas de Operación y Check List para Desarrolladores"
?>
</h3>

<div class="w-full">
<article class="flex flex-col sm:flex-row bg-[#DEDEDE] p-5 2xl:p-6 w-full items-center rounded gap-7 sm:gap-0 mb-8 sm:mb-0 sm:justify-between">
<p class="text-center sm:text-left text-xl sm:text-sm md:text-lg lg:text-lg xl:text-xl 2xl:text-2xl min-[1920px]:text-3xl sm:w-7/12 lg:w-9/12">

<?php     
 echo get_field('descripcion_reglas_de_operacion')?the_field('descripcion_reglas_de_operacion'):"Reglas de Operación Crédito Integral Cufrisa (pdf)"
?>

 </p>
 <a href="<?php echo get_field('liga_reglas_de_operacion')?the_field('liga_reglas_de_operacion'):get_template_directory_uri().'/assets/pdf/ANEXO A - Reglas de Operacion credito integral.pdf' ?>" 
    target="_blank" 
    aria-label="Enlace para ir al archivo de las reglas de operacion"  
    class="flex sm:flex-row justify-center bg-[#263650] w-11/12 sm:w-4/12 xl:w-3/12 text-center text-white text-xl sm:text-sm md:text-lg lg:text-xl xl:text-xl 2xl:text-2xl min-[1920px]:text-3xl py-4 2xl:py-6 rounded hover:bg-blue-600 transition-colors duration-300">
  Descargar
  <img src="<?php echo get_template_directory_uri(); ?>/public/descargas.svg" 
       loading="lazy" 
       alt="Icono descargar" 
       class="ml-2 sm:w-[17px] md:w-[20px] lg:w-[21px] xl:w-[24px] 2xl:w-[30px]"/>
  </a>
</article>

<article class="flex flex-col sm:flex-row bg-white p-5 2xl:p-6 w-full items-center rounded gap-7 sm:gap-0 sm:justify-between">
<p class="text-center sm:text-left text-xl sm:text-sm md:text-lg lg:text-lg xl:text-xl 2xl:text-2xl min-[1920px]:text-3xl sm:w-7/12 lg:w-9/12">
<?php
 echo get_field('descripcion_checklist')?the_field('descripcion_checklist'):"Check List Crédito Integral (pdf)"
?>

</p>
 <a href="<?php echo get_field('liga_checklist')?the_field('liga_checklist'):get_template_directory_uri().'/assets/pdf/Check List Credito Integral 1.0.pdf' ?>" 
    target="_blank"
    aria-label="Enlace para ir al archivo de Check List"  
    class="flex sm:flex-row justify-center bg-[#263650] w-11/12 sm:w-4/12 xl:w-3/12 text-center text-white text-xl sm:text-sm md:text-lg lg:text-xl xl:text-xl 2xl:text-2xl min-[1920px]:text-3xl py-4 2xl:py-6 rounded hover:bg-blue-600 transition-colors duration-300">
  Descargar
  <img src="<?php echo get_template_directory_uri(); ?>/public/descargas.svg" 
       loading="lazy" 
       alt="Icono descargar" 
       class="ml-2 sm:w-[17px] md:w-[20px] lg:w-[21px] xl:w-[24px] 2xl:w-[30px]"/>
  </a>
</article>

</div>

<br/>
<div>

<h2 class="bg-[#1D3750] text-white text-[1.575rem] text-center sm:text-3xl xl:text-3xl 2xl:text-4xl min-[1920px]:text-5xl font-extrabold lg:font-bold tracking-wide mb-0 w-full py-4 rounded-t-xl">
<?php

echo get_field('titulo_cuerpo_linea')?the_field('titulo_cuerpo_linea'):"PROYECTOS REALIZADOS";

?>
</h2>
<div class="flex flex-col sm:block sm:columns-2 lg:columns-3 xl:columns-4 mb-16 bg-[#DEDEDE] p-9 pb-8 rounded-b-2xl">

<?php
 if(empty($proyectos))
 {
?>

<img src="<?php echo get_field('')?the_field(''):get_template_directory_uri().'/public/proyecto.webp' ?>" 
     alt="Proyecto 1" 
     loading="lazy" 
     class="mb-4 rounded-2xl"/>

 <img src="<?php echo get_field('')?the_field(''):get_template_directory_uri().'/public/proyecto2.webp' ?>" 
     alt="Proyecto 2" 
     loading="lazy" 
     class="mb-4 rounded-2xl"/>

<img src="<?php echo get_field('')?the_field(''):get_template_directory_uri().'/public/proyecto3.webp' ?>" 
     alt="Proyecto 3" 
     loading="lazy" 
     class="mb-4 rounded-2xl"/>

<img src="<?php echo get_field('')?the_field(''):get_template_directory_uri().'/public/proyecto4.webp' ?>" 
     alt="Proyecto 4" 
     loading="lazy" 
     class="mb-4 rounded-2xl"/>

<img src="<?php echo get_field('')?the_field(''):get_template_directory_uri().'/public/proyecto5.webp' ?>" 
     alt="Proyecto 5" 
     loading="lazy" 
     class="mb-4 rounded-2xl"/>

<img src="<?php echo get_field('')?the_field(''):get_template_directory_uri().'/public/proyecto6.webp' ?>" 
     alt="Proyecto 6" 
     loading="lazy" 
     class="mb-4 rounded-2xl"/>

<img src="<?php echo get_field('')?the_field(''):get_template_directory_uri().'/public/proyecto6.webp' ?>" 
     alt="Proyecto 6" 
     loading="lazy" 
     class="mb-4 rounded-2xl"/>
     
<img src="<?php echo get_field('')?the_field(''):get_template_directory_uri().'/public/proyecto7.webp' ?>" 
     alt="Proyecto 6" 
     loading="lazy" 
     class="mb-4 rounded-2xl"/>

<img src="<?php echo get_field('')?the_field(''):get_template_directory_uri().'/public/proyecto8.webp' ?>" 
     alt="Proyecto 6" 
     loading="lazy" 
     class="mb-4 rounded-2xl"/>

<img src="<?php echo get_field('')?the_field(''):get_template_directory_uri().'/public/proyecto9.webp' ?>" 
     alt="Proyecto 6" 
     loading="lazy" 
     class="mb-4 rounded-2xl"/>

<img src="<?php echo get_field('')?the_field(''):get_template_directory_uri().'/public/proyecto10.webp' ?>" 
     alt="Proyecto 6" 
     loading="lazy" 
     class="mb-4 rounded-2xl"/>

<img src="<?php echo get_field('')?the_field(''):get_template_directory_uri().'/public/proyecto12.webp' ?>" 
     alt="Proyecto 6" 
     loading="lazy" 
     class="mb-4 rounded-2xl"/>

<img src="<?php echo get_field('')?the_field(''):get_template_directory_uri().'/public/proyecto13.webp' ?>" 
     alt="Proyecto 6" 
     loading="lazy" 
     class="mb-4 rounded-2xl"/>

<img src="<?php echo get_field('')?the_field(''):get_template_directory_uri().'/public/proyecto14.webp' ?>" 
     alt="Proyecto 6" 
     loading="lazy" 
     class="mb-4 rounded-2xl"/>

<img src="<?php echo get_field('')?the_field(''):get_template_directory_uri().'/public/proyecto15.webp' ?>" 
     alt="Proyecto 6" 
     loading="lazy" 
     class="mb-4 rounded-2xl"/>

<img src="<?php echo get_field('')?the_field(''):get_template_directory_uri().'/public/proyecto17.webp' ?>" 
     alt="Proyecto 6" 
     loading="lazy" 
     class="mb-4 rounded-2xl"/>
     
<img src="<?php echo get_field('')?the_field(''):get_template_directory_uri().'/public/proyecto18.webp' ?>" 
     alt="Proyecto 6" 
     loading="lazy" 
     class="mb-4 rounded-2xl"/>

<?php
 }
 else
 {
  foreach($proyectos as $proyecto)
  {

   ?>
   <img src="<?php echo $proyecto['guid'] ?>" 
     alt="Proyecto 6" 
     loading="lazy" 
     class="sm:w-1/3 object-contain h-56"/>

   <?php 
  }
   ?>
<?php
 }
?>
</div>

</div>



</section>


</div>




</main>

<?php
get_footer();
?>
