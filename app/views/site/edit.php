<header>
	<a href="<?= base() ?>" class="left">Back</a>
	<a href="<?= base("edit/{$contact->id}/destroy") ?>" class="right">Delete</a>
</header>

<form method="post" action="<?= base("edit/{$contact->id}/update") ?>" class="form-create">
	<input type="text" name="name" value="<?= $contact->name ?>" placeholder="">
	<input type="tel" name="number" value="<?= $contact->number ?>" placeholder="" required>
	<input type="submit" class="button main">
</form>
