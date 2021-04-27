<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 *
 * @package   theme_mb2cg
 * @copyright 2018 - 2019 Mariusz Boloz (www.mb2themes.com)
 * @license   Commercial https://themeforest.net/licenses
 *
 */

defined('MOODLE_INTERNAL') || die();

/*
 *
 * Method to get search form
 *
 *
 */
function theme_mb2cg_search_form ()
{

	global $CFG, $PAGE;

	$output = '';

	$search_action = new moodle_url($CFG->wwwroot . '/course/search.php',array());
	$search_text = get_string('searchcourses');
	$form_col = 12;
	$form_cls = '';


	$global_search = ($CFG->enableglobalsearch && theme_mb2cg_moodle_from(2016052300));
	$searchboth = theme_mb2cg_theme_setting($PAGE,'searchboth');
	$search_action_global = new moodle_url($CFG->wwwroot . '/search/index.php',array());
	$search_text_global = get_string('globalsearch','admin');


	// Enable global search form
	// This feature is available since Moodle 3.1
	if ($global_search && !$searchboth)
	{
		$search_action = $search_action_global;
		$search_text = $search_text_global;
	}

	if ($global_search && $searchboth)
	{
		$form_col = 6;
		$form_cls = ' searchboth';
	}


	$output .= '<div class="theme-searchform' . $form_cls . '">';
	$output .= '<a href="#" class="search-close"><i class="icon2 pe-7s-close"></i></a>';
	$output .= '<div class="container-fluid">';
	$output .= '<div class="row">';

	$output .= '<div class="col-md-' . $form_col . '">';
	$output .= '<form id="theme-search" action="' . $search_action . '">';
	$output .= '<input id="theme-searchbox" type="text" value="" placeholder="' . $search_text . '" name="search">';
	$output .= '<button type="submit"><i class="fa fa-search"></i></button>';
	$output .= '</form>';
	$output .= '</div>';

	if ($global_search && $searchboth)
	{
		$output .= '<div class="col-md-' . $form_col . '">';
		$output .= '<form id="theme-search-global" action="' . $search_action_global . '">';
		$output .= '<input id="theme-searchbox-global" type="text" value="" placeholder="' . $search_text_global . '" name="q">';
		$output .= '<button type="submit"><i class="fa fa-search"></i></button>';
		$output .= '</form>';
		$output .= '</div>';
	}

	$output .= '</div>';
	$output .= '</div>';
	$output .= '</div>';


	return $output;

}







/*
 *
 * Method to get login form
 *
 *
 */
function theme_mb2cg_login_form ()
{


	global $PAGE, $OUTPUT, $USER, $CFG;

	$output = '';
	$iswww = '';
    $logintoken = '';

	$iswww = empty($CFG->loginhttps) ?  $CFG->wwwroot : str_replace('http://', 'https://', $CFG->wwwroot);
    $login_url = $iswww . '/login/index.php?authldap_skipntlmsso=1';

    if (method_exists('\core\session\manager','get_login_token'))
    {
        $login_url = get_login_url();
        $logintoken = '<input type="hidden" name="logintoken" value="' . s(\core\session\manager::get_login_token()) .'" />';
    }

   	$link_to_login = theme_mb2cg_theme_setting($PAGE,'loginlinktopage',0);


	$output .= '<div class="theme-loginform">';

	if (!isloggedin() or isguestuser())
	{
      $link = '#';

      if ($link_to_login)
      {
         if ($CFG->alternateloginurl)
         {
            $link = $CFG->alternateloginurl;
         }
         else
         {
			$link = new moodle_url($CFG->wwwroot . '/login/index.php',array());
         }
      }

      $output .= '<a href="' . $link . '" class="btn btn-primary login-open"><i class="fa fa-lock"></i> ' . get_string('login') . '</a>';
	}
	else
	{
		$output .= '<a href="#" class="btn btn-primary login-open"><i class="fa fa-user"></i> ' . $USER->username . '</a>';
	}


	$output .= '<div class="theme-loginform-inner">';
	$output .= '<div class="theme-loginform-form">';


	if ((!isloggedin() || isguestuser()) && !$link_to_login)
	{

		$output .= '<form id="header-form-login" method="post" action="' . $login_url . '">';
		$output .= '<div class="form-field">';
		$output .= '<label id="user"><i class="fa fa-user"></i></label>';
		$output .= '<input id="login-username" type="text" name="username" placeholder="' . get_string('username') . '" />';
		$output .= '</div>';
		$output .= '<div class="form-field">';
		$output .= '<label id="pass"><i class="fa fa-lock"></i></label>';
		$output .= '<input id="login-password" type="password" name="password" placeholder="' . get_string('password') . '" />';
		$output .= '</div>';
		//$output .= '<input type="submit" id="submit" name="submit" value="' . get_string('login') . '" />';
		$output .= '<button type="submit"><i class="fa fa-angle-right"></i></button>';
		$output .= $logintoken;
		$output .= '</form>';


		$m33 = 2017051500; // Firs Moodle 3.3 release
		if ($CFG->version >= $m33)
		{
			$authsequence = get_enabled_auth_plugins(true); // Get all auths, in sequence.
            $potentialidps = array();

            foreach ($authsequence as $authname)
			   {
                $authplugin = get_auth_plugin($authname);
                $potentialidps = array_merge($potentialidps, $authplugin->loginpage_idp_list($PAGE->url->out(false)));
            }

            if (!empty($potentialidps))
			   {

               $output .= '<div class="potentialidps">';
               $output .= '<h6>' . get_string('potentialidps', 'auth') . '</h6>';
               $output .= '<div class="potentialidplist">';

               foreach ($potentialidps as $idp)
               {
                  $output .= '<div class="potentialidp">';
                  $output .= '<a class="btn btn-default" ';
                  $output.= 'href="' . $idp['url']->out() . '" title="' . s($idp['name']) . '">';

                  if (!empty($idp['iconurl']))
					   {
                     $output .= '<img src="' . s($idp['iconurl']) . '" width="24" height="24" class="m-r-1"/>';
                  }

                  $output .= s($idp['name']) . '</a></div>';
                }

                $output .= '</div>';
                $output .= '</div>';
            }
		}

		$loginLink = theme_mb2cg_theme_setting($PAGE,'loginlink',1) == 2 ? $CFG->wwwroot . '/login/forgot_password.php' :
      	$CFG->wwwroot . '/login/index.php';
		$loginText = theme_mb2cg_theme_setting($PAGE,'logintext')  !='' ? theme_mb2cg_theme_setting($PAGE,'logintext') : get_string('logininfo','theme_mb2cg');
		$output .= '<p class="login-info"><a href="' . $loginLink . '">' . $loginText . '</a><p>';
		$output .= theme_mb2cg_login_links();

	}
	elseif (isloggedin() && !isguestuser())
	{

		$m27 = 2014051220; // Last formal release of Moodle 2.7
		$output .= ($CFG->version > $m27) ? $OUTPUT->user_menu() : $OUTPUT->login_info();
		$output .= $OUTPUT->user_picture($USER, array('size' => 80, 'class' => 'welcome_userpicture'));

	}


	$output .= '</div>';
	$output .= '</div>';
	$output .= '</div>';


	return $output;


}






/*
 *
 * Method to get login additional info
 *
 *
 */
function theme_mb2cg_login_links()
{

	global $PAGE;


	$output = '';

	if (theme_mb2cg_theme_setting($PAGE,'loginaddtext1') != '' )
	{


		$output .= '<ul class="loginlinks">';


		for ($i=1; $i<=3; $i++)
		{

			$text = theme_mb2cg_theme_setting($PAGE,'loginaddtext' . $i);
			$url = theme_mb2cg_theme_setting($PAGE,'loginaddurl' . $i);
			$urlNw = theme_mb2cg_theme_setting($PAGE,'loginaddurlnw' . $i);

			if ($text !='')
			{


				$target = $urlNw ? ' target="_blank"' : '';

				$output .= '<li>';
				$output .= $url !='' ? '<a href="' . $url . '"' . $target . '>' : '<span>';
				$output .= $text;
				$output .= $url !='' ? '</a>' : '</span>';
				$output .= '</li>';

			}





		}



		$output .= '</ul>';


	}



	return $output;



}
