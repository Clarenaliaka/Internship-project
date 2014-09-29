<!DOCTYPE html>
<html>
<head>
<title>Submission form</title>
<link href="assets/css/main.css" rel="stylesheet" type="text/css"/>   
<link href="assets/css/nomalize.css" rel="stylesheet" type="text/css"/>
<link href="assets/fonts/font-awesome-4.1.0/css/font-awesome.css" rel="stylesheet" type="text/css"/>  
	
	<style type="text/css">
	form ul{
		list-style: none;;
		margin:0;
		padding:0;
	}
	form ul li{
		display: block;
	}
	form ul li label{
		font-weight: bolder;
		display: block;
	}
	form ul li input{
		display: block;
	}

	.out{
	padding: 0.5em 1em;
	background-color:#E8EEF7;
	}

	.message{
		display: none;
	}

form{
background: none repeat scroll 0% 0% #FFF;
margin: 0px auto;
border-right: 1px solid #BEBEBE;
border-left: 1px solid #BEBEBE;
text-align: left;
width: 25em;
height: 38em;
background-color: #fff;
border: 1px solid #ccc;
margin: 0 auto;
padding: 1em;
display: block;

}
span{
color: #e3e730;#C43B1D
margin: 0px;
padding: 0px;
border: 0px none;
}

form ul li{
		margin:5px 0 10px 0;
	}
	</style>
</head>
<body class="out">
<form action="insert.php" method="POST">
<h1 class="form title"> Made in Nairobi Submission</h1>

<?php if($message != ''): ?>
    <div class="error message"><?php echo $message; ?></div>
    <?php endif; ?>
<p></p>
<div class="Answer all"> Please answer the qualifying questions below</div>

	<div class="Required Risk"><span>* Required</span></div>
	
	<ul>
		<li>
			<input type="text" name="emailaddress" class="message" />

			<label for="form_companyname">Company Name <span>*</span></label>
			<input type="text" name="companyname" id="form_companyname" value="" placeholder="" required />
		</li>

		<li>
			<label for="form_website">Company Website <span>*</span></label>
			<input type="text" name="companywebsite" id="form_website" value="" placeholder="" required />
		</li>

		<li>
			<label for="form_tagline">Tagline <span>*</span></label>
			<input type="text" name="tagline" id="form_tagline" value="" placeholder="" required />
		</li>
		<li>
		    <label for="form_careers_page">Are You Hiring?</label>
			<input type="radio" name="one" value="yes"required>Yes
             <input type="radio" name="one" value="no"required>No
		</li>
		<li>
			<label for="form_careers_page">Hiring url:</label>
			<input type="text" name="hiringurl" id="url" value="" placeholder="" />
		</li>

		<li>
			<label for="form_firstname">Contact First Name <span>*</span></label>
			<input type="text" name="firstname" id="form_firstname" value="" placeholder="" required />
		</li>

		<li>
			<label for="form_lastname">Contact Last Name <span>*</span></label>
			<input type="text" name="lastname" id="form_lastname" value="" placeholder="" required />
		</li>

		<li>
			<label for="form_email">Email Address <span>*</span></label>
			<input type="email" name="email" id="form_email" value="" placeholder="" required />
		</li>
        <li>
			<label for="form_logo">Company Logo <span>*</span></label>
			<input type="file" name="companylogo" id="form_logo" required />
		</li>

	</ul>
	<input type="submit" value="Submit" name="submit" />
</body>
</html>