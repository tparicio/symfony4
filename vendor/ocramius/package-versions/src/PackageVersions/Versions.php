<?php

declare(strict_types=1);

namespace PackageVersions;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = 'symfony/website-skeleton';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    public const VERSIONS          = array (
  'composer/semver' => '1.5.0@46d9139568ccb8d9e7cdd4539cab7347568a5e2e',
  'composer/xdebug-handler' => '1.3.3@46867cbf8ca9fb8d60c506895449eb799db1184f',
  'doctrine/annotations' => 'v1.7.0@fa4c4e861e809d6a1103bd620cce63ed91aedfeb',
  'doctrine/cache' => 'v1.8.0@d768d58baee9a4862ca783840eca1b9add7a7f57',
  'doctrine/collections' => 'v1.6.2@c5e0bc17b1620e97c968ac409acbff28b8b850be',
  'doctrine/common' => 'v2.11.0@b8ca1dcf6b0dc8a2af7a09baac8d0c48345df4ff',
  'doctrine/dbal' => 'v2.9.2@22800bd651c1d8d2a9719e2a3dc46d5108ebfcc9',
  'doctrine/doctrine-bundle' => '1.11.2@28101e20776d8fa20a00b54947fbae2db0d09103',
  'doctrine/doctrine-cache-bundle' => '1.3.5@5514c90d9fb595e1095e6d66ebb98ce9ef049927',
  'doctrine/doctrine-migrations-bundle' => 'v2.0.0@4c9579e0e43df1fb3f0ca29b9c20871c824fac71',
  'doctrine/event-manager' => 'v1.0.0@a520bc093a0170feeb6b14e9d83f3a14452e64b3',
  'doctrine/inflector' => 'v1.3.0@5527a48b7313d15261292c149e55e26eae771b0a',
  'doctrine/instantiator' => '1.2.0@a2c590166b2133a4633738648b6b064edae0814a',
  'doctrine/lexer' => '1.1.0@e17f069ede36f7534b95adec71910ed1b49c74ea',
  'doctrine/migrations' => '2.1.1@a89fa87a192e90179163c1e863a145c13337f442',
  'doctrine/orm' => 'v2.6.3@434820973cadf2da2d66e7184be370084cc32ca8',
  'doctrine/persistence' => '1.1.1@3da7c9d125591ca83944f477e65ed3d7b4617c48',
  'doctrine/reflection' => 'v1.0.0@02538d3f95e88eb397a5f86274deb2c6175c2ab6',
  'egulias/email-validator' => '2.1.11@92dd169c32f6f55ba570c309d83f5209cefb5e23',
  'fig/link-util' => '1.0.0@1a07821801a148be4add11ab0603e4af55a72fac',
  'friendsofphp/php-cs-fixer' => 'v2.15.3@705490b0f282f21017d73561e9498d2b622ee34c',
  'jdorn/sql-formatter' => 'v1.2.17@64990d96e0959dff8e059dfcdc1af130728d92bc',
  'monolog/monolog' => '1.25.1@70e65a5470a42cfec1a7da00d30edb6e617e8dcf',
  'ocramius/package-versions' => '1.5.1@1d32342b8c1eb27353c8887c366147b4c2da673c',
  'ocramius/proxy-manager' => '2.2.3@4d154742e31c35137d5374c998e8f86b54db2e2f',
  'pdepend/pdepend' => '2.5.2@9daf26d0368d4a12bed1cacae1a9f3a6f0adf239',
  'php-cs-fixer/diff' => 'v1.3.0@78bb099e9c16361126c86ce82ec4405ebab8e756',
  'phpdocumentor/reflection-common' => '2.0.0@63a995caa1ca9e5590304cd845c15ad6d482a62a',
  'phpdocumentor/reflection-docblock' => '4.3.2@b83ff7cfcfee7827e1e78b637a5904fe6a96698e',
  'phpdocumentor/type-resolver' => '1.0.1@2e32a6d48972b2c1976ed5d8967145b6cec4a4a9',
  'phpmd/phpmd' => '2.7.0@a05a999c644f4bc9a204846017db7bb7809fbe4c',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.0@6c001f1daafa3a3ac1d8ff69ee4db8e799a654dd',
  'sensio/framework-extra-bundle' => 'v5.4.1@585f4b3a1c54f24d1a8431c729fc8f5acca20c8a',
  'squizlabs/php_codesniffer' => '3.4.2@b8a7362af1cc1aadb5bd36c3defc4dda2cf5f0a8',
  'swiftmailer/swiftmailer' => 'v6.2.1@5397cd05b0a0f7937c47b0adcb4c60e5ab936b6a',
  'symfony/asset' => 'v4.3.4@3f97e57596884f7b9158d564a533112a0d19dbdd',
  'symfony/cache' => 'v4.3.4@1d8f7fee990c586f275cde1a9fc883d6b1e2d43e',
  'symfony/cache-contracts' => 'v1.1.5@ec5524b669744b5f1dc9c66d3c2b091eb7e7f0db',
  'symfony/config' => 'v4.3.4@07d49c0f823e0bc367c6d84e35b61419188a5ece',
  'symfony/console' => 'v4.3.4@de63799239b3881b8a08f8481b22348f77ed7b36',
  'symfony/debug' => 'v4.3.4@afcdea44a2e399c1e4b52246ec8d54c715393ced',
  'symfony/dependency-injection' => 'v4.3.4@d3ad14b66ac773ba6123622eb9b5b010165fe3d9',
  'symfony/doctrine-bridge' => 'v4.3.4@d2967b2b43788bd3a7cddeb8bd4567e142b3821c',
  'symfony/dotenv' => 'v4.3.4@1785b18148a016b8f4e6a612291188d568e1f9cd',
  'symfony/event-dispatcher' => 'v4.3.4@429d0a1451d4c9c4abe1959b2986b88794b9b7d2',
  'symfony/event-dispatcher-contracts' => 'v1.1.5@c61766f4440ca687de1084a5c00b08e167a2575c',
  'symfony/expression-language' => 'v4.3.4@c8b47d8820d3bf75f757eec8a2647584c14cf0c6',
  'symfony/filesystem' => 'v4.3.4@9abbb7ef96a51f4d7e69627bc6f63307994e4263',
  'symfony/finder' => 'v4.3.4@86c1c929f0a4b24812e1eb109262fc3372c8e9f2',
  'symfony/flex' => 'v1.4.6@133e649fdf08aeb8741be1ba955ccbe5cd17c696',
  'symfony/form' => 'v4.3.4@eba11fd575e791d72030cb59215a9948791f1e74',
  'symfony/framework-bundle' => 'v4.3.4@0fd8e354cef6b3da666e585d7ae75aeea2423833',
  'symfony/http-client' => 'v4.3.4@9a4fa769269ed730196a5c52c742b30600cf1e87',
  'symfony/http-client-contracts' => 'v1.1.6@6005fe61a33724405d56eb5b055d5d370192a1bd',
  'symfony/http-foundation' => 'v4.3.4@d804bea118ff340a12e22a79f9c7e7eb56b35adc',
  'symfony/http-kernel' => 'v4.3.4@5e0fc71be03d52cd00c423061cfd300bd6f92a52',
  'symfony/inflector' => 'v4.3.4@b25a8dc15fada858432efa083c1ecd2cef5991a7',
  'symfony/intl' => 'v4.3.4@8db5505703c5bdb23d524fd994dad2f781966538',
  'symfony/mime' => 'v4.3.4@987a05df1c6ac259b34008b932551353f4f408df',
  'symfony/monolog-bridge' => 'v4.3.4@8a491edacd54e0214f5e7fb254710d30682e7bc1',
  'symfony/monolog-bundle' => 'v3.4.0@7fbecb371c1c614642c93c6b2cbcdf723ae8809d',
  'symfony/options-resolver' => 'v4.3.4@81c2e120522a42f623233968244baebd6b36cb6a',
  'symfony/orm-pack' => 'v1.0.6@36c2a928482dc5f05c5c1c1b947242ae03ff1335',
  'symfony/polyfill-intl-icu' => 'v1.12.0@66810b9d6eb4af54d543867909d65ab9af654d7e',
  'symfony/polyfill-intl-idn' => 'v1.12.0@6af626ae6fa37d396dc90a399c0ff08e5cfc45b2',
  'symfony/polyfill-mbstring' => 'v1.12.0@b42a2f66e8f1b15ccf25652c3424265923eb4f17',
  'symfony/polyfill-php72' => 'v1.12.0@04ce3335667451138df4307d6a9b61565560199e',
  'symfony/polyfill-php73' => 'v1.12.0@2ceb49eaccb9352bff54d22570276bb75ba4a188',
  'symfony/process' => 'v4.3.4@e89969c00d762349f078db1128506f7f3dcc0d4a',
  'symfony/property-access' => 'v4.3.4@bb0c302375ffeef60c31e72a4539611b7f787565',
  'symfony/property-info' => 'v4.3.4@29546235b37f7bd279c763314cd4c962aedd1e6d',
  'symfony/routing' => 'v4.3.4@ff1049f6232dc5b6023b1ff1c6de56f82bcd264f',
  'symfony/security-bundle' => 'v4.3.4@97ba8648e718999793e79ab4d1f1582c8d19be9d',
  'symfony/security-core' => 'v4.3.4@a8c67a8bc6bd8012c5d6b70cb030ca3422476caa',
  'symfony/security-csrf' => 'v4.3.4@d218ba086ef4a68081f3dd5ec11611f5d64d58f3',
  'symfony/security-guard' => 'v4.3.4@cf06aa4f8ea38a769476c4f5989f1dc400a308a1',
  'symfony/security-http' => 'v4.3.4@65281f9b7c7a77cccaa5b89026ef2a02940dc2cc',
  'symfony/serializer' => 'v4.3.4@702900654e0ceed9ca7a9eccffb1d6ec69d7c8b6',
  'symfony/serializer-pack' => 'v1.0.2@c5f18ba4ff989a42d7d140b7f85406e77cd8c4b2',
  'symfony/service-contracts' => 'v1.1.6@ea7263d6b6d5f798b56a45a5b8d686725f2719a3',
  'symfony/stopwatch' => 'v4.3.4@1e4ff456bd625be5032fac9be4294e60442e9b71',
  'symfony/swiftmailer-bundle' => 'v3.2.8@cb125b3648f132fb8070b55393f20cb310907d3b',
  'symfony/translation' => 'v4.3.4@28498169dd334095fa981827992f3a24d50fed0f',
  'symfony/translation-contracts' => 'v1.1.6@325b17c24f3ee23cbecfa63ba809c6d89b5fa04a',
  'symfony/twig-bridge' => 'v4.3.4@cd6c551dc5d62b520d1a973fb4cb2c46bfc00b62',
  'symfony/twig-bundle' => 'v4.3.4@9528fdd8b9ba3f66c5570c22fb1a547e35abb23d',
  'symfony/validator' => 'v4.3.4@173b483999c2acad8e040633105733318dcc8a83',
  'symfony/var-exporter' => 'v4.3.4@d5b4e2d334c1d80e42876c7d489896cfd37562f2',
  'symfony/web-link' => 'v4.3.4@4bd0ce7c54d604300deee8eb1b1beda856fbba20',
  'symfony/yaml' => 'v4.3.4@5a0b7c32dc3ec56fd4abae8a4a71b0cf05013686',
  'twig/twig' => 'v2.11.3@699ed2342557c88789a15402de5eb834dedd6792',
  'webmozart/assert' => '1.5.0@88e6d84706d09a236046d686bbea96f07b3a34f4',
  'zendframework/zend-code' => '3.3.2@936fa7ad4d53897ea3e3eb41b5b760828246a20b',
  'zendframework/zend-eventmanager' => '3.2.1@a5e2583a211f73604691586b8406ff7296a946dd',
  'easycorp/easy-log-handler' => 'v1.0.7@5f95717248d20684f88cfb878d8bf3d78aadcbba',
  'nikic/php-parser' => 'v4.2.4@97e59c7a16464196a8b9c77c47df68e4a39a45c4',
  'symfony/browser-kit' => 'v4.3.4@9e5dddb637b13db82e35695a8603fe6e118cc119',
  'symfony/css-selector' => 'v4.3.4@c6e5e2a00db768c92c3ae131532af4e1acc7bd03',
  'symfony/debug-bundle' => 'v4.3.4@bb83f93785dae1f9c227a408ced3eb3f86399bf8',
  'symfony/debug-pack' => 'v1.0.7@09a4a1e9bf2465987d4f79db0ad6c11cc632bc79',
  'symfony/dom-crawler' => 'v4.3.4@cc686552948d627528c0e2e759186dff67c2610e',
  'symfony/maker-bundle' => 'v1.13.0@c4388410e2fb6321e77c5dd6e3cb2dba821f9fe6',
  'symfony/phpunit-bridge' => 'v4.3.4@3b1ab2e027d7c5af0e693c4a5b4ba5d407f1814d',
  'symfony/profiler-pack' => 'v1.0.4@99c4370632c2a59bb0444852f92140074ef02209',
  'symfony/test-pack' => 'v1.0.6@ff87e800a67d06c423389f77b8209bc9dc469def',
  'symfony/var-dumper' => 'v4.3.4@641043e0f3e615990a0f29479f9c117e8a6698c6',
  'symfony/web-profiler-bundle' => 'v4.3.4@387c36fd133c08bb0d78d8de17c1121681b37a09',
  'symfony/web-server-bundle' => 'v4.3.4@dc26b980900ddf3e9feade14e5b21c029e8ca92f',
  'paragonie/random_compat' => '2.*@',
  'symfony/polyfill-ctype' => '*@',
  'symfony/polyfill-iconv' => '*@',
  'symfony/polyfill-php71' => '*@',
  'symfony/polyfill-php70' => '*@',
  'symfony/polyfill-php56' => '*@',
  'symfony/website-skeleton' => 'No version set (parsed as 1.0.0)@',
);

    private function __construct()
    {
    }

    /**
     * @throws \OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new \OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
