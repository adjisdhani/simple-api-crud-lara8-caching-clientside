# Simple Laravel 8 CRUD API with Caching Client Side

This is a simple Laravel 8 CRUD API with Caching Client Side project for managing a collection of employees. It demonstrates basic CRUD operations, including creating, reading, updating, and deleting data, with endpoints accessible via RESTful API.

## Features
- View all employees (GET `/api/employees`)
- View a single book by ID (GET `/api/employees/{id}`)
- Create a new book (POST `/api/employees`)
- Update a book (PUT `/api/employees/{id}`)
- Delete a book (DELETE `/api/employees/{id}`)

## Requirements
- PHP 7.4 or higher
- Composer
- Laravel 8
- MySQL or MariaDB

## Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/adjisdhani/simple-api-crud-lara8-caching-clientside.git
   ```

2. **Navigate to the project directory**:
   ```bash
   cd simple-api-crud-lara8-caching-clientside
   ```

3. **Install dependencies**:
   ```bash
   composer install
   ```

4. **Copy .env.example to .env**:
   ```bash
   cp .env.example .env
   ```

5. **Configure the .env file**:
   ```bash
    DB_CONNECTION=mysql
	DB_HOST=127.0.0.1
	DB_PORT=3306
	DB_DATABASE=simple_api_crud_lara8_caching_clietside
	DB_USERNAME=root
	DB_PASSWORD=yourpassword
   ```

6. **Generate the application key**:
   ```bash
    php artisan key:generate
    ```

7. **Run the database migrations**:
   ```bash
    php artisan migrate
    ```

8. **(Optional) Seed the database with dummy data**:
   ```bash
    php artisan db:seed
    ```

9. **Start the development server**:
   ```bash
    php artisan serve
    ```

10. **Access the API**:
   (http://127.0.0.1:8000/api/employees)

      ## API Endpoints 
    
    **1. Get All Employees**

    - Method: GET
    - Endpoint: /api/employees
    - Description: Retrieve a list of all employees.

    **Example Response**:
       ```bash
       [
    	    {
    	    	"id": 11
			    "name": "Data Testing",
			    "email": "datatesting@datatesting.com",
			    "position": "Data testing position",
			    "salary": 100,
			    "updated_at": "2025-01-18T06:55:35.000000Z",
			    "created_at": "2025-01-18T06:55:35.000000Z"
			}
    	]
       ```
    
    **2. Get a Single Employee by ID**
    
    - Method: GET
    - Endpoint: /api/employees/{id}
    - Description: Retrieve a single employee by its ID.

    **Example Response**:
       ```bash
       [
    	    {
    	    	"id": 11
			    "name": "Data Testing",
			    "email": "datatesting@datatesting.com",
			    "position": "Data testing position",
			    "salary": 100,
			    "updated_at": "2025-01-18T06:55:35.000000Z",
			    "created_at": "2025-01-18T06:55:35.000000Z"
			}
    	]
       ```
    
    **3. Create a New Employee**
    
    - Method: POST
    - Endpoint: /api/employees
    - <b>Body Parameters:</b>
      1. name (string, required)
      2. email (string, required)
      3. position (string, required)
      4. salary (numeric, required)

    **Example Request**:
       ```bash
       [
    	    {
			    "name": "Data Testing",
			    "email": "datatesting@datatesting.com",
			    "position": "Data testing position",
			    "salary": 100
			}
    	]
       ```
    **Example Response**:
       ```bash
       [
    	    {
			    "name": "Data Testing",
			    "email": "datatesting@datatesting.com",
			    "position": "Data testing position",
			    "salary": 100,
			    "updated_at": "2025-01-18T06:55:35.000000Z",
			    "created_at": "2025-01-18T06:55:35.000000Z",
			    "id": 11
			}
    	]
       ```
    **4. Update a Employee**
    
    - Method: PUT
    - Endpoint: /api/employees
    - <b>Body Parameters:</b>
      1. name (string, required)
      2. email (string, required)
      3. position (string, required)
      4. salary (numeric, required)

    **Example Request**:
       ```bash
       [
    	    {
			    "name": "Datatestingupdate",
			    "email": "datatesting@testing.comupdate",
			    "position": "Software Engineerupdate",
			    "salary" : 5005
			}


    	]
       ```
    **Example Response**:
       ```bash
       [
    	    {
                "id": 11,
                "name": "Datatestingupdate",
			    "email": "datatesting@testing.comupdate",
			    "position": "Software Engineerupdate",
			    "salary" : 5005
            }
    	]
       ```
    **4. Delete a Employee**
    
    - Method: DELETE
    - Endpoint: /api/employees
    
    **Example Response**:
       ```bash
       [
    	    {
			    "message": "Employee deleted successfully"
			}
    	]
       ```
11. **Double klik index.html if you want testing a caching client side**

## Author
Adjis Ramadhani Utomo

## License
This project is licensed under the [MIT license](https://opensource.org/licenses/MIT).