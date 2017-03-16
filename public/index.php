<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Events In Malmö</title>
  <meta name="description" content="Design, development & personal development events in Malmö.">
  <link type="text/css" rel="stylesheet" href="//fast.fonts.net/cssapi/d75bfad4-909a-4759-987e-74a102f28057.css"/>
  <link rel="stylesheet" href="dist/css/main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="dist/js/bundle.js"></script>

   <!--[if lt IE 9]>
     <script src = "http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
   <![endif]-->
</head>

<?php

require_once 'src/Feed.php';
$rss = Feed::loadRss('https://feedroll.com/feedcombiner/feed.php?id=7cdd9e10a17509da5fda8b1f6a706e03');

?>

<body>

	<header class="site-header" role="banner" aria-label="header">
		<h1 class="logo">Events in Malmö</h1>
	</header>

	<section class="events-listing" role="main" aria-label="primary">
		<div>
			<h2 class="spec-title">Upcoming events</h2>
		</div>

		<?php foreach ($rss->item as $item): ?>
			<article class="event">
				<figure class="event__image">
					<img src="/" alt="foo-cafe">
				</figure>

        <div class="event__title">
          <time datetime="2017-02-12 17:30"><?php echo strip_tags ($item->author, '<p><a>') ?></time>
          <adress>Foo cafe</adress>
        </div>

				<?php if (isset($item->{'content:encoded'})): ?>
					<div><?php echo $item->{'content:encoded'} ?></div>
				<?php else: ?>

					<div class="event__text">
            <h1>
              <a href="<?php echo htmlSpecialChars($item->link) ?>"><?php echo htmlSpecialChars($item->title) ?></a>
              <small><?php echo ($item->pubDate) ?></small>
            </h1>

						<p><?php echo strip_tags ($item->description, '<p><a>') ?></p>
						<a href="#" class="btn" aria-label="Read more about Advanced Speakers Club link" title="Read more about Advanced Speakers Club">Read more</a>
					</div>
				<?php endif ?>
			</article>
		<?php endforeach ?>

		<button aria-label="Load more events" class="btn-black">
			Load more events
		</button>
	</section>

	<section class="slack" role="complementary" aria-label="slack info">
		<article class="slack__information">
			<h2>Get notified about events</h2>
			<p>Have your team notified about cool events that is taking place in Malmö directly in to your Slack.</p>
			<a href="#" class="btn-blue btn-blue--slack">Add to slack</a>
		</article>
	</section>

	<section class="about" role="complementary" aria-label="about">
		<h1>What is this?</h2>
		<p>Lorem ipsum dolor sit amet, ad ipsum melius sensibus vix, ut his tation luptatum conclusionemque, id quod tincidunt scriptorem nam. Wisi tamquam ea has. Pri ad copiosae assentior. Vis audiam eleifend intellegebat te, erant discere ei mel. Quem putent honestatis nec ea, eos minim mandamus in, sea ne oblique menandri. Vim an magna civibus periculis. <br />
			Lorem ipsum dolor sit amet, ad ipsum melius sensibus vix, ut his tation luptatum conclusionemque, id quod tincidunt scriptorem nam. Wisi tamquam ea has. Pri ad copiosae assentior. Vis audiam eleifend intellegebat te, erant discere ei mel. Quem putent honestatis nec ea, eos minim mandamus in, sea ne oblique menandri. Vim an magna civibus periculis.</p>
	</section>

	<footer class="page-footer" role="contentinfo" aria-label="page footer">
		<h2 class="block-text">Get out and enjoy!</h2>
	</footer>
</body>
</html>
