<?php

/**
 * @file
 * Contains \Drupal\drugen\Form\DrugenForm.
 */

namespace \Drupal\drugen\Form;

use Drupal\Core\Form\ConfigFormBase;

class DrugenForm extends ConfigFormBase {

  /**
   * {@inheritdoc}.
   */
  public function getFormId() {
    return 'drugen_config_form';
  }

  /**
   * {@inheritdoc}.
   */
  public function buildForm(array $form, array &$form_state) {
    // $m4032404_admin_only = \Drupal::config('m4032404.settings')
    //   ->get('m4032404_admin_only', FALSE);

    $form['Teste'] = array(
      '#type' => 'checkbox',
      '#title' => t('Enforce on Admin Only'),
      '#description' => t('Check the box to enforce the 404 behavior only on admin paths'),
      //'#default_value' => $m4032404_admin_only,
    );

    // $form['submit'] = array(
    //   '#type' => 'submit',
    //   '#value' => $this->t('Save configuration'),
    // );

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, array &$form_state) {

    /*if (strpos($form_state['values']['email'], '.com') === FALSE ) {
      $this->setFormError('email', $form_state, $this->t('This is not a .com email address.'));
    } */
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, array &$form_state) {
    // \Drupal::config('m4032404.settings')
    //   ->set('m4032404_admin_only', $form_state['values']['m4032404_admin_only'])
    //   ->save();
    // parent::submitForm($form, $form_state);
  }
}
