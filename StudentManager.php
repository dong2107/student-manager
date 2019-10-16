<?php

class StudentManager
{
    protected $conn;

    public function __construct()
    {
        $db = new DBConnect('mysql:host=localhost;dbname=student_manager', 'root', '1');
        $this->conn = $db->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM student";
        $stmt = $this->conn->query($sql);
        $result = $stmt->fetchAll();
        $students = [];
        foreach ($result as $value) {
            $student = new User($value['name'], $value['phone'], $value['address']);
            $student->id = $value['id'];
            array_push($students, $student);
        }
        return $students;
    }

    public function add($student)
    {
        $stmt = $this->conn->prepare('INSERT INTO student(name, phone, address) VALUES (:name , :phone, :address)');
        $stmt->bindParam(':name', $student->name);
        $stmt->bindParam(':phone', $student->phone);
        $stmt->bindParam(':address', $student->address);
        $stmt->execute();
    }

    public function delete($id)
    {
        $stmt = $this->conn->prepare('DELETE FROM student WHERE id=:id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function getStudentById($id)
    {
        $stmt = $this->conn->prepare('SELECT name,phone,address FROM student WHERE id=:id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update($index, $name, $phone, $address)
    {
        $stmt = $this->conn->prepare('UPDATE student SET name=:name,phone=:phone,address=:address WHERE id=:id');
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':id', $index);
        $stmt->execute();
    }
}