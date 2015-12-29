File dump từ PostgreSQL (thuộc heroku server)
--------------------------------------------------
Yêu cầu: Postgresql
-----------------------------------
Sử dụng lệnh : pg_restore -d ex -U postgres database.dump 
để restore databse vào [ex]

-------------------------------
Cách 2: Sử dụng Pg Admin (Gui tool for postgresql)

1. Tạo database [name]
2. Click phải database [name] -> restore
3. Mở file .dump (chọn all file).
4. Click restore.

-------------------------
Có thể sử dụng file backup (phòng trường hợp lỗi)