<!DOCTYPE html>
<html lang="es" class="pos-relative">
  <head>
    <?php
        require_once("../html/mainHead.php");
    ?>
    <title>Certificado</title>
  </head>

  <body class="pos-relative">

    <div class="ht-100v d-flex align-items-center justify-content-center">
      <div class="wd-lg-70p wd-xl-50p tx-center pd-x-40">
        <h1 class="tx-100 tx-xs-140 tx-normal tx-inverse tx-roboto mg-b-0">
            <img src="../../public/certificadoEjemplo.png" alt="Certificado" 
            class="img-fluid">
        </h1>
       <br>
        <p class="tx-16 mg-b-30">Descripción del curso</p>


        <div class="form-layout-footer">
              <button class="btn btn-outline-info"> <i class="fa fa-send mg-r-10"> </i> Imagen</button>
              <button class="btn btn-outline-success"> <i class="fa fa-download mg-r-10 "> PDF</i></button>
            </div><!-- form-layout-footer -->

        
      </div>
    </div><!-- ht-100v -->

   <?php
    require_once("../html/mainJs.php");
   ?>

  </body>
</html>
