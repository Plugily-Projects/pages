<?php
/*
Plajer's Lair.
Copyright (C) 2018 Plajer

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/
include_once('cache.php');

function readLanguages($projectId) {
  static $cache = null;
  if (is_null($cache) || !array_key_exists($projectId, $cache)) {
    if (is_null($cache)) {
      $cache = array();
    }
    $apiKey = file_get_contents(__DIR__ . '/POEditorAPIKey.txt');

    $response = getCachedContent('https://api.poeditor.com/v2/languages/list', 'api_token=' . $apiKey . '&id=' . $projectId, 'poeditor_proj' . $projectId);
    $cache[$projectId] = $response;
  }
  return json_decode($cache[$projectId]);
}

function fixFlag($languageID, $flag) {
  switch ($languageID) {
    case 'Czech':
      $flag = 'cz';
      break;
    case 'Vietnamese':
      $flag = 'vn';
      break;
    case 'Chinese (simplified)':
    case 'Chinese':
      $flag = 'cn';
      break;
    case 'Chinese (traditional)':
    case 'Chinese (TW)':
      $flag = 'hk';
      break;
    case 'Estonian':
      $flag = 'ee';
      break;
    case 'Norwegian Bokmål':
      $flag = 'no';
      break;
    case 'Hebrew':
      $flag = 'il';
      break;
    case 'Portuguese (BR)':
      $flag = 'pt';
      break;
    case "Danish":
      $flag = 'dk';
      break;
  }
  return $flag;
}

