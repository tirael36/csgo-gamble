<?php
include 'default.php';
$db = getDB();

# Get bot inventory
$bot64Id = '76561198238743988';
$botInventory = json_decode(file_get_contents("https://steamcommunity.com/profiles/76561199256815999/inventory/json/730/2"), true);
$rgInventory = $botInventory['rgInventory'];

# Get current pot
$stmt = $db->query('SELECT * FROM currentPot');
$currentPot = $stmt->fetchAll();

echo jsonSuccess(array('rgInventory' => $rgInventory, 'currentPot' => $currentPot));
?>