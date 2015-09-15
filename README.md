Theme Installation
==================
In order to install this theme, clone the repository into the themes folder of your wordpress install, usually located
somewhere like path/to/wordpress/wp-content/themes/ , you can also download a zip file using the link on the right
hand side of the page, and extract it to the same place.

After you've extracted the zip to the theme folder, or cloned the git repository their; you need to make sure that
permissions are set up correctly, [this link](https://codex.wordpress.org/Changing_File_Permissions) on the wordpress
site should give you the information you need.

Once you have completed the above two steps you need to log into the admin panel of your wordpress install and go to 
Appearance->Themes, assuming the permissions have been set correctly the new theme should appear in the list. When you
roll over the tile associated with it you should see a button appear that allows you to activate the theme. The theme 
should then be active.

Styling Your New Theme
======================
You have a various options with regards to customising the look of the theme.

##Masthead Images
On the main page you will see a large Masthead that scrolls a series of images accross the screen. It is easy to add or
change these images as you please. Go to the theme directory and navigate to images->carousel the theme automatically
picks up any images in this folder and scrolls them accross the masthead. 

##Site Background
if you wish to change the background for the site, the easiest way to do so is to navigate to the themes images directory
(as above), you should see an image file called background.png. Rename your chosen background image to background.png, it
is worth noting that for the most part the system is pretty lenient with regards to file conversion (i.e. if it was originally
a jpg that you renamed to png), but if you have troubles with the image displaying then you may need to explicitly convert the
file using your image editor of choice (if you cant afford photoshop then i recommend [the GIMP](http://www.gimp.org/) the GNU Image Manipulation 
Tool).

##NavBar Logo
Up in the top left corner of the site (the left hand side of the navbar) you will see a little image of a clown, on the assumption that you 
wish to change this rather stupid image the procedure is basically the same as that of changing the site background or the masthead carousel
images. navigate to the themes directory of your wordpress install, and change the logo.png to the picture of your choice, making
sure to rename it to logo.png.

##More Advanced Styling (fonts/colours/etc)
In order to change other aspects of the theme style you are going to have to use your wordpress install's built in theme editor, you can find this
in Appearance->Themes->Theme Editor, although i suggest installing the 'Advanced Code Editor' plugin by 'BaInternet' which you can find in the 
plugin browser which comes with wordpress (for any issues installing plugins first check that permissions are correct and then search the wordpress
site for info). Anyway back to editing the theme; using the built in theme editor, on the right hand side you should see a whole bunch of different
files (possibly called templates), these are how the theme is built up. All styling information is contained within 'Stylesheet'.

I have included a brief rundown of the important classes covered in the stylesheet so you can easily edit the theme:
- **body** : this is the body of the document any styling applied to this tends to affect the whole document.
- **lower-body** : any class beginning with 'lower' generally indicates that this is a specialised class that gets applied when a user is logged
in, this is due to the fact that when a user is logged in accomodation needs to be made for the admin bar at the top of the screen.
- **panel** : this theme is built using bootstrap, and panels are used extensively throughout the theme, hence editting the 'panel' class
will apply to any panel used in the theme.
- **navbar** : the root class for the navbar.
- **logo** : the picture in the top left corner of the page.
- **brand** : The site name next to the logo.
- **rightSide** : container for the searchbar and the login button.
- **searchform** : the search bar on the navbar.
- **pageButtons** : the class that covers the buttons generated to represent 'page's'
- **btnContainer** : a container for the buttons mentioned above.
- **siteTitle** : the title text for the site displayed on the main page.




**Author** Jan P.C. Hanson
