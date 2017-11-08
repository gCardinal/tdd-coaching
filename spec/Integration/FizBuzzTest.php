<?php

namespace spec\Integration;

use FizBuzz;
use FizBuzzArrayPrinter;
use FizBuzzStringPrinter;
use PHPUnit\Framework\TestCase;

class FizBuzzTest extends TestCase {

  /**
   * @test
   */
  public function it_should_print_without_error_with_the_string_printer() {
    $printer = new FizBuzzStringPrinter(new FizBuzz());
    $results = $printer->print(15);

    $this->assertTrue(is_string($results));
    $this->assertContains('fiz', $results);
    $this->assertContains('buzz', $results);
    $this->assertContains('fizbuzz', $results);
  }

  /**
   * @test
   */
  public function it_should_print_without_error_with_the_array_printer() {
    $printer = new fizBuzzArrayPrinter(new FizBuzz());
    $results = $printer->print(15);

    $this->assertTrue(is_array($results));
    $this->assertContains('fiz', $results);
    $this->assertContains('buzz', $results);
    $this->assertContains('fizbuzz', $results);
  }
}
