# Scaffold Admin Template for Laravel
The package will generate admin template and it's dependencies for you, 
so you can start to create your pages directly. No need to set up the template from the scratch

## Installation

use `composer require` command
```
composer require bluemagenta/admin-template
```

copy the files
```
php artisan preset admin
```

install the assets
```
npm install
```

add the compile command to `package.json`
```
...
"scripts": {
  ... //existing command (dev, prod, etc)
  "dev-admin: npm run dev -- --env.mixfile=admin.mix.js"
  "prod-admin: npm run prod -- --env.mixfile=admin.mix.js"
  "watch-admin: npm run watch -- --env.mixfile=admin.mix.js"
},
...
```

then run it
```
npm run dev-admin
```

## How to Use
just extend `templates/admin.blade.php` or `templates/blank.blade.php` in your page

```blade
@extends('templates.admin')

//or

@extends('templates.blank')
``` 

open `templates\components` to edit the `header`, `sidebar`, `footer`.
if you need more customization, feel free to edit everything else in `templates` folder

The templates is created by using [Coreui - free version](https://coreui.io/) which is using [bootstrap 4](https://getbootstrap.com/). 
Please visit these sites for the preview and more information about any available UI components.

you can also open `views/examples` folder for my examples.

## The Generated Files

The package will add these files to your `resources/` folder:
```
js/
|- admin.js

sass/
|- admin.scss

views/
|- templates/
| |- components/*    //blade components for any parts in the template
| |- admin.blade.php
| |- blank.blade.php
|- examples/
| | forms.blade.php  //example for any form input libraries
| | js.blade.php     //example for a page with js script
| | login.blade.php
```

## Uninstall
This package is intended for one time use only, during initial setup of your project.
After the files generated successfully, you can uninstall it safely without losing the files

```
composer remove bluemagenta/admin-template
```

## Dependencies

Besides [Coreui - free version](https://coreui.io/) and [bootstrap 4](https://getbootstrap.com/), the package also add a few js library:

- [Font Awesome](https://fontawesome.com/)
- [Datatables](https://datatables.net/)
- [Dropzone](https://www.dropzonejs.com/)
- [Datetime Picker](https://eonasdan.github.io/bootstrap-datetimepicker/)
- [Select2](https://select2.org/)
- [Summernote](https://summernote.org/)
- [Showdown](https://github.com/showdownjs/showdown)

If you won't use one of it, you can remove the librariy in `package.json`, `admin/admin.js`, and `admin/admin.scss` files

## Compatibility
There's no automatic test yet, but it should work on Laravel 5.5 and above

## License
The MIT License (MIT). Please see [the file](license.md) for more information.

## Additional Notes
This package is open to public, but is intended for my personal use. 

Feel free to use it if you find it helpful. When you find something lack in the package, you can extend it by forking it.