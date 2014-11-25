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
			'title'	=>	'Angelist',
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
	);

	return $icons;
}