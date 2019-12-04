<?php


		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=20";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb20=$row["pipb"];
			$gp20=$row["gp"];
			//$bp1=$row["bp"];
			$bp20=$pipb20 + $gp20;
			$da20=$bp20*1.54;
			$sp20=$row["sp"];
			$arr20=$row["arr"];
			$othr20=$row["othr"];
			$joining20=$row["joining"];
			$gross20=$bp20 + $da20 + $sp20 + $arr20 + $othr20 ;
			
			
			$gpf20=$row["gpf"];
			$hr20=$row["hr"];
			$elect20=$row["elect"];
			$incm20=$row["incm"];
			$pol20=$row["pol"];
			$othr_d20=$row["othr_d"];
			$total20=$gpf20 + $hr20 + $elect20 + $incm20 + $pol20 + $othr_d20 ;
			$rmrk20=$row["rmrk"];
			$fnl_sal20=$row["gross"] - $total20;
			
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
<h2>MR. ABHIJEET SINGH</h2>
<table style="width:400px;text-ali">

    <tr>
        <th colspan="2" style="padding: 10px">EARNINGS</th>
    </tr>
    <tr>
        <td>REF.NO.</td>
        <td>20</td>
    </tr>
    <tr>
        <td>PAY IN PAY BAND</td>
        <td><?php echo $pipb20 ?></td>
    </tr>
    <tr>
        <td>G.P.</td>
        <td><?php echo $gp20 ?></td>
    </tr>
    <tr>
        <td>BASIC PAY</td>
        <td><?php echo $bp20 ?></td>
    </tr>
    <tr>
        <td>DA(154%)</td>
        <td><?php echo $da20 ?></td>
    </tr>
    <tr>
        <td>SPL.PAY</td>
        <td><?php echo $sp20 ?></td>
    </tr>
    <tr>
        <td>ARREARS</td>
        <td><?php echo $arr20 ?></td>
    </tr>
    <tr>
        <td>OTHER ALL(IF ANY)</td>
        <td><?php echo $othr20 ?></td>
    </tr>
    <tr>
        <td>GROSS</td>
        <td><?php echo $gross20 ?></td>
    </tr>

    <tr>
        <th colspan="2" style="padding: 10px">DEDUCTION</th>
    </tr>
    <tr>
        <td>G.P.F.</td>
        <td><?php echo $gpf20 ?></td>
    </tr>
    <tr>
        <td>H.R.</td>
        <td><?php echo $hr20 ?></td>
    </tr>
    <tr>
        <td>ELECT.</td>
        <td><?php echo $elect20 ?></td>
    </tr>
    <tr>
        <td>INCOME TAX</td>
        <td><?php echo $incm20 ?></td>
    </tr>
    <tr>
        <td>P.O.L.</td>
        <td><?php echo $pol20 ?></td>
    </tr>
    <tr>
        <td>OTHER DED. IF ANY</td>
        <td><?php echo $othr_d20 ?></td>
    </tr>
    <tr>
        <td>TOTAL DEDUCT</td>
        <td><?php echo $total20 ?></td>
    </tr>
    <tr>
        <th colspan="2" style="padding: 10px">NET PAY = <?php echo $fnl_sal20 ?></th>
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