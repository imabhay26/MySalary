<?php


		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=12";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb12=$row["pipb"];
			$gp12=$row["gp"];
			//$bp1=$row["bp"];
			$bp12=$pipb12 + $gp12;
			$da12=$bp12*1.54;
			$sp12=$row["sp"];
			$arr12=$row["arr"];
			$othr12=$row["othr"];
			$joining12=$row["joining"];
			$gross12=$bp12 + $da12 + $sp12 + $arr12 + $othr12 ;
			
			
			$gpf12=$row["gpf"];
			$hr12=$row["hr"];
			$elect12=$row["elect"];
			$incm12=$row["incm"];
			$pol12=$row["pol"];
			$othr_d12=$row["othr_d"];
			$total12=$gpf12+ $hr12 + $elect12 + $incm12 + $pol12 + $othr_d12 ;
			$rmrk12=$row["rmrk"];
			$fnl_sal12=$row["gross"] - $total12;
			
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
<h2>MR. PUSHPENDRA SINGH</h2>
<table style="width:400px;text-ali">

    <tr>
        <th colspan="2" style="padding: 10px">EARNINGS</th>
    </tr>
    <tr>
        <td>REF.NO.</td>
        <td>12</td>
    </tr>
    <tr>
        <td>PAY IN PAY BAND</td>
        <td><?php echo $pipb12 ?></td>
    </tr>
    <tr>
        <td>G.P.</td>
        <td><?php echo $gp12 ?></td>
    </tr>
    <tr>
        <td>BASIC PAY</td>
        <td><?php echo $bp12 ?></td>
    </tr>
    <tr>
        <td>DA(154%)</td>
        <td><?php echo $da12 ?></td>
    </tr>
    <tr>
        <td>SPL.PAY</td>
        <td><?php echo $sp12 ?></td>
    </tr>
    <tr>
        <td>ARREARS</td>
        <td><?php echo $arr12 ?></td>
    </tr>
    <tr>
        <td>OTHER ALL(IF ANY)</td>
        <td><?php echo $othr12 ?></td>
    </tr>
    <tr>
        <td>GROSS</td>
        <td><?php echo $gross12 ?></td>
    </tr>

    <tr>
        <th colspan="2" style="padding: 10px">DEDUCTION</th>
    </tr>
    <tr>
        <td>G.P.F.</td>
        <td><?php echo $gpf12 ?></td>
    </tr>
    <tr>
        <td>H.R.</td>
        <td><?php echo $hr12 ?></td>
    </tr>
    <tr>
        <td>ELECT.</td>
        <td><?php echo $elect12 ?></td>
    </tr>
    <tr>
        <td>INCOME TAX</td>
        <td><?php echo $incm12 ?></td>
    </tr>
    <tr>
        <td>P.O.L.</td>
        <td><?php echo $pol12 ?></td>
    </tr>
    <tr>
        <td>OTHER DED. IF ANY</td>
        <td><?php echo $othr_d12 ?></td>
    </tr>
    <tr>
        <td>TOTAL DEDUCT</td>
        <td><?php echo $total12 ?></td>
    </tr>
    <tr>
        <th colspan="2" style="padding: 10px">NET PAY = <?php echo $fnl_sal12 ?></th>
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