CalendarView
============

The default date fields for product custom options use a very bad choice of javascript popup. It is over eight years old, has numerous unfixed bugs, is no longer maintained by it's author and is just plain ugly.

This extension replaces that redundent popup with a newer alternative from CalendarView.org which is not only actively maintained but is also easier to use, easier to skin, more reliable and much, much prettier. It is built on the Prototype JS library like the rest of Magento which saves a HTTP request and over 30KB, helping your pages to be smaller and faster for the customer. No extra library is needed, not even jQuery!

Installing
----------

To install, get your extension key from [the Connect Marketplace](http://www.magentocommerce.com/magento-connect/calendarview.html).

Usage
-----

The only configuration needed is in **System > Configuration > Catalog > Date & Time Custom Options > Use Javascript Calendar,** the same as with the old calendar. This extension does not introduce any new options, it just works.

Theming
-------

Skinning is much improved. Just copy `/skin/frontend/base/default/css/calendarview.css` to your theme and edit.

JavaScript source files have been placed in `skin` directory to allow for easier modification. As an example this extension now comes with French and German versions in the appropriate `default/french` and `default/german` skins.

