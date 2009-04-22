<?php

class dmAdminActions extends dmAdminBaseActions
{
  public function executeIndex()
  {
  	$this->modules = dmModuleManager::get()->getModules();
  }
}