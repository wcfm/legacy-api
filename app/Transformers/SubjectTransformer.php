<?php namespace Courses\Transformers;

class SubjectTransformer extends Transformer {

	protected function transformItem($item)
	{
		return [
			'id' => array_get($item, 'id'),
			'name' => array_get($item, 'name'),
		];
	}

	protected function getLinkParams()
	{
		return [
			'courses' => ['subjects.courses.index', ['id']],
			'subject' => ['subjects.show', ['id']],
			'subjects' => ['subjects.index', []],
		];
	}

}
