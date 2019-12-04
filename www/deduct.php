<?php
		
	class MyDB extends SQLite3{
		function __construct(){
			$this->open('realdb.db');
		}
	}
	$db = new MyDB();
		$refno = (isset($_POST['refno']) ? $_POST['refno'] : '');
		$gpf = (isset($_POST['gpf']) ? $_POST['gpf'] : '');
		$hr = (isset($_POST['hr']) ? $_POST['hr'] : '');
		$elect = (isset($_POST['elect']) ? $_POST['elect'] : '');
		$incm = (isset($_POST['incm']) ? $_POST['incm'] : '');
		$pol = (isset($_POST['pol']) ? $_POST['pol'] : '');
		$othr_d = (isset($_POST['othr_d']) ? $_POST['othr_d'] : '');
		$rmrk = (isset($_POST['rmrk']) ? $_POST['rmrk'] : '');
		
		$sql= "UPDATE datafield SET refno='$refno' , gpf='$gpf' , hr='$hr' ,elect='$elect' ,incm='$incm' , pol='$pol' ,
									othr_d='$othr_d' , rmrk='$rmrk' WHERE refno='$refno' ";
		$db->exec($sql);
		
		
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=28";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$gpf1=$row["gpf"];
			$hr1=$row["hr"];
			$elect1=$row["elect"];
			$incm1=$row["incm"];
			$pol1=$row["pol"];
			$othr_d1=$row["othr_d"];
			$total1=$gpf1 + $hr1 + $elect1 + $incm1 + $pol1 + $othr_d1 ;
			$rmrk1=$row["rmrk"];
			$fnl_sal1=$row["gross"] - $total1;
			$sql= "UPDATE datafield SET totalded = '$total1' , fnl_sal='$fnl_sal1'  WHERE refno=28 ";
			$db->exec($sql);
		}
		
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=27";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$gpf27=$row["gpf"];
			$hr27=$row["hr"];
			$elect27=$row["elect"];
			$incm27=$row["incm"];
			$pol27=$row["pol"];
			$othr_d27=$row["othr_d"];
			$total27=$gpf27 + $hr27 + $elect27 + $incm27 + $pol27 + $othr_d27 ;
			$rmrk27=$row["rmrk"];
			$fnl_sal27=$row["gross"] - $total27;
			$sql= "UPDATE datafield SET totalded = '$total27' , fnl_sal='$fnl_sal27'  WHERE refno=27 ";
			$db->exec($sql);
		}
		
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=2";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$gpf2=$row["gpf"];
			$hr2=$row["hr"];
			$elect2=$row["elect"];
			$incm2=$row["incm"];
			$pol2=$row["pol"];
			$othr_d2=$row["othr_d"];
			$total2=$gpf2 + $hr2 + $elect2 + $incm2 + $pol2 + $othr_d2 ;
			$rmrk2=$row["rmrk"];
			$fnl_sal2=$row["gross"] - $total2;
			$sql= "UPDATE datafield SET totalded = '$total2' , fnl_sal='$fnl_sal2'  WHERE refno=2 ";
			$db->exec($sql);
		}
		
		
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=3";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$gpf3=$row["gpf"];
			$hr3=$row["hr"];
			$elect3=$row["elect"];
			$incm3=$row["incm"];
			$pol3=$row["pol"];
			$othr_d3=$row["othr_d"];
			$total3=$gpf3 + $hr3 + $elect3 + $incm3 + $pol3 + $othr_d3 ;
			$rmrk3=$row["rmrk"];
			$fnl_sal3=$row["gross"] - $total3;
			$sql= "UPDATE datafield SET totalded = '$total3' , fnl_sal='$fnl_sal3'  WHERE refno=3 ";
			$db->exec($sql);
		}
		
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=4";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$gpf4=$row["gpf"];
			$hr4=$row["hr"];
			$elect4=$row["elect"];
			$incm4=$row["incm"];
			$pol4=$row["pol"];
			$othr_d4=$row["othr_d"];
			$total4=$gpf4+ $hr4 + $elect4 + $incm4 + $pol4 + $othr_d4 ;
			$rmrk4=$row["rmrk"];
			$fnl_sal4=$row["gross"] - $total4;
			$sql= "UPDATE datafield SET totalded = '$total4' , fnl_sal='$fnl_sal4'  WHERE refno=4 ";
			$db->exec($sql);
		}
		
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=5";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$gpf5=$row["gpf"];
			$hr5=$row["hr"];
			$elect5=$row["elect"];
			$incm5=$row["incm"];
			$pol5=$row["pol"];
			$othr_d5=$row["othr_d"];
			$total5=$gpf5+ $hr5 + $elect5 + $incm5 + $pol5 + $othr_d5 ;
			$rmrk5=$row["rmrk"];
			$fnl_sal5=$row["gross"] - $total5;
			$sql= "UPDATE datafield SET totalded = '$total5' , fnl_sal='$fnl_sal5'  WHERE refno=5 ";
			$db->exec($sql);
		}
		
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=7";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$gpf7=$row["gpf"];
			$hr7=$row["hr"];
			$elect7=$row["elect"];
			$incm7=$row["incm"];
			$pol7=$row["pol"];
			$othr_d7=$row["othr_d"];
			$total7=$gpf7+ $hr7 + $elect7 + $incm7 + $pol7 + $othr_d7 ;
			$rmrk7=$row["rmrk"];
			$fnl_sal7=$row["gross"] - $total7;
			$sql= "UPDATE datafield SET totalded = '$total7' , fnl_sal='$fnl_sal7'  WHERE refno=7 ";
			$db->exec($sql);
		}
		
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=8";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$gpf8=$row["gpf"];
			$hr8=$row["hr"];
			$elect8=$row["elect"];
			$incm8=$row["incm"];
			$pol8=$row["pol"];
			$othr_d8=$row["othr_d"];
			$total8=$gpf8+ $hr8 + $elect8 + $incm8 + $pol8 + $othr_d8 ;
			$rmrk8=$row["rmrk"];
			$fnl_sal8=$row["gross"] - $total8;
			$sql= "UPDATE datafield SET totalded = '$total8' , fnl_sal='$fnl_sal8'  WHERE refno=8 ";
			$db->exec($sql);
		}
		
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=10";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$gpf10=$row["gpf"];
			$hr10=$row["hr"];
			$elect10=$row["elect"];
			$incm10=$row["incm"];
			$pol10=$row["pol"];
			$othr_d10=$row["othr_d"];
			$total10=$gpf10+ $hr10 + $elect10 + $incm10 + $pol10 + $othr_d10 ;
			$rmrk10=$row["rmrk"];
			$fnl_sal10=$row["gross"] - $total10;
			$sql= "UPDATE datafield SET totalded = '$total10' , fnl_sal='$fnl_sal10'  WHERE refno=10 ";
			$db->exec($sql);
		}
		
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=11";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$gpf11=$row["gpf"];
			$hr11=$row["hr"];
			$elect11=$row["elect"];
			$incm11=$row["incm"];
			$pol11=$row["pol"];
			$othr_d11=$row["othr_d"];
			$total11=$gpf11+ $hr11 + $elect11 + $incm11 + $pol11 + $othr_d11 ;
			$rmrk11=$row["rmrk"];
			$fnl_sal11=$row["gross"] - $total11;
			$sql= "UPDATE datafield SET totalded = '$total11' , fnl_sal='$fnl_sal11'  WHERE refno=11 ";
			$db->exec($sql);
		}
		
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=12";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$gpf12=$row["gpf"];
			$hr12=$row["hr"];
			$elect12=$row["elect"];
			$incm12=$row["incm"];
			$pol12=$row["pol"];
			$othr_d12=$row["othr_d"];
			$total12=$gpf12+ $hr12 + $elect12 + $incm12 + $pol12 + $othr_d12 ;
			$rmrk12=$row["rmrk"];
			$fnl_sal12=$row["gross"] - $total12;
			$sql= "UPDATE datafield SET totalded = '$total12' , fnl_sal='$fnl_sal12'  WHERE refno=12 ";
			$db->exec($sql);
		}
		
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=13";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$gpf13=$row["gpf"];
			$hr13=$row["hr"];
			$elect13=$row["elect"];
			$incm13=$row["incm"];
			$pol13=$row["pol"];
			$othr_d13=$row["othr_d"];
			$total13=$gpf13 + $hr13 + $elect13 + $incm13 + $pol13 + $othr_d13 ;
			$rmrk13=$row["rmrk"];
			$fnl_sal13=$row["gross"] - $total13;
			$sql= "UPDATE datafield SET totalded = '$total13' , fnl_sal='$fnl_sal13'  WHERE refno=13 ";
			$db->exec($sql);
		}
		
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=14";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$gpf14=$row["gpf"];
			$hr14=$row["hr"];
			$elect14=$row["elect"];
			$incm14=$row["incm"];
			$pol14=$row["pol"];
			$othr_d14=$row["othr_d"];
			$total14=$gpf14 + $hr14 + $elect14 + $incm14 + $pol14 + $othr_d14 ;
			$rmrk14=$row["rmrk"];
			$fnl_sal14=$row["gross"] - $total14;
			$sql= "UPDATE datafield SET totalded = '$total14' , fnl_sal='$fnl_sal14'  WHERE refno=14 ";
			$db->exec($sql);
		}
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=15";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$gpf15=$row["gpf"];
			$hr15=$row["hr"];
			$elect15=$row["elect"];
			$incm15=$row["incm"];
			$pol15=$row["pol"];
			$othr_d15=$row["othr_d"];
			$total15=$gpf15 + $hr15 + $elect15 + $incm15 + $pol15 + $othr_d15 ;
			$rmrk15=$row["rmrk"];
			$fnl_sal15=$row["gross"] - $total15;
			$sql= "UPDATE datafield SET totalded = '$total15' , fnl_sal='$fnl_sal15'  WHERE refno=15 ";
			$db->exec($sql);
		}
		
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=16";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$gpf16=$row["gpf"];
			$hr16=$row["hr"];
			$elect16=$row["elect"];
			$incm16=$row["incm"];
			$pol16=$row["pol"];
			$othr_d16=$row["othr_d"];
			$total16=$gpf16 + $hr16 + $elect16 + $incm16 + $pol16 + $othr_d16 ;
			$rmrk16=$row["rmrk"];
			$fnl_sal16=$row["gross"] - $total16;
			$sql= "UPDATE datafield SET totalded = '$total16' , fnl_sal='$fnl_sal16'  WHERE refno=16 ";
			$db->exec($sql);
		}
		
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=17";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$gpf17=$row["gpf"];
			$hr17=$row["hr"];
			$elect17=$row["elect"];
			$incm17=$row["incm"];
			$pol17=$row["pol"];
			$othr_d17=$row["othr_d"];
			$total17=$gpf17 + $hr17 + $elect17 + $incm17 + $pol17 + $othr_d17 ;
			$rmrk17=$row["rmrk"];
			$fnl_sal17=$row["gross"] - $total17;
			$sql= "UPDATE datafield SET totalded = '$total17' , fnl_sal='$fnl_sal17'  WHERE refno=17 ";
			$db->exec($sql);
		}
		
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=18";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$gpf18=$row["gpf"];
			$hr18=$row["hr"];
			$elect18=$row["elect"];
			$incm18=$row["incm"];
			$pol18=$row["pol"];
			$othr_d18=$row["othr_d"];
			$total18=$gpf18 + $hr18 + $elect18 + $incm18 + $pol18 + $othr_d18 ;
			$rmrk18=$row["rmrk"];
			$fnl_sal18=$row["gross"] - $total18;
			$sql= "UPDATE datafield SET totalded = '$total18' , fnl_sal='$fnl_sal18'  WHERE refno=18 ";
			$db->exec($sql);
		}
		
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=19";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$gpf19=$row["gpf"];
			$hr19=$row["hr"];
			$elect19=$row["elect"];
			$incm19=$row["incm"];
			$pol19=$row["pol"];
			$othr_d19=$row["othr_d"];
			$total19=$gpf19 + $hr19 + $elect19 + $incm19 + $pol19 + $othr_d19 ;
			$rmrk19=$row["rmrk"];
			$fnl_sal19=$row["gross"] - $total19;
			$sql= "UPDATE datafield SET totalded = '$total19' , fnl_sal='$fnl_sal19'  WHERE refno=19 ";
			$db->exec($sql);
		}
		
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=20";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$gpf20=$row["gpf"];
			$hr20=$row["hr"];
			$elect20=$row["elect"];
			$incm20=$row["incm"];
			$pol20=$row["pol"];
			$othr_d20=$row["othr_d"];
			$total20=$gpf20 + $hr20 + $elect20 + $incm20 + $pol20 + $othr_d20 ;
			$rmrk20=$row["rmrk"];
			$fnl_sal20=$row["gross"] - $total20;
			$sql= "UPDATE datafield SET totalded = '$total20' , fnl_sal='$fnl_sal20'  WHERE refno=20 ";
			$db->exec($sql);
		}
		
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=21";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$gpf21=$row["gpf"];
			$hr21=$row["hr"];
			$elect21=$row["elect"];
			$incm21=$row["incm"];
			$pol21=$row["pol"];
			$othr_d21=$row["othr_d"];
			$total21=$gpf21 + $hr21 + $elect21 + $incm21 + $pol21 + $othr_d21 ;
			$rmrk21=$row["rmrk"];
			$fnl_sal21=$row["gross"] - $total21;
			$sql= "UPDATE datafield SET totalded = '$total21' , fnl_sal='$fnl_sal21'  WHERE refno=21 ";
			$db->exec($sql);
		}
		
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=22";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$gpf22=$row["gpf"];
			$hr22=$row["hr"];
			$elect22=$row["elect"];
			$incm22=$row["incm"];
			$pol22=$row["pol"];
			$othr_d22=$row["othr_d"];
			$total22=$gpf22 + $hr22 + $elect22 + $incm22 + $pol22 + $othr_d22 ;
			$rmrk22=$row["rmrk"];
			$fnl_sal22=$row["gross"] - $total22;
			$sql= "UPDATE datafield SET totalded = '$total22' , fnl_sal='$fnl_sal22'  WHERE refno=22 ";
			$db->exec($sql);
		}
		
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=23";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$gpf23=$row["gpf"];
			$hr23=$row["hr"];
			$elect23=$row["elect"];
			$incm23=$row["incm"];
			$pol23=$row["pol"];
			$othr_d23=$row["othr_d"];
			$total23=$gpf23 + $hr23 + $elect23 + $incm23 + $pol23 + $othr_d23 ;
			$rmrk23=$row["rmrk"];
			$fnl_sal23=$row["gross"] - $total23;
			$sql= "UPDATE datafield SET totalded = '$total23' , fnl_sal='$fnl_sal23'  WHERE refno=23 ";
			$db->exec($sql);
		}
		
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=24";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$gpf24=$row["gpf"];
			$hr24=$row["hr"];
			$elect24=$row["elect"];
			$incm24=$row["incm"];
			$pol24=$row["pol"];
			$othr_d24=$row["othr_d"];
			$total24=$gpf24 + $hr24 + $elect24 + $incm24 + $pol24 + $othr_d24 ;
			$rmrk24=$row["rmrk"];
			$fnl_sal24=$row["gross"] - $total24;
			$sql= "UPDATE datafield SET totalded = '$total24' , fnl_sal='$fnl_sal24'  WHERE refno=24 ";
			$db->exec($sql);
		}
		
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=25";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$gpf25=$row["gpf"];
			$hr25=$row["hr"];
			$elect25=$row["elect"];
			$incm25=$row["incm"];
			$pol25=$row["pol"];
			$othr_d25=$row["othr_d"];
			$total25=$gpf25 + $hr25 + $elect25 + $incm25 + $pol25 + $othr_d25 ;
			$rmrk25=$row["rmrk"];
			$fnl_sal25=$row["gross"] - $total25;
			$sql= "UPDATE datafield SET totalded = '$total25' , fnl_sal='$fnl_sal25'  WHERE refno=25 ";
			$db->exec($sql);
		}
		
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=26";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$gpf26=$row["gpf"];
			$hr26=$row["hr"];
			$elect26=$row["elect"];
			$incm26=$row["incm"];
			$pol26=$row["pol"];
			$othr_d26=$row["othr_d"];
			$total26=$gpf26 + $hr26 + $elect26 + $incm26 + $pol26 + $othr_d26 ;
			$rmrk26=$row["rmrk"];
			$fnl_sal26=$row["gross"] - $total26;
			$sql= "UPDATE datafield SET totalded = '$total26' , fnl_sal='$fnl_sal26'  WHERE refno=26 ";
			$db->exec($sql);
		}
			
		//"pipb: " . $row["pipb"]."gp:" .$row["gp"]. "bp:" .$row["bp"]. "sp:" .$row["sp"] ."arr:" .$row["arr"] . "othr:" .$row["othr"] . "<br>";
		
		
			
	
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/fontawesome-all.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/mdb.css">
    <link rel="shortcut icon" href="img/logo.png">

    <style>
        table,tr,td{
            border: 1px solid lightblue;
        }
        /*@page {*/
        /*size: A4 landscape;*/
        /*}*/
        @media print {
            @page {
                size: 450mm 210mm; /* landscape */
                /* you can also specify margins here: */
                margin: 25mm;
                /* for compatibility with both A4 and Letter */
            }
        }
        th{
            padding: 0 12px 0 12px;
            font-weight: bold;
            font-size: 22px;
        }
        table,tbody,td{
            text-align: center;
            font-size: 16px;
        }
.page    { display: none; padding: 0 0.5em; }


#loading {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 100;
  width: 100vw;
  height: 100vh;
  
  background-image: url("img/load.gif");
  background-repeat: no-repeat;
  background-position: center;
}

    </style>
</head>
<body style="width: 2070px;margin-top: 20px;font-family: Verdana;margin: 15px">
<div class="page">
<div style="margin: 0 0 0 -700px;text-align: center">

    <h3 class="font-weight-bold">RAJKIYA ENGINEERING COLLEGE BANDA</h3>
    <h4 class="font-weight-bold">PAY ROLL - DEDUCTION</h4>
    <h6 class="font-weight-bold">(FOR PAY ROLL - EARNINGS <a href="earning.php">CLICK HERE</a>)</h6>
	

    <p class="font-weight-bold ml-3"><span>DATE : </span><span id="demo"></span>/<span id="demo1">
    </span>/<span id="demo2"></span></p>
    <img src="img/logo.png" height="80" width="80" style="margin-top: -150px">
    <button class="btn btn-danger" style="margin: -150px 0 0 1000px" onclick="main()">Print</button></p>

</div>




<div style="margin-top:-40px">
    <table class="table-bordered table-hover">
        <thead class="bg-primary text-white text-center ">
        <th class="font-weight-bold">S.No.</th>
        <th class="font-weight-bold">REF.NO.</th>
        <th class="font-weight-bold " style="padding: 0 70px 0 70px">EMPLOYEE NAME</th>
        <th class="font-weight-bold">G.P.F.</th>
        <th class="font-weight-bold">H.R.</th>
        <th class="font-weight-bold">ELECT.</th>
        <th class="font-weight-bold"> WATER</th>
        <th class="font-weight-bold">G.I.S.</th>
        <th class="font-weight-bold">LIC</th>
        <th class="font-weight-bold" style="padding: 0 20px 0 20px">NPSC</th>
        <th class="font-weight-bold">BONUS TO GPF</th>
        <th class="font-weight-bold">ARREARS TO GPF</th>
        <th class="font-weight-bold">G.P.F. ADV.</th>
        <th class="font-weight-bold">INCOME TAX</th>
        <th class="font-weight-bold">P.O.L.</th>
        <th class="font-weight-bold">R.S.C.</th>
        <th class="font-weight-bold">OTHER DED. IF ANY</th>
        <th class="font-weight-bold">TOTAL DEDUCT </th>
        <th class="font-weight-bold">NET PAY</th>
        <th class="font-weight-bold">S-R MONTH</th>
        <th class="font-weight-bold">S-R NO.OF DAY</th>
        <th class="font-weight-bold">S-DED. DAY</th>
        <th class="font-weight-bold" style="padding: 0 20px 0 20px">ARREAR OF MONTH</th>
        <th class="font-weight-bold">REMARK</th>
		<th class="font-weight-bold">PRINT RECEIPT</th>
        </thead>
        <tbody>
        <tr>
            <th class="font-weight-bold">01</th>
            <td>28</td>
            <td class="text-left">
                <a  href="#" data-toggle="modal" data-target="#spshukla" >
                    DR. SHEO PRASAD SHUKLA</a>
            </td>

            <td><?php  echo $gpf1 ?></td>
            <td><?php  echo $hr1 ?></td>
            <td ><?php  echo $elect1 ?></td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td><?php  echo $incm1 ?></td>
            <td><?php  echo $pol1 ?></td>
            <td>0</td>
            <td><?php  echo $othr_d1 ?></td>
            <td><?php  echo $total1 ?></td>
            <td><?php  echo $fnl_sal1 ?></td>
            <td></td>
            <td>0</td>
            <td>0</td>
            <td></td>
            <td><?php  echo $rmrk1 ?></td>
			<td>
			<a href="print1.php">
			<i class="fa fa-download"></i></a>
			</td>

        </tr>

        <tr>
            <th class="font-weight-bold">02</th>
            <td>02</td>
            <td class="text-left">
                <a  href="#" data-toggle="modal" data-target="#spshukla" >DR. VIBHASH YADAV</a>
            </td>
            <td><?php  echo $gpf2 ?></td>
            <td><?php  echo $hr2 ?></td>
            <td ><?php  echo $elect2 ?></td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td><?php  echo $incm2 ?></td>
            <td><?php  echo $pol2 ?></td>
            <td>0</td>
            <td><?php  echo $othr_d2 ?></td>
            <td><?php  echo $total2 ?></td>
            <td><?php  echo $fnl_sal2 ?></td>
            <td></td>
            <td>0</td>
            <td>0</td>
            <td></td>
            <td><?php  echo $rmrk2 ?></td>
			<td>
			<a href="print2.php">
			<i class="fa fa-download"></i></a>
			</td>


        </tr>

        <tr>
            <th class="font-weight-bold">03</th>
            <td>03</td>
            <td class="text-left">
                <a  href="#" data-toggle="modal" data-target="#spshukla" >DR. SIDDHARTHA ARJARIA</a>
            </td>
            <td><?php  echo $gpf3 ?></td>
            <td><?php  echo $hr3 ?></td>
            <td ><?php  echo $elect3 ?></td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td><?php  echo $incm3 ?></td>
            <td><?php  echo $pol3 ?></td>
            <td>0</td>
            <td><?php  echo $othr_d3 ?></td>
            <td><?php  echo $total3 ?></td>
            <td><?php  echo $fnl_sal3 ?></td>
            <td></td>
            <td>0</td>
            <td>0</td>
            <td></td>
            <td><?php  echo $rmrk3 ?></td>
			<td>
			<a href="print3.php">
			<i class="fa fa-download"></i></a>
			</td>

        </tr>

        <tr>
            <th class="font-weight-bold">04</th>
            <td>04</td>
            <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. SAURABH TRIPATHI</a></td>
            <td><?php  echo $gpf4 ?></td>
            <td><?php  echo $hr4 ?></td>
            <td ><?php  echo $elect4 ?></td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td><?php  echo $incm4 ?></td>
            <td><?php  echo $pol4 ?></td>
            <td>0</td>
            <td><?php  echo $othr_d4 ?></td>
            <td><?php  echo $total4 ?></td>
            <td><?php  echo $fnl_sal4 ?></td>
            <td></td>
            <td>0</td>
            <td>0</td>
            <td></td>
            <td><?php  echo $rmrk4 ?></td>
			<td><a href="print4.php">
			<i class="fa fa-download"></i></a>
			</td>

        </tr>

        <tr>
            <th class="font-weight-bold">05</th>
            <td>05</td>
            <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. ANKUSH KUMAR RAJPOOT</a></td>
            <td><?php  echo $gpf5 ?></td>
            <td><?php  echo $hr5 ?></td>
            <td ><?php  echo $elect5 ?></td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td><?php  echo $incm5 ?></td>
            <td><?php  echo $pol5 ?></td>
            <td>0</td>
            <td><?php  echo $othr_d5 ?></td>
            <td><?php  echo $total5 ?></td>
            <td><?php  echo $fnl_sal5 ?></td>
            <td></td>
            <td>0</td>
            <td>0</td>
            <td></td>
            <td><?php  echo $rmrk3 ?></td>
			<td><a href="print5.php">
			<i class="fa fa-download"></i></a>
			</td>

        </tr>

        <tr>
            <th class="font-weight-bold">06</th>
            <td>07</td>
            <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. AKSHAYKANT</a></td>
            <td><?php  echo $gpf7 ?></td>
            <td><?php  echo $hr7 ?></td>
            <td ><?php  echo $elect7 ?></td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td><?php  echo $incm7 ?></td>
            <td><?php  echo $pol7 ?></td>
            <td>0</td>
            <td><?php  echo $othr_d7 ?></td>
            <td><?php  echo $total7 ?></td>
            <td><?php  echo $fnl_sal7 ?></td>
            <td></td>
            <td>0</td>
            <td>0</td>
            <td></td>
            <td><?php  echo $rmrk7 ?></td>
			<td><a href="print7.php">
			<i class="fa fa-download"></i></a>
			</td>

        </tr>

        <tr>
            <th class="font-weight-bold">07</th>
            <td>08</td>
            <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. RAVI SHANKAR</a></td>
            <td><?php  echo $gpf8 ?></td>
            <td><?php  echo $hr8 ?></td>
            <td ><?php  echo $elect8 ?></td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td><?php  echo $incm8 ?></td>
            <td><?php  echo $pol8 ?></td>
            <td>0</td>
            <td><?php  echo $othr_d8 ?></td>
            <td><?php  echo $total8 ?></td>
            <td><?php  echo $fnl_sal8 ?></td>
            <td></td>
            <td>0</td>
            <td>0</td>
            <td></td>
            <td><?php  echo $rmrk8 ?></td>
			<td><a href="print8.php">
			<i class="fa fa-download"></i></a>
			</td>
        </tr>

        <tr>
            <th class="font-weight-bold">08</th>
            <td>10</td>
            <td class="text-left">
                <a  href="#" data-toggle="modal" data-target="#spshukla">MR. DEEP SINGH THAKUR</a>
            </td>
            <td><?php  echo $gpf10 ?></td>
            <td><?php  echo $hr10 ?></td>
            <td ><?php  echo $elect10 ?></td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td><?php  echo $incm10 ?></td>
            <td><?php  echo $pol10 ?></td>
            <td>0</td>
            <td><?php  echo $othr_d10 ?></td>
            <td><?php  echo $total10 ?></td>
            <td><?php  echo $fnl_sal10 ?></td>
            <td></td>
            <td>0</td>
            <td>0</td>
            <td></td>
            <td><?php  echo $rmrk10 ?></td>
			<td><a href="print10.php">
			<i class="fa fa-download"></i></a>
			</td>

        </tr>

        <tr>
            <th class="font-weight-bold">09</th>
            <td>11</td>
            <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. ARUN KUMAR</a></td>
            <td><?php  echo $gpf11 ?></td>
            <td><?php  echo $hr11 ?></td>
            <td ><?php  echo $elect11 ?></td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td><?php  echo $incm11 ?></td>
            <td><?php  echo $pol11 ?></td>
            <td>0</td>
            <td><?php  echo $othr_d11 ?></td>
            <td><?php  echo $total11 ?></td>
            <td><?php  echo $fnl_sal11 ?></td>
            <td></td>
            <td>0</td>
            <td>0</td>
            <td></td>
            <td><?php  echo $rmrk11 ?></td>
			<td><a href="print11.php">
			<i class="fa fa-download"></i></a>
			</td>

        </tr>

        <tr>
            <th class="font-weight-bold">10</th>
            <td>12</td>
            <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. PUSHPENDRA SINGH</a></td>
            <td><?php  echo $gpf12 ?></td>
            <td><?php  echo $hr12 ?></td>
            <td ><?php  echo $elect12 ?></td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td><?php  echo $incm12 ?></td>
            <td><?php  echo $pol12 ?></td>
            <td>0</td>
            <td><?php  echo $othr_d12 ?></td>
            <td><?php  echo $total12 ?></td>
            <td><?php  echo $fnl_sal12 ?></td>
            <td></td>
            <td>0</td>
            <td>0</td>
            <td></td>
            <td><?php  echo $rmrk12 ?></td>
			<td><a href="print12.php">
			<i class="fa fa-download"></i></a>
			</td>
        </tr>

        <tr>
            <th class="font-weight-bold">11</th>
            <td>13</td>
            <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. ANURAG CHAUHAN</a></td>
            <td><?php  echo $gpf13 ?></td>
            <td><?php  echo $hr13 ?></td>
            <td ><?php  echo $elect13 ?></td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td><?php  echo $incm13 ?></td>
            <td><?php  echo $pol13 ?></td>
            <td>0</td>
            <td><?php  echo $othr_d13 ?></td>
            <td><?php  echo $total13 ?></td>
            <td><?php  echo $fnl_sal13 ?></td>
            <td></td>
            <td>0</td>
            <td>0</td>
            <td></td>
            <td><?php  echo $rmrk13 ?></td>
			<td><a href="print13.php">
			<i class="fa fa-download"></i></a>
			</td>

        </tr>

        <tr>
            <th class="font-weight-bold">12</th>
            <td>14</td>
            <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. MOHD. TAUSEEF KHAN</a></td>
            <td><?php  echo $gpf14 ?></td>
            <td><?php  echo $hr14 ?></td>
            <td ><?php  echo $elect14 ?></td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td><?php  echo $incm14 ?></td>
            <td><?php  echo $pol14 ?></td>
            <td>0</td>
            <td><?php  echo $othr_d14 ?></td>
            <td><?php  echo $total14 ?></td>
            <td><?php  echo $fnl_sal14 ?></td>
            <td></td>
            <td>0</td>
            <td>0</td>
            <td></td>
            <td><?php  echo $rmrk14 ?></td>
			<td><a href="print14.php">
			<i class="fa fa-download"></i></a>
			</td>
        </tr>

        <tr>
            <th class="font-weight-bold">13</th>
            <td>15</td>
            <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. ASHISH TRIPATHI</a></td>
            <td><?php  echo $gpf15 ?></td>
            <td><?php  echo $hr15 ?></td>
            <td ><?php  echo $elect15 ?></td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td><?php  echo $incm15 ?></td>
            <td><?php  echo $pol3 ?></td>
            <td>0</td>
            <td><?php  echo $othr_d15 ?></td>
            <td><?php  echo $total15 ?></td>
            <td><?php  echo $fnl_sal15 ?></td>
            <td></td>
            <td>0</td>
            <td>0</td>
            <td></td>
            <td><?php  echo $rmrk15 ?></td>
			<td><a href="print15.php">
			<i class="fa fa-download"></i></a>
			</td>

        </tr>

        <tr>
            <th class="font-weight-bold">14</th>
            <td>16</td>
            <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. ASHISH SRIVASTAV</a></td>
            <td><?php  echo $gpf16 ?></td>
            <td><?php  echo $hr16 ?></td>
            <td ><?php  echo $elect16 ?></td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td><?php  echo $incm16 ?></td>
            <td><?php  echo $pol16 ?></td>
            <td>0</td>
            <td><?php  echo $othr_d16 ?></td>
            <td><?php  echo $total16 ?></td>
            <td><?php  echo $fnl_sal16 ?></td>
            <td></td>
            <td>0</td>
            <td>0</td>
            <td></td>
            <td><?php  echo $rmrk16 ?></td>
			<td><a href="print16.php">
			<i class="fa fa-download"></i></a>
			</td>
        </tr>

        <tr>
            <th class="font-weight-bold">15</th>
            <td>17</td>
            <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. GURUSHARAN SINGH</a></td>
            <td><?php  echo $gpf17 ?></td>
            <td><?php  echo $hr17 ?></td>
            <td ><?php  echo $elect17 ?></td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td><?php  echo $incm17 ?></td>
            <td><?php  echo $pol17 ?></td>
            <td>0</td>
            <td><?php  echo $othr_d17 ?></td>
            <td><?php  echo $total17 ?></td>
            <td><?php  echo $fnl_sal17 ?></td>
            <td></td>
            <td>0</td>
            <td>0</td>
            <td></td>
            <td><?php  echo $rmrk17 ?></td>
			<td><a href="print17.php">
			<i class="fa fa-download"></i></a>
			</td>

        </tr>

        <tr>
            <th class="font-weight-bold">16</th>
            <td>18</td>
            <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. SARVESH KUMAR</a></td>
            <td><?php  echo $gpf18 ?></td>
            <td><?php  echo $hr18 ?></td>
            <td ><?php  echo $elect18 ?></td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td><?php  echo $incm18 ?></td>
            <td><?php  echo $pol18 ?></td>
            <td>0</td>
            <td><?php  echo $othr_d18 ?></td>
            <td><?php  echo $total18 ?></td>
            <td><?php  echo $fnl_sal18 ?></td>
            <td></td>
            <td>0</td>
            <td>0</td>
            <td></td>
            <td><?php  echo $rmrk18 ?></td>
			<td><a href="print18.php">
			<i class="fa fa-download"></i></a>
			</td>

        </tr>

        <tr>
            <th class="font-weight-bold">17</th>
            <td>19</td>
            <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. MRITYUNJAY SINGH</a></td>
            <td><?php  echo $gpf19 ?></td>
            <td><?php  echo $hr19 ?></td>
            <td ><?php  echo $elect19 ?></td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td><?php  echo $incm19 ?></td>
            <td><?php  echo $pol19 ?></td>
            <td>0</td>
            <td><?php  echo $othr_d19 ?></td>
            <td><?php  echo $total19 ?></td>
            <td><?php  echo $fnl_sal19 ?></td>
            <td></td>
            <td>0</td>
            <td>0</td>
            <td></td>
            <td><?php  echo $rmrk19 ?></td>
			<td><a href="print19.php">
			<i class="fa fa-download"></i></a>
			</td>
        </tr>

        <tr>
            <th class="font-weight-bold">18</th>
            <td>20</td>
            <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. ABHIJEET SINGH</a></td>
            <td><?php  echo $gpf20 ?></td>
            <td><?php  echo $hr20 ?></td>
            <td ><?php  echo $elect20 ?></td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td><?php  echo $incm20 ?></td>
            <td><?php  echo $pol20 ?></td>
            <td>0</td>
            <td><?php  echo $othr_d20 ?></td>
            <td><?php  echo $total20 ?></td>
            <td><?php  echo $fnl_sal20 ?></td>
            <td></td>
            <td>0</td>
            <td>0</td>
            <td></td>
            <td><?php  echo $rmrk20 ?></td>
			<td><a href="print20.php">
			<i class="fa fa-download"></i></a>
			</td>
        </tr>

        <tr>
            <th class="font-weight-bold">19</th>
            <td>21</td>
            <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. SHAILENDRA BADAL</a></td>
            <td><?php  echo $gpf21 ?></td>
            <td><?php  echo $hr21 ?></td>
            <td ><?php  echo $elect21 ?></td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td><?php  echo $incm21 ?></td>
            <td><?php  echo $pol21 ?></td>
            <td>0</td>
            <td><?php  echo $othr_d21 ?></td>
            <td><?php  echo $total21 ?></td>
            <td><?php  echo $fnl_sal21 ?></td>
            <td></td>
            <td>0</td>
            <td>0</td>
            <td></td>
            <td><?php  echo $rmrk21 ?></td>
			<td><a href="print21.php">
			<i class="fa fa-download"></i></a>
			</td>

        </tr>

        <tr>
            <th class="font-weight-bold">20</th>
            <td>22</td>
            <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. ASHUTOSH TIWARI</a></td>
            <td><?php  echo $gpf22 ?></td>
            <td><?php  echo $hr22 ?></td>
            <td ><?php  echo $elect22 ?></td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td><?php  echo $incm22 ?></td>
            <td><?php  echo $pol22 ?></td>
            <td>0</td>
            <td><?php  echo $othr_d22 ?></td>
            <td><?php  echo $total22 ?></td>
            <td><?php  echo $fnl_sal22 ?></td>
            <td></td>
            <td>0</td>
            <td>0</td>
            <td></td>
            <td><?php  echo $rmrk22 ?></td>
			<td><a href="print22.php">
			<i class="fa fa-download"></i></a>
			</td>

        </tr>

        <tr>
            <th class="font-weight-bold">21</th>
            <td>23</td>
            <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. SURENDRA KUMAR</a></td>
            <td><?php  echo $gpf23 ?></td>
            <td><?php  echo $hr23 ?></td>
            <td ><?php  echo $elect23 ?></td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td><?php  echo $incm23 ?></td>
            <td><?php  echo $pol23 ?></td>
            <td>0</td>
            <td><?php  echo $othr_d23 ?></td>
            <td><?php  echo $total23 ?></td>
            <td><?php  echo $fnl_sal23 ?></td>
            <td></td>
            <td>0</td>
            <td>0</td>
            <td></td>
            <td><?php  echo $rmrk23 ?></td>
			<td><a href="print23.php">
			<i class="fa fa-download"></i></a>
			</td>
        </tr>

        <tr>
            <th class="font-weight-bold">22</th>
            <td>24</td>
            <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. AMIT TRIPATHI</a></td>
            <td><?php  echo $gpf24 ?></td>
            <td><?php  echo $hr24 ?></td>
            <td ><?php  echo $elect24 ?></td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td><?php  echo $incm24 ?></td>
            <td><?php  echo $pol24 ?></td>
            <td>0</td>
            <td><?php  echo $othr_d24 ?></td>
            <td><?php  echo $total24 ?></td>
            <td><?php  echo $fnl_sal24 ?></td>
            <td></td>
            <td>0</td>
            <td>0</td>
            <td></td>
            <td><?php  echo $rmrk24 ?></td>
			<td><a href="print24.php">
			<i class="fa fa-download"></i></a>
			</td>

        </tr>

        <tr>
            <th class="font-weight-bold">23</th>
            <td>25</td>
            <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. MANOJ KUMAR SINGH</a></td>
            <td><?php  echo $gpf25 ?></td>
            <td><?php  echo $hr25 ?></td>
            <td ><?php  echo $elect25 ?></td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td><?php  echo $incm25 ?></td>
            <td><?php  echo $pol25 ?></td>
            <td>0</td>
            <td><?php  echo $othr_d25 ?></td>
            <td><?php  echo $total25 ?></td>
            <td><?php  echo $fnl_sal25 ?></td>
            <td></td>
            <td>0</td>
            <td>0</td>
            <td></td>
            <td><?php  echo $rmrk25 ?></td>
			<td><a href="print25.php">
			<i class="fa fa-download"></i></a>
			</td>

        </tr>

        <tr>
            <th class="font-weight-bold">24</th>
            <td>26</td>
            <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >DR. ARCHANA SINGH</a></td>
            <td><?php  echo $gpf26 ?></td>
            <td><?php  echo $hr26 ?></td>
            <td ><?php  echo $elect26 ?></td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td><?php  echo $incm26 ?></td>
            <td><?php  echo $pol26 ?></td>
            <td>0</td>
            <td><?php  echo $othr_d26?></td>
            <td><?php  echo $total26 ?></td>
            <td><?php  echo $fnl_sal26 ?></td>
            <td></td>
            <td>0</td>
            <td>0</td>
            <td></td>
            <td><?php  echo $rmrk26 ?></td>
			<td><a href="print26.php">
			<i class="fa fa-download"></i></a>
			</td>

        </tr>

        <tr>
            <th class="font-weight-bold">25</th>
            <td>27</td>
            <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >DR. POOJA SINGH</a></td>
            <td><?php  echo $gpf27 ?></td>
            <td><?php  echo $hr27 ?></td>
            <td ><?php  echo $elect27 ?></td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td><?php  echo $incm27 ?></td>
            <td><?php  echo $pol27 ?></td>
            <td>0</td>
            <td><?php  echo $othr_d27 ?></td>
            <td><?php  echo $total27 ?></td>
            <td><?php  echo $fnl_sal27 ?></td>
            <td></td>
            <td>0</td>
            <td>0</td>
            <td></td>
            <td><?php  echo $rmrk27 ?></td>
			<td><a href="print27.php">
			<i class="fa fa-download"></i></a>
			</td>
        </tr>
        </tbody>
    </table>

</div>



<div class="modal fade" id="spshukla"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="text-center font-weight-bold" >Enter Details 
				<span style="font-size:12px">(Enter Ref.No for respective faculty)</span>
				</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
			<form name="frmRegistration" method="POST" action="">
                <table style="margin-left: 40px;border: 1px solid black">
                    <tr>
                        <td> Enter Ref. No.</td>
                        <td><input type="number" id="refno" name="refno"></td>
                    </tr>
					<tr>
                        <td>G.P.F.</td>
                        <td><input type="number" id="gpf" name="gpf"></td>
                    </tr>
                    <tr>
                        <td> H.R.</td>
                        <td><input type="number" id="hr" name="hr"></td>
                    </tr>
                    <tr>
                        <td>ELECT.</td>
                        <td><input type="number" id="elect" name="elect"></td>
                    </tr>
                    <tr>
                        <td>INCOME TAX</td>
                        <td><input type="number" id="incm" name="incm"></td>
                    </tr>
                    <tr>
                        <td>P.O.L.</td>
                        <td><input type="number" id="pol" name="pol"> </td>
                    </tr>
                    <!--<tr>
                        <td>SPL. PAY</td>
                        <td><input type="number" id="sp" name="sp"></td>
                    </tr>
                    <tr>
                        <td>ARREARS</td>
                        <td><input type="number" id="arr" name="arr"></td>
                    </tr>-->
                    <tr>
                        <td>OTHER DED.IF ANY</td>
                        <td><input type="number" id="othr_d" name="othr_d"></td>
                    </tr>
					<tr>
                        <td>REMARK</td>
                        <td><input type="text" id="rmrk" name="rmrk"></td>
                    </tr>


                </table>
				<button class="btn btn-info" style="margin-left: 190px" onclick="change()" type="submit" name="register-user" value="submit"  type="button ">Submit</button>
			</form>	
            </div>
            <div class="modal-footer" >
                
            </div>
        </div>
    </div>
</div>
</div>

<div id="loading"></div>





<script>
    var d = new Date();
    document.getElementById("demo").innerHTML = d.getDate();
    var d = new Date();
    document.getElementById("demo1").innerHTML = (d.getMonth())+1;
    var d = new Date();
    document.getElementById("demo2").innerHTML = d.getFullYear();

    function main() {
        print(window);
    }
</script>
<script>
    function change() {

        var e = document.getElementById("spdete_f");
        var strUser = e.options[e.selectedIndex].text;
        document.getElementById('spdete').innerHTML = strUser;
        alert("Details inserted successfully")
    }
</script>

<script>
function onReady(callback) {
  var intervalId = window.setInterval(function() {
    if (document.getElementsByTagName('body')[0] !== undefined) {
      window.clearInterval(intervalId);
      callback.call(this);
    }
  }, 1000);
}

function setVisible(selector, visible) {
  document.querySelector(selector).style.display = visible ? 'block' : 'none';
}

onReady(function() {
  setVisible('.page', true);
  setVisible('#loading', false);
});
</script>

<script src="bootstrap/js/fontawesome-all.js"></script>
<script src="bootstrap/js/jquery-3.2.1.min.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/mdb.min.js"></script>

<!--<script src="modal.js"></script>-->
</body>
</html>