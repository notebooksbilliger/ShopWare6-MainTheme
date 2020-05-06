# Vendors

Vendors should be imported via `@import` directive. Due to PHP SASS compiler incompatibility it's required to change 
the extension of `*.css` files to `*.scss`. It allows to compile them into single output `all.css` file instead of 
adding imports on top of it.

If you have to override a section of any vendor, I recommend you have an 8th folder called `vendors-extensions/` in 
which you may have files named exactly after the vendors they overwrite. 
For instance, `vendors-extensions/_bootstrap.scss` is a file containing all CSS rules intended to re-declare some of 
Bootstrap’s default CSS. This is to avoid editing the vendor files themselves, which is generally not a good idea.

Reference: [Sass Guidelines](http://sass-guidelin.es/) > [Architecture](http://sass-guidelin.es/#architecture) > [Vendors folder](http://sass-guidelin.es/#vendors-folder)
