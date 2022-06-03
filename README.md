Executing

```shell
vendor/bin/phpstan analyze src vendor/symfony --debug
```

produces

```
Note: Using configuration file /phpstan-timeout-error/phpstan.neon.dist.
/phpstan-timeout-error/src/Foo.php
/phpstan-timeout-error/vendor/symfony/config/ConfigCacheFactoryInterface.php
/phpstan-timeout-error/vendor/symfony/config/Loader/LoaderResolver.php
/phpstan-timeout-error/vendor/symfony/config/Loader/LoaderInterface.php
/phpstan-timeout-error/vendor/symfony/config/Loader/ParamConfigurator.php
/phpstan-timeout-error/vendor/symfony/config/Loader/FileLoader.php
/phpstan-timeout-error/vendor/symfony/config/Loader/Loader.php
/phpstan-timeout-error/vendor/symfony/config/Loader/LoaderResolverInterface.php
/phpstan-timeout-error/vendor/symfony/config/Loader/DelegatingLoader.php
/phpstan-timeout-error/vendor/symfony/config/Loader/GlobFileLoader.php
/phpstan-timeout-error/vendor/symfony/config/ResourceCheckerConfigCacheFactory.php
/phpstan-timeout-error/vendor/symfony/config/FileLocator.php
/phpstan-timeout-error/vendor/symfony/config/Builder/Method.php
/phpstan-timeout-error/vendor/symfony/config/Builder/ClassBuilder.php
/phpstan-timeout-error/vendor/symfony/config/Builder/ConfigBuilderGeneratorInterface.php
/phpstan-timeout-error/vendor/symfony/config/Builder/Property.php
/phpstan-timeout-error/vendor/symfony/config/Builder/ConfigBuilderGenerator.php
/phpstan-timeout-error/vendor/symfony/config/Builder/ConfigBuilderInterface.php
/phpstan-timeout-error/vendor/symfony/config/FileLocatorInterface.php
/phpstan-timeout-error/vendor/symfony/config/Resource/ReflectionClassResource.php
PHP Fatal error:  Maximum execution time of 1 second exceeded in phar:///phpstan-timeout-error/vendor/phpstan/phpstan/phpstan.phar/src/Analyser/NameScope.php on line 60
Fatal error: Maximum execution time of 1 second exceeded in phar:///phpstan-timeout-error/vendor/phpstan/phpstan/phpstan.phar/src/Analyser/NameScope.php on line 60
```
