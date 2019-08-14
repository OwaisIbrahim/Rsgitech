<?php
namespace Rsgitech\News\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
    
  public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
  {
      
    $newsTableName = $setup->getTable('rsgitech_news');

    if($setup->getConnection()->isTableExists($newsTableName) != true) {

      $newsTable = $setup->getConnection()
          ->newTable($newsTableName)
          ->addColumn(
              'news_id',
              \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
              null,
              ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
              'News ID'
          )
          ->addColumn(
              'title',
              \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
              255,
              ['nullable' => false, 'default' => ''],
                'Title'
          )
          ->addColumn(
              'description',
              \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
              null,
              ['nullable' => false, 'default' => ''],
                'Description'
          )
          ->addColumn(
              'status',
              \Magento\Framework\DB\Ddl\Table::TYPE_BOOLEAN,
              null,
              ['nullable' => false, 'unsigned' => true],
                'Status'
          )
          ->addColumn(
              'created_at',
              \Magento\Framework\DB\Ddl\Table::TYPE_DATETIME,
              null,
              ['nullable' => false],
                'Created At'
          )
          ->addColumn(
              'updated_at',
              \Magento\Framework\DB\Ddl\Table::TYPE_DATETIME,
              null,
              ['nullable' => false],
                'Updated At'
          )
          ->addIndex(
            $setup->getIdxName('rsgitech_news', ['title']),
            ['title']
          )
          ->setComment("News Table");

      $setup->getConnection()->createTable($newsTable);
    }
  }
}
?>
