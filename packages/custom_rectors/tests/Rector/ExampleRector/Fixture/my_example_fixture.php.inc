<?php

namespace Ssch\CustomRectors\Tests\Rector\ExampleRector\Fixture;

use TYPO3\CMS\Core\Utility\StringUtility;

$class = new class {
    public static function beginsWith(string $haystack, string $needle) {

    }
};

StringUtility::beginsWith('nevercodealone', 'never');
$class::beginsWith('nevercodealone', 'never');

?>
-----
<?php

namespace Ssch\CustomRectors\Tests\Rector\ExampleRector\Fixture;

use TYPO3\CMS\Core\Utility\StringUtility;

$class = new class {
    public static function beginsWith(string $haystack, string $needle) {

    }
};

str_starts_with('nevercodealone', 'never');
$class::beginsWith('nevercodealone', 'never');

?>
