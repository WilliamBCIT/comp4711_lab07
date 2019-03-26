<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Server extends Controller
{
        public function index()
        {

		
        }
		
		public function response(){
			
		$code   = $response->getStatusCode();    // 200
		$reason = $response->getReason();      // OK
		$body = $response->getBody();

			if (strpos($response->getHeader('content-type'), 'application/json') !== false)
			{
				$body = json_decode($body);
			}		

		
		}
		
		
		
		
		}