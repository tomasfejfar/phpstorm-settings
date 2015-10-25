# PHPStorm settings
Gradually improved repository of PHPStorm profile settings

**! ! ! MAKE SURE YOU BACKED UP YOUR PHPSTORM SETTINGS BEFORE TRYING TO USE MINE ! ! !**

# Usage
The root directory of all configuration is in your profile directory - `/home/username/.WebIdeXXX` or `c:\Users\username\.WebIdeXXX\` - where XXX is the number dependent on your PHPStorm version (100 for PHPStorm 10, 80, 90 or 95 being other common variants). 

## Color template
The color template goes into `config/colors`. Then select it in Settings under `Editor -> Colors and Fonts`. 

The template is dark and works best with Dracula UI settings. It uses Consolas font, that is available on newer Windows. On OSX I suggest using the Monaco. Or pick one from [the top 10 programming fonts](http://hivelogic.com/articles/top-10-programming-fonts).  

## Keymap
The keymap goes into `config/keymaps`. Then select it under `Keymap` in settings. 

It's based on PHPStorm's Eclipse keymap. If you're already used to PHPStorms default keymap I suggest you build your own using this keymap as a source of inspiration. Or you can just replace the `parent` attribute with anything you're used to use. But beware that there may be conflicts. Also note, that the keymap *removes* some of the default assignments.  

## Codestyles
The codestyle goes into `config/codestyles`. Then select it under `Editor -> Code Style`. 

It's based mostly on Zend coding standard, with few tweaks.

## Templates
Template file goes into `config/templates`. They can be enabled under `Editor -> Live Templates`. 

There are templates for all combinations of public/protected/private/static functions (`pubsf` or `prof` for example). Under the group W3W are templates we're using mostly in phtml templates. I use `teb` (template end bracket) and `tfe` (template foreach) the most. It's `<?php } ?>` and `<?php foreach ($array as $item) { ?>`. It's useful because we keep PHP blocks for every line - even for consecutive lines - for example to allow adding HTML wrappers around echo inside foreach.   

**Note:** 
Current files come from latest EAP (currently 10 - build 143.434), they should mostly work with older versions, but YMMV. 
