<html>
<head>
<META http-equiv=Content-Type ct="text/html; charset=utf-8">
<title>UMAH</title>
<style>
* {
	margin: 0;
	padding: 0;
}
#container-pages {
	width: 960px; 
	margin: 0 auto;
}

#ct {
	width: 480px;
	float: left;
	display: block;
	background: #fff;
	padding: 10px;
}
#ct p {
	text-align: justify;
	font: 13px arial;
	line-height: 20px
}

#ct h1 {
	font: 16px arial;
	font-weight: bold;
	color: #000;
	margin: -10px 0 10px 0;
}


</style>

</head>
<body>

<div id="container-pages">

	<div id="ct">

		<?php if($success==1){ ?>
			<div style="color:white;background:green;">This post has been updated!</div>
		<?php } ?>
		
		<form action="<?=base_url()?>posts/editpost/<?=$post['postID']?>" method="post">

			<p>Title: <input name="title" type="text" value="<?=$post['title']?>" /></p>
			<p>Description: <br/><textarea name="post"><?=$post['post']?></textarea></p>
			<p><input type="submit" value="Edit Post" /></p>

		</form>

	</div>
</div>

</body>
</html>
