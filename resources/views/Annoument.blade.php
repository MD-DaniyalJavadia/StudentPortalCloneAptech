<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
    .navbar {
      display: flex;
      align-items: center;
      background-color: white;
      height: 100px;
      padding: 0 20px;
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
    .conatiner {
      display: flex;
      justify-content: center;
    }
    #AnnouncementHeading {
      font-family: "Source Sans 3", serif;
      font-size: 40px;
      font-weight: 500;
      font-style: normal;
    }
    .Seminar {
      height: 31px;
      border-top: 0px solid #f1f6f8;
      border-right: 1px solid #bacbe6;
      border-left: 1px solid #bacbe6;
      border-bottom: 0px solid #bacbe6;
      width: 124.562px;
      /* border: 1px solid black; */
      background-color: lightblue;
    }
    .title {
      height: 31px;
      border-top: 0px solid #f1f6f8;
      border-right: 1px solid #bacbe6;
      border-left: 1px solid #bacbe6;
      border-bottom: 0px solid #bacbe6;
      /* border: 1px solid black; */
      width: 252.281px;
      background-color: lightblue;
    }
    .text {
      height: 31px;
      border-top: 0px solid #f1f6f8;
      border-right: 1px solid #bacbe6;
      border-left: 1px solid #bacbe6;
      border-bottom: 0px solid #bacbe6;
      width: 738.156px;
      background-color: lightblue;
    }
    .SeminarImage {
      height: 53px;
      border-top: 0px solid #f1f6f8;
      border-right: 1px solid #bacbe6;
      border-left: 1px solid #bacbe6;
      border-bottom: 0px solid #bacbe6;
      width: 124.562px;
      /* border: 1px solid black; */
      background-color: #cfe2ff;
    }
    .titleContent {
      height: 53px;
      border-top: 0px solid #f1f6f8;
      border-right: 1px solid #bacbe6;
      border-left: 1px solid #bacbe6;
      border-bottom: 0px solid #bacbe6;
      /* border: 1px solid black; */
      width: 252.281px;
      background-color: #cfe2ff;
    }
    .textContent {
      height: 53px;
      border-top: 0px solid #f1f6f8;
      border-right: 1px solid #bacbe6;
      border-left: 1px solid #bacbe6;
      border-bottom: 0px solid #bacbe6;
      width: 738.156px;
      background-color: #cfe2ff;
    }
    .announmentdetailbox {
      display: flex;
      justify-content: center;
    }
    #boxcontent {
      display: flex;
      justify-content: center;
      font-family: "Source Sans 3", serif;
      font-size: 14px;
      font-weight: 700;
      padding-top: 8px;
    }
    #maincontent {
      display: flex;
      justify-content: center;
      font-family: "Source Sans 3", serif;
      font-size: 16px;
      padding-top: 10px;
    }
    #maincontentimg {
      display: flex;
      justify-content: center;
      padding-top: 8px;
      border-radius: 50%;
    }
    body {
      font-family: "Source Sans 3", serif;
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
                    <li><a href="">Feedback</a></li>
                </ul>
            </div>
        <div class="user-profile">
          Mr.<br /><strong>MUHAMMAD DANIYAL</strong> <span>▼</span>
        </div>
        </div>
    </nav>
<div class="conatiner">
    <h1 id="AnnouncementHeading">
        Announcement
    </h1>
</div>
<div class="announmentdetailbox">
    <div class="Seminar">
        <div id="boxcontent">
            Seminar Image
        </div> 
    </div>
    <div  class="text">
        <div id="boxcontent">
            Text
            </div> 
    </div>
    <div class="title">
        <div id="boxcontent">
            Title
        </div> 
    </div>
</div>

<div class="announmentdetailbox">
    <div class="SeminarImage">
        <div id="maincontentimg">
            <img style="border-radius: 50%;" src="{{asset('loginAssets/assets/img/favicon-aan.png')}}" alt="">
        </div> 
    </div>
    <div  class="textContent">
        <div  id="maincontent">
            Cash Prize Distribution for Talent Hunt Winners on Seminar Day
            </div> 
    </div>
    <div class="titleContent">
        <div id="maincontent">
            Talent Hunt - Prize Distribution
        </div> 
    </div>
</div>
<div class="announmentdetailbox">
    <div style="background-color: lightblue;" class="SeminarImage">
        <div  id="maincontentimg">
            <img style="border-radius: 50%;" src="{{asset('loginAssets/assets/img/favicon-aan.png')}}" alt="">
        </div> 
    </div>
    <div  style="background-color: lightblue;" class="textContent">
        <div id="maincontent">
            Batch Orientation scheduled by Tanzeel Batch Commencement Date: 24-Feb-2022 Faculty: Niha
            </div> 
    </div>
    <div style="background-color: lightblue;" class="titleContent">
        <div id="maincontent">
            Orientation- 2202B
        </div> 
    </div>
</div>

<div class="announmentdetailbox">
    <div class="SeminarImage">
        <div id="maincontentimg">
            <img style="border-radius: 50%;" src="{{asset('loginAssets/assets/img/favicon-aan.png')}}" alt="">
        </div> 
    </div>
    <div  class="textContent">
        <div  id="maincontent">
            Convocation at Marriott for 2020-2021 passouts
            </div> 
    </div>
    <div class="titleContent">
        <div id="maincontent">
            Convocation - 2021-2022
        </div> 
    </div>
</div>
<div class="announmentdetailbox">
    <div style="background-color: lightblue;" class="SeminarImage">
        <div  id="maincontentimg">
            <img style="border-radius: 50%;" src="{{asset('loginAssets/assets/img/favicon-aan.png')}}" alt="">
        </div> 
    </div>
    <div  style="background-color: lightblue;" class="textContent">
        <div id="maincontent">
            Recruitment Drive for Bahria University students scheduled
            </div> 
    </div>
    <div style="background-color: lightblue;" class="titleContent">
        <div id="maincontent">
            University Recruitment Drive
        </div> 
    </div>
</div>

<div class="announmentdetailbox">
    <div class="SeminarImage">
        <div id="maincontentimg">
            <img style="border-radius: 50%;" src="{{asset('loginAssets/assets/img/favicon-aan.png')}}" alt="">
        </div> 
    </div>
    <div  class="textContent">
        <div  id="maincontent">
            Academic audit by FSO
            </div> 
    </div>
    <div class="titleContent">
        <div id="maincontent">
            Academic Audit
        </div> 
    </div>
</div>

<div class="announmentdetailbox">
    <div style="background-color: lightblue;" class="SeminarImage">
        <div id="maincontentimg">
            <img style="border-radius: 50%;" src="{{asset('loginAssets/assets/img/favicon-aan.png')}}" alt="">
        </div> 
    </div>
    <div  style="background-color: lightblue;" class="textContent">
        <div  id="maincontent">
            Technical Seminar scheduled on "Personal Assistant Using Python"
            </div> 
    </div>
    <div style="background-color: lightblue;" class="titleContent">
        <div id="maincontent">
            Technical Seminar
        </div> 
    </div>
</div>

</body>
</html>