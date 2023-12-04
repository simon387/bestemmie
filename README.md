# bestemmie

bestemmie api

bestemmie.org is down, this temporary repository is going to replace it

## Config

### Localhost

```injectablephp
<?php

class Config
{
	static string $db_host = 'localhost';
	static string $db_name = 'bestemmie';
	static string $db_username  = 'root';
	static string $db_password  = '';
	static string $db_statement_0  = "SET GLOBAL time_zone='Europe/Madrid'";
	static bool $test_mode = true;
}
```

