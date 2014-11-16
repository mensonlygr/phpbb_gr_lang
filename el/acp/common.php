<?php
/** 
*
* acp_common [Greek - El]
*
* @package language
* @version $Id: common.php 11542 2011-11-15 16:00:09Z git-gate $
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

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'Διαχειριστές',
	'ACP_ADMIN_LOGS'			=> 'Ιστορικό Διαχειριστών',
	'ACP_ADMIN_ROLES'			=> 'Ρόλοι Διαχειριστή',
	'ACP_ATTACHMENTS'			=> 'Συνημμένα',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Ρυθμίσεις Συνημμένων',
	'ACP_AUTH_SETTINGS'			=> 'Εξουσιοδότηση',
	'ACP_AUTOMATION'			=> 'Αυτοματισμός',
	'ACP_AVATAR_SETTINGS'		=> 'Ρυθμίσεις άβαταρ',

	'ACP_BACKUP'				=> 'Αντίγραφο Ασφαλείας βάσης',
	'ACP_BAN'					=> 'Αποκλεισμοί',
	'ACP_BAN_EMAILS'			=> 'Αποκλεισμοί ηλεκτρονικών ταχυδρομείων',
	'ACP_BAN_IPS'				=> 'Αποκλεισμοί IPs',
	'ACP_BAN_USERNAMES'			=> 'Αποκλεισμοί Ονομάτων Χρήστη',
	'ACP_BBCODES'				=> 'BBCodes',
	'ACP_BOARD_CONFIGURATION'	=> 'Παραμετροποίηση Δ. Συζήτησης',
	'ACP_BOARD_FEATURES'		=> 'Χαρακτηριστικά Δ. Συζήτησης',
	'ACP_BOARD_MANAGEMENT'		=> 'Διαχείριση Δ. Συζήτησης',
	'ACP_BOARD_SETTINGS'		=> 'Ρυθμίσεις Δ. Συζήτησης',
	'ACP_BOTS'					=> 'Spiders/Robots',

	'ACP_CAPTCHA'				=> 'Οπτική ΄Επιβεβαίωση',

	'ACP_CAT_DATABASE'			=> 'Βάση',
	'ACP_CAT_DOT_MODS'			=> '.MODs',
	'ACP_CAT_FORUMS'			=> 'Δημόσια Συζήτηση',
	'ACP_CAT_GENERAL'			=> 'Γενικά',
	'ACP_CAT_MAINTENANCE'		=> 'Συντήρηση',
	'ACP_CAT_PERMISSIONS'		=> 'Προσβάσεις',
	'ACP_CAT_POSTING'			=> 'Αποστολή άρθρου',
	'ACP_CAT_STYLES'			=> 'Στυλ',
	'ACP_CAT_SYSTEM'			=> 'Σύστημα',
	'ACP_CAT_USERGROUP'			=> 'Μέλη και Ομάδες',
	'ACP_CAT_USERS'				=> 'Μέλη',
	'ACP_CLIENT_COMMUNICATION'	=> 'Πελάτης επικοινωνίας',
	'ACP_COOKIE_SETTINGS'		=> 'Ρυθμίσεις Cookie',
	'ACP_CRITICAL_LOGS'			=> 'Ιστορικό Σφαλμάτων',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Πεδία Προφίλ',

	'ACP_DATABASE'				=> 'Διαχείριση Βάσης',
	'ACP_DISALLOW'				=> 'Μη επιτρεπτό',
	'ACP_DISALLOW_USERNAMES'	=> 'Μη επιτρεπτά ονόματα χρήστη',

	'ACP_EMAIL_SETTINGS'		=> 'Ρυθμίσεις ηλεκτρονικού ταχυδρομείου',
	'ACP_EXTENSION_GROUPS'		=> 'Διαχείριση ομάδων επεκτάσεων',

	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Δ. Συζήτηση με βάση τα δικαιώματα',
	'ACP_FORUM_LOGS'				=> 'Ιστορικό Δ. Συζήτησης',
	'ACP_FORUM_MANAGEMENT'			=> 'Διαχείριση Δ. Συζήτησης',
	'ACP_FORUM_MODERATORS'			=> 'Συντονιστές Δ. Συζήτησης',
	'ACP_FORUM_PERMISSIONS'			=> 'Προσβάσεις Δ. Συζήτησης',
	'ACP_FORUM_PERMISSIONS_COPY'	=> 'Αντιγραφή φόρουμ δικαιώματα',
	'ACP_FORUM_ROLES'				=> 'Ρόλοι Δ. Συζήτησης',

	'ACP_GENERAL_CONFIGURATION'		=> 'Γενικές ρυθμίσεις',
	'ACP_GENERAL_TASKS'				=> 'Γενικές εργασίες',
	'ACP_GLOBAL_MODERATORS'			=> 'Γενικοί συντονιστές',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Γενικοί περιορισμοί',
	'ACP_GROUPS'					=> 'Ομάδες',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Προσβάσεις ομάδων Δ. Συζήτησης',
	'ACP_GROUPS_MANAGE'				=> 'Διαχείριση Ομάδας',
	'ACP_GROUPS_MANAGEMENT'			=> 'Διαχείριση Ομάδων',
	'ACP_GROUPS_PERMISSIONS'		=> 'Προσβάσεις Ομάδων',

	'ACP_ICONS'					=> 'Σύμβολα θεμάτων',
	'ACP_ICONS_SMILIES'			=> 'Θέματος σύμβολα/εικονίδια',
	'ACP_IMAGESETS'				=> 'Σύνολα εικόνων',
	'ACP_INACTIVE_USERS'		=> 'Ανενεργά μέλη',
	'ACP_INDEX'					=> 'Αρχική ACP',

	'ACP_JABBER_SETTINGS'		=> 'Ρυθμίσεις Jabber',

	'ACP_LANGUAGE'				=> 'Διαχείριση Γλώσσας',
	'ACP_LANGUAGE_PACKS'		=> 'Πακέτα Γλώσσας',
	'ACP_LOAD_SETTINGS'			=> 'Ρυθμίσεις φορτίου διακομιστή',
	'ACP_LOGGING'				=> 'Εγγραφές ιστορικού',

	'ACP_MAIN'					=> 'Αρχική ACP',
	'ACP_MANAGE_EXTENSIONS'		=> 'Διαχείριση Επεκτάσεων',
	'ACP_MANAGE_FORUMS'			=> 'Διαχείριση Δ. Συζήτησης',
	'ACP_MANAGE_RANKS'			=> 'Διαχείριση Βαθμών',
	'ACP_MANAGE_REASONS'		=> 'Διαχείριση λόγων αναφοράς/άρνησης',
	'ACP_MANAGE_USERS'			=> 'Διαχείριση Μελών',
	'ACP_MASS_EMAIL'			=> 'Μαζικό ηλεκτρονικό ταχυδρομείο',
	'ACP_MESSAGES'				=> 'Μηνύματα',
	'ACP_MESSAGE_SETTINGS'		=> 'Ρυθμίσεις Προσωπικών Μηνυμάτων',
	'ACP_MODULE_MANAGEMENT'		=> 'Διαχείριση μονάδων',
	'ACP_MOD_LOGS'				=> 'Ιστορικό Συντονιστή',
	'ACP_MOD_ROLES'				=> 'Ρόλοι συντονιστή',

	'ACP_NO_ITEMS'				=> 'Δεν υπάρχει κανένα είδος ακόμα.',

	'ACP_ORPHAN_ATTACHMENTS'	=> 'Ορφανά Συνημμένα',

	'ACP_PERMISSIONS'			=> 'Προσβάσεις',
	'ACP_PERMISSION_MASKS'		=> 'Αποτελεσματικά Δικαιώματα',
	'ACP_PERMISSION_ROLES'		=> 'Ρόλοι προσβάσεων',
	'ACP_PERMISSION_TRACE'		=> 'Εντοπισμός Δικαιωμάτων',
	'ACP_PHP_INFO'				=> 'Πληροφορίες PHP',
	'ACP_POST_SETTINGS'			=> 'Ρυθμίσεις αποστολής άρθρου',
	'ACP_PRUNE_FORUMS'			=> 'Εκκαθάριση Δ. Συζητήσεων',
	'ACP_PRUNE_USERS'			=> 'Εκκαθάριση Μελών',
	'ACP_PRUNING'				=> 'Εκκαθάριση',

	'ACP_QUICK_ACCESS'			=> 'Γρήγορη πρόσβαση',

	'ACP_RANKS'					=> 'Βαθμοί',
	'ACP_REASONS'				=> 'Λόγοι αναφοράς/άρνησης',
	'ACP_REGISTER_SETTINGS'		=> 'Ρυθμίσεις εγγραφής μέλους',

	'ACP_RESTORE'				=> 'Επαναφορά',
	
	'ACP_FEED'					=> 'Διαχείριση τροφοδοσίας Feeds',
	'ACP_FEED_SETTINGS'			=> 'Ρυθμίσεις τροφοδοσίας Feeds',	

	'ACP_SEARCH'				=> 'Παραμετροποίηση αναζήτησης',
	'ACP_SEARCH_INDEX'			=> 'Αναζήτηση Ευρετηρίου',
	'ACP_SEARCH_SETTINGS'		=> 'Ρυθμίσεις αναζήτησης',

	'ACP_SECURITY_SETTINGS'		=> 'Ρυθμίσεις ασφαλείας',
  'ACP_SEND_STATISTICS'		=> 'Αποστολή πληροφορίες στατιστικών',
	'ACP_SERVER_CONFIGURATION'	=> 'Παραμετροποίηση διακομιστή',
	'ACP_SERVER_SETTINGS'		=> 'Ρυθμίσεις Διακομιστή',
	'ACP_SIGNATURE_SETTINGS'	=> 'Ρυθμίσεις υπογραφών',
	'ACP_SMILIES'				=> 'Εικονίδια',
	'ACP_STYLE_COMPONENTS'		=> 'Στοιχεία στυλ',
	'ACP_STYLE_MANAGEMENT'		=> 'Διαχείριση Στυλ',
	'ACP_STYLES'				=> 'Στυλ',
	
	'ACP_SUBMIT_CHANGES'		=> 'Υποβολή αλλαγών',	

	'ACP_TEMPLATES'				=> 'Πρότυπα',
	'ACP_THEMES'				=> 'Θέματα',

	'ACP_UPDATE'					=> 'Ενημέρωση σε εξέλιξη',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Προσβάσεις Δ. Συζήτησης μελών',
	'ACP_USERS_LOGS'				=> 'Ιστορικό μελών',
	'ACP_USERS_PERMISSIONS'			=> 'Προσβάσεις μελών',
	'ACP_USER_ATTACH'				=> 'Συνημμένα',
	'ACP_USER_AVATAR'				=> 'Άβαταρ',
	'ACP_USER_FEEDBACK'				=> 'Ανατροφοδότηση ',
	'ACP_USER_GROUPS'				=> 'Ομάδες',
	'ACP_USER_MANAGEMENT'			=> 'Διαχείριση μέλους',
	'ACP_USER_OVERVIEW'				=> 'Επισκόπηση',
	'ACP_USER_PERM'					=> 'Προσβάσεις',
	'ACP_USER_PREFS'				=> 'Επιλογές',
	'ACP_USER_PROFILE'				=> 'Προφίλ',
	'ACP_USER_RANK'					=> 'Βαθμός',
	'ACP_USER_ROLES'				=> 'Ρόλοι μελών',
	'ACP_USER_SECURITY'				=> 'Ασφάλεια μέλους',
	'ACP_USER_SIG'					=> 'Υπογραφή',
	'ACP_USER_WARNINGS'				=> 'Προειδοποιήσεις',

	'ACP_VC_SETTINGS'					=> 'Αντίμετρα ενοχλητικών μηνυμάτων',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'Προεπισκόπηση εικόνας Οπτικής Επιβεβαίωσης',
	'ACP_VERSION_CHECK'					=> 'Έλεγχος για αναβαθμίσεις',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Έλεγχος προσβάσεων διαχειριστών',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Έλεγχος προσβάσεων συντονιστών Δ. Συζήτηση',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Εμφάνιση Δ. Συζήτησης με βάση τα δικαιώματα',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Έλεγχός προσβάσεων γενικών διαχειριστών',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Έλεγχος προσβάσεων μελών',

	'ACP_WORDS'					=> 'Λογοκρισία λέξεων',

	'ACTION'				=> 'Ενέργεια',
	'ACTIONS'				=> 'Ενέργειες',
	'ACTIVATE'				=> 'Ενεργοποίηση',
	'ADD'					=> 'Προσθήκη',
	'ADMIN'					=> 'Διαχείριση',
	'ADMIN_INDEX'			=> 'Αρχική διαχείρισης',
	'ADMIN_PANEL'			=> 'Πίνακας ελέγχου διαχειριστή',
	'ADM_LOGOUT'			=> 'ΠΕΔ&nbsp;αποσύνδεση',
	'ADM_LOGGED_OUT'		=> 'Έχετε αποσυνδεθεί επιτυχώς από τον Πίνακα ελέγχου διαχειριστή',


	'BACK'					=> 'Πίσω',

	'COLOUR_SWATCH'			=> 'Πίνακας χρωμάτων Web',
	'CONFIG_UPDATED'		=> 'Επιτυχής ενημέρωση ρυθμίσεων.',

	'DEACTIVATE'				=> 'Απενεργοποίηση',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'Η εισαχθείσα διαδρομή “%s” δεν υπάρχει.',
	'DIRECTORY_NOT_DIR'			=> 'Η εισαχθείσα διαδρομή “%s” δεν αντιστοιχεί σε φάκελο.',
	'DIRECTORY_NOT_WRITABLE'	=> 'Η εισαχθείσα διαδρομή “%s” δεν έχει δικαιώματα εγγραφής.',
	'DISABLE'					=> 'Απενεργοποίηση',
	'DOWNLOAD'					=> 'Μεταφόρτωση',
	'DOWNLOAD_AS'				=> 'Μεταφόρτωση ως',
	'DOWNLOAD_STORE'			=> 'Μεταφόρτωση ή αποθήκευση αρχείου',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Μπορείτε να μεταφορτώσετε το αρχείο απευθείας ή να το αποθηκεύσετε στο φάκελο <samp>store/</samp>.',

	'EDIT'					=> 'Επεξεργασία',
	'ENABLE'				=> 'Ενεργοποίηση',
	'EXPORT_DOWNLOAD'		=> 'Μεταφόρτωση',
	'EXPORT_STORE'			=> 'Αποθήκευση',
	
	'GENERAL_OPTIONS'		=> 'Γενικές επιλογές',
	'GENERAL_SETTINGS'		=> 'Γενικές ρυθμίσεις',
	'GLOBAL_MASK'			=> 'Γενικά αποτελέσματα δικαιωμάτων',

	'INSTALL'				=> 'Εγκατάσταση',
	'IP'					=> 'IP Χρήστη',
	'IP_HOSTNAME'			=> 'Διεύθυνση IP ή όνομα κεντρικού υπολογιστή ',

	'LOGGED_IN_AS'			=> 'Συνδεθήκατε ως:',
	'LOGIN_ADMIN'			=> 'Για να διαχειριστείτε την κοινότητα πρέπει να είστε εξουσιοδοτημένο μέλος.',
	'LOGIN_ADMIN_CONFIRM'	=> 'Για να διαχειριστείτε την κοινότητα πρέπει να επαναπιστοποιήσετε τον εαυτό σας.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Εξουσιοδοτηθήκατε επιτυχώς και τώρα θα προωθηθείτε στον Πίνακα ελέγχου διαχειριστή.',
	'LOOK_UP_FORUM'			=> 'Επιλέξτε μια Δ. Συζήτηση',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'Μπορείτε να επιλέξετε πάνω από μια Δ. Συζήτηση.',

	'LOGIN_REDIRECT'		=> 'Έχετε συνδεθεί επιτυχώς.',
	'MANAGE'				=> 'Διαχείριση',
	'MENU_TOGGLE'			=> 'Απόκρυψη ή εμφάνιση πλάγιου μενού',
	'MOVE_DOWN'				=> 'Μετακίνηση κάτω',
	'MORE'					=> 'Περισσότερα&nbsp;&raquo;',
	'MORE'					=> 'Περισσότερα',			// Δεν χρησιμοποιείται αυτή τη στιγμή
	'MORE_INFORMATION'		=> 'Περισσότερες πληροφορίες »',

	'MOVE_UP'				=> 'Μετακίνηση επάνω',

	'NOTIFY'				=> 'Ειδοποίηση',
	'NO_ADMIN'				=> 'Δεν είστε εξουσιοδοτημένος να διαχειριστείτε αυτήν την δημ. συζήτηση.',
	'NO_EMAILS_DEFINED'		=> 'Δεν βρέθηκε έγκυρη διεύθυνση αλληλογραφίας.',
	'NO_PASSWORD_SUPPLIED'	=> 'Πρέπει να δώσετε κωδικό πρόσβασης για να εισέλθετε στον Πίνακα Ελέγχου Διαχειριστή.',

	'OFF'					=> 'ΚΛΕΙΣΤΟ',
	'ON'					=> 'ΑΝΟΙΧΤΟ',

	'PARSE_BBCODE'						=> 'Ανάλυση BBCode',
	'PARSE_SMILIES'						=> 'Ανάλυση εικονιδίων',
	'PARSE_URLS'						=> 'Ανάλυση συνδέσμων',
	'PERMISSIONS_TRANSFERRED'			=> 'Επιτυχής μεταφορά προσβάσεων',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'Αποκτήσατε προσωρινά τα δικαιώματα του %1$s. Μπορείτε τώρα να περιηγηθείτε στην Δ. Συζήτησης με τα δικαιώματα αυτού του χρήστη, αλλά δεν μπορείτε να μεταβείτε στον πίνακα ελέγχου διαχειριστή εφόσον δεν έχετε ακόμα προσβάσεις διαχειριστή. Μπορείτε να <a href="%2$s"><strong>επαναφέρετε τις προσβάσεις σας</strong></a> οποιαδήποτε στιγμή.',

	'PROCEED_TO_ACP'					=> '%sΜετάβαση στον Πίνακα ελέγχου διαχειριστή%s',

	'REMIND'							=> 'Υπενθύμιση',
	'RESYNC'							=> 'Επανασυγχρονισμός',
	'RETURN_TO'							=> 'Επιστροφή σε..',

	'SELECT_ANONYMOUS'		=> 'Επιλέξτε Επισκέπτη',
	'SELECT_OPTION'			=> 'Επιλέξτε δυνατότητα',

	'SETTING_TOO_LOW'		=> 'Η παρεχόμενη τιμή για την ρύθμιση  %1$s είναι πολύ χαμηλή. Η ελάχιστη τιμή είναι  %d.',
	'SETTING_TOO_BIG'		=> 'Η παρεχόμενη τιμή για την ρύθμιση %1$s είναι πολύ μεγάλη. Η ελάχιστη τιμή είναι  %d.',
	'SETTING_TOO_LONG'		=> 'Η παρεχόμενη τιμή για την ρύθμιση %1$s είναι πολύ μεγάλη. Το μέγιστο μήκος που επιτρέπετε είναι %d.',
	'SETTING_TOO_SHORT'		=> 'Η παρεχόμενη τιμή για την ρύθμιση %1$s δεν είναι αρκετά μεγάλη. Το ελάχιστο μήκος που επιτρέπετε είναι %d.',

	'SHOW_ALL_OPERATIONS'	=> 'Προβολή όλων των ενεργειών',

	'UCP'					=> 'Πίνακας ελέγχου μέλους',
	'USERNAMES_EXPLAIN'		=> 'Βάλτε το κάθε όνομα μέλους σε διαφορετική γραμμή.',
	'USER_CONTROL_PANEL'	=> 'Πίνακας ελέγχου μέλους',

	'WARNING'				=> 'Προειδοποίηση',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'Αυτή η σελίδα περιέχει πληροφορίες για την έκδοση PHP που είναι εγκατεστημένη στον διακομιστή σας. Περιέχει πληροφορίες για τις εγκατεστημένες μονάδες, τις διαθέσιμες μεταβλητές και τις βασικές ρυθμίσεις. Αυτές οι πληροφορίες μπορεί να είναι χρήσιμες για την διάγνωση προβλημάτων. Σημειώστε ότι μερικές εταιρίες μπορεί να περιορίζουν τις πληροφορίες που θα εμφανιστούν εδώ για λόγους ασφαλείας. Καλό θα ήταν να μην δίνετε τις πληροφορίες που εμφανίζονται εδώ εκτός και αν σας ζητηθεί από κάποιο <a href="http://www.phpbb.com/about/team/">Επίσημο μέλος </a> της ομάδας υποστήριξης.',

	'NO_PHPINFO_AVAILABLE'	=> 'Οι πληροφορίες σχετικά με την έκδοση του PHP δεν ήταν δυνατόν να αποκτηθούν. Η εντολή Phpinfo() έχει απενεργοποιηθεί για λόγους ασφαλείας .',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Εδώ εμφανίζονται όλες οι ενέργειες που έχουν πραγματοποιηθεί από τους διαχειριστές. Μπορείτε να τις ταξινομήσετε κατά όνομα μέλους, ημερομηνία, διεύθυνση IP ή ενέργεια. Αν έχετε τα κατάλληλα δικαιώματα μπορείτε να σβήσετε μεμονωμένες ενέργειες από την λίστα αυτή ή και όλη την λίστα.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Εδώ εμφανίζονται όλες οι ενέργειες που έχει πραγματοποιήσει η Δ. Συζήτηση από μόνο. Το ιστορικό αυτό παρέχει πληροφορίες πάνω σε προβλήματα που δημιουργούνται κατά την λειτουργία, όπως για παράδειγμα την μη αποστολή ορισμένων ηλεκτρονικών ταχυδρομείων. Μπορείτε να τα ταξινομήσετε ανά όνομα μέλους, ημερομηνία, IP ή ενέργεια. Εάν εσείς έχετε τα ανάλογα δικαιώματα μπορείτε να δείτε ένα μέρος ή όλες της ενέργειες που έχουν καταγραφεί στο ιστορικό.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Εδώ εμφανίζονται όλες οι ενέργειες που πραγματοποιούνται στην Δ. Συζήτηση, θέματα και δημοσιεύσεις που δημιουργούνται όπως επίσης και τους αποκλεισμούς μελών. Μπορείτε να τα ταξινομήσετε ανά όνομα μέλους, ημερομηνία, IP ή ενέργεια. Εάν εσείς έχετε τα ανάλογα δικαιώματα μπορείτε να δείτε ένα μέρος ή όλες της ενέργειες που έχουν καταγραφεί στο ιστορικό.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Εδώ εμφανίζονται όλες οι ενέργειες που έχουν πραγματοποιηθεί προς και από το μέλος (αναφορές, προειδοποιήσει και σημειώσεις μέλος).',
	'ALL_ENTRIES'				=> 'Όλες οι καταχωρήσεις',

	'DISPLAY_LOG'	=> 'Εμφάνιση καταχωρήσεων ιστορικού την τελευταία ώρα',
	
	'NO_ENTRIES'	=> 'Δεν υπάρχουν καταχωρήσεις ιστορικού αυτήν την περίοδο.',

	'SORT_IP'		=> 'Διεύθυνση IP',
	'SORT_DATE'		=> 'Ημερομηνία',
	'SORT_ACTION'	=> 'Ενέργειες Ιστορικού',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Ευχαριστούμε που επιλέξατε το phpBB σαν λογισμικό για την δικιά σας Δ. Συζήτηση. Αυτή η οθόνη θα σας δώσει μια γρήγορη επισκόπηση των διαφόρων στατιστικών της Δ. Συζήτησή σας. Οι συνδέσεις στην αριστερή πλευρά αυτής της οθόνης επιτρέπουν σε σας να ελέγξετε κάθε ενέργεια που έχει στην Δ. Συζήτηση σας. Κάθε σελίδα θα έχει τις οδηγίες για το πώς να χρησιμοποιήσετε τα εργαλεία.',
	'ADMIN_LOG'					=> 'Ιστορικό ενεργειών διαχειριστή',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Εδώ εμφανίζονται όλες οι τελευταίες πέντε ενέργειες που έχουν πραγματοποιηθεί από τους διαχειριστές. Ένα πλήρες αντίγραφου του ιστορικού μπορείτε να δείτε στον πλοηγό ή στους ακόλουθους συνδέσμους.',
	'AVATAR_DIR_SIZE'			=> 'Μέγεθος φακέλου άβαταρ',

	'BOARD_STARTED'		=> 'Ημ. εκκίνησης κοινότητας',
	'BOARD_VERSION'		=> 'Έκδοση κοινότητας',

	'DATABASE_SERVER_INFO'	=> 'Διακομιστής βάσης',
	'DATABASE_SIZE'			=> 'Μέγεθος βάσης',

	// Enviroment configuration checks, mbstring related
	'ERROR_MBSTRING_FUNC_OVERLOAD'					=> 'Η λειτουργία υπερφόρτωσης δεν έχει ρυθμιστεί σωστά',
	'ERROR_MBSTRING_FUNC_OVERLOAD_EXPLAIN'			=> '<var>mbstring.func_overload</var> πρέπει να οριστεί σε 0 ή 4. Μπορείτε να ελέγξετε την τρέχον τιμή στην <samp>PHP Πληροφορίες</samp> σελίδα.',
	'ERROR_MBSTRING_ENCODING_TRANSLATION'			=> 'Η διαφάνεια κωδικοποίησης χαρακτήρων δεν έχει ρυθμιστεί σωστά.',
	'ERROR_MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> πρέπει να οριστεί σε 0. Μπορείτε να ελέγξετε την τρέχον τιμή στην <samp>PHP Πληροφορίες</samp> σελίδα.',
	'ERROR_MBSTRING_HTTP_INPUT'						=> 'HTTP εισόδος μετατροπή χαρακτήρων δεν έχει ρυθμιστεί σωστά',
	'ERROR_MBSTRING_HTTP_INPUT_EXPLAIN'				=> '<var>mbstring.http_input</var> πρέπει να οριστεί σε <samp>κωδικό</samp>.  Μπορείτε να ελέγξετε την τρέχον τιμή στην <samp>PHP Πληροφορίες</samp> σελίδα.',
	'ERROR_MBSTRING_HTTP_OUTPUT'					=> 'HTTP μετατροπή χαρακτήρων εξόδου δεν έχει ρυθμιστεί σωστά',
	'ERROR_MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> πρέπει να οριστεί σε <samp>κωδικό</samp>.  Μπορείτε να ελέγξετε την τρέχον τιμή στην <samp>PHP Πληροφορίες</samp> σελίδα.',	
	
	'FILES_PER_DAY'		=> 'Συνημμένα ανά ημέρα',
	'FORUM_STATS'		=> 'Στατιστικά κοινότητας',

	'GZIP_COMPRESSION'	=> 'Συμπίεση GZip',

	'NOT_AVAILABLE'		=> 'Μη διαθέσιμο',
	'NUMBER_FILES'		=> 'Αριθμός συνημμένων',
	'NUMBER_POSTS'		=> 'Αριθμός δημοσιεύσεων',
	'NUMBER_TOPICS'		=> 'Αριθμός θεμάτων',
	'NUMBER_USERS'		=> 'Αριθμός μελών',
	'NUMBER_ORPHAN'		=> 'Ορφανά συνημμένα',
	
	'PHP_VERSION_OLD'	=> 'Η έκδοση της PHP σε αυτόν το διακομιστή δεν θα υποστηρίζεται από τις μελλοντικές εκδόσεις του phpBB. %sΛεπτομέρειες%s',
	
	'POSTS_PER_DAY'		=> 'Δημοσιεύσεις ανά ημέρα',

	'PURGE_CACHE'			=> 'Εκκαθάριση Λανθάνουσας Μνήμης',
	'PURGE_CACHE_CONFIRM'	=> 'Είστε σίγουρος ότι θέλετε να καθαρίσετε την λανθάνουσα μνήμη;',
	'PURGE_CACHE_EXPLAIN'	=> 'Διαγραφή όλων των αρχείων της λανθάνουσας μνήμης, όπως όλα τα αποθηκευμένα αρχεία των στυλ και ερωτήματα.',
	'PURGE_SESSIONS'			=> 'Εκκαθάριση όλων των συνόδων',
	'PURGE_SESSIONS_CONFIRM'	=> 'Είστε σίγουρος ότι θέλετε να καθαρίσετε όλες τις συνόδους? Αυτό θα αποσυνδέσει όλα τα μέλη',
	'PURGE_SESSIONS_EXPLAIN'	=> 'Εκκαθάριση όλων των συνόδων. Αυτό θα αποσυνδέσει όλα τα μέλη με το άδειασμα του πίνακα session.',


	'RESET_DATE'					=> 'Επαναφορά ημ. εκκίνησης κοινότητας',
	'RESET_DATE_CONFIRM'			=> 'Είστε σίγουρος ότι θέλετε να επαναφέρετε την ημ. εκκίνησης της κοινότητας;',
	'RESET_ONLINE'					=> 'Απαλοιφή Περισσότερα Μέλη υπό σύνδεση',
	'RESET_ONLINE_CONFIRM'			=> 'Είστε σίγουρος ότι θέλετε να απαλείψετε τον μετρητή των περισσότερων χρηστών υπό σύνδεση;',
	'RESYNC_POSTCOUNTS'				=> 'Επανασυγχρονισμός μετρητών θεμάτων',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Μόνο υπαρκτές δημοσιεύσεις θα επανασυγχρονιστούν. Δημοσιεύσεις που έχουν διαγραφεί δεν θα μετρηθούν.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Είστε σίγουρος ότι θέλετε να επανασυγχρονίσετε τον μετρητή τον δημοσιεύσεων;',
	'RESYNC_POST_MARKING'			=> 'Επανασυγχρονισμός σημειωμένων θεμάτων',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Είστε σίγουρος ότι θέλετε να επανασυγχρονίσετε τα σημειωμένα θέματα;',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Πρώτα απεπιλέξτε όλα τα θέματα και μετά επιλέξτε αυτά στα οποία υπήρξε κάποια δραστηριότητα τους τελευταίους έξι μήνες.',
	'RESYNC_STATS'					=> 'Επανασυγχρονισμός στατιστικών',
	'RESYNC_STATS_CONFIRM'			=> 'Είστε σίγουρος ότι θέλετε να επανασυγχρονίσετε τα στατιστικά;',
	'RESYNC_STATS_EXPLAIN'			=> 'Επαναυπολογισμός συνολικού αριθμού δημοσιεύσεων, θεμάτων, μελών και συνημμένων.',
	'RUN'							=> 'Εκτέλεση τώρα',

	'STATISTIC'					=> 'Στατιστικά',
	'STATISTIC_RESYNC_OPTIONS'	=> 'Επανασυγχρονισμός ή μηδενισμός στατιστικών',

	'TOPICS_PER_DAY'	=> 'Θέματα ανά ημέρα',

	'UPLOAD_DIR_SIZE'	=> 'Μέγεθος συνημμένων σε δημοσιεύσεις',
	'USERS_PER_DAY'		=> 'Μέλη ανά ημέρα',

	'VALUE'						=> 'Τιμή',
	'VERSIONCHECK_FAIL'			=> 'Αποτυχία ελέγχου έκδοσης',
	'VERSIONCHECK_FORCE_UPDATE'	=> 'Επανέλεγχος έκδοσης',
	'VIEW_ADMIN_LOG'			=> 'Προβολή ιστορικού διαχειριστή',
	'VIEW_INACTIVE_USERS'		=> 'Προβολή ανενεργών μελών',

	'WELCOME_PHPBB'			=> 'Καλώς ήρθατε στο phpBB',
	'WRITABLE_CONFIG'		=> 'Το αρχείο ρυθμίσεών σας (config.php) είναι για την ώρα προσβάσιμο σε όλους. Σας συστήνουμε να το αλλάξετε σε 640 ή τουλάχιστον σε  644 (για παράδειγμα: <a href="http://en.wikipedia.org/wiki/Chmod" rel="external">chmod</a> 640 config.php).',

));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Ημερομηνία απενεργοποίησης',
	'INACTIVE_REASON'				=> 'Αιτία',
	'INACTIVE_REASON_MANUAL'		=> 'Ο λογαριασμός απενεργοποιήθηκε από τον διαχειριστή',
	'INACTIVE_REASON_PROFILE'		=> 'Επιτυχής αλλαγή δεδομένων προφίλ',
	'INACTIVE_REASON_REGISTER'		=> 'Προσφάτως δημιουργημένος λογαριασμός',
	'INACTIVE_REASON_REMIND'		=> 'Εξαναγκασμός μέλους για επανεργοποίηση',
	'INACTIVE_REASON_UNKNOWN'		=> 'Άγνωστο',
	'INACTIVE_USERS'				=> 'Απενεργοποιημένα μέλη',
	'INACTIVE_USERS_EXPLAIN'		=> 'Αυτή είναι η λίστα των μελών που δεν έχουν ενεργοποιήσει ακόμη τον λογαριασμό τους. Μπορείτε να τον ενεργοποιήσετε, διαγράψετε ή να του το θυμίσετε (με αποστολή ηλεκτρονικού ταχυδρομείου).',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Αυτοί είναι η λίστα των τελευταίων 10 εγγεγραμμένων μελών που δεν έχουν ενεργοποιήσει τον λογαριασμό τους. Μια ολόκληρη λίστα υπάρχει στο μενού ή στον ανάλογο σύνδεσμο, από την οποία μπορείτε να τον ενεργοποιήσετε, διαγράψετε ή να του το θυμίσετε (με αποστολή ηλεκτρονικού ταχυδρομείου).',

	'NO_INACTIVE_USERS'	=> 'Κανένα ανενεργό μέλος',

	'SORT_INACTIVE'		=> 'Ημερομηνία απενεργοποίησης',
	'SORT_LAST_VISIT'	=> 'Τελευταία επίσκεψη',
	'SORT_REASON'		=> 'Αιτία',
	'SORT_REG_DATE'		=> 'Ημερομηνία εγγραφής',
	'SORT_LAST_REMINDER'=> 'Τελευταία υπενθύμιση',
	'SORT_REMINDER'		=> 'Υπενθύμιση αποστολή',

	'USER_IS_INACTIVE'		=> 'Το μέλος είναι ανενεργό',
));

// Send statistics page
$lang = array_merge($lang, array(
	'EXPLAIN_SEND_STATISTICS'	=> 'Παρακαλώ στείλετε κάποιες στατιστικές πληροφορίες για τη διαμόρφωσή του κεντρικού υπολογιστή σας  και το φόρουμ στο phpBB. Όλες οι πληροφορίες που  εσείς θα προσδιορίστε θα διαγραφούν – και τα  στοιχεία είναι εξ ολοκλήρου <strong>ανώνυμα</strong>. Αυτά τα στατιστικά θα είναι διαθέσιμα για όλους. Με αυτές τις πληροφορίες θα βασιστούν οι  αποφάσεις μας για τις μελλοντικές εκδόσεις του phpBB. Τα δεδομένα αυτά θα είναι κοινόχρηστα με το έργο του PHP, την γλώσσα προγραμματισμού που είναι το phpBB.',
	'EXPLAIN_SHOW_STATISTICS'	=> 'Χρησιμοποιώντας το κουμπί πιο κάτω μπορείτε να κάνετε προβολή όλων των μεταβλητών που θα αποσταλούν.',
	'DONT_SEND_STATISTICS'		=> 'Επιστροφή στον ΠΕΔ  εάν δεν θέλετε να στείλετε πληροφορίες στατιστικών στο phpBB.',
	'GO_ACP_MAIN'				=> 'Πήγαινε στον ΠΕΔ αρχική σελίδα',
	'HIDE_STATISTICS'			=> 'Απόκρυψη λεπτομερειών',
	'SEND_STATISTICS'			=> 'Αποστολή στατιστικών πληροφορίες',
	'SHOW_STATISTICS'			=> 'Προβολή λεπτομερειών',
	'THANKS_SEND_STATISTICS'	=> 'Σας ευχαριστούμε για την υποβολή των πληροφοριών σας.',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Προσθέστε ή επεξεργαστείτε δικαιώματα πρόσβασης μέλους</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Προσθέστε ή επεξεργαστείτε δικαιώματα ομάδας μελών</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Προσθέστε ή επεξεργαστείτε δικαιώματα γενικών συντονιστών</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Προσθέστε ή επεξεργαστείτε δικαιώματα πρόσβασης ομάδων β€™ γενικών συντονιστών</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Προσθέστε ή επεξεργαστείτε δικαιώματα πρόσβασης €™ διαχειριστών</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Προσθέστε ή επεξεργαστείτε δικαιώματα πρόσβασης ομάδας β€™ διαχειριστών</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Προσθέστε ή επεξεργαστείτε διαχειριστές</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Προσθέστε ή επεξεργαστείτε γενικούς συντονιστές</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Προσθέστε ή επεξεργαστείτε δικαιώματα μελών β€™ πρόσβαση στην Δ. Συζήτηση </strong> από %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Προσθέστε ή επεξεργαστείτε δικαιώματα συντονιστών β€™ πρόσβαση στην Δ. Συζήτηση </strong> από %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Προσθέστε ή επεξεργαστείτε δικαιώματα ομάδων β€™ πρόσβαση στην Δ. Συζήτηση </strong> από %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Προσθέστε ή επεξεργαστείτε δικαιώματα ομάδας συντονιστών β€™ πρόσβαση στην Δ. Συζήτηση</strong> από %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Προσθέστε ή επεξεργαστείτε Συντονιστές</strong> από %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>Προσθέστε ή επεξεργαστείτε δικαιώματα στην Δ. Συζήτηση</strong> από %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Διαγραφή Διαχειριστών</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Διαγραφή Γενικών Συντονιστών</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Διαγραφή Συντονιστών</strong> από %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Διαγραφή Μελών/Ομάδων δικαιώματα στην Δ. Συζήτηση</strong> από %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Μεταφορά δικαιωμάτων από</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Δικαιώματα που αποκαθίστανται μετά από να χρησιμοποιήσει τα δικαιώματα από</strong><br />» %s',

	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Αποτυχημένη σύνδεση Διαχειριστή</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Επιτυχημένη σύνδεση Διαχειριστή</strong>',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>Προσθέστε ή επεξεργαστείτε επέκταση συνημμένου</strong><br />» %s',
	'LOG_ATTACHMENTS_DELETED'	=> '<strong>Διαγράφηκαν συνημμένα μέλους</strong><br>» %s',	
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Διαγράψτε επέκταση συνημμένου</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Φορτώστε επέκταση συνημμένου</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Προσθέστε επέκταση ομάδας</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Επεξεργαστείτε επέκταση ομάδας</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Διαγραφή επέκτασης ομάδας</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Φορτώστε ορφανό αρχείο στην δημοσίευση</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Διαγραφή ορφανού αρχείου</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Αποκλεισμένο μέλος από αποκλεισμό </strong> για το λόγο “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>Αποκλεισμένη IP από αποκλεισμό</strong> για τον λόγο “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>Αποκλεισμένο ηλεκτρονικό ταχυδρομείο από αποκλεισμό</strong> για το λόγο “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_USER'			=> '<strong>Αποκλεισμός μέλους</strong> για τον λόγο “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_IP'			=> '<strong>Αποκλεισμός IP</strong> για τον λόγο “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>Αποκλεισμός ηλεκτρονικού ταχυδρομείου</strong> για τον λόγο “<em>%1$s</em>”<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Απόσυρση αποκλεισμού μέλους</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>Απόσυρση αποκλεισμού IP</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>Απόσυρση αποκλεισμού ηλεκτρονικού ταχυδρομείου</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>Προσθήκη BBCode</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>Επεξεργασία BBCode</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>Διαγραφή BBCode</strong><br />» %s',

	'LOG_BOT_ADDED'		=> '<strong>Νέο bot προστέθηκε</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Διαγραφή bot</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Ενημέρωση υπάρχων bot </strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Το ιστορικό Διαχειριστή έχει διαγραφεί</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Διαγραφή ιστορικού σφαλμάτων</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Διαγραφή ιστορικού Συντονιστών</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Διαγραφή ιστορικού μέλους</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Διαγραφή ιστορικού μελών</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Μεταβολή ρυθμίσεων συνημμένων </strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Μεταβολή ρυθμίσεων εξουσιοδότησης</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Μεταβολή ρυθμίσεων άβαταρ</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Μεταβολή ρυθμίσεων cookie </strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>Μεταβολή ρυθμίσεων ηλεκτρονικού ταχυδρομείου</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Μεταβολή ρυθμίσεων χαρακτηριστικών Δ. Συζήτησης</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Μεταβολή ρυθμίσεων φόρτωσης</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Μεταβολή ρυθμίσεων προσωπικών μηνυμάτων</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Μεταβολή ρυθμίσεων δημοσίευσης</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Μεταβολή ρυθμίσεων εγγραφής μέλους</strong>',
	'LOG_CONFIG_FEED'			=> '<strong>Μεταβολή ρυθμίσεων τροφοδοσίας</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Μεταβολή ρυθμίσεων αναζήτησης</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Μεταβολή ρυθμίσεων ασφαλούς αναζήτησης</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Μεταβολή ρυθμίσεων κεντρικού υπολογιστή</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Μεταβολή ρυθμίσεων Δ. Συζήτησης</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Μεταβολή ρυθμίσεων υπογραφής</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Μεταβολή  ρυθμίσεων ενοχλητικών μηνυμάτων</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Αποδοχή θέματος</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>Νέα μηνύματα μέλους</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>Διαγραφή δημοσίευσης “%1$s” δημοσιευμένη από</strong><br />» %2$s',
	'LOG_DELETE_SHADOW_TOPIC'	=> '<strong>Διαγραφή θέματος σκιάς</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>Διαγραφή θέματος “%1$s” δημοσιευμένο από</strong><br />» %2$s',
	'LOG_FORK'					=> '<strong>Αντιγραφή θέματος</strong><br />» από %s',
	'LOG_LOCK'					=> '<strong>Κλείδωμα θέματος</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>Κλείδωμα δημοσίευσης</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>Συγχώνευση θεμάτων</strong> into topic<br />» %s',
	'LOG_MOVE'					=> '<strong>Μετακίνηση θέματος</strong><br />» από %1$s σε %2$s',
	'LOG_PM_REPORT_CLOSED'		=> '<strong>Κλεισμένα ΠΜ ιστορικό</strong><br />» %s',
	'LOG_PM_REPORT_DELETED'		=> '<strong>Διαγραμμένα ΠΜ ιστορικό</strong><br />» %s',
	'LOG_POST_APPROVED'			=> '<strong>Αποδοχή δημοσίευσης</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Απόρριψη δημοσίευσης “%1$s” για τον ακόλουθο λόγο</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>Επεξεργασία δημοσίευσης “%1$s” από τον</strong><br />» %2$s',
	'LOG_REPORT_CLOSED'			=> '<strong>Κλείδωμα αναφοράς</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>Διαγραφή αναφοράς</strong><br />» %s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Μετακίνηση διασπασμένων θεμάτων</strong><br />» to %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>Διάσπαση δημοσιεύσεων</strong><br />» από %s',

	'LOG_TOPIC_APPROVED'		=> '<strong>Αποδοχή θέματος</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>Απορρίφθηκε θέματα “%1$s” για τον ακόλουθο λόγο</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Επανασυγχρονίσθηκαν μετρητές θέματος</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Άλλαξε ο τύπος θέματος</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>Ξεκλειδώθηκε θέμα</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>Ξεκλειδώθηκε δημοσίευση</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>Προσθήκη μη επιτρεπτού ονόματος μέλους</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Διαγραφή μη επιτρεπτού όνομα μέλους</strong>',

	'LOG_DB_BACKUP'			=> '<strong>Αντίγραφο ασφαλείας βάσης</strong>',
	'LOG_DB_DELETE'			=> '<strong>Διαγραφή αντίγραφο ασφαλείας βάσης</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Επαναφορά αντίγραφο ασφαλείας βάσης</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>Αποκλεισμός IP/κεντρικού υπολογιστή από την λίστα μεταφόρτωσης</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>Προσθήκη IP/κεντρικού υπολογιστή στην λίστα μεταφόρτωσης</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>Αφαίρεση IP/κεντρικού υπολογιστή από την λίστα μεταφόρτωσης</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Σφάλμα Jabber</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>Σφάλμα ηλεκτρονικού ταχυδρομείου</strong><br />» %s',

	'LOG_FORUM_ADD'							=> '<strong>Δημιουργία νέας Δημ. συζήτησης</strong><br />» %s',
	'LOG_FORUM_COPIED_PERMISSIONS'			=> '<strong>Αντιγραφή φόρουμ δικαιώματα</strong> από %1$s<br />» %2$s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Διαγραφή Δ. Συζήτησης </strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Διαγραφή Δ. Συζήτησης και των υπό-συζητήσεων του</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Διαγραφή Δ. Συζήτησης ς και μεταφορά των υπό-συζητήσεων του</strong> στο %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Διαγραφή Δ. Συζήτησης και μεταφορά των θεμάτων του </strong> στο %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Διαγραφή Δ. Συζήτησης, των υπό-συζητήσεων του και μεταφορά δημοσιεύσεων</strong> στο %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Διαγραφή Δ. Συζήτησης, μετακίνηση δημοσιεύσεων</strong> στο %1$s <strong>και των υπό-συζητήσεων </strong> στο %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Διαγραφή Δ. Συζήτησης και των δημοσιεύσεων του</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Διαγραφή Δ. Συζήτησης, των δημοσιεύσεων και των υπό-συζητήσεων του</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Διαγραφή Δ. Συζήτησης και των δημοσιεύσεων, μετακίνηση υπό-συζητήσεων</strong> στο %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Επεξεργασία λεπτομερειών δημ. συζήτησης</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Μετακίνηση Δημ. συζήτησης</strong> %1$s <strong>κάτω</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Μετακίνηση Δημ. συζήτησης</strong> %1$s <strong>πάνω</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Επανασυγχρονισμός Δ. Συζήτησης</strong><br />» %s',

	'LOG_GENERAL_ERROR'	=> '<strong>Ένα γενικό σφάλμα</strong>: %1$s <br />» %2$s',

	'LOG_GROUP_CREATED'		=> '<strong>Δημιουργήθηκε νέα ομάδα</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Η ομάδα “%1$s” δηλώθηκε σαν βασική για τα μέλη</strong><br />» %2$s',
	'LOG_GROUP_DELETE'		=> '<strong>Ομάδα διαγράφηκε</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Συντονιστές ομάδας υποβιβάστηκαν στην ομάδα</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Μέλη προβιβάσθηκαν σε συντονιστές στην ομάδα</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Μέλη αφαιρέθηκαν από την ομάδα</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Ανανεώθηκαν λεπτομέρειες ομάδας</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>Προστέθηκε νέος συντονιστής την ομάδα</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>Προτέθηκε νέο μέλος στην ομάδα</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Εγκρίθηκαν μέλη στην ομάδα</strong> %1$s<br />» %2$s',
	'LOG_USERS_PENDING'		=> '<strong>Μέλη που καλούνται να ενταχθούν στην ομάδα “%1$s” αι χρειάζονται έγκριση</strong><br />» %2$s',
	
	'LOG_IMAGE_GENERATION_ERROR'	=> '<strong>Σφάλμα κατά τη δημιουργία της εικόνας</strong><br />»Λάθος στην %1$s και γραμμή %2$s: %3$s',	

	'LOG_IMAGESET_ADD_DB'			=> '<strong>Προστέθηκε νέο πακέτο εικόνων στην βάση</strong><br />» %s',
	'LOG_IMAGESET_ADD_FS'			=> '<strong>Προστέθηκε νέο πακέτο εικόνων στο σύστημα αρχείων</strong><br />» %s',
	'LOG_IMAGESET_DELETE'			=> '<strong>Διαγράφηκε πακέτο εικόνων</strong><br />» %s',
	'LOG_IMAGESET_EDIT_DETAILS'		=> '<strong>Επεξεργάστηκαν λεπτομέρειες πακέτου εικόνων</strong><br />» %s',
	'LOG_IMAGESET_EDIT'				=> '<strong>Επεξεργάστηκε πακέτο εικόνων</strong><br />» %s',
	'LOG_IMAGESET_EXPORT'			=> '<strong>Εξάχθηκε πακέτο εικόνων</strong><br />» %s',
	'LOG_IMAGESET_LANG_MISSING'		=> '<strong>Σύνολο εικόνων που λείπει “%2$s” στην τοποθεσία </strong><br />» %1$s',
	'LOG_IMAGESET_LANG_REFRESHED'	=> '<strong>Ο εντοπισμός της συλλογής εικόνων “%2$s” ανανεώθηκε</strong><br />» %1$s',
	'LOG_IMAGESET_REFRESHED'		=> '<strong>Ανανέωση πακέτου εικόνων</strong><br />» %s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Ενεργοποίηση ανενεργών μελών</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Διαγραφή ανενεργών μελών</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Αποστολή ηλεκτρονικού ταχυδρομείου υπενθύμισης στα ανενεργά μέλη</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Μετατροπή από %1$s σε phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>Εγκατάσταση phpBB %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Σύνοδος IP/πλοηγός/X_FORWARDED_FOR αποτυχημένη προσπάθεια</strong><br />»Μέλους IP “<em>%1$s</em>” ελέγξτε πάλι IP “<em>%2$s</em>”, μέλους συμβολοσειρά πλοηγού “<em>%3$s</em>” ελέγξτε πάλι σύνοδο συμβολοσειρά πλοηγού “<em>%4$s</em>” και μέλους X_FORWARDED_FOR συμβολοσειρά “<em>%5$s</em>” ελέγξτε πάλι σύνοδο X_FORWARDED_FOR συμβολοσειρά “<em>%6$s</em>”.',

	'LOG_JAB_CHANGED'			=> '<strong>Άλλαξε ο λογαριασμός Jabber</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Άλλαξε ο κωδικός πρόσβασης στο Jabber</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Καταχωρήθηκε ο λογαριασμός του Jabber</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Αλλάχθηκαν οι ρυθμίσεις του Jabber</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Διαγράφηκε πακέτο γλώσσας</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Εγκαταστάθηκε πακέτο γλώσσας</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Ανανεώθηκαν λεπτομέρειες πακέτου γλώσσας</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Αντικαταστάθηκε αρχείο γλώσσας</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Προστέθηκε αρχείο γλώσσας και αποθηκευτικέ στον φάκελο store</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>Αποστολή μαζικής αλληλογραφίας</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Άλλαξε ο συγγραφέας του θέματος “%1$s”</strong><br />» από %2$s σε %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>Απενεργοποίηση μονάδας</strong><br />» %s',
	'LOG_MODULE_ENABLE'		=> '<strong>Ενεργοποίηση μονάδας</strong><br />» %s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Μετακίνηση κάτω της μονάδας</strong><br />» %1$s κάτω από %2$s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Μετακίνηση πάνω της μονάδας</strong><br />» %1$s πάνω από %2$s',
	'LOG_MODULE_REMOVED'	=> '<strong>Αφαίρεση μονάδα</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Προσθήκη μονάδα</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Επεξεργασία μονάδας</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Προστέθηκε ρόλος Διαχειριστή</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Επεξεργάσθηκε ρόλος Διαχειριστή</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Αφαιρέθηκε ρόλος Διαχειριστή</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Προστέθηκε ρόλος Δ. Συζήτησης</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Επεξεργάσθηκε ρόλος Δ. Συζήτησης</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Αφαιρέθηκε ρόλος Δ. Συζήτησης</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Προστέθηκε ρόλος Συντονιστή</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Επεξεργάσθηκε ρόλος Συντονιστή</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Αφαιρέθηκε ρόλος Συντονιστή</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>Προστέθηκε ρόλος μέλους</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>Επεξεργάσθηκε ρόλος μέλους</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Αφαιρέθηκε ρόλος μέλους</strong><br />» %s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Ενεργοποιήθηκε πεδίο προφίλ</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Προστέθηκε πεδίο προφίλ</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Απενεργοποιήθηκε πεδίο προφίλ</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Άλλαξε πεδίο προφίλ</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Αφαιρέθηκε πεδίο προφίλ</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Πραγματοποιήθηκε καθαρισμός δημ. συζήτησης</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Πραγματοποιήθηκε αυτόματος καθαρισμός δημ. συζήτησης</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Απενεργοποιήθηκαν μέλη</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Πραγματοποιήθηκε καθαρισμός μελών και διαγραφή των δημοσιεύσεων τους</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Πραγματοποιήθηκε καθαρισμός μελών και διατήρηση των δημοσιεύσεων τους</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>Άδειασμα λανθάνουσας μνήμης</strong>',
	'LOG_PURGE_SESSIONS'		=> '<strong>Εκκαθάριση συνόδων</strong>',	

	'LOG_RANK_ADDED'		=> '<strong>Προστέθηκε νέος βαθμός</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>Αφαιρέθηκε βαθμός</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>Ενημερώθηκε βαθμός</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>Προσθέστε αναφοράς/απόρριψης λόγος</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Διαγραφή αναφοράς/απόρριψης λόγος</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Ενημέρωση αναφοράς/απόρριψης λόγος</strong><br />» %s',

	'LOG_RESET_DATE'			=> '<strong>Μηδενίσθηκε η ημερομηνία έναρξης της κοινότητας</strong>',
	'LOG_REFERER_INVALID'		=> '<strong>Αναφορά επικύρωσης  λείπει</strong><br />»Αναφορά ήταν “<em>%1$s</em>”. Το αίτημα απορρίφθηκε και η σύνοδος σταμάτησε.',
	'LOG_RESET_ONLINE'			=> '<strong>Μηδενίσθηκε ο μετρητής περισσοτέρων μελών σε σύνδεση</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>Επανασυγχρονίσθηκε ο μετρητής δημοσιεύσεων</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Επανασυγχρονισμός δικών σας θεμάτων</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Επανασυγχρονίσθηκαν τα στατιστικά θεμάτων, δημοσιεύσεων και μελών</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Δημιουργήθηκε το ευρετήριο αναζήτησης για</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Αφαιρέθηκε το ευρετήριο αναζήτησης για</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>Προστέθηκε νέο στυλ</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Διαγράφτηκε στυλ</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Επεξεργάσθηκε στυλ</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Εξήχθη στυλ</strong><br />» %s',

	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Προστέθηκαν νέα πρότυπα στην βάση</strong><br />» %s',
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Προστέθηκαν νέα πρότυπα στο σύστημα αρχείων</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Διαγράφηκαν αποθηκευμένες εκδόσεις πρότυπων στο πακέτο <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Διαγράφτηκε πακέτο πρότυπων</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Επεξεργάσθηκε το πακέτο προτύπων <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Επεξεργάσθηκαν οι λεπτομέρειες προτύπου</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Εξήχθη πακέτο πρότυπων</strong><br />» %s',
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Ενημερώθηκε πακέτο πρότυπων</strong><br />» %s',

	'LOG_THEME_ADD_DB'			=> '<strong>Προστέθηκε νέο θέμα στην βάση</strong><br />» %s',
	'LOG_THEME_ADD_FS'			=> '<strong>Προστέθηκε νέο θέμα στο σύστημα αρχείων</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Διαγράφτηκε θέμα</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Επεξεργάσθηκαν οι λεπτομέρειες θέματος</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Επεξεργάσθηκε το θέμα <em>%1$s</em></strong>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>Επεξεργάσθηκε το θέμα <em>%1$s</em></strong><br />» Αλλάχθηκε το αρχείο <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Εξήχθη θέμα</strong><br />» %s',
	'LOG_THEME_REFRESHED'		=> '<strong>Ανανεώθηκε θέμα</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>Αναβαθμίσθηκε η Βάση από την έκδοση %1$s στην έκδοση %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>Αναβαθμίσθηκε το phpBB από την έκδοση %1$s στην έκδοση %2$s</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>Ενεργοποιήθηκε μέλος</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Αποκλείσθηκε μέλος μέσω της διαχείρισης μελών</strong> για τον λόγο “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>Αποκλείσθηκε διεύθυνση IP μέσω της διαχείρισης μελών</strong> για τον λόγο “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>Αποκλείσθηκε διεύθυνση αλληλογραφίας μέσω της διαχείρισης μελών</strong> για τον λόγο “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Διαγράφτηκε μέλος</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Αφαιρέθηκαν όλα τα συνημμένα του μέλους</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Αφαιρέθηκε το άβαταρ του μέλους</strong><br />» %s',
	'LOG_USER_DEL_OUTBOX'	=> '<strong>Άδειασμα μέλους εξερχόμενα</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Διαγράφτηκαν όλες οι δημοσιεύσεις του μέλους</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Αφαιρέθηκε η υπογραφή του μέλους</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>Απενεργοποιήθηκε μέλος</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Μετακινήθηκαν δημοσιεύεις μέλους</strong><br />» από τον “%1$s”στην δημ. συζήτηση “%2$s”',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Αλλαγή κωδικού μέλους</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Αναγκάστε το μέλος να ενεργοποιήσει τον λογαριασμό του πάλι</strong><br />» %s',
	'LOG_USER_REMOVED_NR'	=> '<strong>Αφαίρεση πρόσφατα καταχωρημένη σημαία από το μέλος</strong><br />» %s',
	
	'LOG_USER_UPDATE_EMAIL'	=> '<strong>Το μέλος “%1$s” άλλαξε την διεύθυνση αλληλογραφίας</strong><br />» από “%2$s” σε “%3$s”',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Αλλαγή ονόματος μέλους </strong><br />» από “%1$s” σε “%2$s”',
	'LOG_USER_USER_UPDATE'	=> '<strong>Ενημερώθηκαν λεπτομέρειες μέλους</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>Ενεργοποιήθηκε λογαριασμός μέλους</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Αφαιρέθηκε άβαταρ μέλους</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>Αφαιρέθηκε υπογραφή μέλους</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Προστέθηκε ανατροφοδότηση μέλους</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>Προσθήκη καταχώρησης:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>Απενεργοποιήθηκε λογαριασμός μέλους</strong>',
	'LOG_USER_LOCK'				=> '<strong>Μέλος κλείδωσε θέμα του</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Μεταφέρθηκαν όλες οι δημοσιεύσεις στην Δ. Συζήτηση</strong>» %s',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Εξαναγκάσθηκε επανεργοποίηση λογαριασμού μέλους</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>Μέλος ξεκλείδωσε θέμα του</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Προστέθηκε προειδοποίηση μέλους</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>Η ακόλουθη προειδοποίηση δόθηκε στο μέλος</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>Το μέλος άλλαξε την βασική ομάδα</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Το μέλος υποβιβάστηκε από συντονιστής της ομάδας</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>Το μέλος γράφτηκε στην ομάδα</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>Το μέλος γράφτηκε στην ομάδα και πρέπει να αποδεχθεί</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Το μέλος αποχώρησε από την ομάδα</strong><br />» %s',

	'LOG_WARNING_DELETED'		=> '<strong>Διαγραφή μέλους προειδοποιήσεις</strong><br />» %s',
	'LOG_WARNINGS_DELETED'		=> '<strong>Διαγραφή %2$s μέλους προειδοποιήσεις</strong><br />» %1$s', // Example: '<strong>Deleted 2 user warnings</strong><br />» username'
	'LOG_WARNINGS_DELETED_ALL'	=> '<strong>Διαγραφή όλες τις προειδοποιήσεις μέλους</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>Προστέθηκε λογοκρισία λέξης</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Αφαιρέθηκε λογοκρισία λέξης</strong><br />» %s',
 'LOG_WORD_EDIT'			=> '<strong>Επεξεργάσθηκε λογοκρισία λέξης</strong><br />» %s',
));

?>