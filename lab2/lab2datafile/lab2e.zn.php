<?php
    include("./zh.inc.php");
?>

<html>

<head>
	<title>Activities - IT | IVE(CW)</title>
</head>

<body>

<div id="header">
	<div class="container">
	    <h1><?php echo $dept?></h1>
	    <h2><?php echo $campus?></h2>

	    <div id="nav">
	        <ul>
	            <li><a href="#"><?php echo $linkHome ?></a></li>
	            <li><a href="#"><?php echo $linkAbt ?></a></li>
	            <li><a href="#"><?php echo $linkNews ?>/a></li>
	            <li><a href="#"><?php echo $linkProg ?></a></li>
	            <li><a href="#"><?php echo $linkFaci ?></a></li>
	            <li><a href="#"><?php echo $linkColl ?></a></li>
	            <li><a href="#"><?php echo $linkLink ?></a></li>
	        </ul>
	    </div>
	</div>
</div>

<div id="main">
	<div class="container">
	    <div id="posts">
	        <h3><?php echo $act ?></h3>
	        <div class="post">
	            <p class="title"><?php echo $post1Title ?></p>
	            <p class="date"><?php echo $post1Date ?></p>
	            <p class="cover"><img src="post1.jpg" /></p>
	            <p class="more"><a href="#"><?php echo $more ?> &gt;&gt;</a></p>
	        </div>
	        <div class="post">
	            <p class="title"><?php echo $post2Title ?></p>
	            <p class="date"><?php echo $post2Date ?></p>
	            <p class="cover"><img src="post2.jpg" /></p>
	            <p class="more"><a href="#"><?php echo $more ?> &gt;&gt;</a></p>
	        </div>
	    </div>
	</div>
</div>

<div id="footer">
	<div class="container">
    <p>&copy; <?php echo $copyright?>
        <br/><?php echo $dept?></p>
	</div>
</div>

</body>
</html>
