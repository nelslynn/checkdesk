<section id="node-<?php print $node->nid; ?>" class="source-row-container node-<?php print $node->nid; ?> <?php print $classes; ?>"<?php print $attributes; ?>>
    <div class="item-content-wrapper<?php if (isset($status_class)) { print ' ' . $status_class; } ?>">
      <span class="item-content">
        <div class="media-holder media-inline-holder source-holder source-inline-holder<?php if (isset($media_type_class)) { print ' ' . $media_type_class; } ?>">
          <div class="media">
            <div class="inline-holder inline-img-thumb-holder inline-img-thumb-source-holder">
              <?php print l(render($content['field_image']), 'node/' . $node->nid , array('html' => TRUE)); ?>
            </div>
          </div>
          <div class="source-content">
            <span class="title"><?php print l($pender->data->title, 'node/' . $node->nid , array('html' => TRUE)); ?></span>
            <span class="username"><?php print $username_link; ?></span>
            <span class="description expandable"><?php print render($content['body']); ?></span>
          </div>
        </div> <!-- /media-holder -->
      </span> <!-- /item-content -->
    </div> <!-- /content-wrapper -->
  <?php print $source_activity; ?>
</section>