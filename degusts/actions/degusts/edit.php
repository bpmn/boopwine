<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
// Load configuration
global $CONFIG;

/**
 * wrapper for recursive array walk decoding
 */
function profile_array_decoder(&$v) {
	$v = html_entity_decode($v, ENT_COMPAT, 'UTF-8');
}














?>
