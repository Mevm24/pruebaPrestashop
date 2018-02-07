<?php
 
include(dirname(__FILE__).'/config/config.inc.php');
include(dirname(__FILE__).'/init.php');
 

$xml = simplexml_load_string($xml_string);

if(file_exists(dirname(__FILE__).'/productos.xml')){
  $xml = simplexml_load_file(dirname(__FILE__).'/productos.xml');
}else{
  echo "No se encuentra el xml";
}

foreach ($xml->Products as $product_xml)
{
    if ($product_xml->Valid_internet_product == 1)
    {
        /* Update an existing product or Create a new one */
        $id_product = (int)Db::getInstance()->getValue('SELECT id_product FROM '._DB_PREFIX_.'product WHERE reference = \''.pSQL($product_xml->Reference).'\'');
        $product = $id_product ? new Product((int)$id_product, true) : new Product();
        $product->reference = $product_xml->Reference;
        $product->price = (float)$product_xml->Price;
        $product->active = (int)$product_xml->Active_product;
        $product->weight = (float)$product_xml->Weight;
        $product->minimal_quantity = (int)$product_xml->MinOrderQty;
        $product->id_category_default = 2;
        $product->name[1] = utf8_encode($product_xml->Products_name);
        $product->description[1] = utf8_encode($product_xml->Description);
        $product->description_short[1] = utf8_encode($product_xml->Short_Description);
        $product->link_rewrite[1] = Tools::link_rewrite($product_xml->Products_name);
        if (!isset($product->date_add) || empty($product->date_add))
            $product->date_add = date('Y-m-d H:i:s');
        $product->date_upd = date('Y-m-d H:i:s');
        $id_product ? $product->updateCategories(array(2)) : $product->addToCategories(array(2));
        $product->save();
 
        echo 'Product <b>'.$product->name[1].'</b> '.($id_product ? 'updated' : 'created').'<br />';
    }else{
      echo "No se pudieron crear los productos";
    }
}