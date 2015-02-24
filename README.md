# dd
`dd` is a helper method in Laravel. This package will add the `dd` to your application.

# Install
Run `composer require marktopper/dd 1.*`

# For Laravel
[Laravel](http://laravel.com) already have the `dd` function in its helpers.
The `dd` function from this package is equal to the one in Laravel 5.

If you wish to override the Laravel 4 function with this one, please follow those few steps:
- Open `vendor/composer/autoload_files.php`
- Move the `$vendorDir . '/marktopper/dd/src/helper.php',` line above the `$vendorDir . '/laravel/framework/src/Illuminate/Support/helpers.php',` line   
__OBS: Currently the above steps have to be done after each time composer dumps the autoload.__
