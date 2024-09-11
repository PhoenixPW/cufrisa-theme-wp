<?php
/* Template Name: Contacto */
get_header(); 

?>

<?php 


?>


<main>
  <?php 

  $formulario_enviado=false;
  $envio_correcto=false;
  $mensaje_envio_exitoso = "Gracias por tu mensaje. Nos pondremos en contacto contigo pronto.";
  $mensaje_envio_fallido = "Lo sentimos, hubo un error al enviar tu mensaje. Por favor, inténtalo de nuevo más tarde.";
   if ($_SERVER['REQUEST_METHOD'] === 'POST'){// && isset($_POST['enviar_formulario'])) {
    // Recoge y sanitiza los datos del formulario
    $nombre = sanitize_text_field($_POST['nombre']);
    $correo = sanitize_email($_POST['correo']);
    $telefono = sanitize_text_field($_POST['telefono']);
    $mensaje = sanitize_textarea_field($_POST['mensaje']);
    $formulario_enviado=true;
    
    $to = 'bros_z1@hotmail.com';
    $subject = 'Nuevo mensaje desde el formulario de contacto';
    $body = "Nombre: $nombre\nCorreo Electrónico: $correo\nTeléfono:$telefono\nMensaje:\n$mensaje";
  
    $headers = "From: $correo\r\n";
    $headers .= "Reply-To: $correo\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
  
  
    if (mail($to, $subject, $body, $headers)) {
        $envio_correcto=true;
        echo '<p>Gracias por tu mensaje. Nos pondremos en contacto contigo pronto.</p>';
    } else {
        echo '<p>Lo sentimos, hubo un error al enviar tu mensaje. Por favor, inténtalo de nuevo más tarde.</p>';
    }
  }
    ?>

        <div class="flex flex-col">


    <section id="hero" 
             class="relative w-full min-h-screen bg-cover bg-center bg-black text-white flex items-center justify-left" 
             style="background-image: url('<?php echo get_field('imagen_contacto')?the_field('imagen_contacto'):get_template_directory_uri().'/public/contacto.webp' ?>')">
    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center sm:justify-start sm:max-xl:px-8 xl:px-12 sm:pt-16 xl:pl-20 ">
    
      <div class="flex flex-col gap-3 2xl:gap-5 text-left sm:w-7/12 break-words items-center sm:items-stretch pb-24 sm:pb-0 ">

      <img src="<?php echo get_template_directory_uri(); ?>/public/logo.webp" 
           loading="lazy" 
           alt="Logo" 
           class="w-7/12 sm:hidden" />

      <h1 class="sm:hidden text-6xl font-bold">
        <?php
        echo get_field('titular_contacto_movil')?the_field('titular_contacto_movil'):"Contacto";
        ?>
      </h1>
       <h1 class="hidden sm:block text-4xl sm:text-2xl lg:text-3xl xl:text-4xl 2xl:text-5xl font-bold mb-4 tracking-wider">
        <?php
        echo get_field('titular_contacto')?the_field('titular_contacto'):"Hagamos un trato";
        ?>

        </h1>
        
        <div class="hidden sm:block">
        <p class="text-xl sm:text-xs lg:text-base xl:text-xl 2xl:text-xl font-light w-7/12 leading-6 lg:mb-5 2xl:mb-10">

        <?php

        echo get_field('descripcion_hero')?the_field('descripcion_hero'):"
        Conocer las dudas de nuestros clientes es muy importante para nosotros, te invitamos a llenar nuestro formulario para solicitar información sobre los productos y servicios que ofrecemos.
<br/>
<br/>
        A la brevedad posible, uno de nuestros representantes atenderá la solicitud.
        "
        ?>

        </p>

        <ul class="text-lg sm:text-xs lg:text-sm xl:text-lg 2xl:text-lg font-light mt-2 flex flex-col gap-5 mb-6">
          <li class="flex gap-6 items-center">
          <div class="flex justfiy-center items-center sm:w-7 md:w-8 lg:w-9 xl:w-10 sm:h-7 md:h-8 lg:h-9 xl:h-10 rounded-full bg-white">
             <img src="<?php echo get_field('icono_localizacion')?the_field('icono_localizacion'):get_template_directory_uri().'/public/localizacion.svg' ?>" 
                  loading="lazy" 
                  alt="Icono localizacion" 
                  class=" md:w-7 lg:w-7 xl:w-8 2xl:w-9 sm:pl-1 md:pl-1 lg:pl-2 xl:pl-2 2xl:pl-1"/>
            </div>
            <p class="w-7/12 sm:leading-4 lg:leading-5 xl:leading-6">

            <?php
             echo get_field('direccion')?the_field('direccion'):"Calle 15 Sur 502 A, 72764 Colonia Plazuelas de Zerezotla, San Pedro Cholula, Puebla, Mexico"
            ?>
            </p>
          </li>

          <li class="flex gap-6 items-center">
            <div class="flex justfiy-center items-center sm:w-7 md:w-8 lg:w-9 xl:w-10 sm:h-7 md:h-8 lg:h-9 xl:h-10 rounded-full bg-white">
             <img src="<?php echo get_field('icono_telefono')?the_field('icono_telefono'):get_template_directory_uri().'/public/telefono.svg' ?>" 
                  loading="lazy" 
                  alt="Icono telefono" 
                  class="md:w-7 lg:w-7 xl:w-8 2xl:w-9 sm:pl-1 md:pl-1 lg:pl-2 xl:pl-2 2xl:pl-1"/>
            </div>
            <p>
            <?php
             echo get_field('telefono')?the_field('telefono'):"(222) 1970977";
            ?>
             
            </p>
          </li>

          <li class="flex gap-6 items-center">
          <div class="flex justfiy-center items-center sm:w-7 md:w-8 lg:w-9 xl:w-10 sm:h-7 md:h-8 lg:h-9 xl:h-10 rounded-full bg-white">
             <img src="<?php echo get_field('icono_horario')?the_field('icono_horario'):get_template_directory_uri().'/public/calendario.svg' ?>" 
                  loading="lazy" 
                  alt="Icono calendario" 
                  class="md:w-7 lg:w-7 xl:w-8 2xl:w-9 sm:pl-1 md:pl-1 lg:pl-2 xl:pl-2 2xl:pl-1"/>
            </div>
            <p>

             <?php
             echo get_field('horario')?the_field('horario'):"Lunes a Viernes de 9:00 am a 06:00 pm";
             ?>
             
            </p>
          </li>
        </ul>

        <a href="https://api.whatsapp.com/send/?phone=522215983528&text&type=phone_number&app_absent=0" 
           class="flex gap-4 bg-white text-black lg:text-lg rounded py-2 sm:w-9/12 lg:w-6/12 xl:w-7/12 2xl:w-6/12 items-center justify-center">
            <img src="<?php echo get_field('')?the_field(''):get_template_directory_uri().'/public/whatsapp.svg' ?>" 
                 loading="lazy" 
                 alt="Icono Whatsapp" />
            <?php
            echo get_field('texto_whatsapp')?the_field('texto_whatsapp'):"Envíanos un mensaje"
            ?>

        </a>

       </div>
      </div>

      <form method="POST" class="hidden sm:flex flex-col bg-white w-5/12 rounded-2xl text-lg 2xl:text-2xl p-10 sm:max-lg:p-7 2xl:p-12  gap-7 sm:max-lg:gap-3 2xl:gap-6">
       <h2 class="text-[#1D3750] font-bold text-2xl sm:text-sm lg:text-xl xl:text-2xl 2xl:text-3xl">Comunícate con nosotros</h2>

       <label
  for="Nombre"
  class="relative block rounded-md border border-[#AAA9A9] shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
>
  <input
    type="text"
    id="Nombre"
    name="nombre"
    class="peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 p-2 text-black sm:max-lg:text-xs w-full"
    placeholder="name"
  />

  <span
    class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-[#1D3750]/50 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-lg sm:peer-placeholder-shown:text-xs lg:peer-placeholder-shown:text-sm xl:peer-placeholder-shown:text-lg 2xl:peer-placeholder-shown:text-2xl peer-focus:top-0 peer-focus:text-xs rounded-xl"
  >
    Nombre completo
  </span>
</label>

<label
  for="Correo"
  class="relative block rounded-md border border-[#AAA9A9] shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
>
  <input
    type="text"
    id="Correo"
    name="correo"
    class="peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 p-2 text-black sm:max-lg:text-xs w-full"
    placeholder="Username"
  />

  <span
    class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-[#1D3750]/50 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-lg sm:peer-placeholder-shown:text-xs lg:peer-placeholder-shown:text-sm xl:peer-placeholder-shown:text-lg 2xl:peer-placeholder-shown:text-2xl peer-focus:top-0 peer-focus:text-xs"
  >
    Correo electrónico
  </span>
</label>

<label
  for="Telefono"
  class="relative block rounded-md border border-[#AAA9A9] shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
>
  <input
    type="text"
    id="Telefono"
    name="telefono"
    class="peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 p-2 text-black sm:max-lg:text-xs w-full"
    placeholder="Username"
  />

  <span
    class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-[#1D3750]/50 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-lg sm:peer-placeholder-shown:text-xs lg:peer-placeholder-shown:text-sm xl:peer-placeholder-shown:text-lg 2xl:peer-placeholder-shown:text-2xl peer-focus:top-0 peer-focus:text-xs"
  >
    Teléfono
  </span>
</label>


       <textarea name="mensaje" rows="4" placeholder="Escriba su mensaje" class="rounded p-2 px-3 w-full h-full border border-gray-400 focus:outline-0 focus:ring-1 focus:ring-offset-1 text-sm sm:max-lg:text-xs focus:ring-offset-sky-200 text-black"></textarea>
       <button class="bg-[#1D3750] py-3 rounded-lg font-semibold" 
               arial-label="Boton para enviar formulario"
               name="enviar_formulario">Enviar</button>

      </form>

      
    </div>

    </section>


<!-- 

 ------------------
      Contenido
 ------------------

-->

    <section class="relative w-full min-h-screen md:h-screen 2xl:h-full  flex flex-col items-center justify-center text-black bg-[#E9E9E9] gap-8 sm:gap-6 lg:gap-8 px-5 sm:px-12 md:px-14 lg:px-20  xl:px-40">
      <div class="flex flex-col sm:hidden gap-5">
        <br/>
       <h2 class="text-[#1D3750] text-4xl font-bold text-center">Hagamos un trato</h2> 
       <p>
       Conocer las dudas de nuestros clientes es muy importante para nosotros, te invitamos a llenar nuestro formulario para solicitar información sobre los productos y servicios que ofrecemos.
       A la brevedad posible, uno de nuestros representantes atenderá la solicitud.

       </p>

       <ul class="xl:text-lg 2xl:text-2xl font-medium sm:font-light mt-2 flex flex-col gap-5 mb-6">
          <li class="flex gap-6 items-center">
            <div class="w-[82px] h-10 bg-[#1D3750] rounded-full flex items-center justify-center">
            <img src="<?php echo get_template_directory_uri(); ?>/public/location_mobile.svg" 
                 loading="lazy" 
                 alt="Icono calendario" 
                 class="md:w-7 lg:w-7 xl:w-8 2xl:w-9 sm:pl-1 md:pl-1 lg:pl-2 xl:pl-2 2xl:pl-1 "/>
            </div>
            <p class="sm:w-7/12 leading-6">
            <?php
echo get_field('direccion')?the_field('direccion'):"Calle 15 Sur 502 A, 72764 Colonia Plazuelas de Zerezotla, San Pedro Cholula, Puebla, Mexico
"?>
            </p>
          </li>

          <li class="flex gap-6 items-center">
            <div class="w-10 h-10 bg-[#1D3750] rounded-full flex items-center justify-center">
            <img src="<?php echo get_template_directory_uri(); ?>/public/call_mobile.svg" 
                 loading="lazy" 
                 alt="Icono calendario" 
                 class="md:w-7 lg:w-7 xl:w-8 2xl:w-9 sm:pl-1 md:pl-1 lg:pl-2 xl:pl-2 2xl:pl-1"/>
            </div>
            <p>
            <?php
echo get_field('telefono')?the_field('telefono'):"             (222) 1970977"             
?>
            </p>
          </li>

          <li class="flex gap-6 items-center">
            <div class="w-10 h-10 bg-[#1D3750] rounded-full flex items-center justify-center">
            <img src="<?php echo get_template_directory_uri(); ?>/public/calendar_mobile.svg" 
                 loading="lazy" 
                 alt="Icono calendario" 
                 class="md:w-7 lg:w-7 xl:w-8 2xl:w-9 sm:pl-1 md:pl-1 lg:pl-2 xl:pl-2 2xl:pl-1"/>
            </div>
            <p>
            <?php
 echo get_field('horario')?the_field('horario'):"              Lunes a Viernes de 9:00 am a 06:00 pm"
             ?>
            </p>
          </li>
        </ul>

        <a href="https://api.whatsapp.com/send/?phone=522215983528&text&type=phone_number&app_absent=0" 
           target="_blank" 
           aria-label="Enlace para abrir Whatsapp en dispositivos moviles o ir a la pagina de Whatsaap en computadoras para poder enviar un mensaje a cufrisa"  
           class="flex items-center gap-2 text-lg bg-white text-black rounded py-3 xl:w-4/12 justify-center shadow-md hover:shadow-lg transition-shadow duration-300 mb-6">
            <img src="<?php echo get_template_directory_uri(); ?>/public/whatsapp.svg" 
                 loading="lazy" 
                 alt="Icono Whatsapp"/>
            <?php
            echo "            Envíanos un mensaje"
?>
        </a>

        <form method="POST" class="flex flex-col bg-white  rounded-2xl text-lg 2xl:text-2xl p-9 2xl:p-12  gap-7 2xl:gap-9">
       <h2 class="text-[#1D3750] font-bold text-2xl 2xl:text-4xl">Comunícate con nosotros</h2>

       <label
  for="Nombre"
  class="relative block rounded-md border border-[#AAA9A9] shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
>
  <input
    type="text"
    id="Nombre"
    name="nombre"
    class="peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 p-2 text-black"
    placeholder="Username"
  />

  <span
    class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-[#1D3750]/50 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-lg 2xl:peer-placeholder-shown:text-2xl peer-focus:top-0 peer-focus:text-xs rounded-xl"
  >
    Nombre completo
  </span>
</label>

<label
  for="Correo"
  class="relative block rounded-md border border-[#AAA9A9] shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
>
  <input
    type="text"
    id="Correo"
    name="correo"
    class="peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 p-2 text-black"
    placeholder="Username"
  />

  <span
    class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-[#1D3750]/50 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-lg 2xl:peer-placeholder-shown:text-2xl peer-focus:top-0 peer-focus:text-xs"
  >
    Correo electrónico
  </span>
</label>

<label
  for="Telefono"
  class="relative block rounded-md border border-[#AAA9A9] shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
>
  <input
    type="text"
    id="Telefono"
    name="telefono"
    class="peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 p-2 text-black"
    placeholder="Username"
  />

  <span
    class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-[#1D3750]/50 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-lg 2xl:peer-placeholder-shown:text-2xl peer-focus:top-0 peer-focus:text-xs"
  >
    Teléfono
  </span>
</label>


       <textarea name="mensaje" rows="4" placeholder="Escriba su mensaje" class="rounded p-2 px-3 w-full h-full border border-gray-400 focus:outline-0 focus:ring-1 focus:ring-offset-1 text-sm focus:ring-offset-sky-200 text-black"></textarea>
       <button class="bg-[#1D3750] py-3 rounded-lg font-semibold text-white" 
               aria-label="Boton para enviar formulario"
               name="enviar_formulario">Enviar</button>

      </form>

        
      </div>
      <br/>
      <h2 class="text-[#1D3750] text-3xl lg:text-4xl 2xl:text-5xl min-[1920px]:text-6xl font-extrabold sm:font-bold  2xl:mb-0 text-center">
        <?php
        echo get_field('titulo_contacto')?the_field('titulo_contacto'):"¡VEN A VISITARNOS!";
        ?>
      </h2>
      <p class="text-xl sm:max-lg:text-lg xl:text-xl 2xl:text-2xl min-[1920px]:text-3xl lg:w-7/12 2xl:w-8/12 text-center tracking-normal">
       <?php
       echo get_field('parrafo_contacto')?the_field('parrafo_contacto'):"Nos encanta recibir a nuestros clientes, así que ven en cualquier momento durante las horas de oficina."
       ?>
      </p>
        <iframe class="h-[255px] sm:h-[280px] md:h-[270px] lg:h-[300px] xl:h-[360px] 2xl:h-[420px]" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100vw&amp;height=600&amp;hl=en&amp;q=15%20Sur%20502,%20Villa%20Zerezotla,%20San%20Cristobal%20Tepontla,%2072764%20Cholula%20de%20Rivadavia,%20Pue.+(CUFRISA)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
          href="https://www.gps.ie/">gps vehicle tracker</a></iframe>

        <br/>
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('aviso-de-privacidad'))); ?>" 
        aria-label="Enlace para ir a la pagina del aviso de privacidad de cufrisa"  
        class="bg-[#263650] w-11/12 sm:w-6/12 xl:w-7/12 text-center text-white text-xl sm:text-sm md:text-lg lg:text-xl xl:text-2xl 2xl:text-3xl min-[1920px]:text-4xl py-4 2xl:py-6 rounded shadow-md hover:bg-blue-600 transition-colors duration-300">
        AVISO DE PRIVACIDAD
        </a>
        <br/>
    </section>



    <dialog id="modal" 
            class="<?php echo !$formulario_enviado? "hidden":"";?> flex items-center justify-center w-full h-screen bg-black bg-opacity-70 transition-all duration-300">
      <div class="flex flex-col gap-4 items-center w-11/12 sm:w-9/12 md:w-8/12 lg:w-7/12 xl:w-5/12 bg-[#e7e7e7] rounded-lg p-4 px-8 py-10">
       <div class="relative inset-0 flex justify-end w-full left-7 sm:left-16 bottom-10">
       <button id="botonCerrarConIcono"
               aria-label="Boton para cerrar la ventala que indica el estado del envio" 
               class="w-3/12">
       <svg class="w-full h-[16px]" xmlns="http://www.w3.org/2000/svg" height="19pt" viewBox="0 0 329.26933 329" width="329pt"><path d="m194.800781 164.769531 128.210938-128.214843c8.34375-8.339844 8.34375-21.824219 0-30.164063-8.339844-8.339844-21.824219-8.339844-30.164063 0l-128.214844 128.214844-128.210937-128.214844c-8.34375-8.339844-21.824219-8.339844-30.164063 0-8.34375 8.339844-8.34375 21.824219 0 30.164063l128.210938 128.214843-128.210938 128.214844c-8.34375 8.339844-8.34375 21.824219 0 30.164063 4.15625 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921875-2.089844 15.082031-6.25l128.210937-128.214844 128.214844 128.214844c4.160156 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921874-2.089844 15.082031-6.25 8.34375-8.339844 8.34375-21.824219 0-30.164063zm0 0"/></svg>
        </button>
       
        </div>
       <h2 class="text-3xl text-center 2xl:text-4xl font-extrabold"> 
        <?php echo $envio_correcto?"¡Envio exitoso!":"¡Problemas en el envio!" ?>
       </h2>
       <p class="text-xl 2xl:text-lg text-center">
        <?php echo $envio_correcto?$mensaje_envio_exitoso:$mensaje_envio_fallido ?>
       </p>
       <button type="button" aria-label="Boton para cerrar la ventala que indica el estado del envio" id="botonCerrar" class="bg-[#263650] text-white text-xl sm:text-lg font-semibold rounded-md w-10/12 sm:w-7/12 md:w-6/12 lg:w-5/12 xl:w-4/12 p-3 ">Volver a la pagina</button>
      </div>
        
    </dialog>

    </div>

    <script>
      const modalMensaje = document.getElementById("modal");
      const botonCerrar = document.getElementById("botonCerrarConIcono");
      const botonRegresar = document.getElementById("botonCerrar");

      botonRegresar.addEventListener("click", () => {
       modalMensaje.classList.remove("flex");
       modalMensaje.classList.add("opacity-0");
       modalMensaje.classList.add("pointer-events-none");
      } );
    </script>

</main>


<?php
get_footer();
?>
