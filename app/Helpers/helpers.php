<?php

if (! function_exists('emptyDataToNull')) {

    function emptyDataToNull(string|array $data) : string|array
    {
        if (is_array($data)) {
            foreach ($data as $key => $value) {
                if($value == '') {
                    $data[$key] = null;
                }
            }

        } elseif (gettype($data) == 'string') {
            if ($data == '') {
                $data = null;
            }
        }

        return $data;
    }
}
