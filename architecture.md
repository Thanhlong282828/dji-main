# SCHEMA Main Architecture

SCHEMA Main is an independent Laravel 13 modular monolith and presentation application. Its modules live in `Modules/`. It uses MySQL `schema_main` only for local read models and customer-facing state; it must never query `schema_admin`.

Published products, articles, pages and menus will be obtained through a versioned Admin REST client behind `AdminApiClientInterface`, mapped into immutable DTOs and cached as arrays in Redis. Timeouts, bounded retries and a circuit breaker protect page rendering. Existing local read models provide the current fallback while the API client is implemented.

Blade, Vite and TypeScript render the SCHEMA black/gold experience. Reverb is reserved for public-safe publication events. Docker, CI/CD and security controls follow the same release model as Admin, with separate repository and deployment credentials.
