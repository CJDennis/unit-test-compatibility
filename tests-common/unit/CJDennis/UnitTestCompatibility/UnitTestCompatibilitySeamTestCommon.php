<?php
namespace CJDennis\UnitTestCompatibility;

use Exception;

trait UnitTestCompatibilitySeamTestCommon {
  use UnitTestCompatibilityCommonSeam;

  protected function common_before() {
    parent::common_before();
    $this->clearHasExpectThrowable();
  }

  protected function common_after() {
    parent::common_after();
  }

  // tests
  public function testShouldThrowAnExceptionNotAThrowable() {
    $this->setDoesNotHaveExpectThrowable();
    $this->compatibilityExpectException(new Exception('Foobar'), function () {
      throw new Exception('Foobar');
    });
  }

  public function testShouldNotThrowAnExceptionInTheInternalFunction() {
    $this->compatibilityExpectException(Exception::class, function () {
      $this->compatibilityExpectException(Exception::class, function () {
        return;
      });
      throw new Exception();
    });
  }
}
