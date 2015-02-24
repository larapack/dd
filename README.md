# dd
`dd` is a helper method in Laravel. This package will add the `dd` to your application.

# Install
Run `composer require marktopper/dd 1.*`

# For Laravel
[Laravel](http://laravel.com) already have the `dd` function in its helpers.
The `dd` function from this package is equal to the one in Laravel 5.

If you wish to override the Laravel 4 function with this one, you have to move the `"marktopper/dd": "1.*"` above the `"laravel/framework": "___"` in the `require` section of your `composer.json`.
And then run `composer dump-autoload`
