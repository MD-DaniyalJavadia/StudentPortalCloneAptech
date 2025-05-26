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
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      background-color: #f0f3f6;
    }

    body {
      font-family: sans-serif;
      margin: 0;
    }

    .attendancetableHeading {
      justify-content: center;
      align-items: center;
      display: flex;
    }

    .StudentDetail {
      display: flex;
      margin-top: 100px;
      margin-left: 125px;
    }

    .StudentPersonlDetail {
      display: flex;
      margin-left: 120vh;
    }
    #stuName {
      color: #20247b;
      font-weight: 700;
      font-family: "Source Sans 3", serif;
      font-size: 45px;
      font-style: normal;
      position: absolute;
      top: 30vh;
      left: 40rem;
    }
    #stuEmail {
      color: #20247b;
      font-weight: 700;
      font-family: "Source Sans 3", serif;
      font-size: 25px;
      font-style: normal;
      position: absolute;
      top: 45vh;
      left: 40rem;
    }
    #stumail {
      color: #6f8ba4;
      font-weight: 700;
      font-family: "Source Sans 3", serif;
      font-size: 15px;
      font-style: normal;
      position: absolute;
      top: 50vh;
      left: 40rem;
    }
    #stuBatch {
      color: #20247b;
      font-weight: 700;
      font-family: "Source Sans 3", serif;
      font-size: 25px;
      font-style: normal;
      position: absolute;
      top: 45vh;
      left: 60rem;
    }
    #stuBatchCode {
      color: #6f8ba4;
      font-weight: 700;
      font-family: "Source Sans 3", serif;
      font-size: 15px;
      font-style: normal;
      position: absolute;
      top: 50vh;
      left: 60rem;
    }
    #stuPhno {
      color: #20247b;
      font-weight: 700;
      font-family: "Source Sans 3", serif;
      font-size: 25px;
      font-style: normal;
      position: absolute;
      top: 55vh;
      left: 40rem;
    }
    #stuCourseEnrollment {
      color: #20247b;
      font-weight: 700;
      font-family: "Source Sans 3", serif;
      font-size: 25px;
      font-style: normal;
      position: absolute;
      top: 55vh;
      left: 60rem;
    }
    #stumobilenumber {
      color: #6f8ba4;
      font-weight: 700;
      font-family: "Source Sans 3", serif;
      font-size: 15px;
      font-style: normal;
      position: absolute;
      top: 60vh;
      left: 40rem;
    }
    #stuEnrollCode {
      color: #6f8ba4;
      font-weight: 700;
      font-family: "Source Sans 3", serif;
      font-size: 15px;
      font-style: normal;
      position: absolute;
      top: 60vh;
      left: 60rem;
    }
    body {
      font-family: "Source Sans 3", serif;
    }

    #aptechgdnlogo {
      margin-right: 20px;
      height: 100px;
      width: 300px;
    }
    .navbar {
      display: flex;
      align-items: center;
      background-color: white;
      height: 100px;
      padding: 0 20px;
    }

    .navbaritem {
      display: flex;
      align-items: center;
      margin-left: 40px;
    }

    .navbaritem ul {
      display: flex;
      gap: 20px;
      list-style: none;
    }

    .navbaritem ul li a {
      text-decoration: none;
      color: black;
      font-weight: 500;
    }

    .user-profile {
      margin-left: auto;
      background: #e6f0ff;
      padding: 10px;
      font-size: 14px;
      text-align: center;
      border-radius: 5px;
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
                    <li><a href="{{route('feedbackform')}}">Feedback</a></li>
                </ul>
            </div>
            <div class="user-profile">
          Mr.<br /><strong>MUHAMMAD DANIYAL</strong> <span>▼</span>
        </div>
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
        <p id="stumail">daniyal@gmail.com
        </p>
        <p id="stuBatch">Batch
        </p>
        <p id="stuBatchCode">2307a
        </p>
        <p id="stuPhno">Phone No
        </p>
        <p id="stumobilenumber">92 123456789
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