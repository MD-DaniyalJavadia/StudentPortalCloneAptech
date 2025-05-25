<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    .navbaritem {
      background-color: white;
      justify-content: center;
      display: flex;
      height: 100px;
      align-items: center;
    }
    .navbaritem ul li {
      display: inline-block;
      margin: 10px;
    }
    .navbaritem ul li a {
      list-style: none;
      text-decoration: none;
      color: black;
    }

    body {
      font-family: sans-serif;
      margin: 0;
    }

    #aptechgdnlogo {
      margin-right: 20px;
      height: 100px;
      width: 300px;
    }

    .user-profile {
      margin-left: auto;
      background: #e6f0ff;
      padding: 10px;
      font-size: 14px;
      text-align: center;
      border-radius: 5px;
    }

    .attendancetableHeading {
      justify-content: center;
      align-items: center;
      display: flex;
    }
    #usrNameBtn {
      display: none;
    }

    #usrLogout {
      display: none;
    }
    .studentid {
      background-color: lightblue;
      height: 31px;
      padding-left: 15px;
      padding-top: 8px;
      width: 195px;
      /* border: 1px solid lightgrey; */
      border: 1px solid lightgray;
    }
    .extraPoint {
      background-color: lightblue;
      height: 31px;
      padding-left: 15px;
      padding-top: 8px;
      border: 1px solid lightgray;

      width: 195px;
    }
    .monthlyPercntage {
      background-color: lightblue;
      padding-left: 15px;
      padding-top: 8px;
      border: 1px solid lightgray;
      height: 31px;
      font-family: "Source Sans 3", serif;
      font-size: 40px;
      font-weight: 500;
      font-style: normal;

      width: 195px;
    }
    .classesattended {
      background-color: lightblue;
      height: 31px;
      border: 1px solid lightgray;
      padding-left: 15px;
      padding-top: 8px;
      width: 195px;
    }
    .attendenceMonth {
      background-color: lightblue;
      height: 31px;
      padding-left: 15px;
      padding-top: 8px;
      width: 195px;
      border: 1px solid lightgray;
    }
    .classheld {
      background-color: lightblue;
      height: 31px;
      width: 195px;
      padding-left: 15px;
      padding-top: 8px;
      border: 1px solid lightgray;
    }
    .col-lg-1 {
      display: flex;
      justify-content: center;
    }
    .studentidDetail {
      background-color: #cfe2ff;
      height: 31px;
      padding-left: 15px;
      padding-top: 8px;
      width: 195px;
      /* border: 1px solid lightgrey; */
      border: 1px solid lightgray;
    }
    .extraPointDetail {
      background-color: #cfe2ff;
      height: 31px;
      padding-left: 15px;
      padding-top: 8px;
      border: 1px solid lightgray;

      width: 195px;
    }
    .monthlyPercntageDetail {
      background-color: #cfe2ff;
      padding-left: 15px;
      padding-top: 8px;
      border: 1px solid lightgray;
      height: 31px;
      font-family: "Source Sans 3", serif;
      font-size: 40px;
      font-weight: 500;
      font-style: normal;

      width: 195px;
    }
    .classesattendedDetail {
      background-color: #cfe2ff;
      height: 31px;
      border: 1px solid lightgray;
      padding-left: 15px;
      padding-top: 8px;
      width: 195px;
    }
    .attendenceMonthDetail {
      background-color: #cfe2ff;
      height: 31px;
      padding-left: 15px;
      padding-top: 8px;
      width: 195px;
      border: 1px solid lightgray;
    }
    .classheldDetail {
      background-color: #cfe2ff;
      height: 31px;
      width: 195px;
      padding-left: 15px;
      padding-top: 8px;
      border: 1px solid lightgray;
    }
    .col-lg-1 {
      display: flex;
      justify-content: center;
    }
    #boldheading {
      font-family: "Source Sans 3", serif;
      font-size: 14px;
      font-weight: 700;
      font-style: normal;
    }
    body {
      font-family: "Source Sans 3", serif;
    }
    .navbar {
      display: flex;
      align-items: center;
      background-color: white;
      height: 100px;
      padding: 0 20px;
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
            <div class="user-profile">
          Mr.<br /><strong>MUHAMMAD DANIYAL</strong> <span>▼</span>
        </div>
        </div>
    </nav>
    <div class="welcomeback">
        <div class="welcomeheading">
            Hi,welcome back!
        </div>
        <div class="welcomeTime">
            <p>Last Login 23 hours ago.View details</p>
        </div>
    </div>
    <div class="attendanceTable">
        <div class="attendancetableHeading">
            <h1 >Monthly Attendance</h1>
        </div>
    </div>

    
    <div style="margin-top:15px;" class="col-lg-1">
        <div class="studentid">
            <p id="boldheading">Student Id </p>
        </div>  

        <div id="boldheading" class="attendenceMonth">
            Attendance Month

        </div>  
        <div id="boldheading" class="classheld">
            Class Held
        </div>  
        <div id="boldheading" class="classesattended">
            Classes Attended
        </div>  
        <div id="boldheading"class="monthlyPercntage">
            Monthly Percentage
        </div>  
        <div id="boldheading" class="extraPoint">
            Extra Point
        </div>  
    </div>
         <!-- <p>$attendence = Attendence::orderBy('AttendanceMonth', 'desc')->get();</p> -->

        @foreach($attendence as $atten)
        
    <div class="col-lg-1">
        <div class="studentidDetail">
        <p id="boldheading">{{$atten->StudentId}}</p>
    </div>  

        <div id="boldheading" class="attendenceMonthDetail">
           <p id="boldheading"> {{$atten->AttendanceMonth}}</p>

        </div>  
        <div id="boldheading" class="classheldDetail">
           <p id="boldheading"> {{$atten->classesHeld}}</p>

        </div>  
        <div id="boldheading" class="classesattendedDetail">
           <p id="boldheading"> {{$atten->classesAttended}}</p>

        </div> 
        <div id="boldheading"class="monthlyPercntageDetail">
           <p id="boldheading"> {{$atten->MonthlyPercntage}}</p>

        </div>  
        <div id="boldheading" class="extraPointDetail">
           <p id="boldheading"> {{$atten->ExtraPoint}}</p>

        </div>  

    </div>
    @endforeach    

    

</body>
<script>

    
</script>
</html>