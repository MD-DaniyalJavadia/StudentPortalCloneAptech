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
    #fabricasoftwareimg
    {
        height: 560px;
        width: 648px;
        top:100px;
        position: absolute;
}
.conatiner
{
    display: flex;
    justify-content: center;
}
.box
{

    position: absolute;
    left: 50%;
    top:50px;
    height: 700px;
    width: 650px;
    border:2px solid black;
}
#emailimg
{
    top:120px;
    left: 180px;
    height: 100px;
    position: absolute;
}
#EmailAddress
{
    font-family: "Source Sans 3", serif;
        font-size:20px;
        font-weight: 700;
        font-style: normal;
        position: absolute;
        /* top:100px; */
        left: 40px;
}
#inputEmail

{
    border-radius: 50px;
    height: 50px;
    position: absolute;
    top:330px;
    width: 390px;
}
#fPbtn
{
    background-color: #f7b205;
    border-radius: 20px;
    position: absolute;
    top:400px;
    left: 75px;
    width: 250px;
    height: 50px;
    color: white;
}
</style>
<body style="background-color:#d3d3d3;">
    <img id="fabricasoftwareimg" src="{{asset('loginAssets/assets/img/fabricasoftware.png')}}" alt="">
    <div class="conatiner">
        <div class="box">
            <div id="emailimg">
                <img src="{{asset('loginAssets/assets/img/low-code-guide-pro-dev.webp')}}" width="300px" alt="">
                <div class="emailaddres">
                    <p id="EmailAddress" style="color:#f7b205;">Please Provide Email Address</p>
                </div>
                <input id="inputEmail" type="text">
                <div class="btn">
                    <button id="fPbtn">Forget Password</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>