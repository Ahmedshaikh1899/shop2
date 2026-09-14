# Shop Portal - Application Team Handoff

Application: Shop Portal
Version: 2.1.0
Type: PHP web application
Web server: Apache with PHP
Container HTTP port: 80

Database: MySQL 8.0
Database: shopdb
DB user: shopuser
DB password: supplied by Platform/DevOps
MySQL port: 3306

Database files:
- database/schema.sql
- database/seed.sql

Runtime environment variables:
DB_HOST, DB_PORT, DB_NAME, DB_USER, DB_PASSWORD
Do not hard-code DB credentials into the image.

Health endpoint: /health.php (HTTP 200)

Platform/DevOps must create Dockerfile, .dockerignore, application image, MySQL deployment, database initialization, Kubernetes manifests, ConfigMap/Secret, persistent MySQL storage, and website exposure.
