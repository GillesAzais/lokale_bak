<?php head();
    menu() ?>
<div class="container">
    <h2>Winkelwagen</h2>

    <?php if (!empty($_SESSION ['producten'])):?>

    <table class="table table-striped">
        <tr>
            <th>type</th>
            <th>prijs per stuk</th>
            <th>aantal</th>
            <th>totaalprijs</th>
        </tr>
        <thead>

        </thead>

        <tbody>

        <?php foreach($_SESSION['producten'] as $producten): ?>
            <tr>
                <td><?php echo $producten['naam'] ?></td>
                <td><?php echo $producten['prijs'] ?></td>
                <td><?php echo $producten['aantal'] ?></td>
                <td><?php echo $producten['totaalPrijs'] ?></td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>

    <form action="<?php echo baseUrl('WinkelWagen/bestel') ?>"
          method="post">
        <?php foreach($_SESSION['producten'] as $producten): ?>
            <input type="hidden" name="bestellingsLijn[<?php echo $producten['id'] ?>][aantal]"  value="<?php echo $producten['aantal'] ?>">
        <?php endforeach ?>
        <input type="submit" value="Bestel">
    </form>
    <?php else: ?>

    <h3>Uw winkelwagen is leeg</h3>
        <?php endif?>
    </div>
    <?php footer(); ?>
