<header>
	<a href="http://192.168.0.3/sandbox/Rubric/public/" class="left">Back</a>
	<a href="http://192.168.0.3/sandbox/Rubric/public/edit/<?= $contact->id ?>" class="right">Edit</a>
</header>

<div class="contact-show">
	<div class="name"><?= $contact->name ?></div>
	<div class="number">
		<span>TEL</span>
		<?= $contact->number ?>
	</div>
</div>