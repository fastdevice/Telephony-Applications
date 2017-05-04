<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>

<Response>
   <Say>The current time and date is</Say>
   <Say><?php echo ltrim(date("h"),"0") ?> </Say>
   <Say><?php echo date("i") ?></Say>
   <Say><?php echo " and "; echo date("s"); echo "seconds" ?></Say>
   <Say><?php echo date("m d Y"); ?></Say>
</Response>
