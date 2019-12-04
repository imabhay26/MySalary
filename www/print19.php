<?php


		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=19";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb19=$row["pipb"];
			$gp19=$row["gp"];
			//$bp1=$row["bp"];
			$bp19=$pipb19 + $gp19;
			$da19=$bp19*1.54;
			$sp19=$row["sp"];
			$arr19=$row["arr"];
			$othr19=$row["othr"];
			$joining19=$row["joining"];
			$gross19=$bp19 + $da19 + $sp19 + $arr19 + $othr19 ;
			
			
			$gpf19=$row["gpf"];
			$hr19=$row["hr"];
			$elect19=$row["elect"];
			$incm19=$row["incm"];
			$pol19=$row["pol"];
			$othr_d19=$row["othr_d"];
			$total19=$gpf19 + $hr19 + $elect19 + $incm19 + $pol19 + $othr_d19 ;
			$rmrk19=$row["rmrk"];
			$fnl_sal19=$row["gross"] - $total19;
			
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
<h2>MR. MRITYUNJAY SINGH</h2>
<table style="width:400px;text-ali">

    <tr>
        <th colspan="2" style="padding: 10px">EARNINGS</th>
    </tr>
    <tr>
        <td>REF.NO.</td>
        <td>19</td>
    </tr>
    <tr>
        <td>PAY IN PAY BAND</td>
        <td><?php echo $pipb19 ?></td>
    </tr>
    <tr>
        <td>G.P.</td>
        <td><?php echo $gp19 ?></td>
    </tr>
    <tr>
        <td>BASIC PAY</td>
        <td><?php echo $bp19 ?></td>
    </tr>
    <tr>
        <td>DA(154%)</td>
        <td><?php echo $da19 ?></td>
    </tr>
    <tr>
        <td>SPL.PAY</td>
        <td><?php echo $sp19 ?></td>
    </tr>
    <tr>
        <td>ARREARS</td>
        <td><?php echo $arr19 ?></td>
    </tr>
    <tr>
        <td>OTHER ALL(IF ANY)</td>
        <td><?php echo $othr19 ?></td>
    </tr>
    <tr>
        <td>GROSS</td>
        <td><?php echo $gross19 ?></td>
    </tr>

    <tr>
        <th colspan="2" style="padding: 10px">DEDUCTION</th>
    </tr>
    <tr>
        <td>G.P.F.</td>
        <td><?php echo $gpf19 ?></td>
    </tr>
    <tr>
        <td>H.R.</td>
        <td><?php echo $hr19 ?></td>
    </tr>
    <tr>
        <td>ELECT.</td>
        <td><?php echo $elect19 ?></td>
    </tr>
    <tr>
        <td>INCOME TAX</td>
        <td><?php echo $incm19 ?></td>
    </tr>
    <tr>
        <td>P.O.L.</td>
        <td><?php echo $pol19 ?></td>
    </tr>
    <tr>
        <td>OTHER DED. IF ANY</td>
        <td><?php echo $othr_d19 ?></td>
    </tr>
    <tr>
        <td>TOTAL DEDUCT</td>
        <td><?php echo $total19 ?></td>
    </tr>
    <tr>
        <th colspan="2" style="padding: 10px">NET PAY = <?php echo $fnl_sal19 ?></th>
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