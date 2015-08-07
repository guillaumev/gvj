<?php 


$options['sites'] = array (
);
$options['profiles'] = array (
  0 => 'minimal',
  1 => 'gvj_identity',
  2 => 'testing',
  3 => 'standard',
);
$options['packages'] = array (
  'base' => 
  array (
    'modules' => 
    array (
      'trigger_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/trigger/tests/trigger_test.module',
        'basename' => 'trigger_test.module',
        'name' => 'trigger_test',
        'info' => 
        array (
          'name' => 'Trigger Test',
          'description' => 'Support module for Trigger tests.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.34',
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'trigger' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/trigger/trigger.module',
        'basename' => 'trigger.module',
        'name' => 'trigger',
        'info' => 
        array (
          'name' => 'Trigger',
          'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'trigger.test',
          ),
          'configure' => 'admin/structure/trigger',
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'overlay' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/overlay/overlay.module',
        'basename' => 'overlay.module',
        'name' => 'overlay',
        'info' => 
        array (
          'name' => 'Overlay',
          'description' => 'Displays the Drupal administration interface in an overlay.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'field_ui' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/field_ui/field_ui.module',
        'basename' => 'field_ui.module',
        'name' => 'field_ui',
        'info' => 
        array (
          'name' => 'Field UI',
          'description' => 'User interface for the Field API.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'field_ui.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'blog' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/blog/blog.module',
        'basename' => 'blog.module',
        'name' => 'blog',
        'info' => 
        array (
          'name' => 'Blog',
          'description' => 'Enables multi-user blogs.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'blog.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'options' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/field/modules/options/options.module',
        'basename' => 'options.module',
        'name' => 'options',
        'info' => 
        array (
          'name' => 'Options',
          'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'options.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'list_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/field/modules/list/tests/list_test.module',
        'basename' => 'list_test.module',
        'name' => 'list_test',
        'info' => 
        array (
          'name' => 'List test',
          'description' => 'Support module for the List module tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.34',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'list' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/field/modules/list/list.module',
        'basename' => 'list.module',
        'name' => 'list',
        'info' => 
        array (
          'name' => 'List',
          'description' => 'Defines list field types. Use with Options to create selection lists.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'options',
          ),
          'files' => 
          array (
            0 => 'tests/list.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'field_sql_storage' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/field/modules/field_sql_storage/field_sql_storage.module',
        'basename' => 'field_sql_storage.module',
        'name' => 'field_sql_storage',
        'info' => 
        array (
          'name' => 'Field SQL storage',
          'description' => 'Stores field data in an SQL database.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'field_sql_storage.test',
          ),
          'required' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'number' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/field/modules/number/number.module',
        'basename' => 'number.module',
        'name' => 'number',
        'info' => 
        array (
          'name' => 'Number',
          'description' => 'Defines numeric field types.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'number.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'text' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/field/modules/text/text.module',
        'basename' => 'text.module',
        'name' => 'text',
        'info' => 
        array (
          'name' => 'Text',
          'description' => 'Defines simple text field types.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'text.test',
          ),
          'required' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'field_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/field/tests/field_test.module',
        'basename' => 'field_test.module',
        'name' => 'field_test',
        'info' => 
        array (
          'name' => 'Field API Test',
          'description' => 'Support module for the Field API tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'files' => 
          array (
            0 => 'field_test.entity.inc',
          ),
          'version' => '7.34',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'field' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/field/field.module',
        'basename' => 'field.module',
        'name' => 'field',
        'info' => 
        array (
          'name' => 'Field',
          'description' => 'Field API to add fields to entities like nodes and users.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'field.module',
            1 => 'field.attach.inc',
            2 => 'field.info.class.inc',
            3 => 'tests/field.test',
          ),
          'dependencies' => 
          array (
            0 => 'field_sql_storage',
          ),
          'required' => true,
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'theme/field.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'color' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/color/color.module',
        'basename' => 'color.module',
        'name' => 'color',
        'info' => 
        array (
          'name' => 'Color',
          'description' => 'Allows administrators to change the color scheme of compatible themes.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'color.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'dblog' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/dblog/dblog.module',
        'basename' => 'dblog.module',
        'name' => 'dblog',
        'info' => 
        array (
          'name' => 'Database logging',
          'description' => 'Logs and records system events to the database.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'dblog.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'cron_queue_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/system/tests/cron_queue_test.module',
        'basename' => 'cron_queue_test.module',
        'name' => 'cron_queue_test',
        'info' => 
        array (
          'name' => 'Cron Queue test',
          'description' => 'Support module for the cron queue runner.',
          'package' => 'Testing',
          'version' => '7.34',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'system' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/system/system.module',
        'basename' => 'system.module',
        'name' => 'system',
        'info' => 
        array (
          'name' => 'System',
          'description' => 'Handles general site configuration for administrators.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'system.archiver.inc',
            1 => 'system.mail.inc',
            2 => 'system.queue.inc',
            3 => 'system.tar.inc',
            4 => 'system.updater.inc',
            5 => 'system.test',
          ),
          'required' => true,
          'configure' => 'admin/config/system',
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7079',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'toolbar' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/toolbar/toolbar.module',
        'basename' => 'toolbar.module',
        'name' => 'toolbar',
        'info' => 
        array (
          'name' => 'Toolbar',
          'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
          'core' => '7.x',
          'package' => 'Core',
          'version' => '7.34',
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'statistics' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/statistics/statistics.module',
        'basename' => 'statistics.module',
        'name' => 'statistics',
        'info' => 
        array (
          'name' => 'Statistics',
          'description' => 'Logs access statistics for your site.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'statistics.test',
          ),
          'configure' => 'admin/config/system/statistics',
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'php' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/php/php.module',
        'basename' => 'php.module',
        'name' => 'php',
        'info' => 
        array (
          'name' => 'PHP filter',
          'description' => 'Allows embedded PHP code/snippets to be evaluated.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'php.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'poll' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/poll/poll.module',
        'basename' => 'poll.module',
        'name' => 'poll',
        'info' => 
        array (
          'name' => 'Poll',
          'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'poll.test',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'poll.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'dashboard' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/dashboard/dashboard.module',
        'basename' => 'dashboard.module',
        'name' => 'dashboard',
        'info' => 
        array (
          'name' => 'Dashboard',
          'description' => 'Provides a dashboard page in the administrative interface for organizing administrative tasks and tracking information within your site.',
          'core' => '7.x',
          'package' => 'Core',
          'version' => '7.34',
          'files' => 
          array (
            0 => 'dashboard.test',
          ),
          'dependencies' => 
          array (
            0 => 'block',
          ),
          'configure' => 'admin/dashboard/customize',
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'path' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/path/path.module',
        'basename' => 'path.module',
        'name' => 'path',
        'info' => 
        array (
          'name' => 'Path',
          'description' => 'Allows users to rename URLs.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'path.test',
          ),
          'configure' => 'admin/config/search/path',
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'shortcut' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/shortcut/shortcut.module',
        'basename' => 'shortcut.module',
        'name' => 'shortcut',
        'info' => 
        array (
          'name' => 'Shortcut',
          'description' => 'Allows users to manage customizable lists of shortcut links.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'shortcut.test',
          ),
          'configure' => 'admin/config/user-interface/shortcut',
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'user_form_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/user/tests/user_form_test.module',
        'basename' => 'user_form_test.module',
        'name' => 'user_form_test',
        'info' => 
        array (
          'name' => 'User module form tests',
          'description' => 'Support module for user form testing.',
          'package' => 'Testing',
          'version' => '7.34',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'user' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/user/user.module',
        'basename' => 'user.module',
        'name' => 'user',
        'info' => 
        array (
          'name' => 'User',
          'description' => 'Manages the user registration and login system.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'user.module',
            1 => 'user.test',
          ),
          'required' => true,
          'configure' => 'admin/config/people',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'user.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7018',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'node_test_exception' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/node/tests/node_test_exception.module',
        'basename' => 'node_test_exception.module',
        'name' => 'node_test_exception',
        'info' => 
        array (
          'name' => 'Node module exception tests',
          'description' => 'Support module for node related exception testing.',
          'package' => 'Testing',
          'version' => '7.34',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'node_access_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/node/tests/node_access_test.module',
        'basename' => 'node_access_test.module',
        'name' => 'node_access_test',
        'info' => 
        array (
          'name' => 'Node module access tests',
          'description' => 'Support module for node permission testing.',
          'package' => 'Testing',
          'version' => '7.34',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'node_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/node/tests/node_test.module',
        'basename' => 'node_test.module',
        'name' => 'node_test',
        'info' => 
        array (
          'name' => 'Node module tests',
          'description' => 'Support module for node related testing.',
          'package' => 'Testing',
          'version' => '7.34',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'node' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/node/node.module',
        'basename' => 'node.module',
        'name' => 'node',
        'info' => 
        array (
          'name' => 'Node',
          'description' => 'Allows content to be submitted to the site and displayed on pages.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'node.module',
            1 => 'node.test',
          ),
          'required' => true,
          'configure' => 'admin/structure/types',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'node.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7014',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'search_embedded_form' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/search/tests/search_embedded_form.module',
        'basename' => 'search_embedded_form.module',
        'name' => 'search_embedded_form',
        'info' => 
        array (
          'name' => 'Search embedded form',
          'description' => 'Support module for search module testing of embedded forms.',
          'package' => 'Testing',
          'version' => '7.34',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'search_extra_type' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/search/tests/search_extra_type.module',
        'basename' => 'search_extra_type.module',
        'name' => 'search_extra_type',
        'info' => 
        array (
          'name' => 'Test search type',
          'description' => 'Support module for search module testing.',
          'package' => 'Testing',
          'version' => '7.34',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'search' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/search/search.module',
        'basename' => 'search.module',
        'name' => 'search',
        'info' => 
        array (
          'name' => 'Search',
          'description' => 'Enables site-wide keyword searching.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'search.extender.inc',
            1 => 'search.test',
          ),
          'configure' => 'admin/config/search/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'search.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'file_module_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/file/tests/file_module_test.module',
        'basename' => 'file_module_test.module',
        'name' => 'file_module_test',
        'info' => 
        array (
          'name' => 'File test',
          'description' => 'Provides hooks for testing File module functionality.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'file' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/file/file.module',
        'basename' => 'file.module',
        'name' => 'file',
        'info' => 
        array (
          'name' => 'File',
          'description' => 'Defines a file field type.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'tests/file.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'filter' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/filter/filter.module',
        'basename' => 'filter.module',
        'name' => 'filter',
        'info' => 
        array (
          'name' => 'Filter',
          'description' => 'Filters content in preparation for display.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'filter.test',
          ),
          'required' => true,
          'configure' => 'admin/config/content/formats',
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7010',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'aggregator_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/aggregator/tests/aggregator_test.module',
        'basename' => 'aggregator_test.module',
        'name' => 'aggregator_test',
        'info' => 
        array (
          'name' => 'Aggregator module tests',
          'description' => 'Support module for aggregator related testing.',
          'package' => 'Testing',
          'version' => '7.34',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'aggregator' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/aggregator/aggregator.module',
        'basename' => 'aggregator.module',
        'name' => 'aggregator',
        'info' => 
        array (
          'name' => 'Aggregator',
          'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'aggregator.test',
          ),
          'configure' => 'admin/config/services/aggregator/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'aggregator.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'help' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/help/help.module',
        'basename' => 'help.module',
        'name' => 'help',
        'info' => 
        array (
          'name' => 'Help',
          'description' => 'Manages the display of online help.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'help.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'menu' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/menu/menu.module',
        'basename' => 'menu.module',
        'name' => 'menu',
        'info' => 
        array (
          'name' => 'Menu',
          'description' => 'Allows administrators to customize the site navigation menu.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'menu.test',
          ),
          'configure' => 'admin/structure/menu',
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'comment' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/comment/comment.module',
        'basename' => 'comment.module',
        'name' => 'comment',
        'info' => 
        array (
          'name' => 'Comment',
          'description' => 'Allows users to comment on and discuss published content.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'text',
          ),
          'files' => 
          array (
            0 => 'comment.module',
            1 => 'comment.test',
          ),
          'configure' => 'admin/content/comment',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'comment.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'php' => '5.2.4',
        ),
        'schema_version' => '7009',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'block_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/block/tests/block_test.module',
        'basename' => 'block_test.module',
        'name' => 'block_test',
        'info' => 
        array (
          'name' => 'Block test',
          'description' => 'Provides test blocks.',
          'package' => 'Testing',
          'version' => '7.34',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'block' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/block/block.module',
        'basename' => 'block.module',
        'name' => 'block',
        'info' => 
        array (
          'name' => 'Block',
          'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'block.test',
          ),
          'configure' => 'admin/structure/block',
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7009',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'profile' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/profile/profile.module',
        'basename' => 'profile.module',
        'name' => 'profile',
        'info' => 
        array (
          'name' => 'Profile',
          'description' => 'Supports configurable user profiles.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'profile.test',
          ),
          'configure' => 'admin/config/people/profile',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'taxonomy' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/taxonomy/taxonomy.module',
        'basename' => 'taxonomy.module',
        'name' => 'taxonomy',
        'info' => 
        array (
          'name' => 'Taxonomy',
          'description' => 'Enables the categorization of content.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'options',
          ),
          'files' => 
          array (
            0 => 'taxonomy.module',
            1 => 'taxonomy.test',
          ),
          'configure' => 'admin/structure/taxonomy',
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'php' => '5.2.4',
        ),
        'schema_version' => '7011',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'drupal_system_listing_incompatible_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/simpletest/tests/drupal_system_listing_incompatible_test/drupal_system_listing_incompatible_test.module',
        'basename' => 'drupal_system_listing_incompatible_test.module',
        'name' => 'drupal_system_listing_incompatible_test',
        'info' => 
        array (
          'name' => 'Drupal system listing incompatible test',
          'description' => 'Support module for testing the drupal_system_listing function.',
          'package' => 'Testing',
          'version' => '7.34',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'drupal_system_listing_compatible_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/simpletest/tests/drupal_system_listing_compatible_test/drupal_system_listing_compatible_test.module',
        'basename' => 'drupal_system_listing_compatible_test.module',
        'name' => 'drupal_system_listing_compatible_test',
        'info' => 
        array (
          'name' => 'Drupal system listing compatible test',
          'description' => 'Support module for testing the drupal_system_listing function.',
          'package' => 'Testing',
          'version' => '7.34',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'psr_0_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/simpletest/tests/psr_0_test/psr_0_test.module',
        'basename' => 'psr_0_test.module',
        'name' => 'psr_0_test',
        'info' => 
        array (
          'name' => 'PSR-0 Test cases',
          'description' => 'Test classes to be discovered by simpletest.',
          'core' => '7.x',
          'hidden' => true,
          'package' => 'Testing',
          'version' => '7.34',
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'error_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/simpletest/tests/error_test.module',
        'basename' => 'error_test.module',
        'name' => 'error_test',
        'info' => 
        array (
          'name' => 'Error test',
          'description' => 'Support module for error and exception testing.',
          'package' => 'Testing',
          'version' => '7.34',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'image_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/simpletest/tests/image_test.module',
        'basename' => 'image_test.module',
        'name' => 'image_test',
        'info' => 
        array (
          'name' => 'Image test',
          'description' => 'Support module for image toolkit tests.',
          'package' => 'Testing',
          'version' => '7.34',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'requirements1_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/simpletest/tests/requirements1_test.module',
        'basename' => 'requirements1_test.module',
        'name' => 'requirements1_test',
        'info' => 
        array (
          'name' => 'Requirements 1 Test',
          'description' => 'Tests that a module is not installed when it fails hook_requirements(\'install\').',
          'package' => 'Testing',
          'version' => '7.34',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'system_incompatible_module_version_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/simpletest/tests/system_incompatible_module_version_test.module',
        'basename' => 'system_incompatible_module_version_test.module',
        'name' => 'system_incompatible_module_version_test',
        'info' => 
        array (
          'name' => 'System incompatible module version test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.34',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'system_incompatible_core_version_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/simpletest/tests/system_incompatible_core_version_test.module',
        'basename' => 'system_incompatible_core_version_test.module',
        'name' => 'system_incompatible_core_version_test',
        'info' => 
        array (
          'name' => 'System incompatible core version test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.34',
          'core' => '5.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'system_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/simpletest/tests/system_test.module',
        'basename' => 'system_test.module',
        'name' => 'system_test',
        'info' => 
        array (
          'name' => 'System test',
          'description' => 'Support module for system testing.',
          'package' => 'Testing',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'system_test.module',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'taxonomy_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/simpletest/tests/taxonomy_test.module',
        'basename' => 'taxonomy_test.module',
        'name' => 'taxonomy_test',
        'info' => 
        array (
          'name' => 'Taxonomy test module',
          'description' => '"Tests functions and hooks not used in core".',
          'package' => 'Testing',
          'version' => '7.34',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'taxonomy',
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'system_incompatible_core_version_dependencies_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/simpletest/tests/system_incompatible_core_version_dependencies_test.module',
        'basename' => 'system_incompatible_core_version_dependencies_test.module',
        'name' => 'system_incompatible_core_version_dependencies_test',
        'info' => 
        array (
          'name' => 'System incompatible core version dependencies test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.34',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'system_incompatible_core_version_test',
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'update_test_3' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/simpletest/tests/update_test_3.module',
        'basename' => 'update_test_3.module',
        'name' => 'update_test_3',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => '7.34',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'form_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/simpletest/tests/form_test.module',
        'basename' => 'form_test.module',
        'name' => 'form_test',
        'info' => 
        array (
          'name' => 'FormAPI Test',
          'description' => 'Support module for Form API tests.',
          'package' => 'Testing',
          'version' => '7.34',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'entity_cache_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/simpletest/tests/entity_cache_test.module',
        'basename' => 'entity_cache_test.module',
        'name' => 'entity_cache_test',
        'info' => 
        array (
          'name' => 'Entity cache test',
          'description' => 'Support module for testing entity cache.',
          'package' => 'Testing',
          'version' => '7.34',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'entity_cache_test_dependency',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'actions_loop_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/simpletest/tests/actions_loop_test.module',
        'basename' => 'actions_loop_test.module',
        'name' => 'actions_loop_test',
        'info' => 
        array (
          'name' => 'Actions loop test',
          'description' => 'Support module for action loop testing.',
          'package' => 'Testing',
          'version' => '7.34',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'requirements2_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/simpletest/tests/requirements2_test.module',
        'basename' => 'requirements2_test.module',
        'name' => 'requirements2_test',
        'info' => 
        array (
          'name' => 'Requirements 2 Test',
          'description' => 'Tests that a module is not installed when the one it depends on fails hook_requirements(\'install).',
          'dependencies' => 
          array (
            0 => 'requirements1_test',
            1 => 'comment',
          ),
          'package' => 'Testing',
          'version' => '7.34',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'entity_query_access_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/simpletest/tests/entity_query_access_test.module',
        'basename' => 'entity_query_access_test.module',
        'name' => 'entity_query_access_test',
        'info' => 
        array (
          'name' => 'Entity query access test',
          'description' => 'Support module for checking entity query results.',
          'package' => 'Testing',
          'version' => '7.34',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'database_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/simpletest/tests/database_test.module',
        'basename' => 'database_test.module',
        'name' => 'database_test',
        'info' => 
        array (
          'name' => 'Database Test',
          'description' => 'Support module for Database layer tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.34',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'filter_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/simpletest/tests/filter_test.module',
        'basename' => 'filter_test.module',
        'name' => 'filter_test',
        'info' => 
        array (
          'name' => 'Filter test module',
          'description' => 'Tests filter hooks and functions.',
          'package' => 'Testing',
          'version' => '7.34',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'menu_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/simpletest/tests/menu_test.module',
        'basename' => 'menu_test.module',
        'name' => 'menu_test',
        'info' => 
        array (
          'name' => 'Hook menu tests',
          'description' => 'Support module for menu hook testing.',
          'package' => 'Testing',
          'version' => '7.34',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'entity_cache_test_dependency' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/simpletest/tests/entity_cache_test_dependency.module',
        'basename' => 'entity_cache_test_dependency.module',
        'name' => 'entity_cache_test_dependency',
        'info' => 
        array (
          'name' => 'Entity cache test dependency',
          'description' => 'Support dependency module for testing entity cache.',
          'package' => 'Testing',
          'version' => '7.34',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'path_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/simpletest/tests/path_test.module',
        'basename' => 'path_test.module',
        'name' => 'path_test',
        'info' => 
        array (
          'name' => 'Hook path tests',
          'description' => 'Support module for path hook testing.',
          'package' => 'Testing',
          'version' => '7.34',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'ajax_forms_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/simpletest/tests/ajax_forms_test.module',
        'basename' => 'ajax_forms_test.module',
        'name' => 'ajax_forms_test',
        'info' => 
        array (
          'name' => 'AJAX form test mock module',
          'description' => 'Test for AJAX form calls.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.34',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'ajax_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/simpletest/tests/ajax_test.module',
        'basename' => 'ajax_test.module',
        'name' => 'ajax_test',
        'info' => 
        array (
          'name' => 'AJAX Test',
          'description' => 'Support module for AJAX framework tests.',
          'package' => 'Testing',
          'version' => '7.34',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'update_script_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/simpletest/tests/update_script_test.module',
        'basename' => 'update_script_test.module',
        'name' => 'update_script_test',
        'info' => 
        array (
          'name' => 'Update script test',
          'description' => 'Support module for update script testing.',
          'package' => 'Testing',
          'version' => '7.34',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'update_test_1' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/simpletest/tests/update_test_1.module',
        'basename' => 'update_test_1.module',
        'name' => 'update_test_1',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => '7.34',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'common_test_cron_helper' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/simpletest/tests/common_test_cron_helper.module',
        'basename' => 'common_test_cron_helper.module',
        'name' => 'common_test_cron_helper',
        'info' => 
        array (
          'name' => 'Common Test Cron Helper',
          'description' => 'Helper module for CronRunTestCase::testCronExceptions().',
          'package' => 'Testing',
          'version' => '7.34',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'theme_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/simpletest/tests/theme_test.module',
        'basename' => 'theme_test.module',
        'name' => 'theme_test',
        'info' => 
        array (
          'name' => 'Theme test',
          'description' => 'Support module for theme system testing.',
          'package' => 'Testing',
          'version' => '7.34',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'module_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/simpletest/tests/module_test.module',
        'basename' => 'module_test.module',
        'name' => 'module_test',
        'info' => 
        array (
          'name' => 'Module test',
          'description' => 'Support module for module system testing.',
          'package' => 'Testing',
          'version' => '7.34',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'common_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/simpletest/tests/common_test.module',
        'basename' => 'common_test.module',
        'name' => 'common_test',
        'info' => 
        array (
          'name' => 'Common Test',
          'description' => 'Support module for Common tests.',
          'package' => 'Testing',
          'version' => '7.34',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'common_test.css',
            ),
            'print' => 
            array (
              0 => 'common_test.print.css',
            ),
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'entity_crud_hook_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/simpletest/tests/entity_crud_hook_test.module',
        'basename' => 'entity_crud_hook_test.module',
        'name' => 'entity_crud_hook_test',
        'info' => 
        array (
          'name' => 'Entity CRUD Hooks Test',
          'description' => 'Support module for CRUD hook tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.34',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'batch_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/simpletest/tests/batch_test.module',
        'basename' => 'batch_test.module',
        'name' => 'batch_test',
        'info' => 
        array (
          'name' => 'Batch API test',
          'description' => 'Support module for Batch API tests.',
          'package' => 'Testing',
          'version' => '7.34',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'xmlrpc_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/simpletest/tests/xmlrpc_test.module',
        'basename' => 'xmlrpc_test.module',
        'name' => 'xmlrpc_test',
        'info' => 
        array (
          'name' => 'XML-RPC Test',
          'description' => 'Support module for XML-RPC tests according to the validator1 specification.',
          'package' => 'Testing',
          'version' => '7.34',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'system_dependencies_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/simpletest/tests/system_dependencies_test.module',
        'basename' => 'system_dependencies_test.module',
        'name' => 'system_dependencies_test',
        'info' => 
        array (
          'name' => 'System dependency test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.34',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => '_missing_dependency',
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'update_test_2' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/simpletest/tests/update_test_2.module',
        'basename' => 'update_test_2.module',
        'name' => 'update_test_2',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => '7.34',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'system_incompatible_module_version_dependencies_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/simpletest/tests/system_incompatible_module_version_dependencies_test.module',
        'basename' => 'system_incompatible_module_version_dependencies_test.module',
        'name' => 'system_incompatible_module_version_dependencies_test',
        'info' => 
        array (
          'name' => 'System incompatible module version dependencies test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.34',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'system_incompatible_module_version_test (>2.0)',
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'url_alter_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/simpletest/tests/url_alter_test.module',
        'basename' => 'url_alter_test.module',
        'name' => 'url_alter_test',
        'info' => 
        array (
          'name' => 'Url_alter tests',
          'description' => 'A support modules for url_alter hook testing.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.34',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'session_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/simpletest/tests/session_test.module',
        'basename' => 'session_test.module',
        'name' => 'session_test',
        'info' => 
        array (
          'name' => 'Session test',
          'description' => 'Support module for session data testing.',
          'package' => 'Testing',
          'version' => '7.34',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'file_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/simpletest/tests/file_test.module',
        'basename' => 'file_test.module',
        'name' => 'file_test',
        'info' => 
        array (
          'name' => 'File test',
          'description' => 'Support module for file handling tests.',
          'package' => 'Testing',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'file_test.module',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'simpletest' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/simpletest/simpletest.module',
        'basename' => 'simpletest.module',
        'name' => 'simpletest',
        'info' => 
        array (
          'name' => 'Testing',
          'description' => 'Provides a framework for unit and functional testing.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'simpletest.test',
            1 => 'drupal_web_test_case.php',
            2 => 'tests/actions.test',
            3 => 'tests/ajax.test',
            4 => 'tests/batch.test',
            5 => 'tests/bootstrap.test',
            6 => 'tests/cache.test',
            7 => 'tests/common.test',
            8 => 'tests/database_test.test',
            9 => 'tests/entity_crud.test',
            10 => 'tests/entity_crud_hook_test.test',
            11 => 'tests/entity_query.test',
            12 => 'tests/error.test',
            13 => 'tests/file.test',
            14 => 'tests/filetransfer.test',
            15 => 'tests/form.test',
            16 => 'tests/graph.test',
            17 => 'tests/image.test',
            18 => 'tests/lock.test',
            19 => 'tests/mail.test',
            20 => 'tests/menu.test',
            21 => 'tests/module.test',
            22 => 'tests/pager.test',
            23 => 'tests/password.test',
            24 => 'tests/path.test',
            25 => 'tests/registry.test',
            26 => 'tests/schema.test',
            27 => 'tests/session.test',
            28 => 'tests/tablesort.test',
            29 => 'tests/theme.test',
            30 => 'tests/unicode.test',
            31 => 'tests/update.test',
            32 => 'tests/xmlrpc.test',
            33 => 'tests/upgrade/upgrade.test',
            34 => 'tests/upgrade/upgrade.comment.test',
            35 => 'tests/upgrade/upgrade.filter.test',
            36 => 'tests/upgrade/upgrade.forum.test',
            37 => 'tests/upgrade/upgrade.locale.test',
            38 => 'tests/upgrade/upgrade.menu.test',
            39 => 'tests/upgrade/upgrade.node.test',
            40 => 'tests/upgrade/upgrade.taxonomy.test',
            41 => 'tests/upgrade/upgrade.trigger.test',
            42 => 'tests/upgrade/upgrade.translatable.test',
            43 => 'tests/upgrade/upgrade.upload.test',
            44 => 'tests/upgrade/upgrade.user.test',
            45 => 'tests/upgrade/update.aggregator.test',
            46 => 'tests/upgrade/update.trigger.test',
            47 => 'tests/upgrade/update.field.test',
            48 => 'tests/upgrade/update.user.test',
          ),
          'configure' => 'admin/config/development/testing/settings',
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'image_module_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/image/tests/image_module_test.module',
        'basename' => 'image_module_test.module',
        'name' => 'image_module_test',
        'info' => 
        array (
          'name' => 'Image test',
          'description' => 'Provides hook implementations for testing Image module functionality.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'image_module_test.module',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'image' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/image/image.module',
        'basename' => 'image.module',
        'name' => 'image',
        'info' => 
        array (
          'name' => 'Image',
          'description' => 'Provides image manipulation tools.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'file',
          ),
          'files' => 
          array (
            0 => 'image.test',
          ),
          'configure' => 'admin/config/media/image-styles',
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'tracker' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/tracker/tracker.module',
        'basename' => 'tracker.module',
        'name' => 'tracker',
        'info' => 
        array (
          'name' => 'Tracker',
          'description' => 'Enables tracking of recent content for users.',
          'dependencies' => 
          array (
            0 => 'comment',
          ),
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tracker.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'ccc_update_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/update/tests/ccc_update_test.module',
        'basename' => 'ccc_update_test.module',
        'name' => 'ccc_update_test',
        'info' => 
        array (
          'name' => 'CCC Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.34',
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'update_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/update/tests/update_test.module',
        'basename' => 'update_test.module',
        'name' => 'update_test',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'version' => '7.34',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'bbb_update_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/update/tests/bbb_update_test.module',
        'basename' => 'bbb_update_test.module',
        'name' => 'bbb_update_test',
        'info' => 
        array (
          'name' => 'BBB Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.34',
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'aaa_update_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/update/tests/aaa_update_test.module',
        'basename' => 'aaa_update_test.module',
        'name' => 'aaa_update_test',
        'info' => 
        array (
          'name' => 'AAA Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.34',
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'update' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/update/update.module',
        'basename' => 'update.module',
        'name' => 'update',
        'info' => 
        array (
          'name' => 'Update manager',
          'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
          'version' => '7.34',
          'package' => 'Core',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'update.test',
          ),
          'configure' => 'admin/reports/updates/settings',
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'translation_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/translation/tests/translation_test.module',
        'basename' => 'translation_test.module',
        'name' => 'translation_test',
        'info' => 
        array (
          'name' => 'Content Translation Test',
          'description' => 'Support module for the content translation tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.34',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'translation' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/translation/translation.module',
        'basename' => 'translation.module',
        'name' => 'translation',
        'info' => 
        array (
          'name' => 'Content translation',
          'description' => 'Allows content to be translated into different languages.',
          'dependencies' => 
          array (
            0 => 'locale',
          ),
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'translation.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'locale_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/locale/tests/locale_test.module',
        'basename' => 'locale_test.module',
        'name' => 'locale_test',
        'info' => 
        array (
          'name' => 'Locale Test',
          'description' => 'Support module for the locale layer tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.34',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'locale' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/locale/locale.module',
        'basename' => 'locale.module',
        'name' => 'locale',
        'info' => 
        array (
          'name' => 'Locale',
          'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'locale.test',
          ),
          'configure' => 'admin/config/regional/language',
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'openid_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/openid/tests/openid_test.module',
        'basename' => 'openid_test.module',
        'name' => 'openid_test',
        'info' => 
        array (
          'name' => 'OpenID dummy provider',
          'description' => 'OpenID provider used for testing.',
          'package' => 'Testing',
          'version' => '7.34',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'openid',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'openid' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/openid/openid.module',
        'basename' => 'openid.module',
        'name' => 'openid',
        'info' => 
        array (
          'name' => 'OpenID',
          'description' => 'Allows users to log into your site using OpenID.',
          'version' => '7.34',
          'package' => 'Core',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'openid.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'syslog' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/syslog/syslog.module',
        'basename' => 'syslog.module',
        'name' => 'syslog',
        'info' => 
        array (
          'name' => 'Syslog',
          'description' => 'Logs and records system events to syslog.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'syslog.test',
          ),
          'configure' => 'admin/config/development/logging',
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'contact' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/contact/contact.module',
        'basename' => 'contact.module',
        'name' => 'contact',
        'info' => 
        array (
          'name' => 'Contact',
          'description' => 'Enables the use of both personal and site-wide contact forms.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'contact.test',
          ),
          'configure' => 'admin/structure/contact',
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'rdf_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/rdf/tests/rdf_test.module',
        'basename' => 'rdf_test.module',
        'name' => 'rdf_test',
        'info' => 
        array (
          'name' => 'RDF module tests',
          'description' => 'Support module for RDF module testing.',
          'package' => 'Testing',
          'version' => '7.34',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'rdf' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/rdf/rdf.module',
        'basename' => 'rdf.module',
        'name' => 'rdf',
        'info' => 
        array (
          'name' => 'RDF',
          'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rdf.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'forum' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/forum/forum.module',
        'basename' => 'forum.module',
        'name' => 'forum',
        'info' => 
        array (
          'name' => 'Forum',
          'description' => 'Provides discussion forums.',
          'dependencies' => 
          array (
            0 => 'taxonomy',
            1 => 'comment',
          ),
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'forum.test',
          ),
          'configure' => 'admin/structure/forum',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'forum.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'php' => '5.2.4',
        ),
        'schema_version' => '7012',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'contextual' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/contextual/contextual.module',
        'basename' => 'contextual.module',
        'name' => 'contextual',
        'info' => 
        array (
          'name' => 'Contextual links',
          'description' => 'Provides contextual links to perform actions related to elements on a page.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'contextual.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'book' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/modules/book/book.module',
        'basename' => 'book.module',
        'name' => 'book',
        'info' => 
        array (
          'name' => 'Book',
          'description' => 'Allows users to create and organize related content in an outline.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'book.test',
          ),
          'configure' => 'admin/content/book/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'book.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
    ),
    'themes' => 
    array (
      'seven' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/themes/seven/seven.info',
        'basename' => 'seven.info',
        'name' => 'Seven',
        'info' => 
        array (
          'name' => 'Seven',
          'description' => 'A simple one-column, tableless, fluid width administration theme.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'screen' => 
            array (
              0 => 'reset.css',
              1 => 'style.css',
            ),
          ),
          'settings' => 
          array (
            'shortcut_module_link' => '1',
          ),
          'regions' => 
          array (
            'content' => 'Content',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'sidebar_first' => 'First sidebar',
          ),
          'regions_hidden' => 
          array (
            0 => 'sidebar_first',
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
        ),
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'stark' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/themes/stark/stark.info',
        'basename' => 'stark.info',
        'name' => 'Stark',
        'info' => 
        array (
          'name' => 'Stark',
          'description' => 'This theme demonstrates Drupal\'s default HTML markup and CSS styles. To learn how to build your own theme and override Drupal\'s default code, see the <a href="http://drupal.org/theme-guide">Theming Guide</a>.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'layout.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
        ),
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'bartik' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/themes/bartik/bartik.info',
        'basename' => 'bartik.info',
        'name' => 'Bartik',
        'info' => 
        array (
          'name' => 'Bartik',
          'description' => 'A flexible, recolorable theme with many regions.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/layout.css',
              1 => 'css/style.css',
              2 => 'css/colors.css',
            ),
            'print' => 
            array (
              0 => 'css/print.css',
            ),
          ),
          'regions' => 
          array (
            'header' => 'Header',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'highlighted' => 'Highlighted',
            'featured' => 'Featured',
            'content' => 'Content',
            'sidebar_first' => 'Sidebar first',
            'sidebar_second' => 'Sidebar second',
            'triptych_first' => 'Triptych first',
            'triptych_middle' => 'Triptych middle',
            'triptych_last' => 'Triptych last',
            'footer_firstcolumn' => 'Footer first column',
            'footer_secondcolumn' => 'Footer second column',
            'footer_thirdcolumn' => 'Footer third column',
            'footer_fourthcolumn' => 'Footer fourth column',
            'footer' => 'Footer',
          ),
          'settings' => 
          array (
            'shortcut_module_link' => '0',
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
        ),
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'garland' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/themes/garland/garland.info',
        'basename' => 'garland.info',
        'name' => 'Garland',
        'info' => 
        array (
          'name' => 'Garland',
          'description' => 'A multi-column theme which can be configured to modify colors and switch between fixed and fluid width layouts.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'style.css',
            ),
            'print' => 
            array (
              0 => 'print.css',
            ),
          ),
          'settings' => 
          array (
            'garland_width' => 'fluid',
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
        ),
        'project' => 'drupal',
        'version' => '7.34',
      ),
    ),
    'platforms' => 
    array (
      'drupal' => 
      array (
        'short_name' => 'drupal',
        'version' => '7.34',
        'description' => 'This platform is running Drupal 7.34',
      ),
    ),
    'profiles' => 
    array (
      'minimal' => 
      array (
        'name' => 'minimal',
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/profiles/minimal/minimal.profile',
        'project' => 'drupal',
        'info' => 
        array (
          'name' => 'Minimal',
          'description' => 'Start with only a few modules enabled.',
          'version' => '7.34',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'dblog',
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'version' => '7.34',
      ),
      'gvj_identity' => 
      array (
        'name' => 'gvj_identity',
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/profiles/gvj_identity/gvj_identity.profile',
        'project' => '',
        'info' => 
        array (
          'name' => 'GVJ Identity',
          'description' => 'Profile for the GVJ Identity pack',
          'version' => '7.34',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'dblog',
            2 => 'gvj_commons',
            3 => 'gvj_contact',
            4 => 'gvj_page',
            5 => 'gvj_wysiwyg',
            6 => 'gvj_social',
            7 => 'contactinfo',
          ),
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'version' => '7.34',
      ),
      'testing' => 
      array (
        'name' => 'testing',
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/profiles/testing/testing.profile',
        'project' => 'drupal',
        'info' => 
        array (
          'name' => 'Testing',
          'description' => 'Minimal profile for running tests. Includes absolutely required modules only.',
          'version' => '7.34',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'version' => '7.34',
      ),
      'standard' => 
      array (
        'name' => 'standard',
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/profiles/standard/standard.profile',
        'project' => 'drupal',
        'info' => 
        array (
          'name' => 'Standard',
          'description' => 'Install with commonly used features pre-configured.',
          'version' => '7.34',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'color',
            2 => 'comment',
            3 => 'contextual',
            4 => 'dashboard',
            5 => 'help',
            6 => 'image',
            7 => 'list',
            8 => 'menu',
            9 => 'number',
            10 => 'options',
            11 => 'path',
            12 => 'taxonomy',
            13 => 'dblog',
            14 => 'search',
            15 => 'shortcut',
            16 => 'toolbar',
            17 => 'overlay',
            18 => 'field_ui',
            19 => 'file',
            20 => 'rdf',
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
          'old_short_name' => 'default',
        ),
        'version' => '7.34',
      ),
    ),
  ),
  'sites-all' => 
  array (
    'modules' => 
    array (
      'breakpoints_theme_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/breakpoints/tests/breakpoints_theme_test.module',
        'basename' => 'breakpoints_theme_test.module',
        'name' => 'breakpoints_theme_test',
        'info' => 
        array (
          'name' => 'Breakpoints Theme Test',
          'description' => 'Test breakpoints provided by themes',
          'package' => 'Other',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.x-1.3',
          'project' => 'breakpoints',
          'datestamp' => '1407507528',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'breakpoints',
        'version' => '7.x-1.3',
      ),
      'breakpoints' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/breakpoints/breakpoints.module',
        'basename' => 'breakpoints.module',
        'name' => 'breakpoints',
        'info' => 
        array (
          'name' => 'Breakpoints',
          'description' => 'Manage breakpoints',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'breakpoints.module',
            1 => 'breakpoints.test',
          ),
          'configure' => 'admin/config/media/breakpoints',
          'version' => '7.x-1.3',
          'project' => 'breakpoints',
          'datestamp' => '1407507528',
          'php' => '5.2.4',
        ),
        'schema_version' => '7102',
        'project' => 'breakpoints',
        'version' => '7.x-1.3',
      ),
      'piwik_reports' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/piwik_reports/piwik_reports.module',
        'basename' => 'piwik_reports.module',
        'name' => 'piwik_reports',
        'info' => 
        array (
          'name' => 'Piwik Reports',
          'description' => 'Adds Piwik reports to Drupal reports section.',
          'core' => '7.x',
          'package' => 'Statistics',
          'version' => '7.x-3.0-rc1',
          'project' => 'piwik_reports',
          'datestamp' => '1348305310',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6000',
        'project' => 'piwik_reports',
        'version' => '7.x-3.0-rc1',
      ),
      'field_views' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/field_views/field_views.module',
        'basename' => 'field_views.module',
        'name' => 'field_views',
        'info' => 
        array (
          'name' => 'Field Views',
          'description' => 'Provides a Field that as a formatter to display a  View',
          'core' => '7.x',
          'version' => '7.x-1.0-alpha2',
          'project' => 'field_views',
          'datestamp' => '1391270906',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'field_views',
        'version' => '7.x-1.0-alpha2',
      ),
      'delta_blocks' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/delta/delta_blocks/delta_blocks.module',
        'basename' => 'delta_blocks.module',
        'name' => 'delta_blocks',
        'info' => 
        array (
          'name' => 'Delta Blocks',
          'description' => 'Exposes a number of core Drupal elements as blocks.',
          'core' => '7.x',
          'version' => '7.x-3.0-beta11',
          'package' => 'Theme Tools',
          'project' => 'delta',
          'datestamp' => '1343161343',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'delta',
        'version' => '7.x-3.0-beta11',
      ),
      'delta_color' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/delta/delta_color/delta_color.module',
        'basename' => 'delta_color.module',
        'name' => 'delta_color',
        'info' => 
        array (
          'name' => 'Delta Color',
          'description' => 'Makes the color module available for Delta templates.',
          'core' => '7.x',
          'version' => '7.x-3.0-beta11',
          'package' => 'Theme Tools',
          'dependencies' => 
          array (
            0 => 'delta',
            1 => 'color',
          ),
          'project' => 'delta',
          'datestamp' => '1343161343',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'delta',
        'version' => '7.x-3.0-beta11',
      ),
      'delta_ui' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/delta/delta_ui/delta_ui.module',
        'basename' => 'delta_ui.module',
        'name' => 'delta_ui',
        'info' => 
        array (
          'name' => 'Delta UI',
          'description' => 'The Delta UI provides a user interface to build and edit the contextual theme settings provided by the Delta module.',
          'package' => 'Theme Tools',
          'core' => '7.x',
          'version' => '7.x-3.0-beta11',
          'dependencies' => 
          array (
            0 => 'delta',
          ),
          'project' => 'delta',
          'datestamp' => '1343161343',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'delta',
        'version' => '7.x-3.0-beta11',
      ),
      'delta' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/delta/delta.module',
        'basename' => 'delta.module',
        'name' => 'delta',
        'info' => 
        array (
          'name' => 'Delta API',
          'description' => 'The Delta module is an advanced manipulation of the Theme Settings API to allow for customization/configuration of theme settings based on node types, context, or groups of paths.',
          'package' => 'Theme Tools',
          'core' => '7.x',
          'version' => '7.x-3.0-beta11',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'project' => 'delta',
          'datestamp' => '1343161343',
          'php' => '5.2.4',
        ),
        'schema_version' => '7304',
        'project' => 'delta',
        'version' => '7.x-3.0-beta11',
      ),
      'plupload' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/plupload/plupload.module',
        'basename' => 'plupload.module',
        'name' => 'plupload',
        'info' => 
        array (
          'name' => 'Plupload integration module',
          'description' => 'Provides a plupload element.',
          'files' => 
          array (
            0 => 'plupload.module',
          ),
          'core' => '7.x',
          'package' => 'Media',
          'version' => '7.x-1.7',
          'project' => 'plupload',
          'datestamp' => '1415390716',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'plupload',
        'version' => '7.x-1.7',
      ),
      'roleassign' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/roleassign/roleassign.module',
        'basename' => 'roleassign.module',
        'name' => 'roleassign',
        'info' => 
        array (
          'name' => 'RoleAssign',
          'description' => 'Allows site administrators to further delegate the task of managing user\'s roles.',
          'core' => '7.x',
          'configure' => 'admin/people/permissions/roleassign',
          'version' => '7.x-1.0',
          'project' => 'roleassign',
          'datestamp' => '1352043133',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'roleassign',
        'version' => '7.x-1.0',
      ),
      'responsive_menus' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/responsive_menus/responsive_menus.module',
        'basename' => 'responsive_menus.module',
        'name' => 'responsive_menus',
        'info' => 
        array (
          'name' => 'Responsive Menus',
          'description' => 'Responsify any menu using CSS Selectors.',
          'package' => 'User interface',
          'core' => '7.x',
          'configure' => 'admin/config/user-interface/responsive_menus',
          'version' => '7.x-1.5',
          'project' => 'responsive_menus',
          'datestamp' => '1391733209',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'responsive_menus',
        'version' => '7.x-1.5',
      ),
      'invisimail' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/invisimail/invisimail.module',
        'basename' => 'invisimail.module',
        'name' => 'invisimail',
        'info' => 
        array (
          'name' => 'Invisimail',
          'description' => 'Attempts to thwart spam-bots by encoding email addresses.',
          'dependencies' => 
          array (
            0 => 'filter',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'invisimail.module',
          ),
          'version' => '7.x-1.1',
          'project' => 'invisimail',
          'datestamp' => '1294290657',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'invisimail',
        'version' => '7.x-1.1',
      ),
      'strongarm' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/strongarm/strongarm.module',
        'basename' => 'strongarm.module',
        'name' => 'strongarm',
        'info' => 
        array (
          'name' => 'Strongarm',
          'description' => 'Enforces variable values defined by modules that need settings set to operate properly.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'strongarm.admin.inc',
            1 => 'strongarm.install',
            2 => 'strongarm.module',
          ),
          'version' => '7.x-2.0',
          'project' => 'strongarm',
          'datestamp' => '1339604214',
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'project' => 'strongarm',
        'version' => '7.x-2.0',
      ),
      'menu_token' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/menu_token/menu_token.module',
        'basename' => 'menu_token.module',
        'name' => 'menu_token',
        'info' => 
        array (
          'name' => 'Menu Token',
          'description' => 'Provides tokens in menu items (links).',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'menu',
            1 => 'entity',
            2 => 'token',
            3 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'menu_token.test',
          ),
          'configure' => 'admin/config/menu_token',
          'version' => '7.x-1.0-beta5',
          'project' => 'menu_token',
          'datestamp' => '1371232255',
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'menu_token',
        'version' => '7.x-1.0-beta5',
      ),
      'menu_block_export' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/menu_block/menu_block_export.module',
        'basename' => 'menu_block_export.module',
        'name' => 'menu_block_export',
        'info' => 
        array (
          'name' => 'Menu Block Export',
          'description' => 'Provides export interface for Menu block module.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'menu_block',
          ),
          'files' => 
          array (
            0 => 'menu_block_export.module',
            1 => 'menu_block_export.admin.inc',
          ),
          'configure' => 'admin/config/user-interface/menu-block/export',
          'version' => '7.x-2.4',
          'project' => 'menu_block',
          'datestamp' => '1399238030',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'menu_block',
        'version' => '7.x-2.4',
      ),
      'menu_block' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/menu_block/menu_block.module',
        'basename' => 'menu_block.module',
        'name' => 'menu_block',
        'info' => 
        array (
          'name' => 'Menu Block',
          'description' => 'Provides configurable blocks of menu items.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'menu (>7.11)',
          ),
          'configure' => 'admin/config/user-interface/menu-block',
          'version' => '7.x-2.4',
          'project' => 'menu_block',
          'datestamp' => '1399238030',
          'php' => '5.2.4',
        ),
        'schema_version' => '7202',
        'project' => 'menu_block',
        'version' => '7.x-2.4',
      ),
      'appserver' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/appserver/appserver.module',
        'basename' => 'appserver.module',
        'name' => 'appserver',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'features',
            1 => 'field_views',
            2 => 'image',
            3 => 'list',
            4 => 'node_reference',
            5 => 'strongarm',
            6 => 'taxonomy',
            7 => 'taxonomy_view_mode',
            8 => 'views',
            9 => 'votingapi',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'strongarm:strongarm:1',
              1 => 'views:views_default:3.0',
            ),
            'field' => 
            array (
              0 => 'node-app-body',
              1 => 'node-app-field_app_releases',
              2 => 'node-app-field_machine_name',
              3 => 'node-app_release-field_app_description',
              4 => 'node-app_release-field_app_logo',
              5 => 'node-app_release-field_app_manifest',
              6 => 'node-app_release-field_app_screenshot',
              7 => 'node-app_release-field_app_server_type',
              8 => 'taxonomy_term-server_type-field_app_logo',
              9 => 'taxonomy_term-server_type-field_core_version',
              10 => 'taxonomy_term-server_type-field_featured_app',
              11 => 'taxonomy_term-server_type-field_view',
            ),
            'node' => 
            array (
              0 => 'app',
              1 => 'app_release',
            ),
            'taxonomy' => 
            array (
              0 => 'server_type',
            ),
            'variable' => 
            array (
              0 => 'comment_anonymous_app',
              1 => 'comment_anonymous_app_release',
              2 => 'comment_app',
              3 => 'comment_app_release',
              4 => 'comment_default_mode_app',
              5 => 'comment_default_mode_app_release',
              6 => 'comment_default_per_page_app',
              7 => 'comment_default_per_page_app_release',
              8 => 'comment_form_location_app',
              9 => 'comment_form_location_app_release',
              10 => 'comment_preview_app',
              11 => 'comment_preview_app_release',
              12 => 'comment_subject_field_app',
              13 => 'comment_subject_field_app_release',
              14 => 'language_content_type_app',
              15 => 'language_content_type_app_release',
              16 => 'menu_options_app',
              17 => 'menu_options_app_release',
              18 => 'menu_parent_app',
              19 => 'menu_parent_app_release',
              20 => 'node_options_app',
              21 => 'node_options_app_release',
              22 => 'node_preview_app',
              23 => 'node_preview_app_release',
              24 => 'node_submitted_app',
              25 => 'node_submitted_app_release',
            ),
            'views_view' => 
            array (
              0 => 'apps',
              1 => 'appservers',
            ),
          ),
          'name' => 'App Server',
          'package' => 'App Store',
          'php' => '5.2.4',
          'version' => '7.x-1.0-beta3',
          'project' => 'appserver',
          'datestamp' => '1332207937',
          'description' => '',
        ),
        'schema_version' => 0,
        'project' => 'appserver',
        'version' => '7.x-1.0-beta3',
      ),
      'customer_profile_type_ui' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/customer_profile_type_ui/customer_profile_type_ui.module',
        'basename' => 'customer_profile_type_ui.module',
        'name' => 'customer_profile_type_ui',
        'info' => 
        array (
          'name' => 'Customer Profile Type UI',
          'description' => 'Provides the ability to dynamically add new customer profile types for the commerce module. Also, defines new rules events and actions to disable customer profile panes.',
          'package' => 'Commerce (contrib)',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'commerce_customer_ui',
          ),
          'files' => 
          array (
            0 => 'customer_profile_type_ui.module',
            1 => 'includes/customer_profile_type_ui.ui.inc',
            2 => 'includes/customer_profile_type_ui.checkout_pane.inc',
            3 => 'customer_profile_type_ui.rules.inc',
          ),
          'version' => '7.x-1.0',
          'project' => 'customer_profile_type_ui',
          'datestamp' => '1359936335',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'customer_profile_type_ui',
        'version' => '7.x-1.0',
      ),
      'gravatar' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/gravatar/gravatar.module',
        'basename' => 'gravatar.module',
        'name' => 'gravatar',
        'info' => 
        array (
          'name' => 'Gravatar',
          'description' => 'Integrate Gravatar pictures registered at Gravatar.com in Drupal sites',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'gravatar.module',
            1 => 'gravatar.install',
            2 => 'gravatar.admin.inc',
          ),
          'configure' => 'admin/config/people/gravatar',
          'version' => '7.x-1.1',
          'project' => 'gravatar',
          'datestamp' => '1297971182',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6000',
        'project' => 'gravatar',
        'version' => '7.x-1.1',
      ),
      'context_get' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/context_get/context_get.module',
        'basename' => 'context_get.module',
        'name' => 'context_get',
        'info' => 
        array (
          'name' => 'Context Get',
          'description' => 'Provides a context condition plugin based on $_GET parameters',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'context',
          ),
          'version' => '7.x-1.2',
          'project' => 'context_get',
          'datestamp' => '1357207341',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'context_get',
        'version' => '7.x-1.2',
      ),
      'flexslider_views' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/flexslider/flexslider_views/flexslider_views.module',
        'basename' => 'flexslider_views.module',
        'name' => 'flexslider_views',
        'info' => 
        array (
          'name' => 'FlexSlider Views Style',
          'description' => 'Adds a Views style plugin for FlexSlider',
          'core' => '7.x',
          'package' => 'FlexSlider',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'flexslider',
          ),
          'files' => 
          array (
            0 => 'flexslider_views.module',
            1 => 'flexslider_views.views.inc',
            2 => 'flexslider_views_plugin_style_flexslider.inc',
          ),
          'version' => '7.x-2.0-alpha3',
          'project' => 'flexslider',
          'datestamp' => '1378663043',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'flexslider',
        'version' => '7.x-2.0-alpha3',
      ),
      'flexslider_fields' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/flexslider/flexslider_fields/flexslider_fields.module',
        'basename' => 'flexslider_fields.module',
        'name' => 'flexslider_fields',
        'info' => 
        array (
          'name' => 'FlexSlider Fields',
          'description' => 'Adds a display mode in Fields for FlexSlider',
          'core' => '7.x',
          'package' => 'FlexSlider',
          'dependencies' => 
          array (
            0 => 'flexslider',
          ),
          'version' => '7.x-2.0-alpha3',
          'project' => 'flexslider',
          'datestamp' => '1378663043',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'flexslider',
        'version' => '7.x-2.0-alpha3',
      ),
      'flexslider_example' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/flexslider/flexslider_example/flexslider_example.module',
        'basename' => 'flexslider_example.module',
        'name' => 'flexslider_example',
        'info' => 
        array (
          'name' => 'FlexSlider Example',
          'description' => 'Sample implementation of FlexSlider',
          'core' => '7.x',
          'package' => 'FlexSlider',
          'php' => '5.2.4',
          'dependencies' => 
          array (
            0 => 'context',
            1 => 'features',
            2 => 'flexslider',
            3 => 'flexslider_fields',
            4 => 'flexslider_views',
            5 => 'image',
            6 => 'menu',
            7 => 'strongarm',
            8 => 'views',
          ),
          'features' => 
          array (
            'context' => 
            array (
              0 => 'flexslider_example_thumbnail',
            ),
            'ctools' => 
            array (
              0 => 'context:context:3',
              1 => 'flexslider:flexslider_default_preset:1',
              2 => 'strongarm:strongarm:1',
              3 => 'views:views_default:3.0',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'field' => 
            array (
              0 => 'node-flexslider_example-field_flexslider_example_image',
              1 => 'node-flexslider_example-field_flexslider_example_slidesh',
            ),
            'flexslider_optionset' => 
            array (
              0 => 'flexslider_carousel_with_min_and_max_ranges',
              1 => 'flexslider_default_basic_carousel',
              2 => 'flexslider_default_slider_thumbnail_controlnav',
              3 => 'flexslider_default_slider_w_thumbnail_slider',
              4 => 'flexslider_default_thumbnail_captions',
              5 => 'flexslider_default_thumbnail_slider',
            ),
            'menu_custom' => 
            array (
              0 => 'menu-flexslider-example',
            ),
            'node' => 
            array (
              0 => 'flexslider_example',
            ),
            'variable' => 
            array (
              0 => 'field_bundle_settings_node__flexslider_example',
            ),
            'views_view' => 
            array (
              0 => 'flexslider_views_example',
            ),
          ),
          'version' => '7.x-2.0-alpha3',
          'project' => 'flexslider',
          'datestamp' => '1378663043',
        ),
        'schema_version' => '7001',
        'project' => 'flexslider',
        'version' => '7.x-2.0-alpha3',
      ),
      'flexslider' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/flexslider/flexslider.module',
        'basename' => 'flexslider.module',
        'name' => 'flexslider',
        'info' => 
        array (
          'name' => 'FlexSlider',
          'description' => 'Integrate the FlexSlider 2 library with Drupal',
          'core' => '7.x',
          'package' => 'FlexSlider',
          'dependencies' => 
          array (
            0 => 'libraries (>=2.x)',
            1 => 'ctools',
            2 => 'image',
          ),
          'files' => 
          array (
            0 => 'theme/flexslider.theme.inc',
            1 => 'flexslider.test',
          ),
          'configure' => 'admin/config/media/flexslider',
          'version' => '7.x-2.0-alpha3',
          'project' => 'flexslider',
          'datestamp' => '1378663043',
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'project' => 'flexslider',
        'version' => '7.x-2.0-alpha3',
      ),
      'token_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/token/tests/token_test.module',
        'basename' => 'token_test.module',
        'name' => 'token_test',
        'info' => 
        array (
          'name' => 'Token Test',
          'description' => 'Testing module for token functionality.',
          'package' => 'Testing',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'token_test.module',
          ),
          'hidden' => true,
          'version' => '7.x-1.5',
          'project' => 'token',
          'datestamp' => '1361665026',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'token',
        'version' => '7.x-1.5',
      ),
      'token' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/token/token.module',
        'basename' => 'token.module',
        'name' => 'token',
        'info' => 
        array (
          'name' => 'Token',
          'description' => 'Provides a user interface for the Token API and some missing core tokens.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'token.test',
          ),
          'version' => '7.x-1.5',
          'project' => 'token',
          'datestamp' => '1361665026',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'token',
        'version' => '7.x-1.5',
      ),
      'devel_generate' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/devel/devel_generate/devel_generate.module',
        'basename' => 'devel_generate.module',
        'name' => 'devel_generate',
        'info' => 
        array (
          'name' => 'Devel generate',
          'description' => 'Generate dummy users, nodes, and taxonomy terms.',
          'package' => 'Development',
          'core' => '7.x',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'configure' => 'admin/config/development/generate',
          'files' => 
          array (
            0 => 'devel_generate.test',
          ),
          'version' => '7.x-1.5',
          'project' => 'devel',
          'datestamp' => '1398963366',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'devel',
        'version' => '7.x-1.5',
      ),
      'devel' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/devel/devel.module',
        'basename' => 'devel.module',
        'name' => 'devel',
        'info' => 
        array (
          'name' => 'Devel',
          'description' => 'Various blocks, pages, and functions for developers.',
          'package' => 'Development',
          'core' => '7.x',
          'configure' => 'admin/config/development/devel',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'files' => 
          array (
            0 => 'devel.test',
            1 => 'devel.mail.inc',
          ),
          'version' => '7.x-1.5',
          'project' => 'devel',
          'datestamp' => '1398963366',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7006',
        'project' => 'devel',
        'version' => '7.x-1.5',
      ),
      'devel_node_access' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/devel/devel_node_access.module',
        'basename' => 'devel_node_access.module',
        'name' => 'devel_node_access',
        'info' => 
        array (
          'name' => 'Devel node access',
          'description' => 'Developer blocks and page illustrating relevant node_access records.',
          'package' => 'Development',
          'dependencies' => 
          array (
            0 => 'menu',
          ),
          'core' => '7.x',
          'configure' => 'admin/config/development/devel',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'version' => '7.x-1.5',
          'project' => 'devel',
          'datestamp' => '1398963366',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'devel',
        'version' => '7.x-1.5',
      ),
      'apps_compatible' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/apps_compatible/apps_compatible.module',
        'basename' => 'apps_compatible.module',
        'name' => 'apps_compatible',
        'info' => 
        array (
          'name' => 'Apps compatible',
          'description' => 'Enable multiple apps to share components.',
          'core' => '7.x',
          'version' => '7.x-1.0-alpha3',
          'project' => 'apps_compatible',
          'datestamp' => '1347483141',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'apps_compatible',
        'version' => '7.x-1.0-alpha3',
      ),
      'logintoboggan_content_access_integration' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/logintoboggan/contrib/logintoboggan_content_access_integration/logintoboggan_content_access_integration.module',
        'basename' => 'logintoboggan_content_access_integration.module',
        'name' => 'logintoboggan_content_access_integration',
        'info' => 
        array (
          'name' => 'LoginToboggan Content Access Integration',
          'description' => 'Integrates LoginToboggan with Content Access module, so that Non-validated users are handled correctly',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'logintoboggan',
            1 => 'content_access',
          ),
          'version' => '7.x-1.4',
          'project' => 'logintoboggan',
          'datestamp' => '1404818634',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'logintoboggan',
        'version' => '7.x-1.4',
      ),
      'logintoboggan_variable' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/logintoboggan/contrib/logintoboggan_variable/logintoboggan_variable.module',
        'basename' => 'logintoboggan_variable.module',
        'name' => 'logintoboggan_variable',
        'info' => 
        array (
          'name' => 'LoginToboggan Variable Integration',
          'description' => 'Integrates LoginToboggan with Variable module',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'logintoboggan',
            1 => 'variable',
          ),
          'version' => '7.x-1.4',
          'project' => 'logintoboggan',
          'datestamp' => '1404818634',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'logintoboggan',
        'version' => '7.x-1.4',
      ),
      'logintoboggan_rules' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/logintoboggan/contrib/logintoboggan_rules/logintoboggan_rules.module',
        'basename' => 'logintoboggan_rules.module',
        'name' => 'logintoboggan_rules',
        'info' => 
        array (
          'name' => 'LoginToboggan Rules Integration',
          'description' => 'Integrates LoginToboggan with Rules module',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'logintoboggan',
            1 => 'rules',
          ),
          'version' => '7.x-1.4',
          'project' => 'logintoboggan',
          'datestamp' => '1404818634',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'logintoboggan',
        'version' => '7.x-1.4',
      ),
      'logintoboggan' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/logintoboggan/logintoboggan.module',
        'basename' => 'logintoboggan.module',
        'name' => 'logintoboggan',
        'info' => 
        array (
          'name' => 'LoginToboggan',
          'description' => 'Improves Drupal\'s login system.',
          'core' => '7.x',
          'configure' => 'admin/config/system/logintoboggan',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'logintoboggan.css',
            ),
          ),
          'version' => '7.x-1.4',
          'project' => 'logintoboggan',
          'datestamp' => '1404818634',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'logintoboggan',
        'version' => '7.x-1.4',
      ),
      'feeds_tests' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/feeds/tests/feeds_tests.module',
        'basename' => 'feeds_tests.module',
        'name' => 'feeds_tests',
        'info' => 
        array (
          'name' => 'Feeds module tests',
          'description' => 'Support module for Feeds related testing.',
          'package' => 'Testing',
          'version' => '7.x-2.0-alpha8',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'feeds_test.module',
          ),
          'hidden' => true,
          'project' => 'feeds',
          'datestamp' => '1366671911',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'feeds',
        'version' => '7.x-2.0-alpha8',
      ),
      'feeds_ui' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/feeds/feeds_ui/feeds_ui.module',
        'basename' => 'feeds_ui.module',
        'name' => 'feeds_ui',
        'info' => 
        array (
          'name' => 'Feeds Admin UI',
          'description' => 'Administrative UI for Feeds module.',
          'package' => 'Feeds',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'feeds',
          ),
          'configure' => 'admin/structure/feeds',
          'files' => 
          array (
            0 => 'feeds_ui.test',
          ),
          'version' => '7.x-2.0-alpha8',
          'project' => 'feeds',
          'datestamp' => '1366671911',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'feeds',
        'version' => '7.x-2.0-alpha8',
      ),
      'feeds_news' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/feeds/feeds_news/feeds_news.module',
        'basename' => 'feeds_news.module',
        'name' => 'feeds_news',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'features',
            1 => 'feeds',
            2 => 'views',
          ),
          'description' => 'A news aggregator built with feeds, creates nodes from imported feed items. With OPML import.',
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'feeds:feeds_importer_default:1',
              1 => 'views:views_default:3.0',
            ),
            'feeds_importer' => 
            array (
              0 => 'feed',
              1 => 'opml',
            ),
            'field' => 
            array (
              0 => 'node-feed_item-field_feed_item_description',
            ),
            'node' => 
            array (
              0 => 'feed',
              1 => 'feed_item',
            ),
            'views_view' => 
            array (
              0 => 'feeds_defaults_feed_items',
            ),
          ),
          'files' => 
          array (
            0 => 'feeds_news.module',
            1 => 'feeds_news.test',
          ),
          'name' => 'Feeds News',
          'package' => 'Feeds',
          'php' => '5.2.4',
          'version' => '7.x-2.0-alpha8',
          'project' => 'feeds',
          'datestamp' => '1366671911',
        ),
        'schema_version' => 0,
        'project' => 'feeds',
        'version' => '7.x-2.0-alpha8',
      ),
      'feeds_import' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/feeds/feeds_import/feeds_import.module',
        'basename' => 'feeds_import.module',
        'name' => 'feeds_import',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'feeds',
          ),
          'description' => 'An example of a node importer and a user importer.',
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'feeds:feeds_importer_default:1',
            ),
            'feeds_importer' => 
            array (
              0 => 'node',
              1 => 'user',
            ),
          ),
          'files' => 
          array (
            0 => 'feeds_import.test',
          ),
          'name' => 'Feeds Import',
          'package' => 'Feeds',
          'php' => '5.2.4',
          'version' => '7.x-2.0-alpha8',
          'project' => 'feeds',
          'datestamp' => '1366671911',
        ),
        'schema_version' => 0,
        'project' => 'feeds',
        'version' => '7.x-2.0-alpha8',
      ),
      'feeds' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/feeds/feeds.module',
        'basename' => 'feeds.module',
        'name' => 'feeds',
        'info' => 
        array (
          'name' => 'Feeds',
          'description' => 'Aggregates RSS/Atom/RDF feeds, imports CSV files and more.',
          'package' => 'Feeds',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'job_scheduler',
          ),
          'files' => 
          array (
            0 => 'includes/FeedsConfigurable.inc',
            1 => 'includes/FeedsImporter.inc',
            2 => 'includes/FeedsSource.inc',
            3 => 'libraries/ParserCSV.inc',
            4 => 'libraries/http_request.inc',
            5 => 'libraries/PuSHSubscriber.inc',
            6 => 'plugins/FeedsCSVParser.inc',
            7 => 'plugins/FeedsFetcher.inc',
            8 => 'plugins/FeedsFileFetcher.inc',
            9 => 'plugins/FeedsHTTPFetcher.inc',
            10 => 'plugins/FeedsNodeProcessor.inc',
            11 => 'plugins/FeedsOPMLParser.inc',
            12 => 'plugins/FeedsParser.inc',
            13 => 'plugins/FeedsPlugin.inc',
            14 => 'plugins/FeedsProcessor.inc',
            15 => 'plugins/FeedsSimplePieParser.inc',
            16 => 'plugins/FeedsSitemapParser.inc',
            17 => 'plugins/FeedsSyndicationParser.inc',
            18 => 'plugins/FeedsTermProcessor.inc',
            19 => 'plugins/FeedsUserProcessor.inc',
            20 => 'tests/feeds.test',
            21 => 'tests/feeds_date_time.test',
            22 => 'tests/feeds_mapper_date.test',
            23 => 'tests/feeds_mapper_date_multiple.test',
            24 => 'tests/feeds_mapper_field.test',
            25 => 'tests/feeds_mapper_file.test',
            26 => 'tests/feeds_mapper_path.test',
            27 => 'tests/feeds_mapper_profile.test',
            28 => 'tests/feeds_mapper.test',
            29 => 'tests/feeds_mapper_config.test',
            30 => 'tests/feeds_fetcher_file.test',
            31 => 'tests/feeds_processor_node.test',
            32 => 'tests/feeds_processor_term.test',
            33 => 'tests/feeds_processor_user.test',
            34 => 'tests/feeds_scheduler.test',
            35 => 'tests/feeds_mapper_link.test',
            36 => 'tests/feeds_mapper_taxonomy.test',
            37 => 'tests/parser_csv.test',
            38 => 'views/feeds_views_handler_argument_importer_id.inc',
            39 => 'views/feeds_views_handler_field_importer_name.inc',
            40 => 'views/feeds_views_handler_field_log_message.inc',
            41 => 'views/feeds_views_handler_field_severity.inc',
            42 => 'views/feeds_views_handler_field_source.inc',
            43 => 'views/feeds_views_handler_filter_severity.inc',
          ),
          'version' => '7.x-2.0-alpha8',
          'project' => 'feeds',
          'datestamp' => '1366671911',
          'php' => '5.2.4',
        ),
        'schema_version' => '7208',
        'project' => 'feeds',
        'version' => '7.x-2.0-alpha8',
      ),
      'stringoverrides' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/stringoverrides/stringoverrides.module',
        'basename' => 'stringoverrides.module',
        'name' => 'stringoverrides',
        'info' => 
        array (
          'name' => 'String Overrides',
          'description' => 'Provides a quick and easy way of replacing text.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'stringoverrides.module',
            1 => 'stringoverrides.install',
            2 => 'stringoverrides.admin.inc',
          ),
          'configure' => 'admin/config/regional/stringoverrides',
          'version' => '7.x-1.8',
          'project' => 'stringoverrides',
          'datestamp' => '1304446316',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'stringoverrides',
        'version' => '7.x-1.8',
      ),
      'stringoverrides_migrate' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/stringoverrides/stringoverrides_migrate.module',
        'basename' => 'stringoverrides_migrate.module',
        'name' => 'stringoverrides_migrate',
        'info' => 
        array (
          'name' => 'String Overrides Migrate',
          'description' => 'Tools for importing and exporting string override settings.',
          'dependencies' => 
          array (
            0 => 'stringoverrides',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'stringoverrides_migrate.module',
            1 => 'stringoverrides_migrate.admin.inc',
          ),
          'version' => '7.x-1.8',
          'project' => 'stringoverrides',
          'datestamp' => '1304446316',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'stringoverrides',
        'version' => '7.x-1.8',
      ),
      'ds_devel' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/ds/modules/ds_devel/ds_devel.module',
        'basename' => 'ds_devel.module',
        'name' => 'ds_devel',
        'info' => 
        array (
          'name' => 'Display Suite Devel',
          'description' => 'Development functionality for Display Suite.',
          'core' => '7.x',
          'package' => 'Display Suite',
          'dependencies' => 
          array (
            0 => 'ds',
            1 => 'devel',
          ),
          'version' => '7.x-2.7',
          'project' => 'ds',
          'datestamp' => '1414483431',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ds',
        'version' => '7.x-2.7',
      ),
      'ds_forms' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/ds/modules/ds_forms/ds_forms.module',
        'basename' => 'ds_forms.module',
        'name' => 'ds_forms',
        'info' => 
        array (
          'name' => 'Display Suite Forms',
          'description' => 'Manage the layout of forms in Display Suite.',
          'core' => '7.x',
          'package' => 'Display Suite',
          'dependencies' => 
          array (
            0 => 'ds',
          ),
          'version' => '7.x-2.7',
          'project' => 'ds',
          'datestamp' => '1414483431',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ds',
        'version' => '7.x-2.7',
      ),
      'ds_ui' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/ds/modules/ds_ui/ds_ui.module',
        'basename' => 'ds_ui.module',
        'name' => 'ds_ui',
        'info' => 
        array (
          'name' => 'Display Suite UI',
          'description' => 'User interface for managing fields, view modes and classes.',
          'core' => '7.x',
          'package' => 'Display Suite',
          'dependencies' => 
          array (
            0 => 'ds',
          ),
          'version' => '7.x-2.7',
          'project' => 'ds',
          'datestamp' => '1414483431',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ds',
        'version' => '7.x-2.7',
      ),
      'ds_format' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/ds/modules/ds_format/ds_format.module',
        'basename' => 'ds_format.module',
        'name' => 'ds_format',
        'info' => 
        array (
          'name' => 'Display Suite Format',
          'description' => 'Provides the Display Suite Code format filter.',
          'core' => '7.x',
          'package' => 'Display Suite',
          'dependencies' => 
          array (
            0 => 'ds',
          ),
          'configure' => 'admin/structure/ds/list/extras',
          'version' => '7.x-2.7',
          'project' => 'ds',
          'datestamp' => '1414483431',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ds',
        'version' => '7.x-2.7',
      ),
      'ds_extras' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/ds/modules/ds_extras/ds_extras.module',
        'basename' => 'ds_extras.module',
        'name' => 'ds_extras',
        'info' => 
        array (
          'name' => 'Display Suite Extras',
          'description' => 'Contains additional features for Display Suite.',
          'core' => '7.x',
          'package' => 'Display Suite',
          'dependencies' => 
          array (
            0 => 'ds',
          ),
          'configure' => 'admin/structure/ds/list/extras',
          'version' => '7.x-2.7',
          'project' => 'ds',
          'datestamp' => '1414483431',
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'ds',
        'version' => '7.x-2.7',
      ),
      'ds_search' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/ds/modules/ds_search/ds_search.module',
        'basename' => 'ds_search.module',
        'name' => 'ds_search',
        'info' => 
        array (
          'name' => 'Display Suite Search',
          'description' => 'Extend the display options for search results for Drupal Core or Apache Solr.',
          'core' => '7.x',
          'package' => 'Display Suite',
          'dependencies' => 
          array (
            0 => 'ds',
          ),
          'configure' => 'admin/structure/ds/list/search',
          'version' => '7.x-2.7',
          'project' => 'ds',
          'datestamp' => '1414483431',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ds',
        'version' => '7.x-2.7',
      ),
      'ds_exportables_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/ds/tests/ds_exportables_test/ds_exportables_test.module',
        'basename' => 'ds_exportables_test.module',
        'name' => 'ds_exportables_test',
        'info' => 
        array (
          'name' => 'Display Suite exportables test',
          'description' => 'Tests for exportables with Display Suite.',
          'package' => 'Display Suite',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.x-2.7',
          'project' => 'ds',
          'datestamp' => '1414483431',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ds',
        'version' => '7.x-2.7',
      ),
      'ds_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/ds/tests/ds_test.module',
        'basename' => 'ds_test.module',
        'name' => 'ds_test',
        'info' => 
        array (
          'name' => 'Display Suite Test',
          'description' => 'Test module for Display Suite',
          'core' => '7.x',
          'package' => 'Display Suite',
          'dependencies' => 
          array (
            0 => 'ds_extras',
          ),
          'hidden' => true,
          'version' => '7.x-2.7',
          'project' => 'ds',
          'datestamp' => '1414483431',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ds',
        'version' => '7.x-2.7',
      ),
      'ds' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/ds/ds.module',
        'basename' => 'ds.module',
        'name' => 'ds',
        'info' => 
        array (
          'name' => 'Display Suite',
          'description' => 'Extend the display options for every entity type.',
          'core' => '7.x',
          'package' => 'Display Suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'views/views_plugin_ds_entity_view.inc',
            1 => 'views/views_plugin_ds_fields_view.inc',
            2 => 'tests/ds.base.test',
            3 => 'tests/ds.search.test',
            4 => 'tests/ds.entities.test',
            5 => 'tests/ds.exportables.test',
            6 => 'tests/ds.views.test',
            7 => 'tests/ds.forms.test',
          ),
          'configure' => 'admin/structure/ds',
          'version' => '7.x-2.7',
          'project' => 'ds',
          'datestamp' => '1414483431',
          'php' => '5.2.4',
        ),
        'schema_version' => '7202',
        'project' => 'ds',
        'version' => '7.x-2.7',
      ),
      'bean_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/bean/tests/bean_test.module',
        'basename' => 'bean_test.module',
        'name' => 'bean_test',
        'info' => 
        array (
          'name' => 'Bean Test',
          'description' => 'Creates test plugins for bean',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'bean',
          ),
          'files' => 
          array (
            0 => 'bean_test.module',
          ),
          'hidden' => true,
          'version' => '7.x-1.8',
          'project' => 'bean',
          'datestamp' => '1412260740',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'bean',
        'version' => '7.x-1.8',
      ),
      'bean_admin_ui' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/bean/bean_admin_ui/bean_admin_ui.module',
        'basename' => 'bean_admin_ui.module',
        'name' => 'bean_admin_ui',
        'info' => 
        array (
          'name' => 'Bean Admin UI',
          'description' => 'Add the ability to create Block Types in the UI',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'bean_admin_ui.module',
            1 => 'plugins/BeanCustom.class.php',
          ),
          'dependencies' => 
          array (
            0 => 'bean',
          ),
          'configure' => 'admin/structure/block-types',
          'package' => 'Bean',
          'version' => '7.x-1.8',
          'project' => 'bean',
          'datestamp' => '1412260740',
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'bean',
        'version' => '7.x-1.8',
      ),
      'bean_entitycache' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/bean/bean_entitycache/bean_entitycache.module',
        'basename' => 'bean_entitycache.module',
        'name' => 'bean_entitycache',
        'info' => 
        array (
          'name' => 'Bean - Entitycache',
          'description' => 'Integrates the Bean module with the Entitycache module',
          'core' => '7.x',
          'package' => 'Performance and scalability',
          'dependencies' => 
          array (
            0 => 'bean',
            1 => 'entitycache',
          ),
          'version' => '7.x-1.8',
          'project' => 'bean',
          'datestamp' => '1412260740',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'bean',
        'version' => '7.x-1.8',
      ),
      'bean_uuid' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/bean/bean_uuid/bean_uuid.module',
        'basename' => 'bean_uuid.module',
        'name' => 'bean_uuid',
        'info' => 
        array (
          'name' => 'Bean UUID',
          'description' => 'Allow deploying bean blocks through Deploy and UUID modules.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'bean',
            1 => 'uuid',
          ),
          'package' => 'Bean',
          'version' => '7.x-1.8',
          'project' => 'bean',
          'datestamp' => '1412260740',
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'project' => 'bean',
        'version' => '7.x-1.8',
      ),
      'bean_all' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/bean/bean_all/bean_all.module',
        'basename' => 'bean_all.module',
        'name' => 'bean_all',
        'info' => 
        array (
          'name' => 'Bean All',
          'description' => 'Integrate all blocks with beans.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'plugins/all.inc',
          ),
          'dependencies' => 
          array (
            0 => 'bean',
            1 => 'block',
            2 => 'menu',
          ),
          'package' => 'Bean',
          'version' => '7.x-1.8',
          'project' => 'bean',
          'datestamp' => '1412260740',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'bean',
        'version' => '7.x-1.8',
      ),
      'bean_usage' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/bean/bean_usage/bean_usage.module',
        'basename' => 'bean_usage.module',
        'name' => 'bean_usage',
        'info' => 
        array (
          'name' => 'Bean Usage',
          'description' => 'View Bean (Block Entities) Usage',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'bean',
            1 => 'blockreference',
          ),
          'package' => 'Bean',
          'version' => '7.x-1.8',
          'project' => 'bean',
          'datestamp' => '1412260740',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'bean',
        'version' => '7.x-1.8',
      ),
      'bean' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/bean/bean.module',
        'basename' => 'bean.module',
        'name' => 'bean',
        'info' => 
        array (
          'name' => 'Bean',
          'description' => 'Create Bean (Block Entities)',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/bean.core.inc',
            1 => 'includes/bean.info.inc',
            2 => 'plugins/BeanPlugin.class.php',
            3 => 'plugins/BeanDefault.class.php',
            4 => 'includes/translation.handler.bean.inc',
            5 => 'views/views_handler_filter_bean_type.inc',
            6 => 'views/views_handler_field_bean_type.inc',
            7 => 'views/views_handler_field_bean_edit_link.inc',
            8 => 'views/views_handler_field_bean_delete_link.inc',
            9 => 'views/views_handler_field_bean_operations.inc',
            10 => 'bean.test',
          ),
          'dependencies' => 
          array (
            0 => 'entity',
            1 => 'ctools',
          ),
          'package' => 'Bean',
          'version' => '7.x-1.8',
          'project' => 'bean',
          'datestamp' => '1412260740',
          'php' => '5.2.4',
        ),
        'schema_version' => '7012',
        'project' => 'bean',
        'version' => '7.x-1.8',
      ),
      'webform' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/webform/webform.module',
        'basename' => 'webform.module',
        'name' => 'webform',
        'info' => 
        array (
          'name' => 'Webform',
          'description' => 'Enables the creation of forms and questionnaires.',
          'core' => '7.x',
          'package' => 'Webform',
          'configure' => 'admin/config/content/webform',
          'php' => '5.3',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'views',
          ),
          'test_dependencies' => 
          array (
            0 => 'token',
          ),
          'files' => 
          array (
            0 => 'includes/exporters/webform_exporter_delimited.inc',
            1 => 'includes/exporters/webform_exporter_excel_delimited.inc',
            2 => 'includes/exporters/webform_exporter_excel_xlsx.inc',
            3 => 'includes/exporters/webform_exporter.inc',
            4 => 'views/webform_handler_field_form_body.inc',
            5 => 'views/webform_handler_field_is_draft.inc',
            6 => 'views/webform_handler_field_node_link_edit.inc',
            7 => 'views/webform_handler_field_node_link_results.inc',
            8 => 'views/webform_handler_field_submission_count.inc',
            9 => 'views/webform_handler_field_submission_data.inc',
            10 => 'views/webform_handler_field_submission_link.inc',
            11 => 'views/webform_handler_field_webform_status.inc',
            12 => 'views/webform_handler_filter_is_draft.inc',
            13 => 'views/webform_handler_filter_submission_data.inc',
            14 => 'views/webform_handler_filter_webform_status.inc',
            15 => 'views/webform_handler_area_result_pager.inc',
            16 => 'views/webform_plugin_row_submission_view.inc',
            17 => 'views/webform_handler_relationship_submission_data.inc',
            18 => 'views/webform.views.inc',
            19 => 'tests/components.test',
            20 => 'tests/conditionals.test',
            21 => 'tests/permissions.test',
            22 => 'tests/submission.test',
            23 => 'tests/webform.test',
          ),
          'version' => '7.x-4.2',
          'project' => 'webform',
          'datestamp' => '1416925905',
        ),
        'schema_version' => '7420',
        'project' => 'webform',
        'version' => '7.x-4.2',
      ),
      'fserver' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/fserver/fserver.module',
        'basename' => 'fserver.module',
        'name' => 'fserver',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'features',
            1 => 'file',
            2 => 'list',
            3 => 'menu',
            4 => 'nodereference_url',
            5 => 'number',
            6 => 'strongarm',
            7 => 'views',
          ),
          'description' => 'Provides feature projects and releases.',
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'strongarm:strongarm:1',
              1 => 'views:views_default:3.0',
            ),
            'field' => 
            array (
              0 => 'node-fserver_distro-field_fserver_drushmake',
              1 => 'node-fserver_distro-field_fserver_name',
              2 => 'node-fserver_project-body',
              3 => 'node-fserver_project-field_fserver_method',
              4 => 'node-fserver_project-field_fserver_name',
              5 => 'node-fserver_project-field_fserver_redirect',
              6 => 'node-fserver_project-field_fserver_repository',
              7 => 'node-fserver_project-field_fserver_type',
              8 => 'node-fserver_release-body',
              9 => 'node-fserver_release-field_fserver_api',
              10 => 'node-fserver_release-field_fserver_file',
              11 => 'node-fserver_release-field_fserver_project',
              12 => 'node-fserver_release-field_fserver_recommended',
              13 => 'node-fserver_release-field_fserver_security',
              14 => 'node-fserver_release-field_fserver_versionextra',
              15 => 'node-fserver_release-field_fserver_versionextranum',
              16 => 'node-fserver_release-field_fserver_versionextratype',
              17 => 'node-fserver_release-field_fserver_versionmajor',
              18 => 'node-fserver_release-field_fserver_versionpatch',
            ),
            'node' => 
            array (
              0 => 'fserver_distro',
              1 => 'fserver_project',
              2 => 'fserver_release',
            ),
            'views_view' => 
            array (
              0 => 'fserver_projects',
              1 => 'fserver_release_lookup',
              2 => 'fserver_releases',
              3 => 'fserver_updates',
            ),
          ),
          'files' => 
          array (
            0 => 'fserver.drush.inc',
            1 => 'tests/fserver.test',
            2 => 'views/fserver_handler_field_mdhash.inc',
            3 => 'views/fserver_handler_field_release_tag.inc',
            4 => 'views/fserver_handler_sort_release_tag.inc',
            5 => 'views/fserver_plugin_style_updatexml.inc',
          ),
          'name' => 'Feature Server',
          'package' => 'Features',
          'php' => '5.2.4',
          'version' => '7.x-1.x-dev',
          'project' => 'fserver',
          'datestamp' => '1380580272',
        ),
        'schema_version' => '6001',
        'project' => 'fserver',
        'version' => '7.x-1.x-dev',
      ),
      'sharethis' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/sharethis/sharethis.module',
        'basename' => 'sharethis.module',
        'name' => 'sharethis',
        'info' => 
        array (
          'name' => 'ShareThis',
          'description' => 'Add the <a href="http://www.sharethis.com/">ShareThis</a> widget to nodes on your site.',
          'core' => '7.x',
          'package' => 'Sharing',
          'configure' => 'admin/config/services/sharethis',
          'files' => 
          array (
            0 => 'views/sharethis_handler_field_link.inc',
          ),
          'version' => '7.x-2.9',
          'project' => 'sharethis',
          'datestamp' => '1406878150',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'sharethis',
        'version' => '7.x-2.9',
      ),
      'entity_translation_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/entity_translation/tests/entity_translation_test.module',
        'basename' => 'entity_translation_test.module',
        'name' => 'entity_translation_test',
        'info' => 
        array (
          'name' => 'Entity Translation testing',
          'description' => 'Tests Entity Translation module functionality. Do not enable.',
          'core' => '7.x',
          'package' => 'Testing',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'entity_translation',
          ),
          'files' => 
          array (
            0 => 'entity_translation_test.module',
          ),
          'version' => '7.x-1.0-beta3',
          'project' => 'entity_translation',
          'datestamp' => '1374601567',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity_translation',
        'version' => '7.x-1.0-beta3',
      ),
      'entity_translation_i18n_menu' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/entity_translation/entity_translation_i18n_menu/entity_translation_i18n_menu.module',
        'basename' => 'entity_translation_i18n_menu.module',
        'name' => 'entity_translation_i18n_menu',
        'info' => 
        array (
          'name' => 'Entity Translation Menu',
          'description' => 'Allows menu items to be translated on the entity form.',
          'package' => 'Multilingual - Entity Translation',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'entity_translation',
            1 => 'i18n',
            2 => 'i18n_menu',
          ),
          'files' => 
          array (
            0 => 'entity_translation_i18n_menu.test',
          ),
          'version' => '7.x-1.0-beta3',
          'project' => 'entity_translation',
          'datestamp' => '1374601567',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity_translation',
        'version' => '7.x-1.0-beta3',
      ),
      'entity_translation_upgrade' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/entity_translation/entity_translation_upgrade/entity_translation_upgrade.module',
        'basename' => 'entity_translation_upgrade.module',
        'name' => 'entity_translation_upgrade',
        'info' => 
        array (
          'name' => 'Entity Translation Upgrade',
          'description' => 'Provides an upgrade path from node-based translation to field-based translation.',
          'package' => 'Multilingual - Entity Translation',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'entity_translation',
          ),
          'version' => '7.x-1.0-beta3',
          'project' => 'entity_translation',
          'datestamp' => '1374601567',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'entity_translation',
        'version' => '7.x-1.0-beta3',
      ),
      'entity_translation' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/entity_translation/entity_translation.module',
        'basename' => 'entity_translation.module',
        'name' => 'entity_translation',
        'info' => 
        array (
          'name' => 'Entity Translation',
          'description' => 'Allows entities to be translated into different languages.',
          'package' => 'Multilingual - Entity Translation',
          'core' => '7.x',
          'configure' => 'admin/config/regional/entity_translation',
          'dependencies' => 
          array (
            0 => 'locale (>7.14)',
          ),
          'files' => 
          array (
            0 => 'includes/translation.handler.inc',
            1 => 'includes/translation.handler.comment.inc',
            2 => 'includes/translation.handler.node.inc',
            3 => 'includes/translation.handler.taxonomy_term.inc',
            4 => 'includes/translation.handler.user.inc',
            5 => 'tests/entity_translation.test',
            6 => 'views/entity_translation_handler_relationship.inc',
            7 => 'views/entity_translation_handler_field_translate_link.inc',
            8 => 'views/entity_translation_handler_field_label.inc',
            9 => 'views/entity_translation_handler_filter_entity_type.inc',
            10 => 'views/entity_translation_handler_filter_language.inc',
            11 => 'views/entity_translation_handler_filter_translation_exists.inc',
          ),
          'version' => '7.x-1.0-beta3',
          'project' => 'entity_translation',
          'datestamp' => '1374601567',
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'entity_translation',
        'version' => '7.x-1.0-beta3',
      ),
      'base_apps' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/base_apps/base_apps.module',
        'basename' => 'base_apps.module',
        'name' => 'base_apps',
        'info' => 
        array (
          'name' => 'Base Apps',
          'description' => 'Provides base configuration for Apps.',
          'core' => '7.x',
          'package' => 'Base',
          'dependencies' => 
          array (
            0 => 'apps',
            1 => 'base_core',
            2 => 'features',
          ),
          'features' => 
          array (
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'user_permission' => 
            array (
              0 => 'administer apps',
            ),
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'media_youtube' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/media_youtube/media_youtube.module',
        'basename' => 'media_youtube.module',
        'name' => 'media_youtube',
        'info' => 
        array (
          'name' => 'Media: YouTube',
          'description' => 'Provides YouTube support for File Entity and the Media module.',
          'package' => 'Media',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/MediaInternetYouTubeHandler.inc',
            1 => 'includes/MediaYouTubeStreamWrapper.inc',
            2 => 'includes/MediaYouTubeBrowser.inc',
          ),
          'dependencies' => 
          array (
            0 => 'media_internet',
          ),
          'version' => '7.x-2.0-rc4',
          'project' => 'media_youtube',
          'datestamp' => '1382761825',
          'php' => '5.2.4',
        ),
        'schema_version' => '7203',
        'project' => 'media_youtube',
        'version' => '7.x-2.0-rc4',
      ),
      'variable_email' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/variable_email/variable_email.module',
        'basename' => 'variable_email.module',
        'name' => 'variable_email',
        'info' => 
        array (
          'name' => 'Variable Email',
          'description' => 'Send Email using declared variables as templates',
          'package' => 'Other',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'variable',
            1 => 'rules',
          ),
          'version' => '7.x-1.0-alpha1',
          'project' => 'variable_email',
          'datestamp' => '1341934039',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'variable_email',
        'version' => '7.x-1.0-alpha1',
      ),
      'field_collection' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/field_collection/field_collection.module',
        'basename' => 'field_collection.module',
        'name' => 'field_collection',
        'info' => 
        array (
          'name' => 'Field collection',
          'description' => 'Provides a field collection field, to which any number of fields can be attached.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'files' => 
          array (
            0 => 'field_collection.test',
            1 => 'field_collection.info.inc',
            2 => 'views/field_collection_handler_relationship.inc',
            3 => 'field_collection.migrate.inc',
          ),
          'configure' => 'admin/structure/field-collections',
          'package' => 'Fields',
          'version' => '7.x-1.0-beta8',
          'project' => 'field_collection',
          'datestamp' => '1415122384',
          'php' => '5.2.4',
        ),
        'schema_version' => '7006',
        'project' => 'field_collection',
        'version' => '7.x-1.0-beta8',
      ),
      'i18n_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/i18n/tests/i18n_test.module',
        'basename' => 'i18n_test.module',
        'name' => 'i18n_test',
        'info' => 
        array (
          'name' => 'Internationalization tests',
          'description' => 'Helper module for testing i18n (do not enable manually)',
          'dependencies' => 
          array (
            0 => 'locale',
            1 => 'translation',
            2 => 'i18n',
          ),
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.x-1.11',
          'project' => 'i18n',
          'datestamp' => '1397666996',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'i18n',
        'version' => '7.x-1.11',
      ),
      'i18n_block' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/i18n/i18n_block/i18n_block.module',
        'basename' => 'i18n_block.module',
        'name' => 'i18n_block',
        'info' => 
        array (
          'name' => 'Block languages',
          'description' => 'Enables language selector for blocks and optional block translation.',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_block.inc',
            1 => 'i18n_block.test',
          ),
          'version' => '7.x-1.11',
          'project' => 'i18n',
          'datestamp' => '1397666996',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'i18n',
        'version' => '7.x-1.11',
      ),
      'i18n_user' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/i18n/i18n_user/i18n_user.module',
        'basename' => 'i18n_user.module',
        'name' => 'i18n_user',
        'info' => 
        array (
          'name' => 'User mail translation',
          'description' => 'Translate emails sent from the User module.',
          'core' => '7.x',
          'package' => 'Multilingual - Internationalization',
          'dependencies' => 
          array (
            0 => 'i18n_variable',
          ),
          'version' => '7.x-1.11',
          'project' => 'i18n',
          'datestamp' => '1397666996',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'i18n',
        'version' => '7.x-1.11',
      ),
      'i18n_variable' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/i18n/i18n_variable/i18n_variable.module',
        'basename' => 'i18n_variable.module',
        'name' => 'i18n_variable',
        'info' => 
        array (
          'name' => 'Variable translation',
          'description' => 'Multilingual variables that switch language depending on page language.',
          'dependencies' => 
          array (
            0 => 'i18n',
            1 => 'variable_store (7.x-2.x)',
            2 => 'variable_realm (7.x-2.x)',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'configure' => 'admin/config/regional/i18n/variable',
          'files' => 
          array (
            0 => 'i18n_variable.class.inc',
            1 => 'i18n_variable.test',
          ),
          'version' => '7.x-1.11',
          'project' => 'i18n',
          'datestamp' => '1397666996',
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'i18n',
        'version' => '7.x-1.11',
      ),
      'i18n_forum' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/i18n/i18n_forum/i18n_forum.module',
        'basename' => 'i18n_forum.module',
        'name' => 'i18n_forum',
        'info' => 
        array (
          'name' => 'Multilingual forum',
          'description' => 'Enables multilingual forum, translates names and containers.',
          'dependencies' => 
          array (
            0 => 'forum',
            1 => 'i18n_taxonomy',
            2 => 'i18n_node',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_forum.test',
          ),
          'version' => '7.x-1.11',
          'project' => 'i18n',
          'datestamp' => '1397666996',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'i18n',
        'version' => '7.x-1.11',
      ),
      'i18n_path' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/i18n/i18n_path/i18n_path.module',
        'basename' => 'i18n_path.module',
        'name' => 'i18n_path',
        'info' => 
        array (
          'name' => 'Path translation',
          'description' => 'Define translations for generic paths',
          'dependencies' => 
          array (
            0 => 'i18n_translation',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_path.inc',
            1 => 'i18n_path.test',
          ),
          'version' => '7.x-1.11',
          'project' => 'i18n',
          'datestamp' => '1397666996',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'i18n',
        'version' => '7.x-1.11',
      ),
      'i18n_field' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/i18n/i18n_field/i18n_field.module',
        'basename' => 'i18n_field.module',
        'name' => 'i18n_field',
        'info' => 
        array (
          'name' => 'Field translation',
          'description' => 'Translate field properties',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_field.inc',
            1 => 'i18n_field.test',
          ),
          'version' => '7.x-1.11',
          'project' => 'i18n',
          'datestamp' => '1397666996',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'i18n',
        'version' => '7.x-1.11',
      ),
      'i18n_taxonomy' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/i18n/i18n_taxonomy/i18n_taxonomy.module',
        'basename' => 'i18n_taxonomy.module',
        'name' => 'i18n_taxonomy',
        'info' => 
        array (
          'name' => 'Taxonomy translation',
          'description' => 'Enables multilingual taxonomy.',
          'dependencies' => 
          array (
            0 => 'taxonomy',
            1 => 'i18n_string',
            2 => 'i18n_translation',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_taxonomy.inc',
            1 => 'i18n_taxonomy.pages.inc',
            2 => 'i18n_taxonomy.admin.inc',
            3 => 'i18n_taxonomy.test',
          ),
          'version' => '7.x-1.11',
          'project' => 'i18n',
          'datestamp' => '1397666996',
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'i18n',
        'version' => '7.x-1.11',
      ),
      'i18n_string' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/i18n/i18n_string/i18n_string.module',
        'basename' => 'i18n_string.module',
        'name' => 'i18n_string',
        'info' => 
        array (
          'name' => 'String translation',
          'description' => 'Provides support for translation of user defined strings.',
          'dependencies' => 
          array (
            0 => 'locale',
            1 => 'i18n',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_string.admin.inc',
            1 => 'i18n_string.inc',
            2 => 'i18n_string.test',
          ),
          'configure' => 'admin/config/regional/i18n/strings',
          'version' => '7.x-1.11',
          'project' => 'i18n',
          'datestamp' => '1397666996',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'i18n',
        'version' => '7.x-1.11',
      ),
      'i18n_sync' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/i18n/i18n_sync/i18n_sync.module',
        'basename' => 'i18n_sync.module',
        'name' => 'i18n_sync',
        'info' => 
        array (
          'name' => 'Synchronize translations',
          'description' => 'Synchronizes taxonomy and fields accross translations of the same content.',
          'dependencies' => 
          array (
            0 => 'i18n',
            1 => 'translation',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_sync.module',
            1 => 'i18n_sync.install',
            2 => 'i18n_sync.module.inc',
            3 => 'i18n_sync.node.inc',
            4 => 'i18n_sync.test',
          ),
          'version' => '7.x-1.11',
          'project' => 'i18n',
          'datestamp' => '1397666996',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'i18n',
        'version' => '7.x-1.11',
      ),
      'i18n_redirect' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/i18n/i18n_redirect/i18n_redirect.module',
        'basename' => 'i18n_redirect.module',
        'name' => 'i18n_redirect',
        'info' => 
        array (
          'name' => 'Translation redirect',
          'description' => 'Redirect to translated page when available. SEO for multilingual sites.',
          'dependencies' => 
          array (
            0 => 'i18n',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'version' => '7.x-1.11',
          'project' => 'i18n',
          'datestamp' => '1397666996',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'i18n',
        'version' => '7.x-1.11',
      ),
      'i18n_menu' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/i18n/i18n_menu/i18n_menu.module',
        'basename' => 'i18n_menu.module',
        'name' => 'i18n_menu',
        'info' => 
        array (
          'name' => 'Menu translation',
          'description' => 'Supports translatable custom menu items.',
          'dependencies' => 
          array (
            0 => 'i18n',
            1 => 'menu',
            2 => 'i18n_string',
            3 => 'i18n_translation',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_menu.inc',
            1 => 'i18n_menu.test',
          ),
          'version' => '7.x-1.11',
          'project' => 'i18n',
          'datestamp' => '1397666996',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'i18n',
        'version' => '7.x-1.11',
      ),
      'i18n_contact' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/i18n/i18n_contact/i18n_contact.module',
        'basename' => 'i18n_contact.module',
        'name' => 'i18n_contact',
        'info' => 
        array (
          'name' => 'Contact translation',
          'description' => 'Makes contact categories and replies available for translation.',
          'dependencies' => 
          array (
            0 => 'contact',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'version' => '7.x-1.11',
          'project' => 'i18n',
          'datestamp' => '1397666996',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'i18n',
        'version' => '7.x-1.11',
      ),
      'i18n_select' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/i18n/i18n_select/i18n_select.module',
        'basename' => 'i18n_select.module',
        'name' => 'i18n_select',
        'info' => 
        array (
          'name' => 'Multilingual select',
          'description' => 'API module for multilingual content selection',
          'dependencies' => 
          array (
            0 => 'i18n',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'configure' => 'admin/config/regional/i18n/select',
          'files' => 
          array (
            0 => 'i18n_select.test',
          ),
          'version' => '7.x-1.11',
          'project' => 'i18n',
          'datestamp' => '1397666996',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'i18n',
        'version' => '7.x-1.11',
      ),
      'i18n_node' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/i18n/i18n_node/i18n_node.module',
        'basename' => 'i18n_node.module',
        'name' => 'i18n_node',
        'info' => 
        array (
          'name' => 'Multilingual content',
          'description' => 'Extended node options for multilingual content',
          'dependencies' => 
          array (
            0 => 'translation',
            1 => 'i18n',
            2 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'configure' => 'admin/config/regional/i18n/node',
          'files' => 
          array (
            0 => 'i18n_node.test',
            1 => 'i18n_node.variable.inc',
          ),
          'version' => '7.x-1.11',
          'project' => 'i18n',
          'datestamp' => '1397666996',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'i18n',
        'version' => '7.x-1.11',
      ),
      'i18n_translation' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/i18n/i18n_translation/i18n_translation.module',
        'basename' => 'i18n_translation.module',
        'name' => 'i18n_translation',
        'info' => 
        array (
          'name' => 'Translation sets',
          'description' => 'Simple translation sets API for generic objects',
          'dependencies' => 
          array (
            0 => 'i18n',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_translation.inc',
          ),
          'version' => '7.x-1.11',
          'project' => 'i18n',
          'datestamp' => '1397666996',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'i18n',
        'version' => '7.x-1.11',
      ),
      'i18n' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/i18n/i18n.module',
        'basename' => 'i18n.module',
        'name' => 'i18n',
        'info' => 
        array (
          'name' => 'Internationalization',
          'description' => 'Extends Drupal support for multilingual features.',
          'dependencies' => 
          array (
            0 => 'locale',
            1 => 'variable',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_object.inc',
            1 => 'i18n.test',
          ),
          'configure' => 'admin/config/regional/i18n',
          'version' => '7.x-1.11',
          'project' => 'i18n',
          'datestamp' => '1397666996',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'i18n',
        'version' => '7.x-1.11',
      ),
      'gvj_link' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/gvj_link/gvj_link.module',
        'basename' => 'gvj_link.module',
        'name' => 'gvj_link',
        'info' => 
        array (
          'name' => 'GVJ Link',
          'description' => 'A link content type to display links to external websites.',
          'core' => '7.x',
          'package' => 'GVJ',
          'php' => '5.2.4',
          'dependencies' => 
          array (
            0 => 'base_link',
            1 => 'context',
            2 => 'ctools',
            3 => 'features',
            4 => 'media',
            5 => 'pathauto',
            6 => 'strongarm',
            7 => 'views',
          ),
          'features' => 
          array (
            'context' => 
            array (
              0 => 'link-content-type',
            ),
            'ctools' => 
            array (
              0 => 'context:context:3',
              1 => 'strongarm:strongarm:1',
              2 => 'views:views_default:3.0',
            ),
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'field_base' => 
            array (
              0 => 'field_link_category',
              1 => 'field_link_link',
            ),
            'field_instance' => 
            array (
              0 => 'node-link-body',
              1 => 'node-link-field_content_image',
              2 => 'node-link-field_link_category',
              3 => 'node-link-field_link_link',
              4 => 'node-link-title_field',
            ),
            'variable' => 
            array (
              0 => 'pathauto_node_link_pattern',
            ),
            'views_view' => 
            array (
              0 => 'link',
            ),
          ),
          'version' => NULL,
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'filefield_sources' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/filefield_sources/filefield_sources.module',
        'basename' => 'filefield_sources.module',
        'name' => 'filefield_sources',
        'info' => 
        array (
          'name' => 'File Field Sources',
          'description' => 'Extends File fields to allow referencing of existing files, remote files, and server files.',
          'dependencies' => 
          array (
            0 => 'file',
          ),
          'package' => 'Fields',
          'core' => '7.x',
          'version' => '7.x-1.9',
          'project' => 'filefield_sources',
          'datestamp' => '1383155428',
          'php' => '5.2.4',
        ),
        'schema_version' => '6001',
        'project' => 'filefield_sources',
        'version' => '7.x-1.9',
      ),
      'commerce_payment_visanet_peru' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/commerce_payment_visanet_peru/commerce_payment_visanet_peru.module',
        'basename' => 'commerce_payment_visanet_peru.module',
        'name' => 'commerce_payment_visanet_peru',
        'info' => 
        array (
          'name' => 'VisaNet Peru Payment Method',
          'description' => 'Provides a Commerce Payment method for VisaNet Peru - Verified by Visa.',
          'package' => 'Commerce (contrib)',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_payment',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'commerce_payment_visanet_peru.module',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'commerce_product_crud_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/commerce/modules/product/tests/commerce_product_crud_test.module',
        'basename' => 'commerce_product_crud_test.module',
        'name' => 'commerce_product_crud_test',
        'info' => 
        array (
          'name' => 'Commerce product crud test',
          'description' => 'Support module for product related testing.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'rules',
          ),
          'version' => '7.x-1.10',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'commerce',
          'datestamp' => '1410366834',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.10',
      ),
      'commerce_product' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/commerce/modules/product/commerce_product.module',
        'basename' => 'commerce_product.module',
        'name' => 'commerce_product',
        'info' => 
        array (
          'name' => 'Product',
          'description' => 'Defines the Product entity and associated features.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_price',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/commerce_product.controller.inc',
            1 => 'includes/views/handlers/commerce_product_handler_area_empty_text.inc',
            2 => 'includes/views/handlers/commerce_product_handler_argument_product_id.inc',
            3 => 'includes/views/handlers/commerce_product_handler_field_product.inc',
            4 => 'includes/views/handlers/commerce_product_handler_field_product_type.inc',
            5 => 'includes/views/handlers/commerce_product_handler_field_product_link.inc',
            6 => 'includes/views/handlers/commerce_product_handler_field_product_link_delete.inc',
            7 => 'includes/views/handlers/commerce_product_handler_field_product_link_edit.inc',
            8 => 'includes/views/handlers/commerce_product_handler_field_product_operations.inc',
            9 => 'includes/views/handlers/commerce_product_handler_filter_product_type.inc',
            10 => 'includes/commerce_product.translation_handler.inc',
            11 => 'tests/commerce_product.test',
          ),
          'version' => '7.x-1.10',
          'project' => 'commerce',
          'datestamp' => '1410366834',
          'php' => '5.2.4',
        ),
        'schema_version' => '7104',
        'project' => 'commerce',
        'version' => '7.x-1.10',
      ),
      'commerce_product_ui' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/commerce/modules/product/commerce_product_ui.module',
        'basename' => 'commerce_product_ui.module',
        'name' => 'commerce_product_ui',
        'info' => 
        array (
          'name' => 'Product UI',
          'description' => 'Exposes a default UI for Products through product edit forms and default Views.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'field_ui',
            1 => 'commerce',
            2 => 'commerce_ui',
            3 => 'commerce_product',
            4 => 'views',
          ),
          'core' => '7.x',
          'configure' => 'admin/commerce/products/types',
          'files' => 
          array (
            0 => 'tests/commerce_product_ui.test',
          ),
          'version' => '7.x-1.10',
          'project' => 'commerce',
          'datestamp' => '1410366834',
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'commerce',
        'version' => '7.x-1.10',
      ),
      'commerce_checkout' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/commerce/modules/checkout/commerce_checkout.module',
        'basename' => 'commerce_checkout.module',
        'name' => 'commerce_checkout',
        'info' => 
        array (
          'name' => 'Checkout',
          'description' => 'Enable checkout as a multi-step form with customizable checkout pages.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_ui',
            2 => 'commerce_order',
            3 => 'entity',
            4 => 'rules',
          ),
          'core' => '7.x',
          'configure' => 'admin/commerce/config/checkout',
          'files' => 
          array (
            0 => 'tests/commerce_checkout.test',
          ),
          'version' => '7.x-1.10',
          'project' => 'commerce',
          'datestamp' => '1410366834',
          'php' => '5.2.4',
        ),
        'schema_version' => '7103',
        'project' => 'commerce',
        'version' => '7.x-1.10',
      ),
      'commerce_price' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/commerce/modules/price/commerce_price.module',
        'basename' => 'commerce_price.module',
        'name' => 'commerce_price',
        'info' => 
        array (
          'name' => 'Price',
          'description' => 'Defines the price field and a price alteration system.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'commerce_price.rules.inc',
            1 => 'includes/views/handlers/commerce_price_handler_field_commerce_price.inc',
            2 => 'includes/views/handlers/commerce_price_handler_filter_commerce_price_amount.inc',
          ),
          'version' => '7.x-1.10',
          'project' => 'commerce',
          'datestamp' => '1410366834',
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'commerce',
        'version' => '7.x-1.10',
      ),
      'commerce_tax_ui' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/commerce/modules/tax/commerce_tax_ui.module',
        'basename' => 'commerce_tax_ui.module',
        'name' => 'commerce_tax_ui',
        'info' => 
        array (
          'name' => 'Tax UI',
          'description' => 'Provides a UI for creating simple tax types and rates.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_ui',
            2 => 'commerce_tax',
          ),
          'core' => '7.x',
          'configure' => 'admin/commerce/config/taxes',
          'files' => 
          array (
            0 => 'tests/commerce_tax_ui.test',
          ),
          'version' => '7.x-1.10',
          'project' => 'commerce',
          'datestamp' => '1410366834',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'commerce',
        'version' => '7.x-1.10',
      ),
      'commerce_tax' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/commerce/modules/tax/commerce_tax.module',
        'basename' => 'commerce_tax.module',
        'name' => 'commerce_tax',
        'info' => 
        array (
          'name' => 'Tax',
          'description' => 'Define tax rates and configure tax rules for applicability and display.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_line_item',
            2 => 'commerce_price',
            3 => 'commerce_product_pricing',
            4 => 'entity',
            5 => 'rules',
          ),
          'core' => '7.x',
          'version' => '7.x-1.10',
          'project' => 'commerce',
          'datestamp' => '1410366834',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.10',
      ),
      'commerce_cart' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/commerce/modules/cart/commerce_cart.module',
        'basename' => 'commerce_cart.module',
        'name' => 'commerce_cart',
        'info' => 
        array (
          'name' => 'Cart',
          'description' => 'Implements the shopping cart system and add to cart features.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_checkout',
            2 => 'commerce_line_item',
            3 => 'commerce_order',
            4 => 'commerce_product',
            5 => 'commerce_product_pricing',
            6 => 'commerce_product_reference',
            7 => 'entity',
            8 => 'rules',
            9 => 'views',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/views/handlers/commerce_cart_handler_field_add_to_cart_form.inc',
            1 => 'includes/views/handlers/commerce_cart_plugin_argument_default_current_cart_order_id.inc',
            2 => 'includes/views/handlers/commerce_cart_handler_area_empty_text.inc',
            3 => 'tests/commerce_cart.test',
          ),
          'version' => '7.x-1.10',
          'project' => 'commerce',
          'datestamp' => '1410366834',
          'php' => '5.2.4',
        ),
        'schema_version' => '7102',
        'project' => 'commerce',
        'version' => '7.x-1.10',
      ),
      'commerce_payment_example' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/commerce/modules/payment/modules/commerce_payment_example.module',
        'basename' => 'commerce_payment_example.module',
        'name' => 'commerce_payment_example',
        'info' => 
        array (
          'name' => 'Payment Method Example',
          'description' => 'Provides an example payment method for testing and development.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_payment',
          ),
          'core' => '7.x',
          'version' => '7.x-1.10',
          'project' => 'commerce',
          'datestamp' => '1410366834',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.10',
      ),
      'commerce_payment_dummy_offsite' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/commerce/modules/payment/tests/commerce_payment_dummy_offsite.module',
        'basename' => 'commerce_payment_dummy_offsite.module',
        'name' => 'commerce_payment_dummy_offsite',
        'info' => 
        array (
          'name' => 'Commerce payment offsite test',
          'description' => 'Support module for customer payment related testing.',
          'package' => 'Testing',
          'version' => '7.x-1.10',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'commerce',
          'datestamp' => '1410366834',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.10',
      ),
      'commerce_payment_ui' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/commerce/modules/payment/commerce_payment_ui.module',
        'basename' => 'commerce_payment_ui.module',
        'name' => 'commerce_payment_ui',
        'info' => 
        array (
          'name' => 'Payment UI',
          'description' => 'Exposes a default UI for payment method configuration and payment transaction administration.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'rules_admin',
            1 => 'commerce',
            2 => 'commerce_order',
            3 => 'commerce_order_ui',
            4 => 'commerce_payment',
          ),
          'core' => '7.x',
          'configure' => 'admin/commerce/config/payment-methods',
          'files' => 
          array (
            0 => 'tests/commerce_payment_ui.test',
          ),
          'version' => '7.x-1.10',
          'project' => 'commerce',
          'datestamp' => '1410366834',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.10',
      ),
      'commerce_payment' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/commerce/modules/payment/commerce_payment.module',
        'basename' => 'commerce_payment.module',
        'name' => 'commerce_payment',
        'info' => 
        array (
          'name' => 'Payment',
          'description' => 'Implement core payment features for Drupal commerce.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_order',
            2 => 'entity',
            3 => 'rules',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'commerce_payment.rules.inc',
            1 => 'includes/commerce_payment_transaction.controller.inc',
            2 => 'includes/views/handlers/commerce_payment_handler_area_totals.inc',
            3 => 'includes/views/handlers/commerce_payment_handler_field_amount.inc',
            4 => 'includes/views/handlers/commerce_payment_handler_field_currency_code.inc',
            5 => 'includes/views/handlers/commerce_payment_handler_field_message.inc',
            6 => 'includes/views/handlers/commerce_payment_handler_field_payment_method.inc',
            7 => 'includes/views/handlers/commerce_payment_handler_field_payment_transaction_link.inc',
            8 => 'includes/views/handlers/commerce_payment_handler_field_payment_transaction_link_delete.inc',
            9 => 'includes/views/handlers/commerce_payment_handler_field_payment_transaction_operations.inc',
            10 => 'includes/views/handlers/commerce_payment_handler_field_status.inc',
            11 => 'includes/views/handlers/commerce_payment_handler_filter_payment_method.inc',
            12 => 'includes/views/handlers/commerce_payment_handler_filter_payment_transaction_status.inc',
            13 => 'includes/views/handlers/commerce_payment_handler_filter_currency_code.inc',
            14 => 'includes/views/handlers/commerce_payment_handler_field_balance.inc',
            15 => 'tests/commerce_payment.rules.test',
          ),
          'version' => '7.x-1.10',
          'project' => 'commerce',
          'datestamp' => '1410366834',
          'php' => '5.2.4',
        ),
        'schema_version' => '7102',
        'project' => 'commerce',
        'version' => '7.x-1.10',
      ),
      'commerce_line_item' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/commerce/modules/line_item/commerce_line_item.module',
        'basename' => 'commerce_line_item.module',
        'name' => 'commerce_line_item',
        'info' => 
        array (
          'name' => 'Line Item',
          'description' => 'Defines the Line Item entity and associated features.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_price',
            2 => 'entity',
            3 => 'rules',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/commerce_line_item.controller.inc',
            1 => 'includes/views/handlers/commerce_line_item_handler_area_line_item_summary.inc',
            2 => 'includes/views/handlers/commerce_line_item_handler_argument_line_item_line_item_id.inc',
            3 => 'includes/views/handlers/commerce_line_item_handler_field_line_item_title.inc',
            4 => 'includes/views/handlers/commerce_line_item_handler_field_line_item_type.inc',
            5 => 'includes/views/handlers/commerce_line_item_handler_filter_line_item_type.inc',
            6 => 'includes/views/handlers/commerce_line_item_handler_field_edit_quantity.inc',
            7 => 'includes/views/handlers/commerce_line_item_handler_field_edit_delete.inc',
          ),
          'version' => '7.x-1.10',
          'project' => 'commerce',
          'datestamp' => '1410366834',
          'php' => '5.2.4',
        ),
        'schema_version' => '7101',
        'project' => 'commerce',
        'version' => '7.x-1.10',
      ),
      'commerce_line_item_ui' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/commerce/modules/line_item/commerce_line_item_ui.module',
        'basename' => 'commerce_line_item_ui.module',
        'name' => 'commerce_line_item_ui',
        'info' => 
        array (
          'name' => 'Line Item UI',
          'description' => 'Exposes a default UI for Line Items through line item type forms and default Views.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'field_ui',
            1 => 'commerce',
            2 => 'commerce_ui',
            3 => 'commerce_line_item',
            4 => 'views',
          ),
          'core' => '7.x',
          'configure' => 'admin/commerce/config/line-items',
          'version' => '7.x-1.10',
          'project' => 'commerce',
          'datestamp' => '1410366834',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.10',
      ),
      'commerce_product_reference' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/commerce/modules/product_reference/commerce_product_reference.module',
        'basename' => 'commerce_product_reference.module',
        'name' => 'commerce_product_reference',
        'info' => 
        array (
          'name' => 'Product Reference',
          'description' => 'Defines a product reference field and default display formatters.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_line_item',
            2 => 'commerce_price',
            3 => 'commerce_product',
            4 => 'entity',
            5 => 'options',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/views/handlers/commerce_product_reference_handler_filter_node_is_product_display.inc',
            1 => 'includes/views/handlers/commerce_product_reference_handler_filter_node_type.inc',
            2 => 'includes/views/handlers/commerce_product_reference_handler_filter_product_line_item_type.inc',
            3 => 'tests/commerce_product_reference.test',
          ),
          'version' => '7.x-1.10',
          'project' => 'commerce',
          'datestamp' => '1410366834',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.10',
      ),
      'commerce_product_pricing_ui' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/commerce/modules/product_pricing/commerce_product_pricing_ui.module',
        'basename' => 'commerce_product_pricing_ui.module',
        'name' => 'commerce_product_pricing_ui',
        'info' => 
        array (
          'name' => 'Product Pricing UI',
          'description' => 'Exposes a UI for managing product pricing rules and pre-calculation settings.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'rules_admin',
            1 => 'commerce',
            2 => 'commerce_ui',
            3 => 'commerce_price',
            4 => 'commerce_product_pricing',
            5 => 'commerce_product_reference',
          ),
          'core' => '7.x',
          'configure' => 'admin/commerce/config/product-pricing',
          'version' => '7.x-1.10',
          'project' => 'commerce',
          'datestamp' => '1410366834',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.10',
      ),
      'commerce_product_pricing' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/commerce/modules/product_pricing/commerce_product_pricing.module',
        'basename' => 'commerce_product_pricing.module',
        'name' => 'commerce_product_pricing',
        'info' => 
        array (
          'name' => 'Product Pricing',
          'description' => 'Enables Rules based product sell price calculation for dynamic product pricing.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_price',
            2 => 'commerce_product_reference',
            3 => 'entity',
            4 => 'rules',
          ),
          'core' => '7.x',
          'version' => '7.x-1.10',
          'project' => 'commerce',
          'datestamp' => '1410366834',
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'commerce',
        'version' => '7.x-1.10',
      ),
      'commerce_customer_profile_dummy_type' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/commerce/modules/customer/tests/commerce_customer_profile_dummy_type.module',
        'basename' => 'commerce_customer_profile_dummy_type.module',
        'name' => 'commerce_customer_profile_dummy_type',
        'info' => 
        array (
          'name' => 'Commerce Customer Dummy Profile',
          'description' => 'Defines a dummy customer profile type for use in certain Customer module tests.',
          'package' => 'Testing',
          'version' => '7.x-1.10',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'commerce',
          'datestamp' => '1410366834',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.10',
      ),
      'commerce_customer_ui' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/commerce/modules/customer/commerce_customer_ui.module',
        'basename' => 'commerce_customer_ui.module',
        'name' => 'commerce_customer_ui',
        'info' => 
        array (
          'name' => 'Customer UI',
          'description' => 'Exposes a default UI for Customers through profile edit forms and default Views.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'field_ui',
            1 => 'commerce',
            2 => 'commerce_ui',
            3 => 'commerce_customer',
            4 => 'views',
          ),
          'core' => '7.x',
          'configure' => 'admin/commerce/customer-profiles/types',
          'files' => 
          array (
            0 => 'tests/commerce_customer_ui.test',
          ),
          'version' => '7.x-1.10',
          'project' => 'commerce',
          'datestamp' => '1410366834',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.10',
      ),
      'commerce_customer' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/commerce/modules/customer/commerce_customer.module',
        'basename' => 'commerce_customer.module',
        'name' => 'commerce_customer',
        'info' => 
        array (
          'name' => 'Customer',
          'description' => 'Defines the Customer entity with Address Field integration.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'addressfield',
            1 => 'commerce',
            2 => 'entity',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/commerce_customer_profile.controller.inc',
            1 => 'includes/views/handlers/commerce_customer_handler_area_empty_text.inc',
            2 => 'includes/views/handlers/commerce_customer_handler_field_customer_profile.inc',
            3 => 'includes/views/handlers/commerce_customer_handler_field_customer_profile_link.inc',
            4 => 'includes/views/handlers/commerce_customer_handler_field_customer_profile_link_delete.inc',
            5 => 'includes/views/handlers/commerce_customer_handler_field_customer_profile_link_edit.inc',
            6 => 'includes/views/handlers/commerce_customer_handler_field_customer_profile_type.inc',
            7 => 'includes/views/handlers/commerce_customer_handler_filter_customer_profile_type.inc',
          ),
          'version' => '7.x-1.10',
          'project' => 'commerce',
          'datestamp' => '1410366834',
          'php' => '5.2.4',
        ),
        'schema_version' => '7102',
        'project' => 'commerce',
        'version' => '7.x-1.10',
      ),
      'commerce_order' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/commerce/modules/order/commerce_order.module',
        'basename' => 'commerce_order.module',
        'name' => 'commerce_order',
        'info' => 
        array (
          'name' => 'Order',
          'description' => 'Defines the Order entity and associated features.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_customer',
            2 => 'commerce_line_item',
            3 => 'commerce_price',
            4 => 'entity',
            5 => 'rules',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/commerce_order.controller.inc',
            1 => 'includes/views/handlers/commerce_order_handler_area_empty_text.inc',
            2 => 'includes/views/handlers/commerce_order_handler_area_order_total.inc',
            3 => 'includes/views/handlers/commerce_order_handler_argument_order_order_id.inc',
            4 => 'includes/views/handlers/commerce_order_handler_field_order.inc',
            5 => 'includes/views/handlers/commerce_order_handler_field_order_status.inc',
            6 => 'includes/views/handlers/commerce_order_handler_field_order_state.inc',
            7 => 'includes/views/handlers/commerce_order_handler_field_order_type.inc',
            8 => 'includes/views/handlers/commerce_order_handler_field_order_link.inc',
            9 => 'includes/views/handlers/commerce_order_handler_field_order_link_delete.inc',
            10 => 'includes/views/handlers/commerce_order_handler_field_order_link_edit.inc',
            11 => 'includes/views/handlers/commerce_order_handler_field_order_mail.inc',
            12 => 'includes/views/handlers/commerce_order_handler_field_order_operations.inc',
            13 => 'includes/views/handlers/commerce_order_handler_filter_order_status.inc',
            14 => 'includes/views/handlers/commerce_order_handler_filter_order_state.inc',
            15 => 'includes/views/handlers/commerce_order_handler_filter_order_type.inc',
            16 => 'includes/views/handlers/commerce_order_plugin_argument_validate_user.inc',
            17 => 'tests/commerce_order.rules.test',
            18 => 'tests/commerce_order.test',
          ),
          'version' => '7.x-1.10',
          'project' => 'commerce',
          'datestamp' => '1410366834',
          'php' => '5.2.4',
        ),
        'schema_version' => '7109',
        'project' => 'commerce',
        'version' => '7.x-1.10',
      ),
      'commerce_order_ui' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/commerce/modules/order/commerce_order_ui.module',
        'basename' => 'commerce_order_ui.module',
        'name' => 'commerce_order_ui',
        'info' => 
        array (
          'name' => 'Order UI',
          'description' => 'Exposes a default UI for Orders through order edit forms and default Views.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'field_ui',
            1 => 'commerce',
            2 => 'commerce_ui',
            3 => 'commerce_line_item',
            4 => 'commerce_order',
            5 => 'views',
          ),
          'core' => '7.x',
          'configure' => 'admin/commerce/config/order',
          'files' => 
          array (
            0 => 'includes/views/handlers/commerce_order_ui_handler_area_view_order_form.inc',
            1 => 'tests/commerce_order_ui.test',
          ),
          'version' => '7.x-1.10',
          'project' => 'commerce',
          'datestamp' => '1410366834',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.10',
      ),
      'commerce' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/commerce/commerce.module',
        'basename' => 'commerce.module',
        'name' => 'commerce',
        'info' => 
        array (
          'name' => 'Commerce',
          'description' => 'Defines features and functions common to the Commerce modules. Must be enabled to uninstall other Commerce modules.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'system',
            1 => 'entity',
            2 => 'rules',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tests/commerce_base.test',
            1 => 'includes/commerce.controller.inc',
          ),
          'version' => '7.x-1.10',
          'project' => 'commerce',
          'datestamp' => '1410366834',
          'php' => '5.2.4',
        ),
        'schema_version' => '7102',
        'project' => 'commerce',
        'version' => '7.x-1.10',
      ),
      'commerce_ui' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/commerce/commerce_ui.module',
        'basename' => 'commerce_ui.module',
        'name' => 'commerce_ui',
        'info' => 
        array (
          'name' => 'Commerce UI',
          'description' => 'Defines menu items common to the various Drupal Commerce UI modules.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
          ),
          'core' => '7.x',
          'version' => '7.x-1.10',
          'project' => 'commerce',
          'datestamp' => '1410366834',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.10',
      ),
      'taxonomy_view_mode' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/taxonomy_view_mode/taxonomy_view_mode.module',
        'basename' => 'taxonomy_view_mode.module',
        'name' => 'taxonomy_view_mode',
        'info' => 
        array (
          'core' => '7.x',
          'name' => 'Taxonomy View',
          'version' => '7.x-1.0-alpha1',
          'project' => 'taxonomy_view_mode',
          'datestamp' => '1327347053',
          'dependencies' => 
          array (
          ),
          'description' => '',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'taxonomy_view_mode',
        'version' => '7.x-1.0-alpha1',
      ),
      'special_menu_items' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/special_menu_items/special_menu_items.module',
        'basename' => 'special_menu_items.module',
        'name' => 'special_menu_items',
        'info' => 
        array (
          'name' => 'Special menu items',
          'description' => 'Allow users to add placeholder and/or separator menu items.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'menu',
          ),
          'configure' => 'admin/config/system/special_menu_items',
          'version' => '7.x-2.0',
          'project' => 'special_menu_items',
          'datestamp' => '1346788411',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'special_menu_items',
        'version' => '7.x-2.0',
      ),
      'email' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/email/email.module',
        'basename' => 'email.module',
        'name' => 'email',
        'info' => 
        array (
          'name' => 'Email',
          'description' => 'Defines an email field type.',
          'core' => '7.x',
          'package' => 'Fields',
          'files' => 
          array (
            0 => 'email.migrate.inc',
          ),
          'version' => '7.x-1.3',
          'project' => 'email',
          'datestamp' => '1397134155',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'email',
        'version' => '7.x-1.3',
      ),
      'page_manager' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/ctools/page_manager/page_manager.module',
        'basename' => 'page_manager.module',
        'name' => 'page_manager',
        'info' => 
        array (
          'name' => 'Page manager',
          'description' => 'Provides a UI and API to manage pages within the site.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.6-rc1',
          'project' => 'ctools',
          'datestamp' => '1418961482',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.6-rc1',
      ),
      'stylizer' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/ctools/stylizer/stylizer.module',
        'basename' => 'stylizer.module',
        'name' => 'stylizer',
        'info' => 
        array (
          'name' => 'Stylizer',
          'description' => 'Create custom styles for applications such as Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'color',
          ),
          'version' => '7.x-1.6-rc1',
          'project' => 'ctools',
          'datestamp' => '1418961482',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.6-rc1',
      ),
      'ctools_export_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/ctools/tests/ctools_export_test/ctools_export_test.module',
        'basename' => 'ctools_export_test.module',
        'name' => 'ctools_export_test',
        'info' => 
        array (
          'name' => 'CTools export test',
          'description' => 'CTools export test module',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'hidden' => true,
          'files' => 
          array (
            0 => 'ctools_export.test',
          ),
          'version' => '7.x-1.6-rc1',
          'project' => 'ctools',
          'datestamp' => '1418961482',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.6-rc1',
      ),
      'ctools_plugin_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/ctools/tests/ctools_plugin_test.module',
        'basename' => 'ctools_plugin_test.module',
        'name' => 'ctools_plugin_test',
        'info' => 
        array (
          'name' => 'Chaos tools plugins test',
          'description' => 'Provides hooks for testing ctools plugins.',
          'package' => 'Chaos tool suite',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'ctools.plugins.test',
            1 => 'object_cache.test',
            2 => 'css.test',
            3 => 'context.test',
            4 => 'math_expression.test',
            5 => 'math_expression_stack.test',
          ),
          'hidden' => true,
          'version' => '7.x-1.6-rc1',
          'project' => 'ctools',
          'datestamp' => '1418961482',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.6-rc1',
      ),
      'views_content' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/ctools/views_content/views_content.module',
        'basename' => 'views_content.module',
        'name' => 'views_content',
        'info' => 
        array (
          'name' => 'Views content panes',
          'description' => 'Allows Views content to be used in Panels, Dashboard and other modules which use the CTools Content API.',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'views',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'plugins/views/views_content_plugin_display_ctools_context.inc',
            1 => 'plugins/views/views_content_plugin_display_panel_pane.inc',
            2 => 'plugins/views/views_content_plugin_style_ctools_context.inc',
          ),
          'version' => '7.x-1.6-rc1',
          'project' => 'ctools',
          'datestamp' => '1418961482',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.6-rc1',
      ),
      'bulk_export' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/ctools/bulk_export/bulk_export.module',
        'basename' => 'bulk_export.module',
        'name' => 'bulk_export',
        'info' => 
        array (
          'name' => 'Bulk Export',
          'description' => 'Performs bulk exporting of data objects known about by Chaos tools.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.6-rc1',
          'project' => 'ctools',
          'datestamp' => '1418961482',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.6-rc1',
      ),
      'ctools_plugin_example' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/ctools/ctools_plugin_example/ctools_plugin_example.module',
        'basename' => 'ctools_plugin_example.module',
        'name' => 'ctools_plugin_example',
        'info' => 
        array (
          'name' => 'Chaos Tools (CTools) Plugin Example',
          'description' => 'Shows how an external module can provide ctools plugins (for Panels, etc.).',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'panels',
            2 => 'page_manager',
            3 => 'advanced_help',
          ),
          'core' => '7.x',
          'version' => '7.x-1.6-rc1',
          'project' => 'ctools',
          'datestamp' => '1418961482',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.6-rc1',
      ),
      'ctools_access_ruleset' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
        'basename' => 'ctools_access_ruleset.module',
        'name' => 'ctools_access_ruleset',
        'info' => 
        array (
          'name' => 'Custom rulesets',
          'description' => 'Create custom, exportable, reusable access rulesets for applications like Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'version' => '7.x-1.6-rc1',
          'project' => 'ctools',
          'datestamp' => '1418961482',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.6-rc1',
      ),
      'ctools_ajax_sample' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
        'basename' => 'ctools_ajax_sample.module',
        'name' => 'ctools_ajax_sample',
        'info' => 
        array (
          'name' => 'Chaos Tools (CTools) AJAX Example',
          'description' => 'Shows how to use the power of Chaos AJAX.',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'core' => '7.x',
          'version' => '7.x-1.6-rc1',
          'project' => 'ctools',
          'datestamp' => '1418961482',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.6-rc1',
      ),
      'term_depth' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/ctools/term_depth/term_depth.module',
        'basename' => 'term_depth.module',
        'name' => 'term_depth',
        'info' => 
        array (
          'name' => 'Term Depth access',
          'description' => 'Controls access to context based upon term depth',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.6-rc1',
          'project' => 'ctools',
          'datestamp' => '1418961482',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.6-rc1',
      ),
      'ctools_custom_content' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/ctools/ctools_custom_content/ctools_custom_content.module',
        'basename' => 'ctools_custom_content.module',
        'name' => 'ctools_custom_content',
        'info' => 
        array (
          'name' => 'Custom content panes',
          'description' => 'Create custom, exportable, reusable content panes for applications like Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'version' => '7.x-1.6-rc1',
          'project' => 'ctools',
          'datestamp' => '1418961482',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.6-rc1',
      ),
      'ctools' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/ctools/ctools.module',
        'basename' => 'ctools.module',
        'name' => 'ctools',
        'info' => 
        array (
          'name' => 'Chaos tools',
          'description' => 'A library of helpful tools by Merlin of Chaos.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'files' => 
          array (
            0 => 'includes/context.inc',
            1 => 'includes/css-cache.inc',
            2 => 'includes/math-expr.inc',
            3 => 'includes/stylizer.inc',
            4 => 'tests/css_cache.test',
          ),
          'version' => '7.x-1.6-rc1',
          'project' => 'ctools',
          'datestamp' => '1418961482',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'ctools',
        'version' => '7.x-1.6-rc1',
      ),
      'gvj_webform' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/gvj_webform/gvj_webform.module',
        'basename' => 'gvj_webform.module',
        'name' => 'gvj_webform',
        'info' => 
        array (
          'name' => 'GVJ Webform',
          'description' => 'Create forms on your website',
          'core' => '7.x',
          'package' => 'GVJ',
          'php' => '5.2.4',
          'dependencies' => 
          array (
            0 => 'base_core',
            1 => 'features',
            2 => 'node',
            3 => 'webform',
          ),
          'features' => 
          array (
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'user_permission' => 
            array (
              0 => 'access all webform results',
              1 => 'create webform content',
              2 => 'delete all webform submissions',
              3 => 'delete any webform content',
              4 => 'edit all webform submissions',
              5 => 'edit any webform content',
            ),
          ),
          'version' => NULL,
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'base_link' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/base_link/base_link.module',
        'basename' => 'base_link.module',
        'name' => 'base_link',
        'info' => 
        array (
          'name' => 'Base Link',
          'description' => 'A link content type to display links to external websites.',
          'core' => '7.x',
          'package' => 'Base',
          'php' => '5.2.4',
          'dependencies' => 
          array (
            0 => 'apps_compatible',
            1 => 'base_core',
            2 => 'base_media',
            3 => 'features',
            4 => 'link',
            5 => 'media',
            6 => 'strongarm',
            7 => 'taxonomy',
            8 => 'title',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'strongarm:strongarm:1',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'field' => 
            array (
              0 => 'node-link-body',
              1 => 'node-link-field_content_image',
              2 => 'node-link-field_link_category',
              3 => 'node-link-field_link_link',
              4 => 'node-link-title_field',
              5 => 'taxonomy_term-link_categories-description_field',
              6 => 'taxonomy_term-link_categories-name_field',
            ),
            'node' => 
            array (
              0 => 'link',
            ),
            'taxonomy' => 
            array (
              0 => 'link_categories',
            ),
            'user_permission' => 
            array (
              0 => 'create link content',
              1 => 'delete any link content',
              2 => 'delete own link content',
              3 => 'delete terms in link_categories',
              4 => 'edit any link content',
              5 => 'edit own link content',
              6 => 'edit terms in link_categories',
            ),
            'variable' => 
            array (
              0 => 'comment_anonymous_link',
              1 => 'comment_default_mode_link',
              2 => 'comment_default_per_page_link',
              3 => 'comment_form_location_link',
              4 => 'comment_link',
              5 => 'comment_preview_link',
              6 => 'comment_subject_field_link',
              7 => 'node_options_link',
              8 => 'node_preview_link',
              9 => 'node_submitted_link',
            ),
          ),
          'version' => NULL,
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'email_registration' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/email_registration/email_registration.module',
        'basename' => 'email_registration.module',
        'name' => 'email_registration',
        'info' => 
        array (
          'name' => 'Email Registration',
          'description' => 'Allows users to register with an e-mail address as their username.',
          'files' => 
          array (
            0 => 'email_registration.test',
          ),
          'core' => '7.x',
          'version' => '7.x-1.2',
          'project' => 'email_registration',
          'datestamp' => '1398265775',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'email_registration',
        'version' => '7.x-1.2',
      ),
      'views_column_class' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/views_column_class/views_column_class.module',
        'basename' => 'views_column_class.module',
        'name' => 'views_column_class',
        'info' => 
        array (
          'name' => 'Views Column Class',
          'description' => 'Provides the ability to present a grid based layout for views.',
          'package' => 'Views',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'files' => 
          array (
            0 => 'views_column_class.module',
            1 => 'views_column_class.views.inc',
            2 => 'views_column_class_style_plugin.inc',
          ),
          'version' => '7.x-1.0-alpha1',
          'project' => 'views_column_class',
          'datestamp' => '1332709546',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_column_class',
        'version' => '7.x-1.0-alpha1',
      ),
      'job_scheduler_trigger' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/job_scheduler/modules/job_scheduler_trigger/job_scheduler_trigger.module',
        'basename' => 'job_scheduler_trigger.module',
        'name' => 'job_scheduler_trigger',
        'info' => 
        array (
          'name' => 'Job Scheduler Trigger',
          'description' => 'Creates scheduler triggers that fire up at certain days, times',
          'core' => '7.x',
          'php' => '5.2',
          'dependencies' => 
          array (
            0 => 'job_scheduler',
          ),
          'version' => '7.x-2.0-alpha3',
          'project' => 'job_scheduler',
          'datestamp' => '1336466457',
        ),
        'schema_version' => 0,
        'project' => 'job_scheduler',
        'version' => '7.x-2.0-alpha3',
      ),
      'job_scheduler' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/job_scheduler/job_scheduler.module',
        'basename' => 'job_scheduler.module',
        'name' => 'job_scheduler',
        'info' => 
        array (
          'name' => 'Job Scheduler',
          'description' => 'Scheduler API',
          'files' => 
          array (
            0 => 'job_scheduler.module',
            1 => 'job_scheduler.install',
            2 => 'JobScheduler.inc',
            3 => 'JobSchedulerCronTab.inc',
          ),
          'core' => '7.x',
          'php' => '5.2',
          'version' => '7.x-2.0-alpha3',
          'project' => 'job_scheduler',
          'datestamp' => '1336466457',
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => '7101',
        'project' => 'job_scheduler',
        'version' => '7.x-2.0-alpha3',
      ),
      'apps' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/apps/apps.module',
        'basename' => 'apps.module',
        'name' => 'apps',
        'info' => 
        array (
          'name' => 'Apps',
          'description' => 'Provides Interface for Install Apps from A drupal app server',
          'package' => 'Distribution Management',
          'version' => '7.x-1.0-beta20',
          'core' => '7.x',
          'configure' => 'admin/config/system/apps',
          'dependencies' => 
          array (
            0 => 'update',
          ),
          'files' => 
          array (
            0 => 'apps.module',
            1 => 'apps.updater.inc',
            2 => 'apps.installer.inc',
            3 => 'apps.test',
          ),
          'project' => 'apps',
          'datestamp' => '1416249783',
          'php' => '5.2.4',
        ),
        'schema_version' => '7102',
        'project' => 'apps',
        'version' => '7.x-1.0-beta20',
      ),
      'lang_dropdown_hideout' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/lang_dropdown/lang_dropdown_hideout/lang_dropdown_hideout.module',
        'basename' => 'lang_dropdown_hideout.module',
        'name' => 'lang_dropdown_hideout',
        'info' => 
        array (
          'name' => 'Language Switcher Dropdown Hideout',
          'package' => 'Multilingual',
          'description' => 'Allow to hide specific languages from the switcher for certain roles.',
          'dependencies' => 
          array (
            0 => 'locale',
          ),
          'configure' => 'admin/structure/block',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'lang_dropdown_hideout.module',
            1 => 'lang_dropdown_hideout.install',
          ),
          'version' => '7.x-2.5',
          'project' => 'lang_dropdown',
          'datestamp' => '1387127905',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'lang_dropdown',
        'version' => '7.x-2.5',
      ),
      'lang_dropdown' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/lang_dropdown/lang_dropdown.module',
        'basename' => 'lang_dropdown.module',
        'name' => 'lang_dropdown',
        'info' => 
        array (
          'name' => 'Language Switcher Dropdown',
          'package' => 'Multilingual',
          'description' => 'Provides a dropdown select to switch between available languages.',
          'dependencies' => 
          array (
            0 => 'locale',
          ),
          'configure' => 'admin/structure/block',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'lang_dropdown.module',
            1 => 'lang_dropdown.install',
          ),
          'version' => '7.x-2.5',
          'project' => 'lang_dropdown',
          'datestamp' => '1387127905',
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'project' => 'lang_dropdown',
        'version' => '7.x-2.5',
      ),
      'gvj_contact' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/gvj_contact/gvj_contact.module',
        'basename' => 'gvj_contact.module',
        'name' => 'gvj_contact',
        'info' => 
        array (
          'name' => 'GVJ Contact',
          'description' => 'Contact form for your users and for your site',
          'core' => '7.x',
          'package' => 'GVJ',
          'php' => '5.2.4',
          'dependencies' => 
          array (
            0 => 'base_core',
            1 => 'contact',
            2 => 'ctools',
            3 => 'features',
            4 => 'honeypot',
            5 => 'menu',
            6 => 'strongarm',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'strongarm:strongarm:1',
            ),
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'menu_links' => 
            array (
              0 => 'main-menu:contact',
            ),
            'user_permission' => 
            array (
              0 => 'access site-wide contact form',
              1 => 'access user contact forms',
              2 => 'administer contact forms',
            ),
            'variable' => 
            array (
              0 => 'honeypot_form_contact_personal_form',
              1 => 'honeypot_form_contact_site_form',
            ),
          ),
          'version' => NULL,
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'feeds_tamper_ui' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/feeds_tamper/feeds_tamper_ui/feeds_tamper_ui.module',
        'basename' => 'feeds_tamper_ui.module',
        'name' => 'feeds_tamper_ui',
        'info' => 
        array (
          'name' => 'Feeds Tamper Admin UI',
          'description' => 'Administrative UI for Feeds Tamper module.',
          'package' => 'Feeds',
          'dependencies' => 
          array (
            0 => 'feeds_tamper',
            1 => 'feeds_ui',
          ),
          'files' => 
          array (
            0 => 'tests/feeds_tamper_ui.test',
          ),
          'core' => '7.x',
          'version' => '7.x-1.0',
          'project' => 'feeds_tamper',
          'datestamp' => '1405301333',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'feeds_tamper',
        'version' => '7.x-1.0',
      ),
      'feeds_tamper' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/feeds_tamper/feeds_tamper.module',
        'basename' => 'feeds_tamper.module',
        'name' => 'feeds_tamper',
        'info' => 
        array (
          'name' => 'Feeds Tamper',
          'description' => 'Modify feeds data before it gets saved.',
          'package' => 'Feeds',
          'dependencies' => 
          array (
            0 => 'feeds',
          ),
          'files' => 
          array (
            0 => 'tests/feeds_tamper.test',
            1 => 'tests/feeds_tamper_plugins.test',
            2 => 'tests/feeds_tamper_efq_finder.test',
          ),
          'core' => '7.x',
          'version' => '7.x-1.0',
          'project' => 'feeds_tamper',
          'datestamp' => '1405301333',
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'feeds_tamper',
        'version' => '7.x-1.0',
      ),
      'geophp' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/geophp/geophp.module',
        'basename' => 'geophp.module',
        'name' => 'geophp',
        'info' => 
        array (
          'name' => 'geoPHP',
          'description' => 'Wraps the geoPHP library: advanced geometry operations in PHP',
          'core' => '7.x',
          'version' => '7.x-1.7',
          'project' => 'geophp',
          'datestamp' => '1352084822',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'geophp',
        'version' => '7.x-1.7',
      ),
      'follow_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/follow/tests/follow_test/follow_test.module',
        'basename' => 'follow_test.module',
        'name' => 'follow_test',
        'info' => 
        array (
          'name' => 'Follow Test module',
          'description' => 'Used for Testing Follow module.',
          'dependencies' => 
          array (
            0 => 'follow',
          ),
          'hidden' => true,
          'core' => '7.x',
          'version' => '7.x-2.0-alpha1',
          'project' => 'follow',
          'datestamp' => '1366924811',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'follow',
        'version' => '7.x-2.0-alpha1',
      ),
      'follow' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/follow/follow.module',
        'basename' => 'follow.module',
        'name' => 'follow',
        'info' => 
        array (
          'name' => 'Follow',
          'description' => 'Add sitewide and per user links to social network profiles.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tests/follow.test',
          ),
          'config' => 'admin/config/services/follow',
          'version' => '7.x-2.0-alpha1',
          'project' => 'follow',
          'datestamp' => '1366924811',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'follow',
        'version' => '7.x-2.0-alpha1',
      ),
      'mollom_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/mollom/tests/mollom_test.module',
        'basename' => 'mollom_test.module',
        'name' => 'mollom_test',
        'info' => 
        array (
          'name' => 'Mollom Test',
          'description' => 'Testing module for Mollom functionality. Do not enable.',
          'core' => '7.x',
          'package' => 'Testing',
          'hidden' => true,
          'version' => '7.x-2.13',
          'project' => 'mollom',
          'datestamp' => '1418648294',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'mollom',
        'version' => '7.x-2.13',
      ),
      'mollom_test_server' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/mollom/tests/mollom_test_server.module',
        'basename' => 'mollom_test_server.module',
        'name' => 'mollom_test_server',
        'info' => 
        array (
          'name' => 'Mollom Test Server',
          'description' => 'Testing Server module for Mollom functionality. Do not enable.',
          'core' => '7.x',
          'package' => 'Testing',
          'hidden' => true,
          'version' => '7.x-2.13',
          'project' => 'mollom',
          'datestamp' => '1418648294',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'mollom',
        'version' => '7.x-2.13',
      ),
      'mollom' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/mollom/mollom.module',
        'basename' => 'mollom.module',
        'name' => 'mollom',
        'info' => 
        array (
          'name' => 'Mollom',
          'description' => 'Automatically moderates user-submitted content and protects your site from spam and profanity.',
          'core' => '7.x',
          'configure' => 'admin/config/content/mollom',
          'test_dependencies' => 
          array (
            0 => 'ctools',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'mollom.css',
            ),
          ),
          'files' => 
          array (
            0 => 'includes/mollom.class.inc',
            1 => 'mollom.drupal.inc',
            2 => 'tests/mollom.test',
            3 => 'tests/mollom.class.test',
          ),
          'version' => '7.x-2.13',
          'project' => 'mollom',
          'datestamp' => '1418648294',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7213',
        'project' => 'mollom',
        'version' => '7.x-2.13',
      ),
      'gvj_news' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/gvj_news/gvj_news.module',
        'basename' => 'gvj_news.module',
        'name' => 'gvj_news',
        'info' => 
        array (
          'name' => 'GVJ News',
          'description' => 'Provides a news page',
          'core' => '7.x',
          'package' => 'GVJ',
          'php' => '5.2.4',
          'dependencies' => 
          array (
            0 => 'gvj_article',
            1 => 'context',
            2 => 'ctools',
            3 => 'features',
            4 => 'file',
            5 => 'media',
            6 => 'pathauto',
            7 => 'strongarm',
            8 => 'views',
          ),
          'author' => 'Guillaume Viguier-Just',
          'author_url' => 'http://www.viguierjust.com',
          'features' => 
          array (
            'context' => 
            array (
              0 => 'article-content-type',
            ),
            'ctools' => 
            array (
              0 => 'context:context:3',
              1 => 'strongarm:strongarm:1',
              2 => 'views:views_default:3.0',
            ),
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'variable' => 
            array (
              0 => 'pathauto_node_article_pattern',
            ),
            'views_view' => 
            array (
              0 => 'news',
            ),
          ),
          'version' => NULL,
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'entity_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/entity/tests/entity_test.module',
        'basename' => 'entity_test.module',
        'name' => 'entity_test',
        'info' => 
        array (
          'name' => 'Entity CRUD test module',
          'description' => 'Provides entity types based upon the CRUD API.',
          'version' => '7.x-1.5',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity_test.module',
            1 => 'entity_test.install',
          ),
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'hidden' => true,
          'project' => 'entity',
          'datestamp' => '1396975454',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity',
        'version' => '7.x-1.5',
      ),
      'entity_test_i18n' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/entity/tests/entity_test_i18n.module',
        'basename' => 'entity_test_i18n.module',
        'name' => 'entity_test_i18n',
        'info' => 
        array (
          'name' => 'Entity-test type translation',
          'description' => 'Allows translating entity-test types.',
          'dependencies' => 
          array (
            0 => 'entity_test',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.x-1.5',
          'project' => 'entity',
          'datestamp' => '1396975454',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity',
        'version' => '7.x-1.5',
      ),
      'entity_feature' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/entity/tests/entity_feature.module',
        'basename' => 'entity_feature.module',
        'name' => 'entity_feature',
        'info' => 
        array (
          'name' => 'Entity feature module',
          'description' => 'Provides some entities in code.',
          'version' => '7.x-1.5',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity_feature.module',
          ),
          'dependencies' => 
          array (
            0 => 'entity_test',
          ),
          'hidden' => true,
          'project' => 'entity',
          'datestamp' => '1396975454',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity',
        'version' => '7.x-1.5',
      ),
      'entity' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/entity/entity.module',
        'basename' => 'entity.module',
        'name' => 'entity',
        'info' => 
        array (
          'name' => 'Entity API',
          'description' => 'Enables modules to work with any entity type and to provide entities.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity.features.inc',
            1 => 'entity.i18n.inc',
            2 => 'entity.info.inc',
            3 => 'entity.rules.inc',
            4 => 'entity.test',
            5 => 'includes/entity.inc',
            6 => 'includes/entity.controller.inc',
            7 => 'includes/entity.ui.inc',
            8 => 'includes/entity.wrapper.inc',
            9 => 'views/entity.views.inc',
            10 => 'views/handlers/entity_views_field_handler_helper.inc',
            11 => 'views/handlers/entity_views_handler_area_entity.inc',
            12 => 'views/handlers/entity_views_handler_field_boolean.inc',
            13 => 'views/handlers/entity_views_handler_field_date.inc',
            14 => 'views/handlers/entity_views_handler_field_duration.inc',
            15 => 'views/handlers/entity_views_handler_field_entity.inc',
            16 => 'views/handlers/entity_views_handler_field_field.inc',
            17 => 'views/handlers/entity_views_handler_field_numeric.inc',
            18 => 'views/handlers/entity_views_handler_field_options.inc',
            19 => 'views/handlers/entity_views_handler_field_text.inc',
            20 => 'views/handlers/entity_views_handler_field_uri.inc',
            21 => 'views/handlers/entity_views_handler_relationship_by_bundle.inc',
            22 => 'views/handlers/entity_views_handler_relationship.inc',
            23 => 'views/plugins/entity_views_plugin_row_entity_view.inc',
          ),
          'version' => '7.x-1.5',
          'project' => 'entity',
          'datestamp' => '1396975454',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'entity',
        'version' => '7.x-1.5',
      ),
      'entity_token' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/entity/entity_token.module',
        'basename' => 'entity_token.module',
        'name' => 'entity_token',
        'info' => 
        array (
          'name' => 'Entity tokens',
          'description' => 'Provides token replacements for all properties that have no tokens and are known to the entity API.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity_token.tokens.inc',
            1 => 'entity_token.module',
          ),
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'version' => '7.x-1.5',
          'project' => 'entity',
          'datestamp' => '1396975454',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity',
        'version' => '7.x-1.5',
      ),
      'commerce_extra_panes_termsofservice' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/commerce_extra_panes/modules/commerce_extra_panes_termsofservice/commerce_extra_panes_termsofservice.module',
        'basename' => 'commerce_extra_panes_termsofservice.module',
        'name' => 'commerce_extra_panes_termsofservice',
        'info' => 
        array (
          'name' => 'Commerce Extra Panes - Terms of service',
          'description' => 'Use one of the nodes in the checkout pane as Terms of service agreement.',
          'package' => 'Commerce (contrib)',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'commerce_extra_panes',
          ),
          'files' => 
          array (
            0 => 'commerce_extra_panes_termsofservice.install',
            1 => 'commerce_extra_panes_termsofservice.module',
          ),
          'version' => '7.x-1.1',
          'project' => 'commerce_extra_panes',
          'datestamp' => '1349275866',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce_extra_panes',
        'version' => '7.x-1.1',
      ),
      'commerce_extra_panes' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/commerce_extra_panes/commerce_extra_panes.module',
        'basename' => 'commerce_extra_panes.module',
        'name' => 'commerce_extra_panes',
        'info' => 
        array (
          'name' => 'Commerce Extra Panes',
          'description' => 'Allows to add extra panes to Drupal Commerce checkout phase using existing entities',
          'package' => 'Commerce (contrib)',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'commerce_checkout',
            1 => 'ctools',
            2 => 'entity',
          ),
          'configure' => 'admin/commerce/config/checkout/extra',
          'version' => '7.x-1.1',
          'project' => 'commerce_extra_panes',
          'datestamp' => '1349275866',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce_extra_panes',
        'version' => '7.x-1.1',
      ),
      'flexslider_picture' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/picture/flexslider_picture/flexslider_picture.module',
        'basename' => 'flexslider_picture.module',
        'name' => 'flexslider_picture',
        'info' => 
        array (
          'name' => 'FlexSlider Picture',
          'description' => 'Integrates the Picture module with the FlexSlider module for a truly responsive slider.',
          'package' => 'Picture',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'picture',
            1 => 'flexslider (2.x)',
            2 => 'flexslider_fields (2.x)',
          ),
          'version' => '7.x-2.9',
          'project' => 'picture',
          'datestamp' => '1419930485',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'picture',
        'version' => '7.x-2.9',
      ),
      'picture' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/picture/picture.module',
        'basename' => 'picture.module',
        'name' => 'picture',
        'info' => 
        array (
          'name' => 'Picture',
          'description' => 'Picture element',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'image',
            2 => 'breakpoints',
          ),
          'files' => 
          array (
            0 => 'includes/PictureMapping.php',
          ),
          'configure' => 'admin/config/media/picture',
          'package' => 'Picture',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'picture_wysiwyg.css',
            ),
          ),
          'version' => '7.x-2.9',
          'project' => 'picture',
          'datestamp' => '1419930485',
          'php' => '5.2.4',
        ),
        'schema_version' => '7203',
        'project' => 'picture',
        'version' => '7.x-2.9',
      ),
      'menu_icons' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/menu_icons/menu_icons.module',
        'basename' => 'menu_icons.module',
        'name' => 'menu_icons',
        'info' => 
        array (
          'name' => 'Menu Icons',
          'description' => 'Associates icons with menu items',
          'dependencies' => 
          array (
            0 => 'menu',
            1 => 'image',
          ),
          'core' => '7.x',
          'configure' => 'admin/config/user-interface/menu_icons',
          'files' => 
          array (
            0 => 'menu_icons.install',
            1 => 'menu_icons.module',
            2 => 'menu_icons_css_item.tpl.php',
          ),
          'version' => '7.x-3.0-beta4',
          'project' => 'menu_icons',
          'datestamp' => '1363992011',
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'menu_icons',
        'version' => '7.x-3.0-beta4',
      ),
      'superfish' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/superfish/superfish.module',
        'basename' => 'superfish.module',
        'name' => 'superfish',
        'info' => 
        array (
          'name' => 'Superfish',
          'description' => 'jQuery Superfish plugin for your Drupal menus.',
          'package' => 'User interface',
          'dependencies' => 
          array (
            0 => 'menu',
          ),
          'configure' => 'admin/config/user-interface/superfish',
          'core' => '7.x',
          'version' => '7.x-1.9',
          'project' => 'superfish',
          'datestamp' => '1367054112',
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'superfish',
        'version' => '7.x-1.9',
      ),
      'pathauto' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/pathauto/pathauto.module',
        'basename' => 'pathauto.module',
        'name' => 'pathauto',
        'info' => 
        array (
          'name' => 'Pathauto',
          'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
          'dependencies' => 
          array (
            0 => 'path',
            1 => 'token',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'pathauto.test',
          ),
          'configure' => 'admin/config/search/path/patterns',
          'recommends' => 
          array (
            0 => 'redirect',
          ),
          'version' => '7.x-1.2',
          'project' => 'pathauto',
          'datestamp' => '1344525185',
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'pathauto',
        'version' => '7.x-1.2',
      ),
      'features_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/features/tests/features_test/features_test.module',
        'basename' => 'features_test.module',
        'name' => 'features_test',
        'info' => 
        array (
          'name' => 'Features Tests',
          'description' => 'Test module for Features testing.',
          'core' => '7.x',
          'package' => 'Testing',
          'php' => '5.2.0',
          'dependencies' => 
          array (
            0 => 'features',
            1 => 'image',
            2 => 'strongarm',
            3 => 'taxonomy',
            4 => 'views',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'strongarm:strongarm:1',
              1 => 'views:views_default:3.0',
            ),
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'field_base' => 
            array (
              0 => 'field_features_test',
            ),
            'field_instance' => 
            array (
              0 => 'node-features_test-field_features_test',
            ),
            'filter' => 
            array (
              0 => 'features_test',
            ),
            'image' => 
            array (
              0 => 'features_test',
            ),
            'node' => 
            array (
              0 => 'features_test',
            ),
            'taxonomy' => 
            array (
              0 => 'taxonomy_features_test',
            ),
            'user_permission' => 
            array (
              0 => 'create features_test content',
            ),
            'views_view' => 
            array (
              0 => 'features_test',
            ),
          ),
          'hidden' => '1',
          'version' => '7.x-2.3',
          'project' => 'features',
          'datestamp' => '1420492083',
        ),
        'schema_version' => 0,
        'project' => 'features',
        'version' => '7.x-2.3',
      ),
      'features' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/features/features.module',
        'basename' => 'features.module',
        'name' => 'features',
        'info' => 
        array (
          'name' => 'Features',
          'description' => 'Provides feature management for Drupal.',
          'core' => '7.x',
          'package' => 'Features',
          'files' => 
          array (
            0 => 'tests/features.test',
          ),
          'configure' => 'admin/structure/features/settings',
          'version' => '7.x-2.3',
          'project' => 'features',
          'datestamp' => '1420492083',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6101',
        'project' => 'features',
        'version' => '7.x-2.3',
      ),
      'media_bliptv' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/media_bliptv/media_bliptv.module',
        'basename' => 'media_bliptv.module',
        'name' => 'media_bliptv',
        'info' => 
        array (
          'name' => 'Media: BlipTV',
          'description' => 'Provides BlipTV support to the Media module.',
          'package' => 'Media',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'media_bliptv.module',
            1 => 'includes/MediaInternetBlipTVHandler.inc',
            2 => 'includes/MediaBlipTVStreamWrapper.inc',
            3 => 'includes/MediaBlipTVStyles.inc',
            4 => 'includes/media_bliptv.formatters.inc',
            5 => 'includes/media_bliptv.styles.inc',
            6 => 'includes/media_bliptv.variables.inc',
          ),
          'dependencies' => 
          array (
            0 => 'media_internet',
          ),
          'version' => '7.x-1.0-alpha1',
          'project' => 'media_bliptv',
          'datestamp' => '1339172779',
          'php' => '5.2.4',
        ),
        'schema_version' => '7011',
        'project' => 'media_bliptv',
        'version' => '7.x-1.0-alpha1',
      ),
      'entityreference_feeds_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/entityreference/tests/modules/entityreference_feeds_test/entityreference_feeds_test.module',
        'basename' => 'entityreference_feeds_test.module',
        'name' => 'entityreference_feeds_test',
        'info' => 
        array (
          'name' => 'Entityreference - Feeds integration tests',
          'description' => 'Support module for the Entityreference - Feeds integration tests.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'feeds',
            1 => 'feeds_ui',
            2 => 'entityreference',
          ),
          'version' => '7.x-1.1',
          'project' => 'entityreference',
          'datestamp' => '1384973110',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entityreference',
        'version' => '7.x-1.1',
      ),
      'entityreference_behavior_example' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/entityreference/examples/entityreference_behavior_example/entityreference_behavior_example.module',
        'basename' => 'entityreference_behavior_example.module',
        'name' => 'entityreference_behavior_example',
        'info' => 
        array (
          'name' => 'Entity Reference Behavior Example',
          'description' => 'Provides some example code for implementing Entity Reference behaviors.',
          'core' => '7.x',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'entityreference',
          ),
          'version' => '7.x-1.1',
          'project' => 'entityreference',
          'datestamp' => '1384973110',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entityreference',
        'version' => '7.x-1.1',
      ),
      'entityreference' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/entityreference/entityreference.module',
        'basename' => 'entityreference.module',
        'name' => 'entityreference',
        'info' => 
        array (
          'name' => 'Entity Reference',
          'description' => 'Provides a field that can reference other entities.',
          'core' => '7.x',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'entity',
            1 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'entityreference.migrate.inc',
            1 => 'plugins/selection/abstract.inc',
            2 => 'plugins/selection/views.inc',
            3 => 'plugins/behavior/abstract.inc',
            4 => 'views/entityreference_plugin_display.inc',
            5 => 'views/entityreference_plugin_style.inc',
            6 => 'views/entityreference_plugin_row_fields.inc',
            7 => 'tests/entityreference.handlers.test',
            8 => 'tests/entityreference.taxonomy.test',
            9 => 'tests/entityreference.admin.test',
            10 => 'tests/entityreference.feeds.test',
          ),
          'version' => '7.x-1.1',
          'project' => 'entityreference',
          'datestamp' => '1384973110',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'entityreference',
        'version' => '7.x-1.1',
      ),
      'linkchecker' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/linkchecker/linkchecker.module',
        'basename' => 'linkchecker.module',
        'name' => 'linkchecker',
        'info' => 
        array (
          'name' => 'Link checker',
          'description' => 'Periodically checks for broken links in node types, blocks and fields and reports the results.',
          'configure' => 'admin/config/content/linkchecker',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'linkchecker.drush.inc',
            1 => 'linkchecker.test',
          ),
          'version' => '7.x-1.2',
          'project' => 'linkchecker',
          'datestamp' => '1402132428',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7011',
        'project' => 'linkchecker',
        'version' => '7.x-1.2',
      ),
      'gvj_social' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/gvj_social/gvj_social.module',
        'basename' => 'gvj_social.module',
        'name' => 'gvj_social',
        'info' => 
        array (
          'name' => 'GVJ Social',
          'description' => 'Social media integration with sharethis and follow links.',
          'core' => '7.x',
          'package' => 'GVJ',
          'php' => '5.2.4',
          'dependencies' => 
          array (
            0 => 'base_core',
            1 => 'ctools',
            2 => 'features',
            3 => 'follow',
            4 => 'sharethis',
            5 => 'strongarm',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'strongarm:strongarm:1',
            ),
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'user_permission' => 
            array (
              0 => 'administer follow',
              1 => 'administer sharethis',
              2 => 'change follow link titles',
              3 => 'edit any user follow links',
              4 => 'edit own follow links',
              5 => 'edit site follow links',
            ),
            'variable' => 
            array (
              0 => 'sharethis_button_option',
              1 => 'sharethis_location',
              2 => 'sharethis_service_option',
            ),
          ),
          'version' => NULL,
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'context_ui' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/context/context_ui/context_ui.module',
        'basename' => 'context_ui.module',
        'name' => 'context_ui',
        'info' => 
        array (
          'name' => 'Context UI',
          'description' => 'Provides a simple UI for settings up a site structure using Context.',
          'dependencies' => 
          array (
            0 => 'context',
          ),
          'package' => 'Context',
          'core' => '7.x',
          'configure' => 'admin/structure/context',
          'files' => 
          array (
            0 => 'context.module',
            1 => 'tests/context_ui.test',
          ),
          'version' => '7.x-3.6',
          'project' => 'context',
          'datestamp' => '1420573188',
          'php' => '5.2.4',
        ),
        'schema_version' => '6004',
        'project' => 'context',
        'version' => '7.x-3.6',
      ),
      'context_layouts' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/context/context_layouts/context_layouts.module',
        'basename' => 'context_layouts.module',
        'name' => 'context_layouts',
        'info' => 
        array (
          'name' => 'Context layouts',
          'description' => 'Allow theme layer to provide multiple region layouts and integrate with context.',
          'dependencies' => 
          array (
            0 => 'context',
          ),
          'package' => 'Context',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'plugins/context_layouts_reaction_block.inc',
          ),
          'version' => '7.x-3.6',
          'project' => 'context',
          'datestamp' => '1420573188',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'context',
        'version' => '7.x-3.6',
      ),
      'context' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/context/context.module',
        'basename' => 'context.module',
        'name' => 'context',
        'info' => 
        array (
          'name' => 'Context',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'description' => 'Provide modules with a cache that lasts for a single page request.',
          'package' => 'Context',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tests/context.test',
            1 => 'tests/context.conditions.test',
            2 => 'tests/context.reactions.test',
          ),
          'version' => '7.x-3.6',
          'project' => 'context',
          'datestamp' => '1420573188',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'context',
        'version' => '7.x-3.6',
      ),
      'media_colorbox' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/media_colorbox/media_colorbox.module',
        'basename' => 'media_colorbox.module',
        'name' => 'media_colorbox',
        'info' => 
        array (
          'name' => 'Media Colorbox',
          'description' => 'Provides integration between the Media module (file entities) and the Colorbox module.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'media_colorbox.module',
          ),
          'dependencies' => 
          array (
            0 => 'file_entity',
            1 => 'colorbox',
          ),
          'scripts' => 
          array (
            0 => 'media_colorbox.js',
          ),
          'version' => '7.x-1.0-rc4',
          'project' => 'media_colorbox',
          'datestamp' => '1375920182',
          'php' => '5.2.4',
        ),
        'schema_version' => '7101',
        'project' => 'media_colorbox',
        'version' => '7.x-1.0-rc4',
      ),
      'genpass' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/genpass/genpass.module',
        'basename' => 'genpass.module',
        'name' => 'genpass',
        'info' => 
        array (
          'name' => 'Generate Password',
          'description' => 'Generate a password when adding a new user.',
          'core' => '7.x',
          'configure' => 'admin/config/people/accounts',
          'version' => '7.x-1.0',
          'project' => 'genpass',
          'datestamp' => '1329772844',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'genpass',
        'version' => '7.x-1.0',
      ),
      'realname' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/realname/realname.module',
        'basename' => 'realname.module',
        'name' => 'realname',
        'info' => 
        array (
          'name' => 'Real name',
          'description' => 'Provides token-based name displays for users.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'token',
          ),
          'files' => 
          array (
            0 => 'realname.module',
            1 => 'realname.admin.inc',
            2 => 'realname.pages.inc',
            3 => 'realname.tokens.inc',
            4 => 'realname.test',
            5 => 'realname.install',
          ),
          'configure' => 'admin/config/people/realname',
          'version' => '7.x-1.2',
          'project' => 'realname',
          'datestamp' => '1393160306',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'realname',
        'version' => '7.x-1.2',
      ),
      'session_api_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/session_api/tests/session_api_test.module',
        'basename' => 'session_api_test.module',
        'name' => 'session_api_test',
        'info' => 
        array (
          'name' => 'Session API test',
          'description' => 'Helper module for Session API testing.',
          'package' => 'Testing',
          'version' => '7.x-1.0-rc1',
          'dependencies' => 
          array (
            0 => 'session_api',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'session_api_test.module',
          ),
          'hidden' => true,
          'project' => 'session_api',
          'datestamp' => '1354234727',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'session_api',
        'version' => '7.x-1.0-rc1',
      ),
      'session_api' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/session_api/session_api.module',
        'basename' => 'session_api.module',
        'name' => 'session_api',
        'info' => 
        array (
          'name' => 'Session API',
          'description' => 'Provides an interface for storing session information.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'session_api.module',
            1 => 'session_api.admin.inc',
            2 => 'session_api.install',
            3 => 'session_api.test',
          ),
          'configure' => 'admin/config/development/session-api',
          'version' => '7.x-1.0-rc1',
          'project' => 'session_api',
          'datestamp' => '1354234727',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7102',
        'project' => 'session_api',
        'version' => '7.x-1.0-rc1',
      ),
      'gvj_article' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/gvj_article/gvj_article.module',
        'basename' => 'gvj_article.module',
        'name' => 'gvj_article',
        'info' => 
        array (
          'name' => 'GVJ Article',
          'description' => 'Provides an article content type, suitable for time-conscious articles',
          'core' => '7.x',
          'package' => 'GVJ',
          'php' => '5.2.4',
          'dependencies' => 
          array (
            0 => 'apps_compatible',
            1 => 'base_article',
            2 => 'comment',
            3 => 'ctools',
            4 => 'ds',
            5 => 'features',
            6 => 'file',
            7 => 'honeypot',
            8 => 'media',
            9 => 'strongarm',
          ),
          'author' => 'Guillaume Viguier-Just',
          'author_url' => 'http://www.viguierjust.com',
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'ds:ds:1',
              1 => 'strongarm:strongarm:1',
            ),
            'ds_field_settings' => 
            array (
              0 => 'node|article|teaser',
            ),
            'ds_layout_settings' => 
            array (
              0 => 'node|article|teaser',
            ),
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'field_base' => 
            array (
              0 => 'field_attachments',
            ),
            'field_instance' => 
            array (
              0 => 'node-article-field_attachments',
            ),
            'variable' => 
            array (
              0 => 'field_bundle_settings_node__article',
              1 => 'honeypot_form_comment_node_article_form',
            ),
          ),
          'version' => NULL,
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'countries_example' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/countries/modules/countries_example/countries_example.module',
        'basename' => 'countries_example.module',
        'name' => 'countries_example',
        'info' => 
        array (
          'name' => 'Countries Example',
          'description' => 'Countries example module',
          'core' => '7.x',
          'package' => 'Example modules',
          'dependencies' => 
          array (
            0 => 'countries',
          ),
          'version' => '7.x-2.3',
          'project' => 'countries',
          'datestamp' => '1409450929',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'countries',
        'version' => '7.x-2.3',
      ),
      'countries_configuration' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/countries/modules/countries_configuration/countries_configuration.module',
        'basename' => 'countries_configuration.module',
        'name' => 'countries_configuration',
        'info' => 
        array (
          'name' => 'Countries configuration',
          'description' => 'A configuration utility module to assist storing country specific data.',
          'package' => 'Fields',
          'version' => '7.x-2.3',
          'core' => '7.x',
          'project' => 'countries',
          'datestamp' => '1409450929',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'countries',
        'version' => '7.x-2.3',
      ),
      'countries_i18n' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/countries/modules/countries_i18n/countries_i18n.module',
        'basename' => 'countries_i18n.module',
        'name' => 'countries_i18n',
        'info' => 
        array (
          'name' => 'Countries translation',
          'description' => 'Translation of countries.',
          'core' => '7.x',
          'package' => 'Multilingual - Internationalization',
          'dependencies' => 
          array (
            0 => 'countries',
            1 => 'i18n_string',
          ),
          'version' => '7.x-2.3',
          'project' => 'countries',
          'datestamp' => '1409450929',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'countries',
        'version' => '7.x-2.3',
      ),
      'countries' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/countries/countries.module',
        'basename' => 'countries.module',
        'name' => 'countries',
        'info' => 
        array (
          'name' => 'Countries',
          'description' => 'A module that provides a FAPI / Field country element and a simple wrapper module to store / update country data.',
          'package' => 'Fields',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'views/views_handler_argument_countries_country.inc',
            1 => 'views/views_handler_field_countries_continent.inc',
            2 => 'views/views_handler_filter_countries_continents_list.inc',
            3 => 'views/views_handler_filter_countries_list.inc',
            4 => 'countries.migrate.inc',
            5 => 'tests/countries.test',
          ),
          'configure' => 'admin/config/regional/countries',
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'recommends' => 
          array (
            0 => 'countryicons',
          ),
          'version' => '7.x-2.3',
          'project' => 'countries',
          'datestamp' => '1409450929',
          'php' => '5.2.4',
        ),
        'schema_version' => '7205',
        'project' => 'countries',
        'version' => '7.x-2.3',
      ),
      'base_article' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/base_article/base_article.module',
        'basename' => 'base_article.module',
        'name' => 'base_article',
        'info' => 
        array (
          'name' => 'Base Article',
          'description' => 'Provides an article content type, suitable for time-conscious articles',
          'core' => '7.x',
          'package' => 'Base',
          'php' => '5.2.4',
          'dependencies' => 
          array (
            0 => 'apps_compatible',
            1 => 'base_core',
            2 => 'base_media',
            3 => 'ctools',
            4 => 'features',
            5 => 'media',
            6 => 'node',
            7 => 'strongarm',
            8 => 'taxonomy',
            9 => 'text',
            10 => 'title',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'strongarm:strongarm:1',
            ),
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'field_instance' => 
            array (
              0 => 'node-article-body',
              1 => 'node-article-field_content_image',
              2 => 'node-article-field_tags',
              3 => 'node-article-title_field',
            ),
            'node' => 
            array (
              0 => 'article',
            ),
            'user_permission' => 
            array (
              0 => 'create article content',
              1 => 'delete any article content',
              2 => 'delete own article content',
              3 => 'edit any article content',
              4 => 'edit own article content',
            ),
            'variable' => 
            array (
              0 => 'comment_anonymous_article',
              1 => 'comment_article',
              2 => 'comment_default_mode_article',
              3 => 'comment_default_per_page_article',
              4 => 'comment_form_location_article',
              5 => 'comment_preview_article',
              6 => 'comment_subject_field_article',
              7 => 'node_options_article',
              8 => 'node_preview_article',
              9 => 'node_submitted_article',
            ),
          ),
          'features_exclude' => 
          array (
            'dependencies' => 
            array (
              'image' => 'image',
            ),
            'field_base' => 
            array (
              'body' => 'body',
              'field_content_image' => 'field_content_image',
              'title_field' => 'title_field',
            ),
          ),
          'version' => NULL,
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'variable_views' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/variable/variable_views/variable_views.module',
        'basename' => 'variable_views.module',
        'name' => 'variable_views',
        'info' => 
        array (
          'name' => 'Variable views',
          'description' => 'Provides views integration for variable, included a default variable argument.',
          'dependencies' => 
          array (
            0 => 'variable',
            1 => 'views',
          ),
          'package' => 'Variable',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/views_plugin_argument_default_variable.inc',
            1 => 'includes/views_handler_field_variable_title.inc',
            2 => 'includes/views_handler_field_variable_value.inc',
          ),
          'version' => '7.x-2.5',
          'project' => 'variable',
          'datestamp' => '1398250128',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'variable',
        'version' => '7.x-2.5',
      ),
      'variable_example' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/variable/variable_example/variable_example.module',
        'basename' => 'variable_example.module',
        'name' => 'variable_example',
        'info' => 
        array (
          'name' => 'Variable example',
          'description' => 'An example module showing how to use the Variable API and providing some variables.',
          'dependencies' => 
          array (
            0 => 'variable',
            1 => 'variable_store',
          ),
          'package' => 'Example modules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'variable_example.variable.inc',
          ),
          'version' => '7.x-2.5',
          'project' => 'variable',
          'datestamp' => '1398250128',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'variable',
        'version' => '7.x-2.5',
      ),
      'variable_realm' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/variable/variable_realm/variable_realm.module',
        'basename' => 'variable_realm.module',
        'name' => 'variable_realm',
        'info' => 
        array (
          'name' => 'Variable realm',
          'description' => 'API to use variable realms from different modules',
          'dependencies' => 
          array (
            0 => 'variable',
          ),
          'package' => 'Variable',
          'core' => '7.x',
          'version' => '7.x-2.5',
          'files' => 
          array (
            0 => 'variable_realm.class.inc',
            1 => 'variable_realm_union.class.inc',
          ),
          'project' => 'variable',
          'datestamp' => '1398250128',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'variable',
        'version' => '7.x-2.5',
      ),
      'variable_admin' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/variable/variable_admin/variable_admin.module',
        'basename' => 'variable_admin.module',
        'name' => 'variable_admin',
        'info' => 
        array (
          'name' => 'Variable admin',
          'description' => 'Variable Administration UI',
          'dependencies' => 
          array (
            0 => 'variable',
          ),
          'package' => 'Variable',
          'core' => '7.x',
          'version' => '7.x-2.5',
          'project' => 'variable',
          'datestamp' => '1398250128',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'variable',
        'version' => '7.x-2.5',
      ),
      'variable_store' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/variable/variable_store/variable_store.module',
        'basename' => 'variable_store.module',
        'name' => 'variable_store',
        'info' => 
        array (
          'name' => 'Variable store',
          'description' => 'Database storage for variable realms. This is an API module.',
          'dependencies' => 
          array (
            0 => 'variable',
          ),
          'package' => 'Variable',
          'core' => '7.x',
          'version' => '7.x-2.5',
          'files' => 
          array (
            0 => 'variable_store.class.inc',
            1 => 'variable_store.test',
          ),
          'project' => 'variable',
          'datestamp' => '1398250128',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'variable',
        'version' => '7.x-2.5',
      ),
      'variable' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/variable/variable.module',
        'basename' => 'variable.module',
        'name' => 'variable',
        'info' => 
        array (
          'name' => 'Variable',
          'description' => 'Variable Information and basic variable API',
          'package' => 'Variable',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/forum.variable.inc',
            1 => 'includes/locale.variable.inc',
            2 => 'includes/menu.variable.inc',
            3 => 'includes/node.variable.inc',
            4 => 'includes/system.variable.inc',
            5 => 'includes/taxonomy.variable.inc',
            6 => 'includes/translation.variable.inc',
            7 => 'includes/user.variable.inc',
            8 => 'variable.test',
          ),
          'version' => '7.x-2.5',
          'project' => 'variable',
          'datestamp' => '1398250128',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'variable',
        'version' => '7.x-2.5',
      ),
      'languageicons' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/languageicons/languageicons.module',
        'basename' => 'languageicons.module',
        'name' => 'languageicons',
        'info' => 
        array (
          'name' => 'Language Icons',
          'description' => 'Adds icons to language links.',
          'dependencies' => 
          array (
            0 => 'locale',
          ),
          'package' => 'Multilingual',
          'core' => '7.x',
          'configure' => 'admin/config/regional/language/icons',
          'version' => '7.x-1.1',
          'project' => 'languageicons',
          'datestamp' => '1399825730',
          'php' => '5.2.4',
        ),
        'schema_version' => '6200',
        'project' => 'languageicons',
        'version' => '7.x-1.1',
      ),
      'commerce_bank_transfer' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/commerce_bank_transfer/commerce_bank_transfer.module',
        'basename' => 'commerce_bank_transfer.module',
        'name' => 'commerce_bank_transfer',
        'info' => 
        array (
          'name' => 'Commerce Bank Transfer',
          'description' => 'Provides the Bank Transfer payment method for use with Drupal Commerce.',
          'package' => 'Commerce (contrib)',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_ui',
            2 => 'commerce_payment',
            3 => 'commerce_order',
          ),
          'core' => '7.x',
          'version' => '7.x-1.0-alpha3',
          'project' => 'commerce_bank_transfer',
          'datestamp' => '1332606952',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce_bank_transfer',
        'version' => '7.x-1.0-alpha3',
      ),
      'l10n_update' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/l10n_update/l10n_update.module',
        'basename' => 'l10n_update.module',
        'name' => 'l10n_update',
        'info' => 
        array (
          'name' => 'Localization update',
          'description' => 'Provides automatic downloads and updates for translations.',
          'dependencies' => 
          array (
            0 => 'locale',
          ),
          'core' => '7.x',
          'package' => 'Multilingual',
          'files' => 
          array (
            0 => 'l10n_update.parser.inc',
          ),
          'version' => '7.x-1.1+1-dev',
          'project' => 'l10n_update',
          'datestamp' => '1420798382',
          'php' => '5.2.4',
        ),
        'schema_version' => '7006',
        'project' => 'l10n_update',
        'version' => '7.x-1.1+1-dev',
      ),
      'base_page' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/base_page/base_page.module',
        'basename' => 'base_page.module',
        'name' => 'base_page',
        'info' => 
        array (
          'name' => 'Base Page',
          'description' => 'Provides a content type suitable for static content, such as an About Us page',
          'core' => '7.x',
          'package' => 'Base',
          'dependencies' => 
          array (
            0 => 'apps_compatible',
            1 => 'base_core',
            2 => 'base_media',
            3 => 'features',
            4 => 'media',
            5 => 'node',
            6 => 'strongarm',
            7 => 'text',
            8 => 'title',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'strongarm:strongarm:1',
            ),
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'field_instance' => 
            array (
              0 => 'node-page-body',
              1 => 'node-page-field_content_image',
              2 => 'node-page-title_field',
            ),
            'node' => 
            array (
              0 => 'page',
            ),
            'user_permission' => 
            array (
              0 => 'create page content',
              1 => 'delete any page content',
              2 => 'delete own page content',
              3 => 'edit any page content',
              4 => 'edit own page content',
            ),
            'variable' => 
            array (
              0 => 'comment_anonymous_page',
              1 => 'comment_default_mode_page',
              2 => 'comment_default_per_page_page',
              3 => 'comment_form_location_page',
              4 => 'comment_page',
              5 => 'comment_preview_page',
              6 => 'comment_subject_field_page',
              7 => 'node_options_page',
              8 => 'node_preview_page',
              9 => 'node_submitted_page',
            ),
          ),
          'features_exclude' => 
          array (
            'dependencies' => 
            array (
              'image' => 'image',
            ),
            'field_base' => 
            array (
              'body' => 'body',
              'title_field' => 'title_field',
            ),
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'gvj_commons' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/gvj_commons/gvj_commons.module',
        'basename' => 'gvj_commons.module',
        'name' => 'gvj_commons',
        'info' => 
        array (
          'name' => 'GVJ Commons',
          'description' => 'Common modules',
          'core' => '7.x',
          'package' => 'GVJ',
          'author' => 'Guillaume Viguier-Just',
          'author_url' => 'http://www.viguierjust.com',
          'dependencies' => 
          array (
            0 => 'back_to_top',
            1 => 'l10n_update',
            2 => 'openid',
            3 => 'shortcut',
            4 => 'strongarm',
            5 => 'tinynav',
            6 => 'toolbar',
          ),
          'features' => 
          array (
            'variable' => 
            array (
              0 => 'admin_theme',
            ),
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'colorbox' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/colorbox/colorbox.module',
        'basename' => 'colorbox.module',
        'name' => 'colorbox',
        'info' => 
        array (
          'name' => 'Colorbox',
          'description' => 'A light-weight, customizable lightbox plugin for jQuery 1.4.3+.',
          'dependencies' => 
          array (
            0 => 'libraries (2.x)',
          ),
          'core' => '7.x',
          'configure' => 'admin/config/media/colorbox',
          'files' => 
          array (
            0 => 'views/colorbox_handler_field_colorbox.inc',
          ),
          'version' => '7.x-2.8',
          'project' => 'colorbox',
          'datestamp' => '1410514129',
          'php' => '5.2.4',
        ),
        'schema_version' => '7202',
        'project' => 'colorbox',
        'version' => '7.x-2.8',
      ),
      'base_core' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/base_core/base_core.module',
        'basename' => 'base_core.module',
        'name' => 'base_core',
        'info' => 
        array (
          'name' => 'Base Core',
          'description' => 'Core functionalities for Base',
          'core' => '7.x',
          'package' => 'Base',
          'dependencies' => 
          array (
            0 => 'apps_compatible',
            1 => 'ctools',
            2 => 'features',
            3 => 'filter',
            4 => 'image',
            5 => 'node',
            6 => 'role_export',
            7 => 'roleassign',
            8 => 'strongarm',
            9 => 'system',
            10 => 'taxonomy',
            11 => 'text',
            12 => 'user',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'strongarm:strongarm:1',
            ),
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'field_base' => 
            array (
              0 => 'body',
              1 => 'field_content_image',
              2 => 'field_tags',
              3 => 'title_field',
            ),
            'user_permission' => 
            array (
              0 => 'access administration pages',
              1 => 'access content',
              2 => 'access content overview',
              3 => 'access site in maintenance mode',
              4 => 'access site reports',
              5 => 'administer actions',
              6 => 'administer content types',
              7 => 'administer features',
              8 => 'administer filters',
              9 => 'administer modules',
              10 => 'administer nodes',
              11 => 'administer permissions',
              12 => 'administer site configuration',
              13 => 'administer software updates',
              14 => 'administer themes',
              15 => 'administer users',
              16 => 'assign roles',
              17 => 'block IP addresses',
              18 => 'bypass node access',
              19 => 'delete revisions',
              20 => 'manage features',
              21 => 'revert revisions',
              22 => 'view own unpublished content',
              23 => 'view revisions',
              24 => 'view the administration theme',
            ),
            'user_role' => 
            array (
              0 => 'administrator',
              1 => 'contributor',
              2 => 'editor',
              3 => 'manager',
            ),
            'variable' => 
            array (
              0 => 'roleassign_roles',
              1 => 'user_admin_role',
            ),
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'votingapi' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/votingapi/votingapi.module',
        'basename' => 'votingapi.module',
        'name' => 'votingapi',
        'info' => 
        array (
          'name' => 'Voting API',
          'description' => 'Provides a shared voting API for other modules.',
          'package' => 'Voting',
          'core' => '7.x',
          'configure' => 'admin/config/search/votingapi',
          'files' => 
          array (
            0 => 'tests/votingapi.test',
            1 => 'views/votingapi_views_handler_field_value.inc',
            2 => 'views/votingapi_views_handler_sort_nullable.inc',
            3 => 'views/votingapi_views_handler_relationship.inc',
          ),
          'version' => '7.x-2.12',
          'project' => 'votingapi',
          'datestamp' => '1407995929',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7203',
        'project' => 'votingapi',
        'version' => '7.x-2.12',
      ),
      'gvj_wysiwyg' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/gvj_wysiwyg/gvj_wysiwyg.module',
        'basename' => 'gvj_wysiwyg.module',
        'name' => 'gvj_wysiwyg',
        'info' => 
        array (
          'name' => 'GVJ WYSIWYG',
          'description' => 'Enable WYSIWYG editor',
          'core' => '7.x',
          'package' => 'GVJ',
          'dependencies' => 
          array (
            0 => 'base_media',
            1 => 'base_wysiwyg',
            2 => 'features',
          ),
          'features' => 
          array (
            'features_api' => 
            array (
              0 => 'api:1',
            ),
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'gvj_page' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/gvj_page/gvj_page.module',
        'basename' => 'gvj_page.module',
        'name' => 'gvj_page',
        'info' => 
        array (
          'name' => 'GVJ Page',
          'description' => 'Provides a content type suitable for static content, such as an About Us page',
          'core' => '7.x',
          'package' => 'GVJ',
          'author' => 'Guillaume Viguier-Just',
          'author_url' => 'http://www.viguierjust.com',
          'dependencies' => 
          array (
            0 => 'base_page',
            1 => 'features',
            2 => 'pathauto',
            3 => 'strongarm',
          ),
          'features' => 
          array (
            'variable' => 
            array (
              0 => 'pathauto_node_page_pattern',
            ),
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'geofield_map' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/geofield/modules/geofield_map/geofield_map.module',
        'basename' => 'geofield_map.module',
        'name' => 'geofield_map',
        'info' => 
        array (
          'name' => 'Geofield Map',
          'description' => 'Provides a basic mapping interface for Geofields.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'geofield',
          ),
          'files' => 
          array (
            0 => 'includes/geofield_map.views.inc',
            1 => 'includes/geofield_map_plugin_style_map.inc',
          ),
          'version' => '7.x-2.3',
          'project' => 'geofield',
          'datestamp' => '1411337638',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'geofield',
        'version' => '7.x-2.3',
      ),
      'geofield_openlayers_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/geofield/tests/geofield_openlayers_test.module',
        'basename' => 'geofield_openlayers_test.module',
        'name' => 'geofield_openlayers_test',
        'info' => 
        array (
          'name' => 'Geofield/Openlayers Integration tests',
          'description' => 'Integration tests for Geofield and Openlayers',
          'core' => '7.x',
          'hidden' => true,
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'geofield',
            1 => 'openlayers',
          ),
          'files' => 
          array (
            0 => 'geofield_openlayers.test',
          ),
          'version' => '7.x-2.3',
          'project' => 'geofield',
          'datestamp' => '1411337638',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'geofield',
        'version' => '7.x-2.3',
      ),
      'geofield_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/geofield/tests/geofield_test.module',
        'basename' => 'geofield_test.module',
        'name' => 'geofield_test',
        'info' => 
        array (
          'name' => 'Geofield test',
          'description' => 'Support module for the Geofield tests.',
          'core' => '7.x',
          'hidden' => true,
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'geocoder',
            1 => 'geofield',
          ),
          'version' => '7.x-2.3',
          'project' => 'geofield',
          'datestamp' => '1411337638',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'geofield',
        'version' => '7.x-2.3',
      ),
      'geofield' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/geofield/geofield.module',
        'basename' => 'geofield.module',
        'name' => 'geofield',
        'info' => 
        array (
          'name' => 'Geofield',
          'description' => 'Stores geographic and location data (points, lines, and polygons).',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'geophp (>=1.7)',
            1 => 'ctools',
          ),
          'package' => 'Fields',
          'files' => 
          array (
            0 => 'geofield.module',
            1 => 'geofield.install',
            2 => 'geofield.elements.inc',
            3 => 'geofield.widgets.inc',
            4 => 'geofield.formatters.inc',
            5 => 'geofield.openlayers.inc',
            6 => 'geofield.feeds.inc',
            7 => 'tests/geofield.test',
            8 => 'views/geofield.views.inc',
            9 => 'views/handlers/geofield_handler_sort.inc',
            10 => 'views/handlers/geofield_handler_field.inc',
            11 => 'views/handlers/geofield_handler_filter.inc',
            12 => 'views/handlers/geofield_handler_argument_proximity.inc',
            13 => 'views/proximity_plugins/geofieldProximityBase.inc',
            14 => 'views/proximity_plugins/geofieldProximityManual.inc',
            15 => 'views/proximity_plugins/geofieldProximityGeocoder.inc',
            16 => 'views/proximity_plugins/geofieldProximityEntityURL.inc',
            17 => 'views/proximity_plugins/geofieldProximityOtherGeofield.inc',
            18 => 'views/proximity_plugins/geofieldProximityCurrentUser.inc',
            19 => 'views/proximity_plugins/geofieldProximityExposedFilter.inc',
            20 => 'views/proximity_plugins/geofieldProximityContextualFilter.inc',
          ),
          'version' => '7.x-2.3',
          'project' => 'geofield',
          'datestamp' => '1411337638',
          'php' => '5.2.4',
        ),
        'schema_version' => '7202',
        'project' => 'geofield',
        'version' => '7.x-2.3',
      ),
      'boxes' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/boxes/boxes.module',
        'basename' => 'boxes.module',
        'name' => 'boxes',
        'info' => 
        array (
          'name' => 'Boxes',
          'description' => 'Provides exports for custom blocks and spaces integration.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'block',
          ),
          'configure' => 'admin/config/user-interface/boxes',
          'files' => 
          array (
            0 => 'boxes.module',
            1 => 'boxes.admin.inc',
            2 => 'plugins/boxes_box.inc',
            3 => 'plugins/boxes_simple.inc',
            4 => 'plugins/spaces_controller_boxes.inc',
            5 => 'tests/boxes.test',
          ),
          'version' => '7.x-1.2',
          'project' => 'boxes',
          'datestamp' => '1404169729',
          'php' => '5.2.4',
        ),
        'schema_version' => '6103',
        'project' => 'boxes',
        'version' => '7.x-1.2',
      ),
      'views_data_export' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/views_data_export/views_data_export.module',
        'basename' => 'views_data_export.module',
        'name' => 'views_data_export',
        'info' => 
        array (
          'name' => 'Views Data Export',
          'description' => 'Plugin to export views data into various file formats',
          'package' => 'Views',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'files' => 
          array (
            0 => 'plugins/views_data_export_plugin_display_export.inc',
            1 => 'plugins/views_data_export_plugin_style_export.inc',
            2 => 'plugins/views_data_export_plugin_style_export_csv.inc',
            3 => 'plugins/views_data_export_plugin_style_export_xml.inc',
            4 => 'tests/base.test',
            5 => 'tests/csv_export.test',
            6 => 'tests/doc_export.test',
            7 => 'tests/txt_export.test',
            8 => 'tests/xls_export.test',
            9 => 'tests/xml_export.test',
          ),
          'version' => '7.x-3.0-beta8',
          'project' => 'views_data_export',
          'datestamp' => '1409118835',
          'php' => '5.2.4',
        ),
        'schema_version' => '7301',
        'project' => 'views_data_export',
        'version' => '7.x-3.0-beta8',
      ),
      'back_to_top' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/back_to_top/back_to_top.module',
        'basename' => 'back_to_top.module',
        'name' => 'back_to_top',
        'info' => 
        array (
          'name' => 'Back To Top',
          'description' => 'Back To Top adds a button that hovers in the bottom of your screen and allow users to smoothly scroll up the page using jQuery.',
          'core' => '7.x',
          'configure' => 'admin/config/user-interface/back_to_top',
          'version' => '7.x-1.4',
          'project' => 'back_to_top',
          'datestamp' => '1389092628',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'back_to_top',
        'version' => '7.x-1.4',
      ),
      'views_export' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/views/views_export/views_export.module',
        'basename' => 'views_export.module',
        'name' => 'views_export',
        'info' => 
        array (
          'dependencies' => 
          array (
          ),
          'description' => '',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'views_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/views/tests/views_test.module',
        'basename' => 'views_test.module',
        'name' => 'views_test',
        'info' => 
        array (
          'name' => 'Views Test',
          'description' => 'Test module for Views.',
          'package' => 'Views',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'hidden' => true,
          'version' => '7.x-3.8',
          'project' => 'views',
          'datestamp' => '1400618928',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views',
        'version' => '7.x-3.8',
      ),
      'views_ui' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/views/views_ui.module',
        'basename' => 'views_ui.module',
        'name' => 'views_ui',
        'info' => 
        array (
          'name' => 'Views UI',
          'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
          'package' => 'Views',
          'core' => '7.x',
          'configure' => 'admin/structure/views',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'files' => 
          array (
            0 => 'views_ui.module',
            1 => 'plugins/views_wizard/views_ui_base_views_wizard.class.php',
          ),
          'version' => '7.x-3.8',
          'project' => 'views',
          'datestamp' => '1400618928',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views',
        'version' => '7.x-3.8',
      ),
      'views' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/views/views.module',
        'basename' => 'views.module',
        'name' => 'views',
        'info' => 
        array (
          'name' => 'Views',
          'description' => 'Create customized lists and queries from your database.',
          'package' => 'Views',
          'core' => '7.x',
          'php' => '5.2',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/views.css',
            ),
          ),
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'handlers/views_handler_area.inc',
            1 => 'handlers/views_handler_area_messages.inc',
            2 => 'handlers/views_handler_area_result.inc',
            3 => 'handlers/views_handler_area_text.inc',
            4 => 'handlers/views_handler_area_text_custom.inc',
            5 => 'handlers/views_handler_area_view.inc',
            6 => 'handlers/views_handler_argument.inc',
            7 => 'handlers/views_handler_argument_date.inc',
            8 => 'handlers/views_handler_argument_formula.inc',
            9 => 'handlers/views_handler_argument_many_to_one.inc',
            10 => 'handlers/views_handler_argument_null.inc',
            11 => 'handlers/views_handler_argument_numeric.inc',
            12 => 'handlers/views_handler_argument_string.inc',
            13 => 'handlers/views_handler_argument_group_by_numeric.inc',
            14 => 'handlers/views_handler_field.inc',
            15 => 'handlers/views_handler_field_counter.inc',
            16 => 'handlers/views_handler_field_boolean.inc',
            17 => 'handlers/views_handler_field_contextual_links.inc',
            18 => 'handlers/views_handler_field_custom.inc',
            19 => 'handlers/views_handler_field_date.inc',
            20 => 'handlers/views_handler_field_entity.inc',
            21 => 'handlers/views_handler_field_markup.inc',
            22 => 'handlers/views_handler_field_math.inc',
            23 => 'handlers/views_handler_field_numeric.inc',
            24 => 'handlers/views_handler_field_prerender_list.inc',
            25 => 'handlers/views_handler_field_time_interval.inc',
            26 => 'handlers/views_handler_field_serialized.inc',
            27 => 'handlers/views_handler_field_machine_name.inc',
            28 => 'handlers/views_handler_field_url.inc',
            29 => 'handlers/views_handler_filter.inc',
            30 => 'handlers/views_handler_filter_boolean_operator.inc',
            31 => 'handlers/views_handler_filter_boolean_operator_string.inc',
            32 => 'handlers/views_handler_filter_combine.inc',
            33 => 'handlers/views_handler_filter_date.inc',
            34 => 'handlers/views_handler_filter_equality.inc',
            35 => 'handlers/views_handler_filter_entity_bundle.inc',
            36 => 'handlers/views_handler_filter_group_by_numeric.inc',
            37 => 'handlers/views_handler_filter_in_operator.inc',
            38 => 'handlers/views_handler_filter_many_to_one.inc',
            39 => 'handlers/views_handler_filter_numeric.inc',
            40 => 'handlers/views_handler_filter_string.inc',
            41 => 'handlers/views_handler_filter_fields_compare.inc',
            42 => 'handlers/views_handler_relationship.inc',
            43 => 'handlers/views_handler_relationship_groupwise_max.inc',
            44 => 'handlers/views_handler_sort.inc',
            45 => 'handlers/views_handler_sort_date.inc',
            46 => 'handlers/views_handler_sort_formula.inc',
            47 => 'handlers/views_handler_sort_group_by_numeric.inc',
            48 => 'handlers/views_handler_sort_menu_hierarchy.inc',
            49 => 'handlers/views_handler_sort_random.inc',
            50 => 'includes/base.inc',
            51 => 'includes/handlers.inc',
            52 => 'includes/plugins.inc',
            53 => 'includes/view.inc',
            54 => 'modules/aggregator/views_handler_argument_aggregator_fid.inc',
            55 => 'modules/aggregator/views_handler_argument_aggregator_iid.inc',
            56 => 'modules/aggregator/views_handler_argument_aggregator_category_cid.inc',
            57 => 'modules/aggregator/views_handler_field_aggregator_title_link.inc',
            58 => 'modules/aggregator/views_handler_field_aggregator_category.inc',
            59 => 'modules/aggregator/views_handler_field_aggregator_item_description.inc',
            60 => 'modules/aggregator/views_handler_field_aggregator_xss.inc',
            61 => 'modules/aggregator/views_handler_filter_aggregator_category_cid.inc',
            62 => 'modules/aggregator/views_plugin_row_aggregator_rss.inc',
            63 => 'modules/book/views_plugin_argument_default_book_root.inc',
            64 => 'modules/comment/views_handler_argument_comment_user_uid.inc',
            65 => 'modules/comment/views_handler_field_comment.inc',
            66 => 'modules/comment/views_handler_field_comment_depth.inc',
            67 => 'modules/comment/views_handler_field_comment_link.inc',
            68 => 'modules/comment/views_handler_field_comment_link_approve.inc',
            69 => 'modules/comment/views_handler_field_comment_link_delete.inc',
            70 => 'modules/comment/views_handler_field_comment_link_edit.inc',
            71 => 'modules/comment/views_handler_field_comment_link_reply.inc',
            72 => 'modules/comment/views_handler_field_comment_node_link.inc',
            73 => 'modules/comment/views_handler_field_comment_username.inc',
            74 => 'modules/comment/views_handler_field_ncs_last_comment_name.inc',
            75 => 'modules/comment/views_handler_field_ncs_last_updated.inc',
            76 => 'modules/comment/views_handler_field_node_comment.inc',
            77 => 'modules/comment/views_handler_field_node_new_comments.inc',
            78 => 'modules/comment/views_handler_field_last_comment_timestamp.inc',
            79 => 'modules/comment/views_handler_filter_comment_user_uid.inc',
            80 => 'modules/comment/views_handler_filter_ncs_last_updated.inc',
            81 => 'modules/comment/views_handler_filter_node_comment.inc',
            82 => 'modules/comment/views_handler_sort_comment_thread.inc',
            83 => 'modules/comment/views_handler_sort_ncs_last_comment_name.inc',
            84 => 'modules/comment/views_handler_sort_ncs_last_updated.inc',
            85 => 'modules/comment/views_plugin_row_comment_rss.inc',
            86 => 'modules/comment/views_plugin_row_comment_view.inc',
            87 => 'modules/contact/views_handler_field_contact_link.inc',
            88 => 'modules/field/views_handler_field_field.inc',
            89 => 'modules/field/views_handler_relationship_entity_reverse.inc',
            90 => 'modules/field/views_handler_argument_field_list.inc',
            91 => 'modules/field/views_handler_argument_field_list_string.inc',
            92 => 'modules/field/views_handler_filter_field_list.inc',
            93 => 'modules/filter/views_handler_field_filter_format_name.inc',
            94 => 'modules/locale/views_handler_field_node_language.inc',
            95 => 'modules/locale/views_handler_filter_node_language.inc',
            96 => 'modules/locale/views_handler_argument_locale_group.inc',
            97 => 'modules/locale/views_handler_argument_locale_language.inc',
            98 => 'modules/locale/views_handler_field_locale_group.inc',
            99 => 'modules/locale/views_handler_field_locale_language.inc',
            100 => 'modules/locale/views_handler_field_locale_link_edit.inc',
            101 => 'modules/locale/views_handler_filter_locale_group.inc',
            102 => 'modules/locale/views_handler_filter_locale_language.inc',
            103 => 'modules/locale/views_handler_filter_locale_version.inc',
            104 => 'modules/node/views_handler_argument_dates_various.inc',
            105 => 'modules/node/views_handler_argument_node_language.inc',
            106 => 'modules/node/views_handler_argument_node_nid.inc',
            107 => 'modules/node/views_handler_argument_node_type.inc',
            108 => 'modules/node/views_handler_argument_node_vid.inc',
            109 => 'modules/node/views_handler_argument_node_uid_revision.inc',
            110 => 'modules/node/views_handler_field_history_user_timestamp.inc',
            111 => 'modules/node/views_handler_field_node.inc',
            112 => 'modules/node/views_handler_field_node_link.inc',
            113 => 'modules/node/views_handler_field_node_link_delete.inc',
            114 => 'modules/node/views_handler_field_node_link_edit.inc',
            115 => 'modules/node/views_handler_field_node_revision.inc',
            116 => 'modules/node/views_handler_field_node_revision_link.inc',
            117 => 'modules/node/views_handler_field_node_revision_link_delete.inc',
            118 => 'modules/node/views_handler_field_node_revision_link_revert.inc',
            119 => 'modules/node/views_handler_field_node_path.inc',
            120 => 'modules/node/views_handler_field_node_type.inc',
            121 => 'modules/node/views_handler_filter_history_user_timestamp.inc',
            122 => 'modules/node/views_handler_filter_node_access.inc',
            123 => 'modules/node/views_handler_filter_node_status.inc',
            124 => 'modules/node/views_handler_filter_node_type.inc',
            125 => 'modules/node/views_handler_filter_node_uid_revision.inc',
            126 => 'modules/node/views_plugin_argument_default_node.inc',
            127 => 'modules/node/views_plugin_argument_validate_node.inc',
            128 => 'modules/node/views_plugin_row_node_rss.inc',
            129 => 'modules/node/views_plugin_row_node_view.inc',
            130 => 'modules/profile/views_handler_field_profile_date.inc',
            131 => 'modules/profile/views_handler_field_profile_list.inc',
            132 => 'modules/profile/views_handler_filter_profile_selection.inc',
            133 => 'modules/search/views_handler_argument_search.inc',
            134 => 'modules/search/views_handler_field_search_score.inc',
            135 => 'modules/search/views_handler_filter_search.inc',
            136 => 'modules/search/views_handler_sort_search_score.inc',
            137 => 'modules/search/views_plugin_row_search_view.inc',
            138 => 'modules/statistics/views_handler_field_accesslog_path.inc',
            139 => 'modules/system/views_handler_argument_file_fid.inc',
            140 => 'modules/system/views_handler_field_file.inc',
            141 => 'modules/system/views_handler_field_file_extension.inc',
            142 => 'modules/system/views_handler_field_file_filemime.inc',
            143 => 'modules/system/views_handler_field_file_uri.inc',
            144 => 'modules/system/views_handler_field_file_status.inc',
            145 => 'modules/system/views_handler_filter_file_status.inc',
            146 => 'modules/taxonomy/views_handler_argument_taxonomy.inc',
            147 => 'modules/taxonomy/views_handler_argument_term_node_tid.inc',
            148 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth.inc',
            149 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth_modifier.inc',
            150 => 'modules/taxonomy/views_handler_argument_vocabulary_vid.inc',
            151 => 'modules/taxonomy/views_handler_argument_vocabulary_machine_name.inc',
            152 => 'modules/taxonomy/views_handler_field_taxonomy.inc',
            153 => 'modules/taxonomy/views_handler_field_term_node_tid.inc',
            154 => 'modules/taxonomy/views_handler_field_term_link_edit.inc',
            155 => 'modules/taxonomy/views_handler_filter_term_node_tid.inc',
            156 => 'modules/taxonomy/views_handler_filter_term_node_tid_depth.inc',
            157 => 'modules/taxonomy/views_handler_filter_vocabulary_vid.inc',
            158 => 'modules/taxonomy/views_handler_filter_vocabulary_machine_name.inc',
            159 => 'modules/taxonomy/views_handler_relationship_node_term_data.inc',
            160 => 'modules/taxonomy/views_plugin_argument_validate_taxonomy_term.inc',
            161 => 'modules/taxonomy/views_plugin_argument_default_taxonomy_tid.inc',
            162 => 'modules/tracker/views_handler_argument_tracker_comment_user_uid.inc',
            163 => 'modules/tracker/views_handler_filter_tracker_comment_user_uid.inc',
            164 => 'modules/tracker/views_handler_filter_tracker_boolean_operator.inc',
            165 => 'modules/system/views_handler_filter_system_type.inc',
            166 => 'modules/translation/views_handler_argument_node_tnid.inc',
            167 => 'modules/translation/views_handler_field_node_link_translate.inc',
            168 => 'modules/translation/views_handler_field_node_translation_link.inc',
            169 => 'modules/translation/views_handler_filter_node_tnid.inc',
            170 => 'modules/translation/views_handler_filter_node_tnid_child.inc',
            171 => 'modules/translation/views_handler_relationship_translation.inc',
            172 => 'modules/user/views_handler_argument_user_uid.inc',
            173 => 'modules/user/views_handler_argument_users_roles_rid.inc',
            174 => 'modules/user/views_handler_field_user.inc',
            175 => 'modules/user/views_handler_field_user_language.inc',
            176 => 'modules/user/views_handler_field_user_link.inc',
            177 => 'modules/user/views_handler_field_user_link_cancel.inc',
            178 => 'modules/user/views_handler_field_user_link_edit.inc',
            179 => 'modules/user/views_handler_field_user_mail.inc',
            180 => 'modules/user/views_handler_field_user_name.inc',
            181 => 'modules/user/views_handler_field_user_permissions.inc',
            182 => 'modules/user/views_handler_field_user_picture.inc',
            183 => 'modules/user/views_handler_field_user_roles.inc',
            184 => 'modules/user/views_handler_filter_user_current.inc',
            185 => 'modules/user/views_handler_filter_user_name.inc',
            186 => 'modules/user/views_handler_filter_user_permissions.inc',
            187 => 'modules/user/views_handler_filter_user_roles.inc',
            188 => 'modules/user/views_plugin_argument_default_current_user.inc',
            189 => 'modules/user/views_plugin_argument_default_user.inc',
            190 => 'modules/user/views_plugin_argument_validate_user.inc',
            191 => 'modules/user/views_plugin_row_user_view.inc',
            192 => 'plugins/views_plugin_access.inc',
            193 => 'plugins/views_plugin_access_none.inc',
            194 => 'plugins/views_plugin_access_perm.inc',
            195 => 'plugins/views_plugin_access_role.inc',
            196 => 'plugins/views_plugin_argument_default.inc',
            197 => 'plugins/views_plugin_argument_default_php.inc',
            198 => 'plugins/views_plugin_argument_default_fixed.inc',
            199 => 'plugins/views_plugin_argument_default_raw.inc',
            200 => 'plugins/views_plugin_argument_validate.inc',
            201 => 'plugins/views_plugin_argument_validate_numeric.inc',
            202 => 'plugins/views_plugin_argument_validate_php.inc',
            203 => 'plugins/views_plugin_cache.inc',
            204 => 'plugins/views_plugin_cache_none.inc',
            205 => 'plugins/views_plugin_cache_time.inc',
            206 => 'plugins/views_plugin_display.inc',
            207 => 'plugins/views_plugin_display_attachment.inc',
            208 => 'plugins/views_plugin_display_block.inc',
            209 => 'plugins/views_plugin_display_default.inc',
            210 => 'plugins/views_plugin_display_embed.inc',
            211 => 'plugins/views_plugin_display_extender.inc',
            212 => 'plugins/views_plugin_display_feed.inc',
            213 => 'plugins/views_plugin_display_page.inc',
            214 => 'plugins/views_plugin_exposed_form_basic.inc',
            215 => 'plugins/views_plugin_exposed_form.inc',
            216 => 'plugins/views_plugin_exposed_form_input_required.inc',
            217 => 'plugins/views_plugin_localization_core.inc',
            218 => 'plugins/views_plugin_localization.inc',
            219 => 'plugins/views_plugin_localization_none.inc',
            220 => 'plugins/views_plugin_pager.inc',
            221 => 'plugins/views_plugin_pager_full.inc',
            222 => 'plugins/views_plugin_pager_mini.inc',
            223 => 'plugins/views_plugin_pager_none.inc',
            224 => 'plugins/views_plugin_pager_some.inc',
            225 => 'plugins/views_plugin_query.inc',
            226 => 'plugins/views_plugin_query_default.inc',
            227 => 'plugins/views_plugin_row.inc',
            228 => 'plugins/views_plugin_row_fields.inc',
            229 => 'plugins/views_plugin_row_rss_fields.inc',
            230 => 'plugins/views_plugin_style.inc',
            231 => 'plugins/views_plugin_style_default.inc',
            232 => 'plugins/views_plugin_style_grid.inc',
            233 => 'plugins/views_plugin_style_list.inc',
            234 => 'plugins/views_plugin_style_jump_menu.inc',
            235 => 'plugins/views_plugin_style_mapping.inc',
            236 => 'plugins/views_plugin_style_rss.inc',
            237 => 'plugins/views_plugin_style_summary.inc',
            238 => 'plugins/views_plugin_style_summary_jump_menu.inc',
            239 => 'plugins/views_plugin_style_summary_unformatted.inc',
            240 => 'plugins/views_plugin_style_table.inc',
            241 => 'tests/handlers/views_handlers.test',
            242 => 'tests/handlers/views_handler_area_text.test',
            243 => 'tests/handlers/views_handler_argument_null.test',
            244 => 'tests/handlers/views_handler_argument_string.test',
            245 => 'tests/handlers/views_handler_field.test',
            246 => 'tests/handlers/views_handler_field_boolean.test',
            247 => 'tests/handlers/views_handler_field_custom.test',
            248 => 'tests/handlers/views_handler_field_counter.test',
            249 => 'tests/handlers/views_handler_field_date.test',
            250 => 'tests/handlers/views_handler_field_file_extension.test',
            251 => 'tests/handlers/views_handler_field_file_size.test',
            252 => 'tests/handlers/views_handler_field_math.test',
            253 => 'tests/handlers/views_handler_field_url.test',
            254 => 'tests/handlers/views_handler_field_xss.test',
            255 => 'tests/handlers/views_handler_filter_combine.test',
            256 => 'tests/handlers/views_handler_filter_date.test',
            257 => 'tests/handlers/views_handler_filter_equality.test',
            258 => 'tests/handlers/views_handler_filter_in_operator.test',
            259 => 'tests/handlers/views_handler_filter_numeric.test',
            260 => 'tests/handlers/views_handler_filter_string.test',
            261 => 'tests/handlers/views_handler_sort_random.test',
            262 => 'tests/handlers/views_handler_sort_date.test',
            263 => 'tests/handlers/views_handler_sort.test',
            264 => 'tests/test_handlers/views_test_area_access.inc',
            265 => 'tests/test_plugins/views_test_plugin_access_test_dynamic.inc',
            266 => 'tests/test_plugins/views_test_plugin_access_test_static.inc',
            267 => 'tests/test_plugins/views_test_plugin_style_test_mapping.inc',
            268 => 'tests/plugins/views_plugin_display.test',
            269 => 'tests/styles/views_plugin_style_jump_menu.test',
            270 => 'tests/styles/views_plugin_style.test',
            271 => 'tests/styles/views_plugin_style_base.test',
            272 => 'tests/styles/views_plugin_style_mapping.test',
            273 => 'tests/styles/views_plugin_style_unformatted.test',
            274 => 'tests/views_access.test',
            275 => 'tests/views_analyze.test',
            276 => 'tests/views_basic.test',
            277 => 'tests/views_argument_default.test',
            278 => 'tests/views_argument_validator.test',
            279 => 'tests/views_exposed_form.test',
            280 => 'tests/field/views_fieldapi.test',
            281 => 'tests/views_glossary.test',
            282 => 'tests/views_groupby.test',
            283 => 'tests/views_handlers.test',
            284 => 'tests/views_module.test',
            285 => 'tests/views_pager.test',
            286 => 'tests/views_plugin_localization_test.inc',
            287 => 'tests/views_translatable.test',
            288 => 'tests/views_query.test',
            289 => 'tests/views_upgrade.test',
            290 => 'tests/views_test.views_default.inc',
            291 => 'tests/comment/views_handler_argument_comment_user_uid.test',
            292 => 'tests/comment/views_handler_filter_comment_user_uid.test',
            293 => 'tests/node/views_node_revision_relations.test',
            294 => 'tests/taxonomy/views_handler_relationship_node_term_data.test',
            295 => 'tests/user/views_handler_field_user_name.test',
            296 => 'tests/user/views_user_argument_default.test',
            297 => 'tests/user/views_user_argument_validate.test',
            298 => 'tests/user/views_user.test',
            299 => 'tests/views_cache.test',
            300 => 'tests/views_view.test',
            301 => 'tests/views_ui.test',
          ),
          'version' => '7.x-3.8',
          'project' => 'views',
          'datestamp' => '1400618928',
        ),
        'schema_version' => '7301',
        'project' => 'views',
        'version' => '7.x-3.8',
      ),
      'title_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/title/tests/title_test.module',
        'basename' => 'title_test.module',
        'name' => 'title_test',
        'info' => 
        array (
          'name' => 'Title Test',
          'description' => 'Testing module for Title module functionality. Do not enable.',
          'core' => '7.x',
          'package' => 'Testing',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'title',
            1 => 'entity',
            2 => 'entity_translation',
          ),
          'version' => '7.x-1.0-alpha7',
          'project' => 'title',
          'datestamp' => '1363626024',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'title',
        'version' => '7.x-1.0-alpha7',
      ),
      'title' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/title/title.module',
        'basename' => 'title.module',
        'name' => 'title',
        'info' => 
        array (
          'name' => 'Title',
          'description' => 'Replaces entity legacy fields with regular fields.',
          'core' => '7.x',
          'package' => 'Fields',
          'configure' => 'admin/config/content/title',
          'dependencies' => 
          array (
            0 => 'system (>7.14)',
          ),
          'files' => 
          array (
            0 => 'title.module',
            1 => 'views/views_handler_title_field.inc',
            2 => 'tests/title.test',
          ),
          'version' => '7.x-1.0-alpha7',
          'project' => 'title',
          'datestamp' => '1363626024',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'title',
        'version' => '7.x-1.0-alpha7',
      ),
      'libraries_test_module' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/libraries/tests/modules/libraries_test_module/libraries_test_module.module',
        'basename' => 'libraries_test_module.module',
        'name' => 'libraries_test_module',
        'info' => 
        array (
          'name' => 'Libraries test module',
          'description' => 'Tests library detection and loading.',
          'core' => '7.x',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'libraries',
          ),
          'hidden' => true,
          'version' => '7.x-2.2',
          'project' => 'libraries',
          'datestamp' => '1391965716',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'libraries',
        'version' => '7.x-2.2',
      ),
      'libraries' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/libraries/libraries.module',
        'basename' => 'libraries.module',
        'name' => 'libraries',
        'info' => 
        array (
          'name' => 'Libraries',
          'description' => 'Allows version-dependent and shared usage of external libraries.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'system (>=7.11)',
          ),
          'files' => 
          array (
            0 => 'tests/libraries.test',
          ),
          'version' => '7.x-2.2',
          'project' => 'libraries',
          'datestamp' => '1391965716',
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'libraries',
        'version' => '7.x-2.2',
      ),
      'base_media' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/base_media/base_media.module',
        'basename' => 'base_media.module',
        'name' => 'base_media',
        'info' => 
        array (
          'name' => 'Base Media',
          'description' => 'Defines default configuration and permissions for media modules',
          'core' => '7.x',
          'package' => 'Base',
          'dependencies' => 
          array (
            0 => 'base_core',
            1 => 'features',
            2 => 'file_entity',
            3 => 'media_internet',
          ),
          'features' => 
          array (
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'user_permission' => 
            array (
              0 => 'add media from remote sources',
              1 => 'administer files',
              2 => 'create files',
              3 => 'edit own files',
              4 => 'edit any files',
              5 => 'delete own files',
              6 => 'delete any files',
            ),
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'persona' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/persona/persona.module',
        'basename' => 'persona.module',
        'name' => 'persona',
        'info' => 
        array (
          'name' => 'Persona',
          'description' => 'Enables users to authenticate using Mozilla Persona.',
          'package' => 'Authentication',
          'configure' => 'admin/config/people/persona',
          'core' => '7.x',
          'php' => '5.3',
          'scripts' => 
          array (
            0 => 'persona.js',
          ),
          'version' => '7.x-1.16',
          'project' => 'persona',
          'datestamp' => '1397061552',
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => '7101',
        'project' => 'persona',
        'version' => '7.x-1.16',
      ),
      'nodereference_url' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/nodereference_url/nodereference_url.module',
        'basename' => 'nodereference_url.module',
        'name' => 'nodereference_url',
        'info' => 
        array (
          'name' => 'Node Reference URL Widget',
          'description' => 'Adds an additional widget to the Node Reference field that prepopulates a reference by the URL.',
          'dependencies' => 
          array (
            0 => 'node_reference',
          ),
          'files' => 
          array (
            0 => 'nodereference_url.module',
          ),
          'package' => 'Fields',
          'core' => '7.x',
          'version' => '7.x-1.12',
          'project' => 'nodereference_url',
          'datestamp' => '1316903507',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'nodereference_url',
        'version' => '7.x-1.12',
      ),
      'dc_co_pages' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/dc_co_pages/dc_co_pages.module',
        'basename' => 'dc_co_pages.module',
        'name' => 'dc_co_pages',
        'info' => 
        array (
          'name' => 'Checkout Pages',
          'version' => '7.x-1.0',
          'description' => 'Allow user to add custom pages to DrupalCommer checkout.',
          'package' => 'Commerce (contrib)',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'commerce_checkout',
          ),
          'project' => 'dc_co_pages',
          'datestamp' => '1319137230',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'dc_co_pages',
        'version' => '7.x-1.0',
      ),
      'rules_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/rules/tests/rules_test.module',
        'basename' => 'rules_test.module',
        'name' => 'rules_test',
        'info' => 
        array (
          'name' => 'Rules Tests',
          'description' => 'Support module for the Rules tests.',
          'package' => 'Testing',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_test.rules.inc',
            1 => 'rules_test.rules_defaults.inc',
          ),
          'hidden' => true,
          'version' => '7.x-2.8',
          'project' => 'rules',
          'datestamp' => '1420734780',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'rules',
        'version' => '7.x-2.8',
      ),
      'rules_admin' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/rules/rules_admin/rules_admin.module',
        'basename' => 'rules_admin.module',
        'name' => 'rules_admin',
        'info' => 
        array (
          'name' => 'Rules UI',
          'description' => 'Administrative interface for managing rules.',
          'package' => 'Rules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_admin.module',
            1 => 'rules_admin.inc',
          ),
          'dependencies' => 
          array (
            0 => 'rules',
          ),
          'version' => '7.x-2.8',
          'project' => 'rules',
          'datestamp' => '1420734780',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'rules',
        'version' => '7.x-2.8',
      ),
      'rules_i18n' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/rules/rules_i18n/rules_i18n.module',
        'basename' => 'rules_i18n.module',
        'name' => 'rules_i18n',
        'info' => 
        array (
          'name' => 'Rules translation',
          'description' => 'Allows translating rules.',
          'dependencies' => 
          array (
            0 => 'rules',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_i18n.i18n.inc',
            1 => 'rules_i18n.rules.inc',
            2 => 'rules_i18n.test',
          ),
          'version' => '7.x-2.8',
          'project' => 'rules',
          'datestamp' => '1420734780',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'rules',
        'version' => '7.x-2.8',
      ),
      'rules_scheduler_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/rules/rules_scheduler/tests/rules_scheduler_test.module',
        'basename' => 'rules_scheduler_test.module',
        'name' => 'rules_scheduler_test',
        'info' => 
        array (
          'name' => 'Rules Scheduler Tests',
          'description' => 'Support module for the Rules Scheduler tests.',
          'package' => 'Testing',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_scheduler_test.inc',
          ),
          'hidden' => true,
          'version' => '7.x-2.8',
          'project' => 'rules',
          'datestamp' => '1420734780',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'rules',
        'version' => '7.x-2.8',
      ),
      'rules_scheduler' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/rules/rules_scheduler/rules_scheduler.module',
        'basename' => 'rules_scheduler.module',
        'name' => 'rules_scheduler',
        'info' => 
        array (
          'name' => 'Rules Scheduler',
          'description' => 'Schedule the execution of Rules components using actions.',
          'dependencies' => 
          array (
            0 => 'rules',
          ),
          'package' => 'Rules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_scheduler.admin.inc',
            1 => 'rules_scheduler.module',
            2 => 'rules_scheduler.install',
            3 => 'rules_scheduler.rules.inc',
            4 => 'rules_scheduler.test',
            5 => 'includes/rules_scheduler.handler.inc',
            6 => 'includes/rules_scheduler.views_default.inc',
            7 => 'includes/rules_scheduler.views.inc',
            8 => 'includes/rules_scheduler_views_filter.inc',
          ),
          'version' => '7.x-2.8',
          'project' => 'rules',
          'datestamp' => '1420734780',
          'php' => '5.2.4',
        ),
        'schema_version' => '7204',
        'project' => 'rules',
        'version' => '7.x-2.8',
      ),
      'rules' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/rules/rules.module',
        'basename' => 'rules.module',
        'name' => 'rules',
        'info' => 
        array (
          'name' => 'Rules',
          'description' => 'React on events and conditionally evaluate actions.',
          'package' => 'Rules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules.features.inc',
            1 => 'tests/rules.test',
            2 => 'includes/faces.inc',
            3 => 'includes/rules.core.inc',
            4 => 'includes/rules.event.inc',
            5 => 'includes/rules.processor.inc',
            6 => 'includes/rules.plugins.inc',
            7 => 'includes/rules.state.inc',
            8 => 'includes/rules.dispatcher.inc',
            9 => 'modules/node.eval.inc',
            10 => 'modules/php.eval.inc',
            11 => 'modules/rules_core.eval.inc',
            12 => 'modules/system.eval.inc',
            13 => 'ui/ui.controller.inc',
            14 => 'ui/ui.core.inc',
            15 => 'ui/ui.data.inc',
            16 => 'ui/ui.plugins.inc',
          ),
          'dependencies' => 
          array (
            0 => 'entity_token',
            1 => 'entity',
          ),
          'version' => '7.x-2.8',
          'project' => 'rules',
          'datestamp' => '1420734780',
          'php' => '5.2.4',
        ),
        'schema_version' => '7213',
        'project' => 'rules',
        'version' => '7.x-2.8',
      ),
      'honeypot' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/honeypot/honeypot.module',
        'basename' => 'honeypot.module',
        'name' => 'honeypot',
        'info' => 
        array (
          'name' => 'Honeypot',
          'description' => 'Mitigates spam form submissions using the honeypot method.',
          'core' => '7.x',
          'configure' => 'admin/config/content/honeypot',
          'package' => 'Spam control',
          'files' => 
          array (
            0 => 'honeypot.test',
          ),
          'version' => '7.x-1.17',
          'project' => 'honeypot',
          'datestamp' => '1401478128',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'honeypot',
        'version' => '7.x-1.17',
      ),
      'file_entity_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/file_entity/tests/file_entity_test.module',
        'basename' => 'file_entity_test.module',
        'name' => 'file_entity_test',
        'info' => 
        array (
          'name' => 'File Entity Test',
          'description' => 'Support module for File Entity tests.',
          'package' => 'Testing',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'file_entity',
          ),
          'hidden' => true,
          'version' => '7.x-2.0-beta1',
          'project' => 'file_entity',
          'datestamp' => '1412420930',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'file_entity',
        'version' => '7.x-2.0-beta1',
      ),
      'file_entity' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/file_entity/file_entity.module',
        'basename' => 'file_entity.module',
        'name' => 'file_entity',
        'info' => 
        array (
          'name' => 'File entity',
          'description' => 'Extends Drupal file entities to be fieldable and viewable.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'file',
            2 => 'ctools',
            3 => 'system (>=7.9)',
          ),
          'files' => 
          array (
            0 => 'views/views_handler_argument_file_type.inc',
            1 => 'views/views_handler_field_file_rendered.inc',
            2 => 'views/views_handler_field_file_type.inc',
            3 => 'views/views_handler_filter_file_type.inc',
            4 => 'views/views_handler_filter_schema_type.inc',
            5 => 'views/views_handler_field_file_filename.inc',
            6 => 'views/views_handler_field_file_link.inc',
            7 => 'views/views_handler_field_file_link_edit.inc',
            8 => 'views/views_handler_field_file_link_delete.inc',
            9 => 'views/views_handler_field_file_link_download.inc',
            10 => 'views/views_handler_field_file_link_usage.inc',
            11 => 'views/views_plugin_row_file_rss.inc',
            12 => 'views/views_plugin_row_file_view.inc',
            13 => 'file_entity.test',
          ),
          'configure' => 'admin/config/media/file-settings',
          'version' => '7.x-2.0-beta1',
          'project' => 'file_entity',
          'datestamp' => '1412420930',
          'php' => '5.2.4',
        ),
        'schema_version' => '7215',
        'project' => 'file_entity',
        'version' => '7.x-2.0-beta1',
      ),
      'role_export' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/role_export/role_export.module',
        'basename' => 'role_export.module',
        'name' => 'role_export',
        'info' => 
        array (
          'name' => 'Role Export',
          'description' => 'Exportable user roles with role machine names.',
          'core' => '7.x',
          'version' => '7.x-1.0',
          'project' => 'role_export',
          'datestamp' => '1327037146',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'role_export',
        'version' => '7.x-1.0',
      ),
      'base_block' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/base_block/base_block.module',
        'basename' => 'base_block.module',
        'name' => 'base_block',
        'info' => 
        array (
          'name' => 'Base Block',
          'description' => 'Replaces Drupal Blocks by Beans',
          'core' => '7.x',
          'package' => 'Base',
          'dependencies' => 
          array (
            0 => 'base_core',
            1 => 'bean',
            2 => 'bean_admin_ui',
            3 => 'ctools',
            4 => 'features',
            5 => 'text',
          ),
          'features' => 
          array (
            'bean_type' => 
            array (
              0 => 'block',
            ),
            'ctools' => 
            array (
              0 => 'bean_admin_ui:bean:5',
            ),
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'field_base' => 
            array (
              0 => 'field_body',
            ),
            'field_instance' => 
            array (
              0 => 'bean-block-field_body',
              1 => 'bean-block-title_field',
            ),
            'user_permission' => 
            array (
              0 => 'create any block bean',
              1 => 'delete any block bean',
              2 => 'edit any block bean',
              3 => 'view any block bean',
            ),
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'redirect' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/redirect/redirect.module',
        'basename' => 'redirect.module',
        'name' => 'redirect',
        'info' => 
        array (
          'name' => 'Redirect',
          'description' => 'Allows users to redirect from old URLs to new URLs.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'redirect.module',
            1 => 'redirect.admin.inc',
            2 => 'redirect.install',
            3 => 'redirect.test',
            4 => 'views/redirect.views.inc',
            5 => 'views/redirect_handler_filter_redirect_type.inc',
            6 => 'views/redirect_handler_field_redirect_source.inc',
            7 => 'views/redirect_handler_field_redirect_redirect.inc',
            8 => 'views/redirect_handler_field_redirect_operations.inc',
            9 => 'views/redirect_handler_field_redirect_link_edit.inc',
            10 => 'views/redirect_handler_field_redirect_link_delete.inc',
          ),
          'configure' => 'admin/config/search/redirect/settings',
          'version' => '7.x-1.0-rc1',
          'project' => 'redirect',
          'datestamp' => '1347989995',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'redirect',
        'version' => '7.x-1.0-rc1',
      ),
      'gvj_map' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/gvj_map/gvj_map.module',
        'basename' => 'gvj_map.module',
        'name' => 'gvj_map',
        'info' => 
        array (
          'name' => 'GVJ Map',
          'description' => 'Map bean type to create small maps',
          'core' => '7.x',
          'package' => 'GVJ',
          'dependencies' => 
          array (
            0 => 'bean',
            1 => 'bean_admin_ui',
            2 => 'ctools',
            3 => 'features',
            4 => 'geofield',
            5 => 'leaflet',
          ),
          'features' => 
          array (
            'bean_type' => 
            array (
              0 => 'map',
            ),
            'ctools' => 
            array (
              0 => 'bean_admin_ui:bean:5',
            ),
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'field_base' => 
            array (
              0 => 'field_map',
            ),
            'field_instance' => 
            array (
              0 => 'bean-map-field_map',
            ),
            'user_permission' => 
            array (
              0 => 'create any map bean',
              1 => 'delete any map bean',
              2 => 'edit any map bean',
              3 => 'view any map bean',
            ),
          ),
          'features_exclude' => 
          array (
            'field' => 
            array (
              'bean-map-field_map' => 'bean-map-field_map',
            ),
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'login_redirect' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/login_redirect/login_redirect.module',
        'basename' => 'login_redirect.module',
        'name' => 'login_redirect',
        'info' => 
        array (
          'name' => 'Login Redirect',
          'description' => 'Provides a method to redirect according to an URL-defined parameter after user logs in.',
          'package' => 'User',
          'core' => '7.x',
          'configure' => 'admin/config/system/login_redirect',
          'version' => '7.x-1.2',
          'project' => 'login_redirect',
          'datestamp' => '1398584327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'login_redirect',
        'version' => '7.x-1.2',
      ),
      'gvj_apps' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/gvj_apps/gvj_apps.module',
        'basename' => 'gvj_apps.module',
        'name' => 'gvj_apps',
        'info' => 
        array (
          'name' => 'GVJ apps',
          'description' => 'Install GVJ apps.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'apps',
            1 => 'base_apps',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'date_all_day' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/date/date_all_day/date_all_day.module',
        'basename' => 'date_all_day.module',
        'name' => 'date_all_day',
        'info' => 
        array (
          'name' => 'Date All Day',
          'description' => 'Adds \'All Day\' functionality to date fields, including an \'All Day\' theme and \'All Day\' checkboxes for the Date select and Date popup widgets.',
          'dependencies' => 
          array (
            0 => 'date_api',
            1 => 'date',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'version' => '7.x-2.9-beta2',
          'project' => 'date',
          'datestamp' => '1417718929',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.9-beta2',
      ),
      'date_context' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/date/date_context/date_context.module',
        'basename' => 'date_context.module',
        'name' => 'date_context',
        'info' => 
        array (
          'name' => 'Date Context',
          'description' => 'Adds an option to the Context module to set a context condition based on the value of a date field.',
          'package' => 'Date/Time',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'date',
            1 => 'context',
          ),
          'files' => 
          array (
            0 => 'date_context.module',
            1 => 'plugins/date_context_date_condition.inc',
          ),
          'version' => '7.x-2.9-beta2',
          'project' => 'date',
          'datestamp' => '1417718929',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.9-beta2',
      ),
      'date_popup' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/date/date_popup/date_popup.module',
        'basename' => 'date_popup.module',
        'name' => 'date_popup',
        'info' => 
        array (
          'name' => 'Date Popup',
          'description' => 'Enables jquery popup calendars and time entry widgets for selecting dates and times.',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'configure' => 'admin/config/date/date_popup',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'themes/datepicker.1.7.css',
            ),
          ),
          'version' => '7.x-2.9-beta2',
          'project' => 'date',
          'datestamp' => '1417718929',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.9-beta2',
      ),
      'date_migrate_example' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/date/date_migrate/date_migrate_example/date_migrate_example.module',
        'basename' => 'date_migrate_example.module',
        'name' => 'date_migrate_example',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'date',
            1 => 'date_repeat',
            2 => 'date_repeat_field',
            3 => 'features',
            4 => 'migrate',
          ),
          'description' => 'Examples of migrating with the Date module',
          'features' => 
          array (
            'field' => 
            array (
              0 => 'node-date_migrate_example-body',
              1 => 'node-date_migrate_example-field_date',
              2 => 'node-date_migrate_example-field_date_range',
              3 => 'node-date_migrate_example-field_date_repeat',
              4 => 'node-date_migrate_example-field_datestamp',
              5 => 'node-date_migrate_example-field_datestamp_range',
              6 => 'node-date_migrate_example-field_datetime',
              7 => 'node-date_migrate_example-field_datetime_range',
            ),
            'node' => 
            array (
              0 => 'date_migrate_example',
            ),
          ),
          'files' => 
          array (
            0 => 'date_migrate_example.migrate.inc',
          ),
          'name' => 'Date Migration Example',
          'package' => 'Features',
          'project' => 'date',
          'version' => '7.x-2.9-beta2',
          'datestamp' => '1417718929',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.9-beta2',
      ),
      'date_migrate' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/date/date_migrate/date_migrate.module',
        'basename' => 'date_migrate.module',
        'name' => 'date_migrate',
        'info' => 
        array (
          'name' => 'Date Migration',
          'description' => 'Obsolete data migration module. Disable if no other modules depend on it.',
          'core' => '7.x',
          'package' => 'Date/Time',
          'hidden' => true,
          'version' => '7.x-2.9-beta2',
          'project' => 'date',
          'datestamp' => '1417718929',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.9-beta2',
      ),
      'date_views' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/date/date_views/date_views.module',
        'basename' => 'date_views.module',
        'name' => 'date_views',
        'info' => 
        array (
          'name' => 'Date Views',
          'description' => 'Views integration for date fields and date functionality.',
          'package' => 'Date/Time',
          'dependencies' => 
          array (
            0 => 'date_api',
            1 => 'views',
          ),
          'core' => '7.x',
          'php' => '5.2',
          'files' => 
          array (
            0 => 'includes/date_views_argument_handler.inc',
            1 => 'includes/date_views_argument_handler_simple.inc',
            2 => 'includes/date_views_filter_handler.inc',
            3 => 'includes/date_views_filter_handler_simple.inc',
            4 => 'includes/date_views.views.inc',
            5 => 'includes/date_views_plugin_pager.inc',
          ),
          'version' => '7.x-2.9-beta2',
          'project' => 'date',
          'datestamp' => '1417718929',
        ),
        'schema_version' => '7200',
        'project' => 'date',
        'version' => '7.x-2.9-beta2',
      ),
      'date_repeat' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/date/date_repeat/date_repeat.module',
        'basename' => 'date_repeat.module',
        'name' => 'date_repeat',
        'info' => 
        array (
          'name' => 'Date Repeat API',
          'description' => 'A Date Repeat API to calculate repeating dates and times from iCal rules.',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'php' => '5.2',
          'files' => 
          array (
            0 => 'tests/date_repeat.test',
            1 => 'tests/date_repeat_form.test',
          ),
          'version' => '7.x-2.9-beta2',
          'project' => 'date',
          'datestamp' => '1417718929',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.9-beta2',
      ),
      'date_tools' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/date/date_tools/date_tools.module',
        'basename' => 'date_tools.module',
        'name' => 'date_tools',
        'info' => 
        array (
          'name' => 'Date Tools',
          'description' => 'Tools to import and auto-create dates and calendars.',
          'dependencies' => 
          array (
            0 => 'date',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'configure' => 'admin/config/date/tools',
          'files' => 
          array (
            0 => 'tests/date_tools.test',
          ),
          'version' => '7.x-2.9-beta2',
          'project' => 'date',
          'datestamp' => '1417718929',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.9-beta2',
      ),
      'date_api' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/date/date_api/date_api.module',
        'basename' => 'date_api.module',
        'name' => 'date_api',
        'info' => 
        array (
          'name' => 'Date API',
          'description' => 'A Date API that can be used by other modules.',
          'package' => 'Date/Time',
          'core' => '7.x',
          'php' => '5.2',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'date.css',
            ),
          ),
          'files' => 
          array (
            0 => 'date_api.module',
            1 => 'date_api_sql.inc',
          ),
          'version' => '7.x-2.9-beta2',
          'project' => 'date',
          'datestamp' => '1417718929',
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => '7001',
        'project' => 'date',
        'version' => '7.x-2.9-beta2',
      ),
      'date_repeat_field' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/date/date_repeat_field/date_repeat_field.module',
        'basename' => 'date_repeat_field.module',
        'name' => 'date_repeat_field',
        'info' => 
        array (
          'name' => 'Date Repeat Field',
          'description' => 'Creates the option of Repeating date fields and manages Date fields that use the Date Repeat API.',
          'dependencies' => 
          array (
            0 => 'date_api',
            1 => 'date',
            2 => 'date_repeat',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'date_repeat_field.css',
            ),
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'version' => '7.x-2.9-beta2',
          'project' => 'date',
          'datestamp' => '1417718929',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.9-beta2',
      ),
      'date' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/date/date.module',
        'basename' => 'date.module',
        'name' => 'date',
        'info' => 
        array (
          'name' => 'Date',
          'description' => 'Makes date/time fields available.',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'php' => '5.2',
          'files' => 
          array (
            0 => 'date.migrate.inc',
            1 => 'tests/date_api.test',
            2 => 'tests/date.test',
            3 => 'tests/date_field.test',
            4 => 'tests/date_migrate.test',
            5 => 'tests/date_validation.test',
            6 => 'tests/date_timezone.test',
            7 => 'tests/date_views_pager.test',
          ),
          'version' => '7.x-2.9-beta2',
          'project' => 'date',
          'datestamp' => '1417718929',
        ),
        'schema_version' => '7004',
        'project' => 'date',
        'version' => '7.x-2.9-beta2',
      ),
      'field_permissions' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/field_permissions/field_permissions.module',
        'basename' => 'field_permissions.module',
        'name' => 'field_permissions',
        'info' => 
        array (
          'name' => 'Field Permissions',
          'description' => 'Set field-level permissions to create, update or view fields.',
          'package' => 'Fields',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'field_permissions.module',
            1 => 'field_permissions.admin.inc',
            2 => 'field_permissions.test',
          ),
          'configure' => 'admin/reports/fields/permissions',
          'version' => '7.x-1.0-beta2',
          'project' => 'field_permissions',
          'datestamp' => '1327510549',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'field_permissions',
        'version' => '7.x-1.0-beta2',
      ),
      'css3pie' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/css3pie/css3pie.module',
        'basename' => 'css3pie.module',
        'name' => 'css3pie',
        'info' => 
        array (
          'name' => 'CSS3PIE',
          'description' => 'Provides CSS3PIE (http://css3pie.com/) library support.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'libraries',
            1 => 'ctools',
          ),
          'configure' => 'admin/config/user-interface/css3pie',
          'version' => '7.x-2.1',
          'project' => 'css3pie',
          'datestamp' => '1332951952',
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'css3pie',
        'version' => '7.x-2.1',
      ),
      'omega_tools' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/omega_tools/omega_tools.module',
        'basename' => 'omega_tools.module',
        'name' => 'omega_tools',
        'info' => 
        array (
          'name' => 'Omega Tools',
          'description' => 'Provides additional functionality for the <a href="http://drupal.org/project/omega">Omega Theme</a>.',
          'package' => 'Theme Tools',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'omega_tools.module',
            1 => 'includes/omega_tools.admin.inc',
            2 => 'includes/omega_tools.drush.inc',
            3 => 'includes/omega_tools.wizard.inc',
          ),
          'version' => '7.x-3.0-rc4',
          'project' => 'omega_tools',
          'datestamp' => '1329502543',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'omega_tools',
        'version' => '7.x-3.0-rc4',
      ),
      'base_wysiwyg' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/base_wysiwyg/base_wysiwyg.module',
        'basename' => 'base_wysiwyg.module',
        'name' => 'base_wysiwyg',
        'info' => 
        array (
          'name' => 'Base WYSIWYG',
          'description' => 'Provides a set of text formats and wysiwyg configurations',
          'core' => '7.x',
          'package' => 'Base',
          'dependencies' => 
          array (
            0 => 'base_core',
            1 => 'features',
            2 => 'filter',
            3 => 'media',
            4 => 'wysiwyg',
          ),
          'features' => 
          array (
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'filter' => 
            array (
              0 => 'filtered_html',
              1 => 'full_html',
              2 => 'safe_html',
            ),
            'user_permission' => 
            array (
              0 => 'use text format filtered_html',
              1 => 'use text format full_html',
              2 => 'use text format safe_html',
            ),
            'wysiwyg' => 
            array (
              0 => 'filtered_html',
              1 => 'full_html',
              2 => 'safe_html',
            ),
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'tinynav' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/tinynav/tinynav.module',
        'basename' => 'tinynav.module',
        'name' => 'tinynav',
        'info' => 
        array (
          'name' => 'Tiny Nav js',
          'description' => 'Implements the tinynav.js jQuery plugin',
          'core' => '7.x',
          'package' => 'User Interface',
          'dependencies' => 
          array (
            0 => 'libraries',
          ),
          'configure' => 'admin/config/user-interface/tinynav',
          'version' => '7.x-1.3',
          'project' => 'tinynav',
          'datestamp' => '1402321735',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'tinynav',
        'version' => '7.x-1.3',
      ),
      'beanslide_starterkit' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/beanslide/beanslide_starterkit/beanslide_starterkit.module',
        'basename' => 'beanslide_starterkit.module',
        'name' => 'beanslide_starterkit',
        'info' => 
        array (
          'core' => '7.x',
          'package' => 'Bean',
          'dependencies' => 
          array (
            0 => 'beanslide',
            1 => 'field_collection',
            2 => 'field_group',
            3 => 'image',
            4 => 'link',
            5 => 'media',
          ),
          'description' => 'Provides a slideshow enabled block with image field, link field, title and description.',
          'name' => 'Bean Slide Starterkit Slideshow',
          'php' => '5.2.4',
          'version' => '7.x-1.0-alpha3',
          'project' => 'beanslide',
          'datestamp' => '1372782354',
        ),
        'schema_version' => 0,
        'project' => 'beanslide',
        'version' => '7.x-1.0-alpha3',
      ),
      'beanslide' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/beanslide/beanslide.module',
        'basename' => 'beanslide.module',
        'name' => 'beanslide',
        'info' => 
        array (
          'core' => '7.x',
          'package' => 'Bean',
          'dependencies' => 
          array (
            0 => 'bean',
            1 => 'libraries',
          ),
          'description' => 'Provides a slideshow enabled block type',
          'files' => 
          array (
            0 => 'plugins/bean/slideshow.inc',
          ),
          'name' => 'Bean Slide',
          'php' => '5.2.4',
          'version' => '7.x-1.0-alpha3',
          'project' => 'beanslide',
          'datestamp' => '1372782354',
        ),
        'schema_version' => 0,
        'project' => 'beanslide',
        'version' => '7.x-1.0-alpha3',
      ),
      'leaflet_views' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/leaflet/leaflet_views/leaflet_views.module',
        'basename' => 'leaflet_views.module',
        'name' => 'leaflet_views',
        'info' => 
        array (
          'name' => 'Leaflet views',
          'description' => 'Views integration for the Leaflet module.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'leaflet',
            1 => 'geofield',
            2 => 'views',
            3 => 'entity',
          ),
          'files' => 
          array (
            0 => 'leaflet_views.views.inc',
            1 => 'leaflet_views_plugin_style.inc',
          ),
          'version' => '7.x-1.1+14-dev',
          'project' => 'leaflet',
          'datestamp' => '1412549932',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'leaflet',
        'version' => '7.x-1.1+14-dev',
      ),
      'leaflet' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/leaflet/leaflet.module',
        'basename' => 'leaflet.module',
        'name' => 'leaflet',
        'info' => 
        array (
          'name' => 'Leaflet',
          'description' => 'Integration with the Leaflet map scripting library.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'libraries',
          ),
          'files' => 
          array (
            0 => 'leaflet.formatters.inc',
          ),
          'version' => '7.x-1.1+14-dev',
          'project' => 'leaflet',
          'datestamp' => '1412549932',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'leaflet',
        'version' => '7.x-1.1+14-dev',
      ),
      'gvj_slideshow' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/gvj_slideshow/gvj_slideshow.module',
        'basename' => 'gvj_slideshow.module',
        'name' => 'gvj_slideshow',
        'info' => 
        array (
          'name' => 'GVJ Slideshow',
          'description' => 'Create slideshows in beans',
          'core' => '7.x',
          'package' => 'GVJ',
          'dependencies' => 
          array (
            0 => 'bean',
            1 => 'beanslide',
            2 => 'beanslide_starterkit',
            3 => 'features',
          ),
          'features' => 
          array (
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'user_permission' => 
            array (
              0 => 'create any beanslide bean',
              1 => 'delete any beanslide bean',
              2 => 'edit any beanslide bean',
              3 => 'view any beanslide bean',
            ),
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'addressfield_example' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/addressfield/example/addressfield_example.module',
        'basename' => 'addressfield_example.module',
        'name' => 'addressfield_example',
        'info' => 
        array (
          'name' => 'Address Field Example',
          'description' => 'Example module for how to implement an addressfield format handler.',
          'core' => '7.x',
          'package' => 'Fields',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'addressfield',
          ),
          'version' => '7.x-1.0-rc1',
          'project' => 'addressfield',
          'datestamp' => '1418653688',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'addressfield',
        'version' => '7.x-1.0-rc1',
      ),
      'addressfield' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/addressfield/addressfield.module',
        'basename' => 'addressfield.module',
        'name' => 'addressfield',
        'info' => 
        array (
          'name' => 'Address Field',
          'description' => 'Manage a flexible address field, implementing the xNAL standard.',
          'core' => '7.x',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'addressfield.migrate.inc',
            1 => 'views/addressfield_views_handler_field_country.inc',
            2 => 'views/addressfield_views_handler_filter_country.inc',
          ),
          'version' => '7.x-1.0-rc1',
          'project' => 'addressfield',
          'datestamp' => '1418653688',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'addressfield',
        'version' => '7.x-1.0-rc1',
      ),
      'wysiwyg_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/wysiwyg/tests/wysiwyg_test.module',
        'basename' => 'wysiwyg_test.module',
        'name' => 'wysiwyg_test',
        'info' => 
        array (
          'name' => 'Wysiwyg testing',
          'description' => 'Tests Wysiwyg module functionality. Do not enable.',
          'core' => '7.x',
          'package' => 'Testing',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'wysiwyg',
          ),
          'files' => 
          array (
            0 => 'wysiwyg_test.module',
          ),
          'version' => '7.x-2.2+54-dev',
          'project' => 'wysiwyg',
          'datestamp' => '1413622431',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'wysiwyg',
        'version' => '7.x-2.2+54-dev',
      ),
      'wysiwyg' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/wysiwyg/wysiwyg.module',
        'basename' => 'wysiwyg.module',
        'name' => 'wysiwyg',
        'info' => 
        array (
          'name' => 'Wysiwyg',
          'description' => 'Allows to edit content with client-side editors.',
          'package' => 'User interface',
          'core' => '7.x',
          'configure' => 'admin/config/content/wysiwyg',
          'files' => 
          array (
            0 => 'wysiwyg.module',
            1 => 'tests/wysiwyg.test',
          ),
          'version' => '7.x-2.2+54-dev',
          'project' => 'wysiwyg',
          'datestamp' => '1413622431',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7202',
        'project' => 'wysiwyg',
        'version' => '7.x-2.2+54-dev',
      ),
      'media_internet_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/media/modules/media_internet/tests/media_internet_test.module',
        'basename' => 'media_internet_test.module',
        'name' => 'media_internet_test',
        'info' => 
        array (
          'name' => 'Media Internet Test',
          'description' => 'Provides hooks for testing Media Internet module functionality.',
          'package' => 'Media',
          'core' => '7.x',
          'hidden' => true,
          'files' => 
          array (
            0 => 'includes/MediaInternetTestStreamWrapper.inc',
            1 => 'includes/MediaInternetTestHandler.inc',
          ),
          'version' => '7.x-2.0-alpha4+20-dev',
          'project' => 'media',
          'datestamp' => '1420798085',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'media',
        'version' => '7.x-2.0-alpha4+20-dev',
      ),
      'media_internet' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/media/modules/media_internet/media_internet.module',
        'basename' => 'media_internet.module',
        'name' => 'media_internet',
        'info' => 
        array (
          'name' => 'Media Internet Sources',
          'description' => 'Provides an API for accessing media on various internet services',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media',
          ),
          'files' => 
          array (
            0 => 'includes/MediaBrowserInternet.inc',
            1 => 'includes/MediaInternetBaseHandler.inc',
            2 => 'includes/MediaInternetFileHandler.inc',
            3 => 'includes/MediaInternetNoHandlerException.inc',
            4 => 'includes/MediaInternetValidationException.inc',
            5 => 'tests/media_internet.test',
          ),
          'version' => '7.x-2.0-alpha4+20-dev',
          'project' => 'media',
          'datestamp' => '1420798085',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'media',
        'version' => '7.x-2.0-alpha4+20-dev',
      ),
      'media_migrate_file_types' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/media/modules/media_migrate_file_types/media_migrate_file_types.module',
        'basename' => 'media_migrate_file_types.module',
        'name' => 'media_migrate_file_types',
        'info' => 
        array (
          'name' => 'Media Migrate File Types',
          'description' => 'Provides a UI for updating legacy media types with the new file types provided by File Entity.',
          'package' => 'Media',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'media',
          ),
          'configure' => 'admin/structure/file-types/upgrade',
          'version' => '7.x-2.0-alpha4+20-dev',
          'project' => 'media',
          'datestamp' => '1420798085',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'media',
        'version' => '7.x-2.0-alpha4+20-dev',
      ),
      'media_bulk_upload' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/media/modules/media_bulk_upload/media_bulk_upload.module',
        'basename' => 'media_bulk_upload.module',
        'name' => 'media_bulk_upload',
        'info' => 
        array (
          'name' => 'Media Bulk Upload',
          'description' => 'Adds support for uploading multiple files at a time.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media',
            1 => 'multiform',
            2 => 'plupload',
          ),
          'test_dependencies' => 
          array (
            0 => 'multiform',
            1 => 'plupload',
          ),
          'files' => 
          array (
            0 => 'includes/MediaBrowserBulkUpload.inc',
            1 => 'tests/media_bulk_upload.test',
          ),
          'version' => '7.x-2.0-alpha4+20-dev',
          'project' => 'media',
          'datestamp' => '1420798085',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'media',
        'version' => '7.x-2.0-alpha4+20-dev',
      ),
      'mediafield' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/media/modules/mediafield/mediafield.module',
        'basename' => 'mediafield.module',
        'name' => 'mediafield',
        'info' => 
        array (
          'name' => 'Media Field',
          'description' => 'Provides a field type that stores media-specific data. <em>Deprecated by the core File field type.</em>',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media',
          ),
          'version' => '7.x-2.0-alpha4+20-dev',
          'project' => 'media',
          'datestamp' => '1420798085',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'media',
        'version' => '7.x-2.0-alpha4+20-dev',
      ),
      'media_wysiwyg_view_mode' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/media/modules/media_wysiwyg_view_mode/media_wysiwyg_view_mode.module',
        'basename' => 'media_wysiwyg_view_mode.module',
        'name' => 'media_wysiwyg_view_mode',
        'info' => 
        array (
          'name' => 'Media WYSIWYG View Mode',
          'description' => 'Enables files inside of the WYSIWYG editor to be displayed using a separate view mode.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media_wysiwyg',
          ),
          'configure' => 'admin/config/media/wysiwyg-view-mode',
          'files' => 
          array (
            0 => 'media_wysiwyg_view_mode.test',
          ),
          'version' => '7.x-2.0-alpha4+20-dev',
          'project' => 'media',
          'datestamp' => '1420798085',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'media',
        'version' => '7.x-2.0-alpha4+20-dev',
      ),
      'media_wysiwyg' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/media/modules/media_wysiwyg/media_wysiwyg.module',
        'basename' => 'media_wysiwyg.module',
        'name' => 'media_wysiwyg',
        'info' => 
        array (
          'name' => 'Media WYSIWYG',
          'description' => 'Adds support for embedding media using client-side WYSIWYG editors.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media',
          ),
          'test_dependencies' => 
          array (
            0 => 'ckeditor',
            1 => 'token',
            2 => 'wysiwyg',
          ),
          'files' => 
          array (
            0 => 'media_wysiwyg.test',
            1 => 'tests/media_wysiwyg.file_usage.test',
            2 => 'tests/media_wysiwyg.macro.test',
          ),
          'configure' => 'admin/config/media/browser',
          'version' => '7.x-2.0-alpha4+20-dev',
          'project' => 'media',
          'datestamp' => '1420798085',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'media',
        'version' => '7.x-2.0-alpha4+20-dev',
      ),
      'media_module_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/media/tests/media_module_test.module',
        'basename' => 'media_module_test.module',
        'name' => 'media_module_test',
        'info' => 
        array (
          'name' => 'Media test',
          'description' => 'Provides hooks for testing Media module functionality.',
          'package' => 'Media',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.x-2.0-alpha4+20-dev',
          'project' => 'media',
          'datestamp' => '1420798085',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'media',
        'version' => '7.x-2.0-alpha4+20-dev',
      ),
      'media' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/media/media.module',
        'basename' => 'media.module',
        'name' => 'media',
        'info' => 
        array (
          'name' => 'Media',
          'description' => 'Provides the core Media API',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'file_entity',
            1 => 'image',
            2 => 'views',
          ),
          'test_dependencies' => 
          array (
            0 => 'token',
          ),
          'files' => 
          array (
            0 => 'includes/MediaReadOnlyStreamWrapper.inc',
            1 => 'includes/MediaBrowserPluginInterface.inc',
            2 => 'includes/MediaBrowserPlugin.inc',
            3 => 'includes/MediaBrowserUpload.inc',
            4 => 'includes/MediaBrowserView.inc',
            5 => 'includes/MediaEntityTranslationHandler.inc',
            6 => 'includes/media_views_plugin_display_media_browser.inc',
            7 => 'includes/media_views_plugin_style_media_browser.inc',
            8 => 'tests/media.test',
          ),
          'configure' => 'admin/config/media/browser',
          'version' => '7.x-2.0-alpha4+20-dev',
          'project' => 'media',
          'datestamp' => '1420798085',
          'php' => '5.2.4',
        ),
        'schema_version' => '7226',
        'project' => 'media',
        'version' => '7.x-2.0-alpha4+20-dev',
      ),
      'metatag_dc' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/metatag/metatag_dc/metatag_dc.module',
        'basename' => 'metatag_dc.module',
        'name' => 'metatag_dc',
        'info' => 
        array (
          'name' => 'Metatag: Dublin Core',
          'description' => 'Provides the fifteen <a href="http://dublincore.org/documents/dces/">Dublin Core Metadata Element Set 1.1</a> meta tags from the <a href="http://dublincore.org/">Dublin Core Metadata Institute</a>.',
          'package' => 'SEO',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'metatag',
          ),
          'version' => '7.x-1.4',
          'project' => 'metatag',
          'datestamp' => '1412909330',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'metatag',
        'version' => '7.x-1.4',
      ),
      'metatag_opengraph' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/metatag/metatag_opengraph/metatag_opengraph.module',
        'basename' => 'metatag_opengraph.module',
        'name' => 'metatag_opengraph',
        'info' => 
        array (
          'name' => 'Metatag:OpenGraph',
          'description' => 'Provides support for Open Graph Protocol meta tags.',
          'package' => 'SEO',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'metatag',
          ),
          'version' => '7.x-1.4',
          'project' => 'metatag',
          'datestamp' => '1412909330',
          'php' => '5.2.4',
        ),
        'schema_version' => '7101',
        'project' => 'metatag',
        'version' => '7.x-1.4',
      ),
      'metatag_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/metatag/tests/metatag_test.module',
        'basename' => 'metatag_test.module',
        'name' => 'metatag_test',
        'info' => 
        array (
          'name' => 'Meta Tag Test',
          'description' => 'Testing module for metatag.module',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'metatag',
          ),
          'hidden' => true,
          'version' => '7.x-1.4',
          'project' => 'metatag',
          'datestamp' => '1412909330',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'metatag',
        'version' => '7.x-1.4',
      ),
      'metatag_devel' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/metatag/metatag_devel/metatag_devel.module',
        'basename' => 'metatag_devel.module',
        'name' => 'metatag_devel',
        'info' => 
        array (
          'name' => 'Metatag:Devel',
          'description' => 'Provides development / debugging functionality for the Metatag module. Integrates with Devel Generate.',
          'package' => 'Development',
          'core' => '7.x',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'dependencies' => 
          array (
            0 => 'metatag',
          ),
          'version' => '7.x-1.4',
          'project' => 'metatag',
          'datestamp' => '1412909330',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'metatag',
        'version' => '7.x-1.4',
      ),
      'metatag_facebook' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/metatag/metatag_facebook/metatag_facebook.module',
        'basename' => 'metatag_facebook.module',
        'name' => 'metatag_facebook',
        'info' => 
        array (
          'name' => 'Metatag: Facebook',
          'description' => 'Provides support for Facebook\'s custom meta tags.',
          'package' => 'SEO',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'metatag',
          ),
          'version' => '7.x-1.4',
          'project' => 'metatag',
          'datestamp' => '1412909330',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'metatag',
        'version' => '7.x-1.4',
      ),
      'metatag_views' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/metatag/metatag_views/metatag_views.module',
        'basename' => 'metatag_views.module',
        'name' => 'metatag_views',
        'info' => 
        array (
          'name' => 'Metatag: Views',
          'description' => 'Provides Metatag integration within the Views interface.',
          'package' => 'SEO',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'metatag',
            1 => 'views',
          ),
          'files' => 
          array (
            0 => 'metatag_views_plugin_display_extender_metatags.inc',
          ),
          'version' => '7.x-1.4',
          'project' => 'metatag',
          'datestamp' => '1412909330',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'metatag',
        'version' => '7.x-1.4',
      ),
      'metatag_panels' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/metatag/metatag_panels/metatag_panels.module',
        'basename' => 'metatag_panels.module',
        'name' => 'metatag_panels',
        'info' => 
        array (
          'name' => 'Metatag: Panels',
          'description' => 'Provides Metatag integration within the Panels interface.',
          'package' => 'SEO',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'metatag',
            2 => 'panels',
            3 => 'token',
          ),
          'version' => '7.x-1.4',
          'project' => 'metatag',
          'datestamp' => '1412909330',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'metatag',
        'version' => '7.x-1.4',
      ),
      'metatag_google_plus' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/metatag/metatag_google_plus/metatag_google_plus.module',
        'basename' => 'metatag_google_plus.module',
        'name' => 'metatag_google_plus',
        'info' => 
        array (
          'name' => 'Metatag: Google+',
          'description' => 'Provides support for Google+ \'itemscope\' meta tags.',
          'package' => 'SEO',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'metatag',
          ),
          'files' => 
          array (
            0 => 'metatag_google_plus.inc',
          ),
          'version' => '7.x-1.4',
          'project' => 'metatag',
          'datestamp' => '1412909330',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'metatag',
        'version' => '7.x-1.4',
      ),
      'metatag_context' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/metatag/metatag_context/metatag_context.module',
        'basename' => 'metatag_context.module',
        'name' => 'metatag_context',
        'info' => 
        array (
          'name' => 'Metatag: Context',
          'description' => 'Assigned Metatag using Context definitions, allowing them to be assigned by path and other criteria.',
          'package' => 'SEO',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'context',
            1 => 'metatag',
          ),
          'files' => 
          array (
            0 => 'metatag_context.test',
          ),
          'configure' => 'admin/config/search/metatags/context',
          'version' => '7.x-1.4',
          'project' => 'metatag',
          'datestamp' => '1412909330',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'metatag',
        'version' => '7.x-1.4',
      ),
      'metatag_twitter_cards' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/metatag/metatag_twitter_cards/metatag_twitter_cards.module',
        'basename' => 'metatag_twitter_cards.module',
        'name' => 'metatag_twitter_cards',
        'info' => 
        array (
          'name' => 'Metatag: Twitter Cards',
          'description' => 'Provides support for Twitter\'s Card meta tags.',
          'package' => 'SEO',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'metatag',
          ),
          'version' => '7.x-1.4',
          'project' => 'metatag',
          'datestamp' => '1412909330',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'metatag',
        'version' => '7.x-1.4',
      ),
      'metatag' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/metatag/metatag.module',
        'basename' => 'metatag.module',
        'name' => 'metatag',
        'info' => 
        array (
          'name' => 'Metatag',
          'description' => 'Adds support and an API to implement meta tags.',
          'package' => 'SEO',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'system (>=7.28)',
            1 => 'ctools',
            2 => 'token',
          ),
          'configure' => 'admin/config/search/metatags',
          'files' => 
          array (
            0 => 'metatag.inc',
            1 => 'metatag.migrate.inc',
            2 => 'metatag.test',
          ),
          'version' => '7.x-1.4',
          'project' => 'metatag',
          'datestamp' => '1412909330',
          'php' => '5.2.4',
        ),
        'schema_version' => '7035',
        'project' => 'metatag',
        'version' => '7.x-1.4',
      ),
      'piwik' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/piwik/piwik.module',
        'basename' => 'piwik.module',
        'name' => 'piwik',
        'info' => 
        array (
          'name' => 'Piwik Web Analytics',
          'description' => 'Adds Piwik javascript tracking code to all your site\'s pages.',
          'core' => '7.x',
          'package' => 'Statistics',
          'configure' => 'admin/config/system/piwik',
          'files' => 
          array (
            0 => 'piwik.test',
          ),
          'test_dependencies' => 
          array (
            0 => 'token',
          ),
          'version' => '7.x-2.7',
          'project' => 'piwik',
          'datestamp' => '1417276085',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7205',
        'project' => 'piwik',
        'version' => '7.x-2.7',
      ),
      'contactinfo' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/contactinfo/contactinfo.module',
        'basename' => 'contactinfo.module',
        'name' => 'contactinfo',
        'info' => 
        array (
          'name' => 'Contact Info',
          'description' => 'Collects site-wide contact information and displays it in an hCard block.',
          'core' => '7.x',
          'configure' => 'admin/config/system/contactinfo',
          'version' => '7.x-1.0',
          'project' => 'contactinfo',
          'datestamp' => '1389060243',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'contactinfo',
        'version' => '7.x-1.0',
      ),
      'link' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/link/link.module',
        'basename' => 'link.module',
        'name' => 'link',
        'info' => 
        array (
          'name' => 'Link',
          'description' => 'Defines simple link field types.',
          'core' => '7.x',
          'package' => 'Fields',
          'files' => 
          array (
            0 => 'link.module',
            1 => 'link.migrate.inc',
            2 => 'tests/link.test',
            3 => 'tests/link.attribute.test',
            4 => 'tests/link.crud.test',
            5 => 'tests/link.crud_browser.test',
            6 => 'tests/link.token.test',
            7 => 'tests/link.validate.test',
            8 => 'views/link_views_handler_argument_target.inc',
            9 => 'views/link_views_handler_filter_protocol.inc',
          ),
          'version' => '7.x-1.3',
          'project' => 'link',
          'datestamp' => '1413924830',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'link',
        'version' => '7.x-1.3',
      ),
      'field_group_test' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/field_group/tests/field_group_test.module',
        'basename' => 'field_group_test.module',
        'name' => 'field_group_test',
        'info' => 
        array (
          'name' => 'Field Group Test',
          'description' => 'Test module for Field Group',
          'core' => '7.x',
          'package' => 'Fields',
          'hidden' => true,
          'version' => '7.x-1.4',
          'project' => 'field_group',
          'datestamp' => '1401918529',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'field_group',
        'version' => '7.x-1.4',
      ),
      'field_group' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/field_group/field_group.module',
        'basename' => 'field_group.module',
        'name' => 'field_group',
        'info' => 
        array (
          'name' => 'Field Group',
          'description' => 'Provides the ability to group your fields on both form and display.',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'ctools',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tests/field_group.ui.test',
            1 => 'tests/field_group.display.test',
          ),
          'version' => '7.x-1.4',
          'project' => 'field_group',
          'datestamp' => '1401918529',
          'php' => '5.2.4',
        ),
        'schema_version' => '7007',
        'project' => 'field_group',
        'version' => '7.x-1.4',
      ),
      'context_reaction_theme' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/context_reaction_theme/context_reaction_theme.module',
        'basename' => 'context_reaction_theme.module',
        'name' => 'context_reaction_theme',
        'info' => 
        array (
          'name' => 'Context Reaction: Theme',
          'description' => 'Adds a reaction to change the theme.',
          'package' => 'Context',
          'dependencies' => 
          array (
            0 => 'context',
          ),
          'core' => '7.x',
          'version' => '7.x-1.x-dev',
          'project' => 'context_reaction_theme',
          'datestamp' => '1380567461',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'context_reaction_theme',
        'version' => '7.x-1.x-dev',
      ),
      'node_reference' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/references/node_reference/node_reference.module',
        'basename' => 'node_reference.module',
        'name' => 'node_reference',
        'info' => 
        array (
          'name' => 'Node Reference',
          'description' => 'Defines a field type for referencing one node from another.',
          'package' => 'Fields',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'references',
            2 => 'options',
          ),
          'files' => 
          array (
            0 => 'node_reference.test',
          ),
          'version' => '7.x-2.1',
          'project' => 'references',
          'datestamp' => '1360265821',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'references',
        'version' => '7.x-2.1',
      ),
      'user_reference' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/references/user_reference/user_reference.module',
        'basename' => 'user_reference.module',
        'name' => 'user_reference',
        'info' => 
        array (
          'name' => 'User Reference',
          'description' => 'Defines a field type for referencing a user from a node.',
          'package' => 'Fields',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'references',
            2 => 'options',
          ),
          'version' => '7.x-2.1',
          'project' => 'references',
          'datestamp' => '1360265821',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'references',
        'version' => '7.x-2.1',
      ),
      'references' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/modules/references/references.module',
        'basename' => 'references.module',
        'name' => 'references',
        'info' => 
        array (
          'name' => 'References',
          'description' => 'Defines common base features for the various reference field types.',
          'package' => 'Fields',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'options',
          ),
          'files' => 
          array (
            0 => 'views/references_handler_relationship.inc',
            1 => 'views/references_handler_argument.inc',
            2 => 'views/references_plugin_display.inc',
            3 => 'views/references_plugin_style.inc',
            4 => 'views/references_plugin_row_fields.inc',
          ),
          'version' => '7.x-2.1',
          'project' => 'references',
          'datestamp' => '1360265821',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'references',
        'version' => '7.x-2.1',
      ),
    ),
    'themes' => 
    array (
      'omega' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/themes/omega/omega/omega.info',
        'basename' => 'omega.info',
        'name' => 'Omega',
        'info' => 
        array (
          'name' => 'Omega',
          'description' => '<a href="http://drupal.org/project/omega">Omega</a> extends the Omega theme framework with some additional features and makes them availabe to its subthemes. This theme should not be used directly, instead you should create a subtheme based on one of the Omega or Alpha starterkits. Learn more about <a href="http://drupal.org/node/819170">Creating an Omega Subtheme</a> in the <a href="http://drupal.org/node/819164">Omega Handbook</a>.',
          'core' => '7.x',
          'engine' => 'phptemplate',
          'screenshot' => 'screenshot.png',
          'version' => '7.x-3.1',
          'base theme' => 'alpha',
          'regions' => 
          array (
            'page_top' => 'Page Top',
            'page_bottom' => 'Page Bottom',
            'content' => 'Content',
            'user_first' => 'User Bar First',
            'user_second' => 'User Bar Second',
            'branding' => 'Branding',
            'menu' => 'Menu',
            'sidebar_first' => 'Sidebar First',
            'sidebar_second' => 'Sidebar Second',
            'header_first' => 'Header First',
            'header_second' => 'Header Second',
            'preface_first' => 'Preface First',
            'preface_second' => 'Preface Second',
            'preface_third' => 'Preface Third',
            'postscript_first' => 'Postscript First',
            'postscript_second' => 'Postscript Second',
            'postscript_third' => 'Postscript Third',
            'postscript_fourth' => 'Postscript Fourth',
            'footer_first' => 'Footer First',
            'footer_second' => 'Footer Second',
          ),
          'zones' => 
          array (
            'user' => 'User',
            'branding' => 'Branding',
            'menu' => 'Menu',
            'header' => 'Header',
            'preface' => 'Preface',
            'content' => 'Content',
            'postscript' => 'Postscript',
            'footer' => 'Footer',
          ),
          'css' => 
          array (
            'omega-text.css' => 
            array (
              'name' => 'Text Styles',
              'description' => 'Default text styles for Omega.',
              'options' => 
              array (
                'weight' => '-10',
              ),
            ),
            'omega-branding.css' => 
            array (
              'name' => 'Branding Styles',
              'description' => 'Provides positioning for the logo, title and slogan.',
              'options' => 
              array (
                'weight' => '-10',
              ),
            ),
            'omega-menu.css' => 
            array (
              'name' => 'Menu Styles',
              'description' => 'Provides positoning and basic CSS for primary and secondary menus.',
              'options' => 
              array (
                'weight' => '-10',
              ),
            ),
            'omega-forms.css' => 
            array (
              'name' => 'Form Styles',
              'description' => 'Provides basic form styles.',
              'options' => 
              array (
                'weight' => '-10',
              ),
            ),
            'omega-visuals.css' => 
            array (
              'name' => 'Omega Styles',
              'description' => 'Custom visual styles for Omega. (pagers, menus, etc.)',
              'options' => 
              array (
                'weight' => '-10',
              ),
            ),
          ),
          'libraries' => 
          array (
            'omega_formalize' => 
            array (
              'name' => 'Formalize',
              'description' => 'Formalize is a framework by <a href="http://formalize.me/" title="Formalize">Nathan Smith</a> for neat looking cross-browser forms with extended functionality.',
              'js' => 
              array (
                0 => 
                array (
                  'file' => 'jquery.formalize.js',
                  'options' => 
                  array (
                    'weight' => '-20',
                  ),
                ),
              ),
              'css' => 
              array (
                0 => 
                array (
                  'file' => 'formalize.css',
                  'options' => 
                  array (
                    'weight' => '-20',
                  ),
                ),
              ),
            ),
            'omega_mediaqueries' => 
            array (
              'name' => 'Media queries',
              'description' => 'Provides a tiny JavaScript library that can be used in your custom JavaScript.',
              'js' => 
              array (
                0 => 
                array (
                  'file' => 'omega-mediaqueries.js',
                  'options' => 
                  array (
                    'weight' => '-19',
                  ),
                ),
              ),
            ),
            'omega_equalheights' => 
            array (
              'name' => 'Equal heights',
              'description' => 'Allows you to force all regions of a zone or all blocks of a region to be of equal size. <span class="marker">This library reveals a corresponding checkbox on every region and zone configuration panel if activated.</span>',
              'js' => 
              array (
                0 => 
                array (
                  'file' => 'omega-equalheights.js',
                  'options' => 
                  array (
                    'weight' => '-18',
                  ),
                ),
              ),
            ),
          ),
          'plugins' => 
          array (
            'panels' => 
            array (
              'layouts' => 'panels/layouts',
            ),
          ),
          'settings' => 
          array (
            'alpha_grid' => 'alpha_default',
            'alpha_primary_alpha_default' => 'normal',
            'alpha_responsive' => '1',
            'alpha_layouts_alpha_fluid_primary' => 'normal',
            'alpha_layouts_alpha_fluid_normal_responsive' => '0',
            'alpha_layouts_alpha_fluid_normal_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_primary' => 'normal',
            'alpha_layouts_alpha_default_fluid_responsive' => '0',
            'alpha_layouts_alpha_default_fluid_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_fluid_weight' => '0',
            'alpha_layouts_alpha_default_narrow_responsive' => '1',
            'alpha_layouts_alpha_default_narrow_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_narrow_weight' => '1',
            'alpha_layouts_alpha_default_normal_responsive' => '1',
            'alpha_layouts_alpha_default_normal_media' => 'all and (min-width: 980px) and (min-device-width: 980px), all and (max-device-width: 1024px) and (min-width: 1024px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_normal_weight' => '2',
            'alpha_layouts_alpha_default_wide_responsive' => '1',
            'alpha_layouts_alpha_default_wide_media' => 'all and (min-width: 1220px)',
            'alpha_layouts_alpha_default_wide_weight' => '3',
            'alpha_viewport' => '1',
            'alpha_viewport_initial_scale' => '1',
            'alpha_viewport_min_scale' => '1',
            'alpha_viewport_max_scale' => '1',
            'alpha_viewport_user_scaleable' => '',
            'alpha_libraries' => 
            array (
              'omega_formalize' => 'omega_formalize',
              'omega_equalheights' => '',
              'omega_mediaqueries' => 'omega_mediaqueries',
            ),
            'alpha_css' => 
            array (
              'alpha-reset.css' => 'alpha-reset.css',
              'alpha-mobile.css' => 'alpha-mobile.css',
              'alpha-alpha.css' => 'alpha-alpha.css',
              'omega-text.css' => 'omega-text.css',
              'omega-branding.css' => 'omega-branding.css',
              'omega-menu.css' => 'omega-menu.css',
              'omega-forms.css' => 'omega-forms.css',
              'omega-visuals.css' => 'omega-visuals.css',
            ),
            'alpha_debug_block_toggle' => '1',
            'alpha_debug_block_active' => '1',
            'alpha_debug_grid_toggle' => '1',
            'alpha_debug_grid_active' => '1',
            'alpha_debug_grid_roles' => 
            array (
              1 => '1',
              2 => '2',
              3 => '3',
            ),
            'alpha_toggle_messages' => '1',
            'alpha_toggle_action_links' => '1',
            'alpha_toggle_tabs' => '1',
            'alpha_toggle_breadcrumb' => '1',
            'alpha_toggle_page_title' => '1',
            'alpha_toggle_feed_icons' => '1',
            'alpha_hidden_title' => '',
            'alpha_hidden_site_name' => '',
            'alpha_hidden_site_slogan' => '',
            'alpha_zone_user_equal_height_container' => '',
            'alpha_zone_user_wrapper' => '1',
            'alpha_zone_user_force' => '',
            'alpha_zone_user_section' => 'header',
            'alpha_zone_user_weight' => '1',
            'alpha_zone_user_columns' => '12',
            'alpha_zone_user_primary' => '',
            'alpha_zone_user_css' => '',
            'alpha_zone_user_wrapper_css' => '',
            'alpha_zone_branding_equal_height_container' => '',
            'alpha_zone_branding_wrapper' => '1',
            'alpha_zone_branding_force' => '',
            'alpha_zone_branding_section' => 'header',
            'alpha_zone_branding_weight' => '2',
            'alpha_zone_branding_columns' => '12',
            'alpha_zone_branding_primary' => '',
            'alpha_zone_branding_css' => '',
            'alpha_zone_branding_wrapper_css' => '',
            'alpha_zone_menu_equal_height_container' => '',
            'alpha_zone_menu_wrapper' => '1',
            'alpha_zone_menu_force' => '',
            'alpha_zone_menu_section' => 'header',
            'alpha_zone_menu_weight' => '3',
            'alpha_zone_menu_columns' => '12',
            'alpha_zone_menu_primary' => '',
            'alpha_zone_menu_css' => '',
            'alpha_zone_menu_wrapper_css' => '',
            'alpha_zone_header_equal_height_container' => '',
            'alpha_zone_header_wrapper' => '1',
            'alpha_zone_header_force' => '',
            'alpha_zone_header_section' => 'header',
            'alpha_zone_header_weight' => '4',
            'alpha_zone_header_columns' => '12',
            'alpha_zone_header_primary' => '',
            'alpha_zone_header_css' => '',
            'alpha_zone_header_wrapper_css' => '',
            'alpha_zone_preface_equal_height_container' => '',
            'alpha_zone_preface_wrapper' => '1',
            'alpha_zone_preface_force' => '',
            'alpha_zone_preface_section' => 'content',
            'alpha_zone_preface_weight' => '1',
            'alpha_zone_preface_columns' => '12',
            'alpha_zone_preface_primary' => '',
            'alpha_zone_preface_css' => '',
            'alpha_zone_preface_wrapper_css' => '',
            'alpha_zone_content_equal_height_container' => '',
            'alpha_zone_content_wrapper' => '1',
            'alpha_zone_content_force' => '1',
            'alpha_zone_content_section' => 'content',
            'alpha_zone_content_weight' => '2',
            'alpha_zone_content_columns' => '12',
            'alpha_zone_content_primary' => 'content',
            'alpha_zone_content_css' => '',
            'alpha_zone_content_wrapper_css' => '',
            'alpha_zone_postscript_equal_height_container' => '',
            'alpha_zone_postscript_wrapper' => '1',
            'alpha_zone_postscript_force' => '',
            'alpha_zone_postscript_section' => 'content',
            'alpha_zone_postscript_weight' => '3',
            'alpha_zone_postscript_columns' => '12',
            'alpha_zone_postscript_primary' => '',
            'alpha_zone_postscript_css' => '',
            'alpha_zone_postscript_wrapper_css' => '',
            'alpha_zone_footer_equal_height_container' => '',
            'alpha_zone_footer_wrapper' => '1',
            'alpha_zone_footer_force' => '',
            'alpha_zone_footer_section' => 'footer',
            'alpha_zone_footer_weight' => '1',
            'alpha_zone_footer_columns' => '12',
            'alpha_zone_footer_primary' => '',
            'alpha_zone_footer_css' => '',
            'alpha_zone_footer_wrapper_css' => '',
            'alpha_region_dashboard_sidebar_equal_height_container' => '',
            'alpha_region_dashboard_sidebar_equal_height_element' => '',
            'alpha_region_dashboard_sidebar_force' => '',
            'alpha_region_dashboard_sidebar_zone' => '',
            'alpha_region_dashboard_sidebar_prefix' => '',
            'alpha_region_dashboard_sidebar_columns' => '1',
            'alpha_region_dashboard_sidebar_suffix' => '',
            'alpha_region_dashboard_sidebar_weight' => '-50',
            'alpha_region_dashboard_sidebar_css' => '',
            'alpha_region_dashboard_inactive_equal_height_container' => '',
            'alpha_region_dashboard_inactive_equal_height_element' => '',
            'alpha_region_dashboard_inactive_force' => '',
            'alpha_region_dashboard_inactive_zone' => '',
            'alpha_region_dashboard_inactive_prefix' => '',
            'alpha_region_dashboard_inactive_columns' => '1',
            'alpha_region_dashboard_inactive_suffix' => '',
            'alpha_region_dashboard_inactive_weight' => '-50',
            'alpha_region_dashboard_inactive_css' => '',
            'alpha_region_dashboard_main_equal_height_container' => '',
            'alpha_region_dashboard_main_equal_height_element' => '',
            'alpha_region_dashboard_main_force' => '',
            'alpha_region_dashboard_main_zone' => '',
            'alpha_region_dashboard_main_prefix' => '',
            'alpha_region_dashboard_main_columns' => '1',
            'alpha_region_dashboard_main_suffix' => '',
            'alpha_region_dashboard_main_weight' => '-50',
            'alpha_region_dashboard_main_css' => '',
            'alpha_region_user_first_equal_height_container' => '',
            'alpha_region_user_first_equal_height_element' => '',
            'alpha_region_user_first_force' => '',
            'alpha_region_user_first_zone' => 'user',
            'alpha_region_user_first_prefix' => '',
            'alpha_region_user_first_columns' => '8',
            'alpha_region_user_first_suffix' => '',
            'alpha_region_user_first_weight' => '1',
            'alpha_region_user_first_css' => '',
            'alpha_region_user_second_equal_height_container' => '',
            'alpha_region_user_second_equal_height_element' => '',
            'alpha_region_user_second_force' => '',
            'alpha_region_user_second_zone' => 'user',
            'alpha_region_user_second_prefix' => '',
            'alpha_region_user_second_columns' => '4',
            'alpha_region_user_second_suffix' => '',
            'alpha_region_user_second_weight' => '2',
            'alpha_region_user_second_css' => '',
            'alpha_region_branding_equal_height_container' => '',
            'alpha_region_branding_equal_height_element' => '',
            'alpha_region_branding_force' => '1',
            'alpha_region_branding_zone' => 'branding',
            'alpha_region_branding_prefix' => '',
            'alpha_region_branding_columns' => '12',
            'alpha_region_branding_suffix' => '',
            'alpha_region_branding_weight' => '1',
            'alpha_region_branding_css' => '',
            'alpha_region_menu_equal_height_container' => '',
            'alpha_region_menu_equal_height_element' => '',
            'alpha_region_menu_force' => '1',
            'alpha_region_menu_zone' => 'menu',
            'alpha_region_menu_prefix' => '',
            'alpha_region_menu_columns' => '12',
            'alpha_region_menu_suffix' => '',
            'alpha_region_menu_weight' => '1',
            'alpha_region_menu_css' => '',
            'alpha_region_header_first_equal_height_container' => '',
            'alpha_region_header_first_equal_height_element' => '',
            'alpha_region_header_first_force' => '',
            'alpha_region_header_first_zone' => 'header',
            'alpha_region_header_first_prefix' => '',
            'alpha_region_header_first_columns' => '6',
            'alpha_region_header_first_suffix' => '',
            'alpha_region_header_first_weight' => '1',
            'alpha_region_header_first_css' => '',
            'alpha_region_header_second_equal_height_container' => '',
            'alpha_region_header_second_equal_height_element' => '',
            'alpha_region_header_second_force' => '',
            'alpha_region_header_second_zone' => 'header',
            'alpha_region_header_second_prefix' => '',
            'alpha_region_header_second_columns' => '6',
            'alpha_region_header_second_suffix' => '',
            'alpha_region_header_second_weight' => '2',
            'alpha_region_header_second_css' => '',
            'alpha_region_preface_first_equal_height_container' => '',
            'alpha_region_preface_first_equal_height_element' => '',
            'alpha_region_preface_first_force' => '',
            'alpha_region_preface_first_zone' => 'preface',
            'alpha_region_preface_first_prefix' => '',
            'alpha_region_preface_first_columns' => '4',
            'alpha_region_preface_first_suffix' => '',
            'alpha_region_preface_first_weight' => '1',
            'alpha_region_preface_first_css' => '',
            'alpha_region_preface_second_equal_height_container' => '',
            'alpha_region_preface_second_equal_height_element' => '',
            'alpha_region_preface_second_force' => '',
            'alpha_region_preface_second_zone' => 'preface',
            'alpha_region_preface_second_prefix' => '',
            'alpha_region_preface_second_columns' => '4',
            'alpha_region_preface_second_suffix' => '',
            'alpha_region_preface_second_weight' => '2',
            'alpha_region_preface_second_css' => '',
            'alpha_region_preface_third_equal_height_container' => '',
            'alpha_region_preface_third_equal_height_element' => '',
            'alpha_region_preface_third_force' => '',
            'alpha_region_preface_third_zone' => 'preface',
            'alpha_region_preface_third_prefix' => '',
            'alpha_region_preface_third_columns' => '4',
            'alpha_region_preface_third_suffix' => '',
            'alpha_region_preface_third_weight' => '3',
            'alpha_region_preface_third_css' => '',
            'alpha_region_content_equal_height_container' => '',
            'alpha_region_content_equal_height_element' => '',
            'alpha_region_content_force' => '',
            'alpha_region_content_zone' => 'content',
            'alpha_region_content_prefix' => '',
            'alpha_region_content_columns' => '6',
            'alpha_region_content_suffix' => '',
            'alpha_region_content_weight' => '2',
            'alpha_region_content_css' => '',
            'alpha_region_sidebar_first_equal_height_container' => '',
            'alpha_region_sidebar_first_equal_height_element' => '',
            'alpha_region_sidebar_first_force' => '',
            'alpha_region_sidebar_first_zone' => 'content',
            'alpha_region_sidebar_first_prefix' => '',
            'alpha_region_sidebar_first_columns' => '3',
            'alpha_region_sidebar_first_suffix' => '',
            'alpha_region_sidebar_first_weight' => '1',
            'alpha_region_sidebar_first_css' => '',
            'alpha_region_sidebar_second_equal_height_container' => '',
            'alpha_region_sidebar_second_equal_height_element' => '',
            'alpha_region_sidebar_second_force' => '',
            'alpha_region_sidebar_second_zone' => 'content',
            'alpha_region_sidebar_second_prefix' => '',
            'alpha_region_sidebar_second_columns' => '3',
            'alpha_region_sidebar_second_suffix' => '',
            'alpha_region_sidebar_second_weight' => '3',
            'alpha_region_sidebar_second_css' => '',
            'alpha_region_postscript_first_equal_height_container' => '',
            'alpha_region_postscript_first_equal_height_element' => '',
            'alpha_region_postscript_first_force' => '',
            'alpha_region_postscript_first_zone' => 'postscript',
            'alpha_region_postscript_first_prefix' => '',
            'alpha_region_postscript_first_columns' => '3',
            'alpha_region_postscript_first_suffix' => '',
            'alpha_region_postscript_first_weight' => '1',
            'alpha_region_postscript_first_css' => '',
            'alpha_region_postscript_second_equal_height_container' => '',
            'alpha_region_postscript_second_equal_height_element' => '',
            'alpha_region_postscript_second_force' => '',
            'alpha_region_postscript_second_zone' => 'postscript',
            'alpha_region_postscript_second_prefix' => '',
            'alpha_region_postscript_second_columns' => '3',
            'alpha_region_postscript_second_suffix' => '',
            'alpha_region_postscript_second_weight' => '2',
            'alpha_region_postscript_second_css' => '',
            'alpha_region_postscript_third_equal_height_container' => '',
            'alpha_region_postscript_third_equal_height_element' => '',
            'alpha_region_postscript_third_force' => '',
            'alpha_region_postscript_third_zone' => 'postscript',
            'alpha_region_postscript_third_prefix' => '',
            'alpha_region_postscript_third_columns' => '3',
            'alpha_region_postscript_third_suffix' => '',
            'alpha_region_postscript_third_weight' => '3',
            'alpha_region_postscript_third_css' => '',
            'alpha_region_postscript_fourth_equal_height_container' => '',
            'alpha_region_postscript_fourth_equal_height_element' => '',
            'alpha_region_postscript_fourth_force' => '',
            'alpha_region_postscript_fourth_zone' => 'postscript',
            'alpha_region_postscript_fourth_prefix' => '',
            'alpha_region_postscript_fourth_columns' => '3',
            'alpha_region_postscript_fourth_suffix' => '',
            'alpha_region_postscript_fourth_weight' => '4',
            'alpha_region_postscript_fourth_css' => '',
            'alpha_region_footer_first_equal_height_container' => '',
            'alpha_region_footer_first_equal_height_element' => '',
            'alpha_region_footer_first_force' => '',
            'alpha_region_footer_first_zone' => 'footer',
            'alpha_region_footer_first_prefix' => '',
            'alpha_region_footer_first_columns' => '12',
            'alpha_region_footer_first_suffix' => '',
            'alpha_region_footer_first_weight' => '1',
            'alpha_region_footer_first_css' => '',
            'alpha_region_footer_second_equal_height_container' => '',
            'alpha_region_footer_second_equal_height_element' => '',
            'alpha_region_footer_second_force' => '',
            'alpha_region_footer_second_zone' => 'footer',
            'alpha_region_footer_second_prefix' => '',
            'alpha_region_footer_second_columns' => '12',
            'alpha_region_footer_second_suffix' => '',
            'alpha_region_footer_second_weight' => '2',
            'alpha_region_footer_second_css' => '',
          ),
          'project' => 'omega',
          'datestamp' => '1329681647',
        ),
        'project' => 'omega',
        'version' => '7.x-3.1',
      ),
      'starterkit_omega_xhtml' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/themes/omega/starterkits/omega-xhtml/starterkit_omega_xhtml.info',
        'basename' => 'starterkit_omega_xhtml.info',
        'name' => 'Omega XHTML Starter Kit',
        'info' => 
        array (
          'name' => 'Omega XHTML Starter Kit',
          'description' => 'Default XHTML starterkit for <a href="http://drupal.org/project/omega">Omega</a>. You should not directly edit this starterkit, but make your own copy. Information on this can be found in the <a href="http://himer.us/omega-docs">Omega Documentation</a>.',
          'core' => '7.x',
          'engine' => 'phptemplate',
          'screenshot' => 'screenshot.png',
          'base theme' => 'omega',
          'hidden' => true,
          'starterkit' => true,
          'regions' => 
          array (
            'page_top' => 'Page Top',
            'page_bottom' => 'Page Bottom',
            'content' => 'Content',
            'user_first' => 'User Bar First',
            'user_second' => 'User Bar Second',
            'branding' => 'Branding',
            'menu' => 'Menu',
            'sidebar_first' => 'Sidebar First',
            'sidebar_second' => 'Sidebar Second',
            'header_first' => 'Header First',
            'header_second' => 'Header Second',
            'preface_first' => 'Preface First',
            'preface_second' => 'Preface Second',
            'preface_third' => 'Preface Third',
            'postscript_first' => 'Postscript First',
            'postscript_second' => 'Postscript Second',
            'postscript_third' => 'Postscript Third',
            'postscript_fourth' => 'Postscript Fourth',
            'footer_first' => 'Footer First',
            'footer_second' => 'Footer Second',
          ),
          'zones' => 
          array (
            'user' => 'User',
            'branding' => 'Branding',
            'menu' => 'Menu',
            'header' => 'Header',
            'preface' => 'Preface',
            'content' => 'Content',
            'postscript' => 'Postscript',
            'footer' => 'Footer',
          ),
          'css' => 
          array (
            'global.css' => 
            array (
              'name' => 'Your custom global styles',
              'description' => 'This file holds all the globally active custom CSS of your theme.',
              'options' => 
              array (
                'weight' => '10',
              ),
            ),
          ),
          'settings' => 
          array (
            'alpha_grid' => 'alpha_default',
            'alpha_primary_alpha_default' => 'normal',
            'alpha_responsive' => '1',
            'alpha_layouts_alpha_fluid_primary' => 'normal',
            'alpha_layouts_alpha_fluid_normal_responsive' => '0',
            'alpha_layouts_alpha_fluid_normal_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_primary' => 'normal',
            'alpha_layouts_alpha_default_fluid_responsive' => '0',
            'alpha_layouts_alpha_default_fluid_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_fluid_weight' => '0',
            'alpha_layouts_alpha_default_narrow_responsive' => '1',
            'alpha_layouts_alpha_default_narrow_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_narrow_weight' => '1',
            'alpha_layouts_alpha_default_normal_responsive' => '1',
            'alpha_layouts_alpha_default_normal_media' => 'all and (min-width: 980px) and (min-device-width: 980px), all and (max-device-width: 1024px) and (min-width: 1024px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_normal_weight' => '2',
            'alpha_layouts_alpha_default_wide_responsive' => '1',
            'alpha_layouts_alpha_default_wide_media' => 'all and (min-width: 1220px)',
            'alpha_layouts_alpha_default_wide_weight' => '3',
            'alpha_viewport' => '1',
            'alpha_viewport_initial_scale' => '1',
            'alpha_viewport_min_scale' => '1',
            'alpha_viewport_max_scale' => '1',
            'alpha_viewport_user_scaleable' => '',
            'alpha_libraries' => 
            array (
              'omega_formalize' => 'omega_formalize',
              'omega_equalheights' => '',
              'omega_mediaqueries' => 'omega_mediaqueries',
            ),
            'alpha_css' => 
            array (
              'alpha-reset.css' => 'alpha-reset.css',
              'alpha-mobile.css' => 'alpha-mobile.css',
              'alpha-alpha.css' => 'alpha-alpha.css',
              'omega-text.css' => 'omega-text.css',
              'omega-branding.css' => 'omega-branding.css',
              'omega-menu.css' => 'omega-menu.css',
              'omega-forms.css' => 'omega-forms.css',
              'omega-visuals.css' => 'omega-visuals.css',
              'global.css' => 'global.css',
            ),
            'alpha_debug_block_toggle' => '1',
            'alpha_debug_block_active' => '1',
            'alpha_debug_grid_toggle' => '1',
            'alpha_debug_grid_active' => '1',
            'alpha_debug_grid_roles' => 
            array (
              1 => '1',
              2 => '2',
              3 => '3',
            ),
            'alpha_toggle_messages' => '1',
            'alpha_toggle_action_links' => '1',
            'alpha_toggle_tabs' => '1',
            'alpha_toggle_breadcrumb' => '1',
            'alpha_toggle_page_title' => '1',
            'alpha_toggle_feed_icons' => '1',
            'alpha_hidden_title' => '',
            'alpha_hidden_site_name' => '',
            'alpha_hidden_site_slogan' => '',
            'alpha_zone_user_equal_height_container' => '',
            'alpha_zone_user_wrapper' => '1',
            'alpha_zone_user_force' => '',
            'alpha_zone_user_section' => 'header',
            'alpha_zone_user_weight' => '1',
            'alpha_zone_user_columns' => '12',
            'alpha_zone_user_primary' => '',
            'alpha_zone_user_css' => '',
            'alpha_zone_user_wrapper_css' => '',
            'alpha_zone_branding_equal_height_container' => '',
            'alpha_zone_branding_wrapper' => '1',
            'alpha_zone_branding_force' => '',
            'alpha_zone_branding_section' => 'header',
            'alpha_zone_branding_weight' => '2',
            'alpha_zone_branding_columns' => '12',
            'alpha_zone_branding_primary' => '',
            'alpha_zone_branding_css' => '',
            'alpha_zone_branding_wrapper_css' => '',
            'alpha_zone_menu_equal_height_container' => '',
            'alpha_zone_menu_wrapper' => '1',
            'alpha_zone_menu_force' => '',
            'alpha_zone_menu_section' => 'header',
            'alpha_zone_menu_weight' => '3',
            'alpha_zone_menu_columns' => '12',
            'alpha_zone_menu_primary' => '',
            'alpha_zone_menu_css' => '',
            'alpha_zone_menu_wrapper_css' => '',
            'alpha_zone_header_equal_height_container' => '',
            'alpha_zone_header_wrapper' => '1',
            'alpha_zone_header_force' => '',
            'alpha_zone_header_section' => 'header',
            'alpha_zone_header_weight' => '4',
            'alpha_zone_header_columns' => '12',
            'alpha_zone_header_primary' => '',
            'alpha_zone_header_css' => '',
            'alpha_zone_header_wrapper_css' => '',
            'alpha_zone_preface_equal_height_container' => '',
            'alpha_zone_preface_wrapper' => '1',
            'alpha_zone_preface_force' => '',
            'alpha_zone_preface_section' => 'content',
            'alpha_zone_preface_weight' => '1',
            'alpha_zone_preface_columns' => '12',
            'alpha_zone_preface_primary' => '',
            'alpha_zone_preface_css' => '',
            'alpha_zone_preface_wrapper_css' => '',
            'alpha_zone_content_equal_height_container' => '',
            'alpha_zone_content_wrapper' => '1',
            'alpha_zone_content_force' => '1',
            'alpha_zone_content_section' => 'content',
            'alpha_zone_content_weight' => '2',
            'alpha_zone_content_columns' => '12',
            'alpha_zone_content_primary' => 'content',
            'alpha_zone_content_css' => '',
            'alpha_zone_content_wrapper_css' => '',
            'alpha_zone_postscript_equal_height_container' => '',
            'alpha_zone_postscript_wrapper' => '1',
            'alpha_zone_postscript_force' => '',
            'alpha_zone_postscript_section' => 'content',
            'alpha_zone_postscript_weight' => '3',
            'alpha_zone_postscript_columns' => '12',
            'alpha_zone_postscript_primary' => '',
            'alpha_zone_postscript_css' => '',
            'alpha_zone_postscript_wrapper_css' => '',
            'alpha_zone_footer_equal_height_container' => '',
            'alpha_zone_footer_wrapper' => '1',
            'alpha_zone_footer_force' => '',
            'alpha_zone_footer_section' => 'footer',
            'alpha_zone_footer_weight' => '1',
            'alpha_zone_footer_columns' => '12',
            'alpha_zone_footer_primary' => '',
            'alpha_zone_footer_css' => '',
            'alpha_zone_footer_wrapper_css' => '',
            'alpha_region_dashboard_sidebar_equal_height_container' => '',
            'alpha_region_dashboard_sidebar_equal_height_element' => '',
            'alpha_region_dashboard_sidebar_force' => '',
            'alpha_region_dashboard_sidebar_zone' => '',
            'alpha_region_dashboard_sidebar_prefix' => '',
            'alpha_region_dashboard_sidebar_columns' => '1',
            'alpha_region_dashboard_sidebar_suffix' => '',
            'alpha_region_dashboard_sidebar_weight' => '-50',
            'alpha_region_dashboard_sidebar_css' => '',
            'alpha_region_dashboard_inactive_equal_height_container' => '',
            'alpha_region_dashboard_inactive_equal_height_element' => '',
            'alpha_region_dashboard_inactive_force' => '',
            'alpha_region_dashboard_inactive_zone' => '',
            'alpha_region_dashboard_inactive_prefix' => '',
            'alpha_region_dashboard_inactive_columns' => '1',
            'alpha_region_dashboard_inactive_suffix' => '',
            'alpha_region_dashboard_inactive_weight' => '-50',
            'alpha_region_dashboard_inactive_css' => '',
            'alpha_region_dashboard_main_equal_height_container' => '',
            'alpha_region_dashboard_main_equal_height_element' => '',
            'alpha_region_dashboard_main_force' => '',
            'alpha_region_dashboard_main_zone' => '',
            'alpha_region_dashboard_main_prefix' => '',
            'alpha_region_dashboard_main_columns' => '1',
            'alpha_region_dashboard_main_suffix' => '',
            'alpha_region_dashboard_main_weight' => '-50',
            'alpha_region_dashboard_main_css' => '',
            'alpha_region_user_first_equal_height_container' => '',
            'alpha_region_user_first_equal_height_element' => '',
            'alpha_region_user_first_force' => '',
            'alpha_region_user_first_zone' => 'user',
            'alpha_region_user_first_prefix' => '',
            'alpha_region_user_first_columns' => '8',
            'alpha_region_user_first_suffix' => '',
            'alpha_region_user_first_weight' => '1',
            'alpha_region_user_first_css' => '',
            'alpha_region_user_second_equal_height_container' => '',
            'alpha_region_user_second_equal_height_element' => '',
            'alpha_region_user_second_force' => '',
            'alpha_region_user_second_zone' => 'user',
            'alpha_region_user_second_prefix' => '',
            'alpha_region_user_second_columns' => '4',
            'alpha_region_user_second_suffix' => '',
            'alpha_region_user_second_weight' => '2',
            'alpha_region_user_second_css' => '',
            'alpha_region_branding_equal_height_container' => '',
            'alpha_region_branding_equal_height_element' => '',
            'alpha_region_branding_force' => '1',
            'alpha_region_branding_zone' => 'branding',
            'alpha_region_branding_prefix' => '',
            'alpha_region_branding_columns' => '12',
            'alpha_region_branding_suffix' => '',
            'alpha_region_branding_weight' => '1',
            'alpha_region_branding_css' => '',
            'alpha_region_menu_equal_height_container' => '',
            'alpha_region_menu_equal_height_element' => '',
            'alpha_region_menu_force' => '1',
            'alpha_region_menu_zone' => 'menu',
            'alpha_region_menu_prefix' => '',
            'alpha_region_menu_columns' => '12',
            'alpha_region_menu_suffix' => '',
            'alpha_region_menu_weight' => '1',
            'alpha_region_menu_css' => '',
            'alpha_region_header_first_equal_height_container' => '',
            'alpha_region_header_first_equal_height_element' => '',
            'alpha_region_header_first_force' => '',
            'alpha_region_header_first_zone' => 'header',
            'alpha_region_header_first_prefix' => '',
            'alpha_region_header_first_columns' => '6',
            'alpha_region_header_first_suffix' => '',
            'alpha_region_header_first_weight' => '1',
            'alpha_region_header_first_css' => '',
            'alpha_region_header_second_equal_height_container' => '',
            'alpha_region_header_second_equal_height_element' => '',
            'alpha_region_header_second_force' => '',
            'alpha_region_header_second_zone' => 'header',
            'alpha_region_header_second_prefix' => '',
            'alpha_region_header_second_columns' => '6',
            'alpha_region_header_second_suffix' => '',
            'alpha_region_header_second_weight' => '2',
            'alpha_region_header_second_css' => '',
            'alpha_region_preface_first_equal_height_container' => '',
            'alpha_region_preface_first_equal_height_element' => '',
            'alpha_region_preface_first_force' => '',
            'alpha_region_preface_first_zone' => 'preface',
            'alpha_region_preface_first_prefix' => '',
            'alpha_region_preface_first_columns' => '4',
            'alpha_region_preface_first_suffix' => '',
            'alpha_region_preface_first_weight' => '1',
            'alpha_region_preface_first_css' => '',
            'alpha_region_preface_second_equal_height_container' => '',
            'alpha_region_preface_second_equal_height_element' => '',
            'alpha_region_preface_second_force' => '',
            'alpha_region_preface_second_zone' => 'preface',
            'alpha_region_preface_second_prefix' => '',
            'alpha_region_preface_second_columns' => '4',
            'alpha_region_preface_second_suffix' => '',
            'alpha_region_preface_second_weight' => '2',
            'alpha_region_preface_second_css' => '',
            'alpha_region_preface_third_equal_height_container' => '',
            'alpha_region_preface_third_equal_height_element' => '',
            'alpha_region_preface_third_force' => '',
            'alpha_region_preface_third_zone' => 'preface',
            'alpha_region_preface_third_prefix' => '',
            'alpha_region_preface_third_columns' => '4',
            'alpha_region_preface_third_suffix' => '',
            'alpha_region_preface_third_weight' => '3',
            'alpha_region_preface_third_css' => '',
            'alpha_region_content_equal_height_container' => '',
            'alpha_region_content_equal_height_element' => '',
            'alpha_region_content_force' => '',
            'alpha_region_content_zone' => 'content',
            'alpha_region_content_prefix' => '',
            'alpha_region_content_columns' => '6',
            'alpha_region_content_suffix' => '',
            'alpha_region_content_weight' => '2',
            'alpha_region_content_css' => '',
            'alpha_region_sidebar_first_equal_height_container' => '',
            'alpha_region_sidebar_first_equal_height_element' => '',
            'alpha_region_sidebar_first_force' => '',
            'alpha_region_sidebar_first_zone' => 'content',
            'alpha_region_sidebar_first_prefix' => '',
            'alpha_region_sidebar_first_columns' => '3',
            'alpha_region_sidebar_first_suffix' => '',
            'alpha_region_sidebar_first_weight' => '1',
            'alpha_region_sidebar_first_css' => '',
            'alpha_region_sidebar_second_equal_height_container' => '',
            'alpha_region_sidebar_second_equal_height_element' => '',
            'alpha_region_sidebar_second_force' => '',
            'alpha_region_sidebar_second_zone' => 'content',
            'alpha_region_sidebar_second_prefix' => '',
            'alpha_region_sidebar_second_columns' => '3',
            'alpha_region_sidebar_second_suffix' => '',
            'alpha_region_sidebar_second_weight' => '3',
            'alpha_region_sidebar_second_css' => '',
            'alpha_region_postscript_first_equal_height_container' => '',
            'alpha_region_postscript_first_equal_height_element' => '',
            'alpha_region_postscript_first_force' => '',
            'alpha_region_postscript_first_zone' => 'postscript',
            'alpha_region_postscript_first_prefix' => '',
            'alpha_region_postscript_first_columns' => '3',
            'alpha_region_postscript_first_suffix' => '',
            'alpha_region_postscript_first_weight' => '1',
            'alpha_region_postscript_first_css' => '',
            'alpha_region_postscript_second_equal_height_container' => '',
            'alpha_region_postscript_second_equal_height_element' => '',
            'alpha_region_postscript_second_force' => '',
            'alpha_region_postscript_second_zone' => 'postscript',
            'alpha_region_postscript_second_prefix' => '',
            'alpha_region_postscript_second_columns' => '3',
            'alpha_region_postscript_second_suffix' => '',
            'alpha_region_postscript_second_weight' => '2',
            'alpha_region_postscript_second_css' => '',
            'alpha_region_postscript_third_equal_height_container' => '',
            'alpha_region_postscript_third_equal_height_element' => '',
            'alpha_region_postscript_third_force' => '',
            'alpha_region_postscript_third_zone' => 'postscript',
            'alpha_region_postscript_third_prefix' => '',
            'alpha_region_postscript_third_columns' => '3',
            'alpha_region_postscript_third_suffix' => '',
            'alpha_region_postscript_third_weight' => '3',
            'alpha_region_postscript_third_css' => '',
            'alpha_region_postscript_fourth_equal_height_container' => '',
            'alpha_region_postscript_fourth_equal_height_element' => '',
            'alpha_region_postscript_fourth_force' => '',
            'alpha_region_postscript_fourth_zone' => 'postscript',
            'alpha_region_postscript_fourth_prefix' => '',
            'alpha_region_postscript_fourth_columns' => '3',
            'alpha_region_postscript_fourth_suffix' => '',
            'alpha_region_postscript_fourth_weight' => '4',
            'alpha_region_postscript_fourth_css' => '',
            'alpha_region_footer_first_equal_height_container' => '',
            'alpha_region_footer_first_equal_height_element' => '',
            'alpha_region_footer_first_force' => '',
            'alpha_region_footer_first_zone' => 'footer',
            'alpha_region_footer_first_prefix' => '',
            'alpha_region_footer_first_columns' => '12',
            'alpha_region_footer_first_suffix' => '',
            'alpha_region_footer_first_weight' => '1',
            'alpha_region_footer_first_css' => '',
            'alpha_region_footer_second_equal_height_container' => '',
            'alpha_region_footer_second_equal_height_element' => '',
            'alpha_region_footer_second_force' => '',
            'alpha_region_footer_second_zone' => 'footer',
            'alpha_region_footer_second_prefix' => '',
            'alpha_region_footer_second_columns' => '12',
            'alpha_region_footer_second_suffix' => '',
            'alpha_region_footer_second_weight' => '2',
            'alpha_region_footer_second_css' => '',
          ),
          'version' => '7.x-3.1',
          'project' => 'omega',
          'datestamp' => '1329681647',
        ),
        'project' => 'omega',
        'version' => '7.x-3.1',
      ),
      'starterkit_omega_html5' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/themes/omega/starterkits/omega-html5/starterkit_omega_html5.info',
        'basename' => 'starterkit_omega_html5.info',
        'name' => 'Omega HTML5 Starterkit',
        'info' => 
        array (
          'name' => 'Omega HTML5 Starterkit',
          'description' => 'Default starterkit for <a href="http://drupal.org/project/omega">Omega</a>. You should not directly edit this starterkit, but make your own copy. Information on this can be found in the <a href="http://himer.us/omega-docs">Omega Documentation</a>',
          'core' => '7.x',
          'engine' => 'phptemplate',
          'screenshot' => 'screenshot.png',
          'base theme' => 'omega',
          'hidden' => true,
          'starterkit' => true,
          'regions' => 
          array (
            'page_top' => 'Page Top',
            'page_bottom' => 'Page Bottom',
            'content' => 'Content',
            'user_first' => 'User Bar First',
            'user_second' => 'User Bar Second',
            'branding' => 'Branding',
            'menu' => 'Menu',
            'sidebar_first' => 'Sidebar First',
            'sidebar_second' => 'Sidebar Second',
            'header_first' => 'Header First',
            'header_second' => 'Header Second',
            'preface_first' => 'Preface First',
            'preface_second' => 'Preface Second',
            'preface_third' => 'Preface Third',
            'postscript_first' => 'Postscript First',
            'postscript_second' => 'Postscript Second',
            'postscript_third' => 'Postscript Third',
            'postscript_fourth' => 'Postscript Fourth',
            'footer_first' => 'Footer First',
            'footer_second' => 'Footer Second',
          ),
          'zones' => 
          array (
            'user' => 'User',
            'branding' => 'Branding',
            'menu' => 'Menu',
            'header' => 'Header',
            'preface' => 'Preface',
            'content' => 'Content',
            'postscript' => 'Postscript',
            'footer' => 'Footer',
          ),
          'css' => 
          array (
            'global.css' => 
            array (
              'name' => 'Your custom global styles',
              'description' => 'This file holds all the globally active custom CSS of your theme.',
              'options' => 
              array (
                'weight' => '10',
              ),
            ),
          ),
          'settings' => 
          array (
            'alpha_grid' => 'alpha_default',
            'alpha_primary_alpha_default' => 'normal',
            'alpha_responsive' => '1',
            'alpha_layouts_alpha_fluid_primary' => 'normal',
            'alpha_layouts_alpha_fluid_normal_responsive' => '0',
            'alpha_layouts_alpha_fluid_normal_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_primary' => 'normal',
            'alpha_layouts_alpha_default_fluid_responsive' => '0',
            'alpha_layouts_alpha_default_fluid_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_fluid_weight' => '0',
            'alpha_layouts_alpha_default_narrow_responsive' => '1',
            'alpha_layouts_alpha_default_narrow_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_narrow_weight' => '1',
            'alpha_layouts_alpha_default_normal_responsive' => '1',
            'alpha_layouts_alpha_default_normal_media' => 'all and (min-width: 980px) and (min-device-width: 980px), all and (max-device-width: 1024px) and (min-width: 1024px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_normal_weight' => '2',
            'alpha_layouts_alpha_default_wide_responsive' => '1',
            'alpha_layouts_alpha_default_wide_media' => 'all and (min-width: 1220px)',
            'alpha_layouts_alpha_default_wide_weight' => '3',
            'alpha_viewport' => '1',
            'alpha_viewport_initial_scale' => '1',
            'alpha_viewport_min_scale' => '1',
            'alpha_viewport_max_scale' => '1',
            'alpha_viewport_user_scaleable' => '',
            'alpha_libraries' => 
            array (
              'omega_formalize' => 'omega_formalize',
              'omega_equalheights' => '',
              'omega_mediaqueries' => 'omega_mediaqueries',
            ),
            'alpha_css' => 
            array (
              'alpha-reset.css' => 'alpha-reset.css',
              'alpha-mobile.css' => 'alpha-mobile.css',
              'alpha-alpha.css' => 'alpha-alpha.css',
              'omega-text.css' => 'omega-text.css',
              'omega-branding.css' => 'omega-branding.css',
              'omega-menu.css' => 'omega-menu.css',
              'omega-forms.css' => 'omega-forms.css',
              'omega-visuals.css' => 'omega-visuals.css',
              'global.css' => 'global.css',
            ),
            'alpha_debug_block_toggle' => '1',
            'alpha_debug_block_active' => '1',
            'alpha_debug_grid_toggle' => '1',
            'alpha_debug_grid_active' => '1',
            'alpha_debug_grid_roles' => 
            array (
              1 => '1',
              2 => '2',
              3 => '3',
            ),
            'alpha_toggle_messages' => '1',
            'alpha_toggle_action_links' => '1',
            'alpha_toggle_tabs' => '1',
            'alpha_toggle_breadcrumb' => '1',
            'alpha_toggle_page_title' => '1',
            'alpha_toggle_feed_icons' => '1',
            'alpha_hidden_title' => '',
            'alpha_hidden_site_name' => '',
            'alpha_hidden_site_slogan' => '',
            'alpha_zone_user_equal_height_container' => '',
            'alpha_zone_user_wrapper' => '1',
            'alpha_zone_user_force' => '',
            'alpha_zone_user_section' => 'header',
            'alpha_zone_user_weight' => '1',
            'alpha_zone_user_columns' => '12',
            'alpha_zone_user_primary' => '',
            'alpha_zone_user_css' => '',
            'alpha_zone_user_wrapper_css' => '',
            'alpha_zone_branding_equal_height_container' => '',
            'alpha_zone_branding_wrapper' => '1',
            'alpha_zone_branding_force' => '',
            'alpha_zone_branding_section' => 'header',
            'alpha_zone_branding_weight' => '2',
            'alpha_zone_branding_columns' => '12',
            'alpha_zone_branding_primary' => '',
            'alpha_zone_branding_css' => '',
            'alpha_zone_branding_wrapper_css' => '',
            'alpha_zone_menu_equal_height_container' => '',
            'alpha_zone_menu_wrapper' => '1',
            'alpha_zone_menu_force' => '',
            'alpha_zone_menu_section' => 'header',
            'alpha_zone_menu_weight' => '3',
            'alpha_zone_menu_columns' => '12',
            'alpha_zone_menu_primary' => '',
            'alpha_zone_menu_css' => '',
            'alpha_zone_menu_wrapper_css' => '',
            'alpha_zone_header_equal_height_container' => '',
            'alpha_zone_header_wrapper' => '1',
            'alpha_zone_header_force' => '',
            'alpha_zone_header_section' => 'header',
            'alpha_zone_header_weight' => '4',
            'alpha_zone_header_columns' => '12',
            'alpha_zone_header_primary' => '',
            'alpha_zone_header_css' => '',
            'alpha_zone_header_wrapper_css' => '',
            'alpha_zone_preface_equal_height_container' => '',
            'alpha_zone_preface_wrapper' => '1',
            'alpha_zone_preface_force' => '',
            'alpha_zone_preface_section' => 'content',
            'alpha_zone_preface_weight' => '1',
            'alpha_zone_preface_columns' => '12',
            'alpha_zone_preface_primary' => '',
            'alpha_zone_preface_css' => '',
            'alpha_zone_preface_wrapper_css' => '',
            'alpha_zone_content_equal_height_container' => '',
            'alpha_zone_content_wrapper' => '1',
            'alpha_zone_content_force' => '1',
            'alpha_zone_content_section' => 'content',
            'alpha_zone_content_weight' => '2',
            'alpha_zone_content_columns' => '12',
            'alpha_zone_content_primary' => 'content',
            'alpha_zone_content_css' => '',
            'alpha_zone_content_wrapper_css' => '',
            'alpha_zone_postscript_equal_height_container' => '',
            'alpha_zone_postscript_wrapper' => '1',
            'alpha_zone_postscript_force' => '',
            'alpha_zone_postscript_section' => 'content',
            'alpha_zone_postscript_weight' => '3',
            'alpha_zone_postscript_columns' => '12',
            'alpha_zone_postscript_primary' => '',
            'alpha_zone_postscript_css' => '',
            'alpha_zone_postscript_wrapper_css' => '',
            'alpha_zone_footer_equal_height_container' => '',
            'alpha_zone_footer_wrapper' => '1',
            'alpha_zone_footer_force' => '',
            'alpha_zone_footer_section' => 'footer',
            'alpha_zone_footer_weight' => '1',
            'alpha_zone_footer_columns' => '12',
            'alpha_zone_footer_primary' => '',
            'alpha_zone_footer_css' => '',
            'alpha_zone_footer_wrapper_css' => '',
            'alpha_region_dashboard_sidebar_equal_height_container' => '',
            'alpha_region_dashboard_sidebar_equal_height_element' => '',
            'alpha_region_dashboard_sidebar_force' => '',
            'alpha_region_dashboard_sidebar_zone' => '',
            'alpha_region_dashboard_sidebar_prefix' => '',
            'alpha_region_dashboard_sidebar_columns' => '1',
            'alpha_region_dashboard_sidebar_suffix' => '',
            'alpha_region_dashboard_sidebar_weight' => '-50',
            'alpha_region_dashboard_sidebar_css' => '',
            'alpha_region_dashboard_inactive_equal_height_container' => '',
            'alpha_region_dashboard_inactive_equal_height_element' => '',
            'alpha_region_dashboard_inactive_force' => '',
            'alpha_region_dashboard_inactive_zone' => '',
            'alpha_region_dashboard_inactive_prefix' => '',
            'alpha_region_dashboard_inactive_columns' => '1',
            'alpha_region_dashboard_inactive_suffix' => '',
            'alpha_region_dashboard_inactive_weight' => '-50',
            'alpha_region_dashboard_inactive_css' => '',
            'alpha_region_dashboard_main_equal_height_container' => '',
            'alpha_region_dashboard_main_equal_height_element' => '',
            'alpha_region_dashboard_main_force' => '',
            'alpha_region_dashboard_main_zone' => '',
            'alpha_region_dashboard_main_prefix' => '',
            'alpha_region_dashboard_main_columns' => '1',
            'alpha_region_dashboard_main_suffix' => '',
            'alpha_region_dashboard_main_weight' => '-50',
            'alpha_region_dashboard_main_css' => '',
            'alpha_region_user_first_equal_height_container' => '',
            'alpha_region_user_first_equal_height_element' => '',
            'alpha_region_user_first_force' => '',
            'alpha_region_user_first_zone' => 'user',
            'alpha_region_user_first_prefix' => '',
            'alpha_region_user_first_columns' => '8',
            'alpha_region_user_first_suffix' => '',
            'alpha_region_user_first_weight' => '1',
            'alpha_region_user_first_css' => '',
            'alpha_region_user_second_equal_height_container' => '',
            'alpha_region_user_second_equal_height_element' => '',
            'alpha_region_user_second_force' => '',
            'alpha_region_user_second_zone' => 'user',
            'alpha_region_user_second_prefix' => '',
            'alpha_region_user_second_columns' => '4',
            'alpha_region_user_second_suffix' => '',
            'alpha_region_user_second_weight' => '2',
            'alpha_region_user_second_css' => '',
            'alpha_region_branding_equal_height_container' => '',
            'alpha_region_branding_equal_height_element' => '',
            'alpha_region_branding_force' => '1',
            'alpha_region_branding_zone' => 'branding',
            'alpha_region_branding_prefix' => '',
            'alpha_region_branding_columns' => '12',
            'alpha_region_branding_suffix' => '',
            'alpha_region_branding_weight' => '1',
            'alpha_region_branding_css' => '',
            'alpha_region_menu_equal_height_container' => '',
            'alpha_region_menu_equal_height_element' => '',
            'alpha_region_menu_force' => '1',
            'alpha_region_menu_zone' => 'menu',
            'alpha_region_menu_prefix' => '',
            'alpha_region_menu_columns' => '12',
            'alpha_region_menu_suffix' => '',
            'alpha_region_menu_weight' => '1',
            'alpha_region_menu_css' => '',
            'alpha_region_header_first_equal_height_container' => '',
            'alpha_region_header_first_equal_height_element' => '',
            'alpha_region_header_first_force' => '',
            'alpha_region_header_first_zone' => 'header',
            'alpha_region_header_first_prefix' => '',
            'alpha_region_header_first_columns' => '6',
            'alpha_region_header_first_suffix' => '',
            'alpha_region_header_first_weight' => '1',
            'alpha_region_header_first_css' => '',
            'alpha_region_header_second_equal_height_container' => '',
            'alpha_region_header_second_equal_height_element' => '',
            'alpha_region_header_second_force' => '',
            'alpha_region_header_second_zone' => 'header',
            'alpha_region_header_second_prefix' => '',
            'alpha_region_header_second_columns' => '6',
            'alpha_region_header_second_suffix' => '',
            'alpha_region_header_second_weight' => '2',
            'alpha_region_header_second_css' => '',
            'alpha_region_preface_first_equal_height_container' => '',
            'alpha_region_preface_first_equal_height_element' => '',
            'alpha_region_preface_first_force' => '',
            'alpha_region_preface_first_zone' => 'preface',
            'alpha_region_preface_first_prefix' => '',
            'alpha_region_preface_first_columns' => '4',
            'alpha_region_preface_first_suffix' => '',
            'alpha_region_preface_first_weight' => '1',
            'alpha_region_preface_first_css' => '',
            'alpha_region_preface_second_equal_height_container' => '',
            'alpha_region_preface_second_equal_height_element' => '',
            'alpha_region_preface_second_force' => '',
            'alpha_region_preface_second_zone' => 'preface',
            'alpha_region_preface_second_prefix' => '',
            'alpha_region_preface_second_columns' => '4',
            'alpha_region_preface_second_suffix' => '',
            'alpha_region_preface_second_weight' => '2',
            'alpha_region_preface_second_css' => '',
            'alpha_region_preface_third_equal_height_container' => '',
            'alpha_region_preface_third_equal_height_element' => '',
            'alpha_region_preface_third_force' => '',
            'alpha_region_preface_third_zone' => 'preface',
            'alpha_region_preface_third_prefix' => '',
            'alpha_region_preface_third_columns' => '4',
            'alpha_region_preface_third_suffix' => '',
            'alpha_region_preface_third_weight' => '3',
            'alpha_region_preface_third_css' => '',
            'alpha_region_content_equal_height_container' => '',
            'alpha_region_content_equal_height_element' => '',
            'alpha_region_content_force' => '',
            'alpha_region_content_zone' => 'content',
            'alpha_region_content_prefix' => '',
            'alpha_region_content_columns' => '6',
            'alpha_region_content_suffix' => '',
            'alpha_region_content_weight' => '2',
            'alpha_region_content_css' => '',
            'alpha_region_sidebar_first_equal_height_container' => '',
            'alpha_region_sidebar_first_equal_height_element' => '',
            'alpha_region_sidebar_first_force' => '',
            'alpha_region_sidebar_first_zone' => 'content',
            'alpha_region_sidebar_first_prefix' => '',
            'alpha_region_sidebar_first_columns' => '3',
            'alpha_region_sidebar_first_suffix' => '',
            'alpha_region_sidebar_first_weight' => '1',
            'alpha_region_sidebar_first_css' => '',
            'alpha_region_sidebar_second_equal_height_container' => '',
            'alpha_region_sidebar_second_equal_height_element' => '',
            'alpha_region_sidebar_second_force' => '',
            'alpha_region_sidebar_second_zone' => 'content',
            'alpha_region_sidebar_second_prefix' => '',
            'alpha_region_sidebar_second_columns' => '3',
            'alpha_region_sidebar_second_suffix' => '',
            'alpha_region_sidebar_second_weight' => '3',
            'alpha_region_sidebar_second_css' => '',
            'alpha_region_postscript_first_equal_height_container' => '',
            'alpha_region_postscript_first_equal_height_element' => '',
            'alpha_region_postscript_first_force' => '',
            'alpha_region_postscript_first_zone' => 'postscript',
            'alpha_region_postscript_first_prefix' => '',
            'alpha_region_postscript_first_columns' => '3',
            'alpha_region_postscript_first_suffix' => '',
            'alpha_region_postscript_first_weight' => '1',
            'alpha_region_postscript_first_css' => '',
            'alpha_region_postscript_second_equal_height_container' => '',
            'alpha_region_postscript_second_equal_height_element' => '',
            'alpha_region_postscript_second_force' => '',
            'alpha_region_postscript_second_zone' => 'postscript',
            'alpha_region_postscript_second_prefix' => '',
            'alpha_region_postscript_second_columns' => '3',
            'alpha_region_postscript_second_suffix' => '',
            'alpha_region_postscript_second_weight' => '2',
            'alpha_region_postscript_second_css' => '',
            'alpha_region_postscript_third_equal_height_container' => '',
            'alpha_region_postscript_third_equal_height_element' => '',
            'alpha_region_postscript_third_force' => '',
            'alpha_region_postscript_third_zone' => 'postscript',
            'alpha_region_postscript_third_prefix' => '',
            'alpha_region_postscript_third_columns' => '3',
            'alpha_region_postscript_third_suffix' => '',
            'alpha_region_postscript_third_weight' => '3',
            'alpha_region_postscript_third_css' => '',
            'alpha_region_postscript_fourth_equal_height_container' => '',
            'alpha_region_postscript_fourth_equal_height_element' => '',
            'alpha_region_postscript_fourth_force' => '',
            'alpha_region_postscript_fourth_zone' => 'postscript',
            'alpha_region_postscript_fourth_prefix' => '',
            'alpha_region_postscript_fourth_columns' => '3',
            'alpha_region_postscript_fourth_suffix' => '',
            'alpha_region_postscript_fourth_weight' => '4',
            'alpha_region_postscript_fourth_css' => '',
            'alpha_region_footer_first_equal_height_container' => '',
            'alpha_region_footer_first_equal_height_element' => '',
            'alpha_region_footer_first_force' => '',
            'alpha_region_footer_first_zone' => 'footer',
            'alpha_region_footer_first_prefix' => '',
            'alpha_region_footer_first_columns' => '12',
            'alpha_region_footer_first_suffix' => '',
            'alpha_region_footer_first_weight' => '1',
            'alpha_region_footer_first_css' => '',
            'alpha_region_footer_second_equal_height_container' => '',
            'alpha_region_footer_second_equal_height_element' => '',
            'alpha_region_footer_second_force' => '',
            'alpha_region_footer_second_zone' => 'footer',
            'alpha_region_footer_second_prefix' => '',
            'alpha_region_footer_second_columns' => '12',
            'alpha_region_footer_second_suffix' => '',
            'alpha_region_footer_second_weight' => '2',
            'alpha_region_footer_second_css' => '',
          ),
          'version' => '7.x-3.1',
          'project' => 'omega',
          'datestamp' => '1329681647',
        ),
        'project' => 'omega',
        'version' => '7.x-3.1',
      ),
      'starterkit_alpha_xhtml' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/themes/omega/starterkits/alpha-xhtml/starterkit_alpha_xhtml.info',
        'basename' => 'starterkit_alpha_xhtml.info',
        'name' => 'Alpha XHTML Starterkit',
        'info' => 
        array (
          'name' => 'Alpha XHTML Starterkit',
          'description' => 'Default starterkit for <a href="http://drupal.org/project/omega">Alpha</a>. You should not directly edit this starterkit, but make your own copy. Information on this can be found in the <a href="http://himer.us/omega-docs">Omega Documentation</a>',
          'core' => '7.x',
          'engine' => 'phptemplate',
          'screenshot' => 'screenshot.png',
          'base theme' => 'alpha',
          'hidden' => true,
          'starterkit' => true,
          'regions' => 
          array (
            'page_top' => 'Page Top',
            'page_bottom' => 'Page Bottom',
            'content' => 'Content',
            'header' => 'Header',
            'footer' => 'Footer',
            'sidebar_first' => 'Sidebar First',
            'sidebar_second' => 'Sidebar Second',
          ),
          'zones' => 
          array (
            'content' => 'Content',
            'header' => 'Header',
            'footer' => 'Footer',
          ),
          'css' => 
          array (
            'global.css' => 
            array (
              'name' => 'Your custom global styles',
              'description' => 'This file holds all the globally active custom CSS of your theme.',
              'options' => 
              array (
                'weight' => '10',
              ),
            ),
          ),
          'settings' => 
          array (
            'alpha_grid' => 'alpha_default',
            'alpha_primary_alpha_default' => 'normal',
            'alpha_responsive' => '1',
            'alpha_layouts_alpha_fluid_primary' => 'normal',
            'alpha_layouts_alpha_fluid_normal_responsive' => '0',
            'alpha_layouts_alpha_fluid_normal_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_primary' => 'normal',
            'alpha_layouts_alpha_default_fluid_responsive' => '0',
            'alpha_layouts_alpha_default_fluid_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_fluid_weight' => '0',
            'alpha_layouts_alpha_default_narrow_responsive' => '1',
            'alpha_layouts_alpha_default_narrow_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_narrow_weight' => '1',
            'alpha_layouts_alpha_default_normal_responsive' => '1',
            'alpha_layouts_alpha_default_normal_media' => 'all and (min-width: 980px) and (min-device-width: 980px), all and (max-device-width: 1024px) and (min-width: 1024px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_normal_weight' => '2',
            'alpha_layouts_alpha_default_wide_responsive' => '1',
            'alpha_layouts_alpha_default_wide_media' => 'all and (min-width: 1220px)',
            'alpha_layouts_alpha_default_wide_weight' => '3',
            'alpha_viewport' => '1',
            'alpha_viewport_initial_scale' => '1',
            'alpha_viewport_min_scale' => '1',
            'alpha_viewport_max_scale' => '1',
            'alpha_viewport_user_scaleable' => '',
            'alpha_css' => 
            array (
              'alpha-reset.css' => 'alpha-reset.css',
              'alpha-alpha.css' => 'alpha-alpha.css',
              'alpha-mobile.css' => 'alpha-mobile.css',
              'global.css' => 'global.css',
            ),
            'alpha_debug_block_toggle' => '1',
            'alpha_debug_block_active' => '1',
            'alpha_debug_grid_toggle' => '1',
            'alpha_debug_grid_active' => '1',
            'alpha_debug_grid_roles' => 
            array (
              1 => '1',
              2 => '2',
              3 => '3',
            ),
            'alpha_toggle_messages' => '1',
            'alpha_toggle_action_links' => '1',
            'alpha_toggle_tabs' => '1',
            'alpha_toggle_breadcrumb' => '1',
            'alpha_toggle_page_title' => '1',
            'alpha_toggle_feed_icons' => '1',
            'alpha_hidden_title' => '',
            'alpha_hidden_site_name' => '',
            'alpha_hidden_site_slogan' => '',
            'alpha_zone_header_wrapper' => '',
            'alpha_zone_header_force' => '',
            'alpha_zone_header_section' => 'header',
            'alpha_zone_header_weight' => '',
            'alpha_zone_header_columns' => '12',
            'alpha_zone_header_primary' => '',
            'alpha_zone_header_order' => '0',
            'alpha_zone_header_css' => '',
            'alpha_zone_header_wrapper_css' => '',
            'alpha_zone_content_wrapper' => '',
            'alpha_zone_content_force' => '',
            'alpha_zone_content_section' => 'content',
            'alpha_zone_content_weight' => '',
            'alpha_zone_content_columns' => '12',
            'alpha_zone_content_primary' => '',
            'alpha_zone_content_order' => '0',
            'alpha_zone_content_css' => '',
            'alpha_zone_content_wrapper_css' => '',
            'alpha_zone_footer_wrapper' => '',
            'alpha_zone_footer_force' => '',
            'alpha_zone_footer_section' => 'footer',
            'alpha_zone_footer_weight' => '',
            'alpha_zone_footer_columns' => '12',
            'alpha_zone_footer_primary' => '',
            'alpha_zone_footer_order' => '0',
            'alpha_zone_footer_css' => '',
            'alpha_zone_footer_wrapper_css' => '',
            'alpha_region_dashboard_inactive_force' => '',
            'alpha_region_dashboard_inactive_zone' => '',
            'alpha_region_dashboard_inactive_prefix' => '',
            'alpha_region_dashboard_inactive_columns' => '',
            'alpha_region_dashboard_inactive_suffix' => '',
            'alpha_region_dashboard_inactive_weight' => '',
            'alpha_region_dashboard_inactive_position' => '',
            'alpha_region_dashboard_inactive_css' => '',
            'alpha_region_dashboard_sidebar_force' => '',
            'alpha_region_dashboard_sidebar_zone' => '',
            'alpha_region_dashboard_sidebar_prefix' => '',
            'alpha_region_dashboard_sidebar_columns' => '',
            'alpha_region_dashboard_sidebar_suffix' => '',
            'alpha_region_dashboard_sidebar_weight' => '',
            'alpha_region_dashboard_sidebar_position' => '',
            'alpha_region_dashboard_sidebar_css' => '',
            'alpha_region_dashboard_main_force' => '',
            'alpha_region_dashboard_main_zone' => '',
            'alpha_region_dashboard_main_prefix' => '',
            'alpha_region_dashboard_main_columns' => '',
            'alpha_region_dashboard_main_suffix' => '',
            'alpha_region_dashboard_main_weight' => '',
            'alpha_region_dashboard_main_position' => '',
            'alpha_region_dashboard_main_css' => '',
            'alpha_region_header_force' => '',
            'alpha_region_header_zone' => 'header',
            'alpha_region_header_prefix' => '',
            'alpha_region_header_columns' => '12',
            'alpha_region_header_suffix' => '',
            'alpha_region_header_weight' => '',
            'alpha_region_header_position' => '1',
            'alpha_region_header_css' => '',
            'alpha_region_content_force' => '',
            'alpha_region_content_zone' => 'content',
            'alpha_region_content_prefix' => '',
            'alpha_region_content_columns' => '6',
            'alpha_region_content_suffix' => '',
            'alpha_region_content_weight' => '1',
            'alpha_region_content_position' => '2',
            'alpha_region_content_css' => '',
            'alpha_region_sidebar_first_force' => '',
            'alpha_region_sidebar_first_zone' => 'content',
            'alpha_region_sidebar_first_prefix' => '',
            'alpha_region_sidebar_first_columns' => '3',
            'alpha_region_sidebar_first_suffix' => '',
            'alpha_region_sidebar_first_weight' => '2',
            'alpha_region_sidebar_first_position' => '1',
            'alpha_region_sidebar_first_css' => '',
            'alpha_region_sidebar_second_force' => '',
            'alpha_region_sidebar_second_zone' => 'content',
            'alpha_region_sidebar_second_prefix' => '',
            'alpha_region_sidebar_second_columns' => '3',
            'alpha_region_sidebar_second_suffix' => '',
            'alpha_region_sidebar_second_weight' => '3',
            'alpha_region_sidebar_second_position' => '3',
            'alpha_region_sidebar_second_css' => '',
            'alpha_region_footer_force' => '',
            'alpha_region_footer_zone' => 'footer',
            'alpha_region_footer_prefix' => '',
            'alpha_region_footer_columns' => '12',
            'alpha_region_footer_suffix' => '',
            'alpha_region_footer_weight' => '1',
            'alpha_region_footer_css' => '',
          ),
          'version' => '7.x-3.1',
          'project' => 'omega',
          'datestamp' => '1329681647',
        ),
        'project' => 'omega',
        'version' => '7.x-3.1',
      ),
      'alpha' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/themes/omega/alpha/alpha.info',
        'basename' => 'alpha.info',
        'name' => 'Alpha',
        'info' => 
        array (
          'name' => 'Alpha',
          'description' => 'Alpha is the core basetheme for <a href="http://drupal.org/project/omega">Omega</a> and all its subthemes. It includes the most basic features of the Omega theme framework. This theme should not be used directly, instead you should create a subtheme based on one of the Omega or Alpha starterkits. Learn more about <a href="http://drupal.org/node/819170">Creating an Omega Subtheme</a> in the <a href="http://drupal.org/node/819164">Omega Handbook</a>.',
          'core' => '7.x',
          'engine' => 'phptemplate',
          'screenshot' => 'screenshot.png',
          'version' => '7.x-3.1',
          'regions' => 
          array (
            'page_top' => 'Page Top',
            'page_bottom' => 'Page Bottom',
            'content' => 'Content',
            'header' => 'Header',
            'footer' => 'Footer',
            'sidebar_first' => 'Sidebar First',
            'sidebar_second' => 'Sidebar Second',
          ),
          'zones' => 
          array (
            'content' => 'Content',
            'header' => 'Header',
            'footer' => 'Footer',
          ),
          'css' => 
          array (
            'alpha-reset.css' => 
            array (
              'name' => 'Reset',
              'description' => 'Created by <a href="http://meyerweb.com/eric/tools/css/reset/">Eric Meyer</a>.',
              'options' => 
              array (
                'weight' => '-20',
              ),
            ),
            'alpha-mobile.css' => 
            array (
              'name' => 'Mobile',
              'description' => 'Default stylesheet for mobile styles.',
              'options' => 
              array (
                'weight' => '-20',
              ),
            ),
            'alpha-alpha.css' => 
            array (
              'name' => 'Alpha',
              'description' => 'Default styles & resets for Alpha/Omega base theme.',
              'options' => 
              array (
                'weight' => '-20',
              ),
            ),
          ),
          'exclude' => 
          array (
            'misc/vertical-tabs.css' => 'This requires a description.',
            'modules/aggregator/aggregator.css' => 'This requires a description.',
            'modules/block/block.css' => 'This requires a description.',
            'modules/dblog/dblog.css' => 'This requires a description.',
            'modules/file/file.css' => 'This requires a description.',
            'modules/filter/filter.css' => 'This requires a description.',
            'modules/help/help.css' => 'This requires a description.',
            'modules/menu/menu.css' => 'This requires a description.',
            'modules/openid/openid.css' => 'This requires a description.',
            'modules/profile/profile.css' => 'This requires a description.',
            'modules/statistics/statistics.css' => 'This requires a description.',
            'modules/syslog/syslog.css' => 'This requires a description.',
            'modules/system/admin.css' => 'This requires a description.',
            'modules/system/maintenance.css' => 'This requires a description.',
            'modules/system/system.css' => 'This requires a description.',
            'modules/system/system.admin.css' => 'This requires a description.',
            'modules/system/system.base.css' => 'This requires a description.',
            'modules/system/system.maintenance.css' => 'This requires a description.',
            'modules/system/system.menus.css' => 'This requires a description.',
            'modules/system/system.messages.css' => 'This requires a description.',
            'modules/system/system.theme.css' => 'This requires a description.',
            'modules/taxonomy/taxonomy.css' => 'This requires a description.',
            'modules/tracker/tracker.css' => 'This requires a description.',
            'modules/update/update.css' => 'This requires a description.',
          ),
          'grids' => 
          array (
            'alpha_default' => 
            array (
              'name' => 'Default (960px)',
              'layouts' => 
              array (
                'fluid' => 'Fluid',
                'narrow' => 'Narrow',
                'normal' => 'Normal',
                'wide' => 'Wide',
              ),
              'columns' => 
              array (
                12 => '12 Columns',
                16 => '16 Columns',
                24 => '24 Columns',
              ),
            ),
            'alpha_fluid' => 
            array (
              'name' => 'Fluid',
              'layouts' => 
              array (
                'normal' => 'Normal',
              ),
              'columns' => 
              array (
                12 => '12 Columns',
                16 => '16 Columns',
                24 => '24 Columns',
              ),
            ),
          ),
          'settings' => 
          array (
            'alpha_grid' => 'alpha_default',
            'alpha_primary_alpha_default' => 'normal',
            'alpha_responsive' => '1',
            'alpha_layouts_alpha_fluid_primary' => 'normal',
            'alpha_layouts_alpha_fluid_normal_responsive' => '0',
            'alpha_layouts_alpha_fluid_normal_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_primary' => 'normal',
            'alpha_layouts_alpha_default_fluid_responsive' => '0',
            'alpha_layouts_alpha_default_fluid_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_fluid_weight' => '0',
            'alpha_layouts_alpha_default_narrow_responsive' => '1',
            'alpha_layouts_alpha_default_narrow_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_narrow_weight' => '1',
            'alpha_layouts_alpha_default_normal_responsive' => '1',
            'alpha_layouts_alpha_default_normal_media' => 'all and (min-width: 980px) and (min-device-width: 980px), all and (max-device-width: 1024px) and (min-width: 1024px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_normal_weight' => '2',
            'alpha_layouts_alpha_default_wide_responsive' => '1',
            'alpha_layouts_alpha_default_wide_media' => 'all and (min-width: 1220px)',
            'alpha_layouts_alpha_default_wide_weight' => '3',
            'alpha_viewport' => '1',
            'alpha_viewport_initial_scale' => '1',
            'alpha_viewport_min_scale' => '1',
            'alpha_viewport_max_scale' => '1',
            'alpha_viewport_user_scaleable' => '',
            'alpha_css' => 
            array (
              'alpha-reset.css' => 'alpha-reset.css',
              'alpha-alpha.css' => 'alpha-alpha.css',
              'alpha-mobile.css' => 'alpha-mobile.css',
            ),
            'alpha_debug_block_toggle' => '1',
            'alpha_debug_block_active' => '1',
            'alpha_debug_grid_toggle' => '1',
            'alpha_debug_grid_active' => '1',
            'alpha_debug_grid_roles' => 
            array (
              1 => '1',
              2 => '2',
              3 => '3',
            ),
            'alpha_toggle_messages' => '1',
            'alpha_toggle_action_links' => '1',
            'alpha_toggle_tabs' => '1',
            'alpha_toggle_breadcrumb' => '1',
            'alpha_toggle_page_title' => '1',
            'alpha_toggle_feed_icons' => '1',
            'alpha_hidden_title' => '',
            'alpha_hidden_site_name' => '',
            'alpha_hidden_site_slogan' => '',
            'alpha_zone_header_wrapper' => '',
            'alpha_zone_header_force' => '',
            'alpha_zone_header_section' => 'header',
            'alpha_zone_header_weight' => '',
            'alpha_zone_header_columns' => '12',
            'alpha_zone_header_primary' => '',
            'alpha_zone_header_css' => '',
            'alpha_zone_header_wrapper_css' => '',
            'alpha_zone_content_wrapper' => '',
            'alpha_zone_content_force' => '',
            'alpha_zone_content_section' => 'content',
            'alpha_zone_content_weight' => '',
            'alpha_zone_content_columns' => '12',
            'alpha_zone_content_primary' => '',
            'alpha_zone_content_css' => '',
            'alpha_zone_content_wrapper_css' => '',
            'alpha_zone_footer_wrapper' => '',
            'alpha_zone_footer_force' => '',
            'alpha_zone_footer_section' => 'footer',
            'alpha_zone_footer_weight' => '',
            'alpha_zone_footer_columns' => '12',
            'alpha_zone_footer_primary' => '',
            'alpha_zone_footer_css' => '',
            'alpha_zone_footer_wrapper_css' => '',
            'alpha_region_dashboard_inactive_force' => '',
            'alpha_region_dashboard_inactive_zone' => '',
            'alpha_region_dashboard_inactive_prefix' => '',
            'alpha_region_dashboard_inactive_columns' => '1',
            'alpha_region_dashboard_inactive_suffix' => '',
            'alpha_region_dashboard_inactive_weight' => '',
            'alpha_region_dashboard_inactive_css' => '',
            'alpha_region_dashboard_sidebar_force' => '',
            'alpha_region_dashboard_sidebar_zone' => '',
            'alpha_region_dashboard_sidebar_prefix' => '',
            'alpha_region_dashboard_sidebar_columns' => '1',
            'alpha_region_dashboard_sidebar_suffix' => '',
            'alpha_region_dashboard_sidebar_weight' => '',
            'alpha_region_dashboard_sidebar_css' => '',
            'alpha_region_dashboard_main_force' => '',
            'alpha_region_dashboard_main_zone' => '',
            'alpha_region_dashboard_main_prefix' => '',
            'alpha_region_dashboard_main_columns' => '1',
            'alpha_region_dashboard_main_suffix' => '',
            'alpha_region_dashboard_main_weight' => '',
            'alpha_region_dashboard_main_css' => '',
            'alpha_region_header_force' => '',
            'alpha_region_header_zone' => 'header',
            'alpha_region_header_prefix' => '',
            'alpha_region_header_columns' => '12',
            'alpha_region_header_suffix' => '',
            'alpha_region_header_weight' => '',
            'alpha_region_header_css' => '',
            'alpha_region_content_force' => '',
            'alpha_region_content_zone' => 'content',
            'alpha_region_content_prefix' => '',
            'alpha_region_content_columns' => '6',
            'alpha_region_content_suffix' => '',
            'alpha_region_content_weight' => '1',
            'alpha_region_content_css' => '',
            'alpha_region_sidebar_first_force' => '',
            'alpha_region_sidebar_first_zone' => 'content',
            'alpha_region_sidebar_first_prefix' => '',
            'alpha_region_sidebar_first_columns' => '3',
            'alpha_region_sidebar_first_suffix' => '',
            'alpha_region_sidebar_first_weight' => '2',
            'alpha_region_sidebar_first_css' => '',
            'alpha_region_sidebar_second_force' => '',
            'alpha_region_sidebar_second_zone' => 'content',
            'alpha_region_sidebar_second_prefix' => '',
            'alpha_region_sidebar_second_columns' => '3',
            'alpha_region_sidebar_second_suffix' => '',
            'alpha_region_sidebar_second_weight' => '3',
            'alpha_region_sidebar_second_css' => '',
            'alpha_region_footer_force' => '',
            'alpha_region_footer_zone' => 'footer',
            'alpha_region_footer_prefix' => '',
            'alpha_region_footer_columns' => '12',
            'alpha_region_footer_suffix' => '',
            'alpha_region_footer_weight' => '',
            'alpha_region_footer_css' => '',
          ),
          'project' => 'omega',
          'datestamp' => '1329681647',
        ),
        'project' => 'omega',
        'version' => '7.x-3.1',
      ),
      'bootstrap' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/themes/bootstrap/bootstrap.info',
        'basename' => 'bootstrap.info',
        'name' => 'Bootstrap',
        'info' => 
        array (
          'name' => 'Bootstrap',
          'description' => 'Built to use Bootstrap, a sleek, intuitive, and powerful front-end framework for faster and easier web development.',
          'core' => '7.x',
          'regions' => 
          array (
            'navigation' => 'Navigation',
            'header' => 'Top Bar',
            'highlighted' => 'Highlighted',
            'help' => 'Help',
            'content' => 'Content',
            'sidebar_first' => 'Primary',
            'sidebar_second' => 'Secondary',
            'footer' => 'Footer',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
          ),
          'settings' => 
          array (
            'bootstrap_button_size' => '',
            'bootstrap_button_colorize' => '1',
            'bootstrap_button_iconize' => '1',
            'bootstrap_image_shape' => '',
            'bootstrap_image_responsive' => '1',
            'bootstrap_table_bordered' => '0',
            'bootstrap_table_condensed' => '0',
            'bootstrap_table_hover' => '1',
            'bootstrap_table_striped' => '1',
            'bootstrap_table_responsive' => '1',
            'bootstrap_breadcrumb' => '1',
            'bootstrap_breadcrumb_home' => '0',
            'bootstrap_breadcrumb_title' => '1',
            'bootstrap_navbar_position' => '',
            'bootstrap_navbar_inverse' => '0',
            'bootstrap_region_well-navigation' => '',
            'bootstrap_region_well-header' => '',
            'bootstrap_region_well-highlighted' => '',
            'bootstrap_region_well-help' => '',
            'bootstrap_region_well-content' => '',
            'bootstrap_region_well-sidebar_first' => 'well',
            'bootstrap_region_well-sidebar_second' => '',
            'bootstrap_region_well-footer' => '',
            'bootstrap_anchors_fix' => '1',
            'bootstrap_anchors_smooth_scrolling' => '1',
            'bootstrap_forms_required_has_error' => '0',
            'bootstrap_forms_has_error_value_toggle' => '1',
            'bootstrap_popover_enabled' => '1',
            'bootstrap_popover_animation' => '1',
            'bootstrap_popover_html' => '0',
            'bootstrap_popover_placement' => 'right',
            'bootstrap_popover_selector' => '',
            'bootstrap_popover_trigger' => 
            array (
              '\'hover\'' => '0',
              '\'focus\'' => '0',
              '\'click\'' => 'click',
            ),
            'bootstrap_popover_trigger_autoclose' => '1',
            'bootstrap_popover_title' => '',
            'bootstrap_popover_content' => '',
            'bootstrap_popover_delay' => '0',
            'bootstrap_popover_container' => 'body',
            'bootstrap_tooltip_enabled' => '1',
            'bootstrap_tooltip_descriptions' => '1',
            'bootstrap_tooltip_descriptions_length' => '200',
            'bootstrap_tooltip_animation' => '1',
            'bootstrap_tooltip_html' => '0',
            'bootstrap_tooltip_placement' => 'auto left',
            'bootstrap_tooltip_selector' => '',
            'bootstrap_tooltip_trigger' => 
            array (
              '\'hover\'' => 'hover',
              '\'focus\'' => 'focus',
              '\'click\'' => '0',
            ),
            'bootstrap_tooltip_delay' => '0',
            'bootstrap_tooltip_container' => 'body',
            'bootstrap_cdn' => '3.2.0',
            'bootstrap_bootswatch' => '',
            'toggle_name' => '1',
            'toggle_search' => '1',
          ),
          'exclude' => 
          array (
            'css' => 
            array (
              0 => 'misc/vertical-tabs.css',
              1 => 'modules/aggregator/aggregator.css',
              2 => 'modules/book/book.css',
              3 => 'modules/comment/comment.css',
              4 => 'modules/dblog/dblog.css',
              5 => 'modules/file/file.css',
              6 => 'modules/filter/filter.css',
              7 => 'modules/forum/forum.css',
              8 => 'modules/help/help.css',
              9 => 'modules/menu/menu.css',
              10 => 'modules/node/node.css',
              11 => 'modules/openid/openid.css',
              12 => 'modules/poll/poll.css',
              13 => 'modules/search/search.css',
              14 => 'modules/statistics/statistics.css',
              15 => 'modules/syslog/syslog.css',
              16 => 'modules/system/maintenance.css',
              17 => 'modules/system/system.maintenance.css',
              18 => 'modules/system/system.menus.css',
              19 => 'modules/system/system.messages.css',
              20 => 'modules/system/system.theme.css',
              21 => 'modules/taxonomy/taxonomy.css',
              22 => 'modules/tracker/tracker.css',
              23 => 'modules/update/update.css',
              24 => 'modules/user/user.css',
            ),
          ),
          'simplytest_dependencies' => 
          array (
            0 => 'jquery_update',
          ),
          'version' => '7.x-3.1-beta2',
          'project' => 'bootstrap',
          'datestamp' => '1406740733',
        ),
        'project' => 'bootstrap',
        'version' => '7.x-3.1-beta2',
      ),
      'chamfer' => 
      array (
        'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/sites/all/themes/chamfer/chamfer.info',
        'basename' => 'chamfer.info',
        'name' => 'Chamfer',
        'info' => 
        array (
          'name' => 'Chamfer',
          'description' => 'Drupal 7 responsive version of Chamfer built on top of Omega framework.',
          'core' => '7.x',
          'engine' => 'phptemplate',
          'screenshot' => 'screenshot.png',
          'base theme' => 'omega',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/colors.css',
              1 => 'css/marks.css',
            ),
          ),
          'regions' => 
          array (
            'content' => 'Content',
            'user_first' => 'Top Bar First',
            'user_second' => 'Top Bar Second',
            'branding' => 'Branding',
            'menu' => 'Menu',
            'sidebar_first' => 'Sidebar First',
            'sidebar_second' => 'Sidebar Second',
            'header_first' => 'Header image',
            'header_second' => 'Header Second',
            'preface_first' => 'Preface First',
            'preface_second' => 'Preface Second',
            'preface_third' => 'Preface Third',
            'postscript_first' => 'Postscript First',
            'postscript_second' => 'Postscript Second',
            'postscript_third' => 'Postscript Third',
            'postscript_fourth' => 'Postscript Fourth',
            'footer_first' => 'Footer',
            'footer_second' => 'Footer Second',
          ),
          'zones' => 
          array (
            'header' => 'Header',
            'content' => 'Content',
            'footer' => 'Footer',
            'user' => 'User',
            'branding' => 'Branding',
            'menu' => 'Menu bar',
            'preface' => 'Preface',
            'postscript' => 'Postscript',
          ),
          'css' => 
          array (
            'global.css' => 
            array (
              'name' => 'Your custom global styles',
              'description' => 'This file holds all the globally active custom CSS of your theme.',
              'options' => 
              array (
                'weight' => '10',
              ),
            ),
          ),
          'settings' => 
          array (
            'toggle_logo' => '1',
            'toggle_name' => '1',
            'toggle_slogan' => '0',
            'toggle_node_user_picture' => '0',
            'toggle_comment_user_picture' => '1',
            'toggle_comment_user_verification' => '1',
            'toggle_favicon' => '1',
            'toggle_main_menu' => '0',
            'toggle_secondary_menu' => '0',
            'default_logo' => '1',
            'logo_path' => '',
            'logo_upload' => '',
            'default_favicon' => '1',
            'favicon_path' => '',
            'favicon_upload' => '',
            'alpha_grid' => 'alpha_default',
            'alpha_responsive' => '1',
            'alpha_viewport' => '1',
            'alpha_viewport_initial_scale' => '1',
            'alpha_viewport_min_scale' => '1',
            'alpha_viewport_max_scale' => '1',
            'alpha_viewport_user_scaleable' => '0',
            'alpha_primary_alpha_default' => 'normal',
            'alpha_layouts_alpha_default_narrow_responsive' => '1',
            'alpha_layouts_alpha_default_narrow_weight' => '1',
            'alpha_layouts_alpha_default_narrow_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_normal_responsive' => '1',
            'alpha_layouts_alpha_default_normal_weight' => '2',
            'alpha_layouts_alpha_default_normal_media' => 'all and (min-width: 980px) and (min-device-width: 980px), all and (max-device-width: 1024px) and (min-width: 1024px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_wide_responsive' => '1',
            'alpha_layouts_alpha_default_wide_weight' => '3',
            'alpha_layouts_alpha_default_wide_media' => 'all and (min-width: 1220px)',
            'alpha_layouts_alpha_default_fluid_responsive' => '0',
            'alpha_layouts_alpha_default_fluid_weight' => '0',
            'alpha_layouts_alpha_default_fluid_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_primary_alpha_fluid' => 'normal',
            'alpha_layouts_alpha_fluid_normal_responsive' => '0',
            'alpha_layouts_alpha_fluid_normal_weight' => '0',
            'alpha_layouts_alpha_fluid_normal_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_libraries' => 
            array (
              'omega_formalize' => 'omega_formalize',
              'omega_mediaqueries' => 'omega_mediaqueries',
              'omega_equalheights' => 'omega_equalheights',
            ),
            'alpha_css' => 
            array (
              'alpha-reset.css' => 'alpha-reset.css',
              'alpha-mobile.css' => 'alpha-mobile.css',
              'alpha-alpha.css' => 'alpha-alpha.css',
              'omega-text.css' => 'omega-text.css',
              'omega-branding.css' => 'omega-branding.css',
              'omega-menu.css' => 'omega-menu.css',
              'omega-forms.css' => 'omega-forms.css',
              'omega-visuals.css' => 'omega-visuals.css',
              'global.css' => 'global.css',
            ),
            'alpha_exclude' => 
            array (
              'modules/book/book.css' => '0',
              'sites/all/modules/date/date_api/date.css' => '0',
              'sites/all/modules/date/date_popup/themes/datepicker.1.7.css' => '0',
              'modules/field/theme/field.css' => '0',
              'modules/node/node.css' => '0',
              'modules/search/search.css' => '0',
              'modules/user/user.css' => '0',
              'sites/all/modules/views/css/views.css' => '0',
              'sites/all/themes/chamfer/css/colors.css' => '0',
              'misc/vertical-tabs.css' => '0',
              'modules/aggregator/aggregator.css' => '0',
              'modules/block/block.css' => '0',
              'modules/dblog/dblog.css' => '0',
              'modules/file/file.css' => '0',
              'modules/filter/filter.css' => '0',
              'modules/help/help.css' => '0',
              'modules/menu/menu.css' => '0',
              'modules/openid/openid.css' => '0',
              'modules/profile/profile.css' => '0',
              'modules/statistics/statistics.css' => '0',
              'modules/syslog/syslog.css' => '0',
              'modules/system/admin.css' => '0',
              'modules/system/maintenance.css' => '0',
              'modules/system/system.css' => '0',
              'modules/system/system.admin.css' => '0',
              'modules/system/system.base.css' => '0',
              'modules/system/system.maintenance.css' => '0',
              'modules/system/system.menus.css' => '0',
              'modules/system/system.messages.css' => '0',
              'modules/system/system.theme.css' => '0',
              'modules/taxonomy/taxonomy.css' => '0',
              'modules/tracker/tracker.css' => '0',
              'modules/update/update.css' => '0',
            ),
            'alpha_debug_block_toggle' => '0',
            'alpha_debug_block_active' => '0',
            'alpha_debug_grid_toggle' => '0',
            'alpha_debug_grid_active' => '0',
            'alpha_debug_grid_roles' => 
            array (
              3 => '0',
              1 => '0',
              2 => '0',
              4 => '0',
              6 => '0',
              5 => '0',
              8 => '0',
              7 => '0',
            ),
            'alpha_toggle_messages' => '0',
            'alpha_toggle_action_links' => '0',
            'alpha_toggle_tabs' => '0',
            'alpha_toggle_breadcrumb' => '0',
            'alpha_toggle_page_title' => '0',
            'alpha_toggle_feed_icons' => '0',
            'alpha_hidden_title' => '0',
            'alpha_hidden_site_name' => '0',
            'alpha_hidden_site_slogan' => '0',
            'alpha_region_regions_admin_left_force' => '0',
            'alpha_region_regions_admin_left_zone' => '',
            'alpha_region_regions_admin_left_prefix' => '0',
            'alpha_region_regions_admin_left_columns' => '1',
            'alpha_region_regions_admin_left_suffix' => '0',
            'alpha_region_regions_admin_left_weight' => '0',
            'alpha_region_regions_admin_left_position' => '0',
            'alpha_region_regions_admin_left_css' => '',
            'alpha_region_regions_admin_left_equal_height_element' => '',
            'alpha_region_regions_admin_left_equal_height_container' => '0',
            'alpha_region_regions_top_nav_force' => '0',
            'alpha_region_regions_top_nav_zone' => '',
            'alpha_region_regions_top_nav_prefix' => '0',
            'alpha_region_regions_top_nav_columns' => '1',
            'alpha_region_regions_top_nav_suffix' => '0',
            'alpha_region_regions_top_nav_weight' => '0',
            'alpha_region_regions_top_nav_position' => '0',
            'alpha_region_regions_top_nav_css' => '',
            'alpha_region_regions_top_nav_equal_height_element' => '',
            'alpha_region_regions_top_nav_equal_height_container' => '0',
            'alpha_region_footer_second_force' => '0',
            'alpha_region_footer_second_zone' => '',
            'alpha_region_footer_second_prefix' => '0',
            'alpha_region_footer_second_columns' => '12',
            'alpha_region_footer_second_suffix' => '0',
            'alpha_region_footer_second_weight' => '2',
            'alpha_region_footer_second_position' => '0',
            'alpha_region_footer_second_css' => '',
            'alpha_region_footer_second_equal_height_element' => '',
            'alpha_region_footer_second_equal_height_container' => '0',
            'alpha_zone_preface_wrapper' => '1',
            'alpha_zone_preface_force' => '0',
            'alpha_zone_preface_order' => '0',
            'alpha_zone_preface_section' => '',
            'alpha_zone_preface_weight' => '1',
            'alpha_zone_preface_columns' => '12',
            'alpha_zone_preface_primary' => '',
            'alpha_zone_preface_css' => '',
            'alpha_zone_preface_wrapper_css' => '',
            'alpha_zone_preface_equal_height_container' => '0',
            'alpha_region_preface_first_force' => '0',
            'alpha_region_preface_first_zone' => 'preface',
            'alpha_region_preface_first_prefix' => '0',
            'alpha_region_preface_first_columns' => '4',
            'alpha_region_preface_first_suffix' => '0',
            'alpha_region_preface_first_weight' => '1',
            'alpha_region_preface_first_position' => '0',
            'alpha_region_preface_first_css' => '',
            'alpha_region_preface_first_equal_height_element' => '0',
            'alpha_region_preface_first_equal_height_container' => '0',
            'alpha_region_preface_second_force' => '0',
            'alpha_region_preface_second_zone' => 'preface',
            'alpha_region_preface_second_prefix' => '0',
            'alpha_region_preface_second_columns' => '4',
            'alpha_region_preface_second_suffix' => '0',
            'alpha_region_preface_second_weight' => '2',
            'alpha_region_preface_second_position' => '0',
            'alpha_region_preface_second_css' => '',
            'alpha_region_preface_second_equal_height_element' => '0',
            'alpha_region_preface_second_equal_height_container' => '0',
            'alpha_region_preface_third_force' => '0',
            'alpha_region_preface_third_zone' => 'preface',
            'alpha_region_preface_third_prefix' => '0',
            'alpha_region_preface_third_columns' => '4',
            'alpha_region_preface_third_suffix' => '0',
            'alpha_region_preface_third_weight' => '3',
            'alpha_region_preface_third_position' => '0',
            'alpha_region_preface_third_css' => '',
            'alpha_region_preface_third_equal_height_element' => '0',
            'alpha_region_preface_third_equal_height_container' => '0',
            'alpha_zone_branding_wrapper' => '1',
            'alpha_zone_branding_force' => '0',
            'alpha_zone_branding_order' => '0',
            'alpha_zone_branding_section' => '',
            'alpha_zone_branding_weight' => '2',
            'alpha_zone_branding_columns' => '12',
            'alpha_zone_branding_primary' => '',
            'alpha_zone_branding_css' => '',
            'alpha_zone_branding_wrapper_css' => '',
            'alpha_zone_branding_equal_height_container' => '0',
            'alpha_region_branding_force' => '1',
            'alpha_region_branding_zone' => 'branding',
            'alpha_region_branding_prefix' => '0',
            'alpha_region_branding_columns' => '12',
            'alpha_region_branding_suffix' => '0',
            'alpha_region_branding_weight' => '1',
            'alpha_region_branding_position' => '0',
            'alpha_region_branding_css' => '',
            'alpha_region_branding_equal_height_element' => '0',
            'alpha_region_branding_equal_height_container' => '0',
            'alpha_zone_postscript_wrapper' => '1',
            'alpha_zone_postscript_force' => '0',
            'alpha_zone_postscript_order' => '0',
            'alpha_zone_postscript_section' => '',
            'alpha_zone_postscript_weight' => '3',
            'alpha_zone_postscript_columns' => '12',
            'alpha_zone_postscript_primary' => '',
            'alpha_zone_postscript_css' => '',
            'alpha_zone_postscript_wrapper_css' => '',
            'alpha_zone_postscript_equal_height_container' => '0',
            'alpha_region_postscript_first_force' => '0',
            'alpha_region_postscript_first_zone' => 'postscript',
            'alpha_region_postscript_first_prefix' => '0',
            'alpha_region_postscript_first_columns' => '3',
            'alpha_region_postscript_first_suffix' => '0',
            'alpha_region_postscript_first_weight' => '1',
            'alpha_region_postscript_first_position' => '0',
            'alpha_region_postscript_first_css' => '',
            'alpha_region_postscript_first_equal_height_element' => '0',
            'alpha_region_postscript_first_equal_height_container' => '0',
            'alpha_region_postscript_second_force' => '0',
            'alpha_region_postscript_second_zone' => 'postscript',
            'alpha_region_postscript_second_prefix' => '0',
            'alpha_region_postscript_second_columns' => '3',
            'alpha_region_postscript_second_suffix' => '0',
            'alpha_region_postscript_second_weight' => '2',
            'alpha_region_postscript_second_position' => '0',
            'alpha_region_postscript_second_css' => '',
            'alpha_region_postscript_second_equal_height_element' => '0',
            'alpha_region_postscript_second_equal_height_container' => '0',
            'alpha_region_postscript_third_force' => '0',
            'alpha_region_postscript_third_zone' => 'postscript',
            'alpha_region_postscript_third_prefix' => '0',
            'alpha_region_postscript_third_columns' => '3',
            'alpha_region_postscript_third_suffix' => '0',
            'alpha_region_postscript_third_weight' => '3',
            'alpha_region_postscript_third_position' => '0',
            'alpha_region_postscript_third_css' => '',
            'alpha_region_postscript_third_equal_height_element' => '0',
            'alpha_region_postscript_third_equal_height_container' => '0',
            'alpha_region_postscript_fourth_force' => '0',
            'alpha_region_postscript_fourth_zone' => 'postscript',
            'alpha_region_postscript_fourth_prefix' => '0',
            'alpha_region_postscript_fourth_columns' => '3',
            'alpha_region_postscript_fourth_suffix' => '0',
            'alpha_region_postscript_fourth_weight' => '4',
            'alpha_region_postscript_fourth_position' => '0',
            'alpha_region_postscript_fourth_css' => '',
            'alpha_region_postscript_fourth_equal_height_element' => '0',
            'alpha_region_postscript_fourth_equal_height_container' => '0',
            'alpha_zone_header_wrapper' => '1',
            'alpha_zone_header_force' => '0',
            'alpha_zone_header_order' => '0',
            'alpha_zone_header_section' => '',
            'alpha_zone_header_weight' => '4',
            'alpha_zone_header_columns' => '12',
            'alpha_zone_header_primary' => '',
            'alpha_zone_header_css' => '',
            'alpha_zone_header_wrapper_css' => '',
            'alpha_zone_header_equal_height_container' => '0',
            'alpha_region_header_second_force' => '0',
            'alpha_region_header_second_zone' => 'header',
            'alpha_region_header_second_prefix' => '0',
            'alpha_region_header_second_columns' => '6',
            'alpha_region_header_second_suffix' => '0',
            'alpha_region_header_second_weight' => '2',
            'alpha_region_header_second_position' => '0',
            'alpha_region_header_second_css' => '',
            'alpha_region_header_second_equal_height_element' => '0',
            'alpha_region_header_second_equal_height_container' => '0',
            'alpha_zone_user_wrapper' => '1',
            'alpha_zone_user_force' => '1',
            'alpha_zone_user_order' => '0',
            'alpha_zone_user_section' => 'header',
            'alpha_zone_user_weight' => '1',
            'alpha_zone_user_columns' => '12',
            'alpha_zone_user_primary' => '',
            'alpha_zone_user_css' => '',
            'alpha_zone_user_wrapper_css' => '',
            'alpha_zone_user_equal_height_container' => '1',
            'alpha_region_user_first_force' => '1',
            'alpha_region_user_first_zone' => 'user',
            'alpha_region_user_first_prefix' => '0',
            'alpha_region_user_first_columns' => '3',
            'alpha_region_user_first_suffix' => '0',
            'alpha_region_user_first_weight' => '1',
            'alpha_region_user_first_position' => '0',
            'alpha_region_user_first_css' => '',
            'alpha_region_user_first_equal_height_element' => '1',
            'alpha_region_user_first_equal_height_container' => '0',
            'alpha_region_user_second_force' => '1',
            'alpha_region_user_second_zone' => 'user',
            'alpha_region_user_second_prefix' => '0',
            'alpha_region_user_second_columns' => '9',
            'alpha_region_user_second_suffix' => '0',
            'alpha_region_user_second_weight' => '2',
            'alpha_region_user_second_position' => '0',
            'alpha_region_user_second_css' => '',
            'alpha_region_user_second_equal_height_element' => '1',
            'alpha_region_user_second_equal_height_container' => '0',
            'alpha_zone_menu_wrapper' => '1',
            'alpha_zone_menu_force' => '0',
            'alpha_zone_menu_order' => '0',
            'alpha_zone_menu_section' => 'header',
            'alpha_zone_menu_weight' => '3',
            'alpha_zone_menu_columns' => '12',
            'alpha_zone_menu_primary' => '',
            'alpha_zone_menu_css' => '',
            'alpha_zone_menu_wrapper_css' => '',
            'alpha_zone_menu_equal_height_container' => '0',
            'alpha_region_header_first_force' => '1',
            'alpha_region_header_first_zone' => 'menu',
            'alpha_region_header_first_prefix' => '0',
            'alpha_region_header_first_columns' => '1',
            'alpha_region_header_first_suffix' => '0',
            'alpha_region_header_first_weight' => '0',
            'alpha_region_header_first_position' => '0',
            'alpha_region_header_first_css' => '',
            'alpha_region_header_first_equal_height_element' => '0',
            'alpha_region_header_first_equal_height_container' => '0',
            'alpha_region_menu_force' => '1',
            'alpha_region_menu_zone' => 'menu',
            'alpha_region_menu_prefix' => '0',
            'alpha_region_menu_columns' => '10',
            'alpha_region_menu_suffix' => '1',
            'alpha_region_menu_weight' => '1',
            'alpha_region_menu_position' => '0',
            'alpha_region_menu_css' => '',
            'alpha_region_menu_equal_height_element' => '0',
            'alpha_region_menu_equal_height_container' => '0',
            'alpha_zone_content_wrapper' => '1',
            'alpha_zone_content_force' => '1',
            'alpha_zone_content_order' => '1',
            'alpha_zone_content_section' => 'content',
            'alpha_zone_content_weight' => '2',
            'alpha_zone_content_columns' => '12',
            'alpha_zone_content_primary' => 'content',
            'alpha_zone_content_css' => '',
            'alpha_zone_content_wrapper_css' => '',
            'alpha_zone_content_equal_height_container' => '1',
            'alpha_region_content_force' => '1',
            'alpha_region_content_zone' => 'content',
            'alpha_region_content_prefix' => '0',
            'alpha_region_content_columns' => '6',
            'alpha_region_content_suffix' => '0',
            'alpha_region_content_weight' => '0',
            'alpha_region_content_position' => '1',
            'alpha_region_content_css' => '',
            'alpha_region_content_equal_height_element' => '1',
            'alpha_region_content_equal_height_container' => '0',
            'alpha_region_sidebar_first_force' => '0',
            'alpha_region_sidebar_first_zone' => 'content',
            'alpha_region_sidebar_first_prefix' => '0',
            'alpha_region_sidebar_first_columns' => '3',
            'alpha_region_sidebar_first_suffix' => '0',
            'alpha_region_sidebar_first_weight' => '1',
            'alpha_region_sidebar_first_position' => '0',
            'alpha_region_sidebar_first_css' => '',
            'alpha_region_sidebar_first_equal_height_element' => '1',
            'alpha_region_sidebar_first_equal_height_container' => '0',
            'alpha_region_sidebar_second_force' => '0',
            'alpha_region_sidebar_second_zone' => 'content',
            'alpha_region_sidebar_second_prefix' => '0',
            'alpha_region_sidebar_second_columns' => '3',
            'alpha_region_sidebar_second_suffix' => '0',
            'alpha_region_sidebar_second_weight' => '2',
            'alpha_region_sidebar_second_position' => '2',
            'alpha_region_sidebar_second_css' => '',
            'alpha_region_sidebar_second_equal_height_element' => '1',
            'alpha_region_sidebar_second_equal_height_container' => '0',
            'alpha_zone_footer_wrapper' => '1',
            'alpha_zone_footer_force' => '1',
            'alpha_zone_footer_order' => '0',
            'alpha_zone_footer_section' => 'footer',
            'alpha_zone_footer_weight' => '1',
            'alpha_zone_footer_columns' => '12',
            'alpha_zone_footer_primary' => '',
            'alpha_zone_footer_css' => '',
            'alpha_zone_footer_wrapper_css' => '',
            'alpha_zone_footer_equal_height_container' => '0',
            'alpha_region_footer_first_force' => '1',
            'alpha_region_footer_first_zone' => 'footer',
            'alpha_region_footer_first_prefix' => '0',
            'alpha_region_footer_first_columns' => '12',
            'alpha_region_footer_first_suffix' => '0',
            'alpha_region_footer_first_weight' => '1',
            'alpha_region_footer_first_position' => '0',
            'alpha_region_footer_first_css' => '',
            'alpha_region_footer_first_equal_height_element' => '0',
            'alpha_region_footer_first_equal_height_container' => '0',
            'scheme' => 'space_opera',
            'palette' => 
            array (
              'bg_top' => '#e4e4e4',
              'bg_bottom' => '#e7e7e7',
              'ext_link' => '#5d5d5d',
              'ext_text' => '#1d1d1d',
              'page_header' => '#222222',
              'page_links' => '#494949',
              'section_header' => '#222222',
              'section_links' => '#0e0e0e',
              'section_link_active' => '#acacac',
              'menu_link' => '#9f9f9f',
              'menu_link_active' => '#ffffff',
              'menu_shadow' => '#818181',
            ),
            'theme' => 'chamfer',
            'info' => 
            array (
              'fields' => 
              array (
                'bg_top' => 'BG top',
                'bg_bottom' => 'BG bottom',
                'ext_link' => 'Exterior link',
                'ext_text' => 'Exterior text',
                'page_header' => 'Page headers',
                'page_links' => 'Page links',
                'section_header' => 'Section headers',
                'section_links' => 'Section links',
                'section_link_active' => 'Section a.active',
                'menu_link' => 'Menu links',
                'menu_link_active' => 'Menu a.active',
                'menu_shadow' => 'Menu shadow',
              ),
              'schemes' => 
              array (
                'default' => 
                array (
                  'title' => 'Default',
                  'colors' => 
                  array (
                    'bg_top' => '#111111',
                    'bg_bottom' => '#333333',
                    'ext_link' => '#00ffff',
                    'ext_text' => '#eeeeee',
                    'page_header' => '#555555',
                    'page_links' => '#000000',
                    'section_header' => '#222222',
                    'section_links' => '#6d6d6d',
                    'section_link_active' => '#ee9999',
                    'menu_link' => '#cccccc',
                    'menu_link_active' => '#00f9f9',
                    'menu_shadow' => '#111111',
                  ),
                ),
                'drupal_org' => 
                array (
                  'title' => 'Drupal.org',
                  'colors' => 
                  array (
                    'bg_top' => '#56b3e6',
                    'bg_bottom' => '#EEEEEE',
                    'ext_link' => '#FFFFFF',
                    'ext_text' => '#EEEEEE',
                    'page_header' => '#222222',
                    'page_links' => '#0678BE',
                    'section_header' => '#222222',
                    'section_links' => '#0678BE',
                    'section_link_active' => '#222222',
                    'menu_link' => '#56b3e6',
                    'menu_link_active' => '#EEEEEE',
                    'menu_shadow' => '#222222',
                  ),
                ),
                'space_opera' => 
                array (
                  'title' => 'Space opera',
                  'colors' => 
                  array (
                    'bg_top' => '#000000',
                    'bg_bottom' => '#111111',
                    'ext_link' => '#00ccff',
                    'ext_text' => '#00eeff',
                    'page_header' => '#00b1ff',
                    'page_links' => '#0099ff',
                    'section_header' => '#00b1ff',
                    'section_links' => '#0099ff',
                    'section_link_active' => '#584efb',
                    'menu_link' => '#cccccc',
                    'menu_link_active' => '#fbf64e',
                    'menu_shadow' => '#fbf64e',
                  ),
                ),
                'silver' => 
                array (
                  'title' => 'Silver',
                  'colors' => 
                  array (
                    'bg_top' => '#e4e4e4',
                    'bg_bottom' => '#e7e7e7',
                    'ext_link' => '#5d5d5d',
                    'ext_text' => '#1d1d1d',
                    'page_header' => '#222222',
                    'page_links' => '#494949',
                    'section_header' => '#222222',
                    'section_links' => '#0e0e0e',
                    'section_link_active' => '#acacac',
                    'menu_link' => '#9f9f9f',
                    'menu_link_active' => '#ffffff',
                    'menu_shadow' => '#818181',
                  ),
                ),
                'mud_brown' => 
                array (
                  'title' => 'Mud browns',
                  'colors' => 
                  array (
                    'bg_top' => '#4d3a2b',
                    'bg_bottom' => '#552714',
                    'ext_link' => '#b57d52',
                    'ext_text' => '#dfbd93',
                    'page_header' => '#836c50',
                    'page_links' => '#bb7e18',
                    'section_header' => '#836c50',
                    'section_links' => '#a76d18',
                    'section_link_active' => '#df8d28',
                    'menu_link' => '#d2bb91',
                    'menu_link_active' => '#f9a900',
                    'menu_shadow' => '#8c5900',
                  ),
                ),
                'floral_green' => 
                array (
                  'title' => 'Floral green',
                  'colors' => 
                  array (
                    'bg_top' => '#ffffde',
                    'bg_bottom' => '#e1ffcf',
                    'ext_link' => '#4a4933',
                    'ext_text' => '#0e0e0e',
                    'page_header' => '#535726',
                    'page_links' => '#3c5400',
                    'section_header' => '#64692e',
                    'section_links' => '#486e00',
                    'section_link_active' => '#90792f',
                    'menu_link' => '#ebe490',
                    'menu_link_active' => '#ffea4a',
                    'menu_shadow' => '#b57400',
                  ),
                ),
                6 => 
                array (
                  'title' => 'Custom',
                ),
              ),
              'css' => 
              array (
                0 => 'css/colors.css',
              ),
              'gradients' => 
              array (
                0 => 
                array (
                  'dimension' => 
                  array (
                    0 => '0',
                    1 => '0',
                    2 => '0',
                    3 => '0',
                  ),
                  'direction' => 'vertical',
                  'colors' => 
                  array (
                    0 => 'top',
                    1 => 'bottom',
                  ),
                ),
              ),
              'blend_target' => '#ffffff',
              'preview_css' => 'color/preview.css',
              'preview_js' => 'color/preview.js',
              'preview_html' => 'color/preview.html',
              'base_image' => 'color/base.png',
            ),
          ),
          'version' => '7.x-1.1',
          'project' => 'chamfer',
          'datestamp' => '1402321135',
        ),
        'project' => 'chamfer',
        'version' => '7.x-1.1',
      ),
    ),
  ),
  'profiles' => 
  array (
    'minimal' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
    'gvj_identity' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
    'testing' => 
    array (
      'modules' => 
      array (
        'drupal_system_listing_incompatible_test' => 
        array (
          'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/profiles/testing/modules/drupal_system_listing_incompatible_test/drupal_system_listing_incompatible_test.module',
          'basename' => 'drupal_system_listing_incompatible_test.module',
          'name' => 'drupal_system_listing_incompatible_test',
          'info' => 
          array (
            'name' => 'Drupal system listing incompatible test',
            'description' => 'Support module for testing the drupal_system_listing function.',
            'package' => 'Testing',
            'version' => '7.34',
            'core' => '6.x',
            'hidden' => true,
            'project' => 'drupal',
            'datestamp' => '1416429488',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'drupal',
          'version' => '7.34',
        ),
        'drupal_system_listing_compatible_test' => 
        array (
          'filename' => '/var/aegir/platforms/gvj_om3-7.x-1.x-dev-13012015/profiles/testing/modules/drupal_system_listing_compatible_test/drupal_system_listing_compatible_test.module',
          'basename' => 'drupal_system_listing_compatible_test.module',
          'name' => 'drupal_system_listing_compatible_test',
          'info' => 
          array (
            'name' => 'Drupal system listing compatible test',
            'description' => 'Support module for testing the drupal_system_listing function.',
            'package' => 'Testing',
            'version' => '7.34',
            'core' => '7.x',
            'hidden' => true,
            'files' => 
            array (
              0 => 'drupal_system_listing_compatible_test.test',
            ),
            'project' => 'drupal',
            'datestamp' => '1416429488',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'drupal',
          'version' => '7.34',
        ),
      ),
      'themes' => 
      array (
      ),
    ),
    'standard' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
  ),
);