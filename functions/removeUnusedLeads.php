<?php
require "../globals/database.php";
$db = Database::getInstance();

$db->query("SELECT * FROM assigned WHERE status = 'default'");
$unusedLeads = $db->fetchAll();
$actualTime = new DateTime(null, new DateTimeZone('America/Argentina/Buenos_Aires'));

foreach($unusedLeads as $lead) {
    $leadTime = new DateTime($lead['time'], new DateTimeZone('America/Argentina/Buenos_Aires'));
    $interval = $actualTime->diff($leadTime);
    $elapsed = $interval->format('%i');
    $lead_id = $lead['id_lead'];
    if ($elapsed > 30) {
        $db->query("DELETE FROM assigned WHERE id_lead = '$lead_id' LIMIT 1");
    }
}
?>