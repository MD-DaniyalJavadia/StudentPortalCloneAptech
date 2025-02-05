<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="{{asset('loginAssets/assets/css/clone.css')}}">
    <link rel="stylesheet" href="{{asset('loginAssets/assets/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('loginAssets/assets/css/ipad.css')}}">
    <link rel="shortcut icon" href="{{asset('loginAssets/assets/img/LOGO 2.png')}}" type="image/x-icon">
</head>
<style>
         #loginAnchor
        {
            list-style: none;
        }
        #youremailline::selection
        {
            background-color: #f7b205;
            color:white;
        }
</style>
    
<body>
    <div class="container">
        <div class="box">

            <div class="loginheading">
                <h1 id="loginKiHeading">Login</h1>
                <h1 id="stuportalheadResponsive">Student Portal</h1>

            </div>
            <div class="line">
                <hr id="greyline"style="width:110px; border: 1px solid gray;">
            </div>
            <form method="POST" action="{{route('dashboard.page')}}" >
                @csrf

            <div class="formInput">
                <input id="emailinput" type="text" name="user_mail" id="">
                <p  id="youremailline">Your Email </p>
            </div>
            <div class="formpasswordinput">
                <input type="password" name="user_password" id="yourPasswordinput">
                <p  id="yourpasswordine">Password</p>
            </div>
            <div class="loginbtn">
                <button id="loginBtn">Login</button>
                <p id="fPasswordResponsive" style="color:#f7b205;"><a href="{{route('forget.page')}}">Forget Password</a></p>
            </div>
            <div class="forgetPassword">
                <p id="fPassword" style="color:#f7b205;"><a  style="color:#f7b205; list-style: none; text-decoration: none;" id="loginAnchor" href="{{route('forget.page')}}">Forget Password</a></p>

            </div>
            </form>

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