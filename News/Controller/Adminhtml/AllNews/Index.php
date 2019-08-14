<?php
namespace Rsgitech\News\Controller\Adminhtml\AllNews;
class Index extends \Magento\Backend\App\Action
{
    protected $resultPageFactory;
    protected $helperData;
	
	public function __construct(
		\Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Rsgitech\News\Helper\Data $helperData
	) {
		parent::__construct($context);
		$this->resultPageFactory = $resultPageFactory;
		$this->helperData = $helperData;
	}

	public function execute()
	{
        // echo $this->helperData->getStorefrontConfig('news_link');
        // exit();
		return $resultPage = $this->resultPageFactory->create();		
	}
}
?>