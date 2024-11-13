<?php
require_once 'database.php';

class Crud
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    //create
    public function create($jabatan, $keterangan)
    {
        $query = "INSERT INTO jabatan (jabatan, keterangan) VALUES ('$jabatan', '$keterangan')";
        $result = $this->db->connection->query($query);

        return $result;
    }

    //Read
    public function read()
    {
        $query = "SELECT * FROM jabatan";
        $result = $this->db->connection->query($query);

        $data = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }

    //Read By ID
    public function readById($id)
    {
        $query = "SELECT * FROM jabatan WHERE id = '$id'";
        $result = $this->db->connection->query($query);
        if ($result->num_rows == 1) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }

    //Update
    public function update($id, $jabatan, $keterangan)
    {
        $query = "UPDATE jabatan SET jabatan = '$jabatan', keterangan = '$keterangan' WHERE id = '$id'";
        $result = $this->db->connection->query($query);
        return $result;
    }

    //Delete
    public function delete($id)
    {
        $query = "DELETE FROM jabatan WHERE id = '$id'";
        $result = $this->db->connection->query($query);
        return $result;
    }
}
