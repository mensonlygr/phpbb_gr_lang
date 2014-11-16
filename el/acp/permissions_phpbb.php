<?php
/**
* acp_permissions_phpbb (phpBB Permission Set) [Greek - El]
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

/**
*	MODDERS PLEASE NOTE
*	
*	You are able to put your permission sets into a separate file too by
*	prefixing the new file with permissions_ and putting it into the acp 
*	language folder.
*
*	An example of how the file could look like:
*
*	<code>
*
*	if (empty($lang) || !is_array($lang))
*	{
*		$lang = array();
*	}
*
*	// Adding new category
*	$lang['permission_cat']['bugs'] = 'Bugs';
*
*	// Adding new permission set
*	$lang['permission_type']['bug_'] = 'Bug Permissions';
*
*	// Adding the permissions
*	$lang = array_merge($lang, array(
*		'acl_bug_view'		=> array('lang' => 'Can view bug reports', 'cat' => 'bugs'),
*		'acl_bug_post'		=> array('lang' => 'Can post bugs', 'cat' => 'post'), // Using a phpBB category here
*	));
*
*	</code>
*/

// Define categories and permission types
$lang = array_merge($lang, array(
	'permission_cat'	=> array(
		'actions'		=> 'Ενέργεια',
		'content'		=> 'Περιεχόμενο',
		'forums'		=> 'Δ. Συζητήσεις',
		'misc'			=> 'Διάφορα',
		'permissions'	=> 'Δικαιώματα',
		'pm'			=> 'Προσωπικά Μηνύματα',
		'polls'			=> 'Δημοψηφίσματα',
		'post'			=> 'Δημοσίευση',
		'post_actions'	=> 'Δημοσίευσης ενέργεια',
		'posting'		=> 'Δημοσίευση',
		'profile'		=> 'Προφίλ',
		'settings'		=> 'Ρυθμίσεις',
		'topic_actions'	=> 'Θέματος ενέργεια',
		'user_group'	=> 'Μέλη &amp; Ομάδες',
	),

	// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type'	=> array(
		'u_'			=> 'Δικαιώματα Μελών',
		'a_'			=> 'Δικαιώματα Διαχειριστών',
		'm_'			=> 'Δικαιώματα Συντονιστών',
		'f_'			=> 'Δικαιώματα Δ. Συζήτησης',
		'global'		=> array(
			'm_'			=> 'Δικαιώματα Καθολικών Συντονιστών',
		),
	),
));

// User Permissions
$lang = array_merge($lang, array(
	'acl_u_viewprofile'	=> array('lang' => 'Μπορεί να κάνει προβολή του προφίλ, λίστα μελών και την σε σύνδεση λίστα', 'cat' => 'profile'),
	'acl_u_chgname'		=> array('lang' => 'Μπορεί να αλλάξει όνομα μέλους', 'cat' => 'profile'),
	'acl_u_chgpasswd'	=> array('lang' => 'Μπορεί να αλλάξει κωδικό,', 'cat' => 'profile'),
	'acl_u_chgemail'	=> array('lang' => 'Μπορεί να αλλάξει διεύθυνση ηλεκτρονικού ταχυδρομείου', 'cat' => 'profile'),
	'acl_u_chgavatar'	=> array('lang' => 'Μπορεί να αλλάξει άβαταρ', 'cat' => 'profile'),
	'acl_u_chggrp'		=> array('lang' => 'Μπορεί να αλλάξει ομάδα προεπιλογής', 'cat' => 'profile'),

	'acl_u_attach'		=> array('lang' => 'Μπορεί να προσθέσει συνημμένα αρχεία', 'cat' => 'post'),
	'acl_u_download'	=> array('lang' => 'Μπορεί να μεταφορτώσει αρχεία', 'cat' => 'post'),
	'acl_u_savedrafts'	=> array('lang' => 'Μπορεί να αποθηκεύσει προσχέδια', 'cat' => 'post'),
	'acl_u_chgcensors'	=> array('lang' => 'Μπορεί να απενεργοποιήσει λογοκριτές λέξης', 'cat' => 'post'),
	'acl_u_sig'			=> array('lang' => 'Μπορεί να χρησιμοποιήσει υπογραφή', 'cat' => 'post'),

	'acl_u_sendpm'		=> array('lang' => 'Μπορεί να στείλει προσωπικά μηνύματα', 'cat' => 'pm'),
	'acl_u_masspm'		=> array('lang' => 'Μπορεί να στείλει πολλαπλά προσωπικά μηνύματα σε μέλη και ομάδες', 'cat' => 'pm'),
	'acl_u_masspm_group'=> array('lang' => 'Μπορεί να στείλει μηνύματα σε ομάδες ', 'cat' => 'pm'),
	'acl_u_readpm'		=> array('lang' => 'Μπορεί να διαβάσει προσωπικά μηνύματα', 'cat' => 'pm'),
	'acl_u_pm_edit'		=> array('lang' => 'Μπορεί να επεξεργαστεί στα δικά του προσωπικά μηνύματα', 'cat' => 'pm'),
	'acl_u_pm_delete'	=> array('lang' => 'Μπορεί να διαγράψει προσωπικά μηνύματα από το γραμματοκιβώτιο του', 'cat' => 'pm'),
	'acl_u_pm_forward'	=> array('lang' => 'Μπορεί να προωθήσει τα προσωπικά μηνύματα', 'cat' => 'pm'),
	'acl_u_pm_emailpm'	=> array('lang' => 'Μπορεί να στείλει προσωπικά μηνύματα μέσω ηλεκτρονικού ταχυδρομείου', 'cat' => 'pm'),
	'acl_u_pm_printpm'	=> array('lang' => 'Μπορεί να εκτυπώσει προσωπικά μηνύματα', 'cat' => 'pm'),
	'acl_u_pm_attach'	=> array('lang' => 'Μπορεί να προσθέσει συνημμένα στα προσωπικά μηνύματα', 'cat' => 'pm'),
	'acl_u_pm_download'	=> array('lang' => 'Μπορεί να μεταφορτώσει στα προσωπικά μηνύματα', 'cat' => 'pm'),
	'acl_u_pm_bbcode'	=> array('lang' => 'Μπορεί να χρησιμοποιήσει BBCode στα προσωπικά μηνύματα', 'cat' => 'pm'),
	'acl_u_pm_smilies'	=> array('lang' => 'Μπορεί να χρησιμοποιήσει εικονίδια στα προσωπικά μηνύματα', 'cat' => 'pm'),
	'acl_u_pm_img'		=> array('lang' => 'Μπορεί να χρησιμοποιήσει [img] BBCode ετικέτα στα προσωπικά μηνύματα', 'cat' => 'pm'),
	'acl_u_pm_flash'	=> array('lang' => 'Μπορεί να χρησιμοποιήσει [flash] BBCode ετικέτα στα προσωπικά μηνύματα', 'cat' => 'pm'),

	'acl_u_sendemail'	=> array('lang' => 'Μπορεί να στείλει ηλεκτρονικά ταχυδρομεία', 'cat' => 'misc'),
	'acl_u_sendim'		=> array('lang' => 'Μπορεί να στείλει στιγμιαία μηνύματα', 'cat' => 'misc'),
	'acl_u_ignoreflood'	=> array('lang' => 'Μπορεί να αγνοήσει όριο αναμονής', 'cat' => 'misc'),
	'acl_u_hideonline'	=> array('lang' => 'Μπορεί να κάνει απόκρυψη την σε απευθείας σύνδεση κατάσταση ', 'cat' => 'misc'),
	'acl_u_viewonline'	=> array('lang' => 'Μπορεί να βλέπει μέλη με απόκρυψη σε απευθείας σύνδεση', 'cat' => 'misc'),
	'acl_u_search'		=> array('lang' => 'Μπορεί να αναζητήσει στην Δ. Συζήτηση', 'cat' => 'misc'),
));

// Forum Permissions
$lang = array_merge($lang, array(
	'acl_f_list'		=> array('lang' => 'Μπορεί να βλέπει τις Δ. Συζητήσεις', 'cat' => 'post'),
	'acl_f_read'		=> array('lang' => 'Μπορεί να διαβάζει τις Δ. Συζητήσεις', 'cat' => 'post'),
	'acl_f_post'		=> array('lang' => 'Μπορεί να ξεκινήσει νέο θέμα', 'cat' => 'post'),
	'acl_f_reply'		=> array('lang' => 'Μπορεί να απαντήσει στα θέματα', 'cat' => 'post'),
	'acl_f_icons'		=> array('lang' => 'Μπορεί να χρησιμοποιήσει σύμβολα θεμάτων/δημοσιεύσεων', 'cat' => 'post'),
	'acl_f_announce'	=> array('lang' => 'Μπορεί να κάνει δημοσίευση ανακοίνωση', 'cat' => 'post'),
	'acl_f_sticky'		=> array('lang' => 'Μπορεί να κάνει δημοσίευση σημείωση', 'cat' => 'post'),

	'acl_f_poll'		=> array('lang' => 'Μπορεί να δημιουργήσει δημοψηφίσματα', 'cat' => 'polls'),
	'acl_f_vote'		=> array('lang' => 'Μπορεί να ψηφίσει στα δημοψηφίσματα', 'cat' => 'polls'),
	'acl_f_votechg'		=> array('lang' => 'Μπορεί να αλλάξει τους υπάρχων ψήφους ', 'cat' => 'polls'),

	'acl_f_attach'		=> array('lang' => 'Μπορεί να προσθέσει συνημμένα αρχεία', 'cat' => 'content'),
	'acl_f_download'	=> array('lang' => 'Μπορεί να μεταφορτώσει αρχεία', 'cat' => 'content'),
	'acl_f_sigs'		=> array('lang' => 'Μπορεί να χρησιμοποιήσει υπογραφή', 'cat' => 'content'),
	'acl_f_bbcode'		=> array('lang' => 'Μπορεί να χρησιμοποιήσει BBCode', 'cat' => 'content'),
	'acl_f_smilies'		=> array('lang' => 'Μπορεί να χρησιμοποιήσει εικονίδια', 'cat' => 'content'),
	'acl_f_img'			=> array('lang' => 'Μπορεί να χρησιμοποιήσει [img] BBCode ετικέτα', 'cat' => 'content'),
	'acl_f_flash'		=> array('lang' => 'Μπορεί να χρησιμοποιήσει [flash] BBCode ετικέτα', 'cat' => 'content'),

	'acl_f_edit'		=> array('lang' => 'Μπορεί να επεξεργαστεί δημοσιεύσεις του', 'cat' => 'actions'),
	'acl_f_delete'		=> array('lang' => 'Μπορεί να διαγράψει δημοσιεύσεις του', 'cat' => 'actions'),
	'acl_f_user_lock'	=> array('lang' => 'Μπορεί να κλειδώσει θέματά του', 'cat' => 'actions'),
	'acl_f_bump'		=> array('lang' => 'Μπορεί να θέσει θέματα ως νέα', 'cat' => 'actions'),
	'acl_f_report'		=> array('lang' => 'Μπορεί να αναφέρει δημοσιεύσεις', 'cat' => 'actions'),
	'acl_f_subscribe'	=> array('lang' => 'Μπορεί να παρακολουθεί τις Δ. Συζητήσεις', 'cat' => 'actions'),
	'acl_f_print'		=> array('lang' => 'Μπορεί να εκτυπώσει θέματα', 'cat' => 'actions'),
	'acl_f_email'		=> array('lang' => 'Μπορεί να προτείνει θέματα μέσω ηλεκτρονικού τα ταχυδρομείου', 'cat' => 'actions'),

	'acl_f_search'		=> array('lang' => 'Μπορεί να αναζητήσει στην Δ. Συζήτηση', 'cat' => 'misc'),
	'acl_f_ignoreflood' => array('lang' => 'Μπορεί να αγνοήσει το όριο αναμονής', 'cat' => 'misc'),
	'acl_f_postcount'	=> array('lang' => 'Αύξηση δημοσιεύσεων μετρητή<br /><em>Παρακαλώ σημειώστε ότι αυτή η ρύθμιση έχει επιπτώσεις μόνο στις νέες δημοσιεύσεις.</em>', 'cat' => 'misc'),
	'acl_f_noapprove'	=> array('lang' => 'Μπορεί να δημοσιεύσει χωρίς να εγκριθεί', 'cat' => 'misc'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_edit'		=> array('lang' => 'Μπορεί να επεξεργαστεί δημοσιεύσεις', 'cat' => 'post_actions'),
	'acl_m_delete'		=> array('lang' => 'Μπορεί να διαγράψει δημοσιεύσεις', 'cat' => 'post_actions'),
	'acl_m_approve'		=> array('lang' => 'Μπορεί να εγκρίνει δημοσιεύσεις', 'cat' => 'post_actions'),
	'acl_m_report'		=> array('lang' => 'Μπορεί να κλείσει και διαγράψει αναφορές', 'cat' => 'post_actions'),
	'acl_m_chgposter'	=> array('lang' => 'Μπορεί να αλλάξει συγγραφέα δημοσίευσης', 'cat' => 'post_actions'),

	'acl_m_move'	=> array('lang' => 'Μπορεί να μετακινήσει θέματα', 'cat' => 'topic_actions'),
	'acl_m_lock'	=> array('lang' => 'Μπορεί να κλειδώσει θέματα', 'cat' => 'topic_actions'),
	'acl_m_split'	=> array('lang' => 'Μπορεί να διαχωρίσει θέματα', 'cat' => 'topic_actions'),
	'acl_m_merge'	=> array('lang' => 'Μπορεί να συγχωνεύση θέματα', 'cat' => 'topic_actions'),

	'acl_m_info'	=> array('lang' => 'Μπορεί να βλέπει λεπτομέρειες θεμάτων,', 'cat' => 'misc'),
	'acl_m_warn'	=> array('lang' => 'Μπορεί να προειδοποιήσει<br /><em>Αυτή η ρύθμιση ορίζεται μόνο συνολικά. Δεν είναι με βάση το φόρουμ.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
	'acl_m_ban'		=> array('lang' => 'Μπορεί να διαχειριστεί απαγορεύσεις<br /><em>Αυτή η ρύθμιση ορίζεται μόνο συνολικά. Δεν είναι με βάση το φόρουμ.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_board'		=> array('lang' => 'Μπορεί να αλλάξει Δ. Συζήτησης ρυθμίσεις/έλεγχο για ενημερώσεις', 'cat' => 'settings'),
	'acl_a_server'		=> array('lang' => 'Μπορεί να αλλάξει τις τοποθετήσεις κεντρικών υπολογιστών/επικοινωνίας', 'cat' => 'settings'),
	'acl_a_jabber'		=> array('lang' => 'Μπορεί να αλλάξει τις Jabber ρυθμίσεις', 'cat' => 'settings'),
	'acl_a_phpinfo'		=> array('lang' => 'Μπορεί να βλέπει τις ρυθμίσεις', 'cat' => 'settings'),

	'acl_a_forum'		=> array('lang' => 'Μπορεί να διαχειριστεί τις Δ. Συζητήσεις', 'cat' => 'forums'),
	'acl_a_forumadd'	=> array('lang' => 'Μπορεί να προσθέσει νέες Δ. Συζητήσεις', 'cat' => 'forums'),
	'acl_a_forumdel'	=> array('lang' => 'Μπορεί να διαγράψει Δ. Συζητήσεις', 'cat' => 'forums'),
	'acl_a_prune'		=> array('lang' => 'Μπορεί να αδειάσει Δ. Συζητήσεις', 'cat' => 'forums'),

	'acl_a_icons'		=> array('lang' => 'Μπορεί να αλλάξει θέματος/δημοσίευσης σύμβολα και εικονίδια', 'cat' => 'posting'),
	'acl_a_words'		=> array('lang' => 'Μπορεί να αλλάξει λογοκριτές λέξεων', 'cat' => 'posting'),
	'acl_a_bbcode'		=> array('lang' => 'Μπορεί να BBCode ετικέτες', 'cat' => 'posting'),
	'acl_a_attach'		=> array('lang' => 'Μπορεί να αλλάξεις τις ρυθμίσεις συνημμένων', 'cat' => 'posting'),

	'acl_a_user'		=> array('lang' => 'Μπορεί να διαχειριστεί μέλη<br /><em>Αυτό περιλαμβάνει επίσης να δει τον πλοηγό των μελών μέσα στον κατάλογο ποιος είναι σε σύνδεση.</em>', 'cat' => 'user_group'),
	'acl_a_userdel'		=> array('lang' => 'Μπορεί να διαγράψει μέλη', 'cat' => 'user_group'),
	'acl_a_group'		=> array('lang' => 'Μπορεί να διαχειριστεί ομάδες', 'cat' => 'user_group'),
	'acl_a_groupadd'	=> array('lang' => 'Μπορεί να προσθέσει ομάδες', 'cat' => 'user_group'),
	'acl_a_groupdel'	=> array('lang' => 'Μπορεί να διαγράψει ομάδες', 'cat' => 'user_group'),
	'acl_a_ranks'		=> array('lang' => 'Μπορεί να διαχειριστεί βαθμούς', 'cat' => 'user_group'),
	'acl_a_profile'		=> array('lang' => 'Μπορεί να διαχειριστεί πεδία προφίλ', 'cat' => 'user_group'),
	'acl_a_names'		=> array('lang' => 'Μπορεί να διαχειριστεί απαγορευμένα ονόματα', 'cat' => 'user_group'),
	'acl_a_ban'			=> array('lang' => 'Μπορεί να διαχειριστεί απαγορεύσεις', 'cat' => 'user_group'),

	'acl_a_viewauth'	=> array('lang' => 'Μπορεί να βλέπει τις αποτελεσματικές εγκρίσεις', 'cat' => 'permissions'),
	'acl_a_authgroups'	=> array('lang' => 'Μπορεί να αλλάξει τις γενικές ρυθμίσεις μεμονωμένων ομάδων', 'cat' => 'permissions'),
	'acl_a_authusers'	=> array('lang' => 'Μπορεί να αλλάξει τις γενικές ρυθμίσεις μεμονωμένων μελών', 'cat' => 'permissions'),
	'acl_a_fauth'		=> array('lang' => 'Μπορεί να αλλάξει τις γενικές ρυθμίσεις των Δ. Συζητήσεων', 'cat' => 'permissions'),
	'acl_a_mauth'		=> array('lang' => 'Μπορεί να αλλάξει τις γενικές ρυθμίσεις συντονιστών', 'cat' => 'permissions'),
	'acl_a_aauth'		=> array('lang' => 'Μπορεί να αλλάξει τις γενικές ρυθμίσεις διαχειριστών', 'cat' => 'permissions'),
	'acl_a_uauth'		=> array('lang' => 'Μπορεί να αλλάξει τις γενικές ρυθμίσεις μελών', 'cat' => 'permissions'),
	'acl_a_roles'		=> array('lang' => 'Μπορεί να διαχειριστεί ρόλους', 'cat' => 'permissions'),
	'acl_a_switchperm'	=> array('lang' => 'Μπορεί να χρησιμοποιήσει άλλα δικαιώματα', 'cat' => 'permissions'),

	'acl_a_styles'		=> array('lang' => 'Μπορεί να διαχειριστεί στυλ', 'cat' => 'misc'),
	'acl_a_viewlogs'	=> array('lang' => 'Μπορεί να βλέπει ιστορικό', 'cat' => 'misc'),
	'acl_a_clearlogs'	=> array('lang' => 'Μπορεί να καθαρίσει το ιστορικό', 'cat' => 'misc'),
	'acl_a_modules'		=> array('lang' => 'Μπορεί να διαχειριστεί μονάδες', 'cat' => 'misc'),
	'acl_a_language'	=> array('lang' => 'Μπορεί να διαχειριστεί πακέτα γλωσσών', 'cat' => 'misc'),
	'acl_a_email'		=> array('lang' => 'Μπορεί να διαχειριστεί μαζικό ηλεκτρονικό ταχυδρομείο', 'cat' => 'misc'),
	'acl_a_bots'		=> array('lang' => 'Μπορεί να διαχειριστεί bots', 'cat' => 'misc'),
	'acl_a_reasons'		=> array('lang' => 'Μπορεί να διαχειριστεί αναφορές/λόγους αππόριψης', 'cat' => 'misc'),
	'acl_a_backup'		=> array('lang' => 'Μπορεί να κάνει αντίγραφο ασφαλείας/επαναφορά βάσης', 'cat' => 'misc'),
	'acl_a_search'		=> array('lang' => 'Μπορεί να διαχειριστεί το πρόγραμμα υποστήριξης αναζήτησης και τις ρυθμίσεις', 'cat' => 'misc'),
));

?>