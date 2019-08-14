<?php
namespace Rsgitech\News\Model;

use Magento\Framework\Model\AbstractModel;

class Allnews extends AbstractModel
{
	const CACHE_TAG = 'rsgitech_news';
	
	//Unique identifier for use within caching
	protected $_cacheTag = self::CACHE_TAG;
	
	protected function _construct()
    {
        $this->_init('Rsgitech\News\Model\ResourceModel\Allnews');
    }
	
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];
        return $values;
    }
}
?>