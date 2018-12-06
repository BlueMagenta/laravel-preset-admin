# Scaffold Admin Template for Laravel
The package will generate admin template (and it's dependencies) for you, 
so you can start to create your pages directly. No need to setting up the template from the scratch

## Installation

use `composer require` command
```
composer require bluemagenta/admin-template
```

copy the files
```
php artisan preset admin
```

install the assets by using
```
npm install
``` 

and compile it
```
npm run dev
```

## How to Use
just extend `templates/admin.blade.php` or `templates/auth.blade.php` in your page

```blade
@extends('templates.admin')

//or

@extends('templates.auth')
``` 

you can edit the `logo`, `sidebar menu`, or `header menu` in `templates/*` and `templates/partials/*` files.
if you need more customization, feel free to edit everything else

Currently the templates is based on [Coreui - free version](https://coreui.io/) which is using [bootstrap 4](https://getbootstrap.com/). 
Please visit these sites for the preview and more information about any available UI components.

you can also open `examples/admin.blade.php` or `examples/login.blade.php` for my examples.

## The Generated Files

The package will add these files to your `resources/` folder:
```
admin/
|- admin.js
|- admin.css
|- img/*   // any image needed for example page

views/
|- templates/
| |- bootstrap4/*  //blade components for bootstrap component
| |- coreui/*      //blade components for coreui layout
| |- partials/
| | |- header-menu.blade.php
| | |- sidebar-menu.blade.php
| |- admin.blade.php
| |- auth.blade.php
|- examples/
| | admin.blade.php
| | login.blade.php
```

## Uninstall
This package is intended for one time use only, during inital setup of your project.
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

Feel free to use it if you find its helpful. When you find something lack in the package, you can extend it by forking it.