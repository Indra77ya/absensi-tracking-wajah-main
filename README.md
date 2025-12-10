# Face Recognition Attendance System

A Laravel-based employee attendance system using face recognition technology. This system allows for contactless attendance tracking, employee management, and attendance reporting.

## Features

- Face recognition for employee attendance
- Employee management (add, edit, delete)
- Admin dashboard with attendance reports
- Real-time attendance tracking
- Secure authentication

## Requirements

- PHP 8.2 or higher
- Composer
- Node.js and NPM
- MySQL
- Web camera for face recognition

## Installation

1. Clone the repository
```bash
https://github.com/Indra77ya/absensi-tracking-wajah-main.git
```

2. Navigate to the project directory
```bash
cd absensi-tracking-wajah
```

3. Install PHP dependencies
```bash
composer install
```

4. Install JavaScript dependencies
```bash
npm install
```

5. Create and configure your .env file
```bash
cp .env.example .env
php artisan key:generate
```

6. Configure your database in the .env file

7. Run migrations
```bash
php artisan migrate
```

8. Compile assets
```bash
npm run build
```

9. Start the development server
```bash
php artisan serve
```

## Usage

### 1. Accessing the Admin Dashboard

To use the system, you must first log in to the admin dashboard. The project uses a separate authentication system for administrators and does not come with a default admin account.

#### Create an Admin Account

You need to create an admin account manually using Laravel Tinker.

1.  Open your terminal in the project root and run the following command:
    ```bash
    php artisan tinker
    ```

2.  Inside the Tinker shell, execute the following PHP code. This will create a new entry in the `admins` table.
    ```php
    // You can customize the name, email, and password.
    use App\Models\Admin;
    use Illuminate\Support\Facades\Hash;

    Admin::create([
        'name' => 'Super Admin',
        'email' => 'admin@example.com',
        'password' => Hash::make('password'),
    ]);
    ```

3.  Once the user is created, you can log in at **`/admin/login`**. Use the credentials you just created (e.g., email: `admin@example.com`, password: `password`).

### 2. System Workflow

*   **Admin Panel**: After logging in, you can manage employees, departments, and view attendance reports. The most important first step is to add employees and capture their face data.
*   **Attendance Page**: Employees can visit the main page (`/attendance`) to clock in or clock out using the web camera for face recognition.

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
