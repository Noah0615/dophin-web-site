# 🐬 Dolphin Board - A Web Hacking & Secure Coding Project

[](https://www.google.com/search?q=https://www.whitehat.school/)

Welcome to the **Dolphin Board** repository. This project is more than just a simple web bulletin board; it's a practical exercise in web security, developed as part of the **Whitehat School's 1st Project**. The core mission was to build, attack, and defend a web application, thereby gaining hands-on experience in both web hacking and secure coding practices.

The project was driven by the motto: **"Learn by creating, breaking, and fixing."**

## 📜 Project Overview

This web application was intentionally built with security vulnerabilities to serve as a live-fire exercise for our Attack and Defense teams. The project followed a structured process:

1.  **Build**: A functional web board was developed using PHP and MySQL.
2.  **Attack**: An "Attack Team" systematically analyzed the application to discover and exploit security flaws.
3.  **Defend**: A "Defense Team" patched the identified vulnerabilities based on the Attack Team's findings.

This iterative process allowed us to deeply understand the mechanics of common web exploits and the best practices for mitigating them.

-----

## 🚀 Key Features

The Dolphin Board includes the following features:

  * **User Authentication**: Secure user registration, login, and session management.
  * **CRUD Operations**: Full Create, Read, Update, and Delete functionality for posts.
  * **Commenting System**: Users can engage in discussions on posts.
  * **File Handling**: Secure file uploads and downloads.
  * **Social Login**: Integration with Kakao for user authentication.
  * **Security**: Implementation of `HTML Purifier` to prevent Cross-Site Scripting (XSS) attacks.

-----

## 🛠️ Tech Stack & Server Environment

The application is built with a classic LAMP stack, deployed on a cloud virtual machine.

  * **Backend**: PHP
  * **Database**: MySQL
  * **Web Server**: Apache2
  * **Frontend**: HTML, CSS (Bootstrap), JavaScript (jQuery)
  * **Hosting**: [Oracle VM Instance](https://www.oracle.com/kr/cloud/compute/virtual-machines/)
  * **Operating System**: Ubuntu 20.04

### Server Setup & Configuration

#### 1\. SSH Access

To connect to the server, use the following command:

```bash
ssh -v -i {your_secret_key_path} ubuntu@144.24.77.217
```

#### 2\. Package Installation

Install the necessary components for the LAMP stack:

```bash
# Update package lists
sudo apt-get update

# Install MySQL, Apache, and PHP
sudo apt-get install -y mysql-server apache2 php php-mysql

# Start the Apache web server
sudo service apache2 start
```

#### 3\. Firewall Configuration (iptables)

To allow web traffic, open port 80 on the server:

```bash
# Allow incoming traffic on port 80
sudo iptables -I INPUT 1 -p tcp --dport 80 -j ACCEPT
```

***Note:*** *The original `iptables` rules included a `DROP` rule that would block traffic. Only the `ACCEPT` rule is necessary for this setup.*

-----

## 🔐 Security Analysis & Enhancements

As part of the project, our Attack Team identified and documented **11 types of vulnerabilities** based on KISA guidelines. The Defense Team subsequently patched 6 of these critical issues.

**Identified Vulnerabilities Included:**

  * SQL Injection (SQLi)
  * Cross-Site Scripting (XSS)
  * Directory Indexing
  * Insufficient Authentication & Authorization
  * Sensitive Information Exposure
  * Insecure File Upload/Download Mechanisms

**Key Security Patches:**

  * Implemented **Prepared Statements** to mitigate SQL Injection attacks.
  * Strengthened session management to prevent unauthorized access to user pages.
  * Enhanced input validation and output encoding to protect against XSS.

-----

## 🎯 Future Development (To-Do)

We have plans to further enhance the functionality and security of the Dolphin Board:

  * **Additional Social Logins**: Integrate Naver for more authentication options.
  * **Social Features**: Implement a user-to-user "Follow" system.
  * **Complete Vulnerability Patching**: Address all remaining security issues identified by the Attack Team.

-----

## 👥 The Team

This project was a collaborative effort between two specialized teams:

  * 🛡️ **Defense Team (Development & Patching)**: Han Suhyun (PM), Jeon Jaewon, Jin Hyunjun
  * ⚔️ **Attack Team (Analysis & Exploitation)**: Choi Wonjun, Choi Junseong

We are proud of the practical skills and teamwork we developed through this project. Thank you for visiting our repository\!

