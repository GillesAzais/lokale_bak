<?php head();
    menu() ?>
    <div class="container">
    <h1>Registratie</h1>
    <form action="<?php echo baseUrl('register/register') ?>"
          method="post">
        <fieldset class="form-group">
            <label for="exampleInputPassword1">Naam</label> <input type="text"
                                                                   class="form-control"
                                                                   name="naam"
                                                                   placeholder="naam"  required>
        </fieldset>
        <fieldset class="form-group">
            <label for="exampleInputPassword1">Voornaam</label> <input type="text"
                                                                       class="form-control"
                                                                       name="voornaam"
                                                                       placeholder="voornaam"  required>
        </fieldset>
        <fieldset class="form-group">
            <label for="exampleInputPassword1">Straat</label> <input type="text"
                                                                     class="form-control"
                                                                     name="straat"
                                                                     placeholder="straat"  required>
        </fieldset>
        <fieldset class="form-group">
            <label for="exampleInputPassword1">Huisnummer</label> <input type="text"
                                                                         class="form-control"
                                                                         name="huisnr"
                                                                         placeholder="Huisnr"  required>
        </fieldset>
        <fieldset class="form-group">
            <label for="exampleInputPassword1">Woonplaats</label> <input type="text"
                                                                         class="form-control"
                                                                         name="woonplaats"
                                                                         placeholder="woonplaats"  required>
        </fieldset>
        <fieldset class="form-group">
            <label for="exampleInputPassword1">Postcode</label> <input type="text"
                                                                       class="form-control"
                                                                       name="postcode"
                                                                       placeholder="postcode">
        </fieldset>
        <fieldset class="form-group">
            <label for="exampleInputEmail1">Email address</label> <input type="email"
                                                                         class="form-control"
                                                                         name="email"
                                                                         placeholder="Enter email"  required>
            <small class="text-muted">We'll never share your email with anyone else.</small>
        </fieldset>
        <button type="submit"
                class="btn btn-primary">Submit
        </button>
    </form>
    </div>
<?php footer(); ?>