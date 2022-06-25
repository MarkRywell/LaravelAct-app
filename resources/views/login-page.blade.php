<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Main Page</title>

    <style>
    html, body {
        background-image: url('/images/bg.jpg');
    }
    .container{
        overflow: hidden;
    }
    .userpage {
        position: absolute;
        background-color: #96ceff;
        border: 3px solid rgb(42, 81, 255);
        border-radius: 5px;
        width:20%;
        height: 40%;
        margin-top:3%;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        margin-left:40%;
    }
    .section_title{
        padding: 10px;
        padding:1%; 
        text-align: center;
        font-size: 30px; 
        font-weight: 700;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        border-bottom: 2px solid rgb(192, 192, 192);
    }
    .userpage-body{padding:5%;}

    .userpage:hover {
        box-shadow: 5px 8px 10px 5px rgba(0,0,0,0.2);
    }
    .highlight {
        font-weight: bold;
    }
    .forms {
        padding-left: 70px;
        font-weight: bold;
        font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif
    }
    input[type=button] {
        background-color: #04AA6D;
        width: 100px;
        border: none;
        color: white;
        padding: 10px;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        font-weight: bold;
        margin: 2px;
        cursor: pointer;
        border-radius: 8px;
        position: absolute;
        bottom: 50px;
        transition: 0.3s;
    }
    input[type=button]:hover {
        box-shadow: 2px 3px 10px 5px rgba(0,0,0,0.2);
    }

    .button1 {
        
        background-color: #4CAF50;
        width: 100px;
        border: none;
        color: white;
        padding: 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        font-weight: bold;
        margin: 2px;
        cursor: pointer;
        border-radius: 8px;
        position: absolute;
        bottom: 100px;
        transform: 0.5s;
    }
    .button1:hover {
        box-shadow: 2px 3px 10px 5px rgba(0,0,0,0.2);
    }
    h1 {
        padding-left: 50px;
        font-family:Arial, Helvetica, sans-serif
    }
    footer {
        position: absolute;
        bottom: 1px;
    }

    .mssg {
        text-align: center;
        position:absolute;
        left: 130px;
        bottom: 10px;
    }
    
    </style>
</head>
<body>
    <div class="container">
        <h1>Web PHP Main Page</h1>

        <div class='userpage'>

            <h2 class=section_title>User Login</h2><br>
                <div class=forms>

                    <form method="POST" action="{{ '/User_homepage' }}">  
                    @csrf
                        <label for="username">Username: </label>
                        <input type="text" id="username" name="username"><br><br>
                        <label for="password">Password: </label>
                        <input type="password" id="password" name="password"><br><br>
                        <button class="button1" id="login">Login</button>
                    </form>      
                        <a href="{{ url('register_page')}}"><input type='button' value='Register'></a>
                        
                        
                </div>
                <p class="mssg">{{ session('mssg') }}</p>
        </div>

        
    </div>

</body>

<footer>
    <p>Author: Mark Rywell G. Gaje</p>
    <p>BSIT - 2R5</p>
</footer>
</html>