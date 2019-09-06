<?php
    namespace AHT\Blog\Block\Adminhtml;

    class Post extends \Magento\Backend\Block\Widget\Grid\Container
    {
        protected function __construct(){
            $this->_controller = 'adminhtml_post';
            $this->_blockGroup = 'AHT_Blog';
            $this->_headerText = __('Posts');
            $this->_addButtonLabel = __('Create New Post');
            parent::__construct();
        }
    }
?>