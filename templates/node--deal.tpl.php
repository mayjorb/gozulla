



<article id="article-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  

  <div class="at-panel gpanel panel-display two-50 clearfix">
        
    <div class="region region-two-50-top region-conditional-stack"> 
      <div class="region-inner clearfix"> 
        <form id="send-to-printer">
          <?php if ($page): ?>
            <input type="button" value="print deal" onClick="self.print()" />
          <?php elseif (!$page): ?>
            <input type="button" value="printer-friendly version" onClick='location.href="/node/<?php print $node->nid; ?>"' />
          <?php endif; ?>
        </form>
        
      </div><!-- /region-inner -->
    </div><!-- /region-two-50-top -->  
                           
    <div class="region region-two-50-first">
      <div class="region-inner clearfix">
        <div class="shop-detail"><?php print render($content['deal_location_data_eva_location_deal']['#markup']); ?></div>
      </div><!-- /region-inner -->
    </div><!-- region-two-50-first -->  
                            
    <div class="region region-two-50-second">
      <div class="region-inner clearfix"> 
        <div class="deal-title"><?php print render($node->title); ?></div>
      <div class="deal-description"><?php print render($node->field_description['und'][0]['safe_value']); ?></div>
      </div><!-- /region-inner -->
    </div><!-- region-two-50-second -->  
        
    <div class="region region-two-50-bottom region-conditional-stack"> 
      <div class="region-inner clearfix"> 
        <div class="deal-expire">Deal valid: <?php print render($content['field_deal_expiration_date'][0]['#markup']); ?></div>
      </div><!-- /region-inner -->
    </div><!-- /region-two-50-bottom -->                    
            
  </div><!-- /two-50 -->

</article>



