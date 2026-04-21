<?php 
    // function -> create done 
    // function -> read 
    // function -> update
    // function -> delete 
    // note -> title : content
    // $notes = [
    //     [
    //         "title"=> ""
    //     ],
    //     [
    //         "title" => ""
    //     ]
    // ];
    // $note[0]['title'] = "test";

    function getById($id, $array) {
        foreach($array as $key => $value) {
            if($value['id'] === $id) {
                return $key;
            }
        }
        return "not found row " ;
    }

    function create($title , $content) {
        $note = [
            "id" => uniqid(),
            "title" => $title,
            "content" => $content,
            "created_at" => date("Y-m-d H:i:s"),
        ];
        $_SESSION['notes'][] = $note;
        return $note;
    }

    function getNotes() {
        return $_SESSION['notes'];
    }

    function update($id , $data){
        $note = getById($id, $_SESSION['notes']);
        if(!is_numeric($note)) return;

        if( !empty($data['title'])) {
            $_SESSION['notes'][$note]['title'] = $data['title'];

        }
        if(!empty($data['content'])){
            $_SESSION['notes'][$note]['content'] = $data['content'];

        }
        return "the note updated sucsessfuly ";
    }

    function delete($id) {
        $note = getById($id, $_SESSION['notes'] );
        if(!is_numeric($note)) return;
        unset($_SESSION['notes'][$note]);
        return "the note deleted ";
    }





        //       | <- update 
// refrance -> point <- 
//              |  


// call by value  

?>