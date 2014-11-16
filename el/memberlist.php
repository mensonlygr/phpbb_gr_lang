<?php
/** 
*
* memberlist [Greek - El]
*
* @package language
* @version $Id: memberlist.php 11136 2011-05-10 02:30:09Z git-gate $
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
	'ABOUT_USER'			=> 'Προφίλ',
	'ACTIVE_IN_FORUM'		=> 'Πιο ενεργή Δ. Συζήτηση',
	'ACTIVE_IN_TOPIC'		=> 'Πιο ενεργή Θ. Ενότητα',
	'ADD_FOE'				=> 'Προσθέστε εχθρό',
	'ADD_FRIEND'			=> 'Προσθέστε φίλο',
	'AFTER'					=> 'Μετά',

	'ALL'					=> 'Όλα',

	'BEFORE'				=> 'Πριν',

	'CC_EMAIL'				=> 'Αποστολή αντίγραφου του ηλεκτρονικού ταχυδρομείου στον εαυτό σας.',
	'CONTACT_USER'			=> 'ΕΠΙΚΟΙΝΩΝΙΑ ',

	'DEST_LANG'				=> 'Γλώσσα',
	'DEST_LANG_EXPLAIN'		=> 'Επιλέξτε μια κατάλληλη γλώσσα (εάν είναι διαθέσιμη) για τον παραλήπτη αυτού του μηνύματος.',

	'EMAIL_BODY_EXPLAIN'	=> 'Αυτό το μήνυμα θα σταλεί σαν απλό κείμενο, δεν περιλαμβάνει οποιοδήποτε HTML ή BBCode κώδικα. Η διεύθυνση επιστροφής για αυτό το μήνυμα θα τεθεί τη διεύθυνση ηλεκτρονικού ταχυδρομείου σας.',
	'EMAIL_DISABLED'		=> 'Συγνώμη αλλά όλες σχετικές με το ηλεκτρονικό ταχυδρομείο λειτουργίες έχουν τεθεί εκτός λειτουργίας.',
	'EMAIL_SENT'			=> 'Το ηλεκτρονικό ταχυδρομείο έχει σταλεί.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Αυτό το μήνυμα θα σταλεί σαν απλό κείμενο, δεν περιλαμβάνει οποιοδήποτε HTML ή BBCode κώδικα. Παρακαλώ σημειώστε ότι οι πληροφορίες θέματος συμπεριλαμβάνονται ήδη στο μήνυμα. Η διεύθυνση επιστροφής για αυτό το μήνυμα θα τεθεί τη διεύθυνση ηλεκτρονικού ταχυδρομείου σας.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Πρέπει να παρέχετε μια έγκυρη διεύθυνση ηλεκτρονικού ταχυδρομείου για τον παραλήπτη.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Πρέπει να εισαγάγετε ένα μήνυμα που στέλνεται με το ηλεκτρονικό ταχυδρομείο.',
	'EMPTY_MESSAGE_IM'		=> 'Πρέπει να προσθέσετε ένα μήνυμα προς αποστολή.',
	'EMPTY_NAME_EMAIL'		=> 'Πρέπει να εισαγάγετε το πραγματικό όνομα του παραλήπτη.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Πρέπει να διευκρινίσετε ένα θέμα για το ηλεκτρονικό ταχυδρομείο.',
	'EQUAL_TO'				=> 'Ίσως',

	'FIND_USERNAME_EXPLAIN'	=> 'Χρησιμοποιήστε αυτήν την μορφή στην αναζήτηση των συγκεκριμένων μελών. Δεν χρειάζεται να συμπληρώσετε όλα τα πεδία Για να ταιριάξει με τη μερική χρήση στοιχείων χρησιμοποιήστε * μπαλαντέρ. Κατά την εισαγωγή οι ημερομηνίες χρησιμοποιούν το σχήμα <kbd>YYYY-MM-DD</kbd>, e.g. <samp>2004-02-29</samp>. Χρησιμοποιήστε τα τετραγωνίδια σημαδιών για να επιλέξετε ένα ή περισσότερα ονόματα μελών (διάφορα ονόματα μελών μπορούν να γίνουν αποδεκτά ανάλογα με η ίδια τη μορφή) και να πατήσετε το επίλεκτο χαρακτηρισμένο κουμπί για να επιστρέψετε στην προηγούμενη μορφή.',
	'FLOOD_EMAIL_LIMIT'		=> 'Δεν μπορείτε να στείλετε ένα άλλο ηλεκτρονικό ταχυδρομείο αυτή τη στιγμή. Παρακαλώ προσπαθήστε πάλι αργότερα.',

	'GROUP_LEADER'			=> 'Συντονιστής Ομάδας',

	'HIDE_MEMBER_SEARCH'	=> 'Απόκρυψη αναζήτησης μελών',

	'IM_ADD_CONTACT'		=> 'Προσθέστε Επικοινωνία ',
	'IM_AIM'				=> 'Παρακαλώ σημειώστε ότι πρέπει να εγκαταστήσετε το AOL Instant Messenger για να χρησιμοποιήσετε αυτό.',
	'IM_AIM_EXPRESS'		=> 'AIM Express',
	'IM_DOWNLOAD_APP'		=> 'Μεταφορτώστε την εφαρμογή',
	'IM_ICQ'				=> 'Παρακαλώ σημειώστε ότι τα μέλη μπορεί να έχουν επιλέξει να μην λάβουν τα εκούσια στιγμιαία μηνύματα.',
	'IM_JABBER'				=> 'Παρακαλώ σημειώστε ότι τα μέλη μπορεί να έχουν επιλέξει να μην λάβουν τα εκούσια στιγμιαία μηνύματα.',
	'IM_JABBER_SUBJECT'		=> 'Αυτό είναι ένα αυτόματο μήνυμα παρακαλώ μην απαντήσετε! Μήνυμα από το μέλος %1$s at %2$s.',
	'IM_MESSAGE'			=> 'Το μήνυμά σας',
	'IM_MSNM'				=> 'Παρακαλώ σημειώστε ότι πρέπει να εγκαταστήσετε το Windows Messenger για να χρησιμοποιήσετε αυτό.',
	'IM_MSNM_BROWSER'		=> 'Ο πλοηγός σας δεν υποστηρίζει αυτό.',
	'IM_MSNM_CONNECT'		=> 'Δεν υπάρχει σύνδεση με το Windows Live Messenger.\n Για να προχωρήσετε πρέπει να συνδεθείτε με το Windows Live Messenger.',
	'IM_NAME'				=> 'Το όνομά σας',
	'IM_NO_DATA'			=> 'Δεν υπάρχει κανένα κατάλληλο στοιχείο επικοινωνίας για αυτό το μέλος.',
	'IM_NO_JABBER'			=> 'Συγνώμη, άμεσα μηνύματα με Jabber μέλη δεν υποστηρίζονται από αυτόν τον κεντρικό υπολογιστή. Θα πρέπει να εγκαταστήσετε έναν Jabber-Client στο σύστημά σας για να έρθετε σε επαφή με τον παραλήπτη ανωτέρω.',
	'IM_RECIPIENT'			=> 'Παραλήπτης',
	'IM_SEND'				=> 'Αποστολή μηνύματος',
	'IM_SEND_MESSAGE'		=> 'Αποστολή μηνύματος',
	'IM_SENT_JABBER'		=> 'Το μήνυμά σας προς το μέλος %1$s έχει σταλεί επιτυχώς.',
	'IM_USER'				=> 'Στείλετε ένα στιγμιαίο μήνυμα',

	'LAST_ACTIVE'				=> 'Τελευταία επίσκεψη',
	'LESS_THAN'					=> 'Λιγότερο από',
	'LIST_USER'					=> '1 μέλος',
	'LIST_USERS'				=> '%d μέλη',
	'LOGIN_EXPLAIN_LEADERS'		=> 'Πρέπει να εγγραφείτε και να συνδεθείτε για να δείτε τις ομάδες μελών.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Πρέπει να εγγραφείτε και να συνδεθείτε για να έχετε πρόσβαση στην λίστα μελών.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Πρέπει να εγγραφείτε και να συνδεθείτε για να αναζητήσετε κάποιο μέλος.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Πρέπει να εγγραφείτε και να συνδεθείτε για να δείτε το προφίλ κάποιου μέλους.',

	'MORE_THAN'				=> 'Περισσότερο από',

	'NO_EMAIL'				=> 'Δεν έχετε δικαίωμα να στείλετε ηλεκτρονικό ταχυδρομείο σε αυτό το μέλος.',
	'NO_VIEW_USERS'			=> 'Δεν έχετε δικαίωμα να δείτε την λίστα μελών ή το προφίλ.',

	'ORDER'					=> 'Ταξινόμηση',
	'OTHER'					=> 'Άλλη ένδειξη',

	'POST_IP'				=> 'Δημοσίευση από IP/Ιστοσελίδα',

	'RANK'					=> 'Βαθμός',
	'REAL_NAME'				=> 'Όνομα παραλήπτη',
	'RECIPIENT'				=> 'Παραλήπτης',
	'REMOVE_FOE'			=> 'Διαγραφή εχθρού',
	'REMOVE_FRIEND'			=> 'Διαγραφή φίλου',

	'SELECT_MARKED'			=> 'Επιλογή σημειωμένων',
	'SELECT_SORT_METHOD'	=> 'Επιλέξτε μέθοδο ταξινόμησης',
	'SEND_AIM_MESSAGE'		=> 'AIM Αποστολή μηνύματος',
	'SEND_ICQ_MESSAGE'		=> 'ICQ Αποστολή μηνύματος',
	'SEND_IM'				=> 'Instant messaging αποστολή',
	'SEND_JABBER_MESSAGE'	=> 'Jabber Αποστολή μηνύματος',
	'SEND_MESSAGE'			=> 'Μήνυμα',
	'SEND_MSNM_MESSAGE'		=> 'MSNM/WLM Αποστολή μηνύματος',
	'SEND_YIM_MESSAGE'		=> 'Αποστολή YIM μηνύματος',
	'SORT_EMAIL'			=> 'Ηλεκτρονικό ταχυδρομείο',
	'SORT_LAST_ACTIVE'		=> 'Τελευταία ενέργεια',
	'SORT_POST_COUNT'		=> 'Σύνολο δημοσιεύσεων',

	'USERNAME_BEGINS_WITH'	=> 'Το όνομα μέλους αρχίζει από',
	'USER_ADMIN'			=> 'Διαχείριση μέλους',
	'USER_BAN'				=> 'Αποκλεισμός',
	'USER_FORUM'			=> 'Στατιστικά μέλους',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'Δεν έχει αποσταλεί καμία υπενθύμιση αυτήν την περίοδο',
		1		=> '%1$d απέστειλε υπενθύμιση <br /><br />» %2$s',
	),
	'USER_ONLINE'			=> 'Σε σύνδεση',
	'USER_PRESENCE'			=> 'Παρουσία στην Δ. Συζήτηση',

	'VIEWING_PROFILE'		=> 'Προβολή προφίλ - %s',
	'VISITED'				=> 'Τελευταία επίσκεψη',

	'WWW'					=> 'Ιστοσελίδα',
));

?>
