<?php
/** 
*
* acp_modules [Greek - El]
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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Εδώ μπορείτε να διαχειριστείτε όλων των ειδών τις μονάδες. Σημειώστε ότι το ACP έχει τριπλή δόμηση μενού (Κατηγορία -> Κατηγορία -> Μονάδα) μέσω του οποίου οι άλλες έχουν διπλή δόμηση μενού (Κατηγορία -> Μονάδα) και έτσι πρέπει να κρατηθεί. Σημειώστε επίσης ότι είναι δυνατόν να κλειδωθείτε εκτός διαχείρισης αν απενεργοποιήσετε ή διαγράψετε τις μονάδες που είναι υπεύθυνες για την διαχείριση μονάδων.',
	'ADD_MODULE'					=> 'Προσθήκη μονάδας',
	'ADD_MODULE_CONFIRM'			=> 'Είστε σίγουρος ότι θέλετε να εισάγετε την επιλεγμένη μονάδα με την επιλεγμένη κατάσταση λειτουργίας;',
	'ADD_MODULE_TITLE'				=> 'Προσθήκη μονάδας',

	'CANNOT_REMOVE_MODULE'	=> 'Αποτυχία αφαίρεσης μονάδας, έχει εκχωρημένες υπό-μονάδες. Παρακαλώ αφαιρέστε ή μεταφέρετε όλες τις υπό-μονάδες πριν επαναλάβετε την ενέργεια.',
	'CATEGORY'				=> 'Κατηγορία',
	'CHOOSE_MODE'			=> 'Επιλέξτε κατάσταση μονάδας',
	'CHOOSE_MODE_EXPLAIN'	=> 'Επιλέγετε την κατάσταση λειτουργίας της μονάδας.',
	'CHOOSE_MODULE'			=> 'Επιλογή μονάδας',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Επιλέγετε το αρχείο που θα καλείτε από αυτήν την μονάδα.',
	'CREATE_MODULE'			=> 'Δημιουργία νέας μονάδας',

	'DEACTIVATED_MODULE'	=> 'Απενεργοποίηση μονάδας',
	'DELETE_MODULE'			=> 'Διαγραφή μονάδας',
	'DELETE_MODULE_CONFIRM'	=> 'Είστε σίγουρος ότι θέλετε να διαγράψετε αυτήν την μονάδα;',

	'EDIT_MODULE'			=> 'Επεξεργασία μονάδας',
	'EDIT_MODULE_EXPLAIN'	=> 'Εδώ μπορείτε να εισάγετε συγκεκριμένες μεταβλητές για την μονάδα.',

	'HIDDEN_MODULE'			=> 'Κρυφή μονάδα',

	'MODULE'					=> 'Μονάδα',
	'MODULE_ADDED'				=> 'Επιτυχής προσθήκη μονάδας.',
	'MODULE_DELETED'			=> 'Επιτυχής αφαίρεση μονάδας.',
	'MODULE_DISPLAYED'			=> 'Εμφάνιση μονάδας',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Αν δεν θέλετε να εμφανίζετε η μονάδα αλλά θέλετε να την χρησιμοποιείται βάλτε το Όχι.',
	'MODULE_EDITED'				=> 'Επιτυχής επεξεργασία μονάδας.',
	'MODULE_ENABLED'			=> 'Ενεργοποίηση μονάδας',
	'MODULE_LANGNAME'			=> 'Γλώσσα μονάδας',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Βάλτε το όνομα με το οποίο θα εμφανίζετε η μονάδα. Χρησιμοποιείστε μεταβλητή τιμή αν το όνομα παρέχετε από αρχείο γλώσσας.',
	'MODULE_TYPE'				=> 'Τύπος μονάδας',

	'NO_CATEGORY_TO_MODULE'	=> 'Αδυναμία μετατροπής κατηγορίας σε μονάδα. Παρακαλώ αφαιρέστε ή μεταφέρετε όλες τις υπό-μονάδες πριν επαναλάβετε την ενέργεια.',
	'NO_MODULE'				=> 'Δεν βρέθηκε μονάδα.',
	'NO_MODULE_ID'			=> 'Δεν δηλώθηκε ταυτότητα μονάδας.',
	'NO_MODULE_LANGNAME'	=> 'Δεν δηλώθηκε αρχείο γλώσσας μονάδας.',
	'NO_PARENT'				=> 'Δεν υπάρχει κατηγορία γονέας',

	'PARENT'				=> 'Κατηγορία γονέας',
	'PARENT_NO_EXIST'		=> 'Δεν υπάρχει κατηγορία γονέας.',

	'SELECT_MODULE'			=> 'Επιλέξτε μονάδα',
));

?>
