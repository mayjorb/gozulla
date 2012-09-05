<?php dpm($variables); ?>
<article id="article-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div class="article-inner clearfix">

    <?php print $unpublished; ?>

    
    <?php
      hide($content['comments']);
      hide($content['links']);



      //print render($content);
    ?>
    </div>

    <div id="deal-col-1">
      <div class="shop-name">[title_1]</div>
      <div class="shop-address">[field_address]</div>
      <div class="shop-phone">[field_phone]</div>
      <div class="shop-url">[field_website]</div>
    </div>

    <div id="deal-column-2">
      <div class="deal-title">[title]</div>
      <div class="deal-description">[field_deal_description]</div>
    </div>

    <?php if ($links = render($content['links'])): ?>
      <nav<?php print $links_attributes; ?>><?php print $links; ?></nav>
    <?php endif; ?>

    <?php print render($content['comments']); ?>

  </div>
</article>