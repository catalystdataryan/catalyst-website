<?php

// enter the email address of where
// you want to receive the form submissions
$email_to = "ryan@catalystdataconsulting.com";

// enter the email subject line
$email_subject = "Message from website";

// Use HTML email or Plain text
// Set value to "HTML" or "Plain"
$email_type = "HTML";

// Phone field
// Set value to "no", "yesoptional" or "yesrequired"
$show_phone = "yesoptional";

// Company field
// Set value to "no", "yesoptional" or "yesrequired"
$show_company = "yesoptional";

// Use SMTP or try and use your servers default emailer
// set value to "yes" or "no"
$use_smtp = "yes";

// Use your own SMTP setting 
// or a free smtp hosts (mandrill.com, sendgrid.com or gmail.com)
$smtp_host = "smtp-relay.gmail.com";
$smtp_username = "ryan@catalystdataconsulting.com";
$smtp_password = "Ardyparty9!";
$smtp_port = "587";

// Use ReCAPTCHA V2
// Generate your keys at: https://www.google.com/recaptcha/intro/index.html
// set value to "yes" or "no"
$use_recaptcha = "no";
$sitekey = "";
$privatekey = "";

// If you have problems getting SMTP to work
// switch on debugging output
// set value to "yes" or "no"
$smtp_debug = "no";

// If you require "ssl" or "tls", set the value below
$smtp_secure = "";

// If you want to capture the users IP address
// set this to "yes" or set it to "no"
$show_users_ip = "yes";

// Use GDPR or require consent
$use_gdpr = "yes";