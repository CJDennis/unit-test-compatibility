<?php
namespace CJDennis\UnitTestCompatibility;

use UnitTester;

trait UnitTestCompatibilityCodeception {
  /** @var UnitTester */
  protected $tester;

  protected function _before() {
    $this->common_before();
  }

  protected function _after() {
    $this->common_after();
  }

  protected function compatibilityExpectException($exception, $closure) {
    if ($this->hasExpectThrowable()) {
      $this->tester->expectThrowable($exception, $closure);
    }
    else {
      /** @noinspection PhpDeprecationInspection */
      $this->tester->expectException($exception, $closure);
    }
  }

  protected function hasExpectThrowable() {
    return method_exists($this->tester, 'expectThrowable');
  }
}
