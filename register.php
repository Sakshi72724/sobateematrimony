


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style type="text/css">
	#regiration_form fieldset:not(:first-of-type) {
		display: none;
	}
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
  </style>
  <title>PHPflow.com :  Multi step Form Using PHP,Bootstrap and jQuery</title>
</head>
<body background="loginbg.jpg" class="body_reg">
    <div class="form2">
        <center class="title_reg">Registration Form</center>
        <form id= "form1"class="Registration_form" action="action.php" method="POST">
            <fieldset>
            <h2 class="heading2">Step 1: Personal Details</h2>
            <div class="form-group">
            <label for="email" >Email address:</label>
            <input type ="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
            <label for="exampleInputPassword1" >Password:</label>
		    <input type="password" class="form-control" id="password" name= "password" placeholder="Password">    
            </div>
            <div>
            <label for="mobile no" class="label2">Mobile no:</label>
            <input type="text" name="Phone Number" pattern="[7-9]{1}[0-9]{9}" 
       title="Phone number with 7-9 and remaing 9 digit with 0-9">
            </div>
            <div>
            <label for="profile" class="label2">Create profile for:</label>
            <select name="profile" id="profile">
            <option value="select">select</option>    
            <option value="self">Self</option>
            <option value="son">Son</option>
            <option value="daughter">Daughter</option>
            <option value="sibling">Sibling</option>
            <option value="relative/friend">Relative/Friend</option>
            <option value="brother">Brother</option>
            <option value="sister">Sister</option> 
            </select> 
            </div>
            <div class="date"> 
            <label for="date of birth" class="label2" >Date of Birth:</label>    
            <input type="date" name="date" id="date">
            </div> 
            <div>
            <label for="height" class="label2">Height:</label>
            <select name="height" id="height">
            <option value="select height">select height</option>    
            <option value="4-5 feet">4'-5' feet</option>
            <option value="5'1-6 feet">5'1-6 feet</option>
            <option value="6 feet onwards">6 feet onwards</option>
            </select>
            </div>
            <div>
            <label for="marital status" class="label2">Marital status:</label>
            <select name="marital_status" id="marital status">
            <option value="select">select</option>    
            <option value="never married">Never Married</option>
            <option value="awaiting divorce">Awaiting Divorce</option>
            <option value="divorced">Divorced</option>
            <option value="widowed">Widowed</option>
            </select>   
            </div>
            <div>
            <label for="religion" class="label2">Religion:</label>
            <select name="religion" id="religion">
            <option value="select">select</option>
            <option value="hindu">Hindu</option>
            <option value="muslim">Muslim</option>
            <option value="sikh">Sikh</option>
            <option value="christian">Christian</option>
            <option value="budhhist">Budhhist</option>
            <option value="jain">Jain</option>
            <option value="Parsi">Parsi</option>
            <option value="jewish">Jewish</option>
            <option value="Bahai">Bahai</option>
            </select> 
            </div>
            <div>
            <label for="city" class="label-c">city:</label>
            <input type="text" id="city" name="city" required>
            </div>
            <div>
            <label for="pincode" class="label2">Pincode:</label>
            <input type="text" name="pin" pattern="[0-9]{6}" maxlength="6">
            </div>
            <div>
            <label for="motherTongue" class="label2">Mother Tongue:</label>
            <select name="mother tongue" id="mother tongue">
            <option value="select">select</option>   
            <optgroup label="North">
            <option value="hindi">Hindi</option>
            <option value="punjabi">Punjabi</option>
            <option value="bihari">Bihari</option>
            <option value="rajasthani">Rajasthani</option>
            <option value="haryanvi">Hariyanvi</option>
            <option value="himachali">Himachali</option>
            <option value="kashmiri">Kashmiri</option>
            <option value="sindhi">Sindhi</option>
            <option value="urdu">Urdu</option>
            </optgroup>
            <optgroup label="West">
            <option value="Marathi">Marathi</option>
            <option value="gujarati">Gujarati</option>
            <option value="kutchi">Kutchi</option>
            <option value="Hindi">Hindi</option>
            <option value="Konkani">Konkani</option>
            <option value="Sindhi">Sindhi</option>
            </optgroup> 
            <optgroup label="South">
            <option value="Tamil">Tamil</option>
            <option value="Telugu">Telugu</option>
            <option value="Kannada">Kannada</option>
            <option value="Malayalam">Malayalam</option>
            <option value="Tulu">Tulu</option>
            <option value="Urdu">Urdu</option>
            </optgroup> 
            <optgroup label="East">
            <option value="bengali">Bengali</option>
            <option value="oriya">Oriya</option>
            <option value="assamese">Assamese</option>
            <option value="sikkim/nepali/limbu/bhutia/lepcha">Sikkim/Nepali/Limbu/Bhutia/Lepcha</option>
            </optgroup> 
            <option value="english">English</option>
            </div> 
            <div>
            <label for="country" class="label2">city:</label>
            <input type="text" id="country" name="country" required>   
            </div>
            
            <input type="button" name="next" class="next btn btn-info" value="Next"/>
            </fieldset>
        </form>


    </div>
</body>
</html>