<?php 

class AGED_XSLT_Transformer
{
	
	public function get_transformed_xml($xml_doc_path, $xslt_path, $parameter_array=null){
		// $parameter_array is an array of associative arrays containing the xslt parameters as key-value pairs
		$xsl = new DOMDocument;
		$xsl->load($xslt_path);

		$proc = new XSLTProcessor;
		$proc->importStyleSheet($xsl);

		if (!is_null($parameter_array)) {
			foreach ($parameter_array as $parameter_key_value) {
				foreach ($parameter_key_value as $parameter_name => $parameter_value) {
					$proc->setParameter('', $parameter_name, $parameter_value);
				}
			}
		}
		
		$xml = new DOMDocument;
		$xml->load($xml_doc_path);

		return $proc->transformToXML($xml);
	}
}




?>