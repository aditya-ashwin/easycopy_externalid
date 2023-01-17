<?php

require_once 'easycopy_externalid.civix.php';
// phpcs:disable
use CRM_EasycopyExternalid_ExtensionUtil as E;
// phpcs:enable

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function easycopy_externalid_civicrm_config(&$config): void {
  _easycopy_externalid_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function easycopy_externalid_civicrm_install(): void {
  _easycopy_externalid_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function easycopy_externalid_civicrm_enable(): void {
  _easycopy_externalid_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function easycopy_externalid_civicrm_entityTypes(&$entityTypes): void {
  _easycopy_externalid_civix_civicrm_entityTypes($entityTypes);
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_preProcess
 */
//function easycopy_externalid_civicrm_preProcess($formName, &$form): void {
//
//}

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_navigationMenu
 */
//function easycopy_externalid_civicrm_navigationMenu(&$menu): void {
//  _easycopy_externalid_civix_insert_navigation_menu($menu, 'Mailings', [
//    'label' => E::ts('New subliminal message'),
//    'name' => 'mailing_subliminal_message',
//    'url' => 'civicrm/mailing/subliminal',
//    'permission' => 'access CiviMail',
//    'operator' => 'OR',
//    'separator' => 0,
//  ]);
//  _easycopy_externalid_civix_navigationMenu($menu);
//}

/**
 * Implements hook_civicrm_pageRun().
 */
function easycopy_externalid_civicrm_pageRun(&$page) {
  $pageName = get_class($page);

  if ($pageName == 'CRM_Contact_Page_View_Summary') {
    Civi::resources()->addScriptFile('easycopy_externalid', 'easycopy_externalid.js');
    Civi::resources()->addStyleFile('easycopy_externalid', 'easycopy_externalid.css');
  }
}
