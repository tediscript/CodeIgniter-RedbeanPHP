<?php

/**
 * Description of authlib
 *
 * @author tediscript
 */
class Authlib {

    function __construct() {
        $this->CI = & get_instance();
        $this->CI->load->library('session');
    }

    public function login($auth_data = array()) {
        $this->CI->session->set_userdata('auth_data', $auth_data);
    }

    public function logout() {
        $this->CI->session->unset_userdata('auth_data');
    }

    public function get_login() {
        return $this->CI->session->userdata('auth_data');
    }

    public function is_login() {
        if ($this->CI->session->userdata('auth_data')) {
            return true;
        } else {
            return false;
        }
    }

}

?>
