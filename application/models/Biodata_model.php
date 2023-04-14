<?php
class Biodata_model extends CI_Model {
    public function get_biodata() {
        $data = array(
            'nama' => 'Hira Nur Afifah',
            'nim' => '3411201036',
            'umur' => '20',
            'agama' => 'Islam',
            'alamat' => 'Jalan Pojok Utara 2'
        );
        return $data;
    }
}
?>