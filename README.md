## Filament 4 Multi-Tenancy with stancl/tenancy 4
This is my ongoing study project on implementing a multi-tenancy application with the following requirements:
* Multi-database approach (not multi-schema)
* Tenant identification via subdomain
* Dedicated database user for each tenant (enabling PermissionControlledPostgreSQLDatabaseManager)

## Platforms
* Ubuntu 24.04.3 LTS
* Nginx 1.28.0
* PHP 8.4.14
* Laravel 12.37.0
* Filament 5.2.1
* Tenancy for Laravel v4
* PostgreSQL 18.0
* Redis 7.0.15

## Development Setup
* Central domain: f4m4.intranet
* Tenant domain: tenant1.f4m4.intranet, etc.
* Panels: /admin for central and /app for tenant
* Redis for session management

## Development Updates
Every key milestone and issue will be published on the [Release page](https://github.com/billydekid/f4m4/releases).

## Discussions
Any problems or suggestions during this study are welcome.
Please use the [Issues page](https://github.com/billydekid/f4m4/issues) for discussion.