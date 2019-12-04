<?php


		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=2";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb2=$row["pipb"];
			$gp2=$row["gp"];
			//$bp1=$row["bp"];
			$bp2=$pipb2 + $gp2;
			$da2=$bp2*1.54;
			$sp2=$row["sp"];
			$arr2=$row["arr"];
			$othr2=$row["othr"];
			$joining2=$row["joining"];
			$gross2=$bp2 + $da2 + $sp2 + $arr2 + $othr2 ;
			
			
			$gpf2=$row["gpf"];
			$hr2=$row["hr"];
			$elect2=$row["elect"];
			$incm2=$row["incm"];
			$pol2=$row["pol"];
			$othr_d2=$row["othr_d"];
			$total2=$gpf2 + $hr2 + $elect2 + $incm2 + $pol2 + $othr_d2 ;
			$rmrk2=$row["rmrk"];
			$fnl_sal2=$row["gross"] - $total2;
			
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
<h2>DR. VIBHASH YADAV</h2>
<table style="width:400px;text-ali">

    <tr>
        <th colspan="2" style="padding: 10px">EARNINGS</th>
    </tr>
    <tr>
        <td>REF.NO.</td>
        <td>02</td>
    </tr>
    <tr>
        <td>PAY IN PAY BAND</td>
        <td><?php echo $pipb2 ?></td>
    </tr>
    <tr>
        <td>G.P.</td>
        <td><?php echo $gp2 ?></td>
    </tr>
    <tr>
        <td>BASIC PAY</td>
        <td><?php echo $bp2 ?></td>
    </tr>
    <tr>
        <td>DA(154%)</td>
        <td><?php echo $da2 ?></td>
    </tr>
    <tr>
        <td>SPL.PAY</td>
        <td><?php echo $sp2 ?></td>
    </tr>
    <tr>
        <td>ARREARS</td>
        <td><?php echo $arr2 ?></td>
    </tr>
    <tr>
        <td>OTHER ALL(IF ANY)</td>
        <td><?php echo $othr2 ?></td>
    </tr>
    <tr>
        <td>GROSS</td>
        <td><?php echo $gross2 ?></td>
    </tr>

    <tr>
        <th colspan="2" style="padding: 10px">DEDUCTION</th>
    </tr>
    <tr>
        <td>G.P.F.</td>
        <td><?php echo $gpf2 ?></td>
    </tr>
    <tr>
        <td>H.R.</td>
        <td><?php echo $hr2 ?></td>
    </tr>
    <tr>
        <td>ELECT.</td>
        <td><?php echo $elect2 ?></td>
    </tr>
    <tr>
        <td>INCOME TAX</td>
        <td><?php echo $incm2 ?></td>
    </tr>
    <tr>
        <td>P.O.L.</td>
        <td><?php echo $pol2 ?></td>
    </tr>
    <tr>
        <td>OTHER DED. IF ANY</td>
        <td><?php echo $othr_d2 ?></td>
    </tr>
    <tr>
        <td>TOTAL DEDUCT</td>
        <td><?php echo $total2 ?></td>
    </tr>
    <tr>
        <th colspan="2" style="padding: 10px">NET PAY = <?php echo $fnl_sal2 ?></th>
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