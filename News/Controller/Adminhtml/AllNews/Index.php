<?php
namespace Rsgitech\News\Controller\Adminhtml\AllNews;
class Index extends \Magento\Backend\App\Action
{
    protected $resultPageFactory;
    protected $helperData;
	
	public function __construct(
		\Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Rsgitech\News\Helper\Data $helperData,
        \Rsgitech\News\Model\AllnewsFactory $allNewsFactory
	) {
		parent::__construct($context);
		$this->resultPageFactory = $resultPageFactory;
        $this->helperData = $helperData;
        $this->allNewsFactory = $allNewsFactory;
	}

	public function execute()
	{
        $allnews = $this->allNewsFactory->create();
		$newsCollection = $allnews->getCollection();
		
		echo '<pre>';print_r($newsCollection->getData());
		
		// return $resultPage = $this->resultPageFactory->create();		
	}
}
?>