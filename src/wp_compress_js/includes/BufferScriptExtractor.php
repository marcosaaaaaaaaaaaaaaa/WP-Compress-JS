<?php

class BufferScriptExtractor {

    function __construct() {
        $this->willReturnJS = false;
        $this->willReturnArray = false;
    }
    
    function getScripts() {
        $this->willReturnJS = true;
        return $this;
    }
    
    function asArray() {
        $this->willReturnArray = true;
        return $this;
    }
    
    function fromHeader() {
        $content = $this->getContentsFromBuffer("header");
        if($this->willReturnArray)
            return $this->extractScriptURLsFromContent($content);
            
        return array();
    }
    
    function fromFooter() {
        $content = $this->getContentsFromBuffer("footer");
        if($this->willReturnArray)
            return $this->extractScriptURLsFromContent($content);
            
        return array();
    }
  
    private function extractScriptURLsFromContent($content) {
        return array();
    }
    
    /**
	 * Gets all contents from wp header (with ob_ buffer functions), return this content.
	 * 
	 * @param $content or "header" or  "footer".
	 * @return get_header content string
	 * @method getCodeFromFiles
	 */
    private function getContentsFromBuffer($content) {
        if($content === "header") {
            ob_start();
            get_header();
            $output = ob_get_contents();
            ob_end_clean();
            return $output;
        }
        
        if($content === "footer") {
            ob_start();
            get_footer();
            $output = ob_get_contents();
            ob_end_clean();
            return $output;
        }
        
        return "";
    }
}
?>
