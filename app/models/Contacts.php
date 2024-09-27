<?php

require_once __DIR__ . '/../../config/database/ConnectDb.php';

class Contacts {

    private $con;
    private $connect;

    public function __construct()
    {
        $this->con = new ConnectDb();
        $this->connect = $this->con->connection();
    }

    public function insert($fields, $values)
    {
        $sql = "INSERT INTO contacts ($fields) VALUES ($values)";

        $insert = mysqli_query($this->connect, $sql);
        if(!$insert){
            return ['error' => mysqli_connect_error()];
        }
        
        return $insert;
    }

    public function update($set, $id){

        $sql = "
            UPDATE contacts
            SET {$set}
            WHERE id = {$id};
        ";

        $update = mysqli_query($this->connect, $sql);
        if(!$update){
            return ['error' => mysqli_error($this->connect)];
        }

        return $update;
    }

    public function delete($id){

        $sql = "DELETE FROM contacts WHERE id = {$id}";

        $delete = mysqli_query($this->connect, $sql);
        if(!$delete){
            return ['error' => mysqli_connect_error()];
        }

        return $delete;
    }
}