<?php head();
    menu();?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1><?php echo $_GET['message']?></h1>
            <?php pr($_POST); ?>
        </div>
    </div>
</div>
<?php footer(); ?>
