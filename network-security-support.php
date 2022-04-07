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
                    <h2><span class="Boldfont">Network & Security Support</span>
                    </h2>
                    <p>
                       Techservers Infra Network & Security Support Services are designed to protect your Network & Security of  IT devices  and infrastructure from threats and unauthorized access from data invaders.<br><br> We provide end‐to‐end support that covers Firewalls, Router ,Switches, Servers (on-premise and cloud) and your applications. We engage best engineers with highest levels of technical skills to monitor & manage your network. Our team is equipped with latest monitoring tools, remote tools and communication systems to ensure we deliver best service, minimize your interruptions and protect & secure your network infrastructure.
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
	<section class="fontbox section1 section-network">
        <div class="container">
            <div class="row">

                <div class="col-md-6 BranchesIncludeImage wow leftAnimate">
                    <h2><span class="Boldfont">Managed Network</span>
                    </h2>
                    <p>Network Services & Support Includes:</p>
                    <ul class="ulImage">
                        <li>Implementation, Consulting and Support for both appliance and software.</li>
                        <li>24/7 Outage Management.</li>
                        <li>Traffic Segmentation.</li>
                        <li>Configuration & Termination of ISP links Connectivity.</li>
                        <li>Network Behavior Analysis.</li>
                        <li>Access Control /Application Security.</li>
                        <li>Data Leak Presentation.</li>
                        <li>Web security /Email Security /Wireless security.</li>
                        <li>Business Continuity Plan & Disaster Recovery plan.</li>
                        <li>Designing and Implementation of  network infrastructure.</li>
                        <li>HLD and LLD diagram of network.</li>
                        <li>Business continuity and disaster recovery plan.</li>
                        <li>Bandwidth monitoring and management along with reporting.</li>
                    </ul>
                </div>
				<div class="col-md-6 wow rightAnimate">
                    <img src="images/managed-network_2.png">
				</div>
            </div>
        </div>
    </section>
	<section class="fontbox section1 section-firewall">
        <div class="container">
            <div class="row">
                <div class="col-md-6 BranchesIncludeImage wow leftAnimate">
                    <img src="images/network-firewall.png">

                </div>
                <div class="col-md-6 wow rightAnimate">
                    <h2>
                        <span class="Boldfont">Managed Firewall</span>
                    </h2>
                    <p>Services & Support Includes:</p>
                    <ul class="ulImage">
                        <li>Implementation, Consulting and Support.</li>
                        <li>Implementation of routing protocol <small>(Static and dynamic routing).</small></li>
                        <li>NAT/PAT and Security policy Creation.</li>
                        <li>Creating and Managing VPN IPsec and SSL.</li>
                        <li>Firmware Upgradation of Firewall OS and Software upgrade.</li>
                        <li>Password and login recovery.</li>
                        <li>Configuration and Managing of IPS/IDS.</li>
                        <li>Cloud series deployment in Azure and AWS.</li>
                        <li>VM series Deployment in VM-Ware.</li>
                        <li>Router/Switches, IDS/IPS.</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>
    <section class="fontbox section1 section-router">
        <div class="container">
            <div class="row">

                <div class="col-md-6 BranchesIncludeImage wow leftAnimate">
                    <h2>
                        <span class="Boldfont">Managed Routers and Switches</span>
                    </h2>
                    <p> Support Services Includes</p>
                    <ul class="ulImage">
                        <li>Implementation, Consulting and Support.</li>
                        <li>Dynamic and Static Routing protocols.</small></li>
                        <li>Firmware/IOS upgradation on Switch and Router.</li>
                        <li>Password Recovery of switch and router.</li>
                        <li>Layer 3 redundancy and load balancing protocols HSRP/VRRP.</li>
                        <li>Inter-Vlan routing, STP (Spanning tree) and RSTP.</li>
                        <li>Port channel and VSS configuration.</li>
                        <li>Port Level Security ,VLAN Creation and deployment <small>(Layer-2,Layer-3)</small>.</li>
                    </ul>
                </div>
				<div class="col-md-6 rightAnimate">
                    <img src="images/Managed-Routers.png">
				</div>
            </div>
        </div>
    </section>
</main>

<?php
include "footer.php";
?>