<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student Data</title>
    
    <style>
        body {
            background-color: #fff2ba;
        }

    </style>
</head>
<body>

        
<center>
    <form method="post" action="/update_process/ <?php echo $student[0] -> id; ?>">
    @csrf
  
    <div style="padding-bottom:5px;">
    <h2>Student Data</h2>
    </div>
    <input type="hidden" name="studID" class="txtField" value="<?php echo $student[0]->id; ?>">
    <br>
    Last Name: <br>
    <input type="text" name="lastName" class="txtField" value="<?php echo $student[0]->lastName; ?>">
    <br>
    First Name:<br>
    <input type="text" name="firstName" class="txtField" value="<?php echo $student[0]->firstName; ?>">
    <br>
    Middle Inital:<br>
    <input type="text" name="MI" class="txtField" value="<?php echo $student[0]->MI; ?>">
    <br>
    Course:<br>
    <input type="text" name="course" class="txtField" value="<?php echo $student[0]->course; ?>">
    <br>
    Yearlevel:<br>
    <input type="text" name="yearlevel" class="txtField" value="<?php echo $student[0]->yearlevel; ?>"
    <br>
    <br>
    <br>
    <input type="submit" name="submit" value="Update Student" class="buttom">
    <br>
    <br>
    
    </form>
    
    <a href="/User_homepage"><input type="button" value="Back to Records"></a>

</center>
</body>
</html>
