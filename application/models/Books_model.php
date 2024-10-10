<?php 

/**
 * summary
 */
class Books_model extends CI_Model{
	public function getAllBooks()
	{

    return $this->db->get('books')->result_array();

		// //menggunakan cara pertama
		// $query = $this->db->get('books');
		// return &query->result_array();
		// menggunakan cara cepat methode chaining // pemanggilan database
	return $this->db->get('books')->result_array();

	}


	public function Searching()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('code', $keyword);
		$this->db->or_like('title', $keyword);
		$this->db->or_like('author', $keyword);
	
		return $this->db->get('books')->result_array();
	}

	public function changeDataBooks($id)
	{
		$data = [
			
		    "code" => $this->input->post('code', true),
		    "title" => $this->input->post('title', true),
		    "author" => $this->input->post('author'),
		    "year" => $this->input->post('year', true),
		    "publisher" => $this->input->post('publisher', true),
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('books', $data);
	}

	public function deleteDataBooks($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('books');
	}

}



