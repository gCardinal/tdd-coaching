<?php

class FizBuzz
{

  public function getSequence(int $toGenerate, int $start = 1): array {
    $sequence = [];

    for($i = $start; $i < $start + $toGenerate; $i++) {
      if($i % 15 == 0) {
        $sequence[] = 'fizbuzz';
        continue;
      }

      if($i % 3 == 0) {
        $sequence[] = 'fiz';
        continue;
      }

      if($i % 5 == 0) {
        $sequence[] = 'buzz';
        continue;
      }

      $sequence[] = $i;
    }

    return $sequence;
  }
}
