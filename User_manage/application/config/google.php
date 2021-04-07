<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
|  Google API Configuration
| -------------------------------------------------------------------
| 
| To get API details you have to create a Google Project
| at Google API Console (https://console.developers.google.com)
| 
|  client_id         string   Your Google API Client ID.
|  client_secret     string   Your Google API Client secret.
|  redirect_uri      string   URL to redirect back to after login.
|  application_name  string   Your Google application name.
|  api_key           string   Developer key.
|  scopes            string   Specify scopes
*/
$config['google']['client_id']        = '914778836678-eppsbknadrp9n43c2v8c9gmnqt8ftvaj.apps.googleusercontent.com';
$config['google']['client_secret']    = '3vMvOpiexbOjvcO1liIWFBrm';
$config['google']['redirect_uri']     = base_url().'//';
$config['google']['application_name'] = 'Admin_Lte';
$config['google']['api_key']          = '';
$config['google']['scopes']           = array();