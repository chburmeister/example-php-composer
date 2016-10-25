#!/bin/bash
BASE_DIR=$(pwd)
SRC_DIR=$BASE_DIR/src/
TARGET_DIR=$BASE_DIR/target/
VENDOR_DIR=$BASE_DIR/vendor/
PHP_EXE=/usr/bin/php7.0
PHP_SRC=$SRC_DIR/main/php/
PHP_TEST=$SRC_DIR/test/php/
COMPOSER=$COMPOSER_HOME/composer.phar
PHPUNIT=$VENDOR_DIR/phpunit/phpunit/phpunit
 
# clean
echo ">> CLEAN"
rm -rfv $TARGET_DIR $VENDOR_DIR composer.lock
 
# init
echo ">> INIT"
$PHP_EXE --version
mkdir $TARGET_DIR
 
# test-prepare
echo ">> TEST-PREPARE"
$PHP_EXE $COMPOSER update
 
# test
echo ">> TEST"
$PHPUNIT --debug --log-junit=$TARGET_DIR/tests/php-unit.xml --testdox-html=$TARGET_DIR/tests/testdox.html $PHP_TEST
 
# package
echo ">> PACKAGE"
cd $PHP_SRC && zip -r $TARGET_DIR/example-php.zip .
 
# run the app
#$PHP src/main/php/index.php hallo
