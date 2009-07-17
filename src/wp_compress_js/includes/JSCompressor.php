<?php
	/**
	 * Merges every .js-file in directory/ies $dirs
	 * into one file and compresses them using
	 * Dead Edwards JavaScript-Packer
	 * 
	 * @class JSCompressor
	 */
	class JSCompressor {
		private $code;

		/**
		 * Gets all JS-code in directory/ies $dirs
		 *
		 * @method __construct
		 */
		public function __construct($dirs=array(), $files=array()) {
		    $this->code = '';
		    $this->dirs = $dirs;
		    $this->files = $files;
		}

		/**
		 * Packs the JS-code using Dean Edwards JS-packer
		 *
		 * @method pack
		 */
		public function pack() {
		    $this->getCodeFromDirsAndFiles();
			$packer = new JavaScriptPacker($this->code);

			return $packer->pack();
		}

		/**
		 * Gets all JS-code in directory/ies $dirs
		 *
		 * @method getCodeFromDirs
		 */
		private function getCodeFromDirs() {
			$dirs = $this->dirs;

			if(!is_array($dirs)) {
				$tmp = $dirs;
				$dirs = array();
				$dirs[] = $tmp;
			}

			foreach($dirs as $dir) {
				$dh = opendir($dir);
				if($dh) {
					while($f = readdir($dh)) {
						if('js' == end(explode('.', $f))) {
							$this->code .= file_get_contents("$dir/$f");
						}
					}
				}
			}
		}
		
		/**
		 * Gets all JS-code from $files
		 *
		 * @method getCodeFromFiles
		 */
		private function getCodeFromFiles() {
            $files = $this->files;
			if(!is_array($files)) {
                //single file
			}

            //array of files
			foreach($files as $file) {
			    if('js' == end(explode('.', $file))) {
				    $this->code .= file_get_contents($file);
			    }
            }
		}
		
		/**
		 * Gets all JS-code from $files and $dirs (wrap method for getCodeFrom(Files|Dirs)
		 *
		 * @method getCodeFromDirsAndFiles
		 */
		private function getCodeFromDirsAndFiles() {
		    $this->getCodeFromFiles();
		    $this->getCodeFromDirs();
		}
	}
?>
