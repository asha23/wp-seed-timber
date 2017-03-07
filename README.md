
# Wordpress Seed Theme (Expert Version)

This is a simple Bootstrap 3 seed theme with Bower and Gulp dependency and build management. I have removed as much bloat as possible from this theme, so it doesn't have multilanguage support, widgets or sidebars. It should be considered a base theme for developing using Advanced Custom Fields and using WordPress as a pure CMS.

There are a number of pre-built Custom Fields added to this theme. You can enable them by clicking Custom Fields/Field Groups - Sync - This will pull them into place, ready for use.

Why did I remove the Widgets and such? Well, I very rarely use widgets. You could very easily add this functionality back in. But this is a stripped to the absolute bone theme, with the common items I personally use on a daily basis. Sidebars and Widgets don't figure all that much in my workflow, so they are history.

You might find my choices of JS libraries a little arbitrary as well. However, the ones I have included in the Bower.json file are ones I use for pretty much every project. They are, on the whole, bulletproof and I've thoroughly tested them on production websites. Again, you are welcome to use your own preferred sets of stuff, simply edit the bower.json file and add what you like.

Why Bootstrap? It does what I need it to do - Everything is currently turned on, but you can remove items if you don't want to use them.

I've used the grid on so many projects now that I consider it pretty much bulletproof. So the skeleton of this theme is Bootstrap Sass (3).

If you want to roll your own css framework into this theme then it shouldn't be too tricky.

I am considering upgrading to Bootstrap 4 when it comes out of Alpha. It has been included in the Bower file structure.

This uses Yarn for dependency management - https://yarnpkg.com/

Once you have installed it, simply run:

	yarn   
	bower install   
	gulp

	gulp watch

And you should be good to go.

#### A few of the JavaScript libraries I've included

* jQuery
* Bootstrap Sass
* Lightgallery
* Fontawesome
* Imagesloaded
* Slick Carousel
* Respond.js
* Enquire.js
* MatchHeight
* Cycle 2
* Isotope

Feel free to add your own via Bower.

#### Advanced Custom Fields

This theme requires Advanced Custom Fields Professional. Which if you don't have already, you should get.

#### General

The views folder is intended as a place to add content types for the theme.
