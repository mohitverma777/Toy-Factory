# 🛒 PHP E-Commerce Website (Admin • Customer • Partner)

A **full-stack PHP-based E-Commerce web application** designed to provide a complete online shopping experience with **three dedicated panels**:  
**Admin**, **Customer**, and **Delivery Partner**.  
The system includes **secure OTP-based order delivery verification via email**.

---

## 📌 Project Overview

This project is a multi-role e-commerce platform where:
- **Customers** browse products, place orders, and track deliveries.
- **Admins** manage products, users, orders, and partners.
- **Delivery Partners** verify orders using an **OTP sent to their email** before completing delivery.

The platform ensures **secure order handling**, **role-based access**, and **smooth order flow from purchase to delivery**.

---

## 👥 User Roles & Features

### 👤 Customer Panel
- User registration & login
- Browse products by category
- Add products to cart
- Place orders
- View order history & status
- Receive order delivery updates

---

### 🛠️ Admin Panel
- Admin authentication
- Dashboard with sales & order statistics
- Add / update / delete products
- Manage categories
- Manage customers & delivery partners
- Assign orders to delivery partners
- Monitor delivery status
- View OTP verification logs

---

### 🚚 Delivery Partner Panel
- Partner login system
- View assigned orders
- Receive **OTP on registered email**
- Verify OTP at delivery time
- Mark order as delivered only after OTP verification
- View delivery history

---

## 🔐 OTP-Based Delivery Verification

To ensure secure delivery:
1. Admin assigns an order to a delivery partner.
2. An **OTP is generated automatically**.
3. OTP is sent to the **delivery partner’s registered email**.
4. Partner enters OTP during delivery.
5. Order is marked **Delivered** only after successful OTP verification.

This prevents fake or incomplete deliveries.

---

## 🧑‍💻 Tech Stack

| Technology | Usage |
|-----------|------|
| PHP | Backend logic |
| MySQL | Database |
| HTML5 | Markup |
| CSS3 | Styling |
| JavaScript | Client-side validation |
| Bootstrap | Responsive UI |
| PHPMailer | Email OTP sending |
| Apache (XAMPP/WAMP) | Local server |

---

## 🗂️ Project Structure

