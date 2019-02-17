<?php
/**
*
* Post Love extension for the phpBB Forum Software package.
*
* @copyright (c) 2014 Lucifer <http://www.anavaro.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace anavaro\orgmanager\migrations;

/**
* Primary migration
*/

class release_1_0_0 extends \phpbb\db\migration\migration
{
	public function update_data()
	{
		return array(
			array('config.add', array('orgmanager_version', '1.0.0')),
			array('module.add', array('acp', 'ACP_CAT_DOT_MODS', 'PHPBB_ORGANIZATION_MANAGEMENT')),
			array('module.add', array('acp', 'PHPBB_ORGANIZATION_MANAGEMENT', array(
				'module_basename'	=> '\anavaro\orgmanager\acp\main_module',
				'module_langname'	=> 'ACP_ORGMANAGER_MAIN',
				'module_mode'		=> 'base',
				'module_auth'		=> 'ext_anavaro/orgmanager && acl_a_user',
			))),
		);
	}

	//lets create the needed table
	public function update_schema()
	{
		return array(
			'add_tables'    => array(
				$this->table_prefix . 'organization'		=> array(
					'COLUMNS'		=> array(
						'id'		=> array('UINT', null, 'auto_increment'),
						'user_id'	=> array('UINT:8', 0),
						'id_key'	=> array('VCHAR:40', ''),
						'name'		=> array('VCHAR:255', ''),
						'surname'	=> array('VCHAR:255', ''),
						'lastname'	=> array('VCHAR:255', ''),
						'email'		=> array('VCHAR:255', ''),
						'phone'		=> array('VCHAR:255', ''),
					),
					'PRIMARY_KEY'    => 'id',
				)
			),
		);
	}

	public function revert_schema()
	{
		return array(
			'drop_tables'		=> array(
				$this->table_prefix . 'organization'
			),
		);
	}
}
