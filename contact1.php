<?php
session_start();
include "head.php";
?>

<main>
    <section class="fontbox banner">
        <div class=" Blue-ShortDotted-Image">
            <img src="images/dot.png">
        </div>
        <div class="rightimages">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 ServiceBox contact-left">
                    <h2>Contact <br>
                        <span class="Boldfont">Information </span>
                    </h2>
                    <p>
                       <address>
						Karunya Infotech<br>
                        Block-1, Software Technology Park of India<br>
						Gwalior, India<br>
						Pin – 474005<br>
						<i class="fa fa-mobile" aria-hidden="true" style="font-size: 25px;"></i> <a href="tel:+918878992542" style="color:#4582FE;">+91 8878992542</a> <br>
						<i class="fa fa-globe" aria-hidden="true" style="font-size: 16px;"></i> <a href="">https://karunyagroup.com</a><br>
                        <i class="fa fa-envelope" aria-hidden="true" style="font-size: 16px;"></i> <a href="">mail@karunyagroup.com</a>
                        <br>
						</address>
                    </p>
					<div class="map-img-box">
						<!-- <a href="https://www.google.com/maps/search/1855,+Sector+46,+Gurugram+%E2%80%93+122003,+Haryana,+India/@28.4360008,77.051395,15.25z" target="_blank"><img src="images/map-img.jpg" alt="map-image"></a> -->
                        <div id="map-container-google-1" class="z-depth-1-half map-container shadow" style="height: 50px; width: 320px;">
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d632.5085640337297!2d78.1557433466111!3d26.261379153772722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3976c7ee64ce2c83%3A0xe15f4939a2f841f3!2sSoftware%20Technology%20Park%20of%20India%20Gwalior!5e0!3m2!1sen!2sin!4v1646897625427!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
					</div>
                </div>
                <div class="col-md-6 FormSection contact-right">
                    <form name="contact_form" id="contact_form" method="POST" onsubmit="return validation()" action="userdata.php">
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
                        if (isset($_SESSION['description_err'])) {
                            echo $_SESSION['description_err'];
                            unset($_SESSION['description_err']);
                        }
                        ?>
                        <span id="v_name" style="color: red;"></span>
                        <span id="v_email" style="color: red;"></span>
                        <span id="v_phoneno" style="color: red;"></span>
                        <span id="v_description" style="color: red;"></span>
                        <div class="forminput">
                            <input type="text" name="name" id="name" placeholder="YOUR NAME" />
                            <input type="email" name="email" id="email" placeholder="EMAIL ADDRESS" />
                        </div>
                        <div class="forminput namediv">
                            <input type="text" name="phoneno" id="phoneno" placeholder="MOBILE NUMBER" />
                        </div>
                        <div class="issuedv">
                            <textarea placeholder="YOUR MESSAGE" name="description" id="description"></textarea>
                        </div>
                        <!-- <div class="cust-re">
                            <div class="g-recaptcha brochure__form__captcha" data-sitekey="6Le_Xi0aAAAAAMBJEDwelKBFmXQyDyFMk57X-nDH"style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;">
                            </div>
                        </div> -->
                        <button type="submit" class="bannerbtn btnCol btnWhite mt-2">Submit</button>
                        <div id="contact-message"></div>
                    </form>
                </div>

        </div>
    </section>
    </main>

    <script>
        function validation(){
            var name = document.getElementById('name').value.trim();
            var email = document.getElementById('email').value.trim();
            var phoneno = document.getElementById('phoneno').value.trim();
            var description = document.getElementById('description').value.trim();

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
            if (description == "") {
                document.getElementById('v_description').innerHTML="Please enter message..!!<br>";
                return false;
            }
        }
    </script>
<?php
include "foot.php";
?>