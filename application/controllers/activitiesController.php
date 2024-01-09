<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/RestController.php';
require APPPATH . 'libraries/Format.php';

use chriskacerguis\RestServer\RestController;

class activitiesController extends RestController
{

    public function __construct()
    {
        parent::__construct();
        $key=$this->input->get_request_header("X-API-KEY");
        $limit=10;

        $this->db->select('*');
        $this->db->from('api_keys');
        $this->db->where('api_key', $key);
        $query = $this->db->get();
        $data=$query->result_array();

        if($data[0]['hit_count']>=$limit){
            echo "limit expired";
            exit;
        }else{
            $count=$data[0]['hit_count']+1;
            $query = "UPDATE `api_keys` SET hit_count=$count WHERE api_keys.api_key='$key'";
            $this->db->query($query);
            echo $count;
        }
        $this->load->model('activitymodel');
    }

    public function activity_get($akey,$limit)
    {
        $limit = $this->input->get('limit');
        //$akey = $this->input->get('akey');

        $data = $this->activitymodel->activity_Data($limit, $akey);

        if (!empty($data)) {
            $this->response($data, RestController::HTTP_OK);
        } else {
            $this->response(['error' => 'No data found'], RestController::HTTP_NOT_FOUND);
        }
    }

    public function activity_global_get($akey,$limit)
    {
        $limit = $this->input->get('limit');

        $data = $this->activitymodel->activity_global_Data($limit, $akey);
        if (!empty($data)) {
            $this->response($data, RestController::HTTP_OK);
        } else {
            $this->response(['error' => 'No data found'], RestController::HTTP_NOT_FOUND);
        }
    }

    public function activity_v2_get($type_id,$limit) {
        $type_id = $this->get('type_id');
        $limit = $this->get('limit');

        $sessionData = $this->activitymodel->activity_v2_Data($type_id,$limit);
        if (!empty($sessionData)) {
            $this->response($sessionData, RestController::HTTP_OK);
        } else {
            $this->response(['error' => 'No data found'], RestController::HTTP_NOT_FOUND);
        }
        
    }
    public function webinars_get() {
        $limit = $this->get('limit');


        $webinarsData = $this->activitymodel->Webinars_Data($limit);

        if (!empty($webinarsData)) {
            $this->response($webinarsData, RestController::HTTP_OK);
        } else {
            $this->response(['error' => 'No data found'], RestController::HTTP_NOT_FOUND);
        }
    }

    public function workshop_get() {
        $limit = $this->input->get('limit'); 
        $akey = $this->input->get('akey'); 


        $webinarsData = $this->activitymodel->workshop_Data($limit, $akey);

        if (!empty($webinarsData)) {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($webinarsData));
        } else {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(['error' => 'No data found']));
        }
    }
}
