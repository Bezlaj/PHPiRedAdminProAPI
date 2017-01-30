# PHPiRedAdminProAPI
> A complete PHP iRedAdminPro API class [iRedAdminProAPI API](http://www.iredmail.org/docs/iredadmin-pro.restful.api.html) for iRedAdminPro.    
> Compliant with the Jan 26, 2017 iRedAdminPro API update.

Requirements
---------

* PHP5
* Curl for PHP5 must be enabled.
* iRedAdmin-Pro, more information at (http://www.iredmail.org/admin_panel.html).

Installation
---------

* Copy iRedAdminProAPI.php on your server and include iRedAdminProAPI.php and config.php in your script:
```php
include("iRedAdminProAPI.php");
include("config.php");
```

Examples
---------

```php
include("iRedAdminProAPI.php");
include("config.php");
$iRedAdminProAPI = new iRedAdminProAPI();
$login = $iRedAdminProAPI->get_login($API_HOST, $USERNAME, $PASSWORD);
```

Create new user example:
```php
include("iRedAdminProAPI.php");
include("config.php");
$iRedAdminProAPI = new iRedAdminProAPI();
$login = $iRedAdminProAPI->get_login($API_HOST, $USERNAME, $PASSWORD);
$MAIL = 'new@example.com';
$NAME = 'Display name new';
$PASSWORD = 'New_passw0rd';
$LANGUAGE = 'en_US';
$QUOTA = '1024';
$create_user = $iRedAdminProAPI->create_user ($API_HOST, $MAIL, $NAME, $PASSWORD, $LANGUAGE, $QUOTA);
```


Functions
------------

For a complete documentation check [docs.html](docs.html)

Contact me
------------
You can contact me [via Telegram](https://telegram.me/Bezlaj) but if you have an issue please [open](https://github.com/Bezlaj/PHPiRedAdminProAPI/issues) one.

Support me
------------
Support me and [![Support](https://supporterhq.com/api/b/apl1fdaqapzf96klfakpl3g9g)](https://supporterhq.com/give/apl1fdaqapzf96klfakpl3g9g)