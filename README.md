<div align="center">

  <h1>🎓 Galgotias University Student & ID Management Portal</h1>
  <p><strong>GUCREATEID — Interactive Student Admission & Administrative Management Portal</strong></p>

  <p>
    <a href="https://singh0883.github.io/GUCREATEID/">
      <img src="https://img.shields.io/badge/Live_Demo-🚀_Click_Here-7aa2f7?style=for-the-badge&logo=github&logoColor=white" alt="Live Demo">
    </a>
    <a href="https://github.com/SINGH0883/GUCREATEID/stargazers">
      <img src="https://img.shields.io/github/stars/SINGH0883/GUCREATEID?style=for-the-badge&color=7dd3fc&logo=github" alt="Stars">
    </a>
    <a href="https://github.com/SINGH0883/GUCREATEID/network/members">
      <img src="https://img.shields.io/github/forks/SINGH0883/GUCREATEID?style=for-the-badge&color=c084fc&logo=github" alt="Forks">
    </a>
    <a href="https://github.com/SINGH0883/GUCREATEID/blob/main/LICENSE">
      <img src="https://img.shields.io/badge/License-MIT-38bdf8?style=for-the-badge" alt="License">
    </a>
  </p>

  <p>🌐 <strong>Live Website:</strong> <a href="https://singh0883.github.io/GUCREATEID/">https://singh0883.github.io/GUCREATEID/</a></p>

</div>

---

## 📌 Table of Contents

- [Overview](#-overview)
- [Key Features](#-key-features)
- [Tech Stack](#-tech-stack)
- [Project Directory Structure](#-project-directory-structure)
- [Getting Started](#-getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
- [Usage Guide](#-usage-guide)
- [Admin Features](#-admin-features)
- [Contributing](#-contributing)
- [License](#-license)
- [Contact](#-contact)

---

## 📖 Overview

**GUCREATEID** is a full-featured web application designed for Galgotias University student interactions and administrative record management. It offers a sleek, modern, glassmorphism-styled landing page for prospective students while providing an authentication-backed administrative dashboard for managing student enrollments, updating records, and exporting datasets.

---

## ✨ Key Features

- **🌐 Modern Glassmorphism UI**: Beautiful floating background animations, glass panel sidebars, responsive topbars, and hero sections.
- **🔐 Admin Authentication**: Secure login portal (`admin_login.php` & `login_check.php`) for authorized campus personnel.
- **📊 Administrative Dashboard**: Central hub (`dashboard.php`) for monitoring student metrics and managing operations.
- **👩‍🎓 Student Management**: Add, update, view, and delete student records (`manage_students.php`, `add_student.php`, `delete_student.php`).
- **📥 CSV Data Export**: One-click functionality (`export_csv.php`) to export student records directly into `.csv` files for administrative reporting.
- **📱 Fully Responsive**: Tailored CSS for mobile, tablet, and desktop viewports.

---

## 🛠️ Tech Stack

<div align="center">

| Component | Technology | Description |
| :--- | :--- | :--- |
| **Frontend** | HTML5 / CSS3 / JavaScript | Modern glassmorphism UI & responsive design |
| **Backend** | PHP (>= 7.4 / 8.x) | Authentication logic, CRUD operations, & session management |
| **Database** | MySQL | Database layer (`db.php`) for persistent student records |
| **Export Engine** | PHP CSV Stream | Automated CSV report generation |
| **Hosting** | GitHub Pages / Apache / Nginx | Web deployment |

</div>

---

## 📁 Project Directory Structure

```plaintext
GUCREATEID/
├── index.html            # Main landing page & student portal UI
├── index.css             # Glassmorphism design system & responsive layout styles
├── admin_login.php       # Administrative login portal
├── login_check.php       # Authentication processing & session verification
├── dashboard.php         # Admin control panel & metrics dashboard
├── manage_students.php   # Student listing & record management
├── add_student.php       # New student enrollment form
├── add_submit.php        # Form handler for student creation
├── delete_student.php    # Student record deletion handler
├── export_csv.php        # CSV export generator for student data
├── db.php                # Database configuration & connection handler
├── logout.php            # Session termination & security cleanup
├── j.jpg                 # Site favicon / branding asset
├── k.jpg                 # Background graphics / media asset
└── README.md             # Project documentation
```

---

## 🚀 Getting Started

### Prerequisites

To run the complete PHP backend and MySQL database features locally:

- **XAMPP / WAMP / MAMP / LAMP** or standalone **PHP 7.4+** and **MySQL Server**
- Web Browser (Chrome, Edge, Firefox, Safari)

### Installation

1. **Clone the Repository**
   ```bash
   git clone https://github.com/SINGH0883/GUCREATEID.git
   ```

2. **Move to Server Directory**
   - For XAMPP (Windows): `C:\xampp\htdocs\GUCREATEID`
   - For Linux (Apache): `/var/www/html/GUCREATEID`

3. **Database Configuration**
   - Import your MySQL database schema into PHPMyAdmin / MySQL Workbench.
   - Update your connection details in `db.php`:
     ```php
     $host = "localhost";
     $user = "root";
     $pass = "";
     $dbname = "gucreateid";
     ```

4. **Launch Application**
   - Start Apache and MySQL via XAMPP Control Panel.
   - Open browser and navigate to: `http://localhost/GUCREATEID/`

---

## 💻 Usage Guide

### Student Portal (Frontend)
- Visit [https://singh0883.github.io/GUCREATEID/](https://singh0883.github.io/GUCREATEID/) to view the live portal.
- Explore courses, admission details, and campus information.

### Admin Dashboard (Backend)
1. Click **Admin Login** on the top bar or visit `admin_login.php`.
2. Authenticate using administrator credentials.
3. Access student management options:
   - **Add New Student**: Fill out the enrollment form.
   - **Manage Students**: View current enrollment list, search records, or delete obsolete entries.
   - **Export Data**: Click **Export CSV** to generate a downloadable spreadsheet of all student records.

---

## 🤝 Contributing

Contributions, issues, and feature requests are welcome!  
Check out the [Issues Page](https://github.com/SINGH0883/GUCREATEID/issues) to report bugs or request features.

1. **Fork the Repository** (`https://github.com/SINGH0883/GUCREATEID/fork`)
2. **Create Feature Branch** (`git checkout -b feature/NewFeature`)
3. **Commit Changes** (`git commit -m 'Add NewFeature'`)
4. **Push to Branch** (`git push origin feature/NewFeature`)
5. **Open Pull Request**

---

## 📜 License

Distributed under the **MIT License**. See `LICENSE` for details.

---

## ✉️ Author & Contact

Developed with ❤️ by **Yuvraj Singh**

- **GitHub**: [@SINGH0883](https://github.com/SINGH0883)
- **LinkedIn**: [Yuvraj Singh](https://www.linkedin.com/in/yuvraj-singh-85abc)
- **Email**: [yuvraj001@zohomail.in](mailto:yuvraj001@zohomail.in)

---

<div align="center">
  <sub>⭐ If you find this repository useful, give it a star on GitHub!</sub>
</div>
