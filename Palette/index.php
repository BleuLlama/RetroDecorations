 <?php
/* 

Palette browser thing
- scott lawrence
yorgle@gmail.com

A part of the RetroDecorations repository
	https://github.com/BleuLlama/RetroDecorations

*/


$version = "v1.04 2020-03-10";
/*
	v1.04 2020-03-10 - SL - more C64 palettes, up/down arrow to go through palettes
	v1.03 2020-03-07 - SL - Amiga 3.x colors, graphicraft
	v1.02 2020-03-06 - SL - lots more palettes, groups for the dropdown
	v1.01 2020-03-06 - SL - version labeling, footer, json export. fixed col widths 
	v1.00 2020-03-05 - SL - inital release to teh webz
*/

$palettes = [

	"Amethyst",

	'Amethyst' => [
		'name' => 'Amethyst (lo-res)',
		'credits' => [
			'from youtube video about Amethyst AVR computer',
			'colors from apple 2 usesd where applicable'
		],
		'colors' => [ 	'0,black,#000000',
						'1,dark cyan,#004924',
						'2,blue,#241694',
						'3,medium blue,#1764bd',

						'4,red,#660422',
						'5,grey 1,#555555',
						'6,purple,#9129bc',
						'7,light blue,#8171e3',

						'8,dark green,#233c00', /* brown! */
						'9,green,#198b00',
						'10,grey 2,#555555',
						'11,aqua,#46a082',

						'12,orange,#914a00',
						'13,yellow,#82961f',
						'14,pink,#ba6380',
						'15,white,#adadad',
					]
	],


	"Apple",

	'apple2' => [
		'name' => 'Apple ][ (lo-res)',
		'colors' => [ 	'0,black,#000000',
						'1,magenta,#722640',
						'2,dark blue,#40337f',
						'3,purple,#e434fe',

						'4,dark green,#0f5940',
						'5,grey 1,#808080',
						'6,medium blue,#1c9afe',
						'7,light blue,#bfb3ff',

						'8,brown,#404c00',
						'9,orange,#e46502',
						'10,grey 2,#808080',
						'11,pink,#f1a6bf',

						'12,green,#1ccb00',
						'13,yellow,#bfcc80',
						'14,aqua,#8dd9bf',
						'15,white,#ffffff',
					]
	],

	'apple2_hi0' => [
		'name' => 'Apple ][ (hi-res 0)',
		'colors' => [ 	'0,black,#000000',
						'1,purple,#ff00ff',
						'2,green,#00ff00',
						'3,white,#ffffff',
					]
	],
	'apple2_hi1' => [
		'name' => 'Apple ][ (hi-res 1)',
		'colors' => [ 	'0,black,#000000',
						'1,blue,#00afff',
						'2,orange,#ff5001',
						'3,white,#ffffff',
					]
	],



	'mac2' => [
		'name' => 'Mac II',
		'colors' => [
			'0,white,#ffffff',
			'1,yellow,#fbf305',
			'2,orange,#ff6403',
			'3,red,#dd0907',

			'4,magenta,#f20884',
			'5,purple,#4700a5',
			'6,blue,#0000d3',
			'7,cyan,#02abea',

			'8,green,#1fb714',
			'9,dark green,#006412',
			'10,brown,#562c05',
			'11,tan,#90713a',

			'12,light grey,#c0c0c0',
			'13,medium grey,#808080',
			'14,dark grey,#404040',
			'15,black,#000000',
		],
	],


	'maclabels' => [
		'name' => 'Mac Finder Labels',
		'colors' => [
			'0,essential,#ff6400',
			'1,hot,#df1b1b',
			'2,in progress,#f80184',
			'3,cool,#00adef',

			'4,personal,#1600d7',
			'5,project 1,#106310',
			'6,project 2,#522900',
		]
	],

	"Commodore",

	'vic20' => [
		'name' => 'Commodore Vic-20',
		'credits' => [
			'from wikipedia'
		],
		'colors' => [
			'0,black,#000000',
			'1,white,#FFFFFF',
			'2,red,#8d3e37',
			'3,cyan,#72c1c8',

			'4,purple,#80348b',
			'5,green,#56a04a',
			'6,blue,#40318d',
			'7,yellow,#aab95d',

			'8,orange,#895228',
			'9,light orange,#d19d73',
			'10,light red,#b86962',
			'11,light cyan,#87d6dd',

			'12,light purple,#aa5fb6',
			'13,light green,#93df88',
			'14,light blue,#7f71cc',
			'15,light yellow,#fcfdb2',
		],
	],

	'vic20_b' => [
		'name' => 'Commodore Vic-20 (calibrated)',
		'credits' => [
			'from wikipedia'
		],
		'colors' => [
			'0,black,#000000',
			'1,white,#FFFFFF',
			'2,red,#782922',
			'3,cyan,#87d6dd',

			'4,purple,#aa5fb6',
			'5,green,#56a04a',
			'6,blue,#40318d',
			'7,yellow,#bfce73',

			'8,orange,#aa7449',
			'9,light orange,#eabe89',
			'10,light red,#b86962',
			'11,light cyan,#c7ffff',

			'12,light purple,#ea9ff6',
			'13,light green,#94e089',
			'14,light blue,#7f71cc',
			'15,light yellow,#feffb2',
		],
	],

	'commodore64' => [
		'name' => 'Commodore 64',
		'colors' => [
			'0,black,#000,#000000',
			'1,white,#FFF,#FFFFFF',
			'2,red,#800,#7d160e',
			'3,cyan,#AFE,#bcfdee',
			'4,purple,#C4C,#bd52c6',
			'5,green,#0C5,#5cc864',
			'6,blue,#00A,#0013a3',
			'7,yellow,#EE7,#efed88',

			'8,orange,#D85,#d28b5e',
			'9,brown,#640,#614513',
			'10,light red,#F77,#ef7f7b',
			'11,gray 1,#333,#333333',
			'12,gray 2,#777,#777777',
			'13,light green,#AF6,#bdfb7c',
			'14,light blue,#08F,#3489f7',
			'15,gray 3,#BBB,#bbbbbb',
		],
	],
	'commodore64_colodore' => [
		'name' => 'Commodore 64 (Colodore)',
		'credits' => [
			'colodore.com'
		],
		'colors' => [
			'0,black,#000000',
			'1,white,#FFFFFF',
			'2,red,#813338',
			'3,cyan,#75cec8',

			'4,purple,#8e3c97',
			'5,green,#56ac4d',
			'6,blue,#2e2c9b',
			'7,yellow,#edf171',

			'8,orange,#8e5029',
			'9,brown,#553800',
			'10,light red,#c46c71',
			'11,dark grey,#4a4a4a',

			'12,grey,#7b7b7b',
			'13,light green,#a9ff9f',
			'14,light blue,#706deb',
			'15,light grey,#b2b2b2',
		],
	],
	'commodore64_pepto' => [
		'name' => 'Commodore 64 (Pepto)',
		'credits' => [
			'from http://unusedino.de/ec64/technical/misc/vic656x/colors/',
			'Philip "Pepto" Timmermann, <pepto@pepto.de>'
		],
		'colors' => [
			'0,black,#000000',
			'1,white,#FFFFFF',
			'2,red,#68372b',
			'3,cyan,#70A4B2',
			'4,purple,#6f3d86',
			'5,green,#588d43',
			'6,blue,#352879',
			'7,yellow,#b8c76f',
			'8,orange,#6f4f25',
			'9,brown,#433900',
			'10,light red,#9a6759',
			'11,dark grey,#444444',
			'12,grey,#6c6c6c',
			'13,light green,#9ad284',
			'14,light blue,#6c5eb5',
			'15,light grey,#959595',
		],
	],

	'commodore64_rittwage' => [
		'name' => 'Commodore 64 (Rittwage)',
		'credits' => [
			'Pete Rittwage\'s NTSC C64 and 1702 palette V2',
			'Taken from 6567R8 on a 1984 board (250425)'
		],
		'colors' => [
			'0,black,#000000,0',
			'1,white,#FFFFFF,E',
			'2,red,#903040,4',
			'3,cyan,#70A4B2',

			'4,purple,#702bff,8',
			'5,green,#40b710,4',
			'6,blue,#2000bf,4',
			'7,yellow,#e0e060,c',

			'8,orange,#b05030,4',
			'9,brown,#803000,4',
			'10,light red,#ff7b9e,8',
			'11,dark grey,#404040,4',

			'12,grey,#909090,8',
			'13,light green,#90ff90,8',
			'14,light blue,#3060ff,8',
			'15,light grey,#c0c0c0,c',
		],
	],

	'Commodore Amiga',

	'amiga1b' => [
		'name' => 'Amiga 1.1 (lighter)',
		'colors' => [ 	'0,violet-blue,#7070b0',
						'1,white,#f0f0f0',
						'2,black,#000020',
						'3,red-orange,#d05050'
					]
	],
	'amiga1' => [
		'name' => 'Amiga 1.3',
		'colors' => [ 	'0,blue,#0050A0',
						'1,white,#f0f0f0',
						'2,black,#000020',
						'3,orange,#f08020',

						'4,magicwb bright blue,#1000f0',
						'5,magicwb bright magenta,#f000f0',
						'6,magicwb bright cyan,#00f0f0',
						'7,magicwb bright white,#f0f0f0',

						'4,mouse red,#e02020',
						'5,mouse peach,#f0d0b0',
					]
	],
	'amiga2' => [
		'name' => 'Amiga 2.0',
		'colors' => [ 	'0,grey,#a0a0a0',
						'1,black,#000000',
						'2,white,#f0f0f0',
						'3,blue,#6080b0',

						'4,red,#e04040',
						'5,green,#50e050',
						'6,blue,#0040d0',
						'7,orange,#E09000',

						'8,mouse red,#e04040',
						'9,mouse peach,#e0c0c0',
					]
	],

	'amiga3_1_tint' => [
		'name' => 'Amiga 3.x - 1. Tint',
		'colors' => [	'0,tan,#c0b090',
						'1,black,#000020',
						'2,white,#f0f0f0',
						'3,light blue,#6080c0',
						'4,red,#f02030',
						'5,green,#00e030',
						'6,blue,#0030e0',
						'7,orange,#f09000',
		]
	],

	'amiga3_2_pharaoh' => [
		'name' => 'Amiga 3.x - 2. Pharaoh',
		'colors' => [	'0,light blue,#80a0c0',
						'1,black,#000020',
						'2,white,#f0f0f0',
						'3,peach,#f0c090',
						'6,blue,#2000f0',
						'4,red,#f00000',
						'5,green,#00f060',
						'7,dark orange,#e0a000',
		]
	],
	'amiga3_3_sunset' => [
		'name' => 'Amiga 3.x - 3. Sunset',
		'colors' => [	'0,light blue,#80a0c0',
						'1,black,#000020',
						'2,white,#f0f0f0',
						'3,orange,#f09070',
						'6,lime,#c0f000',
						'4,red,#f00020',
						'5,green,#00f000',
						'7,blue,#4040f0',
		]
	],
	'amiga3_4_ocean' => [
		'name' => 'Amiga 3.x - 4. Ocean',
		'colors' => [	'0,cyan,#00b0a0',
						'1,black,#000020',
						'2,white,#e0e0f0',
						'3,blue,#4070a0',
						'6,yellow,#f0f000',
						'4,purple,#6040f0',
						'5,green,#00f000',
						'7,red,#f00000',
		]
	],
	'amiga3_5_steel' => [
		'name' => 'Amiga 3.x - 5. Steel',
		'colors' => [	'0,steel blue,#90b0e0',
						'1,black,#000020',
						'2,white,#f0f0f0',
						'3,dark blue,#5080b0',
						'6,light blue,#a0d0f0',
						'4,orange,#f09000',
						'5,fuscia,#f02080',
						'7,pale green,#a0f080',
		]
	],
	'amiga3_6_chocolate' => [
		'name' => 'Amiga 3.x - 6. Chocolate',
		'colors' => [	'0,cocoa,#a09080',
						'1,semisweet,#302000',
						'2,white,#f0e0e0',
						'3,latte,#f0d0b0',

						'6,red,#f02030',
						'4,green,#00e030',
						'5,light blue,#c0d0f0',
						'7,blue,#0030e0',
		]
	],
	'amiga3_7_pewter' => [
		'name' => 'Amiga 3.x - 7. Pewter',
		'colors' => [	'0,pewter,#c0c080',
						'1,black,#000030',
						'2,white,#f0f0f0',
						'3,light blue,#90aab0',

						'6,red,#f02030',
						'4,green,#00e030',
						'5,pale yellow,#d0f070',
						'7,blue,#0030e0',
		]
	],
	'amiga3_8_wine' => [
		'name' => 'Amiga 3.x - 8. Wine',
		'colors' => [	'0,pale red,#d09090',
						'1,black,#000020',
						'2,white,#f0e0e0',
						'3,dark red,#c06070',

						'6,bright yellow,#d0f070',
						'4,purple,#8030f0',
						'5,green,#10c030',
						'7,cyan,#60e0c0',
		]
	],

	'dpaint' => [
		'name' => 'Deluxe Paint',
		'colors' => [ 	
			'0,black,#000000',
			'1,white,#f0f0f0',
			'2,red,#e00000',
			'3,dark red,#a00000',
			'4,orange,#d08000',
			'5,yellow,#f0e000',
			'6,lime green,#80f000',
			'7,dark green,#008000',

			'8,cyan,#00b060',
			'9,cornflower,#00d0d0',
			'10,light blue,#00a0f0',
			'11,muted blue,#0070c0',
			'12,blue,#2000f0',
			'13,purple,#7000f0',
			'14,magenta,#c000e0',
			'15,dark magenta,#c00080',

			'16,brown,#602000',
			'17,sienna,#e05020',
			'18,light brown,#a05020',
			'19,peach,#f0c0a0',
			'20,gray 3,#303030',
			'21,gray 4,#404040',
			'22,gray 5,#505050',
			'23,gray 6,#606060',

			'24,gray 7,#707070',
			'25,gray 8,#808080',
			'26,gray 9,#909090',
			'27,gray 10,#a0a0a0',
			'28,gray 11,#b0b0b0',
			'29,gray 12,#c0c0c0',
			'30,gray 13,#d0d0d0',
			'31,gray 14,#e0e0e0',
		]
	],

	'graphicraft' => [
		'name' => 'GraphiCraft',
		'colors' => [ 

			'0,black,#000000',
			'1,red,#f00000',
			'2,orange red,#f03000',
			'3,dark orange,#f05000',
			'4,orange,#f08000',
			'5,pale orange,#f0b000',
			'6,mustard,#f0d000',
			'7,yellow,#f0f000',

			'8,pea green,#b0f000',
			'9,lime green,#80e000',
			'10,green,#50d000',
			'11,medium green,#20c000',
			'12,dark green,#00b010',
			'13,cornflower,#00b0e0',
			'14,light cyan,#00d0e0',
			'15,cyan,#10f0b0',

			'16,light blue,#60f0e0',
			'17,saab 92,#60e0e0',
			'18,light purple,#6090f0',
			'19,purple,#6010f0',
			'20,navy blue,#0060d0',
			'21,dark magenta,#9010f0',
			'22,magenta,#d010f0',
			'23,bright magenta,#e010e0',

			'24,light peach,#f0e0f0',
			'25,light tan,#f0d0c0',
			'26,tan,#e0b0a0',
			'27,medium tan,#c09090',
			'28,dark tan,#b08070',
			'29,gray,#d0d0d0',
			'30,dark gray,#a0a0a0',
			'31,light gray,#e0e0e0',
		]
	],

	"Misc Systems",


	'acpc' => [
		'name' => "Amstrad CPC",
		'info' => [
			'colors from wikipedia',
		],
		'colors' => [
			'0,black,#000000',
			'1,blue,#080080',
			'2,bright blue,#1c00ff',
			'3,red,#800000',
			'4,magenta,#800080',
			'5,violet,#8100ff',
			'6,bright red,#ff0000',
			'7,purple,#ff0080',
			'8,bright magenta,#ff00ff',

			'9,green,#008001',
			'10,cyan,#028080',
			'11,sky blue,#0180ff',
			'12,yellow,#818000',
			'13,grey,#808080',
			'14,pale blue,#8080ff',
			'15,orange,#ff8001',
			'16,pink,#ff8080',
			'17,pale magenta,#ff80ff',

			'18,bright green,#00ff00',
			'19,sea green,#00ff80',
			'20,bright cyan,#00ffff',
			'21,lime green,#80ff00',
			'22,pale green,#80ff80',
			'23,pale cyan,#80ffff',
			'24,bright yellow,#ffff00',
			'25,pale yellow,#ffff80',
			'26,bright white,#ffffff',
		]
	],

	'acpc_bas' => [
		'name' => "Amstrad CPC (BASIC colors)",
		'info' => [
			'colors from wikipedia',
		],
		'colors' => 'acpc:'
					. '1,24,20,6,'
					. '26,0,2,8,'
					. '10,12,14,16,'
					. '18,22,1,11'
	],

	'bbcmicro' => [
		'name' => "BBC Micro, Teletext (RGBI)",
		'colors' => [
			'0,black,#000000',
			'1,blue,#1c00ff',
			'2,red,#ff0000',
			'3,magenta,#ff00ff',
			'4,green,#00ff00',
			'5,cyan,#00ffff',
			'6,yellow,#ffff00',
			'7,white,#ffffff'
		]
	],

	'aquarius' => [
		'name' => 'Mattel Aquarius',
		'info' => [
			'color names from the aquarius manual https://www.vdsteenoven.com/aquarius/pfsimple.php',
			'values from wikipedia: https://en.wikipedia.org/wiki/List_of_8-bit_computer_hardware_graphics'
		],
		'colors' => [ 	'0,black,#000000',
						'1,red,#c3001b',
						'2,green,#08bf01',
						'3,yellow,#c8b906',

						'4,blue,#1005b6',
						'5,violet,#b700d1',
						'6,light blue-green,#00c6a4',
						'7,white,#ffffff',

						'8,light gray,#bfbfbf',
						'9,blue-green,#3fa695',
						'10,magenta,#842690',
						'11,dark blue,#050d68',

						'12,light yellow,#b9b156',
						'13,light green,#3b972e',
						'14,orange,#7e182a',
						'15,dark gray(*),#000000',
					]
	],


	'tms9918' => [
		'name' => 'TMS9918 NTSC (TI99, MSX)',
		'info' => [
			'https://atariage.com/forums/topic/155790-tms-9918a9928a9929a-colors/',
			'color names taken from TMS9918 datasheet'
		],
		'colors' => [
			'0,transparent,#00000000',
			'1,black,#000000',
			'2,medium green,#54a937',
			'3,light green,#71d26a',

			'4,dark blue,#2439ce',
			'5,light blue,#5c76f6',
			'6,dark red,#903222',
			'7,cyan,#72e4f4',

			'8,medium red,#c6462f',
			'9,light red,#ef7b62',
			'10,dark yellow,#e1e555',
			'11,light yellow,#d7d587',

			'12,dark green,#3a7826',
			'13,magenta,#c548df',
			'14,gray,#cecece',
			'15,white,#ffffff',
		]
	],
	'tms9928' => [
		'name' => 'TMS9928 NTSC (ColecoVision, Sord M5)',
		'source' => 'datasheet, mame',
		'colors' => [
			'0,transparent,#00000000',
			'1,black,#000000',
			'2,medium green,#21c842',
			'3,light green,#5edc78',

			'4,dark blue,#5455ed',
			'5,light blue,#7d76fc',
			'6,dark red,#d4524d',
			'7,cyan,#42ebf5',

			'8,medium red,#fc5554',
			'9,light red,#ff7978',
			'10,dark yellow,#d4c154',
			'11,light yellow,#e6ce80',

			'12,dark green,#21b03b',
			'13,magenta,#c95bba',
			'14,gray,#cccccc',
			'15,white,#ffffff',
		]
	],

	'zxspectrum' => [
		'name' => "ZX Spectrum",
		'info' => [
			'color names pulled from spectrum manual',
			'3 is "purple, or magenta"',
			'5 is "pale blue, techically called cyan"',
			'bright black. lol'
		],
		'colors' => [
			'0,black,#000000',
			'1,blue,#1600d7',
			'2,red,#d70000',
			'3,purple,#d700d7',
			'4,green,#04d702',
			'5,pale blue,#00d7d7',
			'6,yellow,#d7d702',
			'7,white,#d7d7d7',

			'8,bright black,#000000',
			'9,bright blue,#1c00ff',
			'10,bright red,#ff0000',
			'11,bright purple,#ff00ff',
			'12,bright green,#00ff00',
			'13,bright pale blue,#00ffff',
			'14,bright yellow,#feff00',
			'15,bright white,#ffffff',
		]
	],


	"PC / Windows",

	'pc_cga' => [
		'name' => 'PC - CGA',
		'colors' => [
			'0,black,#000',
			'1,blue,#00A',
			'2,green,#0a0',
			'3,cyan,#0aa',
			'4,red,#a00',
			'5,magenta,#a0a',
			'6,brown,#a50',
			'7,light gray,#aaa',

			'8,dark gray,#555',
			'9,light blue,#55f',
			'10,light green,#5f5',
			'11,light cyan,#5ff',
			'12,light red,#f55',
			'13,light magenta,#f5f',
			'14,yellow,#ff5',
			'15,white,#fff',
		]
	],

	'pc_cga_40l' => [
		'name' => 'PC - CGA (m4, p0, low) (g/r/y)',
		'colors' => 'pc_cga:0,2,4,6',
	],
	'pc_cga_40h' => [
		'name' => 'PC - CGA (m4, p0, high) (g/r/y)',
		'colors' => 'pc_cga:0,10,12,14',
	],

	'pc_cga_41l' => [
		'name' => 'PC - CGA (m4, p1, low) (c/m/w)',
		'colors' => 'pc_cga:0,3,5,7',
	],
	'pc_cga_41h' => [
		'name' => 'PC - CGA (m4, p1, high) (c/m/w)',
		'colors' => 'pc_cga:0,11,13,15',
	],

	'pc_cga_5l' => [
		'name' => 'PC - CGA (m5, low) (c/r/w)',
		'colors' => 'pc_cga:0,3,4,7',
	],
	'pc_cga_5h' => [
		'name' => 'PC - CGA (m5, high) (c/r/w)',
		'colors' => 'pc_cga:0,11,12,15',
	],

	'win16' => [
		'name' => 'Windows (16 color)',
		'colors' => [
			'0,black,#ffffff',
			'1,maroon,#800000',
			'2,green,#008000',
			'3,olive,#808000',

			'4,navy,#000080',
			'5,purple,#800080',
			'6,teal,#008080',
			'7,silver,#c0c0c0',

			'8,gray,#808080',
			'9,red,#ff0000',
			'10,lime,#00ff00',
			'11,yellow,#ffff00',

			'12,blue,#0000ff',
			'13,fuscia,#ff00ff',
			'14,aqua,#00ffff',
			'15,white,#ffffff',
		]
	],


	"Nintendo",

	'dmg01' => [
		'name' => 'Gameboy',
		'info' => [ 'my names. lol'],
		'colors' => [
			'0,Dark Pea Green,#0f390f',
			'1,Medium Pea Green,#316231',
			'2,Pea Green,#8bac0d',
			'3,Bright Pea Green,#9bbc0f',
		]
	],
	'gbc_u' => [
		'name' => 'GBC - Brown (Up)',
		'colors' => [
			'0,black,#000000', '1,brown,#844204',
			'2,peach,#ec9a54', '3,white,#fcfafc',
		]
	],
	'gbc_d' => [
		'name' => 'GBC - Pastel Mix (Down)',
		'colors' => [
			'0,black,#000000', '1,violet,#9c92f4',
			'2,peach,#ec8a8c', '3,pale yellow,#fcfaac',
		]
	],
	'gbc_l' => [
		'name' => 'GBC - Blue (Left)',
		'colors' => [
			'0,black,#000000',
			'1,blue,#0d32fc',
			'2,light blue,#7cabfc', 
			'3,white,#fcfafc',

			'4,dark red,#ac2624',
			'5,light red,#Ec8a8c',
			'6,dark green,#4c8a03',
			'7,green,#00fa03',
		]
	],
	'gbc_r' => [
		'name' => 'GBC - Green (Right)',
		'colors' => [
			'0,black,#000000',
			'1,red,#fc3105',
			'2,green,#00fa03',
			'3,white,#fcfafc',
		]
	],


	'gbc_ua' => [
		'name' => 'GBC - Red (Right+A)',
		'colors' => [
			'0,black,#000000',
			'1,red,#a62624',
			'2,light red,#ec8a8c',
			'3,white,#fcfafc',

			'4,dark green,#4c8a03',
			'5,green,#00fa03',
			'6,blue,#0d32fc',
			'7,light blue,#7cabfc',
		]
	],
	'gbc_da' => [
		'name' => 'GBC - Orange (Down+A)',
		'colors' => [
			'0,black,#000000',
			'1,orange,#fc3105',
			'2,yellow,#f4fe04',
			'3,white,#fcfafc',
		]
	],
	'gbc_la' => [
		'name' => 'GBC - Dark Blue (Left+A)',
		'colors' => [
			'0,black,#000000',
			'1,dark blue,#4432a4',
			'2,light blue,#9c92f4',
			'3,white,#fcfafc',

			'4,dark red,#ac2624',
			'5,light red,#ec8a8c',
			'6,brown,#844204',
			'7,orange,#ec9154',
		]
	],
	'gbc_ra' => [
		'name' => 'GBC - Dark Green (Right+A)',
		'colors' => [
			'0,black,#000000',
			'1,blue,#0d32fc',
			'2,green,#00fa03',
			'3,white,#fcfafc',
			'4,dark red,#ac2624',
			'5,light red,#ec8a8c',
		]
	],

	'gbc_ub' => [
		'name' => 'GBC - Dark Brown (Up+B)',
		'colors' => [
			'0,dark brown,#4c2a04',
			'1,brown,#947a4c',
			'2,dark tan,#c4ae94',
			'3,tan,#fcebe4',

			'4,black,#000000',
			'5,bright brown,#844204',
			'6,peach,#ec9a54',
		]
	],
	'gbc_db' => [
		'name' => 'GBC - Yellow (Down+B)',
		'colors' => [
			'0,black,#000000',
			'1,brown,#844204',
			'2,yellow,#f4fe04',
			'3,white,#fcfafc',

			'4,blue,#0d32fc',
			'5,light blue,#7cabfc',
			'6,dark green,#4c8a03',
			'7,green,#00fa03',
		]
	],
	'gbc_lb' => [
		'name' => 'GBC - Grayscale (Left+B)',
		'colors' => [
			'0,black,#000000',
			'1,dark gray,#727472',
			'2,gray,#bcbabc',
			'3,white,#fcfafc',
		]
	],
	'gbc_rb' => [
		'name' => 'GBC - Inverted (Right+B)',
		'colors' => [
			'0,white,#fcfafc',
			'1,yellow,#f4fe04',
			'2,cyan,#00a2a4',
			'3,black,#030204',
		]
	],
];

$nColors = 32;

function adjustPaletteStruct( $pals )
{
	$group = '';
	foreach( $pals as $key => $p )
	{
		if( is_string( $p )) {
			$group = $p;
		}
		if( !is_string( $p ) ) {
			$pals[ $key ][ 'key' ] = $key;
			$pals[ $key ][ 'group' ] = $group;
			$nc = [];

			if( is_array( $p[ 'colors' ])) {
				foreach( $p[ 'colors' ] as $c )
				{
					$x = explode( ',', $c );
					$xc = [
						'index' => $x[0],
						'name' => $x[1],
						'hex' => $x[2],
						'r' => hexdec( substr( $x[2], 1, 2 )),
						'g' => hexdec( substr( $x[2], 3, 2 )),
						'b' => hexdec( substr( $x[2], 5, 2 )),
						//'x' => $x,
					];

					if( strlen( $x[3] ) == 7 ) {
						$xc[ 'hex' ] = $x[3];
						$xc[ 'r' ] = hexdec( substr( $x[3], 1, 2 ));
						$xc[ 'g' ] = hexdec( substr( $x[3], 3, 2 ));
						$xc[ 'b' ] = hexdec( substr( $x[3], 5, 2 ));
					}
					$nc[] = $xc;
				}
				$pals[ $key ][ 'colors' ] = $nc;
			}
		}
	}

	// expand out reference colors
	foreach( $pals as $key => $p ) {
		if( !is_string( $p ) ) {

			if( !is_array( $p[ 'colors' ])) {
				$ccc = [];

				$px = explode( ':', $p[ 'colors' ] );
				if( count( $px ) > 1 ) {
					$src = $pals[ $px[0] ]['colors'];

					$pc = explode( ',', $px[1] );
					foreach( $pc as $iiic ) {
						$ccc[] = $src[ intval( $iiic ) ];
					}
				}
				$pals[ $key ][ 'colors' ] = $ccc;
			}
		}
	}

	return $pals;
}

function cmp( $a, $b ) {
	return strcmp($a[ 'name' ], $b[ 'name' ]);
}

$palettes = adjustPaletteStruct( $palettes );
?>

<html>

<head> 
	<title>Palette Thing</title>
	<script  
		src="https://code.jquery.com/jquery-3.4.1.min.js"
		integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
		crossorigin="anonymous"></script>
</head>
<style>

body {
	background: #ccc;
	color: #000;
}

td.ink {
	/* width: 12vw; */
	border: 2px solid black;
	height: 12vw;
	padding: 1em;
	text-align: center;
	font-weight: bold;
	border-radius: .5em;
}
th {
	text-align: right;
	padding-right: 1em;
}
table.palette {
	width: 100%;
	table-layout: fixed;
}

table.wide {
	width: 100%;
}
span.caps {
	text-transform: capitalize;
}
span.upper {
	  text-transform: uppercase;
}
.button {
	text-decoration: none;
	padding: .5em;
	background: #ccc;
	color: black;
	font-weight: bold;
	border-style: outset;
	border: 3px solid #888888;
	display: inline-block;
	margin: 0 1em 0 1em;
	border-radius: .5em;
}
.button:hover {
	border-color: #000;
	background: #eee;
	cursor: pointer;
}
.info_sample {
	width: 80%;
	height: 2em;
	background: #333;
	display:block;
}
.swatch { 
	height: 3em;
	border-radius: .5em;
}

.value-bad {
	border: 2px solid red;
	background: #faa;
}

.value-ok {
	border: 2px solid #fff0;
	background: white;
}
.palpicker {
	font-size: larger;
}


.content {
	min-height: calc(100vh - 3.5em);
}
.footer {
	text-align: center;
	border: 1px solid black;
	padding: .5em;
	border-radius: .5em;
	background:#888;
}
.footer > span{
	width:100%;
}

a.boldlink:link,
a.boldlink:visited,
a.boldlink:hover,
a.boldlink:active,
a.boldlink
{
	font-weight:bolder;
	color: black;
}

</style>


<script>
	var palettes = <?=json_encode( $palettes, JSON_PRETTY_PRINT );?>;
	var nColors = <?=$nColors;?>;
</script>

<body>
	<div class="content">
	<br/>
	<br/>
	<table class="wide">
		<tr>
			<td>
				<select id="palpick" class="palpicker">
					<option value="0" disabled>Select one</option>
					<? 
					$group = '';
					foreach( $palettes as $key => $pal ) { 
						if( is_string( $pal )) {
							if( !empty( $group )) {
								echo '</optgroup>';
							}
							$group = $pal;
							?><optgroup label="<?=$group;?>"><?
						} else { ?>
							<option value="<?=$key;?>"><?=$pal['name'];?> (<?=count($pal['colors']);?> colors)</option>
						<? } ?>
					<? } ?>
					</optgroup>
				</select>

				<div class="button" id="exportCSV">Export CSV</div>

				<div class="button" id="exportPPM">Export PPM Image</div>

				<div class="button" id="exportAllJSON">Export All JSON</div>
			</td>
		</tr>

		<tr>
			<td>
				<table class="palette">
					<tr>
						<? for( $i = 0 ; $i < $nColors ; $i++ ) { ?>
							<td id="ink_<?=$i;?>" class="ink" style="display:none;"> <?=$i;?></td>
							<? if(  $i % 8 == 7 ) { ?>
								</tr><tr>
							<? } ?>
						<? } ?>
					</tr>
				</table>
			</td>
		</tr>
	</table>

<div class="swatch"> &nbsp; </div>

	<table class="wide">
		<tr>
			<th> Hex </th>
			<td> <input type="text" id="txt_hex" value="#334455" placeholder="#123 or #112233"> </td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<th> Red </th>
			<td> <input type="text" id="txt_r" value="" placeholder="0..255"> </td>
		</tr>
		<tr>
			<th> Green </th>
			<td> <input type="text" id="txt_g" value="" placeholder="0..255"> </td>
		</tr>
		<tr>
			<th> Blue </th>
			<td> <input type="text" id="txt_b" value="" placeholder="0..255"> </td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<th> RGB </th>
			<td> <input readonly type="text" id="txt_rgb" value="" placeholder="0..255,0..255,0..255"> </td>
		</tr>
	</table>

<div class="swatch"> &nbsp; </div>
</div>
<footer class="footer">
	<span><em>Palette Thing</em> is a part of the <a class="boldlink" 
			target="_blank"
			href="https://github.com/BleuLlama/RetroDecorations">RetroDecorations</a> project.
		&nbsp; // &nbsp;
		<?=$version;?>
		&nbsp; // &nbsp; 
		yorgle@gmail.com</span>
</footer>

</body>
<script>
$(function() {

	function GoodColor(color)
	{
	   var color2="";
	   var result=true;
	   var e=document.getElementById('mydiv');
	   e.style.borderColor="";
	   e.style.borderColor=color;
	   color2=e.style.borderColor;
	   if (color2.length==0){result=false;}
	   e.style.borderColor="";
	   return result;
	}

	function isValidColor(color){
		var $div = $("<div>");
		$div.css("border", "1px solid "+color);
		return ($div.css("border-color")!="")
	}

	function getRGBA(value) {
		// get/create a 0 pixel element at the end of the document, to use to test properties against the client browser
		var e = document.getElementById('test_style_element');
		if (e == null) {
			e = document.createElement('span');
			e.id = 'test_style_element';
			e.style.width = 0;
			e.style.height = 0;
			e.style.borderWidth = 0;
			document.body.appendChild(e);
		}

		// use the browser to get the computed value of the input
		e.style.borderColor = '';
		e.style.borderColor = value;
		if (e.style.borderColor == '') return null;
		var computedStyle = window.getComputedStyle(e);
		var c
		if (typeof computedStyle.borderBottomColor != 'undefined') {
			// as always, MSIE has to make life difficult
			c = window.getComputedStyle(e).borderBottomColor;
		} else {
			c = window.getComputedStyle(e).borderColor;
		}
		var numbersAndCommas = c.replace(new RegExp('[^0-9.,]+','g'),'');
		var values = numbersAndCommas.split(',');
		for (var i = 0; i < values.length; i++)
			values[i] = Number(values[i]);
		if (values.length == 3) values.push(1);

		return values;
	}

	// from https://ourcodeworld.com/articles/read/189/how-to-create-a-file-and-generate-a-download-with-javascript-in-the-browser-without-a-server
	function download( filename, text, type ) {
		if( type === undefined ) {
			type = 'text/plain';
		}

		var element = document.createElement('a');
		element.setAttribute('href', 'data:' + type + ';charset=utf-8,' + encodeURIComponent(text));
		element.setAttribute('download', filename);

		element.style.display = 'none';
		document.body.appendChild(element);

		element.click();

		document.body.removeChild(element);
	}

	function hex_Changed( el ) 
	{
		var valid = isValidColor( el.val() );
		if( valid ) { 
			var rgba = getRGBA( el.val() );
			el.addClass( "value-ok" );
			el.removeClass( "value-bad" );

			$( '#txt_r' ).val( rgba[0] );
			$( '#txt_g' ).val( rgba[1] );
			$( '#txt_b' ).val( rgba[2] );
			$( '#txt_rgb' ).val(  rgba.splice(0,3).join( ',' ) );

			$( ".swatch" ).css( 'background', el.val() );
		} else {
			el.addClass( "value-bad" );
			el.removeClass( "value-ok" );
		}
	}

	function rgb2hex( rgb ){
		rgb = rgb.match(/^rgb((d+),s*(d+),s*(d+))$/);
		return "#" +
			("0" + parseInt(rgb[1],10).toString(16)).slice(-2) +
			("0" + parseInt(rgb[2],10).toString(16)).slice(-2) +
			("0" + parseInt(rgb[3],10).toString(16)).slice(-2);
	}

	function RGB2Color(r,g,b)
	{
	  return '#' + byte2Hex(r) + byte2Hex(g) + byte2Hex(b);
	}

	function byte2Hex (n)
	{
		var nybHexString = "0123456789ABCDEF";
		return String(nybHexString.substr((n >> 4) & 0x0F,1)) + nybHexString.substr(n & 0x0F,1);
	}

	function valRGBOK( val ) {
		if( $.isNumeric( val )) {
			if( val >= 0 && val <= 255 ) {
				return true;
			}
		}
		return false;
	}

	function r_g_b_Changed( el ) {
		var els = [ $( '#txt_r' ), $( '#txt_g' ), $( '#txt_b' ) ];

		var allValid = true;

		$.each( els, function() {
			var valid = valRGBOK( $( this ).val() );

			if( valid ) {
				$(this).addClass( "value-ok" );
				$(this).removeClass( "value-bad" );

			} else {
				$(this).addClass( "value-bad" );
				$(this).removeClass( "value-ok" );
				allValid = false;
			}

		} );

		//# setup the swatch
		var r = $( '#txt_r' ).val();
		var g = $( '#txt_g' ).val();
		var b = $( '#txt_b' ).val();

		if( allValid ) {
			var colorHex = RGB2Color( r,g,b );

			$( ".swatch" ).css( 'background', colorHex );
			$( "#txt_hex" ).val( colorHex );

			$( "#txt_rgb" ).val( '' + r + ',' + g + ',' + b );
		}
	}

	function rgb_Changed( el )
	{
		var rgb = el.val().split( ',' );
		if( !valRGBOK( rgb[0] ) || !valRGBOK( rgb[1] ) || !valRGBOK( rgb[2] ) )
		{
		}
	}


	$( "#txt_hex" ).on( "change input", function() { 
		hex_Changed( $(this) );
	} );

	$( "#txt_r" ).on( "change input", function() { 
		r_g_b_Changed( $(this) );
	} );
	$( "#txt_g" ).on( "change input", function() { 
		r_g_b_Changed( $(this) );
	} );
	$( "#txt_b" ).on( "change input", function() { 
		r_g_b_Changed( $(this) );
	} );
	$( "#txt_rgb" ).on( "change input", function() { 
		rgb_Changed( $(this) );
	} );


	$( "#palpick" ).change( function() {
		var palslug =  $(this).val();
		Palette_install( palslug );
	});

	function Palette_install( val )
	{
		var pal = palettes[ val ];

		for( i=0 ; i<pal.colors.length ; i++ )
		{
			var cc = pal.colors[ i ];

			var ic = $( '#ink_' + i );

			var textColor = "white";
			var v = Math.max( cc.r, Math.max( cc.g, cc.b ));
			if( v >= 180 ) {
				textColor = "black";
			}
			ic.css( 'background-color', cc.hex );
			ic.css( 'color', textColor );
			ic.data( 'name', cc.name );
			ic.data( 'r', cc.r );
			ic.data( 'g', cc.g );
			ic.data( 'b', cc.b );
			ic.data( 'hex', cc.hex );
			ic.html( '' + cc.index 
						+ '<br/><span class="caps">' + cc.name + '</span><br/>' 
						+ '<span class="upper">' + cc.hex + '</span>');
			ic.fadeIn();

			ic.mouseenter( Palette_Enter );
			ic.mouseleave( Palette_Leave );

		}
		for( i = pal.colors.length ; i<nColors ; i++ )
		{
			var ic = $( '#ink_' + i);
			ic.html( '' );
			ic.fadeOut();
		}
	}

	function Palette_Enter() {
		$( '#txt_hex' ).val( $(this).data( 'hex' ));
		$( '#txt_r' ).val( $(this).data( 'r' ));
		$( '#txt_g' ).val( $(this).data( 'g' ));
		$( '#txt_b' ).val( $(this).data( 'b' ));
		$( '.swatch' ).css( 'background', $(this).data( 'hex' ) );

	}

	function Palette_Leave() {
		/*
		$( '#txt_hex' ).text( '' );
		$( '#txt_r' ).text('0');
		$( '#txt_g' ).text('0');
		$( '#txt_b' ).text('0');
		$( '.swatch' ).css( 'background', 'black' );
		*/
	}

	$( "#palpick" ).val( 'mac2' ).change();
	$( "#txt_hex" ).change();

	$( "#exportCSV" ).click( function() {
		var pal = palettes[ $( '#palpick' ).val() ];

		var content = [ 'index,name,red,green,blue,hex'];
		$.each( pal.colors, function() {
			content.push( '' + this.index + ', '
							+ this.name + ', '
							+ pad3( this.r ) + ','
							+ pad3( this.g ) + ',' 
							+ pad3( this.b ) + ','
							+ this.hex );
		});
		content = content.join( '\n' );

		download( pal.key + '.csv', content, 'text/csv' );
	});


	function pad3( str ) {
		str = str.toString();
		return str.length < 4 ? pad3(" " + str) : str;
	}

	$( "#exportAllJSON" ).click( function() {
		var json = JSON.stringify( palettes, null, '\t' );

		console.log( json );
		download( 'palettes.json', json, 'application/json' );
	});

	$( "#exportPPM" ).click( function() {
		var pal = palettes[ $( '#palpick' ).val() ];

		var content = [
			'P3',
			'# ' + pal.name + ' palette',
			'1 ' + pal.colors.length,
			'255'];
		$.each( pal.colors, function() {
			content.push( '' + pad3( this.r ) + ' ' 
							+ pad3( this.g ) + ' ' 
							+ pad3( this.b )
							+ '   # ' + this.index 
							+ ': ' + this.name 
							+ ' - ' + this.hex );
		});

		content = content.join( '\n' );

		download( pal.key + '.ppm', content, 'image/x-portable-pixmap' );
	});

	function nextPalette() {
		var options = $( "#palpick" ).find( 'option' );
		var selected = 0;
		$.each( options, function() {
			if( $(this).val() == $( '#palpick' ).val() ) {
				selected = this.index;
			}
		});
		selected = selected + 1;
		if( selected >= options.length ) { selected = 1; }

		$( "#palpick" ).val( options[selected].value ).change();

	}

	function prevPalette() {
		var options = $( "#palpick" ).find( 'option' );
		var selected = 0;
		$.each( options, function() {
			if( $(this).val() == $( '#palpick' ).val() ) {
				selected = this.index;
			}
		});
		selected = selected -1;
		if( selected < 1 ) { selected = options.length-1; }

		$( "#palpick" ).val( options[selected].value ).change();
	}

	$( "body" ).keydown( function(e){
		if( e.code == 'ArrowUp' ){
			prevPalette();
		} else if( e.code == 'ArrowDown' ) {
			nextPalette();
		}
	});

});
</script>
</html>
