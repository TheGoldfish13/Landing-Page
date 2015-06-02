<?php
    require_once(__DIR__ . "/config.php");

 ?>
 <div>
<h1>Contact Me!</h1>
<form method="post" action="<?php echo $path . "create-user.php"; ?>">
	<div id="email">
		<input type="text" id="email" name="email" placeholder="What is your email?" />
	</div>

	<div id="info">
		<input type="text" id="info" name="info" placeholder="What would you like to tell me?"/>
	</div>

	<div id="sub">
		<button type="submit">Submit:</button>
	</div>
</form>

</div>