<?php
/** 
*
* acp_prune [Greek - El]
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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Άυτο τμήμα σας επιτρέπει να διαγράψετε (ή να απενεργοποιήσετε) τα μέλη από την Δ. Συζήτησή σας. Αυτό μπορεί να γίνει με ποικίλους τρόπους από τον αριθμό δημοσιεύσεων, την τελευταία δραστηριότητα, κ.λ.π κάθε ένα σε χωριστή γραμμή. Κάθε ένα από αυτά τα κριτήρια μπορεί να συνδυαστεί, έτσι ώστε μπορείτε να διαγράψετε μέλη με τελευταία ενέργεια πριν από το 2002-01-01 και λιγότερες από 10 δημοσιεύσεις. Εναλλακτικά μπορείτε να εισαγάγετε έναν κατάλογο μελών άμεσα στο κουτί κειμένου, τα άλλα κριτήρια θα αγνοηθούν. Να είστε προσεκτικοί με αυτή την λειτουργία! Μόλις διαγραφεί ένα μέλος δεν υπάρχει δυνατότητα επαναφοράς.',
	
	'DEACTIVATE_DELETE'			=> 'Απενεργοποιήστε ή διαγράψτε',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Επιλέξτε είτε να απενεργοποιήσετε τα μέλη είτε να τα διαγράψετε εξ ολοκλήρου. Σημειώστε ότι δεν υπάρχει καμία λειτουργία, προκειμένου να ακυρωθεί η διαδικασία!',
	'DELETE_USERS'				=> 'Διαγραφή',
	'DELETE_USER_POSTS'			=> 'Διαγραφή δημοσιεύσεων του μέλους',
	'DELETE_USER_POSTS_EXPLAIN' => 'Αφαιρεί τις δημοσιεύσεις που γίνει από τα διαγραμμένα μέλη δεν έχει καμία επίδραση εάν τα μέλη απενεργοποιούνται.',

	'JOINED_EXPLAIN'			=> 'Δώστε μια ημερομηνία με την μορφή <kbd>YYYY-MM-DD</kbd>.',
	
	'LAST_ACTIVE_EXPLAIN'		=> 'Δώστε μια ημερομηνία με <kbd>YYYY-MM-DD</kbd> μορφή. Προσθέστε <kbd>0000-00-00</kbd> για διαγραφή των μελών που δεν έχουν συνδεθεί ποτέ, οι προυποθέσεις <em>Πριν</em> και <em>Μετά</em> θα αγνοηθούν.',

	'LAST_ACTIVE_EXPLAIN'		=> 'Δώστε μια ημερομηνία με την μορφή <kbd>YYYY-MM-DD</kbd>.',

	'PRUNE_USERS_LIST'				=> 'Μέλη που διαγράφονται',
	'PRUNE_USERS_LIST_DELETE'		=> 'Με τα επιλεγμένα κριτήρια θα διαγραφούν τα ακόλουθα μέλη.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'Με τα επιλεγμένα κριτήρια θα απενεργοποιηθούν τα ακόλουθα μέλη.',

	'SELECT_USERS_EXPLAIN'		=> 'Καθορίστε τα ονόματα μελών εδώ, τα ποιο πάνω κριτήρια θα αγνοηθούν. Ιδρυτές δεν μπορούν να σβηστούν.',

	'USER_DEACTIVATE_SUCCESS'	=> 'Τα καθορισμένα μέλη έχουν απενεργοποιηθεί επιτυχώς.',
	'USER_DELETE_SUCCESS'		=> 'Τα καθορισμένα μέλη έχουν διαγραφεί επιτυχώς.',
	'USER_PRUNE_FAILURE'		=> 'Δεν βρέθηκαν μέλη με τα καθορισμένα κριτήρια.',

	'WRONG_ACTIVE_JOINED_DATE'	=> 'Η ημερομηνία που εισάγεται είναι λάθος, αναμένεται με το σχήμα <kbd>YYYY-MM-DD</kbd>.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Αυτή η λειτουργία θα διαγράψει θέματα στα οποία δεν υπάρχουν δημοσιεύσεις ή δεν έχουν αναγνωστεί μέσα στο χρονικό όριο που εσείς έχετε ορίσει. Εάν δεν καθορίσετε ένα χρονικό όριο όλα τα θέματα θα διαγραφούν. Εξ ορισμού, δεν θα αφαιρέσει θέματα στα οποία υπάρχουν δημοψηφίσματα ακόμη, ούτε θα αφαιρέσει σημειώσεις και ανακοινώσεις.',

	'FORUM_PRUNE'		=> 'Διαγραφή μη ενεργών θεμάτων',

	'NO_PRUNE'			=> 'Σε καμία Δ. Συζήτηση δεν διαγράφτηκαν θέματα.',

	'SELECTED_FORUM'	=> 'Επιλέξτε Δ Συζήτηση',
	'SELECTED_FORUMS'	=> 'Επιλέξτε Δ. Συζητήσεις',

	'POSTS_PRUNED'					=> 'Δημοσιεύσεις που διαγράφονται ',
	'PRUNE_ANNOUNCEMENTS'			=> 'Διαγραφή ανακοινώσεων',
	'PRUNE_FINISHED_POLLS'			=> 'Διαγραφή κλεισμένων δημοψηφισμάτων',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Διαγραφή θεμάτων με δημοσιεύσεις που έχουν τελειώσει.',
	'PRUNE_FORUM_CONFIRM'			=> 'Είστε βέβαιοι εσείς θέλετε το διαγράψετε τις επιλεγμένες Δ. Συζητήσεις με τις τοποθετήσεις που καθορίστηκαν; Δεν υπάρχει καμία δυνατότητα να επαναφέρετε θέματα και δημοσιεύσεις που έχουν διαγραφεί.',
	'PRUNE_NOT_POSTED'				=> 'Ημέρες από την τελευταία δημοσίευση',
	'PRUNE_NOT_VIEWED'				=> 'Ημέρες από την τελευταία προβολή',
	'PRUNE_OLD_POLLS'				=> 'Διαγραφή παλιών δημοψηφισμάτων',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Αφαιρεί τα θέματα με τα δημοψηφίσματα που δεν έχουν ψήφους μέσα σε αυτό το χρονικό όριο.',
	'PRUNE_STICKY'					=> 'Διαγραφή σημειώσεων',
	'PRUNE_SUCCESS'					=> 'Η διαγραφή μη ενεργών θεμάτων έγινε επιτυχώς.',

	'TOPICS_PRUNED'		=> 'Το θέμα έχει διαγραφή',
));

?>
