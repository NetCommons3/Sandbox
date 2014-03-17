<?php

Router::connect('/auth/:action', array(
	'plugin' => 'auth', 'controller' => 'auth'
));
