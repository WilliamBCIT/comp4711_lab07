<?php namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CURLRequest;

class Client extends Controller
{
        public function index()
        {
			
		    submit_form();	
			echo ('Form submitted');
			
        }

		
		public function sumbit_form(){
			
			$client = \Config\Services::curlrequest();	
			
			$new_response = $client->request('POST', '/post', [
					'form_params' => [
					'name' => 'Bob Jones',
					'email' => 'Bob@PersonalTrainerBob.com',
					'password' => 'password123',
					'clients' => ['Eric Ericson', 'Samantha Sammy']
			]
		]);			
		
			$server = new Server;
		    $server->handle_response($new_response);
		
		}
		
		}