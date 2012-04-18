<?php if (!$page): ?>
  	<article id="node-<?php print $node->nid; ?>" class="node<?php if (!$status) { print ' node-unpublished'; } ?> clearfix">

<?php endif; ?>


  <div class="content">
  
  	<?php if(!empty($node->field_article_image)){
  		echo '<div id="images">';
  		foreach($node->field_article_image as $img){
  			print $img['view'];
  		}  	
  		echo '</div>';
  	}?>
  	
  	<div id="question-container">
  		<a id="question-block"></a>
  		
  		<div id="question-instruction">
    		Respond to the article above by contributing an answer to the question below.
    	</div>
  		<div id="question-copy">
    		<?php print $node->field_question_copy[0]['view']; ?>
    	</div>
    	
    	
  		<div id="disqus_thread"></div>
			<script type="text/javascript">
    		var disqus_shortname = 'disasterandrecovery'; 
    		var disqus_identifier = '<?php print $node->field_question_id[0]['view']; ?>';

    		/* * * DON'T EDIT BELOW THIS LINE * * */
    		(function() {
        		var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        		dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
        		(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    		})();
		</script>
		<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
	</div> <!-- #question-container -->

    
  </div> <!-- #content -->
	
	
	<?php 
		$current_number = $node->field_number[0]['view'];
		if($current_number >= '200'){
			$next_number = '1';
		}else{
			$next_number = $current_number + 1;
		}
		if($current_number <= '1'){
			$prev_number = '200';
		}else{
			$prev_number = $current_number - 1;
		}
		
	?>

    <footer id="content-footer">
    	<div id="score">
			<div id="score-text">
				<?php print $node->field_score[0]['view']; ?>
			</div>
		</div>
    	<div id="respond">
    		<a id="respond-text" href="#question-block">Respond</a>
    	</div>
    	<div id="nav-prev-container">
    		<a id="nav-prev-text" href="/articles/<?php print $prev_number; ?>">&lt;</a>
    	</div>
    	<div id="nav-next-container">
    		<a id="nav-next-text" href="/articles/<?php print $next_number; ?>">&gt;</a>
    	</div>
    </footer>


<?php if (!$page): ?>
  </article> <!-- /.node -->
<?php endif;?>
