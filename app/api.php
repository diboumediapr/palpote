<?php namespace PalPote;

/** @var \Herbert\Framework\API $api */

/**
 * Gives you access to the Helper class from Twig
 * {{ MyPlugin.helper('assetUrl', 'icon.png') }}
 */
use PalPote\Models\Cases;

$api->add('helper', function ()
{
    $args = func_get_args();
    $method = array_shift($args);

    return forward_static_call_array(__NAMESPACE__ . '\\Helper::' . $method, $args);
});

$api->add('getCaseById', function ($id){

    //Returns Case data for the given id.

    $case = Cases::find($id);

    return $case;

});
