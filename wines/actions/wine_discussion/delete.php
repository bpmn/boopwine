<?php
/**
 * Delete topic action
 *
 */

$topic_guid = (int) get_input('guid');

$topic = get_entity($topic_guid);
if (!$topic || !$topic->getSubtype() == "wineforumtopic") {
	register_error(elgg_echo('discussion:error:notdeleted'));
	forward(REFERER);
}

if (!$topic->canEdit()) {
	register_error(elgg_echo('discussion:error:permissions'));
	forward(REFERER);
}

$container = $topic->getContainerEntity();

$result = $topic->delete();
if ($result) {
	system_message(elgg_echo('discussion:topic:deleted'));
} else {
	register_error(elgg_echo('discussion:error:notdeleted'));
}

forward("wine_discussion/owner/$container->guid");
