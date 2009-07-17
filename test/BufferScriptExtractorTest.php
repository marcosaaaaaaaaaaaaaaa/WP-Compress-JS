<?php
/*  Copyright 2009  Marcos Machado  (email : marcos.renan@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

require_once('simpletest/autorun.php');
require_once('defines.php');
require_once(WP_COMPRESS_JS_ROOT . '/includes/BufferScriptExtractor.php');

class BufferScriptExtractorTest extends UnitTestCase {

    function testGetScriptsAsArrayFromHeaderAndFooter() {
        $extractor = new BufferScriptExtractor();
        $header_scripts = $extractor->getScripts()->asArray()->fromHeader();
        $footer_scripts = $extractor->getScripts()->asArray()->fromFooter();
        
        $this->assertTrue(count($header_scripts) > 0);
        $this->assertTrue(count($footer_scripts) > 0);
        //@unlink('/temp/test.log');
        //$log = new Log('/temp/test.log');
        //$this->assertFalse(file_exists('/temp/test.log'));
        //$log->message('Should write this to a file');
        //$this->assertTrue(file_exists('/temp/test.log'));
    }
}
?>
