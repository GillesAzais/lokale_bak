<!-- Navigation -->
<nav class="navbar navbar-inverse" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header"></div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="navbar-fixed-top">
			<ul class="nav navbar-nav">
				<li><a href="<?php echo baseUrl('home/index') ?>">Home</a></li>
				<li><a href="<?php echo baseUrl('overOns/index') ?>">Over ons</a></li>
				<li><a href="<?php echo baseUrl('contact/index') ?>">Contact</a></li>
				<li><a href="<?php echo baseUrl('bestel/bestellingen') ?>">Bestellingen</a>
				</li>
				<li><a href="<?php echo baseUrl('login/logout') ?>">Log Uit</a></li>

			</ul>
			<div class="navbar-form navbar-right">
				<form action="<?php echo baseUrl('winkelWagen/index')?>"
					method="post">
					<input type="image" value="submit"
						src="<?php echo baseUrl('view/sc.png')?>"
						class="btn btn-default shopping-cart" alt="submit">
				</form>
			</div>
			<!-- /.navbar-collapse -->
		</div>

</nav>
