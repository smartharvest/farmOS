<?php

namespace Drupal\farm_ui_theme\Plugin\Block;

use Drupal\system\Plugin\Block\SystemPoweredByBlock;

/**
 * Provides a 'Powered by SmartHarvest' block.
 *
 * @Block(
 *   id = "farm_powered_by_block",
 *   admin_label = @Translation("Powered by SmartHarvest")
 * )
 */
class FarmPoweredByBlock extends SystemPoweredByBlock {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return ['#markup' => '<span>' . $this->t('Powered by <a href=":poweredby">SmartHarvest</a>', [':poweredby' => 'https://smartharvest.africa']) . '</span>'];
  }

}
