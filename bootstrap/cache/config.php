<?php return array (
  'admin' => 
  array (
    'name' => 'Store-admin',
    'logo' => '<b>Store</b> admin',
    'logo-mini' => '<b>SA</b>',
    'bootstrap' => '/www/wwwroot/store-admin.258sd.com/app/Admin/bootstrap.php',
    'route' => 
    array (
      'prefix' => 'admin',
      'namespace' => 'App\\Admin\\Controllers',
      'middleware' => 
      array (
        0 => 'web',
        1 => 'admin',
      ),
    ),
    'directory' => '/www/wwwroot/store-admin.258sd.com/app/Admin',
    'title' => 'Admin',
    'https' => true,
    'auth' => 
    array (
      'controller' => 'App\\Admin\\Controllers\\AuthController',
      'guard' => 'admin',
      'guards' => 
      array (
        'admin' => 
        array (
          'driver' => 'session',
          'provider' => 'admin',
        ),
      ),
      'providers' => 
      array (
        'admin' => 
        array (
          'driver' => 'eloquent',
          'model' => 'Nicelizhi\\Admin\\Auth\\Database\\Administrator',
        ),
      ),
      'remember' => true,
      'redirect_to' => 'auth/login',
      'excepts' => 
      array (
        0 => 'auth/login',
        1 => 'auth/logout',
        2 => '_handle_action_',
      ),
    ),
    'upload' => 
    array (
      'disk' => 'admin',
      'directory' => 
      array (
        'image' => 'images',
        'file' => 'files',
      ),
    ),
    'database' => 
    array (
      'connection' => '',
      'users_table' => 'admin_users',
      'users_model' => 'Nicelizhi\\Admin\\Auth\\Database\\Administrator',
      'roles_table' => 'admin_roles',
      'roles_model' => 'Nicelizhi\\Admin\\Auth\\Database\\Role',
      'permissions_table' => 'admin_permissions',
      'permissions_model' => 'Nicelizhi\\Admin\\Auth\\Database\\Permission',
      'menu_table' => 'admin_menu',
      'menu_model' => 'Nicelizhi\\Admin\\Auth\\Database\\Menu',
      'operation_log_table' => 'admin_operation_log',
      'user_permissions_table' => 'admin_user_permissions',
      'role_users_table' => 'admin_role_users',
      'role_permissions_table' => 'admin_role_permissions',
      'role_menu_table' => 'admin_role_menu',
    ),
    'operation_log' => 
    array (
      'enable' => true,
      'allowed_methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'DELETE',
        5 => 'CONNECT',
        6 => 'OPTIONS',
        7 => 'TRACE',
        8 => 'PATCH',
      ),
      'except' => 
      array (
        0 => 'admin/auth/logs*',
      ),
    ),
    'check_route_permission' => true,
    'check_menu_roles' => true,
    'default_avatar' => '/vendor/laravel-admin/AdminLTE/dist/img/user2-160x160.jpg',
    'map_provider' => 'google',
    'skin' => 'skin-blue-light',
    'layout' => 
    array (
      0 => 'sidebar-mini',
      1 => 'sidebar-collapse',
    ),
    'login_background_image' => '',
    'show_version' => true,
    'show_environment' => true,
    'menu_bind_permission' => true,
    'enable_default_breadcrumb' => true,
    'minify_assets' => 
    array (
      'excepts' => 
      array (
      ),
    ),
    'enable_menu_search' => true,
    'top_alert' => '',
    'grid_action_class' => 'Nicelizhi\\Admin\\Grid\\Displayers\\DropdownActions',
    'extension_dir' => '/www/wwwroot/store-admin.258sd.com/app/Admin/Extensions',
    'extensions' => 
    array (
    ),
  ),
  'api' => 
  array (
    'standardsTree' => 'x',
    'subtype' => 'app',
    'version' => 'v1',
    'prefix' => 'api',
    'domain' => NULL,
    'name' => NULL,
    'conditionalRequest' => true,
    'strict' => false,
    'debug' => true,
    'errorFormat' => 
    array (
      'message' => ':message',
      'errors' => ':errors',
      'code' => ':code',
      'status_code' => ':status_code',
      'debug' => ':debug',
    ),
    'middleware' => 
    array (
    ),
    'auth' => 
    array (
      'Custom' => 'Dingo\\Api\\Auth\\Provider\\CustomProvider',
    ),
    'throttling' => 
    array (
    ),
    'transformer' => 'Dingo\\Api\\Transformer\\Adapter\\Fractal',
    'defaultFormat' => 'json',
    'formats' => 
    array (
      'json' => 'Dingo\\Api\\Http\\Response\\Format\\Json',
    ),
    'formatsOptions' => 
    array (
      'json' => 
      array (
        'pretty_print' => false,
        'indent_style' => 'space',
        'indent_size' => 2,
      ),
    ),
  ),
  'app' => 
  array (
    'name' => 'Store-Admin',
    'env' => 'local',
    'debug' => true,
    'url' => 'https://store-admin.258sd.com/',
    'asset_url' => NULL,
    'timezone' => 'Asia/Shanghai',
    'locale' => 'zh-CN',
    'fallback_locale' => 'en',
    'faker_locale' => 'en_US',
    'key' => 'base64:Xk6N4i7A/TF98hwBP4HZNCWWT5NxPwTA/20RN6cfmp4=',
    'cipher' => 'AES-256-CBC',
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'Illuminate\\Mail\\MailServiceProvider',
      12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      15 => 'Illuminate\\Queue\\QueueServiceProvider',
      16 => 'Illuminate\\Redis\\RedisServiceProvider',
      17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      18 => 'Illuminate\\Session\\SessionServiceProvider',
      19 => 'Illuminate\\Translation\\TranslationServiceProvider',
      20 => 'Illuminate\\Validation\\ValidationServiceProvider',
      21 => 'Illuminate\\View\\ViewServiceProvider',
      22 => 'App\\Providers\\AppServiceProvider',
      23 => 'App\\Providers\\AuthServiceProvider',
      24 => 'App\\Providers\\EventServiceProvider',
      25 => 'App\\Providers\\RouteServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Arr' => 'Illuminate\\Support\\Arr',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Redis' => 'Illuminate\\Support\\Facades\\Redis',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'Str' => 'Illuminate\\Support\\Str',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'Excel' => 'Maatwebsite\\Excel\\Facades\\Excel',
    ),
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'api' => 
      array (
        'driver' => 'token',
        'provider' => 'users',
        'hash' => false,
      ),
      'admin' => 
      array (
        'driver' => 'session',
        'provider' => 'admin',
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\User',
      ),
      'admin' => 
      array (
        'driver' => 'eloquent',
        'model' => 'Nicelizhi\\Admin\\Auth\\Database\\Administrator',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
      ),
    ),
    'controller' => 'App\\Admin\\Controllers\\AuthController',
    'guard' => 'admin',
    'remember' => true,
    'redirect_to' => 'auth/login',
    'excepts' => 
    array (
      0 => 'auth/login',
      1 => 'auth/logout',
      2 => '_handle_action_',
    ),
  ),
  'broadcasting' => 
  array (
    'default' => 'log',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => '',
        'secret' => '',
        'app_id' => '',
        'options' => 
        array (
          'cluster' => 'mt1',
          'encrypted' => true,
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'file',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => '/www/wwwroot/store-admin.258sd.com/storage/framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'cache',
      ),
      'dynamodb' => 
      array (
        'driver' => 'dynamodb',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'table' => 'cache',
      ),
    ),
    'prefix' => 'store_admin_cache',
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'url' => NULL,
        'database' => 'store-admins',
        'prefix' => '',
        'foreign_key_constraints' => true,
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'url' => NULL,
        'host' => 'rm-uf64xv560n1vjxoe988270.mysql.rds.aliyuncs.com',
        'port' => '3306',
        'database' => 'store-admins',
        'username' => 'storeadmin',
        'password' => '3EOjcDwSE4Ysz1az',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => 'sd_',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => NULL,
        'options' => 
        array (
        ),
      ),
      'test' => 
      array (
        'driver' => 'mysql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'forge',
        'username' => 'forge',
        'password' => '',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => 'sd_',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => NULL,
        'options' => 
        array (
        ),
      ),
      'no_mysql' => 
      array (
        'driver' => 'mysql',
        'url' => NULL,
        'host' => 'rm-uf64xv560n1vjxoe988270.mysql.rds.aliyuncs.com',
        'port' => '3306',
        'database' => 'store-admins',
        'username' => 'storeadmin',
        'password' => '3EOjcDwSE4Ysz1az',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => NULL,
        'options' => 
        array (
        ),
      ),
      'nosql' => 
      array (
        'driver' => 'mysql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'forge',
        'username' => 'forge',
        'password' => '',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => 'sd_',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => NULL,
        'options' => 
        array (
        ),
      ),
      'jos' => 
      array (
        'driver' => 'mysql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'forge',
        'username' => 'forge',
        'password' => '',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => 'sd_',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => NULL,
        'options' => 
        array (
        ),
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'url' => NULL,
        'host' => 'rm-uf64xv560n1vjxoe988270.mysql.rds.aliyuncs.com',
        'port' => '3306',
        'database' => 'store-admins',
        'username' => 'storeadmin',
        'password' => '3EOjcDwSE4Ysz1az',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'schema' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'url' => NULL,
        'host' => 'rm-uf64xv560n1vjxoe988270.mysql.rds.aliyuncs.com',
        'port' => '3306',
        'database' => 'store-admins',
        'username' => 'storeadmin',
        'password' => '3EOjcDwSE4Ysz1az',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'predis',
      'options' => 
      array (
        'cluster' => 'predis',
        'prefix' => '',
      ),
      'default' => 
      array (
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => 0,
      ),
      'cache' => 
      array (
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => 1,
      ),
      'custom' => 
      array (
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => 2,
      ),
    ),
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'cloud' => 's3',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => '/www/wwwroot/store-admin.258sd.com/storage/app',
      ),
      'admin' => 
      array (
        'driver' => 'local',
        'root' => '/www/wwwroot/store-admin.258sd.com/storage/app',
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => '/www/wwwroot/store-admin.258sd.com/storage/app/public',
        'url' => 'https://store-admin.258sd.com//storage',
        'visibility' => 'public',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'bucket' => '',
        'url' => NULL,
      ),
    ),
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
    'bcrypt' => 
    array (
      'rounds' => 10,
    ),
    'argon' => 
    array (
      'memory' => 1024,
      'threads' => 2,
      'time' => 2,
    ),
  ),
  'logging' => 
  array (
    'default' => 'daily',
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'daily',
        ),
        'ignore_exceptions' => false,
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => '/www/wwwroot/store-admin.258sd.com/storage/logs/laravel.log',
        'level' => 'debug',
      ),
      'upload' => 
      array (
        'driver' => 'daily',
        'path' => '/www/wwwroot/store-admin.258sd.com/storage/logs/upload.log',
        'level' => 'debug',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => '/www/wwwroot/store-admin.258sd.com/storage/logs/laravel.log',
        'level' => 'debug',
        'days' => 14,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'critical',
      ),
      'papertrail' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\SyslogUdpHandler',
        'handler_with' => 
        array (
          'host' => NULL,
          'port' => NULL,
        ),
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'formatter' => NULL,
        'with' => 
        array (
          'stream' => 'php://stderr',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
    ),
  ),
  'mail' => 
  array (
    'driver' => 'smtp',
    'host' => 'smtp.mailtrap.io',
    'port' => '2525',
    'from' => 
    array (
      'address' => NULL,
      'name' => 'Store-Admin',
    ),
    'encryption' => NULL,
    'username' => NULL,
    'password' => NULL,
    'sendmail' => '/usr/sbin/sendmail -bs',
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => '/www/wwwroot/store-admin.258sd.com/resources/views/vendor/mail',
      ),
    ),
    'log_channel' => NULL,
  ),
  'queue' => 
  array (
    'default' => 'sync',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => 0,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => '',
        'secret' => '',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'your-queue-name',
        'region' => 'us-east-1',
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
      ),
    ),
    'failed' => 
    array (
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
      'endpoint' => 'api.mailgun.net',
    ),
    'postmark' => 
    array (
      'token' => NULL,
    ),
    'ses' => 
    array (
      'key' => '',
      'secret' => '',
      'region' => 'us-east-1',
    ),
    'sparkpost' => 
    array (
      'secret' => NULL,
    ),
    'stripe' => 
    array (
      'model' => 'App\\User',
      'key' => NULL,
      'secret' => NULL,
      'webhook' => 
      array (
        'secret' => NULL,
        'tolerance' => 300,
      ),
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => '120',
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => '/www/wwwroot/store-admin.258sd.com/storage/framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'store_admin_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => false,
    'http_only' => true,
    'same_site' => NULL,
  ),
  'sphinxsearch' => 
  array (
    'host' => NULL,
    'port' => NULL,
    'indexes' => 
    array (
      'name' => 
      array (
        'table' => 'englishdata',
        'column' => 'id',
      ),
    ),
  ),
  'store' => 
  array (
    'database' => 
    array (
      'store_table' => 'store',
      'config_table' => 'config',
      'product_table' => 'products',
      'product_attr_table' => 'product_attrs',
      'product_image_table' => 'product_images',
      'product_stock_table' => 'product_stock',
      'order_table' => 'order',
      'order_item_table' => 'order_items',
      'refund_table' => 'refund',
      'refund_item_table' => 'refund_items',
      'shipping_table' => 'shipping',
      'organization_table' => 'organization',
      'organization_user_table' => 'organization_user',
      'organization_role_table' => 'organization_role',
      'storage_location_table' => 'storage_location',
    ),
    'queue' => 
    array (
      'put_on_queue' => 'put_on',
      'take_off_queue' => 'take_off',
    ),
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => '/www/wwwroot/store-admin.258sd.com/resources/views',
    ),
    'compiled' => '/www/wwwroot/store-admin.258sd.com/storage/framework/views',
  ),
  'debug-server' => 
  array (
    'host' => 'tcp://127.0.0.1:9912',
  ),
  'image' => 
  array (
    'driver' => 'gd',
  ),
  'excel' => 
  array (
    'exports' => 
    array (
      'chunk_size' => 1000,
      'pre_calculate_formulas' => false,
      'strict_null_comparison' => false,
      'csv' => 
      array (
        'delimiter' => ',',
        'enclosure' => '"',
        'line_ending' => '
',
        'use_bom' => false,
        'include_separator_line' => false,
        'excel_compatibility' => false,
        'output_encoding' => '',
        'test_auto_detect' => true,
      ),
      'properties' => 
      array (
        'creator' => '',
        'lastModifiedBy' => '',
        'title' => '',
        'description' => '',
        'subject' => '',
        'keywords' => '',
        'category' => '',
        'manager' => '',
        'company' => '',
      ),
    ),
    'imports' => 
    array (
      'read_only' => true,
      'ignore_empty' => false,
      'heading_row' => 
      array (
        'formatter' => 'slug',
      ),
      'csv' => 
      array (
        'delimiter' => NULL,
        'enclosure' => '"',
        'escape_character' => '\\',
        'contiguous' => false,
        'input_encoding' => 'UTF-8',
      ),
      'properties' => 
      array (
        'creator' => '',
        'lastModifiedBy' => '',
        'title' => '',
        'description' => '',
        'subject' => '',
        'keywords' => '',
        'category' => '',
        'manager' => '',
        'company' => '',
      ),
    ),
    'extension_detector' => 
    array (
      'xlsx' => 'Xlsx',
      'xlsm' => 'Xlsx',
      'xltx' => 'Xlsx',
      'xltm' => 'Xlsx',
      'xls' => 'Xls',
      'xlt' => 'Xls',
      'ods' => 'Ods',
      'ots' => 'Ods',
      'slk' => 'Slk',
      'xml' => 'Xml',
      'gnumeric' => 'Gnumeric',
      'htm' => 'Html',
      'html' => 'Html',
      'csv' => 'Csv',
      'tsv' => 'Csv',
      'pdf' => 'Dompdf',
    ),
    'value_binder' => 
    array (
      'default' => 'Maatwebsite\\Excel\\DefaultValueBinder',
    ),
    'cache' => 
    array (
      'driver' => 'memory',
      'batch' => 
      array (
        'memory_limit' => 60000,
      ),
      'illuminate' => 
      array (
        'store' => NULL,
      ),
    ),
    'transactions' => 
    array (
      'handler' => 'db',
      'db' => 
      array (
        'connection' => NULL,
      ),
    ),
    'temporary_files' => 
    array (
      'local_path' => '/www/wwwroot/store-admin.258sd.com/storage/framework/cache/laravel-excel',
      'remote_disk' => NULL,
      'remote_prefix' => NULL,
      'force_resync_remote' => NULL,
    ),
  ),
  'trustedproxy' => 
  array (
    'proxies' => NULL,
    'headers' => 30,
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'dont_alias' => 
    array (
      0 => 'App\\Nova',
    ),
  ),
);
