<!DOCTYPE html>
<html>
<head>
<title>Crazy form</title>
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
	background-color: #E8EEF7;
	}


form{
background: none repeat scroll 0% 0% #FFF;
margin: 0px auto;
border-right: 1px solid #BEBEBE;
border-left: 1px solid #BEBEBE;
text-align: left;
width: 25em;
height: 32em;
background-color: #fff;
border: 1px solid #ccc;
margin: 0 auto;
padding: 1em;
display: block;

}
span{
color: #C43B1D;
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
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1">
<tr>
<td><form name="form1" method="post" action="insert.php">
<table width="100%" border="0" cellspacing="1" cellpadding="3">
<tr>
<td colspan="3"><strong>Insert Data Into mySQL Database </strong></td>
</tr>
<tr>
<td width="71">Name</td>
<td width="6">:</td>
</tr>
<tr>
<td>Lastname</td>
<td>:</td>
<td><input name="lastname" type="text" id="lastmmmname"></td>
</tr>
<tr>
<td>Email</td>
<td>:</td>
<td><input name="email" type="text" id="email"></td>
</tr>
<tr>
<td colspan="3" align="center"><input type="submit" name="Submit" value="Submit"></td>
</tr>
</table>
</form>
</td>
</tr>
</table>


<form action="insert.php" method="POST">
<h1 class="form title"> Made in Nairobi Submission</h1>
<p></p>
<div class="answer all"> Please answer the qualifying questions below</div>
<div class="required risk"><span>* Required</span></div>

	<ul>
		<li>
			<label for="form_companyname">Company Name <span>*</span></label>
			<input type="text" name="companyname" id="companyname">
		</li>
		
		<li>
			<label for="form_website">Company Website <span>*</span></label>
			<input type="text" name="form[website]" id="form_website" value="" placeholder="" />
		</li>
		
		<li>
			<label for="form_careers_page">Hiring url:</label>
			<input type="text" name="form[careers_page]" id="form_careers_page" value="" placeholder="" />
		</li>
			
		<li>
			<label for="form_firstname">Contact First Name <span>*</span></label>
			<input type="text" name="form[firstname]" id="form_firstname" value="" placeholder="" />
		</li>
		
		<li>
			<label for="form_lastname">Contact Last Name <span>*</span></label>
			<input type="text" name="form[lastname]" id="form_lastname" value="" placeholder="" />
		</li>
			
		<li>
			<label for="form_email">Email Address <span>*</span></label>
			<input type="text" name="form[email]" id="form_email" value="" placeholder="" />
		</li>
		  <li>
			<label for="form_logo">Company Logo <span>*</span></label>
			<input type="file" name="form[company_logo]" id="form_logo" />
		</li>

	</ul>
	<input type="submit" value="Submit" name="submit" />
</form>

</body>
</html>