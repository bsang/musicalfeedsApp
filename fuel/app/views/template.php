<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title><?= isset($title) ? $title : 'default title' ?></title>
		<?= Asset::css('http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css')?>
		<?= Casset::render_css() ?>
	</head>

	<body>
		<header>
			<?= View::forge('layout/header') ?>
		</header>
		
		<?= isset($promotion) ? $promotion : null ?>
		
		<div id="pageWrapper" class="clearFix">
			<!-- Navigation bar -->
			<?= $navigation ?>
			<!-- End Navigation Bar -->

			<!-- Main Contents -->
			<div class="mainContent">
				<?= $content ?>
			</div>
			<!-- End Content -->

			<!-- Sidbar -->
			<?= View::forge('layout/sidebar') ?>
			<!-- End Sidebar -->
		</div>
		<!-- End  Page Wrapper-->

		<?= Asset::js('http://code.jquery.com/jquery-1.9.1.js') ?>
		<?= Asset::js('http://code.jquery.com/ui/1.10.3/jquery-ui.js') ?>
		<?= Asset::js('jquery.sticky.js') ?>
		<?= Asset::js('script.js') ?>
		<?= Casset::render_js() ?>
	</body>