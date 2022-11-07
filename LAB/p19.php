<html>
	<head>
		<style>
			div 
			{
				align:center;
				width: 800px;00px;
				height:300px;
				border: solid rgb(0, 8, 255);
				background-color:rgba(0, 200, 255, 0.467); 
				padding: 20px;
			}
 
		</style>
	</head>
	<body>
		<div>
			<h1>Prime/ Non Prime Number check using PHP</h1>

			<?php
            function check_prime($num)
            {
                if ($num == 1)
                return 0;
                for ($i = 2; $i <= $num/2; $i++)
                {
                    if ($num % $i == 0)
                    return 0;
                }
                return 1;
            }
            
            <!-- $num = (int)readline('Enter an integer: '); -->
            $num=55;
            print "<br>Number is :- ". $num . "<br>";
            $flag_val = check_prime($num);
            if ($flag_val == 1)
            echo "It is a prime number";
            else
            echo "It is a non-prime number" ?>
		</div>
	</body> 
</html>