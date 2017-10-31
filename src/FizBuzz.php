<?php

class FizBuzz
{

  public function getSequence(int $toGenerate, int $start = 1): array {
    $sequence = [];

    for($i = $start; $i <= $toGenerate; $i++) {
      if($i == 15) {
        $sequence[] = 'fizbuzz';
        continue;
      }

      if($i == 3) {
        $sequence[] = 'fiz';
        continue;
      }

      if($i == 5) {
        $sequence[] = 'buzz';
        continue;
      }

      $sequence[] = $i;
    }

    return $sequence;
  }
}
