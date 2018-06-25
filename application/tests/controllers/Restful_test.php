<?php
// defined('BASEPATH') OR exit('No direct script access allowed');
// require APPPATH . 'libraries/REST_Controller.php';

namespace GuzzleHttp\Tests\Psr7;
use GuzzleHttp\Psr7;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Uri;

class Restful_test extends TestCase {
  private $ci;
  protected $http = null;

  function setUp() {
      parent::setUp();
      $this->http = new \GuzzleHttp\Client();
  }

  public function test_index_get(){
    $uri = new Uri('/restful/index');
    $res = $this->http->request('GET', $rui);
    // $res = $this->http->request('GET', 'http://127.0.0.1/index.php/restful/index');
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