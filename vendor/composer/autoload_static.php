<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit25195498ef878f38a81aae759accd0c7
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        'e69f7f6ee287b969198c3c9d6777bd38' => __DIR__ . '/..' . '/symfony/polyfill-intl-normalizer/bootstrap.php',
        '023d27dca8066ef29e6739335ea73bad' => __DIR__ . '/..' . '/symfony/polyfill-php70/bootstrap.php',
        '25072dd6e2470089de65ae7bf11d3109' => __DIR__ . '/..' . '/symfony/polyfill-php72/bootstrap.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        'f598d06aa772fa33d905e87be6398fb1' => __DIR__ . '/..' . '/symfony/polyfill-intl-idn/bootstrap.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Php72\\' => 23,
            'Symfony\\Polyfill\\Php70\\' => 23,
            'Symfony\\Polyfill\\Intl\\Normalizer\\' => 33,
            'Symfony\\Polyfill\\Intl\\Idn\\' => 26,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Cache\\' => 10,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
            'Google\\Protobuf\\' => 16,
            'Google\\Auth\\' => 12,
            'GPBMetadata\\Google\\Protobuf\\' => 28,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Php72\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php72',
        ),
        'Symfony\\Polyfill\\Php70\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php70',
        ),
        'Symfony\\Polyfill\\Intl\\Normalizer\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-intl-normalizer',
        ),
        'Symfony\\Polyfill\\Intl\\Idn\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-intl-idn',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/cache/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        'Google\\Protobuf\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf',
        ),
        'Google\\Auth\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/auth/src',
        ),
        'GPBMetadata\\Google\\Protobuf\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/protobuf/src/GPBMetadata/Google/Protobuf',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'ArithmeticError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/ArithmeticError.php',
        'AssertionError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/AssertionError.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'DivisionByZeroError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/DivisionByZeroError.php',
        'Error' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/Error.php',
        'Google\\Auth\\ApplicationDefaultCredentials' => __DIR__ . '/..' . '/google/auth/src/ApplicationDefaultCredentials.php',
        'Google\\Auth\\CacheTrait' => __DIR__ . '/..' . '/google/auth/src/CacheTrait.php',
        'Google\\Auth\\CredentialsLoader' => __DIR__ . '/..' . '/google/auth/src/CredentialsLoader.php',
        'Google\\Auth\\Credentials\\AppIdentityCredentials' => __DIR__ . '/..' . '/google/auth/src/Credentials/AppIdentityCredentials.php',
        'Google\\Auth\\Credentials\\GCECredentials' => __DIR__ . '/..' . '/google/auth/src/Credentials/GCECredentials.php',
        'Google\\Auth\\Credentials\\IAMCredentials' => __DIR__ . '/..' . '/google/auth/src/Credentials/IAMCredentials.php',
        'Google\\Auth\\Credentials\\ServiceAccountCredentials' => __DIR__ . '/..' . '/google/auth/src/Credentials/ServiceAccountCredentials.php',
        'Google\\Auth\\Credentials\\ServiceAccountJwtAccessCredentials' => __DIR__ . '/..' . '/google/auth/src/Credentials/ServiceAccountJwtAccessCredentials.php',
        'Google\\Auth\\Credentials\\UserRefreshCredentials' => __DIR__ . '/..' . '/google/auth/src/Credentials/UserRefreshCredentials.php',
        'Google\\Auth\\FetchAuthTokenInterface' => __DIR__ . '/..' . '/google/auth/src/FetchAuthTokenInterface.php',
        'Google\\Auth\\HttpHandler\\Guzzle5HttpHandler' => __DIR__ . '/..' . '/google/auth/src/HttpHandler/Guzzle5HttpHandler.php',
        'Google\\Auth\\HttpHandler\\Guzzle6HttpHandler' => __DIR__ . '/..' . '/google/auth/src/HttpHandler/Guzzle6HttpHandler.php',
        'Google\\Auth\\HttpHandler\\HttpHandlerFactory' => __DIR__ . '/..' . '/google/auth/src/HttpHandler/HttpHandlerFactory.php',
        'Google\\Auth\\Middleware\\AuthTokenMiddleware' => __DIR__ . '/..' . '/google/auth/src/Middleware/AuthTokenMiddleware.php',
        'Google\\Auth\\Middleware\\ScopedAccessTokenMiddleware' => __DIR__ . '/..' . '/google/auth/src/Middleware/ScopedAccessTokenMiddleware.php',
        'Google\\Auth\\Middleware\\SimpleMiddleware' => __DIR__ . '/..' . '/google/auth/src/Middleware/SimpleMiddleware.php',
        'Google\\Auth\\OAuth2' => __DIR__ . '/..' . '/google/auth/src/OAuth2.php',
        'Google\\Auth\\Subscriber\\AuthTokenSubscriber' => __DIR__ . '/..' . '/google/auth/src/Subscriber/AuthTokenSubscriber.php',
        'Google\\Auth\\Subscriber\\ScopedAccessTokenSubscriber' => __DIR__ . '/..' . '/google/auth/src/Subscriber/ScopedAccessTokenSubscriber.php',
        'Google\\Auth\\Subscriber\\SimpleSubscriber' => __DIR__ . '/..' . '/google/auth/src/Subscriber/SimpleSubscriber.php',
        'Normalizer' => __DIR__ . '/..' . '/symfony/polyfill-intl-normalizer/Resources/stubs/Normalizer.php',
        'ParseError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/ParseError.php',
        'SessionUpdateTimestampHandlerInterface' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/SessionUpdateTimestampHandlerInterface.php',
        'TypeError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/TypeError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit25195498ef878f38a81aae759accd0c7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit25195498ef878f38a81aae759accd0c7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit25195498ef878f38a81aae759accd0c7::$classMap;

        }, null, ClassLoader::class);
    }
}
