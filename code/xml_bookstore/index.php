<?php 
require_once('controllers/xslt_transformer.php');

$xsl_params = array();

if(!empty($_GET['sort'])){
	$xsl_params[] = array('sort_selector' => $_GET['sort']);
}
else{
	$xsl_params[] = array('sort_selector' => 'Title');	
}

$transformer = new AGED_XSLT_Transformer;

echo $transformer->get_transformed_xml('models/allBooks.xml', 'views/index.xsl', $xsl_params);

?>