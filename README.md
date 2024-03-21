# Exchange Rates API Documentation

This project is an API designed to provide current exchange rate information and log access requests. It integrates with the Open Exchange Rates API to fetch current exchange rates and logs each access request with details such as the timestamp and IP address. This documentation is intended for developers looking to understand or use the API, providing all necessary steps from setup to deployment.

## Table of Contents

- [About The Project](#about-the-project)
- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
- [Usage](#usage)
- [API Reference](#api-reference)
  - [Endpoints](#endpoints)
    - [Get Current Exchange Rates](#get-current-exchange-rates)
    - [Get Access Logs](#get-access-logs)
- [Environment Variables](#environment-variables)
- [FAQ](#faq)
- [Authors and Acknowledgment](#authors-and-acknowledgment)

## About The Project

This API leverages Laravel 8 to provide real-time exchange rate information and to log access requests for monitoring and analysis. It's designed for use in financial applications, analytics tools, or any software requiring currency conversion features. The API does not require authentication, making it easily accessible for public use.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

- PHP 7.4 or higher
- Composer
- Laravel 8
- XAMPP (or equivalent server stack that supports PHP and MySQL)

### Installation

1. **Clone the repository:**
   ```
   git clone https://yourproject/repository.git
   ```
   
2. **Navigate to the project directory:**
   ```
   cd yourproject
   ```

3. **Install dependencies with Composer:**
   ```
   composer install
   ```

4. **Copy the example env file and make the required configuration changes in the .env file:**
   ```
   cp .env.example .env
   ```

5. **Generate a new application key:**
   ```
   php artisan key:generate
   ```

6. **Run the migrations to create the database schema:**
   ```
   php artisan migrate
   ```

7. **Start the server using XAMPP or Laravel's built-in server:**
   ```
   php artisan serve
   ```
   or start your XAMPP server and navigate to the project's public directory.

## Usage

After installation, the API can be consumed to fetch exchange rates and access log entries.
The base of the endpoint is this: /api/v1/


## API Reference

### Endpoints

#### Get Current Exchange Rates

- **GET /rates**
  - Fetches the current exchange rates.
  - No parameters required.

#### Get Access Logs

- **GET /access-logs**
  - Retrieves access log entries. Optionally filter by start and end date.
  - Query parameters:
    - `start_date`: The beginning of the date range (format: YYYY-MM-DD).
    - `end_date`: The end of the date range (format: YYYY-MM-DD).
    
Here is an example: localhost:800/api/v1/access-logs?start_date=2024-01-01&end_date=2024-01-31

## Deployment

Add additional notes about how to deploy this on a live system.

## Environment Variables

- `DB_CONNECTION`: Your database connection type.
- `DB_DATABASE`: Your database name.
- `DB_USERNAME`: Your database username.
- `DB_PASSWORD`: Your database password.
- `OPEN_EXCHANGE_RATES_API_KEY`: Your API key for Open Exchange Rates.

## Security

Since this is a public API, ensure all endpoints are protected against common vulnerabilities. Use Laravel's built-in features like rate limiting to safeguard the API.

## FAQ

Q: Do I need an API key to use this service?
A: You don't need any api key to make requests to this API as it's public. However, for installation, you need to get your own APP_ID from the https://openexchangerates.org/ site itself. 

## Authors and Acknowledgment

- **Your Name** - *Initial work* - [Manuel Alzate](https://github.com/maalzates)

Thank contributors and other authors.
