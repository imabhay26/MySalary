<?php


		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=8";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb8=$row["pipb"];
			$gp8=$row["gp"];
			//$bp1=$row["bp"];
			$bp8=$pipb8 + $gp8;
			$da8=$bp8*1.54;
			$sp8=$row["sp"];
			$arr8=$row["arr"];
			$othr8=$row["othr"];
			$joining8=$row["joining"];
			$gross8=$bp8 + $da8 + $sp8 + $arr8 + $othr8 ;
			
			
			$gpf8=$row["gpf"];
			$hr8=$row["hr"];
			$elect8=$row["elect"];
			$incm8=$row["incm"];
			$pol8=$row["pol"];
			$othr_d8=$row["othr_d"];
			$total8=$gpf8+ $hr8 + $elect8 + $incm8 + $pol8 + $othr_d8 ;
			$rmrk8=$row["rmrk"];
			$fnl_sal8=$row["gross"] - $total8;
			
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
<h2>MR. RAVI SHANKAR</h2>
<table style="width:400px;">

    <tr>
        <th colspan="2" style="padding: 10px">EARNINGS</th>
    </tr>
    <tr>
        <td>REF.NO.</td>
        <td>08</td>
    </tr>
    <tr>
        <td>PAY IN PAY BAND</td>
        <td><?php echo $pipb8 ?></td>
    </tr>
    <tr>
        <td>G.P.</td>
        <td><?php echo $gp8 ?></td>
    </tr>
    <tr>
        <td>BASIC PAY</td>
        <td><?php echo $bp8 ?></td>
    </tr>
    <tr>
        <td>DA(154%)</td>
        <td><?php echo $da8 ?></td>
    </tr>
    <tr>
        <td>SPL.PAY</td>
        <td><?php echo $sp8 ?></td>
    </tr>
    <tr>
        <td>ARREARS</td>
        <td><?php echo $arr8 ?></td>
    </tr>
    <tr>
        <td>OTHER ALL(IF ANY)</td>
        <td><?php echo $othr8 ?></td>
    </tr>
    <tr>
        <td>GROSS</td>
        <td><?php echo $gross8 ?></td>
    </tr>

    <tr>
        <th colspan="2" style="padding: 10px">DEDUCTION</th>
    </tr>
    <tr>
        <td>G.P.F.</td>
        <td><?php echo $gpf8 ?></td>
    </tr>
    <tr>
        <td>H.R.</td>
        <td><?php echo $hr8 ?></td>
    </tr>
    <tr>
        <td>ELECT.</td>
        <td><?php echo $elect8 ?></td>
    </tr>
    <tr>
        <td>INCOME TAX</td>
        <td><?php echo $incm8 ?></td>
    </tr>
    <tr>
        <td>P.O.L.</td>
        <td><?php echo $pol8 ?></td>
    </tr>
    <tr>
        <td>OTHER DED. IF ANY</td>
        <td><?php echo $othr_d8 ?></td>
    </tr>
    <tr>
        <td>TOTAL DEDUCT</td>
        <td><?php echo $total8 ?></td>
    </tr>
    <tr>
        <th colspan="2" style="padding: 10px">NET PAY = <?php echo $fnl_sal8 ?></th>
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