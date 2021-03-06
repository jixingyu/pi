<?php
/**
 * Pi Engine (http://pialog.org)
 *
 * @link            http://code.pialog.org for the Pi Engine source repository
 * @copyright       Copyright (c) Pi Engine http://pialog.org
 * @license         http://pialog.org/license.txt New BSD License
 */

/**
 * System front navigation specs
 *
 * @author Taiwen Jiang <taiwenjiang@tsinghua.org.cn>
 */
return array(
    // Homepage
    'nav-home' => array(
        'order'         => -100,
        'label'         => _t('Home'),
        'route'         => 'home',
    ),

    // Account
    'account'   => array(
        'label'         => _t('Account'),
        'route'         => 'user',
        'controller'    => 'account',
        //'visible'       => 0,
        'pages'         => array(
            'profile'     => array(
                'label'         => _t('Profile'),
                'route'         => 'user',
                'controller'    => 'profile',
                'visible'       => 0,
            ),
            'login'     => array(
                'label'         => _t('Login'),
                'route'         => 'user',
                'controller'    => 'login',
                'visible'       => 0,
            ),
            'register'     => array(
                'label'         => _t('Register'),
                'route'         => 'user',
                'controller'    => 'register',
                'visible'       => 0,
            ),
            'password'     => array(
                'label'         => _t('Password'),
                'route'         => 'user',
                'controller'    => 'password',
                'visible'       => 0,
            ),
            'email'     => array(
                'label'         => _t('Email'),
                'route'         => 'user',
                'controller'    => 'email',
                'visible'       => 0,
            ),
        ),
    ),

    // Admin page
    'admin'     => array(
        'label'         => _t('Admin Area'),
        'route'         => 'admin',
        'resource'      => array(
            'module'    => 'system',
            'resource'  => 'member',
        ),
        //'visible'       => 0,
    ),

    'modules'   => array(
        'callback'  => array('navigation', 'front'),
    ),
);
