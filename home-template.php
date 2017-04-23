<?php

/*
Template Name: Main Landing Page
*/

get_header();

?>

<body id="page-top">
    <header class="masthead" id="main">
        <div class="row header-content">
        	<div class="col-lg-6 col-md-12">
        		 <div class="header-content-inner">
                <h1 id="homeHeading">Borrow up to <span class="cta-color">80%</span> of Your Car Value!</h1>
                <hr class="primary marginleft">
                <span class="check-container"><i class="fa fa-check-square-o cta-color sr-icons"></i>Loans from £250 to £50,000</span></br>
                <span class="check-container"><i class="fa fa-check-square-o cta-color sr-icons"></i>All Vehicles Considered no Matter the Age or Value</span></br>
                <span class="check-container"><i class="fa fa-check-square-o cta-color sr-icons"></i>Flexible Loan Periods - 12, 18 or 36 months</span></br>
                <span class="check-container"><i class="fa fa-check-square-o cta-color sr-icons"></i>You Keep Your Vehicle During the Period</span></br>
                



            </div> 
      </div>
        	 <!-- FORM LAYOUT -->
 <form id="main-form" class="bg-primary col-lg-6 col-md-12">
  <div class="row">
  	<div class="form-headline">Get your free quote!</div>
  </div>
  <div class="row">
  	<div class="col-md-12 form-subheadline">Your Car Details</div>
  </div>
  <div class="row">
	  <div class="col-md-7 col-xs-12">
	    <!-- <input type="text" class="form-control" name="car-make" placeholder="Car Make"> -->
	    <select class="form-control" name="car-make" id="carMake">
	    	<option value="" disabled selected>Choose car make</option>
		</select>
	  </div>
	  <div class="col-md-5 col-xs-12">
	   <select class="form-control" name="car-model" id="carModel">
	   	    <option value="" disabled selected>Choose car model</option>
	   </select>
	  </div>
</div>
<div class="row">
  <div class="col-md-3 col-xs-12">
    <input type="text" class="form-control" name="car-year" placeholder="Car Year">
  </div>
  <div class="col-md-4 col-xs-12">
    <input type="text" class="form-control" name="current-ml" placeholder="Aprox mileage">
  </div>
  <div class="col-md-5 col-xs-12">
  	<input type="text" class="form-control" name="number-plate" placeholder="Number Plate">
  </div>
</div>
  <div class="row">
  	<div class="col-md-4 form-subheadline">Your personal details</div>
  	<div id="message" class="col-md-8 form-error text-right"></div>
  </div>
  <div class="row">
  <div class="col-md-3 col-xs-12">
	<select class="form-control" name="title" id="mrMrs">
	    <option value="Mr">Mr</option>
	    <option value="Mrs">Mrs</option>
	</select>
  </div>
  <div class="col-md-4 col-xs-12">
    <input type="text" class="form-control" name="first-name" placeholder="First Name">
  </div>
  <div class="col-md-5 col-xs-12">
    <input type="text" class="form-control" name="last-name" placeholder="Last Name">
  </div>
</div>
<div class="row">
  <div class="col-md-7 col-xs-12">
    <input type="text" class="form-control" name="email-address" placeholder="Email Address">
  </div>
  <div class="col-md-5 col-xs-12">
    <input type="text" class="form-control" name="phone-number" placeholder="Phone Number">
  </div>
</div>
<div class="row">
  <div class="col-md-7 col-xs-12">
    <input type="text" class="form-control" name="post-code" placeholder="PostCode">
  </div>
  <div class="col-md-5 col-xs-12">
    <input type="text" class="form-control" name="time-to-call" placeholder="Preferred time to call?">
  </div>
</div>

<div class="row">
  <div class="col-md-7 col-xs-12 form-legend">
    Clicking the button indicates that you have read our Terms & Conditions and Privacy Policy.
  </div>
  <div class="col-md-5 col-xs-12">
      <button type="submit" id="quote-me" class="btn btn-default form-button">Get Your Quote</button>
  </div>
</div>

</form>
        <!-- END FORM -->
        
        </div> 
    </header>
   
    <!-- Section with steps -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">WITHDRAW THE MONEY FROM YOUR CAR TODAY!</h2>
                    <p class="text-muted">The Days of Detailed Credit Checks and Lengthy Procedures of Loan Application Are Gone!</p>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-pencil-square-o cta-color sr-icons"></i>
                        <h3>FILL IN OUR FORM</h3>
                        <p class="text-muted">It takes no more than 2 minutes, as we ask only the information we need.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-user cta-color sr-icons"></i>
                        <h3>GET A FREE QUOTE</h3>
                        <p class="text-muted">Get a free quote within minutes from one of our professional staff without any obligation!</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-credit-card cta-color sr-icons"></i>
                        <h3>RECEIVE THE MONEY</h3>
                        <p class="text-muted">Receive your money in 24 hours or less  and use them however you want!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <section class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <h2 class="section-heading text-white">2 Minute Application Form</h2>
                    
                    <p class="text-faded">Get a free quote within minutes from one of our professional staff without any obligation! It takes no more than 2 minutes.</p>
                    <a class="btn btn-default btn-xl sr-button" href="#main">Get Started!</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section with text on the left -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-12 text-left">
                    <h2 class="section-heading">WHAT IS A <span class="brand-color">LOGBOOK LOAN</span></h2>
                    <hr class="primary marginleft">
                    <p class="">Have you failed to maintain a good credit score throughout your life? Wondering how you would shoot ahead of an emergency financial crisis?</p>

					<p>Well luckily, you have an immediate solution – The Logbook Loan!
					Don’t worry - days of detailed credit checks and lengthy procedures of loan application can now take a backseat. A logbook loan allows you to get hands on a desired sum of money in time, much less than expected.</p>

					<p><strong>All you need is a vehicle solely owned by you and that’s it, you can happily put an end to your financial struggles.</strong></p>

					<p>Poor credit report, constant rejection of loans – all these things does not matter when you are applying for a logbook loan. Meet a proper vendor, hand him your vehicle’s logbook or the registration certificate and in less than 15 minutes, you are good to go with loads of cash in hand.</p>

					<p>Now cater to your funding needs or foot the bills of an emergency situation, plan an exotic holiday or shop-in your favorite widgets. With a logbook loan in hand, you can forget the stories of your bad credit report and take pleasure in the feel of being rich.</p>

					<p>Struggling to find a right vendor offering logbook loans? We are here to help you right-away. From accommodating your needs to finding an appropriate vendor for your loan, we do it all. However, on your part, you are just requested to invest as little as 2 minutes to fill up our online form and expected to have your very own legal car registration certificate ready. That’s it!</p>
                </div>
                <div class="col-lg-2 col-md-12 text-center">
                    <div class="service-box vertical-center">
                        <i class="fa fa-4x fa-lightbulb-o text-primary sr-icons"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- CTA Section -->

    <section class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <h2 class="section-heading text-white">No Obligation Quote</h2>
                    
                    <p class="text-faded">A free quote is all you will get! There is absolutely no obligation to proceed with a logbook loan.</p>
                    <a class="btn btn-default btn-xl sr-button" href="#main">Get Your Quote!</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End CTA -->

    <!-- Section with text on the left -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 text-left">
                    <h2 class="section-heading">LOGBOOK LOAN <span class="brand-color">EXPLAINED</span></h2>
                    <hr class="primary marginleft">
                    <p class="">If you have been expecting monetary assistance from banks and other financial institutions, it is quite obvious that you are well-acquainted with terms like collaterals, debts, principal, annuity and interests. Unlike regular loans, a logbook loan is easier to get, provided you have a vehicle that is legally owned by you.</p>

					<p>The reason why it is known as a ‘Logbook Loan’ highlights the fact that the vehicle logbook (or the bill of sale) of the loan applicant is picked up by the vendor as a token of security, better known as ‘Collateral’.</p>

					<p>An urgency of cash and emergency situation usually spring up bolt from the blue. In such cases, what would you pick first – a complex and lengthy loan application process that might wrap up after your problem has been resolved and is not even guaranteed or a 5-minute quick process that can help you bag-in your required amount?</p>

					<p>Surely, a 2-minute logbook loan is a much favorable option and the process is undoubtedly a cakewalk.</p>
					<p>To top it off, bad credit reports, CCJ’s and even bankruptcy plays no role in the sanction of logbook loans.</p>

					<p>What better and easy can a logbook loan get?</p>
                </div>
                <div class="col-md-4 hidden-sm-down text-center">
                    <div class="service-box vertical-center">
                        <img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/img/logbookloan-car.png" alt="">  
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- CTA section -->
    <section class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <h2 class="section-heading text-white">ALL VEHICLES CONSIDERED</h2>
                    <p class="text-faded">No matter the age or the value.</p>
                    <a class="btn btn-default btn-xl sr-button" href="#services">Get My Quote!</a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- End CTA section -->
    <!-- Section with text on the left -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left">
                    <h2 class="section-heading">WHY CHOOSE US</h2>
                    <hr class="primary marginleft">
                    <p>If you are interested in taking a logbook loan, we can provide it to you. <strong>We are a well known UK company targeting mainly the local market. </strong>We can help you obtain cash for any purpose quickly, easily and at affordable rates. Helping our customers and lending responsibly are our mottos.</p>

					<p>If you are the legal owner of a car and you have a full time job or you are self-employed, you can contact us right away! We can offer you a great loan between £250 and £50,000 and we will give you the opportunity to choose a payment schedule that suits your needs and your budget.</p>		 

					<p>Our aim is to find you the most competitive rate available. We’ve helped thousands of people get an affordable logbook loan. We will help you, too!</p>				 
					<p>Simply fill in our form now for an instant logbook loan quote. We’ll let you know if you qualify immediately and get back to you with a quote.</p>

					<span class="check-container"><i class="fa fa-check-square-o text-primary sr-icons"></i>If you prefer a phone quote you can call us for free on 0808 271 7364 (Mon-Fri 8am-8pm and Sat 10am-4pm)</span></br>

                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

  <section class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                	<h2 class="section-heading text-white">Loans from £250 to £50,000</h2>
                </div>
            </div>
        </div>
    </section>

    <!-- Table section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">REPRESENTATIVE EXAMPLE</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 text-center">
                   <table class="table table-hover">
						  <thead class="thead-default">
						    <tr>
						      <th class="text-center">TOTAL AMOUNT OF CREDIT</th>
						      <th class="text-center">TOTAL AMOUNT PAYABLE*</th>
						      <th class="text-center">%APR REPRESENTATIVE**</th>
						      <th class="text-center">FIXED ANNUAL INTEREST RATE</th>
						      <th class="text-center">DURATION</th>
						      <th class="text-center">INSTALMENTS</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <td>£850 </td>
						      <td>£2,533.00</td>
						      <td>450.5% </td>
						      <td>132%</td>
						      <td>18 MONTHS</td>
						      <td>18 X £140.72</td>
						    </tr>  
						  </tbody>
					</table>
					<p>*  Our lending partners only charge interest monthly and do not penalise you for early settlement.<br /> If you repaid the loan in one month it would cost you just £93.50 and nothing more.</p>
					<p>** Rates range from 99.9% to 606.3% MAX APR. Logbook loans are instalment loans secured against your vehicle and are subject to affordability.</p>
                </div>
            </div>
        </div>
    </section>
    

    

    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
                <div class="col-md-12">
                        <img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/img/1.jpg" alt="">
                    
                </div>
            </div>
        </div>
    </section>

    <div class="call-to-action bg-dark">
        <div class="container text-center">
            <h2>Ready? Get Started with Your Quote!</h2>
            <a class="btn btn-default btn-xl sr-button" href="http://startbootstrap.com/template-overviews/creative/">Get Your Quote</a>
        </div>
    </div>

    	<section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>We do not directly offer any financial products, but refer customers to companies that are authorised and regulated by the Financial Conduct Authority.</p>

                    <p>All loans granted subject to affordability. Proof of income will be required.
A Log Book loan is secured against your vehicle, which may be repossessed if you do not make payment.
Late or missed payments may incur a charge for chasing letters and telephone calls.
Lenders abide by the CCTA voluntary Code of Practice.
We do not have a renewal policy.</p>
                </div>
            </div>
        </div>
        </section>

</body>

<?php get_footer(); ?>