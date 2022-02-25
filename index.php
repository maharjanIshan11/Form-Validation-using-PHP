
<?php 

       error_reporting(0);

       if(isset($_POST['submit']))
        {
            $name = $_POST ["name"];
            $email = $_POST ["email"];
            $mobileno = $_POST ["mobileno"];
            $website = $_POST ["website"];
            $agree = $_POST ["agree"];
            $gender = $_POST ["gender"];

            $name_length = strlen($name);

            $name_err = $email_err = $mobile_err = $agree_err = $gender_err = $form_success_msg= "";

         //method for validating email
        $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^"; 

        //method for validating mobile number
        $length = strlen($mobileno);


            if (empty($name)) {
                $name_err = "<br>Please Enter Name.";
            }

            elseif ( $name_length < 5 ) {
                $name_err = "<br>Must be required and at least 5 characters";
            }
            // else  $name_err ="";




            elseif (empty($email)) {
                $email_err = "<br>Please Enter Email.";
            }
             
            elseif(!preg_match($pattern, $email)){
                $email_err = "<br>Invalid Email.";
            }
            // else  $email_err ="";



            elseif (empty($mobileno)) {
                $mobile_err = "<br>Please Enter Mobile Number.";
            }

            elseif (!preg_match ("/^[0-9]*$/", $mobileno) ) {  
                $mobile_err = "<br>Only numeric value is allowed.";  
            }  

           
            elseif ($agree == '') {
                $agree_err = "<br>You have to agree the Terms and Services.";
            }




            else {
                sleep(1);
                
                $form_success_msg = "Thank You for trying to join with us.";
                          
                }
        
            
        }


     ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    

    <title>PHP-Form validation</title>
    
</head>
<body>
    <div class="container">

    <h2>Form Validation using PHP</h2>  
  
    <br><br>  
    <form method="POST" action=" " >  


    <span id="astrick"><sup>*</sup></span> 
    <label>Name:</label>   

    <input type="text" name="name" placeholder="Cristiano Ronaldo" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name'], ENT_QUOTES) : ''; ?>">
    <span><?php echo $name_err ?></span>
     

    <br><br>  
    <span id="astrick"><sup>*</sup></span> 
    <label>E-mail:   </label>

    <input type="text" name="email" placeholder="Cristiano@Ronaldo.com" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email'], ENT_QUOTES) : ''; ?>" >
    <span><?php echo $email_err ?></span>

        
    <br><br>  

    <span id="astrick"><sup>*</sup></span> 
    <label>Mobile No:  </label>  
    <input type="text" name="mobileno" placeholder="9876543210" value="<?php echo isset($_POST['mobileno']) ? htmlspecialchars($_POST['mobileno'], ENT_QUOTES) : ''; ?>" >
    <span><?php echo $mobile_err ?></span>  
     
    <br><br>  

    <label>Website: </label> 
    <input type="text" name="website" placeholder="www.cristianoconaldo.com" value="<?php echo isset($_POST['website']) ? htmlspecialchars($_POST['website'], ENT_QUOTES) : ''; ?>" > 

    
    <br><br>  
    <span id="astrick"><sup>*</sup></span>
    <label>Gender: </label>  
    <input type="radio" name="gender" value="male" checked> Male  
    <input type="radio" name="gender" value="female"> Female  
    <input type="radio" name="gender" value="other" > Other  
    
    <br><br>




        <label>Hobbies:</label>

      <input type="checkbox">Reading
      
      <input type="checkbox">Music
      <input type="checkbox">Coding
      <input type="checkbox" checked>Other

        <br><br>  
        <a href=""><i>Agree to Terms of Service:</i></a> 
        <input type="checkbox" name="agree"> 
        <span><?php echo $agree_err ?></span> 
         
        <br><br>                            
        <input type="submit" name="submit" value="Submit"> 
        <input type="reset" name="reset" value="Clear">   
        <br><br> 

    </form>  
    <p>Note: Field with <span id="astrick"><sup>*</sup></span> are mandatory.</p>
    </div>
  
  
<br><br>
<h3> <?php echo $form_success_msg ?>   </h3>


</body>
</html>





