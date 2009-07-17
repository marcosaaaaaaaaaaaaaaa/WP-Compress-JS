<?php
require_once('simpletest/autorun.php');
require_once('defines.php');
require_once('wp_mock/functions.php');

//$html = "<b>bold text</b><a href=howdy.html>click me</a>";
//preg_match_all("/(<([\w]+)[^>]*>)(.*)(<\/\\2>)/", $html, $matches, PREG_SET_ORDER);
$html = "<script type='text/javascript' src='http://localhost/blog/wp-content/plugins/proplayer/js/swfobject.js'></script><link rel=\"alternate\" type=\"application/rss+xml\" title=\"Feed de Blog Install &raquo;\" href=\"http://localhost/blog/?feed=rss2\" />";
preg_match_all("/(<script[^>]*>)(.*)(<\/\\2>)/", $html, $matches, PREG_SET_ORDER);
echo "<pre>";
foreach ($matches as $val) {
    echo "matched: " . $val[0] . "<br>";
    echo "part 1: " . $val[1] . "<br>";
    echo "part 2: " . $val[3] . "<br>";
    echo "part 3: " . $val[4] . "<br><br>";
}
echo "</pre>";

var_dump($phones);
die();
class TestRunner extends TestSuite {

    function TestRunner() {
        $this->TestSuite('Run All Tests !!!');
        $this->addFile(WP_COMPRESS_JS_TEST_ROOT . '/BufferScriptExtractorTest.php');
    }
    
}
?>

