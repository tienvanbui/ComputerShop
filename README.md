# ComputerShop
Bước 1: Mở Terminal và thực hiện clone dự án và vào thư mục dự án bằng câu lệnh sau: git clone https://github.com/tienvanbui/ComputerShop.git

Bước 2: cd ComputerShop

Bước 3: Chạy composer và npm để cài đặt các gói cần thiết trong dự án:

composer install,
npm install 

Bước 3: Tạo database và config database
cp .env.example .env
Bước 4:Cập nhật file env của bạn như sau:

DB_CONNECTION=mysql          
DB_HOST=127.0.0.1            
DB_PORT=3306                 
DB_DATABASE=phoneshop
DB_USERNAME=root             
DB_PASSWORD=  

Bước 4: Tạo ra key cho dự án:

-php artisan key:generate

Bước 5: Tạo ra các bảng và dữ liệu mẫu cho database

-php artisan migrate

-php artisan db:seed

Bước 6:Tạo link liên kết thư mục storage

-php artisan storage:link
-copy các floders
+ banner_images
+ img_paths
+ product_images
+ slider_images
+ thumbnails
tại đường dẫn storage/app/public vào đường dẫn public/storage