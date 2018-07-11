<?
function btn_edit ($url)
{
	return anchor($url, '<i class="glyphicon glyphicon-edit"></i>');
}
function btn_delete ($url)
{
	return anchor($url, '<i class="glyphicon glyphicon-remove"></i>',array('onclick' => "return confirm('�� ������� ��� ������ ������� ��������?')"));
}

if (!function_exists('dump')) {
    function dump ($var, $label = 'Dump', $echo = TRUE)
    {
        // Store dump in variable 
        ob_start();
        var_dump($var);
        $output = ob_get_clean();
        
        // Add formatting
        $output = preg_replace("/\]\=\>\n(\s+)/m", "] => ", $output);
        $output = '<pre style="background: #FFFEEF; color: #000; border: 1px dotted #000; padding: 10px; margin: 10px 0; text-align: left;">' . $label . ' => ' . $output . '</pre>';
        
        // Output
        if ($echo == TRUE) {
            echo $output;
        }
        else {
            return $output;
        }
    }
}
 
 
if (!function_exists('dump_exit')) {
    function dump_exit($var, $label = 'Dump', $echo = TRUE) {
        dump ($var, $label, $echo);
        exit;
    }
}

function e($string) {
	return htmlentities($string);
}





function get_menu ($array) {
	$str = '';
	if(is_array($array)) {
		$str .= ''.PHP_EOL;
		foreach($array as $item) {
			//$str .= '<li>';
			$str .= '<li><a href="'. site_url('page/'.$item['slug']).'">'.$item['title'].'</a></li>';
			//$str .= '</li>'.PHP_EOL;
		}
		$str .= ''.PHP_EOL;
	}
	else {
		$str = $array;
	}
	return $str;
}

function get_modals($array) {
	$str = "";
	foreach($array as $item) {
	 $str .= '
	 <div class="modal fade" id="myModal_'.$item->id.'">
		<div class="modal-dialog">
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			  <h4 class="modal-title">'.$item->name.'</h4>
			</div>
			<div class="modal-body">
			  '.$item->descr.'
			</div>
		  </div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	  </div><!-- /.modal -->'.PHP_EOL;
	}
	return $str;
}



?>