<div class="content-wrapper">

  <section class="content-header">

  </section>

  <section class="content">

    <div class="row">

    </div>

     <div class="row">

        <div class="col-lg-12">

        </div>

        <div class="col-lg-6">


        </div>

         <div class="col-lg-6">

        </div>

         <div class="col-lg-12">

          <?php

          if($_SESSION["perfil"] =="Especial" || $_SESSION["perfil"] =="Vendedor"){

             echo '<div class="box box-success">

             <div class="box-header">

             <h1>Bienvenid@ ' .$_SESSION["nombre"].'</h1>

             </div>

             </div>';

          }

          ?>

         </div>

     </div>

  </section>

</div>
