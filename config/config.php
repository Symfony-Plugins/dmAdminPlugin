<?php

sfConfig::add(array(
  'dm_front_dir'    => realpath(dirname(__FILE__)."/.."),
  'dm_front_asset'  => 'dm/front'
));

sfConfig::set("dm_enabled_parts", array_merge(sfConfig::get("sf_enabled_parts", array()), array("front")));