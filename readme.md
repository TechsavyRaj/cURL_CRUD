# CRUD Operations with CodeIgniter 3 and cURL  

A simple demonstration of performing CRUD (Create, Read, Update, Delete) operations using cURL in CodeIgniter 3, integrated with [ReqRes](https://reqres.in/) fake API. This example showcases how to handle API requests efficiently and record responses into a `file.txt` for logging or future reference.  

## Features  
- **GET**: Fetch data from the API and display it seamlessly.  
- **POST**: Create new records via API requests.  
- **PUT**: Update existing records using API endpoints.  
- **DELETE**: Remove records from the API with precision.  
- **File Logging**: Record API responses and data into a `file.txt` for easy debugging and traceability.  

## Why ReqRes?  
[ReqRes](https://reqres.in/) is a reliable fake REST API for testing and prototyping, making it ideal for demonstrating CRUD operations without impacting a real database.  

## Installation and Setup  
1. Clone the repository:  
   ```bash
   git clone https://github.com/username/codeigniter3-crud-curl.git
   ```  
2. Set up CodeIgniter 3 on your server environment.  
3. Configure the `base_url` and API endpoint in your project settings.  

## Usage  
- Navigate to the provided controller or method to perform CRUD operations.  
- API responses are automatically saved into `file.txt` for reference.  

## Ideal For  
- Developers learning API integrations with CodeIgniter 3.  
- Testing cURL-based operations in a lightweight framework.  
- Building real-world applications with RESTful API architecture.  

## Server Requirements

PHP version 5.6 or newer is recommended.

It should work on 5.3.7 as well, but we strongly advise you NOT to run
such old versions of PHP, because of potential security and performance
issues, as well as missing features.
