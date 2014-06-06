<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href="assets/style.css" type="text/css" rel="stylesheet"/>
        <title>PHP Class 1 Results</title>
    </head>

    <body>
    
        <div class="wrapper">
            <div class="header">
                <h1>Results Page</h1>
            </div>
            <div class="content">
                <?php
 			
                    $f = $_GET['degrees']; 
                    $f = htmlspecialchars($f, ENT_QUOTES, 'UTF-8');
                    
                    echo "You entered " . $f . " degrees Fahrenheit.";

                    $c= ($f-32)*5/9;
                    $c = round($c, 2);
			
                    echo "That is " . $c. " Celsius.";
                ?>

            </div>
            
            <div class="footer">
                <img src="assets/cc_by.png" alt="Creative Commons Licensed By" title="Creative Commons Licensed By"  height="45"/> Izzy Johnston, in conjunction with Girl Develop It! </div>
        </div>
    </body>
</html>
