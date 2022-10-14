<?php

namespace Drupal\custom_drupal_vue_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Vue Module' Block.
 *
 * @Block(
 *   id = "custom_drupal_vue_module_block",
 *   admin_label = @Translation("Custom Drupal Vue Module block"),
 *   category = @Translation("Custom Drupal Vue Module"),
 * )
 */
class CustomDrupalVueModuleBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['custom_drupal_vue_module_block']['#markup'] = '<div id="app"></div>';
    $build['custom_drupal_vue_module_block']['#attached']['library'][] =  'custom_drupal_vue_module/custom_drupal_vue_module_block';
    return $build;
  }
}