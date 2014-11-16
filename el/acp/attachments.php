<?php
/** 
*
* acp_attachments [Greek - El]
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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Εδώ μπορείτε να παραμετροποιήσετε τις βασικές επιλογές για τα Συνημμένα και τις συσχετιζόμενες ειδικές κατηγορίες.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Εδώ μπορείτε να προσθέσετε, διαγράψετε, αλλάξετε ή απενεργοποιήσετε τις Ομάδες Επεκτάσεων σας. Πρόσθετες επιλογές περιλαμβάνουν την ανάθεση ειδικών κατηγοριών σε αυτές, αλλαγή του τρόπου μεταφόρτωσης και καθορισμός ενός εικονιδίου που θα εμφανίζεται μπροστά από το Συνημμένο που ανήκει στην Ομάδα.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Εδώ μπορείτε να διαχειριστείτε τις Επιτρεπτές Καταλήξεις. Για να τις ενεργοποιήσετε μεταβείτε στο Πίνακα Ελέγχου Ομάδων Καταλήξεων. Προτείνουμε να μην επιτρέψετε καταλήξεις γλωσσών προγραμματισμού (όπως οι <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code>, κ.τ.λ.β€¦).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Εδώ μπορείτε να δείτε Ορφανά Αρχεία. Αυτό συμβαίνει τις περισσότερες φορές όταν κάποιος χρήστης επισυνάψει κάποιο αρχείο αλλά δεν υποβάλει το δημοσίευμα. Έχετε την δυνατότητα να διαγράψετε αυτά τα αρχεία ή να τα επισυνάψετε σε ήδη υπάρχοντες δημοσιεύσεις. Αυτό απαιτεί μια υπάρχουσα Ταυτότητα Δημοσίευσης (post ID), την οποία πρέπει να καθορίσετε μόνος σας. Αυτό θα εκχωρήσει το ήδη ανεβασμένο συνημμένο στην δημοσίευση που βάλατε.',
	'ADD_EXTENSION'						=> 'Προσθήκη Επέκτασης',
	'ADD_EXTENSION_GROUP'				=> 'Προσθήκη Ομάδας Επεκτάσεων',
	'ADMIN_UPLOAD_ERROR'				=> 'Σφάλμα κατά την επισύναψη του αρχείου: “%s”.',
	'ALLOWED_FORUMS'					=> 'Επιτρεπτές Δ. Συζητήσεις',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Δυνατότητα δημοσίευσης των καθορισμένων επεκτάσεων στην επιλεγμένη (ή σε όλα αν επιλεγεί) Δ. Συζήτηση.',
	'ALLOWED_IN_PM_POST'				=> 'Επιτρέπονται',
	'ALLOW_ATTACHMENTS'					=> 'Επιτρέψτε Συνημμένα',
	'ALLOW_ALL_FORUMS'					=> 'Επιτρέψτε σε Όλες της Δ. Συζητήσεις',
	'ALLOW_IN_PM'						=> 'Επιτρέψτε σε Προσωπικά Μηνύματα',
	'ALLOW_PM_ATTACHMENTS'				=> 'Επιτρέψτε Συνημμένα σε Προσωπικά Μηνύματα',
	'ALLOW_SELECTED_FORUMS'				=> 'Μόνο στις κάτωθι επιλεγμένες Δ. Συζητήσεις',
	'ASSIGNED_EXTENSIONS'				=> 'Προκαθορισμένες Καταλήξεις',
	'ASSIGNED_GROUP'					=> 'Προκαθορισμένος Ομάδες Καταλήξεων',
	'ATTACH_EXTENSIONS_URL'				=> 'Επεκτάσεις',
	'ATTACH_EXT_GROUPS_URL'				=> 'Ομάδες Επεκτάσεων',
	'ATTACH_ID'							=> 'Ταυτότητα',
	'ATTACH_MAX_FILESIZE'				=> 'Μέγιστο Μέγεθος Αρχείου',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Μέγιστο Μέγεθος Κάθε Αρχείου, βάζοντας 0 δεν έχουμε όριο.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Μέγιστο Μέγεθος αρχείου ανά Προσωπικό Μήνυμα',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Το μέγιστο μέγεθος των συνημμένων αρχείων στα προσωπικά μηνύματα, προσθέστε 0 για χωρίς όριο.',
	'ATTACH_ORPHAN_URL'					=> 'Ορφανά Συνημμένα',
	'ATTACH_POST_ID'					=> 'Ταυτότητα Δημοσίευσης',
	'ATTACH_QUOTA'						=> 'Συνολικό μέγεθος συνημμένων',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Μέγιστος αποθηκευτικός χώρος για όλες τις Δ. Συζητήσεις, βάζοντας 0 δεν έχουμε όριο.',
	'ATTACH_TO_POST'					=> 'Επισυνάψτε Αρχείο στην Δημοσίευση',

	'CAT_FLASH_FILES'			=> 'Αρχεία Flash',
	'CAT_IMAGES'				=> 'Εικόνες',
	'CAT_QUICKTIME_FILES'		=> 'Αρχεία Quicktime',
	'CAT_RM_FILES'				=> 'Αρχεία RealMedia',
	'CAT_WM_FILES'				=> 'Αρχεία Windows Media',
	'CHECK_CONTENT'				=> 'Έλεγχος αρχείων συνημμένων',
	'CHECK_CONTENT_EXPLAIN'		=> 'Ορισμένοι πλοηγοί μπορεί να εξαπατηθούν για να υποθέσουν ένα ανακριβές είδος κωδικοποίησης για τα φορτωμένα αρχεία. Αυτή η επιλογή εξασφαλίζει ότι τέτοια αρχεία που πιθανών να προκαλέσουν αυτό  να απορριφθούν.',
	'CREATE_GROUP'				=> 'Δημιουργία νέας Κατηγορίας',
	'CREATE_THUMBNAIL'			=> 'Δημιουργία Μικρογραφίας',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Δημιουργία Μικρογραφίας σε όλες τις δυνατές θέσεις.',

	'DEFINE_ALLOWED_IPS'			=> 'Καθορίστε επιτρεπτά Ips/κεντρικούς υπολογιστές',
	'DEFINE_DISALLOWED_IPS'			=> 'Καθορίστε μη επιτρεπτά IPs/κεντρικούς υπολογιστές',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'Για να προσθέσετε διαφορετικά IPs ή κεντρικούς υπολογιστές πληκτρολογήστε το καθένα σε διαφορετική γραμμή. Δια εύρος διευθύνσεων IP χωρίστε της πρώτη και την τελευταία με μείον (-), για χαρακτήρα μπαλαντέρ βάλτε “*”.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Μπορείτε να αφαιρέσετε (ή να αποκλείσετε) πολλαπλές διευθύνσεις IP χρησιμοποιώντας τον κατάλληλο συνδυασμό ποντικιού και πληκτρολογίου του υπολογιστή σας και του Πλοηγού σας. Οι εξαιρούμενες IPs θα είναι με μπλε φόντο.',
	'DISPLAY_INLINED'				=> 'Εμβόλιμη Εμφάνιση Εικόνων',
	'DISPLAY_INLINED_EXPLAIN'		=> 'Αν επιλεγεί "Όχι" οι εικόνες θα εμφανίζονται σαν δεσμός.',
	'DISPLAY_ORDER'					=> 'Καθορισμός σειράς προβολής συνημμένων',
	'DISPLAY_ORDER_EXPLAIN'			=> 'Ταξινόμηση προβολής συνημμένων κατά ώρα.',
	
	'EDIT_EXTENSION_GROUP'			=> 'Επεξεργασία Ομάδας Επεκτάσεων',
	'EXCLUDE_ENTERED_IP'			=> 'Επιλέξτε για Εξαίρεση του Εισαγόμενου IP/κεντρικού υπολογιστή.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'Εξαίρεση IP από τα επιτρεπτά IPs/κεντρικούς υπολογιστές',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Εξαίρεση IP από τα μη επιτρεπτά IPs/κεντρικούς υπολογιστές',
	'EXTENSIONS_UPDATED'			=> 'Επιτυχής ενημέρωση Επεκτάσεων.',
	'EXTENSION_EXIST'				=> 'Η Επέκταση %s υπάρχει ήδη.',
	'EXTENSION_GROUP'				=> 'Ομάδα Επεκτάσεων',
	'EXTENSION_GROUPS'				=> 'Ομάδες Επεκτάσεων',
	'EXTENSION_GROUP_DELETED'		=> 'Η Ομάδα Επεκτάσεων Διαγράφηκε.',
	'EXTENSION_GROUP_EXIST'			=> 'Η Ομάδα Επεκτάσεων %s υπάρχει ήδη.',
	
	'EXT_GROUP_ARCHIVES'			=> 'Συμπιεσμένα αρχεία',
	'EXT_GROUP_DOCUMENTS'			=> 'Έγγραφα',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Μεταφορτώσιμα αρχεία',
	'EXT_GROUP_FLASH_FILES'			=> 'Αρχεία Flash',
	'EXT_GROUP_IMAGES'				=> 'Εικόνες',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Απλό κείμενο',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Quicktime πολυμέσα',
	'EXT_GROUP_REAL_MEDIA'			=> 'Real πολυμέσα',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Windows πολυμέσα',	

	'GO_TO_EXTENSIONS'		=> 'Πηγαίνετε στην Σελίδα Ελέγχου Επεκτάσεων',
	'GROUP_NAME'			=> 'Όνομα Ομάδας',

	'IMAGE_LINK_SIZE'			=> 'Διαστάσεις δεσμού Εικόνας',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Προβολή της συνημμένης εικόνας σαν κείμενο αν υπερβαίνει το μέγεθος αυτό. Για απενεργοποίηση αυτής της επιλογής θέστε τις διαστάσεις σε 0px επί 0px.',
	'IMAGICK_PATH'				=> 'Διαδρομή  Imagemagick',
	'IMAGICK_PATH_EXPLAIN'		=> 'Πλήρης διαδρομή για την εφαρμογή μετατροπής  imagemagick, π.χ. <samp>/usr/bin/</samp>.',

	'MAX_ATTACHMENTS'				=> 'Μέγιστος αριθμός  Συνημμένων ανά δημοσίευση',
	'MAX_ATTACHMENTS_PM'			=> 'Μέγιστος αριθμός Συνημμένων στα προσωπικά μηνύματα',
	'MAX_EXTGROUP_FILESIZE'			=> 'Μέγιστο μέγεθος αρχείου',
	'MAX_IMAGE_SIZE'				=> 'Μέγιστες διαστάσεις εικόνας',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Μέγιστο μέγεθος συνημμένης εικόνας. Θέστε τις τιμές σε 0px επί 0px για απενεργοποίηση ελέγχου διάστασής της.',
	'MAX_THUMB_WIDTH'				=> 'Μέγιστο πλάτος μικρογραφίας σε εικονοστοιχεία',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'Μια δημιουργήσα μικρογραφία δεν θα υπερβαίνει το πλάτος που ορίζετε εδώ.',
	'MIN_THUMB_FILESIZE'			=> 'Ελάχιστο μέγεθος αρχείου μικρογραφίας',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Μην δημιουργούνται μικρογραφίες για εικόνες μικρότερες από',
	'MODE_INLINE'					=> 'Εμβόλιμη Εμφάνιση',
	'MODE_PHYSICAL'					=> 'Φυσική Εμφάνιση',

	'NOT_ALLOWED_IN_PM'			=> 'Επιτρεπτό μόνο σε Δημοσίευση',
	'NOT_ALLOWED_IN_PM_POST'	=> 'Δεν επιτρέπεται',
	'NOT_ASSIGNED'				=> 'Δεν ορίζεται',
	'NO_EXT_GROUP'				=> 'Καμία',
	'NO_EXT_GROUP_NAME'			=> 'Δεν εισήχθη όνομα Ομάδας',
	'NO_EXT_GROUP_SPECIFIED'	=> 'Δεν καθορίσθηκε Ομάδα Επεκτάσεων.',
	'NO_FILE_CAT'				=> 'Καμία',
	'NO_IMAGE'					=> 'Δεν υπάρχει εικόνα',
	'NO_THUMBNAIL_SUPPORT'		=> 'Η υποστήριξη Μικρογραφίας έχει καταστραφεί. Για περαιτέρω χρήση θα πρέπει να υπάρχει η Επέκταση GD ή να εγκατασταθεί το Ιmagemagick. Κανένα από τα δύο δεν βρέθηκε.',
	'NO_UPLOAD_DIR'				=> 'Ο φάκελος μεταφόρτωσης που καθορίσατε δεν υπάρχει.',
	'NO_WRITE_UPLOAD'			=> 'Δεν μπορούν να γίνουν εγγραφές στον φάκελο μεταφόρτωσης που καθορίσατε. Παρακαλώ αλλάξτε τα Δικαιώματα του για να μπορεί ο διακομιστής να κάνει εγγραφές εκεί.',

	'ONLY_ALLOWED_IN_PM'	=> 'Επιτρεπτό μόνο σε Προσωπικό Μήνυμα',
	'ORDER_ALLOW_DENY'		=> 'Επιτρεπτό',
	'ORDER_DENY_ALLOW'		=> 'Μη Επιτρεπτό',

	'REMOVE_ALLOWED_IPS'		=> 'Αφαίρεση ή άρση αποκλεισμού <em>επιτρεπτών</em> IP/κεντρικούς υπολογιστές',
	'REMOVE_DISALLOWED_IPS'		=> 'Αφαίρεση ή άρση-αποκλεισμού <em>μη επιτρεπτών</em> IPs/κεντρικούς υπολογιστές',

	'SEARCH_IMAGICK'				=> 'Αναζήτηση για Imagemagick',
	'SECURE_ALLOW_DENY'				=> 'Λίστα Επιτρεπτών και μη',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Αλλάζει η συμπεριφορά της λίστας άδειας/απαγόρευσης εάν οι ασφαλείς μεταφορτώσεις είναι ενεργοποιημένες σε μία λίστα από   <strong>επιτρεπόμενες</strong> (Allow) ή π.χ <strong>απαγορευμένες διευθύνσεις</strong> (Deny).',
	'SECURE_DOWNLOADS'				=> 'Ενεργοποιήστε Ασφαλή μεταφόρτωση',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'Με αυτή την επιλογή ενεργοποιημένη, οι μεταφορτώσεις είναι περιορισμένες για τις IP και τα hostname που καθορίζετε.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Οι Ασφαλείς Μεταφορτώσεις δεν είναι ενεργές. Οι κάτωθι επιλογές θα χρησιμοποιηθούν όταν ενεργοποιηθούν οι Ασφαλείς μεταφορτώσεις.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=>
 'Η λίστα IP ενημερώθηκε με επιτυχία.',
	'SECURE_EMPTY_REFERRER'			=> 'Επιτρέψτε κενό Αναφορέα',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Οι Ασφαλείς Μεταφορτώσεις βασίζονται στους Αναφορείς. Θέλετε να επιτρέψετε τις μεταφορτώσεις σε αυτούς που δεν συγκαταλέγονται
 σε αυτούς;',
	'SETTINGS_CAT_IMAGES'			=> 'Επιλογές κατηγορίας Εικόνων',
	'SPECIAL_CATEGORY'				=> 'Ειδική Κατηγορία',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Οι Ειδικές Κατηγορίες διαφέρουν στον τρόπο απεικόνισής τους μέσα σε δημοσιεύσεις.',
	'SUCCESSFULLY_UPLOADED'			=> 'Επιτυχής αποστολή αρχείου.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Επιτυχής προσθήκη Ομάδας Επεκτάσεων.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Επιτυχής ενημέρωση Ομάδας Επεκτάσεων.',

	'UPLOADING_FILES'				=> 'Ανέβασμα αρχείου',
	'UPLOADING_FILE_TO'				=> 'Ανέβασμα αρχείου “%1$s” στον αριθμό δημοσίευσης %2$d…',
	'UPLOAD_DENIED_FORUM'			=> 'Δεν έχετε τα απαραίτητα δικαιώματα για ανέβασμα αρχείου στην δημόσια συζήτηση “%s”.',
	'UPLOAD_DIR'					=> 'Φάκελος ανεβάσματος',
	'UPLOAD_DIR_EXPLAIN'			=> 'Φάκελος προορισμού συνημμένων. Σημειώστε ότι αν αλλάξετε αυτόν τον φάκελο εφόσον περιέχει αρχεία θα πρέπει να μεταφέρετε χειροκίνητα τα αρχεία στην νέα τους διαδρομή.',
	'UPLOAD_ICON'					=> 'Ανέβασμα σύμβολο',
	'UPLOAD_NOT_DIR'				=> 'Η διαδρομή που ορίσατε δεν φαίνεται να αντιστοιχεί με υπαρκτό φάκελο.',
));

?>
