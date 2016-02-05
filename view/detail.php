<?php head();
    menu() ?>
    <div class="container">
        <h2>Bestelling van <?php echo $_SESSION['orderLijnDate'] ?></h2>
                    <table class="table table-striped">
                <tr>
                    <th>Productnaam</th>
                    <th>prijs</th>
                    <th>aantal</th>
                    <th>totaal</th>

                </tr>
                <thead>

                </thead>

                <tbody>
                <?php foreach($_SESSION['orderlijn'] as $item): ?>
<tr>
                          <td><?php echo $item['product']->getProductNaam() ?></td>
                          <td><?php echo $item['product']->getPrijs() ?></td>
                          <td><?php echo $item['aantal'] ?></td>
                          <td><?php echo $item['aantal']*$item['product']->getPrijs() ?></td>
</tr>
                <?php endforeach; ?>
                </tbody>
            </table>

    </div>
<?php footer(); ?>