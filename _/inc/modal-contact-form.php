<section class="contact-us modal" id="contact-us">
	<h1>Contact Us</h1>
	<style>
        input.invalid{border: 3px solid #000}
        .smlink{font-size: 10px}
        .smerrmsg{font-size: 10px; color:#f00}        
    </style>
	<form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="post">
		
		<input type="hidden" name="retURL" value="http://advertising.paypal.com/contact-thankyou/index.php" />
		<input type="hidden" id="Account_Type__c" name="Account_Type__c" value="Advertiser/Brand" />
		<input type="hidden" id="lead_source" name="lead_source" value="Web" />
		<input type="hidden" id="recordType" name="recordType" value="012800000003jcP" />

		<ul id="contactusfrm">
			<li><label>First Name <input type="text" name="first_name" required="required" id="firstname" data-thename="First Name"/></label></li>
			<li><label>Last Name <input type="text" name="last_name" required="required" id="lastname" data-thename="Last Name"/></label></li>
			<li><label>Company <input type="text" name="company" required="required" id="company" data-thename="Company Name"/></label></li>
			<li><label>Email <input type="email" name="email" required="required" id="email" data-thename="Email"/></label></li>
			<li><label>Please contact me about… <textarea id="descrip" rows="4" cols="30" name="description" required="required" data-thename="Contact me about..."></textarea></label></li>
			 <p class="smerrmsg"></p>
			<li><input type="hidden" name="title" value="christielaughs"/></li>
			<li><input type="hidden" name="oid" id="oid"/></li>
			<li><input type="submit" value="Submit" name="submit" id="contactsubmitbtn"/></li>
		</ul>
	</form>
	<script>document.getElementById('oid').value = '00D300000000LaY';</script>
</section><!-- .contact-us .modal -->