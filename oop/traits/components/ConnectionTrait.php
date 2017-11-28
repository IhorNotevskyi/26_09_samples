<?php

namespace components;

trait ConnectionTrait
{
    use ApiConnectionTrait, DbConnectionTrait {
        ApiConnectionTrait::getConnection insteadof DbConnectionTrait;
        ApiConnectionTrait::getConnection  as getApiConnection;
        DbConnectionTrait::getConnection as getDbConnection;
    }
}