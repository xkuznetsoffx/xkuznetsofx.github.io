 <? $query = mysql_query("SELECT * FROM `orders` ORDER BY `id` DESC LIMIT 1");
       $order = mysql_fetch_assoc($query);
       header('Location: /pay/?bill='.$order['bill'].'');
       ?>
       