# Student Achievement Monitoring Information System

## Overview

The Student Achievement Monitoring Information System is a web-based application designed to assist schools in managing, monitoring, and evaluating student achievements in both academic and non-academic fields.

The system was developed as part of a bachelor's thesis project at STIMIK INDONESIA and implemented using the Laravel Framework.

It provides centralized management for students, teachers, parents, classes, subjects, academic records, non-academic achievements, reports, and performance monitoring dashboards.

---

## Thesis Title

**Design and Development of a Student Achievement Monitoring Information System at Madrasah Aliyah Ruhul Islam Anak Bangsa, Gue Gajah, Aceh Besar**

---

## Objectives

* Facilitate student achievement monitoring.
* Improve management of academic and non-academic achievements.
* Support school decision-making processes.
* Provide integrated student performance information.
* Generate achievement reports automatically.
* Improve communication between school administrators, teachers, and parents.

---

## User Roles

### Administrator

* Manage students
* Manage teachers
* Manage parents
* Manage classes
* Manage subjects
* Manage academic years
* Manage academic achievements
* Manage non-academic achievements
* Access reports and statistics

### Teacher

* Monitor student achievements
* View reports
* Access student performance information

### Parent

* View their child's achievement information
* Monitor academic and non-academic development

---

## Key Features

### Authentication & Authorization

* Secure Login System
* Session Management
* Role-Based Access Control

### Dashboard

* Total Students
* Total Teachers
* Total Classes
* Academic Achievement Statistics
* Non-Academic Achievement Statistics
* Achievement Monitoring Charts

### Master Data Management

* Student Management (CRUD)
* Teacher Management (CRUD)
* Parent Management (CRUD)
* Class Management (CRUD)
* Subject Management (CRUD)
* Academic Year Management (CRUD)

### Academic Achievement Module

* Academic Score Entry
* Subject-Based Assessment
* Semester-Based Records
* Academic Performance Monitoring
* Class-Based Student Selection Workflow

### Non-Academic Achievement Module

* Competition Achievement Records
* Achievement Categories
* Achievement Levels
* Achievement Documentation

### Reporting Module

* Student Achievement Reports
* Academic Reports
* Non-Academic Reports
* PDF Export

---

## Implemented Modules

✅ Dashboard

✅ Student Management

✅ Teacher Management

✅ Parent Management

✅ Class Management

✅ Subject Management

✅ Academic Year Management

✅ Academic Achievement Management

✅ Non-Academic Achievement Management

✅ PDF Report Generation

✅ Statistical Reports

---

## System Workflow

### Student Management

Dashboard

→ Classes

→ Select Class

→ View Students

→ Add / Edit / Delete Students

### Academic Achievement Input

Dashboard

→ Academic Achievement

→ Select Class

→ Select Student

→ Input Scores

→ Save Academic Records

### Reporting

Dashboard

→ Achievement Reports

→ Select Student

→ Generate PDF Report

---

## Technology Stack

### Backend

* PHP 8+
* Laravel 13

### Frontend

* Blade Template Engine
* Bootstrap 5
* JavaScript

### Database

* MySQL

### Development Tools

* Git
* GitHub
* Composer
* Vite

---

## Installation

### Clone Repository

```bash
git clone https://github.com/iqbalm6/monitoring-prestasi.git
```

### Enter Project Directory

```bash
cd monitoring-prestasi
```

### Install Dependencies

```bash
composer install

npm install
```

### Configure Environment

```bash
cp .env.example .env
```

### Generate Application Key

```bash
php artisan key:generate
```

### Configure Database

Edit the `.env` file and set your MySQL database credentials.

### Run Migration and Seeder

```bash
php artisan migrate --seed
```

### Run Development Server

```bash
php artisan serve
```

---

## Project Structure

```text
app/
├── Http/Controllers
├── Models

database/
├── migrations
├── seeders

resources/
├── views
├── css
├── js

routes/
└── web.php
```

---

## Current Version

### v1.0.0-beta

Features included:

* Dashboard Statistics
* Class Management
* Student Management
* Teacher Management
* Parent Management
* Subject Management
* Academic Year Management
* Academic Achievement Module
* Non-Academic Achievement Module
* PDF Reporting
* Class-Based Navigation Workflow

---

## Future Enhancements

* Mobile Application Integration
* Achievement Ranking System
* Decision Support System (DSS)
* Notification System
* Parent Portal Improvements
* Student Performance Recommendation System

---

## Author

**Iqbal Mulyana**

---

## License

This project was developed for academic research and educational purposes.
