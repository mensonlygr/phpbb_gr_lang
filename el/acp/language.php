<?php
/** 
*
* acp_language [Greek - El]
*
* @package language
* @version $Id: language.php 11544 2011-11-17 18:00:10Z git-gate $
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
	'ACP_FILES'						=> 'Αρχεία γλώσσας διαχειριστή',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Εδώ μπορείτε να εγκαταστήσετε/απεγκαταστήσετε πακέτα γλώσσας. Το γλωσσικό πακέτο προεπιλογής είναι μαρκαρισμένο με έναν αστερίσκο (*).',

	'EMAIL_FILES'			=> 'Οδηγοί αλληλογραφίας',

	'FILE_CONTENTS'				=> 'Περιεχόμενα αρχείου',
	'FILE_FROM_STORAGE'			=> 'Αρχείο από φάκελο αποθήκευσης',

	'HELP_FILES'				=> 'Αρχεία βοηθείας',

	'INSTALLED_LANGUAGE_PACKS'	=> 'Εγκατεστημένα πακέτα γλωσσών',
	'INVALID_LANGUAGE_PACK'		=> 'Το επιλεγμένο πακέτο γλώσσας μπορεί να μην είναι έγκυρο. Παρακαλώ επαληθεύστε το πακέτο γλώσσας και φορτώστε το ξανά αν είναι απαραίτητο.',
	'INVALID_UPLOAD_METHOD'		=> 'Ο επιλεγμένος τρόπος φόρτωσης δεν είναι έγκυρος, παρακαλώ επιλέξτε άλλον.',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Οι λεπτομέρειες της γλώσσας ενημερώθηκαν επιτυχώς.',
	'LANGUAGE_ENTRIES'					=> 'Λήμματα γλώσσας',
	'LANGUAGE_ENTRIES_EXPLAIN'			=> 'Εδώ μπορείτε να αλλάξετε τιμές σε υπάρχοντα πακέτα γλώσσας ή αυτά που δεν έχουν μεταφραστεί ακόμα.<br /><strong>Σημείωση:</strong> Όταν αλλάξετε κάποιο αρχείο γλώσσας, αυτό θα αποθηκευτούν σε ξεχωριστό φάκελο ώστε να τα μεταφορτώσετε. Οι αλλαγές δεν θα είναι ορατές στα μέλη μέχρι να αντικαταστήσετε τα αρχικά αρχεία γλώσσας στην σελίδα σας (ανεβάζοντάς τα).',
	'LANGUAGE_FILES'					=> 'Αρχεία γλώσσας',
	'LANGUAGE_KEY'						=> 'Γλωσσικό Κλειδί',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Αυτό το πακέτο γλώσσας είναι ήδη εγκατεστημένο.',
	'LANGUAGE_PACK_DELETED'				=> 'Το αρχείο γλώσσας <strong>%s</strong> απεγκαταστάθηκε επιτυχώς. Όλα τα μέλη που χρησιμοποιούσαν αυτήν την γλώσσας ρυθμίσθηκαν στην βασική γλώσσα της Δ. Συζήτησης.',
	'LANGUAGE_PACK_DETAILS'				=> 'Λεπτομέρειες πακέτου γλώσσας',
	'LANGUAGE_PACK_INSTALLED'			=> 'Το αρχείο γλώσσας <strong>%s</strong> εγκαταστάθηκε επιτυχώς.',
	'LANGUAGE_PACK_CPF_UPDATE'			=> 'Η ακολουθίες χαρακτήρων στα προσαρμοσμένα πεδία προφίλ’ έχουν αντιγραφή από την προεπιλεγμένη γλώσσα. Παρακαλώ αλλάξτε αυτά εάν είναι απαραίτητο.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Τοπικό όνομα',
	'LANGUAGE_PACK_NAME'				=> 'Όνομα',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Το επιλεγμένο πακέτο γλώσσας δεν υπάρχει.',
	'LANGUAGE_PACK_USED_BY'				=> 'Χρησιμοποιείται από (συμπεριλαμβανομένων των robots)',
	'LANGUAGE_VARIABLE'					=> 'Μεταβλητή γλώσσας',
	'LANG_AUTHOR'						=> 'Δημιουργός πακέτου γλώσσας',
	'LANG_ENGLISH_NAME'					=> 'Αγγλικό όνομα',
	'LANG_ISO_CODE'						=> 'Κώδικας ISO',
	'LANG_LOCAL_NAME'					=> 'Τοπικό όνομα',

	'MISSING_LANGUAGE_FILE'		=> 'Ελλείπον αρχείο γλώσσας: <strong style="color:red">%s</strong>',
	'MISSING_LANG_VARIABLES'	=> 'Ελλείπον μεταβλητή γλώσσας',
	'MODS_FILES'				=> 'Αρχεία γλώσσας MODs',

	'NO_FILE_SELECTED'				=> 'Δεν καθορίσατε αρχείο γλώσσας.',
	'NO_LANG_ID'					=> 'Δεν καθορίσατε πακέτο γλώσσας.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Δεν μπορείτε να απεγκαταστήσετε το βασικό πακέτο γλώσσας.<br />Αν θέλετε να το απεγκαταστήσετε, αλλάξτε την βασική γλώσσα της Δ. Συζήτησης πριν.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Δεν υπάρχουν απεγκατεστημένα πακέτα γλώσσας',

	'REMOVE_FROM_STORAGE_FOLDER'		=> 'Αφαίρεση από φάκελο αποθήκευσης',

	'SELECT_DOWNLOAD_FORMAT'	=> 'Επιλέξτε τύπο μεταφόρτωσης',
	'SUBMIT_AND_DOWNLOAD'		=> 'Υποβάλετε και μεταφορτώστε αρχείο',
	'SUBMIT_AND_UPLOAD'			=> 'Υποβάλετε και φορτώστε αρχείο',

	'THOSE_MISSING_LANG_FILES'			=> 'Τα ακόλουθα αρχεία γλώσσας λείπουν από τον φάκελο της γλώσσας %s ',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Οι ακόλουθες μεταβλητές γλώσσας λείπουν από το <strong>%s</strong> πακέτο γλώσσας',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Απεγκατεστημένα πακέτα γλώσσας',

	'UNABLE_TO_WRITE_FILE'		=> 'Το αρχείο δεν μπορεί να αποθηκευθεί στο %s.',
	'UPLOAD_COMPLETED'			=> 'Η φόρτωση ολοκληρώθηκε επιτυχώς.',
	'UPLOAD_FAILED'				=> 'Η φόρτωση απέτυχε για άγνωστους λόγους. ΘΑ χρειαστεί να αντικαταστήσετε το αρχείο χειροκίνητα.',
	'UPLOAD_METHOD'				=> 'Τρόπος φόρτωσης',
	'UPLOAD_SETTINGS'			=> 'Ρυθμίσεις φόρτωσης',

	'WRONG_LANGUAGE_FILE'		=> 'Το επιλεγμένο αρχείο γλώσσας δεν είναι έγκυρο.',
));

?>
