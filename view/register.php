<?php
head();
menu();?>
<div class="container">
<?php  if (isset($_GET['message'])){echo '<div class="alert alert-' .  $_GET['type'] .'" role=alert>' . $_GET['message'] . " </div>"; };?>

	<h1>Registratie</h1>
	<form action="<?php echo baseUrl('register/register') ?>" method="post">
		<div class="row">
			<fieldset class="form-group col-md-6">
				<label for="exampleInputPassword1">Naam</label> <input type="text"
					class="form-control" name="text[naam]" placeholder="naam" value="<?php if(isset($_POST['text']['naam'])){ echo $_POST['text']['naam'];}?>" required>
				
            <?php
            
            if (isset($_GET['naam'])) {
                echo '<div class="alert alert-' .  $_GET['type'] .'" role=alert>' . $_GET['naam']['message'] . " </div>";
            } else {
                echo '<small class="text-muted">Max 20 characters.</small>';
            }
            ?>                                                       
            
        </fieldset>
		</div>
		<div class="row">
			<fieldset class="form-group col-md-6">
				<label for="exampleInputPassword1">Voornaam</label> <input
					type="text" class="form-control" name="text[voornaam]"
					placeholder="voornaam" value="<?php if(isset($_POST['text']['voornaam'])){ echo $_POST['text']['voornaam'];}?>" required>  <?php
            
            if (isset($_GET['voornaam'])) {
                echo '<div class="alert alert-' .  $_GET['type'] .'" role=alert>' . $_GET['voornaam']['message'] . " </div>";
            } else {
                echo '<small class="text-muted">Max 20 characters.</small>';
            }
            ?>      
			</fieldset>
		</div>
		<div class="row">
			<fieldset class="form-group col-md-6">
				<label for="exampleInputPassword1">Straat</label> <input type="text"
					class="form-control" name="text[straat]" placeholder="straat" value="<?php if(isset($_POST['text']['straat'])){ echo $_POST['text']['straat'];}?>" required>
  <?php
            
            if (isset($_GET['straat'])) {
                echo '<div class="alert alert-' .  $_GET['type'] .'" role=alert>' . $_GET['straat']['message'] . " </div>";
            } else {
                echo '<small class="text-muted">Max 20 characters.</small>';
            }
            ?>      
            
			</fieldset>
		</div>
		<div class="row">
			<fieldset class="form-group col-md-6">
				<label for="exampleInputPassword1">Huisnummer</label> <input
					type="text" class="form-control" name="any[huisnr]" placeholder="Huisnr"
					value="<?php if(isset($_POST['any']['huisnr'])){ echo $_POST['any']['huisnr'];}?>" required> 
 <?php
            
            if (isset($_GET['huisnr'])) {
                echo '<div class="alert alert-' .  $_GET['type'] .'" role=alert>' . $_GET['huisnr']['message'] . " </div>";
            } else {
                echo '<small class="text-muted">Max 3 characters.</small>';
            }
            ?>      
			</fieldset>
		</div>
		<div class="row">
			<fieldset class="form-group col-md-6">
				<label for="exampleInputPassword1">Woonplaats</label> <input
					type="text" class="form-control" name="text[woonplaats]"
					placeholder="woonplaats" value="<?php if(isset($_POST['text']['woonplaats'])){echo $_POST['text']['woonplaats'];}?>" required>
 <?php
            
            if (isset($_GET['woonplaats'])) {
                echo '<div class="alert alert-' .  $_GET['type'] .'" role=alert>' . $_GET['woonplaats']['message'] . " </div>";
            } else {
                echo '<small class="text-muted">Max 50 characters.</small>';
            }
            ?>      
			</fieldset>
		</div>
		<div class="row">
			<fieldset class="form-group col-md-6">
				<label for="exampleInputPassword1">Postcode</label> <input
					type="text" class="form-control" name="digits[postcode]"
					placeholder="postcode" value="<?php if(isset($_POST['digits']['postcode'])){ echo $_POST['digits']['postcode'];}?>" required> 
 <?php
            
            if (isset($_GET['postcode'])) {
                echo '<div class="alert alert-' .  $_GET['type'] .'" role=alert>' . $_GET['postcode']['message'] . " </div>";
            } else {
                echo '<small class="text-muted">Max 4 characters.</small>';
            }
            ?>      
			</fieldset>
		</div>
		<div class="row">
			<fieldset class="form-group col-md-6">
				<label for="exampleInputEmail1">Email address</label> <input
					type="email" class="form-control" name="email[email]"
					placeholder="Enter email" value="<?php if(isset($_POST['email']['email'])){ echo $_POST['email']['email'];}?>"  required> 
 <?php
            
            if (isset($_GET['email'])) {
                echo '<div class="alert alert-' .  $_GET['type'] .'" role=alert>' . $_GET['email']['message'] . " </div>";
            } else {
                echo '<small class="text-muted">Max 30 characters.</small>';
            }
            ?>      
			</fieldset>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
<?php footer(); ?>