
<?php
//var_dump("something");
ini_set('display_errors',1);
error_reporting(E_ALL);
require_once('includes/MysqliDb.php');

$db = new MysqliDb('localhost', 'root', 'akirachix', 'startups');
$startups = $db-> get('start');

?>

<!DOCTYPE html>
<html
<head>
<title>Nairobi</title>
<link href="assets/css/main.css" rel="stylesheet" type="text/css"/>   
<meta name="viewport" content="width=device-width, initial-scale=1" />       
</head>
<body>

<?php include 'want.php';?>

<article>
	<ul class="startups">
		<?php foreach($startups as $startup): ?>
			<?php if($startup['company_logo'] != ''): ?>
			    <li>
					<a href="<?php echo $startup['website']; ?>" target="_blank">

						<img src="assets/Image/<?php echo $startup['company_logo']; ?>" alt="<?php echo $startup['company_name'] ?>" />
					</a>
					<div class="hover">

						<a href="<?php echo $startup['website']; ?>" target="_blank"><h2>View Website</h2>
						
					</div>
				</li>
			<?php endif; ?>
	    <?php endforeach; ?>
	</ul>
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
</body>
</html>

