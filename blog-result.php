<span id="starthere"></span>
<div id="search-results" class="page page--full-width" data-t4-ajax-group="courseSearch" role="main">
  <article class="listing-page">
    <section class="su-listing">
      <?php if (!empty($results)) : ?>
        <?php foreach ($results as $item) : ?>
          <article class="listing--item news--item global-padding--5x">
            <div class="grid-container">
              <div class="grid-x grid-margin-x">
                <div class="cell medium-7 large-8">
                  <div class="news--item__text text-margin-reset">
                    <h3 class="h4 funderline"><a href="<?php echo $item['url']; ?>"><?php echo $item['title']; ?></a></h3>
                    <div class="date"><?php echo $item['publishDateText']; ?></div>
                    <div class="global-spacing--2x">
                      <p><?php echo $item['articleSubhead']; ?></p>
                    </div>
                    <div class="global-spacing--2x tags tags__links">
                      <h4 class="tags__heading show-for-sr">Tags:</h4>
                    </div>
                  </div>
                </div>
                <div class="cell medium-5 large-4">
                  <?php if ($item['image'] !== ''): ?>
                    <figure class="aspect-ratio-frame oho-animate oho-animate-single fade-in-big" style="--aspect-ratio: 2/3">
                      <img loading="lazy" src="<?php echo $item['image']; ?>" alt="<?php echo $item['title']; ?>">
                    </figure>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </article>
        <?php endforeach; ?>
        <?php if (isset($paginationArray)) : ?>
          <div class="pagination-box">
            <div class="pagination-pages">
              <nav aria-label="pagination" class="pagination" data-t4-ajax-link="normal" data-t4-scroll="true">
                <?php foreach ($paginationArray as $paginationItem) : ?>
                  <?php if ($paginationItem['current']) : ?>
                    <span class="currentpage"><a href=""><?php echo $paginationItem['text']; ?></a></span>
                  <?php else : ?>
                    <a href="<?php echo $paginationItem['href']; ?>" class="<?php echo $paginationItem['class']; ?>">
                      <?php echo $paginationItem['text']; ?>
                    </a>
                  <?php endif; ?>
                <?php endforeach; ?>
              </nav>
            </div>
          </div>
        <?php endif; ?>
      <?php else : ?>
        <p style="text-align: center; padding: 30px; font-weight: bold;">No Results Found</p>
      <?php endif; ?>
    </section>
  </article>
</div>
