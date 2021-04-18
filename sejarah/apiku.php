<?php
	include "conn.php";
	
	$sql= "SELECT * FROM sejarah";
	$query = mysqli_query($conn, $sql);
	while ($data = mysqli_fetch_array($query)){
		//echo $data["Pengarang"]." ";

		$item[] = array(
			'BukuID'=>$data["BukuID"],
			'JudulBuku'=>$data["JudulBuku"],
			'Pengarang'=>$data["Pengarang"],
			'Tahun'=>$data["Tahun"]);			
	}
	header("Content-Type: application/json");

	$response = array(
		'took' => 1602573034.227,
		'code' => 200,
		'message'=>'Response Succesfully',
		'data'=>$item
	); 


//Menambah data
	function index_post(){
		$data = array(
		'BukuID' => $this->post('BukuID'),
		'JudulBuku' => $this->post('JudulBuku'),
		'Pengarang' => $this->post('Pengarang'),
		'Tahun' => $this->post('Tahun'));
	$insert = $this->db->insert('sejarah', $data);
	if ($insert) {
		//$this->response($data, 200);
		$result = ["took" =>$_SERVER["REQUEST_TIME_FLOAT"],
				"code"=>201,
				"message"=>"Data has successfully added",
				"data"=>$data];
		$this->response($result, 201);
	} else {
		$result = ["took" =>$_SERVER["REQUEST_TIME_FLOAT"],
				"code"=>502,
				"message"=>"Failed added data",
				"data"=>null];
		$this->response($result, 502);
		}
	}

//Memperbarui data yang telah ada
	function index_put(){
		$id = $this->put('id');
		$data = array(
		'BukuID' => $this->post('BukuID'),
		'JudulBuku' => $this->post('JudulBuku'),
		'Pengarang' => $this->post('Pengarang'),
		'Tahun' => $this->post('Tahun'));
	$update = $this->db->update('sejarah', $data);
	if ($update) {
		$this->response($data, 200);
	} else{
		$this->response(array('status' => 'fail', 502));
	}
}
//Menghapus data customers
	function index_delete(){
		$id = $this->delete('id');
		$this->db->where('BukuID', $id);
		$delete = $this->db->delete('sejarah');
		if ($delete) {
			$this->response(array('status' => 'success'), 201);
		} else {
			$this->response(array('status' => 'fail', 502));
		}
		}
	
	echo json_encode($response);
?>
