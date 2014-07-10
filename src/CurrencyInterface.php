<?php
/**
 * @file
 * Contains \Drupal\currency\CurrencyInterface.
 */

namespace Drupal\currency;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\user\EntityOwnerInterface;
/**
 * Provides an interface defining a Currency entity.
 * @ingroup account
 */
interface CurrencyInterface extends ContentEntityInterface, EntityOwnerInterface
{
  // Add get/set methods for your configuration properties here.
}
