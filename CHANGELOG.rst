.. Copyright © 2013 Martin Ueding <dev@martin-ueding.de>

#########
Changelog
#########

v2.9
    - Fix initial device width
    - Clear floats after shorter boxes on startscreen
    - **Added**: Special bookmarks for mobile devices
    - Hide some navigation elements on mobile devices
    - Use protocol relative URL for jQuery
    - Migrate to CakePHP 2.4.1
    - Make form validation errors more prominent
    - Change indentation from Tabs to 4 Spaces (on some files)
    - Download favicons to server, deliver them using Base 64
    - Remove bug reporting link
    - Order keywords in columns and not in lines
    - Fetch page title from URL on edits as well
    - Convert keywords to *tree behavior* so that they work on servers as well
    - Sort bookmarks in keyword view
    - Sort bookmarks by recent visit count
    - Show unvisited items in search
    - Add a full search page
    - Fix favicon on all pages, use new favicon
    - **Added**: View for a bookmarks that lack a keyword

v2.8
    - Add the CakePHP installation into git
    - Remove debug code
      
v2.7.1
    - Sort search results by visit count
    - Use CoffeeScript instead of JavaScript for search
      
v2.7
    - Ajax search with keyboard navigation
      
v2.6.1
    - Fix bug that rendered everything unusable
      
v2.6
    - **Added**: search bar
      
v2.5.1
    - Show favicons for bookmarks without a protocol in the URL
    - Show favicons for ``https://`` websites
    - Add test case for BookmarkHelper
      
v2.5
    - Display favicons of the bookmarks
    - Show bookmarks in neat table
      
v2.4.1
    - Navigation: Little margin
    - Quote box: Use real mdash
    - Sticky Keywords: Sort bookmarks by title
    - Tungsten: Fine tune colors
    - Tungsten: Style bookmark table
    - Update German translation
    - Put some magic values into config
v2.4

    - Tungsten theme as default
    - Visits graph for each bookmark
    - No URL verification on bookmarks (since `file://` and `localhost` caused trouble)
      
v2.3
    - Show favicons for bookmarks
    - Use multiple DD instead of UL within DD
      
v2.2.1
    - **Fixed**: Bookmark import
      
v2.2
    - Fix parent keyword selection
    - JSON import and export
    - Redirect to new bookmarks and keywords
    - Table for bookmark index
    - Add some phpdoc
    - Fix calculation of revisit time
    - Only show reading list when needed
    - Show child keywords
    - Sort sticky keywords by name
      
v2.1.2
    - Delete the visits controller
    - **Fixed**: Save new bookmark with new keyword
    - Show created and modified in keywords
    - Show list of visits for bookmark
    - Add copyright statements
    - I18n on validation message
    - Manual escape in bookmarklet
      
v2.1.1
    - Use bookmarkbox for sticky keywords
    - Use definition list for bookmark view
    - Code cleanup (80 cols)
    - Delete all CSS files
    - Remove a lot of markup
      
v2.1
    - Basic version, three column layout
      
v2.0
    - Start off with CakePHP template

.. vim: spell
