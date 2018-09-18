<?php

/** @var $page \Magento\Cms\Model\Page */

$page = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()->create(\Magento\Cms\Model\Page::class);
$page->setTitle('Cms Test Tag Page1')
    ->setIdentifier('page_test_tag1')
    ->setStores([0])
    ->setIsActive(1)
    ->setContent('<h1>Cms Page Design Blank Title1</h1>')
    ->setPageLayout('1column')
    ->setCmsPageTags('test tag,second')
    ->setCmsImageTeaser('image1.png')
    ->save();

$page = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()->create(\Magento\Cms\Model\Page::class);
$page->setTitle('Cms Test Tag Page2')
    ->setIdentifier('page_test_tag2')
    ->setStores([0])
    ->setIsActive(1)
    ->setContent('<h1>Cms Page Design Blank Title2</h1>')
    ->setPageLayout('1column')
    ->setCmsPageTags('test tag,double tag')
    ->setCmsImageTeaser('image2.png')
    ->save();

$page = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()->create(\Magento\Cms\Model\Page::class);
$page->setTitle('Cms Test Tag Page3')
    ->setIdentifier('page_test_tag3')
    ->setStores([0])
    ->setIsActive(1)
    ->setContent('<h1>Cms Page Design Blank Title3</h1>')
    ->setPageLayout('1column')
    ->setCmsPageTags('second,third,double tag')
    ->setCmsImageTeaser('image3.png')
    ->save();

$page = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()->create(\Magento\Cms\Model\Page::class);
$page->setTitle('Cms Test Tag Page4')
    ->setIdentifier('page_test_tag4')
    ->setStores([0])
    ->setIsActive(1)
    ->setContent('<h1>Cms Page Design Blank Title4</h1>')
    ->setPageLayout('1column')
    ->setCmsPageTags('double tag')
    ->setCmsImageTeaser('image4.png')
    ->save();
