<?php
  $a = 100;
    $b = -2;

      echo 'A : '.$a.'<br/>';
        echo 'B : '.$b.'<br>';
	  swap($a,$b);

	    function swap($a,$b){
	        $a = $a + $b; 
		    $b = $a - $b;
		        $a = $a - $b;

			    echo '<br/><br/>A : '.$a.'<br/>';
			        echo 'B : '.$b.'<br/>';

				  }
				  ?>
