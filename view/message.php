<?php head();
    menu();?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
        	<?php pr($_SESSION)?>
            <h1><?php echo $_GET['message']?></h1>

        </div>
    </div>
</div>
<?php footer(); ?>
