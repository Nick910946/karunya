
<!DOCTYPE html>


<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title></title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   </head>
   <style type="text/css">
      .gradient-custom {
      /* fallback for old browsers */
      background: #f093fb;
      /* Chrome 10-25, Safari 5.1-6 */
      background: -webkit-linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1));
      /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      background: linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1))
      }
      .card-registration .select-input.form-control[readonly]:not([disabled]) {
      font-size: 1rem;
      line-height: 2.15;
      padding-left: .75em;
      padding-right: .75em;
      }
      .card-registration .select-arrow {
      top: 13px;
      }
      .group{
      margin-right:-480px;
    
      border-radius: 25px;
      }
   </style>
   <body>
      <section class="vh-100 gradient-custom ">
         <div class="container py-5 h-100">
         <div class="row justify-content-center align-items-center h-100">
          
            <div class="col-12 col-lg-9 col-xl-7">
               <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                  <div class="card-body p-4 p-md-5">
                     <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>

                     <form action="register.php" method="POST" onsubmit="return validation()" id="contact_form">
                       <?php
                        if (isset($_SESSION['name_err'])) {
                            echo $_SESSION['name_err'];
                            unset($_SESSION['name_err']);
                        }
                        if (isset($_SESSION['email_err'])) {
                            echo $_SESSION['email_err'];
                            unset($_SESSION['email_err']);
                        }
                        if (isset($_SESSION['phone_err'])) {
                            echo $_SESSION['phone_err'];
                            unset($_SESSION['phone_err']);
                        }
                        
                        if (isset($_SESSION['password_err'])) {
                            echo $_SESSION['password_err'];
                            unset($_SESSION['password_err']);
                        }
                        ?>
                        <span id="v_name" style="color: red;"></span>
                        <span id="v_email" style="color: red;"></span>
                        <span id="v_password" style="color: red;"></span>
                        <span id="v_phoneno" style="color: red;"></span>
                      
                        

                        <div class="row">
                           <div class="col-md-6 mb-4">
                              <div class="form-outline">
                                 <input type="text" id="name" name="name" class="form-control form-control-lg" />
                                 <label class="form-label" for="firstName">Your Name</label>
                              </div>
                           </div>
                           <div class="col-md-6 mb-4">
                              <div class="form-outline">
                                 <input type="email" id="email" name="email" class="form-control form-control-lg" />
                                 <label class="form-label" for="lastName">Your Email</label>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6 mb-4 d-flex align-items-center">
                              <div class="form-outline datepicker w-100">
                                 <input type="Password" name="password" class="form-control form-control-lg" id="password" />
                                 <label for="birthdayDate" class="form-label">Your Password</label>
                              </div>
                           </div>
                           <div class="col-md-6 mb-4">
                              <h6 class="mb-2 pb-1">Gender: </h6>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                                    value="Female" checked />
                                 <label class="form-check-label" for="femaleGender">Female</label>
                              </div>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" name="gender" type="radio" id="maleGender"
                                    value="Male" />
                                 <label class="form-check-label" for="maleGender">Male</label>
                              </div>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" name="gender" id="otherGender"
                                    value="Other" />
                                 <label class="form-check-label" for="otherGender">Other</label>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6 mb-4 pb-2">
                              <div class="form-outline">
                                 <input type="phone" id="phoneno" name="phone" class="form-control form-control-lg" />
                                 <label class="form-label" for="phone">Phone Number</label>
                              </div>
                             
                              <div class="mt-4 pt-2">
                                 <input class="btn btn-primary btn-lg" type="submit">
                                  <div id="contact-message"></div> 
                              </div>
                               <p class="mt-3">Already have an account please&nbsp;<a href="login.php">Login</a></p>
                           </div>
                             <img src="images/karunya_global_new_logo_1.png" class="w-50 group">
                     </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </body>

    <script>
        function validation(){
            var name = document.getElementById('name').value.trim();
            var email = document.getElementById('email').value.trim();
            var phoneno = document.getElementById('phoneno').value.trim();
            var password = document.getElementById('password').value.trim();
            

            if (name == "") {
                document.getElementById('v_name').innerHTML="Please enter name..!!<br>";
                return false;
            }
            if (!isNaN(name)) {
                document.getElementById('v_name').innerHTML="Name must contain alphabets only..!!<br>";
                return false;
            }
            if (email == "") {
                document.getElementById('v_email').innerHTML="Please enter email..!!<br>";
                return false;
            }
            if (phoneno == "") {
                document.getElementById('v_phoneno').innerHTML="Please enter phone..!!<br>";
                return false;
            }
            if (phoneno.length != 10) {
                document.getElementById('v_phoneno').innerHTML="Phone length must be 10..!!<br>";
                return false;
            }
            if (isNaN(phoneno)) {
                document.getElementById('v_phoneno').innerHTML="Phone must contain numbers only..!!<br>";
                return false;
            }
            if (password == "") {
                document.getElementById('v_password').innerHTML="Please enter password..!!<br>";
                return false;
            }
           if (strlen(password)>6) {
                document.getElementById('v_password').innerHTML="password should be contain atleast 6 letters or numbers..!!<br>";
                


                return false;
            }
            
            
        }
    </script>
</html>