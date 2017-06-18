<?php

return array(

	'admin/login' => 'adminVideo/login',
	'admin/logout' => 'adminVideo/logout',

	'admin/videos' => 'adminVideo/adminIndex',

	'admin/video/add' => 'adminVideo/add',
	'admin/video/update/([0-9]+)' => 'adminVideo/update/$1',
	'admin/video/delete/([0-9]+)' => 'adminVideo/delete/$1',
	'admin/video/([0-9]+)' => 'adminVideo/view/$1',

	'admin' => 'adminVideo/adminIndex',
	'admin/([a-zA-Z0-9]+)' => 'site/redirectIndex',

	'video/([0-9]+)' => 'site/view/$1',

	'' => 'site/index'

	);