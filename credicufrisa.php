<?php
/* Template Name: Credicufrisa */
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
         style="background-image: url('<?php echo get_field('imagen_credicufrisa')?the_field('imagen_credicufrisa'):get_template_directory_uri().'/public/credicufrisa.png' ?>')">
<div class="absolute inset-0 bg-black bg-opacity-60 flex flex-col justify-center px-12 items-center pb-28 sm:pb-0 gap-3 sm:gap-0">

<img src="<?php echo get_template_directory_uri(); ?>/public/logo.webp"
     loading="lazy"
     alt="Logo"
     class="w-5/12 sm:hidden" />

<h1 class="text-3xl sm:text-2xl lg:text-3xl xl:text-4xl 2xl:text-5xl font-bold text-center my-7 sm:max-lg:pt-8 lg:max-xl:pt-16 xl:max-2xl:pt-24 2xl:pt-14 xl:max-2xl:mb-14 2xl:mb-16">

<?php
 echo get_field('titular_credicufrisa')?the_field('titular_credicufrisa'):"Crédito pensado para el impulso de desarrollos <br/> arquitectónicos y habitacionales";
?>

</h1>

<div class="hidden sm:block container mx-auto p-4 2xl:p-0">
<div class="grid grid-cols-1 sm:grid-cols-3 gap-6 2xl:gap-0">

  <div class="bg-transparent lg:p-6 rounded-lg text-center">
    <h2 class="text-2xl sm:text-base md:text-lg xl:text-2xl 2xl:text-3xl font-semibold mb-2">
    <?php
     echo get_field('titulo_caracteristica_1')?the_field('titulo_caracteristica_1'):"25%";
    ?>
    </h2>
    <p class="text-lg sm:text-xs md:text-xs xl:text-lg 2xl:text-xl text-white font-light">
    <?php
     echo get_field('descripcion_caracteristica_1')?the_field('descripcion_caracteristica_1'):"Tasa de interés (tasa Ordinaria) anual más IVA"
    ?>

    </p>
  </div>

  <div class="bg-transparent lg:p-6 rounded-lg text-center">
    <h2 class="text-2xl sm:text-base md:text-lg xl:text-2xl 2xl:text-3xl font-semibold mb-2">
      <?php
      echo get_field('titulo_caracteristica_2')?the_field('titulo_caracteristica_2'):"HASTA <br/>$10,000,000.00"
      ?>
    </h2>
    <p class="text-lg sm:text-xs md:text-xs xl:text-lg 2xl:text-xl text-white font-light">

    <?php
    echo get_field('descripcion_caracteristica_2')?the_field('descripcion_caracteristica_2'):"De monto máximo de crédito, con un mínimo de $500,000.00 (1)"
    ?>
    </p>
  </div>

  <div class="bg-transparent lg:p-6 rounded-lg text-center">
    <h2 class="text-2xl sm:text-base md:text-lg xl:text-2xl 2xl:text-3xl font-semibold mb-2">
     <?php
     echo get_field('titulo_caracteristica_3')?the_field('titulo_caracteristica_3'):"HASTA 5%"
     ?>
     </h2>
    <p class="text-lg sm:text-xs md:text-xs xl:text-lg 2xl:text-xl text-white font-light">
    <?php
    echo get_field('descripcion_caracteristica_3')?the_field('descripcion_caracteristica_3'):"De Comisión por Apertura más IVA"
    ?>

    </p>
  </div>

  <div class="bg-transparent lg:p-6 rounded-lg text-center">
    <h2 class="text-2xl sm:text-base md:text-lg xl:text-2xl 2xl:text-3xl font-semibold mb-2">
      <?php
      echo get_field('titulo_caracteristicas_4')?the_field('titulo_caracteristicas_4'): "SIN <br/> COMISION";
      ?>
    </h2>
    <p class="text-lg sm:text-xs md:text-xs xl:text-lg 2xl:text-xl text-white font-light">

    <?php
    echo get_field('descripcion_caracteristica_4')?the_field('descripcion_caracteristica_4'):"Por pago tardío *Sin contar intereses moratorios";
    ?>

    </p>
  </div>

  <div class="bg-transparent lg:p-6 rounded-lg text-center">
    <h2 class="text-2xl sm:text-base md:text-lg xl:text-2xl 2xl:text-3xl font-semibold mb-2">
     <?php
      echo get_field('titulo_caracteristica_5')?the_field('titulo_caracteristica_5'):"PLAZO DE 12 <br/>A 36 MESES";
     ?>
    </h2>
    <p class="text-lg sm:text-xs md:text-xs xl:text-lg 2xl:text-xl text-white font-light">

    <?php
    echo get_field('descripcion_caracteristica_5')?the_field('descripcion_caracteristica_5'):"Según aprobación";
    ?>

    </p>
  </div>

  <div class="bg-transparent lg:p-6 rounded-lg text-center">
    <h2 class="text-2xl sm:text-base md:text-lg xl:text-2xl 2xl:text-3xl font-semibold mb-2">
    <?php

     echo get_field('titulo_caracteristica_6')?the_field('titulo_caracteristica_6'):"SIN <br/> PENALIZACION";

    ?>

    </h2>
    <p class="text-lg sm:text-xs md:text-xs xl:text-lg 2xl:text-xl text-white font-light">
    <?php
    echo get_field('descripcion_caracteristica_6')?the_field('descripcion_caracteristica_6'):"por pagos adelantados (2)"
    ?>

    </p>
  </div>

</div>
</div>

</div>
</section>

<!---


 ------------------
      Contenido
 ------------------


-->


<section class="relative w-full min-h-screen flex flex-col items-center justify-center text-black  bg-[#E9E9E9] px-6 sm:px-10 md:px-12 lg:px-20 xl:px-40 2xl:px-28 py-9 sm:max-lg:pt-11 xl:max-2xl:pt-14 2xl:py-24 gap-5  2xl:gap-10">

<article class="flex flex-col sm:hidden text-center gap-3">
<div class="px-5">
 <h3 class="text-3xl font-bold tracking-wide leading-9">
  <?php
  echo get_field('titulo_caracteristica_2')?the_field('titulo_caracteristica_2'):"Hasta $10,000,000.00"
  ?>
 </h3>
</div>
<p>

<?php
echo get_field('descripcion_caracteristica_2')?the_field('descripcion_caracteristica_2'):"De monto máximo de crédito, con un mínimo de $500,000.00 (1)"
?>

</p>
<h3 class="text-2xl font-bold tracking-wide">
<?php
echo get_field('titulo_caracteristica_5')?the_field('titulo_caracteristica_5'):"Plazo de 12 a 36 meses"
?>
</h3>
<p>
<?php
echo get_field('descripcion_caracteristica_5')?the_field('descripcion_caracteristica_5'):"Según aprobación"
?>
</p>

<ul class="flex flex-wrap w-full mt-4">

  <li class="flex-col w-1/2 mb-7">
   <h4 class="text-xl font-bold">
<?php
echo get_field('titulo_caracteristica_1')?the_field('titulo_caracteristica_1'):"25%"
?>
   </h4>
   <p>
<?php
echo get_field('descripcion_caracteristica_1')?the_field('descripcion_caracteristica_1'):"Tasa de interés (tasa Ordinaria) anual más IVA"
?>

   </p>
  </li>

  <li class="flex-col w-1/2">
   <h4 class="text-xl font-bold">
<?php
   echo get_field('titulo_caracteristica_3')?the_field('titulo_caracteristica_3'):"Hasta 5%"
?>

   </h4>
   <p >
   <?php

   echo get_field('descripcion_caracteristica_3')?the_field('descripcion_caracteristica_3'):"De Comisión por Apertura más IVA"
?>

   </p>

  </li>

  <li class="flex-col w-1/2">
   <h4 class="text-xl font-bold">
   <?php
   echo get_field('titulo_caracteristica_4')?the_field('titulo_caracteristica_4'):"Sin comisión"
   ?>
   </h4>
   <p>
   <?php
echo get_field('descripcion_caracteristica_4')?the_field('descripcion_caracteristica_4'):
   "Por pago tardío
   *Sin contar intereses moratorios"
   ?>

   </p>
  </li>

  <li class="flex-col w-1/2">
   <h4 class="text-xl font-bold">
   <?php

   echo get_field('titulo_caracteristica_6')?the_field('titulo_caracteristica_6'):"Sin penalización"
   ?>

   </h4>
   <p>
  <?php
   echo get_field('descripcion_caracteristica_6')?the_field('descripcion_caracteristica_6'):"Por pagos adelantados (2)"
   ?>
   </p>
  </li>


</ul>

<hr/>

</article>


<h2 class="text-[#1D3750] text-center text-[1.760rem] sm:text-2xl lg:text-3xl xl:text-3xl 2xl:text-4xl min-[1920px]:text-5xl font-extrabold sm:font-bold mb-3 sm:mb-8 tracking-wide">
<?php

 echo get_field('titulo_cuerpo_credicufrisa')?the_field('titulo_cuerpo_credicufrisa'):"REQUERIMIENTOS PARA PREAPROBACIÓN"
?>
</h2>


<h3 class="text-2xl sm:text-lg lg:text-xl xl:text-xl 2xl:text-2xl min-[1920px]:text-3xl font-bold">
<?php
echo get_field('personales_morales')?the_field('personales_morales'):"PERSONAS MORALES"
?>
</h3>


<p class="text-lg sm:text-base lg:text-xl xl:text-xl 2xl:text-2xl min-[1920px]:text-3xl text-left leading-6">
<?php
echo get_field('personales_morales_texto')?the_field('personales_morales_texto'): 
"Con representantes legales y accionistas, con sus identificaciones oficiales vigentes y CURP. Documentos oficiales necesarios para comprobar la representación y participación accionaria. Sí como los generales y registros de la empresa."
?>
</p>

<div class="flex flex-col sm:flex-row gap-6 sm:gap-20">
<article class="flex flex-col gap-3 sm:w-1/2">
  <h3 class="text-xl sm:text-base lg:text-lg xl:text-lg 2xl:text-xl min-[1920px]:text-2xl font-bold ">
  <?php

echo get_field('requisito_1')?the_field('requisito_1'):"SOLICITUD DE CRÉDITO"  ?>

  </h3>
  <p class="text-lg sm:text-base lg:text-lg xl:text-lg 2xl:text-xl min-[1920px]:text-2xl leading-6">
  <?php

echo get_field('requisito_1_texto')?the_field('requisito_1_texto'):"Llenar el contrato de solicitud de crédito. Con datos generales de accionistas representantes y empresa."
?>

  </p>

</article>

<article class="flex flex-col gap-3 sm:w-1/2">
  <h3 class="text-xl sm:text-base lg:text-lg xl:text-lg 2xl:text-xl min-[1920px]:text-2xl font-bold">

  <?php

 echo get_field('requisito_2')?the_field('requisito_2'):"COMPROBANTE DE DOMICILIO VIGENTE"
?>



  </h3>

  <p class="text-lg sm:text-base lg:text-lg xl:text-lg 2xl:text-xl min-[1920px]:text-2xl leading-6">
  <?php

echo get_field('requisito_2_texto')?the_field('requisito_2_texto'):"Recibo de luz, gas natural, impuesto predial. teléfono estado de cuenta bancario. (3) Con menos de 6 meses de expedición."
?>
  </p>

</article>

</div>

<div class="flex flex-col sm:flex-row gap-6 sm:gap-20">

<article class="flex flex-col gap-3 sm:w-1/2">
  <h3 class="text-xl sm:text-sm lg:text-lg xl:text-lg 2xl:text-xl min-[1920px]:text-2xl font-bold">
  <?php

echo get_field('requisito_3')?the_field('requisito_3'):"CONTAR CON UN PREPROYECTO HABITACIONAL"
?>
  </h3>

  <p class="text-lg sm:text-sm lg:text-lg xl:text-lg 2xl:text-xl min-[1920px]:text-2xl leading-6">
  <?php

echo get_field('requisito_3_texto')?the_field('requisito_3_texto'):"Dentro de lo posible administrado por CUFRISA."
?>
  </p>

</article>

<article class="flex flex-col gap-3 sm:w-1/2">
  <h3 class="text-xl sm:text-sm lg:text-lg xl:text-lg 2xl:text-xl min-[1920px]:text-2xl font-bold">
  <?php

echo get_field('requisito_4')?the_field('requisito_4'):"ESTADOS FINANCIEROS DEL SOLICITANTE"
?>

  </h3>

  <p class="text-lg sm:text-sm lg:text-lg xl:text-lg 2xl:text-xl min-[1920px]:text-2xl leading-6">
  <?php

echo get_field('requisito_4_texto')?the_field('requisito_4_texto'):"Activo circulante y total, Pasivo circulante y total, Capital contable, Utilidad o perdida neta y Ventas"
?>



  </p>

</article>
</div>

<h2 class="text-center text-3xl sm:text-xl lg:text-2xl xl:text-2xl 2xl:text-3xl min-[1920px]:text-4xl font-bold py-5 sm:py-0">
<?php

echo get_field('contrato_solicitud')?the_field('contrato_solicitud'):"Contrato y solicitud de crédito"
?>
</h2>

<div class="w-full">

<article class="flex flex-col sm:flex-row bg-[#DEDEDE] p-5 2xl:p-6 w-full items-center rounded gap-7 sm:gap-0 sm:justify-between">
<p class="text-center sm:text-left text-xl sm:text-sm md:text-lg lg:text-lg xl:text-xl 2xl:text-2xl min-[1920px]:text-3xl sm:w-7/12 lg:w-9/12">
<?php

echo get_field('descripcion_contrato')?the_field('descripcion_contrato'):"CONTRATO DE CREDICUFRISA (pdf)"

?>
 </p>
 <a href="<?php echo get_template_directory_uri(); ?>/assets/pdf/CONTRATO DE CREDITO.pdf"
    target="_blank"
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

echo get_field('descripcion_solicitud')?the_field('descripcion_solicitud'):"FORMATO DE SOLICITUD DE CREDITO (pdf)"

?>

 </p>
 <a href="<?php echo get_template_directory_uri(); ?>/assets/pdf/FORMATO SOLICITUD DE CREDITO.pdf"
    target="_blank"
    class="flex sm:flex-row justify-center bg-[#263650] w-11/12 sm:w-4/12 xl:w-3/12 text-center text-white text-xl sm:text-sm md:text-lg lg:text-xl xl:text-xl 2xl:text-2xl min-[1920px]:text-3xl py-4 2xl:py-6 rounded hover:bg-blue-600 transition-colors duration-300">
  Descargar
  <img src="<?php echo get_template_directory_uri(); ?>/public/descargas.svg"
       loading="lazy"
       alt="Icono descargar"
       class="ml-2 sm:w-[17px] md:w-[20px] lg:w-[21px] xl:w-[24px] 2xl:w-[30px]"/>
 </a>
</article>

</div>

<p class='text-lg sm:text-xs md:text-sm lg:text-base xl:text-base 2xl:text-lg min-[1920px]:text-xl'>
<?php
 echo get_field('continuacion_cuerpo_credicufrisa')?the_field('continuacion_cuerpo_credicufrisa'):
"Tasa de interés aplicable al producto del 25% (tasa ordinaria) anual más IVA.CAT PROMEDIO 47.8% más IVA. <br/>Informativo. Calculado el 12 de junio de 2023. Vigencia al 12 de diciembre del 2024. Crédito sujeto a autorización de comité. Términos, condiciones y comisiones aplicables a CrediCUFRISA son los incluidos en el Contrato de Crédito vigente, inscrito en el Registro de Contratos de Adhesión (RECA), bajo el número de registro: 14754-439-035588/03-01265-0322; puedes consultar la versión vigente en https://cufrisa.com/credicufrisa o en la página de la CONDUSEF www.condusef.gob.mx

</p>
<p class='text-lg sm:text-xs md:text-sm lg:text-base xl:text-base 2xl:text-lg min-[1920px]:text-xl'>
Tasa de interés moratoria:1.5 veces la tasa ordinaria (25% * 1.5 = 37.50%) (1) Se otorga de acuerdo a solicitud y capacidad de pago. El Crédito CrediCUFRISA se otorga en Moneda Nacional. (2) Pagos anticipados. La realización de Pagos Anticipados de forma parcial o total del crédito en cualquier tiempo, no generará la devolución de la comisión por apertura en ningún caso. (3) El comprobante de domicilio deberá ser presentado con una vigencia no mayor de 90 días, así como el comprobante bancario que deberá haber sido recibido en el domicilio del solicitante y de Institución Financiera distinta de CUFRISA.


</p>
<p class='text-lg sm:text-xs md:text-sm lg:text-base xl:text-base 2xl:text-lg min-[1920px]:text-xl'>
Incumplir tus obligaciones generará intereses moratorios. Descripción: Crédito simple en moneda nacional ofrecido por SOLUCIONES PATRIMONIALES CUFRISA, SA DE CV, SOFOM, ENR en toda la República Mexicana y dirigido a personas morales constituidas en México. Unidad Especializada de Atención a Usuarios de SOLUCIONES PATRIMONIALES CUFRISA, SA DE CV, SOFOM, ENR Domicilio: Avenida 15 Sur 502 A, Fraccionamiento Plazuelas de Zerezotla, San Pedro Cholula, Puebla, C.P. 72764 Puebla. Teléfono: 222 890 2224 correo electrónico: Titular de la UNE: fcuevas@cufrisa.com y encargado regional: direccion@cufrisa.com Página de Internet: www.cufrisa.com

"
?>
</p>

</section>

</div>

</main>

<?php
get_footer();
?>
