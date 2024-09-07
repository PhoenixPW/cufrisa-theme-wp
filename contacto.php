<?php
/* Template Name: Contacto */
get_header(); 

?>

<main>

        <div class="flex flex-col">

    <section id="hero" class="relative w-full min-h-screen bg-cover bg-center bg-black text-white flex items-center justify-left" style="background-image: url('<?php echo get_template_directory_uri(); ?>./public/contacto.png')">
    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center sm:justify-start sm:max-xl:px-8 xl:px-12 sm:pt-16 xl:pl-20 ">
    
      <div class="flex flex-col gap-3 2xl:gap-5 text-left sm:w-7/12 break-words items-center sm:items-stretch pb-24 sm:pb-0 ">

      <img src="<?php echo get_template_directory_uri(); ?>/public/logo.webp" loading="lazy" alt="Logo" class="w-7/12 sm:hidden" />

      <h1 class="sm:hidden text-6xl font-bold">Contacto</h1>
       <h1 class="hidden sm:block text-4xl sm:text-2xl lg:text-3xl xl:text-4xl 2xl:text-5xl font-bold mb-4 tracking-wider">
        Hagamos un trato

        </h1>
        
        <div class="hidden sm:block">
        <p class="text-xl sm:text-xs lg:text-base xl:text-xl 2xl:text-xl font-light w-7/12 leading-6 lg:mb-5 2xl:mb-10">
        Conocer las dudas de nuestros clientes es muy importante para nosotros, te invitamos a llenar nuestro formulario para solicitar información sobre los productos y servicios que ofrecemos.
<br/>
<br/>
        A la brevedad posible, uno de nuestros representantes atenderá la solicitud.

        </p>

        <ul class="text-lg sm:text-xs lg:text-sm xl:text-lg 2xl:text-lg font-light mt-2 flex flex-col gap-5 mb-6">
          <li class="flex gap-6 items-center">
          <div class="flex justfiy-center items-center sm:w-7 md:w-8 lg:w-9 xl:w-10 sm:h-7 md:h-8 lg:h-9 xl:h-10 rounded-full bg-white">
             <img src="<?php echo get_template_directory_uri(); ?>/public/localizacion.svg" loading="lazy" alt="Icono localizacion" class=" md:w-7 lg:w-7 xl:w-8 2xl:w-9 sm:pl-1 md:pl-1 lg:pl-2 xl:pl-2 2xl:pl-1"/>
            </div>
            <p class="w-7/12 sm:leading-4 lg:leading-5 xl:leading-6">
Calle 15 Sur 502 A, 72764 Colonia Plazuelas de Zerezotla, San Pedro Cholula, Puebla, Mexico

            </p>
          </li>

          <li class="flex gap-6 items-center">
            <div class="flex justfiy-center items-center sm:w-7 md:w-8 lg:w-9 xl:w-10 sm:h-7 md:h-8 lg:h-9 xl:h-10 rounded-full bg-white">
             <img src="<?php echo get_template_directory_uri(); ?>/public/telefono.svg" loading="lazy" alt="Icono telefono" class="md:w-7 lg:w-7 xl:w-8 2xl:w-9 sm:pl-1 md:pl-1 lg:pl-2 xl:pl-2 2xl:pl-1"/>
            </div>
            <p>
             (222) 1970977
             
            </p>
          </li>

          <li class="flex gap-6 items-center">
          <div class="flex justfiy-center items-center sm:w-7 md:w-8 lg:w-9 xl:w-10 sm:h-7 md:h-8 lg:h-9 xl:h-10 rounded-full bg-white">
             <img src="<?php echo get_template_directory_uri(); ?>/public/calendario.svg" loading="lazy" alt="Icono calendario" class="md:w-7 lg:w-7 xl:w-8 2xl:w-9 sm:pl-1 md:pl-1 lg:pl-2 xl:pl-2 2xl:pl-1"/>
            </div>
            <p>
              Lunes a Viernes de 9:00 am a 06:00 pm
            </p>
          </li>
        </ul>

        <a href="https://api.whatsapp.com/send/?phone=522215983528&text&type=phone_number&app_absent=0" class="flex gap-4 bg-white text-black lg:text-lg rounded py-2 sm:w-9/12 lg:w-6/12 xl:w-7/12 2xl:w-6/12 items-center justify-center">
            <img src="<?php echo get_template_directory_uri(); ?>/public/whatsapp.svg" loading="lazy" alt="Icono Whatsapp" />
            Envíanos un mensaje
        </a>

       </div>
      </div>

      <form class="hidden sm:flex flex-col bg-white w-5/12 rounded-2xl text-lg 2xl:text-2xl p-10 sm:max-lg:p-7 2xl:p-12  gap-7 sm:max-lg:gap-3 2xl:gap-6">
       <h2 class="text-[#1D3750] font-bold text-2xl sm:text-sm lg:text-xl xl:text-2xl 2xl:text-3xl">Comunícate con nosotros</h2>

       <label
  for="Nombre"
  class="relative block rounded-md border border-[#AAA9A9] shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
>
  <input
    type="text"
    id="Nombre"
    class="peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 p-2 text-black sm:max-lg:text-xs w-full"
    placeholder="Username"
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
    class="peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 p-2 text-black sm:max-lg:text-xs w-full"
    placeholder="Username"
  />

  <span
    class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-[#1D3750]/50 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-lg sm:peer-placeholder-shown:text-xs lg:peer-placeholder-shown:text-sm xl:peer-placeholder-shown:text-lg 2xl:peer-placeholder-shown:text-2xl peer-focus:top-0 peer-focus:text-xs"
  >
    Teléfono
  </span>
</label>


       <textarea rows="4" placeholder="Escriba su mensaje" class="rounded p-2 px-3 w-full h-full border border-gray-400 focus:outline-0 focus:ring-1 focus:ring-offset-1 text-sm sm:max-lg:text-xs focus:ring-offset-sky-200 text-black"></textarea>
       <button class="bg-[#1D3750] py-3 rounded-lg font-semibold">Enviar</button>

      </form>

      
    </div>

    </section>


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
            <img src="<?php echo get_template_directory_uri(); ?>/public/location_mobile.svg" loading="lazy" alt="Icono calendario" class="md:w-7 lg:w-7 xl:w-8 2xl:w-9 sm:pl-1 md:pl-1 lg:pl-2 xl:pl-2 2xl:pl-1 "/>
            </div>
            <p class="sm:w-7/12 leading-6">
Calle 15 Sur 502 A, 72764 Colonia Plazuelas de Zerezotla, San Pedro Cholula, Puebla, Mexico

            </p>
          </li>

          <li class="flex gap-6 items-center">
            <div class="w-10 h-10 bg-[#1D3750] rounded-full flex items-center justify-center">
            <img src="<?php echo get_template_directory_uri(); ?>/public/call_mobile.svg" loading="lazy" alt="Icono calendario" class="md:w-7 lg:w-7 xl:w-8 2xl:w-9 sm:pl-1 md:pl-1 lg:pl-2 xl:pl-2 2xl:pl-1"/>
            </div>
            <p>
             (222) 1970977
             
            </p>
          </li>

          <li class="flex gap-6 items-center">
            <div class="w-10 h-10 bg-[#1D3750] rounded-full flex items-center justify-center">
            <img src="<?php echo get_template_directory_uri(); ?>/public/calendar_mobile.svg" loading="lazy" alt="Icono calendario" class="md:w-7 lg:w-7 xl:w-8 2xl:w-9 sm:pl-1 md:pl-1 lg:pl-2 xl:pl-2 2xl:pl-1"/>
            </div>
            <p>
              Lunes a Viernes de 9:00 am a 06:00 pm
            </p>
          </li>
        </ul>

        <a href="https://api.whatsapp.com/send/?phone=522215983528&text&type=phone_number&app_absent=0" target="_blank" class="flex items-center gap-2 text-lg bg-white text-black rounded py-3 xl:w-4/12 justify-center shadow-md hover:shadow-lg transition-shadow duration-300 mb-6">
            <img src="<?php echo get_template_directory_uri(); ?>/public/whatsapp.svg" loading="lazy" alt="Icono Whatsapp"/>
            Envíanos un mensaje
        </a>

        <form class="flex flex-col bg-white  rounded-2xl text-lg 2xl:text-2xl p-9 2xl:p-12  gap-7 2xl:gap-9">
       <h2 class="text-[#1D3750] font-bold text-2xl 2xl:text-4xl">Comunícate con nosotros</h2>

       <label
  for="Nombre"
  class="relative block rounded-md border border-[#AAA9A9] shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
>
  <input
    type="text"
    id="Nombre"
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
    class="peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 p-2 text-black"
    placeholder="Username"
  />

  <span
    class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-[#1D3750]/50 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-lg 2xl:peer-placeholder-shown:text-2xl peer-focus:top-0 peer-focus:text-xs"
  >
    Teléfono
  </span>
</label>


       <textarea rows="4" placeholder="Escriba su mensaje" class="rounded p-2 px-3 w-full h-full border border-gray-400 focus:outline-0 focus:ring-1 focus:ring-offset-1 text-sm focus:ring-offset-sky-200 text-black"></textarea>
       <button class="bg-[#1D3750] py-3 rounded-lg font-semibold text-white">Enviar</button>

      </form>

        
      </div>
      <br/>
      <h2 class="text-[#1D3750] text-3xl lg:text-4xl 2xl:text-6xl font-extrabold sm:font-bold  2xl:mb-0 text-center">¡VEN A VISITARNOS!</h2>
      <p class="text-xl sm:max-lg:text-lg xl:text-2xl 2xl:text-4xl lg:w-7/12 2xl:w-8/12 text-center tracking-normal">
       Nos encanta recibir a nuestros clientes, así que ven en cualquier momento durante las horas de oficina.        
      </p>
        <iframe class="h-[255px] sm:h-[280px] md:h-[270px] lg:h-[300px] xl:h-[360px] 2xl:h-[420px]" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100vw&amp;height=600&amp;hl=en&amp;q=15%20Sur%20502,%20Villa%20Zerezotla,%20San%20Cristobal%20Tepontla,%2072764%20Cholula%20de%20Rivadavia,%20Pue.+(CUFRISA)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
          href="https://www.gps.ie/">gps vehicle tracker</a></iframe>

        <br/>
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('aviso-de-privacidad'))); ?>" class="bg-[#263650] w-11/12 sm:w-6/12 xl:w-7/12 text-center text-white text-xl sm:text-sm md:text-lg lg:text-xl xl:text-2xl 2xl:text-3xl py-4 2xl:py-6 rounded shadow-md hover:bg-blue-600 transition-colors duration-300">
        AVISO DE PRIVACIDAD
        </a>
        <br/>
    </section>




    </div>

</main>

<?php
get_footer();
?>
