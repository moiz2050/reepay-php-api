# reepay-php-api
REST API to manage Reepay resources

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## About Reepay (by reepay)
Reepay is a [payment gateway](https://reepay.com/payment-gateway/) as well as a [subscription billing platform](https://reepay.com/subscriptions/) for multiple web shops and merchants online. Reepay also is an [acquirer](https://reepay.com/acquiring/) for VISA and Mastercard.

This is an unofficial repo done by enthusiasts, we highly appreciate the work and effort going in to this.

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "require": {
    "adnedelcu/reepay-php-api": "dev-master"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/code/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Reepay\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Reepay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');
// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$apiInstance = new Reepay\Api\AccountApi();

try {
    $result = $apiInstance->createPrivateKey();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->createPrivateKey: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.reepay.com/* except for Session, which is *https://checkout-api.reepay.com/*.

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountApi* | [**createPrivateKey**](docs/Api/AccountApi.md#createprivatekey) | **POST** /v1/account/privkey | Create private key
*AccountApi* | [**createPublicKey**](docs/Api/AccountApi.md#createpublickey) | **POST** /v1/account/pubkey | Create public key
*AccountApi* | [**expirePrivateKey**](docs/Api/AccountApi.md#expireprivatekey) | **POST** /v1/account/privkey/{key}/expire | Expire private key
*AccountApi* | [**expirePublicKey**](docs/Api/AccountApi.md#expirepublickey) | **POST** /v1/account/pubkey/{key}/expire | Expire public key
*AccountApi* | [**generateWebhookSecret**](docs/Api/AccountApi.md#generatewebhooksecret) | **POST** /v1/account/webhook_settings/secret | Generate new webhook secret
*AccountApi* | [**getCurrentAccount**](docs/Api/AccountApi.md#getcurrentaccount) | **GET** /v1/account | Get account
*AccountApi* | [**getDiscountSettings**](docs/Api/AccountApi.md#getdiscountsettings) | **GET** /v1/account/discount_settings | Get discount settings
*AccountApi* | [**getMailSettings**](docs/Api/AccountApi.md#getmailsettings) | **GET** /v1/account/mail_settings | Get mail settings
*AccountApi* | [**getPrivateKeys**](docs/Api/AccountApi.md#getprivatekeys) | **GET** /v1/account/privkey | Get list of private keys
*AccountApi* | [**getPublicKeys**](docs/Api/AccountApi.md#getpublickeys) | **GET** /v1/account/pubkey | Get list of public keys
*AccountApi* | [**getWebhookSettings**](docs/Api/AccountApi.md#getwebhooksettings) | **GET** /v1/account/webhook_settings | Get webhook settings
*AccountApi* | [**updateAccountJson**](docs/Api/AccountApi.md#updateaccountjson) | **PUT** /v1/account | Update account
*AccountApi* | [**updateDiscountSettings**](docs/Api/AccountApi.md#updatediscountsettings) | **PUT** /v1/account/discount_settings | Update discount settings
*AccountApi* | [**updateMailSettingsJson**](docs/Api/AccountApi.md#updatemailsettingsjson) | **PUT** /v1/account/mail_settings | Update mail settings
*AccountApi* | [**updateWebhookSettingsJson**](docs/Api/AccountApi.md#updatewebhooksettingsjson) | **PUT** /v1/account/webhook_settings | Update webhook settings
*AdditionalCostApi* | [**cancelAdditionalCost**](docs/Api/AdditionalCostApi.md#canceladditionalcost) | **POST** /v1/additional_cost/{handle}/cancel | Cancel pending additional cost
*AdditionalCostApi* | [**createAdditionalCostJson**](docs/Api/AdditionalCostApi.md#createadditionalcostjson) | **POST** /v1/additional_cost | Create additional cost
*AdditionalCostApi* | [**getAdditionalCost**](docs/Api/AdditionalCostApi.md#getadditionalcost) | **GET** /v1/additional_cost/{handle} | Get additional cost
*AdditionalCostApi* | [**getAdditionalCosts**](docs/Api/AdditionalCostApi.md#getadditionalcosts) | **GET** /v1/additional_cost/subscription/{handle} | Get additional costs for subscription
*AgreementApi* | [**createCardGatewayAgreement**](docs/Api/AgreementApi.md#createcardgatewayagreement) | **POST** /v1/agreement/card_gateway | Create card gateway agreement
*AgreementApi* | [**deleteCardGatewayAgreement**](docs/Api/AgreementApi.md#deletecardgatewayagreement) | **DELETE** /v1/agreement/card_gateway/{id} | Delete card gateway agreement
*AgreementApi* | [**disableCardGatewayAgreement**](docs/Api/AgreementApi.md#disablecardgatewayagreement) | **POST** /v1/agreement/card_gateway/{id}/disable | Disable card gateway agreement
*AgreementApi* | [**enableCardGatewayAgreement**](docs/Api/AgreementApi.md#enablecardgatewayagreement) | **POST** /v1/agreement/card_gateway/{id}/enable | Enable card gateway agreement
*AgreementApi* | [**getCardGatewayAgreement**](docs/Api/AgreementApi.md#getcardgatewayagreement) | **GET** /v1/agreement/card_gateway/{id} | Get card gateway agreement
*AgreementApi* | [**getCardGatewayAgreements**](docs/Api/AgreementApi.md#getcardgatewayagreements) | **GET** /v1/agreement/card_gateway | Get all card gateway agreements
*AgreementApi* | [**updateCardGatewayAgreement**](docs/Api/AgreementApi.md#updatecardgatewayagreement) | **PUT** /v1/agreement/card_gateway/{id} | Update card gateway agreement
*AuthenticateApi* | [**login**](docs/Api/AuthenticateApi.md#login) | **POST** /v1/authenticate/login | User login
*AuthenticateApi* | [**renew**](docs/Api/AuthenticateApi.md#renew) | **POST** /v1/authenticate/renew | Renew user login
*AuthenticateApi* | [**verifyAuthentication**](docs/Api/AuthenticateApi.md#verifyauthentication) | **GET** /v1/authenticate/verify | Verify authentication
*ChargeApi* | [**cancelCharge**](docs/Api/ChargeApi.md#cancelcharge) | **POST** /v1/charge/{handle}/cancel | Cancel charge
*ChargeApi* | [**createCharge**](docs/Api/ChargeApi.md#createcharge) | **POST** /v1/charge | Create charge
*ChargeApi* | [**getCharge**](docs/Api/ChargeApi.md#getcharge) | **GET** /v1/charge/{handle} | Get charge
*ChargeApi* | [**getCharges**](docs/Api/ChargeApi.md#getcharges) | **GET** /v1/charge | Get charges
*ChargeApi* | [**settleCharge**](docs/Api/ChargeApi.md#settlecharge) | **POST** /v1/charge/{handle}/settle | Settle charge
*CouponApi* | [**createCoupon**](docs/Api/CouponApi.md#createcoupon) | **POST** /v1/coupon | Create coupon
*CouponApi* | [**deleteCoupon**](docs/Api/CouponApi.md#deletecoupon) | **DELETE** /v1/coupon/{handle} | Delete coupon
*CouponApi* | [**expireCoupon**](docs/Api/CouponApi.md#expirecoupon) | **POST** /v1/coupon/{handle}/expire | Expire coupon
*CouponApi* | [**getCoupon**](docs/Api/CouponApi.md#getcoupon) | **GET** /v1/coupon/{handle} | Get coupon
*CouponApi* | [**getCoupons**](docs/Api/CouponApi.md#getcoupons) | **GET** /v1/coupon | Get list of coupons
*CouponApi* | [**updateCoupon**](docs/Api/CouponApi.md#updatecoupon) | **PUT** /v1/coupon/{handle} | Update coupon
*CouponApi* | [**validateCode**](docs/Api/CouponApi.md#validatecode) | **GET** /v1/coupon/code/validate | Validate coupon
*CreditApi* | [**cancelCredit**](docs/Api/CreditApi.md#cancelcredit) | **POST** /v1/credit/{handle}/cancel | Cancel credit
*CreditApi* | [**createCreditJson**](docs/Api/CreditApi.md#createcreditjson) | **POST** /v1/credit | Create credit
*CreditApi* | [**getCredit**](docs/Api/CreditApi.md#getcredit) | **GET** /v1/credit/{handle} | Get credit
*CreditApi* | [**getCredits**](docs/Api/CreditApi.md#getcredits) | **GET** /v1/credit/subscription/{handle} | Get credits for subscription
*CustomerApi* | [**activatePaymentMethod**](docs/Api/CustomerApi.md#activatepaymentmethod) | **POST** /v1/customer/{handle}/payment_method/{method_id}/activate | Activate payment method
*CustomerApi* | [**addCardJson**](docs/Api/CustomerApi.md#addcardjson) | **POST** /v1/customer/{handle}/payment_method/card | Add card payment method
*CustomerApi* | [**createCustomerInvoice**](docs/Api/CustomerApi.md#createcustomerinvoice) | **POST** /v1/customer/{handle}/invoice | Create invoice for customer
*CustomerApi* | [**createCustomerJson**](docs/Api/CustomerApi.md#createcustomerjson) | **POST** /v1/customer | Create customer
*CustomerApi* | [**createCustomerNoteJson**](docs/Api/CustomerApi.md#createcustomernotejson) | **POST** /v1/customer/{handle}/note | Create customer note
*CustomerApi* | [**deleteCustomer**](docs/Api/CustomerApi.md#deletecustomer) | **DELETE** /v1/customer/{handle} | Delete customer
*CustomerApi* | [**getCard**](docs/Api/CustomerApi.md#getcard) | **GET** /v1/customer/{handle}/payment_method/card/{id} | Get card
*CustomerApi* | [**getCardDetails**](docs/Api/CustomerApi.md#getcarddetails) | **GET** /v1/customer/{handle}/payment_method/card/{id}/details | Get gateway card details
*CustomerApi* | [**getCustomer**](docs/Api/CustomerApi.md#getcustomer) | **GET** /v1/customer/{handle} | Get customer
*CustomerApi* | [**getCustomerNotes**](docs/Api/CustomerApi.md#getcustomernotes) | **GET** /v1/customer/{handle}/note | Get customer notes
*CustomerApi* | [**getCustomerPaymentMethods**](docs/Api/CustomerApi.md#getcustomerpaymentmethods) | **GET** /v1/customer/{handle}/payment_method | Get payment methods
*CustomerApi* | [**getCustomers**](docs/Api/CustomerApi.md#getcustomers) | **GET** /v1/customer | Get list of customers
*CustomerApi* | [**importCardJson**](docs/Api/CustomerApi.md#importcardjson) | **POST** /v1/customer/{handle}/payment_method/card_import | Import card payment method
*CustomerApi* | [**inactivatePaymentMethod**](docs/Api/CustomerApi.md#inactivatepaymentmethod) | **POST** /v1/customer/{handle}/payment_method/{method_id}/inactivate | Inactivate payment method
*CustomerApi* | [**reactivateCard**](docs/Api/CustomerApi.md#reactivatecard) | **POST** /v1/customer/{handle}/payment_method/{card_id}/card_reactivate | Reactivate failed card
*CustomerApi* | [**updateCustomerJson**](docs/Api/CustomerApi.md#updatecustomerjson) | **PUT** /v1/customer/{handle} | Update customer
*DiscountApi* | [**createDiscount**](docs/Api/DiscountApi.md#creatediscount) | **POST** /v1/discount | Create discount
*DiscountApi* | [**deleteDiscount**](docs/Api/DiscountApi.md#deletediscount) | **DELETE** /v1/discount/{handle} | Delete discount
*DiscountApi* | [**getDiscount**](docs/Api/DiscountApi.md#getdiscount) | **GET** /v1/discount/{handle} | Get discount
*DiscountApi* | [**getDiscounts**](docs/Api/DiscountApi.md#getdiscounts) | **GET** /v1/discount | Get list of discounts
*DiscountApi* | [**undeleteDiscount**](docs/Api/DiscountApi.md#undeletediscount) | **POST** /v1/discount/{handle}/undelete | Undelete discount
*DunningPlanApi* | [**createDunningPlanJson**](docs/Api/DunningPlanApi.md#createdunningplanjson) | **POST** /v1/dunning_plan | Create dunning plan
*DunningPlanApi* | [**deleteDunningPlan**](docs/Api/DunningPlanApi.md#deletedunningplan) | **DELETE** /v1/dunning_plan/{handle} | Delete dunning plan
*DunningPlanApi* | [**getDunningPlan**](docs/Api/DunningPlanApi.md#getdunningplan) | **GET** /v1/dunning_plan/{handle} | Get dunning plan
*DunningPlanApi* | [**getDunningPlans**](docs/Api/DunningPlanApi.md#getdunningplans) | **GET** /v1/dunning_plan | Get list of dunning plans
*DunningPlanApi* | [**updateJson**](docs/Api/DunningPlanApi.md#updatejson) | **PUT** /v1/dunning_plan/{handle} | Update dunning plan
*EventApi* | [**getEvent**](docs/Api/EventApi.md#getevent) | **GET** /v1/event/{id} | Get event
*EventApi* | [**getEvents**](docs/Api/EventApi.md#getevents) | **GET** /v1/event | Get list of events
*InvoiceApi* | [**cancelAllDunningPending**](docs/Api/InvoiceApi.md#cancelalldunningpending) | **POST** /v1/invoice/cancel_all_dunning_pending/subscription/{handle} | Cancel all dunning and pending
*InvoiceApi* | [**cancelInvoice**](docs/Api/InvoiceApi.md#cancelinvoice) | **POST** /v1/invoice/{id}/cancel | Cancel invoice
*InvoiceApi* | [**cancelSettleLater**](docs/Api/InvoiceApi.md#cancelsettlelater) | **POST** /v1/invoice/{id}/settle/cancel | Cancel settle later
*InvoiceApi* | [**cancelTransaction**](docs/Api/InvoiceApi.md#canceltransaction) | **POST** /v1/invoice/{id}/transaction/{transaction}/cancel | Cancel transaction
*InvoiceApi* | [**detachFromSubscription**](docs/Api/InvoiceApi.md#detachfromsubscription) | **POST** /v1/invoice/{id}/detach | Detach from subscription
*InvoiceApi* | [**getInvoice**](docs/Api/InvoiceApi.md#getinvoice) | **GET** /v1/invoice/{id} | Get invoice
*InvoiceApi* | [**getInvoices**](docs/Api/InvoiceApi.md#getinvoices) | **GET** /v1/invoice | Get list of invoices
*InvoiceApi* | [**manualSettle**](docs/Api/InvoiceApi.md#manualsettle) | **POST** /v1/invoice/{id}/manual_settle | Manual settle
*InvoiceApi* | [**reactivateInvoice**](docs/Api/InvoiceApi.md#reactivateinvoice) | **POST** /v1/invoice/{id}/reactivate | Reactivate invoice
*InvoiceApi* | [**settle**](docs/Api/InvoiceApi.md#settle) | **POST** /v1/invoice/{id}/settle | Settle
*InvoiceApi* | [**transaction**](docs/Api/InvoiceApi.md#transaction) | **GET** /v1/invoice/{id}/transaction/{transaction} | Get transaction
*InvoiceApi* | [**transactionDetails**](docs/Api/InvoiceApi.md#transactiondetails) | **GET** /v1/invoice/{id}/transaction/{transaction}/details | Get transaction details
*InvoiceApi* | [**transactionList**](docs/Api/InvoiceApi.md#transactionlist) | **GET** /v1/invoice/{id}/transaction | Get transaction list
*MailTemplateApi* | [**getSample**](docs/Api/MailTemplateApi.md#getsample) | **GET** /v1/mail_template/sample | Get sample data
*OrganisationApi* | [**getOrganisation**](docs/Api/OrganisationApi.md#getorganisation) | **GET** /v1/organisation | Get organisation
*OrganisationApi* | [**update**](docs/Api/OrganisationApi.md#update) | **PUT** /v1/organisation | Update organisation
*PlanApi* | [**createPlanJson**](docs/Api/PlanApi.md#createplanjson) | **POST** /v1/plan | Create plan
*PlanApi* | [**deletePlan**](docs/Api/PlanApi.md#deleteplan) | **DELETE** /v1/plan/{handle} | Delete plan
*PlanApi* | [**getCurrentPlan**](docs/Api/PlanApi.md#getcurrentplan) | **GET** /v1/plan/{handle}/current | Get plan
*PlanApi* | [**getPlan**](docs/Api/PlanApi.md#getplan) | **GET** /v1/plan/{handle}/{version} | Get plan version
*PlanApi* | [**getPlans**](docs/Api/PlanApi.md#getplans) | **GET** /v1/plan/{handle} | Get list of plan versions
*PlanApi* | [**getPlansList**](docs/Api/PlanApi.md#getplanslist) | **GET** /v1/plan | Get list of plans
*PlanApi* | [**supersedePlanJson**](docs/Api/PlanApi.md#supersedeplanjson) | **POST** /v1/plan/{handle} | Supersede plan
*PlanApi* | [**updatePlanJson**](docs/Api/PlanApi.md#updateplanjson) | **PUT** /v1/plan/{handle} | Update plan
*RefundApi* | [**createRefund**](docs/Api/RefundApi.md#createrefund) | **POST** /v1/refund | Create refund
*RefundApi* | [**getRefund**](docs/Api/RefundApi.md#getrefund) | **GET** /v1/refund/{id} | Get refund
*SessionApi* | [**createSession**](docs/Api/SessionApi.md#createSession) | **POST** /v1/session/charge | Create charge session
*SessionApi* | [**deleteSession**](docs/Api/SessionApi.md#deleteSession) | **DELETE** /v1/session/{id} | Delete session
*SubscriptionApi* | [**cancelSubscription**](docs/Api/SubscriptionApi.md#cancelsubscription) | **POST** /v1/subscription/{handle}/cancel | Cancel subscription
*SubscriptionApi* | [**changeNextPeriodStartJson**](docs/Api/SubscriptionApi.md#changenextperiodstartjson) | **POST** /v1/subscription/{handle}/change_next_period_start | Change next renewal date
*SubscriptionApi* | [**changeSubscription**](docs/Api/SubscriptionApi.md#changesubscription) | **PUT** /v1/subscription/{handle} | Change subscription
*SubscriptionApi* | [**createSubscriptionDiscount**](docs/Api/SubscriptionApi.md#createsubscriptiondiscount) | **POST** /v1/subscription/{handle}/discount | Add subscription discount
*SubscriptionApi* | [**createSubscriptionInvoice**](docs/Api/SubscriptionApi.md#createsubscriptioninvoice) | **POST** /v1/subscription/{handle}/invoice | Create invoice ondemand for subscription
*SubscriptionApi* | [**createSubscriptionJson**](docs/Api/SubscriptionApi.md#createsubscriptionjson) | **POST** /v1/subscription | Create subscription
*SubscriptionApi* | [**deleteSubscriptionDiscount**](docs/Api/SubscriptionApi.md#deletesubscriptiondiscount) | **DELETE** /v1/subscription/{handle}/discount/{sdHandle} | Delete subscription discount
*SubscriptionApi* | [**expire**](docs/Api/SubscriptionApi.md#expire) | **POST** /v1/subscription/{handle}/expire | Expire subscription
*SubscriptionApi* | [**getSubscription**](docs/Api/SubscriptionApi.md#getsubscription) | **GET** /v1/subscription/{handle} | Get subscription
*SubscriptionApi* | [**getSubscriptionDiscount**](docs/Api/SubscriptionApi.md#getsubscriptiondiscount) | **GET** /v1/subscription/{handle}/discount/{sdHandle} | Get subscription discount
*SubscriptionApi* | [**getSubscriptionDiscounts**](docs/Api/SubscriptionApi.md#getsubscriptiondiscounts) | **GET** /v1/subscription/{handle}/discount | Get subscription discounts
*SubscriptionApi* | [**getSubscriptionPaymentMethods**](docs/Api/SubscriptionApi.md#getsubscriptionpaymentmethods) | **GET** /v1/subscription/{handle}/payment_method | Get payment methods
*SubscriptionApi* | [**getSubscriptionPeriodBalance**](docs/Api/SubscriptionApi.md#getsubscriptionperiodbalance) | **GET** /v1/subscription/{handle}/period_balance | Get the period balance for subscription
*SubscriptionApi* | [**getSubscriptions**](docs/Api/SubscriptionApi.md#getsubscriptions) | **GET** /v1/subscription | Get list of subscriptions
*SubscriptionApi* | [**intervalAmount**](docs/Api/SubscriptionApi.md#intervalamount) | **GET** /v1/subscription/{handle}/interval_amount | Calculate interval amount
*SubscriptionApi* | [**onHold**](docs/Api/SubscriptionApi.md#onhold) | **POST** /v1/subscription/{handle}/on_hold | Subscription on hold
*SubscriptionApi* | [**reactivateSubscription**](docs/Api/SubscriptionApi.md#reactivatesubscription) | **POST** /v1/subscription/{handle}/reactivate | Reactivate subscription on hold
*SubscriptionApi* | [**redeemCouponCode**](docs/Api/SubscriptionApi.md#redeemcouponcode) | **POST** /v1/subscription/{handle}/coupon | Redeem coupon code for subscription
*SubscriptionApi* | [**removeAllPaymentMethods**](docs/Api/SubscriptionApi.md#removeallpaymentmethods) | **DELETE** /v1/subscription/{handle}/payment_method | Remove all payment methods
*SubscriptionApi* | [**removePaymentMethod**](docs/Api/SubscriptionApi.md#removepaymentmethod) | **DELETE** /v1/subscription/{handle}/payment_method/{method_id} | Remove payment method
*SubscriptionApi* | [**setPaymentMethod**](docs/Api/SubscriptionApi.md#setpaymentmethod) | **POST** /v1/subscription/{handle}/payment_method | Set payment method
*SubscriptionApi* | [**uncancel**](docs/Api/SubscriptionApi.md#uncancel) | **POST** /v1/subscription/{handle}/uncancel | Uncancel subscription
*UserApi* | [**deleteUser**](docs/Api/UserApi.md#deleteuser) | **DELETE** /v1/user/{id} | Delete user
*UserApi* | [**getUser**](docs/Api/UserApi.md#getuser) | **GET** /v1/user/{id} | Get user
*UserApi* | [**getUsers**](docs/Api/UserApi.md#getusers) | **GET** /v1/user | Get users
*UserApi* | [**inviteUser**](docs/Api/UserApi.md#inviteuser) | **POST** /v1/user/invite | Invite user
*UserApi* | [**inviteUserAccept**](docs/Api/UserApi.md#inviteuseraccept) | **POST** /v1/user/invite/{token} | Accept invite
*UserApi* | [**inviteUserGet**](docs/Api/UserApi.md#inviteuserget) | **GET** /v1/user/invite/{token} | Get invite
*UserApi* | [**resetPassword**](docs/Api/UserApi.md#resetpassword) | **POST** /v1/user/reset_password | Reset password request
*UserApi* | [**resetPasswordWithToken**](docs/Api/UserApi.md#resetpasswordwithtoken) | **POST** /v1/user/reset_password/{token} | Reset password
*UserApi* | [**updateAuth**](docs/Api/UserApi.md#updateauth) | **PUT** /v1/user/{id}/groups | Update user groups
*UserApi* | [**updatePassword**](docs/Api/UserApi.md#updatepassword) | **PUT** /v1/user/{id}/password | Change password
*UserApi* | [**updateUser**](docs/Api/UserApi.md#updateuser) | **PUT** /v1/user/{id} | Update user
*UserApi* | [**verifyEmail**](docs/Api/UserApi.md#verifyemail) | **POST** /v1/user/verify_email/{token} | Verify email
*UserApi* | [**verifyEmailRequest**](docs/Api/UserApi.md#verifyemailrequest) | **POST** /v1/user/{id}/verify_email | Send verification email
*WebhookApi* | [**disableWebhooks**](docs/Api/WebhookApi.md#disablewebhooks) | **POST** /v1/webhook/disable | Disable webhooks
*WebhookApi* | [**getWebhook**](docs/Api/WebhookApi.md#getwebhook) | **GET** /v1/webhook/{id} | Get webhooks
*WebhookApi* | [**getWebhookRequests**](docs/Api/WebhookApi.md#getwebhookrequests) | **GET** /v1/webhook/{id}/request | Get webhook requests
*WebhookApi* | [**getWebhooks**](docs/Api/WebhookApi.md#getwebhooks) | **GET** /v1/webhook | Get list of webhooks
*WebhookApi* | [**resendJson**](docs/Api/WebhookApi.md#resendjson) | **POST** /v1/webhook/resend | Re-send webhooks
*WebhookApi* | [**updateWebhooks**](docs/Api/WebhookApi.md#updatewebhooks) | **POST** /v1/webhook/update | Update and resend webhooks


## Documentation For Models

- [Account](docs/Model/Account.md)
- [AccountLogin](docs/Model/AccountLogin.md)
- [AddOn](docs/Model/AddOn.md)
- [AddOnSearch](docs/Model/AddOnSearch.md)
- [AdditionalCost](docs/Model/AdditionalCost.md)
- [CancelSubscription](docs/Model/CancelSubscription.md)
- [Card](docs/Model/Card.md)
- [CardGatewayAgreement](docs/Model/CardGatewayAgreement.md)
- [CardImport](docs/Model/CardImport.md)
- [CardToken](docs/Model/CardToken.md)
- [CardTransaction](docs/Model/CardTransaction.md)
- [ChangeNextPeriodStart](docs/Model/ChangeNextPeriodStart.md)
- [ChangeSubscription](docs/Model/ChangeSubscription.md)
- [Charge](docs/Model/Charge.md)
- [ChargeSearch](docs/Model/ChargeSearch.md)
- [ChargeSource](docs/Model/ChargeSource.md)
- [Coupon](docs/Model/Coupon.md)
- [CouponRedemption](docs/Model/CouponRedemption.md)
- [CouponSearch](docs/Model/CouponSearch.md)
- [CreateAddOn](docs/Model/CreateAddOn.md)
- [CreateAdditionalCost](docs/Model/CreateAdditionalCost.md)
- [CreateCardGatewayAgreement](docs/Model/CreateCardGatewayAgreement.md)
- [CreateCharge](docs/Model/CreateCharge.md)
- [CreateCoupon](docs/Model/CreateCoupon.md)
- [CreateCredit](docs/Model/CreateCredit.md)
- [CreateCreditNoteLine](docs/Model/CreateCreditNoteLine.md)
- [CreateCustomer](docs/Model/CreateCustomer.md)
- [CreateCustomerInvoice](docs/Model/CreateCustomerInvoice.md)
- [CreateCustomerNote](docs/Model/CreateCustomerNote.md)
- [CreateDiscount](docs/Model/CreateDiscount.md)
- [CreateDunningPlan](docs/Model/CreateDunningPlan.md)
- [CreateOrder](docs/Model/CreateOrder.md)
- [CreateOrderLine](docs/Model/CreateOrderLine.md)
- [CreateRefund](docs/Model/CreateRefund.md)
- [CreateSession](docs/Model/CreateSession.md)
- [CreateSubscription](docs/Model/CreateSubscription.md)
- [CreateSubscriptionAddOn](docs/Model/CreateSubscriptionAddOn.md)
- [CreateSubscriptionAdditionalCost](docs/Model/CreateSubscriptionAdditionalCost.md)
- [CreateSubscriptionDiscount](docs/Model/CreateSubscriptionDiscount.md)
- [CreateSubscriptionInvoice](docs/Model/CreateSubscriptionInvoice.md)
- [CreateSubscriptionPlan](docs/Model/CreateSubscriptionPlan.md)
- [Credit](docs/Model/Credit.md)
- [CreditInvoice](docs/Model/CreditInvoice.md)
- [CreditNoteLine](docs/Model/CreditNoteLine.md)
- [Customer](docs/Model/Customer.md)
- [CustomerNote](docs/Model/CustomerNote.md)
- [CustomerSearch](docs/Model/CustomerSearch.md)
- [Discount](docs/Model/Discount.md)
- [DiscountSearch](docs/Model/DiscountSearch.md)
- [DiscountSettings](docs/Model/DiscountSettings.md)
- [DunningPlan](docs/Model/DunningPlan.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [Event](docs/Model/Event.md)
- [EventList](docs/Model/EventList.md)
- [ExpireSubscription](docs/Model/ExpireSubscription.md)
- [IntervalAmount](docs/Model/IntervalAmount.md)
- [InviteUser](docs/Model/InviteUser.md)
- [InviteUserAccept](docs/Model/InviteUserAccept.md)
- [Invoice](docs/Model/Invoice.md)
- [InvoiceCreditNote](docs/Model/InvoiceCreditNote.md)
- [InvoiceSearch](docs/Model/InvoiceSearch.md)
- [Key](docs/Model/Key.md)
- [MailSettings](docs/Model/MailSettings.md)
- [ManualRefundTransfer](docs/Model/ManualRefundTransfer.md)
- [ManualSettleTransfer](docs/Model/ManualSettleTransfer.md)
- [ManualTransaction](docs/Model/ManualTransaction.md)
- [MpsSubscription](docs/Model/MpsSubscription.md)
- [OnHoldSubscription](docs/Model/OnHoldSubscription.md)
- [OrderLine](docs/Model/OrderLine.md)
- [Organisation](docs/Model/Organisation.md)
- [OrganisationLogin](docs/Model/OrganisationLogin.md)
- [PaymentMethods](docs/Model/PaymentMethods.md)
- [Plan](docs/Model/Plan.md)
- [ReactivateSubscription](docs/Model/ReactivateSubscription.md)
- [RedeemCouponCode](docs/Model/RedeemCouponCode.md)
- [Refund](docs/Model/Refund.md)
- [Session](docs/Model/Session.md)
- [SetPaymentMethod](docs/Model/SetPaymentMethod.md)
- [Settle](docs/Model/Settle.md)
- [SettleCharge](docs/Model/SettleCharge.md)
- [Subscription](docs/Model/Subscription.md)
- [SubscriptionAddOn](docs/Model/SubscriptionAddOn.md)
- [SubscriptionChange](docs/Model/SubscriptionChange.md)
- [SubscriptionDiscount](docs/Model/SubscriptionDiscount.md)
- [SubscriptionLinks](docs/Model/SubscriptionLinks.md)
- [SubscriptionPeriodBalance](docs/Model/SubscriptionPeriodBalance.md)
- [SubscriptionSearch](docs/Model/SubscriptionSearch.md)
- [SupersedeSubscriptionPlan](docs/Model/SupersedeSubscriptionPlan.md)
- [Transaction](docs/Model/Transaction.md)
- [TransactionSearch](docs/Model/TransactionSearch.md)
- [UpdateAccount](docs/Model/UpdateAccount.md)
- [UpdateAddOn](docs/Model/UpdateAddOn.md)
- [UpdateCardGatewayAgreement](docs/Model/UpdateCardGatewayAgreement.md)
- [UpdateCoupon](docs/Model/UpdateCoupon.md)
- [UpdateCustomer](docs/Model/UpdateCustomer.md)
- [UpdateDunningPlan](docs/Model/UpdateDunningPlan.md)
- [UpdateOrganisation](docs/Model/UpdateOrganisation.md)
- [UpdateSubscriptionPlan](docs/Model/UpdateSubscriptionPlan.md)
- [UpdateUser](docs/Model/UpdateUser.md)
- [UpdateUserGroups](docs/Model/UpdateUserGroups.md)
- [UpdateUserPassword](docs/Model/UpdateUserPassword.md)
- [UpdateWebhookSettings](docs/Model/UpdateWebhookSettings.md)
- [User](docs/Model/User.md)
- [UserAccount](docs/Model/UserAccount.md)
- [UserLogin](docs/Model/UserLogin.md)
- [UserRenew](docs/Model/UserRenew.md)
- [UserResetRequestPassword](docs/Model/UserResetRequestPassword.md)
- [Webhook](docs/Model/Webhook.md)
- [WebhookDisableRequest](docs/Model/WebhookDisableRequest.md)
- [WebhookRequest](docs/Model/WebhookRequest.md)
- [WebhookResendRequest](docs/Model/WebhookResendRequest.md)
- [WebhookSettings](docs/Model/WebhookSettings.md)
- [WebhookUpdateRequest](docs/Model/WebhookUpdateRequest.md)

## Documentation For Authorization


## apiKey

- **Type**: API key
- **API key parameter name**: X-Auth-Token
- **Location**: HTTP header

## basicAuth

- **Type**: HTTP basic authentication


## Author

## Support on Beerpay
Hey dude! Help me out for a couple of :beers:!

[![Beerpay](https://beerpay.io/adnedelcu/reepay-php-api/badge.svg?style=beer-square)](https://beerpay.io/adnedelcu/reepay-php-api)  [![Beerpay](https://beerpay.io/adnedelcu/reepay-php-api/make-wish.svg?style=flat-square)](https://beerpay.io/adnedelcu/reepay-php-api?focus=wish)
