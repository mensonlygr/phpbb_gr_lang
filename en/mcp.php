<?php
/**
*
* mcp [Greek - El]
*
* @package language
* @version $Id: permissions.php 11617 2011-12-08 21:30:13Z git-gate $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Ελληνική μετάφραση από την ομάδα του phpbbgr.com με πιθανές μετατροπές από mens-only.gr:
* (http://phpbbgr.com/team/)
*
/**

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
	'ACTION'				=> 'Ενέργεια',
	'ACTION_NOTE'			=> 'Ενέργεια /Σημείωση',
	'ADD_FEEDBACK'		=> 'Προσθήκη Ανατροφοδότησης',
	'ADD_FEEDBACK_EXPLAIN'	=> 'Εάν θα επιθυμούσατε να προσθέσετε μια αναφορά σχετικά με αυτό παρακαλώ συμπληρώστε την ακόλουθη φόρμα. Χρησιμοποιήστε μόνο απλό κείμενο, HTML, BBCode, κ.λπ. δεν επιτρέπονται.',
	'ADD_WARNING'		=> 'Προσθέστε προειδοποίηση',
	'ADD_WARNING_EXPLAIN'	=> 'Για να στείλετε μια προειδοποίηση σε αυτό το μέλος παρακαλώ συμπληρώστε την ακόλουθη φόρμα. Χρησιμοποιήστε μόνο σαφές κείμενο, HTML, BBCode, κ.λπ. δεν επιτρέπονται.',
	'ALL_ENTRIES'			=> 'Όλες οι εγγραφές',
	'ALL_NOTES_DELETED'	=> 'Επιτυχή διαγραφή όλων των σημειώσεων των μελών.',
	'ALL_REPORTS'			=> 'Όλες οι αναφορές',
	'ALREADY_REPORTED'	=> 'Αυτής η δημοσίευσης έχει ήδη αναφερθεί.',
	'ALREADY_REPORTED_PM'	=> 'Αυτό το προσωπικό μήνυμα έχει ήδη αναφερθεί.',
	'ALREADY_WARNED'		=> 'Για αυτήν την δημοσίευση ήδη έχει σταλεί μια προειδοποίηση.',
	'APPROVE'				=> 'Έγκριση',
	'APPROVE_POST'			=> 'Έγκριση δημοσίευσης',
	'APPROVE_POST_CONFIRM'	=> 'Είναι σίγουρο ότι θέλετε να εγκρίνετε αυτή την δημοσίευση;',
	'APPROVE_POSTS'			=> 'Έγκριση δημοσιεύσεων',
	'APPROVE_POSTS_CONFIRM'	=> 'Είστε σίγουρος ότι θέλετε να εγκρίνετε τις επιλεγμένες δημοσιεύσεις;',
	'APPROVE_TOPIC'			=> 'Έγκριση θέματος',
	'APPROVE_TOPIC_CONFIRM'	=> 'Είναι σίγουρο ότι θέλετε να εγκρίνετε αυτό το θέμα;',
	'APPROVE_TOPICS'			=> 'Έγκριση θεμάτων',
	'APPROVE_TOPICS_CONFIRM'	=> 'Είναι σίγουρο ότι θέλετε να εγκρίνετε τα επιλεγμένα θέματα;',

	'CANNOT_MOVE_SAME_FORUM'	=> 'Δεν μπορείτε να μετακινήσετε το θέμα στη Δ. Συζήτηση στην οποία  ήδη βρίσκετε.',
	'CANNOT_WARN_ANONYMOUS'	=> 'Δεν μπορείτε να προειδοποιήσετε μη εγγεγραμμένα μέλη και επισκέπτες.',
	'CANNOT_WARN_SELF'		=> 'Δεν μπορείτε να προειδοποιήσετε τον εαυτό σας.',
	'CAN_LEAVE_BLANK'			=> 'Αυτό μπορεί να αφεθεί κενό.',
	'CHANGE_POSTER'			=> 'Αλλαγή συγγραφέα',
	'CLOSE_PM_REPORT'			=> 'Κλείσιμο αναφοράς ΠΜ',
	'CLOSE_PM_REPORT_CONFIRM'	=> 'Είναι σίγουρο ότι θέλετε να κλείσετε την επιλεγμένη αναφορά ΠΜ;',
	'CLOSE_PM_REPORTS'		=> 'Κλείσιμο αναφορών ΠΜ',
	'CLOSE_PM_REPORTS_CONFIRM'=> 'Είναι σίγουρο ότι θέλετε να κλείσετε τις επιλεγμένες αναφορές ΠΜ;',
	'CLOSE_REPORT'			=> 'Κλείσιμο αναφοράς',
	'CLOSE_REPORT_CONFIRM'	=> 'Είναι σίγουρο ότι θέλετε να κλείσετε την επιλεγμένη αναφορά;',
	'CLOSE_REPORTS'			=> 'Κλείσιμο αναφορών',
	'CLOSE_REPORTS_CONFIRM'	=> 'Είναι σίγουρο ότι θέλετε να κλείσετε τις επιλεγμένες αναφορές;',

	'DELETE_PM_REPORT'			=> 'Διαγραφή αναφοράς ΠΜ',
	'DELETE_PM_REPORT_CONFIRM'		=> 'Είναι σίγουρο ότι θέλετε να διαγράψετε την επιλεγμένη αναφορά ΠΜ;',
	'DELETE_PM_REPORTS'			=> 'Διαγραφή αναφορών ΠΜ',
	'DELETE_PM_REPORTS_CONFIRM'	=> 'Είναι σίγουρο ότι θέλετε να διαγράψετε τις επιλεγμένες αναφορές ΠΜ;',
	'DELETE_POSTS'				=> 'Διαγραφή δημοσιεύσεων',
	'DELETE_REPORT'				=> 'Διαγραφή αναφοράς',
	'DELETE_REPORT_CONFIRM'		=> 'Είναι σίγουρο ότι θέλετε να διαγράψετε την επιλεγμένη αναφορά;',
	'DELETE_REPORTS'			=> 'Διαγραφή αναφορών',
	'DELETE_REPORTS_CONFIRM'	=> 'Είναι σίγουρο ότι θέλετε να διαγράψετε τις επιλεγμένες αναφορές;',
	'DELETE_SHADOW_TOPIC'		=> 'Διαγραφή  σκιάς θέματος',
	'DELETE_TOPICS'			=> 'Διαγραφή επιλεγμένων θεμάτων',
	'DISAPPROVE'				=> 'Απόρριψη',
	'DISAPPROVE_REASON'		=> 'Αιτία απόρριψης',
	'DISAPPROVE_POST'			=> 'Απόρριψη δημοσίευσης',
	'DISAPPROVE_POST_CONFIRM'	=> 'Are you sure you want to disapprove this post?',
	'DISAPPROVE_POSTS'		=> 'Disapprove posts',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Είναι σίγουρο ότι θέλετε να απορρίψετε αυτήν την δημοσίευση;',
	'DISPLAY_LOG'				=> 'Εμφάνιση ιστορικού',
	'DISPLAY_OPTIONS'			=> 'Εμφάνιση επιλογών',

	'EMPTY_REPORT'				=> 'Για αυτήν την αιτία πρέπει να προσθέσετε μια περιγραφή.',
	'EMPTY_TOPICS_REMOVED_WARNING'=> 'Ένα ή περισσότερα θέματα έχουν διαγραφεί από την βάση, επειδή δεν υπήρχε πλέον καμία δημοσίευση σε μία ή κάποιες από αυτές.',

	'FEEDBACK'			=> 'Ανατροφοδότηση',
	'FORK'				=> 'Αντιγραφή',
	'FORK_TOPIC'			=> 'Αντιγραφή δημοσίευσης',
	'FORK_TOPIC_CONFIRM'	=> 'Είναι σίγουρο ότι θέλετε να αντιγράψετε αυτήν την δημοσίευση;',
	'FORK_TOPICS'			=> 'Αντιγραφή επιλεγμένων θεμάτων',
	'FORK_TOPICS_CONFIRM'	=> 'Είναι σίγουρο ότι θέλετε να αντιγράψετε τα επιλεγμένα θέματα;',
	'FORUM_DESC'			=> 'Περιγραφή',
	'FORUM_NAME'			=> 'Όνομα Δ. Συζήτησης',
	'FORUM_NOT_EXIST'		=> 'Η Δ. Συζήτηση που επιλέξατε δεν υπάρχει',
	'FORUM_NOT_POSTABLE'	=> 'Στην επιλεγμένη Δ. Συζήτηση δεν μπορεί να δημιουργηθεί καμία δημοσίευση.',
	'FORUM_STATUS'		=> 'Κατάσταση Δ. Συζήτησης',
	'FORUM_STYLE'			=> 'Στυλ Δ. Συζήτησης',

	'GLOBAL_ANNOUNCEMENT'=> 'Καθολική ανακοίνωση',

	'IP_INFO'				=> 'Πληροφορίες διεύθυνσης IP',
	'IPS_POSTED_FROM'		=> 'IP διεύθυνση από την οποία το μέλος έχει κάνει δημοσιεύσεις',

	'LATEST_LOGS'				=> 'Τελευταίες 5 καταγεγραμμένες ενέργειες',
	'LATEST_REPORTED'			=> 'Τελευταίες 5 αναφορές',
	'LATEST_REPORTED_PMS'		=> 'Τελευταίες 5 αναφορές ΠΜ',
	'LATEST_UNAPPROVED'		=> 'Τελευταίες 5 δημοσιεύσεις που περιμένουν έγκριση',
	'LATEST_WARNING_TIME'		=> 'Τελευταίες προειδοποίησοις που εκδόθηκαν',
	'LATEST_WARNINGS'			=> 'Τελευταίες 5 προειδοποιήσεις',
	'LEAVE_SHADOW'			=> 'Άφησε μία σκιά της Δ. Συζήτηση στην θέση της.',
	'LIST_REPORTS'				=> array(
		1	=> '%d αναφορά',
		2	=> '%d αναφορές',
	),
	'LOCK'						=> 'Κλείδωμα',
	'LOCK_POST_POST'			=> 'Κλείδωμα δημοσίευσης',
	'LOCK_POST_POST_CONFIRM'	=> 'Είναι σίγουρο ότι θέλετε να αποτρέψετε την επεξεργασία αυτής της δημοσίευσης;',
	'LOCK_POST_POSTS'			=> 'Κλείδωμα επιλεγμένων δημοσιεύσεων',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Είναι σίγουρο ότι θέλετε να αποτρέψετε την επεξεργασία των επιλεγμένων δημοσιεύσεων;',
	'LOCK_TOPIC_CONFIRM'		=> 'Είναι σίγουρο ότι θέλετε να κλειδώσετε αυτό το θέμα;',
	'LOCK_TOPICS'				=> 'Κλείδωμα επιλεγμένων θεμάτων',
	'LOCK_TOPICS_CONFIRM'		=> 'Είναι σίγουρο ότι θέλετε να κλειδώσετε τα επιλεγμένα θέματα;',
	'LOGS_CURRENT_TOPIC'		=> 'Τρέχων ιστορικό από:',
	'LOGIN_EXPLAIN_MCP'		=> 'Για να συντονιστείτε αυτή την Δ. Συζήτηση πρέπει να συνδεθείτε..',
	'LOGVIEW_VIEWTOPIC'		=> 'Προβολή θέματος',
	'LOGVIEW_VIEWLOGS'		=> 'Προβολή ιστορικού θέματος',
	'LOGVIEW_VIEWFORUM'		=> 'Προβολή Δ. Συζήτησης',
	'LOOKUP_ALL'				=> 'Διερεύνηση όλων των IPs',
	'LOOKUP_IP'				=> 'Διερεύνηση της IP',

	'MARKED_NOTES_DELETED'	=> 'Οι επιλεγμένες σημειώσεις των μελών διαγράφτηκαν με επιτυχία.',

	'MCP_ADD'				=> 'Προσθέστε μια προειδοποίηση',

	'MCP_BAN'				=> 'Απαγόρευση',
	'MCP_BAN_EMAILS'			=> 'Απαγόρευση ηλεκτρονικών ταχυδρομείων',
	'MCP_BAN_IPS'				=> 'Απαγόρευση IPs',
	'MCP_BAN_USERNAMES'		=> 'Απαγόρευση ονομάτων μελών',

	'MCP_LOGS'				=> 'Ιστορικό συντονιστών',
	'MCP_LOGS_FRONT'			=> 'Κύρια σελίδα',
	'MCP_LOGS_FORUM_VIEW'		=> 'Ιστορικό Δ. Συζήτησης',
	'MCP_LOGS_TOPIC_VIEW'		=> 'Ιστορικό θέματος',

	'MCP_MAIN'				=> 'Κυρίως',
	'MCP_MAIN_FORUM_VIEW'		=> 'Προβολή Δ. Συζήτησης',
	'MCP_MAIN_FRONT'			=> 'Κύρια',
	'MCP_MAIN_POST_DETAILS'	=> 'Λεπτομέρειες δημοσίευσης',
	'MCP_MAIN_TOPIC_VIEW'		=> 'Προβολή θέματος',
	'MCP_MAKE_ANNOUNCEMENT'	=> 'Μετατροπή σε “Ανακοίνωση”',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'Είναι σίγουρο ότι θέλετε να μετατρέψετε αυτό το θέμα σε “Ανακοίνωση”;',
	'MCP_MAKE_ANNOUNCEMENTS'			=> 'Μετατροπή σε “Ανακοινώσεις”',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'	=> 'Είναι σίγουρο ότι θέλετε να μετατρέψετε τα επιλεγμένα θέματα σε “Ανακοινώσεις”;',
	'MCP_MAKE_GLOBAL'				=> 'Μετατροπή σε “καθολική ανακοίνωση”',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'Είναι σίγουρο ότι θέλετε να μετατρέψετε αυτό το θέμα σε “καθολική ανακοίνωση”;',
	'MCP_MAKE_GLOBALS'			=> 'Μετατροπή σε “καθολικές Ανακοινώσεις”',
	'MCP_MAKE_GLOBALS_CONFIRM'	=> 'Είναι σίγουρο ότι θέλετε να μετατρέψετε τα επιλεγμένα θέματα σε “καθολικές ανακοινώσεις”;',
	'MCP_MAKE_STICKY'				=> 'Μετατροπή σε “Σημείωση”',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'Είναι σίγουρο ότι θέλετε να μετατρέψετε αυτό το θέμα σε “Σημείωση”;',
	'MCP_MAKE_STICKIES'			=> 'Μετατροπή σε “Σημειώσεις”',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'Είναι σίγουρο ότι θέλετε να μετατρέψετε τα επιλεγμένα θέματα σε “Σημειώσεις”;',
	'MCP_MAKE_NORMAL'			=> 'Μετατροπή σε “Τυπικό Θέμα”',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'Είναι σίγουρο ότι θέλετε να μετατρέψετε αυτό το θέμα σε “Τυπικό Θέμα”;',
	'MCP_MAKE_NORMALS'			=> 'Μετατροπή σε “Τυπικά Θέματα”',
	'MCP_MAKE_NORMALS_CONFIRM'	=> 'Είναι σίγουρο ότι θέλετε να μετατρέψετε τα επιλεγμένα θέματα σε “Τυπικά Θέματα”;',

	'MCP_NOTES'					=> 'Σημειώσεις μελών',
	'MCP_NOTES_FRONT'				=> 'Κύρια σελίδα',
	'MCP_NOTES_USER'				=> 'Λεπτομέρειες μέλους',

	'MCP_POST_REPORTS'			=> 'Υπάρχει μια αναφορά για αυτή την δημοσίευση',

	'MCP_PM_REPORTS'				=> 'Αναφερόμενα ΠΜ',
	'MCP_PM_REPORT_DETAILS'		=> 'Λεπτομέρειες αναφοράς ΠΜ',
	'MCP_PM_REPORTS_CLOSED'		=> 'Κλεισμένες αναφορές ΠΜ',
	'MCP_PM_REPORTS_CLOSED_EXPLAIN'	=> 'Αυτή είναι μια λίστα με όλες τις αναφορές σχετικά με τα προσωπικά μηνύματα τα οποία προηγουμένως είχαν λυθεί.',
	'MCP_PM_REPORTS_OPEN'			=> 'Ανοιχτές αναφορές ΠΜ',
	'MCP_PM_REPORTS_OPEN_EXPLAIN'	=> 'Αυτή είναι μια λίστα με όλες τις αναφορές σχετικά με τα προσωπικά μηνύματα τα οποία δεν έχουν λυθεί.',

	'MCP_REPORTS'					=> 'Αναφερόμενα μηνύματα',
	'MCP_REPORT_DETAILS'			=> 'Λεπτομέρειες αναφοράς',
	'MCP_REPORTS_CLOSED'			=> 'Κλειστές αναφορές',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'Αυτή είναι μια λίστα αναφορών όλων των δημοσιεύσεων που ήδη έχουν κλείσει.',
	'MCP_REPORTS_OPEN'			=> 'Ανοίξτε αναφορές',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'Αυτή είναι μια λίστα αναφορών όλων των δημοσιεύσεων που είναι ακόμη ανοιχτές.',

	'MCP_QUEUE'							=> 'Λίστα αναμονής Συντονιστών',
	'MCP_QUEUE_APPROVE_DETAILS'			=> 'Λεπτομέρειες έγκρισης',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Δημοσιεύσεις που βρίσκονται προς έγκριση',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'Αυτή είναι μια λίστα όλων των δημοσιεύσεων που πρέπει να εγκριθούν πριν γίνουν ορατές στα μέλη.',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'Θέματα που βρίσκονται προς έγκριση',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'Αυτή είναι μια λίστα όλων των θεμάτων που πρέπει να εγκριθούν πριν γίνουν ορατά στα μέλη.',
	'MCP_QUEUE_DELETED_POSTS'				=> 'Διαγραμμένες δημοσιεύσεις',
	'MCP_QUEUE_DELETED_POSTS_EXPLAIN'		=> 'Αυτή είναι μια λίστα με όλες τις ψεύδο διαγραμμένες δημοσιεύσεις. Από εδώ μπορείτε να επαναφέρετε ή να διαγράψετε οριστικά αυτές τις δημοσιεύσεις.',
	'MCP_QUEUE_DELETED_TOPICS'			=> 'Διαγραμμένα θέματα',
	'MCP_QUEUE_DELETED_TOPICS_EXPLAIN'		=> 'Αυτή είναι μια λίστα με όλα τα ψεύδο διαγραμμένα θέματα. Από εδώ μπορείτε να επαναφέρετε ή να διαγράψετε οριστικά αυτά τα θέματα.',

	'MCP_VIEW_USER'			=> 'Προβολή προειδοποιήσεων ενός μέλους',

	'MCP_WARN'				=> 'Προειδοποιήσεις',
	'MCP_WARN_FRONT'			=> 'Κύρια σελίδα',
	'MCP_WARN_LIST'			=> 'Λίστα προειδοποιήσεων',
	'MCP_WARN_POST'			=> 'Προειδοποιήστε για την συγκεκριμένη δημοσίευση',
	'MCP_WARN_USER'			=> 'Προειδοποιήστε μέλος',

	'MERGE_POSTS_CONFIRM'		=> 'Είστε σίγουρος ότι θέλετε να συγχωνεύσετε τις επιλεγμένες δημοσιεύσεις;',
	'MERGE_TOPIC_EXPLAIN'		=> 'Με την παρακάτω φόρμα μπορείς να συγχωνεύσεις δημοσιεύσεις με ένα άλλο θέμα. Οι δημοσιεύσεις θα παραμείνουν ταξινομημένες και θα εμφανιστούν σαν να τις έκανε το ίδιο μέλος σε αυτό το θέμα.<br />Παρακαλώ εισάγετε την ταυτότητα θέματος προορισμού ή πατήστε στο «επίλεκτο θέμα» στην αναζήτηση μας.',
	'MERGE_TOPIC_ID'			=> 'Αριθμός αναγνώρισης θέματος προορισμού (ID)',
	'MERGE_TOPICS'			=> 'Συγχώνευση θεμάτων',
	'MERGE_TOPICS_CONFIRM'	=> 'Είναι σίγουρο ότι θέλετε να συγχωνεύσετε τα επιλεγμένα θέματα;',
	'MODERATE_FORUM'			=> 'Συντονισμός Δ. Συζήτησης',
	'MODERATE_TOPIC'			=> 'Συντονισμός θέματος',
	'MODERATE_POST'			=> 'Συντονισμός δημοσίευσης',
	'MOD_OPTIONS'				=> 'Επιλογές συντονισμού',
	'MORE_INFO'				=> 'Περισσότερες λεπτομέρειες',
	'MOST_WARNINGS'			=> 'Μέλη με τις περισσότερες προειδοποιήσεις',
	'MOVE_TOPIC_CONFIRM'		=> 'Are you sure you want to move the topic into a new forum?',
	'MOVE_TOPICS'				=> 'Move selected topics',
	'MOVE_TOPICS_CONFIRM'		=> 'Είναι σίγουρο ότι θέλετε να μετακινήσετε αυτό το θέμα, σε μια άλλη Δ. Συζήτηση;',

	'NOTIFY_POSTER_APPROVAL'	=> 'Ειδοποίηση συγγραφέα για την έγκριση;',
	'NOTIFY_POSTER_DISAPPROVAL'=> 'Ειδοποίηση συγγραφέα για την απόρριψη;',
	'NOTIFY_USER_WARN'		=> 'Ειδοποίηση μέλους σχετικά για  την προειδοποίηση;',
	'NOT_MODERATOR'			=> 'Δεν είστε συντονιστής σε αυτή την Δ. Συζήτηση.',
	'NO_DESTINATION_FORUM'		=> 'Παρακαλώ επιλέξτε μια Δ. Συζήτηση προορισμού.',
	'NO_DESTINATION_FORUM_FOUND'	=> 'Δεν υπάρχει καμία διαθέσιμη Δ. Συζήτηση προορισμού.',
	'NO_ENTRIES'					=> 'Δεν υπάρχουν στο ιστορικό εγγραφές αυτήν την περίοδο.',
	'NO_FEEDBACK'					=> 'Καμία ανατροφοδότηση δεν υπάρχει για αυτό το μέλος.',
	'NO_FINAL_TOPIC_SELECTED'		=> 'Πρέπει να επιλέξεις ένα θέμα προορισμού για να συγχωνεύσεις τις δημοσιεύσεις.',
	'NO_MATCHES_FOUND'			=> 'Δεν βρήκε καμία αντιστοιχία.',
	'NO_POST'					=> 'Πρέπει να επιλέξετε μια δημοσίευση για την οποία θα προειδοποιήσετε αυτό το μέλος.',
	'NO_POST_REPORT'				=> 'Δεν έγινε αναφορά της δημοσίευσης.',
	'NO_POST_SELECTED'			=> 'Πρέπει να επιλέξεις μια δημοσίευση για να εκτελέσετε αυτήν την ενέργεια.',
	'NO_POSTS_DELETED'			=> 'Δεν υπάρχουν διαγραμμένες δημοσιεύσεις.',
	'NO_POSTS_QUEUE'				=> 'Δεν υπάρχουν δημοσιεύσεις σε αναμονή προς έγκριση.',
	'NO_REASON_DISAPPROVAL'		=> 'Παρακαλώ δικαιολογήστε την απόρριψη.',
	'NO_REPORT'					=> 'Καμία αναφορά δεν βρέθηκε',
	'NO_REPORTS'					=> 'Δεν βρέθηκαν αναφορές',
	'NO_REPORT_SELECTED'			=> 'Πρέπει να επιλέξετε τουλαχιστον μία αναφορά για να συνεχίσεις αυτήν την ενέργεια.',
	'NO_TOPIC_ICON'				=> 'Καμία',
	'NO_TOPIC_SELECTED'			=> 'Πρέπει να επιλέξεις τουλαχιστον ένα θέμα για να συνεχίσεις αυτήν την ενέργεια.',
	'NO_TOPICS_DELETED'			=> 'Δεν υπάρχουν διαγραμμένα θέματα.',
	'NO_TOPICS_QUEUE'				=> 'Δεν υπάρχουν θέματα σε αναμονή προς έγκριση.',

	'ONLY_TOPIC'					=> 'Μόνο θέμα “%s”',
	'OTHER_USERS'				=> 'Άλλα μέλη τα οποία έχουν δημοσιεύσει από αυτή την IP',

	'QUICKMOD_ACTION_NOT_ALLOWED' 	=> "%s δεν επιτρέπεται ως quickmod",

	'PM_REPORT_CLOSED_SUCCESS'	=> 'Η επιλεγμένη ΠΜ αναφορά έχει κλείσει επιτυχώς.',
	'PM_REPORT_DELETED_SUCCESS'	=> 'Η επιλεγμένη ΠΜ αναφορά έχει διαγραφεί επιτυχώς.',
	'PM_REPORTED_SUCCESS'			=> 'Αυτό το προσωπικό μήνυμα έχει επιτυχώς αναφερθεί.',
	'PM_REPORTS_CLOSED_SUCCESS'	=> 'Οι επιλεγμένες ΠΜ αναφορές έχουν κλείσει επιτυχώς.',
	'PM_REPORTS_DELETED_SUCCESS'	=> 'Οι επιλεγμένες ΠΜ αναφορές έχουν διαγραφεί επιτυχώς.',
	'PM_REPORTS_TOTAL'			=> array(
		0	=> 'Δεν υπάρχουν αναφορές ΠΜ για αναθεώρηση.',
		1	=> 'Συνολικά υπάρχεί <strong>1</strong> αναφορά ΠΜ για αναθεώρηση.',
		2	=> 'Συνολικά υπάρχουν <strong>%d</strong> αναφορές ΠΜ για αναθεώρηση.',
	),
	'PM_REPORT_DETAILS'			=> 'Λεπτομέρειες αναφοράς Προσωπικού μηνύματος',
	'POSTER'						=> 'Συγγραφέας',
	'POSTS_APPROVED_SUCCESS'		=> 'Οι επιλεγμένες δημοσίευσεις έχουν εγκριθεί.',
	'POSTS_DELETED_SUCCESS'		=> 'Οι επιλεγμένες δημοσιεύσεις έχουν διαγραφεί επιτυχώς από την βάση.σ',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'Οι επιλεγμένες δημοσιεύσεις έχουν απορριφθεί επιτυχώς.',
	'POSTS_LOCKED_SUCCESS'		=> 'Οι επιλεγμένες δημοσιεύσεις έχουν κλειδωθεί επιτυχώς.',
	'POSTS_MERGED_SUCCESS'		=> 'Οι επιλεγμένες δημοσιεύσεις έχουν μετακινηθεί.',
	'POSTS_PER_PAGE'				=> 'Δημοσιεύσεις ανά σελίδα',
	'POSTS_PER_PAGE_EXPLAIN'		=> '(θέστε 0 για εμφάνιση όλων των δημοσιεύσεων.)',
	'POSTS_RESTORED_SUCCESS'		=> 'Οι επιλεγμένες δημοσιεύσεις έχουν αποκατασταθεί με επιτυχία.',
	'POSTS_UNLOCKED_SUCCESS'		=> 'Οι επιλεγμένες δημοσιεύσεις έχουν ξεκλειδωθεί επιτυχώς.',
	'POST_APPROVED_SUCCESS'		=> 'Η επιλεγμένη δημοσίευση έχει εγκριθεί.',
	'POST_DELETED_SUCCESS'		=> 'Η επιλεγμένη δημοσίευση έχει διαγραφεί από την βάση επιτυχώς.',
	'POST_DISAPPROVED_SUCCESS'	=> 'Η επιλεγμένη δημοσίευση έχει απορριφθεί.',
	'POST_LOCKED_SUCCESS'			=> 'Η δημοσίευση κλειδώθηκε επιτυχώς.',
	'POST_NOT_EXIST'				=> 'Η ζητούμενη δημοσίευση δεν υπάρχει.',
	'POST_REPORTED_SUCCESS'		=> 'Αυτή η δημοσίευση αναφέρθηκε επιτυχώς.',
	'POST_RESTORED_SUCCESS'		=> 'Η δημοσίευση έχει αποκατασταθεί επιτυχώς',
	'POST_UNLOCKED_SUCCESS'		=> 'Η δημοσίευση ξεκλειδώθηκε επιτυχώς.',

	'READ_USERNOTES'				=> 'Σημειώσεις Μέλους',
	'READ_WARNINGS'				=> 'Προειδοποιήσεις Μέλους	',
	'REPORTER'					=> 'Μέλος',
	'REPORTED'					=> 'Αναφέρθηκε στις',
	'REPORTED_BY'					=> 'Αναφέρθηκε από',
	'REPORTED_ON_DATE'			=> 'στις',
	'REPORTS_CLOSED_SUCCESS'		=> 'Οι επιλεγμένες αναφορές έχουν κλείσει επιτυχώς.',
	'REPORTS_DELETED_SUCCESS'		=> 'Οι επιλεγμένες αναφορές έχουν διαγραφεί επιτυχώς.',
	'REPORTS_TOTAL'				=> array(
		0	=> 'Δεν υπάρχουν αναφορές για αναθεώρηση.',
		1	=> 'Συνολικά υπάρχει <strong>1</strong> αναφορά για αναθεώρηση.',
		2	=> 'Συνολικά υπάρχουν <strong>%d</strong> αναφορές για αναθεώρηση.',
	),
	'REPORT_CLOSED'			=> 'Η αναφορά έχει ήδη κλείσει.',
	'REPORT_CLOSED_SUCCESS'	=> 'Η επιλεγμένη αναφορά έκλεισε επιτυχώς.',
	'REPORT_DELETED_SUCCESS'	=> 'Η επιλεγμένη αναφορά διαγράφηκε επιτυχώς.',
	'REPORT_DETAILS'			=> 'Λεπτομέρειες αναφοράς',
	'REPORT_MESSAGE'			=> 'Αναφέρετε αυτό το μήνυμα',
	'REPORT_MESSAGE_EXPLAIN'	=> 'Χρησιμοποιήστε αυτήν την φόρμα για να αναφέρετε το επιλεγμένο προσωπικό μήνυμα. Η υποβολή αναφοράς πρέπει γενικά να χρησιμοποιηθεί μόνο εάν το μήνυμα παραβαίνει τους κανόνες της Δ. Συζήτησης. <strong>Αναφέροντας ένα προσωπικό μήνυμα θα γίνει το περιεχόμενό ορατό σε όλους τους συντονιστές.</strong>',
	'REPORT_NOTIFY'			=> 'Ειδοποιήσε με',
	'REPORT_NOTIFY_EXPLAIN'		=> 'Σας ειδοποιεί, εάν η αναφορά σας έχει επεξεργαστεί.',
	'REPORT_POST_EXPLAIN'		=> 'Χρησιμοποιήστε αυτήν την φόρμα για να αναφέρετε το επιλεγμένο μήνυμα στους συντονιστές και διαχειριστές της Δ. Συζήτησης. Η υποβολή αναφοράς πρέπει γενικά να χρησιμοποιηθεί μόνο εάν το μήνυμα παραβαίνει τους κανόνες της Δ. Συζήτηση.',
	'REPORT_REASON'			=> 'Λόγος Αναφοράς',
	'REPORT_TIME'				=> 'Χρόνος Αναφορά;',
	'RESTORE'				=> 'Επαναφορά',
	'RESTORE_POST'			=> 'Επαναφορά δημοσίευσης',
	'RESTORE_POST_CONFIRM'	=> 'Είναι σίγουρο ότι θέλετε να επαναφέρετε αυτή τη δημοσίευσης;',
	'RESTORE_POSTS'			=> 'Επαναφορά δημοσιεύσεων',
	'RESTORE_POSTS_CONFIRM'	=> 'Είναι σίγουρο ότι θέλετε να επαναφέρετε  τις επιλεγμένες διμοσιεύσεις;',
	'RESTORE_TOPIC'			=> 'Επαναφορά θέματος',
	'RESTORE_TOPIC_CONFIRM'	=> 'Είναι σίγουρο ότι θέλετε να επαναφέρετε αυτό το θέμα;',
	'RESTORE_TOPICS'			=> 'Επαναφορά θεμάτων',
	'RESTORE_TOPICS_CONFIRM'	=> 'Είναι σίγουρο ότι θέλετε να επαναφέρετε  τα επιλεγμένα θέματα;',
	'RESYNC'					=> 'Επανασυγχρονισμός',
	'RETURN_MESSAGE'			=> '%sΕπιστροφή στο μήνυμα%s',
	'RETURN_NEW_FORUM'		=> '%sΠηγαίνετε στη νέα Δ. Συζήτηση%s',
	'RETURN_NEW_TOPIC'		=> '%sΠηγαίνετε στο νέο θέμα%s',
	'RETURN_PM'				=> '%sΕπιστροφή στα προσωπικά μηνύματα%s',
	'RETURN_POST'				=> '%sΕπιστροφή στην δημοσίευση%s',
	'RETURN_QUEUE'			=> '%sΕπιστροφή στο αίτημα%s',
	'RETURN_REPORTS'			=> '%sΕπιστροφή στις αναφορές%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sΕπιστροφή στο θέμα%s',

	'SEARCH_POSTS_BY_USER'				=> 'Αναζήτηση δημοσιεύσεων από',
	'SELECT_ACTION'						=> 'Επιλέξτε επιθυμητή ενέργεια',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Παρακαλώ επιλέξτε την Δ. Συζήτηση που θέλετε να εμφανίζεται αυτή η καθολική ανακοίνωση.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'Ένα ή περισσότερα θέματα που επιλέξατε είναι καθολική ανακοίνωση. Παρακαλώ επιλέξτε την Δ. Συζήτηση που θέλετε να εμφανίζονται.',
	'SELECT_MERGE'						=> 'Επιλογή για συγχώνευση',
	'SELECT_TOPICS_FROM'				=> 'Επιλέξτε θέματα από',
	'SELECT_TOPIC'						=> 'Επιλέξτε θέμα',
	'SELECT_USER'						=> 'Επιλέξτε μέλος',
	'SORT_ACTION'						=> 'Διαδικασία',
	'SORT_DATE'						=> 'Ημερομηνία',
	'SORT_IP'							=> 'IP διεύθυνση',
	'SORT_WARNINGS'					=> 'Προειδοποιήσεις',
	'SPLIT_AFTER'						=> 'Διαχωρισμός από την επιλεγμένη δημοσίευση μετά',
	'SPLIT_FORUM'						=> 'Δ. Συζήτηση για το νέο θέμα',
	'SPLIT_POSTS'						=> 'Διαχωρισμός επιλεγμένων δημοσιεύσεων',
	'SPLIT_SUBJECT'					=> 'Νέος τίτλος θέματος',
	'SPLIT_TOPIC_ALL'					=> 'Διαχωρισμός θέματος από την επιλεγμένη δημοσίευση',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'Είναι σίγουρο ότι θέλετε να διαχωρίσετε αυτό το θέμα;',
	'SPLIT_TOPIC_BEYOND'				=> 'Διαχωρισμός δημοσίευσης από το επιλεγμένο θέμα και πέρα',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> 'Είναι σίγουρο ότι θέλετε να  διαχωρίσετε την επιλεγμένη δημοσίευση από αυτό το θέμα;',
	'SPLIT_TOPIC_EXPLAIN'				=> 'Χρησιμοποιώντας την παρακάτω φόρμα μπορείτε να χωρίσετε ένα θέμα σε δύο, είτε επιλέγοντας τις θέσεις μεμονωμένα ή από τη διάσπαση σε μια επιλεγμένη δημοσίευση.',

	'THIS_PM_IP'					=> 'Η IP για αυτό το προσωπικό μήνυμα',
	'THIS_POST_IP'					=> 'IP for this post',
	'TOPICS_APPROVED_SUCCESS'		=> 'Το επιλεγμένο θέμα έχει εγκριθεί.',
	'TOPICS_DELETED_SUCCESS'		=> 'Το επιλεγμένο θέμα έχει διαγραφεί επιτυχώς από την βάση.',
	'TOPICS_DISAPPROVED_SUCCESS'	=> 'Το επιλεγμένο θέμα έχει απορριφθεί.',
	'TOPICS_FORKED_SUCCESS'		=> 'Το επιλεγμένο θέμα έχει αντιγραφεί επιτυχώς.',
	'TOPICS_LOCKED_SUCCESS'		=> 'Το επιλεγμένο θέμα κλειδώθηκε επιτυχώς.',
	'TOPICS_MOVED_SUCCESS'		=> 'Το επιλεγμένο θέμα μετακινήθηκε επιτυχώς.',
	'TOPICS_RESTORED_SUCCESS'		=> 'Τα επιλεγμένα θέματα έχουν αποκατασταθεί με επιτυχία.',
	'TOPICS_RESYNC_SUCCESS'		=> 'Τα επιλεγμένα θέματα έχουν επανασυγχρονιστεί.',
	'TOPICS_TYPE_CHANGED'			=> 'Ο τύπος του θέματος άλλαξε επιτυχώς.',
	'TOPICS_UNLOCKED_SUCCESS'		=> 'Τα επιλεγμένα θέματα έχουν ξεκλειδωθεί',
	'TOPIC_APPROVED_SUCCESS'		=> 'Τα επιλεγμένα θέματα έχουν εγκριθεί.',
	'TOPIC_DELETED_SUCCESS'		=> 'Το επιλεγμένο θέμα έχει διαγραφεί επιτυχώς από την βάση.',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'Το επιλεγμένο θέμα έχει απορριφθεί',
	'TOPIC_FORKED_SUCCESS'		=> 'Το επιλεγμένο θέμα έχει αντιγραφεί επιτυχώς.',
	'TOPIC_LOCKED_SUCCESS'		=> 'Το επιλεγμένο θέμα έχει κλειδωθεί.',
	'TOPIC_MOVED_SUCCESS'		=> 'Το επιλεγμένο θέμα μετακινήθηκε επιτυχώς.',
	'TOPIC_NOT_EXIST'			=> 'Το θέμα που επιλέξατε δεν υπάρχει.',
	'TOPIC_RESTORED_SUCCESS'	=> 'Το επιλεγμένο θέμα έχει αποκατασταθεί επιτυχώς.',
	'TOPIC_RESYNC_SUCCESS'	=> 'Το επιλεγμένο θέμα έχει επανασυγχρονιστεί.',
	'TOPIC_SPLIT_SUCCESS'		=> 'Το επιλεγμένο θέμα διαχωρίστηκε επιτυχώς.',
	'TOPIC_TIME'				=> 'Χρόνος θέματος',
	'TOPIC_TYPE_CHANGED'		=> 'Ο τύπος της θέματος άλλαξε επιτυχώς.',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'Το επιλεγμένο θέμα έχει ξεκλειδωθεί.',
	'TOTAL_WARNINGS'			=> 'Σύνολο προειδοποιήσεων',

	'UNAPPROVED_POSTS_TOTAL'		=> array(
		0	=> 'Δεν υπάρχει καμία δημοσίευση που περιμένει να εγκριθεί.',
		1	=> 'Συνολικά υπάρχουν εδώ <strong>1</strong> δημοσιεύσεις που περιμένει να εγκριθεί.',
		2	=> 'Συνολικά υπάρχουν <strong>%d</strong> δημοσιεύσεις που περιμένουν να εγκριθούν.',
	),
	'UNLOCK'						=> 'Ξεκλειδώστε',
	'UNLOCK_POST'					=> 'Ξεκλειδώστε δημοσίευση',
	'UNLOCK_POST_EXPLAIN'			=> 'Επιτρέπετε η επεξεργασία',
	'UNLOCK_POST_POST'			=> 'Ξεκλείδωση δημοσίευσης',
	'UNLOCK_POST_POST_CONFIRM'	=> 'Είναι σίγουρο ότι θέλετε να επιτρέπετε η επεξεργασία της δημοσίευσης;',
	'UNLOCK_POST_POSTS'			=> 'Ξεκλείδωμα των επιλεγμένων δημοσιεύσεων',
	'UNLOCK_POST_POSTS_CONFIRM'	=> 'Είναι σίγουρο ότι θέλετε να επιτρέπετε η επεξεργασία των επιλεγμένων δημοσιεύσεων;',
	'UNLOCK_TOPIC'				=> 'Ξεκλείδωμα  Θέματος',
	'UNLOCK_TOPIC_CONFIRM'			=> 'Είναι σίγουρο ότι θέλετε να ξεκλειδώσετε το θέμα;',
	'UNLOCK_TOPICS'				=> 'Ξεκλείδωμα  επιλεγμένων Θεμάτων',
	'UNLOCK_TOPICS_CONFIRM'		=> 'Είναι σίγουρο ότι θέλετε να ξεκλειδώσετε τα επιλεγμένα θέματα;',
	'USER_CANNOT_POST'			=> 'Δεν μπορείτε να δημοσιεύσετε σε αυτή την Δ. Συζήτηση.',
	'USER_CANNOT_REPORT'			=> 'You cannot report posts in this forum.',
	'USER_FEEDBACK_ADDED'			=> 'Η ανατροφοδότηση προς το μέλος προστέθηκε επιτυχώς.',
	'USER_WARNING_ADDED'			=> 'Το μέλος προειδοποιήθηκε επιτυχώς.',

	'VIEW_DETAILS'			=> 'Προβολή λεπτομερειών',
	'VIEW_PM'				=> 'Προβολή προσωπικών μηνυμάτων',
	'VIEW_POST'			=> 'Προβολή δημοσίευσης',

	'WARNED_USERS'			=> 'Προειδοποιήστε μέλη',
	'WARNED_USERS_EXPLAIN'	=> 'Αυτή είναι μια λίστα των μελών  που έχουν μη ληγμένες αναφορές προς αυτούς.',
	'WARNING_PM_BODY'		=> 'Μόλις λάβατε μια προειδοποίηση από κάποιον συντονιστή ή διαχειριστή αυτής της Δ. Συζήτησης.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'Η προειδοποίηση έχει σταλεί',
	'WARNING_POST_DEFAULT'	=> 'Αυτή είναι μια προειδοποίηση που δεχτήκατε για την δημοσίευσή σας εδώ: %s.',
	'NO_WARNINGS'		=> 'Δεν υπάρχουν προειδοποιήσεις.',

	'YOU_SELECTED_TOPIC'	=> 'Επιλέξατε θέμα υπ\' αριθμό %d: %s.',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Παράνομο υλικό/Warez',
			'SPAM'		=> 'Μαζικό ενοχλητικό μήνυμα',
			'OFF_TOPIC'	=> 'Εκτός θέματος',
			'OTHER'		=> 'Άλλο',
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'Το μήνυμα περιέχει συνδέσμους με παράνομο λογισμικό.',
			'SPAM'		=> 'Το αναφερόμενο μήνυμα έχει το μόνο σκοπό να διαφημίσει ιστοσελίδα ή ένα προϊόν.',
			'OFF_TOPIC'	=> 'Το αναφερόμενο μήνυμα είναι εκτός θέματος.',
			'OTHER'		=> 'Το αναφερόμενο μήνυμα δεν ταιριάζει με αυτήν την κατηγορία , παρακαλώ χρησιμοποιήστε την περαιτέρω φόρμα περιγραφής.',
		),
	),
));
