----------------------------------------
								Overview

The fonts in this directory were collected from various sources.
This document will list all of the sources used and what changes
were made where applicable.
- yorgle@gmail.com 2020-02-24


PNG fonts:

All of the fonts here are 32 characters across, 8 rows, with one
pixel overlapping, surrounding each glyph.  The grid is red, the
pixels to be rendered are white, on a black background (whcih can
be removed at render time.

All fonts are in the MS-DOS extended character style, with ASCII
characters at the low range, and accented characters, ANSI graphics,
and then math graphics, in an attempt to standardize the font format.

All of these fonts are free to use under The MIT License, as described
in the directory above this one.

BIN fonts:

This directory contains 2kbyte files containing fonts made to be
used with the TMS9918A video chip. These were converted drom the 
PNG versions, using the php script in the Tools directory.

The binary data is arranged as such:

	255 glyphs
	  Each glyph is 8 bytes, 
		each byte is a row of 8 pixels for the glyph
		bytes are in-order from top to bottom
		each byte is stored as you would see it, left to right

	For example, the data for "K" might be the sequence of 
	8 bytes:
		0x82, 0x84, 0x88, 0xF0,
		0x88, 0x84, 0x82, 0x00

		As seen here:

	8421 8421
	#... ..#.
	#... .#..
	#... #...
	#### ....
	#... #...
	#... .#..
	#... ..#.
	.... ....


----------------------------------------
								   Fonts

dos.blocksansf.png	- DBSANS.BIN
dos.flat.png		- DFLAT.BIN
dos.inverted.png	- DINVRTED.BIN
dos.italics.png		- DITALICS.BIN
dos.sans.png		- DSANS.BIN
dos.serif.png		- DSERIF.BIN
dos.super.png		- DSUPER.BIN
dos.thin.png		- DTHIN.BIN
dos.vga.png			- DVGA.BIN

	Snagged from GIFs here: 
		http://umlautllama.com/projects/turacocl/starters/#s8
	Which I originally got from the VGA Font Editor (VGA FED)
	by Simon Griffiths. (download link on the above page)

	These were run through an ImageMagick filter to add in the
	red grid spacings:

	convert font.gif -background Red -crop 8x0 +repage \
		-splice 1x0 +append -crop 0x8 +repage \
		-splice 0x1 -append -gravity south \
		-splice 0x1 -gravity east -splice 1x0 outfont.png

amiga.topaz.1.serif.png		- AMITOPZ1.BIN
amiga.topaz.2.sans.png		- AMITOPZ2.BIN
	Both of these were made by myself using PikoPixel on OS X.
	They started from "dos.vga.png" above, and the glyphs have been
	converte to be Topaz 1.x and Topaz 2.x style, fitting in with
	the DOS layout.

	Looks best doubled-vertical, single horizontal.

vt220.png			- VT220.BIN
	Created by myself in PikoPixel.  Pixel-based on GlassTTY
			http://www.spacerogue.net/wordpress/?p=356

	Looks best doubled-vertical, single horizontal, scanlines.

TI994A.png			- TI994A.BIN
	Created by myself.  The main glyphs were transposed from
	"TI99 Basic" TTF available here:
		http://www.dreamcodex.com/fonts.php

	Looks best square.


Commodore.Pet.png	- COMPET.BIN
Commodore.64.png	- COM64.BIN
Commodore.128.png	- COM128.BIN
	Created by myself in Pikopixel, based on font glyphs from here:
			http://www.kreativekorp.com/software/fonts/c64.shtml

	The "Pet" version of the font should be used for PET, CBM
	and VIC/VC-20 targets.  There are only minor differences
	to lowercase letters between the 64 and 128 versions.

	Look best double vertical and horizontal, depending on target.


Apple.II.png		- APPLEII.BIN
	Created by myself in Pikopixel, based on font glyphs from here:
		http://www.kreativekorp.com/software/fonts/apple2.shtml

	Look best square.

MSX.png				- MSX.BIN
	Converted from the imagery here:
		http://uzebox.org/wiki/index.php?title=Font_Bitmaps

ZX.Spectrum.png		- ZXSPECCY.BIN
	Converted from the imagery here:
		http://uzebox.org/wiki/index.php?title=Font_Bitmaps

Atari.800.png		- ATARI800.BIN
	Partial font, made by me, based on a few Atari 800 screenshots.
	Most of it is the Commodore 64 font, but the digits, upper
	and lowercase glyphs are correct.

ADM-3A.png			- ADM3A.BIN
	I wanted this to be as pixel-perfect to the original as
	possible.  It is a 5x7 font, and only had basic characters
	and uppercase lowercase were in separate roms.  It required
	a lot of hand-holding to get it all to work.  I also
	reformatted placement to fit in my font format, and I created
	glyphs for accented and math characters, while trying to
	retain the awkwardness of the original glyphs.

	Converted from the roms here:
		http://juliepalooza.8m.com/sl/adm3a-2.htm

	Thanks to @Twylo for inspiration on this!

	Looks best with a font spacing of -2 (to be implemented.)


----------------------------------------
                             References:

https://damieng.com/blog/2011/02/20/typography-in-8-bits-system-fonts



--------------------------------------------------------------------------------
The MIT License (MIT)

Copyright (c) 2020 Scott Lawrence

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

