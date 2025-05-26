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
        margin: 0;
        font-family: "Source Sans 3", serif;

    }

    .container {
        margin-top: 2rem;
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }

    .card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin-bottom: 20px;
        width: 300px;
        height: 400px;
        text-align: center;
    }

    .card h2 {
        color: #333;
    }

    .card p {
        margin: 10px 0;
    }


    #aptechgdnlogo {
        margin-right: 20px;
        height: 100px;
        width: 300px;
    }

    .detialsSection {
        margin-top: 60px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .detailsBox {
        height: 400px;
        border-radius: 2px;
        width: 1283px;
        display: flex;
        margin-bottom: 100px;
        justify-content: center;
        align-items: center;
        background-color: white;
    }

    .detiailstable {
        position: absolute;
        top: 45rem;
    }

    .table {
        display: flex;
        /* margin-left: 500px; */
        margin-top: 0px;
        justify-content: center;
        align-items: center;
    }

    .table2 {
        display: flex;
        /* margin-left: 500px; */
        /* margin-top: 30px; */
        justify-content: center;
        align-items: center;
    }

    .box1 {
        padding: 0px 0px 0px 8px;
        border: 1px solid #BACBE6;
        display: flex;
        /* background-color: lightblue; */
        height: 33px;
        width: 174.469px;
    }

    .box2 {

        border: 1px solid #BACBE6;
        padding: 0px 0px 0px 8px;
        /* background-color:lightblue; */
        height: 33px;
        width: 982.156px;

    }

    .box3 {

        padding: 0px 0px 0px 8px;
        border: 1px solid #BACBE6;
        /* background-color: lightblue; */
        height: 33px;
        width: 65.375px;

    }
    #Announcementtag{
        list-style: none;
        text-decoration:none;
    }

    #attendanceAnchortag {
        list-style: none;
        text-decoration: none;
    }

    #ExamAnchortag {
        list-style: none;
        text-decoration: none;
    }

    #PFStuhead {
        font-family: "Source Sans 3", serif;
        font-size: 40px;
        font-weight: 500;
        font-style: normal;

    }

    #boldheading {
        font-family: "Source Sans 3", serif;
        font-size: 14px;
        font-weight: 700;
        font-style: normal;

    }

    #boldletter {
        font-family: "Source Sans 3", serif;
        font-size: 16px;
        font-style: normal;

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
    #noExamBtn{
          margin-top: 15px;
  padding: 10px 20px;
  background-color: #4bd6cc;
  color: #000;
  border: none;
  border-radius: 6px;
  font-size: 16px;
  cursor: not-allowed;
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
                Mr.<br /><strong>{{ session('userName') }}</strong> <span>▼</span>
            </div>
        </div>
    </nav>
    <div class="container">
        <a id="attendanceAnchortag" href="{{route('attendence.page')}}">
        <div class="card">
            <img src="{{asset('loginAssets/assets/img/attendance.jpg')}}" height="100px" width="100px"  alt="Attendance Icon">
            <h2 style= color:#1E53E0>Attendance </h2>
               <h2 style= color:#1E53E0> Schedule</h2>
            <p style="color:black;"><strong style="color:#1E53E0;">Student Id:</strong> Student1497658</p>
            <p style="color:black;"><strong style="color:#1E53E0;">Classes Held:</strong> 14</p>
            <p style="color:black;"><strong style="color:#1E53E0;">Classes Attended:</strong> 14</p>
            <p style="color:black;"><strong style="color:#1E53E0;">Month:</strong> April'2024</p>
        </a>
    </div>
        <div class="card">
        <a id="Announcementtag" href="{{route('annoument.page')}}">
            <img src="{{asset('loginAssets/assets/img/seminar.jpg')}}" height="100px" width="100px" alt="Announcement Icon">
            <h2 style= color:#1E53E0>Announcement Schedule</h2>
            <p style="color:black;"><strong style= color:#1E53E0>Subject:</strong> Cash Prize Distribution for Talent Hunt Winners</p>
            <p style="color:black;"><strong style= color:#1E53E0>Semester:</strong> Talent Hunt - Prize Distribution</p>
        </div>

        <div class="card">
            <a id="ExamAnchortag" href="{{route('exam.page')}}">
            <img src="{{asset('loginAssets/assets/img/exam.png')}}"  height="100px" width="100px" alt="Exam Icon">
            <h2 style= color:#1E53E0>Exam Schedule</h2>
            <p style="color:black;"><strong style="color: #1E53E0;">Semester:</strong>4</p>
            <p style="color:black;"><strong style="color:#1E53E0;">Student Id:</strong> Student1497658</p>
            <!-- <p style="color:black;"><strong style="color:#1E53E0;">Exam Date:</strong> 2024-10-05</p> -->
            <p style="color:black;"><strong style="color:#1E53E0;">Batch Name:</strong> 2307A</p>
            <p><button id='noExamBtn'>No Exam Availale</button></p>

        </a>
        </div>

        <div class="card">
            <img src="{{asset('loginAssets/assets/img/jobs.jpg')}}" height="100px" width="100px" alt="Jobs Icon">
            <h2 style= color:#1E53E0>Jobs Schedule</h2>
            <p><strong style= color:#1E53E0>Gender:</strong> Any</p>
            <p><strong style= color:#1E53E0>Job Post Date:</strong> 2021-08-20</p>
            <p><strong style= color:#1E53E0>Job Closing Date:</strong> 2021-08-23</p>
            <p><strong style= color:#1E53E0>Job Location:</strong> Clifton</p>
            <p><strong style= color:#1E53E0>Job Nature:</strong> Morning</p>
        </div>
    </div>
    <div class="detialsSection">
        <div class="detailsBox">
                <h1 id="PFStuhead" style="top:41rem; position: absolute;">Point For Student</h1>
            <div class="detiailstable">
                <div class="table">
                    <div  style="background-color: lightblue;" class="box1">
                        <p id="boldheading" style="margin-top:10px;"><strong>All modulars</strong></p>
                    </div>
                    <div style="background-color: lightblue;" class="box2">
                        <p  id="boldletter" style="margin-top:10px;">If a student get above 60% in all modular and practical he will earn 150 point</p>
                    </div>
                    <div style="background-color: lightblue;" class="box3">
                        <p  id="boldletter" style="margin-top:10px;">150</p>
        
                    </div>
                </div>
                <div style="background-color: #cfe2ff;" class="table">
                    <div class="box1">
                        <p id="boldheading" style="margin-top:10px;"><strong>Attendance</strong></p>
                    </div>
                    <div class="box2">
                        <p  id="boldletter" style="margin-top:10px;">100% monthly attendance will get 20 point</p>
                    </div>
                    <div class="box3">
                        <p  id="boldletter" style="margin-top:10px;">20</p>
        
                    </div>
                </div>
                <div style="background-color:lightblue;" class="table">
                    <div class="box1">
                        <p id="boldheading" style="margin-top:10px;"><strong>SOM</strong></p>
                    </div>
                    <div class="box2">
                        <p id="boldheading" style="margin-top:10px;"></p>
                    </div>
                    <div class="box3">
                        <p  id="boldletter" style="margin-top:10px;">100</p>
        
                    </div>
                </div>
                <div style="background-color: #cfe2ff;" class="table">
                    <div class="box1">
                        <p id="boldheading" style="margin-top:10px;"><strong>POM</strong></p>
                    </div>
                    <div class="box2">
                        <p id="boldletter" style="margin-top:10px;">100 points will be divided i alll group members</p>
                    </div>
                    <div class="box3">
                        <p id="boldletter" style="margin-top:10px;">100</p>
        
                    </div>
                </div>
                <div style="background-color:lightblue;" class="table">
                    <div class="box1">
                        <p id="boldheading" style="margin-top:10px;"><strong>Late Coming	</strong></p>
                    </div>
                    <div class="box2">
                        <p id="boldletter" style="margin-top:10px;">0 late coming student will get 30 points</p>
                    </div>
                    <div class="box3">
                        <p  id="boldletter" style="margin-top:10px;">100</p>
        
                    </div>
                </div>
                <div style="background-color: #cfe2ff;" class="table">
                    <div class="box1">
                        <p id="boldheading" style="margin-top:10px;"><strong>Term End</strong></p>
                    </div>
                    <div class="box2">
                        <p  id="boldletter" style="margin-top:10px;">on gain abouve 60% 30 points above 70% points above 80% 70 points above 05 100 points</p>
                    </div>
                    <div class="box3">
                        <p  id="boldletter" style="margin-top:10px;">30</p>
        
                    </div>
                </div>
                <div style="background-color:lightblue;" class="table">
                    <div class="box1">
                        <p id="boldheading" style="margin-top:10px;"><strong>Extra Activities</strong></p>
                    </div>
                    <div class="box2">
                        <p  id="boldletter" style="margin-top:10px;">50 point will added for extra activities</p>
                    </div>
                    <div class="box3">
                        <p  id="boldletter" style="margin-top:10px;">100</p>
        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>