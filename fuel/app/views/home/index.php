<div class="contentWrapper">

          <h1 class="newsFeed">News Feed</h1>
          <section>
            <!-- Post Summary -->
            <?php foreach ($posts as $post): ?>
              <div class="postSummary">
                <article class="contentArea">
                    <div class="contentHeader clearFix">
                      <div class="profilePicture">
                        <a href="profile.html"><?= Html::anchor('users/profile', Asset::img('taylog.jpg'))?></a>
                      </div>

                      <div class="profileHeaderContent">
                        <h1><a href="#"><?= Html::anchor($post->url(), $post->title) ?></a></h1>
                        <p class="author">First Last</p>
                      </div>
                    </div>

                    <div class="postExcerpt">
                      <p><?= $post->content_excerpt() ?> <?= Html::anchor($post->url(), '[...]') ?></p>
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