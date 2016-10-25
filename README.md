Usage
=====

Run the app
-----------
```
christoph@hephaistos:example-php$ /usr/bin/php7.0 src/main/php/index.php hallo
hello
christoph@hephaistos:example-php$ /usr/bin/php7.0 src/main/php/index.php blubb
not in dictionary
```

Install dependencies
--------------------
```
christoph@hephaistos:example-php$ /usr/bin/php7.0 $COMPOSER_HOME/composer.phar $
```

Run the tests
-------------
```
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
