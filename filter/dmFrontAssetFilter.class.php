<?php

/**
 * Includes Assets for rendering DiemFront
 */
class dmAdminAssetFilter extends dmAssetFilter
{

  public function configure()
  {
    $core_dir = sfConfig::get('dm_core_web_dir');
    $front_dir = sfConfig::get('dm_front_web_dir');

    $this->stylesheets = array(
      $core_dir.'/css/reset',
      $core_dir.'/css/util'
    );

    $this->javascripts = array(
      $core_dir.'/js/lib/jquery',
      $core_dir.'/js/lib/jquery-ui',
      $core_dir.'/js/config'
    );
  }
}