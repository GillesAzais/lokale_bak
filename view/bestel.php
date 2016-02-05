<?php head();
    menu() ?>
    <div class="container">
<h1>Uw bestellingen</h1>
        <form action="<?php echo baseUrl('bestel/voegToeAanWinkelwagen') ?>" method="post">
            <label>maand: <?php echo getdate()['month']?> </label>
            <br>
            <label for="day">Dag: </label>
            <select name="day" id="day">
                <?php for ($i = getdate()['mday']; $i <= cal_days_in_month ( 0 , getdate()['mon'] , getdate()['year'] ); $i++){
                           if( $i > getdate()['mday'] && $i < getdate()['mday']+4) {
                        echo "<option value='$i'>$i</option>";
                    }
                }
                ?>
            </select>
            <table class="table table-striped">
            <thead>
            <tr>
                <th>Type</th>
                <th>Prijs</th>
                <th>Aantal</th>
            </tr>
            </thead>
            <tbody>
        <?php foreach($products as $item): ?>
          <tr>
             <td><?php echo $item->getProductNaam() ?></td>
             <td><?php echo $item->getPrijs() ?></td>
             <td> <div class="input-group">   <input type="text" name="bestellingsLijn[<?php echo $item->getProductId() ?>][aantal]">  </div></td>
          </tr>
            <input type="hidden" name="bestellingsLijn[<?php echo $item->getProductId() ?>][naam]" value="<?php echo $item->getProductNaam() ?>">
            <input type="hidden" name="bestellingsLijn[<?php echo $item->getProductId() ?>][prijs]" value="<?php echo $item->getPrijs() ?>">
            <input type="hidden" name="bestellingsLijn[<?php echo $item->getProductId() ?>][id]"value="<?php echo $item->getProductId() ?>">
        <?php endforeach; ?>
          </tbody>
                <input type="submit"
                         value="Voeg toe aan winkelwagen">
    </form>
 </div>
<?php footer(); ?>