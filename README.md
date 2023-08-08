## Portfolio Website README
This repository contains code for a personal portfolio website. The website is designed to showcase the work and information of 
Dilaxshini Dunstan, a front-end developer. The website includes home, about, portfolio, and contact information sections.

## Table of Contents
- Getting Started
- Website Structure
- Styling
- Contact Form
- Database Interaction

## Getting Started
To use this code, follow these steps:
1. Clone the repository to your local machine.
2. Open the `index.html` file in your preferred web browser.

## Website Structure
The website consists of the following sections:
- Home : Displays a welcome message along with an image.
- About: Provides a brief introduction of the developer's background and skills.
- Portfolio: Showcases a collection of projects.
- Contact: Offers a contact form and contact details.

## Styling
The website styling is defined in the HTML file's `<style>` section. It utilizes CSS for layout, typography, and design. 
The styling focuses on maintaining a clean, responsive, and visually appealing design.

## Contact Form
The contact form is provided under the "Contact" section. Users can enter their name, email, and message, and upon submitting the form, 
the data will be sent to the server for processing.

## Database Interaction
The PHP script `contact.php` is responsible for interacting with the MySQL database to store the contact form submissions. 
The script performs the following steps:
1. Retrieves the submitted form data (name, email, message) using the `$_POST` superglobal.
2. Establishes a connection to the MySQL database using the provided credentials.
3. Prepares an SQL statement to insert the form data into the `contact_form` table.
4. Binds the form data to the SQL statement.
5. Executes the SQL statement to insert the data into the database.
6. Provides feedback to the user by echoing a success message.
  
## Feedback and Improvements
Feel free to provide any feedback or make improvements to the code. This portfolio website can be extended with additional sections, 
improved styling, and enhanced functionality.
