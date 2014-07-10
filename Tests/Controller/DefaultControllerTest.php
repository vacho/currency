<?php

/**
 * @file
 * Tests for currency.module.
 */

namespace Drupal\currency\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the currency module.
 */
class DefaultControllerTest extends WebTestBase {

  public static function getInfo() {
    return array(
      'name' => "currency DefaultController's controller functionality",
      'description' => 'Test Unit for module currency and controller DefaultController.',
      'group' => 'Other',
    );
  }

  function setUp() {
    parent::setUp();
  }

  /**
   * Tests currency functionality.
   */
  function testDefaultController() {
    //Check that the basic functions of module currency.
    $this->assertEqual(TRUE, TRUE, 'Test Unit Generated via App Console.');
  }

}
