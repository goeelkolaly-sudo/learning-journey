<?php
function baseForm($action) {
    return '
    <form action="'.$action.'" method="post">
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
         <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br>
    ';
}

function registerForm($action='')  {
    echo baseForm($action) . '
        <label for="name">Full Name:</label><br>
        <input type="text" id="email" name="fullName"><br>
        <input type="submit" value="Register">
    </form>
    ';
}

function loginForm($action='')  {
    echo baseForm($action) . '
        <input type="submit" value="Login">
    </form>
    ';
}