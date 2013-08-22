<?php
defined('MOODLE_INTERNAL') || die;

if ($hassiteconfig) { // needs this condition or there is error on login page
    $settings = new admin_settingpage('local_coursetemplates', 'Course Templates');
    $ADMIN->add('localplugins', $settings);

	
	// Writes the following to config_plugins table: plugin = local_coursetemplates, name = course_id, value=163
    $settings->add(new admin_setting_configtext('local_coursetemplates/course_id',
        get_string('course_id', 'local_coursetemplates'), get_string('settings_course_id_desc', 'local_coursetemplates'), 1, PARAM_INT));
}