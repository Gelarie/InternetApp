<?php 
	class Content {
		static $pages = ['assets/index.html', 'assets/about.html' , 'assets/toplist.html'];
		static function getPages($page){
			return file_get_contents(self::$pages[$page]);
		}

	}
?>