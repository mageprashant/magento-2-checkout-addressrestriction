define([
    'jquery'
], function ($) {
    'use strict';

    return function (validator) {
        validator.addRule(
            'validate-special-characters',
            function (value) {
                return $.mage.isEmptyNoTrim(value) || /^[a-z0-9\.-\s]+$/i.test(value);
            },
            $.mage.__('Please remove invalid special characters: {}%!#@&*')
        );
        return validator;
    };
});
