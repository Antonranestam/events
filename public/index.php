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
$rss = Feed::loadRss('https://feedroll.com/feedcombiner/feed.php?id=d2b4efe44c4dde228bd1c83939a0fb42');

?>

<body>

	<header class="header" role="banner" aria-label="header">
    <svg class="logo" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    	 viewBox="0 0 1150 189" style="enable-background:new 0 0 1150 189;" xml:space="preserve">
      <g id="logo">
			<rect id="Rectangle-3" class="st0" width="1150" height="189"/>
			<polygon id="Path" class="st1" points="978.3,98.8 992,98.8 992,138.4 1012.2,138.4 1012.2,77 924,77 924,138.4 944.3,138.4
				944.3,98.8 958,98.8 958,138.4 978.3,138.4 			"/>
			<path id="Events-in-Malmö" class="st1" d="M88.3,83.7V70H48.7V49.8h61.4V138H48.7v-20.3h39.6V104H52.1V83.7H88.3z M162.5,138
				l29.1-63h-20.8l-14.7,34.5L141.2,75h-20.8l29.2,63H162.5z M233.6,74.1c13.2,0,22.4,5.9,27.3,16.3c3,6.4,3.1,15.6,0.9,21.8h-39.6
				c0,5.7,5.5,8.7,11.5,8.7c5.5,0,12-1,17.5-3.3l10.2,11.2c-6.7,4.9-16.4,10-27.7,10c-18.9,0-31.8-14.2-31.8-32.3
				C201.9,88.6,213.7,74.1,233.6,74.1z M233.6,92.1c-6.4,0-10.5,4.3-10.6,7.7h21c0-1.1-0.5-2.5-1.5-3.7
				C240.9,93.9,237.7,92.1,233.6,92.1z M313.6,74.1c-9.1,0-15.8,3.3-19.8,8.4l-1.4-7.6h-13v63h19.7v-31.4c0-10,4.4-13.5,11.3-13.5
				c6.8,0,11.1,3.3,11.1,13.1V138h19.7v-32.9C341.2,87.1,332.3,74.1,313.6,74.1z M384.8,94h7.7V75h-7.7V53.8H365V75h-7.7v19h7.7v44
				h19.8V94z M431.9,74.1c-14.5,0.3-26.3,7.6-26.3,21c0,12.3,9.8,18,24.8,19.2l1.6,0.3c6.9,0.6,9.3,1.9,9.3,4.7
				c0,2.5-2.4,3.7-6.2,3.7h-0.5c-6.8,0-15.5-2.8-19.5-6.4l-11,10.5c5.8,7.3,18,11.8,30.6,11.8h0.5c16.4-0.1,25.7-9.3,25.7-20.4
				c0-13.7-10.6-19.4-24.6-20.4l-2.5-0.1c-5.9-0.5-8.7-1-8.7-3.9c0-2.8,2.5-4.2,6.7-4.3h1c4.7,0,11.8,2.5,15.9,6.4l11-10.2
				c-5.8-7.2-16-11.7-27.1-11.7H431.9z M533.3,70.6c6.3,0,11.3-4.4,11.3-10.1c0-5.5-5-10.1-11.3-10.1C527,50.4,522,55,522,60.5
				C522,66.2,527,70.6,533.3,70.6z M523.5,138h19.7V75h-19.7V138z M599.3,74.1c-9.1,0-15.8,3.3-19.8,8.4l-1.4-7.6h-13v63h19.7v-31.4
				c0-10,4.4-13.5,11.3-13.5c6.8,0,11.1,3.3,11.1,13.1V138h19.7v-32.9C626.9,87.1,618.1,74.1,599.3,74.1z M780.9,138V49.8h-12.9
				l-31.8,39.3l-31.6-39.3h-12.9V138h21.4V88.6l23.1,28.3l23.2-28.3V138H780.9z M862.9,138h-12.9l-1.3-6.2c-4.7,4.3-11,6.9-18.5,6.9
				c-17.9,0-30.2-14.4-30.2-32.3s12.3-32.4,30.2-32.4c7.6,0,13.9,2.6,18.6,7.1l1.1-6.2h12.9V138z M832.3,119.7
				c6.2,0,12.6-4.7,12.6-13.2s-6.4-13.4-12.6-13.4s-12.6,4.8-12.6,13.4S826.1,119.7,832.3,119.7z M884.1,138h19.8V49.8h-19.8V138z
				 M1048.3,70.6c6.3,0,11.3-4.4,11.3-10.1c0-5.5-5-10.1-11.3-10.1c-6.3,0-11.3,4.5-11.3,10.1C1036.9,66.2,1042,70.6,1048.3,70.6z
				 M1076,70.6c6.3,0,11.3-4.4,11.3-10.1c0-5.5-5-10.1-11.3-10.1c-6.3,0-11.3,4.5-11.3,10.1C1064.6,66.2,1069.7,70.6,1076,70.6z
				 M1062,74.1c17.9,0,32.4,14.5,32.4,32.4s-14.5,32.3-32.4,32.3s-32.3-14.4-32.3-32.3S1044.1,74.1,1062,74.1z M1062,93.1
				c-6.2,0-12.6,4.8-12.6,13.4s6.4,13.2,12.6,13.2c6.2,0,12.6-4.7,12.6-13.2S1068.2,93.1,1062,93.1z"/>
		  </g>
    </svg>
    <img class="header__bg" src="graphics/header.png" alt="header bg">
	</header>

  <main role="main">
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
                <small><?php echo ($item->author) ?></small>
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
  </main>

	<footer class="page-footer" role="contentinfo" aria-label="page footer">
		<h2 class="block-text">Get out and enjoy!</h2>
	</footer>
</body>
</html>
