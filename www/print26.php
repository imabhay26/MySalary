<?php


		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=26";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb26=$row["pipb"];
			$gp26=$row["gp"];
			//$bp1=$row["bp"];
			$bp26=$pipb26 + $gp26;
			$da26=$bp26*1.54;
			$sp26=$row["sp"];
			$arr26=$row["arr"];
			$othr26=$row["othr"];
			$joining26=$row["joining"];
			$gross26=$bp26 + $da26 + $sp26 + $arr26 + $othr26 ;
			
			
			$gpf26=$row["gpf"];
			$hr26=$row["hr"];
			$elect26=$row["elect"];
			$incm26=$row["incm"];
			$pol26=$row["pol"];
			$othr_d26=$row["othr_d"];
			$total26=$gpf26 + $hr26 + $elect26 + $incm26 + $pol26 + $othr_d26 ;
			$rmrk26=$row["rmrk"];
			$fnl_sal26=$row["gross"] - $total26;
			
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
<h2>DR. ARCHANA SINGH</h2>
<table style="width:400px;text-ali">

    <tr>
        <th colspan="2" style="padding: 10px">EARNINGS</th>
    </tr>
    <tr>
        <td>REF.NO.</td>
        <td>26</td>
    </tr>
    <tr>
        <td>PAY IN PAY BAND</td>
        <td><?php echo $pipb26 ?></td>
    </tr>
    <tr>
        <td>G.P.</td>
        <td><?php echo $gp26 ?></td>
    </tr>
    <tr>
        <td>BASIC PAY</td>
        <td><?php echo $bp26 ?></td>
    </tr>
    <tr>
        <td>DA(154%)</td>
        <td><?php echo $da26 ?></td>
    </tr>
    <tr>
        <td>SPL.PAY</td>
        <td><?php echo $sp26 ?></td>
    </tr>
    <tr>
        <td>ARREARS</td>
        <td><?php echo $arr26 ?></td>
    </tr>
    <tr>
        <td>OTHER ALL(IF ANY)</td>
        <td><?php echo $othr26 ?></td>
    </tr>
    <tr>
        <td>GROSS</td>
        <td><?php echo $gross26 ?></td>
    </tr>

    <tr>
        <th colspan="2" style="padding: 10px">DEDUCTION</th>
    </tr>
    <tr>
        <td>G.P.F.</td>
        <td><?php echo $gpf26 ?></td>
    </tr>
    <tr>
        <td>H.R.</td>
        <td><?php echo $hr26 ?></td>
    </tr>
    <tr>
        <td>ELECT.</td>
        <td><?php echo $elect26 ?></td>
    </tr>
    <tr>
        <td>INCOME TAX</td>
        <td><?php echo $incm26 ?></td>
    </tr>
    <tr>
        <td>P.O.L.</td>
        <td><?php echo $pol26 ?></td>
    </tr>
    <tr>
        <td>OTHER DED. IF ANY</td>
        <td><?php echo $othr_d26 ?></td>
    </tr>
    <tr>
        <td>TOTAL DEDUCT</td>
        <td><?php echo $total26 ?></td>
    </tr>
    <tr>
        <th colspan="2" style="padding: 10px">NET PAY = <?php echo $fnl_sal26 ?></th>
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