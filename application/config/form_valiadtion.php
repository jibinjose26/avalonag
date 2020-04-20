<?php
$config=[

'add_article_rules'=>[
				[
					'field'=> 'vision_title',
					'label'=> 'Vision Title',
					'rules'=> 'required|max_length[40]'
				],
				[
					'field'=> 'mission_title',
					'label'=> 'Mission Title',
					'rules'=> 'required|max_length[40]'
				],
				[
					'field'=> 'message',
					'label'=> 'Message',
					'rules'=> 'required|max_length[100]'
				]
	],

];