
<?php 
include("iRedAdminProAPI.php");
include("config.php");

$iRedAdminProAPI = new iRedAdminProAPI();

/* GET cookie for API requests */ 
$login = $iRedAdminProAPI->get_login($API_HOST, $USERNAME, $PASSWORD);

/* Create new domain */ 
$DOMAIN = 'example.com';
$NAME = 'Domain description';
$QUOTA = '2048';
$LANGUAGE = 'en_US';
$DEFAULT_QUOTA = '1024';
$MAX_QUOTA = '2048';
$MAX_USER_QUOTA = '2048';
$MAX_USERS = '100';
$MAX_ALIASES = '100';
$MAX_LISTS = '100';
$SENDER_BCC = NULL;
$RECIPIENT_BCC = NULL; 

$new_domain = $iRedAdminProAPI->create_domain ($API_HOST, $DOMAIN, $NAME, $QUOTA, $LANGUAGE, $DEFAULT_QUOTA, $MAX_QUOTA, $MAX_USER_QUOTA, $MAX_USERS, $MAX_ALIASES, $MAX_LISTS, $SENDER_BCC, $RECIPIENT_BCC);

?>