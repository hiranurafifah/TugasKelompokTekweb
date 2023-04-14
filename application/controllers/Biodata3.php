<?php
class Biodata3 extends CI_Controller {
    public function index() {
        $this->load->model('Biodata_model3');
        $data['biodata'] = $this->Biodata_model3->get_biodata3();
        $this->load->view('biodata_view', $data);
    }
}
?>