<?php

sfConfig::add(array(
  'dm_admin_dir'    => realpath(dirname(__FILE__)."/.."),
  'dm_admin_asset'  => 'dm/admin'
));

sfConfig::set("dm_enabled_parts", array_merge(sfConfig::get("sf_enabled_parts", array()), array("admin")));

if (in_array('dmAdmin', sfConfig::get('sf_enabled_modules', array())))
{
  $this->dispatcher->connect('routing.load_configuration', array('dmAdminRouting', 'listenToRoutingLoadConfigurationEvent'));
}