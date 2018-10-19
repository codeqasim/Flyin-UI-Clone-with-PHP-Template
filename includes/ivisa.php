
<?php

$country = 'india'; // Available countries: https://www.ivisa.com/apply-online/
$ivisa_affiliate_code = 'php_travels'; // Each affiliate can apply for a code at  https://www.ivisa.com/affiliates

$application_html = file_get_contents('https://www.ivisa.com/apply-online/'.strtolower($country).'?mode=embed&utm_source='.$ivisa_affiliate_code);

?>

   
<?php echo $application_html ?>
