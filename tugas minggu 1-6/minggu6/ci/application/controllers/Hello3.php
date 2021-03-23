<?php
class Hello extends CI_Controller{
    public function index(){
        // c3 = memuat model 'Hello_model'
       $this->load->model('Hello_model');

        //Pengambilan objek dari kelas Hello_mode dan dimuat di var $model
        $model = $this->Hello_model;

        //mengambila data dari model
        $a = $model->txt;

        //Membuat data yang alan dikirim ke view
        $data['teks'] = $a;

        //memanggil file view
        $this->load->view('helloview', $data);//file view
    }
}
?>