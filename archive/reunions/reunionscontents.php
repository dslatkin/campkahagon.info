<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body style="background:transparent">
<div class="contents">

<div class="item" style="<?php if ($_GET['target']!='2009'){print "display:none;";}?>">
<h3>Kahagonites Now - In 2009</h3>
<p><a href="2009/StuartShanaHarrow.jpg" target="_blank">See Stuart (Simcha) and Shana Harrow</a></p>
</div>

<div class="item" style="<?php if ($_GET['target']!='2013'){print "display:none;";}?>">
<h3>Kahagonites Now - In 2013</h3>
<p>We are still waiting for some new pictures!</p>
</div>

<div class="item" style="<?php if ($_GET['target']!='2014'){print "display:none;";}?>">
<h3>Kahagonites Now - In 2014</h3>
<p>We are still waiting for some new pictures!</p>
</div>

<div class="item" style="<?php if ($_GET['target']!='2015'){print "display:none;";}?>">
<h3>Kahagonites Now - In 2015</h3>
<p>We are still waiting for some new pictures!</p>
</div>

<div class="item" style="<?php if ($_GET['target']!='aprilPhotos'){print "display:none;";}?>">
<h3>April 25, 2009 Photos</h3>
<h4>To view photo information click on the image. To view full screen click the icon in the bottom right.</h4>
<p>
<a data-flickr-embed="true" data-footer="true" href="https://www.flickr.com/photos/127089176@N03/albums/72157646301088057" title="April 25, 2009 Photos"><img src="https://live.staticflickr.com/5583/14972319226_eac6bab4b2_q.jpg" width="500" height="700" alt="April 25, 2009 Photos"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
<!--<object width="500" height="700"> <param name="flashvars" value="offsite=true&lang=en-us&page_show_url=%2Fphotos%2F127089176%40N03%2Fsets%2F72157646301088057%2Fshow%2F&page_show_back_url=%2Fphotos%2F127089176%40N03%2Fsets%2F72157646301088057%2F&set_id=72157646301088057&jump_to="></param> <param name="movie" value="https://www.flickr.com/apps/slideshow/show.swf?v=1611612882"></param> <param name="allowFullScreen" value="true"></param><embed type="application/x-shockwave-flash" src="https://www.flickr.com/apps/slideshow/show.swf?v=1611612882" allowFullScreen="true" flashvars="offsite=true&lang=en-us&page_show_url=%2Fphotos%2F127089176%40N03%2Fsets%2F72157646301088057%2Fshow%2F&page_show_back_url=%2Fphotos%2F127089176%40N03%2Fsets%2F72157646301088057%2F&set_id=72157646301088057&jump_to=" width="400" height="300"></embed></object>-->
</p>
</div>

<div class="item" style="<?php if ($_GET['target']!='aprilBrochure'){print "display:none;";}?>">
<h3>April 2009 Reunion Brochure</h3>
<?php
	// Get current page to display
	if ($_GET['page'] >= 32)
		$page = 32;
	else if ($_GET['page'] >= 1)
		$page = $_GET['page'];
	else
		$page = 1;
	
	// Set previous and next pages to display
	$prevPage = NULL;
	$nextPage = NULL;
	if ($page > 1)
		$prevPage = $page - 1;
	if ($page < 32)
		$nextPage = $page + 1;
?>
<p align="center">
<?php
	if ($prevPage)
		echo "<a href=\"reunionscontents.php?target=aprilBrochure&page=$prevPage\"><< Page $prevPage</a>";
	if ($prevPage && $nextPage)
		echo '&nbsp;&nbsp;&nbsp;&nbsp;';
	if ($nextPage)
		echo "<a href=\"reunionscontents.php?target=aprilBrochure&page=$nextPage\">Page $nextPage >></a>";
?>
</p>
<p><img src="brochure/page<?php echo $page; ?>.jpg" width="475" /></p>
</div>    

</body></html>