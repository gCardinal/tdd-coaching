<?php

class FizBuzzStringPrinter implements FizBuzzPrinter {

  /**
   * @var FizBuzz
   */
  private $fizBuzz;

  public function __construct(FizBuzz $fizBuzz) {
    $this->fizBuzz = $fizBuzz;
  }

  public function print(int $toGenerate, int $start = 1) {
    return implode(', ', $this->fizBuzz->getSequence($toGenerate, $start));
  }
}