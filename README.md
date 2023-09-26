# eProject-sem-1
Clone project: git clone https://github.com/hoangminhtuan1399/eProject-sem-1.git <br />
Tạo branch mới: git checkout -b [branch-name] <br />
Quy tắc đặt tên branch: [tên thành viên]-[tác dụng của branch] - VD: net-create_login_page

Trước khi làm task:
- git checkout develop: chuyển sang nhánh develop
- git pull: update code mới nhất ở nhánh develop
- git checkout -b [branch-name]
- Bắt đầu code

Sau khi code xong:
- git status: kiểm tra những file thêm/sửa/xóa
- git add [tên file]: thêm file vào commit || - git add . : thêm tất cả file vào commit
- git commit -m '[commit message]' - VD: git commit -m 'fix header layout'
- git push || - git push --set-upstream origin [branch-name]
- tạo pull request vào nhánh develop
