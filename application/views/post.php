<?php if(!isset($post)){ ?>
	<p>This page was accesed incorrectly.</p>

<?php } else { ?>

<h2><?=$post['title']?></h2>
<p><?=$post['post']?></p>

<hr />
<h2>Comments</h2>
<?php if(count($comments)>0) { ?>
<?php foreach($comments as $row) { ?>
<p>
	<strong><?=$row['username']?></strong> said at <?=date('m/d/Y H:i A', strtotime($row['date_added']))?><br/>
	<?=$row['comment']?>

	<?php $str = $row['comment'];
	$str=parse_smileys($str,base_url().'smileys');
	echo $str;
	?>
</p>
<hr/>
<?php } ?>
<?php } else { ?>
<p> There are currently no comments. </p>
<?php } ?>
<h3>Add Comment</h3>
<div>
	<?php echo smiley_js(); ?>
	<?php $smiley_table; ?>
</div>
<?php echo form_open(base_url().'comments/add_comment/'.$post['postID']); ?>
<?php
	$data_form=array(
		'name'=>'comment',
		'id'=>'comment'
	);
echo form_textarea($data_form); ?>
<p>Captcha Code: <?=$captcha?> <br/> <?php
$data_form=array(
	'name'=>'captcha'
);
echo form_input($data_form);
?>
<p><?php echo form_submit('','Add Comment'); ?></p>
<?php echo form_close(); ?>
<?php } ?>
	