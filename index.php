<!DOCTYPE html>

<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registration</title>
    <link rel="stylesheet" href="style/rss.css">
</head>
<body>
    
    <div class="container">
         <div class="headings">
         <h1>Registration Page</h1>
         </div>
         
        <form action="" method="post">
        <div class="form_block">
            <label>Name</label>
            <input type="text" name="fname" class="form_input">
        </div>
        <div class="form_block">
            <label>Gender</label>
            <select name="gender" class="gender" id="gender">
              <option value="" class="sopt" hidden></option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
        </div>
        <div class="form_block">
            <label>Date Of Birth</label>
            <input type="date" name="dob" class="form_input">
        </div>
         <div class="form_block">
         <label>Email</label>
              <input type="text" name="email"  class="form_input">
         </div>
         <div class="form_block">
         <label>Password</label>
              <input type="text" name="pwd" class="form_input">
         </div>
         <div class="form_block">
         <label>Phone Number</label>
              <input type="text" name="phn" class="form_input">
         </div>
         <div class="form_block">
         <label>Address</label>
              <textarea name="address" id="address" cols="43" rows="10" class="form-address"></textarea>
         </div>
         <div class="form_block">
              <input type="submit" value="Register" name="register">
         </div>
        </form>
        <?php

if(isset($_POST['register'])){
   $fname = $_POST['fname'];
   $gender = $_POST['gender'];
   $dob =$_POST['dob'];
   $email = $_POST['email'];
   $pwd = $_POST['pwd'];
   $phn = $_POST['phn'];
   $address = $_POST['address'];
}

echo $fname."<br>";
echo $gender."<br>";
echo $dob."<br>";
echo $email."<br>";
echo $pwd."<br>";
echo $phn."<br>";
echo $address."<br>";
?>
    </div>
</body>
</html>