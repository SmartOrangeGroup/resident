<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">
	<title>architecture page</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

	<!--<meta property="og:image" content="path/to/image.jpg">-->

	<!---->
	<link rel="stylesheet" href="libs/css-button/component.css">
	<!---->
	<link rel="stylesheet" href="libs/slick/slick.css">
	<link rel="stylesheet" href="libs/slick/slick-advantage-theme.css">
	<!---->
	<link rel="stylesheet" href="css/main.min.css">

</head>

<body>
<div class="all_wrapper">

	<? include "includes/header.php"?>

	<main class="content" role="main">
		<div class="content__inner pages">
			<!-- NAVIGATION LINK on page-->
			<? include "includes/inc_nav-link.php"?>
			<!-- /END NAVIGATION LINK on page-->

			<!-- START page content code-->
			<div class="page page--current">

				<? include "includes/inc_news-page.php"?>

			</div>
			<div class="page">

				<? include "includes/inc_advantage.php"?>

			</div>
			<div class="page">

				<? include "includes/inc_location.php"?>

			</div>
			<div class="page">

				<? include "includes/inc_apartments.php"?>

			</div>
			<!--/END page content code-->

			<!--/END page content code-->

		</div>
		<!--/END content__inner-->
	</main>
	<!--/END content-->

	<?include "includes/footer.php"?>

</body>
</html>
