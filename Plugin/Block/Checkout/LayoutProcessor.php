<?php

namespace MagePrashant\Addressrestriction\Plugin\Block\Checkout;

class LayoutProcessor
{
    protected $dataHelper;

    protected $apiHelper;

    public function __construct(
        \MagePrashant\Addressrestriction\Helper\Data $dataHelper
    ) {
        $this->dataHelper = $dataHelper;
    }

    public function afterProcess(
       \Magento\Checkout\Block\Checkout\LayoutProcessor $subject,
       array $jsLayout
    ) {
        if(!$this->dataHelper->getIsEnabled()) {
                return $jsLayout;
        }
        /* Firstname */
        $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']
                ['shippingAddress']['children']['shipping-address-fieldset']['children']['firstname']['validation']['max_text_length'] = 60;
        $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']
                ['shippingAddress']['children']['shipping-address-fieldset']['children']['firstname']['validation']['validate-alphanum-with-spaces'] = true;

        /* Lastname */
        $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']
                ['shippingAddress']['children']['shipping-address-fieldset']['children']['lastname']['validation']['max_text_length'] = 60;
        $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']
                ['shippingAddress']['children']['shipping-address-fieldset']['children']['lastname']['validation']['validate-alphanum-with-spaces'] = true;

        /* Company name */
        $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']
                ['shippingAddress']['children']['shipping-address-fieldset']['children']['company']['validation']['max_text_length'] = 31;

        /* City */
        $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']
                ['shippingAddress']['children']['shipping-address-fieldset']['children']['city']['validation']['max_text_length'] = 31;

        /* Region */
        $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']
                ['shippingAddress']['children']['shipping-address-fieldset']['children']['region']['validation']['max_text_length'] = 21;

        /* Country */
        $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']
                ['shippingAddress']['children']['shipping-address-fieldset']['children']['country_id']['validation']['max_text_length'] = 31;

        /* Postcode */
        $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']
                ['shippingAddress']['children']['shipping-address-fieldset']['children']['postcode']['validation']['max_text_length'] = 13;

        /* Street address */
        $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']
                ['shippingAddress']['children']['shipping-address-fieldset']
                ['children']['street']['children'][0]['validation']['max_text_length'] = 60;
        $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']
                ['shippingAddress']['children']['shipping-address-fieldset']
                ['children']['street']['children'][0]['validation']['validate-alphanum-with-spaces'] = true;

        $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']
                ['shippingAddress']['children']['shipping-address-fieldset']
                ['children']['street']['children'][1]['validation']['max_text_length'] = 60;
        $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']
                ['shippingAddress']['children']['shipping-address-fieldset']
                ['children']['street']['children'][1]['validation']['validate-alphanum-with-spaces'] = true;

        $jsLayout = $this->validationBillingAddress($jsLayout);

        return $jsLayout;
    }

    public function validationBillingAddress($jsLayout)
    {
        $paymentMethods = ['purchaseorder', 'checkmo', 'sagepaysuiteform', 'sagepaysuitepaypal'];

        foreach ($paymentMethods as $payment) {
            
            if(!isset($jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']
            ['payment']['children']['payments-list']['children']
            [$payment.'-form'])) {
                continue;
            }

            /* Firstname */
            $jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']
                    ['payment']['children']['payments-list']['children']
                    [$payment.'-form']['children']['form-fields']['children']
                    ['firstname']['validation']['max_text_length'] = 60;
            $jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']
                    ['payment']['children']['payments-list']['children']
                    [$payment.'-form']['children']['form-fields']['children']
                    ['firstname']['validation']['validate-alphanum-with-spaces'] = true;

            /* Lastname */
            $jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']
                    ['payment']['children']['payments-list']['children']
                    [$payment.'-form']['children']['form-fields']['children']
                    ['lastname']['validation']['max_text_length'] = 60;
            $jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']
                    ['payment']['children']['payments-list']['children']
                    [$payment.'-form']['children']['form-fields']['children']
                    ['lastname']['validation']['validate-alphanum-with-spaces'] = true;

            /* Company name */
            $jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']
                    ['payment']['children']['payments-list']['children']
                    [$payment.'-form']['children']['form-fields']['children']
                    ['company']['validation']['max_text_length'] = 31;

            /* City */
            $jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']
                    ['payment']['children']['payments-list']['children']
                    [$payment.'-form']['children']['form-fields']['children']
                    ['city']['validation']['max_text_length'] = 31;

             /* Region */
             $jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']
                    ['payment']['children']['payments-list']['children']
                    [$payment.'-form']['children']['form-fields']['children']
                    ['region']['validation']['max_text_length'] = 31;

            /* Country */
            $jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']
                    ['payment']['children']['payments-list']['children']
                    [$payment.'-form']['children']['form-fields']['children']
                    ['country_id']['validation']['max_text_length'] = 31;

            /* Postcode */
            $jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']
                    ['payment']['children']['payments-list']['children']
                    [$payment.'-form']['children']['form-fields']['children']
                    ['postcode']['validation']['max_text_length'] = 13;

            /* Street address */
            $jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']
                    ['payment']['children']['payments-list']['children']
                    [$payment.'-form']['children']['form-fields']['children']['street']['children'][0]['validation']['max_text_length'] = 60;
            $jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']
                    ['payment']['children']['payments-list']['children']
                    [$payment.'-form']['children']['form-fields']['children']['street']['children'][0]['validation']['validate-alphanum-with-spaces'] = true;

            $jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']
                    ['payment']['children']['payments-list']['children']
                    [$payment.'-form']['children']['form-fields']['children']['street']['children'][1]['validation']['max_text_length'] = 60;
            $jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']
                    ['payment']['children']['payments-list']['children']
                    [$payment.'-form']['children']['form-fields']['children']['street']['children'][1]['validation']['validate-alphanum-with-spaces'] = true;
        }

        return $jsLayout;
    }
}
