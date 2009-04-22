<?php

echo £o('div#dm_toolbar_wrap');

  echo £o('div#dm_toolbar');

  echo £link('sfGuardAuth/signout')->nameTitle(__('Logout'))->attr('.s16block.s16_signout');

  echo dm_link_to(__('Home'), 'dmAmin/index', '.s16block.s16_home title="'.__('Home').'"');

  echo dm_link_to(__('Help'), 'dmAdmin/help', '.s16block.s16_help title="'.__('Help').'"');

  echo £c('div');

echo £c('div');