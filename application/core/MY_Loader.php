<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* load the MX_Loader class */
require APPPATH."third_party/MX/Loader.php";

class MY_Loader extends MX_Loader {
	
	public function admin($template_name, $vars = array(), $return = FALSE)
    {
		if($return):
        $content  = $this->view('layouts/p_head', $vars, $return);
        $content .= $this->view('layouts/p_nav', $vars, $return);
        $content .= $this->view($template_name, $vars, $return);
        $content .= $this->view('layouts/p_footer', $vars, $return);

        return $content;
    else:
        $this->view('layouts/p_head', $vars, $return);
        $this->view('layouts/p_nav', $vars, $return);
        $this->view($template_name, $vars, $return);
        $this->view('layouts/p_footer', $vars, $return);
		
    endif;
    }
}