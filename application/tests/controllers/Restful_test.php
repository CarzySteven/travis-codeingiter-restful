<?php
// defined('BASEPATH') OR exit('No direct script access allowed');
// require APPPATH . 'libraries/REST_Controller.php';

class Restful_test extends TestCase {
  private $ci;
  protected $http = null;

  function setUp() {
      parent::setUp();
      $this->http = new \GuzzleHttp\Client();
  }

  public function test_index_get(){
    // $output = $this->request('GET', 'http://127.0.0.1/index.php/restful/index');
    // $output = $this->request('GET', 'restful/index');
    // $this->get('restful/index');
    $res = $this->http->request('GET', 'https://127.0.0.1/index.php/restful/index');
    $response = json_decode($res->getBody());
    // $response = json_decode($this->response->getBody(), true);
    // echo "<br>";
    // print_r($response);
    // var_dump($output);
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