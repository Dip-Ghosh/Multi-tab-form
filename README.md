## Configuration
- **Language :** **PHP**
- **Framework :** **Laravel**
- **IDE :** **PHPStorm**
- **OS :** **Ubuntu 20.04**
- **Server :** **Apache**
- **PHP version : 7.4**
- **Laravel version : 8**
- **Database :** **MySQL**
- **MySQL version : 8.0.27**
- **Composer Version : 2.1.9**

## Installation
- **Task 1 : welcome Blade file and controller UserController**
- **Task 2 : Check controller/api/v1/userController for generating token using jwt**
- **Task 3 : Cannot solve the task**
- **Task 4 : Check the FetchDataFromWebsite  inside Controller**
- **Task 5 : can get the update event on Database folder named update Event 
   and  you can also check the event in app/Console/Commands/everyMinutes for command  and kernel for scheduler 
   and run php artisan schedule:run**

## API Documentation
- **URL : http://127.0.0.1:8000/api/v1/token/generate**
- **user_name : Dip Ghosh**
- **password : 123456**
- **ip_address :get ip address from request**
- **Method : POST**
- **Content-Type : application/json**
- **Body :** 
- **{
    **"user_name": "Dip Ghosh"**,
    **"password": "123456"**
}**
- **Response :
- **"headers": {**
  **"Accept":** "application/json",
  **"api_token":** "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJuYW1lIjoiRGlwIiwicGFzc3dvcmQiOiIxMjM0NTYiLCJpcF9hZGRyZXNzIjoiMTI3LjAuMC4xIn0.48vzQJcLDzrroRHy3F43Zpl9cl-LqDm-Z1bPVTbhGYk"
  **}**
**
