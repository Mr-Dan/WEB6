<?php
    //Подключение шапки
    require_once("php/header.php");
        require_once("php/dbconnect.php");

?>


 <div class="col-12 InfoWoodLandsquarelog " > 
	<div class="  InfoWoodLandText">
     <H1> Заказчики </H1>

<?php

$result=$mysqli->query("SELECT total_order_id,order_number,total_order_email, total_order_time,total_order_product FROM total_order ");

 $rows = mysqli_num_rows($result); 

//вывод на страничку в виде таблицы
echo "<form action='php/deleteandeditforsqltotal.php' method='get'><table align='center' border=2 bordercolor='grey' width=100%>
<tr><th>total_order_id</th><th>order_number</th><th>total_order_email</th><th>total_order_time</th><th>total_order_product</th><th>Удалить</th></th><th>Редактировать</th></tr>";

 for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 5 ; ++$j)
			{
				if ($j==1)
				{
                    echo "<td><a class='buttunhat'  href='../saleslog.php' style='color: orange;background: rgba(54,57,63,1);'>$row[$j] </a> </td>";

     			}
				else
				{
					echo "<td>$row[$j]</td> ";
				}
			}            
            	echo"<td><input  type='submit'  name='clients$i$5' value='Удалить' style='color: orange;background: rgba(54,57,63,1);'></td>";
               	echo"<td><input  type='submit'  name='clients$i$6' value='Редактировать' style='color: orange;background: rgba(54,57,63,1);'></td>";
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
</html>
