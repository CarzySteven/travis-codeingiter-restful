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
    $res = $this->http->request('GET', 'http://127.0.0.1/index.php/restful/index');
    $response = json_decode($res->getBody());
    foreach ($response as $key => $data) 
    {
      $this->assertObjectHasAttribute('id', $data);
      $this->assertObjectHasAttribute('method', $data);
      $this->assertObjectHasAttribute('createdAt', $data);  
    }
    
    $this->assertEquals($res->getStatusCode(), 200);
    // $this->assertResponseCode(200);
  }

}