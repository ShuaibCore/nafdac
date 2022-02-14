<?php
defined('BASEPATH') OR exit("No direct script access allowed. Thanks");
class Company extends CI_Controller{

function lists(){
    try {
    $data = array(
        "userid" => $this->input->get('userid'),
    );
    $this->load->model('api/CompanyModel');
    $this->CompanyModel->getInfo($data);

} catch (Exception $e) {
    $response=array( 
        'status' => 'errorform',
        'statusmsg' => 'error',
        'error' => array($e->getMessage()),
        'msg' => 'Server error, kindly try again or report this error.',
        'classname' => 'alert-danger',
    );
    echo json_encode($response);
    die();
}
}

// End of controller
}