<?php
/**
 * @file
 * Definition of Drupal\currency\Entity\Form\CurrencyFormController.
 */

namespace Drupal\currency\Form;

use Drupal\Core\Entity\CurrencyEntityForm;
use Drupal\Core\Language\Language;

/**
 * Form controller for the Currency entity edit forms.
 *
 * @ingroup currency
 */
class CurrencyForm extends ContentEntityForm {

  /**
   * Overrides Drupal\Core\Entity\EntityFormController::buildForm().
   */
  public function buildForm(array $form, array &$form_state) {
    /* @var $entity \Drupal\currency\Entity\Currency */
    $form = parent::buildForm($form, $form_state);
    $entity = $this->entity;

    $form['langcode'] = array(
      '#title' => t('Language'),
      '#type' => 'language_select',
      '#default_value' => $entity->getUntranslated()->language()->id,
      '#languages' => Language::STATE_ALL,
    );

    return $form;
  }

  /**
   * Overrides \Drupal\Core\Entity\EntityFormController::submit().
   */
  public function submit(array $form, array &$form_state) {
    // Build the entity object from the submitted values.
    $entity = parent::submit($form, $form_state);
    $form_state['redirect_route']['route_name'] = 'currency.Currency.list';

    return $entity;
  }

  /**
   * Overrides Drupal\Core\Entity\EntityFormController::save().
   */
  public function save(array $form, array &$form_state) {
    $entity = $this->entity;
    $entity->save();
  }
}
