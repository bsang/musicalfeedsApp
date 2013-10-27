<section class="contentWrapper">
						<!-- Content Header -->
						<div class="articleHeader">
							<h1><?= $post->title ?></h1>

							<div id="contentHeaderInfo" class="clearFix">

								<p class="date">September 11, 2013 on <span><a href="#"><?= $post->category_id ?></a></span></p>

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
							<p><?= $post->content ?></p>
						</article>
					</section>

					<div class="shares clearFix">
						<div class="linkToProfile clearFix">

							<div class="userProfilePicture"></div>
							<div class="userProfileInfo">
								<p>Carrie Underwood</p>
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
												<strong class="displayName">Maecenas:</strong>
												<div class="commentDate"><p>September 29, 2013</p></div>
											</div>
											<p><?= $comment->comment ?></p>
										</article>
									</div>
								<?php endforeach; ?>
							<?php else: ?>
								<p>Leave the first comment...</p>
							<?php endif;?>
						</div>

						<div class="addComment">
							<div class="userProfilePicture"></div>
							<div class="commentForm">
								<form>
									<textarea id="commentText" rows="2" cols="58" placeholder="Write a comment..."></textarea>
									<input type="button" id="addCommentButton" value="Post A Comment">
								</form>
							</div>
						</div>
				</section>