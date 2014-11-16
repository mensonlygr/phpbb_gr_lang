<?php
/** 
*
* acp_bots [Greek - El]
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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'Διαχείριση bots',
	'BOTS_EXPLAIN'		=> 'Τα “Bots”, “spiders” ή αλλιώς “crawlers” είναι αυτόματοι πράκτορες που χρησιμοποιούνται συνήθως από μηχανές αναζήτησης για ενημέρωση των βάσεων τους. Επειδή σπανίως χρησιμοποιούν σωστά τις συνεδρίες μπορούν να παραποιήσουν τις μετρήσεις επισκεπτών, να αυξήσουν την φόρτωση της σελίδας και μερικές φορές αποτυγχάνουν να δημιουργήσουν σωστό ευρετήριο για την σελίδα. Εδώ μπορείτε να καθορίσετε έναν ειδικό τύπο μέλους ώστε να παραλείψετε αυτά τα προβλήματα.',
	'BOT_ACTIVATE'		=> 'Ενεργοποίηση',
	'BOT_ACTIVE'		=> 'Ενεργό Bot',
	'BOT_ADD'			=> 'Προσθήκη bot',
	'BOT_ADDED'			=> 'Επιτυχής προσθήκη νέου bot.',
	'BOT_AGENT'			=> 'Ταυτοποίηση πράκτορα',
	'BOT_AGENT_EXPLAIN'	=> 'Η συμβολοσειρά ταυτοποίησης των πρακτόρων bot, τμηματικές συμβολοσειρές επιτρέπονται.',
	'BOT_DEACTIVATE'	=> 'Απενεργοποίηση',
	'BOT_DELETED'		=> 'Επιτυχής διαγραφή bot.',
	'BOT_EDIT'			=> 'Επεξεργασία bots',
	'BOT_EDIT_EXPLAIN'	=> 'Εδώ μπορείτε να προσθέσετε ή να επεξεργαστείτε μια καταχώρηση bot. Μπορείτε να ορίσετε μια συμβολοσειρά πράκτορα και/ή μια ή περισσότερες διευθύνσεις IP (ή φάσμα διευθύνσεων) για ταυτοποίηση. Να είστε προσεκτικοί όταν τα ορίζετε. Μπορείτε επίσης να ορίσετε ένα στυλ και μια γλώσσα που θα χρησιμοποιούνται από το bot κατά την επίσκεψη του. Αυτό μπορεί να σας βοηθήσεις να μειώσετε το εύρος γραμμής βάζοντας κάποιο απλό στυλ για τα bots. Θυμηθείτε να δώσετε τις απαραίτητες προσβάσεις για την ειδική ομάδα Bot.',
	'BOT_LANG'			=> 'Γλώσσα bot',
	'BOT_LANG_EXPLAIN'	=> 'Η γλώσσα που θα χρησιμοποιεί το bot κατά την περιήγηση στην σελίδα.',
	'BOT_LAST_VISIT'	=> 'Τελευταία επίσκεψη',
	'BOT_IP'			=> 'Διεύθυνση IP bot',
	'BOT_IP_EXPLAIN'	=> 'Τμηματικές διευθύνσεις επιτρέπονται, χωρίστε τες με κόμμα.',
	'BOT_NAME'			=> 'Όνομα bot',
	'BOT_NAME_EXPLAIN'	=> 'Χρησιμοποιείται μόνο για την πληροφόρηση σας.',
	'BOT_NAME_TAKEN'	=> 'Το όνομα είναι ήδη σε χρήση στην κοινότητά σας και χρησιμοποιείται για το bot.',
	'BOT_NEVER'			=> 'Ποτέ',
	'BOT_STYLE'			=> 'Στυλ Bot',
	'BOT_STYLE_EXPLAIN'	=> 'Το στυλ που θα χρησιμοποιείται στην σελίδα από το bot.',
	'BOT_UPDATED'		=> 'Επιτυχής ενημέρωση υπάρχων bot.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'Ο πράκτορας bot που εισάγατε είναι ίδιο με ήδη υπάρχων. Παρακαλώ ρυθμίστε τον πράκτορα για αυτό το bot.',
	'ERR_BOT_NO_IP'				=> 'Η διεύθυνση IP που εισάγατε δεν είναι έγκυρη ή ο κεντρικός υπολογιστής δεν μπόρεσε να βρεθεί.',
	'ERR_BOT_NO_MATCHES'		=> 'Πρέπει να εισάγετε τουλάχιστον έναν πράκτορα ή IP για ταυτοποίηση του bot.',

	'NO_BOT'		=> 'Δεν βρέθηκε bot με την καθορισμένη ταυτότητα.',
	'NO_BOT_GROUP'	=> 'Αδυναμία εύρεσης ειδικής ομάδας bot.',
));

?>
