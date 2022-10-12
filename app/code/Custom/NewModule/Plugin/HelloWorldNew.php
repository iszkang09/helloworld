<?php
/**
 *
 * @package     magento2
 * @author      Cheska Aguiluz
 * @license     https://opensource.org/licenses/OSL-3.0 Open Software License v. 3.0 (OSL-3.0)
 */

namespace Custom\NewModule\Plugin;

class HelloWorldNew
{
    protected $scopeConfig;

    /**
     * @param \MediaMerchants\HelloWorld\Block\Hello $subject

     * @param $result
     * @return mixed
     */

	public function __construct(
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
    	$this->scopeConfig = $scopeConfig;
    }

	public function afterGetText(\MediaMerchants\HelloWorld\Block\Hello $subject, $result) {
		$writer = new \Zend_Log_Writer_Stream(BP . '/var/log/janmonteros.log');
		$logger = new \Zend_Log();
		$logger->addWriter($writer);
		$logger->info('test');

        return "Hello Universe!";
    }
}
?>