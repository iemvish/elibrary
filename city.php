<?php
function dd($array)
{
  echo "<pre>";
  print_r($array);
  echo "<pre>";
  die();
}
echo "<option value=''>select city</option> ";
switch($_REQUEST['select'])
{
    case 1 :
        echo "<option value='1'>MANDI</option>";
        echo "<option value='2'>KULLU</option>";
        echo "<option value='3'>KANGRA</option>";
        break;
    
    case 2 :
        echo "<option value='4'>LUDHIANA</option>";
        echo "<option value='5'>AMRITSAR</option>";
        echo "<option value='6'>PATIALA</option>";
        break;

    case 3 :
        echo "<option value='7'>AMBALA</option>";
        echo "<option value='8'>BHIWANI</option>";
        echo "<option value='9'>GURGRAM</option>";
        break;
             
}


?>