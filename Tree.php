<?php
namespace app;
class Tree
{
	static public $treeList = array();
	public function create($data, $pid = 0)
	{
		foreach ($data as $key => $value) {
			if ($value['pid'] == $pid) {
				self::$treeList[] = $value;
				unset($data[$key]);
				self::create($data, $value['id']);
			}
		}
		return self::$treeList;
	}
}