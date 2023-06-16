<?php 
$day='الجمعة';
$offer =match($day){
'الجمعة'=> '50% تخفيض',
'السبت','الاحد'=>'لا تخفيض',
default => 'default'

};
//$ternary_operater=$member['is_logged']?'true':'false';

?>
<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h1>Working on PRep</h1>
    <p><?= $day ?></p>
    <p>offer on <?= $offer ?></p>
    </body>

</html>