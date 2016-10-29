<?php
/**
 * Open Source Social Network
 *
 * @package   (softlab24.com).ossn
 * @author    OSSN Core Team <info@softlab24.com>
 * @copyright 2014-2016 SOFTLAB24 LIMITED
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
$friends = ossn_loggedin_user()->getFriends();
$have = '';
if ($friends) {
    foreach ($friends as $friend) {
        $vars['entity'] = $friend;
        $vars['icon'] = $friend->iconURL()->smaller;
        $have = 1;
        echo ossn_plugin_view('chat/friends/friend-item', $vars);
    }
}
if ($have !== 1) {
    echo '<div class="ossn-chat-none">'.ossn_print('ossn:chat:no:friend:online').'</div>';
}