# The Plant Emporium

Welcome to The Plant Emporium! This is a basic ecommerce website built in PHP, designed specifically for a plant nursery. The website allows users to browse and purchase plants, while providing an admin interface for managing products.

## Features
User Registration and Login: Users can create an account or log in if they already have one. PHP sessions are utilized for user authentication, ensuring secure access to the website.

#### Product Catalog: 
Users can browse through the available plant products and view detailed information about each item, including images, descriptions, and prices.

#### Shopping Cart: 
Users can add products to their shopping cart, update the quantity of each item, and remove items from the cart.

#### Checkout: 
Users can proceed to the checkout process, where they can review their order, enter shipping and billing details, and complete the purchase.

#### Admin Dashboard: 
An admin interface is provided for managing the products available on the website. The admin can perform CRUD (Create, Read, Update, Delete) operations on products, allowing them to add new plants, edit existing ones, and remove products from the catalog.



## Development Tools
This project was developed using the following tools:

IDE: Visual Studio Code (VSCode)
Server Environment: XAMPP (Apache, MySQL, PHP, phpMyAdmin)
Database: MySQL

## Installation
Clone this repository to your local machine using the following command:

bash
```
git clone https://github.com/sohampathak1234/The-Plant-Emporium.git
```

Import the database schema by executing the SQL file provided in database/ecom.sql. This will create the necessary tables for the website to function.

Update the database connection settings in config/db.php to match your local environment.

Make sure you have XAMPP installed on your system. You can download XAMPP from the official website: https://www.apachefriends.org

Start the Apache and MySQL services in XAMPP.

Copy the cloned repository to the htdocs folder in your XAMPP installation directory.

Open your web browser and visit http://localhost/The-Plant-Emporium to access The Plant Emporium website.

## Usage

### As a User:

Register for a new account or log in with your existing credentials.
Browse the product catalog, view plant details, and add desired items to your cart.
Navigate to your cart, where you can update the quantity of items or remove them.
Proceed to checkout to finalize your purchase by entering the required information.
Log out when you have finished shopping.

### As an Admin:

Log in with your admin credentials.
Access the admin dashboard, where you can manage the products.
Perform CRUD operations on products: add new plants, edit existing ones, or delete items from the catalog.
Log out when you have finished managing the website.


## Contributing
Contributions are welcome! If you find any issues or have suggestions for improvements, please open an issue or submit a pull request. Make sure to follow the existing coding style and provide clear and concise descriptions for your changes.


This project was developed by Soham Pathak. If you have any questions or need assistance, please don't hesitate to reach out.






