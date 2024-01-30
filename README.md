
---

# Petcare Taker Website

## Technologies Used

### Frontend
- **HTML:** Used for structuring the web pages.
- **CSS:** Used for styling and layout.
- **JavaScript:** Used for dynamic behavior and interactions on the client side.
- **Swiper.js:** A JavaScript library for image sliders, used for the gallery section.

### Backend
- **PHP:** Used for server-side scripting.
- **MySQL:** Used as the database management system.

## Code Explanation

### Frontend (HTML, CSS, JavaScript)

#### Responsive Design
The website is designed to be responsive using CSS media queries. This ensures that the layout adapts to different screen sizes, providing a consistent user experience across devices.

#### Swiper.js Integration
The Swiper.js library is integrated to create a responsive and interactive image slider in the gallery section. This is achieved by including the Swiper stylesheet and JavaScript files.

```html
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

<!-- Swiper JavaScript -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
```

#### Navigation
The navigation bar is created using HTML `<nav>` and `<a>` tags. The navigation links use anchor tags with corresponding IDs to enable smooth scrolling to different sections of the webpage.

```html
<nav class="navbar">
    <a href="#home">home</a>
    <!-- Other navigation links -->
</nav>
```

#### Login Form
The login form is displayed as a modal using JavaScript when the user clicks the login button. The form includes fields for email and password. Form submission is handled by PHP.

```html
<form action="" method="POST" class="login-form" id="schedule">
    <!-- Form fields -->
    <button type="submit" class="btn" onclick="openPopup()">Log in</button>
</form>
```

### Backend (PHP, MySQL)

#### Database Connection
The PHP code connects to the MySQL database using the `mysqli_connect` function. Database credentials are specified, and the connection is closed after the query execution.

```php
$con = mysqli_connect("localhost", "root", "", "pet_care");
```

#### User Authentication
The login functionality is implemented using prepared statements to prevent SQL injection. The user's email and password are retrieved from the form, and a SELECT query is executed to check if a matching record exists in the database.

```php
$stmt = $con->prepare("SELECT * FROM customer WHERE Email = ? AND Password = ?");
$stmt->bind_param('ss', $Email, $Password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    // User authenticated, session started, and redirection.
} else {
    // Login failed, redirect to registration page.
}
```

#### Session Management
Upon successful login, a session is started, and the user's email is stored in the session variable for future use.

```php
session_start();
$_SESSION['username'] = $Email;
```

### Other Sections
Other sections like About, Gallery, Animals, Pricing, and Contact are structured using HTML, and their content can be easily updated. The website follows a modular structure for ease of maintenance and updates.

---
Certainly! To create a GitHub-flavored README.md file, you can use Markdown syntax. Below is a template for the README file based on the provided information:

```markdown
# Petcare Taker Website

## Usage

1. Start your local server.

2. Open the project in a web browser by navigating to http://localhost/petcare-taker-website.

3. Explore different sections of the website.

4. Register an account or log in to access personalized features.

## Features

- User authentication (registration and login)
- Responsive design using the Swiper library for image sliders.
- Sections for Home, About Us, Gallery, Animals, Pricing, and Contact.
- Booking and appointment scheduling functionality.
- User-specific pages like My Bookings.

## Dependencies

- [Font Awesome](https://fontawesome.com/) - for icons.
- [Swiper](https://swiperjs.com/) - for image sliders.



## How to Run Locally

1. Clone the repository:

   ```bash
   git clone https://github.com/your-username/petcare-taker-website.git
   ```

2. Navigate to the project directory:

   ```bash
   cd petcare-taker-website
   ```

3. Start your local server (e.g., using [XAMPP](https://www.apachefriends.org/index.html) or [MAMP](https://www.mamp.info/)).

4. Open the project in a web browser:

   ```bash
   http://localhost/petcare-taker-website
   ```

