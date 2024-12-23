<?php

class Book_model extends CI_Model
{
    protected $table = 'books';

    public function __construct()
    {
        parent::__construct();
    }

    public function getBookById($id)
{
    return $this->db->get_where('books', ['id' => $id])->row_array();
}

    // Fungsi untuk mendapatkan semua buku
    public function getAllBooks()
    {
        return $this->db->get($this->table)->result_array();
    }

    // Fungsi untuk mencari buku
    public function searchBooks($keyword)
    {
        $this->db->like('title', $keyword);
        return $this->db->get($this->table)->result_array();
    }

    // Fungsi untuk menambahkan buku
    public function insertBook($data)
    {
        return $this->db->insert($this->table, $data);
    }

    // Fungsi untuk mengedit buku
    public function editBook($id, $data)
    {
        return $this->db->where('id', $id)->update($this->table, $data);
    }

    // Fungsi untuk menghapus buku
    public function deleteBook($id)
    {
        // Menghapus buku berdasarkan ID
        return $this->db->where('id', $id)->delete($this->table);
    }
}
