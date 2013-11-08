<section class="contentWrapper">
  <h1 class="addNewPost">Edit Post</h1>
  
  <?php echo Form::open(array("class"=>"postForm", 'action' => $post->url('edit'))); ?>
    <fieldset>
      <div class="control-group">
        <?php echo Form::label('Title', 'title', array('class' => 'postLabel')); ?>

        <div class="controls">
          <?php echo Form::input('title', 
            Input::post('title', 
            isset($post) ? $post->title : ''),
            array('class' => 'postTitle', 'placeholder'=>'Title')); ?>
        </div>

      </div>

      <div class="control-group">
        <?php echo Form::label('Video', 'title', array('class' => 'postLabel')); ?>

        <div class="controls">
          <?php echo Form::input('video', 
            Input::post('video', 
            isset($post) ? $post->video : ''),
            array('class' => 'postTitle', 'placeholder'=>'Video Embed Code')); ?>
        </div>

      </div>

      <div class="control-group">
        <?php echo Form::label('Genre', 'genre', array('class'=>'postLabel')); ?>
        
        <?php echo Form::select('genre', 'Select Genre', Model_Category::select_category()) ?>

      </div>

      <div class="control-group">
        <?php echo Form::label('Content', 'content', array('class'=>'postLabel')); ?>

        <div class="controls">
          <?php echo Form::textarea('content', 
            Input::post('content', 
            isset($post) ? $post->content : ''), 
            array('class' => 'postContent', 'rows' => 15, 'placeholder'=>'Content')); ?>
        </div>

      </div>

      <div class="control-group">
        <?php echo Form::label('Tags', 'tags', array('class' => 'postLabel')); ?>

        <div class="controls">
          <?php echo Form::input('tags', 
            Input::post('tags', 
            isset($post) ? $post->tags : ''), 
            array('class' => 'postTags', 'placeholder'=>'Add tags - separate them with commas')); ?>
        </div>

      </div>

      <div class="control-group">
        <label class='control-label'>&nbsp;</label>
        <div class='controls'>
          <?php echo Form::submit('submit', 'Update', 
            array('class' => 'btn btn-primary')); ?>
        </div>
      </div>
    </fieldset>
  <?php echo Form::close(); ?>
</section>