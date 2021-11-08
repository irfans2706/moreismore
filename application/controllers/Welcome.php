<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent:: __construct();
	}

	public function index()
	{
		// $jsonSource = file_get_contents('data.json');
		// $dataLeader = json_decode($jsonSource);
		
		// usort($dataLeader, function($object1, $object2) {
		// 	return $object1->value < $object2->value;
		// });

		$data['leaderboard'] = $dataLeader;
		$this->load->view('header');
		$this->load->view('index', $data);
		$this->load->view('footer');
	}

	public function main()
	{
		$dataSession = $this->session->userdata();
		if($dataSession["is_login"] != 1){
			redirect("/");
		}

		$this->load->view('header');
		$this->load->view('main');
		$this->load->view('footer');
	}

	public function result()
	{
		$dataSession = $this->session->userdata();
		if($dataSession["is_login"] != 1){
			redirect("/");
		}

		date_default_timezone_set("Asia/Jakarta");
		$secondsTime = strtotime(date("Y-m-d H:i:s")) - strtotime($dataSession["start_date"]);
		$hours   = floor(($secondsTime - ($days * 86400)) / 3600);
		$minutes = floor(($secondsTime - ($days * 86400) - ($hours * 3600))/60);
		$seconds = floor(($secondsTime - ($days * 86400) - ($hours * 3600) - ($minutes*60)));

		$dataInput = array(
			"name" => $dataSession["name"],
        	"time" => sprintf("%02d", $hours).":".sprintf("%02d", $minutes).":".sprintf("%02d", $seconds),
        	"value" => $secondsTime
		);
		
		$inp = file_get_contents('data.json');
		$tempArray = json_decode($inp);
		
		if(count($tempArray) == 0){
			$jsonData = json_encode(array($dataInput));
		}else{
			array_push($tempArray, $dataInput);
			$jsonData = json_encode($tempArray);
		}
		file_put_contents('data.json', $jsonData);

		session_destroy();
		$data["time"] = sprintf("%02d", $hours).":".sprintf("%02d", $minutes).":".sprintf("%02d", $seconds);
		$this->load->view('header');
		$this->load->view('result',$data);
		$this->load->view('footer');
	}

	public function post_form()
	{
		$data = $this->input->post();
		date_default_timezone_set("Asia/Jakarta");
		$now = date("Y-m-d H:i:s");

		// $seconds = strtotime("2021-11-08 09:10:00") - strtotime("2021-11-08 08:45:00");

		// $hours   = floor(($seconds - ($days * 86400)) / 3600);
		// $minutes = floor(($seconds - ($days * 86400) - ($hours * 3600))/60);
		// $seconds = floor(($seconds - ($days * 86400) - ($hours * 3600) - ($minutes*60)));

		// var_dump(sprintf("%02d", $hours).":".sprintf("%02d", $minutes).":".sprintf("%02d", $seconds)); exit();

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


