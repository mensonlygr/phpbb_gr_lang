<?php
/**
*
* acp_users [Greek - El]
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
	'ADMIN_SIG_PREVIEW'		=> 'Προεπισκόπιση Υπογραφής',
	'AT_LEAST_ONE_FOUNDER'	=> 'Δεν είστε ικανοί να αλλάξετε αυτόν τον ιδρυτή σε ένα κανονικό μέλος. Πρέπει να είναι τουλάχιστον ένας ιδρυτής που διαχειρίζεται αυτή την Δ. Συζήτηση. Εάν θέλετε να αλλάξετε σε αυτή την Δ. Συζήτηση τον ιδρυτή, πρέπει πρώτα να δώσετε σε ένα άλλο μέλος την ιδιότητα του ιδρυτή.',

	'BAN_ALREADY_ENTERED'	=> 'Η λίστα απαγόρευσης έγινε προηγουμένως επιτυχώς. Η λίστα απαγόρευσης δεν έχει ενημερωθεί.',
	'BAN_SUCCESSFUL'		=> 'Η λίστα απαγόρευσης ενημερώθηκε επιτυχώς.',
	
	'CANNOT_BAN_ANONYMOUS'			=> 'Δεν μπορείτε να απαγορεύσετε τον λογαριασμό του anonymous. Τα δικαιώματα για τους anonymous χρήστες μπορούν να τεθούν στην καρτέλα των προσβάσεων.',
	'CANNOT_BAN_FOUNDER'			=> 'Δεν μπορείτε να απαγορεύσετε τον λογαριασμό του ιδρυτή.',
	'CANNOT_BAN_YOURSELF'			=> 'Δεν μπορείτε να απαγορεύσετε τον εαυτό σας.',
	'CANNOT_DEACTIVATE_BOT'			=> 'Δεν μπορείτε να απενεργοποιήσετε bot λογαριασμούς. Απενεργοποιήστε την στατική διεύθυνση του bot μέσα στην σελίδα.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'Δεν σας επιτρέπετε να απενεργοποιήσετε τον λογαριασμό του ιδρυτή.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Δεν μπορείτε να απενεργοποιήσετε τον δικό σας λογαριασμό.',
	'CANNOT_FORCE_REACT_BOT'		=> 'Δεν σας επιτρέπετε να απενεργοποιήσετε bot λογαριασμούς. Παρακαλώ επανενεργοποιήστε την στατική διεύθυνση του bot μέσα στην σελίδα.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Δεν σας επιτρέπετε να επιβάλετε τον ιδρυτή να κάνει επανενεργοποίηση του λογαριασμού.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Δεν σας επιτρέπετε να επιβάλετε τον εαυτό σας να επανενεργοποιήσετε τον λογαριασμό.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'Δεν μπορείτε να διαγράψετε τον λογαριασμό του επισκέπτη.',
	'CANNOT_REMOVE_YOURSELF'		=> 'Δεν μπορείτε να διαγράψετε τον λογαριασμό σας.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'Δεν μπορείτε να προάγετε σε ιδρυτές, χρήστες που είναι σε αγνόηση.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Πρέπει να ενεργοποιήσετε τον λογαριασμό των μελών πριν τους μετατρέψετε σε ιδρυτές, μόνο ενεργοποιημένα μέλη μπορούν να μετατραπούν.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'Πρέπει να προστεθεί, μόνο εάν εσείς αλλάξετε και την διεύθυνση του ηλεκτρονικού ταχυδρομείου.',

	'DELETE_POSTS'			=> 'Διαγραφή δημοσιεύσεων',
	'DELETE_USER'			=> 'Διαγραφή μελών',
	'DELETE_USER_EXPLAIN'	=> 'Παρακαλώ σημειώστε η διαγραφή μελών είναι οριστική, και δεν μπορεί να γίνει επαναφορά.',

	'FORCE_REACTIVATION_SUCCESS'	=> 'Η επανενεργοποίηση επιβλήθηκε επιτυχώς.',
	'FOUNDER'						=> 'Ιδρυτής',
	'FOUNDER_EXPLAIN'				=> 'Η ιδρυτές έχουν όλα τα δικαιώματα διαχείρισης και δεν μπορούν ποτέ να αποκλειστούν, διαγραφούν ή να αλλάξουν.',

	'GROUP_APPROVE'					=> 'Έγκριση μελών',
	'GROUP_DEFAULT'					=> 'Δημιουργήστε την ομάδα προεπιλογής των μελών',
	'GROUP_DELETE'					=> 'Διαγραφή μέλους από την ομάδα',
	'GROUP_DEMOTE'					=> 'Διορίστε αρχηγό ομάδας',
	'GROUP_PROMOTE'					=> 'Προαγωγή σε αρχηγό ομάδας',

	'IP_WHOIS_FOR'			=> 'Αναζήτηση για διεύθυνση IP %s',

	'LAST_ACTIVE'			=> 'Τελευταία επίσκεψη',

	'MOVE_POSTS_EXPLAIN'	=> 'Παρακαλώ επιλέξτε την Δ. Συζήτηση που επιθυμείτε να μετακινήσετε τις δημοσιεύσεις του μέλους.',

	'NO_SPECIAL_RANK'		=> 'Δεν έχει οριστεί ειδικός βαθμός',
	'NO_WARNINGS'			=> 'Καμία προειδοποίηση.',
	'NOT_MANAGE_FOUNDER'	=> 'Προσπαθείτε να διαχειριστείτε την ιδιότητα ενός ιδρυτή. Μόνο ιδρυτές μπορούν να διαχειριστούν άλλους ιδρυτές.',

	'QUICK_TOOLS'			=> 'Γρήγορη επιλογή',

	'REGISTERED'			=> 'Εγγεγραμμένος',
	'REGISTERED_IP'			=> 'Έχει εγγραφή από την IP/Διεύθυνση',
	'RETAIN_POSTS'			=> 'Διατήρηση δημοσιεύσεων',

	'SELECT_FORM'			=> 'Επιλογή φόρμας',
	'SELECT_USER'			=> 'Επιλογή μέλους',

	'USER_ADMIN'					=> 'Διαχείριση Μέλους',
	'USER_ADMIN_ACTIVATE'			=> 'Ενεργοποίηση λογαριασμού',
	'USER_ADMIN_ACTIVATED'			=> 'Η ενεργοποίηση του λογαριασμού μέλους έγινε επιτυχώς.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'Η διαγραφή του άβαταρ από τον λογαριασμό του μέλους έγινε επιτυχώς.',
	'USER_ADMIN_BAN_EMAIL'			=> 'Απαγόρευση μέσω ηλεκτρονικού ταχυδρομείου',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'Απαγόρευση της διεύθυνσης ηλεκτρονικού ταχυδρομείου από την διαχείριση του μέλους',
	'USER_ADMIN_BAN_IP'				=> 'Απαγόρευση μέσω IP',
	'USER_ADMIN_BAN_IP_REASON'		=> 'IP απαγόρευση από την διαχείριση του μέλους',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Όνομα μέλους απαγόρευση από την διαχείριση του μέλους',
	'USER_ADMIN_BAN_USER'			=> 'Απαγόρευση μέσω όνομα μέλους',
	'USER_ADMIN_DEACTIVATE'			=> 'Απενεργοποιήστε μέλος',
	'USER_ADMIN_DEACTIVED'			=> 'Η απενεργοποίηση του μέλους έγινε επιτυχώς.',
	'USER_ADMIN_DEL_ATTACH'			=> 'Διαγραφή όλων των συνημμένων',
	'USER_ADMIN_DEL_AVATAR'			=> 'Διαγραφή άβαταρ',
	'USER_ADMIN_DEL_OUTBOX'			=> 'Άδειασμα ΠΜ εξερχόμενα',
	'USER_ADMIN_DEL_POSTS'			=> 'Διαγραφή όλων των δημοσιεύσεων',
	'USER_ADMIN_DEL_SIG'			=> 'Διαγραφή υπογραφή',
	'USER_ADMIN_EXPLAIN'			=> 'Εδώ μπορείτε να διαχειριστείτε τα στοιχεία κάποιου μέλους και να αλλάξετε κάποιες ρυθμίσεις..',
	'USER_ADMIN_FORCE'				=> 'Επιβολή επανενεργοποίησης',
	'USER_ADMIN_LEAVE_NR'			=> 'Διαγραφή από τα πρόσφατα εγγεγραμμένα',
	'USER_ADMIN_MOVE_POSTS'			=> 'Μετακίνηση όλων των δημοσιεύσεων',
	'USER_ADMIN_SIG_REMOVED'		=> 'Η υπογραφή από τον λογαριασμό του μέλους διαγράφτηκε επιτυχώς.',
	'USER_ATTACHMENTS_REMOVED'		=> 'Τα συνημμένα που δημιουργήθηκαν από το μέλος διαγράφτηκαν επιτυχώς.',
	'USER_AVATAR_NOT_ALLOWED'		=> 'Το άβαταρ δεν μπορεί να επιδειχθεί επειδή τα άβαταρ έχουν απαγορευθεί.',
	'USER_AVATAR_UPDATED'			=> 'Η λεπτομέρειες του άβαταρ μέλους ενημερώθηκαν επιτυχώς.',
	'USER_AVATAR_TYPE_NOT_ALLOWED'	=> 'Το τρέχον αβατάρ δεν μπορεί να επιδειχθεί επειδή ο τύπος έχει απογορευθεί.',

	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Καθορισμένοι από το μέλος τομείς προφίλ',
	'USER_DELETED'					=> 'Η διαγραφή μέλους έγινε επιτυχώς.',
	'USER_GROUP_ADD'				=> 'Προσθέστε μέλος σε ομάδα',
	'USER_GROUP_NORMAL'				=> 'Καθορισμένες ομάδες, στις οποίες το μέλος ανήκει',
	'USER_GROUP_PENDING'			=> 'Ομάδες από τις οποίες το μέλος περιμένει αποδοχή',
	'USER_GROUP_SPECIAL'			=> 'Καθορισμένη ομάδα στην οποία ανήκει το μέλος',
	'USER_LIFTED_NR'				=> 'Επιτυχής διαγραφή του μέλουςâ€™s από το πρόσφατο εγγεγραμμένο κατάσταση.',
	'USER_NO_ATTACHMENTS'			=> 'Δεν υπάρχει κανένα συνημμένο αρχείο για εμφάνιση.',
	'USER_OUTBOX_EMPTIED'			=> 'Με επιτυχία άδειασαν τα εξερχόμενα προσωπικά μηνύματα του μέλους.',
	'USER_OUTBOX_EMPTY'				=> 'Τα εξερχόμενα προσωπικά μηνύματα τους μέλους έχουν ήδη αδειάσει.',
	'USER_OVERVIEW_UPDATED'			=> 'Οι πληροφορίες του μέλους ενημερώθηκαν.',
	'USER_POSTS_DELETED'			=> 'Με επιτυχία διαγράφτηκαν οι δημοσιεύσεις που δημιουργήθηκαν από αυτό το μέλος.',
	'USER_POSTS_MOVED'				=> 'Με επιτυχία μετακινήθηκαν οι δημοσιεύσεις του μέλους στην συγκεκριμένη Δ. Συζήτηση.',
	'USER_PREFS_UPDATED'			=> 'Η ρυθμίσεις του μέλους ενημερώθηκαν επιτυχώς.',
	'USER_PROFILE'					=> 'Μέλους προφίλ',
	'USER_PROFILE_UPDATED'			=> 'Το προφίλ του μέλους ενημερώθηκε.',
	'USER_RANK'						=> 'Βαθμός μέλους',
	'USER_RANK_UPDATED'				=> 'Ενημέρωση βαθμού μέλους.',
	'USER_SIG_UPDATED'				=> 'Η υπογραφή του μέλους ενημερώθηκε επιτυχώς.',
	'USER_WARNING_LOG_DELETED'		=> 'Καμία πληροφορία διαθέσιμα. Πιθανόν οι καταχωρήσεις στο ιστορικό έχουν διαγραφεί.',	
	'USER_TOOLS'					=> 'Βασικά εργαλεία',
));

?>