# Duck Parallax Shortcode

Duck Parallax Shortcode is a simple usage of the parallax.js 1.4.2 script by PixelCog - http://pixelcog.github.io/parallax.js/ 

Parallax will be as high as the content in between the parallax code unless you set the parameter "height" within the shortcode.

Parallax window will be full screen width as long as the main content div is in div id ="content" - which works with bootstrap themes and the wordpress default themes.

## Shortcode Parameters

* img : Image name should only be the image name, and not the full path to the image.
* speed : (optional default is 0) Speed is 0 through 10.  0 is fixed background, 10 moves at the same speed as scroll (doesn't have a parallax effect).
* height : Height (optional default = null) if specified will be the minimum height for the parallax window area.  Otherwise height is the height of the contents inside the parallax code.

##Shortcode usage.

[duck-parallax img="imagename.jpg" speed="3" height="500"]

	CONTENT INSIDE THE PARALLAX

[/duck-parallax]	