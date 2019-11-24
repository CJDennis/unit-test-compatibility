<?php
namespace CJDennis\UnitTestCompatibility\Codeception;

use CJDennis\UnitTestCompatibility\UnitTestCompatibilityCodeceptionSeam;
use CJDennis\UnitTestCompatibility\UnitTestCompatibilitySeamTestCommon;
use CJDennis\UnitTestCompatibility\Codeception\UnitTestCompatibilityTest;

/** @covers \CJDennis\UnitTestCompatibility\UnitTestCompatibilityCodeception */
/** @noinspection PhpUndefinedClassInspection */
class UnitTestCompatibilitySeamTest extends UnitTestCompatibilityTest {
  use UnitTestCompatibilityCodeceptionSeam;
  use UnitTestCompatibilitySeamTestCommon;
}
