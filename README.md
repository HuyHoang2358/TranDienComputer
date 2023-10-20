## Install IDE
- Go to link to download phpstorm IDE: [Link](https://www.jetbrains.com/phpstorm/promo/?source=google&medium=cpc&campaign=APAC_en_ASIA_PhpStorm_Branded&term=phpstorm&content=604024580598&gad=1&gclid=CjwKCAjwysipBhBXEiwApJOcu_uuxG8u5UHCrBe3arybH0fVDeOlST_KOf_AQ_fHY2IZZ2pfvtlFSxoCfa4QAvD_BwE)
- Install PHP storm 
- Account for active: 
  - username: 23025005@vnu.edu.vn
  - password: Hoang68@53a
- Install Openserver: [link](https://drive.google.com/file/d/1aQw76fdDFKlDVT56rfCeqLx22WWSwBZk/view?usp=share_link)
- Download and run exe file. Recommend you should install in D:/
- Config Open Serve:
  - Run Openserver 
  - Open Settings
  - Open Modules tab
    - HTTP: Apache_2.4-PHP_8.0-8.1
    - PHP: PHP_8.1
    - MySQL/MariaDB: MySQL-5.6
    - PostgreSQL: Do not use
    - Save
  - Click Run server
- Install Composer: [link](https://getcomposer.org/download/)
  - Click into "Composer-Setup.exe" to download
  - Run exe file to install
  - Installing process, tick into add path to environment
  - In step choose PHP. Please set link to openserver/modules/php/8.1/php
  - So then continue to install for end
## Init Project
- Clone project into folder: openserve/domain/
  ```
    cd openserve/domain/ 
    git clone https://github.com/HuyHoang2358/TranDienComputer.git
  ```
- Install vendor through composer
  ``` 
    cd TranDienComputer/
    composer install
    php artisan key:generate
    php artisan cache:clear
    php artisan view:clear
  ```
- Create .env file
  - From env. example create new file .env 
  - Set DB connect information
    - DB_CONNECTION=mysql
    - DB_HOST=127.0.0.1    # Máy chủ
    - DB_PORT=3306         # Port 
    - DB_DATABASE=tran_dien_computer  # Tên cơ sở dữ liệu
    - DB_USERNAME=root     # Username đăng nhập
    - DB_PASSWORD=         # Password
  - Open Openserver, click Advanced/SQLManager to open heli SQL
  - Login session// account default is root, root or root ""
  - Create new database 
    - name: tran_dien_computer
    - collation: utf8mb4_general_ci
  - Open Openserve, click Advanced/PhPMyAdmin to open PHPMyAdmin
  - login with account same heliSQL
  - Click into tran_dien_computer database, so click to "Import" tag
  - Choose file .sql to push data into Database
- Config Domain in Openserve
  - Open Openserve
  - Go to tab settings/ Domains
  - Set configs:
    - Domain management:    Manual + AutoSearch
    - Auto Root Domain: choose the longest sentence
    - Domain folder: choose path into public folder 
      - Ex: TranDienComputer/public
    - Domain name: "trandien.th"
    - Click "Add" button
    - Click "Save" button
    - wait for openserve save and restart
- Go to browser and enter trandien.th to Open website
