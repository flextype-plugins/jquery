<?php

declare(strict_types=1);

/**
 * @link http://digital.flextype.org
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flextype;

$_admin_js = ($flextype['registry']->has('assets.admin.js')) ? $flextype['registry']->get('assets.admin.js') : [];
$_site_js  = ($flextype['registry']->has('assets.site.js')) ? $flextype['registry']->get('assets.site.js') : [];

$flextype['registry']->set('assets.admin.js',
                       array_merge($_admin_js, ['site/plugins/jquery/assets/dist/js/jquery.min.js']));

$flextype['registry']->set('assets.site.js',
                      array_merge($_site_js, ['site/plugins/jquery/assets/dist/js/jquery.min.js']));
