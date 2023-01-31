define([
    'jquery'
], function ($) {
    'use strict';

    return function (validator) {
        validator.addRule(
            'validate-special-characters',
            function (value) {
                return $.mage.isEmptyNoTrim(value) || /^[^|\<>[\]{}`%\\()&$]+$/i.test(value);
            },
            $.mage.__('Please remove invalid special characters: {}%!#@&*')
        );
        return validator;
    };
});
