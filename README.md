  <h1>PHPLibrary </h1>

This is a PHP lybrary that should use in order to sorting array. With this library you can to sort array by increas or decreas.

This library has basic configuration for PHPUnit and PHP-CS-Fixer libraries, configured composer.json with PSR-4 namespaces for source code and tests, .gitignore with basic files and directories to exclude them from Git, changelog file and README with cool badges :)

Packagist Packagist Custom badge
Installation

For creating new project based on this template just execute the following command

$ composer create-project MaxStepit/Sorter project-name

    NOTE: You can add --no-dev right after create-project flag if you don't want to install dev dependencies to your project

Usage

Main changes that you need to do:

    Update name, description, keywords, authors section of the composer.json file, lines 2-4, 9-10.

    Update header template in .php_cs file, lines 4-9.

    Update copyright in LICENSE file, line 3.

Other changes that you may do:

    Change namespace for source code in composer.json, line 23 and for tests line 28.

    Change PHP version in composer.json line 15.

    Change rules for code style in .php_cs file.

    Add some new files and directories to .gitignore file to exclude them from Git.

    Update readme according to your project

    Update changelog according to your project

Code style fixer

To fix the code style just run the following command

$ composer cs-fix

License

license

This project is released under the terms of the My license.

Maxim Gnatkovsky