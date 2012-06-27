<?php

if (!get_input('annotation_value')) {
    register_error(elgg_echo('hj:alive:comments:valuecantbeblank'));
    return true;
}

$container_guid = get_input('container_guid', null);
$container = get_entity($container_guid);
$river_id = get_input('river_id', false);


if (!$river_id && !elgg_instanceof($container)) {
    register_error(elgg_echo('hj:comments:cantfind'));
    return true;
}

$annotation = new hjAnnotation();
$annotation->annotation_value = get_input('annotation_value', '');
$annotation->annotation_name = get_input('aname', 'generic_comment');
$annotation->title = get_input('title', '');
$annotation->owner_guid = elgg_get_logged_in_user_guid();
$annotation->container_guid = $container_guid;
$annotation->river_id = $river_id;
$annotation->access_id = get_input('access_id', ACCESS_DEFAULT);
$guid = $annotation->save();


if ($guid) {
    system_message(elgg_echo('hj:comments:savesuccess'));
} else {
    register_error(elgg_echo('hj:comments:saveerror'));
}

header('Content-Type: application/json');
print(json_encode($guid));