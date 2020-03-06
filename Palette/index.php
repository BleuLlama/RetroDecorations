<?php

/*

  scp index.php warped:umlautllama.com/palettes.php



*/

$palettes = [
	'amiga1' => [
		'name' => 'Amiga 1.3',
		'colors' => [ 	'0,blue,#0050A0',
						'1,white,#f0f0f0',
						'2,black,#000020',
						'3,orange,#f08020'
					]
	],
	'amiga1b' => [
		'name' => 'Amiga 1.1 (lighter)',
		'colors' => [ 	'0,violet-blue,#7070b0',
						'1,white,#f0f0f0',
						'2,black,#000020',
						'3,red-orange,#d05050'
					]
	],
	'amiga2' => [
		'name' => 'Amiga 2.04',
		'colors' => [ 	'0,grey,#a0a0a0',
						'1,black,#000000',
						'2,white,#f0f0f0',
						'3,blue,#6080b0',
					]
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
	'mac2' => [
		'name' => 'Macintosh II',
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



	'tms9918' => [
		'name' => 'TMS9918 NTSC (TI99, MSX)',
		'info' => 'https://atariage.com/forums/topic/155790-tms-9918a9928a9929a-colors/',
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
];

$nColors = 32;

function adjustPaletteStruct( $pals )
{
	foreach( $pals as $key => $p )
	{
		$pals[ $key ][ 'key' ] = $key;
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

	// expand out reference colors
	foreach( $pals as $key => $p ) {
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
	width: 12vw;
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
</style>


<script>
	var palettes = <?=json_encode( $palettes, JSON_PRETTY_PRINT );?>;
	var nColors = <?=$nColors;?>;
</script>

<body>
	<br/>
	<br/>
	<table class="wide">
		<tr>
			<td>
				<select id="palpick" class="palpicker">
					<option value="0" disabled>Select one</option>
					<? foreach( $palettes as $key => $pal ) { ?>
						<option value="<?=$key;?>"><?=$pal['name'];?></option>
					<? } ?>
				</select>

				<div class="button" id="exportCSV">Export CSV</div>

				<div class="button" id="exportPPM">Export PPM Image</div>
			</td>
		</tr>

		<tr>
			<td>
				<table class="palette">
					<tr>
						<? for( $i = 0 ; $i < $nColors ; $i++ ) { ?>
							<td id="ink_<?=$i;?>" class="ink"> <?=$i;?></td>
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
			<td> <input type="text" id="txt_rgb" value="" placeholder="0..255,0..255,0..255"> </td>
		</tr>
	</table>

<div class="swatch"> &nbsp; </div>
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




});
</script>
</html>