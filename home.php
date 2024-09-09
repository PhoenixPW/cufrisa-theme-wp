<?php
/* Template Name: Inicio */
get_header(); 

?>



<main>

<?php //echo the_field("slider_1")?>
<div class="flex flex-col">


<section id="hero" class="relative w-full min-h-screen bg-cover bg-center bg-black text-white flex items-center justify-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/public/inicio.png')">
<div class="absolute inset-0 bg-black bg-opacity-60 flex  items-right justify-center">

<div class="flex flex-col-reverse sm:flex-row gap-10 lg:gap-5 xl:gap-8 text-center sm:text-right pb-20 sm:pb-0 sm:mr-20 w-11/12 items-center justify-center sm:justify-end ">
  <h1 class="text-4xl lg:text-4xl xl:text-6xl 2xl:text-6xl font-bold tracking-wider">
    <?php
     echo get_field("titular_de_la_pagina")?the_field("titular_de_la_pagina"):"SOLUCIONES DE <br/> FINANCIAMIENTO INMOBILIARIO";
    ?>
  </h1>
  <img src="<?php echo get_template_directory_uri(); ?>/public/logo.webp" alt="Logo" loading="lazy" class="h-32 lg:h-32 xl:h-44 2xl:h-52" />
</div>

<div class="hidden sm:flex absolute inset-0 flex-col justify-end ">
        <article class="bg-black bg-opacity-40 w-full sm:h-[80px] md:h-[86px] lg:h-[96px] xl:h-[110px] 2xl:h-[115px] text-center sm:text-sm md:text-base lg:text-lg xl:text-xl 2xl:text-2xl flex justify-center items-center">
         <p class="w-1/2 sm:max-lg:w-8/12">
          <?php
          
          echo get_field("subtitulo")?the_field("subtitulo"):"ENTIDAD ADMINISTRADORA AUTORIZADA POR INFONAVIT E INSTITUCIÓN FIDUCIARIA";

          ?>
         </p>
        </article>
      </div>




</div>
<div class='flex'>
  
</div>
</section>




<section class="relative w-full min-h-screen flex flex-col items-center justify-around text-black bg-[#E9E9E9]">
  <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper ">
      <div class="swiper-slide ">
        <img src="<?php echo get_field("slider_1")?the_field("slider_1"):get_template_directory_uri().'/public/slider.png' ?>" 
             loading="lazy" 
             alt="Imagen Slider"/>
      </div>
      <div class="swiper-slide ">
        <img src="<?php echo get_field("slider_2")?the_field("slider_2"):get_template_directory_uri().'/public/slider2.webp' ?>" 
             loading="lazy" 
             alt="Imagen 2 Slider"/>
      </div>
      <div class="swiper-slide ">
        <img src="<?php echo get_field("slider_3")?the_field("slider_3"):get_template_directory_uri().'/public/slider3.webp'?>" 
             loading="lazy" 
             alt="Imagen 3 Slider"/>
      </div>

    </div>
    <div class="swiper-pagination" ></div>
  </div>

<h2 class="text-3xl md:text-3xl lg:text-3xl xl:text-4xl 2xl:text-6xl font-extrabold sm:font-bold pb-3 pt-16 text-center">NUESTROS SERVICIOS</h2>
      
<section class="flex flex-wrap">
        <article class="lg:pt-12 pt-6 w-full sm:w-4/12 px-4 text-center">
          <div class="relative flex flex-col min-w-0 break-words bg-transparent w-full rounded-lg ">
            <div class="px-4 py-5 flex-auto justify-center w-full items-center">
              <img src="<?php echo get_template_directory_uri(); ?>/public/Ellipse 2.png" 
                   loading="true" 
                   alt="Servicio 1" 
                   class="text-white text-center inline-flex items-center justify-center w-48 h-48 sm:w-36 md:w-40 lg:w-44 xl:w-48 sm:h-36 md:h-40 lg:h-44 xl:h-48 mb-5 shadow-lg rounded-full bg-red-400 bg-cover bg-center"/>
                
              <h6 class="text-2xl sm:text-lg lg:text-xl xl:text-2xl 2xl:text-4xl font-bold">
               <?php

                echo get_field("servicio_1")?the_field("servicio_1"):"LÍNEA III DE INFONAVIT";
               ?>
              
              </h6>
              <div class="flex items-center justify-center">
               <p class="mt-2 mb-4 text-[#7B7B7B] font-bold text-lg sm:text-sm lg:text-base xl:text-lg 2xl:text-2xl sm:w-12/12 xl:w-10/12 leading-6 ">
                <?php
                 echo get_field("descripcion_servicio_1")?the_field("descripcion_servicio_1"):"Con la Línea 3 de Infonavit construye desarrollos inmobiliarios con estos beneficios: Financiamos hasta el 1​00% de la construcción. 0% de intereses con el 100% del recurso desde el inicio. Sin riesgo comercial."
                ?>
               </p>
              </div>
            </div>
          </div>
        </article>

        <article class="w-full sm:w-4/12 px-4 text-center">
          <div class="relative flex flex-col min-w-0 break-words bg-transparent w-full rounded-lg">
            <div class="px-4 py-5 flex-auto">
              <img src="<?php echo get_template_directory_uri(); ?>/public/Ellipse 1.png" 
                   loading="lazy" 
                   alt="Servicio 2" 
                   class="text-white text-center inline-flex items-center justify-center w-48 h-48 sm:w-36 md:w-40 lg:w-44 xl:w-48 sm:h-36 md:h-40 lg:h-44 xl:h-48 mb-5 shadow-lg rounded-full bg-blue-400 bg-cover bg-center" />
              <h6 class="text-2xl sm:text-lg lg:text-xl xl:text-2xl 2xl:text-4xl font-bold">
                <?php
                  echo get_field("servicio_2")?the_field("servicio_2"):"CREDICUFRISA";
                ?>
              </h6>
              <p class="mt-2 mb-4 text-[#7B7B7B] font-bold text-lg sm:text-sm lg:text-base xl:text-lg 2xl:text-2xl leading-6">
              <?php
               echo get_field("descripcion_servicio_2")?the_field("descripcion_servicio_2"):"Crédito pensado para el impulso de desarrollos arquitectónicos y habitacionales.";
              ?>


              </p>
            </div>
          </div>
        </article>

        <article class="pt-6 w-full sm:w-4/12 px-4 text-center">
          <div class="relative flex flex-col min-w-0 break-words bg-transparent w-full rounded-lg">
            <div class="px-4 py-5 flex-auto">
              <img src="<?php echo get_template_directory_uri(); ?>/public/Ellipse 3.png" 
                   loading="lazy" 
                   alt="Servicio 3" 
                   class="text-white text-center inline-flex items-center justify-center w-48 h-48 sm:w-36 md:w-40 lg:w-44 xl:w-48 sm:h-36 md:h-40 lg:h-44 xl:h-48 mb-5 shadow-lg rounded-full bg-green-400 bg-cover bg-center" />
              <h6 class="text-2xl sm:text-lg lg:text-xl xl:text-2xl 2xl:text-4xl font-bold">
                <?php
                echo get_field("servicio_3")?the_field("servicio_3"):"FIDEICOMISO DE GARANTÍA";
                ?>
              </h6>
              <p class="mt-2 mb-4 text-[#7B7B7B] font-bold text-lg sm:text-sm lg:text-base xl:text-lg 2xl:text-2xl leading-6">
              <?php
               echo get_field("descripcion_servicio_3")?the_field("descripcion_servicio_3"):"Creación de un contrato por medio del cual se aportan bienes o derechos a CUFRISA, para su administración conforme a los fines del contrato y entrega del recurso a los beneficiarios, protegiendo jurídicamente a todas las partes."
              ?>

              </p>
            </div>
          </div>
        </article>
      </section>

      <section class="mb-12 sm:mb-0">
       <div class="max-w-screen-xl mx-auto px-4 md:px-8">
       <h3 class="font-bold text-2xl sm:text-base lg:text-lg xl:text-lg 2xl:text-2xl text-gray-600 text-center">
        ESTAMOS REGULADOS Y/O AUTORIZADOS POR:

       </h3>

       <div class="mt-6">
        <ul class="flex flex-col sm:flex-row gap-x-10 gap-y-6 flex-wrap items-center justify-center md:gap-x-10">

          <img src="<?php echo get_field("logo_ra_1")?the_field("logo_ra_1"):get_template_directory_uri().'/public/1.jpg' ?>" 
               loading="lazy" 
               alt="Logo de institucion" 
               class="w-20 sm:w-14 lg:w-16 2xl:w-28  rounded-lg"/>
          <img src="<?php echo get_field("logo_ra_2")?the_field("logo_ra_2"):get_template_directory_uri().'/public/2.png' ?>" 
               loading="lazy" 
               alt="Logo de institucion" 
               class=" w-20 sm:w-14 lg:w-16 2xl:w-28  rounded-lg"/>
          <img src="<?php echo get_field("logo_ra_3")?the_field("logo_ra_3"):get_template_directory_uri().'/public/3.jpg' ?>" 
               loading="lazy" 
               alt="Logo de institucion" 
               class=" w-20 sm:w-14 lg:w-16 2xl:w-20  rounded-lg"/>
          <img src="<?php echo get_field("logo_ra_4")?the_field("logo_ra_4"):get_template_directory_uri().'/public/4.jpg' ?>" 
               loading="lazy" 
               alt="Logo de institucion"
               class=" w-20 sm:w-14 lg:w-16 2xl:w-20  rounded-lg"/>
          <img src="<?php echo get_field("logo_ra_5")?the_field("logo_ra_5"):get_template_directory_uri().'/public/5.png' ?>" 
               loading="lazy" 
               alt="Logo de institucion" 
               class=" w-20 sm:w-14 lg:w-16 2xl:w-28  rounded-lg"/>
        </ul>

       </div>

       </div>
      </section>
      
      <div class="flex flex-col w-full items-center sm:items-end sm:pr-14 sm:max-lg:pt-5 font-bold text-2xl sm:text-base lg:text-lg xl:text-lg 2xl:text-2xl gap-10 sm:gap-5 mb-14 sm:mb-9">
        <h3>CALIFICADOS POR:</h3>
        <img src="<?php echo get_field("logo_hr")?the_field("logo_hr"):get_template_directory_uri().'/public/calificacion.png' ?>" 
             loading="lazy" 
             class="sm:w-32 lg:w-36 xl:w-36 2xl:w-44"></img>
      </div>

      <?php
      ?>




</section>



</div>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      spaceBetween:20,
      autoplay:{
       delay: 1000,
      },
      coverflowEffect: {
        rotate: 0,
        stretch: -60,
        depth: 20,
        modifier: 1,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable:true
      },
    });


    
  </script>


</main>
<?php
get_footer();
?>

