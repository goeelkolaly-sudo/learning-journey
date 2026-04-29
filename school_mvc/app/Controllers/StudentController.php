<?php
require_once "../app/Core/Controller.php";
require_once "../app/Models/Students.php";
require_once "../app/Models/Department.php";


class StudentController extends Controller
{
    public function index()
    {

        $model = new Student();
        $students = $model->getAll();

        $this->view("students/index", $students);
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $errors = [];
            
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $department_id = $_POST['department_id'];
            $image = $_POST['image'];

            // validat
            if($name == ''){
                $errors[] = 'name field is req';
            }

            if($phone == ''){
                $errors[] = 'phone field is req';
            }

            if($email == ''){
                $errors[] = 'email field is req';
            }

            if($department_id == ''){
                $errors[] = 'department_id field is req';
            }

            if (empty($errors)){ 

            $student = new Student();
            $student->setName($name);
            $student->setemail($email);
            $student->setphone($phone);
            $student->setdepartmentId($department_id);
            $student->setimage($image);
            $student->save();
            }




            return "success";
        }




        $model = new Department();
        $departments = $model->getAll();


        $this->view("students/create");
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //
        }

        $this->view("students/create");
    }

    public function delete() {
        //
    }
}
