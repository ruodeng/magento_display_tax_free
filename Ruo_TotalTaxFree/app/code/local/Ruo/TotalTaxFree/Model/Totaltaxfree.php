<?php
/**
 * Created by PhpStorm.
 * User: ruo
 * Date: 2017/12/1
 * Time: 15:50
 */




class Ruo_TotalTaxFree_Model_Totaltaxfree extends Mage_Sales_Model_Quote_Address_Total_Abstract{
    protected $_code = 'totaltaxfree';
    public function collect(Mage_Sales_Model_Quote_Address $address)
    {
        parent::collect($address);
        $this->_setAmount(0);
        $this->_setBaseAmount(0);
        return $this;
    }

    public function fetch(Mage_Sales_Model_Quote_Address $address)
    {
        $address->addTotal(array(
            'code'=>$this->getCode(),
            'title'=>Mage::helper('tax')->__('Tax') ,
            'value'=> 0
        ));
        return $this;
    }
}