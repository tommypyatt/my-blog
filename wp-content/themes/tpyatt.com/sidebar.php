<aside>

    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
    
        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->

    	<div class="widget">
			<h3>Sidebar Widget</h3>
			<ul>
				<li>Item 1</li>
				<li>Item 2</li>
				<li><a href="#">Item Link</a></li>
			</ul>
		</div>
		<div class="widget">
			<h3>Sidebar Widget Vengance</h3>
			<ul>
				<li>Item 1</li>
				<li>Item 2</li>
				<li><a href="#">Item Link</a></li>
			</ul>
		</div>
	
	<?php endif; ?>

</aside>