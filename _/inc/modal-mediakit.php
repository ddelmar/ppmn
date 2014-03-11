<section class="contact-us modal" id="mediakit-form">
	<style>
		input.invalid{border: 3px solid #000}
        .aste{color: #f00; vertical-align: top; font-size:10px}
        .reqn{font-size: 10px}
        .smlink{font-size: 10px}
        .mksmerrmsg{font-size: 10px; color:#f00}
	</style>
	<h1>Media Kit download</h1>
	<form name="ppmnwslead" id="ppmnwslead" action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="post">
		<input type="hidden" name="oid" value="00D300000000LaY" />
		<input type="hidden" name="retURL" value="https://advertising.paypal.com/mediakit-dl/index.php" />
		<input type="hidden" id="Account_Type__c" name="Account_Type__c" value="Advertiser/Brand" />
		<input type="hidden" id="lead_source" name="lead_source" value="MediaKit" />
		<input type="hidden" id="recordType" name="recordType" value="012800000003jcP" />

		<ul id="di">
			<li><label>First Name<span class="aste">*</span> <input type="text" name="first_name" required="required" id="mkfirstname" data-thename="First Name"/></label></li>
			<li><label>Last Name<span class="aste">*</span> <input type="text" name="last_name" required="required" id="mklastname" data-thename="Last Name"/></label></li>
			<li><label>Company<span class="aste">*</span> <input type="text" name="company" required="required" id="mkcompany" data-thename="Comapny Name"/></label></li>
			<li><label>Email<span class="aste">*</span> <input type="email" name="email" required="required" id="mkemail" data-thename="Email"/></label></li>
			<li><p class="mksmerrmsg"></p></li>
            <li><input type="submit" value="Submit" name="submit" id="submitbtn"/></li>
            <li><a href="/privacy-policy/index.php" target="_blank" class="smlink">Privacy Policy</a></li>
            <li><span class="aste">*</span><span class="reqn">required</span></li>
		</ul>
	</form>

</section><!-- .contact-us .modal -->