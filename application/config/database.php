-<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
2	  	
-/*
3	  	
-| -------------------------------------------------------------------
4	  	
-| DATABASE CONNECTIVITY SETTINGS
5	  	
-| -------------------------------------------------------------------
6	  	
-| This file will contain the settings needed to access your database.
7	  	
-|
8	  	
-| For complete instructions please consult the 'Database Connection'
9	  	
-| page of the User Guide.
10	  	
-|
11	  	
-| -------------------------------------------------------------------
12	  	
-| EXPLANATION OF VARIABLES
13	  	
-| -------------------------------------------------------------------
14	  	
-|
15	  	
-|  ['hostname'] The hostname of your database server.
16	  	
-|  ['username'] The username used to connect to the database
17	  	
-|  ['password'] The password used to connect to the database
18	  	
-|  ['database'] The name of the database you want to connect to
19	  	
-|  ['dbdriver'] The database type. ie: mysql.  Currently supported:
20	  	
-         mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
21	  	
-|  ['dbprefix'] You can add an optional prefix, which will be added
22	  	
-|         to the table name when using the  Active Record class
23	  	
-|  ['pconnect'] TRUE/FALSE - Whether to use a persistent connection
24	  	
-|  ['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
25	  	
-|  ['cache_on'] TRUE/FALSE - Enables/disables query caching
26	  	
-|  ['cachedir'] The path to the folder where cache files should be stored
27	  	
-|  ['char_set'] The character set used in communicating with the database
28	  	
-|  ['dbcollat'] The character collation used in communicating with the database
29	  	
-|         NOTE: For MySQL and MySQLi databases, this setting is only used
30	  	
-|          as a backup if your server is running PHP < 5.2.3 or MySQL < 5.0.7
31	  	
-|         (and in table creation queries made with DB Forge).
32	  	
-|          There is an incompatibility in PHP with mysql_real_escape_string() which
33	  	
-|          can make your site vulnerable to SQL injection if you are using a
34	  	
-|          multi-byte character set and are running versions lower than these.
35	  	
-|          Sites using Latin-1 or UTF-8 database character set and collation are unaffected.
36	  	
-|  ['swap_pre'] A default table prefix that should be swapped with the dbprefix
37	  	
-|  ['autoinit'] Whether or not to automatically initialize the database.
38	  	
-|  ['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
39	  	
-|              - good for ensuring strict SQL while developing
40	  	
-|
41	  	
-| The $active_group variable lets you choose which connection group to
42	  	
-| make active.  By default there is only one group (the 'default' group).
43	  	
-|
44	  	
-| The $active_record variables lets you determine whether or not to load
45	  	
-| the active record class
46	  	
-*/
47	  	
-
48	  	
-$active_group = 'default';
49	  	
-$active_record = TRUE;
50	  	
-
51	  	
-$db['default']['hostname'] = 'localhost';
52	  	
-$db['default']['username'] = 'chalk';
53	  	
-$db['default']['password'] = '4YtA9RCUh0Hamxi5';
54	  	
-$db['default']['database'] = 'chalk';
55	  	
-$db['default']['dbdriver'] = 'mysqli';
56	  	
-$db['default']['dbprefix'] = '';
57	  	
-$db['default']['pconnect'] = TRUE;
58	  	
-$db['default']['db_debug'] = TRUE;
59	  	
-$db['default']['cache_on'] = FALSE;
60	  	
-$db['default']['cachedir'] = '';
61	  	
-$db['default']['char_set'] = 'utf8';
62	  	
-$db['default']['dbcollat'] = 'utf8_general_ci';
63	  	
-$db['default']['swap_pre'] = '';
64	  	
-$db['default']['autoinit'] = TRUE;
65	  	
-$db['default']['stricton'] = FALSE;
66	  	
-
67	  	
-
68	  	
-/* End of file database.php */
69	  	
-/* Location: ./application/config/database.php */
 	  	
\ No newline at end of file