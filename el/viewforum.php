<?php
/** 
*
* viewforum [Greek - El]
*
* @package language
* @version $Id$
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
* Ελληνική μετάφραση από την ομάδα του phpbbgr.com:
* (http://phpbbgr.com/team/)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACTIVE_TOPICS'			=> 'Ενεργά θέματα',
	'ANNOUNCEMENTS'			=> 'Ανακοινώσεις',
	
		'FORUM_PERMISSIONS'		=> 'Προσβάσεις σε αυτή τη Δ. Συζήτηση',
	
	'ICON_ANNOUNCEMENT'		=> 'Ανακοίνωση',
	'ICON_STICKY'			=> 'Σημείωση',

	'LOGIN_NOTIFY_FORUM'	=> 'Έχετε ειδοποιηθεί για αυτή την Δ. Συζήτηση παρακαλώ συνδεθείτε για να δείτε αυτό.',

	'MARK_TOPICS_READ'		=> 'Σημειώστε τις Θ. Ενότητες αναγνωσμένες ',
	'MOVED_TOPIC'			=> 'Μετακίνηση Θέματος',

	'NEW_POSTS_HOT'			=> 'Νέες δημοσιεύσεις [ Κορυφαίο Θέμα ]', // Not used anymore
	'NEW_POSTS_LOCKED'		=> 'Νέες δημοσιεύσεις [ Κλειδωμένο ]', // Not used anymore
	'NO_NEW_POSTS_HOT'		=> 'Δεν υπάρχουν νέες δημοσιεύσεις [ Κορυφαίο Θέμα ]', // Not used anymore
	'NO_NEW_POSTS_LOCKED'	=> 'Δεν υπάρχουν νέες δημοσιεύσεις [ Κλειδωμένο ]', // Not used anymore
	'NO_READ_ACCESS'		=> 'Δεν έχετε τις απαραίτητες άδειες να διαβάσετε τα θέματα στα πλαίσια αυτής της Δ. Συζήτησης.',
	'NO_UNREAD_POSTS_HOT'		=> 'Δεν υπάρχουν μη αναγνωσμένες δημοσιεύσεις [ Κορυφαίο Θέμα ]',
	'NO_UNREAD_POSTS_LOCKED'	=> 'Δεν υπάρχουν μη αναγνωσμένες δημοσιεύσεις [ Κλειδωμένο ]',

	'POST_FORUM_LOCKED'		=> 'Η Δ. Συζήτηση είναι κλειδωμένη',

	'TOPICS_MARKED'			=> 'Οι Θ. Ενότητες της Δ. Συζήτησης έχουν σημειωθεί αναγνωσμένες',
	
	'UNREAD_POSTS_HOT'		=> 'Μη αναγνωσμένες δημοσιεύσεις [ Κορυφαίο Θέμα ]',
	'UNREAD_POSTS_LOCKED'	=> 'Μη  αναγνωσμένες δημοσιεύσεις [ Κλειδωμένο ]',

	'VIEW_FORUM'			=> 'Προβολή Δ. Συζήτησης',
	'VIEW_FORUM_TOPIC'		=> '1 Θ. Ενότητα',
	'VIEW_FORUM_TOPICS'		=> '%d Θ. Ενότητες',
));

?>
