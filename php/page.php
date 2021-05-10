<!-- Content -->
<div class="container pt-5">
        
    <div class="row pb-4">
        <!-- Start Feature Image -->
        <div class="col-sm-8 pb-3">
            <?php if ($page->coverImage()): ?>
            <img src="<?php echo $page->coverImage(); ?>" class="img-fluid rounded" alt="<?php echo $page->title(); ?>" style="width:100%;height:500px;object-fit: cover;">
            <p class="text-muted"><small><?php echo $page->custom('figure'); ?></small></p>
            <?php endif ?>
        </div>
        <!--/ End Feature Image -->

        <!-- Start Title, Category, Date -->
        <div class="col-sm-4">
            <h2 class="text-dark display-5"><?php echo $page->title(); ?></h2>
            <p class="text-secondary"><small><?php echo $page->date(); ?></small> <span class="badge rounded-pill bg-danger"><?php echo $page->category() ?></span></p>
            <p class="pt-3 lead"><?php echo (empty($page->description())?$language->p('Complete the description of the article'):$page->description()) ?></p>
        </div>
        <!--/ End Title, Category, Date -->
    </div>

    <div class="row pb-4">
        <!-- Start Profile -->
        <div class="col-sm-3 text-center x-5 pb-5">
            <div class="sticky">
                <img src="<?php echo ($page->user('profilePicture')?$page->user('profilePicture'):Theme::src('img/noimage.png')) ?>" alt="" width="120" height="120" class="rounded-circle border border-5"><br>
                <p class="fw-bold pt-3"><?php echo $page->user('nickname'); ?></p>
                <p class="text-secondary">
                <?php
                    $className = 'pluginAbout';
                    $plugin = getPlugin($className);
                    echo $plugin->siteSidebar();
                ?>
                </p>
                <ul class="list-unstyled small text-muted">
                    <li class="mb-3">
                        <?php foreach (Theme::socialNetworks() as $key=>$label): ?>
                        <a href="<?php echo $site->{$key}(); ?>" target="_blank"><img src="<?php echo DOMAIN_THEME.'img/'.$key.'.png' ?>" width="32"></a>
                        <?php endforeach; ?>
                    </li>
                </ul>
            </div>
        </div>
        <!--/ End Profile -->
          
    <div class="col-sm-9 text-secondary">
        <?php Theme::plugins('pageBegin'); ?>
            <br>
                <?php echo $page->content(); ?>
            <br>
            <?php if (!empty($page->tags(true))): ?>
            <?php foreach ($page->tags(true) as $tagKey=>$tagName): ?>
                <a class="btn btn-light btn-sm" href="<?php echo DOMAIN_TAGS.$tagKey ?>" role="button"><span class="text-warning">&#9839;</span> <?php echo $tagName; ?></a>
            <?php endforeach ?>
            <?php endif; ?>
            <p>
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox"></div>
            </p>
            <br><br>
        <?php Theme::plugins('pageEnd'); ?>
        <br><br>
    </div>
    </div>
    
</div>
<!--/ Content -->