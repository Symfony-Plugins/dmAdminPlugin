<?php

class dmAdminLinkTag extends dmLinkTag
{

  public function __construct($resource = null)
  {
    $this->set('resource', $resource)->addClass('link');
  }

	public function render()
	{
    $tag = '<a'.$this->getHtmlOptions().'>'.$this['name'].'</a>';
    return $tag;
	}

}