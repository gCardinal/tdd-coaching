<?php

namespace spec;

use FizBuzz;
use PhpSpec\ObjectBehavior;

class FizBuzzSpec extends ObjectBehavior {

  function it_is_initializable() {
    $this->shouldHaveType(FizBuzz::class);
  }

  public function it_should_return_a_sequence_without_fiz_or_buzz() {
    $sequence = $this->getSequence(2);

    $sequence->shouldNotContain('fiz');
    $sequence->shouldNotContain('buzz');
  }

  public function it_should_return_a_sequence_with_fiz() {
    $this->getSequence(3)->shouldContain('fiz');
    $this->getSequence(3, 5)->shouldContain('fiz');
  }

  public function it_should_return_a_sequence_with_buzz() {
    $this->getSequence(5)->shouldContain('buzz');
    $this->getSequence(3, 9)->shouldContain('buzz');
  }

  public function it_should_return_a_sequence_with_fizbuzz() {
    $this->getSequence(15)->shouldContain('fizbuzz');
    $this->getSequence(3, 29)->shouldContain('fizbuzz');
  }
}
