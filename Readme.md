# PageFrame - Easy Landing Page Framework

PageFrame is a lightweight PHP framework designed to help you create effective landing pages with ease. With PageFrame, you can manage all the data you want to display on your landing page, such as email addresses, phone numbers, and more, in different variables. This allows you to update and customize your landing page content effortlessly.

## Features

- **Variable-based Content:** Store different types of content in variables for easy management and customization.

- **Simplified Design:** Create stylish landing pages with a clean and straightforward design.

- **Customization:** Customize your landing page by simply modifying variables, making it easy to update contact information or other details.

## Getting Started

### Installation

To get started with PageFrame, follow these steps:

1. Install Composer (if not already installed): [Composer Installation](https://getcomposer.org/doc/00-intro.md)

2. Create a new PageFrame project using Composer:

   ```bash
   composer create-project ajay/page-frame
   ```

3. Start building your landing page by modifying the variables in the framework.

### Usage

1. Open the `public/index.php` file in your project directory.

2. Update the variables in the file to reflect the content you want on your landing page. For example:

   ```php
   $email = "contact@example.com";
   $phone = "+1 (123) 456-7890";
   // Add more variables as needed
   ```

3. Customize the HTML and CSS in the `public/index.php` file to match your desired landing page design.

4. Save your changes.

5. Access your landing page by opening it in a web browser.

## Example

Here's an example of how you can use PageFrame to create a simple landing page:

```php
<?php
// public/index.php

$email = "contact@example.com";
$phone = "+1 (123) 456-7890";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Landing Page</title>
</head>
<body>
    <header>
        <h1>Welcome to My Landing Page</h1>
    </header>
    <main>
        <p>Contact us at:</p>
        <ul>
            <li>Email: <?php echo $email; ?></li>
            <li>Phone: <?php echo $phone; ?></li>
        </ul>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Company</p>
    </footer>
</body>
</html>
```

## Contributing

If you'd like to contribute to PageFrame, please feel free to open issues, submit pull requests, or reach out to the project maintainers.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Acknowledgments

- PageFrame was created by [Your Name].

## Contact

If you have any questions or feedback, you can reach us at [your@email.com].

---

Replace `[Your Name]` and `[your@email.com]` with your name and contact information. Additionally, you can expand the README to include more details about the framework, its structure, and advanced usage instructions if necessary.