<?php
include "header.php";
?>

<main>
    <section class="banner font-box">
        <div class=" Blue-ShortDotted-Image wow slideInLeft">
            <img src="images/dot.png">
        </div>
        <div class="rightimages wow leftAnimate">
            <img src="images/n-ts.png">
        </div>
        <div class="container newContainer">
            <div class="row">

                <div class="col-md-12 FormSection text-center">
					<h1>Complete Range Of <br><b>IT Products On Rent</b></h1>
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

				<div class="laptop_Img1 wow leftAnimate">
                    <!-- <img src="images/img1.png"> -->
                </div>
				<div class="laptop_Img2 wow rightAnimate">
                    <!-- <img src="images/laptop.png"> -->
                </div>
            </div>
        </div>
    </section>
    <section id="services-main" class="font-box section1 desktop-section-box wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-2 col-xl-2 services-box-img">
                    <img src="images/icon1.png">
					<p>Business-specific optimized inventory.</p>
                </div>
				<div class="col-sm-4 col-md-2 col-xl-2 services-box-img">
                    <img src="images/icon2.png">
					<p>Delivers customized performance at no extra cost.</p>
                </div>
				<div class="col-sm-4 col-md-2 col-xl-2 services-box-img">
                    <img src="images/icon3.png">
					<p>Rapid scalability at short notice.</p>
                </div>
				<div class="col-sm-4 col-md-2 col-xl-2 services-box-img">
                    <img src="images/icon4.png">
					<p>Zero cost of obsolescence and upgrades.</p>
                </div>
				<div class="col-sm-4 col-md-2 col-xl-2 services-box-img">
                    <img src="images/icon5.png">
					<p>Eliminates maintenance and service expenses.</p>
                </div>
				<div class="col-sm-4 col-md-2 col-xl-2 services-box-img">
                    <img src="images/icon6.png">
					<p>Greater flexibility for business planning.</p>
                </div>
            </div>
        </div>
    </section>
      <!--Tab Section-->
	<section class="tab-info-section font-box wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center tab-box-main">
					<h2><span class="Boldfont" style="color:black;">Rental Products</span></h2>
					<div class="desktop-view-box-tab">
						<ul class="nav nav-tabs">
							<li><a class="active" data-toggle="tab" href="#server">Server</a></li>
							<li><a data-toggle="tab" href="#Storage-box">Storage Products</a></li>
							<li><a data-toggle="tab" href="#Desktop-tab">Desktop</a></li>
							<li><a data-toggle="tab" href="#Laptop-tab">Laptop</a></li>
							<li><a data-toggle="tab" href="#networking">Networking</a></li>
							<li><a data-toggle="tab" href="#apple">Apple</a></li>
							<li><a data-toggle="tab" href="#other-box">Other Equipments</a></li>
						</ul>
					</div>


				</div>
            </div>
        </div>
		<div class="tabs-scroll mobile-view-box wow fadeInUp">
			<ul class="nav nav-tabs">
				<li><a class="active" data-toggle="tab" href="#server">Server</a></li>
				<li><a data-toggle="tab" href="#Storage-box">Storage Products</a></li>
				<li><a data-toggle="tab" href="#Desktop-tab">Desktop</a></li>
				<li><a data-toggle="tab" href="#Laptop-tab">Laptop</a></li>
				<li><a data-toggle="tab" href="#networking">Networking</a></li>
				<li><a data-toggle="tab" href="#apple">Apple</a></li>
				<li><a data-toggle="tab" href="#other-box">Other Equipments</a></li>
			</ul>
		</div>
    </section>
	<section id="tab-detail-box" class="font-box">
		<div class="container">
			<div class="row">
				<div class="col-md-12 tab-detail">
					<div class="tab-content">
						<div id="server" class="tab-pane fade in active show">
							<div class="row">
								<div class="col-md-12 product-info">
									<h3><b>TechServers</b> customized servers <b>High-End servers</b> like <b>Blade and Power Series</b></h3>
								</div>
								<div class="col-sm-4 col-md-3 col-xl-3 product-box">
									<div class="product-inner">
										<img src="images/DellPowerEdge-R410.png">
										<h4>Dell PowerEdge <br>
											<span class="Boldfont">R410</span>
										</h4>
										<p class="kn-btn"><a id="show-deatil"><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-up" aria-hidden="true"></i> Know More</a></p>
										<div class="features-detail">
											<h6>Key Features:</h6>
											<ul class="product-benifit-list">
												<li>Simplified systems management </li>
												<li>Energy-optimized technology</li>
												<li>Advanced virtualization capabilities</li>
												<li>Ultra dense </li>
											</ul>
											<p><a class="rent-btn">Rent Now</a></p>
										</div>

									</div>
								</div>
								<div class="col-sm-4 col-md-3 col-xl-3 product-box">
									<div class="product-inner">
										<img src="images/DellPowerEdge-R420-Server-(2CPUVersion).png">
										<h4>Dell PowerEdge <br>
											<span class="Boldfont">R420 Server (2 CPU Version)</span>
										</h4>
										<p class="kn-btn"><a id="show-deatil"><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-up" aria-hidden="true"></i> Know More</a></p>
										<div class="features-detail">
											<h6>Key Features:</h6>
											<ul class="product-benifit-list">
												<li>CPU(s):  2 x Intel E5 Multi Core</li>
												<li>Memory: 12 DIMM Slots (Max 384GB)</li>
												<li>RAID: PERC H310, PERC H710 512MB NV, PERC H710p 1GB NV</li>
												<li>HDD:  2.5" or 3.5" Hot Swap SAS, SATA and Near Line SAS</li>
												<li>RISER: 2 PCIe Slots (1 Full Height, 1 Half Height)</li>
												<li>Power: 550W Hot Swap Redundant</li>
											</ul>
											<p><a class="rent-btn">Rent Now</a></p>
										</div>

									</div>
								</div>
								<div class="col-sm-4 col-md-3 col-xl-3 product-box">
									<div class="product-inner">
										<img src="images/DellPowerEdge-R430Server.png">
										<h4>Dell PowerEdge <br>
											<span class="Boldfont">R430</span>
										</h4>
										<p class="kn-btn"><a id="show-deatil"><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-up" aria-hidden="true"></i> Know More</a></p>
										<div class="features-detail">
											<h6>Key Features:</h6>
											<ul class="product-benifit-list">
												<li>CPU(s): 2 x Intel E5 Multi Core </li>
						                        <li>Memory: 12 DIMM Slots (Max 384GB) </li>
						                        <li>RAID: PERC H330, PERC H730 1GB NV, PERC H730P 2GB NV </li>
						                        <li>HDD: 2.5" or 3.5" Hot Swap SAS, SATA, Near Line SAS and SSDs </li>
						                        <li>Condition: xByte Recertified </li>
						                        <li>Warranty: xByte Advance Replacement </li>
											</ul>
											<p><a class="rent-btn">Rent Now</a></p>
										</div>

									</div>
								</div>
								<div class="col-sm-4 col-md-3 col-xl-3 product-box">
									<div class="product-inner">
										<img src="images/DellPowerEdge-R440.png">
										<h4>Dell PowerEdge <br>
											<span class="Boldfont">R440</span>
										</h4>
										<p class="kn-btn"><a id="show-deatil"><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-up" aria-hidden="true"></i> Know More</a></p>
										<div class="features-detail">
											<h6>Key Features:</h6>
											<ul class="product-benifit-list">
												<li>CPU(s): Up to 2 x Intel Xeon SP Multi Core</li>
						                        <li>Memory: 16 DIMM Slots (Max 512GB)</li>
						                        <li>RAID: PERC H330, PERC H730P 2GB NV, PERC H740P 8GB NV</li>
						                        <li>HDD: 3.5" and 2.5" Hot Swap SAS, SATA and Near Line SAS, NVMe SSD</li>
						                        <li>RISER: Up to 2 PCIe Slots (Half Height, Half Length) or 1 PCIe Slots (1 Full Height, Half Length)</li>
						                        <li>Power: Gold 450W, Platinum 550W </li>
											</ul>
											<p><a class="rent-btn">Rent Now</a></p>
										</div>

									</div>
								</div>
								<div class="col-sm-4 col-md-3 col-xl-3 product-box">
									<div class="product-inner">
										    <img src="images/DellPowerEdge-R510.png">
										<h4>Dell PowerEdge <br>
											<span class="Boldfont">R510</span>
										</h4>
										<p class="kn-btn"><a id="show-deatil"><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-up" aria-hidden="true"></i> Know More</a></p>
										<div class="features-detail">
											<h6>Key Features:</h6>
											<ul class="product-benifit-list">
												<li>Advanced system management</li>
												<li>High-availability</li>
												<li>Energy efficient</li>
												<li>High redundancy </li>
											</ul>
											<p><a class="rent-btn">Rent Now</a></p>
										</div>

									</div>
								</div>
								<div class="col-sm-4 col-md-3 col-xl-3 product-box">
									<div class="product-inner">
										 <img src="images/DellPowerEdge-R520Server-(2CPUVersion).png">
										<h4>Dell PowerEdge <br>
											<span class="Boldfont">R520 Server (2 CPU Version)</span>
										</h4>
										<p class="kn-btn"><a id="show-deatil"><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-up" aria-hidden="true"></i> Know More</a></p>
										<div class="features-detail">
											<h6>Key Features:</h6>
											<ul class="product-benifit-list">
												<li>CPU(s): 2 x Intel E5 Multi Core </li>
						                        <li>Memory: 12 DIMM Slots (Max 384GB) </li>
						                        <li>RAID: PERC H330, PERC H730 1GB NV </li>
						                        <li>HDD: 3.5" Hot Swap SAS, SATA and Near Line SAS</li>
						                        <li>RISER: 4 PCIe Slots (3 Full Height, 1 Half Height)</li>
												<li>Power: 495W or 750W or 1100W Hot Swap Redundant </li>
											</ul>
											<p><a class="rent-btn">Rent Now</a></p>
										</div>

									</div>
								</div>
								<div class="col-sm-4 col-md-3 col-xl-3 product-box">
									<div class="product-inner">
										  <img src="images/DellPowerEdge-R530.png">
										<h4>Dell PowerEdge <br>
											<span class="Boldfont">R530</span>
										</h4>
										<p class="kn-btn"><a id="show-deatil"><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-up" aria-hidden="true"></i> Know More</a></p>
										<div class="features-detail">
											<h6>Key Features:</h6>
											<ul class="product-benifit-list">
												<li>Versatile and affordable two-socket, 2U mainstream rack server delivers balanced performance and mid-range scalability for a wide range of common business workloads.</li>
												<li>Designed for data centers needing an affordable, virtualization-ready, two-socket rack server, the PowerEdge R530 is an excellent platform for a wide range of common business applications and smallscale virtualization</li>

											</ul>
											<p><a class="rent-btn">Rent Now</a></p>
										</div>

									</div>
								</div>
								<div class="col-sm-4 col-md-3 col-xl-3 product-box">
									<div class="product-inner">
										      <img src="images/DellPowerEdge-R540Server.png">
										<h4>Dell PowerEdge <br>
											<span class="Boldfont">R540</span>
										</h4>
										<p class="kn-btn"><a id="show-deatil"><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-up" aria-hidden="true"></i> Know More</a></p>
										<div class="features-detail">
											<h6>Key Features:</h6>
											<ul class="product-benifit-list">
												<li> CPU(s): Up to 2 x Intel Xeon SP Multi Core</li>
						                        <li> Memory: 16 DIMM Slots (Max 1024GB)
						                        </li>
						                        <li> RAID: PERC H330, PERC H730P 2GB NV, PERC H740P 8GB NV
						                        </li>
						                        <li> HDD: 3.5" Hot Swap SAS, SATA and Near Line SAS
						                        </li>
						                        <li> RISER: Up to 2 PCIe Slots (Gen 3 slots, max 4x x16 bandwidth)
						                        </li>
						                        <li> Power: 495W or 750W, 1100W Hot Swap Redundant </li>
											</ul>
											<p><a class="rent-btn">Rent Now</a></p>
										</div>

									</div>
								</div>
								<div class="col-sm-4 col-md-3 col-xl-3 product-box">
									<div class="product-inner">
										<img src="images/DellPowerEdge-R610.png">
										<h4>Dell PowerEdge <br>
											<span class="Boldfont">R610</span>
										</h4>
										<p class="kn-btn"><a id="show-deatil"><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-up" aria-hidden="true"></i> Know More</a></p>
										<div class="features-detail">
											<h6>Key Features:</h6>
											<ul class="product-benifit-list">
												 <li> Simplified management</li>
							                        <li> Purposeful design
							                        </li>
							                        <li> Energy efficient</li>
							                        <li>
							                            Versatile performance
							                        </li>
											</ul>
											<p><a class="rent-btn">Rent Now</a></p>
										</div>

									</div>
								</div>
								<div class="col-sm-4 col-md-3 col-xl-3 product-box">
									<div class="product-inner">
										<img src="images/DellPowerEdge-R620.png">
										<h4>Dell PowerEdge <br>
											<span class="Boldfont">R620</span>
										</h4>
										<p class="kn-btn"><a id="show-deatil"><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-up" aria-hidden="true"></i> Know More</a></p>
										<div class="features-detail">
											<h6>Key Features:</h6>
											<ul class="product-benifit-list">
												   <li> CPU(s): 2 x Intel E5 Multi Core </li>
							                        <li> Memory: 24 DIMM Slots (Max 768GB)
							                        </li>
							                        <li> RAID: PERC H310, PERC H710 512MB NV, PERC H710p 1GB NV
							                        </li>
							                        <li> HDD: 2.5" Hot Swap SAS, SATA and Near Line SAS
							                        </li>
							                        <li> RISER: 3 PCIe Slots (Half Height) or 2 PCIe Slots (1 Full Height, 1 Half Height)
							                        </li>
							                        <li> Power: 495W or 750W or 1100W Hot Swap Redundant </li>
											</ul>
											<p><a class="rent-btn">Rent Now</a></p>
										</div>

									</div>
								</div>
								<div class="col-sm-4 col-md-3 col-xl-3 product-box">
									<div class="product-inner">
										    <img src="images/DellPowerEdge-R630Server-Pre-Configured.png">
										<h4>Dell PowerEdge <br>
											<span class="Boldfont">R630 Server Pre-Configured</span>
										</h4>
										<p class="kn-btn"><a id="show-deatil"><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-up" aria-hidden="true"></i> Know More</a></p>
										<div class="features-detail">
											<h6>Key Features:</h6>
											<ul class="product-benifit-list">
												   <li> CPU(s): 2 x Intel E5 Multi Core</li>
							                        <li> Memory: 24 DIMM Slots (Max 1.5TB)
							                        <li> RAID: PERC H330, PERC H730 1GB NV, PERC H730P 2GB NV
							                        </li>
							                        <li>HDD: 2.5" Hot Swap SAS, SATA and Near Line SAS, 1.8" SATA/SAS SSDs
							                        </li>
							                        <li>
							                            RISER: 3 PCIe Slots (Half Height) or 2 PCIe Slots (1 Full Height, 1 Half Height)
							                        </li>
							                        <li>
							                            Power: 495W or 750W or 1100W Hot Swap Redundant
							                        </li>
											</ul>
											<p><a class="rent-btn">Rent Now</a></p>
										</div>

									</div>
								</div>
								<div class="col-sm-4 col-md-3 col-xl-3 product-box">
									<div class="product-inner">
										      <img src="images/DellPowerEdge-R640.png">
										<h4>Dell PowerEdge <br>
											<span class="Boldfont">R640</span>
										</h4>
										<p class="kn-btn"><a id="show-deatil"><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-up" aria-hidden="true"></i> Know More</a></p>
										<div class="features-detail">
											<h6>Key Features:</h6>
											<ul class="product-benifit-list">
												      <li> CPU(s): Up to 2 x Intel Xeon SP Multi Core</li>
								                        <li> Memory: 24 DIMM Slots (Max 3TB)
								                        </li>
								                        <li> RAID: PERC H330, PERC H730P 2GB NV, PERC H740P 8GB NV
								                        </li>
								                        <li> HDD: 3.5" and 2.5" Hot Swap SAS, SATA and Near Line SAS, NVMe SSD
								                        </li>
								                        <li> RISER: 3 PCIe Slots (Half Height) or 2 PCIe Slots (1 Full Height, 1 Half Height)
								                        </li>
								                        <li>Power: 495W, 750W, 1100W, or 1600W Hot Swap Redundant</li>
											</ul>
											<p><a class="rent-btn">Rent Now</a></p>
										</div>

									</div>
								</div>
								<div class="col-sm-4 col-md-3 col-xl-3 product-box">
									<div class="product-inner">
										<img src="images/DellPowerEdge-R710.png">
										<h4>Dell PowerEdge <br>
											<span class="Boldfont">R710</span>
										</h4>
										<p class="kn-btn"><a id="show-deatil"><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-up" aria-hidden="true"></i> Know More</a></p>
										<div class="features-detail">
											<h6>Key Features:</h6>
											<ul class="product-benifit-list">
												      <li> Enhanced virtualization capabilities
								                        </li>
								                        <li> Innovative system management tools
								                        </li>
								                        <li> Energy efficient
								                        </li>
								                        <li>Policy-driven power </li>
											</ul>
											<p><a class="rent-btn">Rent Now</a></p>
										</div>

									</div>
								</div>
								<div class="col-sm-4 col-md-3 col-xl-3 product-box">
									<div class="product-inner">
										<img src="images/DellPowerEdge-R720-Server.png">
										<h4>Dell PowerEdge <br>
											<span class="Boldfont">R720 Server</span>
										</h4>
										<p class="kn-btn"><a id="show-deatil"><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-up" aria-hidden="true"></i> Know More</a></p>
										<div class="features-detail">
											<h6>Key Features:</h6>
											<ul class="product-benifit-list">
												       <li> CPU(s): 2 x Intel E5 Multi Core
								                        </li>
								                        <li> Memory: 24 DIMM Slots (Max 768GB)
								                        </li>
								                        <li> RAID: PERC H310, PERC H710 512MB NV, PERC H710p 1GB NV
								                        </li>
								                        <li> HDD: 2.5" or 3.5" Hot Swap SAS, SATA and Near Line SAS
								                        </li>
								                        <li> RISER: Up to 7 PCIe Slots (4 Full Height, 3 Half Height)
								                        </li>
								                        <li> Power: 495W or 750W or 1100W Hot Swap Redundant </li>
											</ul>
											<p><a class="rent-btn">Rent Now</a></p>
										</div>

									</div>
								</div>
								<div class="col-sm-4 col-md-3 col-xl-3 product-box">
									<div class="product-inner">
										   <img src="images/DellPowerEdge-R720xd-Server.png">
										<h4>Dell PowerEdge <br>
											<span class="Boldfont">R720xd Server </span>
										</h4>
										<p class="kn-btn"><a id="show-deatil"><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-up" aria-hidden="true"></i> Know More</a></p>
										<div class="features-detail">
											<h6>Key Features:</h6>
											<ul class="product-benifit-list">
												       <li> CPU(s): 2 x Intel E5 Multi Core
								                        </li>
								                        <li> Memory: 24 DIMM Slots (Max 768GB)
								                        </li>
								                        <li> RAID: PERC H310, PERC H710 512MB NV, PERC H710p 1GB NV
								                        </li>
								                        <li> HDD: 2.5" or 3.5" Hot Swap SAS, SATA and Near Line SAS
								                        </li>
								                        <li> RISER: Up to 7 PCIe Slots (4 Full Height, 3 Half Height)
								                        </li>
								                        <li> Power: 495W or 750W or 1100W Hot Swap Redundant </li>
											</ul>
											<p><a class="rent-btn">Rent Now</a></p>
										</div>

									</div>
								</div>
								<div class="col-sm-4 col-md-3 col-xl-3 product-box">
									<div class="product-inner">
									<img src="images/DellPowerEdge-R730Server-Refurbished.png">
										<h4>Dell PowerEdge <br>
											<span class="Boldfont">R730 Server Refurbished </span>
										</h4>
										<p class="kn-btn"><a id="show-deatil"><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-up" aria-hidden="true"></i> Know More</a></p>
										<div class="features-detail">
											<h6>Key Features:</h6>
											<ul class="product-benifit-list">
												        <li> CPU(s): 2 x Intel E5 Multi Core
								                        </li>
								                        <li> Memory: 24 DIMM Slots (Max 1.5TB)
								                        </li>
								                        <li> RAID: PERC H330, PERC H730 1GB NV, PERC H730P 2GB NV
								                        </li>
								                        <li> HDD: 2.5" or 3.5" Hot Swap SAS, SATA and Near Line SAS
								                        </li>
								                        <li> RISER: 7 PCIe Slots (4 Full Height, 3 Half Height)
								                        </li>
								                        <li> Power: 495W or 750W or 1100W Hot Swap Redundant </li>
											</ul>
											<p><a class="rent-btn">Rent Now</a></p>
										</div>

									</div>
								</div>
								<div class="col-sm-4 col-md-3 col-xl-3 product-box">
									<div class="product-inner">
										  <img src="images/DellPowerEdge-R730xdServer.png">
										<h4>Dell PowerEdge <br>
											<span class="Boldfont">R730xd Server </span>
										</h4>
										<p class="kn-btn"><a id="show-deatil"><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-up" aria-hidden="true"></i> Know More</a></p>
										<div class="features-detail">
											<h6>Key Features:</h6>
											<ul class="product-benifit-list">
												       <li> CPU(s): 2 x Intel E5 Multi Core
								                        </li>
								                        <li> Memory: 24 DIMM Slots (Max 1.5TB)
								                        </li>
								                        <li> RAID: PERC H330, PERC H730 1GB NV, PERC H730P 2GB NV
								                        </li>
								                        <li> HDD: 2.5" or 3.5" Hot Swap SAS, SATA and Near Line SAS
								                        </li>
								                        <li>
								                            RISER:6 PCIe Slots (3 Full Height, 3 Half Height)
								                        </li>
								                        <li>
								                            Power: 495W or 750W or 1100W Hot Swap Redundants
								                        </li>
											</ul>
											<p><a class="rent-btn">Rent Now</a></p>
										</div>

									</div>
								</div>
								<div class="col-sm-4 col-md-3 col-xl-3 product-box">
									<div class="product-inner">
										 <img src="images/DellPowerEdge-R740-Server.png">
										<h4>Dell PowerEdge <br>
											<span class="Boldfont">R740 Server </span>
										</h4>
										<p class="kn-btn"><a id="show-deatil"><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-up" aria-hidden="true"></i> Know More</a></p>
										<div class="features-detail">
											<h6>Key Features:</h6>
											<ul class="product-benifit-list">
												        <li> CPU(s): Up to 2 x Intel Xeon SP Multi Core
								                        </li>
								                        <li> Memory: 24 DIMM Slots (Max 3TB)
								                        </li>
								                        <li>RAID: PERC H330, PERC H730P 2GB NV, PERC H740P 8GB NV
								                        </li>
								                        <li> HDD: 2.5" or 3.5" Hot Swap SAS, SATA and Near Line SAS
								                        </li>
								                        <li> RISER: Up to 8 PCIe Slots (Gen 3 slots, max 4x x16 bandwidth)
								                        </li>
								                        <li>Power: 495W or 750W, 1100W, 1600W, and 2000W Hot Swap Redundant</li>
											</ul>
											<p><a class="rent-btn">Rent Now</a></p>
										</div>

									</div>
								</div>
								<div class="col-sm-4 col-md-3 col-xl-3 product-box">
									<div class="product-inner">
									 <img src="images/DellPowerEdge-R740xdServer.png">
										<h4>Dell PowerEdge <br>
											<span class="Boldfont">R740xd Server </span>
										</h4>
										<p class="kn-btn"><a id="show-deatil"><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-up" aria-hidden="true"></i> Know More</a></p>
										<div class="features-detail">
											<h6>Key Features:</h6>
											<ul class="product-benifit-list">
												        <li> CPU(s): Up to 2 x Intel Xeon SP Multi Core
								                        </li>
								                        <li> Memory: 24 DIMM Slots (Max 3TB)
								                        </li>
								                        <li>RAID: PERC H330, PERC H730P 2GB NV, PERC H740P 8GB NV
								                        </li>
								                        <li> HDD: 2.5" or 3.5" Hot Swap SAS, SATA and Near Line SAS
								                        </li>
								                        <li> RISER: Up to 8 PCIe Slots (Gen 3 slots, max 4x x16 bandwidth)
								                        </li>
								                        <li>Power: 495W or 750W, 1100W, 1600W, and 2000W Hot Swap Redundant</li>
											</ul>
											<p><a class="rent-btn">Rent Now</a></p>
										</div>

									</div>
								</div>
								<div class="col-sm-4 col-md-3 col-xl-3 product-box">
									<div class="product-inner">
										 <img src="images/DellPowerEdge-R810.png">
										<h4>Dell PowerEdge <br>
											<span class="Boldfont">R810 </span>
										</h4>
										<p class="kn-btn"><a id="show-deatil"><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-up" aria-hidden="true"></i> Know More</a></p>
										<div class="features-detail">
											<h6>Key Features:</h6>
											<ul class="product-benifit-list">
												         <li> High virtualization density
								                        </li>
								                        <li> Built for reliability
								                        </li>
								                        <li> Energy efficient
								                        </li>
								                        <li> Advanced RAS features
								                        </li>
											</ul>
											<p><a class="rent-btn">Rent Now</a></p>
										</div>

									</div>
								</div>
								<div class="col-sm-4 col-md-3 col-xl-3 product-box">
									<div class="product-inner">
										  <img src="images/DellPowerEdge-R820Server.png">
										<h4>Dell PowerEdge <br>
											<span class="Boldfont">R820 </span>
										</h4>
										<p class="kn-btn"><a id="show-deatil"><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-up" aria-hidden="true"></i> Know More</a></p>
										<div class="features-detail">
											<h6>Key Features:</h6>
											<ul class="product-benifit-list">
												          <li> CPU(s): 4 x Intel E5 Multi Core
									                        </li>
									                        <li>Memory: 48 DIMM Slots (Max 512GB)
									                        </li>
									                        <li> RAID: PERC H310, PERC H710 512MB NV, PERC H710p 1GB NV
									                        </li>
									                        <li> HDD: 2.5" Hot Swap SAS, SATA and Near Line SAS
									                            RISER: 7 PCIe Slots (4 Full Height, 3 Half Height)
									                            Power: 495W or 750W or 1100W Hot Swap Redundant
									                        </li>
									                        <li> HDD: 2.5" Hot Swap SAS, SATA and Near Line SAS
									                        </li>
									                        <li>
									                            Power: 495W or 750W or 1100W Hot Swap Redundant
									                        </li>
											</ul>
											<p><a class="rent-btn">Rent Now</a></p>
										</div>

									</div>
								</div>

							</div>
						</div>
						<div id="Storage-box" class="tab-pane fade">
							<div class="col-md-12 same-box">
								<div class="row">
									<div class="col-sm-6 col-md-4 col-xl-4 product-box">
										<div class="product-inner">
											<img src="images/san-img.png">
											<h3>SAN Storage on Rent</h3>
											<p class="kn-btn"><a id="show-deatil"><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-up" aria-hidden="true"></i> Know More</a></p>
											<div class="features-detail">
												<p>TechServersInfra provide Storage Area Network System (SAN) on Rent as per your requirement. With this you can easily store all confidential data from office via our SAN Rental Solutions.</p>
												<br>
												<p><b>We provide IBM SAN DS3400, 450 GB * 12 TB Hot Swap-able HDD, RPS, Raid 0,1,5, 10, SAN Switch 24 Port on Rent.</b></p>
												<br>
												<p><a class="rent-btn">Rent Now</a></p>
											</div>

										</div>
									</div>
									<div class="col-sm-6 col-md-4 col-xl-4 product-box">
										<div class="product-inner">
											<img src="images/nas-img.png">
											<h3>NAS Storage on Rent</h3>
											<p class="kn-btn"><a id="show-deatil"><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-up" aria-hidden="true"></i> Know More</a></p>
											<div class="features-detail">
												<p>Company’s data is essential for any company. Direct access to it allows smooth functioning of the company. Lack of reach to it causes poor customer service, loss of sale and sheer confusion.</p>
												<br>
												<p>With <b>TechServerInfra</b> you wouldn’t have to worry about it. Ad we offer rental NAS storage services so you may get instant and seamless access to you data at any time.</p>
												<br>
												<p><a class="rent-btn">Rent Now</a></p>
											</div>

										</div>
									</div>
									<div class="col-sm-6 col-md-4 col-xl-4 product-box">
										<div class="product-inner">
											<img src="images/das-img.png">
											<h3>DAS Storage on Rent</h3>
											<p class="kn-btn"><a id="show-deatil"><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-up" aria-hidden="true"></i> Know More</a></p>
											<div class="features-detail">
												<p>We also provide Direct Attached Storage for your storage related problems. You can store all your important data through our DAS Rental Solutions with TechServerInfra. We help attaching DAS directly to your computers and server for storing important digital data.</p>
												<br>
												<p>We provide IBM DAS 2 TB, Fiber Optic Cable, 450 GB – 5 TB Hot swap-able HDD, Raid 0,1,5,10 on Rent.</p>
												<br>
												<p><a class="rent-btn">Rent Now</a></p>
											</div>

										</div>
									</div>
									<div class="col-sm-6 col-md-4 col-xl-4 product-box">
										<div class="product-inner">
											<img src="images/dat-img.png">
											<h3>DAT Tape Drive on Rent</h3>
											<p class="kn-btn"><a id="show-deatil"><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-up" aria-hidden="true"></i> Know More</a></p>
											<div class="features-detail">
												<p>Protect your business, remote office or workgroup with external LTO Tape Drives offering the ability to store up to 320 GB of compressed data on a single cartridge at speeds of up to 86 GB/ Hr (assuming 2:1 data compression).</p>
												<br>
												<p>TSI offer rental solution for DAT Tape Drive with high capacity, faster access to data & long-term data retention. We help enhance data security, data management, reduce storage cost.</p>
												<br>
												<p><a class="rent-btn">Rent Now</a></p>
											</div>

										</div>
									</div>
									<div class="col-sm-6 col-md-4 col-xl-4 product-box">
										<div class="product-inner">
											<img src="images/lto-img.png">
											<h3>LTO Tape Drive Storages on Rent (LTO1,2,3,4,5,6)</h3>
											<p class="kn-btn"><a id="show-deatil"><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-up" aria-hidden="true"></i> Know More</a></p>
											<div class="features-detail">
												<p>We offer LTO Tape Drive on rental services which includes all sort of LTO Tape Drive (LTO 1, LTO 2, LTO 3, LTO 4, LTO 5 or LTO 6).</p>
												<br>
												<p>For any mentioned LTO requirements you can reach out to us.</p>
												<br>
												<p><a class="rent-btn">Rent Now</a></p>
											</div>

										</div>
									</div>
								</div>
							</div>

						</div>
						<div id="Desktop-tab" class="tab-pane fade">
							<div class="col-md-12 same-box">
								<div class="row">
									<div class="col-sm-6 product-box">
										<div class="product-inner">
											<img src="images/desktop-img.png">
											<h3>TechServers Customize Desktops</h3>
											<p class="kn-btn"><a id="show-deatil"><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-up" aria-hidden="true"></i> Know More</a></p>
											<div class="features-detail">
												<p>We offer various customization for Computers. TSI knows its varied client base and their requirement needs, hence we assemble the computer with your specified.</p>
												<br>
												<p><b>Ram, HDD, Processor, etc as per your Business, Project, Event Requirements.</b></p>
												<br>
												<p><a class="rent-btn">Rent Now</a></p>
											</div>

										</div>
									</div>
									<div class="col-sm-6 product-box">
										<div class="product-inner">
											<img src="images/cpu-img.png">
											<h3>OEM Desktops</h3>
											<p class="kn-btn"><a id="show-deatil"><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-up" aria-hidden="true"></i> Know More</a></p>
											<div class="features-detail">
												<p>Basis the requirements of our clients we offer <b>OEM desktops.</b></p>
												<br>
												<p><a class="rent-btn">Rent Now</a></p>
											</div>

										</div>
									</div>
								</div>

							</div>

						</div>
						<div id="Laptop-tab" class="tab-pane fade">
						  <div class="col-md-12 same-box">
								<div class="row">
									<div class="col-sm-6 product-box">
										<div class="product-inner">
											<img src="images/cus-laptop-img.png">
											<h3>Techservers customize laptops</h3>
											<p class="kn-btn"><a id="show-deatil"><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-up" aria-hidden="true"></i> Know More</a></p>
											<div class="features-detail">
												<p>We offer various customization in Laptop Rentals. From Rental Duration to the configuration:</p>
												<br>
												<p><b>RAM, HDD, Processor, Graphics Card everything is custom built as per the client’s requirements.</b></p>
												<br>
												<p><a class="rent-btn">Rent Now</a></p>
											</div>

										</div>
									</div>
									<div class="col-sm-6 product-box">
										<div class="product-inner">
											<img src="images/oem-laptop-img.png">
											<h3>OEM Laptops</h3>
											<p class="kn-btn"><a id="show-deatil"><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-up" aria-hidden="true"></i> Know More</a></p>
											<div class="features-detail">
												<p>Basis the requirements of our clients we offer <b>OEM laptops.</b></p>
												<br>
												<p><a class="rent-btn">Rent Now</a></p>
											</div>

										</div>
									</div>
								</div>

							</div>
						</div>
						<div id="networking" class="tab-pane fade">
						  <div class="col-md-12 same-box">
								<div class="row">
									<div class="col-sm-4 product-box">
										<div class="product-inner">
											<img src="images/router-img.png">
											<h3>Routers</h3>
											<p class="kn-btn"><a id="show-deatil"><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-up" aria-hidden="true"></i> Know More</a></p>
											<div class="features-detail">
												<p>Basis the requirements of our clients we provide routers.</p>
												<br>
												<p><a class="rent-btn">Rent Now</a></p>
											</div>

										</div>
									</div>
									<div class="col-sm-4 product-box">
										<div class="product-inner">
											<img src="images/swithches-img.png">
											<h3>Switches</h3>
											<p class="kn-btn"><a id="show-deatil"><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-up" aria-hidden="true"></i> Know More</a></p>
											<div class="features-detail">
												<p>Basis the requirements of our clients we provide switches.</p>
												<br>
												<p><a class="rent-btn">Rent Now</a></p>
											</div>

										</div>
									</div>
								</div>

							</div>
						</div>
						<div id="apple" class="tab-pane fade">
							<div class="col-md-12 text-center same-box">
							  <h3><b>Apple Products On Rent</b></h3>
							  <h4>On Request</h4>
							  <p><a class="Request-btn rent-btn">Request Now</a></p>
							  <img src="images/apple-product.png" alt="">
							</div>
						</div>
						<div id="other-box" class="tab-pane fade">
							<div class="col-md-12 text-center same-box">
							  <h3><b>Other Equipment on Rent</b></h3>
							  <h4>On Request</h4>
							  <p><a class="Request-btn rent-btn">Request Now</a></p>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="services-main" class="font-box section1 mobile-section-box">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-2 col-xl-2 services-box-img">
                    <img src="images/icon1.png">
					<p>Business-specific optimized inventory.</p>
                </div>
				<div class="col-sm-4 col-md-2 col-xl-2 services-box-img">
                    <img src="images/icon2.png">
					<p>Delivers customized performance at no extra cost.</p>
                </div>
				<div class="col-sm-4 col-md-2 col-xl-2 services-box-img">
                    <img src="images/icon3.png">
					<p>Rapid scalability at short notice.</p>
                </div>
				<div class="col-sm-4 col-md-2 col-xl-2 services-box-img">
                    <img src="images/icon4.png">
					<p>Zero cost of obsolescence and upgrades.</p>
                </div>
				<div class="col-sm-4 col-md-2 col-xl-2 services-box-img">
                    <img src="images/icon5.png">
					<p>Eliminates maintenance and service expenses.</p>
                </div>
				<div class="col-sm-4 col-md-2 col-xl-2 services-box-img">
                    <img src="images/icon6.png">
					<p>Greater flexibility for business planning.</p>
                </div>
            </div>
        </div>
    </section>
    </main>
    <div class="popup-main">
	<div class="popup-box">
		<div class="close-btn">
			<button id="close-btn"><img src="images/X.png" alt=""></button>
		</div>
		 <form  name="newsletter-form" id="popup-id" method="POST" action="info.php" autocomplete="off">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <input type="text" id="name" name="name" placeholder="Name*">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <input type="email" id="email" name="email" placeholder="Email Id*">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <input type="text" id="phoneno" name="phoneno" placeholder="Phone Number*">
                            </div>
                           
							<input type="hidden" name="type" value="service">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-0 btnbox">
                                <button class="btn primary mess-btn" type="submit">Send Message <i class="fa fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </form>
	</div>
</div>

	<script>
		$(document).ready(function(){
		  $(".rent-btn").click(function(){
			$(".popup-main").addClass("enquiry-form");
		  });
		  $("#close-btn").click(function(){
			$(".popup-main").removeClass("enquiry-form");
		  });
		});
	</script>

<?php
include "footer.php";
?>