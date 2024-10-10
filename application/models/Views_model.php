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


	public function Searching()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('username', $keyword);
		$this->db->or_like('collection', $keyword);
		return $this->db->get('Views')->result_array();
	}

	public function changeDataViews($id)
	{
		$data = [
			
		    "code" => $this->input->post('code', true),
		    "title" => $this->input->post('title', true),
		    "author" => $this->input->post('author'),
		    "year" => $this->input->post('year', true),
		    "publisher" => $this->input->post('publisher', true),
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('Views', $data);
	}

	public function deleteDataViews($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('Views');
	}

}



