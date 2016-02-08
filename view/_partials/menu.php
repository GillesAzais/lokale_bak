<!-- Navigation -->

<nav class="navbar navbar-inverse"
     role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">

        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="navbar-top">
            <ul class="nav navbar-nav">
                <li>
                    <a href="<?php echo baseUrl('home/index') ?>">Home</a>
                </li>
                <li>
                    <a href="<?php echo baseUrl('overOns/index') ?>">Over ons</a>
                </li>
                <li>
                    <a href="<?php echo baseUrl('contact/index') ?>">Contact</a>
                </li>
                <li>
                    <a href="<?php echo baseUrl('register/index') ?>">Registreer</a>
                </li>
            </ul>
            <form class="navbar-form navbar-right"
                  method="post"
                  action="<?php echo baseUrl('login/login') ?>">
                <div class="form-group">
                    <input type="text"
                           class="form-control"
                           name="email"
                           <?php if(isset($_COOKIE['email'])){
                            echo "value=".$_COOKIE['email']; 
}?>

                           placeholder="Gebruikersnaam" required>
                </div>
                <div class="form-group">
                    <input type="password"
                           class="form-control"
                           name="pass"
                           placeholder="Passwoord"  autocomplete="off" required>
                </div>
                <button type="submit"
                        class="btn btn-info btn-sm">aanmelden
                </button>
            </form>
        </div>
        <!-- /.navbar-collapse -->
    </div>
</nav>
