{"filter":false,"title":"adminlogin.php","tooltip":"/server/adminlogin.php","undoManager":{"mark":2,"position":2,"stack":[[{"start":{"row":0,"column":0},"end":{"row":6,"column":2},"action":"insert","lines":["<?php","$con=mysql_connect(\"mysql.comp.polyu.edu.hk\",\"13104448d\",\"suling1234\");","if(!$con)","{","    die('could not connect:'.mysql_error());","}","?>"],"id":1,"ignore":true}],[{"start":{"row":0,"column":0},"end":{"row":6,"column":2},"action":"remove","lines":["<?php","$con=mysql_connect(\"mysql.comp.polyu.edu.hk\",\"13104448d\",\"suling1234\");","if(!$con)","{","    die('could not connect:'.mysql_error());","}","?>"],"id":2,"ignore":true}],[{"start":{"row":0,"column":0},"end":{"row":4,"column":2},"action":"insert","lines":["<?php","    $db=mysql_connect(\"mysql.comp.polyu.edu.hk\",\"13104448d\",\"suling1234\");","    if(!$db)","        die('could not connect:'.mysql_error());","?>"],"id":3,"ignore":true}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":0,"column":0},"end":{"row":0,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1449476960940,"hash":"eed25d7dec5276bdc8781872aba8ce60a229fa0d"}