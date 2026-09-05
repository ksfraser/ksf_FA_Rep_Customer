<?php
/**
 * ksf_FA_Rep_Customer - Reports Customization
 *
 * Registers all customer reporting suite reports:
 * - Customer Cash Flows
 * - Statement Reconciliation
 * - Customer Ledger
 * - Customer Statement
 * - Sales Summary
 * - Sales Type Summary
 */

global $reports, $dim;

$reports->addReportClass(_('Customer'), RC_CUSTOMER);

$reports->addReport(RC_CUSTOMER, '_cust_cashflows', _('Customer Cash Flows'),
    array(
        _('Date') => 'DATE',
        _('Comments') => 'TEXTBOX',
        _('Destination') => 'DESTINATION'));

$reports->addReport(RC_CUSTOMER, '_statement_reconcile', _('Statement Reconciliation'),
    array(
        _('Date') => 'DATE',
        _('Customer') => 'CUSTOMERS_NO_FILTER',
        _('Comments') => 'TEXTBOX',
        _('Destination') => 'DESTINATION'));

$reports->addReport(RC_CUSTOMER, '_customer_ledger', _('Customer Ledger'),
    array(
        _('Date From') => 'DATEBEGIN',
        _('Date To') => 'DATEENDM',
        _('Customer') => 'CUSTOMERS_NO_FILTER',
        _('Comments') => 'TEXTBOX',
        _('Destination') => 'DESTINATION'));

$reports->addReport(RC_CUSTOMER, '_cust_statement', _('Customer Statement'),
    array(
        _('Date') => 'DATE',
        _('Customer') => 'CUSTOMERS_NO_FILTER',
        _('Currency Filter') => 'CURRENCY',
        _('Show Also Allocated') => 'YES_NO',
        _('Email Customers') => 'YES_NO',
        _('Comments') => 'TEXTBOX',
        _('Destination') => 'DESTINATION'));

$reports->addReport(RC_CUSTOMER, '_sales_summary', _('Sales Summary'),
    array(
        _('Date From') => 'DATEBEGINTAX',
        _('Date To') => 'DATEENDTAX',
        _('Tax Id Only') => 'YES_NO',
        _('Comments') => 'TEXTBOX',
        _('Destination') => 'DESTINATION'));

$reports->addReport(RC_CUSTOMER, '_sales_type_summary', _('Sales Type Summary'),
    array(
        _('Date From') => 'DATEBEGIN',
        _('Date To') => 'DATEENDM',
        _('Sales Type') => 'SALESTYPES',
        _('Location') => 'LOCATIONS',
        _('Comments') => 'TEXTBOX',
        _('Destination') => 'DESTINATION'));
