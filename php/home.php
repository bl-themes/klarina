    <!-- Content -->
    <div class="container pt-5">
      <?php if (empty($content)) { $language->p('No pages found'); } ?>
      <!-- Start Blog List -->
      <?php foreach ($content as $page): ?>
      <div class="row pb-4">
          <div class="col-sm-8 pb-3">
            <a href="<?php echo $page->permalink(); ?>"><img src="<?php echo ($page->coverImage()?$page->coverImage():Theme::src('img/noimage.png')) ?>" class="img-fluid rounded" alt="<?php echo $page->title(); ?>" style="width:100%;height:300px;object-fit: cover;"></a>
          </div>
          <div class="col-sm-4">
            <p class="d-block text-secondary">
              <img src="<?php echo ($page->user('profilePicture')?$page->user('profilePicture'):Theme::src('img/noimage.png')) ?>" alt="<?php echo $page->title(); ?>" width="40" height="40" class="rounded-circle border border-5"> &nbsp;<small><?php echo $page->user('nickname'); ?></small>
            </p>
            <h2 class="text-dark display-5"><a class="text-decoration-none link-dark" href="<?php echo $page->permalink(); ?>"><?php echo $page->title(); ?></a></h2>
            <p class="text-secondary"><small><?php echo $page->date(); ?></small> <span class="badge rounded-pill bg-danger"><?php echo $page->category() ?></span></p>
          </div>
      </div>
      <?php endforeach ?>
      <!--/ End Blog List -->
      <!-- Start Paginator -->
      <?php if (Paginator::numberOfPages()>1): ?>
      <div class="row">
      <div class="col-sm-12">
        <div class="btn-group">
          <?php if (Paginator::showPrev()): ?>
          <a href="<?php echo Paginator::previousPageUrl() ?>" class="btn btn-outline-dark btn-sm">Previous</a>
          <?php endif ?>
          <?php if (Paginator::showNext()): ?>
          <a href="<?php echo Paginator::nextPageUrl() ?>" class="btn btn-outline-dark btn-sm">Next Page</a>
          <?php endif ?>
        </div>
      </div>
      </div>
      <?php endif ?>
      <!--/ End Paginator -->
    </div>
    <!--/ Content -->