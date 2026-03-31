# Laravel Admin Starter

A professional, full-width Laravel administrative dashboard template featuring a modern UI, edge-to-edge layout, and robust User Management.

## 🚀 Features

- **Extreme Full-Width Layout**: Optimized for large screens with a true edge-to-edge responsive design.
- **Admin Dashboard**: Real-time statistics and recent activity overview.
- **User Management (CRUD)**: Complete module to Create, Read, Update, and Delete users.
- **DataTables Integration**: Searchable, sortable, and paginated tables for efficient data handling.
- **Modern UI Components**: Custom-styled forms, cards, and sidebar navigation using Inter/Roboto typography.
- **Clean Architecture**: Built on Laravel 11 and Vite with a focused, minimalist backend.

## 🛠️ Technology Stack

- **Framework**: [Laravel 11](https://laravel.com/)
- **Frontend**: Blade, Vanilla CSS (Premium Custom Styles)
- **Tables**: [DataTables.net](https://datatables.net/)
- **Icons**: [Font Awesome 6](https://fontawesome.com/)
- **Fonts**: Inter & Roboto (via Google Fonts)

## 📦 Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/Raju190394/laravel_admin_starter.git
   cd laravel_admin_starter
   ```

2. **Install dependencies**:
   ```bash
   composer install
   npm install
   npm run build
   ```

3. **Configure Environment**:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Database Setup**:
   Configure your database in `.env` and run:
   ```bash
   php artisan migrate --seed
   ```

5. **Start Server**:
   ```bash
   php artisan serve
   ```

## 🔐 Test Credentials

Use the following credentials to access the admin panel:

- **Email**: `admin@test.com`
- **Password**: `password`

---

Developed with Vrikshansh Technologies for professional web administrative tools.
