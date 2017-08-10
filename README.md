# Installation steps
1) Clone this repository;
2) Update composer using this command: ```composer update ``` (wordpress core and plugins will be installed automatically).
3) Set public directory as web site root (home) directory.
4) Go to yoursite address (ex. yoursite.com) and finish installation process.
5) Login in yoursite.com/wp/wp-admin, fill your credentials and enable all plugins in admin menu -> plugins.
6) Import all data using xml file (in our case master/filmsstore.wordpress.2017-08-10.xml) and wp importer (already installed).
7) Go to Settings -> Permalinks, select Post name then click on Save Changes button.
8) **Hooray! You are finished installation.**

# SASS
To compile SASS files use Grunt (will be installed automatically after composer update). Use ```grunt``` command to run compile watcher.
