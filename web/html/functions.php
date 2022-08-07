<?php
function tz_date($date, $time_zone='UTC', $format='Y-m-d H:i:s') {
  $time_zone = getenv('TIME_ZONE') ?: $time_zone;
  $date = new DateTime($date);
  $date->setTimezone(new DateTimeZone($time_zone));
  return $date->format($format);
}
?>
