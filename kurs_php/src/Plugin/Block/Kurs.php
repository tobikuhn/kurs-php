<?php

namespace Drupal\kurs_php\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Kurs' Block.
 *
 * @Block(
 *   id = "kurs_block",
 *   admin_label = @Translation("Kurs block"),
 *   category = @Translation("Kurs"),
 * )
 */
class Kurs extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
	$now = date ("Y-m-d-H:i:s");
	$time = htmlspecialchars($_GET["time"]);
	$t = "Der Kursverlauf vom $time:";
  return [
	'#markup' => $t,
];
  }

  public function getCacheMaxAge() {
        return 0;
    }
}