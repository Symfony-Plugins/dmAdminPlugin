<?php

class dmAdminWebResponse extends dmWebResponse
{

  public function getStylesheet()
  {
    $core = sfConfig::get("dm_core_asset");
    $admin = sfConfig::get("dm_admin_asset");

    return array(
      $core.'/css/reset' => '',
      $core.'/css/util' => '',
      $core.'/css/sprites' => '',
      $core.'/css/sprite16' => '',
      $admin.'/css/main' => '',
      $admin.'/css/toolbar' => ''
    );
  }

  public function getJavascript()
  {
    $core = sfConfig::get("dm_core_asset");
    $admin = sfConfig::get("dm_admin_asset");

    return array(
      $core.'/js/lib/jquery/jquery.min' => '',
      $core.'/js/lib/jquery-ui/jquery-ui.min' => '',
      $core.'/js/config' => '',
      $admin.'/js/main' => ''
    );
  }

}