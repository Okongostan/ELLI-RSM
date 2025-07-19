# Ellie Restaurant Management System (ERMS)

The **Ellie Restaurant Management System (ERMS)** is a web-based application designed to streamline restaurant operations such as order management, menu management, and reporting. Built using HTML, CSS, JavaScript, PHP, and MySQL.

---

## 📁 Project Structure
```
ERMS/
├── frontend/         # User interfaces (HTML/CSS)
│   ├── login.html
│   ├── dashboard.html
│   ├── menu_manager.html
│   ├── order_interface.html
│   └── styles.css
├── backend/          # Backend logic (PHP)
│   ├── db.php
│   ├── login.php
│   ├── logout.php
│   ├── auth_check.php
│   ├── add_menu.php
│   ├── place_order.php
├── database/         # Database schema
│   └── erms_schema.sql
├── README.md
```

---

## 🚀 Features
- **User Authentication**: Secure login for staff/admin
- **Menu Management**: Add and manage food items
- **Order Interface**: Staff can place and process orders
- **Role Management**: Admins manage menus; staff place orders
- **Activity Logging**: Track user actions (via `activity_logs`)

---

## 🛠️ Tech Stack
- **Frontend**: HTML, CSS (Vanilla, Bootstrap ready)
- **Backend**: PHP
- **Database**: MySQL
- **Version Control**: Git / GitHub

---

## 🧱 Installation & Setup
1. **Clone the repository**
```bash
git clone https://github.com/yourusername/erms.git
cd erms
```
2. **Import the Database**
   - Open `phpMyAdmin`
   - Create a new database named `erms`
   - Import `database/erms_schema.sql`

3. **Configure Database**
   - Edit `backend/db.php` if needed:
```php
$host = 'localhost';
$dbname = 'erms';
$user = 'root';
$pass = '';
```

4. **Run the Application**
   - Open `frontend/login.html` in a browser
   - Log in with credentials stored in the `users` table

---

## 🔐 Default Admin Login
- **Username**: `admin`
- **Password**: `admin@123` _(store as hashed in production)_

---

## 🧪 Testing Checklist
- [x] User login/logout
- [x] Add/edit menu items
- [x] Place orders
- [x] Navigation flows

---

## 🤝 Contributions
Feel free to fork and contribute by submitting pull requests.

---

## 📄 License
MIT License

---

**Author:** [Your Name]  
**Date:** July 2025
