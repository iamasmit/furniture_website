# Furniture Store

## Contact Us

🌐 [https://asmitchaudhary.com.np/](https://asmitchaudhary.com.np/)

## Screenshots

![Screenshot (43)](https://github.com/iamasmit/furniture_website.github.io/assets/58207304/ba3ecc44-643f-413c-b417-b4a257732926)
![Screenshot (44)](https://github.com/iamasmit/furniture_website.github.io/assets/58207304/d50131dc-6396-44c1-b029-34479718086b)
![Screenshot (46)](https://github.com/iamasmit/furniture_website.github.io/assets/58207304/b3c77acd-f5c4-49a0-a037-ba8f0650d84b)

---

## Creating the Table and Importing SQL

1. **Create the Table**

   Open your MySQL command-line interface or any MySQL client and run:

   ```sql
   CREATE DATABASE IF NOT EXISTS aayush_db;
   USE aayush_db;

   CREATE TABLE aayush (
       id INT AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(255) NOT NULL,
       description TEXT,
       price DECIMAL(10, 2),
       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );
