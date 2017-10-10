<?php require_once 'header.php'; ?>

<!-- Input form -->

<form action="insertAction.php" method="get">
	<fieldset>
		<legend>Enter a name</legend>
			Name <input type="text" name="name"><br>
			<input type="submit" name="submit" value="submit"><button name="Cancel" value="Cancel" type="reset">Cancel</button>
	</fieldset>
</form>

<? require_once 'footer.php'; ?>
