

  <!-- ______________________ HEADER _______________________ -->
<header id="header">
  <?php if ($secondary_nav): ?>
    <?php print $secondary_nav; ?>
  <?php endif; ?>
  
  <?php if ($page['navigation']) : ?>
    <?php print render($page['navigation']); ?>
  <?php endif; ?>
</header>

  <!-- ______________________ MAIN _______________________ -->

<div id="main" class="clearfix">


  <?php if ($page['sidebar_first']): ?>
    <div id="sidebar-first" class="column sidebar first">
      <div id="sidebar-first-inner" class="inner">
        <?php print render($page['sidebar_first']); ?>
      </div>
    </div>
  <?php endif; ?>
  
  <?php if ($page['widgets'] && checkdesk_widgets_visibility()): ?>
    <aside id="widgets" class="column widgets">
      <div id="widgets-inner" class="inner">
        <?php print render($page['widgets']); ?>
      </div>
     </aside>
  <?php endif; ?> 


  <div id="content">
    <div id="content-inner" class="inner column center">
      <?php if ($page['header']): ?>
        <div id="header-region">
          <?php print render($page['header']); ?>
        </div>
      <?php endif; ?>

      <?php if ($title|| $messages || $tabs || $action_links): ?>
        <div id="content-header">

          <?php if ($title && (user_access('administer nodes'))): ?>
            <h1 class="title"><?php print $title; ?></h1>
          <?php endif; ?>

          <?php print render($title_suffix); ?>
          <div id="messages-container">
            <?php print $messages; ?>
          </div>
          <?php print render($page['help']); ?>

          <?php if ($tabs): ?>
            <div class="tabs"><?php print render($tabs); ?></div>
          <?php endif; ?>

          <?php if ($action_links): ?>
            <ul class="action-links"><?php print render($action_links); ?></ul>
          <?php endif; ?>
          
        </div> <!-- /#content-header -->
      <?php endif; ?>

      <div id="content-area">
        <?php print render($page['content']); ?>
      </div>

      <?php // print $feed_icons; ?>

    </div>
  </div> <!-- /content-inner /content -->


  

  <?php if ($page['sidebar_second']): ?>
    <div id="sidebar-second" class="column sidebar second">
      <div id="sidebar-second-inner" class="inner">
        <?php print render($page['sidebar_second']); ?>
      </div>
    </div>
  <?php endif; ?> <!-- /sidebar-second -->

  <!-- ______________________ FOOTER _______________________ -->

  <?php if (checkdesk_footer_visibility()) : ?>        
  <?php if ($information_nav || $footer_nav): ?>
    <div id="footer">
      <div id="footer-inner" class="inner">
        <?php if($page['footer']): ?>
          <?php print render($page['footer']); ?>
        <?php endif; ?>
        <?php //if ($footer_nav): ?>
          <?php //print $footer_nav; ?>
        <?php //endif; ?>
        <?php if ($information_nav): ?>
          <?php print $information_nav; ?>
        <?php endif; ?>
      </div>
    </div> <!-- /footer -->
  <?php endif; ?>
  <?php endif; ?>




</div> <!-- /main -->
