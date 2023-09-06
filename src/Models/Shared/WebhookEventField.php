<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


/**
 * An event that the customer can subscribe to get notifications when it is generated in the system. The format of the event is resource.action:status, if no status is provided it will take finish as default.
 * 
 * 
 */
enum WebhookEventField: string
{
    case ChargeGet = 'charge.get';
    case PaymentCreate = 'payment.create';
    case PaymentQuery = 'payment.query';
    case PaymentGet = 'payment.get';
    case PaymentVoid = 'payment.void';
    case PaymentCapture = 'payment.capture';
    case PaymentRefund = 'payment.refund';
    case PaymentQueryByCustomer = 'payment.query-by-customer';
    case PaymentSettle = 'payment.settle';
    case OrderCreate = 'order.create';
    case OrderQuery = 'order.query';
    case OrderGet = 'order.get';
    case OrderAccessTokenCreate = 'order.access-token.create';
    case OrderUpdate = 'order.update';
    case OrderPaymentAttemptsReset = 'order.payment-attempts.reset';
    case OrderPayWithToken = 'order.pay-with-token';
    case OrderBrowserPayment = 'order.browser-payment';
    case OrderBrowserTokenize = 'order.browser-tokenize';
    case PaymentMethodEnsure = 'payment-method.ensure';
    case PaymentMethodVerifyMicroDeposit = 'payment-method.verify-micro-deposit';
    case PaymentMethodGet = 'payment-method.get';
    case PaymentMethodUpdate = 'payment-method.update';
    case PaymentMethodDelete = 'payment-method.delete';
    case PaymentMethodLinkCustomer = 'payment-method.link-customer';
    case PaymentMethodQueryForCustomer = 'payment-method.query-for-customer';
    case PaymentMethodQueryForCustomerByCustomerToken = 'payment-method.query-for-customer-by-customer-token';
    case PaymentMethodGetByIdForCustomer = 'payment-method.get-by-id-for-customer';
    case PaymentMethodUnlinkFromCustomer = 'payment-method.unlink-from-customer';
    case PaymentMethodRebuildDwolla = 'payment-method.rebuild-dwolla';
    case CustomerCreate = 'customer.create';
    case CustomerQuery = 'customer.query';
    case CustomerFindById = 'customer.find-by-id';
    case ReportCreate = 'report.create';
    case ReportQuery = 'report.query';
    case ReportDownload = 'report.download';
    case ReportDetailsQuery = 'report-details.query';
}