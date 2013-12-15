<header>
	<a href="<?= base() ?>" class="left">Back</a>
	<a href="<?= base("edit/{$contact->id}") ?>" class="right">Edit</a>
</header>

<div class="contact-show">
	<div class="name"><?= $contact->name ?></div>
	<div class="number">
		<span>TEL</span>
		<?= $contact->number ?>
	</div>
</div>