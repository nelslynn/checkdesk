<div class="activity">
  <?php foreach ($rows as $id => $row): ?>
  	<div class="activity-item <?php print $classes_array[$id]; ?>">
    	<?php print $row; ?>
	</div>
  <?php endforeach; ?>
</div>