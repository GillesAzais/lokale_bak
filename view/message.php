<?php head();
    menu();?>
<div class="container">


    <div class="row">
        <div class="col-lg-12">
        	
            <div class="alert <?php echo  "alert-" . $_GET['type']?>" role="alert"> <h1><?php echo $_GET['message']?></h1></div>
        </div>
    </div>
</div>
<?php footer(); ?>
