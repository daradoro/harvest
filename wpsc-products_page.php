<?php
global $wp_query;
$image_width = get_option('product_image_width');
/*
 * Most functions called in this page can be found in the wpsc_query.php file
 */
?>
<div id="default_products_page_container" class="container wrap wpsc_container">

<?php wpsc_output_breadcrumbs(); ?>

	<?php do_action('wpsc_top_of_products_page'); // Plugin hook for adding things to the top of the products page, like the live search ?>
	<?php if(wpsc_display_categories()): ?>
	  <?php if(wpsc_category_grid_view()) :?>
			<div class="wpsc_categories wpsc_category_grid group">
				<?php wpsc_start_category_query(array('category_group'=> get_option('wpsc_default_category'), 'show_thumbnails'=> 1)); ?>
					<a href="<?php wpsc_print_category_url();?>" class="wpsc_category_grid_item  <?php wpsc_print_category_classes_section(); ?>" title="<?php wpsc_print_category_name(); ?>">
						<?php wpsc_print_category_image(); ?>
					</a>
					<?php wpsc_print_subcategory("", ""); ?>
				<?php wpsc_end_category_query(); ?>

			</div><!--close wpsc_categories-->
	  <?php else:?>
			<ul class="wpsc_categories">

				<?php wpsc_start_category_query(array('category_group'=>get_option('wpsc_default_category'), 'show_thumbnails'=> get_option('show_category_thumbnails'))); ?>
						<li>
							<?php wpsc_print_category_image(); ?>

							<a href="<?php wpsc_print_category_url();?>" class="wpsc_category_link <?php wpsc_print_category_classes_section(); ?>" title="<?php wpsc_print_category_name(); ?>"><?php wpsc_print_category_name(); ?></a>
							<?php if(wpsc_show_category_description()) :?>
								<?php wpsc_print_category_description("<div class='wpsc_subcategory'>", "</div>"); ?>
							<?php endif;?>

							<?php wpsc_print_subcategory("<ul>", "</ul>"); ?>
						</li>
				<?php wpsc_end_category_query(); ?>
			</ul>
		<?php endif; ?>
	<?php endif; ?>
<?php // */ ?>

	<?php if(wpsc_display_products()): ?>

		<?php if(wpsc_is_in_category()) : ?>
			<div class="wpsc_category_details">
				<?php if(wpsc_show_category_thumbnails()) : ?>
					<img src="<?php echo wpsc_category_image(); ?>" alt="<?php echo wpsc_category_name(); ?>" />
				<?php endif; ?>

				<?php if(wpsc_show_category_description() &&  wpsc_category_description()) : ?>
					<?php echo wpsc_category_description(); ?>
				<?php endif; ?>
			</div><!--close wpsc_category_details-->
		<?php endif; ?>
		<?php if(wpsc_has_pages_top()) : ?>
			<div class="wpsc_page_numbers_top">
				<?php wpsc_pagination(); ?>
			</div><!--close w psc_page_numbers_top-->
		<?php endif; ?>

		<div class="container button-group buttonsProductContainer">
				<?php while (wpsc_have_products()) :  wpsc_the_product(); ?>
					<button type="button" class="btn"><?php echo wpsc_the_product_title(); ?></button>
	 			<?php endwhile; ?>
		</div>
 		
		<div class="row wpsc_default_product_list">
		<?php /** start the product loop here */?>
		<?php while (wpsc_have_products()) :  wpsc_the_product(); ?>
		<div class="container productContainer">
			<div class="col-lg-6 default_product_display product_view_<?php echo wpsc_the_product_id(); ?> <?php echo wpsc_category_class(); ?> group">
				<!-- <h2 class="prodtitle entry-title">
							<?php if(get_option('hide_name_link') == 1) : ?>
								<?php echo wpsc_the_product_title(); ?>
							<?php else: ?>
								<a class="wpsc_product_title" href="<?php echo esc_url( wpsc_the_product_permalink() ); ?>"><?php echo wpsc_the_product_title(); ?></a>
							<?php endif; ?>
						</h2> -->
				
					<div class="productcol" >
						<?php
							do_action('wpsc_product_before_description', wpsc_the_product_id(), $wp_query->post);
							do_action('wpsc_product_addons', wpsc_the_product_id());
						?>
						<div class="wpsc_description">
							<?php echo wpsc_the_product_description(); ?>
                        </div><!--close wpsc_description-->
							<?php if(wpsc_product_external_link(wpsc_the_product_id()) != '') : ?>
								<?php $action =  wpsc_product_external_link(wpsc_the_product_id()); ?>
							<?php else: ?>
							<?php $action = wpsc_this_page_url(); ?>
							<?php endif; ?>
						</div>
					</div>
					<div class="col-lg-6 latoFont productDescriptionContainer">

							<?php if(wpsc_the_product_additional_description()) : ?>
								<div class="additional_description_container">
										<img class="additional_description_button"  src="<?php echo WPSC_CORE_THEME_URL; ?>wpsc-images/icon_window_expand.gif" alt="<?php esc_html_e( 'Additional Description', 'wp-e-commerce' ); ?>" /><a href="<?php echo esc_url( wpsc_the_product_permalink() ); ?>" class="additional_description_link"><?php esc_html_e('More Details', 'wp-e-commerce'); ?>
									</a>
									<div class="additional_description">
										<p><?php echo wpsc_the_product_additional_description(); ?></p>
									</div><!--close additional_description-->
								</div><!--close additional_description_container-->
								<?php endif; ?>

								 <?php if (wpsc_have_custom_meta()) : ?>
									<div class="custom_meta">
										<?php while ( wpsc_have_custom_meta() ) : wpsc_the_custom_meta(); ?>
											<strong><?php echo wpsc_custom_meta_name(); ?>: </strong><?php echo wpsc_custom_meta_value(); ?><br />
										<?php endwhile; ?>
									</div><!--close custom_meta-->
								<?php endif; ?>

								<form class="product_form"  enctype="multipart/form-data" action="<?php echo esc_url( $action ); ?>" method="post" name="product_<?php echo wpsc_the_product_id(); ?>" id="product_<?php echo wpsc_the_product_id(); ?>" >
								<?php do_action ( 'wpsc_product_form_fields_begin' ); ?>
								<?php /** the variation group HTML and loop */?>
		                        <?php if (wpsc_have_variation_groups()) { ?>
		                         <fieldset>
		                         <legend>
		                        	
		                            <?php _e('Product Options', 'wp-e-commerce'); ?>
		                         	
		                         </legend>
								<div class="wpsc_variation_forms">
		                        	<table>
									<?php while (wpsc_have_variation_groups()) : wpsc_the_variation_group(); ?>
										<tr><td class="col1"><label for="<?php echo wpsc_vargrp_form_id(); ?>"><?php echo wpsc_the_vargrp_name(); ?>:</label></td>
										<?php /** the variation HTML and loop */?>
										<td class="col2"><select class="wpsc_select_variation" name="variation[<?php echo wpsc_vargrp_id(); ?>]" id="<?php echo wpsc_vargrp_form_id(); ?>">
										<?php while (wpsc_have_variations()) : wpsc_the_variation(); ?>
											<option value="<?php echo wpsc_the_variation_id(); ?>" <?php echo wpsc_the_variation_out_of_stock(); ?>><?php echo wpsc_the_variation_name(); ?></option>
										<?php endwhile; ?>
										</select></td></tr>
									<?php endwhile; ?>
		                            </table>
		   							<div id="variation_display_<?php echo wpsc_the_product_id(); ?>" class="is_variation"><?php _e('Combination of product variants is not available', 'wp-e-commerce'); ?></div>
								</div><!--close wpsc_variation_forms-->
		                        </fieldset>
								<?php } ?>
								<?php /** the variation group HTML and loop ends here */?>

								<div class="wpsc_product_price">
										<?php if( wpsc_show_stock_availability() ): ?>
											<?php if(wpsc_product_has_stock()) : ?>
												<div id="stock_display_<?php echo wpsc_the_product_id(); ?>" class="in_stock"><?php _e('Product in stock', 'wp-e-commerce'); ?></div>
											<?php else: ?>
												<div id="stock_display_<?php echo wpsc_the_product_id(); ?>" class="out_of_stock"><?php _e('Product not in stock', 'wp-e-commerce'); ?></div>
											<?php endif; ?>
										<?php endif; ?>
										<?php if(wpsc_product_is_donation()) : ?>
											<label for="donation_price_<?php echo wpsc_the_product_id(); ?>"><?php _e('Donation', 'wp-e-commerce'); ?>: </label>
											<input type="text" id="donation_price_<?php echo wpsc_the_product_id(); ?>" name="donation_price" value="<?php echo wpsc_calculate_price(wpsc_the_product_id()); ?>" size="6" />

										<?php else : ?>
											<?php wpsc_the_product_price_display(); ?>

											<!-- multi currency code -->
											<?php if(wpsc_product_has_multicurrency()) : ?>
			                                	<?php echo wpsc_display_product_multicurrency(); ?>
		                                    <?php endif; ?>

											<?php if(wpsc_show_pnp()) : ?>
												<p class="pricedisplay"><?php _e('Shipping:', 'wp-e-commerce'); ?> <span class="pp_price"><?php echo wpsc_product_postage_and_packaging(); ?></span></p>
											<?php endif; ?>
										<?php endif; ?>
									</div><!--close wpsc_product_price-->

									<!-- THIS IS THE QUANTITY OPTION MUST BE ENABLED FROM ADMIN SETTINGS -->
									<?php if(wpsc_has_multi_adding()): ?>
		                            	<!-- <fieldset><legend><?php _e('Quantity', 'wp-e-commerce'); ?></legend> -->
										<div class="wpsc_quantity_update">
		                            
									<!-- 	<input type="text" id="wpsc_quantity_update_<?php echo wpsc_the_product_id(); ?>" name="wpsc_quantity_update" size="2" value="1" />  -->
										<!-- <div class="input-group">
									          <span class="input-group-btn">
									              <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
									                  <span class="glyphicon glyphicon-minus"></span>
									              </button>
									          </span>
									          <input type="text" id="wpsc_quantity_update_<?php echo wpsc_the_product_id(); ?>" name="wpsc_quantity_update" value="1" min="1" max="50">
									          <span class="input-group-btn">
									              <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
									                  <span class="glyphicon glyphicon-plus"></span>
									              </button>
									          </span>
									      </div>
 -->
									      <div class="input-group updaterContainer">
											    <span class="input-group-btn">
											        <button type="button" class="btn updateBtn btn-number" data-type="minus" data-field="num"><span class="glyphicon glyphicon-minus"></span></button>
											    </span>
											    <input type="text" class="updateIn" id="wpsc_quantity_update_<?php echo wpsc_the_product_id(); ?>" name="wpsc_quantity_update" value="1" min="1" max="50">
											    <span class="input-group-btn">
											        <button type="button" class="btn updateBtn btn-number" data-type="plus" data-field="num"><span class="glyphicon glyphicon-plus"></span></button>
											    </span>
											</div>
																														
										<input type="hidden" name="key" value="<?php echo wpsc_the_cart_item_key(); ?>"/>
										<input type="hidden" name="wpsc_update_quantity" value="true" />
										<input type='hidden' name='wpsc_ajax_action' value='wpsc_update_quantity' />
		                                </div><!--close wpsc_quantity_update-->
		                                </fieldset>
									<?php endif ;?>

									<input type="hidden" value="add_to_cart" name="wpsc_ajax_action"/>
									<input type="hidden" value="<?php echo wpsc_the_product_id(); ?>" name="product_id"/>

									

								<?php if((get_option('hide_addtocart_button') == 0) && (get_option('addtocart_or_buynow')=='1')) : ?>
									<?php echo wpsc_buy_now_button(wpsc_the_product_id()); ?>
								<?php endif ; ?>

								<?php echo wpsc_product_rater(); ?>


							<?php // */ ?>
							<!-- END OF QUANTITY OPTION -->
									<?php if((get_option('hide_addtocart_button') == 0) &&  (get_option('addtocart_or_buynow') !='1')) : ?>
										<?php if(wpsc_product_has_stock()) : ?>
											<div class="wpsc_buy_button_container">
												<div class="wpsc_loading_animation">
													<img title="" alt="<?php esc_attr_e( 'Loading', 'wp-e-commerce' ); ?>" src="<?php echo wpsc_loading_animation_url(); ?>" />
													<?php _e('Updating cart...', 'wp-e-commerce'); ?>
												</div><!--close wpsc_loading_animation-->
													<?php if(wpsc_product_external_link(wpsc_the_product_id()) != '') : ?>
													<?php $action = wpsc_product_external_link( wpsc_the_product_id() ); ?>
													
													<input class="wpsc_buy_button" type="submit" value="<?php echo wpsc_product_external_link_text( wpsc_the_product_id(), __( 'Buy Now', 'wp-e-commerce' ) ); ?>" onclick="return gotoexternallink('<?php echo esc_url( $action ); ?>', '<?php echo wpsc_product_external_link_target( wpsc_the_product_id() ); ?>')">
												
													<?php else: ?>
												<input type="submit" value="<?php _e('ADD TO CART', 'wp-e-commerce'); ?>" name="Buy" class="wpsc_buy_button" id="product_<?php echo wpsc_the_product_id(); ?>_submit_button"/>
													<?php endif; ?>
											</div><!--close wpsc_buy_button_container-->
										<?php endif ; ?>
									<?php endif ; ?>
									<div class="entry-utility wpsc_product_utility">
										<?php edit_post_link( __( 'Edit', 'wp-e-commerce' ), '<span class="edit-link">', '</span>' ); ?>
									</div>
									<?php do_action ( 'wpsc_product_form_fields_end' ); ?>
								</form><!--close product_form-->
					<?php if(wpsc_product_on_special()) : ?><span class="sale"><?php _e('Sale', 'wp-e-commerce'); ?></span><?php endif; ?>
				</div><!--close default_product_display-->
			</div>

		<?php endwhile; ?>
		<?php /** end the product loop here */?>
		</div>
		<?php if(wpsc_product_count() == 0):?>
			<h3><?php  _e('There are no products in this group.', 'wp-e-commerce'); ?></h3>
		<?php endif ; ?>
	    <?php do_action( 'wpsc_theme_footer' ); ?>

		<?php if(wpsc_has_pages_bottom()) : ?>
			<div class="wpsc_page_numbers_bottom">
				<?php wpsc_pagination(); ?>
			</div><!--close wpsc_page_numbers_bottom-->
		<?php endif; ?>
	<?php endif; ?>
</div><!--close default_products_page_container-->
<script type="text/javascript">
	$(document).ready(function(){

		$('.size-medium').css({"width":"100%","height":"100%"});
		$('.aligncenter').css('width','100%');
			
			$('.wpsc_default_product_list').children().hide();
			
			$('.buttonsProductContainer > .btn').bind("click", function(){
					
					var i = $(this).index();
					$('.wpsc_default_product_list').children().hide();
					$('.wpsc_default_product_list').children().eq(i).toggle();

			});

	
			   
			    
			         $("[data-type='minus']").click(function(){

			         	var input = $("[name='wpsc_quantity_update']");
			   			 var currentVal = parseInt(input.val());

				         	if(currentVal - 1 === -1){

				         	}else{
				         		input.val(currentVal - 1);
				         	}
			         	
			    	});
			           
			     	 $("[data-type='plus']").click(function(){
			     	 	var input = $("[name='wpsc_quantity_update']");
			    		var currentVal = parseInt(input.val());
			    		 input.val(currentVal + 1);
			    	});
			});

</script>
