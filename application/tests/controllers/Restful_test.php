<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';

class Restful_test extends TestCase {
  
  function setUp() {
      parent::setUp();
  }

  public function test_index_get(){
    $this->request('GET', 'restful/index');
    $response = json_decode($res->getBody());
    $this->assertObjectHasAttribute('id', $response);
    $this->assertObjectHasAttribute('method', $response);
    $this->assertObjectHasAttribute('createdAt', $response);
    $this->assertResponseCode(200);
  }

  public function test_index_post(){
    
  }

  public function test_index_put(){

  }

  public function test_index_delete(){

  }
}