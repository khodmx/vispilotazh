<?php

namespace app\components;

use yii\base\Widget;
use app\models\Category;

class CategoryWidget extends Widget
{
    public $tpl;
    public $model;
    public $data;
    public $tree;
    public $menuHtml;

    public function init()
    {
        parent::init();
        if ($this->tpl === null) {
            $this->tpl = 'category';
        }
        $this->tpl .= '.php';
    }

    public function run()
    {
        // get cache
//        if ($this->tpl == 'category.php') {
//            $menu = Yii::$app->cache->get('category');
//            if ($menu) return $menu;
//        }

        $this->data = Category::find()
            ->indexBy('id')
            ->asArray()
            ->all();
        $this->tree = $this->getTree();
        $this->menuHtml = $this->getMenuHtml($this->tree);
        // set cache
//        if ($this->tpl == 'category.php') {
//            Yii::$app->cache->set('category', $this->menuHtml, 60);
//        }
        return $this->menuHtml;
    }

    protected function getTree()
    {
        $tree = [];

        foreach ($this->data as $id => &$node) {
            if (!$node['parent_id']) {
                $tree[$id] = &$node;
            } else {
                $this->data[$node['parent_id']]['children'][$node['id']] = &$node;
            }
        }
        return $tree;
    }

    protected function getMenuHtml($tree){
        $str = '';
        foreach ($tree as $category) {
            $str .= $this->catToTemplate($category);
        }
        return $str;
    }

    protected function catToTemplate($category)
    {
        ob_start();
        include __DIR__ . '/category_tpl/' . $this->tpl;
        return ob_get_clean();
    }

}