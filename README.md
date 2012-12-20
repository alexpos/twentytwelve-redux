twentytwelve-redux
==================

Twentytwelve child-theme to test the Redux options framework

##Install

Clone the child-theme in your themes directory:

  cd .../wp-content/themes
  git clone https://github.com/plovs/twentytwelve-redux.git

Check out the Redux framework somewhere else, and copy the admin directory to the child-theme:

  cp -rv ~/git/Redux-Framework/admin twentytwelve-redux

##Usage

Edit the file **admin/options.php** to create your own configuration.

To update Redux later, only update the options-folder (twentytwelve-redux/admin/options), otherwise you will overwrite your configuration file!
