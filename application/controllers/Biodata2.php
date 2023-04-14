<?php
class Biodata2 extends CI_Controller {
    public function index() {
        $this->load->model('Biodata_model2');
        $data['biodata'] = $this->Biodata_model2->get_biodata2();
        $this->load->view('biodata_view', $data);
    }
}
?>