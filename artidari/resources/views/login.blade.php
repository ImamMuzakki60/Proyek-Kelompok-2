<!DOCTYPE html>
<for>
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="initial-scale=1, width=device-width">
  	
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@800&display=swap" />
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600&display=swap" />
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" />
  	
  	<style>
        .logo-book {
  	width: 73px;
  	position: relative;
  	height: 73px;
}
.artidari {
  	position: relative;
  	font-weight: 800;
}
.logo {
  	display: flex;
  	flex-direction: row;
  	align-items: center;
  	justify-content: center;
}
.open-book-content-books-book-parent {
  	display: flex;
  	flex-direction: row;
  	align-items: flex-start;
  	justify-content: flex-start;
  	gap: 27px;
}
.artidarifix-inner {
  	display: flex;
  	flex-direction: row;
  	align-items: flex-start;
  	justify-content: flex-start;
}
.artidarifix {
  	display: flex;
  	flex-direction: column;
  	align-items: flex-start;
  	justify-content: flex-start;
  	padding: 0px 0px 0px 60px;
  	z-index: 0;
  	font-size: 70px;
  	font-family: Inconsolata;
}
.masuk-ke-akun {
  	position: relative;
  	font-size: 24px;
  	font-weight: 500;
  	z-index: 1;
}
.rectangle {
  	position: absolute;
  	top: 0px;
  	left: 0px;
  	border-radius: 4px;
  	border: 1px solid #000;
  	box-sizing: border-box;
  	width: 500px;
  	height: 45px;
}
.email {
  	position: absolute;
  	top: 12px;
  	left: 54px;
  	line-height: 20px;
  	text-transform: capitalize;
  	display: inline-block;
  	width: 100%;
}
.email-input {
  	top: 12px;
  	left: 54px;
    border: none;
    outline:none;
  	line-height: 20px;
  	display: inline-block;
  	width: 100%;
    background: transparent;
    }
.user {
  	position: absolute;
  	top: -519px;
  	left: -109px;
  	width: 21.3px;
  	height: 20px;
  	overflow: hidden;
  	display: none;
}
.username {
  	position: absolute;
  	top: 0px;
  	left: 0px;
  	width: 500px;
  	height: 45px;
}
.rectangle1 {
  	position: absolute;
  	top: 0px;
  	left: 0px;
  	border-radius: 7px;
  	border: 1px solid #000;
  	box-sizing: border-box;
  	width: 500px;
  	height: 45px;
}
.password1 {
  	position: absolute;
  	top: 13px;
  	left: 54.26px;
  	line-height: 20px;
  	text-transform: capitalize;
  	display: inline-block;
  	width: 90.4px;
}
.lock-icon {
  	position: absolute;
  	height: 44.44%;
  	width: 4.26%;
  	top: 28.89%;
  	right: 93.19%;
  	bottom: 26.67%;
  	left: 2.55%;
  	max-width: 100%;
  	overflow: hidden;
  	max-height: 100%;
}
.password {
  	position: absolute;
  	top: 65px;
  	left: 0px;
  	width: 500px;
  	height: 45px;
}
.password-input {
  	top: 13px;
  	left: 54.26px;
    border: none;
    outline:none;
  	line-height: 20px;
  	display: inline-block;
  	width: 100%;
    background: transparent;
}
.rectangle2 {
  	position: absolute;
  	top: 0px;
  	left: 0px;
  	box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.3);
  	border-radius: 7px;
  	background-color: #1e2952;
  	width: 500px;
  	height: 45px;
  	cursor: pointer;
}
.login1 {
  	position: absolute;
  	top: 13px;
  	left: 205px;
  	line-height: 20px;
  	text-transform: capitalize;
  	font-weight: 600;
  	display: inline-block;
  	width: 90px;
}
.login-btn {
  	position: absolute;
  	top: 153px;
  	left: 0px;
  	width: 500px;
  	height: 45px;
  	text-align: center;
  	font-size: 16px;
  	color: #fff;
  	font-family: Montserrat;
}
.rectangle3 {
  	position: absolute;
  	top: 0px;
  	left: 0px;
  	box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.3);
  	border-radius: 7px;
  	background-color: rgba(30, 41, 82, 0.65);
  	width: 500px;
  	height: 45px;
}
.daftar-akun-dengan {
  	position: absolute;
  	top: 13px;
  	left: 115px;
  	line-height: 20px;
  	text-transform: capitalize;
  	font-weight: 600;
  	display: inline-block;
  	width: 269px;
}
.login-btn1 {
  	position: absolute;
  	top: 272px;
  	left: 0px;
  	width: 500px;
  	height: 45px;
  	cursor: pointer;
  	text-align: center;
  	font-size: 16px;
  	color: #fff;
}
.form {
  	width: 500px;
  	position: relative;
  	height: 317px;
  	z-index: 2;
  	text-align: left;
  	color: rgba(0, 0, 0, 0.7);
}
.mail-icon {
    position: absolute;s
  	width: 4.26%;
    height: 1.67%;
  	top: 43.44%;
  	bottom: 54.89%;
  	left: 35.68%;
  	max-width: 100%;
  	overflow: hidden;
  	max-height: 100%;
}
.vector-icon {
  	width: 1.74%;
  	position: absolute;
  	margin: 0 !important;
  	height: 1.78%;
  	top: 50.67%;
  	right: 33.68%;
  	bottom: 47.56%;
  	left: 64.58%;
  	max-width: 100%;
  	overflow: hidden;
  	max-height: 100%;
  	z-index: 4;
}
.frame-child {
  	width: 227px;
  	position: relative;
  	max-height: 100%;
}
.atau {
  	position: relative;
  	line-height: 20px;
  	font-weight: 300;
}
.vector-parent {
  	width: 500px;
  	margin: 0 !important;
  	position: absolute;
  	top: 601px;
  	left: 470px;
  	display: flex;
  	flex-direction: row;
  	align-items: center;
  	justify-content: flex-start;
  	gap: 8px;
  	z-index: 5;
}
.login {
  	position: relative;
  	background-color: #f5ebe0;
  	width: 100%;
  	overflow: hidden;
  	display: flex;
  	flex-direction: column;
  	align-items: flex-start;
  	justify-content: flex-start;
  	padding: 207px 469px;
  	box-sizing: border-box;
  	gap: 34px;
  	text-align: center;
  	font-size: 14px;
  	color: #000;
  	font-family: Raleway;
}

</style>
  	
</head>
<body>
  	<form action="" method="post">
  	<div class="login">
    		<div class="artidarifix">
      			<div class="artidarifix-inner">
        				<div class="open-book-content-books-book-parent">
          					<img class="logo-book" alt="" src="{{ asset('images/black-logo.svg') }}">
          					
          					<div class="logo">
            						<div class="artidari">artidari</div>
          					</div>
        				</div>
      			</div>
    		</div>
    		<div class="masuk-ke-akun">Masuk ke akun Anda</div>
    		<div class="form">
      			<div class="username">
        				<div class="rectangle"></div>
        				<div class="email">
                            <input type="text" class="email-input" name="email" placeholder="Email" required>
                        </div>
        				<div class="user">
        				</div>
      			</div>
      			<div class="password">
        				<div class="rectangle1"></div>
                        <div class="email">
                            <input type="password" class="password-input" name="password" placeholder="Password" required>
                        </div>

        				<img class="lock-icon" alt="" src="{{ asset('images/lock.svg') }}">
        				
      			</div>
      			<div class="login-btn" onclick="redirectToPageHome()">
        				<div class="rectangle2" id="rectangle" >
        				</div>
        				<div class="login1" >login</div>
      			</div>
      			<div class="login-btn1" id="loginBtnContainer1">
        				<div class="rectangle3">
        				</div>
        				<div class="daftar-akun-dengan">Daftar akun dengan email</div>
      			</div>
    		</div>
    		<img class="mail-icon" alt="" src="{{ asset('images/Mail.svg') }}">
    		
    		<img class="vector-icon" alt="" src="Vector.svg">
    		
    		<div class="vector-parent">
      			<img class="frame-child" alt="" src="Line 4.svg">
      			
      			<div class="atau">Atau</div>
      			<img class="frame-child" alt="" src="Line 3.svg">
      			
    		</div>
  	</div>
  	
  	
  	
  	
  	<script>

function redirectToPageHome() {
            window.location.href = "/";
        	}	

    		var rectangle = document.getElementById("rectangle");
    		if(rectangle) {
      			rectangle.addEventListener("click", function (e) {
        				// Add your code here
      			});
    		}
    		
    		var loginBtnContainer1 = document.getElementById("loginBtnContainer1");
    		if(loginBtnContainer1) {
      			loginBtnContainer1.addEventListener("click", function (e) {
                   // Add your code
            
      			});
    		}
    </script>
    </form>
    </body>
</html>