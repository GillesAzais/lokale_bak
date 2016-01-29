
<?php head(); menu()?>
<div class="container">

    <h2>Winkelwagen</h2>

       <table class="table table-striped">
           <tr>
              <th>type</th>
              <th>aantal</th>
              <th>prijs</th>
              <th>totaalprijs</th>
           </tr>
           <thead>
        </thead>

           <tbody>
           <form action="<?php baseUrl('winkelWagen/bestel')?>" >
           <?php foreach($_COOKIE['producten'] as $producten):?>
               <tr>
                   <td><?php echo $producten['naam']?></td>
                   <input type="hidden" value="<?php echo $producten['naam']?>"
                   <td><?php echo $producten['aantal']?></td>
                   <td><?php echo $producten['prijs']?></td>
                   <td><?php echo $producten['totaalPrijs']?></td>
               </tr>

           <?php endforeach?>
               <form>
           </tbody>

<?php footer();?>
