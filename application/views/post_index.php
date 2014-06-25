<?php if($this->session->userdata('userID')) { ?>
	<p>You are logged in! </p>
	<p><a href="<?=base_url()?>users/logout">Logout</a></p>
	<p>User type: <?=$this->session->userdata('user_type'); ?>
	<?php } else { ?>

	<p><a href="<?=base_url()?>users/login">Login</a></p>

	<?php } ?>
<br/><br/>
<h1> Blog Posts</h1>

<?php
if(!isset($posts)){
?>
	<p> Sem posts</p>

<?php
} else {
	foreach ($posts as $row){
?>

	<h2><a href="<?=base_url()?>posts/post/<?=$row['postID']?>"><?=$row['title']?></a> - <a href="<?=base_url()?>posts/editpost/<?=$row['postID']?>">Edit</a> | <a href="<?=base_url()?>posts/deletepost/<?=$row['postID']?>">Delete</a></h2>
	<p><?=substr(strip_tags($row['post']), 0, 200).".."?></p>
	<p><a href="<?=base_url()?>posts/post/<?=$row['postID']?>">Read More </a></p>
	<hr/>		

<?php
}
}
?>
<?=$pages?>
	

