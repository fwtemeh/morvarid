<?php

function _json($data, $code)
{
    return response()->json(['results' => $data, 'code' => $code]);
}
