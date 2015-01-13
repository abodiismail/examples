
<!-- Сайтбар -->

<aside id="sidebar">

		<div class="widget">

			<h6 class="widget-title">Категории</h6>

			<ul class="categories ">
			
				<li><a href="<?=base_url()."posts";?>">Все категории</a></li>
			<?php foreach ($all_categories as $cat):?> 
			    <li><a href="<?=base_url()."posts/category/".$cat['category_title'];?>"><?=$cat['name'];?></a></li>
			<?php endforeach;?>	
			  
				
			</ul>

		</div><!-- end .widget -->
		
	</aside><!-- end #sidebar -->
	

