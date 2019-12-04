<?php


		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=13";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb13=$row["pipb"];
			$gp13=$row["gp"];
			//$bp1=$row["bp"];
			$bp13=$pipb13 + $gp13;
			$da13=$bp13*1.54;
			$sp13=$row["sp"];
			$arr13=$row["arr"];
			$othr13=$row["othr"];
			$joining13=$row["joining"];
			$gross13=$bp13 + $da13 + $sp13 + $arr13 + $othr13 ;
			
			
			$gpf13=$row["gpf"];
			$hr13=$row["hr"];
			$elect13=$row["elect"];
			$incm13=$row["incm"];
			$pol13=$row["pol"];
			$othr_d13=$row["othr_d"];
			$total13=$gpf13 + $hr13 + $elect13 + $incm13 + $pol13 + $othr_d13 ;
			$rmrk13=$row["rmrk"];
			$fnl_sal13=$row["gross"] - $total13;
			
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
<h2>MR. ANURAG CHAUHAN</h2>
<table style="width:400px;text-ali">

    <tr>
        <th colspan="2" style="padding: 10px">EARNINGS</th>
    </tr>
    <tr>
        <td>REF.NO.</td>
        <td>13</td>
    </tr>
    <tr>
        <td>PAY IN PAY BAND</td>
        <td><?php echo $pipb13 ?></td>
    </tr>
    <tr>
        <td>G.P.</td>
        <td><?php echo $gp13 ?></td>
    </tr>
    <tr>
        <td>BASIC PAY</td>
        <td><?php echo $bp13 ?></td>
    </tr>
    <tr>
        <td>DA(154%)</td>
        <td><?php echo $da13 ?></td>
    </tr>
    <tr>
        <td>SPL.PAY</td>
        <td><?php echo $sp13 ?></td>
    </tr>
    <tr>
        <td>ARREARS</td>
        <td><?php echo $arr13 ?></td>
    </tr>
    <tr>
        <td>OTHER ALL(IF ANY)</td>
        <td><?php echo $othr13 ?></td>
    </tr>
    <tr>
        <td>GROSS</td>
        <td><?php echo $gross13 ?></td>
    </tr>

    <tr>
        <th colspan="2" style="padding: 10px">DEDUCTION</th>
    </tr>
    <tr>
        <td>G.P.F.</td>
        <td><?php echo $gpf13 ?></td>
    </tr>
    <tr>
        <td>H.R.</td>
        <td><?php echo $hr13 ?></td>
    </tr>
    <tr>
        <td>ELECT.</td>
        <td><?php echo $elect13 ?></td>
    </tr>
    <tr>
        <td>INCOME TAX</td>
        <td><?php echo $incm13 ?></td>
    </tr>
    <tr>
        <td>P.O.L.</td>
        <td><?php echo $pol13 ?></td>
    </tr>
    <tr>
        <td>OTHER DED. IF ANY</td>
        <td><?php echo $othr_d13 ?></td>
    </tr>
    <tr>
        <td>TOTAL DEDUCT</td>
        <td><?php echo $total13 ?></td>
    </tr>
    <tr>
        <th colspan="2" style="padding: 10px">NET PAY = <?php echo $fnl_sal13 ?></th>
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