<?php
namespace CJDennis\UnitTestCompatibility\PHPUnit;

use CJDennis\UnitTestCompatibility\UnitTestCompatibilityPHPUnit;
use CJDennis\UnitTestCompatibility\UnitTestCompatibilityTestCommon;
use PHPUnit\Framework\TestCase;

/**
 * @covers \CJDennis\UnitTestCompatibility\UnitTestCompatibilityCommon
 * @covers \CJDennis\UnitTestCompatibility\UnitTestCompatibilityPHPUnit
 */
class UnitTestCompatibilityTest extends TestCase {
  use UnitTestCompatibilityPHPUnit;
  use UnitTestCompatibilityTestCommon;
}
