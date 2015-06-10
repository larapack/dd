# dd
`dd` is a helper method in Laravel. This package will add the `dd` to your application.

# Install
Run `composer require larapack/dd 1.*`

# For Laravel
[Laravel](http://laravel.com) already have the `dd` function in its helpers.
The `dd` function from this package is equal to the one in Laravel 5.

If you wish to override the Laravel 4 function with this one, please follow those few steps:
- Open `public/index.php`
- Add `require "../vendor/larapack/dd/src/helper.php";` after the opening `<?php`-tag
