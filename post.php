<?php

if(isset($_POST))
{
   //echo 'post.php';
   $getdats = $_POST['MyJson'];
   
    foreach ($getdats as $key => $value)
    {
       if($key === 'vars') { $ArrayVars = $value; }     
    }   
   
   $myjson = array(0=>(object)array("Var1"=>$ArrayVars['NameFunction'],"Var2"=>$ArrayVars['user'],"Var3"=>$ArrayVars['passw']));
   
   echo json_encode($myjson);
   //header("location:index.php");
}
