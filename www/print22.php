<?php


		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=22";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb22=$row["pipb"];
			$gp22=$row["gp"];
			//$bp1=$row["bp"];
			$bp22=$pipb22 + $gp22;
			$da22=$bp22*1.54;
			$sp22=$row["sp"];
			$arr22=$row["arr"];
			$othr22=$row["othr"];
			$joining22=$row["joining"];
			$gross22=$bp22 + $da22 + $sp22 + $arr22 + $othr22 ;
			
			$gpf22=$row["gpf"];
			$hr22=$row["hr"];
			$elect22=$row["elect"];
			$incm22=$row["incm"];
			$pol22=$row["pol"];
			$othr_d22=$row["othr_d"];
			$total22=$gpf22 + $hr22 + $elect22 + $incm22 + $pol22 + $othr_d22 ;
			$rmrk22=$row["rmrk"];
			$fnl_sal22=$row["gross"] - $total22;
			
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
<h2>MR. ASHUTOSH TIWARI</h2>
<table style="width:400px;text-ali">

    <tr>
        <th colspan="2" style="padding: 10px">EARNINGS</th>
    </tr>
    <tr>
        <td>REF.NO.</td>
        <td>22</td>
    </tr>
    <tr>
        <td>PAY IN PAY BAND</td>
        <td><?php echo $pipb22 ?></td>
    </tr>
    <tr>
        <td>G.P.</td>
        <td><?php echo $gp22 ?></td>
    </tr>
    <tr>
        <td>BASIC PAY</td>
        <td><?php echo $bp22 ?></td>
    </tr>
    <tr>
        <td>DA(154%)</td>
        <td><?php echo $da22 ?></td>
    </tr>
    <tr>
        <td>SPL.PAY</td>
        <td><?php echo $sp22 ?></td>
    </tr>
    <tr>
        <td>ARREARS</td>
        <td><?php echo $arr22 ?></td>
    </tr>
    <tr>
        <td>OTHER ALL(IF ANY)</td>
        <td><?php echo $othr22 ?></td>
    </tr>
    <tr>
        <td>GROSS</td>
        <td><?php echo $gross22 ?></td>
    </tr>

    <tr>
        <th colspan="2" style="padding: 10px">DEDUCTION</th>
    </tr>
    <tr>
        <td>G.P.F.</td>
        <td><?php echo $gpf22 ?></td>
    </tr>
    <tr>
        <td>H.R.</td>
        <td><?php echo $hr22 ?></td>
    </tr>
    <tr>
        <td>ELECT.</td>
        <td><?php echo $elect22 ?></td>
    </tr>
    <tr>
        <td>INCOME TAX</td>
        <td><?php echo $incm22 ?></td>
    </tr>
    <tr>
        <td>P.O.L.</td>
        <td><?php echo $pol22 ?></td>
    </tr>
    <tr>
        <td>OTHER DED. IF ANY</td>
        <td><?php echo $othr_d22 ?></td>
    </tr>
    <tr>
        <td>TOTAL DEDUCT</td>
        <td><?php echo $total22 ?></td>
    </tr>
    <tr>
        <th colspan="2" style="padding: 10px">NET PAY = <?php echo $fnl_sal22 ?></th>
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