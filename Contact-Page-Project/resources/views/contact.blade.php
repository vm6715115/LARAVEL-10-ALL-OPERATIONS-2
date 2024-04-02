<!DOCTYPE html>
<html>
<head>
<title>Contact Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    @if(Session::has('success'))
    <div>
        {{Session::get('success')}}
    </div>
    @endif
	<div class="container">
		<div class="text-center">
			<h1>Contact Us</h1>
			<div>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
				eiusmod tempor incididunt ut labore <div>et dolore magra aliqua.
				Ut enim ad minim veniam.</div>
			</div>
		</div>
		<div class="content">
			<div class="col-1">
				<div class="address-line">
					<img alt="location" src="image/marker.png" class="icon">
					<div class="contact-info">
						<div class="contact-info-title">Address</div>
						<div>1002 West 5th Ave,</div>
						<div>Alaska, New York,</div>
						<div>55060.</div>
					</div>
				</div>
				<div class="address-line">
					<img alt="location" src="image/phone.png" class="icon">
					<div class="contact-info">
						<div class="contact-info-title">Phone</div>
						<div>12523-4566-8954-8956.</div>
					</div>
				</div>
				<div class="address-line">
					<img alt="location" src="image/mail.png" class="icon">
					<div class="contact-info">
						<div class="contact-info-title">Email</div>
						<div>contactemail@gmail.com</div>
					</div>
				</div>
			</div>
			<div class="col-2">
				<form method="POST" action="{{route('contact.store')}}">
                    @csrf
					<div class="form-container">
						<h2>Send Message</h2>
						<div class="form-row">
							<label>Full Name</label>
							<div>
								<input type="text" class="form-field" name="name">
							</div>
						</div>
						<div class="form-row">
							<label>Email</label>
							<div>
								<input type="text" class="form-field"  name="email">
							</div>
						</div>
						<div class="form-row">
							<label>Type your message...</label>
							<div>
								<input type="text" class="form-field" name="message">
							</div>
						</div>
						<input type="submit" class="send-btn" value="Send">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
