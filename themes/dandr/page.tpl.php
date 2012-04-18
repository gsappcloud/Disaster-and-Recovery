<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie6 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if gt IE 8]> <!--> <html class="" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <!--<![endif]-->
<head>
  <?php print $head; ?>
  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body class="<?php print $body_classes; ?>">

<div id="container">
	<aside id="left">
		<?php if ($logo): ?>
			<img id="logo" src="<?php print $logo; ?>" alt="<?php print t('Disaster and Recovery'); ?>" />
    	<?php endif; ?>
    	
    	<nav id="nav">
    		<a id="about" href="/"><img src="/sites/default/files/about.png" alt="<?php print t('About'); ?>" /></a>
    		<a id="scoring" href="/scoring"><img src="/sites/default/files/scoring.png" alt="<?php print t('Scoring'); ?>" /></a>
    		<a id="credits" href="/credits"><img src="/sites/default/files/credits.png" alt="<?php print t('Credits'); ?>" /></a>
		</nav>
		
	</aside> <!-- #left -->

	<div id="content">

    	<section id="main" role="main">
      		<?php if (!empty($messages)): print $messages; endif; ?>
      			<a id="main-content"></a>
      		<?php print $content; ?>
    	</section> <!-- /#main -->
    	
	</div><!-- #content -->
	
</div> <!-- #container -->


</body>
</html>