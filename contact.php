<?php include 'header.php';?>

<div class="page-top">
	<div class="parallax" style="background:url(images/resource/contact.jpg);"></div>	
	<div class="container"> 
		<h1>CONTACT <span>US</span></h1>
		<ul>
			<li><a href="index.php" title="">Home</a></li>
			<li><a href="contact.php" title="">Contact Us</a></li>
		</ul>
	</div>
</div><!--- PAGE TOP -->

<!--<section>
	<div class="block">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="map">
							<iframe src="https://www.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=uk&amp;aq=&amp;sll=18.312811,-4.306641&amp;sspn=46.292419,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=United+Kingdom&amp;ll=52.352119,-2.647705&amp;spn=0.685471,1.352692&amp;t=p&amp;z=10&amp;output=embed"></iframe>	
					</div>
					
				</div>
			</div>
		</div>
	</div>
</section>-->


<section>
	<div class="block">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-9 column">
							<h4>CONTACT INFORMATION</h4>
							<div class="space"></div>
							<p>Anjana Imports And Exports</p>
							<p>M. Sundaramoorthy</p>
							<p>Manikkam</p>
							<p>No:47/1017, Sathiyamoorthy Nagar,</p>
							<p>Vysarapadi,</p>
							<p>Chennai.</p>
							<p>Pincode:600039</p>
							<p>Phone:8754491055</p>
							<div class="space"></div>
						</div><!--- CONTACT INFORMATION -->
					</div>
					<div class="row">
						<div class="col-md-8 column">
							<h4>Contact Us</h4>
							<div class="space"></div>
							<div id="message"></div>
							<form class="theme-form" method="post" action="" name="contactform" id="contactform">
								<input name="name" class="half-field form-control" type="text" id="name"  placeholder="Name" />
								<input name="email" class="half-field form-control" type="text" id="email" placeholder="Email" />
								<textarea name="comments" class="form-control" id="comments" placeholder="Description" ></textarea>
								<input type="submit" name="send" class="submit"  value="SUBMIT" />
							</form>
							
						</div>
					</div>
					
								
					
				</div>
			</div>
		</div>
	</div>
</section>	

<!--<section>
	<div class="block remove-gap">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="contact-info">
						<div class="col-md-3">
							<div class="info-block">
								<i class="fa fa-home"></i>
								<p>310 South Jurack Avenue</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="info-block">
								<i class="fa fa-info"></i>
								<p>www.themes.webinane.com</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="info-block">
								<i class="fa fa-envelope-o"></i>
								<p>youremail@yourdomain.com</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="info-block">
								<i class="fa fa-mobile"></i>
								<p>(000) +123 123 1235</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>--><!--- CONTACT INFORMATION -->

<?php
			error_reporting(0);
			if(isset($_POST['send'])){

			$name=mysql_real_escape_string($_POST['name']);
			$email=mysql_real_escape_string($_POST['email']);
			$comments=mysql_real_escape_string($_POST['comments']);
			
			
			$mail = new PHPMailer();
			
			
			$body .= '<html><head><title>Feedbacks</title></head>
			<body>
			Feedbacks from Client <br/>
			Name: '.$name.',<br/>
			Email id: '.$email.',<br/>
			Comments: '.$comments.'<br/>          
			
			</body>
			</html>';
			
			$mail->IsSMTP();
			$mail->Mailer = 'smtp';
			$mail->SMTPAuth = true;
			$mail->Host = 'smtp.gmail.com'; // "ssl://smtp.gmail.com" didn't worked
			$mail->Port = 465;
			$mail->SMTPSecure = 'ssl';
			// or try these settings (worked on XAMPP and WAMP):
			// $mail->Port = 587;
			// $mail->SMTPSecure = 'tls';
			
			
			$mail->Username = "acetcse10.14@gmail.com";
			$mail->Password = "csegang1234";
			
			$mail->IsHTML(true); // if you are going to send HTML formatted emails
			$mail->SingleTo = true; // if you want to send a same email to multiple users. multiple emails will be sent one-by-one.
			
			$mail->From = "Anjana";
			$mail->FromName = "Anjana";
			
			$mail->AddAddress('acetcse10.14@gmail.com'); 
		
				
			$mail->Subject = "Feedbacks from Client";
			$mail->MsgHTML($body);
			
			if(!$mail->Send())
			echo "<script>alert('Mail sent failed');</script>";
			
			else
			echo "<script>alert('Mail Sent');</script>";
			}
			?>

			

<?php include 'footer.php';?>