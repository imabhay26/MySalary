<?php

	$db = new PDO('sqlite:realdb.db');
	$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	$id = (isset($_POST['id']) ? $_POST['id'] : '');
	$pass = (isset($_POST['pass']) ? $_POST['pass'] : '');
	$sql = "SELECT * FROM login WHERE id = :id AND pass = :pass";

	try {
    $statement = $db->prepare($sql);
    $statement->execute(array('id' => $id, 'pass' => $pass));
    $row = $statement->fetch();
        if ($row['id'] == $id && $row['pass'] == $id){
            $theme = 'index.php';
			echo $theme;
			include($theme);
        }
		else{
            echo "User Name or Password is invalid";
        }           
	}
	catch(PDOException $e) {
    echo "Something went wrong: ".$e->getMessage();
	}
	
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


    
</head>
<body>
<div class="container">
    <div class="col-3">

    </div>
    <div class="col-6" style="margin: 100px 0 0 300px">
        <div class="card">
            <div class="card-header bg-info text-white text-center ">
                <h3 class="font-weight-bold">LOG IN</h3>
            </div>
            <div class="card-body">
                <form name="frmRegistration" method="POST" action="">
                    <div class="form-group">
                        <h4 for="exampleInputEmail1">LogIn ID</h4>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="id" aria-describedby="emailHelp" placeholder="Enter LogIn ID">
                    </div>
                    <div class="form-group">
                        <h4 for="exampleInputPassword1">Password</h4>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="pass" placeholder="Enter Password">
                    </div>

                    <button type="submit" name="register-user" value="submit"  type="button " class="btn btn-primary ">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-3">

    </div>

</div>



<script src="bootstrap/js/fontawesome-all.js"></script>
<script src="bootstrap/js/jquery-3.2.1.min.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<!--<script src="bootstrap/js/mdb.min.js"></script>-->

<!--<script src="modal.js"></script>-->
</body>
</html>