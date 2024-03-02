

<?php
include_once 'Header.php';

?>
  
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href= "My Account.css"
  </head>
  <body>
    
  </body>
  </html>
  
  <br><br>
   
    <div class="container">
    <center>
<br><br><br><br>
    <table>
        <tr>
            <td>First Name:</td>
            <td><?php echo $firstname; ?></td>
        </tr>
        <tr>
            <td>Last Name:</td>
            <td><?php echo $lastname; ?></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><?php echo $email; ?></td>
        </tr>
    </table>
          
    </center> 

    </div>

    

    <fieldset class="fieldset1">

        <legend>Edit Profile</legend>
        <ul>
            
       <li> <label for="firstname">First Name:</label>
            <input type="text" id="firstname" class="rounded-input" name="firstname" required></li><br>

        <li>    <label for="lastname">Last Name:</label>
            <input type="text" id="lastname" class="rounded-input" name="lastname" required></li><br>

         <li> <label for="email">Email:</label>
            <input type="email" id="email" class="rounded-input" name="email" required></li><br>
            
        </ul>
        <input type="submit" value="UPDATE" name="signupdate">
        
    </fieldset>  




   
    <fieldset class="fieldset2">
        <legend>Password Change</legend>
        <ul type="none">
            <li> <label for="pass">Current Password</label>
            <input type="password" id="pass" class="rounded-input" name="pass" required></li><br>


            <br><br>
            <li> <label for="pass">New Password</label>
            <input type="password" id="pass" class="rounded-input" name="pass" required></li><br>

            <span class="f-size">Use 8 or more characters with a mix of letters, numbers & symbols</span><br>
<label for="showPassword">
  <input type="checkbox" id="showPassword" />
  <p>Show Password</p>
  </label>
            <br><br>
            <li><label for="repassword">Confirm Password</label>
            <input type="password" id="repassword" class="rounded-input" name="repassword" required></li><br>
<label for="showPassword">
  <input type="checkbox" id="showPassword" />
  <p>Show Password</p>
</label>

    </fieldset>
<br>
<input type="submit" name="submitbtn" value="Save Changes" class="btn2" onclick="redirectToHomepage()">

</body>
<script src='My Account.js'></script> 

<?php
include_once 'Footer.php';
?>