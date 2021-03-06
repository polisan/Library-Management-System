<?php 
use app\assets\FramesetLeftAsset;
use yii\helpers\Url;

FramesetLeftAsset::register( $this );

?>

        <!--            
                SIDEBAR
                         --> 
        <div id="sidebar">
            <ul>
				<li  class="nosubmenu">
						<a href="<?= Url::toRoute(['index/index']) ?>"  target="right" >
                        <img src="../images/frameset/left/home.png" alt="" />
                       主页 
                    </a>
                </li>

                <li><a href="#"><img src="../images/frameset/left/settings.png" alt="" /> 参数设置</a>
                    <ul>
						 <li><a href="<?=  Url::to(['bookshelf/index', 'page' => 1])?>" target="right" >书架管理</a></li>
						 <li><a href="<?=  Url::to(['reader-type/index', 'page' => 1]) ?>" target="right">读者类型管理</a></li>
						 <li><a href="<?=  Url::to(['publisher/index', 'page' => 1]) ?>"  target="right">出版社管理</a></li>
						 <li><a href="<?=  Url::to(['book-type/index', 'page' => 1]) ?>" target="right">图书类型管理</a></li>
					</ul>
                </li>

                <li><a href="#"><img src="../images/frameset/left/books.png" alt="" /> 图书档案</a>
					<ul>
                        <li><a href="<?=  Url::to(['book-add/book-add'])?>" target='right'>图书添加</a></li>
                        <li><a href="<?=  Url::to(['book-sreach/sreach'])?>" target='right'>图书搜索</a></li>
                        <li><a href="<?=  Url::to(['book-info-stat/two-pie'])?>" target='right'>图书信息统计</a></li>
                    </ul>
                </li>

                <li><a href="#"><img src="../images/frameset/left/users.png" alt="" /> 读者管理</a>
                    <ul>
					<li><a href="<?= Url::to(['reader-add/index'])  ?>" target='right'>添加读者</a></li>
						<li><a href="<?= Url::to(['reader-sreach/sreach']) ?>" target='right'>读者搜索</a></li>
                        <li><a href="<?= Url::to(['reader-info-stat/index'])  ?>" target='right'>读者信息统计</a></li>
                    </ul>
                </li>

				<li class="nosubmenu"><a href="<?= Url::to(['book-return/index'])  ?>" target='right'><img src="../images/frameset/left/list.png" alt="" /> 图书借还</a></li>
				<li class="nosubmenu"><a href="<?= Url::to(['borrow-query/index'])  ?>" target='right' ><img src="../images/frameset/left/search.png" alt="" /> 图书借阅查询</a></li>
            </ul>


        </div>
                
                
    </body>
</html>
