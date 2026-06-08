# Database Schema - WakkaGo

This schema represents the core entities for the WakkaGo logistics marketplace.

## 1. `users`
- `id` (UUID)
- `name` (String)
- `phone` (String, unique)
- `email` (String, unique)
- `password` (Hash)
- `role` (Enum: 'customer', 'admin')
- `wallet_balance` (Decimal, default 0.00)

## 2. `providers`
- `id` (UUID)
- `user_id` (FK -> users.id)
- `business_name` (String)
- `kyc_status` (Enum: 'pending', 'verified', 'rejected')
- `prefers_escrow` (Boolean, default true)
- `location_gps` (Point/Geography)

## 3. `vehicles`
- `id` (UUID)
- `provider_id` (FK -> providers.id)
- `category` (Enum: 'bike', 'mini_truck', 'trailer', 'crane')
- `plate_number` (String)
- `model_details` (JSON)
- `is_available` (Boolean, default true)

## 4. `requests`
- `id` (UUID)
- `customer_id` (FK -> users.id)
- `vehicle_id` (FK -> vehicles.id, nullable)
- `pickup_location` (Point)
- `dropoff_location` (Point)
- `distance_km` (Decimal)
- `fuel_commitment_fee` (Decimal)
- `platform_fee` (Decimal)
- `status` (Enum: 'searching', 'accepted', 'en_route', 'arrived', 'completed', 'cancelled')
- `escrow_active` (Boolean)

## 5. `transactions`
- `id` (UUID)
- `request_id` (FK -> requests.id)
- `amount` (Decimal)
- `type` (Enum: 'fee', 'payout', 'refund', 'fuel_guarantee')
- `status` (Enum: 'pending', 'success', 'failed')
