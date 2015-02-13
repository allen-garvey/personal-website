<?php 
require_once('controllers/xslt_transformer.php');

$xsl_params = null;

if(!empty($_GET['ISBN'])){
	$xsl_params = array(array('ISBN_request' => $_GET['ISBN']));
}


$transformer = new AGED_XSLT_Transformer;

echo $transformer->get_transformed_xml('models/allBooks.xml', 'views/details.xsl', $xsl_params);

?>