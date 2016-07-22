# zf2-routing-tester
Just a little app to match URLs against a Router

How to install:
```
git clone git@github.com:Koopzington/zf2-routing-tester.git
cd zf2-routing-tester
composer install
```
After that, replace the local module.config.php with the one of the module you want to test.

When you're done with that you can check Urls the following way:
```
php index.php http://localhost/whatever/route/you/want/to/test
```
