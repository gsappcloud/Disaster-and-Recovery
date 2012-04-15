<?php if (!$page): ?>
  	<article id="node-<?php print $node->nid; ?>" class="node<?php if (!$status) { print ' node-unpublished'; } ?> clearfix">

<?php endif; ?>


  <div class="content">
  	<iframe src="<?php print $node->field_url[0]['view']; ?>">Your browser doesn't support iFrames, you will not be able to comment. Click <a href="<?php print $node->field_url[0]['view']; ?>" target="_blank">here</a> to go directly to the related article. </iframe>

    <?php //print $content ?>
  </div>


    <footer>
      
    </footer>


<?php if (!$page): ?>
  </article> <!-- /.node -->
<?php endif;?>
