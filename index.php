<?php

// Credits do not remove  				
// This Contact form created by 
// Fernando Machado > https://github.com/fmachadoweb	

// Demo in: https://alfawebhost.com.br/mail/



if (isset($_POST['BTSend'])) {
 
 //POST variables, change only if necessary
 //====================================================
 $name = $_POST['name'];
 $email = $_POST['email'];
 $phone = $_POST['phone']; 
 $message = $_POST['message'];
 //====================================================
 
 //SENDER --> THIS EMAIL MUST BE A VALID DOMAIN
 //==================================================== 
 $email_sender = "mail@udomainmail.com"; // must be an email account on your domain
 //====================================================
 
 //Email settings, adjust as needed
 //==================================================== 
 $email_sender = "mail@ureceivemail.com"; // can be any email that will receive the messages
 $email_reply = "$email"; 
 $email_subject = "Contact for mail"; // This will be the subject of the message
 //====================================================
 
 //Assemble the Message Body
 //====================================================
 $email_content = "Name = $name \n"; 
 $email_content .= "Email = $email \n";
 $email_content .= "Phone = $phone \n"; 
 $email_content .= "Message = $message \n"; 
 //====================================================
 
 //Set the Headers (Change only if necessary) 
 //==================================================== 
 $email_headers = implode ( "\n",array ( "From: $email_sender", "Reply-To: $email_reply", "Return-Path: $email_sender","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
 //====================================================
 
 //Sending the email
 //==================================================== 
 if (mail ($email_sender, $email_subject, nl2br($email_content), $email_headers)){ 
 echo "</b>Email successfully sent!</b>"; 
 } 
 else{ 
 echo "</b>E-mail sending failed!</b>"; } 
 //====================================================
} 
?>
 
 <form action="<? $PHP_SELF; ?>" method="POST"> 
 <p> 
 Name:<br /> 
 <input type="text" size="30" name="name"> 
 </p>   
 <p> 
 E-mail:<br /> 
 <input type="text" size="30" name="email"> 
 </p>   
 <p> 
 Phone:<br /> 
 <input type="text" size="35" name="phone"> 
 </p>   
 <p> 
 Message:<br /> 
 <input type="text" size="35" name="message"> 
 </p>   
 <p>
          <input type="submit" name="BTSend" value="Send"> 
   <input type="reset" name="BTClear" value="Clear">
        </p>
		
