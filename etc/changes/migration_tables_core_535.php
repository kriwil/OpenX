<?php

/*
+---------------------------------------------------------------------------+
| OpenX v2.8                                                                |
| ==========                                                                |
|                                                                           |
| Copyright (c) 2003-2009 OpenX Limited                                     |
| For contact details, see: http://www.openx.org/                           |
|                                                                           |
| This program is free software; you can redistribute it and/or modify      |
| it under the terms of the GNU General Public License as published by      |
| the Free Software Foundation; either version 2 of the License, or         |
| (at your option) any later version.                                       |
|                                                                           |
| This program is distributed in the hope that it will be useful,           |
| but WITHOUT ANY WARRANTY; without even the implied warranty of            |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the             |
| GNU General Public License for more details.                              |
|                                                                           |
| You should have received a copy of the GNU General Public License         |
| along with this program; if not, write to the Free Software               |
| Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA |
+---------------------------------------------------------------------------+
$Id: migration_tables_core_535.php 79311 2011-11-03 21:18:14Z chris.nutting $
*/

require_once(MAX_PATH.'/lib/OA/Upgrade/Migration.php');

class Migration_535 extends Migration
{

    function Migration_535()
    {
        //$this->__construct();

		$this->aTaskList_destructive[] = 'beforeRemoveTable__data_raw_tracker_click';
		$this->aTaskList_destructive[] = 'afterRemoveTable__data_raw_tracker_click';


    }



	function beforeRemoveTable__data_raw_tracker_click()
	{
		return $this->beforeRemoveTable('data_raw_tracker_click');
	}

	function afterRemoveTable__data_raw_tracker_click()
	{
		return $this->afterRemoveTable('data_raw_tracker_click');
	}

}

?>