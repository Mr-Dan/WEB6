<?php



class pruduct_convert_class  {
 session_start();
 
 require_once("../php/dbconnect.php");

// для слов
  public function pruduct_convert_request($input,$email, $time) {




   /* $inputarray = explode("</tr>", $input);
    $inputarray=str_replace('<tr>','',$inputarray);*/
$emailg = " f";
$timeg = " j";
$inputg = "j ";



/*$reg_total_pruduct= $mysqli->prepare("INSERT INTO product (product_email, product_time_order,ID010) VALUES (?, ?, ?)");
  $reg_total_pruduct->bind_param("sss",$email,$time,$input);
  $reg_total_pruduct->execute();*/

/*$countarr=count($inputarray);


for ($i = 0; $i < $countarr; $i++)
{

    $inputarray = explode("</td>", $input);
    $inputarray=str_replace('<td>','',$inputarray);

  $textline=  $textline+$inputarray;
}

  $reg_total_order = $mysqli->prepare("INSERT INTO product (product_email, product_time_order,ID010) VALUES (?, ?, ?)");
  $reg_total_order->bind_param("sss",  $email,$time,$inputarray[0]);
  $reg_total_order->execute();*/

  /*  if ( $inputarray[0] == "ID010")
       {
  $reg_total_order = $mysqli->prepare("INSERT INTO product (product_email, product_time_order,ID010) VALUES (?, ?, ?)");
  $reg_total_order->bind_param("sss",  $email,$time,$textline);
  $reg_total_order->execute();
       }
   if ( $inputarray[0]  == "ID020")
       {
 $reg_total_order = $mysqli->prepare("INSERT INTO product (product_email, product_time_order,ID020) VALUES (?, ?, ?)");
  $reg_total_order->bind_param("sss",  $email,$time,$textline);
  $reg_total_order->execute();
       } 
 if ( $inputarray[0]  == "ID030")
       {
 $reg_total_order = $mysqli->prepare("INSERT INTO product (product_email, product_time_order,ID030) VALUES (?, ?, ?)");
  $reg_total_order->bind_param("sss",  $email,$time,$textline);
  $reg_total_order->execute();
       }
  if ( $inputarray[0]  == "ID040")
       {
 $reg_total_order = $mysqli->prepare("INSERT INTO product (product_email, product_time_order,ID040) VALUES (?, ?, ?)");
  $reg_total_order->bind_param("sss",  $email,$time,$textline);
  $reg_total_order->execute();
       }
        if (  $inputarray[0]  == "ID050")
       {
 $reg_total_order = $mysqli->prepare("INSERT INTO product (product_email, product_time_order,ID050) VALUES (?, ?, ?)");
  $reg_total_order->bind_param("sss",  $email,$time,$textline);
  $reg_total_order->execute();
       }
 if (  $inputarray[0]  == "ID060")
       {
 $reg_total_order = $mysqli->prepare("INSERT INTO product (product_email, product_time_order,ID060) VALUES (?, ?, ?)");
  $reg_total_order->bind_param("sss",  $email,$time,$textline);
  $reg_total_order->execute();
       }
        if (  $inputarray[0]  == "ID070")
       { $reg_total_order = $mysqli->prepare("INSERT INTO product (product_email, product_time_order,ID070) VALUES (?, ?, ?)");
  $reg_total_order->bind_param("sss",  $email,$time,$textline);
  $reg_total_order->execute();

       }
        if (  $inputarray[0]  == "ID080")
       {
 $reg_total_order = $mysqli->prepare("INSERT INTO product (product_email, product_time_order,ID080) VALUES (?, ?, ?)");
  $reg_total_order->bind_param("sss",  $email,$time,$textline);
  $reg_total_order->execute();
       }*/
        return $inputg;
    }
}


?>

