<!--load templae function-->
<?php
	function loadTemplate($filename, $tempVars){//file passed
		extract($tempVars);//ectract
		ob_start();//start
		require $filename;
		$content = ob_get_clean();//clean
		return $content;

	}
?>