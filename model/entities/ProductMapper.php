<?php
/**
 * Created by PhpStorm.
 * User: gilles.azais
 * Date: 1/26/2016
 * Time: 11:24 AM
 */
class ProductMapper extends Mapper{

    public function __construct()
    {
        parent::__construct('producten', 'Product');
    }
}