<?php

class Data_model extends CI_Model
{
	
	// function getAll()
	// {
	// 	// retriving data from database data table
	// 	$q = $this->db->query("SELECT * FROM data");
	// 	if($q->num_rows() > 0){
	// 		foreach ($q->result() as $row) {
	// 			# code...
	// 			$data[] = $row;
	// 		}
	// 		return $data;
	// 	}
	// }


	function getAll(){
		$q = $this->db->get('data', 5);
		if($q->num_rows() > 0){
			foreach ($q->result() as $row) {
				# code...
				$data[] = $row;
			}
			return $data;
		}

	}
}




	// /**
	// * 
	// */
	// class Blog_model extends CI_Model
	// {
		
	// 	function getAll()
	// 	{
	// 		$q = $this->db->get('student');

	// 		if($q->num_rows()>0){
	// 			foreach ($q->result() as $row) {
	// 				// echo $row->Name;
	// 				$data[]=$row;
	// 			}
	// 		return $data;
	// 	}

	// 	}
	// }


?>