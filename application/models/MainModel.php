<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class MainModel extends CI_Model
{
  function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('email');
	}
  function insertdata($table,$data)
  {
    $this->db->insert($table,$data);
    $insert_id = $this->db->insert_id();
    return $insert_id;
  }
  function check_data($table,$condition)
  {
    $querys=$this->db->get_where($table,$condition);
	  $num=$querys->num_rows();
    if($num>0)
    {
      return 1;
    }
    else {
      return 0;
    }
  }
  function get_data($table,$condition)
  {
    $querys=$this->db->get_where($table,$condition);
    $result=$querys->result();
    return $result;
  }
  function get_data_members_order($table,$condition,$id,$order)
  {
    $this->db->order_by($id,$order);
    $querys=$this->db->get_where($table,$condition);
    $result=$querys->result();
    return $result;
  }
  function update_data($table,$data,$condition)
  {
    $this->db->where($condition);
    $this->db->update($table,$data);
  }
  function delete_data($table,$condition)
  {
    $this->db->where($condition);
    $this->db->delete($table);
  }
  function get_limit($table,$condition,$value,$order,$start,$limit)
  {
    $this->db->order_by($value,$order);
    $this->db->limit($limit, $start );
    $querys=$this->db->get_where($table,$condition);
    $result=$querys->result();
    return $result;
  }
  function get_salry_details($condition)
  {
    $this->db->order_by('tbl_salary_entry.created_at','ASC');
    $this->db->join('tbl_salary_entry', 'tbl_employee.emp_id = tbl_salary_entry.employee_id');
    $querys=$this->db->get_where('tbl_employee',$condition);
    $result=$querys->result();
    return $result;
  }
  function get_log($condition)
  {
    $this->db->order_by('tbl_sif_log.timestamp','DESC');
    $this->db->join('tbl_banks', 'tbl_sif_log.bank_id = tbl_banks.bank_id');
    $querys=$this->db->get_where('tbl_sif_log',$condition);
    $result=$querys->result();
    return $result;
  }

}
?>
