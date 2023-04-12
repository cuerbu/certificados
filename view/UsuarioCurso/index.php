<!DOCTYPE html>
<html lang="en">
  <head>
  <?php
    require_once("../html/mainHead.php");
  ?>
    <title>Inicio</title>
</head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
   <?php
  require_once("../html/mainMenu.php");
  ?>

      <br>
    </div><!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
<?php
    require_once("../../view/html/mainHeader.php")

?>
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="#">Curso</a>
        </nav>
      </div><!-- br-pageheader -->
      <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Curso</h4>
        <p class="mg-b-0">Pantalla Curso.</p>
      </div>

      <div class="br-pagebody">

        <!-- start you own content here -->

      </div><!-- br-pagebody -->

    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

   <?php
   require_once ("../../view/html/mainJs.php");
   ?>
   
  </body>
</html>
