<?php
  require_once "../app/Core/Database.php";

 class Student {
    #data
    private $db;

    private $id;
    private $name;
    private $email;
    private $phone;
    private $department_id;
    private $image;

    public function __construct(){
        $this->db = Database::connect();
    }
    
    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

     public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

     public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    
     public function getPhone(){
        return $this->phone;
    }

    public function setPhone($phone){
        $this->phone = $phone;
    }

    
     public function getDepartmentId(){
        return $this->department_id;
    }

    public function setDepartmentId($departmentId){
        $this->department_id = $departmentId;
    }

    
     public function getImage(){
        return $this->image;
    }

    public function setImage($image){
        $this->image = $image;
    }
    
    # method (crud)
    
    public function getAll(){
       
    }

    public function find($studentId){
        
    }

    public function save(){
        
    }

    public function update(){
        
    }

 }
?>