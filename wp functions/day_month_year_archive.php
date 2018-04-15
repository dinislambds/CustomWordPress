<?php 



	if ( is_day() ){
		echo 'Daily archive'
	}elseif( is_month() ){
		echo 'Monthly archive'
	}
	elseif( is_year() ){
		echo 'Yearly archive'
	}






 ?>