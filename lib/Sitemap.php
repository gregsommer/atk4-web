<?php
class Sitemap extends AbstractController{
    function init(){
        parent::init();
        $doc=array('Documentation');
//{{{ learn - Learning
        $doc['learn']=array('Learning',

            'intro'=>'What is Agile Toolkit?',

            'install'=>array(
                'Installing Agile Toolkit',
                'lamp'=>'Installing LAMP',
                'deploy'=>'Download and Deploy',
                'how'=>'How Does Agile Toolkit Work?',
                'dir'=>'Directory Structure',
                'config'=>'Configuration File',
                'db'=>'Database Connection',
                'auth'=>'Authorization',
                'git'=>'Usage with Git and SVN',
                'dbupdate'=>'SQL Upgrade Tracking',
                ),

            'understand'=>array(
                'Understanding Agile Toolkit',
                'base'=>array(
                    'The Way of Agile Toolkit',
                    'adding'=>'Adding Objects',
                    'chains'=>'Chaining Calls',
                    'simplicity'=>'Which PHP Features Are Not Used',
                    'oop'=>'What Do You Need to Know?',
                    'example'=>'The Example',
                    ),
                'page'=>array(
                    'Pages, Routing and Linking',
                    'route'=>'Determining The Current Page',
                    'link'=>'Building Links to Pages',
                    'add'=>'Adding Static and Dynamic Pages',
                    'misc'=>'Best Practices and Misc. Info',
                    'example'=>'Practical Examples',
                    ),
                'model'=>array(
                    'Models',
                    'intro'=>'Introduction to Models',
                    'add'=>'Creating Your First Model',
                    'db'=>'Database Considerations',
                    'calculated'=>'Calculated Fields',
                    'relations'=>'Relations Between Models and Tables',
                    'actions'=>'Adding Actions (Behaviour)',
                    'debug'=>'Debugging Models',
                    ),
                'api'=>array(
                    'API Classes',
                    'what'=>'Purpose of The API Class',
                    'exec'=>'Application Execution Steps',
                    'multi'=>'Multiple Interface Apps',
                    ),
                'view'=>array(
                    'Views',
                    'example'=>'Examples of Simple Views',
                    'usage'=>'How to Use Views',
                    'interactive'=>'Interactive AJAX Views',
                    ),
                'controller'=>'Controllers',
                'chains'=>array(
                    'JavaScript Chains',
                    'intro'=>'Introduction to Chains',
                    'bind'=>'Binding Chains',
                    'enclose'=>'Enclosing Chains',
                    'multi'=>'Using Multiple Chains',
                    'own'=>'Calling Your Own Code',
                    'customize'=>'Customizing Selectors and Triggers',
                    ),
                'jsapi'=>array(
                    'JavaScript API',
                    'structure'=>'Rich Web Apps with a Thin Client',
					'start'=>'JavaScript Bootstraping Sequence',
					'univ'=>'Agile Toolkit Univ Chain',
					'widgets'=>'Bundled Widgets',
					'add'=>'Adding Your Own Widgets',
					'import'=>'Using 3rd-Party Plugins',
                    ),
                'source'=>'Use The Source, Luke',
                ),
			'agile'=>'Best Practices with Agile Toolkit',
			'app'=>array(
				'Practical Guide to Your First Application',
				'planning'=>'Requirements? What requirements?',
				//'code'=>'Good Code VS Bad Code',
				'models'=>'Adding Models',
				'admin'=>'Creating Admin',
				'auth'=>'Front-end Authorization',
				'logic'=>'Binding busines logic with UI',
				'changes'=>'Handling Change Requests',
				'tests'=>'Adding Unit Tests',
				'deploy'=>'Deploying to Production',
				'performance'=>'Optimizing Performance',
			),

            'template'=>array(
                'Templates and Rendering',
                'css'=>'Cascading Stylesheets',
                'how'=>'Introduction to Templates',
                'view'=>'Creating a View With Your Oown Template',
                'page'=>'Adding Pages with Custom Templates',
                'api'=>'Changing The Shared Template of an Application',
                ),

            'share'=>array(
                'Sharing Code',
                'contribute'=>'Contributing to atk4-addons',
                'projects'=>'Sharing Code between Your Own Projects',
                'purchase'=>'Purchasing 3rd-Party Code',
                ),
            'tutorial'=>array('Tutorials',
                'jobeet'=>array('Jobeet - Practical Project on Agile Toolkit',
                    'day1'=>'Day 1: The Agile Toolkit',
                    'day2'=>'Day 2: About Jobeet',
                    'day3'=>'Day 3: The Data Model',
                    'day4'=>'Day 4: Controller and View',
                    'day5'=>'Day 5: The Routing',
                    'day6'=>'Day 6: More with Models',
                    'day7'=>'Day 7: Category Page',
                    'day8'=>'Day 8: The Form',
                    'day9'=>'Day 8: The Admin System',
                    ),
                'make-addon'=>'Guide to Mmaking Your Own Addon',
                'Customizing URLs (Routing)',
                'Manipulating Themes',
                'tools'=>array('Tools',
                    'gensql'=>'Generate SQL for Your Model',
                    'update'=>'Database Schema Migration',
                    ),
                ),
            );
/*}}}*/
//{{{ core - Agile Toolkit Core Concepts
        $doc['doc']=array('Agile Toolkit API Reference',
            'core'=>array(
                'Core Object Features',
                'add'=>'Creating Objects and Runtime Tree',
                'model'=>'Model and Controller handling',
                'session'=>'Session Management',
                'exception'=>'Exception Handling',
                'hooks'=>'Using call-backs (Hooks)',
                'method'=>'Dynamic Methods',
                'misc'=>'Miscellanious',
            ),
            'dsql'=>array(
                'Dynamic Queries',
                'how'=>'Basic Usage, Debuging',
                'fetching'=>'Different Way to Get Your Data',
                'where'=>'Adding Conditions',
                'field'=>'Specifying Fields',
                'join'=>'Querying From Multiple Tables. Joins',
                'expr'=>'Understanding Expresisons. Templates',
                'subquery'=>'Creating sub-queries',
                'extend'=>'Extending, Options',
                ),
            'model'=>array(
                'Non-Relational Models',
                'add'=>'Creating Your Models',
                'fields'=>'Field Meta-Information',
                'controller'=>'Data Controllers',
                'behaviour'=>'Behaviours',
                ),
            'modeltable'=>array(
                'SQL/Relational Model_Table',
                'add'=>'Defining Relational Models and Basic Use',
                'dsql'=>'Interaction with Dynamic SQL',
                'condition'=>'Conditions and Master Fields',
                'expression'=>'Defining Expressions',
                'reference'=>'Relations Between Models',
                'join'=>'Joining Tables',
                'behaviour'=>'Modifying The Default Actions',
                ),
            'api'=>array(
                'API Classes',
                'cli'=>'Minimalistic Use With ApiCLI',
                'layouts'=>'Using Layouts',
                'multi'=>'Multiple Application Instances',
                'extend'=>'Register Methods in API',
                'own'=>'Building Re-Usable Application Class',
            ),
            'view'=>array(
                'View Classes',
                'abstract'=>'View and AbstractView',
                'helloworld'=>'HelloWorld',
                'button'=>'Buttons',
                'add'=>'Adding Your Own',
                ),
            'page'=>array(
                'Page Classes',
                'adding'=>'Different Ways of Adding Pages',
                'relative'=>'Relative Page URL Generation',
                'sub'=>'Sub-Pages',
                'wizard'=>'Wizards',
                'tabs'=>'Pages with Tabs',
                'static'=>'Static Pages',
                '404'=>'PageNotFound Handler (404)',
                ),
            'smlite'=>'Agile Template Manager',
            'css'=>array(
                'Agile CSS Framework',
                'starting'=> 'Getting Started with Your HTML',
                'customize'=> 'Using LESS and Themeroller to Customize Look',
                'layout'=> 'Building Layout with Grid System',
                'frames'=> 'Framing, Borders, Paddings',
                'form'=> 'Form-related Classes',
                'grid'=> 'Grid-related Classes',
                'adding'=> 'Extending Stylesheets',
                'icons'=>'Using Agile Toolkit Icon Set',
            ),
            /*
            'controller'=>array(
                'Controller Classes',
                'why'=>'Purpose of Controllers',
                'multimodel'=>'Multi-Model Controller',
                'view'=>array(
                    'View Controllers',
                    'view'=>'View',
                    'grid'=>'Grid',
                    'form'=>'Form',
                    'tree'=>'Tree',
                    'add'=>'Adding View Controllers',
                    ),
                'api'=>array(
                    'API Controllers (4.2)',
                    'config'=>'Config',
                    'logger'=>'Logger',
                    'add'=>'Adding API Controllers',
                    ),
                'model'=>array(
                    'Model Controllers',
                    'sql'=>'SQL (4.2)',
                    'mongo'=>'Mongo (4.2)',
                    ),
                ),
             */
            /*
            'auth'=>array(
                'Authentication',
                'basic'=>'Basic Authentication Class',
                'sql'=>'Authentication With SQL',
                'dsql'=>'Enhancing The Auth SQL Query',
                'get'=>'Retrieving Auth Data from The Session',
                'field'=>'Storing Additional Auth Data',
                'login'=>'Custom Login Form',
                'allow'=>'Page White and Black Lists',
                ),
            'exception'=>array(
                'Exceptions',
                'how'=>'How to Use',
                'type'=>'Exception Types',
                'stopinit'=>'StopInit',
                'stoprender'=>'StopRender',
                ),
            'session'=>array(
                'Session Properties',
                ),
             */
            'form'=>array('Basic Form',
            'how'=>'How Does a Form Work?',
            'fields'=>'Adding Fields',
            'validation'=>'Validation',
            'submit'=>'Handling Submit',
            'database'=>'Database Integration',
            'model'=>'Using with Models',
            'styling'=>'Styling and Layout',
            'enhancing'=>'Enhancing Forms',
            'uploads'=>'File Uploads',
            'extending'=>'Extending',
            'ajax'=>array(
                'AJAX Support',
                'Reloading Fields',
                'Showing Error Messages',
                '...',
            ),
        ),
        'grid'=>array('Basic Grid',
        'how'=>'How to Use',
        'columns'=>'Standard Columns',
        'interaction'=>'Interaction',
        'helper'=>array(
            'Grid Helpers',
            'quicksearch'=>'Quick Search',
            'paginator'=>'Paginator',
            'export'=>'Export',
            'select'=>'Selectable Rows',
        ),
        'model'=>'Using with Models',
        'sort'=>'Sorting Controls',
    ),
    'lister'=>array(
        'Lister',
        'how'=>'How to Use',
        'format'=>'Formatting',
        'complete'=>'CompleteLister',
    ),
    'translate'=>array(
        'Translation',
        'atk'=>'Core Error Messages',
        'templates'=>'Your Templates',
        'docs'=>'Agile Toolkit Documentation',
    ),
            /*
            'filter'=>array(
                'Filter',
                'filter/how'=>'How to Use',
                'filter/quicksearch'=>'QuickSearch',
                ),
            'box'=>array(
                'Containers',
                'frame'=>'Frame',
                'infobox'=>'Info Box',
                'errorbox'=>'Error box',
                'Tabs',
                'Accordion',
                'Hint',
                ),
            'misc'=>array(
                'Misc',
                'SimpleCheckbox',
                ),
            'pathfinder'=>array(
                'Adding Addons with PathFinder',
                'how'=>'How to Use',
                'resource'=>'Default Resource Types',
                'location'=>'Adding Location',
                'locate'=>'Locating Files',
                ),
            'html'=>array(
                'HTML Styling and Enhancing',
                'skin'=>array(
                    'Skins',
                    'how'=>'How to Use',
                    'custom'=>'Customizing Existing Skins',
                    'new'=>array(
                        'Creating a New Skin',
                        'Required Tags',
                        ),
                    'core'=>array(
                        '"core" skin',
                        'css'=>array(
                            'Cascading Stylesheets',
                            'add'=>'Including Your Local CSS Additions',
                            '960'=>'960gs',
                            'typography'=>'Typography',
                            ),
                        'logo'=>'Changing The Logo',
                        'menu'=>'Defining Menus',
                        'icons'=>'Icons',
                        ),
                    'jui'=>'"jui" Skin (Based on "core")',
                    'agile'=>'"agile" Skin (Based on "core")',
                    ),
                'template'=>array(
                    'SMLite Templates',
                    'how'=>'How to Use',
                    'load'=>'Loading Templates',
                    'clone'=>'Cloning Templates',
                    'tags'=>'Manipulating Tags and Regions',
                    'each'=>'Processing Each Tag',
                    ),
                'head'=>'Dynamically Adding Code into html/head',
                'testing'=>'UI Testing',
                ),
            'js'=>array(
                'JavaScript Classes',
                'atkstart'=>'atk4 Startup Sequence',
                'ready'=>'AJAX-Compliant Ready-Check Funciton',
                'loader'=>'ATK4 Loader',
                'form'=>'ATK4 Form',
                'grid'=>'ATK4 Grid',
                'inline'=>'ATK4 Inline',
                'checkbox'=>'ATK4 Checkboxes',
                'expander'=>'ATK4 Expander',
                'menu'=>'ATK4 Menu',
                'notify'=>'ATK4 Notify',
                'ref'=>'ATK4 Reference',
                'uploader'=>'ATK4 Uploader',
                ),
            'live'=>array(
                'Deployment to Live Production',
                'logger'=>array(
                    'Error Reporting and Logging',
                    'level'=>'Log Detail Level',
                    'debug'=>'Generating Debug Info',
                    'alerts'=>'Emailing Log Errors',
                    'maintenance'=>'Maintenance Mode',
                    ),
                'dbupdates'=>array(
                    'Database Upgrades',
                    'how'=>'How to Use',
                    ),
                'helpers'=>array(
                    'Helpers',
                    'tmail'=>array(
                        'Sending Templated Mail',
                        'how'=>'How to Use',
                        'extend'=>'Extending',
                        ),
                    'htmlsanitizer'=>'HTMLSanitizer',
                    'processio'=>'ProcessIO',
                    'upgradechecker'=>'UpgradeChecker',
                    'order'=>'Order',
                    ),
                ),
             */
);
        //}}}
        //{{{ a - Addons
        $doc['a']=array('Add-ons',
            'crud'=>array(
                'CRUD',
                'how'=>'How to Use',
                'dont'=>'When Not to Use',
                'fields'=>'Controlling Which Fields Appear',
                'restrict'=>'Restricting Actions',
                'actions'=>'Adding More Actions',
            ),
            'filestore'=>array(
                'Filestore',
                'how'=>'How to Use',
                'types'=>'File Type Restrictions',
                'extend'=>'Custom File Model',
                'image'=>'Image Upload and Manipulation',
            ),
            'schemagenerator'=>array(
                'SQL Schema Generator',
                'how'=>'How to Use',
                'limitations'=>'Limitations and Notes',
            ),
            'payment'=>array(
                'Payment Gateway Integration',
                'cc'=>array(
                    'Credit Card',
                    'form'=>'Form',
                ),
                'paypal'=>'PayPal',
                'transaction'=>'Transactions',
                'recurring'=>'Recurring',
                'subscription'=>'Subscriptions',
            ),
            'cm'=>array(
                'Campaign Monitor',
                'howto'=>'How to use',
                'backend'=>'Backend Integration',
                'api'=>'Using The API',
                'ui'=>'UI',
            ),
            'googlemaps'=>array(
                'Google Maps',
                'how'=>'How to Use',
                'advanced'=>'Advanced Examples',
            ),
            'oauth'=>array(
                'OAuth Integration',
                'howto'=>'How to Use',
                'auth'=>'Integrating with Auth',
                'vendor'=>array(
                    'Vendors',
                    'twitter'=>'Twitter',
                    'facebook'=>'Facebook',
                    'linkedin'=>'LinkedIn',
                ),
            ),
            'doc'=>array(
                'Documentation Engine',
                'how'=>'How to Document Your Own Code',
                '- [ ]',
                '- [ ]',
            ),
            'test'=>array(
                'Testing',
                'unit'=>'Unit Testing',
                'performance'=>'Performance Testing',
            ),
        );
        //}}}
        //{{{ new - New Additions
        $doc['changes']=array('New additions',
            '4.1'=>array('Whats New in 4.1',
            '- [ ]',
        ),
        'obsolete'=>array('Unmaintained Code',
        '4.0'=>array('Since 4.0 (Artefacts from 3.0)',
        'Cluster DB driver',
        'psql',
        'Storage',
        'ApiPortal',
        'RPC',
        'ApiStatic',
        'sw',
        'AuthHTTP',
        'ClassDoc', 'Entity', 'DForm', 'FreeForm', 'FileUploader', 'FloatingFrame', 'Ajax', 'JSON', 'JsonLister',
        'RSS', 'DBAuth', 'TipManager', 'VersionControl', 'Wizard', 'AP',
        'mTrace',
        'js'=>array(
            'atk4_tabs', 'atk4_todo', 'fat_checkbox',),
        'tools'=>array(
            'create-mvs', 'sampleproject', 'samplewebsite', '- [ ]',
        ),
    ), 

    '4.1'=>array('Since 4.1 (Artefacts from 4.0)',
    'Page_EntityManager',
    'atk4-web',
),
                ),
            );
        //}}}
        $this->api->sitemap=$doc;
    }
}
// vim: set foldmethod=marker:
