<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Complains</title>
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

    #aptechgdnlogo {
      margin-right: 20px;
      height: 100px;
      width: 300px;
    }
    .registerLabComplains {
      margin-top: 10px;
      display: flex;
      justify-content: center;
    }

    .labsbox1 {
      margin-top: 25px;
      display: flex;
      margin-left: 100px;
      align-items: center;
    }

    .labsbox2 {
      display: flex;
      margin-left: 100px;
      align-items: center;
    }
    .lab1 {
      border-radius: 20px;
      border: 2px solid white;
      height: 170px;
      width: 300px;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #0ddbb9;
    }
    .lab2 {
      border-radius: 20px;
      border: 2px solid white;
      height: 170px;
      width: 300px;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #0ddbb9;
    }
    .lab3 {
      height: 170px;
      border-radius: 20px;
      border: 2px solid white;
      width: 300px;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #0ddbb9;
    }
    .lab4 {
      height: 170px;
      border-radius: 20px;
      border: 2px solid white;
      display: flex;
      justify-content: center;
      align-items: center;
      width: 300px;
      background-color: #0ddbb9;
    }

    #lab1Heading:hover {
      position: absolute;
      padding-right: 45px;
      transform: (-50%, -50%);
    }
    #lab2Heading:hover {
      position: absolute;
      padding-right: 45px;
      transform: (-50%, -50%);
    }
    #lab3Heading:hover {
      position: absolute;
      padding-right: 45px;
      transform: (-50%, -50%);
    }
    #lab4Heading:hover {
      position: absolute;
      padding-right: 45px;
      transform: (-50%, -50%);
    }

    #lab5Heading:hover {
      position: absolute;
      padding-right: 45px;
      transform: (-50%, -50%);
    }
    #lab6Heading:hover {
      position: absolute;
      padding-right: 45px;
      transform: (-50%, -50%);
    }
    #lab7Heading:hover {
      position: absolute;
      padding-right: 45px;
      transform: (-50%, -50%);
    }
    #lab8Heading:hover {
      position: absolute;
      padding-right: 45px;
      transition: ease-in;
      transform: (-50%, -50%);
    }

    .ComplainStatusSection {
      display: flex;
      justify-content: center;
      margin-top: 35px;
    }
    .table {
      display: flex;
      /* margin-left: 500px; */
      margin-top: 30px;
      justify-content: center;
      align-items: center;
    }
    .box1 {
      justify-content: center;
      display: flex;
      padding-top: 10px;
      background-color: #0ddbb9;
      height: 35px;
      width: 300px;
    }
    .box2 {
      justify-content: center;
      display: flex;
      padding-top: 10px;
      background-color: #0ddbb9;
      height: 35px;
      width: 300px;
      margin-left: 1px;
    }
    .box3 {
      justify-content: center;
      display: flex;
      padding-top: 10px;
      background-color: #0ddbb9;
      height: 35px;
      width: 300px;
      margin-left: 1px;
    }
    .box4 {
      justify-content: center;
      display: flex;
      padding-top: 10px;
      background-color: #0ddbb9;
      height: 35px;
      width: 100px;
      margin-left: 1px;
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
                    <li><a href="">Feedback</a></li>
                </ul>
            </div>
                 <div class="user-profile">
          Mr.<br /><strong>MUHAMMAD DANIYAL</strong> <span>▼</span>
        </div>
        </div>
    </nav>
    <div class="registerLabComplains">
        <strong style="color:#0ddbb9; font-size: 40px; font-family: -apple-system, BlinkMacSystemFont,"  >REGISTER LAB COMPLAINS</strong>
    </div>

        <div class="labsbox1">
            <div class="lab1">
                <h1 id="lab1Heading" style="color:white;">lab1</h1>
            </div>
            <div class="lab2">
                <h1 id="lab2Heading" style="color:white;">lab2</h1>
                
            </div>
            <div class="lab3">
                <h1 id="lab3Heading" style="color:white;">lab3</h1>
                
            </div>
            <div class="lab4">
                <h1 id="lab4Heading" style="color:white;">lab4</h1>
                
            </div>
            
        </div>

        <div class="labsbox2">
            <div class="lab1">
                <h1 id="lab5Heading" style="color:white;">lab6</h1>
                
            </div>
            <div class="lab2">
                <h1 id="lab6Heading" style="color:white;">lab7</h1>
                
            </div>
            <div class="lab3">
                <h1 id="lab7Heading" style="color:white;">lab8</h1>
                
            </div>
            <div class="lab4">
                <h1 id="lab8Heading" style="color:white;">lab9</h1>
                
            </div>
            
        </div>
        <div class="ComplainStatusSection">
            <div class="viewComplainsSection">
                <h1 style="color:#0ddbb9;" id="viewComplains">View Complains </h1>
            </div>
        </div>
        <div class="table" style="margin-bottom: 10px;">
            <div class="box1">
                <p style="color:white;">Complain_Category</p>
            </div>
            <div class="box2">
                <p style="color:white;">Complain_Description</p>
            </div>
            <div class="box3">
                <p style="color:white;">Date_Of_Complain</p>

            </div>
            <div class="box4">
                <p style="color:white;">Status</p>

            </div>
        </div>

            
</body>
</html>