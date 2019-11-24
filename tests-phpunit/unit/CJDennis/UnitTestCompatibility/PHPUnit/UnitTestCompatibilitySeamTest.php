<?php
namespace CJDennis\UnitTestCompatibility\PHPUnit;

use CJDennis\UnitTestCompatibility\UnitTestCompatibilityCodeceptionSeam;
use CJDennis\UnitTestCompatibility\UnitTestCompatibilitySeamTestCommon;

/**
 * @covers \CJDennis\UnitTestCompatibility\UnitTestCompatibilityCommon
 * @covers \CJDennis\UnitTestCompatibility\UnitTestCompatibilityPHPUnit
 */
class UnitTestCompatibilitySeamTest extends UnitTestCompatibilityTest {
  use UnitTestCompatibilityCodeceptionSeam;
  use UnitTestCompatibilitySeamTestCommon;
}
