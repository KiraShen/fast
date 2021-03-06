<?php

namespace app\admin\controller\blog;

use app\common\controller\Backend;
use fast\Tree;
use think\Controller;
use think\Request;

/**
 * 博客分类管理
 *
 * @icon fa fa-circle-o
 */
class Category extends Backend
{

    protected $noNeedRight = ['selectpage'];

    /**
     * BlogCategory模型对象
     */
    protected $model = null;
    protected $categorylist = [];

    public function _initialize()
    {
        parent::_initialize();
        $this->model = model('BlogCategory');
        $this->view->assign("flagList", $this->model->getFlagList());
        $this->view->assign("statusList", $this->model->getStatusList());

        $tree = Tree::instance();
        $tree->init(collection($this->model->order('weigh desc,id desc')->select())->toArray(), 'pid');
        $this->categorylist = $tree->getTreeList($tree->getTreeArray(0), 'name');
        $categorydata = [0 => ['name' => __('None')]];
        foreach ($this->categorylist as $k => $v)
        {
            $categorydata[$v['id']] = $v;
        }
        $this->view->assign("parentList", $categorydata);

    }

    public function selectpage()
    {
        return parent::selectpage();
    }

}
