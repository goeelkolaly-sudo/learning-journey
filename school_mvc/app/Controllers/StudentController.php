<?php
require_once "../app/Core/Controller.php";
require_once "../app/Models/Students.php";

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
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $department_id = $_POST['department_id'];
            $image = $_POST['image'];

            // validat

            $student = new Student();
            $student->setName($name);
            $student->setemail($email);
            $student->setphone($phone);
            $student->setdepartmentId($department_id);
            $student->setimage($image);
            $student->save();




            return "success";
        }

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
