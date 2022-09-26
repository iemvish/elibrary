<?php
function dd($array)
{
  echo "<pre>";
  print_r($array);
  echo "<pre>";
  die();
}
echo "<option value=''>select state</option> ";
switch($_REQUEST['select'])
{
    case 1 :
        echo "<option value='1'>HIMACHAL</option>";
        echo "<option value='2'>PUNJAB</option>";
        echo "<option value='3'>HARYANA</option>";
        break;
    
    case 2 :
        echo "<option value='4'>CALIFORNIA</option>";
        echo "<option value='5'>TEXAS</option>";
        echo "<option value='6'>FLORIDA</option>";
        break;

    case 3 :
        echo "<option value='7'>ALTAI</option>";
        echo "<option value='8'>ADYEGA</option>";
        echo "<option value='9'>BURYATIA</option>";
        break;
             
}


?>