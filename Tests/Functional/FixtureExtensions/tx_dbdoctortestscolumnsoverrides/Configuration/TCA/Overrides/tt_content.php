<?php

declare(strict_types=1);

defined('TYPO3') or die();

// Group field "pages" points to pages by default. Content type "header"
// overrides it to point to tt_content instead.
$GLOBALS['TCA']['tt_content']['types']['header']['columnsOverrides']['pages'] = [
    'config' => [
        'allowed' => 'tt_content',
    ],
];
