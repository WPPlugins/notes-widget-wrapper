<div class="notes-widget-wrapper-admin-container">
	<h3><?php _e('Notes Widget Wrapper', 'notes-widget-wrapper'); ?></h3>

	<p id="use-notes-widget-wrapper-toggle-container" >
		<input id="<?php echo $t->get_field_id('nww_use_notes_widget_style'); ?>" 
			name="<?php echo $t->get_field_name('nww_use_notes_widget_style'); ?>" 
			type="checkbox"
			value="checked" 
			<?php if(isset($instance['nww_use_notes_widget_style']) && $instance['nww_use_notes_widget_style'] != null) { echo ' checked '; } ?> />
		<label for="<?php echo $t->get_field_id('nww_use_notes_widget_style'); ?>"><?php _e('Apply Notes Widget Style', 'notes-widget-wrapper'); ?></label>
	</p>

	<div id="notes-widget-wrapper-controls" >
		<div class="inner <?php echo isset($instance['nww_use_notes_widget_style']) ? 'notes-widget-wrapper-active' : '' ?>">
			<p>
				<label for="<?php echo $t->get_field_id('nww_thumb_tack_colour'); ?>" class="notes-widget-wrapper-wrapper-set-label-width" > <?php _e('Thumb Tack Color', 'notes-widget-wrapper'); ?>:</label>
				<select id="<?php echo $t->get_field_id('nww_thumb_tack_colour'); ?>" name="<?php echo $t->get_field_name('nww_thumb_tack_colour'); ?>">
					
					<?php
						$thumb_tack_colours = array('red', 'blue', 'green', 'gray', 'orange', 'pink', 'teal', 'yellow');
						
						foreach ($thumb_tack_colours as &$thumb_tack_colour) {
							?>
							<option <?php selected($instance['nww_thumb_tack_colour'], $thumb_tack_colour); ?> value="<?php echo $thumb_tack_colour ?>"><?php echo $thumb_tack_colour ?></option>
							<?php
						}
					?>

				</select>
			</p>

			<p>
				<label for="<?php echo $t->get_field_id('nww_background_colour'); ?>" class="notes-widget-wrapper-wrapper-set-label-width" > <?php _e('Background Color', 'notes-widget-wrapper'); ?>:</label>
				<select id="<?php echo $t->get_field_id('nww_background_colour'); ?>" name="<?php echo $t->get_field_name('nww_background_colour'); ?>">
					
					<?php
						$background_colours = array('yellow', 'blue', 'green', 'pink', 'orange', 'white', 'dark-grey', 'light-grey');
						foreach ($background_colours as &$background_colour) {
							?>
							<option <?php selected($instance['nww_background_colour'], $background_colour);?> value="<?php echo $background_colour ?>"><?php echo $background_colour ?></option>
							<?php
						}
					?>

				</select>
			</p>

			<p>
				<label for="<?php echo $t->get_field_id('nww_text_colour'); ?>" class="notes-widget-wrapper-wrapper-set-label-width" > <?php _e('Text Color', 'notes-widget-wrapper'); ?>:</label>
				<select id="<?php echo $t->get_field_id('nww_text_colour'); ?>" name="<?php echo $t->get_field_name('nww_text_colour'); ?>">
					
					<?php
						$text_colours = array('red', 'blue', 'black', 'pink', 'white', 'dark-grey', 'light-grey');
						
						foreach ($text_colours as &$text_colour) {
							?>
							<option <?php selected($instance['nww_text_colour'], $text_colour); ?> value="<?php echo $text_colour ?>"><?php echo $text_colour ?></option>
							<?php
						}
					?>

				</select>
			</p>
			<p >
				<label for="<?php echo $t->get_field_id('nww_force_uppercase_letters'); ?>"><?php _e('Force Uppercase Letters', 'notes-widget-wrapper'); ?></label>  

				<input id="<?php echo $t->get_field_id('nww_force_uppercase_letters'); ?>" 
					name="<?php echo $t->get_field_name('nww_force_uppercase_letters'); ?>" 
					type="checkbox"
					value="checked" 
					<?php if(isset($instance['nww_force_uppercase_letters']) && $instance['nww_force_uppercase_letters'] != null) { echo ' checked '; } ?> />
				
			</p>
			<p>
				<label for="<?php echo $t->get_field_id('nww_font_size'); ?>" class="notes-widget-wrapper-wrapper-set-label-width" > <?php _e('Font Size', 'notes-widget-wrapper'); ?>:</label>
				<select id="<?php echo $t->get_field_id('nww_font_size'); ?>" name="<?php echo $t->get_field_name('nww_font_size'); ?>">
						
					<option value="minus-50"  <?php selected($instance['nww_font_size'], 'minus-50'); ?> > <?php _e('50% smaller', 'notes-widget-wrapper' ) ?> </option>
					<option value="minus-45"  <?php selected($instance['nww_font_size'], 'minus-45'); ?> > <?php _e('45% smaller', 'notes-widget-wrapper' ) ?> </option>
					<option value="minus-40"  <?php selected($instance['nww_font_size'], 'minus-40'); ?> > <?php _e('40% smaller', 'notes-widget-wrapper' ) ?> </option>
					<option value="minus-35"  <?php selected($instance['nww_font_size'], 'minus-35'); ?> > <?php _e('35% smaller', 'notes-widget-wrapper' ) ?> </option>
					<option value="minus-30"  <?php selected($instance['nww_font_size'], 'minus-30'); ?> > <?php _e('30% smaller', 'notes-widget-wrapper' ) ?> </option>
					<option value="minus-25"  <?php selected($instance['nww_font_size'], 'minus-25'); ?> > <?php _e('25% smaller', 'notes-widget-wrapper' ) ?> </option>
					<option value="minus-20"  <?php selected($instance['nww_font_size'], 'minus-20'); ?> > <?php _e('20% smaller', 'notes-widget-wrapper' ) ?> </option>
					<option value="minus-15"  <?php selected($instance['nww_font_size'], 'minus-15'); ?> > <?php _e('15% smaller', 'notes-widget-wrapper' ) ?> </option>
					<option value="minus-10"  <?php selected($instance['nww_font_size'], 'minus-10'); ?> > <?php _e('10% smaller', 'notes-widget-wrapper' ) ?> </option>
					<option value="minus-5"   <?php selected($instance['nww_font_size'], 'minus-5'); ?> >  <?php _e('5% smaller', 'notes-widget-wrapper' ) ?>  </option>
					
					<option value="normal"    <?php selected($instance['nww_font_size'], 'normal'); ?> >   <?php _e('Normal', 'notes-widget-wrapper' ) ?></option>
					
					<option value="plus-5"    <?php selected($instance['nww_font_size'], 'plus-5'); ?> >   <?php _e('5% larger', 'notes-widget-wrapper' ) ?>  </option>
					<option value="plus-10"   <?php selected($instance['nww_font_size'], 'plus-10'); ?> >  <?php _e('10% larger', 'notes-widget-wrapper' ) ?> </option>
					<option value="plus-15"   <?php selected($instance['nww_font_size'], 'plus-15'); ?> >  <?php _e('15% larger', 'notes-widget-wrapper' ) ?> </option>
					<option value="plus-20"   <?php selected($instance['nww_font_size'], 'plus-20'); ?> >  <?php _e('20% larger', 'notes-widget-wrapper' ) ?> </option>
					<option value="plus-25"   <?php selected($instance['nww_font_size'], 'plus-25'); ?> >  <?php _e('25% larger', 'notes-widget-wrapper' ) ?> </option>
					<option value="plus-30"   <?php selected($instance['nww_font_size'], 'plus-30'); ?> >  <?php _e('30% larger', 'notes-widget-wrapper' ) ?> </option>
					<option value="plus-35"   <?php selected($instance['nww_font_size'], 'plus-35'); ?> >  <?php _e('35% larger', 'notes-widget-wrapper' ) ?> </option>
					<option value="plus-40"   <?php selected($instance['nww_font_size'], 'plus-40'); ?> >  <?php _e('40% larger', 'notes-widget-wrapper' ) ?> </option>
					<option value="plus-45"   <?php selected($instance['nww_font_size'], 'plus-45'); ?> >  <?php _e('45% larger', 'notes-widget-wrapper' ) ?> </option>
					<option value="plus-50"   <?php selected($instance['nww_font_size'], 'plus-50'); ?> >  <?php _e('50% larger', 'notes-widget-wrapper' ) ?> </option>
						
				</select>
			</p>

			<section >
				<p>
					<?php _e('Font Style', 'notes-widget-wrapper'); ?>
				</p>
					
				<div class="font-style-selection-container" >
				<?php

					$font_mapping = array(
						'kalam'                   => 'Kalam',
						'dancing-script'          => 'Dancing Script',
						'kaushan-script'          => 'Kaushan Script',
						'gloria-hallelujah'       => 'Gloria Hallelujah',
						'covered-by-your-grace'   => 'Covered By Your Grace',
						'courgette'               => 'Courgette',
						'coming-soon'             => 'Coming Soon',
						'satisfy'                 => 'Satisfy',
						'permanent-marker'        => 'Permanent Marker',
						'shadows-into-light-two'  => 'Shadows Into Light Two',
						'rock-salt'               => 'Rock Salt',
						'cookie'                  => 'Cookie',
						'handlee'                 => 'Handlee',
						'tangerine'               => 'Tangerine',
						'great-vibes'             => 'Great Vibes'
					);


					foreach ($font_mapping as $key => $font_mapping_item) {
						?>

						<div class="font-style-item font-<?php echo $key ?>" >
							<input type="radio" id="<?php echo $t->get_field_id('nww_font_style-'. $key ); ?>" <?php checked( $key, $instance['nww_font_style'] ); ?> name="<?php echo $t->get_field_name( 'nww_font_style' ); ?>" value="<?php echo $key ?>" />          
							<label for="<?php echo $t->get_field_id('nww_font_style-'. $key ); ?>" id="font-selection-<?php echo $key ?>-label"  ><?php _e('Font Style','notes-widget-wrapper'); ?> - <?php echo $font_mapping_item ?></label>
						</div>

						<?php
					}

				?>
				</div>
			</section>

			<div class="notes-widget-wrapper-iframe-option-container" >
				<label for="<?php echo $t->get_field_id('nww_iframe_height'); ?>" class="notes-widget-wrapper-wrapper-set-label-width"  > <?php _e('Iframe Height', 'notes-widget-wrapper'); ?>:</label>
				<div class="notes-widget-wrapper-iframe-value-container">
					<input 
						type="text" 
						id="<?php echo $t->get_field_id('nww_iframe_height'); ?>" 
						name="<?php echo $t->get_field_name('nww_iframe_height'); ?>" 
						value="<?php echo $instance['nww_iframe_height'] ?>"
						placeholder="200" 
						class="notes-widget-wrapper-narrow" 
					/>
					<span>px</span>
				</div>
				<p class="notes-widget-wrapper-greyed-out" > <?php _e('\'iframes\' are the HTML element used to display embedded YouTube Videos, Google Maps, and more. Iframes will span the full width of the widget.', 'notes-widget-wrapper'); ?></p>

			</div>

			<div class="notes-widget-wrapper-wrapper-css-container" >
				<label for="<?php echo $t->get_field_id('nww_wrapper_css'); ?>" class="notes-widget-wrapper-wrapper-set-label-width" > <?php _e('Wrapper CSS', 'notes-widget-wrapper'); ?>:</label>
				
				<input type="text" 
					id="<?php echo $t->get_field_id('nww_wrapper_css'); ?>" 
					name="<?php echo $t->get_field_name('nww_wrapper_css'); ?>" 
					value="<?php echo $instance['nww_wrapper_css'] ?>" 
					placeholder=<?php _e('padding-top:20px;margin-bottom:10px', 'notes-widget-wrapper'); ?>
					class="notes-widget-wrapper-wide"
				/>
				<p class="notes-widget-wrapper-greyed-out" >
					<?php _e('For some themes, you may need to add some CSS tweaks (usually adding padding or margins) to the notes wrapper.
					You can add some CSS styles here, separated by \';\'. You can only enter css statements for the \'notes-widget-wrapper\' class. HTML, \'{\', and \'}\' will be removed.', 'notes-widget-wrapper'); ?>
				</p>
			</div>
		</div>
	</div>
</div>