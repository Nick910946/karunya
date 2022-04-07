<?php
include "header.php";
?>

<main>
    <section class="fontbox banner">
        <div class=" Blue-ShortDotted-Image wow slideInLeft">
            <img src="images/dot.png">
        </div>
        <div class="rightimages wow rightAnimate">
            <img src="images/ts.png">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 ServiceBox wow leftAnimate">
                    <h2>IT <br>
                        <span class="Boldfont">Services</span>
                    </h2>
                    <p>
                        The original manufacturers of IT equipment have limited warranty time. The real question is of what will happen after the warranty period gets over? Will you scrap all your investments or prolong the working life of the server to recover the investment?<br><br> TechServers currently maintains over a hundred individual server systems. These include all major OEM brand names (HP, IBM, Dell, Oracle Sun, Fujitsu, Supermicro, Compaq, and many others) as well as industry-standard servers. All our engineers have a minimum of ten years of experience in this field and are trained and certified by the OEMs such as Sun, DELL, HP, and IBM. Their specialty lies in reducing downtime by diagnosing and applying the best triage. TechServers has a state-of-the-art laboratory for equipment diagnosis, repair, and testing for all platforms that we support.
                    </p>
                    <div class="downimg">
                        <img src="images/circle.png">
                    </div>
                </div>

                <div class="col-md-6 FormSection wow rightAnimate">
                    <form name="contact_form" id="contact_form" method="POST" action="userdata.php">
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
    <div class="cust-re">
    <div class="g-recaptcha brochure__form__captcha" data-sitekey="6Le_Xi0aAAAAAMBJEDwelKBFmXQyDyFMk57X-nDH"style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
    </div>
    <button type="submit" class="bannerbtn btnCol btnWhite">Submit</button>
<div id="contact-message"></div>
</form>
                </div>

            </div>
        </div>
    </section>
    <section class="fontbox section1">
        <div class="container">
            <div class="row">
                <div class="col-md-6 BranchesIncludeImage wow leftAnimate">
                    <img src="images/branches-include.gif">

                </div>
                <div class="col-md-6 wow rightAnimate">
                    <h2>
                        <span class="Boldfont">Commitment</span>
                    </h2>
                    <p>Dedicated to exceeding expectations by delivering an unforgettable user experience that ensures value add to our patrons</p>
                    <ul class="ulImage">
                        <li>24/7/365 Customer Service Support Desk </li>
                        <li>Attention to Detail and Client </li>
                        <li> High Efficient Low-Cost Solutions </li>
                        <li>Trained and Certified Professionals</li>
                        <li> Flexible Rental and Leasing solutions </li>
                        <li>IT Equipment Maintenance Cost Optimisation </li>
                        <li>Data Centre Solution Software Licensing </li>
                        <li> Data Center Consolidation and Optimisation </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    </main>

<?php
include "footer.php";
?>