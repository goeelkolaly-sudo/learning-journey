
   <!-- GET && POST -->

    <!-- Task1 GET search -->

 <form  action="" method="GET">
    <label for="keyword" >search:</label><br>
    <input type="text" name="keyword" >
    <button type="submit">search</button>
</form>

<?php

if(isset($_GET["keyword"])){
    if(empty($_GET["keyword"])) {
        echo "please enter search keyword";
    }else{
        echo"your search for :". $_GET["keyword"];
    }
}
?>
   





    <!-- TaSK2 _ POST login form -->
 
 <form  action="" method="POST">
     <label for="email" >email:</label><br>
     <input type="text"  id="email" name="email" >
        <br>
     <label for="password" >password:</label><br>
     <input type="text" id="password" name="password" >

    <button type="submit">login</button>
</form>


<?php
if(isset($_POST["email"])){
    // if email or pass empty >> error
    if(empty($_POST["email"])  || empty($_POST["password"])){
        echo"error";
    }elseif($_POST["email"] === "admin@mail.com" && $_POST["password"] === "1234" ){
        echo "login successful";
    }else{
        echo"Invalid email or password";
    }
}
  

?>
  




  <!-- task3 get vs post -->

  // form >> GET 
<form method="GET">
<label for="search" >search</label><br>
<input type="text"  id="search" name="search" >
 <button type="submit">search:</button>
</form>


<br> <br>

 //form >> POST  
<form method="POST">
<label for="login" >login</label><br>
<input type="text"  id="login" name="login" >
 <button type="submit">login:</button>
</form>

<?php

if(isset($_GET)){
var_dump($_GET["search"]);
}

if(isset($_POST)){
var_dump($_POST["login"]);
}
?>  





<!-- task4 _ short if practice -->

<form method="post">
    <label for="email"> email:</label><br>
    <input type="text" id="email" name="email">
    <br>
    <button type="submit">login</button>

</form>

<?php


if(isset($_POST["email"])){
    
  
    //short if
    $login=($_POST["email"]==="admin@mail.com") ? "welcome admin" :"welcome user";
    echo $login;
}
?>  




<!-- task5 _form validation challenge -->


<form method="post">
    <label for="email"> email:</label><br>
    <input type="text" id="email" name="email"> <br>

    <label for="password"> password:</label><br>
    <input type="text" id="password" name="password"> <br>
    
    
    <button type="submit">login</button>
</form>
<?php
if(isset($_POST)){


if(empty($_POST["email"])){
    echo"Email is required"."<br>";
}

if(empty($_POST["password"])){
    echo "Password is required"."<br>";
}
}
  //task6   شرح؟
var_dump($_POST["email"]);

?> 








