<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login form</title>

    <link rel="stylesheet" type="text/css" href="style.css">
    
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body background="loginbg.jpg" class="body_deg">
     
        <div class="form1">

            <center class="title_deg">
                Login Form
            </center>

            <form class="login_form">
                <div>
                    <label class="label1">Username</label>
                    <input type="text" name="username">
                </div>

                <div>
                    <label class="label1">Password</label>
                    <input type="Password" name="password">
                </div>

                <div>
                    <input class="btn btn-primary" type="Submit" name="submit" value="Login">
                </div>
            </form>
        </div>
    
</body>
</html>