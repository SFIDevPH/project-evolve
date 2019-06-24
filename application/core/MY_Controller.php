<?php
// normal
class MY_Controller extends CI_Controller {
    
    function _remap($method, $args) {
        $this->before();
			
            if(method_exists($this, $method) ){                  
                call_user_func_array(array($this, $method), $args);                   
            } else { show_404('',FALSE); }
       
        $this->after();
    }

    protected function before() 
    { 
        $this->load->view('templates/default/header');
        return;        
    }
    
    protected function after() 
    { 
        $this->load->view('templates/default/footer');
        return;        
    }
    
}

// pages
class PAGES_Controller extends MY_Controller {
    
    function _remap($method, $args) {
        $this->before();
            
            if(method_exists($this, $method) ){                  
                call_user_func_array(array($this, $method), $args);                   
            } else { show_404('',FALSE); }
       
        $this->after();
    }

    protected function before() 
    { 
        $this->load->view('templates/pages/header');
        return;        
    }
    
    protected function after() 
    { 
        $this->load->view('templates/pages/footer');
        return;        
    }
    
}

// pages
class SERVICES_Controller extends CI_Controller {
    
    function _remap($method, $args) {
        $this->before();
            
            if(method_exists($this, $method) ){                  
                call_user_func_array(array($this, $method), $args);                   
            } else { show_404('',FALSE); }
       
        $this->after();
    }

    protected function before() 
    { 
        $this->load->view('templates/services/header');
        return;        
    }
    
    protected function after() 
    { 
        $this->load->view('templates/services/footer');
        return;        
    }
    
}

// pages
class FORM_Controller extends CI_Controller {
    
    function _remap($method, $args) {
        $this->before();
            
            if(method_exists($this, $method) ){                  
                call_user_func_array(array($this, $method), $args);                   
            } else { show_404('',FALSE); }
       
        $this->after();
    }

    protected function before() 
    { 
        $this->load->view('templates/schedule/header');
        return;        
    }
    
    protected function after() 
    { 
        $this->load->view('templates/schedule/footer');
        return;        
    }
    
}

class MYFORM_Controller extends CI_Controller {
    
    function _remap($method, $args) {
        $this->before();
            // original setup
            if(method_exists($this, $method) ){                  
                call_user_func_array(array($this, $method), $args);                   
            } else { show_404('',FALSE); }
        $this->after();
    }

    protected function before() 
    { 
        $this->load->view('templates/form/header');
        return;        
    }
    
    protected function after() 
    { 
        $this->load->view('templates/form/footer');
        return;        
    }
    
}