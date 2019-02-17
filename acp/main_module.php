<?php
/**
 * main_module.php
 * part of orgmanager
 * Created by Stanislav Atanasov.
 * Date: 2/17/19
 * Time: 4:45 PM
 *
 * File description:
 *
 *
 */

namespace anavaro\orgmanager\acp;

class main_module
{
	var $u_action;

	function main($id, $mode)
	{
		global $phpbb_container;
		$this->language = $phpbb_container->get('language');

		switch ($mode)
		{
			case 'base':
				$title = 'ACP_GALLERY_OVERVIEW';
				$this->page_title = $this->language->lang($title);
				$this->base();
		}
	}

	function base()
	{
		global $phpbb_container;

		$this->request = $phpbb_container->get('request');


		$this->tpl_name = 'acp_main';
		add_form_key('acp_members');
		$page = $this->request->variable('page', 0);
	}

}