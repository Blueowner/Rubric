<?php


/**
 *
 *
 */
function base($url = null)
{
	return (new Config)->app->base.$url;
}