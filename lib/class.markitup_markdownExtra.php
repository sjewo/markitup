<?php
	if (!class_exists('Parsedown')) {
		require_once (rex_path::addon('markitup','vendor/parsedown/Parsedown.php')); //todo: use $this
	}
	if (!class_exists('ParsedownExtra')) {
		require_once (rex_path::addon('markitup','vendor/parsedown/ParsedownExtra.php'));
	}

	class markitup_markdownExtra extends ParsedownExtra {
		
	}
?>
