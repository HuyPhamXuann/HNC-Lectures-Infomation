<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Details

    Xem cấu hình chi tiết ở file composer.json


# HNC
**Mô tả dự án**<br>
Dự án này tập trung vào việc phát triển một hệ thống quản lý giáo dục sử dụng Laravel và MySQL. Mục tiêu của dự án là cung cấp một nền tảng linh hoạt và mạnh mẽ để quản lý thông tin về học sinh, giáo viên, khóa học, và các hoạt động giáo dục khác.

**Cài đặt**<br>
Sử dụng Laravel 11.* <br>
Yêu cầu hệ thống:<br>
PHP 8.1 trở lên<br>
Composer version 2.7.1 hoặc mới hơn<br>
MySQL

**Bước cài đặt**
1. Clone repository từ GitHub:
```
git clone https://github.com/HieuLeNguyen/HNC_Lecturers.git
```
2. Di chuyển vào thư mục dự án:
```
cd HNC_Lecturers
```
3. Cài đặt các dependencies thông qua Composer:
```
composer install
composer update
```
4. Sao chép file .env.example thành .env:
```
copy .env.example .env
```
5. Cấu hình file .env với thông tin cần thiết:
```
APP_NAME=HNC
...
...
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_hnc
DB_USERNAME=root
DB_PASSWORD=
```
6. Chạy migrations để tạo cấu trúc cơ sở dữ liệu:
```
php artisan migrate
```
7.cài đặt npm: 
```
npm install
> npm run dev 
````
8.cài đặt khóa key app: 
```
php artisan key:generate
```
9. Khởi động máy chủ phát triển:
```
php artisan serve
```
Truy cập ứng dụng thông qua trình duyệt web tại địa chỉ sau: **http://localhost:8000**

**Quy chuẩn**<br>
1. Quy tắc đặt tên branch:<br>
Đối với feature: `feature/user/feature-name`<br>
Đối với fix bug: `bugfix/user/bug-name`<br>
Đối với việc release: `release-version-x.x`<br>
Lưu ý:<br>
Tên feature hoặc bug viết thường không dấu, sử dụng dấu - thay thế cho dấu cách.<br>

Đối với commits: -m "Tên giải thích commit #mã task" <br>
vd: -m "add Authencation #a17"

**Tác giả**<br>
Dự án được phát triển bởi team sinh viên khoa CNTT HPC.

**Liên hệ**<br>
Nếu bạn có bất kỳ câu hỏi hoặc đề xuất nào, vui lòng liên hệ qua email nguyenhieu157380@gmail.com
/**

