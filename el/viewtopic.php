<?php
/** 
*
* viewtopic [Greek - El]
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
	'ATTACHMENT'			=> 'Συνημμένο',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Η λειτουργία των συνημμένων έχει τεθεί εκτός λειτουργίας ',

	'BOOKMARK_ADDED'		=> 'Η προσθήκη του θέματος στα αγαπημένα έγινε με επιτυχία.',
	'BOOKMARK_ERR'			=> 'Η προσθήκη του θέματος στα αγαπημένα απέτυχε. Παρακαλώ προσπαθήστε πάλι.',
	'BOOKMARK_REMOVED'		=> 'Η διαγραφή του θέματος από τα αγαπημένα έγινε με επιτυχία.',
	'BOOKMARK_TOPIC'		=> 'Προσθέστε στα αγαπημένα',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Διαγραφή από τα αγαπημένα',
	'BUMPED_BY'				=> 'Τελευταία φορά σημειώθηκε ως νέο από %1$s και %2$s',
	'BUMP_TOPIC'			=> 'Σημειώστε θέμα ως νέο',
	
	'COLLAPSE_QR'			=> 'Απόκρυψη γρήγορης απάντησης',
	'CODE'					=> 'Κώδικας',

	'DELETE_TOPIC'			=> 'Διαγραφή θέματος',
	'DOWNLOAD_NOTICE'		=> 'Δεν έχετε τα απαραίτητα δικαιώματα για να δείτε τα συνημμένα αρχεία σε αυτή την δημοσίευση.',

	'EDITED_TIMES_TOTAL'	=> 'Τελευταία επεξεργασία από %1$s και %2$s, έχει επεξεργασθεί %3$d φορά/ες συνολικά',
	'EDITED_TIME_TOTAL'		=> 'Τελευταία επεξεργασία από %1$s και %2$s, έχει επεξεργασθεί %3$d φορά/ες συνολικά',
	'EMAIL_TOPIC'			=> 'Ηλεκτρονικό ταχυδρομείο σε έναν φίλο',
	'ERROR_NO_ATTACHMENT'	=> 'Το επιλεγμένο συνημμένο δεν υπάρχει πλέον',

	'FILE_NOT_FOUND_404'	=> 'Το αρχείο <b>%s</b> δεν υπάρχει.',
	'FULL_EDITOR'			=> 'Ολόκληρος επεξεργαστής',
	
	'FORK_TOPIC'			=> 'Αντιγραφή Θέματος',

	'LINKAGE_FORBIDDEN'		=> 'Δεν έχετε τα απαραίτητα δικαιώματα να δείτε τα συνημμένα να μεταφορτώσετε ή να συνδέσετε από/προς αυτήν την περιοχή.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Έχετε ειδοποιηθεί για αυτό το θέμα, παρακαλώ συνδεθείτε για να το δείτε.',
	'LOGIN_VIEWTOPIC'		=> ' Ο διαχειριστής της Δ. Συζήτησης απαιτεί να εγγραφείτε και να συνδεθείτε για να δείτε αυτό το θέμα.',

	'MAKE_ANNOUNCE'			=> 'Κάνετε Ανακοίνωση',
	'MAKE_GLOBAL'			=> 'Κάνετε Γενική',
	'MAKE_NORMAL'			=> 'Κάνετε κανονική',
	'MAKE_STICKY'			=> 'Κάνετε Σημείωση',
	'MAX_OPTIONS_SELECT'	=> 'Μπορείτε να επιλέξετε μέχρι <b>%d</b>  επιλογές',
	'MAX_OPTION_SELECT'		=> 'Μπορείτε να επιλέξετε <b>1</b>  επιλογή',
	'MISSING_INLINE_ATTACHMENT'	=> 'Το συνημμένο <b>%s</b> δεν είναι άλλο διαθέσιμο',
	'MOVE_TOPIC'			=> 'Μετακίνηση Θέματος',

	'NO_ATTACHMENT_SELECTED'=> 'Έχετε επιλέξει να δείτε ή να μεταφορτώσετε ένα συνημμένο.',
	'NO_NEWER_TOPICS'		=> 'Δεν υπάρχει κανένα νεώτερο θέμα σε αυτή την Δ. Συζήτηση',
	'NO_OLDER_TOPICS'		=> 'Δεν υπάρχει κανένα παλαιότερο θέμα σε αυτή την Δ. Συζήτηση',
	'NO_UNREAD_POSTS'		=> 'Δεν υπάρχει καμία νέα αδιάβαστη δημοσίευση για αυτό το θέμα.',
	'NO_VOTE_OPTION'		=> 'Πρέπει να διευκρινίσετε μια επιλογή κατά την ψηφοφορία.',
	'NO_VOTES'				=> 'Δεν υπάρχουν ψήφοι',

	'POLL_ENDED_AT'			=> 'Το δημοψήφισμα λήγει στις %s',
	'POLL_RUN_TILL'			=> 'Το δημοψήφισμα ισχύει μέχρι %s',
	'POLL_VOTED_OPTION'		=> 'Ψηφίσατε για αυτήν την επιλογή',
	'PRINT_TOPIC'			=> 'Προβολή Εκτύπωσης',

	'QUICK_MOD'				=> 'Γρήγορο εργαλείο',
	'QUICKREPLY'			=> 'Γρήγορη απάντηση',	
	'QUOTE'					=> 'Παράθεση',

	'REPLY_TO_TOPIC'		=> 'Απαντήστε στο θέμα',
	'RETURN_POST'			=> 'Πατήστε %sΕδώ%s για να επιστρέψετε στην δημοσίευση',
	
	'SHOW_QR'				=> 'Γρήγορη απάντηση',
	'SUBMIT_VOTE'			=> 'Υποβολή ψήφου',

	'TOTAL_VOTES'			=> 'Σύνολο ψήφων',

	'UNLOCK_TOPIC'			=> 'Ξεκλειδώστε θέμα',

	'VIEW_INFO'				=> 'Λεπτομέρειες δημοσίευσης',
	'VIEW_NEXT_TOPIC'		=> 'Επόμενο',
	'VIEW_PREVIOUS_TOPIC'	=> 'Προηγούμενο',
	'VIEW_RESULTS'			=> 'Προβολή αποτελεσμάτων',
	'VIEW_TOPIC_POST'		=> '1 Δημοσίευση',
	'VIEW_TOPIC_POSTS'		=> '%d Δημοσιεύσεις',
	'VIEW_UNREAD_POST'		=> 'Πρώτη αδιάβαστη δημοσίευση',
	'VISIT_WEBSITE'			=> 'WWW',
	'VOTE_SUBMITTED'		=> 'Η ψήφος σας έχει υποβληθεί',
	'VOTE_CONVERTED'		=> 'Η αλλαγή των ψηφοφοριών δεν υποστηρίζεται για ψηφοφορίες που έχουν μετατραπεί.',

));

?>