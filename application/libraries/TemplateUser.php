<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class templateUser {
		var $templateuser_data = array();
		
		function set($name, $value)
		{
			$this->templateuser_data[$name] = $value;
		}
	
		function load($templateuser = '', $view = '' , $view_data = array(), $return = FALSE)
		{               
			$this->CI =& get_instance();
			$this->set('contents', $this->CI->load->view($view, $view_data, TRUE));			
			return $this->CI->load->view($templateuser, $this->templateuser_data, $return);
		}
}

/* End of file templateuser.php */
/* Location: ./system/application/libraries/templateuser.php */