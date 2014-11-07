<!--<p class="pagination">-->
<div class="pagination pagination-centered"> 
	<ul>
	<?php if ($first_page !== FALSE): ?>
		<li class="disabled">
			<a href="<?php echo HTML::chars($page->url($first_page)) ?>" rel="first"><?php echo __('First') ?></a>
		
	<?php else: ?>
		 
			<?php echo __('First') ?>
		</li>	
	<?php endif ?>

	<?php if ($previous_page !== FALSE): ?>
		<li class="disabled">
			<a href="<?php echo HTML::chars($page->url($previous_page)) ?>" rel="prev"><?php echo __('<<') ?></a>
			
	<?php else: ?>
		
			<?php echo __('<<') ?>
		</li>		
	<?php endif ?>

	<?php for ($i = 1; $i <= $total_pages; $i++): ?>

		<?php if ($i == $current_page): ?>
			<li class="active"><strong><?php echo $i ?></strong>
		<?php else: ?>
			<a href="<?php echo HTML::chars($page->url($i)) ?>"><?php echo $i ?></a></li>
		<?php endif ?>

	<?php endfor ?>

	<?php if ($next_page !== FALSE): ?>
		<li class="disabled"><a href="<?php echo HTML::chars($page->url($next_page)) ?>" rel="next"><?php echo __('>>') ?></a>
	<?php else: ?>
		<?php echo __('>>') ?></li>
	<?php endif ?>

	<?php if ($last_page !== FALSE): ?>
		<li class="disabled"><a href="<?php echo HTML::chars($page->url($last_page)) ?>" rel="last"><?php echo __('Last') ?></a>
	<?php else: ?>
		<?php echo __('Last') ?></li>
	<?php endif ?>

<!--</p><!-- .pagination -->
	</ul>
</div> <!-- .pagination -->

<!--
<div class="pagination pagination-centered"> <!--Start pagination-->
										<!--	<ul>
												<li class="disabled"><a href="#"><<</a></li>
												<li class="active"><a href="#">1</a></li>
												<li class="disabled"><a href="#">2</a></li>
												<li class="disabled"><a href="#">3</a></li>
												<li class="disabled"><a href="#">4</a></li>
												<li class="disabled"><a href="#">5</a></li>
												<li class="disabled"><a href="#">6</a></li>
												<li class="disabled"><a href="#">>></a></li>
											</ul>
										</div><!--End pagination-->


