{"changed":true,"filter":false,"title":"delete-banquet.php","tooltip":"/delete-banquet.php","value":"<? php\n \n    $db=mysql_connect(\"mysql.comp.polyu.edu.hk\", \"13104448d\", \"suling1234\");\n    mysql_select_db(\"13104448d\");\n    $banquet = $_GET['bid'];\n    $deletion1 = \"DELETE FROM TableSet WHERE Banquet_ID = '\".$banquet.\"'\";\n    $deletion2 = \"DELETE FROM Record WHERE Banquet_ID = '\".$banquet.\"'\";\n    $deletion3 = \"DELETE FROM Meal_Plan WHERE Banquet_ID = '\".$banquet.\"'\";\n    $deletion4 = \"DELETE FROM Banquet WHERE Banquet_ID = '\".$banquet.\"'\";\n    $rs1 = mysql_query($deletion1,$db);\n    $rs2 = mysql_query($deletion2,$db);\n    $rs3 = mysql_query($deletion3,$db);\n    $rs4 = mysql_query($deletion4,$db);\n \n header(\"location: ../admin-home.php\");\n \n    ?>","undoManager":{"mark":99,"position":100,"stack":[[{"start":{"row":15,"column":16},"end":{"row":15,"column":17},"action":"remove","lines":["r"],"id":324}],[{"start":{"row":15,"column":15},"end":{"row":15,"column":16},"action":"remove","lines":["o"],"id":325}],[{"start":{"row":15,"column":15},"end":{"row":15,"column":16},"action":"insert","lines":["r"],"id":326}],[{"start":{"row":15,"column":16},"end":{"row":15,"column":17},"action":"insert","lines":["o"],"id":327}],[{"start":{"row":15,"column":17},"end":{"row":15,"column":18},"action":"insert","lines":["n"],"id":328}],[{"start":{"row":15,"column":18},"end":{"row":15,"column":19},"action":"insert","lines":["g"],"id":329}],[{"start":{"row":15,"column":19},"end":{"row":15,"column":20},"action":"insert","lines":["\""],"id":330}],[{"start":{"row":15,"column":20},"end":{"row":15,"column":21},"action":"insert","lines":[";"],"id":331}],[{"start":{"row":13,"column":1},"end":{"row":15,"column":21},"action":"remove","lines":["   if($rs1){","    header(\"location:admin-home.php\");}","    else echo\"wrong\";"],"id":332}],[{"start":{"row":4,"column":28},"end":{"row":5,"column":0},"action":"insert","lines":["",""],"id":333},{"start":{"row":5,"column":0},"end":{"row":5,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":5,"column":4},"end":{"row":5,"column":5},"action":"insert","lines":["e"],"id":334}],[{"start":{"row":5,"column":5},"end":{"row":5,"column":6},"action":"insert","lines":["c"],"id":335}],[{"start":{"row":5,"column":6},"end":{"row":5,"column":7},"action":"insert","lines":["h"],"id":336}],[{"start":{"row":5,"column":7},"end":{"row":5,"column":8},"action":"insert","lines":["o"],"id":337}],[{"start":{"row":5,"column":8},"end":{"row":5,"column":9},"action":"insert","lines":[" "],"id":338}],[{"start":{"row":5,"column":9},"end":{"row":5,"column":10},"action":"insert","lines":["$"],"id":339}],[{"start":{"row":5,"column":10},"end":{"row":5,"column":11},"action":"insert","lines":["b"],"id":340}],[{"start":{"row":5,"column":11},"end":{"row":5,"column":12},"action":"insert","lines":["a"],"id":341}],[{"start":{"row":5,"column":12},"end":{"row":5,"column":13},"action":"insert","lines":["n"],"id":342}],[{"start":{"row":5,"column":13},"end":{"row":5,"column":14},"action":"insert","lines":["q"],"id":343}],[{"start":{"row":5,"column":14},"end":{"row":5,"column":15},"action":"insert","lines":["u"],"id":344}],[{"start":{"row":5,"column":15},"end":{"row":5,"column":16},"action":"insert","lines":["e"],"id":345}],[{"start":{"row":5,"column":16},"end":{"row":5,"column":17},"action":"insert","lines":["t"],"id":346}],[{"start":{"row":5,"column":17},"end":{"row":5,"column":18},"action":"insert","lines":[";"],"id":347}],[{"start":{"row":6,"column":35},"end":{"row":6,"column":36},"action":"remove","lines":["s"],"id":348},{"start":{"row":6,"column":35},"end":{"row":6,"column":36},"action":"insert","lines":["S"]}],[{"start":{"row":9,"column":58},"end":{"row":9,"column":59},"action":"remove","lines":["{"],"id":349}],[{"start":{"row":9,"column":58},"end":{"row":9,"column":59},"action":"insert","lines":["\""],"id":350}],[{"start":{"row":9,"column":59},"end":{"row":9,"column":60},"action":"insert","lines":["."],"id":351}],[{"start":{"row":9,"column":68},"end":{"row":9,"column":69},"action":"remove","lines":["}"],"id":352}],[{"start":{"row":9,"column":68},"end":{"row":9,"column":69},"action":"insert","lines":["\""],"id":353}],[{"start":{"row":9,"column":68},"end":{"row":9,"column":69},"action":"insert","lines":["."],"id":354}],[{"start":{"row":8,"column":59},"end":{"row":8,"column":72},"action":"remove","lines":["'{$banquet}'\""],"id":355},{"start":{"row":8,"column":59},"end":{"row":8,"column":74},"action":"insert","lines":["'\".$banquet.\"'\""]}],[{"start":{"row":7,"column":56},"end":{"row":7,"column":69},"action":"remove","lines":["'{$banquet}'\""],"id":356},{"start":{"row":7,"column":56},"end":{"row":7,"column":71},"action":"insert","lines":["'\".$banquet.\"'\""]}],[{"start":{"row":6,"column":58},"end":{"row":6,"column":71},"action":"remove","lines":["'{$banquet}'\""],"id":357},{"start":{"row":6,"column":58},"end":{"row":6,"column":73},"action":"insert","lines":["'\".$banquet.\"'\""]}],[{"start":{"row":1,"column":3},"end":{"row":1,"column":4},"action":"insert","lines":[" "],"id":358}],[{"start":{"row":5,"column":3},"end":{"row":5,"column":18},"action":"remove","lines":[" echo $banquet;"],"id":359}],[{"start":{"row":5,"column":3},"end":{"row":6,"column":0},"action":"remove","lines":["",""],"id":360}],[{"start":{"row":5,"column":3},"end":{"row":5,"column":4},"action":"remove","lines":[" "],"id":361}],[{"start":{"row":5,"column":3},"end":{"row":5,"column":4},"action":"remove","lines":[" "],"id":362}],[{"start":{"row":5,"column":3},"end":{"row":5,"column":4},"action":"remove","lines":[" "],"id":363}],[{"start":{"row":13,"column":1},"end":{"row":14,"column":0},"action":"insert","lines":["",""],"id":364},{"start":{"row":14,"column":0},"end":{"row":14,"column":1},"action":"insert","lines":[" "]}],[{"start":{"row":14,"column":1},"end":{"row":14,"column":2},"action":"insert","lines":["h"],"id":365}],[{"start":{"row":14,"column":2},"end":{"row":14,"column":3},"action":"insert","lines":["e"],"id":366}],[{"start":{"row":14,"column":3},"end":{"row":14,"column":4},"action":"insert","lines":["a"],"id":367}],[{"start":{"row":14,"column":4},"end":{"row":14,"column":5},"action":"insert","lines":["r"],"id":368}],[{"start":{"row":14,"column":4},"end":{"row":14,"column":5},"action":"remove","lines":["r"],"id":369}],[{"start":{"row":14,"column":4},"end":{"row":14,"column":5},"action":"insert","lines":["d"],"id":370}],[{"start":{"row":14,"column":5},"end":{"row":14,"column":6},"action":"insert","lines":["e"],"id":371}],[{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"insert","lines":["r"],"id":372}],[{"start":{"row":14,"column":7},"end":{"row":14,"column":9},"action":"insert","lines":["()"],"id":373}],[{"start":{"row":14,"column":8},"end":{"row":14,"column":10},"action":"insert","lines":["\"\""],"id":374}],[{"start":{"row":14,"column":9},"end":{"row":14,"column":10},"action":"insert","lines":["l"],"id":375}],[{"start":{"row":14,"column":10},"end":{"row":14,"column":11},"action":"insert","lines":["o"],"id":376}],[{"start":{"row":14,"column":11},"end":{"row":14,"column":12},"action":"insert","lines":["c"],"id":377}],[{"start":{"row":14,"column":12},"end":{"row":14,"column":13},"action":"insert","lines":["a"],"id":378}],[{"start":{"row":14,"column":13},"end":{"row":14,"column":14},"action":"insert","lines":["t"],"id":379}],[{"start":{"row":14,"column":14},"end":{"row":14,"column":15},"action":"insert","lines":["i"],"id":380}],[{"start":{"row":14,"column":15},"end":{"row":14,"column":16},"action":"insert","lines":["o"],"id":381}],[{"start":{"row":14,"column":16},"end":{"row":14,"column":17},"action":"insert","lines":["n"],"id":382}],[{"start":{"row":14,"column":17},"end":{"row":14,"column":18},"action":"insert","lines":[":"],"id":383}],[{"start":{"row":14,"column":18},"end":{"row":14,"column":54},"action":"insert","lines":["location: ../confirm-information.php"],"id":384}],[{"start":{"row":14,"column":9},"end":{"row":14,"column":18},"action":"remove","lines":["location:"],"id":385}],[{"start":{"row":14,"column":22},"end":{"row":14,"column":41},"action":"remove","lines":["confirm-information"],"id":386},{"start":{"row":14,"column":22},"end":{"row":14,"column":23},"action":"insert","lines":["a"]}],[{"start":{"row":14,"column":23},"end":{"row":14,"column":24},"action":"insert","lines":["d"],"id":387}],[{"start":{"row":14,"column":24},"end":{"row":14,"column":25},"action":"insert","lines":["m"],"id":388}],[{"start":{"row":14,"column":25},"end":{"row":14,"column":26},"action":"insert","lines":["i"],"id":389}],[{"start":{"row":14,"column":26},"end":{"row":14,"column":27},"action":"insert","lines":["n"],"id":390}],[{"start":{"row":14,"column":27},"end":{"row":14,"column":28},"action":"insert","lines":["-"],"id":391}],[{"start":{"row":14,"column":28},"end":{"row":14,"column":29},"action":"insert","lines":["h"],"id":392}],[{"start":{"row":14,"column":29},"end":{"row":14,"column":30},"action":"insert","lines":["o"],"id":393}],[{"start":{"row":14,"column":30},"end":{"row":14,"column":31},"action":"insert","lines":["m"],"id":394}],[{"start":{"row":14,"column":31},"end":{"row":14,"column":32},"action":"insert","lines":["e"],"id":395}],[{"start":{"row":14,"column":38},"end":{"row":14,"column":39},"action":"insert","lines":[";"],"id":396}],[{"start":{"row":14,"column":39},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":397},{"start":{"row":15,"column":0},"end":{"row":15,"column":1},"action":"insert","lines":[" "]}],[{"start":{"row":1,"column":1},"end":{"row":1,"column":20},"action":"remove","lines":["   session_start();"],"id":398}],[{"start":{"row":5,"column":4},"end":{"row":5,"column":5},"action":"insert","lines":["/"],"id":399}],[{"start":{"row":5,"column":5},"end":{"row":5,"column":6},"action":"insert","lines":["/"],"id":400}],[{"start":{"row":6,"column":4},"end":{"row":6,"column":5},"action":"insert","lines":["/"],"id":401}],[{"start":{"row":6,"column":5},"end":{"row":6,"column":6},"action":"insert","lines":["/"],"id":402}],[{"start":{"row":7,"column":3},"end":{"row":7,"column":4},"action":"insert","lines":["/"],"id":403}],[{"start":{"row":7,"column":4},"end":{"row":7,"column":5},"action":"insert","lines":["/"],"id":404}],[{"start":{"row":9,"column":3},"end":{"row":9,"column":4},"action":"insert","lines":["/"],"id":405}],[{"start":{"row":9,"column":4},"end":{"row":9,"column":5},"action":"insert","lines":["/"],"id":406}],[{"start":{"row":10,"column":3},"end":{"row":10,"column":4},"action":"insert","lines":["/"],"id":407}],[{"start":{"row":10,"column":4},"end":{"row":10,"column":5},"action":"insert","lines":["/"],"id":408}],[{"start":{"row":11,"column":3},"end":{"row":11,"column":4},"action":"insert","lines":["/"],"id":409}],[{"start":{"row":11,"column":4},"end":{"row":11,"column":5},"action":"insert","lines":["/"],"id":410}],[{"start":{"row":9,"column":4},"end":{"row":9,"column":5},"action":"remove","lines":["/"],"id":411}],[{"start":{"row":9,"column":3},"end":{"row":9,"column":4},"action":"remove","lines":["/"],"id":412}],[{"start":{"row":10,"column":3},"end":{"row":10,"column":4},"action":"remove","lines":["/"],"id":413}],[{"start":{"row":10,"column":2},"end":{"row":10,"column":3},"action":"remove","lines":[" "],"id":414}],[{"start":{"row":10,"column":2},"end":{"row":10,"column":3},"action":"remove","lines":["/"],"id":415}],[{"start":{"row":11,"column":4},"end":{"row":11,"column":5},"action":"remove","lines":["/"],"id":416}],[{"start":{"row":11,"column":3},"end":{"row":11,"column":4},"action":"remove","lines":["/"],"id":417}],[{"start":{"row":5,"column":5},"end":{"row":5,"column":6},"action":"remove","lines":["/"],"id":418}],[{"start":{"row":5,"column":4},"end":{"row":5,"column":5},"action":"remove","lines":["/"],"id":419}],[{"start":{"row":6,"column":4},"end":{"row":6,"column":5},"action":"remove","lines":["/"],"id":420}],[{"start":{"row":6,"column":4},"end":{"row":6,"column":5},"action":"remove","lines":["/"],"id":421}],[{"start":{"row":7,"column":4},"end":{"row":7,"column":5},"action":"remove","lines":["/"],"id":422}],[{"start":{"row":7,"column":3},"end":{"row":7,"column":4},"action":"remove","lines":["/"],"id":423}],[{"start":{"row":10,"column":3},"end":{"row":10,"column":4},"action":"insert","lines":[" "],"id":424}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":14,"column":39},"end":{"row":14,"column":39},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1449657835215}