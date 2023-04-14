<?php
class Biodata_model2 extends CI_Model {
    public function get_biodata2() {
        $data = array(
            'nama' => 'Muhammad Ihsan Maulana',
            'nim' => '3411201039',
            'umur' => '21',
            'agama' => 'Islam',
            'alamat' => 'Purwakarta'
        );
        return $data;
    }
}
?>