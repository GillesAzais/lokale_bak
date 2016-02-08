<?php head();
    menu();?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
       <?php  if (isset($_GET['message'])){echo '<div class="alert alert-' .  $_GET['type'] .'" role=alert>' . $_GET['message'] . " </div>"; };?>
       
              <h1>Welkom</h1>
        </div>
    </div>
</div>


<?php footer(); ?>

