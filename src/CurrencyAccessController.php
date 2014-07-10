<?php

/**
 * @file
 * Contains \Drupal\account/CurrencyAccessController
 */

namespace Drupal\currency;

use Drupal\Core\Entity\EntityAccessController;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;

/**
 * Access controller for the Currency entity.
 *
 * @see \Drupal\currency\Entity\Currency.
 */
class CurrencyAccessController extends EntityAccessController {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, $langcode, AccountInterface $account) {

    switch ($operation) {
      case 'view':
        return $account->hasPermission('view Currency entity');
        break;

      case 'edit':
        return $account->hasPermission('edit Currency entity');
        break;

      case 'delete':
        return $account->hasPermission('delete Currency entity');
        break;

    }

    return TRUE;
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return $account->hasPermission('add Currency entity');
  }
}
