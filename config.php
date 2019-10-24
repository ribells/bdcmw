<?php
/////////////////// THIS IS A GENERATED FILE. DO NOT EDIT! ///////////////////

// Require utilities
require_once 'util/utilities.php';
define('MAX_WISHES_ALLOWED', 4);
//last day cron job will automatically delete birthday wishes
define('LAST_BDAY_WISH_DELETE_DAY', '0101');
define('BDAY_WISH_PERIOD', 0); //number of days before birthday to show wishes
define('HOLIDAY_START', '1001'); //format mmdd
define('HOLIDAY_END',   '1231'); //format mmdd
define('CONTACT_NAME', 'Jamille Benson');
define('CONTACT_EMAIL', 'giftdrive@thehome.org');
define('FROM_EMAIL_ADDRESS', 'giftdrive@thehome.org');
define('LAST_WISH_PLEDGED', 30);
define('WEB_PROBLEMS_EMAIL', 'giftdrive@thehome.org');
define('WISH_BONUS_START', '1212'); //format mmdd
define('WISH_BONUS_END',   '1231'); //format mmdd
define('CHILDREN_WISH_DROP_END',   '1217'); //format mmdd
define('FAMILY_DROP_END',   '1217'); //format mmdd
define ('NUM_BONUS_WISHES', 0);

if (HOLIDAY_START < HOLIDAY_END)
{
  //if last day before end of holiday
  if (date('md') >= HOLIDAY_START && date('md') <= HOLIDAY_END)
  {
    define('HOLIDAY', 1);
  }
  else
  {
    define('HOLIDAY', 0);
  }
}
else
{
  //if last day after end of holiday (e.g. 1031 and 0115
  if (date('md') >= HOLIDAY_START || date('md') <= HOLIDAY_END)
  {
    define('HOLIDAY', 1);
  }
  else
  {
    define('HOLIDAY', 0);
  }
}
?>