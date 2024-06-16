## About Excel_Manager

This is Web Application developed by Nilam Jyoti Sharma, where user can Authnticate themselves and access their own dashboard. User can upload excel file (Predefined format) and can see the Excel data in "/excel/show" route. Also then can upload another excel file with same predefined format. Then the new excel file will replace the old one and will show the updated data to the user. User can also delete the existed excel file.


## Tech Stack

1) Laravel Framework: "10.48.12"
2) Tailwind CSS (UI Styling)
3) php: "^8.1"
4) maatwebsite/excel: "^3.1"
5) Database - PostgreSQL

## Command to run the project

1) php artisan serve (To run the laravel)
2) npm run dev (For Tailwind css)
3) For PHP, Use XAMPP or add the php into Path in environment variable


## Authentication

# The routes that can be accessed by Unauthenticated users - 

"/",
"/register",
"/login"

# The routes that can be accessed by Authenticated users only -

'/dashboard',
'/logout',
'/excel/import',
'/excel/show',


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
