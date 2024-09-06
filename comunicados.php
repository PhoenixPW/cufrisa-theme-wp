<?php
/* Template Name: Comunicados */
get_header(); 

?>

<main>

<div class="flex flex-col">

{/* Componente Hero */}

<section id="hero" class="relative w-full min-h-screen bg-cover bg-center bg-black text-white flex items-center justify-left" style={{ backgroundImage: "url('./Rectangle 5.png')" }}>
<div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center sm:justify-start">

<div class="flex flex-col lg:gap-4 xl:gap-8 text-center sm:text-left sm:w-10/12 md:w-8/12 xl:w-6/12 2xl:w-7/12 break-words sm:ml-8 lg:ml-10 xl:ml-16">
  <h1 class="text-3xl sm:text-2xl lg:text-3xl xl:text-4xl 2xl:text-6xl font-bold mb-4 tracking-wider">COMUNICADOS INSTITUCIONALES</h1>


  <p class="hidden sm:block text-xl sm:text-sm lg:text-lg xl:text-xl 2xl:text-4xl font-light">Aquí encontrarás información relevante a nuestra comunidad o todos aquellos que deseen información relevante e importante sobre nuestra postura institucional sobre asuntos recientes que sean de nuestra competencia, que estén directamente relacionados a nosotros o a los sectores donde nos desenvolvemos.</p>

</div>
</div>
</section>

{/* Contenido de la pagina (Despues del Hero)*/}

<section class="relative w-full min-h-screen flex flex-col items-center justify-center text-black bg-[#E9E9E9] px-4 sm:px-6 lg:px-24 py-8">

<article class="flex flex-col sm:flex-row bg-[#DEDEDE] p-5 2xl:p-6 w-full items-center rounded gap-7 sm:gap-0 sm:justify-between">
<p class="text-center sm:text-left text-xl sm:text-sm md:text-base lg:text-xl xl:text-2xl 2xl:text-3xl sm:w-7/12">
Comunicado CUFRISA 9 de noviembre 2023. Pagina web que suplanta nuestro nombre. (pdf)
</p>
<a href="/" class="bg-[#263650] w-11/12 sm:w-4/12 xl:w-3/12 text-center text-white text-xl sm:text-sm md:text-lg lg:text-xl xl:text-2xl 2xl:text-3xl py-4 2xl:py-6 rounded shadow-md hover:bg-blue-600 transition-colors duration-300">
<div class="">


 Descargar
 <i class={`ml-2 `}>+</i>
 </div>
 </a>
</article>


<article class="flex flex-col sm:flex-row bg-white p-5 2xl:p-6 w-full items-center rounded gap-7 sm:gap-0 sm:justify-between">
<p class="text-center sm:text-left text-xl sm:text-sm md:text-base lg:text-xl xl:text-2xl 2xl:text-3xl sm:w-7/12">
Comunicado CONDUSEF 1 de Noviembre 2019 SUPLANTACIÓN DE NUESTRA IDENTIDAD (pdf)

</p>
<a href="/" class="bg-[#263650] w-11/12 sm:w-4/12 xl:w-3/12 text-center text-white text-xl sm:text-sm md:text-lg lg:text-xl xl:text-2xl 2xl:text-3xl py-4 2xl:py-6 rounded shadow-md hover:bg-blue-600 transition-colors duration-300">


 Descargar
 <i class="ml-2 ">+</i>
</a>    
</article>


<article class="flex flex-col sm:flex-row bg-[#DEDEDE] p-5 2xl:p-6 w-full items-center rounded gap-7 sm:gap-0 sm:justify-between">
<p class="text-center sm:text-left text-xl sm:text-sm md:text-base lg:text-xl xl:text-2xl 2xl:text-3xl sm:w-7/12">
Comunicado CUFRISA 17 de Septiembre 2019 USOS NO AUTORIZADOS DE NUESTROS DATOS (razón social y regis) (pdf)

</p>
<a href="/" class="bg-[#263650] w-11/12 sm:w-4/12 xl:w-3/12 text-center text-white text-xl sm:text-sm md:text-lg lg:text-xl xl:text-2xl 2xl:text-3xl py-4 2xl:py-6 rounded shadow-md hover:bg-blue-600 transition-colors duration-300">


 Descargar
 <i class="ml-2">+</i>
</a>    
</article>

<article class="flex flex-col sm:flex-row bg-white p-5 2xl:p-6 w-full items-center rounded gap-7 sm:gap-0 sm:justify-between">
<p class="text-center sm:text-left text-xl sm:text-sm md:text-base lg:text-xl xl:text-2xl 2xl:text-3xl sm:w-7/12">
Comunicado CUFRISA 27 de mayo 2019. USO DE IMAGEN COMERCIAL IGUAL O CONFUSAMENTE SIMILAR (pdf)


</p>
<a href="/" class="bg-[#263650] w-11/12 sm:w-4/12 xl:w-3/12 text-center text-white text-xl sm:text-sm md:text-lg lg:text-xl xl:text-2xl 2xl:text-3xl py-4 2xl:py-6 rounded shadow-md hover:bg-blue-600 transition-colors duration-300">

 Descargar
 <i class="ml-2">+</i>
</a>    
</article>


</section>

{
/*
 -----------------
   Pie de pagina 
 -----------------
*/
}


</div>


</main>

<?php
get_footer();
?>
