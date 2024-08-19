<?php
function lionthemes_categoriesgird_shortcode( $atts ) {
	
	$atts = shortcode_atts( array(
							'title'=> '',
							'short_desc' => '',
							'categories' => '',
							'showon_effect'=> '',
							'el_class' => '',
							'style'=>'grid3',
							), $atts, 'categoriesgird' ); 
	extract($atts);
	if($categories=='') return;
	$categories = array_filter(explode(',', $categories));
	if(empty($categories)) return;
	if($style == 'grid7'){
		$categories = get_terms(array(
			'taxonomy' => 'product_cat',
			'hide_empty' => false,
			'orderby' => 'id',
			'order' => 'ASC',
			'slug' => $categories
		));
	}
	else{
		$categories = get_terms(array(
			'taxonomy' => 'product_cat',
			'hide_empty' => false,
			'slug' => $categories
		));
	}
	$list_class3 = ($style == 'grid3') ? ' col-sm-4 ': '';
	$list_class4 = ($style == 'grid4') ? ' col-sm-3 ': '';
	$list_class5 = '';
	$list_class7 = '';
	if($style == 'grid7'){
		$list_item = '7';
	}
	if($style == 'grid5'){
		$list_item = '5';
	}
	if($style == 'grid4'){
		$list_item = '4';
	}
	if($style == 'grid3'){
		$list_item = '3';
	}
	
	ob_start(); ?>
	<?php if($style == 'grid7'){ ?>
	<div class="categories-list-widget <?php echo esc_attr($el_class); ?>">
		<?php if($title){ ?>
		<h3 class="vc_widget_title vc_categories_title"><span><?php echo esc_html($title) ?></span></h3>
		<?php } ?>
		<?php if($short_desc){ ?>
		<div class="short_desc"><?php echo nl2br($short_desc) ?></div>
		<?php } ?>
		<div class="categorygird-list-2col-top">
			<?php $i=0; foreach($categories as $key=>$category):if($i++ == 3) break;$col = $i;  ?>
				<?php if($col ==1){ ?>
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-8">
				<?php } ?>
				<?php if($col == 2){ ?>
						<div class="col-sm-4">
				<?php } ?>
				<div class="category-item-2col<?php echo ' fixed-square-image-'.$col;?>">
					<?php  $image = get_term_meta($category->term_id, '_square_image'); ?>
					<div class="cont-item-fixed">
						<a href="<?php echo get_term_link( $category->term_id, $category->taxonomy ); ?>">
							<img src="<?php echo esc_url($image[0]) ?>" alt="" />
							<span class="cat-name">
								<h3><?php echo $category->name; ?></h3>
								<span><?php echo sprintf( _n( '(%s Item)', '(%s Items)', $category->count, 'flextop' ), $category->count ) ?></span>
							</span>
						</a>
					</div>
				</div>
				<?php if($col == 1){ ?>
						</div>
				<?php } ?>
				<?php if($col ==3){ ?>
							</div>
						</div>
					</div>
				<?php } ?>
			<?php endforeach  ?>
			<div class="clr"></div>
		</div>
		<div class="categorygird-list-2col-bottom">
			<?php $i=0; foreach($categories as $key=>$category): $i++; if($i <= 3)continue; if($i > $list_item) break;$col = $i;  ?>
				<?php if($col == 4){ ?>
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-8">
				<?php } ?>
				<?php if($col == 7){ ?>
						<div class="col-sm-4">
				<?php } ?>
				<?php if($col == 4){ ?>
						<div class="row">
							<div class="col-sm-6">
				<?php } ?>
				<?php if($col == 5){ ?>
						<div class="col-sm-6">
				<?php } ?>
				<?php if($col == 6){ ?>
						<div class="col-sm-12">
				<?php } ?>
				<div class="category-item-2col<?php echo ' fixed-square-image-'.$col;?>">
					<?php  $image = get_term_meta($category->term_id, '_square_image'); ?>
					<div class="cont-item-fixed">
						<a href="<?php echo get_term_link( $category->term_id, $category->taxonomy ); ?>">
							<img src="<?php echo esc_url($image[0]) ?>" alt="" />
							<span class="cat-name">
								<h3><?php echo $category->name; ?></h3>
								<span><?php echo sprintf( _n( '(%s Item)', '(%s Items)', $category->count, 'flextop' ), $category->count ) ?></span>
							</span>
						</a>
					</div>
				</div>
				<?php if($col == 4){ ?>
						</div>
				<?php } ?>
				<?php if($col == 5){ ?>
						</div>
				<?php } ?>
				<?php if($col == 7){ ?>
						</div>
				<?php } ?>
				<?php if($col == 6){ ?>
						</div>
						</div>
						</div>
				<?php } ?>
				<?php if($col ==7){ ?>
						</div>
					</div>
				<?php } ?>
			<?php endforeach  ?>
			<div class="clr"></div>
		</div>
	</div>
	<?php }else{ ?>
	<div class="categories-list-widget <?php echo esc_attr($el_class); ?>">
		<?php if($title){ ?>
		<h3 class="vc_widget_title vc_categories_title"><span><?php echo esc_html($title) ?></span></h3>
		<?php } ?>
		<?php if($short_desc){ ?>
		<div class="short_desc"><?php echo nl2br($short_desc) ?></div>
		<?php } ?>
		<div class="category-list categorygird-list">
			<?php $i=0; foreach($categories as $key=>$category):if($i++ == $list_item) break;$col = $i;  ?>
			<?php if($style == 'grid5'){ if($col == 1){ $list_class5 = 'col-sm-4'; }elseif($col == 2){ $list_class5 = 'col-sm-4'; }elseif($col == 3){ $list_class5 = 'col-sm-4'; }	elseif($col == 4){ $list_class5 = 'col-sm-8'; }elseif($col == 5){ $list_class5 = 'col-sm-4'; }}?>
			<?php if($style == 'grid7'){ if($col == 1){ $list_class7 = 'col-sm-8'; }elseif($col == 2){ $list_class7 = 'col-sm-4'; }elseif($col == 3){ $list_class7 = 'col-sm-4'; }	elseif($col == 4){ $list_class7 = 'col-sm-4'; }elseif($col == 5){ $list_class7 = 'col-sm-4'; }elseif($col == 6){ $list_class7 = 'col-sm-8'; }elseif($col == 7){ $list_class7 = 'col-sm-4'; }}?>
			<div class="category-item <?php if($style == 'grid3') echo $list_class3; ?><?php if($style == 'grid4') echo $list_class4; ?><?php if($style == 'grid5') echo $list_class5; ?><?php if($style == 'grid7') echo $list_class7; ?>">
				<?php  $image = get_term_meta($category->term_id, '_square_image'); ?>
				<a href="<?php echo get_term_link( $category->term_id, $category->taxonomy ); ?>" style="background-image:url(<?php echo esc_url($image[0]) ?>)">
					<div class="cat-name">
						<h3><?php echo $category->name; ?></h3>
						<span><?php echo sprintf( _n( '(%s Item)', '(%s Items)', $category->count, 'flextop' ), $category->count ) ?></span>
					</div>
				</a>
			</div>
				
			<?php endforeach  ?>
		</div>
	</div>
	<?php } ?>
	<?php 
	$content = ob_get_contents();
	ob_end_clean();
	return $content;
} 
add_shortcode( 'categoriesgird', 'lionthemes_categoriesgird_shortcode' );
?>