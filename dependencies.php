<?php

declare(strict_types=1);

/**
 * @link https://flextype.org
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flextype\Plugin\Jquery;

$_admin_js = ($flextype->container('registry')->has('assets.admin.js')) ? $flextype->container('registry')->get('assets.admin.js') : [];
$_site_js  = ($flextype->container('registry')->has('assets.site.js')) ? $flextype->container('registry')->get('assets.site.js') : [];

if ($flextype->container('registry')->get('plugins.jquery.settings.load_on_admin')) {
    $flextype->container('registry')->set('assets.admin.js',
                           array_merge($_admin_js, ['project/plugins/jquery/assets/dist/js/jquery.min.js']));
}

if ($flextype->container('registry')->get('plugins.jquery.settings.load_on_site')) {
    $flextype->container('registry')->set('assets.site.js',
                          array_merge($_site_js, ['project/plugins/jquery/assets/dist/js/jquery.min.js']));
}
