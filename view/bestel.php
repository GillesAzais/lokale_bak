<?php head(); menu()?>
    <div class="row">
        <div class="col-lg-2">
            <label>TYPE</label>
        </div><!-- /.col-lg-2 -->
        <div class="col-lg-2">
            <label>PRIJS</label>
        </div><!-- /.col-lg-2 -->
        <div class="col-lg-2">
            <div class="input-group">
               <label>GEWENST AANTAL</label>

            </div><!-- /input-group -->
        </div><!-- /.col-lg-2 -->
    </div><!-- /.row -->
<form action="<?php echo baseUrl('bestel/bestelling')?>" method="post">
<?php foreach ($products as $item):?>
    <div class="row">
        <div class="col-lg-2">
          <label><?php echo $item->getProductNaam()?></label>
            <input type="hidden" name="besetllingsLijn[<?php echo $item->getProductId()?>][naam]" value="<?php echo $item->getProductNaam()?>">

        </div><!-- /.col-lg-2 -->
        <div class="col-lg-2">
            <label><?php echo $item->getPrijs()?></label>
            <input type="hidden" name="besetllingsLijn[<?php echo $item->getProductId()?>][prijs]" value="<?php echo $item->getPrijs()?>">
        </div><!-- /.col-lg-2 -->
    <div class="col-lg-2">
    <div class="input-group">
        <input type="text" name="besetllingsLijn[<?php echo $item->getProductId()?>][aantal]">
        <input type="hidden" name="besetllingsLijn[<?php echo $item->getProductId()?>][id]" value="<?php echo $item->getProductId()?>">
    </div><!-- /input-group -->
  </div><!-- /.col-lg-2 -->
</div><!-- /.row -->
<?php endforeach;?>
    <input type="submit"/>
</form>
<?php footer();?>