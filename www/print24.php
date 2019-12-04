<?php


		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=24";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb24=$row["pipb"];
			$gp24=$row["gp"];
			//$bp1=$row["bp"];
			$bp24=$pipb24 + $gp24;
			$da24=$bp24*1.54;
			$sp24=$row["sp"];
			$arr24=$row["arr"];
			$othr24=$row["othr"];
			$joining24=$row["joining"];
			$gross24=$bp24 + $da24 + $sp24 + $arr24 + $othr24 ;
			
			$gpf24=$row["gpf"];
			$hr24=$row["hr"];
			$elect24=$row["elect"];
			$incm24=$row["incm"];
			$pol24=$row["pol"];
			$othr_d24=$row["othr_d"];
			$total24=$gpf24 + $hr24 + $elect24 + $incm24 + $pol24 + $othr_d24 ;
			$rmrk24=$row["rmrk"];
			$fnl_sal24=$row["gross"] - $total24;
			
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
<h2>MR. AMIT TRIPATHI</h2>
<table style="width:400px;text-ali">

    <tr>
        <th colspan="2" style="padding: 10px">EARNINGS</th>
    </tr>
    <tr>
        <td>REF.NO.</td>
        <td>24</td>
    </tr>
    <tr>
        <td>PAY IN PAY BAND</td>
        <td><?php echo $pipb24 ?></td>
    </tr>
    <tr>
        <td>G.P.</td>
        <td><?php echo $gp24 ?></td>
    </tr>
    <tr>
        <td>BASIC PAY</td>
        <td><?php echo $bp24 ?></td>
    </tr>
    <tr>
        <td>DA(154%)</td>
        <td><?php echo $da24 ?></td>
    </tr>
    <tr>
        <td>SPL.PAY</td>
        <td><?php echo $sp24 ?></td>
    </tr>
    <tr>
        <td>ARREARS</td>
        <td><?php echo $arr24 ?></td>
    </tr>
    <tr>
        <td>OTHER ALL(IF ANY)</td>
        <td><?php echo $othr24 ?></td>
    </tr>
    <tr>
        <td>GROSS</td>
        <td><?php echo $gross24 ?></td>
    </tr>

    <tr>
        <th colspan="2" style="padding: 10px">DEDUCTION</th>
    </tr>
    <tr>
        <td>G.P.F.</td>
        <td><?php echo $gpf24 ?></td>
    </tr>
    <tr>
        <td>H.R.</td>
        <td><?php echo $hr24 ?></td>
    </tr>
    <tr>
        <td>ELECT.</td>
        <td><?php echo $elect24 ?></td>
    </tr>
    <tr>
        <td>INCOME TAX</td>
        <td><?php echo $incm24 ?></td>
    </tr>
    <tr>
        <td>P.O.L.</td>
        <td><?php echo $pol24 ?></td>
    </tr>
    <tr>
        <td>OTHER DED. IF ANY</td>
        <td><?php echo $othr_d24 ?></td>
    </tr>
    <tr>
        <td>TOTAL DEDUCT</td>
        <td><?php echo $total24 ?></td>
    </tr>
    <tr>
        <th colspan="2" style="padding: 10px">NET PAY = <?php echo $fnl_sal24 ?></th>
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