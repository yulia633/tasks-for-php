install:
	composer install


validate:
	composer validate


lint:
	composer exec --verbose phpcs -- --standard=PSR12 src tests


test:
	composer exec -v XDEBUG_MODE=coverage phpunit tests


test-coverage:
	composer exec -v XDEBUG_MODE=coverage phpunit tests -- --coverage-clover build/logs/clover.xml
