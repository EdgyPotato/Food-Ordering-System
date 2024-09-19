## Molek Cafe Ordering Web-based System

This project is about creating a web application for food ordering system using Laravel under the course (SECV3104 - APPLICATIONS DEVELOPMENT).

![image](https://github.com/user-attachments/assets/b5984038-e3ac-4ee2-80cc-d203b988e9f9) ![image](https://github.com/user-attachments/assets/8d60f410-70d8-4401-8498-76f757540292) ![image](https://github.com/user-attachments/assets/1d9f7981-2123-4705-9fd1-728966e054df) ![image](https://github.com/user-attachments/assets/1170f35f-f938-4ef2-9193-fcf2c590f944)


![image](https://github.com/user-attachments/assets/4b255e5a-f5ed-4ced-94bb-528538084138)


The project is supervised by Assoc. Prof. Dr. Hishammuddin bin Asmuni @ Hasmuni. Thank you for the support!

<p><s>Live demo link: https://molek-cafe.vercel.app/</s> The demo link not longer works due to PlanetScale removing Hobby Plan</p>

## Contributors

1. Tan Kai Yuan - **[GitHub](https://github.com/EdgyPotato)**
2. Heng Xing Yu - **[GitHub](https://github.com/Heng1007)**
3. Gan Jia Hui - **[GitHub](https://github.com/Ganjiahui)**

## Installation

### Prerequisites

1. Laravel
2. Node.js
3. XAMPP

### Step to Setup in localhost

1. Download & Extract this project
2. Run `composer install` & `npm install`
3. Generate a new `.env`
    1. Run `copy .env.example .env` in your IDE terminal, or do `cp .env.example .env` if you are using linux
    2. Run `php artisan key:generate` & `php artisan optimize:clear` accordingly 
4. Start both **Apache** & **MySQL** in XAMPP 
5. Generate seed by running `php artisan migrate:refresh --seed`
6. Run `npm run build`
7. Execute `php artisan serve`
8. To see the menu part, add `/?table=[num] (eg: /?table=1)` to the url
