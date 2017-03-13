# wp-seed-timber

[![GitHub issues](https://img.shields.io/github/issues/asha23/wp-seed-timber.svg)](https://github.com/asha23/wp-seed-timber/issues) [![GitHub forks](https://img.shields.io/github/forks/asha23/wp-seed-timber.svg)](https://github.com/asha23/wp-seed-timber/network) [![GitHub stars](https://img.shields.io/github/stars/asha23/wp-seed-timber.svg)](https://github.com/asha23/wp-seed-timber/stargazers)

![](https://github.com/asha23/wp-seed-timber/blob/master/screenshot.png?raw=true)

This is a Twig-based, Bootstrap 3 seed theme with Bower and Gulp dependency and build management. I have removed as much bloat as possible from this theme, so it doesn't have multilanguage support, widgets or sidebars. It should be considered a base theme for developing using Advanced Custom Fields and using WordPress as a pure CMS.

This is meant to be a very basic starting point for theme development. You'll need to know a little bit about how to develop WordPress themes for this to be helpful for you. It's not to be considered an out-of-the-box theme that you can simply install and use right away.

## What do I need to make this work?

You should have the Timber plugin and Advanced Custom Fields Pro installed, as these are a requirement. You should build your site using the following tool. This will put into place a few useful plugins.

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
* Padding/Horizontal Line
* Teasers
* Headers
* Carousel

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

# Theme Setup

First off, navigate to the themes folder. ```web/content/themes/wp-seed-timber```. You should rename this to reflect the project name and change the information in styles.css

You will need node.js, npm and Yarn installed on your computer before starting:

https://nodejs.org/en/   
https://yarnpkg.com/

You should install Gulp globally if it's not already installed on your machine.

    $ yarn add gulp -g

Install bower if it's not already installed on your machine

    $ yarn add -g bower

## Composer

You can run ```$ composer install ``` if you want to add the Timber plugin automatically.

## Step by step:

The seed theme uses Gulp and Yarn for dependency management. Yarn is a dependency manager created by Facebook and it seems to be way faster than using npm. It will pick up all your npm dependencies and use them, so it's very similar

In your terminal, cd into your theme directory and execute

    $ bower install
    $ yarn

This will get everything set up, ready for you to start developing with the theme.

## Gulp commands

    $ gulp watch
    $ gulp images
    $ gulp

```
gulp watch
```

will start the watch task and

```
gulp images
```

will run an image optimisation on the images folder (useful before deployment) - Run

```
gulp
```

on it's own to do the tasks once.

## Setting up the custom fields

Assuming you have Advanced Custom Fields Pro installed (Which is a requirement) - All the fields are ready to go in this theme. However, you will need to sync them for them to fall into place.

In your field groups, you will see Sync Available.

## Templates

There are a couple of templates for use with the Flexible Content modules. In your page, you should use the " Page with content blocks" template. This will set up the fields for use in this page

There is an example custom post type, called, "example" - You'll see this in the menu. You can set up further post types by using the page-examples.php file and following it's logic.

In the includes folder, you can add further custom post types by opening custom-post-types.php

## Sample Data

This is found in the /example_data folder.

If you like, you can use the included sample data and the zipped copy of the uploads folder. You will need to extract the uploads folder to your content folder.

Use the Wordpress Importer to import the sample data into your theme. This will create a style guide for you to refer to.

Once you have imported the data, you should delete this folder.

Please note, that due to a bug with ACF and the WordPress XML Importer the images in this won't be added to the style guide. However you should get an idea of what everything does and it won't affect your useage. I am looking into a solution for this. Looks like this bug goes back a couple of years now.

## wp-seed-timber Folder Structure

Inside the theme, you will find the following structure. This assumes you know a bit about WordPress theming techniques. It's essentially a bare bones sensible structure.

/acf-json
--------

This is for use with Advanced Custom Fields. You will find some fields already set up here for dealing with global site options. Use as you wish. You should make sure that you have Advanced Custom Fields Pro installed.

/build
-----

This is the build folder for deployment. You will find the images and fonts folder in here.

/includes
--------

This is all the core theme php. Files in here are included from the site's root functions.php file. Generally speaking you shouldn't need to edit anything in here, but if you do, simply create a new file and update the functions.php

/library
-------

This is where you can edit your ```styles.scss``` file and also ```scripts.js```. The /core folder contains all the scss files you'll need.

/views
-----

This is where all the .twig files live. These are split out into a sensible folder structure.

/bower
------

This will automatically be added as soon as you run ```bower install```.

## Notes on the Gulpfile.js

This file contains all the path structures for connecting up your Bower dependencies, it's relatively straightforward to create links to any new Bower components and dependencies you want to add to the compilation process.

We pull the scripts into the ```js/vendor-libs``` folder and then compile them into ```scripts.min.js``` in the build folder. You could, if you prefer, directly reference the ```/bower``` folder for the file paths and skip this step.

Generally speaking, these paths are the only things you should need to touch inside this file, but if you know a better way of doing some of the tasks inside here, then feel free to adjust it to suit your working methods - This Gulpfile is a work in progress.

## Notes on using Bower for dependency management

Where possible, you should use Bower for any JavaScript or css modules you want to add to this theme. A lot of commonly used libraries and frameworks are now part of the Bower ecosystem. This will make sure that all your dependencies remain intact and that you are always using the most up-to-date version of the library.

If you haven't been to a project in a while it's worth running a ```bower update``` periodically.

## General notes

```/node_modules```, ```/bower``` ```wp-config``` and many other files are ignored. You shouldn't include these folders in the deployment as it will cause unnecessary bloat. It is preferable that you pull to staging or live from the repository, rather than uploading files via ftp.

#### General

The views folder is intended as a place to add content types for the theme. Take a look in here to see how everything has been organised.

If you can see anything you'd really like added to this, open an issue.

#### ToDo

Fix the ACF Sample Data
Add a container image   
Add a custom table field   
