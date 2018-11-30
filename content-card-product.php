<div class="card w-100" style="width: 18rem;">
  <?php
    if( has_post_thumbnail()) {
      the_post_thumbnail('thumbnail', ['class'=>'card-img-top img-fluid', 'alt'=> 'Image of animal']);
    };
  ?>
  <div class="card-body">
    <?php if($price = get_post_meta( get_the_ID(), '_sale_price', true)): ?>
      <h5 class="float-right">$<?= $price; ?></h5>
    <?php elseif ($price = get_post_meta( get_the_ID(), '_regular_price', true)): ?>
      <h5 class="float-right">$<?= $price; ?></h5>
    <?php endif; ?>
    <h5 class="card-title"><?php the_title(); ?></h5>
    <?php if (the_content()): ?>
      <p class="card-text"><?= wp_trim_words( the_content() , '20' ); ?></p>
    <?php endif; ?>
    <a class="btn blue-btn float-right" href="<?= esc_url(get_permalink()); ?>">Read More</a>
  </div>
</div>
