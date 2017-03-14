<?php 

/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 */ 

function optionsframework_option_name() {
	// Change this to use your theme slug
	return 'optionsframework_skt_black_pro';
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'skt-black'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {
	//array of all custom font types.
	$font_types = array( '' => '', 'Arial' => 'Arial',
		'Comic Sans MS' => 'Comic Sans MS',
		'FreeSans' => 'FreeSans',
		'Georgia' => 'Georgia',
		'Lucida Sans Unicode' => 'Lucida Sans Unicode',
		'Palatino Linotype' => 'Palatino Linotype',
		'Symbol' => 'Symbol',
		'Tahoma' => 'Tahoma',
		'Trebuchet MS' => 'Trebuchet MS',
		'Verdana' => 'Verdana',
		'ABeeZee' => 'ABeeZee',
		'Abel' => 'Abel',
		'Abril Fatface' => 'Abril Fatface',
		'Aclonica' => 'Aclonica',
		'Acme' => 'Acme',
		'Actor' => 'Actor',
		'Adamina' => 'Adamina',
		'Advent Pro' => 'Advent Pro',
		'Aguafina Script' => 'Aguafina Script',
		'Akronim' => 'Akronim',
		'Aladin' => 'Aladin',
		'Aldrich' => 'Aldrich',
		'Alegreya' => 'Alegreya',
		'Alegreya SC' => 'Alegreya SC',
		'Alex Brush' => 'Alex Brush',
		'Alfa Slab One' => 'Alfa Slab One',
		'Alice' => 'Alice',
		'Alike' => 'Alike',
		'Alike Angular' => 'Alike Angular',
		'Allan' => 'Allan',
		'Allerta' => 'Allerta',
		'Allerta Stencil' => 'Allerta Stencil',
		'Allura' => 'Allura',
		'Almendra' => 'Almendra',
		'Almendra Display' => 'Almendra Display',
		'Almendra SC' => 'Almendra SC',
		'Amarante' => 'Amarante',
		'Amaranth' => 'Amaranth',
		'Amatic SC' => 'Amatic SC',
		'Amethysta' => 'Amethysta',
		'Anaheim' => 'Anaheim',
		'Andada' => 'Andada',
		'Andika' => 'Andika',
		'Annie Use Your Telescope' => 'Annie Use Your Telescope',
		'Anonymous Pro' => 'Anonymous Pro',
		'Antic' => 'Antic',
		'Antic Didone' => 'Antic Didone',
		'Antic Slab' => 'Antic Slab',
		'Anton' => 'Anton',
		'Arapey' => 'Arapey',
		'Arbutus' => 'Arbutus',
		'Arbutus Slab' => 'Arbutus Slab',
		'Architects Daughter' => 'Architects Daughter',
		'Archivo Black' => 'Archivo Black',
		'Archivo Narrow' => 'Archivo Narrow',
		'Arimo' => 'Arimo',
		'Arizonia' => 'Arizonia',
		'Armata' => 'Armata',
		'Artifika' => 'Artifika',
		'Arvo' => 'Arvo',
		'Asap' => 'Asap',
		'Asset' => 'Asset',
		'Astloch' => 'Astloch',
		'Asul' => 'Asul',
		'Atomic Age' => 'Atomic Age',
		'Aubrey' => 'Aubrey',
		'Audiowide' => 'Audiowide',
		'Autour One' => 'Autour One',
		'Average' => 'Average',
		'Average Sans' => 'Average Sans',
		'Averia Gruesa Libre' => 'Averia Gruesa Libre',
		'Averia Libre' => 'Averia Libre',
		'Averia Sans Libre' => 'Averia Sans Libre',
		'Averia Serif Libre' => 'Averia Serif Libre',
		'Bad Script' => 'Bad Script',
		'Balthazar' => 'Balthazar',
		'Bangers' => 'Bangers',
		'Basic' => 'Basic',
		'Baumans' => 'Baumans',
		'Belgrano' => 'Belgrano',
		'Belleza' => 'Belleza',
		'BenchNine' => 'BenchNine',
		'Bentham' => 'Bentham',
		'Berkshire Swash' => 'Berkshire Swash',
		'Bevan' => 'Bevan',
		'Bigelow Rules' => 'Bigelow Rules',
		'Bigshot One' => 'Bigshot One',
		'Bilbo' => 'Bilbo',
		'Bilbo Swash Caps' => 'Bilbo Swash Caps',
		'Bitter' => 'Bitter',
		'Black Ops One' => 'Black Ops One',
		'Bonbon' => 'Bonbon',
		'Boogaloo' => 'Boogaloo',
		'Bowlby One' => 'Bowlby One',
		'Bowlby One SC' => 'Bowlby One SC',
		'Brawler' => 'Brawler',
		'Bree Serif' => 'Bree Serif',
		'Bubblegum Sans' => 'Bubblegum Sans',
		'Bubbler One' => 'Bubbler One',
		'Buda' => 'Buda',
		'Buenard' => 'Buenard',
		'Butcherman' => 'Butcherman',
		'Butcherman Caps' => 'Butcherman Caps',
		'Butterfly Kids' => 'Butterfly Kids',
		'Cabin' => 'Cabin',
		'Cabin Condensed' => 'Cabin Condensed',
		'Cabin Sketch' => 'Cabin Sketch',
		'Cabin' => 'Cabin',
		'Caesar Dressing' => 'Caesar Dressing',
		'Cagliostro' => 'Cagliostro',
		'Calligraffitti' => 'Calligraffitti',
		'Cambo' => 'Cambo',
		'Candal' => 'Candal',
		'Cantarell' => 'Cantarell',
		'Cantata One' => 'Cantata One',
		'Cantora One' => 'Cantora One',
		'Capriola' => 'Capriola',
		'Cardo' => 'Cardo',
		'Carme' => 'Carme',
		'Carrois Gothic' => 'Carrois Gothic',
		'Carrois Gothic SC' => 'Carrois Gothic SC',
		'Carter One' => 'Carter One',
		'Caudex' => 'Caudex',
		'Cedarville Cursive' => 'Cedarville Cursive',
		'Ceviche One' => 'Ceviche One',
		'Changa One' => 'Changa One',
		'Chango' => 'Chango',
		'Chau Philomene One' => 'Chau Philomene One',
		'Chela One' => 'Chela One',
		'Chelsea Market' => 'Chelsea Market',
		'Cherry Cream Soda' => 'Cherry Cream Soda',
		'Cherry Swash' => 'Cherry Swash',
		'Chewy' => 'Chewy',
		'Chicle' => 'Chicle',
		'Chivo' => 'Chivo',
		'Cinzel' => 'Cinzel',
		'Cinzel Decorative' => 'Cinzel Decorative',
		'Clicker Script' => 'Clicker Script',
		'Coda' => 'Coda',
		'Codystar' => 'Codystar',
		'Combo' => 'Combo',
		'Comfortaa' => 'Comfortaa',
		'Coming Soon' => 'Coming Soon',
		'Condiment' => 'Condiment',
		'Contrail One' => 'Contrail One',
		'Convergence' => 'Convergence',
		'Cookie' => 'Cookie',
		'Copse' => 'Copse',
		'Corben' => 'Corben',
		'Courgette' => 'Courgette',
		'Cousine' => 'Cousine',
		'Coustard' => 'Coustard',
		'Covered By Your Grace' => 'Covered By Your Grace',
		'Crafty Girls' => 'Crafty Girls',
		'Creepster' => 'Creepster',
		'Creepster Caps' => 'Creepster Caps',
		'Crete Round' => 'Crete Round',
		'Crimson' => 'Crimson',
		'Croissant One' => 'Croissant One',
		'Crushed' => 'Crushed',
		'Cuprum' => 'Cuprum',
		'Cutive' => 'Cutive',
		'Cutive Mono' => 'Cutive Mono',
		'Damion' => 'Damion',
		'Dancing Script' => 'Dancing Script',
		'Dawning of a New Day' => 'Dawning of a New Day',
		'Days One' => 'Days One',
		'Delius' => 'Delius',
		'Delius Swash Caps' => 'Delius Swash Caps',
		'Delius Unicase' => 'Delius Unicase',
		'Della Respira' => 'Della Respira',
		'Denk One' => 'Denk One',
		'Devonshire' => 'Devonshire',
		'Didact Gothic' => 'Didact Gothic',
		'Diplomata' => 'Diplomata',
		'Diplomata SC' => 'Diplomata SC',
		'Domine' => 'Domine',
		'Donegal One' => 'Donegal One',
		'Doppio One' => 'Doppio One',
		'Dorsa' => 'Dorsa',
		'Dosis' => 'Dosis',
		'Dr Sugiyama' => 'Dr Sugiyama',
		'Droid Sans' => 'Droid Sans',
		'Droid Sans Mono' => 'Droid Sans Mono',
		'Droid Serif' => 'Droid Serif',
		'Duru Sans' => 'Duru Sans',
		'Dynalight' => 'Dynalight',
		'EB Garamond' => 'EB Garamond',
		'Eagle Lake' => 'Eagle Lake',
		'Eater' => 'Eater',
		'Eater Caps' => 'Eater Caps',
		'Economica' => 'Economica',
		'Electrolize' => 'Electrolize',
		'Elsie' => 'Elsie',
		'Elsie Swash Caps' => 'Elsie Swash Caps',
		'Emblema One' => 'Emblema One',
		'Emilys Candy' => 'Emilys Candy',
		'Engagement' => 'Engagement',
		'Englebert' => 'Englebert',
		'Enriqueta' => 'Enriqueta',
		'Erica One' => 'Erica One',
		'Esteban' => 'Esteban',
		'Euphoria Script' => 'Euphoria Script',
		'Ewert' => 'Ewert',
		'Exo' => 'Exo',
		'Expletus Sans' => 'Expletus Sans',
		'Fanwood Text' => 'Fanwood Text',
		'Fascinate' => 'Fascinate',
		'Fascinate Inline' => 'Fascinate Inline',
		'Faster One' => 'Faster One',
		'Federant' => 'Federant',
		'Federo' => 'Federo',
		'Felipa' => 'Felipa',
		'Fenix' => 'Fenix',
		'Finger Paint' => 'Finger Paint',
		'Fjalla One' => 'Fjalla One',
		'Fjord One' => 'Fjord One',
		'Flamenco' => 'Flamenco',
		'Flavors' => 'Flavors',
		'Fondamento' => 'Fondamento',
		'Fontdiner Swanky' => 'Fontdiner Swanky',
		'Forum' => 'Forum',
		'Francois One' => 'Francois One',
		'Freckle Face' => 'Freckle Face',
		'Fredericka the Great' => 'Fredericka the Great',
		'Fredoka One' => 'Fredoka One',
		'Fresca' => 'Fresca',
		'Frijole' => 'Frijole',
		'Fruktur' => 'Fruktur',
		'Fugaz One' => 'Fugaz One',
		'Gafata' => 'Gafata',
		'Galdeano' => 'Galdeano',
		'Galindo' => 'Galindo',
		'Gentium Basic' => 'Gentium Basic',
		'Gentium Book Basic' => 'Gentium Book Basic',
		'Geo' => 'Geo',
		'Geostar' => 'Geostar',
		'Geostar Fill' => 'Geostar Fill',
		'Germania One' => 'Germania One',
		'Gilda Display' => 'Gilda Display',
		'Give You Glory' => 'Give You Glory',
		'Glass Antiqua' => 'Glass Antiqua',
		'Glegoo' => 'Glegoo',
		'Gloria Hallelujah' => 'Gloria Hallelujah',
		'Goblin One' => 'Goblin One',
		'Gochi Hand' => 'Gochi Hand',
		'Gorditas' => 'Gorditas',
		'Goudy Bookletter 1911' => 'Goudy Bookletter 1911',
		'Graduate' => 'Graduate',
		'Grand Hotel' => 'Grand Hotel',
		'Gravitas One' => 'Gravitas One',
		'Great Vibes' => 'Great Vibes',
		'Griffy' => 'Griffy',
		'Gruppo' => 'Gruppo',
		'Gudea' => 'Gudea',
		'Habibi' => 'Habibi',
		'Hammersmith One' => 'Hammersmith One',
		'Hanalei' => 'Hanalei',
		'Hanalei Fill' => 'Hanalei Fill',
		'Handlee' => 'Handlee',
		'Happy Monkey' => 'Happy Monkey',
		'Headland One' => 'Headland One',
		'Henny Penny' => 'Henny Penny',
		'Herr Von Muellerhoff' => 'Herr Von Muellerhoff',
		'Holtwood One SC' => 'Holtwood One SC',
		'Homemade Apple' => 'Homemade Apple',
		'Homenaje' => 'Homenaje',
		'IM Fell' => 'IM Fell',
		'Iceberg' => 'Iceberg',
		'Iceland' => 'Iceland',
		'Imprima' => 'Imprima',
		'Inconsolata' => 'Inconsolata',
		'Inder' => 'Inder',
		'Indie Flower' => 'Indie Flower',
		'Inika' => 'Inika',
		'Irish Growler' => 'Irish Growler',
		'Istok Web' => 'Istok Web',
		'Italiana' => 'Italiana',
		'Italianno' => 'Italianno',
		'Jacques Francois' => 'Jacques Francois',
		'Jacques Francois Shadow' => 'Jacques Francois Shadow',
		'Jim Nightshade' => 'Jim Nightshade',
		'Jockey One' => 'Jockey One',
		'Jolly Lodger' => 'Jolly Lodger',
		'Josefin Sans' => 'Josefin Sans',
		'Josefin Sans' => 'Josefin Sans',
		'Josefin Slab' => 'Josefin Slab',
		'Joti One' => 'Joti One',
		'Judson' => 'Judson',
		'Julee' => 'Julee',
		'Julius Sans One' => 'Julius Sans One',
		'Junge' => 'Junge',
		'Jura' => 'Jura',
		'Just Another Hand' => 'Just Another Hand',
		'Just Me Again Down Here' => 'Just Me Again Down Here',
		'Kameron' => 'Kameron',
		'Karla' => 'Karla',
		'Kaushan Script' => 'Kaushan Script',
		'Kavoon' => 'Kavoon',
		'Keania One' => 'Keania One',
		'Kelly Slab' => 'Kelly Slab',
		'Kenia' => 'Kenia',
		'Kite One' => 'Kite One',
		'Knewave' => 'Knewave',
		'Kotta One' => 'Kotta One',
		'Kranky' => 'Kranky',
		'Kreon' => 'Kreon',
		'Kristi' => 'Kristi',
		'Krona One' => 'Krona One',
		'La Belle Aurore' => 'La Belle Aurore',
		'Lancelot' => 'Lancelot',
		'Lato' => 'Lato',
		'League Script' => 'League Script',
		'Leckerli One' => 'Leckerli One',
		'Ledger' => 'Ledger',
		'Lekton' => 'Lekton',
		'Lemon' => 'Lemon',
		'Libre Baskerville' => 'Libre Baskerville',
		'Life Savers' => 'Life Savers',
		'Lilita One' => 'Lilita One',
		'Limelight' => 'Limelight',
		'Linden Hill' => 'Linden Hill',
		'Lobster' => 'Lobster',
		'Lobster Two' => 'Lobster Two',
		'Londrina Outline' => 'Londrina Outline',
		'Londrina Shadow' => 'Londrina Shadow',
		'Londrina Sketch' => 'Londrina Sketch',
		'Londrina Solid' => 'Londrina Solid',
		'Lora' => 'Lora',
		'Love Ya Like A Sister' => 'Love Ya Like A Sister',
		'Loved by the King' => 'Loved by the King',
		'Lovers Quarrel' => 'Lovers Quarrel',
		'Luckiest Guy' => 'Luckiest Guy',
		'Lusitana' => 'Lusitana',
		'Lustria' => 'Lustria',
		'Macondo' => 'Macondo',
		'Macondo Swash Caps' => 'Macondo Swash Caps',
		'Magra' => 'Magra',
		'Maiden Orange' => 'Maiden Orange',
		'Mako' => 'Mako',
		'Marcellus' => 'Marcellus',
		'Marcellus SC' => 'Marcellus SC',
		'Marck Script' => 'Marck Script',
		'Margarine' => 'Margarine',
		'Marko One' => 'Marko One',
		'Marmelad' => 'Marmelad',
		'Marvel' => 'Marvel',
		'Mate' => 'Mate',
		'Mate SC' => 'Mate SC',
		'Maven Pro' => 'Maven Pro',
		'McLaren' => 'McLaren',
		'Meddon' => 'Meddon',
		'MedievalSharp' => 'MedievalSharp',
		'Medula One' => 'Medula One',
		'Megrim' => 'Megrim',
		'Meie Script' => 'Meie Script',
		'Merienda' => 'Merienda',
		'Merienda One' => 'Merienda One',
		'Merriweather' => 'Merriweather',
		'Metal Mania' => 'Metal Mania',
		'Metamorphous' => 'Metamorphous',
		'Metrophobic' => 'Metrophobic',
		'Michroma' => 'Michroma',
		'Milonga' => 'Milonga',
		'Miltonian' => 'Miltonian',
		'Miltonian Tattoo' => 'Miltonian Tattoo',
		'Miniver' => 'Miniver',
		'Miss Fajardose' => 'Miss Fajardose',
		'Miss Saint Delafield' => 'Miss Saint Delafield',
		'Modern Antiqua' => 'Modern Antiqua',
		'Molengo' => 'Molengo',
		'Molle' => 'Molle',
		'Monda' => 'Monda',
		'Monofett' => 'Monofett',
		'Monoton' => 'Monoton',
		'Monsieur La Doulaise' => 'Monsieur La Doulaise',
		'Montaga' => 'Montaga',
		'Montez' => 'Montez',
		'Montserrat' => 'Montserrat',
		'Montserrat Alternates' => 'Montserrat Alternates',
		'Montserrat Subrayada' => 'Montserrat Subrayada',
		'Mountains of Christmas' => 'Mountains of Christmas',
		'Mouse Memoirs' => 'Mouse Memoirs',
		'Mr Bedford' => 'Mr Bedford',
		'Mr Bedfort' => 'Mr Bedfort',
		'Mr Dafoe' => 'Mr Dafoe',
		'Mr De Haviland' => 'Mr De Haviland',
		'Mrs Saint Delafield' => 'Mrs Saint Delafield',
		'Mrs Sheppards' => 'Mrs Sheppards',
		'Muli' => 'Muli',
		'Mystery Quest' => 'Mystery Quest',
		'Neucha' => 'Neucha',
		'Neuton' => 'Neuton',
		'New Rocker' => 'New Rocker',
		'News Cycle' => 'News Cycle',
		'Niconne' => 'Niconne',
		'Nixie One' => 'Nixie One',
		'Nobile' => 'Nobile',
		'Norican' => 'Norican',
		'Nosifer' => 'Nosifer',
		'Nosifer Caps' => 'Nosifer Caps',
		'Noticia Text' => 'Noticia Text',
		'Nova Round' => 'Nova Round',
		'Numans' => 'Numans',
		'Nunito' => 'Nunito',
		'Offside' => 'Offside',
		'Oldenburg' => 'Oldenburg',
		'Oleo Script' => 'Oleo Script',
		'Oleo Script Swash Caps' => 'Oleo Script Swash Caps',
		'Open Sans' => 'Open Sans',
		'Open Sans Condensed' => 'Open Sans Condensed',
		'Oranienbaum' => 'Oranienbaum',
		'Orbitron' => 'Orbitron',
		'Oregano' => 'Oregano',
		'Orienta' => 'Orienta',
		'Original Surfer' => 'Original Surfer',
		'Oswald' => 'Oswald',
		'Over the Rainbow' => 'Over the Rainbow',
		'Overlock' => 'Overlock',
		'Overlock SC' => 'Overlock SC',
		'Ovo' => 'Ovo',
		'Oxygen' => 'Oxygen',
		'Oxygen Mono' => 'Oxygen Mono',
		'PT Mono' => 'PT Mono',
		'PT Sans' => 'PT Sans',
		'PT Sans Narrow' => 'PT Sans Narrow',
		'PT Serif' => 'PT Serif',
		'PT Serif Caption' => 'PT Serif Caption',
		'Pacifico' => 'Pacifico',
		'Paprika' => 'Paprika',
		'Parisienne' => 'Parisienne',
		'Passero One' => 'Passero One',
		'Passion One' => 'Passion One',
		'Patrick Hand' => 'Patrick Hand',
		'Patua One' => 'Patua One',
		'Paytone One' => 'Paytone One',
		'Peralta' => 'Peralta',
		'Permanent Marker' => 'Permanent Marker',
		'Petit Formal Script' => 'Petit Formal Script',
		'Petrona' => 'Petrona',
		'Philosopher' => 'Philosopher',
		'Piedra' => 'Piedra',
		'Pinyon Script' => 'Pinyon Script',
		'Pirata One' => 'Pirata One',
		'Plaster' => 'Plaster',
		'Play' => 'Play',
		'Playball' => 'Playball',
		'Playfair Display' => 'Playfair Display',
		'Playfair Display SC' => 'Playfair Display SC',
		'Podkova' => 'Podkova',
		'Poiret One' => 'Poiret One',
		'Poller One' => 'Poller One',
		'Poly' => 'Poly',
		'Pompiere' => 'Pompiere',
		'Pontano Sans' => 'Pontano Sans',
		'Port Lligat Sans' => 'Port Lligat Sans',
		'Port Lligat Slab' => 'Port Lligat Slab',
		'Prata' => 'Prata',
		'Press Start 2P' => 'Press Start 2P',
		'Princess Sofia' => 'Princess Sofia',
		'Prociono' => 'Prociono',
		'Prosto One' => 'Prosto One',
		'Puritan' => 'Puritan',
		'Purple Purse' => 'Purple Purse',
		'Quando' => 'Quando',
		'Quantico' => 'Quantico',
		'Quattrocento' => 'Quattrocento',
		'Quattrocento Sans' => 'Quattrocento Sans',
		'Questrial' => 'Questrial',
		'Quicksand' => 'Quicksand',
		'Quintessential' => 'Quintessential',
		'Qwigley' => 'Qwigley',
		'Racing Sans One' => 'Racing Sans One',
		'Radley' => 'Radley',
		'Raleway Dots' => 'Raleway Dots',
		'Raleway' => 'Raleway',
		'Rambla' => 'Rambla',
		'Rammetto One' => 'Rammetto One',
		'Ranchers' => 'Ranchers',
		'Rancho' => 'Rancho',
		'Rationale' => 'Rationale',
		'Redressed' => 'Redressed',
		'Reenie Beanie' => 'Reenie Beanie',
		'Revalia' => 'Revalia',
		'Ribeye' => 'Ribeye',
		'Ribeye Marrow' => 'Ribeye Marrow',
		'Righteous' => 'Righteous',
		'Risque' => 'Risque',
		'Roboto' => 'Roboto',
		'Roboto Condensed' => 'Roboto Condensed',
		'Rochester' => 'Rochester',
		'Rock Salt' => 'Rock Salt',
		'Rokkitt' => 'Rokkitt',
		'Romanesco' => 'Romanesco',
		'Ropa Sans' => 'Ropa Sans',
		'Rosario' => 'Rosario',
		'Rosarivo' => 'Rosarivo',
		'Rouge Script' => 'Rouge Script',
		'Ruda' => 'Ruda',
		'Rufina' => 'Rufina',
		'Ruge Boogie' => 'Ruge Boogie',
		'Ruluko' => 'Ruluko',
		'Rum Raisin' => 'Rum Raisin',
		'Ruslan Display' => 'Ruslan Display',
		'Russo One' => 'Russo One',
		'Ruthie' => 'Ruthie',
		'Rye' => 'Rye',
		'Sacramento' => 'Sacramento',
		'Sail' => 'Sail',
		'Salsa' => 'Salsa',
		'Sanchez' => 'Sanchez',
		'Sancreek' => 'Sancreek',
		'Sansita One' => 'Sansita One',
		'Sarina' => 'Sarina',
		'Satisfy' => 'Satisfy',
		'Scada' => 'Scada',
		'Schoolbell' => 'Schoolbell',
		'Seaweed Script' => 'Seaweed Script',
		'Sevillana' => 'Sevillana',
		'Seymour One' => 'Seymour One',
		'Shadows Into Light' => 'Shadows Into Light',
		'Shadows Into Light Two' => 'Shadows Into Light Two',
		'Shanti' => 'Shanti',
		'Share' => 'Share',
		'Share Tech' => 'Share Tech',
		'Share Tech Mono' => 'Share Tech Mono',
		'Shojumaru' => 'Shojumaru',
		'Short Stack' => 'Short Stack',
		'Sigmar One' => 'Sigmar One',
		'Signika' => 'Signika',
		'Signika Negative' => 'Signika Negative',
		'Simonetta' => 'Simonetta',
		'Sirin Stencil' => 'Sirin Stencil',
		'Six Caps' => 'Six Caps',
		'Skranji' => 'Skranji',
		'Slackey' => 'Slackey',
		'Smokum' => 'Smokum',
		'Smythe' => 'Smythe',
		'Sniglet' => 'Sniglet',
		'Snippet' => 'Snippet',
		'Snowburst One' => 'Snowburst One',
		'Sofadi One' => 'Sofadi One',
		'Sofia' => 'Sofia',
		'Sonsie One' => 'Sonsie One',
		'Sorts Mill Goudy' => 'Sorts Mill Goudy',
		'Sorts Mill Goudy' => 'Sorts Mill Goudy',
		'Source Code Pro' => 'Source Code Pro',
		'Source Sans Pro' => 'Source Sans Pro',
		'Special I am one' => 'Special I am one',
		'Spicy Rice' => 'Spicy Rice',
		'Spinnaker' => 'Spinnaker',
		'Spirax' => 'Spirax',
		'Squada One' => 'Squada One',
		'Stalemate' => 'Stalemate',
		'Stalinist One' => 'Stalinist One',
		'Stardos Stencil' => 'Stardos Stencil',
		'Stint Ultra Condensed' => 'Stint Ultra Condensed',
		'Stint Ultra Expanded' => 'Stint Ultra Expanded',
		'Stoke' => 'Stoke',
		'Stoke' => 'Stoke',
		'Strait' => 'Strait',
		'Sue Ellen Francisco' => 'Sue Ellen Francisco',
		'Sunshiney' => 'Sunshiney',
		'Supermercado One' => 'Supermercado One',
		'Swanky and Moo Moo' => 'Swanky and Moo Moo',
		'Syncopate' => 'Syncopate',
		'Tangerine' => 'Tangerine',
		'Telex' => 'Telex',
		'Tenor Sans' => 'Tenor Sans',
		'Terminal Dosis' => 'Terminal Dosis',
		'Terminal Dosis Light' => 'Terminal Dosis Light',
		'Text Me One' => 'Text Me One',
		'The Girl Next Door' => 'The Girl Next Door',
		'Tienne' => 'Tienne',
		'Tinos' => 'Tinos',
		'Titan One' => 'Titan One',
		'Titillium Web' => 'Titillium Web',
		'Trade Winds' => 'Trade Winds',
		'Trocchi' => 'Trocchi',
		'Trochut' => 'Trochut',
		'Trykker' => 'Trykker',
		'Tulpen One' => 'Tulpen One',
		'Ubuntu' => 'Ubuntu',
		'Ubuntu Condensed' => 'Ubuntu Condensed',
		'Ubuntu Mono' => 'Ubuntu Mono',
		'Ultra' => 'Ultra',
		'Uncial Antiqua' => 'Uncial Antiqua',
		'Underdog' => 'Underdog',
		'Unica One' => 'Unica One',
		'UnifrakturCook' => 'UnifrakturCook',
		'UnifrakturMaguntia' => 'UnifrakturMaguntia',
		'Unkempt' => 'Unkempt',
		'Unlock' => 'Unlock',
		'Unna' => 'Unna',
		'VT323' => 'VT323',
		'Vampiro One' => 'Vampiro One',
		'Varela' => 'Varela',
		'Varela Round' => 'Varela Round',
		'Vast Shadow' => 'Vast Shadow',
		'Vibur' => 'Vibur',
		'Vidaloka' => 'Vidaloka',
		'Viga' => 'Viga',
		'Voces' => 'Voces',
		'Volkhov' => 'Volkhov',
		'Vollkorn' => 'Vollkorn',
		'Voltaire' => 'Voltaire',
		'Waiting for the Sunrise' => 'Waiting for the Sunrise',
		'Wallpoet' => 'Wallpoet',
		'Walter Turncoat' => 'Walter Turncoat',
		'Warnes' => 'Warnes',
		'Wellfleet' => 'Wellfleet',
		'Wendy One' => 'Wendy One',
		'Wire One' => 'Wire One',
		'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
		'Yellowtail' => 'Yellowtail',
		'Yeseva One' => 'Yeseva One',
		'Yesteryear' => 'Yesteryear',
		'Zeyada' => 'Zeyada'
	);

	//array of all font sizes.
	$font_sizes = array( 
		'10px' => '10px',
		'11px' => '11px',
	);
	for($n=12;$n<=100;$n+=1){
		$font_sizes[$n.'px'] = $n.'px';
	}

	// array of section content.
	$section_text = array(
		1 => array(
			'section_title'		=> 'Our Services',
			'menutitle'			=> 'services',
			'bgcolor' 			=> '#000000',
			'bgimage'			=> '',
			'class'				=> 'services',
			'content'			=> '[services title="Web" bold="Design" icon="'.get_template_directory_uri().'/images/icon-web-design.png"]Lorem Ipsum is simply dummy text of they printing and typesetting industry. Lore Ipsum has been the industry’s standard in dummy text ever since the 1500s, when an unknown printer took a galley of type andin scrambled it to make a type book. [readmore-link align="center" button="Read More" links="#"][/services][services title="Web" bold="Development" icon="'.get_template_directory_uri().'/images/icon-wordpress.png"]Lorem Ipsum is simply dummy text of they printing and typesetting industry. Lore Ipsum has been the industry’s standard in dummy text ever since the 1500s, when an unknown printer took a galley of type andin scrambled it to make a type book. [readmore-link align="center" button="Read More" links="#"][/services][services title="Mobile" bold="Website" icon="'.get_template_directory_uri().'/images/icon-responsive.png"]Lorem Ipsum is simply dummy text of they printing and typesetting industry. Lore Ipsum has been the industry’s standard in dummy text ever since the 1500s, when an unknown printer took a galley of type andin scrambled it to make a type book. [readmore-link align="center" button="Read More" links="#"][/services][services title="WordPress" bold="Themes" icon="'.get_template_directory_uri().'/images/icon-web-design.png"]Lorem Ipsum is simply dummy text of they printing and typesetting industry. Lore Ipsum has been the industry’s standard in dummy text ever since the 1500s, when an unknown printer took a galley of type andin scrambled it to make a type book. [readmore-link align="center" button="Read More" links="#"][/services]',
		),
		
		2 => array(
			'section_title'	=> '',
			'menutitle'		=> '',
			'bgcolor' 		=> '',
			'bgimage'		=> get_template_directory_uri()."/images/contact-banner.jpg",
			'class'			=> 'contact-banner',
			'content'		=> '<h3>Do you like SKT Black? Is it everything you wanted from a theme?</h3>
            <a class="contact-button" href="#">Contact Us</a>',
		),

		3 => array(
			'section_title'	=> 'A message from our manager',
			'menutitle'		=> '',
			'bgcolor' 		=> '#141414',
			'menutitle'		=> '',
			'bgimage'		=> '',
			'class'			=> 'gry-row',
			'content'		=> '[column_content type="one_half"]<div class="message-thumb"><img src="'.get_template_directory_uri().'/images/manager-img.jpg" /></div>[/column_content][column_content type="one_half_last"]<div class="message-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas imperdiet ex at mauris varius interdum. Fusce mattis gravida libero, nec sollicitudin eros finibus at. Praesent ex diam, mattis vitae efficitur vel, egestas sed neque. Sed congue interdum cursus. Nullam in tincidunt neque. Cras enim tortor, porta id tempor vel, placerat et tellus. Vestibulum eget ullamcorper orci. Suspendisse potenti. Proin rutrum magna ac gravida scelerisque. Nunc eu sodales nisi. Curabitur ligula quam, maximus commodo sodales ut, pretium eget ipsum. Proin lobortis, nibh vel fringilla dictum, ipsum tortor cursus ex, facilisis cursus sapien sem at sem. Mauris in risus ac massa congue volutpat sit amet at metus. Ut in metus posuere, rutrum risus eget, aliquam arcu. Curabitur tincidunt, nulla ut pellentesque aliquet, mi risus pharetra sem, at euismod tortor eros imperdiet turpis.
			<br/>Donec ut ex ac nulla pellentesque mollis in a enim. Praesent placerat sapien mauris, vitae sodales tellus venenatis ac. Suspendisse suscipit velit id ultricies auctor. Duis turpis arcu, aliquet sed sollicitudin sed, porta quis urna. Quisque velit nibh, egestas et erat a, vehicula interdum augue. Morbi ut elementum justo. Fusce mattis gravida libero, nec sollicitudin eros finibus at. Praesent ex diam, mattis vitae efficitur vel, egestas sed neque. Sed congue interdum cursus. Nullam in tincidunt neque. Cras enim tortor, porta id tempor vel, placerat et tellus. Vestibulum eget ullamcorper orci. Suspendisse potenti. Proin rutrum magna ac gravida scelerisque. Nunc eu sodales nisi.</div> [/column_content]',
		),

		4 => array(
			'section_title'	=> 'Latest News',
			'menutitle'		=> 'news',
			'bgcolor' 		=> '#000000',
			'bgimage'		=> '',
			'class'			=> 'latest-news',
			'content'		=> '[latestposts show="2"]',
		),
		
		5 => array(
			'section_title'	=> 'What our clients say',
			'menutitle'		=> 'testimonials',
			'bgcolor' 		=> '#141414',
			'bgimage'		=> '',
			'class'			=> 'testimonial',
			'content'		=> '[testimonials show="2"]',
		
		),
		
		6 => array(
			'section_title'	=> 'Some Facts About Us',
			'menutitle'		=> '',
			'bgcolor' 		=> '#000000',
			'bgimage'		=> '',
			'class'			=> 'stat',
			'content'		=> '[stat_main]
			[stat value="2000"]Download[/stat][stat value="300"]Projects Done[/stat][stat value="400"]Happy Clients[/stat][stat value="100"]Awards Won[/stat]
			[/stat_main]',
			
		),
		
		7 => array(
			'section_title'	=> 'Our Team',
			'menutitle'		=> 'team',
			'bgcolor' 		=> '#141414',
			'bgimage'		=> '',
			'class'			=> 'our-team',
			'content'		=> '[column_content type="one_half"]<div class="team-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. Sed eleifend nonummy diam. Praesent mauris ante, elementum et, bibendum at, posuere sit amet, nibh. Duis tincidunt lectus quis dui viverra vestibulum. Suspendisse vulputate aliquam dui.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br/><br/>
			
			Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. Sed eleifend nonummy diam. Praesent mauris ante, elementum et, bibendum at, posuere sit amet, nibh. Duis tincidunt lectus quis dui viverra vestibulum. Suspendisse vulputate aliquam dui.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum[skill title="Coding" percent="90" bgcolor="#ff8a00"][skill title="Design" percent="70" bgcolor="#ff8a00"][skill title="Building" percent="55" bgcolor="#ff8a00"][skill title="SEO" percent="100" bgcolor="#ff8a00"]</div>[/column_content][column_content type="one_half_last"]<div class="team-div">[ourteam show="4"]</div>[/column_content]'
		),
		
		8 => array(
			'section_title'	=> 'Our Projects',
			'menutitle'		=> 'portfolio',
			'bgcolor' 		=> '#000000',
			'bgimage'		=> '',
			'class'			=> 'our-projects',
			'content'		=> '[photogallery filter="true"]'
		),
		
		9 => array(
			'section_title'	=> '',
			'menutitle'		=> 'contact',
			'bgcolor' 		=> '#141414',
			'bgimage'		=> '',
			'class'			=> '',
			'content'		=> '[newsletter title="Sign Up Our" highlight="Newsletter"]Stay updated with latest news from SKT Black[/newsletter]'
		),
 
		10 => array(
			'section_title'	=> 'We’re Everywhere!',
			'menutitle'		=> '',
			'bgcolor' 		=> '#000000',
			'bgimage'		=> '',
			'class'			=> '',
			'content'		=> '[social_area][social icon="facebook" link="#"] [social icon="twitter" link="#"] [social icon="google" link="#"] [social icon="pinterest" link="#"] [social icon="youtube" link="#"] [social icon="linkedin-square" link="#"] [social icon="vimeo-square" link="#"] [social icon="rss" link="#"] [social icon="instagram" link="#"] [social icon="tumblr" link="#"] [social icon="flickr" link="#"] [social icon="yahoo" link="#"] [social icon="dribbble" link="#"] [social icon="stumbleupon" link="#"] [social icon="meanpath" link="#"] [social icon="behance" link="#"] [social icon="codepen" link="#"] [social icon="git-square" link="#"] [social icon="foursquare" link="#"] [social icon="wordpress" link="#"] [social icon="yelp" link="#"] [social icon="mail-forward" link="#"] [social icon="vk" link="#"] [social icon="rocket" link="#"] [social icon="whatsapp" link="#"] [social icon="medium" link="#"] [social icon="linkedin" link="#"] [social icon="rss" link="#"] [social icon="globe" link="#"] [social icon="magnet" link="#"] [social icon="google-plus-square" link="#"] [social icon="link" link="#"] [social icon="vine" link="#"] [social icon="yelp" link="#"][/social_area]'
		),
		
		
		
		 
	);

	$options = array();

	//Basic Settings
	$options[] = array(
		'name' => __('Basic Settings', 'skt-black'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Logo', 'skt-black'),
		'desc' => __('Upload your main logo here', 'skt-black'),
		'id' => 'logo',
		'class' => '',
		'std'	=> '',
		'type' => 'upload');
		
	$options[] = array(		
		'desc' => __('add here your custom logo height', 'skt-black'),
		'id' => 'logoheight',
		'std' => '40',
		'type' => 'text');	

	$options[] = array(
		'name' => __('Custom CSS', 'skt-black'),
		'desc' => __('Some Custom Styling for your site. Place any css codes here instead of the style.css file.', 'skt-black'),
		'id' => 'style2',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'name' => __('Sticky Header', 'skt-black'),
		'desc' => __('Check this to disable sticky header on scroll', 'skt-black'),
		'id' => 'headstick',
		'std' => '',
		'type' => 'checkbox');
		
		
	// font family start 
	$options[] = array(
		'name' => __('Font Faces', 'skt-black'),
		'desc' => __('Select font for the body text', 'skt-black'),
		'id' => 'bodyfontface',
		'type' => 'select',
		'std' => 'Arimo',
		'options' => $font_types );
		
	$options[] = array(
		'desc' => __('Select font for the textual logo', 'skt-black'),
		'id' => 'logofontface',
		'type' => 'select',
		'std' => 'Roboto',
		'options' => $font_types );
		
	$options[] = array(
		'desc' => __('Select font for the navigation text', 'skt-black'),
		'id' => 'navfontface',
		'type' => 'select',
		'std' => 'Open Sans',
		'options' => $font_types );
		
	$options[] = array(
		'desc' => __('Select font for heading text. eg: H1, H2, H3, H4, H5, H6', 'skt-black'),
		'id' => 'headfontface',
		'type' => 'select',
		'std' => 'Roboto',
		'options' => $font_types );
		
	$options[] = array(
		'desc' => __('Select font for slider Heading', 'skt-black'),
		'id' => 'sldfontface',
		'type' => 'select',
		'std' => 'Roboto',
		'options' => $font_types );
		
	$options[] = array(
		'desc' => __('Select font for slider description', 'skt-black'),
		'id' => 'slddscfontface',
		'type' => 'select',
		'std' => 'Roboto',
		'options' => $font_types );
		
	$options[] = array(
		'desc' => __('Select font for footer title', 'skt-black'),
		'id' => 'foottitlefontface',
		'type' => 'select',
		'std' => 'Roboto',
		'options' => $font_types );
		
	$options[] = array(
		'desc' => __('Select font for footer copyright text', 'skt-black'),
		'id' => 'copyfontface',
		'type' => 'select',
		'std' => 'Arimo',
		'options' => $font_types );
	
	$options[] = array(
		'desc' => __('Select font for footer design by text', 'skt-black'),
		'id' => 'designfontface',
		'type' => 'select',
		'std' => 'Arimo',
		'options' => $font_types );
		
	// font sizes start
	
	$options[] = array(
		'name' => __('Font Sizes', 'skt-black'),
		'desc' => __('Select font size for body text', 'skt-black'),
		'id' => 'bodyfontsize',
		'type' => 'select',
		'std' => '12px',
		'options' => $font_sizes );
		
	$options[] = array(
		'desc' => __('Select font size for textual logo', 'skt-black'),
		'id' => 'logofontsize',
		'type' => 'select',
		'std' => '28px',
		'options' => $font_sizes );
		
	$options[] = array(
		'desc' => __('Select font size for navigation', 'skt-black'),
		'id' => 'navfontsize',
		'type' => 'select',
		'std' => '13px',
		'options' => $font_sizes );
		
	$options[] = array(
		'desc' => __('Select font size for slide title', 'skt-black'),
		'id' => 'sldtitlesize',
		'type' => 'select',
		'std' => '58px',
		'options' => $font_sizes );
		
	$options[] = array(
		'desc' => __('Select font size for slide description', 'skt-black'),
		'id' => 'slddescsize',
		'type' => 'select',
		'std' => '16px',
		'options' => $font_sizes );
		
	$options[] = array(
		'desc' => __('Select font size for section title', 'skt-black'),
		'id' => 'sectitlesize',
		'type' => 'select',
		'std' => '38px',
		'options' => $font_sizes );

	// font colors start

	$options[] = array(
		'name' => __('Font Colors', 'skt-black'),
		'desc' => __('Select font color for the body text', 'skt-black'),
		'id' => 'bodyfontcolor',
		'std' => '#757575',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font color for textual logo', 'skt-black'),
		'id' => 'logofontcolor',
		'std' => '#ffffff',
		'type' => 'color');


	$options[] = array(
		'desc' => __('Select font color for navigation', 'skt-black'),
		'id' => 'navfontcolor',
		'std' => '#ffffff',
		'type' => 'color');

	$options[] = array(
		'desc' => __('Select font color for navigation hover', 'skt-black'),
		'id' => 'navhovercolor',
		'std' => '',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font color for section title', 'skt-black'),
		'id' => 'sectitlecolor',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font color for slider title', 'skt-black'),
		'id' => 'sldtitlecolor',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font color for slider description', 'skt-black'),
		'id' => 'slddsccolor',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font color for widget title', 'skt-black'),
		'id' => 'wdgttitleccolor',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font color for footer title', 'skt-black'),
		'id' => 'foottitlecolor',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font color for footer links and highlighted text', 'skt-black'),
		'id' => 'footerhightxt',
		'std' => '#ff8a00',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font color for footer left text (copyright)', 'skt-black'),
		'id' => 'copycolor',
		'std' => '#757575',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font color for footer right text (design by)', 'skt-black'),
		'id' => 'designcolor',
		'std' => '#757575',
		'type' => 'color');

	$options[] = array(
		'desc' => __('Select font color for links / anchor tags', 'skt-black'),
		'id' => 'linkcolor',
		'std' => '',
		'type' => 'color');

	$options[] = array(
		'desc' => __('Select font color for links / anchor tags on hover', 'skt-black'),
		'id' => 'linkhovercolor',
		'std' => '',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font color for contact button', 'skt-black'),
		'id' => 'cntfontcolor',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font color for gallery filter', 'skt-black'),
		'id' => 'filterfont',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font active/hover color for gallery filter', 'skt-black'),
		'id' => 'filterfontactive',
		'std' => '#ff8a00',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select font color for Newsletter highlighted text', 'skt-black'),
		'id' => 'newshightxt',
		'std' => '#ff8a00',
		'type' => 'color');
		
	
	// Background start
		
	$options[] = array(
		'name' => __('Background Colors', 'skt-black'),
		'desc' => __('Select background color for header', 'skt-black'),
		'id' => 'headerbgcolor',
		'std' => '#1a1a1a',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select background color for contact button', 'skt-black'),
		'id' => 'cntbgcolor',
		'std' => '#ff8a00',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select hover background color for contact button', 'skt-black'),
		'id' => 'cnthvbgcolor',
		'std' => '#c76c01',
		'type' => 'color');
		
		$options[] = array(
		'desc' => __('Select background color for services box', 'skt-black'),
		'id' => 'serbgcolor',
		'std' => '#151515',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select hover background color for services box', 'skt-black'),
		'id' => 'serhvbgcolor',
		'std' => '#ff8a00',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select background color for social icons', 'skt-black'),
		'id' => 'socialcolor',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select background color for social icons', 'skt-black'),
		'id' => 'socialbgcolor',
		'std' => '#302f2f',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select background hover color for social section', 'skt-black'),
		'id' => 'socialbghvcolor',
		'std' => '#ff8a00',
		'type' => 'color');
		

	$options[] = array(
		'desc' => __('Select background color for footer', 'skt-black'),
		'id' => 'footerbgcolor',
		'std' => '#1a1a1a',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select background color for copyright section', 'skt-black'),
		'id' => 'copybgcolor',
		'std' => '#000000',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select background color for gallery hover', 'skt-black'),
		'id' => 'galhvcolor',
		'std' => '#ff8a00',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select background color for blog pagination', 'skt-black'),
		'id' => 'blogpagebg',
		'std' => '#303441',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select background color for blog pagination active/hover', 'skt-black'),
		'id' => 'blogpagehvbg',
		'std' => '#ff8a00',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select background color for latest news more arrow', 'skt-black'),
		'id' => 'lnmorebgcolor',
		'std' => '#4a4a4a',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select background hover color for latest news more arrow', 'skt-black'),
		'id' => 'lnmorebghover',
		'std' => '#ff8a00',
		'type' => 'color');		
		
	$options[] = array(	
		'desc' => __('Select background color for latest news box', 'skt-black'),
		'id' => 'newsboxbg',
		'std' => '#1a1a1a',
		'type' => 'color');
		
	$options[] = array(	
		'desc' => __('Select background color for testimonials box', 'skt-black'),
		'id' => 'tmnboxbg',
		'std' => '#000000',
		'type' => 'color');	
		
	$options[] = array(	
		'desc' => __('Select background color for filter gallery', 'skt-black'),
		'id' => 'filtergallerybg',
		'std' => '#141414',
		'type' => 'color');	
		
	$options[] = array(	
		'desc' => __('Select background color for newsletter sign up form', 'skt-black'),
		'id' => 'newsletterbg',
		'std' => '#000000',
		'type' => 'color');	
		
	$options[] = array(	
		'desc' => __('Select background color for newsletter signup form input field', 'skt-black'),
		'id' => 'inputfieldbg',
		'std' => '#1a1a1a',
		'type' => 'color');		
								
		
	// Border colors
	$options[] = array(
		'name' => __('Border Colors', 'skt-black'),
		'desc' => __('Select border color for services read more button', 'skt-black'),
		'id' => 'ser_rdmore_border',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(	
		'desc' => __('Select background hover color for services read more button', 'skt-black'),
		'id' => 'ser_rdmore_hover',
		'std' => '#ffffff',
		'type' => 'color');	
		
	$options[] = array(	
		'desc' => __('Select font hover color for services read more button', 'skt-black'),
		'id' => 'ser_rdmore_fonthover',
		'std' => '#3a3c41',
		'type' => 'color');	
		
	$options[] = array(	
		'desc' => __('Select border color for header', 'skt-black'),
		'id' => 'headerborder',
		'std' => '#222222',
		'type' => 'color');
		
	$options[] = array(	
		'desc' => __('Select image border color for above latest news image', 'skt-black'),
		'id' => 'imgbrder',
		'std' => '#212121',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select border color for fact circle', 'skt-black'),
		'id' => 'circlebg',
		'std' => '#ff8a00',
		'type' => 'color');
		
	$options[] = array(	
		'desc' => __('Select border color for latest news box', 'skt-black'),
		'id' => 'newsboxborder',
		'std' => '#212121',
		'type' => 'color');	
		
	$options[] = array(	
		'desc' => __('Select border color for latest news box', 'skt-black'),
		'id' => 'tmnboxborder',
		'std' => '#232323',
		'type' => 'color');	
		
	$options[] = array(	
		'desc' => __('Select border color for team title', 'skt-black'),
		'id' => 'teamtitleborder',
		'std' => '#000000',
		'type' => 'color');	
		
	$options[] = array(	
		'desc' => __('Select border color for newsletter signup form', 'skt-black'),
		'id' => 'newsletterborder',
		'std' => '#1d1d1d',
		'type' => 'color');	
		
	$options[] = array(	
		'desc' => __('Select border color for newsletter signup form input field', 'skt-black'),
		'id' => 'inputfieldborder',
		'std' => '#252525',
		'type' => 'color');	
		
	$options[] = array(	
		'desc' => __('Select border color for testimonials title', 'skt-black'),
		'id' => 'tmtitleborder',
		'std' => '#363636',
		'type' => 'color');														
		
		
	// Slider controls colors
	$options[] = array(
		'name' => __('Slider controls Colors', 'skt-black'),
		'desc' => __('Select background color for slider navigation', 'skt-black'),
		'id' => 'sldnavbg',
		'std' => '#000000',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select background color for slider pager', 'skt-black'),
		'id' => 'sldpagebg',
		'std' => '#313131',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select background color for slider pager', 'skt-black'),
		'id' => 'sldpagehvbg',
		'std' => '#ff8a00',
		'type' => 'color');
		
		
	$options[] = array(
		'name' => __('Blog Single Layout', 'skt-black'),
		'desc' => __('Select layout for blog single post ex. left sidebar, right sidebar, full width, no sidebar', 'skt-black'),
		'id' => 'singlelayout',
		'type' => 'select',
		'std' => 'singleright',
		'options' => array('singleright'=>'Blog Single Right Sidebar', 'singleleft'=>'Blog Single Left Sidebar', 'sitefull'=>'Blog Single Full Width', 'nosidebar'=>'Blog Single No Sidebar') );	
		
	$options[] = array(
		'name' => __('Woocommerce Page Layout', 'skt-black'),
		'desc' => __('Select layout. eg:right-sidebar, left-sidebar, full-width', 'skt-black'),
		'id' => 'woocommercelayout',
		'type' => 'select',
		'std' => 'woocommercesitefull',
		'options' => array('woocommerceright'=>'Woocommerce Right Sidebar', 'woocommerceleft'=>'Woocommerce Left Sidebar', 'woocommercesitefull'=>'Woocommerce Full Width') );
		
	$options[] = array(
		'name' => __('Responsive View Menu Text Changeable', 'skt-black'),
		'desc' => __('Change menu text on responsive view', 'skt-black'),
		'id' => 'menutextchange',
		'std' => 'Menu',
		'type' => 'text');	
		
		
	$options[] = array(
		'name' => __('Custom Excerpt Length', 'skt-black'),	
		'desc' => __('Select excerpt length for home page latest news posts', 'skt-black'),
		'id' => 'hmlatestpostslength',
		'std' => '20',
		'type' => 'text');
		
	$options[] = array(		
		'desc' => __('Select excerpt length for testimonials', 'skt-black'),
		'id' => 'testimonialslength',
		'std' => '20',
		'type' => 'text');	
		
	$options[] = array(		
		'desc' => __('Select excerpt length for team member boxes', 'skt-black'),
		'id' => 'teamexcerptlength',
		'std' => '20',
		'type' => 'text');
		
	$options[] = array(		
		'desc' => __('Select excerpt length for footer recent posts', 'skt-black'),
		'id' => 'footerexcerptlength',
		'std' => '10',
		'type' => 'text');				
		
	$options[] = array(		
		'desc' => __('Select excerpt length for blog posts templates', 'skt-black'),
		'id' => 'blogexcerptlength',
		'std' => '80',
		'type' => 'text');
		
									
		
	$options[] = array(
		'name' => __('Read More Button Text', 'skt-black'),	
		'desc' => __('Change read more button text for footer recent posts', 'skt-black'),
		'id' => 'ftrreadmoretext',
		'std' => 'Read More...',
		'type' => 'text');	
		
	$options[] = array(		
		'desc' => __('Change read more button text for blog posts templates', 'skt-black'),
		'id' => 'blogreadmoretext',
		'std' => 'Read More &raquo;',
		'type' => 'text');
					


	//Layout Settings
	$options[] = array(
		'name' => __('Sections', 'skt-black'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Number of Sections', 'skt-black'),
		'desc' => __('Select number of sections', 'skt-black'),
		'id' => 'numsection',
		'type' => 'select',
		'std' => '10',
		'options' => array_combine(range(1,30), range(1,30)) );

	$numsecs = of_get_option( 'numsection', 10 );

	for( $n=1; $n<=$numsecs; $n++){
		$options[] = array(
			'desc' => __("<h3>Section ".$n."</h3>", 'skt-black'),
			'class' => 'toggle_title',
			'type' => 'info');	
	
		$options[] = array(
			'name' => __('Section Title', 'skt-black'),
			'id' => 'sectiontitle'.$n,
			'std' => ( ( isset($section_text[$n]['section_title']) ) ? $section_text[$n]['section_title'] : '' ),
			'type' => 'text');

		$options[] = array(
			'name' => __('Section ID', 'skt-black'),
			'desc'	=> __('Enter your section ID here. SECTION ID MUST BE IN SMALL LETTERS ONLY AND DO NOT ADD SPACE OR SYMBOL.'),
			'id' => 'menutitle'.$n,
			'std' => ( ( isset($section_text[$n]['menutitle']) ) ? $section_text[$n]['menutitle'] : '' ),
			'type' => 'text');

		$options[] = array(
			'name' => __('Section Background Color', 'skt-black'),
			'desc' => __('Select background color for section', 'skt-black'),
			'id' => 'sectionbgcolor'.$n,
			'std' => ( ( isset($section_text[$n]['bgcolor']) ) ? $section_text[$n]['bgcolor'] : '' ),
			'type' => 'color');
			
		$options[] = array(
			'name' => __('Background Image', 'skt-black'),
			'id' => 'sectionbgimage'.$n,
			'class' => '',
			'std' => ( ( isset($section_text[$n]['bgimage']) ) ? $section_text[$n]['bgimage'] : '' ),
			'type' => 'upload');

		$options[] = array(
			'name' => __('Section CSS Class', 'skt-black'),
			'desc' => __('Set class for this section.', 'skt-black'),
			'id' => 'sectionclass'.$n,
			'std' => ( ( isset($section_text[$n]['class']) ) ? $section_text[$n]['class'] : '' ),
			'type' => 'text');
			
		$options[] = array(
			'name'	=> __('Hide Section', 'skt-black'),
			'desc'	=> __('Check to hide this section', 'skt-black'),
			'id'	=> 'hidesec'.$n,
			'type'	=> 'checkbox',
			'std'	=> '');

		$options[] = array(
			'name' => __('Section Content', 'skt-black'),
			'id' => 'sectioncontent'.$n,
			'std' => ( ( isset($section_text[$n]['content']) ) ? $section_text[$n]['content'] : '' ),
			'type' => 'editor');
	}


	//SLIDER SETTINGS
	$options[] = array(
		'name' => __('Homepage Slider', 'skt-black'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('Inner Page Banner', 'skt-black'),
		'desc' => __('Upload inner page banner for site', 'skt-black'),
		'id' => 'innerpagebanner',
		'class' => '',
		'std'	=> get_template_directory_uri()."/images/contact-banner.jpg",
		'type' => 'upload');	
		
	$options[] = array(
		'name' => __('Slider Effects and Timing', 'skt-black'),
		'desc' => __('Select slider effect.','skt-black'),
		'id' => 'slideefect',
		'std' => 'fade',
		'type' => 'select',
		'options' => array('random'=>'Random', 'fade'=>'Fade', 'fold'=>'Fold', 'sliceDown'=>'Slide Down', 'sliceDownLeft'=>'Slide Down Left', 'sliceUp'=>'Slice Up', 'sliceUpLeft'=>'Slice Up Left', 'sliceUpDown'=>'Slice Up Down', 'sliceUpDownLeft'=>'Slice Up Down Left', 'slideInRight'=>'SlideIn Right', 'slideInLeft'=>'SlideIn Left', 'boxRandom'=>'Box Random', 'boxRain'=>'Box Rain', 'boxRainReverse'=>'Box Rain Reverse', 'boxRainGrow'=>'Box Rain Grow', 'boxRainGrowReverse'=>'Box Rain Grow Reverse' ));
		
	$options[] = array(
		'desc' => __('Animation speed should be multiple of 100.', 'skt-black'),
		'id' => 'slideanim',
		'std' => 500,
		'type' => 'text');
		
	$options[] = array(
		'desc' => __('Add slide pause time.', 'skt-black'),
		'id' => 'slidepause',
		'std' => 3000,
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Slide Controllers', 'skt-black'),
		'desc' => __('Hide/Show Direction Naviagtion of slider.','skt-black'),
		'id' => 'slidenav',
		'std' => 'true',
		'type' => 'select',
		'options' => array('true'=>'Show', 'false'=>'Hide'));
		
	$options[] = array(
		'desc' => __('Hide/Show pager of slider.','skt-black'),
		'id' => 'slidepage',
		'std' => 'false',
		'type' => 'select',
		'options' => array('true'=>'Show', 'false'=>'Hide'));
		
	$options[] = array(
		'desc' => __('Pause Slide on Hover.','skt-black'),
		'id' => 'slidepausehover',
		'std' => 'false',
		'type' => 'select',
		'options' => array('true'=>'Yes', 'false'=>'No'));
		
	$options[] = array(
		'name' => __('Use any slider plugin shortcode without php tag', 'skt-black'),
		'desc' => __('you add any slider pluging shortcode here', 'skt-black'),
		'id' => 'slidershortcode',
		'std' => '',
		'type' => 'textarea');	
		
	$options[] = array(
		'name'	=> __('Contact us Button on Slider','skt-black'),
		'desc' => __('Add link for the contact us button in slider', 'skt-black'),
		'id' => 'contactlink',
		'std' => '<a class="contact" href="#">Contact Us</a>',
		'type' => 'textarea');
		
	$options[] = array(
		'name' => __('Slider Image 1', 'skt-black'),
		'desc' => __('First Slide', 'skt-black'),
		'id' => 'slide1',
		'class' => '',
		'std' => get_template_directory_uri()."/images/slides/slider1.jpg",
		'type' => 'upload');
	
	$options[] = array(
		'desc' => __('Title', 'skt-black'),
		'id' => 'slidetitle1',
		'std' => 'SKT Black',
		'type' => 'text');
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'skt-black'),
		'id' => 'slidedesc1',
		'std' => 'Aliquam vitae nunc nibh. Nam sollicitudin orci vel eros vulputate vestibulum.',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Read More Button Text', 'skt-black'),
		'id' => 'slidebutton1',
		'std' => 'Read More &raquo;',
		'type' => 'text');			
		
	$options[] = array(
		'desc' => __('Slide Url', 'skt-black'),
		'id' => 'slideurl1',
		'std' => '#',
		'type' => 'text');		
		
	
	$options[] = array(
		'name' => __('Slider Image 2', 'skt-black'),
		'desc' => __('Second Slide', 'skt-black'),
		'class' => '',
		'id' => 'slide2',
		'std' => get_template_directory_uri()."/images/slides/slider2.jpg",
		'type' => 'upload');
	
	$options[] = array(
		'desc' => __('Title', 'skt-black'),
		'id' => 'slidetitle2',
		'std' => 'Support 24x7',
		'type' => 'text');	
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'skt-black'),
		'id' => 'slidedesc2',
		'std' => 'Sed rhoncus euismod risus tristique imperdiet Morbi fringilla.',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Read More Button Text', 'skt-black'),
		'id' => 'slidebutton2',
		'std' => 'Read More &raquo;',
		'type' => 'text');			
		
	$options[] = array(
		'desc' => __('Slide Url', 'skt-black'),
		'id' => 'slideurl2',
		'std' => '#',
		'type' => 'text');	
	
		
	$options[] = array(
		'name' => __('Slider Image 3', 'skt-black'),
		'desc' => __('Third Slide', 'skt-black'),
		'id' => 'slide3',
		'class' => '',
		'std' => get_template_directory_uri()."/images/slides/slider3.jpg",
		'type' => 'upload');	
	
	$options[] = array(
		'desc' => __('Title', 'skt-black'),
		'id' => 'slidetitle3',
		'std' => 'Premium Theme',
		'type' => 'text');	
		
	$options[] = array(
		'desc' => __('Description or Tagline', 'skt-black'),
		'id' => 'slidedesc3',
		'std' => 'Proin id sem et diam imperdiet interdum. Pellentesque sollicitudin, quam ac scelerisque dictum, urna quam posuere erat.',
		'type' => 'textarea');	
		
	$options[] = array(
		'desc' => __('Read More Button Text', 'skt-black'),
		'id' => 'slidebutton3',
		'std' => 'Read More &raquo;',
		'type' => 'text');		
		
	$options[] = array(
		'desc' => __('Slide Url', 'skt-black'),
		'id' => 'slideurl3',
		'std' => '#',
		'type' => 'text');
			
	
	$options[] = array(
		'name' => __('Slider Image 4', 'skt-black'),
		'desc' => __('Fourth Slide', 'skt-black'),
		'id' => 'slide4',
		'class' => '',
		'std' => '',
		'type' => 'upload');	
		
	$options[] = array(
		'desc' => __('Title', 'skt-black'),
		'id' => 'slidetitle4',
		'std' => '',
		'type' => 'text');
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'skt-black'),
		'id' => 'slidedesc4',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Read More Button Text', 'skt-black'),
		'id' => 'slidebutton4',
		'std' => '',
		'type' => 'text');			
		
	$options[] = array(
		'desc' => __('Slide Url', 'skt-black'),
		'id' => 'slideurl4',
		'std' => '',
		'type' => 'text');				
	
	$options[] = array(
		'name' => __('Slider Image 5', 'skt-black'),
		'desc' => __('Fifth Slide', 'skt-black'),
		'id' => 'slide5',
		'class' => '',
		'std' => '',
		'type' => 'upload');	
		
	$options[] = array(
		'desc' => __('Title', 'skt-black'),
		'id' => 'slidetitle5',
		'std' => '',
		'type' => 'text');	
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'skt-black'),
		'id' => 'slidedesc5',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Read More Button Text', 'skt-black'),
		'id' => 'slidebutton5',
		'std' => '',
		'type' => 'text');		
		
	$options[] = array(
		'desc' => __('Slide Url', 'skt-black'),
		'id' => 'slideurl5',
		'std' => '',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Slider Image 6', 'skt-black'),
		'desc' => __('Sixth Slide', 'skt-black'),
		'id' => 'slide6',
		'class' => '',
		'std' => '',
		'type' => 'upload');	
		
	$options[] = array(
		'desc' => __('Title', 'skt-black'),
		'id' => 'slidetitle6',
		'std' => '',
		'type' => 'text');	
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'skt-black'),
		'id' => 'slidedesc6',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Read More Button Text', 'skt-black'),
		'id' => 'slidebutton6',
		'std' => '',
		'type' => 'text');			
		
	$options[] = array(
		'desc' => __('Slide Url', 'skt-black'),
		'id' => 'slideurl6',
		'std' => '',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Slider Image 7', 'skt-black'),
		'desc' => __('Seventh Slide', 'skt-black'),
		'id' => 'slide7',
		'class' => '',
		'std' => '',
		'type' => 'upload');	
		
	$options[] = array(
		'desc' => __('Title', 'skt-black'),
		'id' => 'slidetitle7',
		'std' => '',
		'type' => 'text');	
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'skt-black'),
		'id' => 'slidedesc7',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Read More Button Text', 'skt-black'),
		'id' => 'slidebutton7',
		'std' => '',
		'type' => 'text');			
		
	$options[] = array(
		'desc' => __('Slide Url', 'skt-black'),
		'id' => 'slideurl7',
		'std' => '',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Slider Image 8', 'skt-black'),
		'desc' => __('Eighth Slide', 'skt-black'),
		'id' => 'slide8',
		'class' => '',
		'std' => '',
		'type' => 'upload');	
		
	$options[] = array(
		'desc' => __('Title', 'skt-black'),
		'id' => 'slidetitle8',
		'std' => '',
		'type' => 'text');	
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'skt-black'),
		'id' => 'slidedesc8',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Read More Button Text', 'skt-black'),
		'id' => 'slidebutton8',
		'std' => '',
		'type' => 'text');		
		
	$options[] = array(
		'desc' => __('Slide Url', 'skt-black'),
		'id' => 'slideurl8',
		'std' => '',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Slider Image 9', 'skt-black'),
		'desc' => __('Ninth Slide', 'skt-black'),
		'id' => 'slide9',
		'class' => '',
		'std' => '',
		'type' => 'upload');	
		
	$options[] = array(
		'desc' => __('Title', 'skt-black'),
		'id' => 'slidetitle9',
		'std' => '',
		'type' => 'text');	
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'skt-black'),
		'id' => 'slidedesc9',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Read More Button Text', 'skt-black'),
		'id' => 'slidebutton9',
		'std' => '',
		'type' => 'text');		
		
	$options[] = array(
		'desc' => __('Slide Url', 'skt-black'),
		'id' => 'slideurl9',
		'std' => '',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Slider Image 10', 'skt-black'),
		'desc' => __('Tenth Slide', 'skt-black'),
		'id' => 'slide10',
		'class' => '',
		'std' => '',
		'type' => 'upload');	
		
	$options[] = array(
		'desc' => __('Title', 'skt-black'),
		'id' => 'slidetitle10',
		'std' => '',
		'type' => 'text');	
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'skt-black'),
		'id' => 'slidedesc10',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Read More Button Text', 'skt-black'),
		'id' => 'slidebutton10',
		'std' => '',
		'type' => 'text');		
	
	$options[] = array(
		'desc' => __('Slide Url', 'skt-black'),
		'id' => 'slideurl10',
		'std' => '',
		'type' => 'text');

	//Footer SETTINGS
	$options[] = array(
		'name' => __('Footer', 'skt-black'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('Footer About Section', 'skt-black'),
		'desc' => __('About text title.', 'skt-black'),
		'id' => 'footerabttitle',
		'std' => 'About SKT Black',
		'type' => 'text');

	$options[] = array(
		'desc' => __('Some text for footer of your site, you would like to display in the footer.', 'skt-black'),
		'id' => 'footerabttext',
		'std' => 'Donec ut ex ac nulla pellentesque mollis in a enim. Praesent placerat sapien mauris, vitae sodales tellus venenatis ac. Suspendisse suscipit velit id ultricies auctor. Duis turpis arcu, aliquet sed sollicitudin sed, porta quis urna. Quisque velit nibh, egestas et erat a, vehicula interdum augue. Morbi ut elementum justo. Sed eu nibh orci. Vivamus elementum erat orci. Curabitur consequat convallis dapibus.',
		'type' => 'textarea');
		
	$options[] = array(
		'name' => __('Footer Recent Posts', 'skt-black'),
		'desc' => __('Footer recent post title.', 'skt-black'),
		'id' => 'recenttitle',
		'std' => 'Recent Posts',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Footer Address Title', 'skt-black'),
		'desc' => __('Footer Address title.', 'skt-black'),
		'id' => 'addresstitle',
		'std' => 'SKT Black',
		'type' => 'text');
		
	$options[] = array(
		'desc' => __('Add company address here.', 'skt-black'),
		'id' => 'address',
		'std' => 'Street 238,52 tempor Donec ultricies mattis nulla, suscipit risus tristique ut.',
		'type' => 'text');
		
	$options[] = array(
		'desc' => __('Add phone number here.', 'skt-black'),
		'id' => 'phone',
		'std' => '+1 500 000 0000',
		'type' => 'text');
		
	$options[] = array(
		'desc' => __('Add email address here.', 'skt-black'),
		'id' => 'email',
		'std' => 'demo@lorem.com',
		'type' => 'text');
		
	$options[] = array(
		'desc' => __('Add company url here without http://.', 'skt-black'),
		'id' => 'weblink',
		'std' => 'www.sktthemes.net',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Footer Copyright', 'skt-black'),
		'desc' => __('Copyright Text for your site.', 'skt-black'),
		'id' => 'copytext',
		'std' => '&copy; 2014 SKT Black. All Rights Reserved',
		'type' => 'text');
		
	$options[] = array(
		'desc' => __('Footre Text Link', 'skt-black'),
		'id' => 'ftlink',
		'std' => 'Design by <a href="http://www.sktthemes.net/" target="_blank">SKT  Themes</a>',
		'type' => 'textarea',);

	//Short codes
	$options[] = array(
		'name' => __('Short Codes', 'skt-black'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Services Box', 'skt-black'),
		'desc' => __('<pre>
[services title="Title here" bold="Bold text here" icon="Icon URL here"]
	Your content here...
[/services]
</pre>', 'skt-black'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Read More Button', 'skt-black'),
		'desc' => __('<pre>[readmore-link align="center" button="Read More" links="#"]</pre>', 'skt-black'),
		'type' => 'info');	
		
		
	$options[] = array(
		'name' => __('Latest posts', 'skt-black'),
		'desc' => __('<pre>
[latestposts show="2"]
</pre>', 'skt-black'),
		'type' => 'info');
		
		
	$options[] = array(
		'name' => __('Testimonial', 'skt-black'),
		'desc' => __('<pre>
[testimonials show="2"]
</pre>', 'skt-black'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Statistics', 'skt-black'),
		'desc' => __('[stat_main]
					[stat value="100"]Clients[/stat]
			[/stat_main]', 'skt-black'),
		'type' => 'info');
	
	$options[] = array(
		'name' => __('Skills', 'skt-black'),
		'desc' => __('[skill title="Coding" percent="90" bgcolor="#ff8a00"]', 'skt-black'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Team', 'skt-black'),
		'desc' => __('[ourteam show="4"]', 'skt-black'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Gallery', 'skt-black'),
		'desc' => __('[photogallery filter="true" show="8"]', 'skt-black'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Newsletter', 'skt-black'),
		'desc' => __('[newsletter title="Sign Up Our" highlight="Newsletter"]Stay updated with latest news from SKT Black[/newsletter]', 'skt-black'),
		'type' => 'info');

	$options[] = array(
		'name' => __('2 Column Content', 'skt-black'),
		'desc' => __('<pre>
[column_content type="one_half"]
	Column 1 Content goes here...
[/column_content]

[column_content type="one_half_last"]
	Column 2 Content goes here...
[/column_content]
</pre>', 'skt-black'),
		'type' => 'info');	

	$options[] = array(
		'name' => __('3 Column Content', 'skt-black'),
		'desc' => __('<pre>
[column_content type="one_third"]
	Column 1 Content goes here...
[/column_content]

[column_content type="one_third"]
	Column 2 Content goes here...
[/column_content]

[column_content type="one_third_last"]
	Column 3 Content goes here...
[/column_content]
</pre>', 'skt-black'),
		'type' => 'info');	

	$options[] = array(
		'name' => __('4 Column Content', 'skt-black'),
		'desc' => __('<pre>
[column_content type="one_fourth"]
	Column 1 Content goes here...
[/column_content]

[column_content type="one_fourth"]
	Column 2 Content goes here...
[/column_content]

[column_content type="one_fourth"]
	Column 3 Content goes here...
[/column_content]

[column_content type="one_fourth_last"]
	Column 4 Content goes here...
[/column_content]
</pre>', 'skt-black'),
		'type' => 'info');	

	$options[] = array(
		'name' => __('5 Column Content', 'skt-black'),
		'desc' => __('<pre>
[column_content type="one_fifth"]
	Column 1 Content goes here...
[/column_content]

[column_content type="one_fifth"]
	Column 2 Content goes here...
[/column_content]

[column_content type="one_fifth"]
	Column 3 Content goes here...
[/column_content]

[column_content type="one_fifth"]
	Column 4 Content goes here...
[/column_content]

[column_content type="one_fifth_last"]
	Column 5 Content goes here...
[/column_content]
</pre>', 'skt-black'),
		'type' => 'info');	

	$options[] = array(
		'name' => __('Clear', 'skt-black'),
		'desc' => __('<pre>
[clear]
</pre>', 'skt-black'),
		'type' => 'info');	

	$options[] = array(
		'name' => __('HR / Horizontal separation line', 'skt-black'),
		'desc' => __('<pre>
[hr] or &lt;hr&gt;
</pre>', 'skt-black'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Separator / blank space', 'skt-black'),
		'desc' => __('<pre>
[separator height="20"]
</pre>', 'skt-black'),
		'type' => 'info');	

	$options[] = array(
		'name' => __('Tabs', 'skt-black'),
		'desc' => __('<pre>
[tabs]
	[tab title="TAB TITLE 1"]
		TAB CONTENT 1
	[/tab]
	[tab title="TAB TITLE 2"]
		TAB CONTENT 2
	[/tab]
	[tab title="TAB TITLE 3"]
		TAB CONTENT 3
	[/tab]
[/tabs]
</pre>', 'skt-black'),
		'type' => 'info');


	$options[] = array(
		'name' => __('Toggle Content', 'skt-black'),
		'desc' => __('<pre>
[toggle_content title="Toggle Title 1"]
	Toggle content 1...
[/toggle_content]
[toggle_content title="Toggle Title 2"]
	Toggle content 2...
[/toggle_content]
[toggle_content title="Toggle Title 3"]
	Toggle content 3...
[/toggle_content]
</pre>', 'skt-black'),
		'type' => 'info');


	$options[] = array(
		'name' => __('Accordion Content', 'skt-black'),
		'desc' => __('<pre>
[accordion]
	[accordion_content title="ACCORDION TITLE 1"]
		ACCORDION CONTENT 1
	[/accordion_content]
	[accordion_content title="ACCORDION TITLE 2"]
		ACCORDION CONTENT 2
	[/accordion_content]
	[accordion_content title="ACCORDION TITLE 3"]
		ACCORDION CONTENT 3
	[/accordion_content]
[/accordion]
</pre>', 'skt-black'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Gradient Button - Small', 'skt-black'),
		'desc' => __('<pre>
[gradient_button size="small" bg_color="#e00" color="#fff" text="Medium Gradient Button" title="Medium Gradient Button" url="" position="left"]
</pre>', 'skt-black'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Gradient Button - Medium', 'skt-black'),
		'desc' => __('<pre>
[gradient_button size="medium" bg_color="#060" color="#fff" text="Medium Gradient Button" title="Medium Gradient Button" url="" position="left"]
</pre>', 'skt-black'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Gradient Button - Large', 'skt-black'),
		'desc' => __('<pre>
[gradient_button size="large" bg_color="#026" color="#fff" text="Large Gradient Button" title="Large Gradient Button" url="" position="left"]
</pre>', 'skt-black'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Gradient Button - Xtra Large', 'skt-black'),
		'desc' => __('<pre>
[gradient_button size="x-large" bg_color="#00ccff" color="#fff" text="Extra Large Simple Button" title="Extra Large Simple Button" url="" position="left"]
</pre>', 'skt-black'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Simple Button - Small', 'skt-black'),
		'desc' => __('<pre>
[simple_button size="small" bg_color="#c00" color="#fff" text="Small Simple Button" title="Small Simple Button" url="#" position="left"]
</pre>', 'skt-black'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Simple Button - Medium', 'skt-black'),
		'desc' => __('<pre>
[simple_button size="medium" bg_color="#060" color="#fff" text="Medium Simple Button" title="Medium Simple Button" url="" position="left"]
</pre>', 'skt-black'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Simple Button - Large', 'skt-black'),
		'desc' => __('<pre>
[simple_button size="large" bg_color="#026" color="#fff" text="Large Simple Button" title="Large Simple Button" url="" position="left"]
</pre>', 'skt-black'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Simple Button - Xtra Large', 'skt-black'),
		'desc' => __('<pre>
[simple_button size="x-large" bg_color="#00ccff" color="#fff" text="Extra Large Simple Button" title="Extra Large Simple Button" url="" position="left"]
</pre>', 'skt-black'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Round Button - Light', 'skt-black'),
		'desc' => __('<pre>
[round_button style="light" text="Round Button" title="Round Button" url="" position="left"]
</pre>', 'skt-black'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Round Button - Dark', 'skt-black'),
		'desc' => __('<pre>
[round_button style="dark" text="Round Button" title="Round Button" url="" position="left"]
</pre>', 'skt-black'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Message Box - Success', 'skt-black'),
		'desc' => __('<pre>
[message type="success"]This is a sample of the \'success\' style message box shortcode. To use this style use the following shortcode[/message]
</pre>', 'skt-black'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Message Box - Error', 'skt-black'),
		'desc' => __('<pre>
[message type="error"]This is a sample of the \'error\' style message box shortcode. To use this style use the following shortcode.[/message]
</pre>', 'skt-black'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Message Box - Warning', 'skt-black'),
		'desc' => __('<pre>
[message type="warning"]This is a sample of the \'warning\' style message box shortcode. To use this style use the following shortcode.[/message]
</pre>', 'skt-black'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Message Box - Info', 'skt-black'),
		'desc' => __('<pre>
[message type="info"]This is a sample of the \'info\' style message box shortcode. To use this style use the following shortcode.[/message]
</pre>', 'skt-black'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Message Box - About', 'skt-black'),
		'desc' => __('<pre>
[message type="about"]This is a sample of the \'about\' style message box shortcode. To use this style use the following shortcode.[/message]
</pre>', 'skt-black'),
		'type' => 'info');

	$options[] = array(
		'name' => __('List Styles', 'skt-black'),
		'desc' => __('<pre>
[unordered_list style="list-1"]&lt;li&gt;List style 1&lt;/li&gt;[/unordered_list]
</pre>
<br />You can use above shortcode OR simply add class to ul. You can choose from list-1 to list-10 styles.<br />
<pre>
&lt;ul class="list-1"&gt;&lt;li&gt;List style 1&lt;/li&gt;&lt;/ul&gt;
</pre>
', 'skt-black'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Code', 'skt-black'),
		'desc' => __('[code type="php/html"]
		Your code here.
		[/code] 
', 'skt-black'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Pullquote', 'skt-black'),
		'desc' => __('[pullquote align="left/right"]
		Your quote text...
		[/pullquote] 
', 'skt-black'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Horizontal Separator', 'skt-black'),
		'desc' => __('[hr_top] 
', 'skt-black'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Dropcap', 'skt-black'),
		'desc' => __('[dropcap]L[/dropcap] 
', 'skt-black'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Search Form', 'skt-black'),
		'desc' => __('[searchform] 
', 'skt-black'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Contact Form', 'skt-black'),
		'desc' => __('[contactform to_email="test@example.com" title="Contact Form"] 
', 'skt-black'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Pricing', 'skt-black'),
		'desc' => __('<pre>
[pricing_table columns="4"]
	[price_column highlight="no" bgcolor="#003366"]
		[price_header]Basic[/price_header]
		[price_row]&lt;strong&gt;$49.99 &lt;br /&gt;Per month&lt;/strong&gt;[/price_row]
		[price_row]5GB Bandwidth[/price_row]
		[price_row]1GB Storage[/price_row]
		[price_row]1 Domain[/price_row]
		[price_row]10 Email Accounts[/price_row]
		[price_footer link="#1"]Buy Basic[/price_footer]
	[/price_column][price_column highlight="yes" bgcolor="#990000"]
		[price_header]Premium[/price_header]
		[price_row]&lt;strong&gt;$99.99 &lt;br /&gt;Per month&lt;/strong&gt;[/price_row]
		[price_row]20GB Bandwidth[/price_row]
		[price_row]5GB Storage[/price_row]
		[price_row]5 Domains[/price_row]
		[price_row]25 Email Accounts[/price_row]
		[price_footer link="#2"]Buy Premium[/price_footer]
	[/price_column][price_column highlight="no" bgcolor="#83672b"]
		[price_header]Professional[/price_header]
		[price_row]&lt;strong&gt;$149.99 &lt;br /&gt;Per month&lt;/strong&gt;[/price_row]
		[price_row]50GB Bandwidth[/price_row]
		[price_row]10GB Storage[/price_row]
		[price_row]20 Domains[/price_row]
		[price_row]50 Email Accounts[/price_row]
		[price_footer link="#3"]Buy Professional[/price_footer]
	[/price_column][price_column highlight="no"]
		[price_header]Ultimate[/price_header]
		[price_row]&lt;strong&gt;$199.99 &lt;br /&gt;Per month&lt;/strong&gt;[/price_row]
		[price_row]Unlimited Bandwidth[/price_row]
		[price_row]Unlimited Storage[/price_row]
		[price_row]50 Domains[/price_row]
		[price_row]100 Email Accounts[/price_row]
		[price_footer link="#4"]Buy Ultimate[/price_footer]
	[/price_column]
[/pricing_table]
</pre>
', 'skt-black'),
		'type' => 'info');

	// Support					
	$options[] = array(
		'name' => __('Our Themes', 'skt-black'),
		'type' => 'heading');

	$options[] = array(
		'desc' => __('SKT Black WordPress theme has been Designed and Created by SKT Themes.', 'skt-black'),
		'type' => 'info');	

	 $options[] = array(
		'desc' => __('<a href="'.esc_url('http://sktthemes.net/').'" target="_blank"><img src="'.get_template_directory_uri().'/images/sktskill.jpg"></a>', 'skt-black'),
		'type' => 'info');	

	return $options;
}