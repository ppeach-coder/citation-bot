<?php
declare(strict_types=1);

require_once(__DIR__ . '/../setup.php');

$ADSABS_GIVE_UP = TRUE;
$zotero_failures_count = 100000;

abstract class testBaseClass extends PHPUnit\Framework\TestCase {
  // Change these to temporarily disable sets of tests======================
  private $testing_skip_zotero = TRUE;                                           // TODO - broken
  private $testing_skip_bibcode= FALSE;                                           //
  private $testing_skip_google = FALSE;                                           //
  private $testing_skip_wiki   = FALSE;                                           //
  private $testing_skip_dx     = FALSE;                                           //
  private $testing_skip_arxiv  = FALSE;                                           //
  // =======================================================================
  
  function __construct() {
    parent::__construct();

   // Non-trusted builds
    if (!PHP_ADSABSAPIKEY) $this->testing_skip_bibcode = TRUE;
    if (!PHP_GOOGLEKEY) $this->testing_skip_google = TRUE;
    if (!getenv('PHP_OAUTH_CONSUMER_TOKEN') || !getenv('PHP_OAUTH_CONSUMER_SECRET') ||
        !getenv('PHP_OAUTH_ACCESS_TOKEN')   || !getenv('PHP_OAUTH_ACCESS_SECRET')) {
       $this->testing_skip_wiki = TRUE;
    }

    // Main build skips nothing
    if (getenv('TRAVIS_PULL_REQUEST') === 'false') {
       $this->testing_skip_zotero = FALSE;
       $this->testing_skip_bibcode= FALSE;
       $this->testing_skip_google = FALSE;
       $this->testing_skip_wiki   = FALSE;
       $this->testing_skip_dx     = FALSE;
       $this->testing_skip_arxiv  = FALSE;
    }

    make_ch_zotero();
  }

  protected function requires_secrets(callable $function) : void {
    if ($this->testing_skip_wiki) {
      echo 'S';
      ob_flush();
      $this->assertNull(NULL);
    } else {
      $function();
    }
  }
  
  protected function requires_google(callable $function) : void {
    if ($this->testing_skip_google) {
      echo 'G';
      ob_flush();
      $this->assertNull(NULL);
    } else {
      $function();
    }
  }

  protected function requires_dx(callable $function) : void {
    if ($this->testing_skip_dx) {
      echo 'X';
      ob_flush();
      $this->assertNull(NULL);
    } else {
      $function();
    }
  }
    
  protected function requires_arxiv(callable $function) : void {
    if ($this->testing_skip_arxiv) {
      echo 'V';
      ob_flush();
      $this->assertNull(NULL);
    } else {
      $function();
    }
  }

  // Only routines that absolutely need bibcode access since we are limited 
  protected function requires_bibcode(callable $function) : void {
    global $ADSABS_GIVE_UP;
    if ($this->testing_skip_bibcode) {
      echo 'B';
      ob_flush();
      $this->assertNull(NULL);
    } else {
      try {
        $ADSABS_GIVE_UP = FALSE;
        $function();
      } finally {
        $ADSABS_GIVE_UP = TRUE;
      }
    }
  }

  // allows us to turn off zoreto tests
  protected function requires_zotero(callable $function) : void {
    global $zotero_failures_count;
    if ($this->testing_skip_zotero) {
      echo 'Z';
      ob_flush();
      $this->assertNull(NULL);
    } else {
      try {
        $zotero_failures_count = 0;
        $function();
      } finally {
        $zotero_failures_count = 1000000;
      }
    }
  } 
  
  protected function make_citation(string $text) : Template {
    $this->assertSame('{{', mb_substr($text, 0, 2));
    $this->assertSame('}}', mb_substr($text, -2));
    $template = new Template();
    $template->parse_text($text);
    return $template;
  }
  
  protected function prepare_citation(string $text) : Template {
    $this->assertSame('{{', mb_substr($text, 0, 2));
    $this->assertSame('}}', mb_substr($text, -2));
    $template = new Template();
    $template->parse_text($text);
    $template->prepare();
    return $template;
  }
  
  protected function process_citation(string $text) : Template {
    $this->assertEquals('{{', mb_substr($text, 0, 2));
    $this->assertEquals('}}', mb_substr($text, -2));
    $page = new TestPage();
    $page->parse_text($text);
    $page->expand_text();
    $expanded_text = $page->parsed_text();
    $template = new Template();
    $template->parse_text($expanded_text);
    return $template;
  }
    
  protected function process_page(string $text) : TestPage { // Only used if more than just a citation template
    $page = new TestPage();
    $page->parse_text($text);
    $page->expand_text();
    return $page;
  }

  protected function parameter_parse_text_helper(string $text) : Parameter {
    $parameter = new Parameter();
    $parameter->parse_text($text);
    return $parameter;
  }

  protected function getDateAndYear(Template $input) : ?string {
    // Generates string that makes debugging easy and will throw error
    if (is_null($input->get2('year'))) return $input->get2('date') ; // Might be null too
    if (is_null($input->get2('date'))) return $input->get2('year') ;
    return 'Date is ' . $input->get2('date') . ' and year is ' . $input->get2('year');
  }

  protected function expand_via_zotero(string $text) :  Template {
    $expanded = $this->make_citation($text);
    expand_by_zotero($expanded);
    $expanded->tidy();
    return $expanded;
  }
 
  protected function reference_to_template(string $text) : Template {
    $text=trim($text);
    if (preg_match("~^(?:<(?:\s*)ref[^>]*?>)(.*)(?:<\s*?\/\s*?ref(?:\s*)>)$~i", $text, $matches)) {
      $template = new Template();
      $template->parse_text($matches[1]);
      return $template;
    } else {
      trigger_error('Non-reference passsed to reference_to_template: ' . $text);
    }
  }
}
