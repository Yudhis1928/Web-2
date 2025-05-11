<?php

namespace models;

require_once __DIR__ . '/../config/Connection.php';

use config\Connection;
use PDO;

class User
{
    public static function get()
    {
        $pdo = connection::make();
        $sql = 'SELECT * FROM user';
        $statment = $pdo->query($sql);
        return $statment->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function create($data)
    {
        $pdo = connection::make();
        $sql = 'INSERT INTO user (firstname, lastname, gender, age, weight) VALUES (:firstname, :lastname, :gender, :age, :weight)';
        $statment = $pdo->prepare($sql);
        $statment->bindParam(':firstname', $data['firstname']);
        $statment->bindParam(':lastname', $data['lastname']);
        $statment->bindParam(':gender', $data['gender']);
        $statment->bindParam(':age', $data['age']);
        $statment->bindParam(':weight', $data['weight']);

        return $statment->execute();
    }
    public static function find($id)
    {
        $pdo = connection::make();
        $sql = 'SELECT * FROM user WHERE id = :id';
        $statment = $pdo->prepare($sql);
        $statment->bindParam(':id', $id);
        $statment->execute();

        return $statment->fetch(PDO::FETCH_ASSOC);
    }

    public static function update($data)
    {
        $pdo = connection::make();
        $sql = 'UPDATE user SET firstname = :firstname, lastname = :lastname, gender = :gender, age = :age, weight WHERE id = :id';
        $statment = $pdo->prepare($sql);
        $statment->bindParam(':firstname', $data['firstname']);
        $statment->bindParam(':lastname', $data['lastname']);
        $statment->bindParam(':gender', $data['gender']);
        $statment->bindParam(':age', $data['age']);
        $statment->bindParam(':weight', $data['weight']);

        return $statment->execute();
    }
    public static function delete($id)
    {
        $pdo = connection::make();
        $sql = 'DELETE FROM user WHERE id = :id';
        $statment = $pdo->prepare($sql);
        $statment->bindParam(':id', $id);

        return $statment->execute();
    }
}
