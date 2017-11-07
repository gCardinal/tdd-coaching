<?php

namespace spec\Unit;

use FizBuzz;
use FizBuzzArrayPrinter;
use Phake;
use Phake_IMock;
use PhpSpec\ObjectBehavior;

class FizBuzzArrayPrinterSpec extends ObjectBehavior {

  /**
   * @var FizBuzz|Phake_IMock
   */
  private $fizBuzz;

  public function let() {
    $this->fizBuzz = Phake::mock(FizBuzz::class);

    $this->beConstructedWith($this->fizBuzz);
  }

  function it_is_initializable() {
    $this->shouldHaveType(FizBuzzArrayPrinter::class);
  }

  function it_should_print_from_the_given_fizbuzz_object_without_transforming_it() {
    $result = [1, 2, 3];
    Phake::when($this->fizBuzz)->getSequence(Phake::anyParameters())
      ->thenReturn($result);
    $this->print(3)->shouldEqual($result);
  }
}
