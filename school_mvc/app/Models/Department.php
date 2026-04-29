<?php
  require_once "../app/Core/Database.php";
 class Department {
      #data
    private $db;

    private $id;
    private $name;

    
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

     public function getAll(){
       $stmt = $this->db->prepare("SELECT * FROM departments");
       $stmt->execute();

       return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    public function find($departmentId){
        $stmt = $this->db->prepare("SELECT * FROM departments WHERE id = :id");
        $stmt->execute(['id' => $departmentId ]);

        return   $stmt->fetch(PDO::FETCH_ASSOC);

    }

     public function save(){
        $stmt = $this->db->prepare("INSERT INTO departments (name )
                                  values (:name )");
                  
       
       
       return  $stmt->execute([
                                'name' => $this->name
                             ]);     
    }


     public function update(){
        $stmt = $this->db->prepare ("UPDATE departments SET name = :name WHERE id = :id ");
        return $stmt->execute ([
                                'id' => $this->id,        
                                'name' => $this->name
        ]);
    }

    public function delete (){
        $stmt = $this->db->prepare("DELETE FROM departments WHERE id = :id");

        return $stmt->execute(['id' => $this->id]);

    }

    
 }
?>