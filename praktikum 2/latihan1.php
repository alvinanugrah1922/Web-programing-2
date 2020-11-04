<?php
class latihan1 extends CI_Controller
{
    public function index()
    {
        echo "Welcome to Programming Web Class..";
    }
    public function penjumlahan($n1, $n2)
    {
        $this->load->model('Model1');
        //memanggil model
        $hasil = $this->Model1 ->jumlah($n1, $n2);
        //memanggil hasil dari fungsi jumlah yang ada diModel1 
        echo "Hasil Penjumlahan dari ".$n1."+".$n2."=".$hasil;
    }
}