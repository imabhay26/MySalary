<?php


		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=4";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb4=$row["pipb"];
			$gp4=$row["gp"];
			//$bp1=$row["bp"];
			$bp4=$pipb4 + $gp4;
			$da4=$bp4*1.54;
			$sp4=$row["sp"];
			$arr4=$row["arr"];
			$othr4=$row["othr"];
			$joining4=$row["joining"];
			$gross4=$bp4 + $da4 + $sp4 + $arr4 + $othr4 ;
			
			
			$gpf4=$row["gpf"];
			$hr4=$row["hr"];
			$elect4=$row["elect"];
			$incm4=$row["incm"];
			$pol4=$row["pol"];
			$othr_d4=$row["othr_d"];
			$total4=$gpf4 + $hr4 + $elect4 + $incm4 + $pol4 + $othr_d4 ;
			$rmrk4=$row["rmrk"];
			$fnl_sal4=$row["gross"] - $total4;
			
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
<h2>MR. SAURABH TRIPATHI</h2>
<table style="width:400px;">

    <tr>
        <th colspan="2" style="padding: 10px">EARNINGS</th>
    </tr>
    <tr>
        <td>REF.NO.</td>
        <td>04</td>
    </tr>
    <tr>
        <td>PAY IN PAY BAND</td>
        <td><?php echo $pipb4 ?></td>
    </tr>
    <tr>
        <td>G.P.</td>
        <td><?php echo $gp4 ?></td>
    </tr>
    <tr>
        <td>BASIC PAY</td>
        <td><?php echo $bp4 ?></td>
    </tr>
    <tr>
        <td>DA(154%)</td>
        <td><?php echo $da4 ?></td>
    </tr>
    <tr>
        <td>SPL.PAY</td>
        <td><?php echo $sp4 ?></td>
    </tr>
    <tr>
        <td>ARREARS</td>
        <td><?php echo $arr4 ?></td>
    </tr>
    <tr>
        <td>OTHER ALL(IF ANY)</td>
        <td><?php echo $othr4 ?></td>
    </tr>
    <tr>
        <td>GROSS</td>
        <td><?php echo $gross4 ?></td>
    </tr>

    <tr>
        <th colspan="2" style="padding: 10px">DEDUCTION</th>
    </tr>
    <tr>
        <td>G.P.F.</td>
        <td><?php echo $gpf4 ?></td>
    </tr>
    <tr>
        <td>H.R.</td>
        <td><?php echo $hr4 ?></td>
    </tr>
    <tr>
        <td>ELECT.</td>
        <td><?php echo $elect4 ?></td>
    </tr>
    <tr>
        <td>INCOME TAX</td>
        <td><?php echo $incm4 ?></td>
    </tr>
    <tr>
        <td>P.O.L.</td>
        <td><?php echo $pol4 ?></td>
    </tr>
    <tr>
        <td>OTHER DED. IF ANY</td>
        <td><?php echo $othr_d4 ?></td>
    </tr>
    <tr>
        <td>TOTAL DEDUCT</td>
        <td><?php echo $total4 ?></td>
    </tr>
    <tr>
        <th colspan="2" style="padding: 10px">NET PAY = <?php echo $fnl_sal4 ?></th>
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