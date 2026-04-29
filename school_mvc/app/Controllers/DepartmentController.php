<?php
 require_once "../app/Core/Controller.php";
 require_once "../app/Models/Department.php";

 class DepartmentController extends Controller {
    public function index(){

         $model = new Department();
         $departments = $model->getAll();

        $this->view("departments/index",$departments);

    }

    public function create(){
      $this->view("departments/index");

    }

     public function store(){
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $errors = [];

          $name = $_POST['name'];
          
          // validat
            if($name == ''){
                $errors[] = 'name field is req';
            }


            if (empty($errors)){ 

            $department = new Department();
            $department->setName($name);
            $department->update();

            }

            return "success";
        }

        return "error";
    }

    public function edit($id){
      
      if(is_numeric($id)  && isset($id)){
        $department = new Department();
        $department->find($id);
        }
        
        $this->view("departments/index",$department);

    }



    public function delete($id){
        if(is_numeric($id)  && isset($id)){
          $department = new Department();
          $department->find($id);
          
          if(isset($department)){
            $department->delete($department->getId());
            return "success";
          }
        }
        return "error";م
    }
 }
?>