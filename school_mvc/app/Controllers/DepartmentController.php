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

    public function edit(){
        
    }

    public function delete(){
        
    }
 }
?>