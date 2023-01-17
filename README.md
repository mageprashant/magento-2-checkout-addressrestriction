# Magento 2: Add Custom Address Validation In Checkout
Magento 2 has its own set of validations for the address fields in the checkout step. But sometimes you may want to add some custom validations in the different address fields. Some examples may be like limiting the character limit in the firstname and lastname of shipping and billing address.
Use cases:
Some ERP systems have certain limits on the length of fields that they can store. But Magento has no such limit on these fields. So while exporting the order data to the ERP you may face problems.
Fortunately, we can handle this problem in Magento 2 with some effort. We will start by creating a new module for this functionality.

<b>For Settings: Stores > Configuration > MagePrashant > Address Restrictions</b>

# Installation Instruction

<b>Manual Installation</b>

- Copy the content of the repo to the <b>app/code/MagePrashant/Addressrestriction</b>
- Run command: <b>php bin/magento setup:upgrade</b>
- Run command: <b>php bin/magento setup:static-content:deploy -f</b>
- Now flush cache: <b>php bin/magento cache:flush</b>

# Contribution

Want to contribute to this extension? The quickest way is to <a href="https://help.github.com/articles/about-pull-requests/">open a pull request</a> on GitHub.

# Support

If you encounter any problems or bugs, please <a href="https://github.com/mageprashant/magento-2-checkout-addressrestriction/issues">open an issue</a> on GitHub.
