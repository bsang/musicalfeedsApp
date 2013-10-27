<h2>Listing <span class='muted'>Posts</span></h2>
<br>
<?php if ($posts): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Title</th>
			<th>Genre</th>
			<th>Content</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($posts as $post): ?>		<tr>

			<td><?php echo $post->title; ?></td>
			<td><?php echo $post->genre; ?></td>
			<td><?php echo $post->content; ?></td>
			<td>
				<?php echo Html::anchor('post/view/'.$post->id, '<i class="icon-eye-open" title="View"></i>'); ?> |
				<?php echo Html::anchor('post/edit/'.$post->id, '<i class="icon-wrench" title="Edit"></i>'); ?> |
				<?php echo Html::anchor('post/delete/'.$post->id, '<i class="icon-trash" title="Delete"></i>', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Posts.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('post/create', 'Add new Post', array('class' => 'btn btn-success')); ?>

</p>
