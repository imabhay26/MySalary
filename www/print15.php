<?php


		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=15";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb15=$row["pipb"];
			$gp15=$row["gp"];
			//$bp1=$row["bp"];
			$bp15=$pipb15 + $gp15;
			$da15=$bp15*1.54;
			$sp15=$row["sp"];
			$arr15=$row["arr"];
			$othr15=$row["othr"];
			$joining15=$row["joining"];
			$gross15=$bp15 + $da15 + $sp15 + $arr15 + $othr15 ;
			
			
			$gpf15=$row["gpf"];
			$hr15=$row["hr"];
			$elect15=$row["elect"];
			$incm15=$row["incm"];
			$pol15=$row["pol"];
			$othr_d15=$row["othr_d"];
			$total15=$gpf15 + $hr15 + $elect15 + $incm15 + $pol15 + $othr_d15 ;
			$rmrk15=$row["rmrk"];
			$fnl_sal15=$row["gross"] - $total15;
			
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
<h2>MR. ASHISH TRIPATHI</h2>
<table style="width:400px;text-ali">

    <tr>
        <th colspan="2" style="padding: 10px">EARNINGS</th>
    </tr>
    <tr>
        <td>REF.NO.</td>
        <td>15</td>
    </tr>
    <tr>
        <td>PAY IN PAY BAND</td>
        <td><?php echo $pipb15 ?></td>
    </tr>
    <tr>
        <td>G.P.</td>
        <td><?php echo $gp15 ?></td>
    </tr>
    <tr>
        <td>BASIC PAY</td>
        <td><?php echo $bp15 ?></td>
    </tr>
    <tr>
        <td>DA(154%)</td>
        <td><?php echo $da15 ?></td>
    </tr>
    <tr>
        <td>SPL.PAY</td>
        <td><?php echo $sp15 ?></td>
    </tr>
    <tr>
        <td>ARREARS</td>
        <td><?php echo $arr15 ?></td>
    </tr>
    <tr>
        <td>OTHER ALL(IF ANY)</td>
        <td><?php echo $othr15 ?></td>
    </tr>
    <tr>
        <td>GROSS</td>
        <td><?php echo $gross15 ?></td>
    </tr>

    <tr>
        <th colspan="2" style="padding: 10px">DEDUCTION</th>
    </tr>
    <tr>
        <td>G.P.F.</td>
        <td><?php echo $gpf15 ?></td>
    </tr>
    <tr>
        <td>H.R.</td>
        <td><?php echo $hr15 ?></td>
    </tr>
    <tr>
        <td>ELECT.</td>
        <td><?php echo $elect15 ?></td>
    </tr>
    <tr>
        <td>INCOME TAX</td>
        <td><?php echo $incm15 ?></td>
    </tr>
    <tr>
        <td>P.O.L.</td>
        <td><?php echo $pol15 ?></td>
    </tr>
    <tr>
        <td>OTHER DED. IF ANY</td>
        <td><?php echo $othr_d15 ?></td>
    </tr>
    <tr>
        <td>TOTAL DEDUCT</td>
        <td><?php echo $total15 ?></td>
    </tr>
    <tr>
        <th colspan="2" style="padding: 10px">NET PAY = <?php echo $fnl_sal15 ?></th>
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