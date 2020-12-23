<?php
    //Подключение шапки
    require_once("php/header.php");
    require_once("php/dbconnect.php");

?>
	
  <div class="col-12 InfoWoodLandsquarelog " > 
	<div class="  InfoWoodLandText">
     <H1> Список журнал учета продаж пиломатериалов  </H1>

<?php

$result=$mysqli->query("SELECT order_id,order_email, order_name,order_adress,order_total_id,order_total_price,Time_order FROM orders ");

 $rows = mysqli_num_rows($result); 

//вывод на страничку в виде таблицы
echo "<form action='php/deleteandeditforsqlorder.php' method='get'><table align='center' border=2 bordercolor='grey' width=100%>
<tr><th>order_id</th><th>order_email</th><th>order_name</th><th>order_adress</th><th>order_total_id</th><th>order_total_price</th><th>Time_order</th><th>Удалить</th></th><th>Редактировать</th></tr>";

 for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 7 ; ++$j)
			{
				if ($j==4)
				{
  						echo "<td><a class='buttunhat'  href='../clients.php' style='color: orange;background: rgba(54,57,63,1);'>$row[$j] </a> </td>";
				}
				else
				{
					echo "<td>$row[$j]</td> ";
				}
			}

             
            		echo"<td><input  type='submit'  name='saleslog$i$5' value='Удалить' style='color: orange;background: rgba(54,57,63,1);'></td>";
               	echo"<td><input  type='submit'  name='saleslog$i$6' value='Редактировать' style='color: orange;background: rgba(54,57,63,1);'></td>";
        echo "</tr>";
    }
    echo "</table> </form>";
     
    // очищаем результат
    mysqli_free_result($result);
?>
    </div>
</div>

<?php
    //Подключение корзины
$filejs='Cart/jscode.js';
    require_once("Cart/cartoption.php");
?>
</body>
</html>
