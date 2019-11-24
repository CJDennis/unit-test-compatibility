<?php
namespace CJDennis\UnitTestCompatibility;

trait UnitTestCompatibilityPHPUnit {
  protected function setUp(): void {
    $this->common_before();
  }

  protected function tearDown(): void {
    $this->common_after();
  }

  protected function compatibilityExpectException($exception, $closure) {
    if (is_object($exception)) {
      $this->expectExceptionObject($exception);
    }
    else {
      $this->expectException($exception);
    }
    $closure();
  }
}
