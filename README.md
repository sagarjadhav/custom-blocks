## WordPress Blocks

**WordPress Blocks** is a WordPress "Gutenberg" blocks boilerplate plugin.


## What's included?
* Gutenberg blocks configuration tested in **WordPress v5.8+**
* NPM configuration
* ESNext
* Support for a category where all custom blocks can be organized
* A simple "Hello world" block implementation is included
* Optional: Easily add more blocks


## Setup
* Prerequisites: [Node.js](https://nodejs.org) (NPM) needs to be installed on your system

* Open `/custom-blocks` in Terminal and install the required Node.js dependencies
* `$ npm install`
* A simple `Hello world` block implementation is included to get you started. More examples can be found in the official [Gutenberg examples repository](https://github.com/WordPress/gutenberg-examples)
* You can easily include additional blocks by duplicating `/src/block#` and referencing the new block(s) in `/src/index.js`
* Run the **`start`** script
* `$ npm run start`
* Develop the block(s) by modifying `/src/block#/index.js` - the official [Gutenberg Handbook](https://wordpress.org/gutenberg/handbook/designers-developers/developers/tutorials/block-tutorial/writing-your-first-block-type) may help you learn how to build blocks
* When you're done run the **`build`** script to create a minified version of your blocks
* `$ npm run build`
* Now you can test the block(s) in the WordPress Editor


## Technology

* [WordPress Scripts](https://github.com/WordPress/gutenberg/tree/master/packages/scripts), [GPLv2+](https://github.com/WordPress/gutenberg/blob/master/packages/scripts/package.json)
* [Gutenberg](https://wordpress.org/gutenberg/handbook/designers-developers/developers), [GPLv2+](https://github.com/WordPress/gutenberg/blob/master/LICENSE.md)


## Copyright & License

Code released under [GPLv2+](https://www.gnu.org/licenses/gpl-2.0.html)