<?php
/* Template Name: Nosotros */
get_header(); 

?>

<main>

        <div class="flex flex-col">

    <!-- Primer seccion (Hero) -->


    <section id="hero" 
             class="relative w-full min-h-screen bg-cover bg-center bg-black text-white flex items-center justify-center " 
             style="background-image: url('<?php echo get_field("imagen_nosotros")?the_field("imagen_nosotro"):get_template_directory_uri().'/public/nosotros.webp' ?>')">
    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/80 to-black/40 flex items-center ">
    
    <header class="flex flex-col justify-center h-screen md:gap-0 xl:gap-7 md:mb-0 xl:mb-5 sm:pt-16 lg:pt-20 xl:max-2xl:pt-32 px-14 sm:px-2 lg:px-5 xl:px-14">
     <div class="flex flex-col gap-10 sm:gap-2 2xl:gap-8 items-center pb-24 sm:pb-0">

     <img src="<?php echo get_template_directory_uri().'/public/logo.webp' ?>" 
          loading="lazy" 
          alt="Logo" 
          class="w-5/12 sm:hidden" />

     <h1 class="text-4xl lg:text-xl xl:text-2xl 2xl:text-3xl text-center font-semibold sm:font-normal mb-5 2xl:mb-1 ">
      <?php
       echo get_field('titular_nosotros')?the_field('titular_nosotros'):"TU BENEFICIO ES NUESTRO PUNTO DE PARTIDA";
      ?>
      </h1>
      <h2 class="hidden sm:block text-4xl lg:text-3xl xl:text-4xl 2xl:text-5xl text-center font-bold mb-5 2xl:mb-2">
      <?php
       echo get_field('subtitulo_nosotros')?the_field('subtitulo_nosotros'):"CUFRISA";
       ?>
      </h2>
     </div>
    
    <div class="hidden sm:grid grid-cols-1 gap-0 sm:grid-cols-3 lg:gap-1 ">
    <div>
              <div
                class="flex flex-col items-center justify-center lg:px-4 lg:py-8 2xl:py-1 space-y-4">
                   <img src="<?php echo get_field('icono_mision')?the_field('icono_mision'):get_template_directory_uri().'/public/flag.svg' ?>" 
                        loading="lazy" 
                        alt="Icono mision"/> 
                <h3 class="sm:text-base md:text-sm lg:text-base xl:text-xl 2xl:text-xl font-semibold text-center">
                  <?php
                  echo get_field('titulo_mision')?the_field('titulo_mision'):"Misión";
                  ?>
                </h3>
                <p class="text-base sm:text-[0.68rem] lg:text-xs xl:text-base 2xl:text-lg font-normal text-center text-[#B0B0B0] sm:max-lg:leading-4 2xl:leading-6">
                <?php
                echo get_field('texto_mision')?the_field('texto_mision'):"Ofrecer a nuestros clientes enfocados al giro inmobiliario, la mejor opción para que brinden viviendas dignas y de calidad a la sociedad mexicana otorgándoles seguridad y certeza tanto jurídica y financiera a través de servicios personalizados.";
                ?>
                </p>
              </div>
            </div>


            <div>
              <div
                class="flex flex-col items-center justify-center sm:px-0 lg:px-4 lg:py-8 2xl:py-1 space-y-4">
                  <img src="<?php echo get_field('icono_vision')?the_field('icono_vision'):get_template_directory_uri().'/public/target.svg' ?>" 
                       loading="lazy" 
                       alt="Icono vision"/> 
                <h3 class="text-xl sm:text-sm md:text-base xl:text-xl  2xl:text-xl font-semibold text-center">
                  <?php
                  echo get_field('titulo_vision')?the_title('titulo_vision'):"Visión";
                  ?>
                </h3>
                <p class="text-base sm:text-[10px] lg:text-xs xl:text-base 2xl:text-lg font-normal text-center text-[#B0B0B0] sm:max-lg:leading-4 2xl:leading-6">
                <?php
                echo get_field('texto_vision')?the_field('texto_vision'):"Consolidarnos como uno de los mejores fiduciarios, así como la mejor entidad administradora y financiera a nivel nacional, con capital humano suficiente y capacidad operativa para controlar y administrar diversos productos financieros e inmobiliarios, siempre tomando en consideración la consolidación del patrimonio de la empresa para crecer con pasos firmes y sólidos, garantizando la operación de Cufrisa y seguridad de nuestros clientes."

                ?>

                </p>
              </div>
            </div>

            <div>
              <div
                class="flex flex-col items-center justify-center lg:px-4 lg:py-8 2xl:py-1 space-y-4">
                  <img src="<?php echo get_field('icono_valores')?the_field('icono_valores'):get_template_directory_uri().'/public/groups.svg' ?>" 
                       loading="lazy" 
                       alt="Icono valores"/> 
                <h3 class="text-xl sm:text-sm md:text-base xl:text-xl 2xl:text-xl font-semibold text-center">
                  <?php
                  echo get_field('titulo_valores')?the_field('titulo_valores'):"Valores";
                  ?>
                </h3>
                <p class="text-base sm:text-[0.68rem] lg:text-xs  xl:text-base 2xl:text-lg font-normal text-center text-[#B0B0B0] sm:max-lg:leading-4 2xl:leading-6">

                <?php
                echo get_field('texto_valores')?the_field('texto_valores'):"Transparencia, Excelencia, Responsabilidad, Pasión, Resolución y Honestidad.";

                ?>

                </p>
              </div>
            </div>
</div>


    </header>
    </div>
    </section>

    <!-- Contenido -->

    

    <section class="relative w-full min-h-screen flex flex-col text-black bg-[#E9E9E9] px-4 sm:px-8 md:px-11 lg:px-20 xl:px-36 pt-9 sm:pt-20">
    <h2 class="sm:hidden text-[#1D3750]  text-center text-4xl font-extrabold mb-9 tracking-wide">CUFRISA</h2>

    <div class="grid sm:hidden grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-1 ">
     <div class="bg-[#1D3750] rounded-xl">
              <div
                class="flex flex-col items-center justify-center px-4 py-8 space-y-4">
                  <img src="<?php echo get_template_directory_uri(); ?>/public/flag.svg" 
                       loading="lazy" 
                       alt="Icono mision"/> 
                <h3 class="text-white text-xl sm:text-base md:text-lg xl:text-xl 2xl:text-2xl font-semibold text-center">Misión</h3>
                <p class="text-base 2xl:text-xl font-extralight text-center text-white">

                <?php
                echo get_field('texto_mision')?the_field('texto_mision'):"Ofrecer a nuestros clientes enfocados al giro inmobiliario, la mejor opción para que brinden viviendas dignas y de calidad a la sociedad mexicana otorgándoles seguridad y certeza tanto jurídica y financiera a través de servicios personalizados."

                ?>
                
                </p>
              </div>
            </div>


            <div class="bg-[#1D3750] rounded-xl">
              <div
                class="flex flex-col items-center justify-center px-4 py-8 space-y-4">
                  <img src="<?php echo get_template_directory_uri(); ?>/public/target.svg" 
                       loading="lazy" 
                       alt="Icono vision"/> 
                <h3 class="text-xl 2xl:text-2xl font-semibold text-center text-white">Visión</h3>
                <p class="text-base 2xl:text-xl font-extralight text-center text-white">
                <?php
                echo get_field('texto_vision')?the_field('texto_vision'):"Consolidarnos como uno de los mejores fiduciarios, así como la mejor entidad administradora y financiera a nivel nacional, con capital humano suficiente y capacidad operativa para controlar y administrar diversos productos financieros e inmobiliarios, siempre tomando en consideración la consolidación del patrimonio de la empresa para crecer con pasos firmes y sólidos, garantizando la operación de Cufrisa y seguridad de nuestros clientes."
                ?>
                </p>
              </div>
            </div>

            <div class="bg-[#1D3750] rounded-xl">
              <div
                class="flex flex-col items-center justify-center px-4 py-8 space-y-4">
                  <img src="<?php echo get_template_directory_uri(); ?>/public/groups.svg" 
                       loading="lazy" 
                       alt="Icono valores"/> 
                <h3 class="text-xl 2xl:text-2xl font-semibold text-center text-white">Valores</h3>
                <p class="text-base 2xl:text-xl font-extralight text-center text-white">
                  
                <?php
                echo get_field('texto_valores')?the_field('texto_valores'):"Transparencia, Excelencia, Responsabilidad, Pasión, Resolución y Honestidad."
                ?>

                </p>
              </div>
            </div>
</div>



    <div class="text-center sm:text-left w-full my-7 sm:my-0  sm:mb-3">
     <h3 class="font-bold text-3xl sm:text-2xl lg:text-3xl 2xl:text-5xl min-[1920px]:text-6xl ">
      <?php
      echo get_field('titulo_cuerpo_nosotros')?the_field('titulo_cuerpo_nosotros'):"Nosotros"
      ?>
    </h3>
    </div>
    <p class="text-[#7B7B7B] text-xl sm:text-base lg:text-lg xl:text-lg 2xl:text-xl min-[1920px]:text-2xl md:w-11/12 xl:w-10/12 text-left  sm:text-justify font-normal">
<?php
echo get_field('parrafo_nosotros')?the_field('parrafo_nosotros'):
"    SOFOM fundada en enero de 2017, damos soluciones en giros patrimoniales e inmobiliarios, como entidad administradora autorizada INFONAVIT, con esto podemos validar y administrar Crédito Integral Línea III, para ofrecer viviendas a grupos de trabajadores sin que las desarrolladoras se descapitalicen ni tengan riesgo comercial, también ofrecemos Fideicomisos de Garantía, con los cuales los desarrolladores pueden hacer uso de terrenos sin necesidad adquirirlos antes de desarrollar quedando estos bienes protegidos y con garantía de pago, también con este producto podemos dar garantía a diferentes fines dando seguridad jurídica y financiera, sumado a lo anterior también ofrecemos Credicufrisa el cual es un crédito pensado para personas morales dedicadas a desarrollos habitacionales preferentemente administrados por CUFRISA y con el cual puedan hacer frente a los múltiples gastos que conlleva la construcción; logramos esto ya que estamos autorizados y contamos con una Oficial de cumplimiento certificado por la Comisión Nacional Bancaria y de Valores (CNBV), también autorizados por la Comisión Nacional para la Protección y Defensa de los Usuarios de Servicios Financieros (CONDUSEF), regulados por el Buró de Entidades Financieras y estamos calificados desde el año 2018 por HR Ratings Credit Rating Agency con perspectiva estable y en 2022 la calificación aumentó al alza.
    <br/>
    Lo anterior nos permite dar certeza de que nuestros procesos cumplen y que somos una compañía estable en la que nuestros clientes pueden confiar. Entidad administradora Línea 3 infonavit.
    "
?>
</p>
    <hr class="bg-[#7B7B7B] border-0 border-solid h-1 my-14"/>

  <!--Calificacion -->

    <section class="mb-14">
     <img src="<?php echo get_field('imagen_calificacion')?the_field('imagen_calificacion'): get_template_directory_uri().'/public/calificados.webp' ?>" 
          alt="Calificacion HR AM3-" 
          loading="lazy" 
          class="w-full"></img>
     <article class="bg-[#263650] text-white gap-4 pb-8 pt-5 sm:pt-9 rounded-b-xl">
      <h2 class="text-[1.6rem] sm:text-2xl md:text-3xl lg:text-4xl 2xl:text-5xl min-[1920px]:text-6xl font-bold tracking-wider text-center">
        <?php
        echo get_field('titulo_contenedor_calificacion')?the_field('titulo_contenedor_calificacion'):"CALIFICACIÓN";
        ?>
      </h2>
      <div class="flex flex-col justify-center items-center gap-8">
       <p class=" font-light text-sm sm:text-sm lg:text-lg xl:text-xl 2xl:text-2xl min-[1920px]:text-3xl text-center sm:w-10/12 xl:w-7/12 mt-4 sm:mt-10 px-3">
        <?php
        echo get_field('parrafo_contenedor_calificacion')?the_field('parrafo_contenedor_calificacion'):"CUFRISA cuenta con una calificación AM3- con perspectiva estable por parte de HR Ratings Credit Rating Agency. Entidad administradora Línea 3 infonavit fideicomiso"
        ?>
       </p>
       <a href="https://www.hrratings.com/rating_detail.xhtml?rel=10565" 
          aria-label="Enlace para ir a la pagina que muestra la calificacion dada a cufrisa por HR Ratings"
          class="bg-white text-[#263650] text-2xl 2xl:text-3xl min-[1920px]:text-4xl rounded py-4 xl:py-5 2xl:py-10 px-9 sm:px-14 2xl:px-20">
        <?php
        echo get_field('texto_boton_calificacion')?the_field('texto_boton_calificacion'):"Consultar calificación"
        ?>
       </a>
      </div>
     </article>
    </section>


    </section>

  <!--Pie de pagina -->

    </div>

</main>

<?php
get_footer();
?>
