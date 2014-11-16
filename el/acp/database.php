<?php
/**
*
* acp_database [Greek - El]
*
* @package language
* @version $Id: database.php 11561 2011-11-20 03:00:09Z git-gate $
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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'Εδώ μπορείτε να κάνετε ένα αντίγραφο ασφαλείας του βάσης δεδομένων του phpBB σας. Μπορείτε να αποθηκεύσετε το αντίγραφο στον φάκελο <samp>store/</samp> φάκελο ή να τον μεταφορτώσετε αμέσως. Ανάλογα με τις ρυθμίσεις του κεντρικού υπολογιστή σας μπορείτε να συμπιέσετε το αρχείο σε διαφορετικές μορφές.',
	'ACP_RESTORE_EXPLAIN'	=> 'Εδώ μπορείτε να κάνετε μια ολική επαναφορά των πινάκων της βάσης δεδομένων σας από ένα αποθηκευμένο αρχείο. Εάν ο κεντρικός υπολογιστής σας υποστηρίζει gzip ή bzip2 συμπίεση τότε μπορείτε να χρησιμοποιήσετε και ένα συμπιεσμένο αρχείο το οποίο αποσυμπιέζεται έπειτα αυτόματα. <strong>ΠΡΟΣΟΧΗ</strong> Αυτό θα αντικαταστήσει όλα τα υπάρχοντα στοιχεία.. Η επαναφορά ανάλογα με το μέγεθος του αρχείου μπορεί να διαρκέσει αρκετά, για αυτό μην μετακινηθείτε από την σελίδα. Τα αντίγραφα ασφαλείας θα αποθηκευτούν στον φάκελο <samp>store/</samp> και υποτίθεται ότι έχουν γίνει από την εφεδρική λειτουργία του phpBB. Αποκατάσταση αντιγράφων ασφαλείας που δεν έχουν γίνει από το σύστημα μπορεί ή δεν θα λειτουργήσουν.',


	'BACKUP_DELETE'		=> 'Το αρχείο του αντίγραφου ασφαλείας έχει διαγραφεί επιτυχώς.',
	'BACKUP_INVALID'	=> 'Το συγκεκριμένο αρχείο αντίγραφου ασφαλείας είναι άκυρο.',
	'BACKUP_OPTIONS'	=> 'Ρυθμίσεις αντίγραφου ασφαλείας',
	'BACKUP_SUCCESS'	=> 'Το αρχείο του αντίγραφου ασφαλείας δημιουργήθηκε επιτυχώς.',
	'BACKUP_TYPE'		=> 'Τύπος αντίγραφου ασφαλείας',

	'DATABASE'			=> 'Λειτουργία βάση δεδομένων',
	'DATA_ONLY'			=> 'Δεδομένα μόνο',
	'DELETE_BACKUP'		=> 'Πλήρες αντίγραφο',
	'DELETE_SELECTED_BACKUP'	=> 'Είστε σίγουρος ότι θέλετε να διαγράψετε το αντίγραφο ασφαλείας;',
	'DESELECT_ALL'		=> 'Αναίρεση όλων',
	'DOWNLOAD_BACKUP'	=> 'Μεταφόρτωση αντίγραφου',

	'FILE_TYPE'			=> 'Τύπος αρχείου',
	'FILE_WRITE_FAIL'	=> 'Αδυναμία εγγραφής του αρχείου στον φάκελο αποθήκευσης.',
	'FULL_BACKUP'		=> 'Ολόκληρο',

	'RESTORE_FAILURE'		=> 'Το αντίγραφο ασφαλείας ίσως είναι χαλασμένο.',
	'RESTORE_OPTIONS'		=> 'Ρυθμίσεις επαναφοράς',
	'RESTORE_SELECTED_BACKUP'	=> 'Είστε σίγουροι ότι θέλετε να κάνετε επαναφορά το επιλεγμένο αντίγραφο?',
	'RESTORE_SUCCESS'		=> 'Η επαναφορά της βάσης έγινε επιτυχώς.<br /><br />Η Δ. Συζήτηση πρέπει να βρίσκετε στην κατάσταση που βρισκότανε κατά την δημιουργία του αντίγραφου ασφαλείας.',

	'SELECT_ALL'			=> 'Επιλογή όλων',
	'SELECT_FILE'			=> 'Επιλογή αρχείου',
	'START_BACKUP'			=> 'Εκκίνηση αντίγραφου ασφαλείας',
	'START_RESTORE'			=> 'Εκκίνηση επαναφοράς',
	'STORE_AND_DOWNLOAD'	=> 'Αποθήκευση και μεταφόρτωση',
	'STORE_LOCAL'			=> 'Αποθήκευση αρχείου τοπικά',
	'STRUCTURE_ONLY'		=> 'Δομή μόνο',

	'TABLE_SELECT'		=> 'Πίνακες μόνο',
	'TABLE_SELECT_ERROR'=> 'Πρέπει να επιλέξετε τουλάχιστον έναν πίνακα.',
));

?>
