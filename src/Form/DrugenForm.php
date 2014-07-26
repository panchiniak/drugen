<?php

/**
 * @file
 * Contains \Drupal\drugen\Form\DrugenForm.
 */

namespace Drupal\drugen\Form;

use Drupal\Core\Form\ConfigFormBase;

class DrugenForm extends ConfigFormBase
{

    /**
     * {@inheritdoc}.
     */
    public function getFormId()
    {
        return 'drugen_config_form';
    }

    /**
     * {@inheritdoc}.
     */
    public function buildForm(array $form, array &$form_state)
    {

        $roles = entity_load_multiple('user_role');
        $roles_options = array();
        foreach ($roles as $role_id => $role_obj) {
            $roles_options[$role_id] = $role_obj->label;
        }

        $form['drugen_user_quantity'] = array(
            '#type' => 'textfield',
            '#title' => t('User quantity'),
            '#description' => t('Type the number of users Drugen will generate.'),
            '#required' => true,
        );

        $form['drugen_prefix'] = array(
            '#type' => 'textfield',
            '#title' => t('User name prefix'),
            '#description' => t('The user name will be generated with PrefixUid. Leave it blank for using UserUid.'),
        );

        $form['drugen_domain'] = array(
            '#type' => 'textfield',
            '#title' => t('Domain'),
            '#description' => t('The mail address will be generated with PrefixUid@domain. Leave it blanck for using PrefixUid@domain.example'),
            '#required' => true,
        );

        $form['drugen_role'] = array(
            '#type' => 'select',
            '#title' => t('Role'),
            '#description' => t('Set the role of the users. Leave it blank for using Authenticated user.'),
            '#options' => $roles_options,
            '#default_value' => $category['selected'],
            '#multiple' => true,
        );

        $form['drugen_size_password'] = array(
            '#type' => 'textfield',
            '#title' => t("Password's size"),
            '#description' => t('Define password length. Leave it blank for using 4.'),
            '#default_value' => 4,
        );

        $form['submit'] = array(
            '#type' => 'submit',
            '#value' => $this->t('Generate users'),
        );

        return $form;
    }

    /**
     * {@inheritdoc}
     */
    public function validateForm(array &$form, array &$form_state)
    {

        /*if (strpos($form_state['values']['email'], '.com') === FALSE ) {
            $this->setFormError('email', $form_state, $this->t('This is not a .com email address.'));
        } */
    }

    /**
     * {@inheritdoc}
     */
    public function submitForm(array &$form, array &$form_state)
    {
        // \Drupal::config('m4032404.settings')
        //     ->set('m4032404_admin_only', $form_state['values']['m4032404_admin_only'])
        //     ->save();
        // parent::submitForm($form, $form_state);
    }
}
