<?php
/** 
*
* acp_ban [Greek - El]
*
* @package language
* @version $Id: ban.php 11531 2011-11-13 20:15:13Z git-gate $
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

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> '1 Ώρα',
	'30_MINS'		=> '30 Λεπτά',
	'6_HOURS'		=> '6 Ώρες',

	'ACP_BAN_EXPLAIN'	=> 'Εδώ μπορείτε να χειριστείτε τον αποκλεισμό μελών μέσω ονόματος μέλους, IP ή διεύθυνση αλληλογραφίας. Αυτό αποτρέπει κάποιο μέλος να μπει σε οποιοδήποτε μέρος της Δ. Συζήτησης. Μπορείτε να εισάγετε ένα σύντομο λόγο (3000 χαρακτήρες μέγιστο) αποκλεισμού αν το επιθυμείτε. Αυτό θα εμφανίζεται στο Ιστορικό του διαχειριστή. Ο χρόνος αποκλεισμού μπορεί να καθοριστεί επίσης. Εάν θέλετε ο αποκλεισμός να τελειώσει σε μια συγκεκριμένη ημερομηνία μπορείτε να επιλέξετε τον χρόνο που θέλετε <span style="text-decoration: underline;">Μέχρι -&gt;</span> και εισάγετε την ημερομηνία σε μορφή <kbd>YYYY-MM-DD</kbd>.',

	'BAN_EXCLUDE'			=> 'Εξαίρεση από τον αποκλεισμό',
	'BAN_LENGTH'			=> 'Διάρκεια αποκλεισμού',
	'BAN_REASON'			=> 'Λόγος αποκλεισμού',
	'BAN_GIVE_REASON'		=> 'Λόγος αποκλεισμού που θα κοινοποιηθεί στον αποκλεισμένο',
	'BAN_UPDATE_SUCCESSFUL'	=> 'Η Λίστα αποκλεισμού ενημερώθηκε με επιτυχία.',
	'BANNED_UNTIL_DATE'		=> 'until %s', // Example: "until Mon 13.Jul.2009, 14:44"
	'BANNED_UNTIL_DURATION'	=> '%1$s (until %2$s)', // Example: "7 days (until Tue 14.Jul.2009, 14:44)"


	'EMAIL_BAN'					=> 'Αποκλεισμός μίας ή περισσοτέρων διευθύνσεων αλληλογραφίας',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Επιλέξτε για εξαίρεση της εισαγόμενης διεύθυνσης αλληλογραφίας από όλους τους τρέχοντες αποκλεισμούς.',
	'EMAIL_BAN_EXPLAIN'			=> 'Για περισσότερες από μια διευθύνσεις αλληλογραφίας βάλτε την κάθε μια σε διαφορετική γραμμή. Για αποκλεισμό διακομιστών αλληλογραφίας χρησιμοποιήστε * , π.χ. <samp>*@hotmail.com</samp>, <samp>*@*.domain.tld</samp>, κλπ.',
	'EMAIL_NO_BANNED'			=> 'Δεν υπάρχουν αποκλεισμένες διευθύνσεις αλληλογραφίας',
	'EMAIL_UNBAN'				=> 'Άρση αποκλεισμού ή απεπιλογή διευθύνσεων αλληλογραφίας',
	'EMAIL_UNBAN_EXPLAIN'		=> 'Μπορείτε να άρετε τον αποκλεισμό (ή να απεπιλέξετε) περισσότερες από μια διευθύνσεις αλληλογραφίας χρησιμοποιώντας τον κατάλληλο συνδυασμό ποντικιού και πληκτρολογίου του υπολογιστή σας και του Πλοηγού σας. Οι εξαιρούμενες διευθύνσεις αλληλογραφίας θα είναι υπογραμμισμένες.',

	'IP_BAN'					=> 'Αποκλεισμός μιας ή περισσοτέρων IP',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Επιλέξτε για εξαίρεση της εισαγόμενης διεύθυνσης IP από όλους τους τρέχοντες αποκλεισμούς.',
	'IP_BAN_EXPLAIN'			=> 'Για περισσότερες διευθύνσεις IPs ή κεντρικούς υπολογιστές βάλτε τα σε διαφορετική γραμμή το καθένα. Για εύρος διευθύνσεων IP χωρίστε της πρώτη και την τελευταία με μείον (-), για χαρακτήρα μπαλαντέρ βάλτε “*”.',
	'IP_HOSTNAME'				=> 'Διευθύνσεις IP ή κεντρικούς υπολογιστές',
	'IP_NO_BANNED'				=> 'Δεν υπάρχουν αποκλεισμένες Διευθύνσεις IP',
	'IP_UNBAN'					=> 'Άρση αποκλεισμού ή απεπιλογή IPs',
	'IP_UNBAN_EXPLAIN'			=> 'Μπορείτε να άρετε τον αποκλεισμό (ή να απεπιλέξετε) σε περισσότερες διευθύνσεις IP χρησιμοποιώντας τον κατάλληλο συνδυασμό ποντικιού και πληκτρολογίου του υπολογιστή σας και του Πλοηγού σας. Οι εξαιρούμενες IP θα είναι υπογραμμισμένες',

	'LENGTH_BAN_INVALID'		=> 'Η μορφή της ημερομηνίας πρέπει να είναι <kbd>YYYY-MM-DD</kbd>.',

	'OPTIONS_BANNED'			=> 'Αποκλεισμός',
	'OPTIONS_EXCLUDED'			=> 'Ρυθμίσεις που εξαιρούνται',
	
	'PERMANENT'		=> 'Οριστικός',

	'UNTIL'						=> 'Μέχρι',
	'USER_BAN'					=> 'Αποκλεισμός ενός ή περισσοτέρων ονομάτων μελών',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Επιλέξτε για εξαίρεση των μελών από όλους τους τρέχοντες αποκλεισμούς.',
	'USER_BAN_EXPLAIN'			=> 'Μπορείτε να αποκλείσετε περισσότερα μέλη βάζοντας το κάθε όνομα σε διαφορετική γραμμή. Χρησιμοποιήστε το <span style="text-decoration: underline;">Αναζήτηση Μέλους</span> για να βρείτε και να προσθέσετε περισσότερα μέλη ταυτόχρονα.',
	'USER_NO_BANNED'			=> 'Δεν υπάρχουν αποκλεισμένα ονόματα μελών',
	'USER_UNBAN'				=> 'Άρση αποκλεισμού ή απεπιλογή ονομάτων μελών',
	'USER_UNBAN_EXPLAIN'		=> 'Μπορείτε να άρετε τον αποκλεισμό (ή να απεπιλέξετε) περισσότερους χρήστες χρησιμοποιώντας τον κατάλληλο συνδυασμό ποντικιού και πληκτρολογίου του υπολογιστή σας και του Πλοηγού σας. Οι εξαιρούμενα μέλη θα είναι υπογραμμισμένοι.',


));

?>
