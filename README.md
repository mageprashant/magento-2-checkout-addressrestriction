# Magento 2 Checkout Address Restriction Extension FREE

Magento 2 Add Custom Address Validation In Checkout.

Magento 2 has its own set of validations for the address fields in the checkout step. But sometimes you may want to add some custom validations in the different address fields. Some examples may be like limiting the character limit in the firstname and lastname of shipping and billing address.
Use cases:
Some ERP systems have certain limits on the length of fields that they can store. But Magento has no such limit on these fields. So while exporting the order data to the ERP you may face problems.
Fortunately, we can handle this problem in Magento 2 with some effort. We will start by creating a new module for this functionality.

# Installation Instruction

## Step 1

### Install module via composer (recommend)

Run the following command in Magento 2 root folder:

```
composer require mageprashant/magento2-checkout-address-restriction
```

### Install module manually
 * Download the extension
 * Unzip the file
 * Create a folder {Magento 2 root}/app/code/MagePrashant/Addressrestriction
 * Copy the content from the unzip folder

#### Step 2 - Enable Module
 * php bin/magento module:enable MagePrashant_Addressrestriction
 * php bin/magento setup:upgrade

#### Step 3 - Configuration
 
Log into your Magento 2 Admin, then go to Stores > Configuration > MagePrashant > Address Restrictions

# Contribution

Want to contribute to this extension? The quickest way is to <a href="https://help.github.com/articles/about-pull-requests/">open a pull request</a> on GitHub.

# Support

If you encounter any problems or bugs, please <a href="https://github.com/mageprashant/magento2-checkout-address-restriction/issues">open an issue</a> on GitHub.