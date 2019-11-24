<?php
namespace CJDennis\UnitTestCompatibility\Codeception;

use CJDennis\UnitTestCompatibility\UnitTestCompatibilityCodeception;
use CJDennis\UnitTestCompatibility\UnitTestCompatibilityTestCommon;
use Codeception\Test\Unit;

/** @covers \CJDennis\UnitTestCompatibility\UnitTestCompatibilityCodeception */
/** @noinspection PhpUndefinedClassInspection */
class UnitTestCompatibilityTest extends Unit {
  use UnitTestCompatibilityCodeception;
  use UnitTestCompatibilityTestCommon;
}
