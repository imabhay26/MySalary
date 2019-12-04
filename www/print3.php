<?php


		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=3";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb3=$row["pipb"];
			$gp3=$row["gp"];
			//$bp1=$row["bp"];
			$bp3=$pipb3 + $gp3;
			$da3=$bp3*1.54;
			$sp3=$row["sp"];
			$arr3=$row["arr"];
			$othr3=$row["othr"];
			$joining3=$row["joining"];
			$gross3=$bp3 + $da3 + $sp3 + $arr3 + $othr3 ;
			
			
			$gpf3=$row["gpf"];
			$hr3=$row["hr"];
			$elect3=$row["elect"];
			$incm3=$row["incm"];
			$pol3=$row["pol"];
			$othr_d3=$row["othr_d"];
			$total3=$gpf3 + $hr3 + $elect3 + $incm3 + $pol3 + $othr_d3 ;
			$rmrk3=$row["rmrk"];
			$fnl_sal3=$row["gross"] - $total3;
			
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
<h2>DR. SIDDHARTHA ARJARIA</h2>
<table style="width:400px;">

    <tr>
        <th colspan="2" style="padding: 10px">EARNINGS</th>
    </tr>
    <tr>
        <td>REF.NO.</td>
        <td>03</td>
    </tr>
    <tr>
        <td>PAY IN PAY BAND</td>
        <td><?php echo $pipb3 ?></td>
    </tr>
    <tr>
        <td>G.P.</td>
        <td><?php echo $gp3 ?></td>
    </tr>
    <tr>
        <td>BASIC PAY</td>
        <td><?php echo $bp3 ?></td>
    </tr>
    <tr>
        <td>DA(154%)</td>
        <td><?php echo $da3 ?></td>
    </tr>
    <tr>
        <td>SPL.PAY</td>
        <td><?php echo $sp3 ?></td>
    </tr>
    <tr>
        <td>ARREARS</td>
        <td><?php echo $arr3 ?></td>
    </tr>
    <tr>
        <td>OTHER ALL(IF ANY)</td>
        <td><?php echo $othr3 ?></td>
    </tr>
    <tr>
        <td>GROSS</td>
        <td><?php echo $gross3 ?></td>
    </tr>

    <tr>
        <th colspan="2" style="padding: 10px">DEDUCTION</th>
    </tr>
    <tr>
        <td>G.P.F.</td>
        <td><?php echo $gpf3 ?></td>
    </tr>
    <tr>
        <td>H.R.</td>
        <td><?php echo $hr3 ?></td>
    </tr>
    <tr>
        <td>ELECT.</td>
        <td><?php echo $elect3 ?></td>
    </tr>
    <tr>
        <td>INCOME TAX</td>
        <td><?php echo $incm3 ?></td>
    </tr>
    <tr>
        <td>P.O.L.</td>
        <td><?php echo $pol3 ?></td>
    </tr>
    <tr>
        <td>OTHER DED. IF ANY</td>
        <td><?php echo $othr_d3 ?></td>
    </tr>
    <tr>
        <td>TOTAL DEDUCT</td>
        <td><?php echo $total3 ?></td>
    </tr>
    <tr>
        <th colspan="2" style="padding: 10px">NET PAY = <?php echo $fnl_sal3 ?></th>
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