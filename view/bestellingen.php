<?php head();
    menu() ?>
<div class="container">
    <h2>Bestellingen</h2>
    <?php if (!empty($_SESSION ['bestellingen'])):?>

        <table class="table table-striped">
            <tr>
                <th>Datum van bestelling</th>
                <th>Status</th>
                <th></th>
                <th></th>
          </tr>
            <thead>
          </thead>
          <tbody>
          
            <?php foreach($_SESSION['bestellingen'] as $b){ ?>

             <tr>
                    <td><?php echo $b->getBestellingsDatum() ?></td>
                    <td><?php echo $b->getStatus() ?></td>
                    <td><a class="btn btn-info" href="<?php echo baseUrl('bestel/orderlijnDetail/'.$b->getBestellingsId())?>">details</a></td>
                    <?php if(strtotime($b->getBestellingsDatum()) < strtotime("now")){
                   echo '<td><button class="btn btn-info" disabled="disabled"><strike>Annuleer</strike></button></td>';
                    }else{
                    echo '<td><a class="btn btn-info" href='.baseUrl("bestel/annuleer/".$b->getBestellingsId()).'>Annuleer</a></td>'; }?>
               
             </tr>
            <?php } ?>
            </tbody>
        </table>
    <?php else: ?>
       <h3>U hebt nog geen bestelling geplaatst</h3>
    <?php endif?>
    <form action="<?php echo baseUrl('bestel/index')?>" method="post">
        <input type="submit" value="Plaats nieuwe bestelling">
    </form>

</div>
<?php footer(); ?>
