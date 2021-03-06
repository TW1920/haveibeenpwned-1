# haveibeenpwned
A PHP Library built for [';--have i been pwned?](https://haveibeenpwned.com) 

[![Actively Maintained](https://maintained.tech/badge.svg)](https://maintained.tech/)
[![Latest Stable Version](https://poser.pugx.org/ridvanbaluyos/haveibeenpwned/v/stable)](https://packagist.org/packages/ridvanbaluyos/haveibeenpwned) [![Total Downloads](https://poser.pugx.org/ridvanbaluyos/haveibeenpwned/downloads)](https://packagist.org/packages/ridvanbaluyos/haveibeenpwned) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/ridvanbaluyos/haveibeenpwned/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/ridvanbaluyos/haveibeenpwned/?branch=master) [![Build Status](https://scrutinizer-ci.com/g/ridvanbaluyos/haveibeenpwned/badges/build.png?b=master)](https://scrutinizer-ci.com/g/ridvanbaluyos/haveibeenpwned/build-status/master) [![Codacy Badge](https://api.codacy.com/project/badge/Grade/4fe970650caa4e0fad6ef651ff289a55)](https://www.codacy.com/app/ridvanbaluyos/haveibeenpwned?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=ridvanbaluyos/haveibeenpwned&amp;utm_campaign=Badge_Grade) [![License](https://poser.pugx.org/ridvanbaluyos/haveibeenpwned/license)](https://packagist.org/packages/ridvanbaluyos/haveibeenpwned)

## Table of contents ##
- [Requirements](#requirements)
- [Installation](#installation)
- [Usage](#usage)
    - [Breached Account](#breached-account)
    - [Breached Sites](#breached-sites)
    - [Data Classes](#data-classes)
    - [Pastes Account](#pastes-account)
    - [Pwned Passwords](#chaining-options)
- [References](#references)

### Requirements ###
1. This uses only [API v2](https://haveibeenpwned.com/API/v2).
2. PHP 7 or higher.

### Installation ###
Open your `composer.json` file and add the following to the `require` key:

    "ridvanbaluyos/haveibeenpwned": "v0.1"

---

After adding the key, run composer update from the command line to install the package

```bash
composer install
```

or

```bash
composer update
```

### Usage ##
```php
<?php
error_reporting(E_ALL);
// namespace and autoloaders
use \Ridvanbaluyos\Pwned\BreachedAccount as BreachedAccount;
require_once __DIR__ . '/vendor/autoload.php';

$breachedAccount = new BreachedAccount();
$result = $breachedAccount->setAccount('test@example.com')->get();
```

#### Breached Account
```php
<?php
use \Ridvanbaluyos\Pwned\BreachedAccount as BreachedAccount;

$breachedAccount = new BreachedAccount();
$result = $breachedAccount->setAccount('test@example.com')
        ->setIncludeUnverified()
        ->setDomain('tumblr.com')
        ->get();
```

#### Breached Sites
```php
<?php
use \Ridvanbaluyos\Pwned\Breaches as Breaches;

$breachedSites = new Breaches();
$result = $breachedSites->setDomain('adobe.com')->get();
```

#### Data Classes
```php
<?php
use \Ridvanbaluyos\Pwned\DataClasses as DataClasses;

$dataClasses = new DataClasses();
$result = $dataClasses->get();
````

#### Pastes Account
```php
<?php
use \Ridvanbaluyos\Pwned\PasteAccount as PasteAccount;

$pasteAccount = new PasteAccount();
$result = $pasteAccount->setAccount('test@example.com')->get();
```

#### Pwned Passwords
*Note: Please be careful when using this. Do not send any password you actively use to a third-party service - even this one!*
```php
<?php
use Ridvanbaluyos\Pwned\PwnedPasswords as PwnedPasswords;

$pwnedPasswords = new PwnedPasswords();
$result = $pwnedPasswords->setPassword('password123')->get();
```

## References
* [Have I BeenPwned API Documentation](https://haveibeenpwned.com/API/v2)
* [If your email address is on this list of 711,000,000, change your password right now](http://metro.co.uk/2017/08/30/is-your-email-address-one-of-711000000-found-on-a-spambot-server-6888834/)
