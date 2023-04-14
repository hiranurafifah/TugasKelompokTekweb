<?php
class Biodata_model3 extends CI_Model {
    public function get_biodata3() {
        $data = array(
            'nama' => 'Muhammad Diky Fadhilahsyah R',
            'nim' => '3411201056',
            'umur' => '21',
            'agama' => 'Islam',
            'alamat' => 'Jln Dustira'
        );
        return $data;
    }
}
?>