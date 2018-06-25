<?php
// defined('BASEPATH') OR exit('No direct script access allowed');
// require APPPATH . 'libraries/REST_Controller.php';

class Restful_test extends TestCase {
  private $ci;
  function setUp() {
      parent::setUp();
  }

  public function test_index_get(){
    // $output = $this->request('GET', 'http://127.0.0.1/index.php/restful/index');
    $output = $this->request('GET', 'restful/index');
    var_dump($output);
    // $response = json_decode($res->getBody());
    // print_r($output);
    // $this->assertObjectHasAttribute('id', $response);
    // $this->assertObjectHasAttribute('method', $response);
    // $this->assertObjectHasAttribute('createdAt', $response);
    // $this->assertResponseCode(200);
  }

  public function test_index_post(){
    
  }

  public function test_index_put(){

  }

  public function test_index_delete(){

  }
}