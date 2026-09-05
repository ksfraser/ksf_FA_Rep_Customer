# Functional Requirements - ksf_FA_Rep_Customer

## FR-CUST-001-001: Customer Cash Flows Report
**BABOK Related**: BR-CUST-001

Shows cash flow projections based on customer invoices and payments.

### Parameters
- Date
- Comments

### Output
PDF/Excel report with cash flow forecast by customer.

---

## FR-CUST-001-002: Statement Reconciliation Report
**BABOK Related**: BR-CUST-001

Reconciles customer statements with GL transactions.

### Parameters
- Date
- Customer (optional filter)
- Comments

### Output
PDF/Excel report showing reconciliation status.

---

## FR-CUST-001-003: Customer Ledger Report
**BABOK Related**: BR-CUST-001

Detailed transaction history per customer.

### Parameters
- Date From
- Date To
- Customer (optional filter)
- Comments

### Output
PDF/Excel report with full customer transaction ledger.

---

## FR-CUST-001-004: Customer Statement Report
**BABOK Related**: BR-CUST-001

Generates customer statements with aging.

### Parameters
- Date
- Customer (optional filter)
- Currency Filter
- Show Also Allocated
- Email Customers
- Comments

### Output
PDF/Excel statement with optional email delivery.

---

## FR-CUST-001-005: Sales Summary Report
**BABOK Related**: BR-CUST-001

Summary of sales by period with tax breakdown.

### Parameters
- Date From
- Date To
- Tax Id Only
- Comments

### Output
PDF/Excel sales summary with tax details.

---

## FR-CUST-001-006: Sales Type Summary Report
**BABOK Related**: BR-CUST-001

Summary of sales by sales type and location.

### Parameters
- Date From
- Date To
- Sales Type
- Location
- Comments

### Output
PDF/Excel report grouped by sales type.
