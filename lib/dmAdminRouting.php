<?php

class dmAdminRouting
{
  /**
   * Listens to the routing.load_configuration event.
   *
   * @param sfEvent An sfEvent instance
   */
  static public function listenToRoutingLoadConfigurationEvent(sfEvent $event)
  {
    $r = $event->getSubject();

    // preprend our routes
    $r->prependRoute('homepage', new sfRoute('/', array('module' => 'dmAdmin', 'action' => 'index')));
  }

}