<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Feedback Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.feedback-form {
    background-color: #fff;
    max-width: 600px;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1, h2, h3 {
    text-align: center;
}

label {
    display: block;
    margin-top: 10px;
}

input[type="text"], input[type="radio"] {
    display: block;
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

button {
    display: block;
    width: 100%;
    padding: 10px;
    margin-top: 20px;
    background-color: #0073e6;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #005bb5;
}

</style>
<body>
    <div class="feedback-form">
        <h1>Aptech LEARNING</h1>
        <h2>Unleash your potential</h2>
        <h3>Student Feedback Form</h3>
        <p>We take this opportunity to understand your views and experience of undergoing our course at our center. It will definitely facilitate us to improve our services towards further enhancement leading to betterment in your learning experience.</p>
        
        <form>
            <label for="month">Month</label>
            <input type="text" id="month" name="month">
            
            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject">

            <label for="faculty">Faculty & Batch</label>
            <input type="text" id="faculty" name="faculty">
            
            <label for="student-name">Student Name & ID</label>
            <input type="text" id="student-name" name="student-name">
            
            <h4>Punctuality</h4>
            <p>Do classes start and end on time?</p>
            <input type="radio" id="every-class" name="punctuality" value="Every Class">
            <label for="every-class">Every Class</label><br>
            <input type="radio" id="most-classes" name="punctuality" value="Most of the Classes">
            <label for="most-classes">Most of the Classes</label><br>
            <input type="radio" id="rarely" name="punctuality" value="Rarely">
            <label for="rarely">Rarely</label>

            <h4>Course Coverage</h4>
            <p>For all the chapters covered to date; has the faculty covered all topics?</p>
            <input type="radio" id="yes" name="course-coverage" value="Yes">
            <label for="yes">Yes</label><br>
            <input type="radio" id="no" name="course-coverage" value="No">
            <label for="no">No, specify the topics missed:</label>
            <input type="text" id="topics-missed" name="topics-missed">
            
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
