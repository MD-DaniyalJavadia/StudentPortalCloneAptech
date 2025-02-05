<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Doto:wght@100..900&display=swap" rel="stylesheet">
</head>
<style>
    body
    {
        background-color:black;
    }
    .container
    {
        display:flex;
        height:80vh;
        align-items:center;
        justify-content:center; 
    }
    #notfound
    {
    color:green;
    font-family: "Doto", sans-serif;
    font-optical-sizing: auto;
    font-weight: <weight>;
    font-style: normal;
    font-variation-settings:
    "ROND" 0;
    }
    #notfound:hover
    {
        color:red;
    }
    #notfound::selection
    {   

        background-color:red;
        color:yellow;
    }
</style>
<body>
    <div class="container">
        <!-- We Are Sorry But The Page Was Requested Was Not Found -->
        <h1 id="notfound">404 Not Found</h1>
    </div>
</body>
</html>