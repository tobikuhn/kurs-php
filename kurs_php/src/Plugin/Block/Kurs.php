<?php

namespace Drupal\kurs_php\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "hello_block",
 *   admin_label = @Translation("Hello block"),
 *   category = @Translation("Hello World"),
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
}

