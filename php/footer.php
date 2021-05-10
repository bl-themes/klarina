    <!-- Footer -->
    <footer class="bd-footer py-5 mt-5 bg-light">
      <div class="container py-5">
        <div class="row">
          <div class="col-6 col-lg-2 offset-lg-1 mb-3">
            <h5>Main Pages</h5>
            <ul class="list-unstyled">
              <?php foreach ($staticContent as $staticPage): ?>
              <?php if ($staticPage->slug() != "error") { // hide error page from menu ?>
              <li class="mb-2"><a href="<?php echo $staticPage->permalink(); ?>" class="text-decoration-none link-dark"><?php echo $staticPage->title(); ?></a></li>
              <?php } ?>
            <?php endforeach ?>
            </ul>
          </div>
          <div class="col-6 col-lg-2 mb-3">
            <h5>Categories</h5>
            <ul class="list-unstyled">
              <?php foreach ($categories->db as $key=>$fields):
              if($fields['list']):  ?>
              <li class="mb-2"><a href="<?php echo DOMAIN_CATEGORIES.$key; ?>" class="text-decoration-none link-dark"><?php echo $fields['name']; ?></a></li>
              <?php
            endif;
            endforeach; ?>
            </ul>
          </div>
          <div class="col-lg-3 mb-3">
            <h5>Latest Post</h5>
            <ul class="list-unstyled">
              <?php
                $listOfKeys = $pages->getList(1, 4);
                if ($listOfKeys) :
                foreach ($listOfKeys as $key) :
                $lPage = new Page($key);
              ?>
              <li class="mb-2"><a href="<?php echo $lPage->permalink() ?>" class="text-decoration-none link-dark"><?php echo $lPage->title() ?></a></li>
              <?php endforeach ?>
              <?php endif ?>
            </ul>
          </div>
          <div class="col-lg-3 mb-3">
            <h5><?php echo $site->title(); ?></h5>
            <ul class="list-unstyled small text-muted">
              <li class="mb-2 pb-3"><?php echo $site->description(); ?></li>
              <li class="mb-2">Powered by <a href="https://www.bludit.com" class="text-decoration-none link-dark" target="_blank"><strong>Bludit</strong></a> <br>Theme by <a href="https://blthemes.com" class="text-decoration-none link-dark" target="_blank" ><strong>BlThemes</strong></a></li>
              <li class="mb-2">Copyright &copy; 2021.</li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!--/ Footer -->