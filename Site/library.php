<?php
	function cabecalho(){
		echo "<html>";
		echo '<head>';
		echo '<meta http-equiv="content-type" content="text/html" charset=UTF-8"/>';
		echo '<link type="text/css" rel="stylesheet" href="style.css" />';
		echo '<link href="js-image-slider.css" rel="stylesheet" type="text/css" />';
		echo '<title>Odontovital</title>';
		echo '</head>';
		echo '<body>';
	};
	
	function bottom(){
		echo '<script type="text/javascript" src="js/jquery.js"></script>
		<script src="js/js-image-slider.js" type="text/javascript"></script>
		<script src="js/js-odontovital.js" type="text/javascript"></script>
		
		</body>
		</html>';
	};
?>