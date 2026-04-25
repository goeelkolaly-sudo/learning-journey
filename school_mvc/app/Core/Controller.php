<?php
 class Controller {
    public function view($path, $data = [] ){
        extract($data);
        return include "../views/" . $path . ".php";
    }
 }
?>