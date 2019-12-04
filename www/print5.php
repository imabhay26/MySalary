<?php


		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=5";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb5=$row["pipb"];
			$gp5=$row["gp"];
			//$bp1=$row["bp"];
			$bp5=$pipb5 + $gp5;
			$da5=$bp5*1.54;
			$sp5=$row["sp"];
			$arr5=$row["arr"];
			$othr5=$row["othr"];
			$joining5=$row["joining"];
			$gross5=$bp5 + $da5 + $sp5 + $arr5 + $othr5 ;
			
			
			$gpf5=$row["gpf"];
			$hr5=$row["hr"];
			$elect5=$row["elect"];
			$incm5=$row["incm"];
			$pol5=$row["pol"];
			$othr_d5=$row["othr_d"];
			$total5=$gpf5 + $hr5 + $elect5 + $incm5 + $pol5 + $othr_d5 ;
			$rmrk5=$row["rmrk"];
			$fnl_sal5=$row["gross"] - $total5;
			
		}

		
		
?>

<!DOCTYPE HTML>

<html>
<head>
    <style>
        table,tr,td{
            border: 1px solid lightblue;
            border-collapse: collapse;
        }
    </style>
</head>

<body style="font-family: Verdana">
<center>
<h2>MR. ANKUSH KUMAR RAJPOOT</h2>
<table style="width:400px;">

    <tr>
        <th colspan="2" style="padding: 10px">EARNINGS</th>
    </tr>
    <tr>
        <td>REF.NO.</td>
        <td>05</td>
    </tr>
    <tr>
        <td>PAY IN PAY BAND</td>
        <td><?php echo $pipb5 ?></td>
    </tr>
    <tr>
        <td>G.P.</td>
        <td><?php echo $gp5 ?></td>
    </tr>
    <tr>
        <td>BASIC PAY</td>
        <td><?php echo $bp5 ?></td>
    </tr>
    <tr>
        <td>DA(154%)</td>
        <td><?php echo $da5 ?></td>
    </tr>
    <tr>
        <td>SPL.PAY</td>
        <td><?php echo $sp5 ?></td>
    </tr>
    <tr>
        <td>ARREARS</td>
        <td><?php echo $arr5 ?></td>
    </tr>
    <tr>
        <td>OTHER ALL(IF ANY)</td>
        <td><?php echo $othr5 ?></td>
    </tr>
    <tr>
        <td>GROSS</td>
        <td><?php echo $gross5 ?></td>
    </tr>

    <tr>
        <th colspan="2" style="padding: 10px">DEDUCTION</th>
    </tr>
    <tr>
        <td>G.P.F.</td>
        <td><?php echo $gpf5 ?></td>
    </tr>
    <tr>
        <td>H.R.</td>
        <td><?php echo $hr5 ?></td>
    </tr>
    <tr>
        <td>ELECT.</td>
        <td><?php echo $elect5 ?></td>
    </tr>
    <tr>
        <td>INCOME TAX</td>
        <td><?php echo $incm5 ?></td>
    </tr>
    <tr>
        <td>P.O.L.</td>
        <td><?php echo $pol5 ?></td>
    </tr>
    <tr>
        <td>OTHER DED. IF ANY</td>
        <td><?php echo $othr_d5 ?></td>
    </tr>
    <tr>
        <td>TOTAL DEDUCT</td>
        <td><?php echo $total5 ?></td>
    </tr>
    <tr>
        <th colspan="2" style="padding: 10px">NET PAY = <?php echo $fnl_sal5 ?></th>
    </tr>
</table>
<br>
<button onclick="fun()" style="padding: 5px 20px 5px 20px">PRINT</button>

<br><br>
<a href="deduct.php">Back to previous page</a>
</center>


<script>
    function fun() {
        print(window);
    }
</script>
</body>
</html>