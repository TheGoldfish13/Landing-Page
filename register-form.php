<?php
    require_once(__DIR__ . "/config.php");

 ?>
 <div>
<h1>Contact Me!</h1>
<form method="post" action="<?php echo $path . "create-user.php"; ?>">
	<div id="email">
		<input type="text" id="email" name="email" placeholder="What's your email?" />
	</div>

	<div id="info">
		<input type="text" id="info" name="info" placeholder="What do you need to tell me?"/>
	</div>

	<div id="sub">
		<button type="submit">Submit:</button>
	</div>
</form>

</div>