<?php

/**
 * This file is part of the "wpu_graphql" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Wolf Utz <wpu@hotmail.de>
 */

declare(strict_types=1);

namespace Wpu\Graphql\Utility;

use Wpu\Graphql\Action\GraphqlAction;

class GraphqlApiManager
{
    public static function register(
        string $identifier,
        string $endpoint,
        string $schemaProvider,
        string $action = GraphqlAction::class
    ): void {
        $api = [
            'identifier' => $identifier,
            'endpoint' => $endpoint,
            'schemaProvider' => $schemaProvider,
            'action' => $action,
        ];
        $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['extbase']['extensions']['WpuGraphql']['apis'][$identifier] = $api;
    }
}