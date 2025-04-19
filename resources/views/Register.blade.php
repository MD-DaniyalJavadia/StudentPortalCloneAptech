<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="{{asset('loginAssets/assets/css/clone2.css')}}">
    <link rel="shortcut icon" href="{{asset('loginAssets/assets/img/LOGO 2.png')}}" type="image/x-icon">
</head>
<body>
    <div class="container">
        <div class="box">

            <div class="loginheading">
                <h1 id="loginKiHeading">Register</h1>
                <h1 id="stuportalheadResponsive">Student Portal</h1>

            </div>
            <div class="line">
                <hr id="greyline"style="width:135px; border: 1px solid gray;">
            </div>
            <div class="formInput">
                <input id="emailinput" autocomplete="off" type="text" name="" id="">
                <p  id="youremailline"><b>Please Provide Your Email Address</b></p>
            </div>
                       <div class="loginbtn">
                <button id="loginBtn">Register</button>
                <p id="fPasswordResponsive" style="color:#f7b205;">Forget Password</p>
            </div>
            <div class="forgetPassword">
                <p id="fPassword" style="color:black;">Already Have An Account</p>
            </div>
                <div class="loginhere">
                    <p id="loginhere"><a  style="color:#f7b205; list-style: none; text-decoration: none;"  href="{{route('login.page')}}">Login here?</a></p>
                </div>

        </div>
        <div class="logobox">
            <div class="logoimg">
                <img id="logoImageAptech" src="{{asset('loginAssets/assets/img/LOGO 2.png')}}" alt="">
            </div>
            <div class="studentportalheading">
                <h1 id="stuportalhead">Student Portal</h1>
            </div>
        </div>
    </div>
</body>
</html>