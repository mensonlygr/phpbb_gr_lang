<?php
/**
*
* captcha_qa [Greek - El]
*
* @package language
* @version $Id: captcha_qa.php 10848 2010-11-07 14:00:05Z git-gate $
* @copyright (c) 2009 phpBB Group
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
	'CAPTCHA_QA'				=> 'Q&amp;A',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Αυτή η ερώτηση είναι ένα μέσο για τον εντοπισμό και την πρόληψη αυτόματων εγγραφών.',
	'CONFIRM_QUESTION_WRONG'	=> 'Έχετε υποβάλει μια λάθος απάντηση στην ερώτηση οπτικής επιβεβαίωσης.',

	'QUESTION_ANSWERS'			=> 'Απαντήσεις',
	'ANSWERS_EXPLAIN'			=> 'Οι απαντήσεις. Παρακαλώ γράψτε μία απάντηση σε κάθε γραμμή.',
	'CONFIRM_QUESTION'			=> 'Ερώτηση',

	'ANSWER'					=> 'Απάντηση',
	'QUESTIONS'					=> 'Ερωτήσεις',
	'EDIT_QUESTION'				=> 'Επεξεργασία ερώτησης',
	'QUESTIONS_EXPLAIN'			=> 'Για κάθε υποβολή φόρμας όταν έχετε ενεργοποιήσει την Q & A μονάδα θα ζητηθεί στα μέλη ένα από τα ερωτήματα που αναφέρονται εδώ. Θα πρέπει να περιέχει τουλάχιστον μία ερώτηση στην προεπιλεγμένη γλώσσα της Δ. Συζήτησης για να μπορέσετε να χρησιμοποιήσετε αυτή την μονάδα. Οι ερωτήσεις θα πρέπει να είναι απλές για τις ομάδες που θα απευθύνονται, αλλά πέρα από τις ικανότητες του  Google™. Επίσης, να θυμάστε να αλλάζετε τις ερωτήσεις  τακτικά. Εάν η ερώτησή σας βασίζεται σε σημεία στίξης, την ορθογραφία ή κεφαλαία, χρησιμοποιήστε τον αυστηρό έλεγχο.',
	'QUESTION_DELETED'			=> 'Ερώτηση διαγραφή',
	'QUESTION_LANG'			=> 'Γλώσσα',
	'QUESTION_LANG_EXPLAIN'		=> 'Η γλώσσα στην οποία είναι γραμμένα η ερώτηση και η απάντηση.',
	'QUESTION_STRICT'			=> 'Αυστηρός έλεγχος ',
	'QUESTION_STRICT_EXPLAIN'	=> 'Αν ενεργοποιηθεί, θα γίνετε έλεγχος για λέξεις με κεφαλαία γράμματα  και κενά.',

	'QUESTION_TEXT'				=> 'Κείμενο ερώτησης',
	'QUESTION_TEXT_EXPLAIN'		=> 'Το ερώτημα που θα παρουσιάζεται στον χρήστη.',

	'QA_ERROR_MSG'				=> 'Παρακαλώ συμπληρώστε όλα τα πεδία και εισάγετε τουλάχιστον μια απάντηση.',
	'QA_LAST_QUESTION'			=> 'Δεν μπορείτε να διαγράψετε όλα τα ερωτήματα, ενώ η μονάδα είναι ενεργή.',
	
));
?>