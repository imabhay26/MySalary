<?php


		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=25";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb25=$row["pipb"];
			$gp25=$row["gp"];
			//$bp1=$row["bp"];
			$bp25=$pipb25 + $gp25;
			$da25=$bp25*1.54;
			$sp25=$row["sp"];
			$arr25=$row["arr"];
			$othr25=$row["othr"];
			$joining25=$row["joining"];
			$gross25=$bp25 + $da25 + $sp25 + $arr25 + $othr25 ;
			
			
			$gpf25=$row["gpf"];
			$hr25=$row["hr"];
			$elect25=$row["elect"];
			$incm25=$row["incm"];
			$pol25=$row["pol"];
			$othr_d25=$row["othr_d"];
			$total25=$gpf25 + $hr25 + $elect25 + $incm25 + $pol25 + $othr_d25 ;
			$rmrk25=$row["rmrk"];
			$fnl_sal25=$row["gross"] - $total25;
			
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
<h2>MR. MANOJ KUMAR SINGH</h2>
<table style="width:400px;text-ali">

    <tr>
        <th colspan="2" style="padding: 10px">EARNINGS</th>
    </tr>
    <tr>
        <td>REF.NO.</td>
        <td>25</td>
    </tr>
    <tr>
        <td>PAY IN PAY BAND</td>
        <td><?php echo $pipb25 ?></td>
    </tr>
    <tr>
        <td>G.P.</td>
        <td><?php echo $gp25 ?></td>
    </tr>
    <tr>
        <td>BASIC PAY</td>
        <td><?php echo $bp25 ?></td>
    </tr>
    <tr>
        <td>DA(154%)</td>
        <td><?php echo $da25 ?></td>
    </tr>
    <tr>
        <td>SPL.PAY</td>
        <td><?php echo $sp25 ?></td>
    </tr>
    <tr>
        <td>ARREARS</td>
        <td><?php echo $arr25 ?></td>
    </tr>
    <tr>
        <td>OTHER ALL(IF ANY)</td>
        <td><?php echo $othr25 ?></td>
    </tr>
    <tr>
        <td>GROSS</td>
        <td><?php echo $gross25 ?></td>
    </tr>

    <tr>
        <th colspan="2" style="padding: 10px">DEDUCTION</th>
    </tr>
    <tr>
        <td>G.P.F.</td>
        <td><?php echo $gpf25 ?></td>
    </tr>
    <tr>
        <td>H.R.</td>
        <td><?php echo $hr25 ?></td>
    </tr>
    <tr>
        <td>ELECT.</td>
        <td><?php echo $elect25 ?></td>
    </tr>
    <tr>
        <td>INCOME TAX</td>
        <td><?php echo $incm25 ?></td>
    </tr>
    <tr>
        <td>P.O.L.</td>
        <td><?php echo $pol25 ?></td>
    </tr>
    <tr>
        <td>OTHER DED. IF ANY</td>
        <td><?php echo $othr_d25 ?></td>
    </tr>
    <tr>
        <td>TOTAL DEDUCT</td>
        <td><?php echo $total25 ?></td>
    </tr>
    <tr>
        <th colspan="2" style="padding: 10px">NET PAY = <?php echo $fnl_sal25 ?></th>
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