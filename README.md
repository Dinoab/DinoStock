# 🦖 DinoStock AI Inventory - Local Server Edition

Professional inventory management with local SQL persistence, designed to run on **XAMPP, WAMP, MAMP, or IIS**.

---

## 🛠 Local Server Installation (XAMPP/WAMP)

### 1. Database Configuration (MySQL)
1.  Start your **XAMPP Control Panel** and turn on **Apache** and **MySQL**.
2.  Open **phpMyAdmin** (usually at `http://localhost/phpmyadmin`).
3.  Click **New** and create a database named `dinostock_db`.
4.  Select the database, go to the **Import** tab, and select the `schema.sql` file provided in this project.
5.  Check `config.php`:
    - Default XAMPP: User is `root`, Password is `` (empty).
    - If you changed your MySQL password, update it in `config.php`.

### 2. Deploy Files
1.  Locate your server's web directory:
    - **XAMPP**: `C:\xampp\htdocs\`
    - **WAMP**: `C:\wamp64\www\`
    - **IIS**: `C:\inetpub\wwwroot\`
2.  Create a folder named `dinostock` inside that directory.
3.  Copy all project files (including `api.php`, `config.php`, and `index.html`) into that folder.

### 3. Access the App
Open your browser and navigate to:
`http://localhost/dinostock/`

---

## 🌟 Key Features

- **Local SQL Storage**: Real-time database persistence using MySQL.
- **PHP Backend**: Robust API bridge between React and SQL.
- **Inventory & Finance**: Track stock levels alongside Purchases, Sales, Receipts, and Payments.
- **Gemini AI**: Advanced forecasting (Requires internet connection for API calls).
- **Tabular Reports**: Professionally formatted, date-filtered, and printable business reports.

---

## 📂 Backend Structure

- `schema.sql`: Database table structures.
- `config.php`: Database connection settings.
- `api.php`: JSON API router for the frontend.
- `services/apiService.ts`: Frontend connector that communicates with the local server.

---

## 👤 Default Admin Credentials
- **User**: `dino.abdela@dinostock.ai`
- **Password**: `password123`

---

## ⚠️ Troubleshooting

- **Database Error**: Ensure MySQL is running in your control panel.
- **Empty Tables**: Ensure you imported `schema.sql`.
- **API Key**: The Gemini AI features require a valid Google AI Key in your environment or code configuration.

&copy; 2024 DinoStock AI Systems. Optimized for local infrastructure.