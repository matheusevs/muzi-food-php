<?php

require_once __DIR__ . '/../../config/database/ConnectDb.php';

class Clients {

    private $con;
    private $connect;

    public function __construct()
    {
        $this->con = new ConnectDb();
        $this->connect = $this->con->connection();
    }

    public function insert($user)
    {
        $sql = "
            INSERT INTO clients
            (
                name,
                email,
                password,
                phone
            )
            VALUES
            (
                '{$user['name']}',
                '{$user['email']}',
                sha1('{$user['password']}'),
                '{$user['phone']}'
            )
        ";

        $insert = mysqli_query($this->connect, $sql);
        if(!$insert){
            return ['error' => mysqli_connect_error()];
        }
        
        return $insert;
    }

    public function update($set, $id){

        $sql = "
            UPDATE clients
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

        $sql = "DELETE FROM clients WHERE id = {$id}";

        $delete = mysqli_query($this->connect, $sql);
        if(!$delete){
            return ['error' => mysqli_connect_error()];
        }

        return $delete;

    }

    public function findClientByEmail($email)
    {
        $sql = "SELECT * FROM clients WHERE email = '{$email}'";

        $findUserByEmail = mysqli_query($this->connect, $sql);
        if(!$findUserByEmail){
            return ['error' => mysqli_connect_error()];
        }
        if($findUserByEmail->num_rows > 0){
            return ['error' => 'O usuário já existe.'];
        }

        return mysqli_fetch_array($findUserByEmail, MYSQLI_ASSOC);
    }

}