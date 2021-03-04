<?php
namespace Magento\Fixpay\Model;


class Simnao implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [['value' => 1, 'label' => __('Sim')], ['value' => 0, 'label' => __('Não')]];
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return [0 => __('Não'), 1 => __('Sim')];
    }
}
