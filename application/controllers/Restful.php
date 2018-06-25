<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';

class Restful extends REST_Controller {
  
  public function __construct() {
  	parent::__construct();
    $this->load->database();
  }

  public function index_get()
  {
  	$result = $this->db->get('restful')->result();
    $this->response($result, 200);
  }

  public function index_post()
  {
  	$op = $this->input->post('method');
  	$this->db->insert('restful',["method"=>$op,"createdAt"=>date("Y-m-d H:i:s")]);
  	$this->response(["id"=>$this->db->insert_id()],200);
  }

  public function index_put()
  {
  	$id = $this->put('id');
  	$method = $this->put('method');
  	$this->db->where('id',$id);
  	$this->db->update('restful',['method'=>$method,'createdAt'=>date('Y-m-d H:i:s')]);
	$this->response(['createdAt'=>date("Y-m-d H:i:s")],200);
  }

  public function index_delete()
  {
  	$id = $this->input->get('id');
  	$this->db->where('id',$id);
  	$this->db->delete("restful");
  	$this->response(['id'=>$id,'createdAt'=>date("Y-m-d H:i:s")],200);
  }
}