<?php
/**
 *
 * VCard for Kirby 3
 *
 * @version   0.0.1
 * @author    Isaac Bordons <https://topo.bz>
 * @copyright Isaac Bordons <https://topo.bz>
 * @link      https://github.com/
 * @license   MIT <http://opensource.org/licenses/MIT>
 */

@include_once __DIR__ . '/vendor/autoload.php';

use JeroenDesloovere\VCard\VCard;

Kirby::plugin('isaactopo/vcard-kirby3', [

    'siteMethods' => [
        'vcard' => function () {
          $vcard =  new VCard();
          return $vcard;
        }
    ],

]);