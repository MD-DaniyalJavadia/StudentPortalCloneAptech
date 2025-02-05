<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Sofadi+One&family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Sofadi+One&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    
</head>
<style>
      *
    {
        margin:0;
        padding: 0;
        box-sizing: border-box;
    }
    body
    {
        background-color: #f0f3f6;
    }

   
    .navbaritem
    {
        background-color:white;
        justify-content: center;
        display: flex;
        height: 100px;
        align-items: center;
    }
    .navbaritem ul 
    {
        left:100px;
        position: relative;

    }
    .navbaritem ul li
     {
        display: inline-block;
        margin:10px;
    }
    .navbaritem ul li a
    {
        list-style: none;
        text-decoration: none;
        color:black;
    }
    
    body {
            font-family: sans-serif;
            margin: 0;
        }
        #aptechgdnlogo
        {
            height: 100px;
            width: 300px;
            position: absolute;
        }
        .attendancetableHeading
        {
            justify-content: center;
            align-items: center;
            display: flex;            
        }
        
       
        .StudentDetail
        {
            display: flex;
            margin-top: 100px;
            margin-left: 125px;
        }
         
         .StudentPersonlDetail
         {
            display: flex;
            margin-left: 120vh;
        }
        #stuName
        {
            color: #20247b;
            font-weight: 700;
            font-family: "Source Sans 3", serif;
            font-size:45px;
            font-style: normal;
            position: absolute;
            top:30vh;
            left:40rem;
        }
        #stuEmail
        {
            color: #20247b;
            font-weight: 700;
            font-family: "Source Sans 3", serif;
            font-size:25px;
            font-style: normal;
            position: absolute;
            top:45vh;
            left:40rem;
        }
        #stumail
        {
            color: #6f8ba4;
            font-weight: 700;
            font-family: "Source Sans 3", serif;
            font-size:15px;
            font-style: normal;
            position: absolute;
            top:50vh;
            left:40rem;
        }
        #stuBatch
        {
            color: #20247b;
            font-weight: 700;
            font-family: "Source Sans 3", serif;
            font-size:25px;
            font-style: normal;
            position: absolute;
            top:45vh;
            left:60rem;
        }
        #stuBatchCode
        {
            color: #6f8ba4;
            font-weight: 700;
            font-family: "Source Sans 3", serif;
            font-size:15px;
            font-style: normal;
            position: absolute;
            top:50vh;
            left:60rem;
        }
        #stuPhno
        {
            color: #20247b;
            font-weight: 700;
            font-family: "Source Sans 3", serif;
            font-size:25px;
            font-style: normal;
            position: absolute;
            top:55vh;
            left:40rem;
        }
        #stuCourseEnrollment
        {
            color: #20247b;
            font-weight: 700;
            font-family: "Source Sans 3", serif;
            font-size:25px;
            font-style: normal;
            position: absolute;
            top:55vh;
            left:60rem;
        }
        #stumobilenumber
        {
            color: #6f8ba4;
            font-weight: 700;
            font-family: "Source Sans 3", serif;
            font-size:15px;
            font-style: normal;
            position: absolute;
            top:60vh;
            left:40rem;
        }
        #stuEnrollCode
        {
            color: #6f8ba4;
            font-weight: 700;
            font-family: "Source Sans 3", serif;
            font-size:15px;
            font-style: normal;
            position: absolute;
            top:60vh;
            left:60rem;
        }
        .userNamebutton
     {
        color:blue;
        background-color:#ccc;
        height:40px;
        left:95em;
        bottom:72px;
        border-radius: 10px;
        position: relative;
        width: 180px;
     }
</style>

<body>
<nav>
        <div class="navbar">
            <div class="navbarlogo">
                <a href="Studentdashboard.html"><img src="{{asset('loginAssets/assets/img/LOGO-dashboard.png')}}" id="aptechgdnlogo" alt=""></a>
            </div>
            <div class="navbaritem">
                <ul>
                    <li><a href="{{route('dashboardWala.page')}}">Dashboard</a></li>
                    <li><a href="{{route('profile.page')}}">Profile</a></li>
                    <li><a href="{{route('register_complains')}}">Register Complains</a></li>
                    <li><a href="{{route('exam.page')}}">Exam</a></li>
                    <li><a href="{{route('attendence.page')}}">Attendance</a></li>
                    <li><a href="{{route('annoument.page')}}">Annoument</a></li>
                    <li><a href="">Feedback</a></li>
                </ul>
            </div>
            <button class='userNamebutton'>Mr .Muhmmad Daniyal</button>
        </div>
    </nav>
    <div class="StudentDetail">
        <div class="StudentImg"  >
            <img src="{{asset('loginAssets/assets/img/avatar7.png')}}" >
        </div>
    </div>
    <div class="StudentPersonlDetail">
        <p id="stuName">Mr. MUHAMMAD DANIYAL
        </p>
        <p id="stuEmail">Email
        </p>
        <p id="stumail">daniyal2307a@aptechgdn.net
        </p>
        <p id="stuBatch">Batch
        </p>
        <p id="stuBatchCode">2307a
        </p>
        <p id="stuPhno">Phone No
        </p>
        <p id="stumobilenumber">923323782768
        </p>
        <p id="stuCourseEnrollment">Course Enrolled
        </p>
        <p id="stuBatchCode">2307a
        </p>
        <p id="stuEnrollCode">OV-7062-ADSE
        </p>
    </div>
        
    
    
</body>
</html>