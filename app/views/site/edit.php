<header>
	<a href="http://192.168.0.3/sandbox/Rubric/public/" class="left">Back</a>
	<a href="http://192.168.0.3/sandbox/Rubric/public/edit/<?= $contact->id ?>/destroy" class="right">Delete</a>
</header>

<form method="post" action="http://192.168.0.3/sandbox/Rubric/public/edit/<?= $contact->id ?>/update" class="form-create">
	<input type="text" name="name" value="<?= $contact->name ?>" placeholder="">
	<input type="tel" name="number" value="<?= $contact->number ?>" placeholder="" required>
	<input type="submit" class="button main">
</form>
