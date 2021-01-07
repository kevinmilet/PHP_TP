<?php
define ('REGPHONE', '/^[0-9]*$/');
define ('REGPOLEEMPLOI', '/^[0-9]{8}[A-Z]{2}$/');
define ('REGTEXT', '/^[a-zA-Zéèàùûêâôëç \'-]+$/');
define ('REGADDRESS', '/^[0-9a-zA-Zéèàùûêâôëç \'-]+$/');
define ('REGCP', '/^\d{2}?\d{3}$/');
define ('REGURL', '/^(http[s]?:\/\/)?([^:\/\s]+)(:([^\/]*))?(\/\w+\.)*([^#?\s]+)(\?([^#]*))?(#(.*))?$/');
define ('REGDATE', '/^([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))$/');
define ('REGSTRING', '/^[0-9a-zA-Zéèàùûêâôëç \'-+]+$/');
?>