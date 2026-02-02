# 🖥️ Virtual Test Hub 💻️

## 📌 Problem Statement
With the rapid digitization of education, traditional paper-based exams are no longer practical for many institutions.  
There is a growing need for a comprehensive solution that allows educators to conduct exams online efficiently, securely, and at scale.

However, existing online exam systems often suffer from:
- ❌ Cheating vulnerabilities  
- ⚠️ Server crashes under high load  
- 😕 Poor user experience  
- 📄 Complicated exam content management  

**Virtual Test Hub** aims to address these challenges by providing a robust, user-friendly, and scalable online examination platform.

---

## 🎯 Objectives
- 📉 Reduce paperwork and manual workload  
- ⏱️ Save time and improve efficiency  
- ⚡ Enhance speed and reliability of examinations  
- 🌱 Promote a paperless, eco-friendly environment  
- 🧾 Minimize documentation and avoid data duplication  
- 🤝 Support the transition towards digital education  

---

## ✨ Features

### 🔐 Authentication & Access
- User registration and secure login system  
- Role-based access for **students**, **instructors**, and **admins**  
- Quiz/assessment participation and score tracking  

### 🧠 Quiz & Exam Module
- Timer-based quizzes  
- Question randomization  
- Multiple question types (MCQs, True/False, Descriptive)  
- Progress indicators and immediate feedback  
- Multi-level quiz support: **Intermediate | UG | PG**

### 📚 Repository Section
- Access to books and articles for preparation  
- Search and filter functionality  
- Add to favorites  
- Download or read online  

### 👤 User Profile & Career Details
- Personal profile management  
- Activity logs and performance reports  
- Career insights and growth tracking  

---

## 🏆 Extra Features (Planned / Optional)
- 🥇 Leaderboard and ranking system  
- 🔔 Notifications and reminders  
- 📊 Instructor dashboard for managing quizzes and reports  
- 🌙 Dark mode for enhanced user experience  

---

## 🧰 Tech Stack

| Layer | Technologies |
|-------|---------------|
| 🌐 Frontend | HTML, CSS, JavaScript |
| ⚙️ Backend | PHP / MySQL *(initial version)* or MERN Stack *(enhanced version)* |
| 🗄️ Database | MySQL / MongoDB |
| 🧩 Tools | Node.js, Express.js, React.js, MongoDB |

---

## 🚀 Future Enhancements
- AI-based proctoring system for cheat prevention 
- Real-time performance analytics  
- Cloud deployment for scalability  
- Mobile app version  

---

## 📂 Project Setup

### 🧩 Prerequisites
- Install **XAMPP/LAMPP** on your system  
- Ensure **Apache** and **MySQL** services are running  
- Project directory: `/opt/lampp/htdocs/VTH`

---

### ⚙️ Steps to Run the Project
```bash
# 1️⃣ Open Terminal and start the XAMPP manager
cd /opt/lampp
sudo ./manager-linux-x64.run

# 2️⃣ Start Apache and MySQL from the XAMPP Control Panel

# 3️⃣ Verify your project folder path
#     It should be located at:
/opt/lampp/htdocs/VTH

# 4️⃣ Import the database
#     - Open your browser and visit: http://localhost/phpmyadmin
#     - Create a new database (example: virtual_test_hub)
#     - Import the provided .sql file inside the VTH/database folder (if available)

# 5️⃣ Run the project
#     Open your browser and go to:
http://localhost/VTH/


# 5️⃣ Run the project
#    Open your browser and visit:
http://localhost/virtual-test-hub/
