<?php
class Dashboard extends CI_Controller {
    public function index() {
        $this->load->view('dashboard_view');
    }

    public function biodata() {
        $this->load->model('Biodata_model');
        $data['biodata'] = $this->Biodata_model->get_biodata();
        $this->load->view('biodata_view', $data);
    }

    public function biodata2() {
        $this->load->model('Biodata_model2');
        $data['biodata'] = $this->Biodata_model2->get_biodata2();
        $this->load->view('biodata_view', $data);
    }
    
    public function biodata3() {
            $this->load->model('Biodata_model3');
            $data['biodata'] = $this->Biodata_model3->get_biodata3();
            $this->load->view('biodata_view', $data);
    }    
}
?>