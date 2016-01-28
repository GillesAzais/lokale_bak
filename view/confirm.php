<?php head();
menu();?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1>U bent geregistreerd</h1>
            <p>U kunt nu inloggen en bestellingen plaatsen met volgend passwoord:</p>
            <h2><?php echo $_GET['pass']; ?></h2>
        </div>
    </div>
</div>


<?php footer();?>
