<?php


		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=17";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb17=$row["pipb"];
			$gp17=$row["gp"];
			//$bp1=$row["bp"];
			$bp17=$pipb17 + $gp17;
			$da17=$bp17*1.54;
			$sp17=$row["sp"];
			$arr17=$row["arr"];
			$othr17=$row["othr"];
			$joining17=$row["joining"];
			$gross17=$bp17 + $da17 + $sp17 + $arr17 + $othr17 ;
			
			
			$gpf17=$row["gpf"];
			$hr17=$row["hr"];
			$elect17=$row["elect"];
			$incm17=$row["incm"];
			$pol17=$row["pol"];
			$othr_d17=$row["othr_d"];
			$total17=$gpf17 + $hr17 + $elect17 + $incm17 + $pol17 + $othr_d17 ;
			$rmrk17=$row["rmrk"];
			$fnl_sal17=$row["gross"] - $total17;
			
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
<h2>MR. GURUSHARAN SINGH</h2>
<table style="width:400px;text-ali">

    <tr>
        <th colspan="2" style="padding: 10px">EARNINGS</th>
    </tr>
    <tr>
        <td>REF.NO.</td>
        <td>17</td>
    </tr>
    <tr>
        <td>PAY IN PAY BAND</td>
        <td><?php echo $pipb17 ?></td>
    </tr>
    <tr>
        <td>G.P.</td>
        <td><?php echo $gp17 ?></td>
    </tr>
    <tr>
        <td>BASIC PAY</td>
        <td><?php echo $bp17 ?></td>
    </tr>
    <tr>
        <td>DA(154%)</td>
        <td><?php echo $da17 ?></td>
    </tr>
    <tr>
        <td>SPL.PAY</td>
        <td><?php echo $sp17 ?></td>
    </tr>
    <tr>
        <td>ARREARS</td>
        <td><?php echo $arr17 ?></td>
    </tr>
    <tr>
        <td>OTHER ALL(IF ANY)</td>
        <td><?php echo $othr17 ?></td>
    </tr>
    <tr>
        <td>GROSS</td>
        <td><?php echo $gross17 ?></td>
    </tr>

    <tr>
        <th colspan="2" style="padding: 10px">DEDUCTION</th>
    </tr>
    <tr>
        <td>G.P.F.</td>
        <td><?php echo $gpf17 ?></td>
    </tr>
    <tr>
        <td>H.R.</td>
        <td><?php echo $hr17 ?></td>
    </tr>
    <tr>
        <td>ELECT.</td>
        <td><?php echo $elect17 ?></td>
    </tr>
    <tr>
        <td>INCOME TAX</td>
        <td><?php echo $incm17 ?></td>
    </tr>
    <tr>
        <td>P.O.L.</td>
        <td><?php echo $pol17 ?></td>
    </tr>
    <tr>
        <td>OTHER DED. IF ANY</td>
        <td><?php echo $othr_d17 ?></td>
    </tr>
    <tr>
        <td>TOTAL DEDUCT</td>
        <td><?php echo $total17 ?></td>
    </tr>
    <tr>
        <th colspan="2" style="padding: 10px">NET PAY = <?php echo $fnl_sal17 ?></th>
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