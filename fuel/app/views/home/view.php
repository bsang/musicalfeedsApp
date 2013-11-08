<section class="contentWrapper">
						<!-- Content Header -->
						<div class="articleHeader">
							<h1><?= $post->title ?></h1>

							<div id="contentHeaderInfo" class="clearFix">

								<p class="date"><?= $post->date("F d, Y") ?> on <span><?= Html::anchor($post->category->url(),$post->category->name) ?></span></p>

								<div class="likeComment">
									<div class="like clearFix">
										<?= Asset::img('likeIcon.png') ?>
										<p>12</p>
									</div>

									<div class="commentIcon clearFix">
										<?= Asset::img('commentIcon.png') ?>
										<p><?= count($comments) ?></p>
									</div>
								</div>

							</div>
						</div>

						<!-- Full Content -->
						<article id="fullContent">
							<?= $post->video ?>
							<p><?= $post->content ?></p>
						</article>
					</section>

					<div class="shares clearFix">
						<div class="linkToProfile clearFix">

							<div class="userProfilePicture"></div>
							<div class="userProfileInfo">
								<p><?= $post->user->first_name, ' ', $post->user->last_name ?></p>
								<a href="profile.html">View Profile</a>
							</div>

						</div>

						<div class="socialShare clearFix">
							<p class="shareText">Share on:</p>
							<a href="#"><?= Asset::img('facebookShare.png') ?></a>
     	 				<a href="#"><?= Asset::img('twitterShare.png') ?></a>
						</div>
					</div>

					<section class="contentWrapper">
						<!-- Comments -->
						<div class="comments">
							<h2>All Comments <span>(<?= count($comments) ?>)</span></h2>
							<?php if($comments): ?>
								<?php foreach ($comments as $comment): ?>
									<div class="comment clearFix">
										<div class="userProfilePicture"></div>
										<article class="commentContent">
											<div class="commentHeader clearFix">
												<strong class="displayName"><?= $comment->user->first_name, ' ',$comment->user->last_name ?></strong>
												<div class="commentDate"><p><?= $comment->date("F d, Y") ?></p></div>
											</div>
											<p><?= $comment->comment ?></p>
										</article>
									</div>
								<?php endforeach; ?>
							<?php else: ?>
								<p>Leave the first comment...</p>
							<?php endif;?>
						</div>
						
						<?php if($user): ?>
							<div class="addComment">
								<div class="userProfilePicture"></div>
								<div class="commentForm">
									<?php echo Form::open(array("class" => "commentForm", 'action' => 'article/comment/' . $post->url)); ?>
										<?php echo Form::textarea('comment', 
					           null, 
					            array('id' => 'commentText', 'rows' => 2, 'cols' => 53, 'placeholder'=>'Write a comment...')); ?>
										
										<?php echo Form::submit('submit', 'Post A Comment', 
	            				array('id' => 'addCommentButton')); ?>
									<?php echo Form::close(); ?>
								</div>
							</div>
						<?php else: ?>
							<div class="addComment">
								<div class="userProfilePicture"></div>
								<div class="commentForm">
									<?php echo Form::open(array("class" => "commentForm", 'action' => 'users/login/')); ?>
										<?php echo Form::textarea('comment', 
					           null, 
					            array('id' => 'commentText', 'rows' => 2, 'cols' => 53, 'placeholder'=>'Please Login to make a comment')); ?>
										
										<?php echo Form::submit('submit', 'Post A Comment', 
	            				array('id' => 'addCommentButton')); ?>
									<?php echo Form::close(); ?>
								</div>
							</div>
						<?php endif; ?>
						
				</section>