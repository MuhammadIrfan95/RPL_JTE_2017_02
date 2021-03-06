<?php

require_once dirname(__FILE__).'/../common/festi/FestiTestCase.php';

class PriceByRoleTestCase extends FestiTestCase
{
    private $_pluginInstance;
    private $_backendPluginInstance;
    
    protected $adminUserId = 1;
    protected $products = array(
        'simple' => array()
    );
    protected $pluginMainFile = false;
    protected $woocommerceMainFile = false;
    protected $pluginFolderName = 'woocommerce-prices-by-user-role';
    
    
    public function setUp()
    {
        parent::setUp();
        
        $this->pluginMainFile = $this->getPluginPath('plugin.php');
        
        require_once $this->pluginMainFile;
        
        $this->_pluginInstance = $GLOBALS['wooUserRolePricesFestiPlugin'];
       
        $this->doClearCache();
    } // end setUp
    
    /**
     * @return WooUserRolePricesFestiPlugin 
     */
    protected function &getPluginInstance()
    {
        return $this->_pluginInstance;
    } // end getPluginInstance
    
    /**
     * @return WooUserRolePricesBackendFestiPlugin
     */
    protected function &getBackendPluginInstance()
    {
        if ($this->_backendPluginInstance) {
            return $this->_backendPluginInstance;
        }
        
        $this->_backendPluginInstance = $this->getPluginInstance()
                                             ->onBackendInit();
        
        return $this->_backendPluginInstance;
    } // end getBackendPluginInstance
    
    protected function doClearCache()
    {
        $path = $this->getPluginPath('cache/');
        
        if (!file_exists($path)) {
            return false;
        }
        
        $this->_removeFolderWithSubFolders($path);
    } // end doClearCache
    
    protected function doCreateProduct()
    {
        $wp_error = false;
        
        $post = array(
            'post_author' => $this->adminUserId,
            'post_content' => '',
            'post_status' => 'publish',
            'post_title' => 'Test product',
            'post_parent' => '',
            'post_type' => 'product',
        );

        //Create post
        $post_id = wp_insert_post($post, $wp_error);
        $regularPriceKey = WooCommerceProductValuesObject::REGULAR_PRICE_KEY;
        $salePriceKey = WooCommerceProductValuesObject::SALE_PRICE_KEY;
        $priceKey = WooCommerceProductValuesObject::PRICE_KEY;

        wp_set_object_terms($post_id, 'simple', 'product_type');

        update_post_meta($post_id, '_visibility', 'visible');
        update_post_meta($post_id, '_stock_status', 'instock');
        update_post_meta($post_id, 'total_sales', '0');
        update_post_meta($post_id, '_downloadable', 'yes');
        update_post_meta($post_id, '_virtual', 'yes');
        update_post_meta($post_id, $regularPriceKey, '1');
        update_post_meta($post_id, $salePriceKey, '1');
        update_post_meta($post_id, '_purchase_note', '');
        update_post_meta($post_id, '_featured', 'no');
        update_post_meta($post_id, '_weight', '');
        update_post_meta($post_id, '_length', '');
        update_post_meta($post_id, '_width', '');
        update_post_meta($post_id, '_height', '');
        update_post_meta($post_id, '_sku', '');
        update_post_meta($post_id, '_product_attributes', array());
        update_post_meta($post_id, '_sale_price_dates_from', '');
        update_post_meta($post_id, '_sale_price_dates_to', '');
        update_post_meta($post_id, $priceKey, '1');
        update_post_meta($post_id, '_sold_individually', '');
        update_post_meta($post_id, '_manage_stock', 'no');
        update_post_meta($post_id, '_backorders', 'no');
        update_post_meta($post_id, '_stock', '');
        update_post_meta($post_id, '_download_limit', '');
        update_post_meta($post_id, '_download_expiry', '');
        update_post_meta($post_id, '_download_type', '');
        update_post_meta($post_id, '_product_image_gallery', '');
        
         $this->products['simple']['id'] = $post_id;
    } // end doCreateProduct
    
    protected function getProductId($type)
    {
        return $this->products[$type]['id'];
    } // end getProductId
    
    protected function getWpScriptsList()
    {
        global $wp_scripts;
        return $wp_scripts->queue;
    } // end getWpScriptsList
    
    protected function doCleanWpScriptsList()
    {
        global $wp_scripts;
        return $wp_scripts->queue = array();
    } // end doCleanWpScriptsList
    
    protected function getPluginPath($file = '')
    {
        return WP_CONTENT_DIR.'/plugins/'.$this->pluginFolderName.'/'.$file;
    } // end getPluginPath
    
    protected function getWooCommercePath($file = '')
    {
        return WP_CONTENT_DIR.'/plugins/woocommerce/'.$file;
    } // end getWooCommercePath
    
    private function _removeFolderWithSubFolders($path)
    {
        $filesList = scandir($path);
        
        $filesList = array_slice($filesList, 2);
    
        if ($filesList) {
            foreach ($filesList as $item) {
                if (is_file($path.$item)) {
                    unlink($path.$item);
                    continue;
                } elseif (is_dir($path.$item)) {
                    $this->_removeFolderWithSubFolders($path.$item.'/');
                }
            }
        }
    
        rmdir($path);
    } // end _removeFolderWithSubFolders

    protected function updateOptions($optionsName, $options = array())
    {
        $settings = get_option($optionsName);
        
        if (!$settings) {
            $settings = array();
        }
        
        $settings = json_decode($settings, true);
        
        $settings = array_merge($settings, $options);
        
        $settings = json_encode($settings);
        
        update_option($optionsName, $settings);
    } // end updateOptions
}