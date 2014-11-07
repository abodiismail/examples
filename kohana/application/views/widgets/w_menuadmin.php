<!--Меню администрирования в админке-->
            		
<div class="navbar navbar-static-top">                         
	<div class="navbar-inner">                                   
		<div class="container" >   
			<ul class="nav">			
				<?foreach ($menu as $name => $menu):?>					
			<!--	<li> -->
						<?if(in_array($select, $menu)):?>
							<li class="active"><?=HTML::anchor('admin/'. $menu[0], $name)?></li>
						<?else:?>
							<li><?=HTML::anchor('admin/'. $menu[0], $name)?></li>
						<?endif?>
				<!--</li>-->
				<?endforeach?>	
			</ul>
		</div>
	</div>
</div>
					