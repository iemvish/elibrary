<?php 
// function dd($array)
// {
//   echo "<pre>";
//   print_r($array);
//   echo "<pre>";
//   die();
// }
function get_role($conn,$id)
{
    $query = "Select role from users where srno='$id'";
    $results = mysqli_query($conn,$query);
    $row = $results->fetch_row();
    return (!empty($row) && count($row) != 0) ? $row[0] : false;
}

function role(){
include"config.php";
@$email = $_SESSION["email"];
@$pass = $_SESSION["pass"];
$query = "select * from users where email = '$email' and pass = '$pass'";
$results = mysqli_query($conn, $query);
$num = mysqli_num_rows($results);
$data = mysqli_fetch_assoc($results);
@$id = $data['srno'];

if(isset($_SESSION['email'])){
    include_once"functions.php";
    $role = get_role($conn,$id);
    switch($role)
    {
        case 1:
            header('location:dashboard.php');
            break;
        
        case 2:
            header("location:teacher_dashboard.php");
            break;
        case 3:
            header("location:student_dashboard.php");
            break;
        case 4:
            header("location:librarian_dashboard.php");
            break;
              
    }
    
}

}
