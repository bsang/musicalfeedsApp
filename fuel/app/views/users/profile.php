<div class="contentWrapper">
					
					<div class="profile">
						<div class="profileHeader clearFix">
							<div class="profilePicture"><?= Asset::img('taylog.jpg') ?></div>
							<div class="userProfileInfo clearFix">
								<h1>Taylor Swift</h1>
								<p class="location">California, CA</p>
							</div>
							<button class="subscribeButton">Subscribe</button>
						</div>

						<h1 class="headline">I'm not the best, but I'm trying my best for my future</h1>
					</div>

					<div class="profileTabs clearFix">
						<a href="profile.html">
							<div class="posts clearFix">
								<h3 class="numPosts">50</h3>
								<h4>Posts</h4>
							</div>
						</a>

						<a href="subscribers.html">
							<div class="subscribers clearFix">
								<h3 class="numSubscribers">100</h3>
								<h4>Subscribers</h4>
							</div>
						</a>

						<a href="subscribedto.html">
							<div class="subscribedTo clearFix">
								<h3 class="numSubscribedTo">10</h3>
								<h4>Subscribed To</h4>
							</div>
						</a>
					</div>

					<!-- Posts from user -->
					<div class="userPosts">

						<div class="postContainer">
							<article class="contentArea">
										<div class="contentHeader clearFix">
											<div class="profilePicture"><a href="profile.html"><?= Asset::img('taylog.jpg') ?></a></div>
											<div class="profileHeaderContent">
												<h1></h1>
												<p class="author">Taylor Swift</p>
											</div>
										</div>

										<div class="postExcerpt">
											<p>[...]</a></p>
										</div>

										<div class="contentFooter clearFix">
											<p class="date">September 11, 2013 on <span><a href="#">Rock</a></span></p>
											<div class="likeComment">
												<div class="like clearFix">
													<?= Asset::img('likeIcon.png') ?>
													<p>12</p>
												</div>

												<div class="commentIcon clearFix">
													<?= Asset::img('commentIcon.png') ?>
													<p>14</p>
												</div>
											</div>
										</div>
							
							</article>
						</div>

					</div>
					<!-- End UserPosts -->
				</div>
				<!-- End containerWrapper -->