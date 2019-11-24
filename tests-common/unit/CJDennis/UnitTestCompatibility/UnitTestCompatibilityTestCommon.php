<?php
namespace CJDennis\UnitTestCompatibility;

use Exception;

trait UnitTestCompatibilityTestCommon {
  use UnitTestCompatibilityCommon;

  // tests
  public function testShouldThrowAThrowableOrAnExceptionFromAString() {
    $this->compatibilityExpectException(Exception::class, function () {
      throw new Exception('Foobar');
    });
  }

  public function testShouldThrowAThrowableOrAnExceptionFromAnObject() {
    $this->compatibilityExpectException(new Exception('Foobar'), function () {
      throw new Exception('Foobar');
    });
  }
}
