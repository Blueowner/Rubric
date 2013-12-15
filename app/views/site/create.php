<header>
	<a href="<?= base() ?>" class="left">Back</a>
</header>

<form method="post" action="<?= base('create/store') ?>" class="form-create">
	<input type="text" name="name" placeholder="John Doe">
	<input type="tel" name="number" placeholder="338 312 6741" required>
	<input type="submit" class="button main">
</form>