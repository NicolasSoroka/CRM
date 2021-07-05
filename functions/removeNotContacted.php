<?php
require "../globals/database.php";
$db = Database::getInstance();

$db->query("SELECT leads.label, leads.modificationTime, leads.id FROM leads WHERE label = '6'");
$notContactedLeads = $db->fetchAll();
$actualTime = new DateTime(null, new DateTimeZone('America/Argentina/Buenos_Aires'));

foreach($notContactedLeads as $lead) {
    $leadTime = new DateTime($lead['modificationTime'], new DateTimeZone('America/Argentina/Buenos_Aires'));
    $interval = $actualTime->diff($leadTime);
    $elapsed = $interval->format('%d');
    $lead_id = $lead['id'];
    if ($elapsed > 0) {
        $db->query("DELETE FROM assigned WHERE id_lead = '$lead_id' LIMIT 1");
    }
}
?>