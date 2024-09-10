<?php

namespace ExpenseTracker\Core;

use ExpenseTracker\Config\Connection;
use ExpenseTracker\Interfaces\IBaseRepository;

class BaseRepository implements IBaseRepository
{
    protected $db;
    protected $table;

    public function __construct()
    {
        $this->db = Connection::connect();
    }

    public function all()
    {
        $sql = "SELECT * FROM $this->table";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function find($id)
    {
        $sql = "SELECT * FROM $this->table WHERE id = :id";
        $query = $this->db->prepare($sql);
        $query->execute(['id' => $id]);
        return $query->fetch();
    }

    public function create($data)
    {
        $sql = "INSERT INTO $this->table (";
        foreach ($data as $key => $value) {
            $sql .= "$key, ";
        }
        $sql = substr($sql, 0, -2);
        $sql .= ") VALUES (";
        foreach ($data as $key => $value) {
            $sql .= ":$key, ";
        }
        $sql = substr($sql, 0, -2);
        $sql .= ")";
        $query = $this->db->prepare($sql);
        $query->execute($data);
    }

    public function update($id, $data)
    {
        $sql = "UPDATE $this->table SET ";
        foreach ($data as $key => $value) {
            $sql .= "$key = :$key, ";
        }
        $sql = substr($sql, 0, -2);
        $sql .= " WHERE id = :id";
        $data['id'] = $id;
        $query = $this->db->prepare($sql);
        $query->execute($data);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM $this->table WHERE id = :id";
        $query = $this->db->prepare($sql);
        $query->execute(['id' => $id]);
    }
}