<?php
use UI\Window;
use UI\Size;
use UI\Controls\Entry;
use UI\Controls\Label;
use UI\Controls\Button;
use UI\Controls\Grid;
//创建一个窗口
//参数一表示窗口标题
//参数二表示窗口大小
//参数三表示是否显示菜单
$win = new Window('简单的计算器', new Size(640, 480), true);

//创建一个文本框
//Entry::Normal 普通单行文本框
//Entry::Password 密码框
//Entry::Search 搜索框
$num1 = new Entry(Entry::Normal);
$num2 = new Entry(Entry::Normal);
$ret = new Entry(Entry::Normal);

//创建一个标签
$lab = new Label('+');

//创建一个按钮
$btn = new class('计算') extends Button {
    public function __construct($text) {
        parent::__construct($text);
    }

    protected function onClick() {
        global $num1, $num2, $ret;
        $n1 = $num1->getText();
        $n2 = $num2->getText();
        $ret->setText($n1 + $n2);
    }
};

//创建一个网格
$grid = new Grid();

//把上面的控件加入到网格布局中
$grid->append($num1, 0, 0, 1, 1, true, Grid::Center, false, Grid::Center);
$grid->append($lab, 0, 1, 1, 1, true, Grid::Center, false, Grid::Center);
$grid->append($num2, 0, 2, 1, 1, true, Grid::Center, false, Grid::Center);
$grid->append($btn, 0, 3, 1, 1, true, Grid::Center, false, Grid::Center);
$grid->append($ret, 0, 4, 1, 1, true, Grid::Center, false, Grid::Center);

//把布局加入到窗口中
$win->add($grid);

//显示窗口
$win->show();

UI\run();