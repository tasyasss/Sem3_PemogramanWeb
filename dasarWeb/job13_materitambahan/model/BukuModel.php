<?php
include('Model.php');
class BukuModel extends Model
{
    private $db;
    private $table = 'm_buku';
    public function __construct()
    {
        include_once('../lib/Connection.php');
        $this->db = $db;
        $this->db->set_charset('utf8');
    }
    public function insertData($data)
    {
        // prepare statement untuk query insert
        $query = $this->db->prepare("INSERT INTO {$this->table} (buku_kode, buku_nama, kategori_id, jumlah, deskripsi, gambar) 
                VALUES (?, ?, ?, ?, ?, ?)");
        // binding parameter ke query, "s" berarti string, "ss" berarti dua string
        $query->bind_param('ssisss', $data['buku_kode'], $data['buku_nama'], $data['kategori_id'], $data['jumlah'], $data['deskripsi'], $data['gambar']);
        // eksekusi query untuk menyimpan ke database
        $query->execute();
    }
    public function getData()
    {
        // query untuk mengambil data dari tabel bank_soal
        return $this->db->query("select * from {$this->table} ");
    }
    public function getDataById($id)
    {
        // query untuk mengambil data berdasarkan id
        $query = $this->db->prepare("select * from {$this->table} where buku_id = ?");
        // binding parameter ke query "i" berarti integer. Biar tidak kena SQL Injection
        $query->bind_param('i', $id);
        // eksekusi query
        $query->execute();
        // ambil hasil query
        return $query->get_result()->fetch_assoc();
    }
    public function updateData($id, $data)
    {
        // query untuk update data
        $query = $this->db->prepare("UPDATE {$this->table} 
            SET buku_kode = ?, buku_nama = ?, kategori_id = ?, jumlah = ?, deskripsi = ?, gambar = ? 
            WHERE buku_id = ?");
        // binding parameter ke query
        $query->bind_param('ssiissi', $data['buku_kode'], $data['buku_nama'], $data['kategori_id'], $data['jumlah'], $data['deskripsi'], $data['gambar'], $id);
        // eksekusi query
        $query->execute();
    }
    public function deleteData($id)
    {
        // query untuk delete data
        $query = $this->db->prepare("delete from {$this->table} where buku_id = ?");
        // binding parameter ke query
        $query->bind_param('i', $id);
        // eksekusi query
        $query->execute();
    }
}
