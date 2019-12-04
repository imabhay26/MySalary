<?php


		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=10";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb10=$row["pipb"];
			$gp10=$row["gp"];
			//$bp1=$row["bp"];
			$bp10=$pipb10 + $gp10;
			$da10=$bp10*1.54;
			$sp10=$row["sp"];
			$arr10=$row["arr"];
			$othr10=$row["othr"];
			$joining10=$row["joining"];
			$gross10=$bp10 + $da10 + $sp10 + $arr10 + $othr10 ;
			
			
			$gpf10=$row["gpf"];
			$hr10=$row["hr"];
			$elect10=$row["elect"];
			$incm10=$row["incm"];
			$pol10=$row["pol"];
			$othr_d10=$row["othr_d"];
			$total10=$gpf10+ $hr10 + $elect10 + $incm10 + $pol10 + $othr_d10 ;
			$rmrk10=$row["rmrk"];
			$fnl_sal10=$row["gross"] - $total10;
			
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
<h2>MR. DEEP SINGH THAKUR</h2>
<table style="width:400px;">

    <tr>
        <th colspan="2" style="padding: 10px">EARNINGS</th>
    </tr>
    <tr>
        <td>REF.NO.</td>
        <td>10</td>
    </tr>
    <tr>
        <td>PAY IN PAY BAND</td>
        <td><?php echo $pipb10 ?></td>
    </tr>
    <tr>
        <td>G.P.</td>
        <td><?php echo $gp10 ?></td>
    </tr>
    <tr>
        <td>BASIC PAY</td>
        <td><?php echo $bp10 ?></td>
    </tr>
    <tr>
        <td>DA(154%)</td>
        <td><?php echo $da10 ?></td>
    </tr>
    <tr>
        <td>SPL.PAY</td>
        <td><?php echo $sp10 ?></td>
    </tr>
    <tr>
        <td>ARREARS</td>
        <td><?php echo $arr10 ?></td>
    </tr>
    <tr>
        <td>OTHER ALL(IF ANY)</td>
        <td><?php echo $othr10 ?></td>
    </tr>
    <tr>
        <td>GROSS</td>
        <td><?php echo $gross10 ?></td>
    </tr>

    <tr>
        <th colspan="2" style="padding: 10px">DEDUCTION</th>
    </tr>
    <tr>
        <td>G.P.F.</td>
        <td><?php echo $gpf10 ?></td>
    </tr>
    <tr>
        <td>H.R.</td>
        <td><?php echo $hr10 ?></td>
    </tr>
    <tr>
        <td>ELECT.</td>
        <td><?php echo $elect10 ?></td>
    </tr>
    <tr>
        <td>INCOME TAX</td>
        <td><?php echo $incm10 ?></td>
    </tr>
    <tr>
        <td>P.O.L.</td>
        <td><?php echo $pol10 ?></td>
    </tr>
    <tr>
        <td>OTHER DED. IF ANY</td>
        <td><?php echo $othr_d10 ?></td>
    </tr>
    <tr>
        <td>TOTAL DEDUCT</td>
        <td><?php echo $total10 ?></td>
    </tr>
    <tr>
        <th colspan="2" style="padding: 10px">NET PAY = <?php echo $fnl_sal10 ?></th>
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