<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Page</title>

    <style>
        body {
            background-image: url('bg.jpg');
        }

        .container {
            overflow: hidden;
        }

        .registration {
            margin:auto;
            margin-top: 30px;
            background-color: #96ceff;
            border: 3px solid rgb(42, 81, 255);
            border-radius: 5px;
            width:50%;
            height: 400px;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
        }

        td {
            padding: 5px;
            padding-bottom: 10px;
        }

        input[type=submit] {
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
            transition: 0.3s;
            margin-top: 40px;
        }

        input[type=button]:hover {
             box-shadow: 2px 3px 10px 5px rgba(0,0,0,0.2);
        }

        h2 {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            padding-bottom: 30px;
        }

    </style>
</head>

<body>

    <div class="container">
        <div class="registration">
            <h2 style="text-align:center; margin-bottom:50px">Registration Page</h2>
            <div class="forms" style="margin-top:20px">
                    <center>
                    <form action="/" method="POST">	
                        @csrf
                        <table>
                        <tr>
                            <td><label for="id">Student ID: </label></td>
                            <td><input type ="text" name="id" placeholder="Student ID"></td>
                        </tr><tr>
            
                            <td><label for="firstName">First Name: </label></td>
                            <td><input type ="text" name="firstName" placeholder="First Name"></td>
            
                            <td><label for="lastName">Last Name:</label></td>
                            <td><input type ="text" name="lastName" placeholder="Last Name"></td>
            
                            <td><label for="MI">Middle Initial:</label></td>
                            <td><input type ="text" name="MI" placeholder="Middle Initial"></td>
                        </tr><tr>
            
                            <td><label for="course">Course: </label></td>
                            <td><input type ="text" name="course" placeholder="Course"></td>
            
                            <td><label for="yearLevel">Year Level:</label></td>
                            <td><input type ="text" name="yearLevel" placeholder="Year Level"></td>
                        </tr><tr>
                            <td colspan="4">
                            <button type ="submit"> Register </button>
                            </td>
                        </tr>
                        </table>
                    </form>
                    </center>
            </div>
        </div>
    </div>

</body>
</html>