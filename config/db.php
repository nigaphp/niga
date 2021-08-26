<?php
return [
  /**
   * Global database configuration
   */
  "db" => [
    
    /**
     * Default database driver
     */
    "driver" => $_ENV["MYSQL_DRIVER"] ?? $_ENV["SQLITE_DRIVER"],
     
     /**
      * Mysql configuration
      */
     "mysql" => [
        "dsn" => $_ENV["MYSQL_DSN"] ?? "",
        "user" => $_ENV["DB_USER"] ?? "",
        "password" => $_ENV["DB_PASSWORD"] ?? "",
        ],
        
        /**
         * Sqlite configuration
         */
        "sqlite" => [
        "dsn" => $_ENV["SQLITE_DSN"]
        ]
    ]
];