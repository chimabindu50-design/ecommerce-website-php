# ecommerce-website-php
A complete PHP and MySQL-based E-Commerce Website featuring user authentication, admin dashboard, product management, shopping cart functionality, and responsive design. Built using PHP, MySQL, HTML, CSS, JavaScript, and XAMPP.

### **Project Overview**
This project involves building an e-commerce website with two user roles: **Admin** and **Customer**. The primary functionalities include user management, product display, cart operations, and admin-specific controls like adding and managing products.
This e-commerce platform is designed for **Customers** and **Admins** to handle shopping and management functionalities. Below are concise, sectioned explanations for each part of the project.

---

### **Features**
1. **Customer Features**:
   - **Register**: Allows new customers to sign up.
   - **Login/Logout**: Authenticate customers securely.
   - **View Products**: Browse available products on the homepage.
   - **Add to Cart**: Add products to a shopping cart.
   - **View Cart**: Manage cart items and proceed to checkout (optional).
### **1. User Section**
This section explains how users interact with the website.

#### **1.1. How can users register on the platform?**
- **Answer**: Users can create an account on the `register.php` page by providing their name, email, and password. This allows them to access personalized features like the shopping cart.

#### **1.2. How can users log in and log out?**
- **Login**: Users log in on the `login.php` page using their email and password.
- **Logout**: The `logout.php` page ends the session, ensuring user data is secure.

#### **1.3. How can users view products?**
- **Answer**: All products are displayed on the homepage (`index.php`). Users can see product names, prices, descriptions, and images.

#### **1.4. How can users add products to their cart?**
- **Answer**: On the `index.php` page, users click "Add to Cart" to save items. The system records these items in the cart for the logged-in user.

#### **1.5. How can users manage their cart?**
- **Answer**: The `cart.php` page lets users view, update, or remove items from their cart. It also shows the total cost of selected products.

---

### **2. Admin Section**
This section explains how admins manage the platform.

#### **2.1. How do admins log in and log out?**
- **Login**: Admins log in via `admin/login.php` using their credentials.
- **Logout**: The `admin/logout.php` page ends the admin session securely.

#### **2.2. What is the admin dashboard?**
- **Answer**: The `admin/dashboard.php` page provides a control panel with options to add, edit, and delete products.

2. **Admin Features**:
   - **Login/Logout**: Secure admin access to the control panel.
   - **Dashboard**: Centralized admin control interface.
   - **Manage Products**: View, edit, and delete products.
   - **Add Products**: Add new products with name, price, description, and image.
#### **2.3. How do admins add products?**
- **Answer**: The `admin/add_product.php` page allows admins to add new products by filling out a form with product details and uploading an image.

#### **2.4. How do admins manage products?**
- **Answer**: The `admin/manage_products.php` page shows all products in a table with options to:
  - Edit product details.
  - Delete products from the store.

---

### **File Structure**
- **Root Directory**:
  - `index.php`: Homepage for viewing products.
- **Admin Directory** (`admin/`):
  - `login.php`: Admin login page.
  - `logout.php`: Ends admin session.
  - `dashboard.php`: Admin control panel.
  - `add_product.php`: Add new products.
  - `manage_products.php`: View, edit, or delete products.
- **Customer Directory** (`pages/`):
  - `register.php`: Customer registration.
  - `login.php`: Customer login.
  - `logout.php`: Ends customer session.
  - `cart.php`: Displays and manages cart items.
- **Includes Directory** (`includes/`):
  - `db.php`: Database connection file.
- **Assets**:
  - `css/style.css`: Styling for the entire project.
  - `images/`: Product images and assets.
### **3. Database Section**
This section explains how the database is structured.

#### **3.1. What does the users table do?**
- **Answer**: The `users` table stores information about all users (customers and admins):
  - Usernames, emails, hashed passwords.
  - A `role` field to differentiate between customers (`user`) and admins (`admin`).

#### **3.2. What does the products table do?**
- **Answer**: The `products` table contains product details:
  - Names, prices, descriptions, and image filenames.

#### **3.3. What does the cart table do?**
- **Answer**: The `cart` table keeps track of items added to users' carts:
  - Links users to products and stores the quantity of each item.

---

### **Databases Used**

1. **Users Table**:
   - Stores information for both customers and administrators.
   - Fields:
     - `id`: Unique identifier for each user.
     - `username`: Name of the user.
     - `email`: Email address (unique).
     - `password`: Encrypted password.
     - `role`: Specifies if the user is a `user` (customer) or `admin`.
     - `created_at`: Timestamp of when the user was added.

2. **Products Table**:
   - Contains details of all products available in the store.
   - Fields:
     - `id`: Unique identifier for each product.
     - `name`: Name of the product.
     - `price`: Price of the product.
     - `description`: Brief description of the product.
     - `image`: Name of the image file for the product.
     - `created_at`: Timestamp of when the product was added.

3. **Cart Table**:
   - Stores items added to the cart by customers.
   - Fields:
     - `id`: Unique identifier for each cart entry.
     - `user_id`: References the `id` of the user who owns the cart.
     - `product_id`: References the `id` of the product in the cart.
     - `quantity`: Number of units of the product added to the cart.
     - `created_at`: Timestamp of when the item was added to the cart.
### **4. Flow of the Website**
This section explains the flow of user actions.

#### **4.1. What happens when a user registers?**
- **Answer**: The system validates the input, hashes the password, and saves the user data in the `users` table.

#### **4.2. What happens when a user logs in?**
- **Answer**: The system verifies the email and password, then starts a session to allow personalized access.

#### **4.3. What happens when a product is added to the cart?**
- **Answer**: The system saves the product details in the `cart` table, linked to the logged-in user's ID.

#### **4.4. What happens when an admin adds a product?**
- **Answer**: The system uploads the product image, saves the product details in the `products` table, and displays it on the homepage.

#### **4.5. What happens when an admin deletes a product?**
- **Answer**: The system removes the product entry from the `products` table, making it unavailable on the website.

---

### **How to Set Up**
1. **Database Setup**:
   - Create a database named `ecommerce`.
   - Use a database management tool like phpMyAdmin to create the required tables (`users`, `products`, and `cart`).
### **5. Security Measures**
This section explains how the website ensures security.

2. **File Placement**:
   - Place the project files in your web server’s root directory (e.g., `htdocs` for XAMPP).
#### **5.1. How are passwords secured?**
- **Answer**: Passwords are hashed using `password_hash()` before being stored in the database.

3. **Run the Application**:
   - Start your web server and navigate to `http://localhost/ecommerce/`.
#### **5.2. How is session management handled?**
- **Answer**: Sessions track logged-in users (`$_SESSION['user_id']` for customers, `$_SESSION['admin_id']` for admins) to restrict access to sensitive pages.

#### **5.3. How is admin access secured?**
- **Answer**: Admin login checks the `role` field in the `users` table to ensure only admins can access the control panel.

---

### **Next Steps**
For detailed implementation of each feature, refer to the following:
- `01_databaseSetup.md`: Database setup instructions.
- `02_registrationPageSetup.md`: Customer registration.
- `03_loginPageSetup.md`: Customer login.
- `04_logoutPageSetup.md`: Customer logout.
- `05_indexPageSetup.md`: Homepage for products.
- `06_cartPageSetup.md`: Cart functionality.
- **Admin Pages**: Documentation for admin functionalities.
### How to Use This Guide
Follow the sections to understand:
- How users and admins interact with the platform.
- How the database stores and retrieves data.
- The flow of actions across the website.

For detailed implementation, refer to the individual PHP files for each feature. Let me know if this structure works for you!
