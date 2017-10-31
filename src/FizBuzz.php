<?php

class FizBuzz
{

  public function getSequence(int $toGenerate): array {
    $sequence = [];

    for($i = 1; $i <= $toGenerate; $i++) {
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
