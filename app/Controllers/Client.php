<?php namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CURLRequest;

class Client extends Controller
{
        public function index()
        {
			
        }

		
		public function sumbit_form(){
			
			$client = \Config\Services::curlrequest();	
			
			$client->request('POST', '/post', [
					'form_params' => [
					'name' => 'Bob Jones',
					'email' => 'Bob@PersonalTrainerBob.com',
					'password' => 'password123',
					'clients' => ['Eric Ericson', 'Samantha Sammy']
			]
		]);			
		
		}

		
		}