<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Pesan extends CI_Controller {
        public function index(){
            $this->load->model('Tugas_model');

            $model = $this->Tugas_model;

            $a = $model->txt;
            $b = $model->txt2;

            $data = array ('teks' => $a, 'teks2'=>$b);

            $this->load->view('Pesanview', $data);
        }
    }
?>