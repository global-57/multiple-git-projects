<?php ob_start(); ?>

<!-- NOTIF LANG LOGIN -->
<?php

define('LANG_LOST_PASSWORD', "Forgot Password");	
define('LANG_SIGNUP', "Create an account");	
define('LANG_LOGIN', "Member Login");	
define('LANG_NOTIF_BLOCKED_STATUS', "Access your member area (username: {user}) has been blocked! Check your email {email} to get your access back! Code: {kode}.");
define('LANG_NOTIF_USER_NOT_FOUND', "<strong>Username {user} not found!</strong> Please enter registered username");	
define('LANG_NOTIF_USER_NOT_ACTIVE', "Username {user} is not active! Please contact administrator.");	
define('LANG_NOTIF_WRONG_PASSWORD', "<strong>Wrong Password!</strong> Please enter correct password.");	
define('LANG_NOTIF_WRONG_CAPTCHA', "<strong>Incorrect Captcha!</strong> Please enter correct captha.");	
define('LANG_NOTIF_WRONG_SESSION', "<strong>Session expired!</strong>, Please try again.");		
define('LANG_NOTIF_SUCCESS_UPDATE_PASSWORD', "<strong>Password has been updated!</strong> Use new password for next login, for security reasons, change your password regularly. New Password: ");	
define('LANG_NOTIF_SUCCESS_UNBLOCK', "<strong>Unblock successfully!</strong> Use new password for next login, for security reasons, change your password regularly. New Password: ");
define('LANG_NOTIF_ALERT_BLOCK', "You have {batas} times entering wrong password for login user {user}! carefully, {batase} times you enter wrong password, your access will be blocked! If you forgot your password, please use forgot password option!");
define('LANG_NOTIF_ALERT_CONFIRM_REG', "Thank You {nama}, Your registration has been confirmed.");	
define('LANG_NOTIF_ALERT_NOTVALID_SMS', "<h4 class='alert-heading'><strong>SMS Confirmation</strong></h4><p>We have sent an confirmation code to your mobile phone {hp}. Please check your mailbox. If you do not receive any SMS, please resend Activation Code.</p><p><a class='btn blue' href='./validation.php?do=sms&user={user}'>Resend</a></p>");
define('LANG_NOTIF_ALERT_NOTVALID_EMAIL', "<h4 class='alert-heading'><strong>Email Confirmation</strong></h4><p>We have sent an confirmation link to your email {email}. Please check your mailbox. If you do not receive any mail, please resend confirmation link.</p><p><a class='btn blue' href='./validation.php?do=mail&user={user}'>Resend</a></p>");
define('LANG_NOTIF_RESET_PASS_CEK', "Your password has been reset before, we had to send back a confirmation link to your email {email}, please check your mailbox.");
define('LANG_NOTIF_SEND_EMAILLINK_AGAIN', "You recently resend confirmation link to your email, please wait {waktu} to be able resend again.");

define('LANG_NOTIF_SEND_SMSCODE_AGAIN', "You recently resend sms confirmation code to your mobile, please wait {waktu} to be able resend again.");
define('LANG_NOTIF_SEND_SMSCODE', "Confirmation code has been sent to your mobile phone {hp}, Please check and confirm your registration.");
define('LANG_NOTIF_SEND_EMAILLINK', "Confirmation link has been sent to your email address {email}, Please check and confirm your registration.");

define('LANG_ALERT_BLOCK_LOGIN', "Access Denied!\nYour membership is still blocked!");
define('LANG_NOTIF_NOACTIVE_ALL', "We have sent an activation to your email and your mobile phone. Please check your mailbox and confirm your registration.");


define('LANG_LOGIN_RESET_PASS', "click <a href='./forgotpass.php'>here</a> to reset password");
define('LANG_LOGIN_REGISTER_NEW', "Don't have an account yet? <a href='./register.php' id='register-btn'>Create an account</a>");

 
define('LANG_REG_TITLE_DATA', "Enter your personal details below:");
define('LANG_REG_TITLE_LOGIN', "Enter your account details below: ");


define('LANG_NAME', "Full Name");	
define('LANG_EMAIL', "Email Address");	
define('LANG_MOBILE', "Phone Number");	
define('LANG_CITY', "City/Town");	
define('LANG_SEL_COUNTRY', "Select Country");	
define('LANG_RE-PASS', "Re-type Your Password");	
define('LANG_REG_SUBMIT', "Signup");	
define('LANG_BACK', "Back");


define('LANG_REGISTER_SUCCESS', "<h4 class='alert-heading'><strong>Registration is successful</strong></h4><p>Thank you {nama}, your registration has been stored in our database. Please login members area and make payments according to the value of the package you choose.</p>");
define('LANG_REGISTER_NO_REFF', "Refferal not found! Refresh this page or access this website through your referral link.");
define('LANG_REGISTER_USER_ON', "Username already used! Please use another username.");
define('LANG_REGISTER_MAX_EMAIL', "Email {email} has registered {p} times. Please use a different email, 1 email only for {batas} registration");
define('LANG_REGISTER_MAX_HP', "Phone number {hp} has registered {p} times. Please use a different phone number, 1 phone number only for {batas} registration");
	
	
define('LANG_LOST_PIN', "Forgot PIN");
define('LANG_FORGOT_NO_PIN', "PIN not found!");	
define('LANG_FORGOT_WRONG_PIN', "You entered wrong PIN!");
define('LANG_FORGOT_BLOCK_PIN', "Your PIN has been blocked! Please contact administrator.");
define('LANG_FORGOT_OFF_PIN', "Your PIN inactive! please activate your PIN in the member area.");
define('LANG_FORGOT_ALREADY_SENT', "You already sent request reset password 3 times, please processed first previous request before.");


define('LANG_FORGOT_SENT_REFRESH', "Link to reset password has been sent to your email, please check your email");
define('LANG_FORGOT_SENT_GO', "Link to reset password has been sent to your email, please check your email");



define('LANG_SEND_BUTTON', "Send");	
define('LANG_LOGIN_BUTTON', "Login");	
define('LANG_UPDATE_BUTTON', "Update");	
define('LANG_SIMPAN_BUTTON', "Save");	
define('LANG_RESET_PASSWORD', "Update Password");
define('LANG_RESET_PASSWORD_NEW', "New Password");
define('LANG_RESET_PASSWORD_NEW2', "Confirm New Password");

define('LANG_REGISTER_SUCCESS_MEMBER', "<h4 class='alert-heading'><strong>Registration is successful</strong></h4><p>Thank you {nama}, you have successfully registered new members. Your registration has been stored in our database. Point your new member to the member login area and make payments according to the value of the package you choose.</p>");
?>


<?php
$LANG["register"] = "Register";
$LANG["firstn"] = "First Name";
$LANG["lastn"] = "Last Name";
$LANG["address"] = "Address";
$LANG["country"] = "Country";
$LANG["province"] = "Province";
$LANG["name"] = "Name";
$LANG["city"] = "City";
$LANG["zipcode"] = "Zipcode";
$LANG["cellphone"] = "Cell Phone";
$LANG["email"] = "Email Address";
$LANG["username"] = "Username";
$LANG["password"] = "Password";
$LANG["pin"] = "PIN Code";
$LANG["bank"] = "Bank Name";
$LANG["ben_country"] = "Country";
$LANG["bank_acc"] = "Account No";
$LANG["ben_name"] = "Account Holder";
$LANG["swift_code"] = "Swift Code";
$LANG["iban"] = "IBAN";
$LANG["captcha"] = "Security Code";
$LANG["submit"] = "Submit";
$LANG["reset"] = "Reset";
$LANG["news"] = "News";
$LANG["ticket"] = "Ticket";
$LANG["dtnews"] = "News Detail";
$LANG["statistic"] = "Statistic";
$LANG["investor"] = "Investor";
$LANG["investtoday"] = "Investor Today";
$LANG["investonline"] = "Online Investor";
$LANG["visittoday"] = "Visitor today";
$LANG["totvisit"] = "Total Visitor";
$LANG["visitonline"] = "Online Visitor";
$LANG["totalprofits"] = "Total Provits";
$LANG["latestnews"] = "Latest News";
$LANG["readmorenews"] = "Click here to readmore";
$LANG["nonews"] = "No News";
$LANG["enlargepic"] = "Click here to view image";
$LANG["postby"] = "Post By";
$LANG["next"] = "Next";
$LANG["prev"] = "Prev";
$LANG["readmore"] = "Read";
$LANG["testimonials"] = "Testimonials";
$LANG["sentby"] = "Sent by";
$LANG["date"] = "Date";
$LANG["subject"] = "Subject";
$LANG["notesti"] = "No testimonials";
$LANG["clickdetailtesti"] = "Click here to view testimonials";
$LANG["verification"] = "Verification";
$LANG["fotogallery"] = "Photo Galleries";
$LANG["videogallery"] = "Video Galleries";
$LANG["loginmember"] = "Member Login";
$LANG["thankyou"] = "Thank You";
$LANG["regconfirm"] = "your registration has been confirmed";
$LANG["regactive"] = "Your membership has been activated. You can login your Member Area using login form below";
$LANG["attention"] = "Caution";
$LANG["attentionblock"] = "You have already {batas} times enter wrong password, {sisane} again your members access will be blocked! If you forgot your password, please reset your password.";
$LANG["attentionlogin"] = "you have not completed steps validation and confirmation your email address. Please confirm and validate your email address, your validation link has been sent to your email during registration. If you do not receive an email, please resend validation link by click following link";
$LANG["blockmember"] = "Your Member Area has been blocked! We have sent instructions to your email to get access again, please check your email to get access back! Username : {userco} | Block Code : {kode} | Email : {email}";
$LANG["resend"] = "Resend";
$LANG["wrongcaptcha"] = "Incorrect Captcha";
$LANG["wronguser"] = "Incorrect Username";
$LANG["uaernotfound"] = "Username not found";
$LANG["wrongpass"] = "Incorrect Password";
$LANG["wrongmail"] = "Incorrect Email";
$LANG["resetpass"] = "Reset Password";
$LANG["fotgotpass"] = "Forgot Password";
$LANG["inactive"] = "Your membership status is not active! Please contact administrator.";
$LANG["sendvalidation"] = "Validation link has been sent to your email, Please check your mailbox and confirm.";
$LANG["noactiveall"] = "We have sent an validation link to your email and SMS code to your mobile phone. Please check your mailbox.";
$LANG["sendactmail"] = "Validation link has been sent to your email, Please check your mailbox.";
$LANG["alreadysentmail"] = "You recently resend email validation link, please wait a few minutes to resend again";
$LANG["alreadysentsms"] = "You recently resend SMS code, please wait a few minutes to resend again.";
$LANG["sendsms"] = "SMS code has been sent to your cell phone, Please check your mailbox.";
$LANG["resentsms"] = "If you do not receive sms please resend here";
$LANG["resentmail"] = "If you do not receive an email please resend here";
$LANG["resetpass1"] = "Confirmation to change your password has been sent to your email, please check your inbox.";
$LANG["resetpass2"] = "You already sent a request to change your password, now we send confirmation link again to your email, please check your mailbox.";
$LANG["wronglink"] = "Link verification is not correct.";
$LANG["wrongsmscode"] = "SMS code is not correct.";
$LANG["passtreetimes"] = "You already 3 times request to change your password before, please check your mailbox and process it before you can request to change your password again.";
$LANG["send"] = "Send";
$LANG["cancel"] = "Cancel";
$LANG["openblock"] = "Unblock";
$LANG["blockode"] = "Block Code";
$LANG["newpass"] = "New Password";
$LANG["newpassconfirm"] = "Confirm";
$LANG["newpassconfirm2"] = "Incorrect Confirm";
$LANG["resetpassexp"] = "Session to change your password has been expired, please reset your password again.";
$LANG["resetpasstop"] = "Password has been successfully changed, use your new password for the next login.";
$LANG["wrongblkode"] = "Incorrect Block Code";
$LANG["accessdenied"] = "You are not allowed to access this page";
$LANG["unblocked"] = "Successfully unblocked, please login using the following password";
$LANG["unblockwrongkode"] = "Be careful, a mistake entering the code block in a row will cause your IP blocked.";
$LANG["blocklogin"] = "Your membership status is being blocked";
$LANG["lastdeporunning"] = "Your last deposit was running {intervals} days, minimum for {ph} if your deposit already running {bataswds} days.";
$LANG["pendingph"] = "There is still a pending status {gh}, please process it before you can {gh} again, Check your cash flow transaction.";
$LANG["cashflowtransaction"] = "Cash Flow";
$LANG["cashflowhistory"] = "Cash Flow History";
$LANG["registermember"] = "Register Member";
$LANG["registerhistory"] = "Register History";
$LANG["upgrademanager"] = "Upgrade to Manager";
$LANG["ticketreg"] = "Register Ticket";
$LANG["transtickethistory"] = "Transfer Ticket History";
$LANG["memo"] = "Message";
$LANG["inbox"] = "Inbox";
$LANG["outbox"] = "Outbox";
$LANG["confirmmemodata"] = "Confirmation Message";
$LANG["blacklist"] = "Blacklist";
$LANG["blacklistreport"] = "Report Blacklist";
$LANG["addblacklist"] = "Add Blacklist";
$LANG["onlyformanager"] = "This facility is only for manager.";
$LANG["statloginuser"] = "User Login:";
$LANG["role"] = "Role:";
$LANG["logout"] = "Logout";
$LANG["uploadfoto"] = "Upload Photo";
$LANG["blacklistinfo"] = "You has been blacklisted from other members, you can review blacklist in the blacklist menu. Please solve the problems so that the member can cancel your blacklist.";
$LANG["thanksgh"] = "successfully saved. Please wait a few moments, our system will automaticaly find a partner for you and send transfer instructions for you.";
$LANG["thanksph"] = "successfully saved. Please wait a few moments, our system will automaticaly looking for members to give assistance for you.";
$LANG["confirmsuccess"] = "Thank You, Your confirmation has been sent successfully. please wait a few moments until you confirm approved by the member concerned.";
$LANG["accconfirm"] = "Thank You, You have confirmed the payment of members who provide assistance to you.";
$LANG["closebutton"] = "Close";
$LANG["historybutton"] = "History";
$LANG["detailbutton"] = "Detail";
$LANG["cancelgh"] = "has been canceled";
$LANG["checkactivemember"] = "Your membership is not active or being blocked! You are not allowed to access this page!";
$LANG["error2"] = "This transaction is already in processed.";
$LANG["error3"] = "Tickets is not correct.";
$LANG["error4"] = "There is still a pending status {gh}, please make payment before {gh} again.";
$LANG["pinnone"] = "You do not have a PIN! Please create a PIN on the PIN menu.";
$LANG["pinnone2"] = "PIN not Found";
$LANG["pinblock"] = "Your PIN has been blocked! Please contact Admin.";
$LANG["pinblock2"] = "PIN blocked";
$LANG["pinnonactive"] = "Your PIN is not active! Please Activated your PIN in the PIN Activation menu.";
$LANG["pinnonactive2"] = "PIN Inactive";
$LANG["pinwrong"] = "Incorrect PIN.";
$LANG["amount"] = "Amount";
$LANG["selectamount"] = "Select Amount";
$LANG["disable"] = "Locked";
$LANG["payment"] = "Payment";
$LANG["selectpayment"] = "Select Payment";
$LANG["enterpincode"] = "Enter Your PIN Code";
$LANG["errorselectamount"] = "Select Amount";
$LANG["errorselectticket"] = "Select Ticket";
$LANG["errorcontributecode"] = "Transaction code is missing! Please start from the beginning!";
$LANG["errorentercaptcha"] = "Please Enter Captcha";
$LANG["cancelgivehelp"] = "Click here to cancel this";
$LANG["movetoarchive"] = "Hide and Archived, You can find in cash flow history";
$LANG["movetocashflow"] = "Move to cash flow transaction";
$LANG["balance"] = "Balance";
$LANG["smscodeinput"] = "Enter sms verification code has been sent to your mobile phone";
$LANG["smscodeinput2"] = "SMS Verification Code";
$LANG["verify"] = "Verification";
$LANG["clickdetails"] = "Click here for details";
$LANG["btupd2_1"] = "Transaction is not completed or canceled.";
$LANG["btupd_1"] = "Confirm if you already pay your";
$LANG["btupd2_2"] = "This transaction has been processed.";
$LANG["btupd2_2"] = "This transaction has been processed. Please send your";
$LANG["btupd2_2b"] = "before expired day.";
$LANG["btupd2_3"] = "This transaction has been completed.";
$LANG["clicksendmessage"] = "Click here to send message.";
$LANG["approvetrans"] = "You have approved this confirmation.<br>Click here for detail.";
$LANG["sendconfirm1"] = "You have send confirmation to";
$LANG["sendconfirm2"] = "Please wait for user accept your confirmation<br>Click here for detail.";
$LANG["receiveandapp"] = "Your confirmation has been received and approved.<br>Click here for detail.";
$LANG["receiveandapp2"] = "You have approve confirmation.<br>Click here for detail.";
$LANG["pleasewaits"] = "Please wait...<br>confirmation button will be displayed<br>if user";
$LANG["pleasewaits2"] = "already confirm payment";
$LANG["createdate"] = "DATE OF CREATED";
$LANG["plswaite"] = "Please wait for user";
$LANG["plswaite2"] = "approve your confirmation<br>Click here for detail.";
$LANG["confrsends"] = "YOUR CONFIRMATION HAS BEEN SENT";
$LANG["confrsends2"] = "EXPIRED";
$LANG["confrsends3"] = "HOUR(s)";
$LANG["confrsend"] = "EXPIRED";
$LANG["confrsend2"] = "HOUR(s)";
$LANG["confrsend3"] = "EXPIRED";
$LANG["confrsend3b"] = "HOUR(s)";
$LANG["btupd2x"] = "This transaction has been processed.<br>Please wait confirmation from user.";
$LANG["confrmallpay"] = "Confirm if you already receive payment your";
$LANG["reffuser"] = "Refferal Username";
$LANG["reffname"] = "Refferal Name";
$LANG["accsetting"] = "Account Setting";
$LANG["accdetails"] = "Account Details";
$LANG["linkreff"] = "Refferal Link";
$LANG["fullname"] = "Full Name";
$LANG["placemnt"] = "Placement";
$LANG["swiftinfo"] = "SWIFT code is a standard format of Bank Identifier Codes (BIC) and serves as a uniqueidentifier for a bank or financial institution. These codes are used when transferring money between banks,particularly for international wire transfers. On top of that, the code is used to transmit messages between financial institutions and banks.";
$LANG["disablepayment"] = "Disable Field! For update this field you must verify your account, please click unlock button.";
$LANG["fotopro"] = "Photo Profile";
$LANG["fotoproinfo"] = "This page allows you to upload your personal photo to your profile.";
$LANG["fotoproinfo2"] = "Terms of photos";
$LANG["fotoproinfo2a"] = "Image file formats are allowed only: jpg, jpeg, png and gif.";
$LANG["fotoproinfo2b"] = "Image dimensions will automatically be resize max width 1024 pixel.";
$LANG["fotoproinfo2c"] = "Image file size should not be more than 1 MB";
$LANG["fotoproinfo2d"] = "is not allowed, please upload an image file only";
$LANG["maxghne"] = "Maximum {ph} is {rpwd} every week, please wait your previous {ph} is complete.";
$LANG["insufficient2"] = "Your balance is insufficient.";
$LANG["insufficient"] = "Your balance is insufficient or any request request still pending.";
$LANG["codehis"] = "Code";
$LANG["type"] = "Type";
$LANG["from"] = "From";
$LANG["to"] = "To";
$LANG["datesend"] = "Date Send";
$LANG["nohistory"] = "No History";
$LANG["incorectcode"] = "Incorrect SMS Verification Code";
$LANG["unlockfield"] = "UNLOCK FIELD";
$LANG["status0"]="Your membership is not active or is being blocked.";
$LANG["disablepaymentx"] = "Disable Field! This data is permanent, Can not be changed.";


$LANG["mbph_num"]="Number";
$LANG["mbph_dtstart"]="Date Start";
$LANG["mbph_dtexp"]="Date Expired";
$LANG["mbph_status"]="Status";
$LANG["mbph_dtpaid"]="Date Paid";
$LANG["add"]="Add";

$LANG["mbdepo_num"]="Number";
$LANG["mbdepo_code"]="Code";
$LANG["mbdepo_depodate"]="Deposit Date";
$LANG["mbdepo_expireday"]="Expired Date";
$LANG["mbdepo_activeday"]="Active Day";
$LANG["mbdepo_status"]="Status";
$LANG["mbdepo_active"]="Active";
$LANG["mbdepo_nactive"]="Non Active";
$LANG["mbdepo_stop"]="Stop";
$LANG["depo"]="Deposite";
$LANG["mbdepo_hist"]="Deposite History";

$LANG["mbph_dt"]="Date";
$LANG["mbph_to"]="To";
$LANG["mbph_from"]="From";
$LANG["mbph_type"]="Bonus type";
$LANG["bonus"]="Bonus";
$LANG["getbonus"]="Get Bonus";
$LANG["bonus_hist"]="Bonus History";
$LANG["gtbonus"]="Get Your Bonus";

$LANG["profit"]="Profits";			
$LANG["prof_date"]="Date";
$LANG["prof_code"]="Deposite Code";
$LANG["prof_type"]="Type";
$LANG["prof_hist"]="Profits History";


$LANG["reff_dt"]="Date";
$LANG["reff_sendsts"]="Send Status";
$LANG["reff_sendtgl"]="Send Date Time";
$LANG["reff_receivests"]="Receive Status";
$LANG["reff_receivetgl"]="Receive Date Time";

$LANG["xrequest"]="request";
$LANG["xconfirm"]="confirm";
$LANG["xfinish"]="finish";
$LANG["xexpire"]="expired";



$LANG["funds"]="Funds";
$LANG["fundshist"]="Funds History";



$LANG["changepassok"] = "Password successfully changed! Use the new password to login later.";
$LANG["wrongnew"] = "Wrong new password.";
$LANG["wrongold"] = "Wrong old password.";
$LANG["changepass"] = "Change Password";
$LANG["oldpass"] = "Old Password";
$LANG["confirmnewpass"] = "Confirm New Password";



$LANG["profilesuccess"] = "Profile successfully updated";

$LANG["imgupld"] = "Image has been uploaded";
$LANG["docupd"] = "Document Upload";
$LANG["diskripsifoto"] = "Description of photo";
$LANG["docupdinfo"] = "In order for the safety and comfort, you must verify your account. During 72 hours of uploaded documents will be checked, if necessary, additional documentation will be required from you to verify your account.";
$LANG["docupdinfob"] = "Please upload the scan of your passport or any other identity document in the form below.";
$LANG["docupdlimit"] = "Sorry, Limit Maximum Upload Photos Only 5 Photos, Please contact administrator.";

$LANG["updd_no"]="No";
$LANG["updd_date"]="Date";
$LANG["updd_info"]="Information";
$LANG["updd_view"]="View";
$LANG["updd_dn"]="Download";
$LANG["updd_sts"]="Status";
$LANG["updd_dell"]="Delete";
$LANG["updd_infodell"]="You sure want to delete this picture?";
$LANG["updd_scdell"]="Images has been successfully deleted.";
$LANG["updd_nodell"]="Images can not be deleted because it has not been confirmed by administrator.";
$LANG["updd_infodw"]="Your data is confidential, just as an archive, not for publication.";


$LANG["pin_act"]="PIN Activation";
$LANG["actv"]="Activation";

$LANG["actvpin"]="Your PIN has been active";
$LANG["stillactvpin"]="Your PIN already active";
$LANG["haveactvpin"]="You already have PIN before";
$LANG["chgepin"]="Update PIN";
$LANG["sschgepin"]="PIN successfully changed! Use the new PIN to transaction later";
$LANG["oldpinwr"]="Incorect Old PIN";
$LANG["oldpine"]="Old PIN";
$LANG["newpine"]="New PIN";
$LANG["testi"]="Testimonials";
$LANG["testinfo1"]="Delete this testimonials?";
$LANG["edittesti"]="Update Testimonials";
$LANG["mxtesti"]="Maximum post testimonial is";
$LANG["updtesti"]="Testimonial has been update";
$LANG["sbmtdtesti"]="Testimonials successfully created. We will review before it is displayed";
$LANG["addtesti"]="Add Testimonials";
$LANG["dtsp_joindate"]="Join date";
$LANG["levgen"]="Level Generation";

$LANG["manonly"]="This page is only for the manager, please upgrade your membership to the manager.";

$LANG["walletbalance"]="Balance";
$LANG["hist"]="History";

$LANG["logof"]="Logout";
$LANG["respass"]="Reset Password";
$LANG["sendto"]="Sent To";
$LANG["wltpassrest"]="Ewallet password has been successfully reset, check your email inbox or your phone according to your choice.";
$LANG["wltnewset"]="You do not have E-Walet account, please create E-Wallet account by filling out the following form.";

$LANG["wltusernf"]="Username you entered was not found.";
$LANG["wltinvsd"]="Your balance is insufficient";
$LANG["wltinvsdx"]="Your balance is insufficient or any transactions pending status";
$LANG["wlttjtr"]="Account transfer recipient";
$LANG["wlttjml"]="Amount Transfer";
$LANG["wltnt"]="Notes";
$LANG["wltntinfo"]="Enter the user id eWallet recipient will you transfer funds";
$LANG["wltntinfo3"]="You can not transfer from and to the same eWallet account";
$LANG["wltntrscs"]="Fund has been transferred";
$LANG["wltrcpn"]="Receipt Number";


$LANG["wltrcpn"]="Receipt Number";

$LANG["tcktcd"]="Ticket Number";
$LANG["tcktfr"]="From";
$LANG["tckto"]="To";
$LANG["tcktnw"]="News";
$LANG["tckt"]="Ticket";
$LANG["tckthist"]="Transfer Ticket History";
$LANG["tckthist2"]="History Transfer Ticket";
$LANG["tcktadd"]="Thank You, Ticket has been added to your account.";
$LANG["bnblnce"]="Bonus Balance";
$LANG["tcktave"]="Number of Ticket";
$LANG["gticket"]="Get Ticket";
$LANG["numonly"]="Numeric Only";
$LANG["transacc"]="Thank You, Your ticket has been transfered";
$LANG["transsnt"]="Thank You, Your ticket has been sent";


$LANG["trnstct"]="Transfer this Ticket to another members";
$LANG["senttct1"]="Send this ticket to email prospective members";
$LANG["senttct2"]="Send this ticket to mobile prospective members";
$LANG["mngronly"]="This facility is only for managers";
$LANG["mngupd"]="Upgrade to Manager";
$LANG["tctnottrans"]="Ticket can not transfered because already transfered before";
$LANG["tctnottrans2"]="Ticket can not transfered because already used";
$LANG["tctnotfnd"]="Ticket not found";
$LANG["trnsto"]="Transfer To User ID";
$LANG["trnsxx"]="TRANSFER TICKETS";
$LANG["sendsxx"]="SENDING TICKETS";
$LANG["namercp"]="Name of Recipient";
$LANG["mailrcp"]="Email of Recipient";
$LANG["hprcp"]="Cell number of Recipient";
$LANG["send"]="Send";
$LANG["cancel"]="Cancel";


$LANG["wldepo"]="Buy Balance";
$LANG["rwldepo"]="Buy Balance History";
$LANG["wlpschangesc"]="Your E-Wallet password has been successfully changed. Please login using the following password";
$LANG["wlpschangesc2"]="Incorect Confirm password";
$LANG["wlaccadd"]="Your E-Walet account has been successfully created. Please log in using your username and password below";


$LANG["wltransno"]="No. Transaction";
$LANG["trnswalpend"]="Your transaction can not be processed because your previous transaction is still pending";
$LANG["trnswalok"]="Your order for adding balance eWallet successfully sent";
$LANG["trnswalok2"]="Please make payment according to the value additions that you requested";
$LANG["trnswalok3"]="Your E-Wallet Balance will soon be added";
$LANG["trnscde"]="Transaction Code";
$LANG["trnscnf"]="Please confirm your payment via SMS to";
$LANG["trnscnf2"]="or use the following confirmation link";


$LANG["passwltres"]="Reset E-Wallet Password";
$LANG["wpasswlt"]="Incorrect E-Wallet Password";
$LANG["crtewlt"]="Create E-Wallet";

$LANG["memomsg"]="Message";
$LANG["memoin"]="Inbox";
$LANG["memoout"]="Outbox";

$LANG["memoadd"]="Send New Message";
$LANG["memodt"]="Message Detail";

$LANG["memodell"]="Delete";

$LANG["memoinfo"]="Send messages between members";
$LANG["memohsdel"]="Message has been deleted";



$LANG["alrpross"]="Message Already Process";
$LANG["memsents"]="Message has been successfully sent";
$LANG["memsents2"]="One day you are only allowed to send 10 messages";
$LANG["memsents3"]="You can not send messages to yourself";

$LANG["entpin"]="Enter Your PIN Code";
$LANG["dtsnd"]="Date Send";
$LANG["mmreply"]="Reply";
$LANG["closee"]="Close";
$LANG["close"]="Close";
$LANG["edt"]="Edit";

$LANG["memottladd"]="SEND MESSAGE";


$LANG["dtrg"]="Registration History";

$LANG["repp54"]="Review this report";
$LANG["vwdetail"]="View Details";
$LANG["edtesti"]="Edit Testimonials";

$LANG["reppdle"]="Delete your report";
$LANG["reppdle2"]="Are you sure want to delete this report?";
$LANG["repprew"]="Review";
$LANG["repdates"]="Report Date";
$LANG["ssct"]="Suspect";
$LANG["reppusty"]="Report Type";
$LANG["reppusrs"]="Report Reason";
$LANG["reppusad"]="Add Report";
$LANG["reppus"]="Report User";
$LANG["reppt"]="Report";
$LANG["reppaddst"]="Report members who commit fraud and cheating";
$LANG["reppross"]="Report already process";
$LANG["reppross4"]="User already report, You can review user report";
$LANG["reppross2"]="Report has been successfully sent";
$LANG["reppross3"]="You can not report yourself";
$LANG["repprepp"]="If you are a user who reported, please contact the user who has reported you, so that the user can delete the report.";
$LANG["reppreppu"]="Please contact and solve your problems with users who have made this report, so that the user can delete the report.";
$LANG["reppccc"]="Send an email to the complainant";
$LANG["reppyyy"]="Your Email";
$LANG["msgrepto"]="Your message was not sent because you have contacted the complainant previous 3 times";
$LANG["msgreptocs"]="REVIEW REPPORT | NO. CASE:";
$LANG["gmsgreptocs"]="Give feedback";
$LANG["right"]="Right";
$LANG["left"]="Left";
$LANG["midle"]="Midle";
$LANG["genealogy"]="Genealogy Tree";
$LANG["netree"]="Network Tree";
$LANG["clickfulmage"]="Click to enlarge this image";
$LANG["regaddnw"]="Register new members in this position";
$LANG["midlerr"]="This position is locked, to put in this position please fill out the left and right first";
$LANG["tgldftr"]="Join Date";
$LANG["waitt"]="Waiting";
$LANG["viewgnlg"]="View Genealogy Tree";
$LANG["netwr"]="Network";
$LANG["regisdftr"]="Register";
$LANG["regisdftr1"]="Register History";
$LANG["regisdftr2"]="Add New Member";
$LANG["cnfrmhist"]="Confirmation History";
$LANG["regscsfl"]="Your registration was successful";
$LANG["regscsfl2"]="You have to register new members";
$LANG["noactiveall2"] = "We have sent an activation link to the email and activation code into the phone you registered members. Please do check and validation.";
$LANG["sendvalidation2"] = "Validation link has been sent to the email you registered member, please check email and do validation.";

$LANG["sendsms2"] = "Verification code has been sent to your mobile number registered members, please check your inbox and verify";
$LANG["contrbadd"]="that you created has been successfully saved. Please wait a few days, our system will automatically find a mate for you and send instructions to transfer";
$LANG["tcetntfound"]="Your Ticket is empty";
$LANG["tcetslct"]="Select Ticket";
$LANG["tcet3t"]="You do not have a ticket to ";
$LANG["tcet4st"]="To get ticket, please contact manager or stockist or purchase";
$LANG["ordrpdk"]="This transaction is already in process";
$LANG["ordrp"]="Order";
$LANG["ordrph"]="Price";
$LANG["ordrpj"]="Quantity";
$LANG["blitiket"]="Purchase Ticket";


       
$LANG["phsts4"]=">You not have any deposit investment";
$LANG["please"]="Please";
$LANG["phsts5"]="to add deposit investment, or if you already";
$LANG["phsts6"]="please process your";


$LANG["phsts1"]="Your Investment was running";
$LANG["phsts2"]="minimum";
$LANG["phsts3"]="if your investment already running";
$LANG["day"]="days";
                


  $LANG["phsts7"]="Your previous";
$LANG["phsts8"]="unfinished in process";
$LANG["phsts9"]="You can do";
$LANG["phsts10"]="again after your previous";
$LANG["phsts11"]="processed";
            
          
$LANG["minsm"]="Minimal Amount";
$LANG["entermount"]="Enter Amount";
$LANG["blncempt"]="Your balance is insufficient! Max Amount is";

$LANG["pendingphb"] = "There is still a pending status {gh}, please process it before you can {ph}, Check your cash flow transaction.";

?>
<?php ob_flush(); ?>