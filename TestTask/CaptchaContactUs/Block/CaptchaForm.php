<?php
namespace TestTask\CaptchaContactUs\Block;

class CaptchaForm extends \Magento\Framework\View\Element\Template
{
    public function getFormAction()
    {
        return $this->getUrl('yourroute/index/post', ['_secure' => true]);
    }
}
