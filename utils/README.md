# utils directory

To be used for Grunt, Sass and JS source files.
Not publicly accessible, see .htaccess. 

## Using Grunt: The JavaScript Task Runner

Using Grunt is optional.

### Prerequisites

You should have [Node.js](https://nodejs.org/en/), [npm](https://www.npmjs.com/) and [grunt-cli](https://gruntjs.com/using-the-cli) installed. 

#### Update npm project

Move into the `utils` directory and run the following command to get the required node modules. 

```
npm update
```

### Run grunt

The provided Gruntfile.js is configured to:

 * Run dart-sass on `src/sass/main.scss`
 * Minify `dist/css/main.css`
 * Uglify `src/js/*.js`
 * Copy all css and js to public assets directory
 * Watch for changes in `src/` SCSS and JS files to repeat the above steps

Run with the following command:

```
grunt
```
