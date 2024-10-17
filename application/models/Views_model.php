<?php 

/**
 * summary
 */
class Views_model extends CI_Model{
	public function getAllViews()
	{

    return $this->db->get('Views')->result_array();

		// //menggunakan cara pertama
		// $query = $this->db->get('Views');
		// return &query->result_array();
		// menggunakan cara cepat methode chaining // pemanggilan database
	return $this->db->get('views')->result_array();

	}

	public function addViewsData()
	{
		$data =[
			"collection" =>$this->input->post('collection', true),
			"username" =>$this->input->post('username', true),
		];
		$this->db->insert('views', $data);
	}

	public function getViewsById($id)
	{
		return $this->db->get_where('views', ['Id' =>$id])->row_array();
	}


	public function Searching()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('username', $keyword);
		$this->db->or_like('collection', $keyword);
		return $this->db->get('views')->result_array();
	}

	public function changeDataViews($id)
	{
		$data = [
			
		    "username" => $this->input->post('username', true),
		    "collection" => $this->input->post('collection', true),
		   
		];
		$this->db->where('Id',$id);
		return $this->db->update('views', $data);
	}

	public function deleteDataViews($id)
	{
		$this->db->where('Id', $id);
		$this->db->delete('views');
	}

}



