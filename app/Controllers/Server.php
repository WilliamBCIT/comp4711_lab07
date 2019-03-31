<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Server extends Controller
{
        public function index()
        {

		
        }
		
		public function work(){
			
		
			if (strpos($response->getHeader('content-type'), 'application/x-www-form-urlencoded') !== false)
				{

					$body = $response->getBody();
		
					return $this->response->setBody($body);

				}			
			
		}
		
		public function handle_response($response){
			
			$code   = $response->getStatusCode();    // 200
			$reason = $response->getReason();      // OK

			echo $response->getHeaderLine('Content-Type');
			
			foreach ($response->getHeaders() as $name => $value)
			{
					echo $name .': '. $response->getHeaderLine($name) ."\n";
			}
		
		}
		
		}