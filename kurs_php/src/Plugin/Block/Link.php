<?php

namespace Drupal\kurs_php\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "link",
 *   admin_label = @Translation("Link"),
 *   category = @Translation("Hello World"),
 * )
 */
class Link extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
	$now = date("Y-m-d-H:i:s");
	$link1 = "/kurs?time=$now";
	$t= "Aktueller Kurs: 0,50<br><a href=\"".$link1."\">Zum Verlauf</a>";
    return [
      '#markup' => $t,
    ];
  }
  public function getCacheMaxAge() {
        return 0;
    }

}