# Student Achievement Monitoring Information System

## Overview

The Student Achievement Monitoring Information System is a web-based application developed to support schools in managing, monitoring, and evaluating student achievements in both academic and non-academic fields.

This system was developed as part of a bachelor's thesis project at Universitas Almuslim and is implemented using the Laravel Framework.

The application provides integrated management of students, teachers, parents, academic records, non-academic achievements, reports, and statistical dashboards.

---

## Thesis Title

**Design and Development of a Student Achievement Monitoring Information System at Madrasah Aliyah Ruhul Islam Anak Bangsa, Gue Gajah, Aceh Besar**

---

## Objectives

* Facilitate student achievement monitoring.
* Improve academic and non-academic record management.
* Support decision-making processes within the school.
* Provide real-time achievement information for teachers and parents.
* Generate comprehensive achievement reports.

---

## Key Features

### Authentication & Authorization

* Secure Login System
* Role-Based Access Control

  * Administrator
  * Teacher
  * Parent

### Master Data Management

* Student Management
* Teacher Management
* Parent Management
* Class Management
* Subject Management
* Academic Year Management

### Academic Achievement Module

* Academic Achievement Records
* Subject-Based Performance Tracking
* Student Academic Reports

### Non-Academic Achievement Module

* Competition Records
* Achievement Categories
* Achievement Levels
* Achievement Documentation

### Dashboard & Analytics

* Student Statistics
* Academic Achievement Statistics
* Non-Academic Achievement Statistics
* Achievement Monitoring Charts

### Reporting

* Student Achievement Reports
* PDF Export
* Performance Monitoring Reports

---

## System Users

### Administrator

* Manage all system data
* Manage users and permissions
* Manage student achievements
* Access reports and analytics

### Teacher

* Input student achievement data
* View achievement reports
* Monitor student progress

### Parent

* View their child's achievement information
* Monitor academic and non-academic development

---

## Technology Stack

### Backend

* PHP 8+
* Laravel 12

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

## Implemented Modules

* Dashboard
* User Management
* Teacher Management
* Parent Management
* Student Management
* Class Management
* Subject Management
* Academic Year Management
* Academic Achievement Management
* Non-Academic Achievement Management
* Statistical Reports
* PDF Report Generation

---

## Installation

Clone the repository:

```bash
git clone https://github.com/iqbalm6/monitoring-prestasi.git
```

Navigate to the project directory:

```bash
cd monitoring-prestasi
```

Install dependencies:

```bash
composer install
npm install
```

Copy the environment file:

```bash
cp .env.example .env
```

Generate application key:

```bash
php artisan key:generate
```

Configure your database settings in the `.env` file.

Run migrations and seeders:

```bash
php artisan migrate --seed
```

Start the development server:

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

## Development History

### v0.5-master-data-akademik

* Student Management
* Teacher Management
* Parent Management
* Class Management
* Subject Management
* Academic Year Management
* Academic Achievement Module

### v0.6-dashboard-statistik

* Dashboard Statistics
* Non-Academic Achievement Module
* Achievement Analytics

### Current Version

* Teacher Dashboard
* Student Achievement Reports
* PDF Export Feature
* Achievement Statistics Charts

---

## Future Enhancements

* Mobile Application Integration
* Achievement Recommendation System
* Decision Support Features
* Notification System
* Achievement Ranking System
* Parent Mobile Access

---

## Author

**IQBAL MULYANA**

## License

This project was developed for academic and research purposes.
