<div class="entry-content clear">
	<div class="agi-outer">
		<div class="agi-inner">
			<code class="<?php the_sub_field('code_class'); ?>">
	<pre>
	<?php
	$sub_field = get_sub_field_object('code');
	echo htmlspecialchars($sub_field['value']);
	?>
	</pre>
			</code>
		</div>
	</div>	
</div>