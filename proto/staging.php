<?php
md5($user) = $_POST['user'];
md5($pass) = $_POST['pass'];

if($user == "c4af607ff8ebb52d5d3aae25566840ec"
&& $pass == "77ea1bf465aa2ffdd3fc068d52dd49e1")
{
        include("proto.html");
}
else
{
    if(isset($_POST))
    {?>

            <form method="POST" action="secure.php">
            User <input type="text" name="user"></input><br/>
            Pass <input type="password" name="pass"></input><br/>
            <input type="submit" name="submit" value="Go"></input>
            </form>
    <?}
}
?>