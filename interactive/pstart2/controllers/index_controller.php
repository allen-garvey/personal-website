<?php 
require_once('bookmark_show_controller.php');

class AGED_Productivity_Startpage_2_Index_Controller{
	protected function array_to_delimited_list_string($an_array, $delimiter=','){
		$delimited_list_string = '';

		foreach ($an_array as $item) {
			$delimited_list_string = $delimited_list_string . $item . $delimiter;
		}
		return substr($delimited_list_string, 0, strlen($delimited_list_string)-1);
	}
	public function get_index(){
		$current_timestamp = time();

		$bookmark_controller = new AGED_Bookmark_Show_Controller($current_timestamp, $_SERVER['HTTP_USER_AGENT']);

		//filter raw array based on day of week
		$raw_bookmark_id_array = array(array('e_contents_list', 'always_true'), array('b_contents_list', 'always_true'), array('l_contents_list', 'always_true'), array('m_contents_list', 'should_show_m'), array('tr_contents_list', 'always_true'), array('c_contents_list', 'always_true'), array('x_contents_list', 'always_true'), array('y_contents_list', 'should_show_y'), array('z_contents_list', 'should_show_z'));
		
		$bookmark_id_array = array();

		foreach ($raw_bookmark_id_array as $name_and_test_array) {
			if($bookmark_controller->$name_and_test_array[1]()){
				$bookmark_id_array[] = $name_and_test_array[0];
			}
		}

		$xsl = new DOMDocument;
		$xsl->load('views/pstart2.xsl');

		$proc = new XSLTProcessor;
		$proc->importStyleSheet($xsl);
		$proc->setParameter('','bookmark_id_list', $this->array_to_delimited_list_string($bookmark_id_array));
		$proc->setParameter('','is_authorized', $bookmark_controller->get_is_authorized() ? 'true' : 'false');
		$proc->setParameter('','device_code', $bookmark_controller->get_device_code());

		$xml = new DOMDocument;
		$xml->load('models/bookmarks1.xml');

		$transformedXML = $proc->transformToXML($xml);
		return $transformedXML;
	}
}
?>

