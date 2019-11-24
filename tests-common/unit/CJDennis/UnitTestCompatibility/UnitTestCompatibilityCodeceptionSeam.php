<?php

namespace CJDennis\UnitTestCompatibility;

use CJDennis\UnitTestCompatibility\Codeception\UnitTestCompatibilitySeamTest;

trait UnitTestCompatibilityCodeceptionSeam {
  protected $hasExpectThrowable;

  protected function setHasExpectThrowable() {
    $this->hasExpectThrowable = true;
  }

  protected function setDoesNotHaveExpectThrowable() {
    $this->hasExpectThrowable = false;
  }

  protected function clearHasExpectThrowable() {
    $this->hasExpectThrowable = null;
  }

  protected function hasExpectThrowable() {
    $has_expect_throwable = $this->hasExpectThrowable;
    if ($has_expect_throwable === null) {
      $has_expect_throwable = parent::hasExpectThrowable();
    }
    return $has_expect_throwable;
  }
}
