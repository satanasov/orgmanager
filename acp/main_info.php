<?php
/**
 * main_info.php
 * part of orgmanager
 * Created by Stanislav Atanasov.
 * Date: 2/17/19
 * Time: 4:47 PM
 *
 * File description:
 *
 *
 */

namespace anavaro\orgmanager\acp;


class main_info
{
	function module()
	{
		return array(
			'filename'	=> 'anavaro\orgmanager\acp\main_module',
			'title'		=> 'ACP_ORGMANAGER_MAIN',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'base'			=> array(
					'title' => 'ACP_ORGMANAGER_MAIN',
					'auth' => 'ext_anavaro/orgmanager && acl_a_user',
					'cat' => array('PHPBB_ORGANIZATION_MANAGEMENT')
				),
			),
		);
	}

}