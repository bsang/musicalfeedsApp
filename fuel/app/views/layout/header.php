<div class="headNav">

        <!-- Branding -->
        <a href="/"><span class="branding">Musical<span>Feed</span></span></a>

        <!-- After Login -->
        <div class="topNav clearFix">
          <?php if($user): ?>
            <?= Html::anchor('article/create', Asset::img('post.png'), array('class' => 'newPostIcon')); ?>
          <?php else: ?>
            <?= Html::anchor('users/login', Asset::img('post.png'), array('class' => 'newPostIcon')); ?>
          <?php endif; ?>
          
          <!-- User information -->
          <div class="userInfo clearFix">
            <?php if($user): ?>
              <a href="#"><?= Html::anchor('users/profile', Asset::img('userIcon.png'), array('class' => 'profilePic')) ?></span></a>
              <span class="usernameDisplay">Welcome: <?= Html::anchor('users/profile', $user->first_name, array('class' => 'fname')) ?></span>
              <a href="#"><?= Html::anchor('users/logout', 'Logout', array('class' => 'logout'))?></a>
            <?php else: ?>
              <a href="#"><?= Html::anchor('users/login', Asset::img('userIcon.png'), array('class' => 'profilePic')) ?></span></a>
            <?php endif; ?>
          </div>

          <!-- Setting Button -->
          <!-- <div class="setting">
            <?= Asset::img('setting.png') ?>
          </div> -->

        </div>

      </div>
      <!-- End headNav -->