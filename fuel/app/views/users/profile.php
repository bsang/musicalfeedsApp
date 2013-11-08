<div class="contentWrapper">
					
					<div class="profile">
						<div class="profileHeader clearFix">
							<div class="profilePicture"><?= Asset::img('taylog.jpg') ?></div>
							<div class="userProfileInfo clearFix">
								<h1><?= $profile->first_name, ' ', $profile->last_name ?></h1>
								<p class="location"><?= $profile->city ?></p>
							</div>
							<button class="subscribeButton">Subscribe</button>
						</div>

						<h1 class="headline">I'm not the best, but I'm trying my best for my future</h1>
					</div>

					<div class="profileTabs clearFix">
						<a href="profile.html">
							<div class="posts clearFix">
								<h3 class="numPosts"><?= count($profile->posts) ?></h3>
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

						<section>
            <!-- Post Summary -->
            <?php foreach ($profile->posts as $post): ?>
              <div class="postSummary">
                <article class="contentArea clearFix">
                    <div class="contentHeader clearFix">
                      <div class="profilePicture">
                        <?= Html::anchor('users/profile', Asset::img('taylog.jpg'))?>
                      </div>

                      <div class="profileHeaderContent">
                        <h1><a href="#"><?= Html::anchor($post->url(), $post->title) ?></a></h1>
                        <p class="author"><?= $post->user->first_name, ' ', $post->user->last_name ?></p>
                      </div>
                    </div>

                    <div class="postExcerpt">
                      <?= $post->content_excerpt() ?> <?= Html::anchor($post->url(), '[...]') ?>
                    </div>

                    <div class="contentFooter clearFix">
                      <p class="date"><?= $post->date("F d, Y") ?> on <span><?= Html::anchor($post->category->url() , $post->category->name) ?></span></p>
                      <div class="likeComment">
                        <div class="like clearFix">
                          <?= Asset::img('likeIcon.png') ?>
                          <p>12</p>
                        </div>

                        <div class="commentIcon clearFix">
                          <?= Asset::img('commentIcon.png') ?>
                          <p>12</p>
                        </div>
                      </div>
                    </div>
                </article>

              </div>
            <?php endforeach; ?>
            <!-- End Post Summary -->
          </section>
          <!-- End Section -->

					</div>
					<!-- End UserPosts -->
				</div>
				<!-- End containerWrapper -->