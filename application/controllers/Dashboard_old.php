<?php
/**
 * Created by PhpStorm.
 * User: dipan
 * Date: 14-08-2017
 * Time: 13:02
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('DashboardModel');
    }

    public function page($page = 'Stats')
    {
        if(!$this->ion_auth->logged_in()){
            redirect('auth/login', 'refresh');
        } else {
            if (!file_exists(APPPATH.'views/partial/'.$page.'.php')) {
                show_404();
        }
            $data['page'] = 'partial/'.$page;
            $this->load->view('common/Dashboard', $data);
        }

    }
    
    public function showimage()
    {
        $this->load->model('DashboardModel');
        $data['image_data'] = $this->DashboardModel->getimage();
         $data['page'] = 'partial/EditVehicle';

        $this->load->view('common/Dashboard', $data);
    }

    public function addVehicle()
    {

        $this->form_validation->set_rules('vehicleName', 'Name of the Vehicle', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('vehicleDescr', 'Vehicle Description', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('maker', 'Maker', 'trim');
        $this->form_validation->set_rules('displace', 'Displacement', 'trim');
        $this->form_validation->set_rules('fuel', 'Fuel', 'trim');
        $this->form_validation->set_rules('capacity', 'Capacity', 'trim');
        $this->form_validation->set_rules('inspection', 'Vehicle inspection crack', 'trim');
        $this->form_validation->set_rules('inspecRecord', 'Inspection record', 'trim');
        $this->form_validation->set_rules('spdCon', 'Speed ​​control device', 'trim');
        $this->form_validation->set_rules('exhust', 'Exhaust gas regulation', 'trim');
        $this->form_validation->set_rules('totalWeig', 'Vehicle total weight', 'trim');
        $this->form_validation->set_rules('modelYear', 'Model year', 'trim');
        $this->form_validation->set_rules('model', 'Model', 'trim');
        $this->form_validation->set_rules('shape', 'Shape', 'trim');
        $this->form_validation->set_rules('color', 'Body color', 'trim');
        $this->form_validation->set_rules('dimension', 'Body dimensions', 'trim');
        $this->form_validation->set_rules('vehicleWeight', 'Vehicle weight', 'trim');
        $this->form_validation->set_rules('mileage', 'Mileage', 'trim');
        $this->form_validation->set_rules('elephantManufacturer', 'Elephant manufacturer', 'trim');
        $this->form_validation->set_rules('packageDimen', 'Package dimensions', 'trim');
        $this->form_validation->set_rules('maxLoadCap', 'Maximum loading capacity', 'trim');
        $this->form_validation->set_rules('primeMover', 'Prime mover', 'trim');
        $this->form_validation->set_rules('mission', 'Mission', 'trim');
//        $this->form_validation->set_rules('leadImg', 'Lead Image', 'trim|required');
        $recom = false;
        if($this->input->post('recom') !== null){
            $recom = true;
        }

        $vFormData = array(
            'Pr_name' => $this->input->post('vehicleName'),
            'Description' => $this->input->post('vehicleDescr'),
            'Maker' => $this->input->post('maker'),
            'Displacement' => $this->input->post('displace'),
            'Fuel' => $this->input->post('fuel'),
            'Capacity' => $this->input->post('capacity'),
            'VIC' => $this->input->post('inspection'),
            'InsRecord' => $this->input->post('inspecRecord'),
            'SCD' => $this->input->post('spdCon'),
            'EGR' => $this->input->post('exhust'),
            'VWeightTot' => $this->input->post('totalWeig'),
            'ModelYear' => $this->input->post('modelYear'),
            'Model2' => $this->input->post('model'),
            'Shape' => $this->input->post('shape'),
            'BColor' => $this->input->post('color'),
            'BDimension' => $this->input->post('dimension'),
            'VWeight' => $this->input->post('vehicleWeight'),
            'Mileage' => $this->input->post('mileage'),
            'EManf' => $this->input->post('elephantManufacturer'),
            'PackDim' => $this->input->post('packageDimen'),
            'MaxLCapacity' => $this->input->post('maxLoadCap'),
            'PMover' => $this->input->post('primeMover'),
            'Mission' => $this->input->post('mission'),
            'Recommended' => $recom,
            'CatId' => $this->input->post('category'),
            'TOC' => date('Y-m-d H:i:s'),
            'LMT' => date('Y-m-d H:i:s'),
            'Status' => 1

        );
//        echo "<pre>";
//        print_r($vFormData); exit;



        if ($this->form_validation->run() == FALSE)
        {
            $valERR = validation_errors();
            $this->session->set_flashdata('addFromValErr', $valERR);
            redirect(base_url().'Dashboard/page/AddVehicle');
        }
        else
        {
            // Insert form data in table
            $lastInsertedId = $this->DashboardModel->addVehicle($vFormData);

            if ($lastInsertedId) { // if last inserted ID exist
                $this->session->set_flashdata('addFromSucc', 'Data Added Successfully.');
                if (!empty($_FILES['leadImg']['name'])){ // second time checking if exists or not
                    $config['upload_path']   = 'assets/images/vcimg/';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size']      = '2048';
                    $config['encrypt_name']  = true;
                    $this->load->library('upload', $config);

                    if (!$this->upload->do_upload('leadImg', FALSE)){
                        $leadImgUldErr = $this->upload->display_errors();
                        $this->session->set_flashdata('errLeadImg', $leadImgUldErr);
                    } else { // Upload successful
                        $leadUpload_data = $this->upload->data();
                        $image_path = base_url("/assets/images/vcimg/". $leadUpload_data['raw_name'].$leadUpload_data['file_ext']);
                        $leadImgData = array(
                            "TOC" => date('Y-m-d H:i:s'),
                            "Path" => $image_path,
                            "Lead" => 1,
                            "Prod_Id" => $lastInsertedId,
                            "Status" => 1
                        );
                        $leadImgInsertd = $this->DashboardModel->insert_leadImg($leadImgData);
                        if (!$leadImgInsertd) {
                            $this->session->set_flashdata('ErrInsLdImg', 'Encountered an Error While Saving Image.');
                            $data['page'] = 'partial/AddVehicle';
                            redirect(base_url().'Dashboard/page/AddVehicle');
                        }
                        if(!empty($_FILES['userFiles']['name'])){ // If other images exists
                            $files = $_FILES;
                            $dataInfo = array();
                            $cpt = count($_FILES['userFiles']['name']);
                            for($i=0; $i<$cpt; $i++) {
                                $_FILES['userFiles']['name']= $files['userFiles']['name'][$i];
                                $_FILES['userFiles']['type']= $files['userFiles']['type'][$i];
                                $_FILES['userFiles']['tmp_name']= $files['userFiles']['tmp_name'][$i];
                                $_FILES['userFiles']['error']= $files['userFiles']['error'][$i];
                                $_FILES['userFiles']['size']= $files['userFiles']['size'][$i];

                                $othconfig['upload_path']   = 'assets/images/vcimg/';
                                $othconfig['allowed_types'] = 'gif|jpg|png';
                                $othconfig['max_size']      = '2048';
                                $othconfig['encrypt_name']  = true;
                                $this->load->library('upload', $othconfig);

                                if ( !$this->upload->do_upload('userFiles')){
                                    $otherImgUldErr = $this->upload->display_errors();
                                    $this->session->set_flashdata('errOtherImg', $otherImgUldErr);
                                } else { // Upload successful
                                    $otherImageData = $this->upload->data();
                                    $image_path = base_url("/assets/images/vcimg/". $otherImageData['raw_name'].$otherImageData['file_ext']);
                                    $dataInfo = array(
                                        "TOC" => date('Y-m-d H:i:s'),
                                        "Path" => $image_path,
                                        "Lead" => 0,
                                        "Prod_Id" => $lastInsertedId,
                                        "Status" => 1
                                    );

                                   $otherImgUploded = $this->DashboardModel->insert_otherImg($dataInfo);
                                   if (!$otherImgUploded) {
                                       $this->session->set_flashdata('errOtherImgIns', 'Encountered an Error While Saving Image/s.');
                                   }
                                }
                            }

//                            $this->session->set_flashdata('addFromSucc', 'Succ in from validation');
//                            redirect(base_url().'Dashboard/page/AddVehicle');
                        }
                    }
                }
            } else {
                $this->session->set_flashdata('addFromErr', 'Encountered an Error While Saving Data.');
                $data['page'] = 'partial/AddVehicle';
                redirect(base_url().'Dashboard/page/AddVehicle');
            }

        }
        $data['page'] = 'partial/AddVehicle';
        redirect(base_url().'Dashboard/page/AddVehicle');
    }
  
  public function view()
    {
        //load the model
        $this->load->model('DashboardModel');
        //load the method of model
        $data['vehicleData']=$this->DashboardModel->selectAll();
        //return the data in view
        $data['page'] = 'partial/ViewVehicle';
        $this->load->view('common/Dashboard', $data);
    }
    public function editVehicle()
    {

        $this->form_validation->set_rules('vehicleName', 'Name of the Vehicle', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('vehicleDescr', 'Vehicle Description', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('maker', 'Maker', 'trim');
        $this->form_validation->set_rules('displace', 'Displacement', 'trim');
        $this->form_validation->set_rules('fuel', 'Fuel', 'trim');
        $this->form_validation->set_rules('capacity', 'Capacity', 'trim');
        $this->form_validation->set_rules('inspection', 'Vehicle inspection crack', 'trim');
        $this->form_validation->set_rules('inspecRecord', 'Inspection record', 'trim');
        $this->form_validation->set_rules('spdCon', 'Speed ​​control device', 'trim');
        $this->form_validation->set_rules('exhust', 'Exhaust gas regulation', 'trim');
        $this->form_validation->set_rules('totalWeig', 'Vehicle total weight', 'trim');
        $this->form_validation->set_rules('modelYear', 'Model year', 'trim');
        $this->form_validation->set_rules('model', 'Model', 'trim');
        $this->form_validation->set_rules('shape', 'Shape', 'trim');
        $this->form_validation->set_rules('color', 'Body color', 'trim');
        $this->form_validation->set_rules('dimension', 'Body dimensions', 'trim');
        $this->form_validation->set_rules('vehicleWeight', 'Vehicle weight', 'trim');
        $this->form_validation->set_rules('mileage', 'Mileage', 'trim');
        $this->form_validation->set_rules('elephantManufacturer', 'Elephant manufacturer', 'trim');
        $this->form_validation->set_rules('packageDimen', 'Package dimensions', 'trim');
        $this->form_validation->set_rules('maxLoadCap', 'Maximum loading capacity', 'trim');
        $this->form_validation->set_rules('primeMover', 'Prime mover', 'trim');
        $this->form_validation->set_rules('mission', 'Mission', 'trim');
//        $this->form_validation->set_rules('leadImg', 'Lead Image', 'trim|required');
        $recom = false;
        if($this->input->post('recom') !== null){
            $recom = true;
        }

        $vFormData = array(
            'Pr_name' => $this->input->post('vehicleName'),
            'Description' => $this->input->post('vehicleDescr'),
            'Maker' => $this->input->post('maker'),
            'Displacement' => $this->input->post('displace'),
            'Fuel' => $this->input->post('fuel'),
            'Capacity' => $this->input->post('capacity'),
            'VIC' => $this->input->post('inspection'),
            'InsRecord' => $this->input->post('inspecRecord'),
            'SCD' => $this->input->post('spdCon'),
            'EGR' => $this->input->post('exhust'),
            'VWeightTot' => $this->input->post('totalWeig'),
            'ModelYear' => $this->input->post('modelYear'),
            'Model2' => $this->input->post('model'),
            'Shape' => $this->input->post('shape'),
            'BColor' => $this->input->post('color'),
            'BDimension' => $this->input->post('dimension'),
            'VWeight' => $this->input->post('vehicleWeight'),
            'Mileage' => $this->input->post('mileage'),
            'EManf' => $this->input->post('elephantManufacturer'),
            'PackDim' => $this->input->post('packageDimen'),
            'MaxLCapacity' => $this->input->post('maxLoadCap'),
            'PMover' => $this->input->post('primeMover'),
            'Mission' => $this->input->post('mission'),
            'Recommended' => $recom,
            'CatId' => $this->input->post('category'),
            'TOC' => date('Y-m-d H:i:s'),
            'LMT' => date('Y-m-d H:i:s'),
            'Status' => 1,
            'Id' => $this->input->post('id')

        );
       //echo "<pre>";
        //print_r($vFormData); exit;



        if ($this->form_validation->run() == FALSE)
        {
            $valERR = validation_errors();
            $this->session->set_flashdata('addFromValErr', $valERR);

            redirect(base_url().'Dashboard/view');
        }
        else
        {
            
            // Insert form data in table
            $lastInsertedId = $this->DashboardModel->editVehicle($vFormData);

            if ($lastInsertedId) { // if last inserted ID exist
                $this->session->set_flashdata('addFromSucc', 'Data Added Successfully.');
                if (!empty($_FILES['leadImg']['name'])){ // second time checking if exists or not
                    $config['upload_path']   = 'assets/images/vcimg/';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size']      = '2048';
                    $config['encrypt_name']  = true;
                    $this->load->library('upload', $config);

                    if (!$this->upload->do_upload('leadImg',FALSE)){
                        $leadImgUldErr = $this->upload->display_errors();
                        $this->session->set_flashdata('errLeadImg', $leadImgUldErr);
                    } else { // Upload successful
                        $leadUpload_data = $this->upload->data();
                        $leadImgData = array(
                            "TOC" => date('Y-m-d H:i:s'),
                            "Path" => $leadUpload_data['full_path'],
                            "Lead" => 1,
                            "Prod_Id" => $lastInsertedId,
                            "Status" => 1
                        );
                        $leadImgInsertd = $this->DashboardModel->insert_leadImg($leadImgData);

                        if (!$leadImgInsertd) {
                            $this->session->set_flashdata('ErrInsLdImg', 'Encountered an Error While Saving Image.');
                            $data['page'] = 'partial/EditVehicle';
                            redirect(base_url().'Dashboard/edit/'.$id);

                        }// image uploaD                        
                    }
                }
            } else {
                $this->session->set_flashdata('addFromErr', 'Encountered an Error While Saving Data.');
                $data['page'] = 'partial/EditVehicle';
                redirect(base_url().'Dashboard/view');
            }

        }
        $data['page'] = 'partial/EditVehicle';
        redirect(base_url().'Dashboard/view');
    } 

    public function edit($pr_id)
    {
        //$data['page'] = 'partial/'.$id;
        //$this->load->view('common/Dashboard', $data);
        $data['product_data'] = $this->DashboardModel->editid($pr_id);
        $data['img_data'] = $this->DashboardModel->getImageByProductId($pr_id);
        $data['lead_img_data'] = $this->DashboardModel->getLedImage($pr_id);
        $data['page'] = 'partial/EditVehicle';
        $this->load->view('common/Dashboard', $data);
    }
    public function remove($pr_id)
    {
        //$data['page'] = 'partial/'.$id;
        //$this->load->view('common/Dashboard', $data);
        $data['product_data'] = $this->DashboardModel->remove($pr_id);
        $data['page'] = 'partial/removeVehicle';
        $this->load->view('common/Dashboard', $data);
    }
    public function deleteImage($img_id, $pr_id)
    {
    	$base = base_url();
    	$urlBody = 'Dashboard/edit/'.$pr_id;
        $data = $this->DashboardModel->deleteImageById($img_id);
        header("Location: $base$urlBody");
    }
    public function removeStatus($pr_id, $status)
    {
        $data = array(
        'table_name' => 'product', // the table name
        'id' => $pr_id,
        'status' => $status
        );
        $this->load->model('DashboardModel');
        //$data['page'] = 'partial/'.$id;
        //$this->load->view('common/Dashboard', $data);
        if( $this->DashboardModel->removeStat($data,$pr_id,$status)){
        $data['page'] = 'partial/EditVehicle';
        redirect(base_url().'Dashboard/view');
        }
        else{
           $data['page'] = 'partial/EditVehicle';
            redirect(base_url().'Dashboard/view');
        }
    }
    public function uploadImages() {
    		$pr_id = $this->input->post('pr_id');
    		$base = base_url();
    		$urlBody = 'Dashboard/edit/'.$pr_id;
                if(!empty($_FILES['userFiles']['name'])){ // If other images exists
                            $files = $_FILES;
                            $dataInfo = array();
                            $cpt = count($_FILES['userFiles']['name']);
                            for($i=0; $i<$cpt; $i++) {
                                $_FILES['userFiles']['name']= $files['userFiles']['name'][$i];
                                $_FILES['userFiles']['type']= $files['userFiles']['type'][$i];
                                $_FILES['userFiles']['tmp_name']= $files['userFiles']['tmp_name'][$i];
                                $_FILES['userFiles']['error']= $files['userFiles']['error'][$i];
                                $_FILES['userFiles']['size']= $files['userFiles']['size'][$i];

                                $othconfig['upload_path']   = 'assets/images/vcimg/';
                                $othconfig['allowed_types'] = 'gif|jpg|png';
                                $othconfig['max_size']      = '2048';
                                $othconfig['encrypt_name']  = true;
                                $this->load->library('upload', $othconfig);

                                if ( !$this->upload->do_upload('userFiles')){
                                    $otherImgUldErr = $this->upload->display_errors();
                                    header("Location: $base$urlBody");
                                } else { // Upload successful
                                    $otherImageData = $this->upload->data();
                                    $image_path = base_url("/assets/images/vcimg/". $otherImageData['raw_name'].$otherImageData['file_ext']);
                                    $dataInfo = array(
                                        "TOC" => date('Y-m-d H:i:s'),
                                        "Path" => $image_path,
                                        "Lead" => 0,
                                        "Prod_Id" => $pr_id ,
                                        "Status" => 1
                                    );

                                   $otherImgUploded = $this->DashboardModel->insert_otherImg($dataInfo);
                                   if (!$otherImgUploded) {
                                       header("Location: $base$urlBody");
                                   } else {
                                   	header("Location: $base$urlBody");
                                   }
                                }
                            }

//                            $this->session->set_flashdata('addFromSucc', 'Succ in from validation');
//                            redirect(base_url().'Dashboard/page/AddVehicle');
                        }
   }
}