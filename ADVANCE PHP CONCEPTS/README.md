# PHP Programs Collection

This repository contains a collection of PHP programs demonstrating various programming concepts and functionalities. Each program is designed to showcase different aspects of PHP programming, from basic string manipulation to object-oriented programming.

## Programs Overview

### 1. ReverseWords.php
A utility function that reverses each word in a given sentence while maintaining the word order.
```php
reverseWords("Hello World") // Output: "olleH dlroW"
```

### 2. setCookieAndGreet.php
A web form implementation that demonstrates cookie handling in PHP:
- Sets a username cookie when submitted
- Displays a greeting if the cookie exists
- Shows a form for username input if no cookie is present
- Cookie duration: 1 hour

Example Code:
```php
if (isset($_COOKIE['username'])) {
    echo "Hello, " . $_COOKIE['username'] . "!";
} else {
    // Show form for username input
}
```

### 3. sortArrayAndSum.php
Array manipulation program that:
- Sorts an array in descending order
- Calculates the sum of all elements
- Displays both the sorted array and its sum

Example Usage:
```php
sortAndSum([3, 1, 4, 1, 5, 9]);
// Output:
// Array in Descending Order: 9, 5, 4, 3, 1, 1
// Sum: 23
```

### 4. VehicleCarInheritance.php
Demonstrates Object-Oriented Programming concepts:
- Class inheritance with Vehicle (parent) and Car (child) classes
- Constructor inheritance
- Method overriding
- Property inheritance
- Basic object instantiation and method calling

Example Implementation:
```php
$myCar = new Car("Toyota", "Camry", "Gasoline");
$myCar->displayInfo();
// Output:
// Make: Toyota
// Model: Camry
// Fuel Type: Gasoline
```

### 5. MathOperations.php
Advanced PHP class demonstrating:
- Method overloading using PHP's `__call` magic method
- Dynamic method handling
- Array operations with varying arguments
- Supports three operations:
  - Addition
  - Subtraction
  - Multiplication

Example Usage:
```php
$math = new MathOperations();
echo $math->add([1, 2, 3]);       // Output: 6
echo $math->multiply([2, 3, 4]);  // Output: 24
```

### 6. mergeAndSortArrays.php
Array operations utility that:
- Merges two arrays
- Removes duplicates
- Sorts the resulting array in ascending order

Example Usage:
```php
$array1 = [1, 2, 3, 4, 5];
$array2 = [4, 5, 6, 7, 8];
// Result after merge, unique, and sort:
// Array: [1, 2, 3, 4, 5, 6, 7, 8]
```

## Installation

1. Ensure you have PHP installed on your system:
   ```bash
   php -v  # Check PHP version
   ```

2. Clone this repository to your local machine:
   ```bash
   git clone https://github.com/yourusername/php-programs.git
   cd php-programs
   ```

3. Place the files in your web server's directory:
   - For Apache: `/var/www/html/` or `htdocs/`
   - For Nginx: `/usr/share/nginx/html/`

## Usage

### Running the Programs

Each program can be executed independently through a PHP-enabled web server:

```bash
php program_name.php
```

For web-based programs (like setCookieAndGreet.php), access them through your web browser:
```
http://localhost/path/to/program/setCookieAndGreet.php
```

### Command Line Examples

1. Running ReverseWords.php:
```bash
php ReverseWords.php
```

2. Running array operations:
```bash
php sortArrayAndSum.php
php mergeAndSortArrays.php
```

## Requirements

- PHP 7.0 or higher
- Web server (Apache/Nginx) for cookie-based programs
- Basic understanding of PHP syntax and concepts

### PHP Extensions Required
- Standard PHP Library (SPL)
- JSON extension
- Session handling enabled

## Development

### Code Style
- Follow PSR-12 coding standards
- Use meaningful variable and function names
- Include comments for complex logic
- Implement proper error handling

### Contributing
1. Fork the repository
2. Create a feature branch
3. Commit your changes
4. Push to the branch
5. Create a Pull Request

## Notes

- All programs include example usage within their source code
- Programs are commented for better understanding
- Error handling may need to be enhanced for production use
- Test cases should be added for production deployment

## Security Considerations

### General Security
- Keep PHP and all dependencies up to date
- Use proper error handling and logging
- Implement input validation and sanitization

### Web Security
- The cookie-based program (setCookieAndGreet.php) should implement proper input validation in production
- Consider implementing CSRF protection for forms
- Sanitize all user inputs before processing
- Use HTTPS in production environments
- Implement proper session handling

### Best Practices
- Validate all user inputs
- Escape output to prevent XSS
- Use prepared statements for database operations
- Implement proper access controls

## Troubleshooting

Common Issues:
1. Permission errors:
   ```bash
   chmod 755 *.php  # Set proper file permissions
   ```

2. PHP not found:
   ```bash
   which php  # Locate PHP installation
   ```

3. Web server configuration:
   - Check Apache/Nginx configuration files
   - Verify PHP module is enabled
   - Check error logs

## License

This collection of PHP programs is available under the MIT License.

### MIT License

Copyright (c) [year] [fullname]

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.