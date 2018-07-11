<?php

if(strstr($output,'$SEARCH_FORM$')) {
	$search_form = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/application/views/search_form.php');
	$output = str_replace('$SEARCH_FORM$', $search_form,$output);
}
if(strstr($output,'$SEARCH_RESULTS$')) {
	$search_results='';
	$search_results_template = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/application/views/search_result.php');

	if(!empty($_POST['q']) or !empty($_GET['alphabet'])) {
		if(!empty($_POST['q'])) {
			$search_array = explode(' ',$_POST['q']);
			$sql='';
			foreach($search_array as $value) {
				if(empty($sql))
				$sql = 'SELECT * FROM goods WHERE name LIKE "%'.$value.'%"';
				else $sql .= ' AND name LIKE "%'.$value.'%"';
			}
		}
		else {
			$sql = 'SELECT * FROM goods WHERE name LIKE "'.mb_substr($_GET['alphabet'],0,1,'UTF-8').'%"';
		}
		$sql.=' ORDER BY name LIMIT 100';
		$q = mysql_query($sql);
		if($q) {
			$i=0;
			while($row=mysql_fetch_assoc($q)) {
				$i++;
				$TITLE = $row['name'];

				$HASH = preg_replace('/[^\p{L}\p{N}\s]/u','',md5(config_item('encryption_key').$TITLE));
				$uppath = $_SERVER['DOCUMENT_ROOT'].'/assets/uploads/'.preg_replace('/[^\p{L}\p{N}\s]/u','', md5(config_item('encryption_key').$HASH.$TITLE)).'/';
				$fl = file($uppath.$HASH);
				$COUNT = count($fl);				
		

				$search_results.=str_replace(
					array('$ITEM_ID$','$ITEM_TITLE$','$ITEM_PRICE$','$ITEM_IMAGE$','$ITEM_COUNT$'),
					array($row['id'],$TITLE,$row['price_final'],$row['iconurl'],$COUNT),
				$search_results_template);
			}
			if($i==0) {$search_results='<div><b>Ничего не найдено.</b></div>';}
		}
		else {
			$search_results='<div>'.mysql_error().'</div>';
		}
	}
	else {
		$search_results='<div></div>';
	}

	$output = str_replace('$SEARCH_RESULTS$', $search_results,$output);
}
if(strstr($output,'$SEARCH_QUERY$')) {
	if(!empty($_POST['q']))
	$output = str_replace('$SEARCH_QUERY$', $_POST['q'],$output);
	else {
		if(!empty($_GET['alphabet']))
		$output = str_replace('$SEARCH_QUERY$', 'Начинается с '.mb_substr($_GET['alphabet'],0,1,'UTF-8'),$output);
		else
		$output = str_replace('$SEARCH_QUERY$', 'Пустой запрос',$output);
	}
}
?>
