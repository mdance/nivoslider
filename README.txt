$Id$

Created By
-----------

Michael Dance [michael.dance@gmail.com]
April 9, 2010

Important
-----------

This module requires a jquery version > 1.3

This is available with the jquery_update v 6.2

See http://drupal.org/project/jquery_update

Description
-----------

What is it?

The Nivo Slider module provides a wrapper to the jquery nivo slider located here:

http://nivo.dev7studios.com/

This module provides it's functionality through a CCK formatter, which can be configured 
on the Content Type > [Your Content Type Here] > Display Settings.

Installation
------------

 1. Extract the compressed download
 
 2. Upload the directory to your site's modules directory.
    (Don't know where to put it? sites/all/modules is a good choice.)
    
 3. Go to Admin -> Site Building -> Modules and activate the Nivo Slider module
    
Configuration
-------------
    
 1. Go to Admin -> Settings -> Nivo Slider and configure any admin settings

 2. Go to Admin -> Settings -> Nivo Slider -> Defaults -> Add and create some defaults to use

 3. Create a content type with a filefield/imagefield
 
 4. Go to Content Types > [Your Content Type Here] > Display Settings and select the nivoslider [defaults name] from 
 the dropdown.