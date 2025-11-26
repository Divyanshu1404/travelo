# Travelo - Travel Agency Website

A comprehensive travel booking platform offering tour packages, real-time weather forecasts, and an interactive chatbot for customer support.

## 🌍 Features

### Core Functionality
- **Tour Packages** - Browse and book from 15+ destinations across India and international locations
- **Online Booking System** - User-friendly form to reserve trips with flexible dates
- **Admin Dashboard** - View all bookings and customer information
- **Weather Forecast** - Check real-time weather conditions for your destination
- **Interactive Chatbot** - Get instant information about packages and bookings
- **Customer Reviews** - Testimonials from satisfied travelers

### Destinations Covered
- **India**: Delhi, Goa, Varanasi, Agra, Ladakh, Manali, Kerala, Rajasthan, Haridwar, Tamil Nadu, Mumbai, Jammu & Kashmir
- **International**: Nepal, Bangladesh

### Price Range
₹5,900 - ₹21,900 per package

## 🛠️ Tech Stack

### Frontend
- **HTML5** - Semantic markup
- **CSS3** - Responsive styling with media queries
- **JavaScript** - Dynamic interactions and animations
- **jQuery** - DOM manipulation and AJAX
- **Swiper.js** - Touch-friendly sliders
- **Font Awesome** - Icon library

### Backend
- **PHP** - Server-side logic
- **MySQL** - Database management

### APIs
- **OpenWeatherMap API** - Real-time weather data

## 📁 Project Structure

```
travelo/
├── index.php / home.php      # Landing page with hero slider and featured packages
├── about.php                 # About us with client reviews
├── package.php               # Complete package listings
├── book.php                  # Booking form page
├── book_form.php             # Booking form handler (processes submissions)
├── admin.php                 # Admin dashboard (displays all bookings)
├── admin12.php               # Admin login page
├── connection.php            # Database connection
├── chatbot1.html             # Chatbot interface
├── chatbot.js                # Chatbot logic and responses
├── weather.html              # Weather forecast tool
├── styles.css                # Global styles
├── weather.css               # Weather app styles
├── css/
│   └── style.css             # Main stylesheet
├── js/
│   └── script.js             # Main JavaScript functionality
├── images/                   # Image assets (logos, destination photos, icons)
└── mysql/
    └── book_db.sql           # Database schema
```

## 🗄️ Database Schema

### Database: `book_db`

**Table: `book_form`**
| Column | Type | Details |
|--------|------|---------|
| id | INT | Primary Key, Auto Increment |
| name | VARCHAR(255) | Customer name |
| email | VARCHAR(255) | Email address |
| phone | VARCHAR(11) | Contact number |
| address | VARCHAR(255) | Home address |
| location | VARCHAR(255) | Destination |
| guests | INT | Number of travelers |
| arrivals | DATE | Check-in date |
| leaving | DATE | Check-out date |

**Table: `admins`** (for login)
- username
- password

## 🚀 Getting Started

### Prerequisites
- XAMPP or similar local server (Apache + MySQL + PHP)
- Web browser
- API Key from [OpenWeatherMap](https://openweathermap.org/api)

### Installation Steps

1. **Clone the repository**
   ```bash
   git clone https://github.com/Divyanshu1404/travelo.git
   cd travelo
   ```

2. **Setup Database**
   - Open phpMyAdmin (http://localhost/phpmyadmin)
   - Create a new database named `book_db`
   - Import `mysql/book_db.sql`
   - Create `admins` table with username and password columns
   - Add admin credentials

3. **Configure Connection**
   - Update `connection.php` if your database credentials differ:
   ```php
   $a = mysqli_connect('localhost','root','','book_db');
   ```

4. **Add Weather API Key**
   - Get a free API key from [OpenWeatherMap](https://openweathermap.org/api)
   - Replace the API key in `weather.html`:
   ```javascript
   const API_KEY = 'your-api-key-here';
   ```

5. **Deploy**
   - Move project to `htdocs` folder (XAMPP) or equivalent
   - Start Apache and MySQL services
   - Open `http://localhost/travelo` in your browser

## 📱 Pages & Navigation

### Public Pages
- **Home** - Hero slider, featured services, popular packages
- **About** - Company info, client testimonials
- **Packages** - Full catalog of all available tours
- **Book** - Booking form submission
- **Weather** - Destination weather checker
- **Chatbot** - AI-powered customer support

### Admin Pages
- **Admin Login** - Secure authentication
- **Admin Dashboard** - View all bookings and customer details

## 🎨 Key Components

### Chatbot
**File**: `chatbot1.html` + `chatbot.js`

Predefined responses for:
- Package inquiries
- Pricing information
- Booking assistance
- Destination details

**Usage**: Click the chatbot button or use "Show Questions" to see available queries

### Weather Forecast
**File**: `weather.html`

Features:
- Real-time temperature and conditions
- Wind speed and precipitation data
- UV Index and air quality
- Sunrise and sunset times

### Booking System
**Files**: `book.php` + `book_form.php`

Process:
1. User fills booking form
2. Data validated and submitted
3. Stored in MySQL database
4. Admin reviews in dashboard

## 🔐 Security Notes

⚠️ **Current Issues to Address**:
- SQL injection vulnerability in booking form (use prepared statements)
- Password stored in plain text in database
- API key exposed in client-side code

**Recommended Fixes**:
```php
// Use prepared statements instead of direct concatenation
$stmt = $conn->prepare("INSERT INTO book_form (name, email, phone, address, location, guests, arrivals, leaving) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssss", $name, $email, $phone, $address, $location, $guests, $arrivals, $leaving);
```

## 📧 Contact Information

**Location**: Ghaziabad, Delhi NCR - 12415

**Phone**: 
- +880-1517-089144
- +111-2222-333333

**Email**: manishkusingh35@gmail.com

**Follow Us**:
- LinkedIn
- Facebook
- Instagram
- Twitter

## 👨‍💻 Developer

**Created by**: Mr. Manish Kumar Singh

## 📝 License

All rights reserved © 2024

## 🤝 Contributing

Contributions are welcome! Feel free to submit issues and pull requests.

## 📞 Support

For support or inquiries, contact the admin panel or use the chatbot feature on the website.

---

**Last Updated**: November 2024
**Version**: 1.0
