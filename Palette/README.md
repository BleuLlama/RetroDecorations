
There's a php file in here that will generate a webpage that will
let you generate the PNM and CSV files also in this directory.

I have a version of it up at this url:

	http://umlautllama.com/palettes.php


To convert them to PNG format, without loss, use imagemagick tools like so:

convert filename.ppm -interpolate Nearest -filter point -geometry 400x400 png8:filename.png


Some good references for vintage palettes:

- https://en.wikipedia.org/wiki/List_of_8-bit_computer_hardware_palettes
- https://lospec.com/palette-list/tag/computer
- https://atariage.com/forums/topic/155790-tms-9918a9928a9929a-colors
