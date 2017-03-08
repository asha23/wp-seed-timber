# wp-seed-timber

This is a Twig-based, Bootstrap 3 seed theme with Bower and Gulp dependency and build management. I have removed as much bloat as possible from this theme, so it doesn't have multilanguage support, widgets or sidebars. It should be considered a base theme for developing using Advanced Custom Fields and using WordPress as a pure CMS.

This is meant to be a very basic starting point for theme development. You'll need to know a little bit about how to develop WordPress themes for this to be helpful for you. It's not to be considered an out-of-the-box theme that you can simply install and use right away.

## What do I need to make this work?

You should have the Timber plugin and Advanced Custom Fields Pro installed, as these are a requirement. Alternatively simply build your site using the following tool.

You'll need an ACF Pro Serial.

https://github.com/asha23/arlo-timber

## What comes with this theme?

There are a number of pre-built Custom Fields added to this theme. You can enable them by clicking Custom Fields/Field Groups - Sync - This will pull them into place, ready for use. These take the form of Flexible Content modules. You can enable them by setting your page template to "Page with content blocks".

#### Modules that are currently in place include:

* Accordion
* Downloads
* Full-Width Image
* Image Gallery (With LightGallery)
* Video Gallery (With LightGallery)
* Text Block

More will be added over time.

## Why did you remove the Widgets, sidebars and such? Isn't that a bit stupid?

Possibly, but it depends on how you use WordPress. I very rarely use widgets or sidebars. You could very easily add this functionality back in. This is a stripped to the absolute bone theme, with the common items I personally use on a daily basis. Sidebars and Widgets don't figure all that much in my workflow, so they are history. I realise that this kind of takes this theme out of WordPress best practice, but meh.

## What's all that stuff doing in the bower library?

You might find my choices of JS libraries a little arbitrary as well. However, the ones I have included in the bower.json file are ones I use for pretty much every project I do. They are, on the whole, bulletproof and I've thoroughly tested them on production websites. Again, you are welcome to use your own preferred sets of stuff, simply edit the bower.json file and add and remove what you like.

## What's the css framework?

It's Bootstrap 3 - It does what I need it to do - Everything is currently turned on, but you can remove items if you don't want to use them.

I've used the grid on so many projects now that I consider it pretty much bulletproof.

If you want to roll your own css framework into this theme then it shouldn't be too tricky.

I am considering upgrading to Bootstrap 4 when it comes out of Alpha. It has been included in the Bower file structure. So shouldn't be too hard to join up.

## How about build tools?

This uses Yarn for dependency management - https://yarnpkg.com/

Once you have installed it, simply run:

	yarn   
	bower install   
	gulp

	gulp watch

And you should be good to go.

#### General

The views folder is intended as a place to add content types for the theme. Take a look in here to see how everything has been organised.

If you can see anything you'd really like added to this, open an issue.

#### ToDo

Need to finish off the Twig integrations.
