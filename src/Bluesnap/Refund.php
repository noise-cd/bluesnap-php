<?php

namespace Bluesnap;

/**
 * Class Refund
 */
class Refund
{
    public static function create($id, $data)
    {
        return Adapter::create('Refund', $data, [
            'id_in_url' => true,
            'id' => $id
        ]);
    }
}