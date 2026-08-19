# PHP Registration Form

A clean, modern, and fully responsive registration form built with **PHP** and **CSS**.

This project includes both **client-side** (HTML5) and **server-side** (PHP) validation for a complete user registration experience.

---

## Features

- Beautiful and modern UI with Poppins font
- Fully responsive design (mobile-friendly)
- Server-side form validation with PHP
- Input sanitization (`trim`, `stripslashes`, `htmlspecialchars`)
- Email validation using `filter_var`
- Required fields: Name, Email, Phone, Gender, Address, City, Region, Postcode
- Gender selection (Male / Female / Prefer not to say)
- Birth date picker
- Country dropdown
- Clean error messages displayed under each field
- Sticky form values after submission (user doesn't lose data on error)

---

## Demo / Preview

The form has a purple gradient background with a clean white card in the center.  
It works perfectly on both desktop and mobile devices.

---

## Technologies Used

- **HTML5**
- **CSS3** (Flexbox + Media Queries)
- **PHP** (Form handling & validation)
- Google Fonts (Poppins)

---

## How to Run Locally

1. Make sure you have a local PHP server (XAMPP, WAMP, Laragon, or PHP built-in server).

2. Clone the repository:

```bash
git clone https://github.com/salehsarlak/php-registration-form.git
```

3. Place the project folder inside your web server directory (`htdocs` / `www`).

4. Open your browser and go to:

```
http://localhost/php-registration-form/
```

Or if using PHP built-in server:

```bash
php -S localhost:8000
```

Then visit: `http://localhost:8000`

---

## Project Structure

```
php-registration-form/
│
├── index.php          # Main form + PHP validation logic
├── style.css          # All styling and responsive rules
└── README.md          # Project documentation
```

---

## Form Fields

| Field          | Type     | Validation                          |
|----------------|----------|-------------------------------------|
| Full Name      | Text     | Required                            |
| Email          | Email    | Required + valid email format       |
| Phone Number   | Number   | Required                            |
| Birth Date     | Date     | Optional                            |
| Gender         | Radio    | Required                            |
| Address        | Text     | Required                            |
| Country        | Select   | Optional                            |
| City           | Text     | Required                            |
| Region         | Text     | Required                            |
| Postcode       | Text     | Required                            |

---

## Notes / Future Improvements

- Currently the form only validates data (no database storage yet).
- You can easily connect it to MySQL / PDO to save user data.
- Consider adding password fields and confirmation for a full registration system.
- CSRF protection and more advanced security measures can be added later.

---

## Author

**Saleh Sarlak**  
Web Designer & WordPress Developer  
Founder of [Tarhfam](https://tarhfam.ir)

- GitHub: [salehsarlak](https://github.com/salehsarlak)
- Location: Khomein, Iran

---

## License

This project is open source and available under the [MIT License](LICENSE).
