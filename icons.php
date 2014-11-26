<?php

function ubermenu_register_icons( $group , $iconmap ){
	_UBERMENU()->register_icons( $group, $iconmap );
}

function ubermenu_deregister_icons( $group ){
	_UBERMENU()->deregister_icons( $group );
}
function ubermenu_get_registered_icons(){
	return _UBERMENU()->get_registered_icons();
}
function ubermenu_get_icon_ops(){

	$icons = ubermenu_get_registered_icons();

	$icon_select = array( '' => array( 'title' => 'None' ) );

	foreach( $icons as $icon_group => $group ){

		$iconmap = $group['iconmap'];
		$prefix = isset( $group['class_prefix'] ) ? $group['class_prefix'] : '';

		foreach( $iconmap as $icon_class => $icon ){

			$icon_select[$prefix.$icon_class] = $icon; //$icon['title']; //ucfirst( str_replace( '-' , ' ' , str_replace( 'icon-' , '' , $icon_class ) ) );

		}

	}

	return $icon_select;
}

function ubermenu_register_default_icons(){

	ubermenu_register_icons( 'font-awesome' , array(
		'title' => 'Font Awesome',
		'class_prefix' => 'fa ',
		'iconmap' => ubermenu_get_icons() 
	));

}

function ubermenu_get_icons(){

	$icons = array(
		'fa-bars'	=> 	array(
			'title'	=> 	'Bars',
		),
		'fa-music'	=>	array(
			'title'	=>	'Music',
		),
		'fa-search'	=>	array(
			'title'	=>	'Search',
		),
		'fa-gear'	=>	array(
			'title'	=>	'Gear',
		),
		'fa-envelope-o'	=>	array(
			'title'	=>	'Envelope (Outline)',
		),
		'fa-user'	=>	array(
			'title'	=>	'User',
		),
		'fa-film'	=>	array(
			'title'	=>	'Film',
		),
		'fa-home'	=>	array(
			'title'	=>	'Home',
		),
		'fa-download'	=>	array(
			'title'	=>	'Download',
		),
		'fa-lock'	=>	array(
			'title'	=>	'Lock',
		),
		'fa-headphones'	=>	array(
			'title'	=>	'Headphones',
		),
		'fa-book'	=>	array(
			'title'	=>	'Book',
		),
		'fa-bookmark'	=>	array(
			'title'	=>	'Bookmark',
		),
		'fa-camera'	=>	array(
			'title'	=>	'Camera',
		),
		'fa-video-camera'	=>	array(
			'title'	=>	'video-camera',
		),
		'fa-picture-o'	=>	array(
			'title'	=>	'Picture (Outline)',
		),
		'fa-pencil'	=>	array(
			'title'	=>	'Pencil',
		),
		'fa-map-marker'	=>	array(
			'title'	=>	'Map Marker',
		),
		'fa-calendar'	=>	array(
			'title'	=>	'Calendar',
		),
		'fa-desktop'	=>	array(
			'title'	=>	'Desktop',
		),
		'fa-laptop'	=>	array(
			'title'	=>	'Laptop',
		),
		'fa-tablet'	=>	array(
			'title'	=>	'Tablet',
		),
		'fa-mobile'	=>	array(
			'title'	=>	'Mobile',
		),
		'fa-shopping-cart'	=>	array(
			'title'	=>	'Shopping Cart',
		),
		'fa-twitter-square'	=>	array(
			'title'	=>	'Twitter Square',
		),
		'fa-facebook-square'	=>	array(
			'title'	=>	'Facebook Square',
		),
		'fa-sign-out'	=>	array(
			'title'	=>	'Sign Out',
		),
		'fa-linkedin-square'	=>	array(
			'title'	=>	'Linkedin Square',
		),
		'fa-sign-in'	=>	array(
			'title'	=>	'Sign In',
		),
		'fa-phone'	=>	array(
			'title'	=>	'Phone',
		),
		'fa-phone-square'	=>	array(
			'title'	=>	'Phone Square',
		),
		'fa-twitter'	=>	array(
			'title'	=>	'Twitter',
		),
		'fa-facebook'	=>	array(
			'title'	=>	'Facebook',
		),
		'fa-github'	=>	array(
			'title'	=>	'Github',
		),
		'fa-pinterest'	=>	array(
			'title'	=>	'Pinterest',
		),
		'fa-pinterest-square'	=>	array(
			'title'	=>	'Pinterest Square',
		),
		'fa-google-plus-square'	=>	array(
			'title'	=>	'Google Plus Square',
		),
		'fa-google-plus'	=>	array(
			'title'	=>	'Google Plus',
		),
		'fa-envelope'	=>	array(
			'title'	=>	'Envelope',
		),
		'fa-linkedin'	=>	array(
			'title'	=>	'Linkedin',
		),
		'fa-youtube-square'	=>	array(
			'title'	=>	'Youtube Square',
		),
		'fa-youtube'	=>	array(
			'title'	=>	'Youtube',
		),
		'fa-youtube-play'	=>	array(
			'title'	=>	'Youtube Play',
		),
		'fa-stack-overflow'	=>	array(
			'title'	=>	'Stack Overflow',
		),
		'fa-instagram'	=>	array(
			'title'	=>	'Instagram',
		),
		'fa-flickr'	=>	array(
			'title'	=>	'Flickr',
		),
		'fa-bitbucket'	=>	array(
			'title'	=>	'Bitbucket',
		),
		'fa-bitbucket-square'	=>	array(
			'title'	=>	'Bitbucket Square',
		),
		'fa-tumblr'	=>	array(
			'title'	=>	'Tumblr',
		),
		'fa-tumblr-square'	=>	array(
			'title'	=>	'Tumblr Square',
		),
		'fa-dribbble'	=>	array(
			'title'	=>	'Dribbble',
		),
		'fa-skype'	=>	array(
			'title'	=>	'Skype',
		),
		'fa-foursquare'	=>	array(
			'title'	=>	'Foursquare',
		),
		'fa-gittip'	=>	array(
			'title'	=>	'Gittip',
		),
		'fa-vimeo-square'	=>	array(
			'title'	=>	'Vimeo Square',
		),
		'fa-windows'	=>	array(
			'title'	=>	'Windows',
		),
		'fa-angellist'	=>	array(
			'title'	=>	'Angellist',
		),
		'fa-area-chart'	=>	array(
			'title'	=>	'Area-Chart',
		),
		'fa-at'	=>	array(
			'title'	=>	'At',
		),
		'fa-bell-slash'	=>	array(
			'title'	=>	'Bell Slash',
		),
		'fa-bell-slash-o'	=>	array(
			'title'	=>	'Bell Slash (Outline)',
		),
		'fa-bicycle'	=>	array(
			'title'	=>	'Bicycle',
		),
		'fa-birthday-cake'	=>	array(
			'title'	=>	'Birthday Cake',
		),
		'fa-bus'	=>	array(
			'title'	=>	'Bus',
		),
		'fa-calculator'	=>	array(
			'title'	=>	'Calculator',
		),
		'fa-cc'	=>	array(
			'title'	=>	'CC',
		),
		'fa-cc-amex'	=>	array(
			'title'	=>	'American Express Card',
		),
		'fa-cc-discover'	=>	array(
			'title'	=>	'Discover Card',
		),
		'fa-cc-mastercard'	=>	array(
			'title'	=>	'MasterCard Card',
		),
		'fa-cc-paypal'	=>	array(
			'title'	=>	'PayPal Card',
		),
		'fa-cc-stripe'	=>	array(
			'title'	=>	'Stripe',
		),
		'fa-copyright'	=>	array(
			'title'	=>	'Copyright',
		),
		'fa-eyedropper'	=>	array(
			'title'	=>	'Eyedropper',
		),
		'fa-futbol-o'	=>	array(
			'title'	=>	'Football (Outline)',
		),
		'fa-google-wallet'	=>	array(
			'title'	=>	'Google Wallet',
		),
		'fa-ils'	=>	array(
			'title'	=>	'Ils',
		),
		'fa-ioxhost'	=>	array(
			'title'	=>	'Ioxhost',
		),
		'fa-lastfm'	=>	array(
			'title'	=>	'LastFM',
		),
		'fa-lastfm-square'	=>	array(
			'title'	=>	'LastFM Square',
		),
		'fa-line-chart'	=>	array(
			'title'	=>	'Line Chart',
		),
		'fa-meanpath'	=>	array(
			'title'	=>	'Meanpath',
		),
		'fa-newspaper-o'	=>	array(
			'title'	=>	'Newspaper (Outline)',
		),
		'fa-paint-brush'	=>	array(
			'title'	=>	'Paint Brush',
		),
		'fa-paypal'	=>	array(
			'title'	=>	'PayPal',
		),
		'fa-pie-chart'	=>	array(
			'title'	=>	'Pie Chart',
		),
		'fa-plug'	=>	array(
			'title'	=>	'Plug',
		),
		'fa-toggle-on'	=>	array(
			'title'	=>	'Toggle On',
		),
		'fa-toggle-off'	=>	array(
			'title'	=>	'Toggle Off',
		),
		'fa-trash'	=>	array(
			'title'	=>	'Trash',
		),
		'fa-tty'	=>	array(
			'title'	=>	'TTY',
		),
		'fa-twitch'	=>	array(
			'title'	=>	'Twitch.tv',
		),
		'fa-wifi'	=>	array(
			'title'	=>	'WiFi',
		),
		'fa-yelp'	=>	array(
			'title'	=>	'Yelp',
		),
		'fa-adjust'	=>	array(
			'title'	=>	'Adjust',
		),
		'fa-anchor'	=>	array(
			'title'	=>	'Anchor',
		),
		'fa-archive'	=>	array(
			'title'	=>	'Archive',
		),
		'fa-area-chart'	=>	array(
			'title'	=>	'Area Chart',
		),
		'fa-arrows'	=>	array(
			'title'	=>	'Arrows',
		),
		'fa-arrows-h'	=>	array(
			'title'	=>	'Horizontal Arrow',
		),
		'fa-arrows-v'	=>	array(
			'title'	=>	'Vertical Arrows',
		),
		'fa-asterisk'	=>	array(
			'title'	=>	'Asterisk',
		),
		'fa-automobile'	=>	array(
			'title'	=>	'Automobile',
		),
		'fa-ban'	=>	array(
			'title'	=>	'Ban',
		),
		'fa-bank'	=>	array(
			'title'	=>	'Bank/University',
		),
		'fa-bar-chart'	=>	array(
			'title'	=>	'Bar Chart',
		),
		'fa-bar-chart-o'	=>	array(
			'title'	=>	'Bar Chart (Outline)',
		),
		'fa-barcode'	=>	array(
			'title'	=>	'Barcode',
		),
		'fa-beer'	=>	array(
			'title'	=>	'Beer',
		),
		'fa-bell'	=>	array(
			'title'	=>	'Bell',
		),
		'fa-bell-o'	=>	array(
			'title'	=>	'Bell (Outline)',
		),
		'fa-bell-slash'	=>	array(
			'title'	=>	'Bell Slash',
		),
		'fa-bell-slash-o'	=>	array(
			'title'	=>	'Bell Slash (Outline)',
		),
		'fa-bolt'	=>	array(
			'title'	=>	'Bolt',
		),
		'fa-bomb'	=>	array(
			'title'	=>	'Bomb',
		),
		'fa-bookmark-o'	=>	array(
			'title'	=>	'Bookmark (Outline)',
		),
		'fa-briefcase'	=>	array(
			'title'	=>	'Briefcase',
		),
		'fa-bug'	=>	array(
			'title'	=>	'Bug',
		),
		'fa-building'	=>	array(
			'title'	=>	'Building',
		),
		'fa-building-o'	=>	array(
			'title'	=>	'Building (Outline)',
		),
		'fa-bullhorn'	=>	array(
			'title'	=>	'Bullhorn',
		),
		'fa-bullseye'	=>	array(
			'title'	=>	'Bullseye',
		),
		'fa-cab'	=>	array(
			'title'	=>	'Cab/Taxi',
		),
		'fa-calculator'	=>	array(
			'title'	=>	'Calculator',
		),
		'fa-calendar-o'	=>	array(
			'title'	=>	'Calendar (Outline)',
		),
		'fa-camera-retro'	=>	array(
			'title'	=>	'Retro Camera',
		),
		'fa-car'	=>	array(
			'title'	=>	'Car',
		),
		'fa-caret-square-o-down'	=>	array(
			'title'	=>	'Caret (Outline) Down',
		),
		'fa-caret-square-o-left'	=>	array(
			'title'	=>	'Caret (Outline) Left',
		),
		'fa-caret-square-o-right'	=>	array(
			'title'	=>	'Caret (Outline) Right',
		),
		'fa-caret-square-o-up'	=>	array(
			'title'	=>	'Caret (outline) Up',
		),
		'fa-certificate'	=>	array(
			'title'	=>	'Certificate',
		),
		'fa-check'	=>	array(
			'title'	=>	'Check',
		),
		'fa-check-circle'	=>	array(
			'title'	=>	'Circle Check',
		),
		'fa-check-circle-o'	=>	array(
			'title'	=>	'Circle Check (Outline)',
		),
		'fa-check-square'	=>	array(
			'title'	=>	'Square Check',
		),
		'fa-check-square-o'	=>	array(
			'title'	=>	'Square Check (Outline)',
		),
		'fa-child'	=>	array(
			'title'	=>	'Child',
		),
		'fa-circle'	=>	array(
			'title'	=>	'Circle',
		),
		'fa-circle-o'	=>	array(
			'title'	=>	'Circle (Outline)',
		),
		'fa-circle-o-notch'	=>	array(
			'title'	=>	'Circle (Outline) Notch',
		),
		'fa-circle-thin'	=>	array(
			'title'	=>	'Circle Thin',
		),
		'fa-clock-o'	=>	array(
			'title'	=>	'Clock (Outline)',
		),
		'fa-close'	=>	array(
			'title'	=>	'Close/Time',
		),
		'fa-cloud'	=>	array(
			'title'	=>	'Cloud',
		),
		'fa-cloud-download'	=>	array(
			'title'	=>	'Cloud Download',
		),
		'fa-cloud-upload'	=>	array(
			'title'	=>	'Cloud Upload',
		),
		'fa-code'	=>	array(
			'title'	=>	'Code',
		),
		'fa-code-fork'	=>	array(
			'title'	=>	'Code Fork',
		),
		'fa-coffee'	=>	array(
			'title'	=>	'Coffee',
		),
		'fa-cog'	=>	array(
			'title'	=>	'Cog',
		),
		'fa-cogs'	=>	array(
			'title'	=>	'Cogs',
		),
		'fa-comment'	=>	array(
			'title'	=>	'Comment',
		),
		'fa-comment-o'	=>	array(
			'title'	=>	'Comment (Outline)',
		),
		'fa-comments'	=>	array(
			'title'	=>	'Comments',
		),
		'fa-comments-o'	=>	array(
			'title'	=>	'Comments (Outline)',
		),
		'fa-compass'	=>	array(
			'title'	=>	'Compass',
		),
		'fa-copyright'	=>	array(
			'title'	=>	'Copyright',
		),
		'fa-credit-card'	=>	array(
			'title'	=>	'Credit Card',
		),
		'fa-crop'	=>	array(
			'title'	=>	'Crop',
		),
		'fa-crosshairs'	=>	array(
			'title'	=>	'Crosshairs',
		),
		'fa-cube'	=>	array(
			'title'	=>	'Cube',
		),
		'fa-cubes'	=>	array(
			'title'	=>	'Cubes',
		),
		'fa-cutlery'	=>	array(
			'title'	=>	'Cutlery',
		),
		'fa-dashboard'	=>	array(
			'title'	=>	'Dashboard',
		),
		'fa-database'	=>	array(
			'title'	=>	'Database',
		),
		'fa-dot-circle-o'	=>	array(
			'title'	=>	'Dot Circle (Outline)',
		),
		'fa-edit'	=>	array(
			'title'	=>	'Edit/Pencil Square (Outline)',
		),
		'fa-ellipsis-h'	=>	array(
			'title'	=>	'Horizontal Ellipsis',
		),
		'fa-ellipsis-v'	=>	array(
			'title'	=>	'Vertical Ellipsis',
		),
		'fa-envelope-square'	=>	array(
			'title'	=>	'Envelope Square',
		),
		'fa-eraser'	=>	array(
			'title'	=>	'Eraser',
		),
		'fa-exchange'	=>	array(
			'title'	=>	'Exchange',
		),
		'fa-exclamation'	=>	array(
			'title'	=>	'Exclamation',
		),
		'fa-exclamation-circle'	=>	array(
			'title'	=>	'Circle Exclamation',
		),
		'fa-exclamation-triangle'	=>	array(
			'title'	=>	'Triangle Exclamation',
		),
		'fa-external-link'	=>	array(
			'title'	=>	'External Link',
		),
		'fa-external-link-square'	=>	array(
			'title'	=>	'Square External Link',
		),
		'fa-eye'	=>	array(
			'title'	=>	'Eye',
		),
		'fa-eye-slash'	=>	array(
			'title'	=>	'Slashed Eye',
		),
		'fa-fax'	=>	array(
			'title'	=>	'Fax',
		),
		'fa-female'	=>	array(
			'title'	=>	'Female',
		),
		'fa-fighter-jet'	=>	array(
			'title'	=>	'Jet Fighter',
		),
		'fa-file-archive-o'	=>	array(
			'title'	=>	'Archived File (Outline)',
		),
		'fa-file-audio-o'	=>	array(
			'title'	=>	'Audio File (Outline)',
		),
		'fa-file-code-o'	=>	array(
			'title'	=>	'Source Code (Outline)',
		),
		'fa-file-excel-o'	=>	array(
			'title'	=>	'Excel File (Outline)',
		),
		'fa-file-image-o'	=>	array(
			'title'	=>	'Image File (Outline)',
		),
		'fa-file-movie-o'	=>	array(
			'title'	=>	'Movie File (Outline)',
		),
		'fa-file-pdf-o'	=>	array(
			'title'	=>	'PDF File (Outline)',
		),
		'fa-file-photo-o'	=>	array(
			'title'	=>	'Photo File (Outline)',
		),
		'fa-picture-o'	=>	array(
			'title'	=>	'Picture File (Outline)',
		),
		'fa-file-powerpoint-o'	=>	array(
			'title'	=>	'PowerPoint File (Outline)',
		),
		'fa-file-sound-o'	=>	array(
			'title'	=>	'Sound File (Outline)',
		),
		'fa-file-video-o'	=>	array(
			'title'	=>	'Video File (Outline)',
		),
		'fa-file-word-o'	=>	array(
			'title'	=>	'Word File (Outline)',
		),
		'fa-filter'	=>	array(
			'title'	=>	'Filter',
		),
		'fa-fire'	=>	array(
			'title'	=>	'Fire',
		),
		'fa-fire-extinguisher'	=>	array(
			'title'	=>	'Fire Extinguisher',
		),
		'fa-flag'	=>	array(
			'title'	=>	'Flag',
		),
		'fa-flag-checkered'	=>	array(
			'title'	=>	'Checkered Flag',
		),
		'fa-flag-o'	=>	array(
			'title'	=>	'Flag (Outline)',
		),
		'fa-flash'	=>	array(
			'title'	=>	'Flash',
		),
		'fa-flask'	=>	array(
			'title'	=>	'Flask',
		),
		'fa-folder'	=>	array(
			'title'	=>	'Folder',
		),
		'fa-folder-o'	=>	array(
			'title'	=>	'Folder (Outline)',
		),
		'fa-folder-open-o'	=>	array(
			'title'	=>	'Opened Folder (Outline)',
		),
		'fa-frown-o'	=>	array(
			'title'	=>	'Frown (Outline)',
		),
		'fa-gamepad'	=>	array(
			'title'	=>	'Gamepad',
		),
		'fa-gavel'	=>	array(
			'title'	=>	'Gavel',
		),
		'fa-gears'	=>	array(
			'title'	=>	'Gears/Cogs',
		),
		'fa-gift'	=>	array(
			'title'	=>	'Gift',
		),
		'fa-glass'	=>	array(
			'title'	=>	'Glass',
		),
		'fa-globe'	=>	array(
			'title'	=>	'Globe',
		),
		'fa-graduation-cap'	=>	array(
			'title'	=>	'Graduation Cap',
		),
		'fa-group'	=>	array(
			'title'	=>	'Group',
		),
		'fa-hdd-o'	=>	array(
			'title'	=>	'Hard Disk (Outline)',
		),
		'fa-heart'	=>	array(
			'title'	=>	'Heart',
		),
		'fa-heart-o'	=>	array(
			'title'	=>	'Heart (Outline)',
		),
		'fa-history'	=>	array(
			'title'	=>	'History',
		),
		'fa-inbox'	=>	array(
			'title'	=>	'Inbox',
		),
		'fa-info'	=>	array(
			'title'	=>	'Information',
		),
		'fa-info-circle'	=>	array(
			'title'	=>	'Information Circle',
		),
		'fa-institution'	=>	array(
			'title'	=>	'Institution/University',
		),
		'fa-key'	=>	array(
			'title'	=>	'Key',
		),
		'fa-keyboard-o'	=>	array(
			'title'	=>	'Keyboard (Outline)',
		),
		'fa-language'	=>	array(
			'title'	=>	'Language',
		),
		'fa-leaf'	=>	array(
			'title'	=>	'Leaf',
		),
		'fa-legal'	=>	array(
			'title'	=>	'Legal/Gavel',
		),
		'fa-lemon-o'	=>	array(
			'title'	=>	'Lemon (Outline)',
		),
		'fa-level-down'	=>	array(
			'title'	=>	'Level Down',
		),
		'fa-level-up'	=>	array(
			'title'	=>	'Level Up',
		),
		'fa-life-bouy'	=>	array(
			'title'	=>	'Life Bouy',
		),
		'fa-lightbulb-o'	=>	array(
			'title'	=>	'Lightbulb (Outline)',
		),
		'fa-location-arrow'	=>	array(
			'title'	=>	'Location Arrow',
		),
		'fa-magic'	=>	array(
			'title'	=>	'Magic',
		),
		'fa-magnet'	=>	array(
			'title'	=>	'Magnet',
		),
		'fa-mail-forward'	=>	array(
			'title'	=>	'Mail Forward/Share',
		),
		'fa-mail-reply'	=>	array(
			'title'	=>	'Mail Reply',
		),
		'fa-mail-reply-all'	=>	array(
			'title'	=>	'Mail Reply All',
		),
		'fa-male'	=>	array(
			'title'	=>	'Male',
		),
		'fa-meh-o'	=>	array(
			'title'	=>	'Meh',
		),
		'fa-microphone'	=>	array(
			'title'	=>	'Microphone',
		),
		'fa-microphone-slash'	=>	array(
			'title'	=>	'Microphone Slash',
		),
		'fa-minus'	=>	array(
			'title'	=>	'Minus',
		),
		'fa-minus-circle'	=>	array(
			'title'	=>	'Minus Circle',
		),
		'fa-minus-square'	=>	array(
			'title'	=>	'Minus Square',
		),
		'fa-minus-square-o'	=>	array(
			'title'	=>	'Minus Square (Outline)',
		),
		'fa-money'	=>	array(
			'title'	=>	'Money',
		),
		'fa-moon-o'	=>	array(
			'title'	=>	'Moon (Outline)',
		),
		'fa-paper-plane'	=>	array(
			'title'	=>	'Paper Plane',
		),
		'fa-paper-plane-o'	=>	array(
			'title'	=>	'Paper Plane (Outline)',
		),
		'fa-paw'	=>	array(
			'title'	=>	'Paw',
		),
		'fa-pencil-square'	=>	array(
			'title'	=>	'Pencil Square',
		),
		'fa-pencil-square-o'	=>	array(
			'title'	=>	'Pencil Square (Outline)',
		),
		'fa-plane'	=>	array(
			'title'	=>	'Plane',
		),
		'fa-plus'	=>	array(
			'title'	=>	'Plus',
		),
		'fa-plus-circle'	=>	array(
			'title'	=>	'Plus Circle',
		),
		'fa-plus-square'	=>	array(
			'title'	=>	'Plus Square',
		),
		'fa-plus-square-o'	=>	array(
			'title'	=>	'Plus Square (Outline)',
		),
		'fa-power-off'	=>	array(
			'title'	=>	'Power Off',
		),
		'fa-print'	=>	array(
			'title'	=>	'Print',
		),
		'fa-puzzle-piece'	=>	array(
			'title'	=>	'Puzzle Piece',
		),
		'fa-qrcode'	=>	array(
			'title'	=>	'QR Code',
		),
		'fa-question'	=>	array(
			'title'	=>	'Question',
		),
		'fa-question-circle'	=>	array(
			'title'	=>	'Question Circle',
		),
		'fa-quote-left'	=>	array(
			'title'	=>	'Quote Left',
		),
		'fa-quote-right'	=>	array(
			'title'	=>	'Quote Right',
		),
		'fa-random'	=>	array(
			'title'	=>	'Random',
		),
		'fa-recycle'	=>	array(
			'title'	=>	'Recycle',
		),
		'fa-refresh'	=>	array(
			'title'	=>	'Refresh',
		),
		'fa-remove'	=>	array(
			'title'	=>	'Remove',
		),
		'fa-retweet'	=>	array(
			'title'	=>	'Retweet',
		),
		'fa-road'	=>	array(
			'title'	=>	'Road',
		),
		'fa-rocket'	=>	array(
			'title'	=>	'Rocket',
		),
		'fa-rss'	=>	array(
			'title'	=>	'RSS',
		),
		'fa-rss-square'	=>	array(
			'title'	=>	'RSS Square',
		),
		'fa-search-minus'	=>	array(
			'title'	=>	'Search Minus',
		),
		'fa-search-plus'	=>	array(
			'title'	=>	'Search Plus',
		),
		'fa-share'	=>	array(
			'title'	=>	'Share',
		),
		'fa-share-alt'	=>	array(
			'title'	=>	'Share Alt',
		),
		'fa-share-alt-square'	=>	array(
			'title'	=>	'Share Alt Square',
		),
		'fa-share-square'	=>	array(
			'title'	=>	'Share Square',
		),
		'fa-share-square-o'	=>	array(
			'title'	=>	'Share Square (Outline)',
		),
		'fa-shield'	=>	array(
			'title'	=>	'Shield',
		),
		'fa-signal'	=>	array(
			'title'	=>	'Signal',
		),
		'fa-sitemap'	=>	array(
			'title'	=>	'Sitemap',
		),
		'fa-sliders'	=>	array(
			'title'	=>	'Sliders',
		),
		'fa-smile-o'	=>	array(
			'title'	=>	'Smile (Outline)',
		),
		'fa-sort'	=>	array(
			'title'	=>	'Sort',
		),
		'fa-sort-alpha-asc'	=>	array(
			'title'	=>	'Alphabetical Ascending Sort',
		),
		'fa-sort-alpha-desc'	=>	array(
			'title'	=>	'Alphabetical Descending Sort ',
		),
		'fa-sort-amount-asc'	=>	array(
			'title'	=>	'Amount Ascending Sort',
		),
		'fa-sort-amount-desc'	=>	array(
			'title'	=>	'Amount Descending Sort',
		),
		'fa-sort-asc'	=>	array(
			'title'	=>	'Ascending Sort',
		),
		'fa-sort-desc'	=>	array(
			'title'	=>	'Descending Sort',
		),
		'fa-sort-down'	=>	array(
			'title'	=>	'Sort Downward',
		),
		'fa-sort-numeric-asc'	=>	array(
			'title'	=>	'Numerical Ascending Sort',
		),
		'fa-sort-numeric-desc'	=>	array(
			'title'	=>	'Numerical Descending Sort',
		),
		'fa-sort-up'	=>	array(
			'title'	=>	'Sort Upward',
		),
		'fa-space-shuttle'	=>	array(
			'title'	=>	'Space Shuttle',
		),
		'fa-spinner'	=>	array(
			'title'	=>	'Spinner',
		),
		'fa-spoon'	=>	array(
			'title'	=>	'Spoon',
		),
		'fa-square'	=>	array(
			'title'	=>	'Square',
		),
		'fa-square-o'	=>	array(
			'title'	=>	'Square (Outline)',
		),
		'fa-star'	=>	array(
			'title'	=>	'Star',
		),
		'fa-star-half'	=>	array(
			'title'	=>	'Half Star',
		),
		'fa-star-half-empty'	=>	array(
			'title'	=>	'Half Empty Star',
		),
		'fa-star-o'	=>	array(
			'title'	=>	'Star (Outline)',
		),
		'fa-suitcase'	=>	array(
			'title'	=>	'Suitcase',
		),
		'fa-sun-o'	=>	array(
			'title'	=>	'Sun (Outline)',
		),
		'fa-tachometer'	=>	array(
			'title'	=>	'Tachometer',
		),
		'fa-tag'	=>	array(
			'title'	=>	'Tag',
		),
		'fa-tags'	=>	array(
			'title'	=>	'Tags',
		),
		'fa-tasks'	=>	array(
			'title'	=>	'Tasks',
		),
		'fa-taxi'	=>	array(
			'title'	=>	'Taxi',
		),
		'fa-terminal'	=>	array(
			'title'	=>	'Terminal',
		),
		'fa-thumb-tack'	=>	array(
			'title'	=>	'Thumb Tack',
		),
		'fa-thumbs-down'	=>	array(
			'title'	=>	'Thumbs Down',
		),
		'fa-thumbs-o-down'	=>	array(
			'title'	=>	'Thumbs Down (Outline)',
		),
		'fa-thumbs-o-up'	=>	array(
			'title'	=>	'Thumbs Up (Outline)',
		),
		'fa-thumbs-up'	=>	array(
			'title'	=>	'Thumbs Up',
		),
		'fa-ticket'	=>	array(
			'title'	=>	'Ticket',
		),
		'fa-times'	=>	array(
			'title'	=>	'Times',
		),
		'fa-times-circle'	=>	array(
			'title'	=>	'Times Circle',
		),
		'fa-times-circle-o'	=>	array(
			'title'	=>	'Times Circle (Outline)',
		),
		'fa-tint'	=>	array(
			'title'	=>	'Tint',
		),
		'fa-trash-o'	=>	array(
			'title'	=>	'Trash (Outline)',
		),
		'fa-tree'	=>	array(
			'title'	=>	'Tree',
		),
		'fa-trophy'	=>	array(
			'title'	=>	'Trophy',
		),
		'fa-truck'	=>	array(
			'title'	=>	'Truck',
		),
		'fa-umbrella'	=>	array(
			'title'	=>	'Umbrella',
		),
		'fa-university'	=>	array(
			'title'	=>	'University',
		),
		'fa-unlock'	=>	array(
			'title'	=>	'Unlock',
		),
		'fa-unlock-alt'	=>	array(
			'title'	=>	'Unlock Alternate',
		),
		'fa-unsorted'	=>	array(
			'title'	=>	'Unsorted',
		),
		'fa-upload'	=>	array(
			'title'	=>	'Upload',
		),
		'fa-users'	=>	array(
			'title'	=>	'Users',
		),
		'fa-volume-down'	=>	array(
			'title'	=>	'Volume Down',
		),
		'fa-volume-off'	=>	array(
			'title'	=>	'Volume Off',
		),
		'fa-wheelchair'	=>	array(
			'title'	=>	'Wheelchair',
		),
		'fa-wrench'	=>	array(
			'title'	=>	'Wrench',
		),
		'fa-file'	=>	array(
			'title'	=>	'File',
		),
		'fa-file-o'	=>	array(
			'title'	=>	'File (Outline)',
		),
		'fa-file-text'	=>	array(
			'title'	=>	'Text File',
		),
		'fa-file-text-o'	=>	array(
			'title'	=>	'Text File (Outline)',
		),
		'fa-cc-visa'	=>	array(
			'title'	=>	'Visa Card',
		),
		'fa-bitcoin'	=>	array(
			'title'	=>	'BitCoin',
		),
		'fa-jpy'	=>	array(
			'title'	=>	'Japanese Yen',
		),
		'fa-dollar'	=>	array(
			'title'	=>	'Dollar',
		),
		'fa-eur'	=>	array(
			'title'	=>	'Euro',
		),
		'fa-gbp'	=>	array(
			'title'	=>	'Pound',
		),
		'fa-inr'	=>	array(
			'title'	=>	'Indian Rupee',
		),
		'fa-krw'	=>	array(
			'title'	=>	'Korean Won',
		),
		'fa-rouble'	=>	array(
			'title'	=>	'Rouble',
		),
		'fa-try'	=>	array(
			'title'	=>	'TRY',
		),
		'fa-align-center'	=>	array(
			'title'	=>	'Center Align',
		),
		'fa-align-justify'	=>	array(
			'title'	=>	'Justified Align',
		),
		'fa-align-left'	=>	array(
			'title'	=>	'Left Align',
		),
		'fa-align-right'	=>	array(
			'title'	=>	'Right Align',
		),
		'fa-bold'	=>	array(
			'title'	=>	'Bold',
		),
		'fa-chain-broken'	=>	array(
			'title'	=>	'Broken Chain/Link',
		),
		'fa-clipboard'	=>	array(
			'title'	=>	'Clipboard',
		),
		'fa-columns'	=>	array(
			'title'	=>	'Columns',
		),
		'fa-copy'	=>	array(
			'title'	=>	'Copy',
		),
		'fa-dedent'	=>	array(
			'title'	=>	'Outdent',
		),
		'fa-cut'	=>	array(
			'title'	=>	'Cut/Scissor',
		),
		
		
		
		
	);

	return $icons;
}