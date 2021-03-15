<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Variable extends CI_Controller{
        public function index(){
            $data = ['variable1'=>'Variable ke 1', 'variable2'=>'Variable ke 2' ];

            $this->load->view('variabelview', $data);
        }
    }
?>