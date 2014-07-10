<?php

/**
 * @file
 * Contains \Drupal\currency\Entity\Controller\CurrencyListController.
 */

namespace Drupal\currency\Entity\Controller;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;

/**
 * Provides a list controller for Currency entity.
 *
 * @ingroup currency
 */
class CurrencyListController extends EntityListBuilder {

  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = t('CurrencyID');
    $header['name'] = t('Name');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\currency\Entity\Currency */
    $row['id'] = $entity->id();
    $row['name'] = \Drupal::l($this->getLabel($entity),
      'currency.Currency', array(
        'currency_Currency' => $entity->id(),
      ));
    return $row + parent::buildRow($entity);
  }
}
