<?php

/*
 * This file is part of Composer.
 *
 * (c) Nils Adermann <naderman@naderman.de>
 *     Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;

/**
 * This class is copied in every Composer installed project and available to all
 *
 * See also https://getcomposer.org/doc/07-runtime.md#installed-versions
 *
 * To require it's presence, you can require `composer-runtime-api ^2.0`
 */
class InstalledVersions
{
    private static $installed = array (
  'root' => 
  array (
    'pretty_version' => 'dev-main',
    'version' => 'dev-main',
    'aliases' => 
    array (
    ),
    'reference' => '8174460498de97576a932c109e6fadb6316ad4d4',
    'name' => '__root__',
  ),
  'versions' => 
  array (
    '__root__' => 
    array (
      'pretty_version' => 'dev-main',
      'version' => 'dev-main',
      'aliases' => 
      array (
      ),
      'reference' => '8174460498de97576a932c109e6fadb6316ad4d4',
    ),
    'aws/aws-sdk-php' => 
    array (
      'pretty_version' => '3.171.18',
      'version' => '3.171.18.0',
      'aliases' => 
      array (
      ),
      'reference' => '9252e55e995492a65ec9b705a5a7fdcfcaef46ef',
    ),
    'bower-asset/inputmask' => 
    array (
      'provided' => 
      array (
        0 => '~3.2.2 | ~3.3.5',
      ),
    ),
    'bower-asset/jquery' => 
    array (
      'provided' => 
      array (
        0 => '3.5.*@stable | 3.4.*@stable | 3.3.*@stable | 3.2.*@stable | 3.1.*@stable | 2.2.*@stable | 2.1.*@stable | 1.11.*@stable | 1.12.*@stable',
      ),
    ),
    'bower-asset/punycode' => 
    array (
      'provided' => 
      array (
        0 => '1.3.*',
      ),
    ),
    'bower-asset/yii2-pjax' => 
    array (
      'provided' => 
      array (
        0 => '~2.0.1',
      ),
    ),
    'cebe/markdown' => 
    array (
      'pretty_version' => '1.2.1',
      'version' => '1.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '9bac5e971dd391e2802dca5400bbeacbaea9eb86',
    ),
    'commerceguys/addressing' => 
    array (
      'pretty_version' => 'v1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '00c263fa945e7f78524bbb6b99d331f3b493be2a',
    ),
    'composer/ca-bundle' => 
    array (
      'pretty_version' => '1.2.9',
      'version' => '1.2.9.0',
      'aliases' => 
      array (
      ),
      'reference' => '78a0e288fdcebf92aa2318a8d3656168da6ac1a5',
    ),
    'composer/composer' => 
    array (
      'pretty_version' => '2.0.13',
      'version' => '2.0.13.0',
      'aliases' => 
      array (
      ),
      'reference' => '986e8b86b7b570632ad0a905c3726c33dd4c0efb',
    ),
    'composer/metadata-minifier' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c549d23829536f0d0e984aaabbf02af91f443207',
    ),
    'composer/semver' => 
    array (
      'pretty_version' => '3.2.4',
      'version' => '3.2.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a02fdf930a3c1c3ed3a49b5f63859c0c20e10464',
    ),
    'composer/spdx-licenses' => 
    array (
      'pretty_version' => '1.5.5',
      'version' => '1.5.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'de30328a7af8680efdc03e396aad24befd513200',
    ),
    'composer/xdebug-handler' => 
    array (
      'pretty_version' => '1.4.6',
      'version' => '1.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f27e06cd9675801df441b3656569b328e04aa37c',
    ),
    'craftcms/aws-s3' => 
    array (
      'pretty_version' => '1.2.11',
      'version' => '1.2.11.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd9934e0d34c3a1617a5e120d58b7062f8d302751',
    ),
    'craftcms/cms' => 
    array (
      'pretty_version' => '3.6.13',
      'version' => '3.6.13.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ba3b1e704194e7e6a056595d0d9cededc7e9b9c3',
    ),
    'craftcms/oauth2-craftid' => 
    array (
      'pretty_version' => '1.0.0.1',
      'version' => '1.0.0.1',
      'aliases' => 
      array (
      ),
      'reference' => '3f18364139d72d83fb50546d85130beaaa868836',
    ),
    'craftcms/plugin-installer' => 
    array (
      'pretty_version' => '1.5.7',
      'version' => '1.5.7.0',
      'aliases' => 
      array (
      ),
      'reference' => '23ec472acd4410b70b07d5a02b2b82db9ee3f66b',
    ),
    'craftcms/redactor' => 
    array (
      'pretty_version' => '2.8.7',
      'version' => '2.8.7.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dd70560df56ec7aef87fe52115fa571d13468714',
    ),
    'craftcms/server-check' => 
    array (
      'pretty_version' => '1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ac72da9b0e6d15a8c65047ad637222311892bcb1',
    ),
    'creocoder/yii2-nested-sets' => 
    array (
      'pretty_version' => '0.9.0',
      'version' => '0.9.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cb8635a459b6246e5a144f096b992dcc30cf9954',
    ),
    'danielstjules/stringy' => 
    array (
      'replaced' => 
      array (
        0 => '~3.0',
      ),
    ),
    'davechild/textstatistics' => 
    array (
      'pretty_version' => '1.0.3',
      'version' => '1.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e83d5f82726db80e662ae305fce3b3c41299b4f5',
    ),
    'defuse/php-encryption' => 
    array (
      'pretty_version' => 'v2.3.1',
      'version' => '2.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '77880488b9954b7884c25555c2a0ea9e7053f9d2',
    ),
    'doctrine/collections' => 
    array (
      'pretty_version' => '1.6.7',
      'version' => '1.6.7.0',
      'aliases' => 
      array (
      ),
      'reference' => '55f8b799269a1a472457bd1a41b4f379d4cfba4a',
    ),
    'doctrine/lexer' => 
    array (
      'pretty_version' => '1.2.1',
      'version' => '1.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e864bbf5904cb8f5bb334f99209b48018522f042',
    ),
    'dolphiq/sitemap' => 
    array (
      'pretty_version' => '1.3.2',
      'version' => '1.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '07666d008319a5b8cbe2bea652ee9b7098e909d1',
    ),
    'egulias/email-validator' => 
    array (
      'pretty_version' => '3.1.1',
      'version' => '3.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c81f18a3efb941d8c4d2e025f6183b5c6d697307',
    ),
    'elvanto/litemoji' => 
    array (
      'pretty_version' => '3.0.1',
      'version' => '3.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'acd6fd944814683983dcdfcf4d33f24430631b77',
    ),
    'enshrined/svg-sanitize' => 
    array (
      'pretty_version' => '0.14.0',
      'version' => '0.14.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'beff89576a72540ee99476aeb9cfe98222e76fb8',
    ),
    'erusev/parsedown' => 
    array (
      'pretty_version' => '1.7.4',
      'version' => '1.7.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cb17b6477dfff935958ba01325f2e8a2bfa6dab3',
    ),
    'erusev/parsedown-extra' => 
    array (
      'pretty_version' => '0.8.1',
      'version' => '0.8.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '91ac3ff98f0cea243bdccc688df43810f044dcef',
    ),
    'ezyang/htmlpurifier' => 
    array (
      'pretty_version' => 'v4.13.0',
      'version' => '4.13.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '08e27c97e4c6ed02f37c5b2b20488046c8d90d75',
    ),
    'fakerphp/faker' => 
    array (
      'pretty_version' => 'v1.14.1',
      'version' => '1.14.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ed22aee8d17c7b396f74a58b1e7fefa4f90d5ef1',
    ),
    'giggsey/libphonenumber-for-php' => 
    array (
      'pretty_version' => '8.12.22',
      'version' => '8.12.22.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dc9992c35e52235c36241ebb5ddc280ceebe3c09',
    ),
    'giggsey/locale' => 
    array (
      'pretty_version' => '1.9',
      'version' => '1.9.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b07f1eace8072ccc61445ad8fbd493ff9d783043',
    ),
    'guzzlehttp/guzzle' => 
    array (
      'pretty_version' => '7.3.0',
      'version' => '7.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '7008573787b430c1c1f650e3722d9bba59967628',
    ),
    'guzzlehttp/oauth-subscriber' => 
    array (
      'pretty_version' => '0.4.0',
      'version' => '0.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '47b4b9cd0b31a6733a3cc500d4285a8363502485',
    ),
    'guzzlehttp/promises' => 
    array (
      'pretty_version' => '1.4.1',
      'version' => '1.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8e7d04f1f6450fef59366c399cfad4b9383aa30d',
    ),
    'guzzlehttp/psr7' => 
    array (
      'pretty_version' => '1.8.2',
      'version' => '1.8.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dc960a912984efb74d0a90222870c72c87f10c91',
    ),
    'hoa/compiler' => 
    array (
      'pretty_version' => '3.17.08.08',
      'version' => '3.17.08.08',
      'aliases' => 
      array (
      ),
      'reference' => 'aa09caf0bf28adae6654ca6ee415ee2f522672de',
    ),
    'hoa/consistency' => 
    array (
      'pretty_version' => '1.17.05.02',
      'version' => '1.17.05.02',
      'aliases' => 
      array (
      ),
      'reference' => 'fd7d0adc82410507f332516faf655b6ed22e4c2f',
    ),
    'hoa/event' => 
    array (
      'pretty_version' => '1.17.01.13',
      'version' => '1.17.01.13',
      'aliases' => 
      array (
      ),
      'reference' => '6c0060dced212ffa3af0e34bb46624f990b29c54',
    ),
    'hoa/exception' => 
    array (
      'pretty_version' => '1.17.01.16',
      'version' => '1.17.01.16',
      'aliases' => 
      array (
      ),
      'reference' => '091727d46420a3d7468ef0595651488bfc3a458f',
    ),
    'hoa/file' => 
    array (
      'pretty_version' => '1.17.07.11',
      'version' => '1.17.07.11',
      'aliases' => 
      array (
      ),
      'reference' => '35cb979b779bc54918d2f9a4e02ed6c7a1fa67ca',
    ),
    'hoa/iterator' => 
    array (
      'pretty_version' => '2.17.01.10',
      'version' => '2.17.01.10',
      'aliases' => 
      array (
      ),
      'reference' => 'd1120ba09cb4ccd049c86d10058ab94af245f0cc',
    ),
    'hoa/math' => 
    array (
      'pretty_version' => '1.17.05.16',
      'version' => '1.17.05.16',
      'aliases' => 
      array (
      ),
      'reference' => '7150785d30f5d565704912116a462e9f5bc83a0c',
    ),
    'hoa/protocol' => 
    array (
      'pretty_version' => '1.17.01.14',
      'version' => '1.17.01.14',
      'aliases' => 
      array (
      ),
      'reference' => '5c2cf972151c45f373230da170ea015deecf19e2',
    ),
    'hoa/regex' => 
    array (
      'pretty_version' => '1.17.01.13',
      'version' => '1.17.01.13',
      'aliases' => 
      array (
      ),
      'reference' => '7e263a61b6fb45c1d03d8e5ef77668518abd5bec',
    ),
    'hoa/ruler' => 
    array (
      'pretty_version' => '2.17.05.16',
      'version' => '2.17.05.16',
      'aliases' => 
      array (
      ),
      'reference' => '696835daf8336dfd490f032da7af444050e52dfc',
    ),
    'hoa/stream' => 
    array (
      'pretty_version' => '1.17.02.21',
      'version' => '1.17.02.21',
      'aliases' => 
      array (
      ),
      'reference' => '3293cfffca2de10525df51436adf88a559151d82',
    ),
    'hoa/ustring' => 
    array (
      'pretty_version' => '4.17.01.16',
      'version' => '4.17.01.16',
      'aliases' => 
      array (
      ),
      'reference' => 'e6326e2739178799b1fe3fdd92029f9517fa17a0',
    ),
    'hoa/visitor' => 
    array (
      'pretty_version' => '2.17.01.16',
      'version' => '2.17.01.16',
      'aliases' => 
      array (
      ),
      'reference' => 'c18fe1cbac98ae449e0d56e87469103ba08f224a',
    ),
    'hoa/zformat' => 
    array (
      'pretty_version' => '1.17.01.10',
      'version' => '1.17.01.10',
      'aliases' => 
      array (
      ),
      'reference' => '522c381a2a075d4b9dbb42eb4592dd09520e4ac2',
    ),
    'html2text/html2text' => 
    array (
      'pretty_version' => '4.3.1',
      'version' => '4.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '61ad68e934066a6f8df29a3d23a6460536d0855c',
    ),
    'icanboogie/inflector' => 
    array (
      'pretty_version' => 'v1.5.0',
      'version' => '1.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fb6ca7977f8a7ebb46aff0183ee868d798f77ab8',
    ),
    'jaybizzle/crawler-detect' => 
    array (
      'pretty_version' => 'v1.2.105',
      'version' => '1.2.105.0',
      'aliases' => 
      array (
      ),
      'reference' => '719c1ed49224857800c3dc40838b6b761d046105',
    ),
    'justinrainbow/json-schema' => 
    array (
      'pretty_version' => '5.2.10',
      'version' => '5.2.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '2ba9c8c862ecd5510ed16c6340aa9f6eadb4f31b',
    ),
    'laminas/laminas-escaper' => 
    array (
      'pretty_version' => '2.6.1',
      'version' => '2.6.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '25f2a053eadfa92ddacb609dcbbc39362610da70',
    ),
    'laminas/laminas-feed' => 
    array (
      'pretty_version' => '2.12.3',
      'version' => '2.12.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '3c91415633cb1be6f9d78683d69b7dcbfe6b4012',
    ),
    'laminas/laminas-stdlib' => 
    array (
      'pretty_version' => '3.2.1',
      'version' => '3.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '2b18347625a2f06a1a485acfbc870f699dbe51c6',
    ),
    'laminas/laminas-zendframework-bridge' => 
    array (
      'pretty_version' => '1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '6ede70583e101030bcace4dcddd648f760ddf642',
    ),
    'league/flysystem' => 
    array (
      'pretty_version' => '1.1.3',
      'version' => '1.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '9be3b16c877d477357c015cec057548cf9b2a14a',
    ),
    'league/flysystem-aws-s3-v3' => 
    array (
      'pretty_version' => '1.0.29',
      'version' => '1.0.29.0',
      'aliases' => 
      array (
      ),
      'reference' => '4e25cc0582a36a786c31115e419c6e40498f6972',
    ),
    'league/html-to-markdown' => 
    array (
      'pretty_version' => '4.10.0',
      'version' => '4.10.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '0868ae7a552e809e5cd8f93ba022071640408e88',
    ),
    'league/mime-type-detection' => 
    array (
      'pretty_version' => '1.7.0',
      'version' => '1.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '3b9dff8aaf7323590c1d2e443db701eb1f9aa0d3',
    ),
    'league/oauth1-client' => 
    array (
      'pretty_version' => 'v1.9.0',
      'version' => '1.9.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1e7e6be2dc543bf466236fb171e5b20e1b06aee6',
    ),
    'league/oauth2-client' => 
    array (
      'pretty_version' => '2.6.0',
      'version' => '2.6.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'badb01e62383430706433191b82506b6df24ad98',
    ),
    'league/oauth2-google' => 
    array (
      'pretty_version' => '3.0.4',
      'version' => '3.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '6b79441f244040760bed5fdcd092a2bda7cf34c6',
    ),
    'masterminds/html5' => 
    array (
      'pretty_version' => '2.7.4',
      'version' => '2.7.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '9227822783c75406cfe400984b2f095cdf03d417',
    ),
    'mikehaertl/php-shellcommand' => 
    array (
      'pretty_version' => '1.6.4',
      'version' => '1.6.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '3488d7803df1e8f1a343d3d0ca452d527ad8d5e5',
    ),
    'mofodojodino/profanity-filter' => 
    array (
      'pretty_version' => '1.3.0',
      'version' => '1.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '529d24adcdb5b9507a4622db6aba6e54c5bb82a9',
    ),
    'mtdowling/jmespath.php' => 
    array (
      'pretty_version' => '2.6.0',
      'version' => '2.6.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '42dae2cbd13154083ca6d70099692fef8ca84bfb',
    ),
    'mundschenk-at/php-typography' => 
    array (
      'pretty_version' => 'v6.6.0',
      'version' => '6.6.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '67af39c936751f96a959b9bf211044512675283c',
    ),
    'opis/closure' => 
    array (
      'pretty_version' => '3.6.2',
      'version' => '3.6.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '06e2ebd25f2869e54a306dda991f7db58066f7f6',
    ),
    'paragonie/random_compat' => 
    array (
      'pretty_version' => 'v9.99.100',
      'version' => '9.99.100.0',
      'aliases' => 
      array (
      ),
      'reference' => '996434e5492cb4c3edcb9168db6fbb1359ef965a',
    ),
    'phpdocumentor/reflection-common' => 
    array (
      'pretty_version' => '2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1d01c49d4ed62f25aa84a747ad35d5a16924662b',
    ),
    'phpdocumentor/reflection-docblock' => 
    array (
      'pretty_version' => '5.2.2',
      'version' => '5.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '069a785b2141f5bcf49f3e353548dc1cce6df556',
    ),
    'phpdocumentor/type-resolver' => 
    array (
      'pretty_version' => '1.4.0',
      'version' => '1.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
    ),
    'phpoption/phpoption' => 
    array (
      'pretty_version' => '1.5.0',
      'version' => '1.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '94e644f7d2051a5f0fcf77d81605f152eecff0ed',
    ),
    'pixelandtonic/imagine' => 
    array (
      'pretty_version' => '1.2.4.1',
      'version' => '1.2.4.1',
      'aliases' => 
      array (
      ),
      'reference' => '2bedcf2dfab50a22126498a16241944c9d4cde65',
    ),
    'psr/container' => 
    array (
      'pretty_version' => '1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8622567409010282b7aeebe4bb841fe98b58dcaf',
    ),
    'psr/http-client' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
    ),
    'psr/http-client-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/http-message' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f6561bf28d520154e4b0ec72be95418abe6d9363',
    ),
    'psr/http-message-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/log' => 
    array (
      'pretty_version' => '1.1.4',
      'version' => '1.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd49695b909c3b7628b6289db5479a1c204601f11',
    ),
    'psr/log-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'ralouphie/getallheaders' => 
    array (
      'pretty_version' => '3.0.3',
      'version' => '3.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '120b605dfeb996808c31b6477290a714d356e822',
    ),
    'react/promise' => 
    array (
      'pretty_version' => 'v2.8.0',
      'version' => '2.8.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f3cff96a19736714524ca0dd1d4130de73dbbbc4',
    ),
    'sebastianlenz/linkfield' => 
    array (
      'pretty_version' => '1.0.25',
      'version' => '1.0.25.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a29f328fe41248e9b1722c52f68e435f53c241d3',
    ),
    'seld/cli-prompt' => 
    array (
      'pretty_version' => '1.0.4',
      'version' => '1.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b8dfcf02094b8c03b40322c229493bb2884423c5',
    ),
    'seld/jsonlint' => 
    array (
      'pretty_version' => '1.8.3',
      'version' => '1.8.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '9ad6ce79c342fbd44df10ea95511a1b24dee5b57',
    ),
    'seld/phar-utils' => 
    array (
      'pretty_version' => '1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8674b1d84ffb47cc59a101f5d5a3b61e87d23796',
    ),
    'swiftmailer/swiftmailer' => 
    array (
      'pretty_version' => 'v6.2.7',
      'version' => '6.2.7.0',
      'aliases' => 
      array (
      ),
      'reference' => '15f7faf8508e04471f666633addacf54c0ab5933',
    ),
    'symfony/console' => 
    array (
      'pretty_version' => 'v5.2.7',
      'version' => '5.2.7.0',
      'aliases' => 
      array (
      ),
      'reference' => '90374b8ed059325b49a29b55b3f8bb4062c87629',
    ),
    'symfony/deprecation-contracts' => 
    array (
      'pretty_version' => 'v2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5f38c8804a9e97d23e0c8d63341088cd8a22d627',
    ),
    'symfony/filesystem' => 
    array (
      'pretty_version' => 'v5.2.7',
      'version' => '5.2.7.0',
      'aliases' => 
      array (
      ),
      'reference' => '056e92acc21d977c37e6ea8e97374b2a6c8551b0',
    ),
    'symfony/finder' => 
    array (
      'pretty_version' => 'v5.2.4',
      'version' => '5.2.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '0d639a0943822626290d169965804f79400e6a04',
    ),
    'symfony/polyfill-ctype' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c6c942b1ac76c82448322025e084cadc56048b4e',
    ),
    'symfony/polyfill-iconv' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '06fb361659649bcfd6a208a0f1fcaf4e827ad342',
    ),
    'symfony/polyfill-intl-grapheme' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '5601e09b69f26c1828b13b6bb87cb07cddba3170',
    ),
    'symfony/polyfill-intl-idn' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '2d63434d922daf7da8dd863e7907e67ee3031483',
    ),
    'symfony/polyfill-intl-normalizer' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '43a0283138253ed1d48d352ab6d0bdb3f809f248',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '5232de97ee3b75b0360528dae24e73db49566ab1',
    ),
    'symfony/polyfill-php72' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cc6e6f9b39fe8075b3dabfbaf5b5f645ae1340c9',
    ),
    'symfony/polyfill-php73' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a678b42e92f86eca04b7fa4c0f6f19d097fb69e2',
    ),
    'symfony/polyfill-php80' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dc3063ba22c2a1fd2f45ed856374d79114998f91',
    ),
    'symfony/process' => 
    array (
      'pretty_version' => 'v5.2.7',
      'version' => '5.2.7.0',
      'aliases' => 
      array (
      ),
      'reference' => '98cb8eeb72e55d4196dd1e36f1f16e7b3a9a088e',
    ),
    'symfony/service-contracts' => 
    array (
      'pretty_version' => 'v2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f040a30e04b57fbcc9c6cbcf4dbaa96bd318b9bb',
    ),
    'symfony/string' => 
    array (
      'pretty_version' => 'v5.2.6',
      'version' => '5.2.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ad0bd91bce2054103f5eaa18ebeba8d3bc2a0572',
    ),
    'symfony/yaml' => 
    array (
      'pretty_version' => 'v5.2.7',
      'version' => '5.2.7.0',
      'aliases' => 
      array (
      ),
      'reference' => '76546cbeddd0a9540b4e4e57eddeec3e9bb444a5',
    ),
    'topshelfcraft/wordsmith' => 
    array (
      'pretty_version' => '3.3.0.1',
      'version' => '3.3.0.1',
      'aliases' => 
      array (
      ),
      'reference' => 'e7acf27cc33e7fef8d53ab8af2d0ff498c424e67',
    ),
    'true/punycode' => 
    array (
      'pretty_version' => 'v2.1.1',
      'version' => '2.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a4d0c11a36dd7f4e7cd7096076cab6d3378a071e',
    ),
    'twig/twig' => 
    array (
      'pretty_version' => 'v2.14.4',
      'version' => '2.14.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '0b4ba691fb99ec7952d25deb36c0a83061b93bbf',
    ),
    'verbb/base' => 
    array (
      'pretty_version' => '1.0.3',
      'version' => '1.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '006cc4979e2b7669234a90bb7347129fe0185eb8',
    ),
    'verbb/formie' => 
    array (
      'pretty_version' => '1.4.4',
      'version' => '1.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e5d97e2e2bf20f467ae3411feb67b0e3aca4936d',
    ),
    'verbb/navigation' => 
    array (
      'pretty_version' => '1.4.16',
      'version' => '1.4.16.0',
      'aliases' => 
      array (
      ),
      'reference' => '9869ff5314b3cce95f6cd5e57978b2d6cf5625f4',
    ),
    'vlucas/phpdotenv' => 
    array (
      'pretty_version' => 'v3.6.0',
      'version' => '3.6.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1bdf24f065975594f6a117f0f1f6cabf1333b156',
    ),
    'voku/anti-xss' => 
    array (
      'pretty_version' => '4.1.32',
      'version' => '4.1.32.0',
      'aliases' => 
      array (
      ),
      'reference' => '159b49a50cf3f6cf72ee43b0dcf7c2580a0c12d1',
    ),
    'voku/arrayy' => 
    array (
      'pretty_version' => '7.8.9',
      'version' => '7.8.9.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd26e7d59ac2f6eb891b77c48bfdb9fe1e76afa60',
    ),
    'voku/email-check' => 
    array (
      'pretty_version' => '3.1.0',
      'version' => '3.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6ea842920bbef6758b8c1e619fd1710e7a1a2cac',
    ),
    'voku/portable-ascii' => 
    array (
      'pretty_version' => '1.5.6',
      'version' => '1.5.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '80953678b19901e5165c56752d087fc11526017c',
    ),
    'voku/portable-utf8' => 
    array (
      'pretty_version' => '5.4.51',
      'version' => '5.4.51.0',
      'aliases' => 
      array (
      ),
      'reference' => '578f5266725dc9880483d24ad0cfb39f8ce170f7',
    ),
    'voku/stop-words' => 
    array (
      'pretty_version' => '2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8e63c0af20f800b1600783764e0ce19e53969f71',
    ),
    'voku/stringy' => 
    array (
      'pretty_version' => '6.4.1',
      'version' => '6.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '5b74e0e428e466bda91489b4c6e9ab385aa7c73a',
    ),
    'voku/urlify' => 
    array (
      'pretty_version' => '5.0.5',
      'version' => '5.0.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd59bfa6d13ce08062e2fe40dd23d226262f961c5',
    ),
    'webmozart/assert' => 
    array (
      'pretty_version' => '1.10.0',
      'version' => '1.10.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6964c76c7804814a842473e0c8fd15bab0f18e25',
    ),
    'webonyx/graphql-php' => 
    array (
      'pretty_version' => 'v14.4.1',
      'version' => '14.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '769a47401f8cbc5f357ea4d05e0191e35a011b0f',
    ),
    'yii2tech/ar-softdelete' => 
    array (
      'pretty_version' => '1.0.4',
      'version' => '1.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '498ed03f89ded835f0ca156ec50d432191c58769',
    ),
    'yiisoft/yii2' => 
    array (
      'pretty_version' => '2.0.41.1',
      'version' => '2.0.41.1',
      'aliases' => 
      array (
      ),
      'reference' => '2ad0894a2ccbd3912b33de4419ad1ae3df0595c4',
    ),
    'yiisoft/yii2-composer' => 
    array (
      'pretty_version' => '2.0.10',
      'version' => '2.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '94bb3f66e779e2774f8776d6e1bdeab402940510',
    ),
    'yiisoft/yii2-debug' => 
    array (
      'pretty_version' => '2.1.17',
      'version' => '2.1.17.0',
      'aliases' => 
      array (
      ),
      'reference' => '21a259c27dacedf19ac1e00d4a7180e3043d7859',
    ),
    'yiisoft/yii2-queue' => 
    array (
      'pretty_version' => '2.3.2',
      'version' => '2.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '7446216c87eff371245113b41f5a227d4d9182f7',
    ),
    'yiisoft/yii2-swiftmailer' => 
    array (
      'pretty_version' => '2.1.2',
      'version' => '2.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '09659a55959f9e64b8178d842b64a9ffae42b994',
    ),
    'zendframework/zend-escaper' => 
    array (
      'replaced' => 
      array (
        0 => '2.6.1',
      ),
    ),
    'zendframework/zend-feed' => 
    array (
      'replaced' => 
      array (
        0 => '^2.12.0',
      ),
    ),
    'zendframework/zend-stdlib' => 
    array (
      'replaced' => 
      array (
        0 => '3.2.1',
      ),
    ),
  ),
);
    private static $canGetVendors;
    private static $installedByVendor = array();

    /**
     * Returns a list of all package names which are present, either by being installed, replaced or provided
     *
     * @return string[]
     * @psalm-return list<string>
     */
    public static function getInstalledPackages()
    {
        $packages = array();
        foreach (self::getInstalled() as $installed) {
            $packages[] = array_keys($installed['versions']);
        }

        if (1 === \count($packages)) {
            return $packages[0];
        }

        return array_keys(array_flip(\call_user_func_array('array_merge', $packages)));
    }

    /**
     * Checks whether the given package is installed
     *
     * This also returns true if the package name is provided or replaced by another package
     *
     * @param  string $packageName
     * @return bool
     */
    public static function isInstalled($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (isset($installed['versions'][$packageName])) {
                return true;
            }
        }

        return false;
    }

    /**
     * Checks whether the given package satisfies a version constraint
     *
     * e.g. If you want to know whether version 2.3+ of package foo/bar is installed, you would call:
     *
     *   Composer\InstalledVersions::satisfies(new VersionParser, 'foo/bar', '^2.3')
     *
     * @param VersionParser $parser      Install composer/semver to have access to this class and functionality
     * @param string        $packageName
     * @param string|null   $constraint  A version constraint to check for, if you pass one you have to make sure composer/semver is required by your package
     *
     * @return bool
     */
    public static function satisfies(VersionParser $parser, $packageName, $constraint)
    {
        $constraint = $parser->parseConstraints($constraint);
        $provided = $parser->parseConstraints(self::getVersionRanges($packageName));

        return $provided->matches($constraint);
    }

    /**
     * Returns a version constraint representing all the range(s) which are installed for a given package
     *
     * It is easier to use this via isInstalled() with the $constraint argument if you need to check
     * whether a given version of a package is installed, and not just whether it exists
     *
     * @param  string $packageName
     * @return string Version constraint usable with composer/semver
     */
    public static function getVersionRanges($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            $ranges = array();
            if (isset($installed['versions'][$packageName]['pretty_version'])) {
                $ranges[] = $installed['versions'][$packageName]['pretty_version'];
            }
            if (array_key_exists('aliases', $installed['versions'][$packageName])) {
                $ranges = array_merge($ranges, $installed['versions'][$packageName]['aliases']);
            }
            if (array_key_exists('replaced', $installed['versions'][$packageName])) {
                $ranges = array_merge($ranges, $installed['versions'][$packageName]['replaced']);
            }
            if (array_key_exists('provided', $installed['versions'][$packageName])) {
                $ranges = array_merge($ranges, $installed['versions'][$packageName]['provided']);
            }

            return implode(' || ', $ranges);
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as version, use satisfies or getVersionRanges if you need to know if a given version is present
     */
    public static function getVersion($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            if (!isset($installed['versions'][$packageName]['version'])) {
                return null;
            }

            return $installed['versions'][$packageName]['version'];
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as version, use satisfies or getVersionRanges if you need to know if a given version is present
     */
    public static function getPrettyVersion($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            if (!isset($installed['versions'][$packageName]['pretty_version'])) {
                return null;
            }

            return $installed['versions'][$packageName]['pretty_version'];
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as reference
     */
    public static function getReference($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            if (!isset($installed['versions'][$packageName]['reference'])) {
                return null;
            }

            return $installed['versions'][$packageName]['reference'];
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @return array
     * @psalm-return array{name: string, version: string, reference: string, pretty_version: string, aliases: string[]}
     */
    public static function getRootPackage()
    {
        $installed = self::getInstalled();

        return $installed[0]['root'];
    }

    /**
     * Returns the raw installed.php data for custom implementations
     *
     * @return array[]
     * @psalm-return array{root: array{name: string, version: string, reference: string, pretty_version: string, aliases: string[]}, versions: array<string, array{pretty_version?: string, version?: string, aliases?: string[], reference?: string, replaced?: string[], provided?: string[]}>}
     */
    public static function getRawData()
    {
        return self::$installed;
    }

    /**
     * Lets you reload the static array from another file
     *
     * This is only useful for complex integrations in which a project needs to use
     * this class but then also needs to execute another project's autoloader in process,
     * and wants to ensure both projects have access to their version of installed.php.
     *
     * A typical case would be PHPUnit, where it would need to make sure it reads all
     * the data it needs from this class, then call reload() with
     * `require $CWD/vendor/composer/installed.php` (or similar) as input to make sure
     * the project in which it runs can then also use this class safely, without
     * interference between PHPUnit's dependencies and the project's dependencies.
     *
     * @param  array[] $data A vendor/composer/installed.php data set
     * @return void
     *
     * @psalm-param array{root: array{name: string, version: string, reference: string, pretty_version: string, aliases: string[]}, versions: array<string, array{pretty_version?: string, version?: string, aliases?: string[], reference?: string, replaced?: string[], provided?: string[]}>} $data
     */
    public static function reload($data)
    {
        self::$installed = $data;
        self::$installedByVendor = array();
    }

    /**
     * @return array[]
     * @psalm-return list<array{root: array{name: string, version: string, reference: string, pretty_version: string, aliases: string[]}, versions: array<string, array{pretty_version?: string, version?: string, aliases?: string[], reference?: string, replaced?: string[], provided?: string[]}>}>
     */
    private static function getInstalled()
    {
        if (null === self::$canGetVendors) {
            self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
        }

        $installed = array();

        if (self::$canGetVendors) {
            foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
                if (isset(self::$installedByVendor[$vendorDir])) {
                    $installed[] = self::$installedByVendor[$vendorDir];
                } elseif (is_file($vendorDir.'/composer/installed.php')) {
                    $installed[] = self::$installedByVendor[$vendorDir] = require $vendorDir.'/composer/installed.php';
                }
            }
        }

        $installed[] = self::$installed;

        return $installed;
    }
}
