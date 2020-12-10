<?php
include_once (dirname(__FILE__) . "/MainController.php");

require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class CompanyController extends MainController {

	function __construct()
	{
		parent::__construct();
		$this->load->model('MainModel');
		$this->load->helpers(array('url','form'));
		$this->load->library(array('session','upload'));
		$this->load->library('Excel');
	}

	public function Profile()
	{
		$login_id=$this->session->userdata('login_id');
		$condition=['company_id'=>$login_id];
		$result['details']=$this->MainModel->get_data('tbl_company',$condition);
		$this->load->view('Company/Profile',$result);
	}
	
	public function Update_Profile()
	{
		$login_id=$this->session->userdata('login_id');
		$company_name=$this->input->post('company_name');
		$WPS_employer_id=$this->input->post('WPS_employer_id');
		$address=$this->input->post('address');
		$phone=$this->input->post('phone');
		$mobile=$this->input->post('mobile');
		$email=$this->input->post('email');
		$website=$this->input->post('website');
		$contact_person=$this->input->post('contact_person');
		date_default_timezone_set('Asia/Dubai');
		$timestamp=date('Y-m-d H:i:s');
		$data=[
			'company_name'=>$company_name,
			'WPS_employer_id'=>$WPS_employer_id,
			'address'=>$address,
			'phone'=>$phone,
			'mobile'=>$mobile,
			'email_id'=>$email,
			'website'=>$website,
			'contact_person'=>$contact_person,
			'updated_at'=>$timestamp
		];
		$condition=['company_id'=>$login_id];
		$this->MainModel->update_data('tbl_company',$data,$condition);
		redirect('Profile','reload');
	}
	public function Password_Check()
	{
		$login_id=$this->session->userdata('login_id');
		$oldpass=$this->input->post('oldpass');
		$newpass=$this->input->post('newpass');
		$condition=['company_id'=>$login_id,'password'=> $oldpass];
		$result=$this->MainModel->check_data('tbl_company',$condition);
		$flag=0;
		if($result==1)
		{
			$data=['password'=> $newpass ];
			$condition=['company_id'=>$login_id];
			$result=$this->MainModel->update_data('tbl_company',$data,$condition);
			$flag=1;
		}
		echo $flag;
	}
	public function Bank_Accounts()
	{
		$login_id=$this->session->userdata('login_id');
		$condition=['company_id'=>$login_id];
		$result['details']=$this->MainModel->get_data('tbl_banks',$condition);
		$this->load->view('Company/Bank_Accounts',$result);
	}
	public function Add_Bank_Details()
	{
		$login_id=$this->session->userdata('login_id');
		$bank_id=$this->input->post('bank_id');
		$bankname=$this->input->post('bankname');
		$branch=$this->input->post('branch');
		$accno=$this->input->post('accno');
		$ifsc=$this->input->post('ifsc');
		$cbuae=$this->input->post('cbuae');
		date_default_timezone_set('Asia/Dubai');
		$timestamp=date('Y-m-d H:i:s');

		$data=[
			'bank_name'=>$bankname,
			'branch'=>$branch,
			'account_number'=>$accno,
			'ifsc_code'=>$ifsc,
			'cbuae_routing_code'=>$cbuae,
			'company_id'=>$login_id,
			'updated_at'=>$timestamp
		];
		if($bank_id=='')
		{
			$data['created_at']=$timestamp;
			$this->MainModel->insertdata('tbl_banks',$data);
		}
		else
		{
			$condition=['bank_id'=>$bank_id];
			$this->MainModel->update_data('tbl_banks',$data,$condition);
		}
		
		$html=$this->bank_view();
		echo $html;
	}
	public function bank_view()
	{
		$login_id=$this->session->userdata('login_id');
		$condition=['company_id'=>$login_id];
		$result=$this->MainModel->get_data('tbl_banks',$condition);
		$html='';
		foreach ($result as $value) {
			$html.='<tr class="bankview'.$value->bank_id.'">
					<td>'.$value->bank_name.'</td>
					<td>'.$value->cbuae_routing_code.'</td>
					<td>'.$value->ifsc_code.'</td>
					<td>
						<button class="btn-info" onclick="editbank('.$value->bank_id.')"><i class="icofont icofont-edit-alt"></i></button>
						<button class="btn-danger" onclick="deletebank('.$value->bank_id.')"><i class="icofont icofont-ui-delete"></i></button>
					</td>
					</tr>';
		}
		return $html;
	}
	public function Delete_Bank_Details()
	{
		$val=$this->input->post('val');
		$condition=['bank_id'=>$val];
		$this->MainModel->delete_data('tbl_banks',$condition);
		$html=$this->bank_view();
		echo $html;
	}
	public function Edit_Bank_Details()
	{
		$val=$this->input->post('val');
		$condition=['bank_id'=>$val];
		$result=$this->MainModel->get_data('tbl_banks',$condition);
		echo json_encode($result);
	}
	public function Employees()
	{
		$login_id=$this->session->userdata('login_id');
		$condition=['company_id'=>$login_id];
		$result['details']=$this->MainModel->get_data('tbl_employee',$condition);
		$this->load->view('Company/Employees',$result);
	}
	public function Add_Employe_Details()
	{
		$login_id=$this->session->userdata('login_id');
		$emp_id=$this->input->post('emp_id');
		$emp_name=$this->input->post('emp_name');
		$lra_emp_id=$this->input->post('lra_emp_id');
		$agent_routing_code=$this->input->post('agent_routing_code');
		$emp_acc_no=$this->input->post('emp_acc_no');
		$salary=$this->input->post('salary');
		date_default_timezone_set('Asia/Dubai');
		$timestamp=date('Y-m-d H:i:s');

		$data=[
			'emp_name'=>$emp_name,
			'LRA_emp_id'=>$lra_emp_id,
			'agent_routing_code'=>$agent_routing_code,
			'emp_account_no'=>$emp_acc_no,
			'salary'=>$salary,
			'company_id'=>$login_id,
			'updated_at'=>$timestamp
		];
		if($emp_id=='')
		{
			$data['created_at']=$timestamp;
			$this->MainModel->insertdata('tbl_employee',$data);
		}
		else
		{
			$condition=['emp_id'=>$emp_id];
			$this->MainModel->update_data('tbl_employee',$data,$condition);
		}
		
		$html=$this->employe_view();
		echo $html;
	}
	public function employe_view()
	{
		$login_id=$this->session->userdata('login_id');
		$condition=['company_id'=>$login_id];
		$result=$this->MainModel->get_data('tbl_employee',$condition);
		$html='';
		foreach ($result as $value) {
			$html.='<tr class="empview'.$value->emp_id .'">
					<td>'.$value->emp_name.'</td>
					<td>'.$value->LRA_emp_id.'</td>
					<td>'.$value->agent_routing_code.'</td>
					<td>'.$value->emp_account_no.'</td>
					<td>'.$value->salary.'</td>
					<td>
						<button class="btn-info" onclick="editemp('.$value->emp_id .')"><i class="icofont icofont-edit-alt"></i></button>
						<button class="btn-danger" onclick="deleteemp('.$value->emp_id .')"><i class="icofont icofont-ui-delete"></i></button>
					</td>
					</tr>';
		}
		return $html;
	}
	public function Delete_Emp_Details()
	{
		$val=$this->input->post('val');
		$condition=['emp_id '=>$val];
		$this->MainModel->delete_data('tbl_employee',$condition);
		$html=$this->employe_view();
		echo $html;
	}
	public function Edit_Emp_Details()
	{
		$val=$this->input->post('val');
		$condition=['emp_id'=>$val];
		$result=$this->MainModel->get_data('tbl_employee',$condition);
		echo json_encode($result);
	}
	public function Salary_Entry()
	{
		$login_id=$this->session->userdata('login_id');
		$condition=['tbl_salary_entry.company_id'=>$login_id];
		$result['details']=$this->MainModel->get_salry_details($condition);
		$condition=['company_id'=>$login_id];
		$result['employee']=$this->MainModel->get_data('tbl_employee',$condition);
		$this->load->view('Company/Salary_Entry',$result);
	}
	public function Employee_Details()
	{
		$val=$this->input->post('val');
		$condition=['emp_id'=>$val];
		$result=$this->MainModel->get_data('tbl_employee',$condition);
		foreach ($result as $key) 
		{
			$salary=$key->salary;
		}
		echo $salary;
	}
	public function Add_Salary_Details()
	{
		$login_id=$this->session->userdata('login_id');
		$year=$this->session->userdata('salary_year');
		$month=$this->session->userdata('salary_month');
		$employee=$this->input->post('emp_id');
		$fixed_salary=$this->input->post('fixed_salary');
		$variable_salary=$this->input->post('variable_salary');
		$leave=$this->input->post('leave');

		$no_of_days=cal_days_in_month(CAL_GREGORIAN, $month, $year);
		$first_date = "$year-$month-01";
		$date = new DateTime($first_date);
		$date->modify('last day of this month');
		$last_date=$date->format('Y-m-d');

		date_default_timezone_set('Asia/Dubai');
		$timestamp=date('Y-m-d H:i:s');

		foreach ($employee as $key => $value) 
		{
			$salary_fixed=$fixed_salary[$key];
			$salary_variable=$variable_salary[$key];
			$leaves=$leave[$key];
			$employe=$employee[$key];
			$data=[
				'year'=>$year,
				'month'=>$month,
				'first_date'=>$first_date,
				'last_date'=>$last_date,
				'no_of_days'=>$no_of_days,
				'employee_id'=>$employe,
				'fixed_salary_component'=>$salary_fixed,
				'variable_salary_component'=>$salary_variable,
				'no_of_leave_days'=>$leaves,
				'company_id'=>$login_id,
				'updated_at'=>$timestamp
			];
			$condition=['employee_id'=>$employe,'year'=>$year,'month'=>$month];
			$salary_section_check=$this->MainModel->check_data('tbl_salary_entry',$data);
			if($salary_section_check==0)
			{
				$data['created_at']=$timestamp;
				$this->MainModel->insertdata('tbl_salary_entry',$data);
			}
			else
			{
				$this->MainModel->update_data('tbl_salary_entry',$data,$condition);
			}
		}	
		redirect('Salary-Entry','reload');
		// $html=$this->Salary_view();
		// echo $html;
	}
	public function Delete_Salary_Details()
	{
		$val=$this->input->post('val');
		$condition=['salary_entry_id '=>$val];
		$this->MainModel->delete_data('tbl_salary_entry',$condition);
		$html=$this->Salary_view();
		echo $html;
	}
	public function Salary_view()
	{
		$login_id=$this->session->userdata('login_id');
		$condition=['tbl_salary_entry.company_id'=>$login_id];
		$result=$this->MainModel->get_salry_details($condition);
		$html='';
		foreach ($result as $value) {
			$html.='<tr>
						<td>'.$value->emp_name.'</td>
						<td>'.date('d-m-Y',strtotime($value->last_date)).'</td>
						<td>'.$value->no_of_days.'</td>
						<td>'.$value->fixed_salary_component.'</td>
						<td>'.$value->variable_salary_component.'</td>
						<td>'.$value->no_of_leave_days.'</td>
						<td>'.date('d-m-Y H:i',strtotime($value->created_at)).'</td>
						<td>
							<button class="btn-info" onclick="editsalary('.$value->salary_entry_id.')"><i class="icofont icofont-edit-alt"></i></button>
							<button class="btn-danger" onclick="deletesalary('.$value->salary_entry_id.')"><i class="icofont icofont-ui-delete"></i></button>
						</td>
						</tr>';
		}
		return $html;
	}
	public function Salary_Search()
	{
		$year=$this->input->post('year');
		$month=$this->input->post('month');
		$login_id=$this->session->userdata('login_id');
		$this->session->set_userdata('salary_year',$year);
		$this->session->set_userdata('salary_month',$month);

		$no_of_days=cal_days_in_month(CAL_GREGORIAN, $month, $year);
		$first_date = "$year-$month-01";
		$date = new DateTime($first_date);
		$date->modify('last day of this month');
		$last_date=$date->format('Y-m-d');

		$condition=['company_id'=>$login_id];
		$result=$this->MainModel->get_data('tbl_employee',$condition);
		$fixed_salary=0;
		$variable_salary=0;
		$no_of_leaves=0;
		$html='';
		foreach ($result as $value) 
		{
			$emp_id=$value->emp_id;
			$fixed_salary=$value->salary;
			$condition1=['employee_id'=>$emp_id,'year'=>$year,'month'=>$month];
			$result1=$this->MainModel->get_data('tbl_salary_entry',$condition1);
			foreach ($result1 as $key) 
			{
				$fixed_salary=$key->fixed_salary_component;
				$variable_salary=$key->variable_salary_component;
				$no_of_leaves=$key->no_of_leave_days;

			}
			$html.='<tr>
						<td>'.$value->emp_name.'</td>
						<td>'.date('d-m-Y',strtotime($last_date)).'</td>
						<td>'.$no_of_days.'</td>
						<td><input type="number" class="form-control" name="fixed_salary[]" required="" value="'.$fixed_salary.'" min="0" style="width:auto"></td>
						<td><input type="number" class="form-control" name="variable_salary[]" required="" value="'.$variable_salary.'" min="0" style="width:auto"></td>
						<td><input type="number" class="form-control" name="leave[]" required="" value="'.$no_of_leaves.'" min="0" style="width:auto">
							<input type="hidden" class="form-control" name="emp_id[]" required="" value="'.$emp_id.'" min="0" style="width:auto">
						</td>
						<td>'.date('d-m-Y H:i').'</td>
					</tr>';

		}
		echo $html;

	}
	public function Download_Salary_Excel()
	{
		$login_id=$this->session->userdata('login_id');
		$year=$this->session->userdata('salary_year');
		$month=$this->session->userdata('salary_month');

		$no_of_days=cal_days_in_month(CAL_GREGORIAN, $month, $year);
		$first_date = "$year-$month-01";
		$date = new DateTime($first_date);
		$date->modify('last day of this month');
		$last_date=$date->format('Y-m-d');

		$condition=['company_id'=>$login_id];
		$result=$this->MainModel->get_data('tbl_employee',$condition);
		$fixed_salary=0;
		$variable_salary=0;
		$no_of_leaves=0;

		date_default_timezone_set('Asia/Dubai');
		$timestamp=date('Y-m-d H:i:s');

		$fileName = 'salary_entry_'.$month.'_'.$year.'.xlsx';  
		$spreadsheet = new Spreadsheet();

        $styleArray = array(
        'font'  => array(
        'bold'  => true,
        'size'  => 15,
        'name'  => 'Verdana',
        ));
        $styleArray2 = array(
        'font'  => array(
        'bold'  => true
        ));
        $cell_st =[
        'font' =>['bold' => true],
        'alignment' =>['horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER],
        'borders'=>['bottom' =>['style'=> \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM]]
        ];
        $cell_st1 =[
        'font' =>['bold' => true],
        'alignment' =>['horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT]
        ];
        $cell_st11 =[
        'font' =>['bold' => false],
        'alignment' =>['horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT]
        ];
        $cell_st12 =[
        'font' =>['bold' => false],
        'alignment' =>['horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_RIGHT]
         ];

        $sheet = $spreadsheet->getActiveSheet();
        $styleArrayFirstRow = [
            'font' => [
                'bold' => true,
            ]
        ];
        
        $sheet->setCellValue('A1', 'Employee ID');
        $sheet->setCellValue('B1', 'Employee Name');
        $sheet->setCellValue('C1', 'End Date');
        $sheet->setCellValue('D1', 'Days');
		$sheet->setCellValue('E1', 'Salary Fixed');
        $sheet->setCellValue('F1', 'Salary Variable');
        $sheet->setCellValue('G1', 'Leave Days');   
        $rows =2;
        
        $spreadsheet->getActiveSheet()->getStyle("A1:G1")->getFont()->setBold(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(14);
        $spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(25);
        $spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth(18);
        $spreadsheet->getActiveSheet()->getColumnDimension('D')->setWidth(10);
        $spreadsheet->getActiveSheet()->getColumnDimension('E')->setWidth(20);
        $spreadsheet->getActiveSheet()->getColumnDimension('F')->setWidth(20);
        $spreadsheet->getActiveSheet()->getColumnDimension('G')->setWidth(10);
    
        foreach ($result as $value) 
		{
			$emp_id=$value->emp_id;
			$fixed_salary=$value->salary;
			$condition1=['employee_id'=>$emp_id,'year'=>$year,'month'=>$month];
			$result1=$this->MainModel->get_data('tbl_salary_entry',$condition1);
			foreach ($result1 as $key) 
			{
				$fixed_salary=$key->fixed_salary_component;
				$variable_salary=$key->variable_salary_component;
				$no_of_leaves=$key->no_of_leave_days;

			}

            $sheet->setCellValue('A' . $rows, $emp_id);
            $sheet->setCellValue('B' . $rows, $value->emp_name);
            $sheet->setCellValue('C' . $rows, date('d-m-Y',strtotime($last_date)));
            $sheet->setCellValue('D' . $rows, $no_of_days);
			$sheet->setCellValue('E' . $rows, $fixed_salary);
            $sheet->setCellValue('F' . $rows, $variable_salary);
            $sheet->setCellValue('G' . $rows, $no_of_leaves);
            $rows++;
            $i++;
        } 
        $writer = new Xlsx($spreadsheet);
		$writer->save("assets/salary_excel/".$fileName);
		header("Content-Type: application/vnd.ms-excel");
        redirect(base_url()."/assets/salary_excel/".$fileName);              

	}
	public function excel_import_salary()
	{
		if(isset($_FILES["file"]["name"]))
		{
			$login_id=$this->session->userdata('login_id');
			date_default_timezone_set('Asia/Dubai');
			$timestamp=date('Y-m-d H:i:s');
		   	$path = $_FILES["file"]["tmp_name"];
		   	$object = PHPExcel_IOFactory::load($path);
		   foreach($object->getWorksheetIterator() as $worksheet)
		   {
		    $highestRow = $worksheet->getHighestRow();
		    $highestColumn = $worksheet->getHighestColumn();
		    for($row=2; $row<=$highestRow; $row++)
		    {
		     $emp_id = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
		     $emp_name = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
		     $end_date = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
		     $days = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
		     $salary_fixed = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
		     $salary_variable = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
		     $leaves = $worksheet->getCellByColumnAndRow(6, $row)->getValue();

			$year=date('Y',strtotime($end_date));
			$month=date('m',strtotime($end_date));

			$no_of_days=cal_days_in_month(CAL_GREGORIAN, $month, $year);
			$first_date = "$year-$month-01";
			$date = new DateTime($first_date);
			$date->modify('last day of this month');
			$last_date=$date->format('Y-m-d');

			date_default_timezone_set('Asia/Dubai');
			$timestamp=date('Y-m-d H:i:s');

			$data=[
				'year'=>$year,
				'month'=>$month,
				'first_date'=>$first_date,
				'last_date'=>$last_date,
				'no_of_days'=>$no_of_days,
				'employee_id'=>$emp_id,
				'fixed_salary_component'=>$salary_fixed,
				'variable_salary_component'=>$salary_variable,
				'no_of_leave_days'=>$leaves,
				'company_id'=>$login_id,
				'updated_at'=>$timestamp
			];
			$condition=['employee_id'=>$emp_id,'year'=>$year,'month'=>$month];
			$salary_section_check=$this->MainModel->check_data('tbl_salary_entry',$data);
			if($salary_section_check==0)
			{
				$data['created_at']=$timestamp;
				$this->MainModel->insertdata('tbl_salary_entry',$data);
			}
			else
			{
				$this->MainModel->update_data('tbl_salary_entry',$data,$condition);
			}
		   }
		  }
		}
	}
	public function Edit_Salary_Details()
	{
		$val=$this->input->post('val');
		$condition=['salary_entry_id'=>$val];
		$result=$this->MainModel->get_data('tbl_salary_entry',$condition);
		echo json_encode($result);
	}
	public function Create_SIF()
	{
		$login_id=$this->session->userdata('login_id');
		$condition=['company_id'=>$login_id];
		$result['bank']=$this->MainModel->get_data('tbl_banks',$condition);
		$this->load->view('Company/Create_SIF',$result);
	}
	public function SIF_Search()
	{
		$year=$this->input->post('year');
		$month=$this->input->post('month');
		$login_id=$this->session->userdata('login_id');
		$condition=['tbl_salary_entry.company_id'=>$login_id,'year'=>$year,'month'=>$month];
		$result=$this->MainModel->get_salry_details($condition);
		$html='';
		$i=1;
		$count=sizeof($result);
		if($result)
		{
			foreach ($result as $value) {
			$html.='<tr>
						<td>
							<input type="checkbox" class="checkboxs" value="'.$value->salary_entry_id.'" name="check[]">
						</td>
						<td>'.$i.'</td>
						<td>'.$value->emp_name.'</td>
						<td>'.$value->fixed_salary_component.'</td>
						<td>'.date('d-m-Y H:i',strtotime($value->created_at)).'</td>
						</tr>';
						$i++;
			}
		}
		else
		{
			$html='<h5 class="text-danger">No Records</h5>';
		}
		$datas['html']=$html;
		$datas['count']=$count;
		echo json_encode($datas);
	}
	public function SIF_Create()
	{
		$login_id=$this->session->userdata('login_id');
		$bank=$this->input->post('bank');
		$check=$this->input->post('check');
		$SIF_data='';
		$no_of_records=sizeof($check);
		$salary=0;
		$salary_array=[];
		foreach ($check as $key) 
		{
			$condition=['tbl_salary_entry.salary_entry_id'=>$key];
			$result=$this->MainModel->get_salry_details($condition);
			foreach ($result as $value) 
			{
				$salary_array[$value->emp_id]=$value->salary;
				$LRA=str_pad($value->LRA_emp_id, 14, '0', STR_PAD_LEFT);
				$emp_acc_no=str_pad($value->emp_account_no, 23, '0', STR_PAD_LEFT);
				$agent_routing_code=str_pad($value->agent_routing_code, 9, '0', STR_PAD_LEFT);
				$month=str_pad($value->month, 2, '0', STR_PAD_LEFT);
				$year=$value->year;
				$salary+=$value->fixed_salary_component+$value->variable_salary_component;
				$SIF_data.="EDR,$LRA,$agent_routing_code,$emp_acc_no,$value->first_date,$value->last_date,$value->no_of_days,$value->fixed_salary_component,$value->variable_salary_component,$value->no_of_leave_days"."\n";
			}
		}
		$condition=['bank_id'=>$bank];
		$result_bank=$this->MainModel->get_data('tbl_banks',$condition);
		foreach ($result_bank as $k) 
		{
			$bankname=$k->bank_name;
			$bankdocumentary=$k->ifsc_code;
			$bank_routing_code=str_pad($k->cbuae_routing_code, 9, '0', STR_PAD_LEFT);
		}
		$condition=['company_id'=>$login_id];
		$result_company=$this->MainModel->get_data('tbl_company',$condition);
		date_default_timezone_set('Asia/Dubai');
		$date=date('Y-m-d');
		$time=date('Hi');
		$timestamp=date('Y-m-d H:i');
		foreach ($result_company as $val) 
		{
			$wps_emp_id=str_pad($val->WPS_employer_id, 13, '0', STR_PAD_LEFT);
			$SIF_data.="SCR,$wps_emp_id,$bank_routing_code,$date,$time,$month$year,$no_of_records,$salary,AED,$bankdocumentary";
		}
		$file_name=$wps_emp_id.date('ymdHis');
		$SIF_file = fopen($_SERVER['DOCUMENT_ROOT'].'/assets/documents/'.$file_name.'.SIF', "w") or die("Unable to open file!");
		fwrite($SIF_file, $SIF_data);
		fclose($SIF_file);
		$data=[
			'company_id'=>$login_id,
			'bank_id'=>$bank,
			'file_name'=>$file_name.'.SIF',
			'salary'=>json_encode($salary_array),
			'timestamp'=>$timestamp
		];
		$this->MainModel->insertdata('tbl_sif_log',$data);
		$this->load->helper('download');
		force_download($_SERVER['DOCUMENT_ROOT'].'/assets/documents/'.$file_name.'.SIF', NULL);
	}
	public function View_Log()
	{
		$login_id=$this->session->userdata('login_id');
		$condition=['tbl_sif_log.company_id'=>$login_id];
		$result['details']=$this->MainModel->get_log($condition);
		$this->load->view('Company/View_Log',$result);
	}
	public function import()
 	{
 		$duplicate='';
 		$count=0;
	  if(isset($_FILES["file"]["name"]))
	  {
		$login_id=$this->session->userdata('login_id');
		$entry_id = $this->session->userdata('entry_id');
		date_default_timezone_set('Asia/Dubai');
		$timestamp=date('Y-m-d H:i:s');
	   	$path = $_FILES["file"]["tmp_name"];
	   	$object = PHPExcel_IOFactory::load($path);
	   foreach($object->getWorksheetIterator() as $worksheet)
	   {
	    $highestRow = $worksheet->getHighestRow();
	    $highestColumn = $worksheet->getHighestColumn();
	    for($row=2; $row<=$highestRow; $row++)
	    {
	     $emp_name = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
	     $lra_emp_id = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
	     $agent_routing_code = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
	     $emp_acc_no = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
	     $salary = $worksheet->getCellByColumnAndRow(4, $row)->getValue();

		$data=[
			'emp_name'=>$emp_name,
			'LRA_emp_id'=>$lra_emp_id,
			'agent_routing_code'=>$agent_routing_code,
			'emp_account_no'=>$emp_acc_no,
			'salary'=>$salary,
			'company_id'=>$login_id,
			'created_at'=>$timestamp,
			'updated_at'=>$timestamp
		];
		$acc_check=$this->MainModel->check_data('tbl_employee',['emp_account_no'=>$emp_acc_no]);
		if($acc_check==1)
		{
			$duplicate.="$lra_emp_id, ";
			$count++;
			continue;
		}
		else
		{
		 $this->MainModel->insertdata('tbl_employee',$data);
		}
		}
	   }
	  }
	  
	  $html=$this->employe_view();
	  $display['count']=$count;
	  $display['duplicate']=$duplicate;
	  $display['view']=$html;

	  echo json_encode($display);
	 }
	 public function acc_Emp_check()
	 {
	 	$value=$this->input->post('val');
	 	$acc_check=$this->MainModel->check_data('tbl_employee',['emp_account_no'=>$value]);
	 	echo $acc_check;
	 }

}