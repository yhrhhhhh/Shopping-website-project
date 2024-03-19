<?php

namespace Example\Started\Controller\Example;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\Result\PageFactory;

class View implements HttpGetActionInterface
{
    private PageFactory $pageFactory;

    private ResultFactory $resultFactory;

    public function __construct(PageFactory $pageFactory, ResultFactory $resultFactory)
    {
        $this->pageFactory = $pageFactory;
        $this->resultFactory = $resultFactory;
    }

    /**
     * @inheritDoc
     *
     * @link http://start.kyoye.com/started/example/view
     */
    public function execute()
    {
        // 它默认输出当前模块下 `view/frontend/layout`目录下与 Controller 同样位置的布局。
        // 拿这里的`Example\Started\Controller\Example\Example`类来说，它可以对应`view/frontend/layout/example/view.xml` 布局文件
//        return $this->pageFactory->create();
        return $this->pageFactory->create()->addHandle('started_example_view2');
    }
}