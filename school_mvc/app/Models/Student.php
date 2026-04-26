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
    private $grade;
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

    public function getgrade(){
        return $this->grade;
    }

    public function setgrade($grade){
        $this->grade = $grade;
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
       $stmt = $this->db->prepare("SELECT * FROM students");
       $stmt->execute();

       return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    public function find($studentId){
        $stmt = $this->db->prepare("SELECT * FROM students WHERE id = :id");
        $stmt->execute(['id' => $studentId ]);

        return   $stmt->fetch(PDO::FETCH_ASSOC);

    }

    public function save(){
        $stmt = $this->db->prepare("INSERT INTO students (name, email, phone, department_id, image )
                                  values (:name, :email, :phone, :departmentId, :image )");
                  
       
       
       return  $stmt->execute([
                                'name' => $this->name,
                                'email' => $this->email,
                                'phone' => $this->phone,
                                'departmentId' => $this->department_id,
                                'image' => $this->image,
                                
                             ]);     
    }

    public function update(){
        $stmt = $this->db->prepare ("UPDATE students SET name = :name, email = :email, phone = :phone, department_id = :getDepartmentId, image = :image WHERE id = :id ");
        return $stmt->execute ([
                                'id' => $this->id,        
            
                                'name' => $this->name,
                                'email' => $this->email,
                                'phone' => $this->phone,
                                'departmentId' => $this->department_id,
                                'image' => $this->image,
                                
        ]);
    }

    public function delete ($studentId){
        $stmt = $this->db->prepare("DELETE FROM students WHERE id = :id");

        return $stmt->execute(['id' => $studentId]);

    }


    public function getGradeGpa(){
        $stmt = $this->db->prepare("SELECT grade FROM students WHERE id = :id");
        $stmt->execute(['id' => $this->id ]);

        $grade = $stmt->fetch(PDO::FETCH_ASSOC)['grade'];

        if($grade == 'A+'){
            return 4.00;
        }
        else if ($grade == 'A-'){
            return 3.60;
        }
        else if ($grade == 'B+'){
            return 3.40;
        }
        else if ($grade == 'B'){
            return 3.20;
        }
        else if ($grade == 'B-'){
            return 3.00;
        }
        else if ($grade == 'C+'){
            return 2.80;
        }
        else if ($grade == 'C'){
            return 2.60;
        }
        else if ($grade == 'C-'){
            return 2.40;
        }
        else  {
            return '';
        }

    



    }


 }
?>