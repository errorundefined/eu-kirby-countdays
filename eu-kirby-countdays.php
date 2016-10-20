<?php
/**
 * EU-KIRBY-COUNTDAYS
 *
 * just rename this 'countdays.php'
 * and put it into /site/tags – and
 * you're good to go!
 *
 * @version   1.0
 * @author    error:undefined design <http://error-undefined.de>
 * @link      https://github.com/errorundefined/eu-kirby-countdays
 * @license   MIT <http://opensource.org/licenses/MIT>
 *
 * USAGE: (countdays: 1963-08-28)
 */
kirbytext::$tags['countdays'] = array(
  'html' => function($tag) {
    $date = $tag->attr('countdays', '1963-08-28'); //  Defaults to "I Have a Dream"
	$then = new DateTime($date);
	$now = new DateTime('now');
	$interval = $then->diff($now);
	if ( $then > $now ) {
		$result = $interval->format('%a');
	}
	else {
		$result = $interval->format('%a');
	}
	return $result;

  }
);