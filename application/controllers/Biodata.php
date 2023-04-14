<?php
class Biodata extends CI_Controller {
    public function index() {
        $this->load->model('Biodata_model');
        $data['biodata'] = $this->Biodata_model->get_biodata();
        $this->load->view('biodata_view', $data);
    }
}
?>