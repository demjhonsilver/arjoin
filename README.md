# Arjoin - A simple PHP string binder / URL-friendly slugs package.

Arjoin is a PHP package that provides a simple way to convert strings/characters to URL-friendly slugs by replacing spaces and special characters with hyphens. 


## Table of Contents

- [Installation](#installation)
- [Release Notes](#release-notes)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Installation

To use Arjoin in your PHP project, you can install it via Composer. Make sure you have Composer installed in your project. If you don't have Composer, you can download and install it from [https://getcomposer.org/](https://getcomposer.org/).


### To install the Arjoin, you can use the following composer command:

```bash
composer require dsilver/arjoin:1.0.0-alpha.9
```


Arjoin will be automatically downloaded and added to your project.

## Release-notes

Version 1.0.0-alpha.9

---------






## Usage

Arjoin provides a simple method to generate URL-friendly slugs from strings.

```php
<?php

use Dsilver\Arjoin\joiner;

// Use your package's classes and methods
$output = joiner::select("This is a Sample String");
```

result:
```html
this-is-a-sample-string
```

You can replace "This is a Sample String" with your own string to generate a slug.

--------------
to test in laravel

----------
add to your app.blade.php

----------

```html
  {{ use Dsilver\Arjoin\joiner::select("This is a Sample String") }}
```

-------

Example:

--------

domain-dot-com/articles/title

domain-dot-com/articles/The Benefits of Regular Exercise

----------------
example: Articles data from DB
---------
```php
$url_article = joiner::select($article.title);
```


-------

result:

```html
domain-dot-com/articles/the-benefits-of-regular-exercise
```

-------------

example:

```php
$characters = "Thís-Ís å Spéciäl Stríng!";

$sample = joiner::select($characters);

```
-----

result: 

-----
th-s-s-sp-ci-l-str-ng

--------
Advance examples:
----------

```php
<?php

use Dsilver\Arjoin\joiner;

// Create a Arjoin object with an initial string
$chain =joiner::select("This is a Sample String");

// Perform some operations using the chainable methods
$result = $chain
    ->uppercase()         // Converts the string to uppercase
    ->replace("Sample", "Example") // Replaces "Sample" with "Example"
    ->truncate(10)       // Truncates the string to 10 characters
    ->getValue();         // Gets the resulting string

echo $result; // Output the result

```

-----------

```php
<?php

use Dsilver\Arjoin\joiner;

// Create a Arjoin object with an initial string
$chain =joiner::select("This is a Sample String");

// Perform operations using chainable methods and store the intermediate results
$uppercaseResult = $chain->uppercase();
$replaceResult = $uppercaseResult->replace("Sample", "Example");
$truncateResult = $replaceResult->truncate(10);

// Get the final result
$finalString = $truncateResult->getValue();

// Output the results at each step
echo "Original String: " . $chain->getValue() . "<br>";
echo "Uppercase Result: " . $uppercaseResult->getValue() . "<br>";
echo "Replace Result: " . $replaceResult->getValue() . "<br>";
echo "Truncate Result: " . $truncateResult->getValue() . "<br>";
echo "Final Result: " . $finalString;

```

---------

## Contributing

If you'd like to contribute to the development of Arjoin, you can follow these steps:

- Fork the Arjoin repository on GitHub.
- Clone your forked repository to your local development environment.
- Create a new branch for your feature or bug fix.
- Implement your changes.
- Write unit tests if necessary.
- Run PHPUnit to ensure your code passes the tests.
- Commit your changes and push them to your GitHub repository.
- Create a pull request (PR) to the original Arjoin repository.

-------

Please make sure to adhere to our code of conduct and follow our contribution guidelines.

## License

Arjoin is licensed under the [MIT License](https://github.com/demjhonsilver/arjoin/blob/main/LICENSE.md). See the LICENSE file for details.