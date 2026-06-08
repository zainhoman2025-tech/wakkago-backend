# Functional Specification - WakkaGo

## 1. User Registration & KYC
- Customers register with phone/email.
- Providers register business details and must upload documents for verification.
- Admin dashboard for approving/rejecting provider KYC.

## 2. Real-time Vehicle Discovery
- Customers search for vehicles based on location and category.
- Backend calculates distance and estimated fuel cost using a "Distance Matrix" service.
- Display "Escrow Preferred" badge on provider profiles.

## 3. The "Commitment Fee" Workflow
- Customer makes a request.
- System calculates the `Commitment Fee` (Fuel + Platform fee).
- Customer pays the fee via integration (Paystack/Flutterwave).
- Once paid, the Driver is notified and the "Dispatch Lock" is activated.
- If Customer cancels after Driver is "En Route", the Fuel portion of the fee is automatically sent to the Driver's wallet.

## 4. Wallet & Payout System
- Every user (Customer/Provider) has a virtual wallet.
- Platform fee is deducted automatically on successful arrival/completion.
- Providers can request withdrawals from their wallet to their bank accounts.

## 5. Security & Trust
- Rate-limiting on requests to prevent spam.
- Webhooks to verify all external payments.
- Admin portal to resolve disputes before escrow release.
