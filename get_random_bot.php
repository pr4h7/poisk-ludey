<?php  

$domain = $_GET['domain'];
$domain = str_replace('.', '_', $domain);

$domain = "site_{$domain}";

$random_bot_name = file_get_contents("https://alreferal.ru/get_random_bot_hash.php?hash_id=88ec5f19e17a1c429f715503c47c2e6ebbc79bbc731980db655a72f6fc7ed85c");

$url_redirect =  "https://t.me/{$random_bot_name}/?start={$domain}";
header("Location: {$url_redirect}");
die();
?>