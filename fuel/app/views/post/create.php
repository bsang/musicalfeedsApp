<section class="contentWrapper">
  <h1 class="addNewPost">Add New Post</h1>
  
  <?php echo Form::open(array("class"=>"postForm", 'action' => 'article/create')); ?>
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

      <div class="clearFix">
        <?php echo Form::label('Genre', 'genre', array('class'=>'postLabel')); ?>
        
        <?php echo Form::select('genre', 'Select Genre', Model_Category::select_category(), array("class" => "selectGenre")) ?>
        
        <div class="media clearFix">
          <div class="embedVideo">Embed Video</div>
          <div class="embedPhoto">Embed Photo</div>
        </div>
      </div>

      <div class="controls">
        <?php echo Form::textarea('video', 
          Input::post('video', 
          isset($post) ? $post->video : ''),
          array('class' => 'postVideoInvisible', 'rows' => 5, 'placeholder'=>'Video Embed Code')); ?>
      </div>


      <div id="video-dialog" title="Embed Music Video">
        <div class="control-group">
        <?php echo Form::label('Video', 'title', array('class' => 'postLabel')); ?>

        <div class="controls">
          <?php echo Form::textarea('video', 
            Input::post('video', 
            isset($post) ? $post->video : ''),
            array('class' => 'postVideo', 'rows' => 5, 'placeholder'=>'Paste Embed Code')); ?>
        </div>

        </div>
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
          <?php echo Form::submit('submit', 'Publish', 
            array('class' => 'publishButton')); ?>
        </div>
      </div>
    </fieldset>
  <?php echo Form::close(); ?>
</section>