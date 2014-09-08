
<div id="clar">
<article>
	
<?php
require_once('includes/MysqliDb.php');

$db = new MysqliDb('localhost', 'root', 'akirachix', 'startups');
$startups = $db->get('start');
?>
<!DOCTYPE html>
<html>
<head>
<title>nairobi</title>
<link href="assets/css/main.css" rel="stylesheet" type="text/css"/>   
<link href="assets/css/nomalize.css" rel="stylesheet" type="text/css"/>
<link href="assets/fonts/font-awesome-4.1.0/css/font-awesome.css" rel="stylesheet" type="text/css"/>       
</head>
<body>

	<?php include('want.php'); ?>

	
	
	<article>
<ol class="numba">
	<?php foreach($startups as $startup): ?>
		
	<li>
	
		<a href="<?php echo $startups['website'];?>" target="_blank"> 
		<?php echo $startup['company_name']; ?></a>
	</li>
	
	<?php endforeach; ?>
	
</ol>
</article>


<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
<script type="text/javascript" >
	$(document).ready(function () {
		console.log("Hello World");
		$('#wrapper').slideUp(0);
		
		$('.want').click(function(){
			$('#wrapper').slideToggle(200);
			return false;
		});
	});

</script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript">
		nytm.faq();
		nytm.lazyload();
	</script>

</body>
</html>













