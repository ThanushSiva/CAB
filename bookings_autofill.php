<?php
	$currDir = dirname(__FILE__);
	include("$currDir/defaultLang.php");
	include("$currDir/language.php");
	include("$currDir/lib.php");

	handle_maintenance();

	header('Content-type: text/javascript; charset=' . datalist_db_encoding);

	$table_perms = getTablePermissions('bookings');
	if(!$table_perms[0]){ die('// Access denied!'); }

	$mfk = $_GET['mfk'];
	$id = makeSafe($_GET['id']);
	$rnd1 = intval($_GET['rnd1']); if(!$rnd1) $rnd1 = '';

	if(!$mfk){
		die('// No js code available!');
	}

	switch($mfk){

		case 'id_number':
			if(!$id){
				?>
				$j('#fullname<?php echo $rnd1; ?>').html('&nbsp;');
				$j('#phone<?php echo $rnd1; ?>').html('&nbsp;');
				<?php
				break;
			}
			$res = sql("SELECT `customers`.`id` as 'id', `customers`.`fullname` as 'fullname', `customers`.`phone` as 'phone', `customers`.`id_number` as 'id_number' FROM `customers`  WHERE `customers`.`id`='{$id}' limit 1", $eo);
			$row = db_fetch_assoc($res);
			?>
			$j('#fullname<?php echo $rnd1; ?>').html('<?php echo addslashes(str_replace(array("\r", "\n"), '', nl2br($row['fullname']))); ?>&nbsp;');
			$j('#phone<?php echo $rnd1; ?>').html('<?php echo addslashes(str_replace(array("\r", "\n"), '', nl2br($row['phone']))); ?>&nbsp;');
			<?php
			break;

		case 'car':
			if(!$id){
				?>
				$j('#amount<?php echo $rnd1; ?>').html('&nbsp;');
				$j('#date<?php echo $rnd1; ?>').html('&nbsp;');
				$j('#time<?php echo $rnd1; ?>').html('&nbsp;');
				<?php
				break;
			}
			$res = sql("SELECT `availability`.`id` as 'id', IF(    CHAR_LENGTH(`cars1`.`number`), CONCAT_WS('',   `cars1`.`number`), '') as 'car', IF(    CHAR_LENGTH(`routes1`.`name`) || CHAR_LENGTH(`routes1`.`time`), CONCAT_WS('',   `routes1`.`name`, '  :', `routes1`.`time`), '') as 'route', IF(    CHAR_LENGTH(`routes1`.`amount`), CONCAT_WS('',   `routes1`.`amount`), '') as 'amount', if(`availability`.`date`,date_format(`availability`.`date`,'%m/%d/%Y'),'') as 'date', TIME_FORMAT(`availability`.`time`, '%r') as 'time', `availability`.`status` as 'status' FROM `availability` LEFT JOIN `cars` as cars1 ON `cars1`.`id`=`availability`.`car` LEFT JOIN `routes` as routes1 ON `routes1`.`id`=`availability`.`route`  WHERE `availability`.`id`='{$id}' limit 1", $eo);
			$row = db_fetch_assoc($res);
			?>
			$j('#amount<?php echo $rnd1; ?>').html('<?php echo addslashes(str_replace(array("\r", "\n"), '', nl2br($row['amount']))); ?>&nbsp;');
			$j('#date<?php echo $rnd1; ?>').html('<?php echo addslashes(str_replace(array("\r", "\n"), '', nl2br($row['date']))); ?>&nbsp;');
			$j('#time<?php echo $rnd1; ?>').html('<?php echo addslashes(str_replace(array("\r", "\n"), '', nl2br($row['time']))); ?>&nbsp;');
			<?php
			break;


	}

?>