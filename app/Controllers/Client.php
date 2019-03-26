<?php namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CURLRequest;

class Client extends Controller
{
        public function index()
        {
			
        }

		
		public function curl_request(){
			
			$client = \Config\Services::curlrequest();	
			
		}

		
		}