# v2.0.0
## 06/29/2019

1. [](#new)
    * **Massive overhaul.**  Incompatible with 1.x.x versions.  If you need to roll back to a prior version, you can [download the last 1.x version from Github](https://github.com/artofthesmart/hypertext/archive/v1.1.4.zip).
    * Adds open source stylesheets.  Hypertext is still plenty fast with very small CSS sheets.
        * Optional `inline` vs `href` include modes.
        * Quickly leaf through options via `?theme=1` URL parameter.  Pick what works for you!
        * Want to add your sheet to the supprted list?  [Check out this commit for a template](https://github.com/artofthesmart/hypertext/commit/7a5b5b61e8fe6001013722b2fd03c77369cb065c) then send me a pull request!
    * HTML 3 & HTML 5 compliance modes.  You can now choose whether to use HTML3.2 or HTML5 conventions.
    * Collection rendering options.  There are now three ways to render page children, all of which have options to configure which kinds of data get shown:
        * `list`, which is an ordered list of items.
        * `table`, which is a tabular view.
        * `summary`, which is the more standard, structured view of children.
    * Header images & thumbnails.  Add images to the tops of pages and thumbnails for rendering as children of some parent page.
2. [](#improved)
    * Simplified page types. All pages are now one of two types:
        * `default` for [pages](https://learn.getgrav.org/16/content/content-pages), which supports `item` and `blog_item` page types also.
        * `collection` for [page collections](https://learn.getgrav.org/16/content/collections), which supports `blog` and `blog_list` page types also.

# v1.2.0
## 04/20/2019

1. [](#new)
    * Adds the ability to hide the horizontal navigation separator, good for folks who want to add a little CSS.
2. [](#improved)
    * Allows more detail around how additional menu items are treated. You can now specify whether to open links in a new window, among other things.

# v1.1.4
## 04/14/2019

1. [](#improved)
    * Removes the color classes from the CSS since it doesn't look like they're being used and they don't work for dark themes.
    * Removes the "toggle-able" directive for colors and replaces them with defaults, since it was proving confusing.

# v1.1.3
## 03/22/2019

1. [](#improved)
    * Adds better pagination support, thanks to [jrswab](https://github/jrswab).

# v1.1.2
## 03/08/2019

1. [](#bug)
    * Fixes broken pagination. Thanks to [neilpanchal](https://github.com/neilpanchal).
    * Improves tag handling in classes thanks to [laynee](https://github.com/Laynee).

# v1.1.1
## 02/25/2019

1. [](#bug)
    * Re-fixing a previously broken customCSS feature.
    
# v1.1.0
## 02/07/2019

1. [](#new)
    * Adds a "blog" page type, supplementing the Collection type. Collections are now a trimmed down version, good for text-heavy pages.
    * Several potentially breaking changes.  Install with care.

# v1.0.3
## 02/07/2019

1. [](#bug)
    * Fixes custom CSS to be properly inserted into head section.
    * Fixes a missing 0 from [shanehoban](https://github.com/shanehoban).
    * Fixes "Next" and "Previous" post options in collections, they were reversed.

# v1.0.2
## 02/06/2019

1. [](#bug)
    * Fixes CSS/JS in footers. This broke popular plugins like code syntax highlighting.
    * Includes typo and logical fixes from [mbirth](https://github.com/mbirth).
    
# v1.0.1
## 01/18/2019

1. [](#new)
    * Adds demo content for testing and new installations.
    * Adds custom menu items after pages are rendered.
   [](#improved)
    * Removes some unneeded code.

# v1.0.0
## 01/17/2019

1. [](#new)
    * Changelog started.
    * Created the theme, and initial collection/item pages.
    * Added `headless` mode.
