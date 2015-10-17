<?php 
/*
Copyright (c) 2013 John Atkinson (jga)
*/

class ModelPaymenteMark extends Model {
  	public function getMethod($address) {
		$this->load->language('payment/eMark');
		
		if ($this->config->get('eMark_status')) {
        	$status = TRUE;
		} else {
			$status = FALSE;
		}
		
		$method_data = array();
	
		if ($status) {  
      		$method_data = array( 
        		'code'         	=> 'eMark',
        		'title'      	=> $this->language->get('text_title'),
				'sort_order' 	=> $this->config->get('eMark_sort_order'),
      		);
    	}
   
    	return $method_data;
  	}
}
?>
