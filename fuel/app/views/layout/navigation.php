<nav>
	<ul>
		<li><span>Categories</span></li>

		<li>
			<a class="menu home" href="/home">Home</a>
		</li>
	</ul>

	<ul id="genres">
		<li><span>Genres</span></li>
		
		<?php foreach ($categories as $category): ?>
			<li><?= Html::anchor($category->url(), $category->name, array("class" => "genre_menu")) ?></li>
		<?php endforeach; ?>
	</ul>
</nav>
<!-- End Navigation Bar -->