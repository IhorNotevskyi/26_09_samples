<?php

class Api
{
    public function getRecords()
    {
        try {
            // connect to Google API
            // try get some data from Google
            // Google returns some error
            throw new Exception('Google API exception');
        } catch (Exception $exception) {
            throw new ApiException('Google API not response', 404, $exception);
        }
    }
}
