<?php

namespace spec\Unit;

use FizBuzz;
use FizBuzzStringPrinter;
use Phake;
use Phake_IMock;
use PhpSpec\ObjectBehavior;

class FizBuzzStringPrinterSpec extends ObjectBehavior {

  /**
   * @var FizBuzz|Phake_IMock
   */
  private $fizBuzz;

  public function let() {
    $this->fizBuzz = Phake::mock(FizBuzz::class);

    $this->beConstructedWith($this->fizBuzz);
  }

  function it_is_initializable() {
    $this->shouldHaveType(FizBuzzStringPrinter::class);
  }

  function it_should_print_from_the_given_fizbuzz_object() {
    $this->print(3);
    Phake::verify($this->fizBuzz)->getSequence(Phake::anyParameters());
  }

  function it_should_print_the_result_as_a_string() {
    Phake::when($this->fizBuzz)->getSequence(Phake::anyParameters())
      ->thenReturn([1, 2, 3]);
    $this->print(3)->shouldBeString();
  }
}
