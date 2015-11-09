<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
Yii::setPathOfAlias('editable',dirname(__FILE__).'/../extensions/x-editable');
        
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Aplikasi Rekomendasi Perijinan Bidang PAUD dan DIKMAS',

	// preloading 'log' component
	'preload'=>array('log','bootstrap'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.modules.user.models.*',
        	'application.modules.user.components.*',
        	'application.modules.rights.*',
        	'application.modules.rights.components.*',
                'editable.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'apal',
		 	// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
			'ipFilters'=>array($_SERVER['REMOTE_ADDR']),
			'generatorPaths' => array(
          			'bootstrap.gii'
       		),
		),
		'rights'=>array(
               	'superuserName'=>'Admin', // Name of the role with super user privileges. 
               	'authenticatedName'=>'Authenticated',  // Name of the authenticated user role. 
               	'userIdColumn'=>'id', // Name of the user id column in the database. 
               	'userNameColumn'=>'username',  // Name of the user name column in the database. 
               	'enableBizRule'=>true,  // Whether to enable authorization item business rules. 
               	'enableBizRuleData'=>true,   // Whether to enable data for business rules. 
               	'displayDescription'=>true,  // Whether to use item description instead of name. 
               	'flashSuccessKey'=>'RightsSuccess', // Key to use for setting success flash messages. 
               	'flashErrorKey'=>'RightsError', // Key to use for setting error flash messages. 
 
               	'baseUrl'=>'/rights', // Base URL for Rights. Change if module is nested. 
               	'layout'=>'rights.views.layouts.main',  // Layout to use for displaying Rights. 
               	'appLayout'=>'application.views.layouts.bootstrap', // Application layout. 
               	'cssFile'=>'rights.css', // Style sheet file to use for Rights. 
               	'install'=>false,  // Whether to enable installer. 
               	'debug'=>false,
		),
		'user'=>array(
                	'tableUsers' => 'users',
                	'tableProfiles' => 'profiles',
                	'tableProfileFields' => 'profiles_fields',
			# encrypting method (php hash function)
                	'hash' => 'md5',
 
                	# send activation email
                	'sendActivationMail' => true,
 
                	# allow access for non-activated users
                	'loginNotActiv' => false,
 
                	# activate user on registration (only sendActivationMail = false)
                	'activeAfterRegister' => false,
 
                	# automatically login from registration
                	'autoLogin' => true,
 
                	# registration path
                	'registrationUrl' => array('/user/registration'),
 
                	# recovery password path
                	'recoveryUrl' => array('/user/recovery'),
 
                	# login form path
                	'loginUrl' => array('/user/login'),
 
                	# page after login
                	'returnUrl' => array('/user/profile'),
 
                	# page after logout
                	'returnLogoutUrl' => array('/user/login'),
        	),
        	
	),

	// application components
	'components'=>array(
		'user'=>array(
                	'class'=>'RWebUser',
                	// enable cookie-based authentication
                	'allowAutoLogin'=>true,
                	'loginUrl'=>array('/user/login'),
        	),
        	'authManager'=>array(
                	'class'=>'RDbAuthManager',
                	'connectionID'=>'db',
                	'defaultRoles'=>array('Authenticated', 'Guest'),
        	),	
		'bootstrap'=>array(
			'class'=>'ext.bootstrap.components.Bootstrap',
			'responsiveCss'=>true,
		),
                'editable'=>array(
                    'class'=>'editable.EditableConfig',
                    'form'=>'bootstrap',    //form style:'bootstrap','jqueryui','plain'
                    'mode'=>'popup',        //mode: 'popup' or 'inline'
                    'defaults'=>array(
                        'emptytext'=>'empty',
                    ),
                ),
		// uncomment the following to enable URLs in path-format
		'mailer' => array(
                        'class' => 'application.extensions.mailer.EMailer',
                        'pathViews' => 'application.views.email',
                        'pathLayouts' => 'application.views.email.layouts'
                ),
        'phpmailer'=>array(
    			'class'=>'PHPMailer',
    			'Host'=>'smtp.gmail.com',
    			'SMTPDebug'=>2,
    			'SMTPAuth'=>true,
    			'SMTPSecure'=>'ssl',
    			'Port'=>465,
    			'Username'=>'paudni.ks@gmail.com',
    			'Password'=>'kerjasama',
		),
                'ePdf'=>array(
                    'class'=>'ext.yii-pdf.EYiiPdf',
                    'params'=>array(
                        'mpdf'=>array(
                            'librarySourcePath'=>'application.vendors.mpdf.*',
                            'constants'=> array(
                                '_MPDF_TEMP_PATH' => Yii::getPathOfAlias('application.runtime'),
                            ),
                            'class'=>'mpdf',
                            'defaultParams'     => array( // More info: http://mpdf1.com/manual/index.php?tid=184
                                    'mode'              => '', //  This parameter specifies the mode of the new document.
                                    'format'            => array(216,330), // format A4, A5, ...
                                    'default_font_size' => 9, // Sets the default document font size in points (pt)
                                    'default_font'      => 'Times', // Sets the default font-family for the new document.
                                    'mgl'               => 15, // margin_left. Sets the page margins for the new document.
                                    'mgr'               => 15, // margin_right
                                    'mgt'               => 40, // margin_top
                                    'mgb'               => 10, // margin_bottom
                                    'mgh'               => 5, // margin_header
                                    'mgf'               => 5, // margin_footer
                                    'orientation'       => 'P', // landscape or portrait orientation
                                
                            )
                        ),
                        'HTML2PDF'=>array(
                            'librarySourcePath' => 'application.vendors.html2pdf.*',
                            'classFile' => 'html2pdf.class.php',
                            'defaultFont'      => 'Times',
                        ),
                    ),
                ),
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
			//	'<controller:\w+>/<fid:\d+>'=>'<controller>/viewfile',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
			//	'<controller:\w+>/<action:\w+>/<fid:\w+>'=>'<controller>/<action>',
				
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		
//		'db'=>array(
//			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
//			//'tablePrefix'=>'tbl_',
//		),
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=127.0.0.1;dbname=ib_paudni_2013',
			'emulatePrepare' => true,
			'username' => 'root',
			 'password' => '',
//			'password' => 'dss1',
			'charset' => 'utf8',
		),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
            'errorAction'=>'site/error',
        ),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				
/*				array(
					'class'=>'CWebLogRoute',
				),*/
				
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'paudni.ks@gmail.com',
	),
);
