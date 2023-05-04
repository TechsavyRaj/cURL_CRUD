<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

class CURL extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function get()
	{
		/* Endpoint */
		$url = 'https://reqres.in/api/users';
		/* eCURL(Initialise) */
		$ch = curl_init($url);

		/* Return json */
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch);

		if($e=curl_error($ch)){
			echo $e;
		}
		else {
			$decoded=json_decode($result,true);
			echo '<pre>';
			print_r($decoded);
		}

		/* Close cURL */
		curl_close($ch);
	}

	public function post()
	{
		$url = 'https://reqres.in/api/register';

		//userData Array
		$userData = array(
			"email"=> "eve.holt@reqres.in",
    		"password"=> "pistol"
		);

		$ch = curl_init($url);

		curl_setopt($ch, CURLOPT_TIMEOUT, 30);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS,  http_build_query($userData));			//sends the data

		$result = curl_exec($ch);
		if($e=curl_error($ch)){
			echo $e;
		}
		else {
			$decoded=json_decode($result,true);
			foreach($decoded as $key => $val) {
				echo $key.' : '.$val.'<br>';
			}	
			// echo $result;
			// print_r($decoded);
		}
		curl_close($ch);
	}

	public function put()
	{
		$url = 'https://reqres.in/api/users/';

		//userData Array
		$userData = array(
			'name' => 'Name Update',
			'job' => 'Dev Employee',
		);

		$header=array(
			'Authorization: fgsygfsydsyfyusd'
		);
		
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($userData));			//sends the data
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);			

		$result = curl_exec($ch);
		if($e=curl_error($ch)){
			echo $e;
		}
		else {
			$decoded=json_decode($result,true);
			echo '<pre>';
			print_r($decoded);
		}

		curl_close($ch);
	}

	public function delete()
	{
		$url = 'https://reqres.in/api/users/2';

		$ch = curl_init($url);

		$header=array(
			'Authorization: fgsygfsydsyfyusd'
		);

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);		
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");				//sets the Method
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);			

		$result = curl_exec($ch);
		echo $result;

		curl_close($ch);
	}

	public function file()
	{
		$url = 'https://reqres.in/api/users/2';

		$ch = curl_init($url);
		$fh=fopen("file.txt","w");
		
		curl_setopt($ch, CURLOPT_FILE, $fh);

		$result = curl_exec($ch);
		echo $result;

		fclose($fh);
		curl_close($ch);
	}
}


/* End of file CURL.php */
/* Location: ./application/controllers/CURL.php */