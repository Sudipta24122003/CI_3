<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class movie extends CI_Controller {

    public function netflix() {
        $this->load->view('netflix');
    }
}

?>
