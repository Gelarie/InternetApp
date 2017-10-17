<?php
class Menu {
	static $items=	['<li class="active"><a>Start</a></li>',
					'<li class="active"><a>About</a></li>',
					'<li class="active"><a>Top List</a></li>'];
	static $ref_items= 	['<li><a href="index.php?page=1">Start</a></li>',
						'<li><a href="index.php?page=2">About</a></li>',
						'<li><a href="index.php?page=3">Top List</a></li>'];
	static $beginfile = '<div class="container">
						<div class="row">
							<div class="navbar navbar-default">
								<div class="container">
									<div class="navbar-header">
										<a class="navbar-brand" href="index.php?page=1">Game</a>
									</div>
									<div class="collapse navbar-collapse" id="menu">
										<ul class="nav navbar-nav">';
	static $endfile = '</ul>
				</div>
			</div>
		</div>
	</div>
</div>';
	static public function renderMenu($number){
		switch($number){
			case 1: return self::$beginfile.self::$items[0].self::$ref_items[1].self::$ref_items[2].self::$endfile;
			break;
			case 2: return self::$beginfile.self::$ref_items[0].self::$items[1].self::$ref_items[2].self::$endfile;
			break;
			case 3: return self::$beginfile.self::$ref_items[0].self::$ref_items[1].self::$items[2].self::$endfile;
			break;
		}
	}

}