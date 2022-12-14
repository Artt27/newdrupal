<?php

namespace Drupal\vud\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;

/**
 * Plugin implementation of the 'vote_up_down_formatter_type' formatter.
 *
 * @FieldFormatter(
 *   id = "vote_up_down_formatter_type",
 *   label = @Translation("Vote up down formatter type"),
 *   field_types = {
 *     "vote_up_down_field"
 *   }
 * )
 */
class VoteUpDownFormatterType extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $elements = [];
    $widget = \Drupal::service('plugin.manager.vud')
      ->createInstance($this->getFieldSetting('widget'));
    $elements[] = $widget->build($items->getEntity());
    return $elements;
  }

}
