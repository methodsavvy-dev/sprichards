=== sprichards ===

S.P. Richards Wordpress Theme

=== Introduction ===
This is a custom Wordpress theme designed specifically for S.P. Richards. 
The theme uses the Underscores starter theme as its foundation and Dart Sass for compiling the CSS.

=== Requirements ===

To use this theme, you will need:

- A self-hosted Wordpress installation
- A Sass compiler (Dart Sass is recommended)
- A basic understanding of Wordpress theme development

=== Installation ===

- Download the theme files from the repository
- In your Wordpress dashboard, go to Appearance > Themes
- Click the "Add New" button and then "Upload Theme"
- Select the theme files and click "Install Now"
- Once the theme is installed, click "Activate"

=== Usage ===

The theme includes several blocks and template pages that have been pre-configured for use with S.P. Richards. 
If you need to make any changes to the theme's appearance or functionality, you can do so by modifying the corresponding files.

=== Compiling Sass ===

To compile the Sass files, you will need to use a Sass compiler such as Dart Sass. 
Once you have installed the compiler, navigate to the theme's directory in your terminal and run the following command:

sass --watch ./sass/style.scss ./assets/css/style.css

This will compile the Sass files and create a style.css file in the theme's root directory