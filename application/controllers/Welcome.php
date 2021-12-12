<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent:: __construct();
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}

	public function main()
	{
		// $dataSession = $this->session->userdata();
		// if($dataSession["is_login"] != 1){
		// 	redirect("/");
		// }
		
		$data["version"] = rand(10,1000);
		$this->load->view('header');
		$this->load->view('main', $data);
		$this->load->view('footer');
	}

	public function result()
	{
		// $dataSession = $this->session->userdata();
		// if($dataSession["is_login"] != 1){
		// 	redirect("/");
		// }

		// date_default_timezone_set("Asia/Jakarta");
		// $secondsTime = strtotime(date("Y-m-d H:i:s")) - strtotime($dataSession["start_date"]);
		// $hours   = floor(($secondsTime - ($days * 86400)) / 3600);
		// $minutes = floor(($secondsTime - ($days * 86400) - ($hours * 3600))/60);
		// $seconds = floor(($secondsTime - ($days * 86400) - ($hours * 3600) - ($minutes*60)));

		// $dataInput = array(
		// 	"name" => $dataSession["name"],
        // 	"time" => sprintf("%02d", $hours).":".sprintf("%02d", $minutes).":".sprintf("%02d", $seconds),
        // 	"value" => $secondsTime
		// );
		
		// $dataInput = json_encode($dataInput);

		// $url = "https://moreismore-d8ad8-default-rtdb.asia-southeast1.firebasedatabase.app/data.json";
		// $ch = curl_init();
		// curl_setopt($ch, CURLOPT_URL, $url);                               
		// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		// curl_setopt($ch, CURLOPT_POST, 1);
		// curl_setopt($ch, CURLOPT_POSTFIELDS, $dataInput);
		// curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/plain'));
		// $jsonResponse = curl_exec($ch);
		// if(curl_errno($ch))
		// {
		// 	echo 'Curl error: ' . curl_error($ch);
		// }
		// curl_close($ch);

		// session_destroy();

		// $url = "https://moreismore-d8ad8-default-rtdb.asia-southeast1.firebasedatabase.app/data.json";
		// $ch = curl_init();
		// curl_setopt_array($ch, array(
		// 	CURLOPT_URL => $url,
		// 	CURLOPT_RETURNTRANSFER => true,
		// 	CURLOPT_ENCODING => '',
		// 	CURLOPT_MAXREDIRS => 10,
		// 	CURLOPT_TIMEOUT => 0,
		// 	CURLOPT_FOLLOWLOCATION => true,
		// 	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		// 	CURLOPT_CUSTOMREQUEST => 'GET',
		// ));

		// $jsonResponse = curl_exec($ch);
		// $dataLeader = json_decode($jsonResponse, true);
		// $dataLeader = array_values($dataLeader);
		
		// usort($dataLeader, function($object1, $object2) {
		// 	return $object1['value'] < $object2['value'];
		// });

		$data['leaderboard'] = $dataLeader;
		$data["time"] = sprintf("%02d", $hours).":".sprintf("%02d", $minutes).":".sprintf("%02d", $seconds);
		$data["version"] = rand(10,1000);
		$this->load->view('header');
		$this->load->view('result',$data);
		$this->load->view('footer');
	}

	public function post_form()
	{
		$data = $this->input->post();
		date_default_timezone_set("Asia/Jakarta");
		$now = date("Y-m-d H:i:s");

		$seconds = strtotime("2021-11-08 09:10:00") - strtotime("2021-11-08 08:45:00");

		$hours   = floor(($seconds - ($days * 86400)) / 3600);
		$minutes = floor(($seconds - ($days * 86400) - ($hours * 3600))/60);
		$seconds = floor(($seconds - ($days * 86400) - ($hours * 3600) - ($minutes*60)));

		$newdata = array(
			'is_login'  => 1,
			'name' => $data["name"],
			'start_date' => $now
		);
		$this->session->set_userdata($newdata);

		redirect("main");
	}

	private function writeLog2($text){
        $text = '['.date('d-m-Y H:i:s').'] '.$text.PHP_EOL;
        $file = './application/logs/registrationLog.txt';
        file_put_contents($file,$text, FILE_APPEND);
    }
}


