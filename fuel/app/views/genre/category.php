<div class="contentWrapper">

          <div class="clearFix">
            <h1 class="newsFeed"><?= $category->name ?></h1>

            <div class="sortLine">
              <span class="sortText">
                Sort: Lastest Post &#9660
              </span>
            </div>
          </div>
          
          <section>
            <!-- Post Summary -->
            <?php if($posts): ?>
              <?php foreach ($posts as $post): ?>
                <div class="postSummary">
                  <article class="contentArea clearFix">
                    <div class="contentHeader clearFix">
                      <div class="profilePicture">
                        <a href="profile.html"><?= Html::anchor('users/profile', Asset::img('taylog.jpg'))?></a>
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
                      <p class="date">September 11, 2013 on <span><a href="#"><?= $post->category->name?></a></span></p>
                      <div class="likeComment">
                        <div class="like clearFix">
                          <?= Asset::img('likeIcon.png') ?>
                          <p>12</p>
                        </div>

                        <div class="commentIcon clearFix">
                          <?= Asset::img('commentIcon.png') ?>
                          <p><?= $post->total_comments() ?></p>
                        </div>
                      </div>
                    </div>
                  </article>

                </div>
            <?php endforeach; ?>
            <!-- End Post Summary -->
            <?php else: ?>
              <p>Please make the first post</p>
            <?php endif; ?>

          </section>
          <!-- End Section -->
        </div>