<?php include 'inc/header-top.php' ?>
<title>Contact Us</title>
<?php include 'inc/header-middle.php' ?>
<body id="contactUs">
<?php include 'inc/header-bottom.php' ?>

    <div class="jumbotron">
      <div class="container text-center">
        <h1>When tree emergencies happen, call 610-277-TREE</h1>
        <p>In case of emergencies, call us for fastest service. Arader Tree will get the job done right. No emergency? Call and discuss your needs, or contact us via the form below. We’ll respond promptly regarding appointment for free assessment and estimate.</p>
      </div>
    </div>

    <div class="container marketing">

    <!-- https://bootstrapbay.com/blog/working-bootstrap-contact-form/ -->

    <?php
	    if (isset($_POST["submit"])) {
	        $name = $_POST['name'];
	        $email = $_POST['email'];
	        $message = $_POST['message'];
	        $human = intval($_POST['human']);
	        $from = 'Arader Website'; 
	        $to = 'toddbc@gmail.com'; 
	        $subject = 'Message from Contact Form ';
	        
	        $body = "From: $name\n E-Mail: $email\n Message:\n $message";
	 
	        // Check if name has been entered
	        if (!$_POST['name']) {
	            $errName = 'Please enter your name';
	        }
	        
	        // Check if email has been entered and is valid
	        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	            $errEmail = 'Please enter a valid email address';
	        }
	        
	        //Check if message has been entered
	        if (!$_POST['message']) {
	            $errMessage = 'Please enter your message';
	        }
	        //Check if simple anti-bot test is correct
	        if ($human !== 5) {
	            $errHuman = 'Your anti-spam is incorrect';
	        }
	 
	// If there are no errors, send the email
	if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	    if (mail ($to, $subject, $body, $from)) {
	        $result='<div class="alert alert-success">Thank You! We will be in touch</div>';
	    } else {
	        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again</div>';
	    }
	}
	    }
	?>
		
		<form class="form-horizontal" role="form" method="post" action="index.php">
		    <div class="form-group">
		        <label for="name" class="col-sm-2 control-label">Name</label>
		        <div class="col-sm-10">
		            <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
		            <?php echo "<p class='text-danger'>$errName</p>";?>
		        </div>
		    </div>
		    <div class="form-group">
		        <label for="email" class="col-sm-2 control-label">Email</label>
		        <div class="col-sm-10">
		            <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
		            <?php echo "<p class='text-danger'>$errEmail</p>";?>
		        </div>
		    </div>
		    <div class="form-group">
		        <label for="message" class="col-sm-2 control-label">Message</label>
		        <div class="col-sm-10">
		            <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
		            <?php echo "<p class='text-danger'>$errMessage</p>";?>
		        </div>
		    </div>
		    <div class="form-group">
		        <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
		        <div class="col-sm-10">
		            <input type="text" class="form-control" id="human" name="human" placeholder="Are You Human?">
		            <?php echo "<p class='text-danger'>$errHuman</p>";?>
		        </div>
		    </div>
		    <div class="form-group">
		        <div class="col-sm-10 col-sm-offset-2">
		            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
		        </div>
		    </div>
		    <div class="form-group">
		        <div class="col-sm-10 col-sm-offset-2">
		            <?php echo $result; ?>    
		        </div>
		    </div>
		</form> 

    </div><!-- /.container -->

	<div style="margin: 30px 0 -65px;">
    	<iframe width="100%" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=10%20Balligomingo%20Road%2C%20West%20Conshohocken%2C%20PA%2019428%2C%20United%20States&key=AIzaSyDHMEmOIbmifzUJa0_1ujAKrS9rBHgrad4"></iframe>
	</div>

<?php include 'inc/footer.php' ?>