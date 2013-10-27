<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="control-group">
			<?php echo Form::label('Title', 'title', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('title', Input::post('title', isset($post) ? $post->title : ''), array('class' => 'span4', 'placeholder'=>'Title')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Genre', 'genre', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('genre', Input::post('genre', isset($post) ? $post->genre : ''), array('class' => 'span4', 'placeholder'=>'Genre')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Content', 'content', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::textarea('content', Input::post('content', isset($post) ? $post->content : ''), array('class' => 'span8', 'rows' => 8, 'placeholder'=>'Content')); ?>

			</div>
		</div>
		<div class="control-group">
			<label class='control-label'>&nbsp;</label>
			<div class='controls'>
				<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>			</div>
		</div>
	</fieldset>
<?php echo Form::close(); ?>