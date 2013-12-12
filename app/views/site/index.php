<header>
	<a href="http://192.168.0.3/sandbox/Rubric/public/create" class="right">Add</a>
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
				<a href="http://192.168.0.3/sandbox/Rubric/public/show/<?= $contact->id ?>">
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