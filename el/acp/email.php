<?php
/** 
*
* acp_email [Greek - El]
*
* @package language
* @version $Id: email.php 11096 2011-04-10 18:30:16Z git-gate $
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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Εδώ μπορείτε να στείλετε μήνυμα αλληλογραφίας σε όλα τα μέλη ή στα μέλη μιας ομάδας <strong>πού έχουν ενεργοποιημένη την λήψη μηνυμάτων ομαδικής αλληλογραφίας</strong>. Για να επιτύχει αυτό ένα ηλεκτρονικό ταχυδρομείο θα σταλεί από την διεύθυνση ηλεκτρονικού ταχυδρομείου του διαχειριστή που έχετε προσθέσει, ένα τυφλό αντίγραφο (BCC) θα σταλεί σε όλους τους παραλήπτες. Η ρύθμιση προεπιλογής πρόκειται να περιλάβει μόνο 50 παραλήπτες σε ένα τέτοιο ηλεκτρονικό ταχυδρομείο, για περισσότερους παραλήπτες θα σταλούν περισσότερα ηλεκτρονικά ταχυδρομεία. Αν στέλνετε το μήνυμα σε μια μεγάλη ομάδα κάντε υπομονή και μην σταματήσετε την σελίδα κατά την διάρκεια της αποστολής. Είναι λογικό για μια ομαδική αποστολή να πάρει κάποιο χρόνο, θα ενημερωθείτε όταν η διαδικασία ολοκληρωθεί.',
	'ALL_USERS'						=> 'Όλα τα μέλη',

	'COMPOSE'				=> 'Δημιουργία',

	'EMAIL_SEND_ERROR'		=> 'Υπήρχαν ένα ή περισσότερα σφάλματα κατά την αποστολή του μηνύματος αλληλογραφίας. Παρακαλώ ελέγξτε το %sΙστορικό σφαλμάτων%s για περαιτέρω πληροφορίες.',
	'EMAIL_SENT'			=> 'Το μήνυμα εστάλη.',
	'EMAIL_SENT_QUEUE'		=> 'Το μήνυμα αποθηκεύτηκε για αποστολή αργότερα.',

	'LOG_SESSION'			=> 'Το ιστορικό του ηλεκτρονικού ταχυδρομείου έχει καταγραφεί στο ιστορικό-σφαλμάτων',

	'SEND_IMMEDIATELY'		=> 'Άμεση αποστολή',
	'SEND_TO_GROUP'			=> 'Αποστολή σε ομάδα',
	'SEND_TO_USERS'			=> 'Αποστολή σε μέλη',
	'SEND_TO_USERS_EXPLAIN'	=> 'Προσθέτοντας ονόματα αναιρείτε την επιλογή κάποιας ομάδας που κάνατε παραπάνω. Προσθέστε κάθε όνομα σε καινούργια γραμμή.',

	'MAIL_BANNED'			=> 'Ηλεκτρονικό ταχυδρομείο αποκλεισμένων μελών',
	'MAIL_BANNED_EXPLAIN'	=> 'Μόλις στέλνετε ένα μαζικό ηλεκτρονικό ταχυδρομείο σε μια ομάδα  εδώ μπορείτε να επιλέξετε εάν το ηλεκτρονικό ταχυδρομείο αποσταλεί και στα αποκλεισμένα μέλη.',	
	'MAIL_HIGH_PRIORITY'	=> 'Μέγιστη',
	'MAIL_LOW_PRIORITY'		=> 'Χαμηλή',
	'MAIL_NORMAL_PRIORITY'	=> 'Κανονική',
	'MAIL_PRIORITY'			=> 'Προτεραιότητα μηνύματος αλληλογραφίας',
	'MASS_MESSAGE'			=> 'Το μήνυμα σας',
	'MASS_MESSAGE_EXPLAIN'	=> 'Σημειώστε ότι μπορείτε να γράψετε μόνο απλό κείμενο. Οτιδήποτε άλλο θα αφαιρεθεί πριν την αποστολή.',
	
	'NO_EMAIL_MESSAGE'		=> 'Πρέπει να εισάγετε κάποιο κείμενο.',
	'NO_EMAIL_SUBJECT'		=> 'Πρέπει να εισάγετε κάποιο θέμα μηνύματος.',
));

?>
