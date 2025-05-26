<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Feedback Form</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <style>
    body {
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      background: #f1f1f1;
      margin: 0;
      padding: 0;
    }

    .topbar {
      display: flex;
      align-items: center;
      background: #fff;
      padding: 10px 20px;
      justify-content: space-between;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .logo-header {
      width: 150px;
    }

    .topbar nav a {
      margin: 0 10px;
      text-decoration: none;
      color: #333;
      font-size: 14px;
    }

    .user-profile {
      background: #e6f0ff;
      padding: 10px;
      font-size: 14px;
      text-align: center;
      border-radius: 5px;
    }

    .container {
      max-width: 900px;
      background: white;
      padding: 30px;
      margin: 30px auto;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
    }

    .header {
      text-align: center;
    }

    .logo {
      width: 150px;
    }

    .intro {
      font-size: 14px;
      margin: 20px 0;
    }

    .info-section {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 10px 20px;
      margin-bottom: 20px;
    }

    .info-section label {
      font-weight: bold;
    }

    .info-section input {
      padding: 5px;
      width: 100%;
    }

    h3 {
      margin-top: 30px;
      font-size: 16px;
      color: #222;
    }

    .form-grid {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    .question-box {
      flex: 1 1 43%;
      border: 1px solid #ccc;
      padding: 15px;
      border-radius: 5px;
      background: #f9f9f9;
    }

    .question-box p {
      font-weight: bold;
      font-size: 14px;
    }

    textarea {
      width: 100%;
      margin-top: 5px;
      padding: 5px;
      resize: vertical;
    }

    .remarks {
      margin-top: 20px;
    }

    .submit-button {
      text-align: center;
      margin-top: 20px;
    }

    .submit-button button {
      padding: 10px 25px;
      background: #2ee5b3;
      border: none;
      border-radius: 5px;
      color: white;
      font-size: 16px;
      cursor: pointer;
    }

    .submit-button button:hover {
      background: #26c29f;
    }
        #aptechgdnlogo {
      margin-right: 20px;
      height: 100px;
      width: 300px;
    }

  </style>
  <body>
    <header class="topbar">
      <img src="{{asset('loginAssets/assets/img/LOGO-dashboard.png')}}" alt="Aptech Logo" id="aptechgdnlogo" />
      <nav>
        <ul>
     <a href="{{route('dashboardWala.page')}}">Dashboard</a>
                    <a href="{{route('profile.page')}}">Profile</a>
                    <a href="{{route('register_complains')}}">Register Complains</a>
                    <a href="{{route('exam.page')}}">Exam</a>
                    <a href="{{route('attendence.page')}}">Attendance</a>
                    <a href="{{route('annoument.page')}}">Annoument</a>
                    <a href="{{route('feedbackform')}}">Feedback</a>
          </ul>
      </nav>
      <div class="user-profile">
        Mr.<br /><strong>MUHAMMAD DANIYAL</strong> <span>▼</span>
      </div>
    </header>

    <div class="container">
      <div class="header">
        <img src="{{asset('loginAssets/assets/img/LOGO-dashboard.png')}}" alt="Aptech Logo" id="aptechgdnlogo" />
        <h1>Student FeedBack Form</h1>
      </div>
      <p class="intro">
        We take this opportunity to understand your views and experience of
        undergoing our course at our center. It will definitely facilitate us to
        improve our services towards further enhancement leading to betterment
        in your learning experience.
      </p>

      <div class="info-section">
        <label>Month</label>
        <input type="text" value="April" />

        <label>Faculty & Batch</label>
        <input type="text" value="Tazeen Anis/2307A" />

        <label>Subject</label>
        <input type="text" value="Application Development" />

        <label>Std .Name & ID</label>
        <input type="text" value="Mr. MUHAMMAD  DANIYAL /Student1497658" />
      </div>

      <h3>✓ Tick the phrase, which best suits faculty</h3>

      <div class="form-grid">
        <div class="question-box">
          <p>1. (Punctuality) Do classes start and end on time?</p>
          <label><input type="radio" name="q1" /> Every Class</label><br />
          <label><input type="radio" name="q1" /> Most of the Classes</label
          ><br />
          <label><input type="radio" name="q1" /> Rarely</label><br />
          <label><input type="radio" name="q1" /> Never</label>
        </div>

        <div class="question-box">
          <p>
            2. (Course Coverage) For all the chapters covered to date; has the
            faculty covered all topics?
          </p>
          <label><input type="radio" name="q2" /> Yes</label><br />
          <label
            ><input type="radio" name="q2" /> No, specify the topics
            missed:</label
          >
          <textarea rows="2"></textarea>
        </div>

        <div class="question-box">
          <p>
            3. (Technical Support) Does faculty guide you during your lab
            exercise?
          </p>
          <label><input type="radio" name="q3" /> Excellent</label><br />
          <label><input type="radio" name="q3" /> Good</label><br />
          <label><input type="radio" name="q3" /> Average</label><br />
          <label><input type="radio" name="q3" /> Fair</label>
        </div>

        <div class="question-box">
          <p>
            4. (Clearing Doubts) Does faculty teach concepts clearly and answer
            your questions?
          </p>
          <label><input type="radio" name="q4" /> Excellent</label><br />
          <label><input type="radio" name="q4" /> Good</label><br />
          <label><input type="radio" name="q4" /> Average</label><br />
          <label><input type="radio" name="q4" /> Fair</label>
        </div>

        <div class="question-box">
          <p>
            5. (Exams & Assignments) Are exams & assignments taken on a monthly
            basis and timely feedback provided?
          </p>
          <label><input type="radio" name="q5" /> Yes</label><br />
          <label
            ><input type="radio" name="q5" /> No, specify the topics
            missed:</label
          >
          <textarea rows="2"></textarea>
        </div>

        <div class="question-box">
          <p>6. (Book Utilization) Are books utilized during class?</p>
          <label><input type="radio" name="q6" /> Every Class</label><br />
          <label><input type="radio" name="q6" /> Most of the Classes</label
          ><br />
          <label><input type="radio" name="q6" /> Rarely</label><br />
          <label><input type="radio" name="q6" /> Never</label>
        </div>

        <div class="question-box">
          <p>
            7. Student Appraisal Reports are delivered to you or your guardian
            via SMS monthly?
          </p>
          <label><input type="radio" name="q7" /> Yes</label><br />
          <label><input type="radio" name="q7" /> No, specify the Issue:</label>
          <textarea rows="2"></textarea>
        </div>

        <div class="question-box">
          <p>
            8. (Computer Uptime) Are complaints regarding system/software
            handled within a reasonable timeframe?
          </p>
          <label
            ><input type="radio" name="q8" /> No Issues in Computer
            System/Software</label
          ><br />
          <label
            ><input type="radio" name="q8" /> Issues reported & resolved in
            reasonable time</label
          ><br />
          <label
            ><input type="radio" name="q8" /> Issue resolution is delayed</label
          ><br />
          <label
            ><input type="radio" name="q8" /> Not resolved, specify the
            Issue</label
          >
          <textarea rows="2"></textarea>
        </div>
      </div>

      <div class="remarks">
        <label
          ><strong>For Remarks:</strong> (Suggestions for improvement)</label
        >
        <textarea rows="4"></textarea>
      </div>

      <div class="submit-button">
        <button type="submit">Submit</button>
      </div>
    </div>
  </body>
</html>
