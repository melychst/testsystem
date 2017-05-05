<?php 
	require_once("../header.php");
?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Admin page</h1>
			<a href="/">Log out</a>			
		</div>
	</div>
</div>

<?php 

		if ( isset($_POST['test_name']) ) {
			addTest($_POST['test_name']);
			include("../views/page-add-test-quest.html");
		} else {
			include("../views/page-add-test-name.html");
		}

?>



<?php 
	require_once("../footer.php");
?>
