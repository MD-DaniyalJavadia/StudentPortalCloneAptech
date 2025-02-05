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
        #usrNameBtn
        {
            display: none;

        }
       
        #usrLogout
        {
            display: none;
        }
       .SemesterOneHeading
       {
        display:flex;
        justify-content: center;
        height: 15vh;
        align-items: center;
       }
       #semester1heading
       {
        font-family: "Source Sans 3", serif;
        font-size:40px;
        font-weight: 500;
        font-style: normal;

        }
        .welcomeback
        {
            margin-left:12px;
            margin-top:24px;
        }
        .welcomeheading
        {
            font-family: "Source Sans 3", serif;
        /* font-size:40px; */
        font-size:20px;
        line-height: 20px;
        color: #212529;
        left: 12px;
        font-weight: 500;
        font-style: normal;

        }
        .welcomeTime
        {
            color: #272727;
        line-height: 20px;
        font-family: "Source Sans 3", serif;
        font-size:14px;
        font-weight: 500;
        font-style: normal;

        }
        .semseteroneModuleID
        {
            padding-left:15px;
            padding-top: 8px;
            height: 33px;
            width: 76.1094px;
            border: 1px solid #BACBE6;
            background-color: #cfe2ff;
        }
        .semseteronePoint
        {
            padding-left:15px;
            padding-top: 8px;
            height: 33px;
            width: 182px;
            border: 1px solid #BACBE6;
            background-color: #cfe2ff;
        }
        .semseteroneModuleMarks
        {    
            padding-left:15px;
            padding-top: 8px;
            border: 1px solid #BACBE6;
            height: 33px;
            width: 57px;
            background-color: #cfe2ff;
        }
    .examMarksBox
    {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .semseterone150ExtraPoint
    {
            border: 1px solid #BACBE6;
            height: 33px;
            width: 182px;
            padding-left:15px;
            padding-top: 8px;
            background-color: #cfe2ff;
    }
    .semseteroneModuleID2
        {
            padding-left:15px;
            padding-top: 8px;
            height: 33px;
            width: 76.1094px;
            border: 1px solid #BACBE6;
            background-color: #cfe2ff;
        }
        .semseteronePoint2
        {
            padding-left:15px;
            padding-top: 8px;
            height: 33px;
            width: 213px;
            border: 1px solid #BACBE6;
            background-color: #cfe2ff;
        }
        .semseteroneModuleMarks2
        {    
            padding-left:15px;
            padding-top: 8px;
            border: 1px solid #BACBE6;
            height: 33px;
            width: 67.125px;
            background-color: #cfe2ff;
        }
    .examMarksBox2
    {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .semseterone150ExtraPoint2
    {
            border: 1px solid #BACBE6;
            height: 33px;
            width: 213px;
            padding-left:15px;
            padding-top: 8px;
            background-color: #cfe2ff;
    }
    #footer
    {
        height: 50px;
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
    <div class="welcomeback">
        <div class="welcomeheading">
            Hi,welcome back!
        </div>
        <div class="welcomeTime">
            <p>Last Login 23 hours ago.View details</p>
        </div>
    </div>
    @foreach($examDetail as $examMarks)
    
    <div class="SemesterOneHeading">
    <h1 id="semester1heading">Semester {{ $loop->iteration }}</h1>
    </div>

        <div class="examMarksBox">
            <div class="semseteroneModuleID">
                ID
            </div>
            <div class="semseteroneModuleMarks">
                M1
            </div>
            <div class="semseteroneModuleMarks">
                M2
            </div>
            <div class="semseteroneModuleMarks">
                M3
            </div>
            <div class="semseteroneModuleMarks">
                M4
            </div>
            <div class="semseteroneModuleMarks">
                M5
            </div>
            <div class="semseteroneModuleMarks">
                M6
            </div>
            <div class="semseteroneModuleMarks">
                M7
            </div>
            <div class="semseteroneModuleMarks">
                R1
            </div>
            <div class="semseteroneModuleMarks">
                R2

            </div>
            <div class="semseteroneModuleMarks">
                R3
            </div>
            <div class="semseteroneModuleMarks">
                R4
            </div>
            <div class="semseteroneModuleMarks">
                R5
            </div>
            <div class="semseteroneModuleMarks">
                E1
            </div>
            <div class="semseteroneModuleMarks">
                Proj
            </div>
            <div class="semseteroneModuleMarks">
                Per
            </div>
            <div class="semseteronePoint">
                Point
            </div>
        </div>
        
        <div class="examMarksBox">
            <div class="semseteroneModuleID">
                {{$examMarks->studentId}}
            </div>
            <div class="semseteroneModuleMarks">
            {{$examMarks->M1}}
                
            </div>
            <div class="semseteroneModuleMarks">
            {{$examMarks->M2}}
                
            </div>
            <div class="semseteroneModuleMarks">
            {{$examMarks->M3}}
                
            </div>
            <div class="semseteroneModuleMarks">
            {{$examMarks->M4}}

        </div>
            <div class="semseteroneModuleMarks">
            {{$examMarks->M5}}
                
            </div>
            <div class="semseteroneModuleMarks">
            {{$examMarks->M6}}
                
            </div>
            <div class="semseteroneModuleMarks">
            {{$examMarks->M7}}
                
            </div>
            <div class="semseteroneModuleMarks">
            {{$examMarks->R1}}

            </div>
            <div class="semseteroneModuleMarks">
            {{$examMarks->R2}}
        
            </div>
            <div class="semseteroneModuleMarks">
            {{$examMarks->R3}}
            </div>
            <div class="semseteroneModuleMarks">
            {{$examMarks->R4}}
            </div>
            <div class="semseteroneModuleMarks">
            {{$examMarks->R5}}
            </div>
            <div class="semseteroneModuleMarks">
            {{$examMarks->E1}}
            </div>
            <div class="semseteroneModuleMarks">
            {{$examMarks->Proj}}

            </div>
            <div class="semseteroneModuleMarks">
            {{$examMarks->Percentage}}
            
            </div>
            <div class="semseterone150ExtraPoint">
            {{$examMarks->ExtraPoint}}

        </div>
    </div>
    
</div>
@endforeach
    

<div id="footer">

</div>

</body>
</html>