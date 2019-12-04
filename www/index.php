
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
	/*body{
            background: white url("img/college.png") no-repeat fixed ;
            background-size: cover;
        }*/
	</style>

</head>
<body>
<div class="container">
    <div class="col-3">

    </div>
    <div class="col-6" style="margin: 120px 0 0 280px">
        <div class="card">
            <div class="card-header bg-deep-purple text-white text-center ">
                <h3 class="font-weight-bold">LOG IN</h3>
            </div>
            <div class="card-body">
                <form method="post" action="earning.php"  onsubmit="return validForm()"  name="vform">
                    <div class="form-group">
                        <h4 for="exampleInputEmail1"><i class="fa fa-user"></i>&nbsp;&nbsp;LogIn ID</h4>
                        <input type="text" class="form-control" id="userid" name="userid"  placeholder="Enter LogIn ID">
                        <div id="text_error"></div>
                    </div>
                    <div class="form-group">
                        <h4 for="exampleInputPassword1"><i class="fa fa-key"></i>&nbsp;&nbsp;Password</h4>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                        <div id="text_error1"></div>
                    </div>
                    <a href="#" >
                    <button  id="btn-validate" type="submit" name="submit" type="button" class="btn btn-deep-purple ">Submit</button>
                    </a>
                </form>
            </div>
			<div class="card-footer bg-light  text-center">
                <span style="font-size: 12px">COPYRIGHT &copy; RECBANDA</span>
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
<script>
    var userBox=document.querySelector('#userid');
    var userBox1=document.querySelector('#password');

    var usernameError=document.querySelector('#text_error');
    var usernameError1=document.querySelector('#text_error1');

    userBox.addEventListener('blur',eventUser);
    userBox1.addEventListener('blur',eventUser1);

    function validForm() {
        var result=true;
        if(userBox.value===''){
            userBox.style.borderBottomColor='red';
            usernameError.textContent='Please enter your LogIn ID';
            usernameError.style.color='red';

            result=false;
            return result;
        }

        else if(userBox.value!=='recbanda734'){
            userBox.style.borderBottomColor='red';
            usernameError.textContent='LogIn ID Is Incorrect';
            usernameError.style.color='red';

            result=false;
            return result;
        }
        if(userBox1.value===''){
            userBox1.style.borderBottomColor='red';
            usernameError1.textContent='Please enter your Password';
            usernameError1.style.color='red';

            result=false;
            return result;
        }

        else if(userBox1.value!=='recbanda734'){
            userBox1.style.borderBottomColor='red';
            usernameError1.textContent='Password Is Incorrect';
            usernameError1.style.color='red';

            result=false;
            return result;
        }
        else if (result===false){
            return false;
        }
        else {

            return true;
        }

    }

    function eventUser() {
        userBox.style.borderBottomColor='#1d7b9f';
        usernameError.textContent='';
    }

    function eventUser1() {
        userBox1.style.borderBottomColor='#1d7b9f';
        usernameError1.textContent='';
    }

</script>

</body>
</html>