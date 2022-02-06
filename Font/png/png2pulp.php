<?php
function LoadPNG($imgname)
{
    /* Attempt to open */
    $im = @imagecreatefrompng($imgname);

    return $im;

    /* See if it failed */
    if(!$im)
    {
        /* Create a blank image */
        $im  = imagecreatetruecolor(150, 30);
        $bgc = imagecolorallocate($im, 255, 255, 255);
        $tc  = imagecolorallocate($im, 0, 0, 0);

        imagefilledrectangle($im, 0, 0, 150, 30, $bgc);

        /* Output an error message */
        imagestring($im, 1, 5, 5, 'Error loading ' . $imgname, $tc);
    }

    return $im;
}



/*
    images are 32 glyphs aross,
    each character is 8x8 pixels, with a red border of 1 pixel, shared.
    */


function glyphAt( $img, $glyphX, $glyphY )
{
    $bytes = [];
    $startX = ($glyphX * 9)+1;
    $startY = ($glyphY * 9)+1;

    $value = 0;
    for( $y=0 ; $y<8 ; $y++ ) {
        $mask = 0x80;
        for( $x=0 ; $x<8 ; $x++ ) {

            $xpos = $startX + $x;
            $ypos = $startY + $y;
            $c = imagecolorat( $img, $xpos, $ypos );
            if( $c == 0 ) {
                $c = '.';

            } else {
                $c = '#';
                $value |= $mask;
            }

            $mask = $mask / 2;

        }
        $bytes[] = $value;
        $value = 0;
    }
    return $bytes; 
}

function XYForGlyph( $ascii )
{
    // this gets the grid placement for the ascii value
    $gridX = $ascii % 0x20;
    $gridY = ($ascii - $gridX) / 0x20;

    // now convert it to pixel offset.
    $x = 1 + ($gridX * 8) + $gridX;
    $y = 1 + ($gridY * 8) + $gridY;

    return( [ $x, $y ] );
}


function ConvertPngFontToPulp( $fontpngfn, $baseImgFN, $outfn )
{

    $canvas = LoadPNG( $baseImgFN );
    if( $canvas === false ) {
        printf( "Error: " . $baseImgFN . ": could not read canvas image!\n" );
        exit;
    }

    $img = LoadPNG( $fontpngfn ); 
    if( $img === false ) {

        printf( "Error: " . $fontpngfn . ": could not read font png!\n" );
        exit;
    }

    // do the work...

    // now copy the glyphs over from $img to $img_base

    /*  Pulp font images are 160x64 pixels:

        !"#$%&'()*+,-./0123
        456789:;<=>?@ABCDEFG
        HIJKLMNOPQRSTUVWXYZ[
        \]^_`acbdefghijklmno
        pqrstuvwxyz{|}~
        +-+vv>><>
        | |
        +_+

        0: 0x20 - 0x33
        1: 0x34 - 0x47
        2: 0x48 - 0x5b
        3: 0x5c - 0x6f
        4: 0x70 - 0x7e, (empty spaces)
        5: NW, N, NE, DN, dn, R, (r), Fwd-Back, (empty spaces)
        6: W, (empty), E, (empty spaces)
        7: SW, S, SE, (empty spaces)

        Our PNG images are:
        0x00 - 0x
    */

    /* test 
    for( $a = 0; $a < 0x30 ; $a++ ) {
        $xy = XYForGlyph( $a );
        printf( "%d:  %3d, %3d\n", $a, $xy[0], $xy[1] );
    }
    */

    $tilemap = [
        [ 'r', 0x20, 0x33 ], // ranges
        [ 'r', 0x34, 0x47 ],
        [ 'r', 0x48, 0x5b ],
        [ 'r', 0x5c, 0x6f ],
        [ 'r', 0x70, 0x7e ], 
        [ 'l', 0xc9, 0xcd, 0xbb,   0x1f, 0x19,    0x11, 0xaf,  0x04  ], // list
        [ 'l', 0xba, 0x00, 0xba ],
        [ 'l', 0xc8, 0xcd, 0xbc ]
    ];

    $tx = 0;
    $ty = 0;
    foreach( $tilemap as $tmidx => $tmRange ) {

        if( $tmRange[0] == 'l' ) { 
            // explicit list of items
            $tmr = $tmRange;
            array_shift( $tmr );
            foreach( $tmr as $idx => $ascii ) {
                $XY = XYForGlyph( $ascii );

                imagecopy( $canvas, // dst
                        $img,    // src
                        $tx*8, $ty*8,    // dst
                        $XY[0], $XY[1],    // src
                        8, 8);   // w, h

                $tx++;
            }
        }
        if( $tmRange[0] == 'r' ) { 
            // range of items
            for( $ascii = $tmRange[1] ; $ascii <= $tmRange[2] ; $ascii++ )
            {
                $XY = XYForGlyph( $ascii );

                imagecopy( $canvas, // dst
                        $img,    // src
                        $tx*8, $ty*8,    // dst
                        $XY[0], $XY[1],    // src
                        8, 8);   // w, h

                $tx++;
            }
        }

        // go to the next line
        $tx = 0;
        $ty += 1;
    }

    imagepng ( $canvas, $outfn );

    imagedestroy($canvas);
    imagedestroy($img);
}

// do one...
//ConvertPngFontToPulp( $argv[1], "../dev/Pulp/pulp-font-full-width-table-8-8.png", $argv[2] );

$dlist = scandir( '.' );

foreach( $dlist as $idx => $fn )
{
    if( substr( $fn, 0, 1 ) == '.' ) { continue; } // skip dotfiles
    if( substr( $fn, -3 ) != 'png' ) { continue; } // skip non-pngs
    $dfn = str_replace( '.png', '.pulp.png', $fn );
    $dfn = "pulp/" . $dfn;

    printf( "%d: %s => $dfn\n", $idx, $fn, $dfn);
    ConvertPngFontToPulp( $fn, "../dev/Pulp/pulp-font-full-width-table-8-8.png", $dfn );
}

//print_r( $dlist );
?>
