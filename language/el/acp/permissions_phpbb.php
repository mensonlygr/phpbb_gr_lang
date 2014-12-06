<?php

/**
*
* permissions_phpbb.php [Greek - El]
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

/**
*	EXTENSION-DEVELOPERS PLEASE NOTE
*
*	You are able to put your permission sets into your extension.
*	The permissions logic should be added via the 'core.permissions' event.
*	You can easily add new permission categories, types and permissions, by
*	simply merging them into the respective arrays.
*	The respective language strings should be added into a language file, that
*	start with 'permissions_', so they are automatically loaded within the ACP.
*/

$lang = array_merge($lang, array(
	'ACL_CAT_ACTIONS'		=> 'Ενέργεια',
	'ACL_CAT_CONTENT'		=> 'Περιεχόμενο',
	'ACL_CAT_FORUMS'		=> 'Δ. Συζητήσεις',
	'ACL_CAT_MISC'			=> 'Διάφορα',
	'ACL_CAT_PERMISSIONS'	=> 'Δικαιώματα',
	'ACL_CAT_PM'			=> 'Προσωπικά Μηνύματα',
	'ACL_CAT_POLLS'			=> 'Δημοψηφίσματα',
	'ACL_CAT_POST'			=> 'Δημοσίευση',
	'ACL_CAT_POST_ACTIONS'	=> 'Δημοσίευσης ενέργεια',
	'ACL_CAT_POSTING'		=> 'Δημοσίευση',
	'ACL_CAT_PROFILE'		=> 'Προφίλ',
	'ACL_CAT_SETTINGS'		=> 'Ρυθμίσεις',
	'ACL_CAT_TOPIC_ACTIONS'	=> 'Ενέργεια θέματος',
	'ACL_CAT_USER_GROUP'	=> 'Μέλη &amp; Ομάδες',
));

// User Permissions
$lang = array_merge($lang, array(
	'ACL_U_VIEWPROFILE'	=> 'Μπορεί να δει τα προφίλ, την λίστα μελών και σε σύνδεση λίστα',
	'ACL_U_CHGNAME'		=> 'Μπορεί να αλλάξει όνομα μέλους',
	'ACL_U_CHGPASSWD'	=> 'Μπορεί να αλλάξει κωδικό',
	'ACL_U_CHGEMAIL'		=> 'Μπορεί να αλλάξει την διεύθυνση ηλεκτρονικής αλληλογραφίας',
	'ACL_U_CHGAVATAR'		=> 'Μπορεί να αλλάξει άβαταρ',
	'ACL_U_CHGGRP'		=> 'Μπορεί να αλλάξει ομάδα προεπιλογής',
	'ACL_U_CHGPROFILEINFO'	=> 'Μπορεί να αλλάξει τα πεδία για τις πληροφορίες του προφίλ',

	'ACL_U_ATTACH'		=> 'Μπορεί να προσθέσει συνημμένα αρχεία',
	'ACL_U_DOWNLOAD'		=> 'Μπορεί να μεταφορτώσει αρχεία',
	'ACL_U_SAVEDRAFTS'	=> 'Μπορεί να αποθηκεύσει προσχέδια',
	'ACL_U_CHGCENSORS'	=> 'Μπορεί να απενεργοποιήσει λογοκριτές λέξης',
	'ACL_U_SIG'			=> 'Μπορεί να χρησιμοποιήσει υπογραφή',

	'ACL_U_SENDPM'		=> 'Μπορεί να στείλει προσωπικά μηνύματα',
	'ACL_U_MASSPM'		=> 'Μπορεί να στείλει προσωπικά μηνύματα σε περισσότερο από 1 μέλη',
	'ACL_U_MASSPM_GROUP'=> 'Μπορεί να στείλει μηνύματα σε ομάδες ',
	'ACL_U_READPM'		=> 'Μπορεί να διαβάσει προσωπικά μηνύματα',
	'ACL_U_PM_EDIT'		=> 'Μπορεί να επεξεργαστεί στα δικά του προσωπικά μηνύματα',
	'ACL_U_PM_DELETE'		=> 'Μπορεί να διαγράψει προσωπικά μηνύματα από το γραμματοκιβώτιο του',
	'ACL_U_PM_FORWARD'	=> 'Μπορεί να προωθήσει τα προσωπικά μηνύματα',
	'ACL_U_PM_EMAILPM'	=> 'Μπορεί να στείλει προσωπικά μηνύματα μέσω ηλεκτρονικής αλληλογραφίας',
	'ACL_U_PM_PRINTPM'	=> 'Μπορεί να εκτυπώσει προσωπικά μηνύματα',
	'ACL_U_PM_ATTACH'		=> 'Μπορεί να προσθέσει συνημμένα στα προσωπικά μηνύματα',
	'ACL_U_PM_DOWNLOAD'	=> 'Μπορεί να μεταφορτώσει αρχεία από τα προσωπικά μηνύματα',
	'ACL_U_PM_BBCODE'		=> 'Μπορεί να χρησιμοποιήσει BBCode στα προσωπικά μηνύματα',
	'ACL_U_PM_SMILIES'		=> 'Μπορεί να χρησιμοποιήσει smilies στα προσωπικά μηνύματα',
	'ACL_U_PM_IMG'		=> 'Μπορεί να χρησιμοποιήσει [img] BBCode ετικέτα στα προσωπικά μηνύματα',
	'ACL_U_PM_FLASH'		=> 'Μπορεί να χρησιμοποιήσει [flash] BBCode ετικέτα στα προσωπικά μηνύματα',

	'ACL_U_SENDEMAIL'		=> 'Μπορεί να στείλει ηλεκτρονικά ταχυδρομεία',
	'ACL_U_SENDIM'		=> 'Μπορεί να στείλει στιγμιαία μηνύματα',
	'ACL_U_IGNOREFLOOD'	=> 'Μπορεί να αγνοήσει όριο αναμονής',
	'ACL_U_HIDEONLINE'		=> 'Μπορεί να κάνει απόκρυψη την σε σύνδεση κατάσταση',
	'ACL_U_VIEWONLINE'		=> 'Μπορεί να βλέπει μέλη με απόκρυψη σε σύνδεση',
	'ACL_U_SEARCH'		=> 'Μπορεί να αναζητήσει στην Δ. Συζήτηση',
));

// Forum Permissions
$lang = array_merge($lang, array(
	'ACL_F_LIST'		=> 'Μπορεί να βλέπει τις Δ. Συζητήσεις',
	'ACL_F_READ'		=> 'Μπορεί να διαβάζει τις Δ. Συζητήσεις',
	'ACL_F_SEARCH'	=> 'Μπορεί να αναζητήσει στην Δ. Συζήτηση',
	'ACL_F_SUBSCRIBE'	=> 'Μπορεί να παρακολουθεί τις Δ. Συζητήσεις',
	'ACL_F_PRINT'		=> 'Μπορεί να εκτυπώσει θέματα',
	'ACL_F_EMAIL'		=> 'Μπορεί να προτείνει θέματα μέσω ηλεκτρονικής αλληλογραφίας',
	'ACL_F_BUMP'		=> 'Μπορεί να θέσει θέματα ως νέα',
	'ACL_F_USER_LOCK'	=> 'Μπορεί να κλειδώσει θέματά του',
	'ACL_F_DOWNLOAD'	=> 'Μπορεί να μεταφορτώσει αρχεία',
	'ACL_F_REPORT'	=> 'Μπορεί να αναφέρει δημοσιεύσεις',

	'ACL_F_POST'		=> 'Μπορεί να ξεκινήσει νέο θέμα',
	'ACL_F_STICKY'		=> 'Μπορεί να κάνει δημοσίευση σημείωση',
	'ACL_F_ANNOUNCE'	=> 'Μπορεί να κάνει δημοσίευση ανακοίνωση',
	'ACL_F_REPLY'		=> 'Μπορεί να απαντήσει στα θέματα',
	'ACL_F_EDIT'		=> 'Μπορεί να επεξεργαστεί δημοσιεύσεις του',
	'ACL_F_DELETE'		=> 'Μπορεί να διαγράψει οριστηκά τις δημοσιεύσεις του',
	'ACL_F_SOFTDELETE'	=> 'Μπορεί να "ψευδο" διαγράψει μόνο τις δικές του δημοσιεύσεις <br /> <em> Συντονιστές, οι οποίοι έχουν το δικαίωμα να εγκρίνουν δημοσιεύσεις, μπορούν να αποκαταστήσουν τη διαγραμμένη δημοσίευση. </ Em>',
	'ACL_F_IGNOREFLOOD' => 'Μπορεί να αγνοήσει το όριο αναμονής',
	'ACL_F_POSTCOUNT'	=> 'Αύξηση δημοσιεύσεων μετρητή<br /><em>Παρακαλώ σημειώστε ότι αυτή η ρύθμιση έχει επιπτώσεις μόνο στις νέες δημοσιεύσεις.</em>',
	'ACL_F_NOAPPROVE'	=> 'Μπορεί να δημοσιεύσει χωρίς να εγκριθεί',

	'ACL_F_ATTACH'		=> 'Μπορεί να προσθέσει συνημμένα αρχεία',
	'ACL_F_ICONS'		=> 'Μπορεί να χρησιμοποιήσει σύμβολα θεμάτων/δημοσιεύσεων',
	'ACL_F_BBCODE'	=> 'Μπορεί να χρησιμοποιήσει BBCode',
	'ACL_F_FLASH'		=> 'Μπορεί να χρησιμοποιήσει [flash] BBCode ετικέτα',
	'ACL_F_IMG'		=> 'Μπορεί να χρησιμοποιήσει [img] BBCode ετικέτα',
	'ACL_F_SIGS'		=> 'Μπορεί να χρησιμοποιήσει υπογραφή',
	'ACL_F_SMILIES'		=> 'Μπορεί να χρησιμοποιήσει smilies',

	'ACL_F_POLL'		=> 'Μπορεί να δημιουργήσει δημοψηφίσματα',
	'ACL_F_VOTE'		=> 'Μπορεί να ψηφίσει στα δημοψηφίσματα',
	'ACL_F_VOTECHG'	=> 'Μπορεί να αλλάξει τους υπάρχων ψήφους ',
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'ACL_M_EDIT'			=> 'Μπορεί να επεξεργαστεί δημοσιεύσεις',
	'ACL_M_DELETE'		=> 'Μπορεί να διαγράψει δημοσιεύσεις',
	'ACL_M_SOFTDELETE'	=> 'Μπορεί να "ψευδο" διαγράψει μόνο τις δικές του δημοσιεύσεις <br /> <em> Συντονιστές, οι οποίοι έχουν το δικαίωμα να εγκρίνουν δημοσιεύσεις, μπορούν να αποκαταστήσουν τη διαγραμμένη δημοσίευση. </ Em>',
	'ACL_M_APPROVE'		=> 'Μπορεί να εγκρίνει και να αποκαταστήσει δημοσιεύσεις',
	'ACL_M_REPORT'		=> 'Μπορεί να κλείσει και διαγράψει αναφορές',
	'ACL_M_CHGPOSTER'		=> 'Μπορεί να αλλάξει συγγραφέα δημοσίευσης',

	'ACL_M_MOVE'	=> 'Μπορεί να μετακινήσει θέματα',
	'ACL_M_LOCK'	=> 'Μπορεί να κλειδώσει θέματα',
	'ACL_M_SPLIT'	=> 'Μπορεί να διαχωρίσει θέματα',
	'ACL_M_MERGE'	=> 'Μπορεί να συγχωνεύση θέματα',

	'ACL_M_INFO'	=> 'Μπορεί να βλέπει λεπτομέρειες θεμάτων',
	'ACL_M_WARN'	=> 'Μπορεί να προειδοποιήσει<br /><em>Αυτή η ρύθμιση ορίζεται μόνο συνολικά. Δεν είναι με βάση το φόρουμ.</em>', // This moderator setting is only global (and not local)
	'ACL_M_BAN'	=> 'Μπορεί να διαχειριστεί απαγορεύσεις<br /><em>Αυτή η ρύθμιση ορίζεται μόνο συνολικά. Δεν είναι με βάση το φόρουμ.</em>', // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'ACL_A_BOARD'		=> 'Μπορεί να αλλάξει τις ρυθμίσεις της Δ. Συζήτησης/έλεγχο για ενημερώσεις',
	'ACL_A_SERVER'	=> 'Μπορεί να αλλάξει τις  ρυθμίσεις του διακομιστή και της επικοινωνίας',
	'ACL_A_JABBER'		=> 'Μπορεί να αλλάξει τις Jabber ρυθμίσεις',
	'ACL_A_PHPINFO'	=> 'Μπορεί να βλέπει τις ρυθμίσεις της PHP',

	'ACL_A_FORUM'		=> 'Μπορεί να διαχειριστεί τις Δ. Συζητήσεις',
	'ACL_A_FORUMADD'	=> 'Μπορεί να προσθέσει νέες Δ. Συζητήσεις',
	'ACL_A_FORUMDEL'	=> 'Μπορεί να διαγράψει Δ. Συζητήσεις',
	'ACL_A_PRUNE'		=> 'Μπορεί να αδειάσει Δ. Συζητήσεις',

	'ACL_A_ICONS'		=> 'Μπορεί να αλλάξει τα εικονίδια και τα smilies θέματος/δημοσίευσης ',
	'ACL_A_WORDS'		=> 'Μπορεί να αλλάξει λογοκριτές λέξεων',
	'ACL_A_BBCODE'	=> 'Μπορεί να BBCode ετικέτες',
	'ACL_A_ATTACH'		=> 'Μπορεί να αλλάξεις τις ρυθμίσεις συνημμένων',

	'ACL_A_USER'		=> 'Μπορεί να διαχειριστεί μέλη<br /><em>Αυτό περιλαμβάνει επίσης να δει τον πλοηγό των μελών μέσα από τον κατάλογο ποιος είναι σε σύνδεση.</em>',
	'ACL_A_USERDEL'	=> 'Μπορεί να διαγράψει μέλη',
	'ACL_A_GROUP'		=> 'Μπορεί να διαχειριστεί ομάδες',
	'ACL_A_GROUPADD'	=> 'Μπορεί να προσθέσει ομάδες',
	'ACL_A_GROUPDEL'	=> 'Μπορεί να διαγράψει ομάδες',
	'ACL_A_RANKS'		=> 'Μπορεί να διαχειριστεί βαθμούς',
	'ACL_A_PROFILE'	=> 'Μπορεί να διαχειριστεί το προσαρμοσμένο πεδία προφίλ',
	'ACL_A_NAMES'		=> 'Μπορεί να διαχειριστεί απαγορευμένα ονόματα',
	'ACL_A_BAN'		=> 'Μπορεί να διαχειριστεί απαγορεύσεις',

	'ACL_A_VIEWAUTH'	=> 'Μπορεί να δει τις αποτελεσματικές εγκρίσεις',
	'ACL_A_AUTHGROUPS'	=> 'Μπορεί να αλλάξει τις γενικές ρυθμίσεις μεμονωμένων ομάδων',
	'ACL_A_AUTHUSERS'	=> 'Μπορεί να αλλάξει τις γενικές ρυθμίσεις μεμονωμένων μελών',
	'ACL_A_FAUTH'		=> 'Μπορεί να αλλάξει τις γενικές ρυθμίσεις των Δ. Συζητήσεων',
	'ACL_A_MAUTH'		=> 'Can alter moderator permission class',
	'ACL_A_AAUTH'		=> 'Μπορεί να αλλάξει τις γενικές ρυθμίσεις διαχειριστών',
	'ACL_A_UAUTH'		=> 'Μπορεί να αλλάξει τις γενικές ρυθμίσεις μελών',
	'ACL_A_ROLES'		=> 'Μπορεί να διαχειριστεί ρόλους',
	'ACL_A_SWITCHPERM'	=> 'Μπορεί να χρησιμοποιήσει δικαιώματα άλλων ',

	'ACL_A_STYLES'		=> 'Μπορεί να διαχειριστεί στυλ',
	'ACL_A_EXTENSIONS'	=> 'Μπορεί να διαχειριστεί τις επεκτάσεις',
	'ACL_A_VIEWLOGS'	=> 'Μπορεί να βλέπει ιστορικό',
	'ACL_A_CLEARLOGS'	=> 'Μπορεί να καθαρίσει το ιστορικό',
	'ACL_A_MODULES'	=> 'Μπορεί να διαχειριστεί μονάδες',
	'ACL_A_LANGUAGE'	=> 'Μπορεί να διαχειριστεί πακέτα γλωσσών',
	'ACL_A_EMAIL'		=> 'Μπορεί να στείλει μαζική ηλεκτρονική αλληλογραφία',
	'ACL_A_BOTS'		=> 'Μπορεί να διαχειριστεί bots',
	'ACL_A_REASONS'	=> 'Μπορεί να διαχειριστεί αναφορές/λόγους αππόριψης',
	'ACL_A_BACKUP'	=> 'Μπορεί να κάνει αντίγραφο/επαναφορά βάσης',
	'ACL_A_SEARCH'	=> 'Μπορεί να διαχειριστεί το πρόγραμμα υποστήριξης αναζήτησης και τις ρυθμίσεις',
));
