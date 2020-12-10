<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('MainModel');
		$this->load->helpers(array('url','form'));
		$this->load->library(array('session','upload'));
	}
	public function index()
	{
		$this->load->view('Home');
	}
	public function Sign_In()
	{
		$this->load->view('Login');
	}
	public function SIF()
	{
		$this->load->view('Create_SIF');
	}
	public function Company_Dashboard()
	{
		$login_id=$this->session->userdata('login_id');
		$condition=['company_id'=>$login_id];
		$result=$this->MainModel->get_data('tbl_company',$condition);
		$display['modal']=false;
		foreach ($result as $value) 
		{
			if($value->WPS_employer_id=='')
			{
				$display['modal']=true;
			}
		}
		$display['employees']=$this->MainModel->get_data('tbl_employee',$condition);
		$display['banks']=$this->MainModel->get_data('tbl_banks',$condition);
		$display['sif_files']=$this->MainModel->get_data('tbl_sif_log',$condition);
		$this->load->view('Company/Dashboard',$display);
	}
	//username checking
	public function Check_Username($username)
	{
		$condition=['username'=>$username];
		$result=$this->MainModel->check_data('tbl_company',$condition);
		return $result;
	}
	public function Registration()
	{
		$this->load->view('Register');
	}
	public function Feedback()
	{
		$this->load->view('Feedback');
	}
	public function Feedback_Data()
	{
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$Feedback=$this->input->post('Feedback');
		date_default_timezone_set('Asia/Dubai');
		$timestamp=date('Y-m-d H:i:s');
		$data=['name'=>$name,'email'=>$email,'feedback'=>$Feedback,'created_at'=>$timestamp];
			$this->MainModel->insertdata('tbl_feedback',$data);
			$this->session->set_userdata('feedback_msg','Feedback add Successfully');
			redirect('','reload');
	}

	//company registration
	public function Register()
	{
		$companynamesignup=$this->input->post('companynamesignup');
		$usernamesignup=$this->input->post('usernamesignup');
		$check_username=$this->Check_Username($usernamesignup);
		$passwordsignup_confirm=$this->input->post('passwordsignup_confirm');
		date_default_timezone_set('Asia/Dubai');
		$timestamp=date('Y-m-d H:i:s');

		if ($check_username==1) 
		{
			$this->session->set_userdata('reg_msg','Username Already Existing');
			$this->session->set_userdata('comapny',$companynamesignup);
			redirect('Sign-Up','reload');
		}
		else
		{
			$data=['company_name'=>$companynamesignup,'username'=>$usernamesignup,'password'=>$passwordsignup_confirm,'created_at'=>$timestamp,'updated_at'=>$timestamp];
			$this->MainModel->insertdata('tbl_company',$data);
			$this->session->set_userdata('reg_log_msg','Registration Sucessful');
			redirect('Sign-In','reload');
		}
	}
	//login check
	public function Login()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');

		$condition=['username'=>$username,'password'=>$password];
		$result=$this->MainModel->get_data('tbl_company',$condition);
		if($result)
		{
			foreach ($result as $value)
			{
				$this->session->set_userdata('login_id',$value->company_id);
				$this->session->set_userdata('username',$username);
				$this->session->set_userdata('password',$password);
				$this->session->set_userdata('company_name',$value->company_name);
			}
			redirect('Company-Dashboard','reload');
		}
		else
		{
			$this->session->set_userdata('logmsg','Username/Password invalid....!!');
			redirect('','reload');
		}
	}
	//page wise login checking
	public function session_check()
	{
		$username = $this->session->userdata('username');
		$password = $this->session->userdata('password');
		$condition = array('username' => $username,'password' => $password);
		$result=$this->MainModel->get_data('tbl_company',$condition);
		if($result)
		{
			return 0;
		}
		else
		{
			return 1;
		}
	}
	//user logout
	public function Logout()
	{
		$this->session->sess_destroy();
		redirect('', 'refresh');
	}
	//Guest SIF creating
	public function Guest_SIF_Create()
	{
		$Employee_Name=$this->input->post('Employee_Name');
		$WPS_Employee_ID=str_pad($this->input->post('WPS_Employee_ID'), 13, '0', STR_PAD_LEFT);
		$cbuaecode=str_pad($this->input->post('cbuaecode'), 9, '0', STR_PAD_LEFT);
		$documentary=$this->input->post('documentary');
		$year=$this->input->post('year');
		$month=str_pad($this->input->post('month'), 2, '0', STR_PAD_LEFT);
		$LRA_emp_id=$this->input->post('LRA_emp_id');
		$agent_routing_code=$this->input->post('agent_routing_code');
		$emp_acc_no=$this->input->post('emp_acc_no');
		$fixed_salary=$this->input->post('fixed_salary');
		$variable_salary=$this->input->post('variable_salary');
		$no_of_leaves=$this->input->post('no_of_leaves');

		$no_of_records=sizeof($no_of_leaves);
		$salary=0;
		$salary_array=[];

		$no_of_days=cal_days_in_month(CAL_GREGORIAN, $month, $year);
		$first_date = "$year-$month-01";
		$date = new DateTime($first_date);
		$date->modify('last day of this month');
		$last_date=$date->format('Y-m-d');

		date_default_timezone_set('Asia/Dubai');
		$date=date('Y-m-d');
		$time=date('Hi');
		$timestamp=date('Y-m-d H:i');
		$SIF_data='';
		foreach ($LRA_emp_id as $key => $value) {
			$salary_array[$LRA_emp_id[$key]]=$fixed_salary[$key];
			$LRA=str_pad($LRA_emp_id[$key], 14, '0', STR_PAD_LEFT);
			$emp_accno=str_pad($emp_acc_no[$key], 23, '0', STR_PAD_LEFT);
			$agent_code=str_pad($agent_routing_code[$key], 9, '0', STR_PAD_LEFT);
			$salary+=$fixed_salary[$key]+$variable_salary[$key];

			$SIF_data.="EDR,$LRA,$agent_code,$emp_accno,$first_date,$last_date,$no_of_days,$fixed_salary[$key],$variable_salary[$key],$no_of_leaves[$key]"."\n";
		}
		$SIF_data.="SCR,$WPS_Employee_ID,$cbuaecode,$date,$time,$month$year,$no_of_records,$salary,AED,$documentary";
		
		$file_name=$WPS_Employee_ID.date('ymdHis');
		$SIF_file = fopen($_SERVER['DOCUMENT_ROOT'].'/assets/guest_log/'.$file_name.'.SIF', "w") or die("Unable to open file!");
		fwrite($SIF_file, $SIF_data);
		fclose($SIF_file);
		$data=[
			'Employee_Name'=>$Employee_Name,
			'WPS_Employee_ID'=>$WPS_Employee_ID,
			'cbuae_routing_code'=>$cbuaecode,
			'file_name'=>$file_name.'.SIF',
			'salary'=>json_encode($salary_array),
			'timestamp'=>$timestamp
		];
		$this->MainModel->insertdata('tbl_guest_sif_log',$data);
		$this->load->helper('download');
		force_download($_SERVER['DOCUMENT_ROOT'].'/assets/guest_log/'.$file_name.'.SIF', NULL);
	}
	public function Email_Check()
	{
		$val=$this->input->post('val');
		$condition=['username'=>$val];
		$res=$this->MainModel->check_data('tbl_company',$condition);
		echo $res;
	}
	public function Forgot_Password()
	{
		$val=$this->input->post('val');
		$condition = ['username'=>$val];
		$result=$this->MainModel->get_data('tbl_company',$condition);
		$logid=0;
		foreach ($result as $value)
		{
			$logid=$value->company_id;
		}

		$random=rand(1000,9999);

		$condition=['login_id'=>$logid];
		$otpcheck=$this->MainModel->check_data('tbl_otp',$condition);
		if($otpcheck==1)
		{
			$data=['otp'=>$random];
			$this->MainModel->update_data('tbl_otp',$data,$condition);
		}
		else
		{
			$data=['login_id'=>$logid,'otp'=>$random];
			$this->MainModel->insertdata('tbl_otp',$data);
		}

		$key="sif4wps";
		$encrypted_string=str_replace("/", "~",openssl_encrypt($logid,"AES-128-ECB",$key));
		$encrypted_random=str_replace("/", "~",openssl_encrypt($random,"AES-128-ECB",$key));

	    $message = "<h4>As requested,here is a link to allow you to select a new SIF4WPS password:</h4>";
		$message.="<p>https://sif4wps.com/Reset-Password/".$encrypted_string."/".$encrypted_random."</p>";
		// $message.="<p>http://localhost/WPS/Reset-Password/".$encrypted_string."/".$encrypted_random."</p>";
		$message.="<h5>This link will expaire in 15 minutes.</h5>";
		// echo $message;
   		$this->load->library('email');
		$this->email->set_mailtype("html");
		$this->email->set_newline("\r\n");
		$this->email->set_crlf("\r\n");
	    $this->email->from("demo@gmail.com");
	    $this->email->to($val);
	    $this->email->subject("Reset Password on SIF4WPS");
	    $this->email->message($message);
	    $this->email->send();
	}
	public function Reset_Password($value,$random)
	{
		$key="sif4wps";
		$decrypted_val=openssl_decrypt(str_replace("~", "/",$value),"AES-128-ECB",$key);
		$decrypted_otp=openssl_decrypt(str_replace("~", "/",$random),"AES-128-ECB",$key);

		$condition=['login_id'=>$decrypted_val,'otp'=>$decrypted_otp];
		$otpcheck=$this->MainModel->check_data('tbl_otp',$condition);
		if($otpcheck==1)
		{
			$result['value']=$value;
			$this->load->view('reset_password',$result);
		}
		else {
			redirect('Sign-In','reload');
		}

	}
	public function Change_password()
	{
		$passwprd=$this->input->post('password');
		$id=$this->input->post('id');

		$key="sif4wps";
		$decrypted_string=openssl_decrypt(str_replace("~", "/",$id),"AES-128-ECB",$key);

		$data=['password'=>$passwprd];
		$condition=['company_id'=>$decrypted_string];
		$this->MainModel->update_data('tbl_company',$data,$condition);
		$this->MainModel->delete_data('tbl_otp',['login_id'=>$decrypted_string]);

	}

	



}
