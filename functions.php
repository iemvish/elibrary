<?php 
function dd($array)
{
  echo "<pre>";
  print_r($array);
  echo "<pre>";
  die();
}
function get_role($conn,$id)
{
    $query = "Select role from users where srno='$id'";
    $results = mysqli_query($conn,$query);
    $row = $results->fetch_row();
    return (!empty($row) && count($row) != 0) ? $row[0] : false;
}

?>