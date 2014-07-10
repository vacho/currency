<?php
/**
 * @file
 * Defines Drupal\currency\Form\CurrencySettingsForm.
 */

namespace Drupal\currency\Form;

use Drupal\Core\Form\FormBase;

/**
 * Class CurrencySettingsForm.
 * @package Drupal\currency\Form
 * @ingroup currency
 */
class CurrencySettingsForm extends FormBase {
  /**
   * Returns a unique string identifying the form.
   *
   * @return string
   *   The unique string identifying the form.
   */
  public function getFormId() {
    return 'Currency_settings';
  }

  /**
   * Form submission handler.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param array $form_state
   *   An associative array containing the current state of the form.
   */
  public function submitForm(array &$form, array &$form_state) {
    // Empty implementation of the abstract submit class.
  }


  /**
   * Define the form used for ContentEntityExample settings.
   * @return array
   *   Form definition array.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param array $form_state
   *   An associative array containing the current state of the form.
   */
  public function buildForm(array $form, array &$form_state) {
    $form['Currency_settings']['#markup'] = 'Settings form for Currency. Manage field settings here.';
    return $form;
  }
}
