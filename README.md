Usage
=====

Run the app
-----------
```bash
christoph@hephaistos:example-php$ /usr/bin/php7.0 src/main/php/index.php hallo
hello
christoph@hephaistos:example-php$ /usr/bin/php7.0 src/main/php/index.php blubb
not in dictionary
```

Install dependencies
--------------------
First make sure, that you have “installed” (i.e. copied) the composer.phar to $COMPOSER_HOME according to this manual: https://getcomposer.org/download/
After successful installation, you can call composer this way:
```bash
christoph@hephaistos:example-php$ /usr/bin/php7.0 $COMPOSER_HOME/composer.phar --version
Composer version 1.2.0 2016-07-19 01:28:52
```
and now you can install the dependencies in project-local vendor directory via:
```bash
christoph@hephaistos:example-php$ /usr/bin/php7.0 $COMPOSER_HOME/composer.phar update
```
Composer has loaded now the PHPUnit and all transitive dependencies to $BASE_DIR/vendor. There is also a composer.lock file created. This file represents something like a pip freeze and contains all versions of composer installed transitive dependencies. Keeping this file might be helpful reproducing build if some dependencies are using kind of “latest” references. 

Run the tests
-------------
```bash
christoph@hephaistos:example-php$ vendor/phpunit/phpunit/phpunit --debug --log-junit=php-unit.xml src/test/php
PHPUnit 5.5.0 by Sebastian Bergmann and contributors.
 
 
Starting test 'TranslatorTest::testTranslateDeToEnPositive'.
.
Starting test 'TranslatorTest::testTranslateDeToEnNegative'.
.                                                                  2 / 2 (100%)
 
Time: 24 ms, Memory: 4.00MB
 
OK (2 tests, 2 assertions)
````
This executes all tests that are found in src/test/php and creates a php-unit.xml result in $BASE_DIR:
```xml
<?xml version="1.0" encoding="UTF-8"?>
<testsuites>
  <testsuite name="src/test/php" tests="2" assertions="2" failures="0" errors="0" time="0.002224">
    <testsuite name="TranslatorTest" file="/home/christoph/example-php/src/test/php/TranslatorTest.php" tests="2" assertions="2" failures="0" errors="0" time="0.002224">
      <testcase name="testTranslateDeToEnPositive" class="TranslatorTest" file="/home/christoph/example-php/src/test/php/TranslatorTest.php" line="8" assertions="1" time="0.002044"/>
      <testcase name="testTranslateDeToEnNegative" class="TranslatorTest" file="/home/christoph/example-php/src/test/php/TranslatorTest.php" line="18" assertions="1" time="0.000180"/>
    </testsuite>
  </testsuite>
</testsuites>
```

Or: do it all together within build.sh :-)
