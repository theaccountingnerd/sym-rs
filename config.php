<?php
###############################
## ResourceSpace
## Local Configuration Script
###############################

# All custom settings should be entered in this file.
# Options may be copied from config.default.php and configured here.

# MySQL database settings
$mysql_server = 'mariadb';
$mysql_username = 'resourcespace_rw';
$mysql_password = 'test_pass_sym_resource';
$mysql_db = 'resourcespace';

# Base URL of the installation
$baseurl = 'http://192.168.4.39';

# Email settings
$email_notify = 'aaron@theaccountingnerd.com';
$email_from = 'noreply@resourcespace.com';
# Secure keys
$scramble_key = 'bda84ce4b22f45a835071fb80b405304e775644a132fb65622be161019bbf35e';
$api_scramble_key = '88681d9eea5397a22417d903f3e2d3ca0ea0a61e7d8a59998ce60d99a489c951';

# Paths
$imagemagick_path = '/usr/bin';
$ghostscript_path = '/usr/bin';
$ffmpeg_path = '/usr/bin';
$exiftool_path = '/usr/bin';
$pdftotext_path = '/usr/bin';

$applicationname = 'SYM_Resource_Space';
$homeanim_folder = 'filestore/system/slideshow_35d591c16aa026a';

/*

New Installation Defaults
-------------------------

The following configuration options are set for new installations only.
This provides a mechanism for enabling new features for new installations without affecting existing installations (as would occur with changes to config.default.php)

*/
                                
// Set imagemagick default for new installs to expect the newer version with the sRGB bug fixed.
$imagemagick_colorspace = "sRGB";

$contact_link=false;
$themes_simple_view=true;

$stemming=true;
$case_insensitive_username=true;
$user_pref_user_management_notifications=true;

$use_zip_extension=true;
$collection_download=true;

$ffmpeg_preview_force = true;
$ffmpeg_preview_extension = 'mp4';
$ffmpeg_preview_options = '-f mp4 -b:v 1200k -b:a 64k -ac 1 -c:v libx264 -pix_fmt yuv420p -profile:v baseline -level 3 -c:a aac -strict -2';

$daterange_search = true;
$upload_then_edit = true;

$purge_temp_folder_age=90;
$filestore_evenspread=true;

$comments_resource_enable=true;

$api_upload_urls = array();

$use_native_input_for_date_field = true;
$resource_view_use_pre = true;

$sort_tabs = false;
$maxyear_extends_current = 5;
$thumbs_display_archive_state = true;
$file_checksums = true;
$hide_real_filepath = true;
$annotate_enabled = true;

$plugins[] = "brand_guidelines";

