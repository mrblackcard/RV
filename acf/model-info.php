<?php
if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array (
		'key' => 'group_56724bf663d21',
		'title' => 'Model Info',
		'fields' => array (
			array (
				'key' => 'field_56724bfa5b857',
				'label' => 'Floorplans',
				'name' => 'floorplans',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
					),
				'min' => '',
				'max' => '',
				'layout' => 'block',
				'button_label' => 'Add Row',
				'sub_fields' => array (
					array (
						'key' => 'field_56a66a548d862',
						'label' => 'Footage Shot?',
						'name' => 'footage_shot',
						'type' => 'true_false',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => 25,
							'class' => '',
							'id' => '',
							),
						'message' => '',
						'default_value' => 0,
						),
					array (
						'key' => 'field_56724c6b698545f7',
						'label' => 'Location Shot',
						'name' => 'location_shot',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => 75,
							'class' => '',
							'id' => '',
							),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
						'readonly' => 0,
						'disabled' => 0,
						),
					array (
						'key' => 'field_56724c6b698f7',
						'label' => 'Floorplan Name',
						'name' => 'floorplan_name',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => 100,
							'class' => '',
							'id' => '',
							),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
						'readonly' => 0,
						'disabled' => 0,
						),
					array (
						'key' => 'field_56724c0c7ab3b',
						'label' => 'Floorplan Video',
						'name' => 'floorplan_video',
						'type' => 'url',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => 50,
							'class' => '',
							'id' => '',
							),
						'default_value' => '',
						'placeholder' => '',
						),
					array (
						'key' => 'field_56724c1b18a67',
						'label' => 'Floorplan Image',
						'name' => 'floorplan_image',
						'type' => 'image',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => 50,
							'class' => '',
							'id' => '',
							),
						'return_format' => 'url',
						'preview_size' => 'thumbnail',
						'library' => 'all',
						'min_width' => '',
						'min_height' => '',
						'min_size' => '',
						'max_width' => '',
						'max_height' => '',
						'max_size' => '',
						'mime_types' => '',
						),
					array (
						'key' => 'field_56724c41222c7',
						'label' => 'Inventory Link',
						'name' => 'inventory_link',
						'type' => 'url',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
							),
						'default_value' => '',
						'placeholder' => '',
						),
					),
),
),
'location' => array (
	array (
		array (
			'param' => 'post_type',
			'operator' => '==',
			'value' => 'models',
			),
		),
	),
'menu_order' => 0,
'position' => 'normal',
'style' => 'default',
'label_placement' => 'top',
'instruction_placement' => 'label',
'hide_on_screen' => '',
'active' => 1,
'description' => '',
));

endif;
?>