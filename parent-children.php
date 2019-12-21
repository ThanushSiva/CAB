<?php
// This script and data application were generated by AppGini 5.71
// Download AppGini for free from https://bigprof.com/appgini/download/

	/* Configuration */
	/*************************************/

		$pcConfig = array(
			'buses' => array(   
			),
			'seats' => array(   
			),
			'availability' => array(   
				'bus' => array(   
					'parent-table' => 'buses',
					'parent-primary-key' => 'id',
					'child-primary-key' => 'id',
					'child-primary-key-index' => 0,
					'tab-label' => 'Availability',
					'auto-close' => true,
					'table-icon' => 'resources/table_icons/accept.png',
					'display-refresh' => true,
					'display-add-new' => true,
					'forced-where' => '',
					'display-fields' => array(1 => 'Car', 2 => 'Route', 3 => 'Amount', 4 => 'Date', 5 => 'Departure Time', 6 => 'Status'),
					'display-field-names' => array(1 => 'bus', 2 => 'route', 3 => 'amount', 4 => 'date', 5 => 'time', 6 => 'status'),
					'sortable-fields' => array(0 => '`availability`.`id`', 1 => '`buses1`.`number`', 2 => 3, 3 => '`routes1`.`amount`', 4 => '`availability`.`date`', 5 => '`availability`.`time`', 6 => 7),
					'records-per-page' => 10,
					'default-sort-by' => 0,
					'default-sort-direction' => 'desc',
					'open-detail-view-on-click' => true,
					'display-page-selector' => true,
					'show-page-progress' => true,
					'template' => 'children-availability',
					'template-printable' => 'children-availability-printable',
					'query' => "SELECT `availability`.`id` as 'id', IF(    CHAR_LENGTH(`buses1`.`number`), CONCAT_WS('',   `buses1`.`number`), '') as 'bus', IF(    CHAR_LENGTH(`routes1`.`name`) || CHAR_LENGTH(`routes1`.`time`), CONCAT_WS('',   `routes1`.`name`, '  :', `routes1`.`time`), '') as 'route', IF(    CHAR_LENGTH(`routes1`.`amount`), CONCAT_WS('',   `routes1`.`amount`), '') as 'amount', if(`availability`.`date`,date_format(`availability`.`date`,'%m/%d/%Y'),'') as 'date', TIME_FORMAT(`availability`.`time`, '%r') as 'time', `availability`.`status` as 'status' FROM `availability` LEFT JOIN `buses` as buses1 ON `buses1`.`id`=`availability`.`bus` LEFT JOIN `routes` as routes1 ON `routes1`.`id`=`availability`.`route` "
				),
				'route' => array(   
					'parent-table' => 'routes',
					'parent-primary-key' => 'id',
					'child-primary-key' => 'id',
					'child-primary-key-index' => 0,
					'tab-label' => 'Availability',
					'auto-close' => true,
					'table-icon' => 'resources/table_icons/accept.png',
					'display-refresh' => true,
					'display-add-new' => true,
					'forced-where' => '',
					'display-fields' => array(1 => 'Car', 2 => 'Route', 3 => 'Amount', 4 => 'Date', 5 => 'Departure Time', 6 => 'Status'),
					'display-field-names' => array(1 => 'bus', 2 => 'route', 3 => 'amount', 4 => 'date', 5 => 'time', 6 => 'status'),
					'sortable-fields' => array(0 => '`availability`.`id`', 1 => '`buses1`.`number`', 2 => 3, 3 => '`routes1`.`amount`', 4 => '`availability`.`date`', 5 => '`availability`.`time`', 6 => 7),
					'records-per-page' => 10,
					'default-sort-by' => 0,
					'default-sort-direction' => 'desc',
					'open-detail-view-on-click' => true,
					'display-page-selector' => true,
					'show-page-progress' => true,
					'template' => 'children-availability',
					'template-printable' => 'children-availability-printable',
					'query' => "SELECT `availability`.`id` as 'id', IF(    CHAR_LENGTH(`buses1`.`number`), CONCAT_WS('',   `buses1`.`number`), '') as 'bus', IF(    CHAR_LENGTH(`routes1`.`name`) || CHAR_LENGTH(`routes1`.`time`), CONCAT_WS('',   `routes1`.`name`, '  :', `routes1`.`time`), '') as 'route', IF(    CHAR_LENGTH(`routes1`.`amount`), CONCAT_WS('',   `routes1`.`amount`), '') as 'amount', if(`availability`.`date`,date_format(`availability`.`date`,'%m/%d/%Y'),'') as 'date', TIME_FORMAT(`availability`.`time`, '%r') as 'time', `availability`.`status` as 'status' FROM `availability` LEFT JOIN `buses` as buses1 ON `buses1`.`id`=`availability`.`bus` LEFT JOIN `routes` as routes1 ON `routes1`.`id`=`availability`.`route` "
				)
			),
			'bookings' => array(   
				'id_number' => array(   
					'parent-table' => 'customers',
					'parent-primary-key' => 'id',
					'child-primary-key' => 'id',
					'child-primary-key-index' => 0,
					'tab-label' => 'Bookings',
					'auto-close' => true,
					'table-icon' => 'resources/table_icons/accordion.png',
					'display-refresh' => true,
					'display-add-new' => true,
					'forced-where' => '',
					'display-fields' => array(1 => 'Id number', 2 => 'Fullname', 3 => 'Phone', 4 => 'Car', 5 => 'Seat', 6 => 'Amount', 7 => 'Date', 8 => 'Departure Time', 9 => 'Luggage', 10 => 'Date booked'),
					'display-field-names' => array(1 => 'id_number', 2 => 'fullname', 3 => 'phone', 4 => 'bus', 5 => 'seat', 6 => 'amount', 7 => 'date', 8 => 'time', 9 => 'luggage', 10 => 'date_booked'),
					'sortable-fields' => array(0 => '`bookings`.`id`', 1 => '`customers1`.`id_number`', 2 => '`customers1`.`fullname`', 3 => '`customers1`.`phone`', 4 => 5, 5 => '`seats1`.`name`', 6 => 7, 7 => 'date_format(`availability1`.`date`,\'%m/%d/%Y\')', 8 => '`availability1`.`time`', 9 => 10, 10 => '`bookings`.`date_booked`'),
					'records-per-page' => 10,
					'default-sort-by' => 0,
					'default-sort-direction' => 'desc',
					'open-detail-view-on-click' => true,
					'display-page-selector' => true,
					'show-page-progress' => true,
					'template' => 'children-bookings',
					'template-printable' => 'children-bookings-printable',
					'query' => "SELECT `bookings`.`id` as 'id', IF(    CHAR_LENGTH(`customers1`.`id_number`), CONCAT_WS('',   `customers1`.`id_number`), '') as 'id_number', IF(    CHAR_LENGTH(`customers1`.`fullname`), CONCAT_WS('',   `customers1`.`fullname`), '') as 'fullname', IF(    CHAR_LENGTH(`customers1`.`phone`), CONCAT_WS('',   `customers1`.`phone`), '') as 'phone', IF(    CHAR_LENGTH(`buses1`.`number`) || CHAR_LENGTH(`routes1`.`name`) || CHAR_LENGTH(`routes1`.`time`), CONCAT_WS('',   `buses1`.`number`, `routes1`.`name`, '  :', `routes1`.`time`), '') as 'bus', IF(    CHAR_LENGTH(`seats1`.`name`), CONCAT_WS('',   `seats1`.`name`), '') as 'seat', IF(    CHAR_LENGTH(`routes1`.`amount`), CONCAT_WS('',   `routes1`.`amount`), '') as 'amount', IF(    CHAR_LENGTH(if(`availability1`.`date`,date_format(`availability1`.`date`,'%m/%d/%Y'),'')), CONCAT_WS('',   if(`availability1`.`date`,date_format(`availability1`.`date`,'%m/%d/%Y'),'')), '') as 'date', IF(    CHAR_LENGTH(`availability1`.`time`), CONCAT_WS('',   `availability1`.`time`), '') as 'time', concat('<i class=\"glyphicon glyphicon-', if(`bookings`.`luggage`, 'check', 'unchecked'), '\"></i>') as 'luggage', if(`bookings`.`date_booked`,date_format(`bookings`.`date_booked`,'%m/%d/%Y'),'') as 'date_booked' FROM `bookings` LEFT JOIN `customers` as customers1 ON `customers1`.`id`=`bookings`.`id_number` LEFT JOIN `availability` as availability1 ON `availability1`.`id`=`bookings`.`bus` LEFT JOIN `buses` as buses1 ON `buses1`.`id`=`availability1`.`bus` LEFT JOIN `routes` as routes1 ON `routes1`.`id`=`availability1`.`route` LEFT JOIN `seats` as seats1 ON `seats1`.`id`=`bookings`.`seat` "
				),
				'bus' => array(   
					'parent-table' => 'availability',
					'parent-primary-key' => 'id',
					'child-primary-key' => 'id',
					'child-primary-key-index' => 0,
					'tab-label' => 'Bookings',
					'auto-close' => true,
					'table-icon' => 'resources/table_icons/accordion.png',
					'display-refresh' => true,
					'display-add-new' => true,
					'forced-where' => '',
					'display-fields' => array(1 => 'Id number', 2 => 'Fullname', 3 => 'Phone', 4 => 'Car', 5 => 'Seat', 6 => 'Amount', 7 => 'Date', 8 => 'Departure Time', 9 => 'Luggage', 10 => 'Date booked'),
					'display-field-names' => array(1 => 'id_number', 2 => 'fullname', 3 => 'phone', 4 => 'bus', 5 => 'seat', 6 => 'amount', 7 => 'date', 8 => 'time', 9 => 'luggage', 10 => 'date_booked'),
					'sortable-fields' => array(0 => '`bookings`.`id`', 1 => '`customers1`.`id_number`', 2 => '`customers1`.`fullname`', 3 => '`customers1`.`phone`', 4 => 5, 5 => '`seats1`.`name`', 6 => 7, 7 => 'date_format(`availability1`.`date`,\'%m/%d/%Y\')', 8 => '`availability1`.`time`', 9 => 10, 10 => '`bookings`.`date_booked`'),
					'records-per-page' => 10,
					'default-sort-by' => 0,
					'default-sort-direction' => 'desc',
					'open-detail-view-on-click' => true,
					'display-page-selector' => true,
					'show-page-progress' => true,
					'template' => 'children-bookings',
					'template-printable' => 'children-bookings-printable',
					'query' => "SELECT `bookings`.`id` as 'id', IF(    CHAR_LENGTH(`customers1`.`id_number`), CONCAT_WS('',   `customers1`.`id_number`), '') as 'id_number', IF(    CHAR_LENGTH(`customers1`.`fullname`), CONCAT_WS('',   `customers1`.`fullname`), '') as 'fullname', IF(    CHAR_LENGTH(`customers1`.`phone`), CONCAT_WS('',   `customers1`.`phone`), '') as 'phone', IF(    CHAR_LENGTH(`buses1`.`number`) || CHAR_LENGTH(`routes1`.`name`) || CHAR_LENGTH(`routes1`.`time`), CONCAT_WS('',   `buses1`.`number`, `routes1`.`name`, '  :', `routes1`.`time`), '') as 'bus', IF(    CHAR_LENGTH(`seats1`.`name`), CONCAT_WS('',   `seats1`.`name`), '') as 'seat', IF(    CHAR_LENGTH(`routes1`.`amount`), CONCAT_WS('',   `routes1`.`amount`), '') as 'amount', IF(    CHAR_LENGTH(if(`availability1`.`date`,date_format(`availability1`.`date`,'%m/%d/%Y'),'')), CONCAT_WS('',   if(`availability1`.`date`,date_format(`availability1`.`date`,'%m/%d/%Y'),'')), '') as 'date', IF(    CHAR_LENGTH(`availability1`.`time`), CONCAT_WS('',   `availability1`.`time`), '') as 'time', concat('<i class=\"glyphicon glyphicon-', if(`bookings`.`luggage`, 'check', 'unchecked'), '\"></i>') as 'luggage', if(`bookings`.`date_booked`,date_format(`bookings`.`date_booked`,'%m/%d/%Y'),'') as 'date_booked' FROM `bookings` LEFT JOIN `customers` as customers1 ON `customers1`.`id`=`bookings`.`id_number` LEFT JOIN `availability` as availability1 ON `availability1`.`id`=`bookings`.`bus` LEFT JOIN `buses` as buses1 ON `buses1`.`id`=`availability1`.`bus` LEFT JOIN `routes` as routes1 ON `routes1`.`id`=`availability1`.`route` LEFT JOIN `seats` as seats1 ON `seats1`.`id`=`bookings`.`seat` "
				),
				'seat' => array(   
					'parent-table' => 'seats',
					'parent-primary-key' => 'id',
					'child-primary-key' => 'id',
					'child-primary-key-index' => 0,
					'tab-label' => 'Bookings',
					'auto-close' => true,
					'table-icon' => 'resources/table_icons/accordion.png',
					'display-refresh' => true,
					'display-add-new' => true,
					'forced-where' => '',
					'display-fields' => array(1 => 'Id number', 2 => 'Fullname', 3 => 'Phone', 4 => 'Car', 5 => 'Seat', 6 => 'Amount', 7 => 'Date', 8 => 'Departure Time', 9 => 'Luggage', 10 => 'Date booked'),
					'display-field-names' => array(1 => 'id_number', 2 => 'fullname', 3 => 'phone', 4 => 'bus', 5 => 'seat', 6 => 'amount', 7 => 'date', 8 => 'time', 9 => 'luggage', 10 => 'date_booked'),
					'sortable-fields' => array(0 => '`bookings`.`id`', 1 => '`customers1`.`id_number`', 2 => '`customers1`.`fullname`', 3 => '`customers1`.`phone`', 4 => 5, 5 => '`seats1`.`name`', 6 => 7, 7 => 'date_format(`availability1`.`date`,\'%m/%d/%Y\')', 8 => '`availability1`.`time`', 9 => 10, 10 => '`bookings`.`date_booked`'),
					'records-per-page' => 10,
					'default-sort-by' => 0,
					'default-sort-direction' => 'desc',
					'open-detail-view-on-click' => true,
					'display-page-selector' => true,
					'show-page-progress' => true,
					'template' => 'children-bookings',
					'template-printable' => 'children-bookings-printable',
					'query' => "SELECT `bookings`.`id` as 'id', IF(    CHAR_LENGTH(`customers1`.`id_number`), CONCAT_WS('',   `customers1`.`id_number`), '') as 'id_number', IF(    CHAR_LENGTH(`customers1`.`fullname`), CONCAT_WS('',   `customers1`.`fullname`), '') as 'fullname', IF(    CHAR_LENGTH(`customers1`.`phone`), CONCAT_WS('',   `customers1`.`phone`), '') as 'phone', IF(    CHAR_LENGTH(`buses1`.`number`) || CHAR_LENGTH(`routes1`.`name`) || CHAR_LENGTH(`routes1`.`time`), CONCAT_WS('',   `buses1`.`number`, `routes1`.`name`, '  :', `routes1`.`time`), '') as 'bus', IF(    CHAR_LENGTH(`seats1`.`name`), CONCAT_WS('',   `seats1`.`name`), '') as 'seat', IF(    CHAR_LENGTH(`routes1`.`amount`), CONCAT_WS('',   `routes1`.`amount`), '') as 'amount', IF(    CHAR_LENGTH(if(`availability1`.`date`,date_format(`availability1`.`date`,'%m/%d/%Y'),'')), CONCAT_WS('',   if(`availability1`.`date`,date_format(`availability1`.`date`,'%m/%d/%Y'),'')), '') as 'date', IF(    CHAR_LENGTH(`availability1`.`time`), CONCAT_WS('',   `availability1`.`time`), '') as 'time', concat('<i class=\"glyphicon glyphicon-', if(`bookings`.`luggage`, 'check', 'unchecked'), '\"></i>') as 'luggage', if(`bookings`.`date_booked`,date_format(`bookings`.`date_booked`,'%m/%d/%Y'),'') as 'date_booked' FROM `bookings` LEFT JOIN `customers` as customers1 ON `customers1`.`id`=`bookings`.`id_number` LEFT JOIN `availability` as availability1 ON `availability1`.`id`=`bookings`.`bus` LEFT JOIN `buses` as buses1 ON `buses1`.`id`=`availability1`.`bus` LEFT JOIN `routes` as routes1 ON `routes1`.`id`=`availability1`.`route` LEFT JOIN `seats` as seats1 ON `seats1`.`id`=`bookings`.`seat` "
				)
			),
			'routes' => array(   
			),
			'customers' => array(   
			)
		);

	/*************************************/
	/* End of configuration */


	$currDir = dirname(__FILE__);
	include("{$currDir}/defaultLang.php");
	include("{$currDir}/language.php");
	include("{$currDir}/lib.php");
	@header('Content-Type: text/html; charset=' . datalist_db_encoding);

	handle_maintenance();

	/**
	* dynamic configuration based on current user's permissions
	* $userPCConfig array is populated only with parent tables where the user has access to
	* at least one child table
	*/
	$userPCConfig = array();
	foreach($pcConfig as $pcChildTable => $ChildrenLookups){
		$permChild = getTablePermissions($pcChildTable);
		if($permChild[2]){ // user can view records of the child table, so proceed to check children lookups
			foreach($ChildrenLookups as $ChildLookupField => $ChildConfig){
				$permParent = getTablePermissions($ChildConfig['parent-table']);
				if($permParent[2]){ // user can view records of parent table
					$userPCConfig[$pcChildTable][$ChildLookupField] = $pcConfig[$pcChildTable][$ChildLookupField];
					// show add new only if configured above AND the user has insert permission
					if($permChild[1] && $pcConfig[$pcChildTable][$ChildLookupField]['display-add-new']){
						$userPCConfig[$pcChildTable][$ChildLookupField]['display-add-new'] = true;
					}else{
						$userPCConfig[$pcChildTable][$ChildLookupField]['display-add-new'] = false;
					}
				}
			}
		}
	}

	/* Receive, UTF-convert, and validate parameters */
	$ParentTable = $_REQUEST['ParentTable']; // needed only with operation=show-children, will be validated in the processing code
	$ChildTable = $_REQUEST['ChildTable'];
		if(!in_array($ChildTable, array_keys($userPCConfig))){
			/* defaults to first child table in config array if not provided */
			$ChildTable = current(array_keys($userPCConfig));
		}
		if(!$ChildTable){ die('<!-- No tables accessible to current user -->'); }
	$SelectedID = strip_tags($_REQUEST['SelectedID']);
	$ChildLookupField = $_REQUEST['ChildLookupField'];
		if(!in_array($ChildLookupField, array_keys($userPCConfig[$ChildTable]))){
			/* defaults to first lookup in current child config array if not provided */
			$ChildLookupField = current(array_keys($userPCConfig[$ChildTable]));
		}
	$Page = intval($_REQUEST['Page']);
		if($Page < 1){
			$Page = 1;
		}
	$SortBy = ($_REQUEST['SortBy'] != '' ? abs(intval($_REQUEST['SortBy'])) : false);
		if(!in_array($SortBy, array_keys($userPCConfig[$ChildTable][$ChildLookupField]['sortable-fields']), true)){
			$SortBy = $userPCConfig[$ChildTable][$ChildLookupField]['default-sort-by'];
		}
	$SortDirection = strtolower($_REQUEST['SortDirection']);
		if(!in_array($SortDirection, array('asc', 'desc'))){
			$SortDirection = $userPCConfig[$ChildTable][$ChildLookupField]['default-sort-direction'];
		}
	$Operation = strtolower($_REQUEST['Operation']);
		if(!in_array($Operation, array('get-records', 'show-children', 'get-records-printable', 'show-children-printable'))){
			$Operation = 'get-records';
		}

	/* process requested operation */
	switch($Operation){
		/************************************************/
		case 'show-children':
			/* populate HTML and JS content with children tabs */
			$tabLabels = $tabPanels = $tabLoaders = '';
			foreach($userPCConfig as $ChildTable => $childLookups){
				foreach($childLookups as $ChildLookupField => $childConfig){
					if($childConfig['parent-table'] == $ParentTable){
						$TableIcon = ($childConfig['table-icon'] ? "<img src=\"{$childConfig['table-icon']}\" border=\"0\" />" : '');
						$tabLabels .= sprintf('<li%s><a href="#panel_%s-%s" id="tab_%s-%s" data-toggle="tab">%s%s</a></li>' . "\n\t\t\t\t\t",($tabLabels ? '' : ' class="active"'), $ChildTable, $ChildLookupField, $ChildTable, $ChildLookupField, $TableIcon, $childConfig['tab-label']);
						$tabPanels .= sprintf('<div id="panel_%s-%s" class="tab-pane%s"><img src="loading.gif" align="top" />%s</div>' . "\n\t\t\t\t", $ChildTable, $ChildLookupField, ($tabPanels ? '' : ' active'), $Translation['Loading ...']);
						$tabLoaders .= sprintf('post("parent-children.php", { ChildTable: "%s", ChildLookupField: "%s", SelectedID: "%s", Page: 1, SortBy: "", SortDirection: "", Operation: "get-records" }, "panel_%s-%s");' . "\n\t\t\t\t", $ChildTable, $ChildLookupField, addslashes($SelectedID), $ChildTable, $ChildLookupField);
					}
				}
			}

			if(!$tabLabels){ die('<!-- no children of current parent table are accessible to current user -->'); }
			?>
			<div id="children-tabs">
				<ul class="nav nav-tabs">
					<?php echo $tabLabels; ?>
				</ul>
				<span id="pc-loading"></span>
			</div>
			<div class="tab-content"><?php echo $tabPanels; ?></div>

			<script>
				$j(function(){
					/* for iOS, avoid loading child tabs in modals */
					var iOS = /(iPad|iPhone|iPod)/g.test(navigator.userAgent);
					var embedded = ($j('.navbar').length == 0);
					if(iOS && embedded){
						$j('#children-tabs').next('.tab-content').remove();
						$j('#children-tabs').remove();
						return;
					}

					/* ajax loading of each tab's contents */
					<?php echo $tabLoaders; ?>
				})
			</script>
			<?php
			break;

		/************************************************/
		case 'show-children-printable':
			/* populate HTML and JS content with children buttons */
			$tabLabels = $tabPanels = $tabLoaders = '';
			foreach($userPCConfig as $ChildTable => $childLookups){
				foreach($childLookups as $ChildLookupField => $childConfig){
					if($childConfig['parent-table'] == $ParentTable){
						$TableIcon = ($childConfig['table-icon'] ? "<img src=\"{$childConfig['table-icon']}\" border=\"0\" />" : '');
						$tabLabels .= sprintf('<button type="button" class="btn btn-default" data-target="#panel_%s-%s" id="tab_%s-%s" data-toggle="collapse">%s %s</button>' . "\n\t\t\t\t\t", $ChildTable, $ChildLookupField, $ChildTable, $ChildLookupField, $TableIcon, $childConfig['tab-label']);
						$tabPanels .= sprintf('<div id="panel_%s-%s" class="collapse"><img src="loading.gif" align="top" />%s</div>' . "\n\t\t\t\t", $ChildTable, $ChildLookupField, $Translation['Loading ...']);
						$tabLoaders .= sprintf('post("parent-children.php", { ChildTable: "%s", ChildLookupField: "%s", SelectedID: "%s", Page: 1, SortBy: "", SortDirection: "", Operation: "get-records-printable" }, "panel_%s-%s");' . "\n\t\t\t\t", $ChildTable, $ChildLookupField, addslashes($SelectedID), $ChildTable, $ChildLookupField);
					}
				}
			}

			if(!$tabLabels){ die('<!-- no children of current parent table are accessible to current user -->'); }
			?>
			<div id="children-tabs" class="hidden-print">
				<div class="btn-group btn-group-lg">
					<?php echo $tabLabels; ?>
				</div>
				<span id="pc-loading"></span>
			</div>
			<div class="vspacer-lg"><?php echo $tabPanels; ?></div>

			<script>
				$j(function(){
					/* for iOS, avoid loading child tabs in modals */
					var iOS = /(iPad|iPhone|iPod)/g.test(navigator.userAgent);
					var embedded = ($j('.navbar').length == 0);
					if(iOS && embedded){
						$j('#children-tabs').next('.tab-content').remove();
						$j('#children-tabs').remove();
						return;
					}

					/* ajax loading of each tab's contents */
					<?php echo $tabLoaders; ?>
				})
			</script>
			<?php
			break;

		/************************************************/
		case 'get-records-printable':
		default: /* default is 'get-records' */

			if($Operation == 'get-records-printable'){
				$userPCConfig[$ChildTable][$ChildLookupField]['records-per-page'] = 2000;
			}

			// build the user permissions limiter
			$permissionsWhere = $permissionsJoin = '';
			$permChild = getTablePermissions($ChildTable);
			if($permChild[2] == 1){ // user can view only his own records
				$permissionsWhere = "`$ChildTable`.`{$userPCConfig[$ChildTable][$ChildLookupField]['child-primary-key']}`=`membership_userrecords`.`pkValue` AND `membership_userrecords`.`tableName`='$ChildTable' AND LCASE(`membership_userrecords`.`memberID`)='".getLoggedMemberID()."'";
			}elseif($permChild[2] == 2){ // user can view only his group's records
				$permissionsWhere = "`$ChildTable`.`{$userPCConfig[$ChildTable][$ChildLookupField]['child-primary-key']}`=`membership_userrecords`.`pkValue` AND `membership_userrecords`.`tableName`='$ChildTable' AND `membership_userrecords`.`groupID`='".getLoggedGroupID()."'";
			}elseif($permChild[2] == 3){ // user can view all records
				/* that's the only case remaining ... no need to modify the query in this case */
			}
			$permissionsJoin = ($permissionsWhere ? ", `membership_userrecords`" : '');

			// build the count query
			$forcedWhere = $userPCConfig[$ChildTable][$ChildLookupField]['forced-where'];
			$query = 
				preg_replace('/^select .* from /i', 'SELECT count(1) FROM ', $userPCConfig[$ChildTable][$ChildLookupField]['query']) .
				$permissionsJoin . " WHERE " .
				($permissionsWhere ? "( $permissionsWhere )" : "( 1=1 )") . " AND " .
				($forcedWhere ? "( $forcedWhere )" : "( 2=2 )") . " AND " .
				"`$ChildTable`.`$ChildLookupField`='" . makeSafe($SelectedID) . "'";
			$totalMatches = sqlValue($query);

			// make sure $Page is <= max pages
			$maxPage = ceil($totalMatches / $userPCConfig[$ChildTable][$ChildLookupField]['records-per-page']);
			if($Page > $maxPage){ $Page = $maxPage; }

			// initiate output data array
			$data = array(
				'config' => $userPCConfig[$ChildTable][$ChildLookupField],
				'parameters' => array(
					'ChildTable' => $ChildTable,
					'ChildLookupField' => $ChildLookupField,
					'SelectedID' => $SelectedID,
					'Page' => $Page,
					'SortBy' => $SortBy,
					'SortDirection' => $SortDirection,
					'Operation' => $Operation
				),
				'records' => array(),
				'totalMatches' => $totalMatches
			);

			// build the data query
			if($totalMatches){ // if we have at least one record, proceed with fetching data
				$startRecord = $userPCConfig[$ChildTable][$ChildLookupField]['records-per-page'] * ($Page - 1);
				$data['query'] = 
					$userPCConfig[$ChildTable][$ChildLookupField]['query'] .
					$permissionsJoin . " WHERE " .
					($permissionsWhere ? "( $permissionsWhere )" : "( 1=1 )") . " AND " .
					($forcedWhere ? "( $forcedWhere )" : "( 2=2 )") . " AND " .
					"`$ChildTable`.`$ChildLookupField`='" . makeSafe($SelectedID) . "'" . 
					($SortBy !== false && $userPCConfig[$ChildTable][$ChildLookupField]['sortable-fields'][$SortBy] ? " ORDER BY {$userPCConfig[$ChildTable][$ChildLookupField]['sortable-fields'][$SortBy]} $SortDirection" : '') .
					" LIMIT $startRecord, {$userPCConfig[$ChildTable][$ChildLookupField]['records-per-page']}";
				$res = sql($data['query'], $eo);
				while($row = db_fetch_row($res)){
					$data['records'][$row[$userPCConfig[$ChildTable][$ChildLookupField]['child-primary-key-index']]] = $row;
				}
			}else{ // if no matching records
				$startRecord = 0;
			}

			if($Operation == 'get-records-printable'){
				$response = loadView($userPCConfig[$ChildTable][$ChildLookupField]['template-printable'], $data);
			}else{
				$response = loadView($userPCConfig[$ChildTable][$ChildLookupField]['template'], $data);
			}

			// change name space to ensure uniqueness
			$uniqueNameSpace = $ChildTable.ucfirst($ChildLookupField).'GetRecords';
			echo str_replace("{$ChildTable}GetChildrenRecordsList", $uniqueNameSpace, $response);
		/************************************************/
	}