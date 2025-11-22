<?php

$cfg['db']['shard']['host']    = 'db';
$cfg['db']['shard']['port']    = '3306';
$cfg['db']['shard']['name']    = 'ryzom';
$cfg['db']['shard']['user']    = 'ryzom';
$cfg['db']['shard']['pass']    = 'ryzom';

// Variables for database access to the www/CMS database (only if support role)
$cfg['db']['web']['host']    = 'db';
$cfg['db']['web']['port']    = '3306';
$cfg['db']['web']['user']    = 'root';
$cfg['db']['web']['pass']    = 'ryzom';
$cfg['db']['web']['name']    = 'nel_ams';

// Variables for database access to the lib database (only if support role)
$cfg['db']['lib']['host']    = 'db';
$cfg['db']['lib']['port']    = '3306';
$cfg['db']['lib']['user']    = 'root';
$cfg['db']['lib']['pass']    = 'ryzom';
$cfg['db']['lib']['name']    = 'nel_ams_lib';

// Variables for database access to the shard database
$cfg['db']['shard']['host']  = 'db';
$cfg['db']['shard']['port']  = '3306';
$cfg['db']['shard']['user']  = 'root';
$cfg['db']['shard']['pass']  = 'ryzom';
$cfg['db']['shard']['name']  = 'nel';

// Variables for database access to the ring_open database (only if domain role)
$cfg['db']['ring']['host']   = 'db';
$cfg['db']['ring']['port']   = '3306';
$cfg['db']['ring']['user']   = 'root';
$cfg['db']['ring']['pass']   = 'ryzom';
$cfg['db']['ring']['name']   = 'ring_dev';

// Variables for database access to the nel_tool database (only if service role)
$cfg['db']['tool']['host']   = 'db';
$cfg['db']['tool']['port']   = '3306';
$cfg['db']['tool']['user']   = 'root';
$cfg['db']['tool']['pass']   = 'ryzom';
$cfg['db']['tool']['name']   = 'nel_tool';

// IMAP connection string as explained above
$cfg['mail']['default_mailserver']= '{imap.gmail.com:993/imap/ssl}INBOX';
// The email address that sends the email
$cfg['mail']['default_groupemail'] = 'support@ryzomcore.org';
// Name displayed as sender
$cfg['mail']['default_groupname'] = 'Ryzom Core Support';
// Username of the account
$cfg['mail']['default_username'] = 'support@ryzomcore.org';
// Password of the account
$cfg['mail']['default_password'] = 'passw0rd';
// The host, being used when a mail is sent from a support group: support_groups_name@host
$cfg['mail']['host'] = "ryzomcore.org";

//-----------------------------------------------------------------------------------------
// If true, the server will add automatically unknown user in the database
// (in nel.user, nel.permission, ring.ring_user and ring.characters
$ALLOW_UNKNOWN = true;

// Shard web storage (without final /)
$USERS_DIR = '/var/www/html/data/shard-dev';

// Setup password
$NEL_SETUP_PASSWORD = 'admin';

// Name of current domain (only if domain role)
$NEL_DOMAIN_NAME = 'ryzom_dev';
