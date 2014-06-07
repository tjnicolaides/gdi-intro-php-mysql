<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href="assets/style.css" type="text/css" rel="stylesheet"/>
        <title>PHP Class 1 Results</title>
    </head>

<body>

    <div class="wrapper">
        <div class="header"><h1>Results Page</h1></div>
        <div class="content">
            <!--Enter PHP code from slides 21-25-->
            <?php
 				$in = $_GET['inches']; 
				$first = $_GET['first_name']; 
				$last = $_GET['last_name']; 
 				$in = htmlspecialchars($in, ENT_QUOTES, 'UTF-8');
				$first = htmlspecialchars($first, ENT_QUOTES, 'UTF-8');
				$last = htmlspecialchars($last, ENT_QUOTES, 'UTF-8');
				
				hello ($first, $last);
				
				echo "Hello, " . $first . " " . $last . "!";
				
 				echo " You entered " . $in . " inches.<br/>";

				echo " That is " ;
				convertInches ($in);
				echo " centimeters.<br/>";
				
				sayHi(); 

				function convertInches ($inches){
					$centimeters= $inches*2.54;
					echo $centimeters;
				}
				
				function sayHi (){
					echo "Hi!";
				}
				
				function hello ($first_name, $last_name){
					echo "Hello, " . $first_name . " " . $last_name . "!";
				}
			?>


        </div>
        <div class="footer">
            <img src="assets/cc_by.png" alt="Creative Commons Licensed By" title="Creative Commons Licensed By"  height="45"/> 
            Izzy Johnston, in conjunction with Girl Develop It! 
        </div>
    </div>
</body>
</html>
