<header>
	<a href="<?= base('create') ?>" class="right">Add</a>
</header>

<ul class="contact-list">
	<?
	foreach ($initials as $letter => $initial) :
	?>
		<div class="letter">
			<span><?= $letter ?></span>
			<?
			foreach ($initial as $contact) :
			?>
			
			<li>
				<a href="<?= base("show/{$contact->id}") ?>">
					<div class="name"><?= $contact->name ?></div>
					<div class="number"><?= $contact->number ?></div>
				</a>
			</li>

			<?
			endforeach;
			?>
		</div>
	<?
	endforeach
	?>
</ul>