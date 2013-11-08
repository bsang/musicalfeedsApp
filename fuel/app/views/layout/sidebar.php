<!-- Sidbar -->
      <aside>
      <?php if($user): ?>
        <div class="clearFix">
          <div class="miniProfile">
            <div class="clearFix">
              <div class="miniProfilePicture"></div>
              <div class="miniUserInfo">
                <span class="fullname"><?= $user->first_name,' ', $user->last_name ?></span> <br />
                <span class="miniLocation"><?= $user->city ?></span>
                <span class="miniProfileLink"><?= Html::anchor('users/profile', 'Profile')?></span>
              </div>
            </div>
          </div>
          <div class="miniPostCount">
            <span class="miniNumber"><?= count($user->posts) ?></span>
            <span class="miniText">Posts</span>
          </div>
          <div class="miniFollowerCount">
            <span class="miniNumber">100</span>
            <span class="miniText">Follower</span>
          </div>
          <div class="miniFollowingCount">
            <span class="miniNumber">50</span>
            <span class="miniText">Following</span>
          </div>
        </div>
      <?php endif; ?>

        <div class="topStories">
          <!-- <h2>Top Stories</h2>
          <ol>
            <li>
                <p><a href="#">Oppa Gangnam Style is one of the most popular song in the world.</a></p>
                <p>by: <a href="#">Christopher Jacop</a></p>
            </li>

            <li>
                <p><a href="#">Oppa Gangnam Style is one of the most popular song in the world.</a></p>
                <p>by: <a href="#">Christopher Jacop</a></p>
            </li>

            <li>
                <p><a href="#">Oppa Gangnam Style is one of the most popular song in the world.</a></p>
                <p>by: <a href="#">Christopher Jacop</a></p>
            </li>
          </ol> -->
          
          <div id="bottomSidebar">
            <h2>Popular Posts</h2>
            <ol>
              
              <li>
                <img src="" class="popularPostProfilePic">
                <article class="popularContent">
                    <h3><a href="#">I told you so</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing. <a href="#">[...]</a></p>
                </article>
              </li>

              <li>
                <img src="" class="popularPostProfilePic">
                <article class="popularContent">
                    <h3><a href="#">I told you so</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing. <a href="#">[...]</a></p>
                </article>
              </li>

              <li>
                <img src="" class="popularPostProfilePic">
                <article class="popularContent">
                    <h3><a href="#">I told you so</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing. <a href="#">[...]</a></p>
                </article>
              </li>
          </ol>

          <div class="ads">
            <?= Asset::img('ads.png') ?>
          </div>
          </div>

        </div>
      </aside>