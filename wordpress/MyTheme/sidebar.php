 
			<div id="sidebar">
				<ul>
					<?php if (function_exists('dinamic_sidebar') && dynamic_sidebar()):else:?>
						
						<li id="search">
							<h2>Поиск</h2>
							<ul>
								<?php get_search_form(); ?>
							</ul>
						</li>
						<li>
							<h2>Рубрики</h2>
							<ul>
								<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
							</ul>
						</li>	
					    <li>
							<h2>Архив</h2>
							<ul>
								<?php wp_get_archives('type=monthly'); ?>
							</ul>
						</li>	
						<li>
							<h2>Последние записи</h2>
							<ul>
								<?php wp_get_archives('type=postbypost&limit=10'); ?>
							</ul>
						</li>	
						
						
					<?php endif; ?>	
				</ul>
			</div> <!-- end div#sidebar -->
			
			<div style="clear: both; height: 1px"></div>
		</div>
	</div>
	<!-- end div#page -->
</div>
<!-- end div#wrapper -->
