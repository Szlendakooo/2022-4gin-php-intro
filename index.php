<?php
    $ipsum="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut enim odio, vehicula ac magna vel, viverra lacinia nisl. Etiam nec massa enim. Morbi sed dictum nisi. Suspendisse et gravida ipsum, eu accumsan mi. Ut bibendum nisi sapien, ac mollis ex elementum vel. Integer metus nulla, efficitur quis blandit in, molestie sed sem. Nullam eget massa turpis. Suspendisse turpis leo, consectetur sed massa ac, viverra cursus lorem. Quisque vel nibh efficitur, placerat ante et, fringilla nulla. Suspendisse urna velit, tempor eget odio at, commodo venenatis neque. Donec vestibulum mollis diam eu egestas. Quisque iaculis lorem eros, et interdum justo pellentesque vitae.";
    $slowa=explode(" ",$ipsum);
    foreach($slowa as $slowo){
        if(strstr($slowo,'e')==true){
            $filtr[]=$slowo;
        }
    }
    var_dump($filtr);
?>